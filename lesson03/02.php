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

  // $records = $db->query("select * from my_items");
  $records = $db->query("select count(*) as cnt from my_items");

  var_dump($records);
  echo "<br>";

  if ($records) {
    while ($record = $records->fetch_assoc()) {
      echo $record["cnt"] . "<br>";
    }
  } else {
    echo $db->error;
  }
  
  ?>
</body>
</html>