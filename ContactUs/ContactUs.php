<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Contact - Pharmacie Saint Ferréol</title>
        <link rel="icon" href="../img/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="../css/ContactUs.css" />
        <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    </head>

    <nav>

      <div id="header">
        <p id="headerText">Votre Pharmacie de Lorgues situé dans le Var (83510)</p>
        <a id="facebookLink" href="https://www.facebook.com/pharmaciesaintferreol/"><i class="fa fa-facebook fa-2x fa-fw" aria-hidden="true"></i></a>
        <i class="fa fa-envelope-open-o fa-2x fa-fw" aria-hidden="true"></i>
      </div>

      <img id="logo" src="../img/logoPharmacie.jpg" />
      <img id="logoCroix" src="../img/logoCroix200px.png" />

      <ul id="main">
        <li> <a id="Accueil" href="../index.html">Accueil</a></li>
        <li><a id="equipe" href="../equipe.html">équipe</a></li>
        <li><a id="Planning" href="../Planning/planning.php">Planning</a></li>
        <li><a id="Planning" href="../Marques/marques.php">Marques</a></li>
        <li>Services
          <ul class="drop">
            <div>
              <li><a href="../services/ordonnance.html">Ordonnance en ligne</a></li>
              <li><a href="../services/livraison.html">Livraison à domicile</a></li>
              <li><a href="../services/garde.html">Service de garde</a></li>
            </div>
          </ul>
        </li>
        <li> <a id="ContactUs" href="ContactUs.php">Contact</a></li>
        <li></li>
        <li></li>
        <div id="marker"></div>
      </ul>
      <h2>NOUS CONTACTER &nbsp;</h2>
    </nav>

      <body>
        <div class="container">
        <?php 
        if (!isset($_SESSION)){
          session_start();
          if(isset($_SESSION['ERROR'])){
            echo " <div class= \"row check_mail error \">";
            foreach($_SESSION['ERROR'] as $error) echo $error . "<br/>";
            echo "</div>";
          }
          else if (isset($_SESSION['SUCCESS'])){
            echo " <div class= \"row check_mail success \">";
            echo $_SESSION['SUCCESS'];
            echo "</div>";
          }
          unset($_SESSION);
          session_destroy();
        }
        ?>
          <div class="row header">
            <h1></h1>
          </div>
          <div class="row body">
            <form action="Contact_mail.php" method="POST">
              <ul>

                <li>
                  <p class="left">
                    <label for="first_name">Nom</label>
                    <input type="text" name="first_name" placeholder="John" />
                  </p>
                  <p class="pull-right">
                    <label for="last_name">Prénom</label>
                    <input type="text" name="last_name" placeholder="Smith" />
                  </p>
                </li>

                <li>
                  <p>
                    <label for="email">Mail <span class="req">*</span></label>
                    <input type="email" name="email" placeholder="john.smith@gmail.com" />
                  </p>
                </li>
                <li><div class="divider"></div></li>
                <li>
                  <label for="comments">Commentaire(s)</label>
                  <textarea cols="46" rows="3" name="comments"></textarea></TD>
                </li>

                <li>
                  <input class="btn btn-submit" type="submit" value="Envoyer" />
                  <small>ou appuyer sur <strong>ENTRER</strong></small>
                </li>

              </ul>
            </form>
          </div>
        </div>
      </body>

      <footer>

      <div id="footer-info">
        <div id="footerZone">
              <p id="p1"> Où nous trouver ?</p>
              <p id="p2">Pharmacie Saint Férréol<br>1 Avenue de Toulon<br>83510 Lorgues<br><br>Téléphone: 04 94 73 72 97<br>Fax: 04 94 84 36 48<br>Email: pharmacie-stferreol@outlook.fr</p>
              <div id="block2">
                <ul>
                  <li><a href="../services/ordonnance.html">Ordonnance en ligne</a></li>
                  <li><a href="../services/livraison.html">Livraison à domicile</a></li>
                  <li><a href="../services/garde.html">Service de garde</a></li>
                </ul>
              </div>
          <div id="Gmap">
          <div id="map">
            <script>
            function initMap() {
              var myLatLng = {lat: 43.493127, lng: 6.358338};

              var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 10,
                center: myLatLng
              });

              var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!'
              });
            }
          </script>
          <script async defer
              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC8PLo06eCIatA-K4ute1zwzZ96QncKiGk&signed_in=true&callback=initMap"></script>
        </div>
      </div>
      </div>
      </div>
      <div id="footer-links">
        <div id="links">
          <ul>
            <li><a id="Mentions" href="../mentions_legales.html">Mentions légales</a></li>
          </ul>
          <ul>
            <li>©2016-2017 Pharmacie St Ferréol</li>
          </ul>
          <ul>
            <li><a id="Mentions" href="../ContactUs/ContactUs.php">Nous contacter</li>
          </ul>
        <div>
      </div>

      </footer>

</html>
