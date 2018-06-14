
<?php

class Cat {}

function getCat(): Cat {
    return new Cat();
}

$cat = getCat();
var_dump($cat);

?>


