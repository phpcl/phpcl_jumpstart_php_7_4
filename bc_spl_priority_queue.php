<?php
// example taken from: https://www.php.net/manual/en/class.splpriorityqueue.php

class PQtest extends SplPriorityQueue
{
    public function compare($p1, $p2) { return $p1 <=> $p2; }
}

$objPQ = new PQtest();
$objPQ->insert('A',3);
$objPQ->insert('B',6);
$objPQ->insert('C',1);
$objPQ->insert('D',2);
echo "\nCount: " . $objPQ->count() . PHP_EOL;

try {
    //mode of extraction
    $objPQ->setExtractFlags(0);

    //Go to TOP
    $objPQ->top();

    while($objPQ->valid()){
        var_dump($objPQ->current());
        echo PHP_EOL;
        $objPQ->next();
    }
} catch (Throwable $t) {
    echo get_class($t) . PHP_EOL;
    echo $t->getMessage();
}
