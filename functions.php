<?php

require("../../config.php");

/* ALUSTAN SESSIOONI */	
	session_start();
	
// ÜHENDUS
	$database = "if16_karin";
	$mysqli = new mysqli($serverHost, $serverUsername, $serverPassword, $database);	

// KLASSID
	require("Helper.class.php");
	$Helper = new Helper();

	
/* klassid, mis....klassi lehele tõstetud

	require("User.class.php");
	$User = new User($mysqli);
	
	require("Interest.class.php");
	$Interest = new Interest($mysqli);
	
	require("Car.class.php");
	$Car = new Car($mysqli);
*/	
	
//login(User)  data(Car) edit(Car) user(Interest) ...nendel lehtedel(olid enne vastava klassi funktsioonid)	
	

	
?>