<?php
$memo = filter_input(INPUT_POST, 'memo', FILTER_SANITIZE_SPECIAL_CHARS);

require ('dbconnect.php');
$stmt = $db->prepare('insert into memos(memo) values(?)');
if (!$stmt) {
  die($db->error);
}
$stmt->bind_param('s', $memo);
$ret = $stmt->execute();

if ($ret) {
  echo "データを挿入しました";
  echo '<br><a href="index.php">トップへ戻る</a><br>';
} else {
  echo $db->error;
}
?>