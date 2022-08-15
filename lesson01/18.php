<?php
$file = file_get_contents("./data/feed.json");
$json = json_decode($file);

echo $json->items[0]->title;
foreach ($json->items as $item):
?>
・<a href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a><br>
<?php
endforeach;
?>
