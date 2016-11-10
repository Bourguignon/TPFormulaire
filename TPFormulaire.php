<?php

	echo "<h1>Blog</h1>";
	
	date_default_timezone_set('Europe/Paris');
	
	$jour=date('d');
	$mois=date('m');
	$annee=date('Y');
	$heure=date('H');
	$minutes=date('i');
	$texte='';
	$affich='';


		
		
			$texte=fopen("resource.txt","a+");
			fwrite($texte,($_POST['titre'])."<br/>".($_POST['pseudo'])."<br/>".($_POST['message'])."<br/><br/>");
			fclose($texte);
			$texte=fopen("resource.txt","a+");
			while (!feof($texte)){
				$affich=fgets ($texte);
				echo ($affich);
			}
			fclose($texte);
			echo "Le ".$jour."/".$mois."/".$annee." a ".$heure."h".$minutes."<br/>";
			
	
		
		include("formulaire.html");
?>