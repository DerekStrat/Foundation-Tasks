
    <?php
    // Task: Write a program that will start at 0 and output the fibonacci sequence up to 34
    function loopFibonacci(){
        $total = 0;
        $Value1 = 0;
        $Value2 = 1;
        for ($n = 0; $n != 8; $n++) {
            $total = $Value1 + $Value2;
            $Value1 = $Value2;
            $Value2 = $total;
        }
        print $total;
    }

    function recursiveFibonacci($Value1, $Value2) {
        $total = $Value1 + $Value2;
        $Value1 = $Value2;
        $Value2 = $total;
        if ($total <= 34) {
            recursiveFibonacci($Value1, $Value2);
            if ($total == 34) {
                print $total;
            }
        }
       
    }

    echo loopFibonacci();
    echo recursiveFibonacci(0,1);
    ?>