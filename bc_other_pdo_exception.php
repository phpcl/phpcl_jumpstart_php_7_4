<?php
try {
    $pdo = new PDO('sqlite:./jumpstart.db');
    $str = serialize($pdo);
} catch (PDOException $e) {
    echo "PHP version older than 7.4\n";
} catch (Exception $e) {
    echo "PHP version 7.4\n";
}
