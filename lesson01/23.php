<?php
$zip = "123-4567";

if (preg_match("/\A\d{3}[-]\d{4}\z/", $zip)):
  echo "郵便番号：〒", $zip;
else:
  echo "郵便番号を正しくご記入下さい";
endif;
?>