<?php 

    $recipient="pawannautiyal777@gmail.com";
	$subject="INFO OF USER";

	$user = $_POST['user'];

	$email = $_POST['email'];

	$contact = $_POST['contact'];	

	$comment = $_POST['comment'];

	$mailbody="NAME: $user\n Email: $email\n contact: $contact \n comment: $comment ";
	mail($recipient,$subject, $mailbody,"From: $user<$email>");


header('location:index.php');


 ?>