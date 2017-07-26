<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Your name is :
	<?php echo $_POST['name'];  ?>
	<br>
	<br>
	Your email is :
	<?php echo $_POST['email']; ?>
	<br>
	<br>
	Your Password is :
	<?php echo $_POST['pwd']; ?>
	<?php
		$name=$email=$pwd="";
		if($_SERVER["REQUEST_METHOD"]=="POST"){
			
		}

		function validate($data){

		}
	  ?>
		   	 	


</body>
</html>