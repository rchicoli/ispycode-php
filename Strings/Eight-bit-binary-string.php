
<?php
$str1 = "Hello world";

// Convert quoted-printable string to 8-bit string
$str2 = quoted_printable_decode($str1);
echo $str2 . "\n";

// Convert 8-bit string to a quoted printable string
$str3 = quoted_printable_encode($str2);
echo $str3
?>


