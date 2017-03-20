 
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
	<div id="container_info">
		<h2>ABOUT THE PROJECT</h2>
		<span>Our Mission:</span>
		<p>We hope you have fun and do some brain exercise while playing our word games.</p>
		<span>Creators:</span>
		<p><span>Cvetomila Mirkova</span></p>
		<p><span>Yoana Mladenova</span></p>
		<p><span>Danail Zehov</span></p>
	</div>



<?php
} 
 else {
		include_once('includes/header.php'); 
echo "<form action='#' class='lang' method='get'>";
echo '<input type="hidden" name="lang" value="en">' ;
echo '<input type="submit" value=" " style="background:url(css/img/eng.png);height:40px;width:40px; border: none;">';
echo '</form>';

?>
	<div id="container_info">
		<h2>ЗА ПРОЕКТА</h2>
		<p>Играта <span>„Злата Бесеница“/ The Evil Hangman</span> е създадена с цел да забавлява и радва с прекрасната и нестандартна визия, както малките, така и големите потребители.</p>
		<span>Визия</span>
		<p>Нашата цел е да бъдем максимално креативни, различни и харесвани от по-голям брой потребители. Именно за това решихме да създадем различен вид „Бесеница“, която да е атрактивна за потребителите ни, точно заради нестандартната си визия и дизайн.</p>
		<span>Мисия</span>
		<p>Създаваме полезна, лесна и вдъхновяваща интерактивнаигра, отговаряща на нуждите на хората.</p>
		<span>Ценности</span>
		<p>- Силно чувство за принадлежност в професионалното отношение
			- Ценим свободата на изразяване и вземане на решения в екипа ни
			- Грижим се за нашите клиенти да се забавляват максимално.</p>
		<span>ЕКИП</span>
		<p>Екипът ни – енергичен и гъвкав, вдъхновен и успешен, е основна наша ценност и се радва на взаимно доверие и уважение. В стремежа си да надвишаваме очакванията за качество, непрекъснато се стремим да доставяме по-пълноценни и иновативни услуги на нашите клиенти.</p>
		<span>СЪЗДАТЕЛИ НА ИГРАТА</span>
		<p><span>Цветомила Миркова</span></p>
		<p><span>Йоана Младенова</span></p>
		<p><span>Данаил Зехов</span></p>
	</div>
<?php 
}
include_once('includes/footer.php');
?>

