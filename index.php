<?php
// set the current page name
  $page_name = 'Home page';
  include 'core.php';
  include 'head.part.php';
  include 'nav.part.php';
  if (file_exists ("config.php"))
  {
?>
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Let me checkout what happned</div>
                    <div class="panel-body">
                    <?php
                      include 'config.php';
                      if ($db_connection=="mysql")
                      {
                        try
                        {
                          $conn = new PDO("mysql:host=$db_connection;dbname=$db_database", $db_username, $db_password);
                          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                          echo "Connected successfully";
                        }
                        catch(PDOException $e)
                        {
                          echo "Something wrong :(</br>Connection failed: " . $e->getMessage()."<br><br>You can use the reset button to reset the settings and try agin.";
                        }
                      }
                      else
                        echo "connection other than mysql not supported for now";
                      ?>
                    </div>
              </div>
          </div>
      </div>
  </div>
<?php
  }
  else
  {
    include 'fill.form.php';
  }
  include 'footer.part.php';
 ?>
