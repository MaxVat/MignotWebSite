<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Contact</title>
        <link rel="stylesheet" type="text/css" href="ContactUs.css" />
    </head>

    <nav>

      <div id="header">
        <p id="headerText">Votre Pharmacie à Lorgues du Var (83510) </p>
          <img id="facebook" src="img/Facebook.png" width="32px" height="32px">
          <img id="twitter" src="img/Twitter.png" width="32px" height="32px">
          <img id="mail" src="img/mail2.png" width="32px" height="32px">
      </div>

      <img id="logo" src="img/logoPharmacie.jpg" />
      <img id="logoCroix" src="img/logoCroix200px.png" />

      <ul id="main">
        <li> <a id="Acceuil" href="MignotWebSite.html">Acceuil</a></li>
        <li>équipe</li>
        <li>Planning</li>
        <li>Marques</li>
        <li>Services
          <ul class="drop">
            <div>
            <li>Ordonnance en ligne</li>
            <li>Livraison à domicile</li>
            <li>Service de garde</li>
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
          <div class="row header">
            <h1></h1>
          </div>
          <div class="row body">
            <form action="#">
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
                  <textarea cols="46" rows="3" name="comments"></textarea
                </li>

                <li>
                  <input class="btn btn-submit" type="submit" value="Submit" />
                  <small>ou appuyer sur <strong>ENTRER</strong></small>
                </li>

              </ul>
            </form>
          </div>
        </div>
      </body>

      <footer>

      <div id="footer-info"> </div>
      <div id="footer-links"> </div>

      </footer>

</html>
