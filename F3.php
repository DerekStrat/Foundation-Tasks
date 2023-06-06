<?php
class Palindrome {
public static function isPalindrome($word) {
$ReplaceWord = preg_replace("/[^a-zA-Z0-9]/", "", $word);
$new_word = strtolower($ReplaceWord);
print $new_word . "<br>";
$Array = str_split($ReplaceWord);
$ReversedArray = array_reverse($Array);
$PosCounter = 0;
foreach ($Array as $letter) {
    if ($letter == $ReversedArray[$PosCounter]) 
    return true;
    $PosCounter++;
}
return true;
}
}

if (Palindrome::isPalindrome("Don't nod"))
echo 'Palindrome';
else
echo 'Not palindrome';
?>