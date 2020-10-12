<?php

if (!isset($_POST['login-submit'])){

  header("Location: ../index.php");
  exit();

}
else{

  require "dbh.inc.php";

  $username =  $_POST['username'];
  $password =  $_POST['pwd'];

  if (empty($username) || empty($password)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }

  else {
    $sql = "SELECT * FROM users WHERE unameUsers=? ";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['pwdUsers']);

        if ($pwdCheck == false ) {
          header("Location: ../index.php?error=wrongpwd1");

          exit();
        }
        else if ($pwdCheck == true ) {
          session_start();
          $_SESSION['userName'] = $row['unameUsers'];
          $_SESSION['userPrivileges'] = $row['privUsers'];

          if ($_SESSION['userPrivileges'] != 'student') {
          header("Location: ../index.php?login=sucsess");
          exit();
          }
          else {
            header("Location: ../student_page.php");
            exit();
          }
        }
        
        else {

          header("Location: ../index.php?error=wrongpwd2");
          exit();
        }
      }
      else {
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }

  }

}

 ?>
