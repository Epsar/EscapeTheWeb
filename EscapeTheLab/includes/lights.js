document.getElementById("lvlup0").style.visibility =  "hidden";
var bonresultat = "12379";
var resultat = "2468";
var resarray = [];
var good= false;

$(function a() {
  $('.luminaire:nth-child(2n)').addClass('on');
  $('.luminaire').on('click', function () {
    $(this).toggleClass('on'); resultat = (!resultat.includes("1")) ? resultat + "1" : resultat.replace('1', '');
    resarray = resultat.split('').sort();
    if (resarray.join('')==bonresultat) { document.getElementById("lvlup0").style.visibility =  "visible"; }

  });
});
$(function b() {
  $('.luminaire2:nth-child(2n)').addClass('on');
  $('.luminaire2').on('click', function () {
    $(this).toggleClass('on'); resultat = (!resultat.includes("2")) ? resultat + "2" : resultat.replace('2', '');
    resarray = resultat.split('').sort();
    if (resarray.join('')==bonresultat) { document.getElementById("lvlup0").style.visibility =  "visible"; }
  });
});
$(function c() {
  $('.luminaire3:nth-child(2n)').addClass('on');
  $('.luminaire3').on('click', function () {
    $(this).toggleClass('on'); resultat = (!resultat.includes("3")) ? resultat + "3" : resultat.replace('3', '');
    resarray = resultat.split('').sort();
    if (resarray.join('')==bonresultat) { document.getElementById("lvlup0").style.visibility =  "visible"; }
  });
});
$(function c() {
  $('.luminaire4:nth-child(2n)').addClass('on');
  $('.luminaire4').on('click', function () {
    $(this).toggleClass('on'); resultat = (!resultat.includes("4")) ? resultat + "4" : resultat.replace('4', '');
    resarray = resultat.split('').sort();
    if (resarray.join('')==bonresultat) { document.getElementById("lvlup0").style.visibility =  "visible"; }
  });
});
$(function c() {
  $('.luminaire5:nth-child(2n)').addClass('on');
  $('.luminaire5').on('click', function () {
    $(this).toggleClass('on'); resultat = (!resultat.includes("5")) ? resultat + "5" : resultat.replace('5', '');
    resarray = resultat.split('').sort();
    if (resarray.join('')==bonresultat) { document.getElementById("lvlup0").style.visibility =  "visible"; }
  });
});
$(function c() {
  $('.luminaire6:nth-child(2n)').addClass('on');
  $('.luminaire6').on('click', function () {
    $(this).toggleClass('on'); resultat = (!resultat.includes("6")) ? resultat + "6" : resultat.replace('6', '');
    resarray = resultat.split('').sort();
    if (resarray.join('')==bonresultat) { document.getElementById("lvlup0").style.visibility =  "visible"; }
  });
});
$(function c() {
  $('.luminaire7:nth-child(2n)').addClass('on');
  $('.luminaire7').on('click', function () {
    $(this).toggleClass('on'); resultat = (!resultat.includes("7")) ? resultat + "7" : resultat.replace('7', '');
    resarray = resultat.split('').sort();
    if (resarray.join('')==bonresultat) { document.getElementById("lvlup0").style.visibility =  "visible"; }
  });
});
$(function c() {
  $('.luminaire8:nth-child(2n)').addClass('on');
  $('.luminaire8').on('click', function () {
    $(this).toggleClass('on'); resultat = (!resultat.includes("8")) ? resultat + "8" : resultat.replace('8', '');
    resarray = resultat.split('').sort();
    if (resarray.join('')==bonresultat) { document.getElementById("lvlup0").style.visibility =  "visible"; }
  });
});
$(function c() {
  $('.luminaire9:nth-child(2n)').addClass('on');
  $('.luminaire9').on('click', function () {
    $(this).toggleClass('on'); resultat = (!resultat.includes("9")) ? resultat + "9" : resultat.replace('9', '');
    resarray = resultat.split('').sort();
    if (resarray.join('')==bonresultat) { document.getElementById("lvlup0").style.visibility =  "visible";; }
  });
});



