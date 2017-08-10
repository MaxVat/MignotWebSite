<?php
require 'db.class.php';
$DB = new DB();

/*Pour l'affichage des marques */

function initiales($marques){
    $n_mot = explode(" ",$marques);
    $nom_initiale=NULL;
    foreach($n_mot as $lettre){

        $nom_initiale .= $lettre{0};
    }
    return strtoupper($nom_initiale);
}

	
function init_tableau(){
	for ($i=65; $i<=90; $i++) {
		$alphabet[chr($i)]=0 ; 
		}
}


/* ajout des marques */
/*
$picture_test = fopen('marques');

$picture = fopen('marques/adv.jpg');
$data = fread($picture, filesize('marques/adv.jpg'));
$sqlpic = mysql_excape_string($data);

var_dump($picture_test);
var_dump($picture);
var_dump($data);
var_dump($mysqlpic)

//It's good to find the mime type for later
//if the mime_magic extension is enabled
//$mime = mime_content_type('path/to/file'))
//or on unix/linux
//$mime = exec("file -bi path/to/file"

//$DB->query("INSERT INTO `pictures` (`type`, `pic`) VALUES ('$mime', '$sqlpic')");

/*
$result = $DB->query("SELECT * FROM marques WHERE id = 1");

$picture = mysql_fetch_array($result);
header("Content-type: ". $picture['type']);
echo $picture['pic'];
*/
?>