<?php
session_start();

$_SESSION['user']="";
$_SESSION['password']="";
$text="";
$tamp="";
$postu="";
$postp="";

	$text=fopen("compte.txt","a+");
	$postu=trim($_POST["user"]);
	$postp=$_POST["password"];
	echo $postu."<br/>";
	echo $postp."<br/>";
	while(!feof($text)){
		$tamp=trim(fgets($text));
		echo $tamp."<br/>";
			if($postu==$tamp){
				$_SESSION['user']=$postu;
				echo $postu."<br/>";
				echo $tamp."<br/>";
			}else if($postp==$tamp){
				$_SESSION['password']=$postp;
				echo $postp."<br/>";
				echo $tamp."<br/>";
			}
	}
	
	fclose($text);
	
	print_r($_POST);
	print_r($_SESSION);
	
	/*if(($_SESSION['user']=='user')&&($_SESSION['password']=='password')){
		include("TPFormulaire.php");
	}*/




?>