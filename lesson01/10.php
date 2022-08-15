<?php
$week_name = ["日", "月", "火", "水", "木", "金", "土"];
echo $week_name[0], "<br>";
echo $week_name[1], "<br>";

date_default_timezone_set("Asia/Tokyo");
$week = date("w");
echo $week_name[$week];
?>
