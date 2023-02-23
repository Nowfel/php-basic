<?php 
function stopWatch() {
    $count = 0; 
    return function() use (&$count) { 
        $count++;
        return $count;
    };
}

$clock1 = stopWatch(); 
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