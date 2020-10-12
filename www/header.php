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

    <div class="header">
      <!--
      <img src="/images/ippog.png" width="150px" height="150px" title="ATLAS detector magnet heads" alt="ATLAS detector magnet heads" />

      <span class="header_text">

      Masterclass
    </span>
  -->

  Masterclass

  <?php
  if (isset($_SESSION['userName'])){
    echo "<form action='includes/logout.inc.php' method='POST'>
      <button type='submit' name='logout-submit'>Logout</button>";
    }

    $nav_bar_names = array('admin'=>array('Admin', 'Moderator', 'Tutor', 'Student'), 'moderator'=>array('Moderator', 'Tutor', 'Student'), 'tutor'=>array('Tutor', 'Student'));

    ?>

    <nav>

    <?php
    //foreach ($nav_bar as $key => $value) {
    if (is_array($nav_bar_names) || is_object($nav_bar_names)){
      foreach ($nav_bar_names as $key => $value) {
        if ($key == $_SESSION['userPrivileges']) {
          foreach ($nav_bar_names[$key] as $k => $v) {
            $link = strtolower($v).'_page.php';
            echo "<a href=$link>  $v  </a>";
          }
        }

      }


      }
      else {
        echo "nop";
      }

    //}
    ?>
</nav>

    <?php
    /*
      echo "{<nav>
      <ul>
      if ($_SESSION['userPrivileges'] == 'admin' ) {
        <li> Admin</li>
        <li> Moderator</li>
        <li> Tutor</li>
        <li> Student</li>
      }
      else if  ($_SESSION['userPrivileges'] == 'admin' || $_SESSION['userPrivileges'] == 'moderator'  ) {
        <li> Moderator</li>
        <li> Tutor</li>
        <li> Student</li>
      }
      else if  ($_SESSION['userPrivileges'] == 'admin' || $_SESSION['userPrivileges'] == 'moderator'  || $_SESSION['userPrivileges'] == 'tutor') {
        <li> Tutor</li>
        <li> Student</li>
      }
      </ul>
    </nav>}";*/
?>



<!--
      <img src="/images/ATLAS_magnet-head.jpg" position="left" width="550px" height="150px" title="ATLAS detector magnet heads" alt="ATLAS detector magnet heads" />
  -->
    </div>
  </body>
  </html>
