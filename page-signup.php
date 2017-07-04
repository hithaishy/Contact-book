<?php
/*
Template Name: Signup.
*/
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Users</title>
</head>
<body>
</body>
</html>


<?php get_header(); ?>


<?php
			if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				$servername = "127.0.0.1";
				$username_db = "root";
				$password_db = "root";
				$dbname = "demo_wordpress";
				$username = $_POST['username'];
				$password = $_POST['password'];
				// Create connection
				$conn = new mysqli($servername, $username_db, $password_db, $dbname , 8889);
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
				$sql_create = "CREATE TABLE $username (name varchar(255),email varchar(255));";
				$sql = "INSERT INTO meta_users (username,password) VALUES ('$username','$password');";
				$conn->query($sql);
				$conn->query($sql_create);
				echo '<script language="javascript">';
				echo 'alert("Signup Complete, Please Login!!")';
				echo '</script>';
				header("Location: http://localhost:8888/login/"); 
            }

         ?>

		
				
		<form  id="contactForm" method="post">
	
			<ol class="forms">
				<li><label for="username">Username</label>
					<input type="text" name="username" id="username" value="" required />
					<?php if($nameError != '') { ?>
						<span class="error"><?=$nameError;?></span> 
					<?php } ?>
				</li>
				
				<li><label for="password">Password</label>
					<input type="password" name="password" id="email" value="" required />
					<?php if($emailError != '') { ?>
						<span class="error"><?=$emailError;?></span>
					<?php } ?>
				</li>
				
			
				<li class="buttons"><input type="hidden" name="login" id="submitted" value="true" /><button type="submit">Sign Up &raquo;</button></li>
				 <!--<li class="buttons"><input type="button" name="submitted" id="submitted" value="Check list of users" onClick=" location='http://localhost:8888/82-2/ '" /></li> -->
				
			</ol>`
		</form>
	
		
	

<?php get_footer(); ?>
	