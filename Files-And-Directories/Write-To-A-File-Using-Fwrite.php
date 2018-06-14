
<?php

  $myfile = "myfile.txt";
  $fh = fopen($myfile, 'w') or die("can't open file");

  $data = "Line ONE\n";
  fwrite($fh, $data);

  $data = "Line TWO\n";
  fwrite($fh, $data);

  fclose($fh);

?>


