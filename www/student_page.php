<?php
 include_once "header.php";
?>

<main>
    <div class="page_margins">
      <div>

      <h1> Masterclass UiO </h1>

      <p> Welcome to Masterclass!</p>
      <p> On this page you can use the tool below to analyse particle physics events by creating different cuts in the histograms. </p>

      <p> <?php
      echo '<pre>';
      var_dump($_SESSION);
      echo '</pre>';

      if ($_GET['error'] == 'upload') {
        if ( isset($_SESSION['uploadDate']) && !isset($_SESSION['file'])) {
          echo "File not uploaded. Please try again." ;
        }
        else {
          echo "Something went wrong. Please try again." ;
        }
      }
       ?> </p>



      <p>
        <!--
        <form action="datafile_selector_new.php" method="POST">
          <input type="submit" id="upl_button" value="TEST">
        </form> -->

        <form action="datafile_selector_new.php" method="POST">
          <input type="submit" id="uplo_button" value="test">
        </form>

      <form action="datafile_selector.php" method="POST">
        <select name="date_upload" id="date_upload">
          <option value="1"> 1 </option>
        </select>
        <select name="institute_new" id="institute_new">
          <option value="UiO"> UiO </option>
        </select>
        <input type="submit" id="upload_file_button" value="Upload">
      </form>


        <!--
        <form action="datafile_selector_new.php" method="post" enctype="multipart/form-data">
          <select name="uploadDate" id="uploadDate">
            <option disabled hidden selected>Date</option>
            <option value="2021">2021-01-22</option>
          </select>
        <select name="institute" id="institute">
              <option disabled hidden selected>Institute</option>
              <option value="UiO">UiO</option>
              <option value="UiB">UiB</option>
          </select>
          <select name="group" id="group">
              <option disabled hidden selected>Group</option>
              <option value="1A">1A</option>
              <option value="1B">1B</option>
          </select>
          <label for="inputFile">To uplode a new cvs file with data:</label>
          <input type="file" id="inputFile" name="inputFile">
          <input type="submit" value="Upload">
        </form> -->
      </p>

      <p>

<!--
        <form action="datafile_selector_old.php" method="post">
          <label for="data">To select datafiles from database, select date</label>
          <select name="date" id="date">
            <option disabled hidden selected>Date</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
          </select>
          <label for="data">and institute:</label>
            <select name="institute" id="institute">
              <option disabled hidden selected>Institute</option>
              <option value="UiO">UiO</option>
              <option value="UiB">UiB</option>
            </select>
            <input type="submit" value="Submit">
        </form>
        -->
      </p>


      <hr style="border:1px solid lightgray;">
    </div>

<!--
    <div>
      <button class="histogram_button" type="submit" name="show_histograms">
        Click here to show show histograms
      </button>



      <div id="histograms" style="display:none">
        <iframe title="Crossfilter histograms" src="/HistogramAnalyser/crossfilter.html" style="border:5px none Gainsboro;" width=100% height=1000px>
        </iframe>

      </div>
<script src="show_histograms.js"></script>
    </div>
  -->

  </div>

</main>
</html>
