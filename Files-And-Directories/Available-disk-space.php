
<?php

$dir = "/";

// total space
$total = disk_total_space($dir);

// total space in kbytes
echo $total/1024 . "\n";

// free space
$freespace = disk_free_space($dir);

// total free space in kbytes
echo $freespace/1024 . "\n";
?>


