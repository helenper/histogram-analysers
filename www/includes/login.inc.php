<?php

if (!isset($_POST['login-submit'])){
  header("Location: ../index.php");
  exit();
}

else{
  $username =  $_POST['username'];
  $password =  $_POST['pwd'];

  $info = array();

  $myfile = fopen("../info/info1.txt", "r") or die("Unable to open file!");
  while(!feof($myfile)) {
      $line = fgets($myfile);
      list($uname, $pwd) = explode(":", $line);

      $info[$uname] = trim($pwd);
    }
  fclose($myfile);

  if (!array_key_exists($username, $info)){
    echo "Wrong username";
    //header("Location: ../index.php?login=failed");
    exit();
  }

  else {
    if (strcmp( $password, $info[$username] ) !== 0){
      header("Location: ../index.php?login=failed");
      exit();
    }
    else {
        session_start();
        $_SESSION['userName'] = $username;
        $_SESSION['userPrivileges'] = $username;

        if ($_SESSION['userPrivileges'] != 'student') {
        header("Location: ../index.php?login=sucsess");
        exit();
        }

        else {
          header("Location: ../student_page.php");
          exit();
        }
    }
  }
}



      /*

      if ($username != $uname) {
        //echo "Wrong username or password";
        header("Location: ../index.php?login=failed");
        exit();
      }
      else {
        if (strcmp( $string1, $string2 ) != 0){
          //echo "Wrong username or password" ;
          header("Location: ../index.php?login=failed");
          exit();
        }
        else {
          session_start();
          $_SESSION['userName'] = $username;
          $_SESSION['userPrivileges'] = $username;

          if ($_SESSION['userPrivileges'] != 'student') {
          header("Location: ../index.php?login=sucsess");
          exit();
          }
          else {
            header("Location: ../student_page.php");
            exit();
          }
        }
        }
      }

*/






//--------------------
//
// Code for use of a database to store users and pwds
// passwords are created by the following statement password_hash($password, PASSWORD_DEFAULT);
//--------------------

/*
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
*/

 ?>
