var histogram_button = document.getElementsByClassName("histogram_button")[0];

function show_histograms(){
  document.getElementById("histograms").style.display = "block";
  histogram_button.style.display = "none"

}

histogram_button.addEventListener("click", show_histograms);
