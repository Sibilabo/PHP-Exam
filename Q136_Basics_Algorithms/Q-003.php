<?php

/**Write a PHP program to check two given integers, 
and return true if one of them is 30 or if their sum is 30.
Sample Input:
30, 0
25, 5
20, 30
20, 25
Sample Output:
bool(true)
bool(true)
bool(true)
bool(false) */
?>

<?php
function test($x, $y)
{
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}

var_dump(test(30, 0)); 
var_dump(test(25, 5));
var_dump(test(20, 30));
var_dump(test(20, 25));