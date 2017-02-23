<?php 

echo' 	<form action="" method="get">
				<input type="radio" name="lang" value="bg" >AБВГ.<img src="img/bg.png"  alt="bg" > 
				<input type="radio" name="lang" value="en">ABCD.<img src="img/en.png"  alt="en" > 
				<input type="submit" name="submit" value="language/език">	
					</form>';

$language=$_GET["lang"];
 if ($language == "en") {
	include_once('includes/header_EN.php');
	
?>
<div class="container text-center" >
	<h2>HANGMAN</h2>
	<p>Game for funny and one more thing.... </p>            
	<img src="img/foto1.png" class="img-rounded" alt="foto1" width="350" height="250"> 
	<div  id='hello' class="col-lg-6 col-lg-offset-3 text-center"> 
 		<label for='login'> Please fill : </label> 
		<?php 
		echo "<p><form action='' method='post'>"; 
		input('login','text','user_name','Enter user name...'); 
		echo "</p>"; 
		echo "<p>"; 
		submit('LOG ON','btn btn-info'); 
		echo "</p></form>"; 
		echo '<a class="btn btn-default" href="registration.php" role="button">If you are not registered do it  <span> here </span></a>';
		?> 
    </div> 
</div> 
 <?php 
 } 
 else {
		include_once('includes/header.php');
     
?>
<div class="container text-center" >
	<h2>БЕСЕНИЦА</h2>
	<p>Игра за губене на време и още нещо.... </p>            
	<img src="img/foto3.png" class="img-rounded" alt="foto3" width="350" height="250"> 
	<div  id='hello' class="col-lg-6 col-lg-offset-3 text-center"> 
 		<label for='login'> Моля попълнете  за да продължите : </label> 
		<?php 
		echo "<p><form action='' method='post'>"; 
		input('login','text','user_name',' потребителско име...'); 
		echo "</p>"; 
		echo "<p>"; 
	 	submit('Вход','btn btn-info'); 
		echo "</p></form>"; 
		echo '<a class="btn btn-default" href="registration.php" role="button">Ако нямате ригистрация го направете <span> тук </span></a>';
		?> 
    </div> 
</div>
 <?php	
}
include_once('includes/footer.php');
?>
	