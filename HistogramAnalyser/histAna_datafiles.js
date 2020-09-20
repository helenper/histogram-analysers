var newDataButton = document.getElementById("newDataFile")
var oldDataButton = document.getElementById("oldDataFile")
var date = document.getElementById("date")
var institute = document.getElementById("institute")

function uploadNewFile(){
  this.innerHTML = "You added a new data file";

}

function selectOldFile(){
  d = date.options[date.selectedIndex].value;
  inst = institute.options[institute.selectedIndex].value;

  console.log(d,inst)



}

newDataButton.addEventListener("click", uploadNewFile )

oldDataButton.addEventListener("click", selectOldFile )
