<?php
//session_start();

include_once("header.php");

  // Get data from form - upload new data
  echo '<pre>';
  var_dump($_SESSION);
  echo '</pre>';

  $_SESSION['uploadDate'] = $_POST["uploadDate"];
  $_SESSION['institute'] = $_POST["institute"];
  $_SESSION['group'] = $_POST["group"];
  $_SESSION['file'] = $_FILES["inputFile"]; //$_POST["inputFile"];

  echo '<pre>';
  var_dump($_SESSION);
  echo '</pre>';
  //$file = $_FILES["inputFile"];
  //$institute = $_POST["institute"];
  //$uploadDate = $_POST["uploadDate"];
  //$group = $_POST["group"];

  if ( isset($_SESSION['uploadDate']) && !isset($_SESSION['file'])) {
    echo "All is NOT good with file.";
    //header("student_page.php?error=upload");
  }
  elseif (!isset($_SESSION['uploadDate']) || !isset($_SESSION['group']) || !isset($_SESSION['institute']) ){
    echo "All is NOT good with some form data.";
      //header("student_page.php?error=info");
  }
  else {
    echo "All is good.";
    echo $_SESSION['uploadDate'], $_SESSION['institute'], $_SESSION['group'], $_SESSION['file'];
  }


  /*if (!isset($_SESSION['institute'])) {
    echo "H";}

  echo $file;
  echo $group;
  echo $_SESSION['group'];
*/
  // Get data from form - old data -
  // "NOT IMPLEMENTED"
  /*
  $date = $_POST["date"];
  $institute = $_POST["institute"];

  // Handle uploaded file

  $dataLocUploadFolder = "data/" . $uploadDate . "/" . $institute;

  $dataLocUpload = "data/" . $uploadDate . "/" . $institute . "/" . $group . ".csv";

    $_SESSION['dataLocUpload'] = $dataLocUpload;

  //if (!file_exists($dataLocUploadFolder)) {
  //  mkdir($dataLocUploadFolder, 0777, true);
//}

  //move_uploaded_file($file["tmp_name"], /data/ );//$dataLocUpload);

  echo "Test";


*/

  //echo $dataLocUpload;
  // Relocate to student page

  //header("Location: student_page.php");
  //header("Location: ../HistogramAnalyser/crossfilter_masterclass_web.php") //. "?file=" . $dataLocUpload)
  //echo $dataLocUpload;
?>
