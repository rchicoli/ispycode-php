
<?php

function cocktail_sort($arr){
   if (is_string($arr)) $arr = str_split(preg_replace('/\s+/','',$arr));

   do{
      $swapped = false;
      for($i=0;$i<count($arr);$i++){
         if(isset($arr[$i+1])){
            if($arr[$i] > $arr[$i+1]){
               list($arr[$i], $arr[$i+1]) = array($arr[$i+1], $arr[$i]);
               $swapped = true;
            }
         }
      }

      if ($swapped == false) break;

      $swapped = false;
      for($i=count($arr)-1;$i>=0;$i--){
         if(isset($arr[$i-1])){
            if($arr[$i] < $arr[$i-1]) {
               list($arr[$i],$arr[$i-1]) = array($arr[$i-1],$arr[$i]);
               $swapped = true;
            }
         }
      }
   }while($swapped);

   return $arr;
}

$array = array(20,43,65,81,19,33,56,74);
$sorted = cocktail_sort($array);
print_r($sorted);

?>


