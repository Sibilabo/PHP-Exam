<?php
//Write a PHP script to print current PHP version
?>

<?php
echo 'Current PHP version : ' . phpversion();
//print e.g. '2.0' or nothing if the extension isn't enabled
echo phpversion('tidy')."\n";
?>
