<?php
//session_start();
include_once("header.php");

  // Get data from form - upload new data

  $_SESSION['uploadDate'] = $_POST["uploadDate"];
  $_SESSION['group'] = $_POST["group"];
  $_SESSION['file'] = $_POST["inputFile"];
  $_SESSION['institute'] = $_POST["institute"];

  //echo $_SESSION['userName'];

  $file = $_FILES["inputFile"];
  $institute = $_POST["institute"];
  $uploadDate = $_POST["uploadDate"];
  $group = $_POST["group"];



  /*if (!isset($_SESSION['institute'])) {
    echo "H";}

  echo $file;
  echo $group;
  echo $_SESSION['group'];
*/
  // Get data from form - old data -
  // "NOT IMPLEMENTED"
  $date = $_POST["date"];
  $institute = $_POST["institute"];

  // Handle uploaded file

  $dataLocUpload = "data/" . $uploadDate . "/" . $institute . "/" . $group . ".csv";

  move_uploaded_file($file["tmp_name"], $dataLocUpload);
  $_SESSION['dataLocUpload'] = $dataLocUpload;



  //echo $dataLocUpload;
  // Relocate to student page

  //header("Location: student_page.php");
  header("Location: /HistogramAnalyser/crossfilter_masterclass_web.php") //. "?file=" . $dataLocUpload)
  //echo $dataLocUpload;
?>
