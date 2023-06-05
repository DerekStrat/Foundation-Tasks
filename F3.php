<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation Task 3</title>
</head>
<body>
<?php
class Palindrome {
public static function isPalindrome($word) {
    $new_word = strtolower($word);
    trim($new_word, ' ');
    print $new_word . "<br>";
    $Array = str_split($new_word);
    $rArray = array_reverse($Array);
    $n = 0;
    foreach ($Array as $letter) {
        if ($letter == " ") 
        {print "";}
        elseif ($rArray[$n] == " ") {
            $n++;
            if ($letter != $rArray[$n]) 
            {return false;}
            $n++;
        }
        elseif ($letter != $rArray[$n]) {return false;}
        else
            $n++;
    }
    return true;
}
}

if (Palindrome::isPalindrome('Never, Odd Or Even'))
echo 'Palindrome';
else
echo 'Not palindrome';

?>
</body>
</html>