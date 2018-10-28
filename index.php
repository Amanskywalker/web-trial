<?php
// set the current page name
  $page_name = 'Home page';
  include 'core.php';
  include 'head.part.php';
  include 'nav.part.php';
  if (file_exists ($my_file))
  {
?>
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Content of <?php echo "$my_file";?></div>
                    <div class="panel-body">
                    <?php
                    $handle = fopen($my_file, 'r+') or die('Cannot open file:  '.$my_file);
                    $contents = fread($handle, filesize($my_file));
                    fclose($handle);

                    $contentsArray = explode(";",$contents);

                    foreach ($contentsArray as $key => $value) {
                      echo "$value <br>";
                    }
                    ?>
                    </div>
              </div>
          </div>
      </div>
  </div>
<?php
  }
  include 'fill.form.php';
  include 'footer.part.php';
 ?>
