
<?php

$string = "the cat in the hat";
$token = strtok($string, " ");

while ($token !== false) {
    echo "$token \n";
    $token = strtok(" ");
}
?>


