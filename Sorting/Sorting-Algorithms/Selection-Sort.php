
<?php

function selection_sort(&$arr) {
   $n = count($arr);
   for($i = 0; $i < count($arr); $i++) {
      $min = $i;
      for($j = $i + 1; $j < $n; $j++){
         if($arr[$j] < $arr[$min]){
            $min = $j;
         }
      }
      list($arr[$i],$arr[$min]) = array($arr[$min],$arr[$i]);
   }
}

$array = array(20,43,65,88,11,33,56,74);
selection_sort($array);
print_r($array);

?>


