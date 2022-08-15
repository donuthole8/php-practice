<?php
$json_smaple = [
  "title" => "JSONサンプル",
  "items" => [
    "林檎",
    "蜜柑",
    "葡萄",
    "檸檬",
    "石榴",
  ]
];

$json = json_encode($json_smaple, JSON_UNESCAPED_UNICODE);
// $json = json_encode($json_smaple);
echo $json;
file_put_contents("./data/json_smaple.json", $json);
?>
