<?php 
error_reporting(E_ALL & ~E_NOTICE);
session_start();
include_once('includes/conection_users.php');


$_SESSION['language'] = $_GET["lang"];
$lang= $_SESSION['language'];
$_SESSION["cat"]=0;

 if ($lang == "en") {
	include_once('includes/header_EN.php');
echo "<form action='#' class='lang' method='get'>";
echo '<input type="hidden" class="lang" name="lang" value="bg">' ;
echo '<input type="submit" value=" " style="background:url(css/img/bg.png);height:40px;width:40px; border: none;">';
echo '</form>';


?>

<img id="frame_home" src="css/img/frame_home.jpg" alt="frame">
<div class="container" >           
	<div  id='hello'>
	<?php
			if(empty($_POST['submit'])){
		?>
 		<label for='login'> Please fill : </label> 
		<?php 
		echo "<p><form action='' method='post'>"; 
		input('User name ','text','username','Enter user name...'); 
		input('Password ','password','password',' Password....'); 
		echo "</p>"; 
		echo "<p>"; 
		submit('LOG IN','btn btn-info'); 
		echo "</p></form>"; 
		echo '<a class="btn btn-default" href="reg_en.php" role="button">If you are not yet registered do it  <span> here </span></a>';
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
		echo "<form action='#' class='lang' method='get'>";
echo '<input type="hidden" name="lang" value="en">' ;
echo '<input type="submit" value=" " style="background:url(css/img/eng.png);height:40px;width:40px; border: none;">';
echo '</form>';
?>

<img id="frame_home" src="css/img/frame_home.jpg" alt="frame">
<div class="container" >           
	<div  id='hello' > 
	<?php
			if(empty($_POST['submit'])){
		?>
 		<label for='login'> Моля попълнете, за да продължите : </label> 
		<?php 
		echo "<p><form action='' method='post'>"; 
		input('Име ','text','username',' потребителско име...'); 
		input('Парола ','password','password',' парола'); 
		echo "</p>"; 
		echo "<p>"; 
	 	submit('Вход','btn btn-info'); 
		echo "</p></form>"; 
		echo '<a  href="reg_bg.php" role="button">Ако нямате ригистрация го направете <span> тук </span></a>';
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
	