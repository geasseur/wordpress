<?php get_header(); ?> <!-- ouvrir header,php -->
<main class="container">
<section id="content">
  <article class="temps">
    <p id="horaire">
      <script type="text/javascript">
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

      </script>
    </p>
    <p id="tmpReste">
      <script>
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
      </script>
    </p>
  </article>

  <section id="tableauProduit">
    <section>
      <table class="table">
        <tr>
            <th>Ordinateur</th>

        </tr>

        <tr class="toggle">
            <td><img src="http://i2.cdscdn.com/pdt2/3/n/f/1/300x300/260a103nf/rw/hp-pc-de-bureau-260a103nf-4go-de-ram-windows.jpg" alt="tour hp"></td>

        </tr>

        <tr class="toggle">
            <td><img src="http://image.darty.com/informatique/bureau-bureau/bureau/asus_g11cd-k-fr107t_p1606134217128A_161304716.jpg" alt="tour asus"></td>
        </tr>

        <tr class="toggle">
            <td><img src="http://image.darty.com/darty?type=image&source=/market/2016/05/07/mkp_0Vfy3ClfR-1vVQ.jpeg&width=269&height=405" alt="tour z3"></td>
        </tr>

        <tr class="toggle">
            <td><img src="https://base2code.com/wp-content/uploads/2012/07/LD0000980487_2.jpg" alt="tour hunter"></td>
        </tr>

        <tr>
            <th>Mobile</th>
        </tr>

        <tr class="toggle2">
            <td><img src="https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/H/KH/HKHC2/HKHC2?wid=445&hei=445&fmt=jpeg&qlt=95&op_sharpen=0&resMode=bicub&op_usm=0.5,0.5,0,0&iccEmbed=0&layer=comp&.v=1474481298618" alt="iphone"></td>
        </tr>

        <tr class="toggle2">
            <td>
              <img src="http://static.fnac-static.com/multimedia/Images/FR/NR/f5/3b/50/5258229/1540-1/tsp20130610173019/Nokia-Lumia-520-Noir.jpg" alt="nokia lumia">
            </td>
        </tr>

        <tr class="toggle2">
            <td><img src="http://images.samsung.com/is/image/samsung/p5/fr/new/galaxy-a5.png?$ORIGIN_PNG$" alt="samsung"></td>
        </tr>

        <tr class="toggle2">
            <td><img src="http://www.sidetalking.com/images/N-GAGE_QD_Fron_1.jpg" alt="n-gage"></td>
        </tr>

        <tr>
            <th>PC portable</th>
        </tr>


        <tr class="toggle3">
            <td><img src="http://image.darty.com/informatique/ordinateur_portable-portable/portable/acer_aspire_v5-591g-57ur_o1601194189396A_164141639.jpg" alt="portable asus"></td>
        </tr>

        <tr class="toggle3">
            <td><img src="http://img.clubic.com/download/image.php?id=06041630&h=00AB&w=00F8&crop=2&options=YToxOntzOjU6ImNvbG9yIjtzOjU6IndoaXRlIjt9" alt="mac book"></td>
        </tr>

        <tr class="toggle3">
            <td><img src="http://i2.cdscdn.com/pdt2/0/4/7/1/300x300/ace4713392897047/rw/acer-aspire-e5-773g-58gk.jpg" alt="portable acer"></td>
        </tr>

        <tr class="toggle3">
            <td><img src="https://images.grosbill.com/ordinateurs_Ordinateur_portable_TOSHIBA_Satellite_C870_145_Blanc_-164555-images800jpg-1.jpg" alt="toshiba"></td>
        </tr>

        <tr>
            <th>Tablette</th>
        </tr>

        <tr class="toggle4">
            <td><img src="https://store.storeimages.cdn-apple.com/4974/as-images.apple.com/is/image/AppleInc/aos/published/images/i/pa/ipad/wifi/ipad-wifi-select-gold-201703_GEO_US?wid=1200&hei=630&fmt=jpeg&qlt=95&op_sharpen=0&resMode=bicub&op_usm=0.5,0.5,0,0&iccEmbed=0&layer=comp&.v=1489697004510" alt="ipad"></td>
        </tr>

        <tr class="toggle4">
            <td><img src="http://images.samsung.com/is/image/samsung/fr_GT-P5210ZWAXEF_011_Standard-1-_white?$TM-Gallery$" alt="tablette samsung"></td>
        </tr>

        <tr class="toggle4">
            <td><img src="http://images.samsung.com/is/image/samsung/p5/au/tablets/explore-more-tab-a.png?$ORIGIN_PNG$" alt="tablette samsung"></td>
        </tr>

        <tr class="toggle4">
            <td><img src="http://brain-images.cdn.dixons.com/0/1/10146810/u_10146810.jpg" alt="tablette asus"></td>
        </tr>
        <script type="text/javascript">
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

        </script>

    </table>
    </section>
  </section>
  <section id="articles">
  <?php if(have_posts()) : ?>
    <?php while(have_posts()) : the_post(); ?>
      <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
      <p class="postmetadata">
        <?php the_time('j F Y') ?> par <?php the_author() ?> | Categorie: <?php the_category(', ') ?> | <?php comments_popup_link('Pas de commentaires', '1 Commentaire', '% Commentaires'); ?>
        <?php edit_post_link('Editer', ' &#124; ', ''); ?>
      </p>
      <section class= "post" id="post-<?php the_ID(); ?>">
        <article class= "col-6 row post_content">
          <?php the_content(); ?>
        </article>
      </section>


    <?php endwhile; ?>
  <?php endif; ?>
</section>
</main>
<?php get_footer(); ?> <!-- ouvrir footer.php -->
