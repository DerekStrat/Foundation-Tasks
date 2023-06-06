<?php
class ItemOwners {
public static function groupByOwners($ItemsArr) {
    #print_r($ItemsArr);
    if (!empty($ItemsArr)) {
        $NamesArray = array_unique($ItemsArr);
        $ReturnArray = array();
        foreach ($NamesArray as $element) {
            $EmptyArray = array();
            reset($ItemsArr);
            while ($Name = current($ItemsArr)) {
                if ($Name == $element) {
                    array_push($EmptyArray, key($ItemsArr));
                }
                next($ItemsArr);
            }
            $ReturnArray[$element] = $EmptyArray;
        }
        return $ReturnArray;
    }
    else
    return null;
}
}

$ItemsArr = array(
"Baseball Bat" => "John",
"Golf ball" => "Stan",
"Tennis Racket" => "John",
"Cricket Bat" => "Stan",
"Cricket Bat" => "John",
"Rugby Ball" => "John"
);
// echo key($ItemsArr);
echo json_encode(ItemOwners::groupByOwners($ItemsArr));
?>