<?php
// Check for empty fields
if (!isset($_SESSION)) session_start();
error_log(print_r(($_POST['first_name']),true));    
error_log(print_r(($_POST['last_name']),true));
error_log(print_r(($_POST['email']),true));
//error_log(print_r(($_POST['phone']),true));
error_log(print_r(($_POST['comments']),true));

if(empty($_POST['first_name']))    $_SESSION['ERROR']['PRENOM'] = "Veuillez entrer votre prénom";
if (empty($_POST['last_name']))    $_SESSION['ERROR']['NOM'] = "Veuillez entrer votre nom";
if (empty($_POST['email']))   $_SESSION['ERROR']['EMAIL'] = "Veuillez entrer une adresse mail valide";
if (empty($_POST['comments']))   $_SESSION['ERROR']['COMMENTS'] = "Veuillez entrer un commentaire";
   //!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
else $_SESSION['SUCCESS'] = "Votre demande de contact à été traitée avec succès !" ;

$mail = 'olivier.mignot83@outlook.fr'; // Déclaration de l'adresse de destination : Pour tester, changer l'adresse ici.
/*
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bugs.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
*/
$passage_ligne = "\n";
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Bonjour," . $passage_ligne;
$message_txt.= "M/Mme" . $_POST['first_name'] . " " . $_POST['last_name'] . " ";
$message_txt.= "A cherche a contacter via \"Conctact Us\" sur le site de la pharmacie en laissant les informations suivantes : <br/>";
$message_txt.= "Adresse mail : " . "\"" . $_POST['email'] . "\"" . $passage_ligne;
$message_txt.= "Commentaire : " . $_POST['comments'] ;

$message_html = "<html><head></head><body><b>Bonjour</b>, <br/>";
$message_html .= "M/Mme <b>" . $_POST['first_name'] . " " . $_POST['last_name'] . " </b> ";
$message_html .= "A cherche a contacter via \"Conctact Us\" sur le site de la pharmacie en laissant les informations suivantes : <br/>";
$message_html.= "<b>Adresse mail</b>: " . "\"" . $_POST['email'] . "\"" . "<br/>";
$message_html.= "<b>Commentaire</b>: " . $_POST['comments'] . "<br/>";
$message_html.= "</body></html>";

//==========

//=====Création de la boundary.
$boundary = "-----=".md5(rand());
$boundary_alt = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Contact Pharmacie St Ferreol";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"PharmacieMignot\"<serveur-stferreol@outlook.fr>".$passage_ligne;
$header.= "Reply-to: \"PharmacieMignot\" <serveur-stferreol@outlook.fr>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary_alt\"".$passage_ligne;
$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
 
$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
 
//=====Ajout du message au format HTML.
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
 
//=====On ferme la boundary alternative.
$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;
//==========
 
$message.= $passage_ligne."--".$boundary.$passage_ligne;
 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========

header('Location: ContactUs.php');
exit;
?>
