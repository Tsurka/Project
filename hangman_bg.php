<?php
header('Content-Type: text/html; charset=utf8');

$wrong = 0;

$list = 
//BG BG 
include_once('includes/header.php');
include_once('includes/conection_users.php');
include_once('includes/footer.php');
//include('includes/buttons.php');
session_start();
//=============================================
$username=$_SESSION["username"];
echo "<p class='hello'>Здравей, <b>" . $username . "</b></p>" ;
echo "<p id='logout'><a href='logout.php'>Log Out</a></p>";//log out the GAME
$read_query = "SELECT  *  FROM `users` WHERE `username`='$username' ";//sort users by score -high to low
$result = mysqli_query($conn, $read_query); 
		$row = mysqli_fetch_assoc($result);	
//===============================================
$_SESSION['cat'] = $_GET['cat'];
$cat=$_SESSION['cat'];

switch ($cat)  {
     case "1":
         $Category = "Държави";
		$list = "ГВАТЕМАЛА
				СЕЙНТ ЛУСИЯ
				КЮРАСАО
				МИАНМАР
				ТУРКМЕНИСТАН
				ЗАНЗИБАР
				МИКРОНЕЗИЯ";
			break;

		case "2":
         $Category = "Градове";
		$list = "КАЛКУТА 
				КАРАЧИ
				МАНИЛА
				ДЖАКАРТА
				ТАНГЕРАНГ
				ФАРИДАБАД
				ГУАНДЖОУ";
           break;

	  case "3":
         $Category = "Животни";
		$list = "НАРВАЛ
				МОЛОХ
				ГЛАКУС
				ТЕНРЕК
				АШОЛОТЪЛ
				КИТОГЛАВА ЧАПЛА
				РАК ЙЕТИ
				АЛПАКА
				КАНАДСКИ ЖЕРАВ
				ЕСЕТРА
				АКУЛА ГОБЛИН
				МЕЧЕНОСЕЦ
				ЛАТИМЕРИЯ
				НАУТИЛУС";
           break;
		case "4":
         $Category = "Известни личности";
		$list = "НИЙЛ ДЕГРАС ТАЙСЪН
				МАРТИН БОРМАН
				НИКОЛАУС ОТО
				НИКОЛО МАКИАВЕЛИ
				ВЛАДИМИР ИЛИЧ ЛЕНИН
				УИНСТЪН ЛЕНЪРД ЧЪРЧИЛ
				ТОМАС МОР
				ПЕРИКЪЛ
				МАРК АВРЕЛИЙ
				ЕРИХ ФРОМ
				ЛОРЕНЦО ДЕ МЕДИЧИ
				ДЖОН МИЛТЪН
				";
           break; 
		case "5":
         $Category = "Междузвездни войни";
		$list = "АДМИРАЛ АКБАР
				НЮТ ГЪНРЕЙ
				РАНКОР
				ЙОСАЛАМИР
				МОТМОТ
				АДЕГАНСКИ КРИСТАЛ
				ТАЙ ИЗТРЕБИТЕЛ КЛАС ХИЩНИК
				ЗВЕЗДЕН РАЗРУШИТЕЛ
				НЕЙМОЙДИАНЕЦ
				КЕЛ ДОР
				КАШИЙК
				МУСТАФАР
				РЕАКТИВНА ШЕЙНА
				ТЪРГОВСКА ФЕДЕРАЦИЯ
				ИНТЕРГАЛАКТИЧЕСКИ КЛАН НА БАНКЕРИТЕ
				БЛАСТЕРНА ВИНТОВКА
				ФЕЛУЦИЯ
				КОНФЕДЕРАЦИЯ НА НЕЗАВИСИМИТЕ СИСТЕМИ
				КЕЙТО НЕЙМОЙДИЯ
				";
           break;   
	 
	 
}

   $alpha = ['А','Б','В','Г','Д','Е','Ж','З','И','Й','К','Л','М','Н','О','П','Р','С','Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ъ','Ь','Ю','Я'];
//$alpha = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
/*$alphas = [ord('а'),ord('б')];
$alpha = ""; 
for($t = 0;$t < count($alphas);$t++ ){
	$alpha = $alphas[$t];

}
echo utf8_decode(chr($alpha)); */
 // var_dump($alpha);
$additional_letters = " -.,;!?%&0123456789";

//==============================================================
?>
<img id="frame_game" src="css/img/frame_home.jpg" alt="frame">
<div class="container_game" algin="center">
<?php
echo "$username има резултат :".$row['score']."<br>";
echo "Всички игри:".$row['game_id']."<br>";
$len_alpha = count($alpha);

if(isset($_GET["n"])) $n=$_GET["n"];
if(isset($_GET["letters"]))$letters=$_GET["letters"];

if(!isset($letters)) $letters=" ";

if(isset($PHP_SELF)) $self=$PHP_SELF;
else $self=$_SERVER["PHP_SELF"];
$links="";
$max=6;					# maximum number of wrong
# error_reporting(0);
// $list = strtoupper($list);

