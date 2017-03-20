<?php 
$servername = 'localhost';
$username 	= 'root';
$password 	= '';
$dbname 	= 'hangman';

 $version = "0.1" ;
 $InitialLives = 6 ;
$conn = mysqli_connect($servername, $username, $password, $dbname);


if (!$conn){
	die ("Connection failed: " . mysqli_connect_error());
} 
