<?php
$xmlTree = simplexml_load_file(("./data/rss.xml"));
// echo $xmlTree->channel->title, "<br>";
// echo $xmlTree->channel->link, "<br>";
// echo $xmlTree->channel->item[0]->title, "<br>";

foreach ($xmlTree->channel->item as $item):
?>
・<a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a><br>
<?php
endforeach;
?>