<?php
include('connect.php');
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>EvilHangman- Categories</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
	<img class="logo_head" src="css/img/logobg.png" alt="evil_hangman">
	<img id="frame2" src="css/img/frame.png" alt="frame">
<?php 

if ($language == "en") {
	include_once('includes/header_EN.php');

	echo "<img class='devil' src='css/img/devil.png' alt='devil_face'>";

?>
<p class="text" align="right"><font color="#fff" size="10px">Choose a category:</font> </p>
<form action="#" method="post">
		<div class="category" style="text-align:center">			
			<ul id = "list">
			<li><a href="#" class="myButton">Countries</a></li>
			<li><a href="#" class="myButton">Cities</a></li>
			<li><a href="#" class="myButton">Animals</a></li>
			<li><a href="#" class="myButton">Famous people</a></li>
			<li><a href="#" class="myButton">Star Wars</a></li>
			</ul>
		</div>		
	</form>

<?php
} else {
	include_once('includes/header.php');

	echo "<img class='devil' src='css/img/devil_bg.png' alt='devil_face'>";

?>
	<p class="text" align="center"><font color="#fff" size="10px">Избери категория:</font> </p>
	<form>
		<div class="category" style="text-align:center">
			<ul id = "list">
			<li><a href="#" class="myButton">Държави</a></li>
			<li><a href="#" class="myButton">Градове</a></li>
			<li><a href="#" class="myButton">Животни</a></li>
			<li><a href="#" class="myButton">Известни личности</a></li>
			<li><a href="#" class="myButton">Междузвездни войни</a></li>
			</ul>
		</div>		
	</form>


 <?php	
}
include_once('includes/footer.php');
?>
</body>
</html>