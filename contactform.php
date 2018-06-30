<?php

if(isset($_GET["submit"])) {
	$name = $_GET["name"];
	$subject = $_GET["subject"];
	$mailFrom = $_GET["mail"];
	$message = $_GET["message"];


	$mailTo = "majam1616@gmail.com";
	$header = "From: " .$name;
	$txt = "You have recieved an email from: " .$name .". \n \n" .$message;

	mail($mailTo, $subject, $txt, $header);
	header("Location: thanks2.html");
}