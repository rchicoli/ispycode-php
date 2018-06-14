
<?php

function inOrder($arr){
   for($i=0;$i<count($arr);$i++){
      if(isset($arr[$i+1])){
         if($arr[$i] > $arr[$i+1]){
            return false;
         }
      }
   }
   return true;
}

function permute($items, $perms = array( )) {
   if (empty($items)) {
      if(inOrder($perms)){
         return $perms;
      }
   }  else {
      for ($i = count($items) - 1; $i >= 0; --$i) {
         $newitems = $items;
         $newperms = $perms;
         list($spliced) = array_splice($newitems, $i, 1);
         array_unshift($newperms, $spliced);
         $res = permute($newitems, $newperms);
         if($res){
            return $res;
         }
      }
   }
}

$array = array(20,43,65,88,11,33,56,74);
$sorted = permute($array);
print_r($sorted);

?>


