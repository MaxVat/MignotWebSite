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
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>

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

		<div class="alphabet">
			<?php
			foreach(range('A','Z') as $i) {
    		echo "<a href=#".$i .">" .$i ."</a>";
   		    if ($i != "Z") echo "<font color='#009a82'> | </font>";
			}
			?>
		</div>

		<div class="wrap">

			<?php
			$marques = $DB->query('SELECT * FROM marque');
			$initiales = array(26);
			$lettreMarque = array(26);

			for ($i=65; $i<=90; $i++) {
					$initiale= chr($i);
					$lettreMarque[$i] = 0;
					$initiales[$i]=$initiale;

					foreach ( $marques as $marque ):
						if (initiales($marque->NOM)==$initiale) {
						 $lettreMarque[$i] ++ ;
						} endforeach ;
			}
				for ($i=65; $i<=90; $i++) {
					$initiale= chr($i);
					$initiales[$i]=$initiale;
			?>
				<?php if($lettreMarque[$i]>0){ ?>
					<div class="lettre" id="<?=$initiale?>">
					<?=$initiale;?>
					</div>
					<div class="wrapbox">
					<?php
						foreach ( $marques as $marque ):
						if (initiales($marque->NOM)==$initiale) {

						$sql = "SELECT * FROM marque WHERE NOM ='" . $marque->NOM . "'";
						//var_dump($sql);
						$sth = $DB->query($sql);
						?>
								<div class="box">
									<?= '<img class="thumb" src="data:image/jpeg;base64,'.base64_encode($sth[0]->IMAGE ).'" onclick="openNav(this,\''.$sth[0]->NOM.'\')";/>'; ?>

										<!-- The overlay -->
										<div id="myNav" class="overlay">

										  <!-- Button to close the overlay navigation -->
										  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

										  <!-- Overlay content -->
										  <div id="myNav-img">
										 </div>

										</div>

									<!--<div class="NOM">
										<?= $marque->NOM; ?>
									</div>	-->
								</div>
					<?php } endforeach ?>
					</div>
					<?php } ?>
			<?php
			}
			?>

		</div>

		<script>

		/* Open when someone clicks on the span element */
		function guidGenerator() {
    	var S4 = function() {
       return (((1+Math.random())*0x10000)|0).toString(16).substring(1);
  	  	};
    	return (S4()+S4()+"-"+S4()+"-"+S4()+"-"+S4()+"-"+S4()+S4()+S4());
		}

		var random ;

		function openNav(element, titre) {
			var titre_image =  titre ;

			var img_precedente = document.getElementById(random);
			if(img_precedente!=null)
			img_precedente.parentNode.removeChild(img_precedente);

			random = guidGenerator();
			var img = document.createElement("img");
			img.src = element.src;
			img.id=random;

			var titre = document.createElement("h1")                // Create a <h1> element
			titre = document.createTextNode(titre_image);     // Create a text node

			var src = document.getElementById("myNav-img");
			//src.appendChild(titre);

			var src = document.getElementById("myNav-img");
			src.appendChild(img);
		    document.getElementById("myNav").style.width = "100%";
		    $("#main").css('z-index','0');
		    /*$(".marque_img").css('display','inline-block');
			$(".marque_img").css('margin','auto');
			$(".marque_img").css('text-align','middle');*/
		}

		/* Close when someone clicks on the "x" symbol inside the overlay */
		function closeNav() {
		    document.getElementById("myNav").style.width = "0%";
		    $("#main").show();

		}

		</script>

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
      <li><a id="Mentions" href="../ContactUs/ContactUs.php">Nous contacter</a></li>
    </ul>
  <div>
</div>

</footer>

</html>
