 <!DOCTYPE html> 
 <html lang="bg"> 
 <head><link rel="stylesheet" type="text/css" href="css/style.css"></head>
<?php
error_reporting(E_ALL & ~E_NOTICE);
//start game 
session_start();
/*if ($_SESSION["language"]=="en"){
	include_once('includes/header_EN.php');
}else{
	include_once('includes/header.php');
}*/
//for check code do not visible 


//*******************************************************
$language=$_SESSION["language"];
$username=$_SESSION["username"];
include_once('includes/conection_users.php');
$read_query = "SELECT * FROM `users` ORDER BY `users`.`score` DESC  ";//sort users by score -high to low
$result = mysqli_query($conn, $read_query); 
 if (mysqli_num_rows($result) >0) { 
			/*$n=1;
			echo "<div id='score_tb' style ='position: absolute; top: 600px; left: 0%; height:50px; overflow: hidden; overflow-y:scroll'>";
			//start -table for view users and score ...**********************************
			echo "<table border=1>"; 
			echo "<tr><td class='white'>N</td>
			<td class='white'>Username</td>
			<td class='white'>SCORE</td>
			<td class='white'>GAMES</td>
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
						echo"<td class='white' >" . $n . "</td>";
					echo "<td class='white'>" . $row['username'] . "</td>"; 
					echo "<td class='white'>" . $row['score'] . "</td>"; 
					echo "<td class='white'>" . $row['game_id'] . "</td>"; 
					echo "</tr>"; 
					}
					$n++;
 			 if ($n==10){//numder fo user to view
				 break;
			 }
		} 
			echo "</table>"; 
			echo "</div>";
			//end  -table for view users and score ...***************************************  */
			echo "<p id='logout'><a href='logout.php'>Log Out</a></p>";//log out the GAME
	}
	
	//******************************************************game choise category EN*****************

if ($language == "en") {
	include_once('includes/header_EN.php');
	echo "<p class='hello'>Hello, <b>" . $username . "</b></p>";
	if ($cat==0){

//category  eng******************************************
	
	echo "<img class='devil' src='css/img/devil.png' alt='devil_face'>";

?>
	<img id="frame2" src="css/img/frame.png" alt="frame">
<p class="text" align="right"><font color="#fff" size="10px">Choose a category:</font> </p>
<form action="#" method="post">
		<div class="category" style="text-align:center">			
			<ul id = "list">
			<li><a href='game.php?cat=1' class="myButton">Countries</a></li>
			<li><a href='game.php?cat=2' class="myButton">Cities</a></li>
			<li><a href='game.php?cat=3' class="myButton">Animals</a></li>
			<li><a href='game.php?cat=4'class="myButton">Famous people</a></li>
			<li><a href='game.php?cat=5' class="myButton">Star Wars</a></li>
			</ul>
		</div>		
	</form>

<?php
} else {
	// *****************start game EN*********************************
	echo "start game";
	?>
	 <form>
		<div class="category" style="text-align:center">
			<p> GAME_bg </p>
			<a href='game.php' class='myButton'>BACK to Category</a>

		</div>		
	</form>
	 
	 <?php
	
//**********************end game**************************************
 }
//*************** category on BG ************************** 
} else {
	include_once('includes/header.php');
	echo "<p class='hello'>Здравей, <b>" . $username . "</b></p>" ;
   if ($cat==0){
	echo "<img class='devil' src='css/img/devil_bg.png' alt='devil_face'>";

?>
	<img id="frame2" src="css/img/frame.png" alt="frame">
	<p class="text" align="center"><font color="#fff" size="10px">Избери категория:</font> </p>
	<form>
		<div class="category" style="text-align:center">
			<ul id = "list">
			<li><a href='game.php?cat=1' class="myButton">Държави</a></li>
			<li><a href='game.php?cat=2' class="myButton">Градове</a></li>
			<li><a href='game.php?cat=3' class="myButton">Животни</a></li>
			<li><a href='game.php?cat=4' class="myButton">Известни личности</a></li>
			<li><a href='game.php?cat=5' class="myButton">Междузвездни войни</a></li>
			</ul>
		</div>		
	</form>
 <?php	
 } else {
	 // *****************start game BG*********************************
	 echo "start game";
	 ?>
	 <form>
		<div class="category" style="text-align:center">
			<p> GAME_bg </p>
			<a href='game.php' class='myButton'>Обратно към Категорите</a>

		</div>		
	</form>
	 
	 <?php
	//**********************end game************************************** 
 }
}

include_once('includes/footer.php');
?>

	
