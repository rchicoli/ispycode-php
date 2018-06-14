
<?php

function columns($uarr) {
   $n=$uarr;
   if (count($n) == 0)
      return array();
   else if (count($n) == 1)
      return array_chunk($n[0], 1);
   array_unshift($uarr, NULL);
   $transpose = call_user_func_array('array_map', $uarr);
   return array_map('array_filter', $transpose);
}

function bead_sort($uarr) {
   foreach ($uarr as $e)
   $poles []= array_fill(0, $e, 1);
   return array_map('count', columns(columns($poles)));
}

$array = array(20,43,65,81,19,33,56,74);
$sorted = bead_sort($array);
print_r($sorted);

?>


