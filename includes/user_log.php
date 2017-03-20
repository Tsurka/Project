<?php
$username = $_POST['username']; 
$password = $_POST['password']; 
 $password = md5($password); 
 $read_query = 	"SELECT * FROM users  WHERE username = '$username'"; 			
 $read_result = mysqli_query($conn, $read_query); 
$row = mysqli_fetch_assoc($read_result); 
 //var_dump($row); 
	if($row['password'] === $password){ 
			session_start();
			$_SESSION["username"]="$username";
			if($row['role'] == 1){ 
			header('Location: admin.php'); 
			} 
        elseif ($row['role'] ==0){ 
			header('Location: game.php'); 
			} 
	} 
	else { 
			if ($_SESSION["language"]=="bg"){
				echo "<div class='alert alert-danger' role='alert'>Грешна парола или потребителско име!!!</div>"; 
			}else {
			echo "<div class='alert alert-danger' role='alert'>Wrong password or user name!!!</div>";
			}
		}
		
?>
		</div> 
		</div>
		<?php
	
