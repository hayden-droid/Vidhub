<?php

ob_start(); // Turn on output buffering
session_start();

date_default_timezone_set("Europe/London");

try{
	// $con = new PDO("**Your Host Name**", "**Your DB name**", "**Your DB Password**");
	$con = new PDO("mysql:host=db5015879747.hosting-data.io;dbname=dbs12945197", 'dbu1516412', 'Hi9hay9den');
	$con-> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
} catch(PDOException $e){
	echo "Connection failed: " . $e->getMessage();
}

?>
