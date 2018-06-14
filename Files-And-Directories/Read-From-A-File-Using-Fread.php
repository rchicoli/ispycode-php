
<?php
  $myfile = "myfile.txt";
  $fh = fopen($myfile, 'r');
  $data = fread($fh, filesize($myfile));
  fclose($fh);
  echo $data;
?>


