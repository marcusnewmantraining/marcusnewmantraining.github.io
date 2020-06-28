<?php

if (isset($_POST['submit'])){
	$name= $_POST['name'];
	$name= $_POST['subject'];
	$name= $_POST['mail'];
	$name= $_POST['message'];
	
	$mailTo = "sean@killersprocket.com.au";
	$headers = "From: ". $mailFrom;
	$txt ="You have recieved an email from ".$name. ".\n\n" .$message;
	
	mail($mailTo, $subject, $header);
	header("Location: index.php?mailsend");
}

	