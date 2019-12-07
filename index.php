<?php
// Directions:
// 1. Start the docker container running PHP 7.4
// 2. Start the docker container running PHP 7.3
// 3. In this directory run `php -S localhost:8888`
define('REPO', 'phpcl_jumpstart_php_7_4');
$remote = (strpos($_SERVER['REQUEST_URI'], REPO) !== FALSE);
$exec   = ($remote) ? 'execRemote' : 'execDock';
$path   = ($remote) ? REPO : '/';
$output = '';
$list = glob(__DIR__ . '/*.php');
foreach ($list as $file) {
    $name = basename($file);
    $output .= '<br><a href="run.php?file=' . $name . '">' . $name . '</a>' . PHP_EOL;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>PHP-CL JumpStart:PHP 7.4</title>
</head>
<body>
    <table>
        <tr>
            <td><?= $output; ?></td>
            <td><?php phpinfo(); ?></td>
        </tr>
    </table>
</body>
</html>
