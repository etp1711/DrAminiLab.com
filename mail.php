<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>ارسال ایمیل ...</title>
	<style type="text/css">

		.ok{
			color:#23B3AB;
		}

		.err {
			color:#BD5B3D;
		}

	</style>
</head>
<body>

	<?php

	error_reporting(E_ALL ^ E_NOTICE);

	$admin   = 'info@hananensemble.com';

	$name    = $_POST['name'];
	$mail    = $_POST['email'];
	$phone    = $_POST['phone'];
	$message = $_POST['message'];
	if( strlen($name) >= 3 && strlen($mail) >= 7 && strlen($message) >= 10 && strlen($phone) >= 7){
		if( @mail(
			$admin,

			" hananensemble.com contact : $name <$mail> $phone",

			$message)
			){

			echo "<h1 class='ok'>Your Mail Sent!</h1>";

		}else {

			echo "<h1 class='err'>Error In Sending Mail</h1>";
		}
		
	}else{

		echo "<h1 class='err'>Access Restricted!!!</h1>";
	}
	?>
</body>
</html>