<?php
$random = rand(0, 1);
echo $random, "<br>";
if ($random === 0) {
  echo "あたりです";
} else {
  echo "はずれです";
}
?>
