<?php
$obj     = new ArrayObject(['A','B','C']);
$reflect = new ReflectionObject($obj);

// cannot serialize
try {
    $str = serialize($reflect);
} catch (Throwable $t) {
    echo get_class($t) . ':' . $t->getMessage() . "\n";
}

// pre-defined constant values have changed:
// see 
echo "IS_STATIC: \t\t" . ReflectionMethod::IS_STATIC . "\n";
echo "IS_PUBLIC: \t\t" . ReflectionMethod::IS_PUBLIC . "\n";
echo "IS_PROTECTED: \t\t" . ReflectionMethod::IS_PROTECTED . "\n";
echo "IS_PRIVATE: \t\t" . ReflectionMethod::IS_PRIVATE . "\n";
echo "IS_ABSTRACT: \t\t" . ReflectionMethod::IS_ABSTRACT . "\n";
echo "IS_FINAL: \t\t" . ReflectionMethod::IS_FINAL . "\n";
echo "IS_IMPLICIT_ABSTRACT: \t" . ReflectionClass::IS_IMPLICIT_ABSTRACT . "\n";
echo "IS_EXPLICIT_ABSTRACT: \t" .ReflectionClass::IS_EXPLICIT_ABSTRACT . "\n";
echo "IS_DEPRECATED: \t\t" . ReflectionFunction::IS_DEPRECATED . "\n";
