<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $db = new mysqli("localhost:8889", "root", "root", "mydb");
  // $db = new mysqli("127.0.0.1:8889", "root", "root", "mydb");

  $db->query("drop table if exists test");
  $success = $db->query("create table test(id INT)");

  if ($success) {
    echo "テーブルを削除して作成しました";
  } else {
    echo "SQLが正常に動作しませんでした<br>";
    echo $db->error;
  }

  ?>
</body>
</html>