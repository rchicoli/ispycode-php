
<?php

$greeting = function( $name, $daytime ) {
  return ( "Good $daytime $name." );
};

echo $greeting( "John", "morning" ) . "\n";
echo $greeting( "Sue", "night" ) . "\n";

?>


