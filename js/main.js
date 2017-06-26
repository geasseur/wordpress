
//affichage alt
var altIMG = document.getElementById("vr").alt;
function altImg() {

    document.getElementById("altimg").innerHTML += altIMG ;
}

function nonAltImg() {
    document.getElementById("altimg").innerHTML = "" ;
}

//script pour la confirmation d'envois

function confirmation(){
  confirm("êtez vous sûr de vouloir envoyer?");
}

// script pour le compteur
var duree = 0;
function tempReste(){
    parseInt(duree += 1);
    document.getElementById("tmpReste").innerHTML += (duree + " secondes") ;
    setTimeout(function () {
      var delet = parseInt(duree);
      document.getElementById("tmpReste").innerHTML = " " ;
    }, 990);
}

setInterval(tempReste, 1000);

//script pour l'heure.
function horloge(){

var today = new Date();
var minute = today.getMinutes();
var secondes = today.getSeconds();
var heure = today.getHours();
var jour = today.getDay();
var nbjour = today.getDate();
var mois = today.getMonth();
var année = today.getFullYear();
if(jour == 1){
 jour = "lundi";
}
else if (jour == 2) {
 jour = "mardi";
}
else if (jour == 3) {
 jour = "mercredi";
}
else if (jour == 4) {
 jour = "jeudi"
}
else if (jour == 5) {
 jour = "vendredi";
}
else if (jour == 6) {
 jour = "samedi";
}
else {
 jour = "dimanche"
}

if(mois == 0){
 mois ="janvier";
}
else if (mois ==1) {
 mois = "fevrier"
}
else if (mois ==2) {
 mois = "mars";
}
else if (mois ==3) {
 mois = "avril";
}
else if (mois ==4) {
 mois = "mai";
}
else if (mois ==5) {
 mois = "juin";
}
else if (mois==6) {
 mois = "juillet";
}
else if (mois==7) {
 mois ="août";
}
else if (mois==8) {
 mois=="septembre";
}
else if (mois==9) {
 mois = "octobre";
}
else if (mois ==10) {
 mois = "novembre";
}
else{
 mois ="decembre";
}
document.getElementById("horaire").innerHTML += (heure + " h "+ minute + " min " + secondes +" sec "+ jour + " " + nbjour + " " + mois + " année " + année);

}

horloge();


var invisible = document.getElementsByClassName("toggle");
var invisible2 = document.getElementsByClassName( "toggle2");
var invisible3 = document.getElementsByClassName( "toggle3");
var invisible4 = document.getElementsByClassName( "toggle4");
 console.log(invisible);


    function disparition(invisible,invisible2,invisible3,invisible4){
        for(i=0;i<4;i++){
          invisible[i].style.display = "none";
          console.log(invisible[i]);
        }
        for(i=0;i<4;i++){
          invisible2[i].style.display = "none";
          console.log(invisible2[i]);
        }
        for(i=0;i<4;i++){
          invisible3[i].style.display = "none";
          console.log(invisible3[i]);
        }
        for(i=0;i<4;i++){
          invisible4[i].style.display = "none";
          console.log(invisible4[i]);
      }
    }



      function apparition(invisible){
        disparition(invisible,invisible2,invisible3,invisible4);
        for(i=0;i<4;i++){
          invisible[i].style.display = "flex";
          }

        }


      function apparition2(invisible2){
        disparition(invisible,invisible2,invisible3,invisible4);
        for(i=0;i<4;i++){
          invisible2[i].style.display = "block";
          }

        }

        function apparition3(invisible3){
          disparition(invisible,invisible2,invisible3,invisible4);
          for(i=0;i<4;i++){
            invisible3[i].style.display = "block";
            }

          }

          function apparition4(invisible4){
            disparition(invisible,invisible2,invisible3,invisible4);
            for(i=0;i<4;i++){
              invisible4[i].style.display = "block";
              }

            }
          disparition(invisible,invisible2,invisible3,invisible4);
