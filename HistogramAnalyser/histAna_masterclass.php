<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Masterclass UiO modification of crossfilter for ATLAS Outrech</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/margins.css">
    <link rel="stylesheet" href="css/masterclass_styles.css">
  </head>


  <body>

    <div class="page_margins">
      <div>

      <h1> Masterclass UiO </h1>

      <p> On this page you can use the tool below to analyse particle physics events by creating different cuts in the histograms. </p>

      <!-- Not clicable yet, just for idea of design element -->
      <p>
        <form action="datafile_selector.php" method="post" enctype="multipart/form-data">
          <label for="myfile">To uplode a new cvs file with data:</label>
          <input type="file" id="myfile" name="myfile">
          <button type="submit" name="submit">Upload</button>
        </form>
      </p>

      <p>

        <form action="datafile_selector.php" method="post">
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
      </p>

      <p>  <?php
        echo $date, $institute;
        ?></p>


      <hr style="border:1px solid lightgray;">
    </div>


    <div>
      <button class="histogram_button" type="submit" name="show_histograms">
        Click here to show show histograms
      </button>



      <div id="histograms" style="display:none">
        <iframe title="Crossfilter histograms" src="crossfilter.html" style="border:5px none Gainsboro;" width=100% height=1000px>
        </iframe>

      </div>
<script src="show_histograms.js"></script>
    </div>

  </div>

  </body>
</html>
