<?php
define('REPO', 'phpcl_jumpstart_php_7_4');
error_reporting(E_ALL);
ini_set('display_errors', 1);

// init vars
$remote = (strpos($_SERVER['REQUEST_URI'], REPO) !== FALSE);
$exec   = ($remote) ? 'execRemote' : 'execDock';
$path   = ($remote) ? '/' . REPO . '/' : '/';

function execDock($num, $runFile)
{
    $cmdTh = 'docker exec -it jumpstart_php7' . $num . ' php --version';
    $cmdTd = 'docker exec -it jumpstart_php7' . $num . ' php /srv/jumpstart/phpcl_jumpstart_php_7_4/' . $runFile;
    return doExec($cmdTh, $cmdTd);
}

function execRemote($runFile)
{
    $cmdTh = 'php --version';
    $cmdTd = 'php ' . $runFile;
    return doExec($cmdTh, $cmdTd);
}

function doExec($cmdTh, $cmdTd)
{
    $th = '<th style="width:50%;vertical-align:top;background-color:#6BCCEB;border-bottom:thin solid gray;">';
    $td = '<td style="width:50%;vertical-align:top;background-color:#E6F2F6;">';
    try {
        $th .= substr(shell_exec($cmdTh), 0, 9) . PHP_EOL;
        $td .= '<pre>' . shell_exec($cmdTd) . '</pre>' . PHP_EOL;
    } catch (Throwable $t) {
        $td .= get_class($t) . ':' . $t->getMessage();
    }
    $th .= '</th>' . PHP_EOL;
    $td .= '</td>' . PHP_EOL;
    return ['th' => $th, 'td' => $td];
}

$runFile  = $_GET['file'] ?? 'index.php';
$fullName = __DIR__ . '/' . $runFile;
$output = '<a href="' . $path . '">BACK</a><br><br>' . PHP_EOL;
$contents = [];
if (file_exists($fullName)) {
    $output .= '<table width="100%" style="border: thin solid black;">' . PHP_EOL;
    $output .= '<tr><td style="width:50%;vertical-align:top;border-right: thin solid black;">' . PHP_EOL;
    $output .= highlight_file($fullName, TRUE);
    $output .= '</td>' . PHP_EOL;
    // run script using PHP 7.4 and 7.3
    $contents['php73'] = $exec(3, $runFile);
    $contents['php74'] = $exec(4, $runFile);
    $output .= '<td style="width:50%;vertical-align:top;">' . PHP_EOL;
    $output .= '<table width="100%" height:"100%">' . PHP_EOL;
    $output .= '<tr>' . $contents['php73']['th'] . '</tr>' . PHP_EOL;
    $output .= '<tr>' . $contents['php73']['td'] . '</tr>' . PHP_EOL;
    $output .= '<tr>' . $contents['php74']['th'] . '</tr>' . PHP_EOL;
    $output .= '<tr>' . $contents['php74']['td'] . '</tr>' . PHP_EOL;
    $output .= '</table>' . PHP_EOL;
    $output .= '</td>' . PHP_EOL;
    $output .= '</tr></table>' . PHP_EOL;
} else {
    header('Location: ' . BASE_DIR);
    exit;
}
echo $output;
echo PHP_EOL;
