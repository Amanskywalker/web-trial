<?php
  include 'core.php';
  $my_file = 'config.php';
  unlink($my_file);

  if ($debug)
      echo "config.php deleted";
  header('Location: index.php');
?>
