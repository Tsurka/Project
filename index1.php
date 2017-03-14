<?php 

include_once('includes/conection_users.php');
session_start();
echo' 	<form action="" method="get">
				<input type="radio" name="lang" value="bg" >AБВГ.<img src="img/bg.png"  alt="bg" > 
				<input type="radio" name="lang" value="en">ABCD.<img src="img/en.png"  alt="en" > 
				<input type="submit" name="submit" value="language/език">	
					</form>';
if (!empty($_GET['lang'])){
	$language=$_GET['lang'];
$_SESSION["language"]="$language";
}
else{
	$language="bg";
	$_SESSION["language"]="bg";
}
 if ($language == "en") {
	include_once('includes/header_EN.php');
	
?>
<div class="container text-center" >
	<h2>HANGMAN</h2>
	<!--<p>Game for funny and one more thing.... </p> -->           
	<img src="img/foto1.png" class="img-rounded" alt="foto1" width="350" height="250"> 
	<div  id='hello' class="col-lg-6 col-lg-offset-3 text-center"> 
		<?php
			if(empty($_POST['submit'])){
		?>
				<label for='login'> Please fill : </label> 
				<?php 	
					echo "<p><form action='' method='post'>"; 
						input('User name','text','username','Enter user name...'); 
						input('Password','text','password',' Password....'); 
					echo "</p>"; 
					echo "<p>"; 
						submit('LOG ON','btn btn-info'); 
					echo "</p></form>"; 
					echo '<a class="btn btn-default" href="reg_en.php" role="button">If you are not registered do it  <span> here </span></a>';
				?> 
	</div> 
</div> 
 <?php 		
	}else {
		include_once('includes/user_log.php');
	}
}
  
 else {
 include_once('includes/header.php');
     
?>
<div class="container text-center" >
	<h2>БЕСЕНИЦА</h2>
	<!--<p>Игра за губене на време и още нещо.... </p>-->            
	<img src="img/foto3.png" class="img-rounded" alt="foto3" width="350" height="250"> 
	<div  id='hello' class="col-lg-6 col-lg-offset-3 text-center"> 
 		<?php
		if(empty($_POST['submit'])){
		?>
		<label for='login'> Моля попълнете  за да продължите : </label> 
		 <?php
				echo "<p><form action='' method='post'>"; 
					input('Име','text','username',' потребителско име...'); 
					input('Парола','text','password',' парола'); 
				echo "</p>"; 
				echo "<p>"; 
					submit('Вход','btn btn-info'); 
				echo "</p></form>"; 
				echo '<a class="btn btn-default" href="reg_bg.php" role="button">Ако нямате ригистрация го направете <span> тук </span></a>';
		?> 
    </div> 
</div>
 <?php	
 } 
 else { 
		include_once('includes/user_log.php');
	} 
}
include_once('includes/footer.php');
?>
	