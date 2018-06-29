<?php

if(isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['message'];


	$mailTo = "majam1616@icloud.com";
	$header = "From: " .$name;
	$txt = "You have recieved an email from: " .$name .". \n \n" .$message;

	mail($mailTo, $subject, $txt, $header);
	header("Location: index.php?mailsend");
}