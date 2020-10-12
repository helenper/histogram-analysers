<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title><?php echo $title; ?></title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/masterclass_styles.css">
    <link rel="stylesheet" href="css/margins.css">
  </head>
<body>
    <header>
      <a href="index.php"> <img src="/images/ATLAS-Logo-small-blue_txt.png" title="ATLAS experiment logo" alt="ATLAS experiment logo"/> </a>

      <div class="header_wrapper">
      <?php

      $nav_bar_names = array('admin'=>array('Admin', 'Moderator', 'Tutor', 'Student'), 'moderator'=>array('Moderator', 'Tutor', 'Student'), 'tutor'=>array('Tutor', 'Student'));
      ?>

      <!-- Create different nav bar based on users privilegies -->
      <ul>
        <!--
        <li><img src="/images/ATLAS-Logo-small-blue_txt.png" title="ATLAS experiment logo" alt="ATLAS experiment logo"/></li>
        -->
        <?php
          if (is_array($nav_bar_names) || is_object($nav_bar_names)){
            foreach ($nav_bar_names as $key => $value) {
              if ($key == $_SESSION['userPrivileges']) {
                foreach ($nav_bar_names[$key] as $k => $v) {
                  $link = strtolower($v).'_page.php';
                  echo " <li> <a href=$link>  $v  </a> </li>";
                }
              }
            }
            if (isset($_SESSION['userName'])){
              echo "<form action='includes/logout.inc.php' method='POST'>
              <button class='logout' type='submit' name='logout-submit'>Log out</button>";
            }
          }
          else {
            echo "There was a problem with giving you the navigation menu.";
          }
        ?>
      </ul>

      <?php

       ?>


    </div>
  </header>


  </body>
</html>
