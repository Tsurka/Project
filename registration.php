<?php 
include_once('includes/header.php');
?>
<?php
if(empty($_POST['user_name'])){
		?>	
		<div class="container text-center" >
			<h2>БЕСЕНИЦА</h2>
			<p>Игра за губене на време и още нещо.... </p>            
			<img src="img/foto2.jpg" class="img-rounded" alt="foto1" width="300" height="150"> 
			<div  id='hello' class="col-lg-6 col-lg-offset-3 text-center"> 
				<label for='login'> Моля попълнете име на играча  : </label> 
				<?php	
				echo "<p><form action='registration.php' method='post'>"; 
					input('login','text','user_name','Enter  name...'); 
				echo "</p>"; 
				echo "<p>"; 
					submit('Регистрирай','btn btn-info'); 
				echo "</p></form>"; 
				?>
			</div> 
		</div>
<?php	
 	} 
 else { 
 	$username = $_POST['user_name']; 
 	$password = $_POST['password']; 
 	$password = md5($password); 
 
 $read_query = 	"SELECT * FROM users  
 				WHERE username = '$username'"; 
 $read_result = mysqli_query($conn, $read_query); 
$row = mysqli_fetch_assoc($read_result); 
 //var_dump($row); 
 if($row['password'] === $password){ 
if($row['role'] == 1){ 
	header('Location: admin.php'); 
 	 
 } 
 elseif($row['role'] ==0){ 
 	header('Location: user.php'); 
  
 } 
 } 
 else { 
	echo "<div class='alert alert-danger' role='alert'>Грешна парола или потребителско име!!!</div>"; 
} 

 } 
 
?> 

<?php
include_once('includes/footer.php');