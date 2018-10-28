<?php
  include 'core.php';
// catch all the input fields
  $coordinatesString=$_POST['coordinates'];
  $dataToWrite = "";

  $coordinatesArray = explode(";",$coordinatesString);

  foreach ($coordinatesArray as $key => $value) {
    $dataToWrite = $dataToWrite.$value."\n";
  }

  $handle = fopen($my_file, 'w+') or die('Cannot open file:  '.$my_file);
  fwrite($handle, $dataToWrite);
  fclose($handle);

  if ($debug)
      echo "data written to the file";
  header('Location: index.php');
?>
