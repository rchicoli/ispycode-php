
<?php
function bogosort($l) {
   while (!in_order($l))
      shuffle($l);
   return $l;
}

function in_order($l) {
   for ($i = 1; $i < count($l); $i++)
      if ($l[$i] < $l[$i-1])
         return FALSE;
   return TRUE;
}

$array = array(2,4,6,8,1,3,5,7);
$sorted = bogosort($array);
print_r($sorted);

?>


