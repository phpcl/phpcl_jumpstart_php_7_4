<?php
class IterTest implements IterInterface 
{
    public function stringify(iterable $it)
    {
        return implode(',', iterator_to_array($it)) . "\n";
    }
}
