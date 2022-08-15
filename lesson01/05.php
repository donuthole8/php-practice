<?php
$today = new DateTime();
$today->setTimezone(new DateTimeZone(("Asia/Tokyo")));
echo "現在は", $today->format("G i s"), "です";
?>
