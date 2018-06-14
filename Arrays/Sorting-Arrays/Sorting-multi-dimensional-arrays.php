
<?php

$arr = array(
   array(1,5,9,3,7),
   array(2,6,8,4,10)
);

array_multisort($arr[0], SORT_NUMERIC, SORT_ASC);
array_multisort($arr[1], SORT_NUMERIC, SORT_ASC);

print_r($arr);

?>


