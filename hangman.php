<?php
include_once('includes/header_EN.php');
include_once('includes/conection_users.php');
include_once('includes/footer.php');
session_start();
//=============================================
$username=$_SESSION["username"];
echo "<p class='hello'>Hello, <b>" . $username . "</b></p>" ;
echo "<p id='logout'><a href='logout.php'>Log Out</a></p>";//log out the GAME
$read_query = "SELECT  *  FROM `users` WHERE `username`='$username' ";//sort users by score -high to low
$result = mysqli_query($conn, $read_query); 
		$row = mysqli_fetch_assoc($result);	
//===============================================
$_SESSION['cat'] = $_GET['cat'];
$cat=$_SESSION['cat'];
switch ($cat)  {
     case "1":
         $Category = "Countries";
		$list = "Guatemala
				Saint Lucia
				Curacao
				Myanmar
				Turkmenistan
				Zanzibar
				Micronesia";
           break;

		case "2":
         $Category = "Cities";
		$list = "Kolkata 
				Karachi
				Manila
				Jakarta
				Tangerang
				Faridabad
				Guangzhou";
           break;

		case "3":
         $Category = "Animals";
		$list = "Moloch 
				Glakus
				Tenrek
				Axolotl
				Sturgeon
				Yeti crab
				Sandhill crane 
				Goblin shark
				Horseshoe crab
				African coelacanth
				Nautilus";
           break;
		   
		case "4":
         $Category = "Famous people";
		$list = "Neil deGrasse Tyson
				Martin Bormann 
				Nikolaus Otto
				Vladimir Ilyich Lenin
				Lorenzo de Medici 
				Niccolo Machiavelli 
				Thomas More
				Winston Leonard Churchill
				Erich Fromm 
				John Milton
				Isaac Newton";
           break;
		   
		case "5":
         $Category = "Star Wars";
		$list = "Admiral Ackbar
				Nute Gunray 
				Rankor
				Ysalamir
				Motmot
				Adegan crystal
				TAI Interceptor class Predator
				Star Destroyer
				Neimoidian
				Kel Dor
				Kashyyyk
				Mustafar
				Podracer
				Trade Federation
				Intergalactic banking clan
				Felucia
				Confederacy of independent systems
				Cato Neimoidia";
           break;   
		   
	 
	 
}

#   $alpha = "ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÑÒÓÔÕÖØÙÚÛÜÝŸABCDEFGHIJKLMNOPQRSTUVWXYZ";
$alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";

$additional_letters = " -.,;!?%&0123456789";

#==============================================================
?>
<!DOCTYPE html> 
 <html lang="bg"> 
 <head> 
	<meta charset="UTF-8"> 
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>EvilHangman</title>
</head>
<body>
<img id="frame_game" src="css/img/frame_home.jpg" alt="frame">
<div class="container_game" algin="center">
<?php
echo "$username have score :".$row['score']."<br>";
echo "TOTAL GAMES:".$row['game_id']."<br>";
$len_alpha = strlen($alpha);

if(isset($_GET["n"])) $n=$_GET["n"];
if(isset($_GET["letters"])) $letters=$_GET["letters"];
if(!isset($letters)) $letters="";

if(isset($PHP_SELF)) $self=$PHP_SELF;
else $self=$_SERVER["PHP_SELF"];
$links="";
$max=6;					# maximum number of wrong
# error_reporting(0);
$list = strtoupper($list);
$words = explode("\n",$list);
//srand ((double)microtime()*1000000);
$all_letters=$letters.$additional_letters;
$wrong = 0;
echo "<P><span>Play PHP Hangman Game</span> &nbsp; - &nbsp; Category: <span>$Category</span><BR>\n";
if (!isset($n)) { $n = rand(1,count($words)) - 1; }
$word_line="";
$word = trim($words[$n]);
$done = 1;
for ($x=0; $x < strlen($word); $x++)
{
  if (strstr($all_letters, $word[$x]))
  {
    if ($word[$x]==" ") $word_line.="&nbsp; "; else $word_line.=$word[$x];
  } 
  else { $word_line.="_<font size=1>&nbsp;</font>"; $done = 0; }
}

