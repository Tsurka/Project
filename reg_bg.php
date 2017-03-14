<?php
include_once('includes/header.php');
include_once('includes/conection_users.php');
	
	if(empty($_POST['submit'])){
		?>	
		<div class="container text-center" >
				<h2>БЕСЕНИЦА</h2>
				<p>РЕГИСТРАЦИЯ</p>            
				<!--<img src="img/foto2.jpg" class="img-rounded" alt="foto1" width="300" height="150"> -->
				<div  id='hello' class="col-lg-6 col-lg-offset-3 text-center"> 
					<label for='login'> Моля попълнете име на играча  : </label> 
					<?php	
					echo "<p><form action='reg_bg.php' method='post'>"; 
						input('Име','text','username',' потребителско име...'); 
						input('Парола','text','password',' парола'); 
					
					echo "</p>"; 
					echo "<p>"; 
						submit('Регистрирай','btn btn-info'); 
					echo "</p></form>"; 
				?>
				</div> 
			</div>
		<?php	
	}else
		{
			?>
			<div class="container text-center" >
			<img src="img/foto3.png" class="img-rounded" alt="foto3" width="350" height="250"> 
			<div  id='hello' class="col-lg-6 col-lg-offset-3 text-center"> 
			<?php
				$username = $_POST['username'];
				$password = $_POST['password'];
				$password = md5($password);
				//check for valid input 
				$read_query = "SELECT * FROM users WHERE `date_deleted` IS NULL and `username`='$username'"; //data_deleting-грешно date_deleted
				$result = mysqli_query($conn, $read_query); 
				$check_name=mysqli_num_rows($result);
				if ($check_name==0 && $username!==''){
				$insert_query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";			
				//or $result
				$insert_result= mysqli_query($conn, $insert_query);
				if ($insert_result) {
				echo "Успешно добавихте $username в базата данни!";
				echo "<a href='index1.php'>Log In</a>";
				}else{
				echo "Неуспешно добавяне на потребител в базата данни! Моля опитайте отново!";
				}
				}else{
				echo "Неуспешно добавяне на потребител в базата данни! Моля опитайте с друго име !";
				}
			}
			?>
			</div>
			</div>
			
	<?php		
 include_once('includes/footer.php');?>
