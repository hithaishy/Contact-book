<?php
/*
Template Name: Login.
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
			session_start();
			
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				$servername = "127.0.0.1";
				$username_db = "root";
				$password_db = "root";
				$dbname = "demo_wordpress";
				$username = $_POST['username'];
				$password = $_POST['password'];
				$_SESSION['name'] = $username;
				// Create connection
				$conn = new mysqli($servername, $username_db, $password_db, $dbname , 8889);
				// Check connection
				if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
				}
				$sql = "SELECT * from meta_users WHERE password='$password' AND username='$username'";
				$result = $conn->query($sql);
				$rowcount=mysqli_num_rows($result);
				if ($rowcount == 1)

				{
					 header("Location: http://localhost:8888/home-page/");
				}
               else {
					echo "Invalid username and password";
					
					$something = "http://localhost:8888/login/";
            
               } 
            }

         ?>

		<div id ="loginDiv" style="height:300px;width:200px; padding-top:20px">
		<form  action="<?php echo $something; ?>"  id="contactForm" method="post">
			
			<ol class="forms">
				<li><label for="username">Username</label>
					<input type="text" name="username" id="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>" required />
					<?php if($nameError != '') { ?>
						<span class="error"><?=$nameError;?></span> 
					<?php } ?>
				</li>
				
				<li><label for="password">Password</label>
					<input type="password" name="password" id="email" value="<?php if(isset($_POST['password']))  echo $_POST['password'];?>" required />
					<?php if($emailError != '') { ?>
						<span class="error"><?=$emailError;?></span>
					<?php } ?>
				</li>
				
				
				<li class="buttons"><input type="hidden" name="login" id="submitted" value="true" /><button type="submit">Login &raquo;</button></li>
				
			</ol>`
		</form>
	</div>
		
	

<?php get_footer(); ?>
	