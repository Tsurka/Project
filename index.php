<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
 $conn = mysqli_connect($servername, $username);
 // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// Create database PHP code
  $sql = "CREATE DATABASE IF NOT EXISTS users_hangman ";//name BD
 if (mysqli_query($conn, $sql)) {
    echo "Database created successfully"."<br>";
	echo "Neme BD is  pharmacy"."<br>";
	echo "ВНИМАНИЕ ! БАЗАТА ДАННИ СЕ ЗАРЕЖДА АВТОМАТИЧНО.След оценяване на домашното може да се изтрие";
	echo "<a href='create_table_DB.php'>Go to DATABASE</a>"; 
} else {
    echo "Error creating database: " . mysqli_error($conn);
	echo "<a href='create_table_DB.php'>Go to DATABASE</a>"; 
}
mysqli_close($conn);
include_once('includes/conection_users.php');
// PHP-sql to create tables with name drugs,substances and brands
//table 1
$sql = "CREATE TABLE IF NOT EXISTS users (
	player_id int(11) auto_increment PRIMARY KEY,
	username text NOT NULL,
	password text NOT NULL,
	game_id int(10) NOT NULL,
	score int(10) NOT NULL,
	role int(2) NOT NULL,
	date_deleted DATE NULL )
	ENGINE=InnoDB COLLATE=utf8_general_ci";
	if (mysqli_query($conn, $sql)) {
    echo "TABLE Users are created ";
		header('Location:index1.php');
} else {
    echo "Error creating table: " . mysqli_error($conn);
	mysqli_close($conn);
}
?> 