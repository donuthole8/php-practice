<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>page02</title>
</head>
<body>
  セッションの値：<?php echo $_SESSION["message"]; ?>
</body>
</html>