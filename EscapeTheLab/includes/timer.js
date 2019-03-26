var seconds = document.getElementById("timer").textContent;
var basetime = seconds;
//document.getElementById("indic").style.visibility =  "hidden";
var countdown = setInterval(function () {
    seconds--;
    document.getElementById("timer").textContent = seconds;
    if (seconds <= 0) { clearInterval(countdown); window.location.replace("../logout.php");}
   // else if (seconds <= basetime/4) {document.getElementById("indic").style.visibility =  "visible"; }
}, 1000);