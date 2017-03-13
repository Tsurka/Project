<?php
$conn = mysqli_connect('localhost', 'root', '', 'users_hangman');
if (!$conn) {
 	die("Connection failed: " .mysqli_connect_error());
	} else {
 	//echo "Connected successfully !";
 	}
	$conn = mysqli_connect('localhost', 'root', '', 'users_hangman');