<?php
//Write a PHP script to get the information about the operating system PHP is running on
?>

<?php
echo php_uname()."\n";
echo PHP_OS."\n";
if ( strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
    echo 'This is a server using Windows!';
} else {
    echo 'This is a server not using Windows!'."\n";
}
?>
