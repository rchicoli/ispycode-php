<?php

$array1 = array(1,2,3,4,5,6);
$array2 = array(2,4,6);
$array3 = array(2,3,4,6);
$result = array_diff($array1, $array2, $array3);
print_r($result);

?>


