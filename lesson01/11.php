<?php
$fruits = [
  "apple" => "林檎", 
  "grape" => "葡萄",
  "lemon" => "檸檬",
];
?>

<dl>
  <?php foreach ($fruits as $english => $japanese): ?>
    <dt><?php echo $english; ?></dt>
    <dt><?php echo $japanese; ?></dt>
  <?php endforeach; ?>
</dl>
