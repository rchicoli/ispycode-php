
<?php

function insertion_sort(&$arr){
   for($i=0;$i<count($arr);$i++){
      $val = $arr[$i];
      $j = $i-1;
      while($j>=0 && $arr[$j] > $val){
         $arr[$j+1] = $arr[$j];
         $j--;
      }
      $arr[$j+1] = $val;
   }
}

$array = array(20,43,65,88,11,33,56,74);
insertion_sort($array);
print_r($array);

?>


