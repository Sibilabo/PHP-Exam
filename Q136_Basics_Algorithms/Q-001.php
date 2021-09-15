<?php
/**Write a PHP program to compute
the sum of the two given integer values.
If the two values are the same,
then returns triple their sum.
Sample Input
1, 2
3, 2
2, 2
Sample Output:
3
5
12
*/
?>

<?php
function test($x, $y)
{
    return $x == $y ? ($x + $y)*3 : $x + $y;
}
echo test(1, 2)."\n";
echo test(3, 2)."\n";
echo test(2, 2)."\n";
?>
