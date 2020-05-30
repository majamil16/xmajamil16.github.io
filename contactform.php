<?php

if(isset($_GET["submit"])) {
	$name = $_GET["name"];
	$subject = $_GET["subject"];
	$mailFrom = $_GET["mail"];
	$message = $_GET["message"];


	$mailTo = "myemail@email.com";
	$header = "From: " .$name;
	$txt = "You have recieved an email from: " .$name .". \n \n" .$message;

	mail($mailTo, $subject, $txt, $header);
	header("Location: thanks2.html");
}
