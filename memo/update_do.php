<?php
require("dbconnect.php");

$stmt = $db->prepare('delete from memos where id=?');

if (!$stmt) {
  die($db->error);
}

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
if (!$id) {
  echo "メモが正しく受け渡されていません";
}

$stmt->bind_param('si', $id);
$ret = $stmt->execute();

if (!$ret) {
  die($db->error);
}

header('Location: index.php');
?>

