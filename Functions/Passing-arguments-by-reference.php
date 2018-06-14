
<?php

function addTwo(&$var) {
  $var = $var + 2;
}

$number = 2;
echo $number . "\n";

addTwo($number);
echo $number . "\n";

?>


