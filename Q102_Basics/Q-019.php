<?php
/*
Arithmetic operations on character variables : $d = 'A00'. Using this variable print the following numbers. Go to the editor
Sample Output :
A01
A02
A03
A04
A05
*/
?>

<?php
$d = 'A00';
    for ($n=0; $n<5; $n++)
{
    echo ++$d . "\n";
}
?>