 <?php
    function addAll($Array) {
        $total = 0;
        foreach ($Array as $value) {
            $total += $value;
        }
        array_shift($Array);
        if (!empty($Array)) {
            $total += addAll($Array);
        }
        return $total;
    }

    $Array = [1,1,1,1,1]; //5+4+3+2+1=15
    echo addAll($Array);
?>
