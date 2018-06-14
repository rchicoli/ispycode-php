
<?php

$numbers = array(33,66,22,55,11,44);

sort($numbers);

$length = count($numbers);
for($x = 0; $x < $length; $x++) {
    echo $numbers[$x];
    echo "\n";
}

?>


