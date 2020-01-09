<?php
$csv = new SplFileObject('test.csv', 'r');
$val = [];
while ($row = $csv->fgetcsv()) $val['default'][] = $row;
$csv->rewind();
while ($row = $csv->fgetcsv(',','"','')) $val['none'][] = $row;
foreach ($val as $key => $sub) {
    echo $key . ':' . "\n";
    foreach ($sub as $row) {
        echo "\t" . implode("\t",$row) . "\n";
    }
}
