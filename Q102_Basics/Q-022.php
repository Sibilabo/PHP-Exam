<?php
//Write a PHP script to get the full URL
?>

<?php
$full_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    echo $full_url."\n";
?>