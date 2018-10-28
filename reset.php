<?php
  include 'core.php';

  unlink($my_file);

  if ($debug)
      echo "$my_file deleted";
  header('Location: index.php');
?>
