<?php
//Write a PHP function to test whether a number is greater than 30, 20 or 10 using ternary operator
?>

<?php
function trinary_Test($n){
    $r = $n > 30
    ? "greater than 30"
    : ($n > 20 
    ? "greater than 20"
    :($n > 10
    ? "greater than 10"
    : "Input s number atleast greater than 10!"));
    echo $n." : ".$r."\n";
}
trinary_Test(32);
trinary_Test(21);
trinary_Test(12);
trinary_Test(4);
?>