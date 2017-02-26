<?php 
require_once('includes/functions.php');
session_start();
$_SESSION["language"]="en";
//$language=$_SESSION["language"];
?>
 <!DOCTYPE html> 
 <html lang="en"> 
 <head> 
	<meta charset="UTF-8"> 
	<title>Project_HANGMAN</title> 
	<!-- Latest compiled and minified CSS --> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> 
 <!-- Optional theme --> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"  
 integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous"> 
 <!-- Latest compiled and minified JavaScript --> 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"  
 integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> 
<link rel="stylesheet" type="text/css" href="css/style.css"> <!--връзка с файла за стилизиране -->
 </head> 
 <body> 
   
		<div id='nav'> 
			<div  class="col-xs-12 col-centered text-center"> 
				
					<a href="index.php"><button type="button" class="btn btn-warning">HOME</button></a> 
					<a href="about.php"><button type="button" class="btn btn-warning">About</button></a> 
					<a href="admin.php"><button type="button" class="btn btn-warning">Contact </button></a> 
				
			</div> 
		</div>

