<?php
define('BASE_DIR', '/phpcl_jumpstart_php_7_4/');
error_reporting(E_ALL);
ini_set('display_errors', 1);

function execDock($num, $runFile)
{
    $th = '<th style="width:50%;vertical-align:top;background-color:#6BCCEB;border-bottom:thin solid gray;">';
    $td = '<td style="width:50%;vertical-align:top;background-color:#E6F2F6;">';
    try {
        $cmdTh = 'docker exec -it jumpstart_php7' . $num . ' php --version';
        $cmdTd = 'docker exec -it jumpstart_php7' . $num . ' php /srv/jumpstart/phpcl_jumpstart_php_7_4/' . $runFile;
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
$output = '<a href="' . BASE_DIR . '">BACK</a><br><br>' . PHP_EOL;
$contents = [];
if (file_exists($fullName)) {
    $output .= '<table width="100%" style="border: thin solid black;">' . PHP_EOL;
    $output .= '<tr><td style="width:50%;vertical-align:top;border-right: thin solid black;">' . PHP_EOL;
    $output .= highlight_file($fullName, TRUE);
    $output .= '</td>' . PHP_EOL;
    // run script using PHP 7.4 and 7.3
    $contents['php73'] = execDock(3, $runFile);
    $contents['php74'] = execDock(4, $runFile);
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
