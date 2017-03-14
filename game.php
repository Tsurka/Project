<?php
//тука тррябва да е играта
session_start();
if ($_SESSION["language"]=="en"){
	include_once('includes/header_EN.php');
}else{
	include_once('includes/header.php');
}
echo "Бесеница"."<br>";
echo "HELLO !!!" . $_SESSION["username"] . ".<br>";
echo "HELLO !!!" . $_SESSION["language"] . ".<br>";
$username=$_SESSION["username"];
include_once('includes/conection_users.php');
$read_query = "SELECT * FROM `users` ORDER BY `users`.`score` DESC  ";
$result = mysqli_query($conn, $read_query); 
 if (mysqli_num_rows($result) >0) { 
			$n=1;
			echo "<table border=1>"; 
			echo "<tr><td>_N_</td>
			<td>_Username_</td>
			<td>_SCORE_</td>
			<td> GAMES </td>
			</tr>"; 
		while($row = mysqli_fetch_assoc($result)){ 
				echo "<tr>";
					if ($username==$row['username']){
					echo"<td class='chess'>" . $n . "</td>";
					echo "<td class='chess'>" . $row['username'] . "</td>"; 
					echo "<td class='chess'>" . $row['score'] . "</td>"; 
					echo "<td class='chess'>" . $row['game_id'] . "</td>"; 
					echo "</tr>"; 
					} else{
						echo"<td >" . $n . "</td>";
					echo "<td >" . $row['username'] . "</td>"; 
					echo "<td >" . $row['score'] . "</td>"; 
					echo "<td >" . $row['game_id'] . "</td>"; 
					echo "</tr>"; 
					}
					$n++;
 			 if ($n==10){//numder fo user to view
				 break;
			 }
		} 
			echo "</table>"; 
		echo "<a href='logout.php'>Log Out</a>";
	}