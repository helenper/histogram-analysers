<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Masterclass UiO modification of crossfilter for ATLAS Outrech</title>
    <meta charset="UTF-8">

  </head>


  <body>

    <div>

      <h1> Masterclass UiO </h1>

      <p> On this page you can use the tool below to analyse particle physics events by creating different cuts in the histograms. </p>

      <!-- Not clicable yet, just for idea of design element -->
      <p>
        <form action="datafile_selector.php" method="POST" enctype="multipart/form-data">
          <label for="myfile">To uplode a new cvs file with data:</label>
          <input type="file" id="myfile" name="myfile">
          <button type="submit" name="submit">Upload</button>
        </form>
      </p>

      <p>
        To select datafiles from database, select date and institute:
        <form action="datafile_selector.php" method="get">
          <select name="date" id="date">
            <option disabled hidden selected>Date</option>
            <option value="2020">2020</option>
            <option value="2019">2019</option>
          </select>

            <select name="institute" id="institute">
              <option disabled hidden selected>Institute</option>
              <option value="UiO">UiO</option>
              <option value="UiB">UiB</option>
            </select>
            <input type="submit" value="Submit">
        </form>
      </p>


      <hr style="border:1px solid lightgray;">
    </div>


    <div>

    <iframe title="Crossfilter histograms" src="crossfilter.html" style="border:5px none Gainsboro;" width=100% height=1000px>
    </iframe>

    </div>

  </body>
</html>
