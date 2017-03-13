<?php
include_once('includes/header_EN.php');
include_once('includes/conection_users.php');
	
	if(empty($_POST['submit'])){
		?>	
		<div class="container text-center" >
				<h2>HANGMAN</h2>
				<p>REGISTRATION</p>            
				<!--<img src="img/foto2.jpg" class="img-rounded" alt="foto1" width="300" height="150"> -->
				<div  id='hello' class="col-lg-6 col-lg-offset-3 text-center"> 
					<label for='login'> Please fill in the name of the player  : </label> 
					<?php	
					echo "<p><form action='reg_en.php' method='post'>"; 
						input('User name','text','username',' name'); 
						input('PASSWORD','text','password',' password'); 
					
					echo "</p>"; 
					echo "<p>"; 
						submit('SUNMIT','btn btn-info'); 
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
				//$password = md5($password);
				$insert_query = 	"INSERT INTO users (username, password) 
							VALUES ('$username', '$password')";
				//or $result
				$insert_result= mysqli_query($conn, $insert_query);
				if ($insert_result) {
				echo "Successful user registration $username !";
				echo "<a href='index1.php'>Log In</a>";
				}else{
				echo "Failed to add user ! Please, try again!";
				}
			}
			?>
			</div>
			</div>
			
	<?php		
 include_once('includes/footer.php');?>
