<?php
function run($stmt, $data)
{
    $stmt->execute([$data]);
    $result = var_export($stmt->fetchAll(PDO::FETCH_ASSOC),TRUE);
    return $result . "\n";
}
    
$opt = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
try {
    $pdo = new PDO('sqlite:./jumpstart.db', NULL, NULL, $opt);
    $sql = 'SELECT * FROM test WHERE title=CONCAT("CTO",??)';
    $stmt = $pdo->query($sql);
    var_dump($stmt->fetchAll(PDO::FETCH_ASSOC));
} catch (Throwable $t) {
    echo get_class($t) . ':' . $t->getMessage();
}

