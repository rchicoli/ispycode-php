
<?php

class Cat {
  public $name = "Sam";
}

function printName($cat) {
  var_dump($cat);
}

$cat = new Cat();

printName($cat);

?>


