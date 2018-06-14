
<?php

function gnome_sort($arr){
   $i = 1;
   $j = 2;
   while($i < count($arr)){
      if ($arr[$i-1] <= $arr[$i]){
         $i = $j;
         $j++;
      }else{
         list($arr[$i],$arr[$i-1]) = array($arr[$i-1],$arr[$i]);
         $i--;
         if($i == 0){
            $i = $j;
            $j++;
         }
      }
   }
   return $arr;
}

$array = array(20,43,65,88,11,33,56,74);
$sorted = gnome_sort($array,11,88);
print_r($sorted);

?>


