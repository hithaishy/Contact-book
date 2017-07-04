
<?php
/*
Template Name: Display Users.
*/
?>
<?php get_header(); ?>

<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 
<?php




if(trim($_POST['contactName']) === '') {
			$nameError = 'You forgot to enter your name.';
			$hasError = true;
		} else {
			
			$name = trim($_POST['contactName']);
		}
		
		//Check to make sure sure that a valid email address is submitted
		if(trim($_POST['email']) === '')  {
			$emailError = 'You forgot to enter your email address.';
			$hasError = true;
		} else {
			
			$email = trim($_POST['email']);
			
		}
		//If there is no error, send the email
		if(!isset($hasError)) {
			//sql statement to insert data to the database
			$sql = "INSERT INTO users (name, email) VALUES ('$name', '$email');";
			// Executing the SQL statement
			if ($conn->query($sql) === FALSE) {
			
					echo "Error: " . $sql . "
					" . $conn->error;
					}
			
		}
// SQL Query to display list of users
$sql = "SELECT * FROM users;";
$result = $conn->query($sql);
//Loop through and echo all the records
echo "Hello "  . $name ." , here are the list of users and their email ids" ;
echo "<br>";
echo "<br>";
while ($row = $result->fetch_assoc()){
echo "Name:&nbsp&nbsp&nbsp " . $row["name"]. " &nbsp&nbsp&nbspEMAIL: " . $row["email"];
echo "<br>";
echo "<br>";
}


$conn->close();
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $conn = new mysqli($servername, $username, $password, $dbname , 8889);
 if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "TRUNCATE TABLE users";
if ($conn->query($sql) === FALSE) {
			
					echo "Error: " . $sql . "
					" . $conn->error;
					}
}


?>
<form method="post" action="http://localhost:8888/82-2/">  
  
  <input type="submit" name="submit" value="Delete"> 
  
</form>
<form method="post" action="http://localhost:8888/82-2/">  
  
  <input type="submit" name="submit" value="Update"> 
  
</form>


</body>
</html>
<?php get_footer(); ?>
	