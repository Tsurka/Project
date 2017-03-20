
 <link rel="stylesheet" type="text/css" href="css/style.css">
  <img id="frame3" src="css/img/frame.jpg" alt="frame">
<?php 
error_reporting(E_ALL & ~E_NOTICE);
session_start();




$_SESSION['language'] = $_GET["lang"];
$lang= $_SESSION['language'];

 if ($lang == "en") {
	include_once('includes/header_EN.php');
echo "<form action='#' class='lang' method='get'>";
echo '<input type="hidden" class="lang" name="lang" value="bg">' ;
echo '<input type="submit" value=" " style="background:url(css/img/bg.png);height:40px;width:40px; border: none;">';
echo '</form>';


?>
	<div id="container_form">
		<h2>Contact us</h2>
		<form action="#" method="get">
		<p><span>Name*</span>
		<input type="text" name = "name" placeholder="Your name..."></p>
		<p><span>Email*</span>
		<input type="email" name = "email" placeholder = "Give us a email..."></p>
		<p><textarea rows="10" cols="50" name="text" placeholder="Tell us what you think..."></textarea><p>
		<input type="submit" name="submit" value="Send">
		</form>
	</div>

<?php
} 
 else {
		include_once('includes/header.php'); 
include_once('includes/conection_users.php');
echo "<form action='#' class='lang' method='get'>";
echo '<input type="hidden" name="lang" value="en">' ;
echo '<input type="submit" value=" " style="background:url(css/img/eng.png);height:40px;width:40px; border: none;">';
echo '</form>';


?>
<div id="container_form">
		<h2>Свържете се с нас</h2>
		<form action="#" method="get">
		<p><span>Име*</span>
		<input type="text" name = "name" placeholder="Име..."></p>
		<p><span>Имейл*</span>
		<input type="email" name = "email" placeholder = "Имейл..."></p>
		<p><textarea rows="10" cols="50" name="text" placeholder="Кажи ни какво мислиш..."></textarea><p>
		<input type="submit" name="submit" value="Изпрати">
		</form>
	</div>


<?php 
}
include_once('includes/footer.php');
?>

