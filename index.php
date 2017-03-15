<?php
// set the current page name
      $page_name = 'Home page';
      include 'core.php';
      include 'head.part.php';
      include 'nav.part.php';
      if (file_exists ("config.php"))
      {
        include 'config.php';
        
      }
      else
      {
        include 'fill.form.php';
      }
      include 'footer.part.php';
 ?>
