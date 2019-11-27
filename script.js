function diaGrade(dia) {
    var i;
    var x = document.getElementsByClassName("dia");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";
    }
    document.getElementById(dia).style.display = "block";
  }