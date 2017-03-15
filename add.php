<?php
  include 'core.php';
// catch all the input fields
  $connection=$_POST['connection'];
  $host=$_POST['host'];
  $port=$_POST['port'];
  $dbname=$_POST['name'];
  $username=$_POST['username'];
  $password=$_POST['password'];

  $data = "
    \$db_connection=\"$connection\"
    \$db_host=\"$host\"
    \$db_port=\"$port\"
    \$db_database=\"$dbname\"
    \$db_username=\"$username\"
    \$db_password=\"$password\"";

  $my_file = 'config.php';
  $handle = fopen($my_file, 'w+') or die('Cannot open file:  '.$my_file);
  fwrite($handle, $data);
  fclose($handle);

  if ($debug)
      echo "data written to the file";
  //header('Location: index.php');
?>
