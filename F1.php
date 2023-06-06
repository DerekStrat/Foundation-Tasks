<?php
// Check Array if elements are valid
    function checkArray($Array) {
        foreach ($Array as $element) {
            if (!is_int($element) XOR is_float($element))
            return true;
        }
        return false;
    }
// function with loop
    function addAllLoop($Array) {
        $Sum = 0;
        if (checkArray($Array))
        exit("Wrong elements in array.");
        while (!empty($Array)) {
            $LoopTotal = 0;
            foreach ($Array as $Number) {
                $LoopTotal += $Number;
            }
            array_shift($Array);
            $Sum += $LoopTotal;
        }
        return $Sum;
    }

// function with recursion
    function addAllRecur($Array) {
        if (checkArray($Array))
        exit("Wrong elements in array.");
        $total = 0;
        foreach ($Array as $value) {
            $total += $value;
        }
        array_shift($Array);
        if (!empty($Array)) {
            $total += addAllRecur($Array);
        }
        return $total;
    }

    $Array = [1,1,1,1,1]; //5+4+3+2+1=15
    echo addAllLoop($Array) . "<br>";
    echo addAllRecur($Array);
?>