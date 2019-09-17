<?php

$file = "img/menu.pdf";
$name = "menu.pdf";
header("Cache-control: private");
header("Content-Type: application/pdf");
header("Content-Length: ".filesize($file));
header("Content-Disposition: inline; filename=$name");
$fp = fopen($file, 'r');
fpassthru($fp);
fclose($fp);

?>