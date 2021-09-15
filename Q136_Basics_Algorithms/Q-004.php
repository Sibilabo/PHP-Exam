<?php

/**Write a PHP program to check a given integer and return true 
if it is within 10 of 100 or 200. 
Sample Input:
103
90
89
Sample Output:
bool(true)
bool(true)
bool(false)
 */
?>

<?php
function test($x)
{
    if (abs($x - 100) <= 10 || abs($x - 200) <= 10)
                return true;
            return false;
}

var_dump(test(103));
var_dump(test(90));
var_dump(test(89));