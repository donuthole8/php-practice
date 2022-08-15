<?php
date_default_timezone_set("Asia/Tokyo");

$hello = "hello!!!";
echo '$hello', "<br>";
echo "$hello", "<br>";

for ($i = 0; $i < 366; $i++):
  $time = strtotime("+$i day");
  $day = date("n/j(D)", $time);
  echo $day, "<br>";
endfor;
?>
