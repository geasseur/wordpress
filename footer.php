  <footer class="footerBlog">
    <article>
      <p>baptiste ventura</p>
      <p>23 rue de la boustifaille</p>
      <a href="#">Sur Mars</a>
    </article>


    <form class="formulaire" action="index.html" method="post">
      <p>Abonnez vous</p>

      <input type="text" name="name" value="votre nom">
      <input type="text" name="mail" value="votre mail">
      <button type="submit" name="button" id="btnEnvois" onclick="confirmation()">envoyer</button>
      <script type="text/javascript">
      function confirmation(){
        confirm("êtez vous sûr de vouloir envoyer?");
      }
      </script>
    </form>

    <?php wp_footer(); ?>

  </footer>
  <script src="js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>

  <script
   src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

  <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
  <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X','auto');ga('send','pageview');
  </script>
  </body>
</html>
