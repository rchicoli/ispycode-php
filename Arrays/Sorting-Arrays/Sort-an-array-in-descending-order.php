
<?php

$numbers = array(33,66,22,55,11,44);

rsort($numbers);

$length = count($numbers);
for($x = 0; $x < $length; $x++) {
    echo $numbers[$x];
    echo "\n";
}

?>


