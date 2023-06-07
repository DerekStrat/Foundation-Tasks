<?php
// Task: Write a program that will start at 0 and output the fibonacci sequence up to 34
function loopFibonacci($MaxFib) {
    $SumValuesInt = 0;
    $Value1Int = 0;
    $Value2Int = 1;
    while ($SumValuesInt <= $MaxFib) {
        if ($Value1Int == 0) {
            print "$Value1Int,$Value2Int";
        }
        else {
            print ",$Value2Int";
        }
        $SumValuesInt = $Value1Int + $Value2Int;
        $Value1Int = $Value2Int;
        $Value2Int = $SumValuesInt;
    }
}

function recursiveFibonacci($Value1Int, $Value2Int, $MaxFib) {
    if ($Value1Int == 0) {
        print "$Value1Int,$Value2Int";
    }
    else {
        print ",$Value2Int";
    }
    $SumValuesInt = $Value1Int + $Value2Int;
    $Value1Int = $Value2Int;
    $Value2Int = $SumValuesInt;
    if ($SumValuesInt <= $MaxFib) {
        recursiveFibonacci($Value1Int, $Value2Int, $MaxFib);
    }
}

echo loopFibonacci(34) . "<br>";
echo recursiveFibonacci(0, 1, 34);
?>