$words = explode("\n",$list);

//srand ((double)microtime()*1000000);
$all_letters=$letters;




$wrong = 0;
echo "<P><span>Игра на Бесеница</span> &nbsp; - &nbsp; Категория: <span>$Category</span><BR>\n";
if (!isset($n)) { $n = rand(1,count($words)) - 1; }

$word_line="";
$word2 = trim($words[$n]);
$word = $word2;

mb_regex_encoding('UTF-8');
$word = preg_split('/(?<!^)(?!$)/u', $word, null, PREG_SPLIT_NO_EMPTY);
// $word = explode(' ', $word);
// $word = str_split($word,1);

$done = 1;

for ($x=0; $x < count($word); $x++)
{
	
    
  
  if (mb_strstr($all_letters,$word[$x]))
  {
    if ($word[$x]==" ") $word_line.="&nbsp; "; else $word_line.=$word[$x];
  } 
  else { $word_line.="_<font size=1>&nbsp;</font>"; $done = 0; }
	}


if (!$done)
{

  for ($c=0; $c<$len_alpha; $c++)
  {
    if (mb_strstr($all_letters,$alpha[$c]))
    {
      if (mb_strstr($words[$n], $alpha[$c])) {$links .= "\n<B>$alpha[$c]</B> "; }
      else { $links .= "\n<FONT color=\"red\">$alpha[$c] </font>"; $wrong++; }
    }
    else
		
    { 
	
	$links .= "\n<a HREF=\"$self?letters=". urlencode($alpha[$c])."$letters&n=$n&cat=$cat\">".$alpha[$c]."</a> ";
//echo mb_detect_encoding($alpha[$c]);
}
  }
  $nwrong=$wrong; 
  if ($nwrong>6)
   $nwrong=6;
  //print pictute
  echo "\n<p><BR>\n<IMG SRC=\"hangman_$nwrong.gif\" ID=\"hang\" ALIGN=\"LEFT\" BORDER=0 WIDTH=100 HEIGHT=100 ALT=\"Wrong: $wrong out of $max\">\n";
   echo "\n<p><BR>\n<IMG SRC=\"css/img/devil_bg/devibgl_$nwrong.png\" CLASS=\"devil_teaser\"  ALT=\"Wrong: $wrong out of $max\">\n";
  if ($wrong >= $max)
  {
    $n++;
    if ($n>(count($words)-1)) $n=0;
    echo "<BR><H1 ><font size=5>\n$word_line</font></H1>\n";
    echo "<p><BR><FONT color=\"red\"><BIG>Съжалявам ОБЕСЕН СИ!!!</BIG></FONT><BR><BR>";
     $term="Думата";
    echo "$term Беше :  \"<span>".implode(' ', $word)."</span>\"<BR><BR>\n";
   // echo "<A HREF=$self?n=$n>Play again.</A>\n\n";
   //==========================insert score - ============================
   $score=$row['score']-1;
  $num_games=$row['game_id']+1;
  $insert_query = "UPDATE `users` SET `score`='$score' ,`game_id`='$num_games' WHERE `username`='$username'"; 
			if (mysqli_query($conn, $insert_query)) { 
				echo "Успешен запис в базата данни!"; 
			} else { 
			//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!! 
			echo "Error: " . $insert_query . " - " . mysqli_error($conn); 
			} 
    
	echo "<p><a href='game.php' >Играй ПАК!</a></p>";
  }
  else
  {
    echo " &nbsp; # Оставащи грешни опита: <span>".($max-$wrong)."</span><BR>\n";
    echo "<H1><font size=5>\n$word_line</font></H1>\n";
    echo "<P><BR>Избери Буква:<BR><BR>\n";
    echo "$links\n";
    echo "<p><a href='game.php'><button>НАЗАД</button></a></p>";
  }
}
else
{
  $n++;	# get next word
  if ($n>(count($words)-1)) $n=0;
  echo "<BR><BR><H1><font size=5>\n$word_line</font></H1>\n";
  echo "<P><BR><BR><span>СПЕЧЕЛИ!!! &nbsp;ПОЗНА ДУМАТА!!!</span><BR><BR><BR>\n";
  echo "<img src=\"css/img/devil_bg/devibgl.png\" class=\"devil_teaser\" alt=\"devil\">";
  //echo "<A HREF=$self?n=$n>Play again</A>\n\n";
  //=================================================inser score +================
  $score=$row['score']+1;
  $num_games=$row['game_id']+1;
  $insert_query = "UPDATE `users` SET `score`='$score' ,`game_id`='$num_games' WHERE `username`='$username'"; 
			if (mysqli_query($conn, $insert_query)) { 
				echo "УСПЕШНО направен запис в базата данни!"; 
			} else { 
			//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! during development !!!!!!!!!!!!!!! 
			echo "Error: " . $insert_query . " - " . mysqli_error($conn); 
			} 
    
  echo "<p><a href='game.php' >Играй ПАК!</a></p>";
}


?>




