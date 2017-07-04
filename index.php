<?php


/*
Template Name: Contact Form
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

<?php { ?>
		<div class = "main" style="height:200px;width:200px; padding-top:20px; display:inline-block; align:center">
		
		
		<form action="http://localhost:8888/login/" id="contactForm" method="post">
		<ol class="forms">
				<li class="buttons"><input type="hidden" name="submitted" id="submitted" value="true" /><button type="submit">Login &raquo;</button></li>
				 <!--<li class="buttons"><input type="button" name="submitted" id="submitted" value="Check list of users" onClick=" location='http://localhost:8888/82-2/ '" /></li> -->
				
			</ol>`
		</form>
		<form  action="http://localhost:8888/sign-up/" id="contactForm" method="post">
	<ol class="forms">
				<li class="buttons"><input type="hidden" name="submitted" id="submitted" value="true" /><button type="submit">Sign Up &raquo;</button></li>
				 <!--<li class="buttons"><input type="button" name="submitted" id="submitted" value="Check list of users" onClick=" location='http://localhost:8888/82-2/ '" /></li> -->
				
			</ol>`
		</form>
		</div>
	
<?php } ?>

<?php get_footer(); ?>
	