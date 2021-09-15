<?php
/**Write a PHP program to exchange the first and last characters in a given string and return the new string. Go to the editor
Sample Input:
"abcd"
"a"
"xy"
Sample output:
dbca
a
yx
*/

function test($str)
{
    return strlen($str) > 1 ? substr($str, strlen($str) - 1).substr($str, 1, strlen($str) - 2). substr($str, 0, 1) : $str;
}

echo test("abcd")."\n";
echo test("a")."\n";
echo test("xy")."\n";

?>