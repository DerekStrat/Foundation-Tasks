
<?php
// Task: Write a program that will start at 0 and output the fibonacci sequence up to 34
function loopFibonacci(){
    $Total = 0;
    $Value1 = 0;
    $Value2 = 1;
    while ($Total <= 3000000) {
        if ($Value1 == 0)
        print "$Value1,$Value2";
        else
        print ",$Value2";
        $Total = $Value1 + $Value2;
        $Value1 = $Value2;
        $Value2 = $Total;
    }
}

function recursiveFibonacci($Value1, $Value2) {
    if ($Value1 == 0)
    print "$Value1,$Value2";
    else
    print ",$Value2";
    $Total = $Value1 + $Value2;
    $Value1 = $Value2;
    $Value2 = $Total;
    if ($Total <= 34) 
    recursiveFibonacci($Value1, $Value2);
}

echo loopFibonacci() . "<br>";
echo recursiveFibonacci(0,1);
?>