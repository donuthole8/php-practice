<?php
require("dbconnect.php");

$stmt = $db->prepare('update memos set memo=? where id=?');

if (!$stmt) {
  echo "SQL文エラー";
  die($db->error);
}

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$memo = filter_input(INPUT_POST, 'memo', FILTER_SANITIZE_SPECIAL_CHARS);

$stmt->bind_param('si', $memo, $id);
$ret = $stmt->execute();

if (!$ret) {
  echo "SQL実行エラー";
  die($db->error);
}

header('Location: memo.php?id=' . $id); 
?>

