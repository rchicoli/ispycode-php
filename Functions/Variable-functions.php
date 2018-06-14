
<?php
function foo() {
  echo "Inside foo() \n";
}

function bar() {
  echo "Inside bar() \n";
}

$func = 'foo';
$func();

$func = 'bar';
$func();

?>


