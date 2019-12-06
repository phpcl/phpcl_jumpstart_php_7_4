<?php
$output = '';
$list = glob(__DIR__ . '/*.php');
foreach ($list as $file) {
    $name = basename($file);
    $output .= '<br><a href="/run.php?file=' . $name . '">' . $name . '</a>' . PHP_EOL;
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