<?php
define('BASE_DIR', '/phpcl_jumpstart_php_7_4/');
error_reporting(E_ALL);
ini_set('display_errors', 1);
$runFile  = $_GET['file'] ?? 'index.php';
$fullName = __DIR__ . '/' . $runFile;
echo '<a href="' . BASE_DIR . '">BACK</a><br><br>' . PHP_EOL;
if (file_exists($fullName)) {
    highlight_file($fullName);
    echo '<hr>';
    try {
        echo '<pre>';
        include $fullName;
        echo '</pre>';
    } catch (Throwable $t) {
        echo '<br>' . $t->getMessage();
    }
} else {
    header('Location: ' . BASE_DIR);
    exit;
}
echo PHP_EOL;
