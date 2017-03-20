<?php
include_once('includes/header_EN.php');
include_once('includes/conection_users.php');
	
	if(empty($_POST['submit'])){
		?>	
		<img id="frame_home" src="css/img/frame_home.jpg" alt="frame">
		<div class="container" > 
			<div  id='hello' > 
				<label for='login'> Please fill in the name of the player  : </label> 
				<?php	
				echo "<p><form action='reg_en.php' method='post'>"; 
						input('Name','text','username',' потребителско име...'); 
						input('Password','text','password',' парола'); 
				echo "</p>"; 
				echo "<p>"; 
					submit('SUBMIT','btn btn-info'); 
				echo "</p></form>"; 
				?>
			</div> 
		</div>
		<?php	
	}else
		{ ?>
			<img id="frame_home" src="css/img/frame_home.jpg" alt="frame">
			<div class="container" > 
			<div  id='hello' > 
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
				echo "Successful user registration $username !";
				echo "<a href='index1.php'>Log In</a>";
				}else{
				echo "Failed to add user ! Please, try again!";
				}
				}else{
				echo "Failed to add user ! Please, try new username!";
				}
				?>
			</div> 
			</div>
			<?php	
			}
		
 include_once('includes/footer.php');?>
