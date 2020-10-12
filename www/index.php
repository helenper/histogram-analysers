<?php
  include_once "header.php";
 ?>


<!--
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Masterclass UiO</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/masterclass_styles.css">
    <link rel="stylesheet" href="css/margins.css">
  </head>
  <body>
  -->
  <main>
    <div class="page_margins">
    <h2>Welcome to the Masterclass histogram analysis tool</h2>
    <p>

    </p>

    <div class="center">
    <!-- NOT IN USE ANY MORE
    <button class="index_button" type="submit" name="select-student" onclick="location.href = 'histAna_masterclass.php'">Student</button>
    <button class="index_button" type="submit" name="select-tutor" onclick="location.href = 'teacher_info.php'">Tutor</button>
    -->

    <?php
      if (isset($_SESSION['userName'])) {
        if ($_SESSION['userPrivileges'] != 'student') {
          echo "<p> You are logged in! Navigate the page from the menu found on the top of the page.</p>";

        }
        else {
          echo "<p> Welcome to masterclass!</p>";

        }
      }
      else {
        echo "<p>Please sign in with your given username and password:</p>";
        echo "<p> You are logged out!</p>";

        echo '<form action="includes/login.inc.php" method="POST">
          <input type="text" name="username" placeholder="Username">
          <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="login-submit">Login</button>
        </form>';
      }
    ?>

  </div>


  </div>
  <main>
