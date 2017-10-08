<?php
require 'header.php'
?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Pharmacie Lorgues</title>
        <link rel="stylesheet" type="text/css" href="../css/styles.css" />
          <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    </head>

    <nav>
      <div id="header">
        <p id="headerText">Votre Pharmacie de Lorgues situé dans le Var (83510) </p>
          <i class="fa fa-facebook fa-2x fa-fw" aria-hidden="true"></i>
          <i class="fa fa-envelope-open-o fa-2x fa-fw" aria-hidden="true"></i>
      </div>

      <img id="logo" src="../img/logoPharmacie.jpg" />
      <img id="logoCroix" src="../img/logoCroix200px.png" />

      <ul id="main">
        <li> <a id="Acceuil" href="../index.html">Acceuil</a></li>
        <li><a id="equipe" href="../equipe.html">équipe</a></li>
        <li><a id="Planning" href="../Planning/planning.php">Planning</a></li>
        <li><a id="Marques" href="../Marques/marques.php">Marques</a></li>
        <li id="Services">Services
          <ul class="drop">
            <div>
            <li><a href="../services/ordonnance.html">Ordonnance en ligne</a></li>
            <li><a href="../services/livraison.html">Livraison à domicile</a></li>
            <li><a href="../services/garde.html">Service de garde</a></li>
            </div>
          </ul>
        </li>
        <li> <a id="ContactUs" href="../ContactUs/ContactUs.php">Contact</a></li>
        <li></li>
        <li></li>
        <div id="marker"></div>
      </ul>
    </nav>

    <?php
    $semainep=$nb_semaines%2;
      if ($semainep==0){
    ?>
  <table>
  <thead>
    <tr>
      <th></th>
      <th>
        <span class="long">Lundi</span>
        <span class="short">Lun</span>
      </th>
      <th>
        <span class="long">Mardi</span>
        <span class="short">Mar</span>
      </th>
      <th>
        <span class="long">Mercredi</span>
        <span class="short">Mer</span>
      </th>
      <th>
        <span class="long">Jeudi</span>
        <span class="short">Jeu</span>
      </th>
      <th>
        <span class="long">Vendredi</span>
        <span class="short">Ven</span>
      </th>
      <th>
        <span class="long">Samedi</span>
        <span class="short">Sam</span>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td >8:45</td>
      <td class="ferme"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
    </tr>
    <tr>
      <td >10:00</td>
      <td class="ferme"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>

    </tr>
    <tr>
      <td >11:00</td>
      <td class="ferme"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
    </tr>

    <tr class="ferme">
      <td >12:00</td>
      <td ></td>
      <td ></td>
      <td ></td>
      <td ></td>
      <td ></td>
      <td ></td>

    </tr>
   <tr class="ferme">
      <td >13:00</td>
      <td></td>
      <td ></td>
      <td ></td>
      <td ></td>
      <td ></td>
      <td ></td>

    </tr>
    <tr class="ouvert">
      <td >14:30</td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>

    </tr>
    <tr class="ouvert">
      <td >15:00</td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>

    </tr>
    <tr class="ouvert">
      <td >16:00</td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>

    </tr>
    <tr class="ouvert">
      <td >17:00</td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>

    </tr>

    <tr class="ouvert">
      <td >18:00</td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>

    </tr>
    <tr class="ouvert">
      <td >19:00</td>
    </tr>

  </tbody>
</table>
<?php
}
elseif ($semainep==1){
?>
   <table>
  <thead>
    <tr>
      <th></th>
      <th>
        <!-- <span class="day">1</span> -->
        <span class="long">Lundi</span>
        <span class="short">Mon</span>
      </th>
      <th>
        <!-- <span class="day">2</span> -->
        <span class="long">Mardi</span>
        <span class="short">Tue</span>
      </th>
      <th>
        <!-- <span class="day">3</span> -->
        <span class="long">Mercredi</span>
        <span class="short">We</span>
      </th>
      <th>
       <!-- <span class="day">4</span> -->
        <span class="long">Jeudi</span>
        <span class="short">Thur</span>
      </th>
      <th>
        <!-- <span class="day">5</span> day active -->
        <span class="long">Vendredi</span>
        <span class="short">Fri</span>
      </th>
      <th>
       <!--  <span class="day">6</span> -->
        <span class="long">Samedi</span>
        <span class="short">Sat</span>
      </th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <!-- <td class="ouvert" class="hour" rowspan="4"><span>8:45</span><span>12:00</span></td> -->
      <td>8:45</td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
    </tr>
    <tr>
      <td>10:00</td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>

    </tr>
    <tr>
      <td>11:00</td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
    </tr>

    <tr class="ferme">
      <!--<td class="ouvert" class="hour2" rowspan="4"><span>Bouffe</span></td> -->
      <td>12:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>

   <tr class="ferme">
      <td>13:00</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>

    </tr>
    <tr>
      <td>14:30</td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ferme"></td>

    </tr>
    <tr>
      <td>15:00</td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ferme"></td>

    </tr>

    <tr>

      <td>16:00</td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ferme"></td>

    </tr>
     <tr>

      <td>17:00</td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ferme"></td>

    </tr>
     <tr>

      <td>18:00</td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ouvert"></td>
      <td class="ferme"></td>

    </tr>

    <tr>
      <td >19:00</td>
    </tr>

  </tbody>
</table>
<?php
  }
?>
<div class="semaines">
  <?php
  for ($i=0; $i < 4; $i++) {
  ?>
    <div class="semaine">
        <div class="text">
          <a id="text" href="planning.php?date=<?= $semaine_nav->format('Y-m-d'); ?>">
          <?= "Lundi ",$semaine_nav->format('d-m-Y');?>
          </a>
        </div>
    </div>
  <?php
  $semaine_nav=$semaine_nav->add(new DateInterval('P7D'));
  }
  ?>
</div>

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
