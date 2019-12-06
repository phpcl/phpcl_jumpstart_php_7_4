<?php
class Test
{
    public string   $name;
    public DateTime $date;
    public int      $bal;
    public function __construct(array $params)
    {
        $list = get_object_vars($this);
        foreach ($list as $name => $value)
            $this->$name = $params[$name] ?? NULL;
    }
}

// works
$test = new Test(['name' => 'Doug Bierer', 'date' => new DateTime(), 'bal'  => 99.99]);
var_dump($test);

// doesn't work
try {
    $test = new Test(['name' => 'Doug Bierer', 'date' => '2020-06-06', 'bal'  => 99.99]);
    var_dump($test);
} catch (Throwable $t) {
    echo get_class($t) . ':' . $t->getMessage();
}


