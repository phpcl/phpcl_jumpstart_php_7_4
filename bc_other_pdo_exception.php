<?php
try {
    $pdo = new PDO('sqlite:./jumpstart.db');
    $pdo->setAttribute(PDO::SQLITE_ATTR_EXTENDED_RESULT_CODES, TRUE);
    $str = serialize($pdo);
} catch (Throwable $t) {
    echo get_class($t) . ':' . $t->getMessage() . "\n";
    var_dump($pdo->errorInfo());
    echo "\n";
}
