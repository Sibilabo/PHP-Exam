<?php

/**Write a PHP program to create a new string
where 'if' is added to the front of a given string. 
If the string already begins with 'if', return the string unchanged
Sample Input:
"if else"
"else"
Sample Output:
if else
if else
 */

 function test($s)
 {
     if (strlen($s) > 2 && substr($s, 0, 2) == "if")
            {
                return $s;
            }
        return "if ".$s;
 }

 echo test("if else")."\n";
 echo test("else")."\n";
 ?>