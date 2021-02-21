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

    <!--<title>Crossfilter for ATLAS Outreach Prototype</title>
    <meta charset="UTF-8"> -->
    <link rel="stylesheet" type="text/css" href="dc.css"/>
  </head>
  <style>
  .dc-chart g.row text {
      fill: black;
      font-size: 120%;
  }
  table { border-collapse:collapse; }
  table thead th { border-bottom: 1px solid #000; }
/*  #hist9 tr:nth-child(odd) {background-color: #CCCCCC;}
  #hist9 tr:nth-child(1)   {background-color: #FFFFFF;}
*/
/*  #hist9 tr:nth-child(2) {background-color: #1C5EA8;}
  #hist9 tr:nth-child(3) {background-color: #F66A00;}
  #hist9 tr:nth-child(4) {background-color: #2A9000;}
  #hist9 tr:nth-child(5) {background-color: #C31318;}
*/

  #hist9 {
    font-size: 100%;
    padding-top: 20px;
    padding-left: 20px;
  }
 </style>


<body>
    <header>
      <a href="../index.php"> <img src="/images/ATLAS-Logo-small-blue_txt.png" title="ATLAS experiment logo" alt="ATLAS experiment logo"/> </a>

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
