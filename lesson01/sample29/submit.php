<?php 
$file = $_FILES["picture"];
var_dump($file);
if ($file["type"] === "image/jpeg" || $file["type"] === "image/png") {
  $path = "images/" + $file["name"];
  $success = move_uploaded_file($file["tmp_name"], $file["name"]);

  if ($success) {
    echo "成功しました";
  } else {
    echo "失敗しました";
  }
} else {
  echo "ファイル形式が不正です";
}
?>
