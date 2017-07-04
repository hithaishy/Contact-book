<?php


/*
Template Name: Update Users
*/
?>
<?php get_header(); ?>

<?php
session_start();

if (isset($_POST["contactName"]) && !empty($_POST["contactName"])) {
	$table = $_SESSION['name'];
	$servername = "127.0.0.1";
	$username = "root";
	$password = "root";
	$dbname = "demo_wordpress";
	$name = $_POST['contactName'];
	$email = $_POST['email'];
				
// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname , 8889);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "UPDATE $table SET email = '$email' WHERE name = '$name';";
	if ($conn->query($sql) === TRUE) {
					echo "Updated successfully";
					 header("Location: http://localhost:8888/home-page/");
					}
}
?>

		<form  id="contactForm" method="post">
	
			<ol class="forms">
				<li><label for="contactName">Name</label>
					<input type="text" name="contactName" id="contactName" value="" required />
					<?php if($nameError != '') { ?>
						<span class="error"><?=$nameError;?></span> 
					<?php } ?>
				</li>
				
				<li><label for="email">Email</label>
					<input type="text" name="email" id="email" value="<?php if(isset($_POST['email']))  echo $_POST['email'];?>" required />
					<?php if($emailError != '') { ?>
						<span class="error"><?=$emailError;?></span>
					<?php } ?>
				</li>
				
			
				<li class="buttons"><input type="hidden" name="submit" id="submitted" value="true" /><button type="submit">Update Email &raquo;</button></li>
				 <!--<li class="buttons"><input type="button" name="submitted" id="submitted" value="Check list of users" onClick=" location='http://localhost:8888/82-2/ '" /></li> -->
				
			</ol>`
		</form>
	
	



<?php get_footer(); ?>
	