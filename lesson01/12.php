<?php 
$time = 10;
?>

<?php if ($time < 9): ?>
  <p>out of time...</p>
<?php else: ?>
  <p>welcome!!</p>
<?php endif; ?>

<?php
$s = "aiueo";
// if ($s !== ''):
if ($s):
  echo '$s is not null.';
endif;

$x = 10;
// if ($x !== 0):
if ($x):
  echo '$x is not 0.';
endif;

$x = 0;
if ($x === 0):
  echo '$x is 0.';
endif;
?>