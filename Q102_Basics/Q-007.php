<?php
//Write a simple PHP browser detection script
?>

<?php
$current_file_name = basename($_SERVER['PHP_SELF']);
echo $current_file_name."\n";
?>