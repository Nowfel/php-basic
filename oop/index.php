<?php 
function stopWatch() {
    $count = 0; // PRIVATE VARIABLE
    return function() use (&$count) { // CLOSURE
        $count++;
        return $count;
    };
}

$clock1 = stopWatch(); // ENCAPSULATION
echo $clock1() . "\n";
echo $clock1() . "\n";
echo $clock1() . "\n";
echo $clock1() . "\n";

$clock2 = stopWatch();
echo $clock2() . "\n";
echo $clock2() . "\n";
echo $clock1() . "\n";
echo $clock2() . "\n";

?>