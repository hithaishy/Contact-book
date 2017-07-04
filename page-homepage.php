<?php
/*
Template Name: Home Page.
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

session_start();
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "demo_wordpress";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname , 8889);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$table = $_SESSION['name'];


// SQL Query to display list of users
$sql = "SELECT * FROM $table;";
$result = $conn->query($sql);
//Loop through and echo all the records
echo "Hello "  . $table ." , here are the list of users and their email ids" ;
echo "<br>";
echo "<br>";
while ($row = $result->fetch_assoc()){
echo "Name:&nbsp&nbsp&nbsp " . $row["name"]. " &nbsp&nbsp&nbspEmail: " . $row["email"];
echo "<br>";
echo "<br>";
}


$conn->close();
echo $_SESSION['username'];
?>
<div id = "homepageDiv">
<p1> User Actions</p1>
<form method="post" action="http://localhost:8888/add-users/"  id = "homepage1"style ="display:inline-block" >  
  <input type="submit" name="Add" value="Add" id="newButton"> 
  
</form>
<form method="post" action="http://localhost:8888/delete-contacts/"  id = "homepage2" style ="display:inline-block">  
  <input type="submit" name="Delete" value="Delete" id="newButton"> 
  
</form>
<form method="post" action="http://localhost:8888/update-users/"   id = "homepage3" style ="display:inline-block">  
  <input type="submit" name="Update" value="Update" id="newButton"> 
  
</form>
<form method="post" action="http://localhost:8888/login/"   id = "homepage4" style ="display:inline-block">  
  <input type="submit" name="Logout" value="Logout" id="newButton"> 
</form>	
</div>


</body>
</html>
<?php get_footer(); ?>