 <?php
 /**Write a PHP script to get the document root directory under 
 which the current script is executing, 
 as defined in the server's configuration file 
 */
?>

<?php
//gatenv() gets the value pf an environment variable
$rd = getenv('DOCUMENT_ROOT');
echo $rd."\n";
?>