if (!$done)
{

  for ($c=0; $c<$len_alpha; $c++)
  {
    if (strstr($letters, $alpha[$c]))
    {
      if (strstr($words[$n], $alpha[$c])) {$links .= "\n<B>$alpha[$c]</B> "; }
      else { $links .= "\n<FONT color=\"red\">$alpha[$c] </font>"; $wrong++; }
    }
    else
    { $links .= "\n<A HREF=\"$self?letters=$alpha[$c]$letters&n=$n&cat=$cat\">$alpha[$c]</A> "; }
  }
  $nwrong=$wrong; if ($nwrong>6) $nwrong=6;
  //print pictute
 echo "\n<p><BR>\n<IMG SRC=\"hangman_$nwrong.gif\" ID=\"hang\" ALIGN=\"LEFT\" BORDER=0 WIDTH=100 HEIGHT=100 ALT=\"Wrong: $wrong out of $max\">\n";
  echo "\n<p><BR>\n<IMG SRC=\"css/img/devil_eng/devil_$nwrong.png\" CLASS=\"devil_teaser\"  ALT=\"Wrong: $wrong out of $max\">\n";
  if ($wrong >= $max)
  {
    $n++;
    if ($n>(count($words)-1)) $n=0;
    echo "<BR><BR><H1><font size=5>\n$word_line</font></H1>\n";
    echo "<p><BR><FONT color=\"red\"><BIG>SORRY, YOU ARE HANGED!!!</BIG></FONT><BR><BR>";
    if (strstr($word, " ")) $term="phrase"; else $term="word";
    echo "The $term was \"<span>$word</span>\"<BR><BR>\n";
   // echo "<A HREF=$self?n=$n>Play again.</A>\n\n";
   //==========================insert score - ============================
   $score=$row['score']-1;
  $num_games=$row['game_id']+1;
  $insert_query = "UPDATE `users` SET `score`='$score' ,`game_id`='$num_games' WHERE `username`='$username'"; 
			if (mysqli_query($conn, $insert_query)) { 
				echo "New record created successfully"; 
			} else { 
			//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!! 
			echo "Error: " . $insert_query . " - " . mysqli_error($conn); 
			} 
	echo "<a href='game.php' >Play again</a>";
  }
  else
  {
    echo " &nbsp; # Wrong Guesses Left: <span>".($max-$wrong)."</span><BR>\n";
    echo "<H1><font size=5>\n$word_line</font></H1>\n";
    echo "<P><BR>Choose a letter:<BR><BR>\n";
    echo "$links\n";
	echo "<p><a href='game.php'><button>GO BACK</button></a></p>";
  }
}
else
{
  $n++;	# get next word
  if ($n>(count($words)-1)) $n=0;
  echo "<BR><BR><H1><font size=5>\n$word_line</font></H1>\n";
  echo "<P><BR><BR><span>Congratulations!!! &nbsp;You win!!!</span><BR><BR><BR>\n";
   echo "<img src=\"css/img/devil_eng/devil_beaten.png\" class=\"devil_teaser\" alt=\"devil\">";
  //echo "<A HREF=$self?n=$n>Play again</A>\n\n";
  //=================================================inser score +================
  $score=$row['score']+1;
  $num_games=$row['game_id']+1;
  $insert_query = "UPDATE `users` SET `score`='$score' ,`game_id`='$num_games' WHERE `username`='$username'"; 
			if (mysqli_query($conn, $insert_query)) { 
				echo "New record created successfully"; 
			} else { 
			//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!! 
			echo "Error: " . $insert_query . " - " . mysqli_error($conn); 
			} 
  echo "<a href='game.php' >Play again</a>";
}

?>
</div>
</body>
</html>



