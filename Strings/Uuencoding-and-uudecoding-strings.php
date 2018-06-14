
<?php 
$str1 = "Hello world";

// Encodes a string using the uuencode algorithm
$str2 = convert_uuencode($str1);
echo $str2;

// Decode a uuencoded string:
$str3 = convert_uudecode($str2);
echo $str3 . "\n";
?>


