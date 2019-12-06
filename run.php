<?php
$runFile  = $_GET['file'] ?? 'index.php';
$fullName = __DIR__ . '/' . $runFile;
echo '<a href="/">BACK</a><br>' . PHP_EOL;
if (file_exists($fullName)) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    highlight_file($fullName);
    echo '<hr>';
    try {
        include $fullName;
    } catch (Throwable $t) {
        echo '<br>' . $t->getMessage();
    }
} else {
    header('Location: /');
    exit;
}
