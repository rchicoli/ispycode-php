
<?php 
$str1 = "<b>hello</b>";

// Convert characters to HTML entities:
$str2 = htmlentities($str1);
echo $str2 . "\n";

// Convert HTML entities to characters:
$str3 = html_entity_decode($str2);
echo $str3;
?>


