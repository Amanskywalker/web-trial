<?php
  include 'core.php';
  $contentsArray = null;
  if (file_exists ($my_file))
  {
    $handle = fopen($my_file, 'r+') or die('Cannot open file:  '.$my_file);
    $contents = fread($handle, filesize($my_file));
    fclose($handle);
    $contentsArray = explode(";",$contents);
    echo json_encode($contentsArray);
  }else {
    echo json_encode($contentsArray);
  }
  die();
 ?>
