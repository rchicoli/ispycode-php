
<?php

function quick_sort($arr){
   $loe = $gt = array();
   if(count($arr) < 2){
      return $arr;
   }
   $pivot_key = key($arr);
   $pivot = array_shift($arr);
   foreach($arr as $val){
      if($val <= $pivot){
         $loe[] = $val;
      }elseif ($val > $pivot){
         $gt[] = $val;
      }
   }
   return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));
}

$array = array(20,43,65,88,11,33,56,74);
$sorted = quick_sort($array);
print_r($sorted);

?>


