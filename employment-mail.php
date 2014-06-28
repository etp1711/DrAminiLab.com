<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8" />
	<title>Sending mail ...</title>
	<style type="text/css">
		body {
			background-color: #F4F4F4;
		}

		.ok {
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

		$admin = 'info@hananesnsemble.com';

		/* Moshakhasat */
		$namein = $_POST['namein'];
		$familin = $_POST['familin'];
		$birthin = $_POST['birthin'];
		$agein = $_POST['agein'];
		/*  .....       */


		/* Conditions */
		$conditin = $_POST['conditin'];
		$evidencein = $_POST['evidencein'];
		$partin = $_POST['partin'];
		$shiftin = $_POST['shiftin'];
		/* ....       */



		/* Tamas */
		$telin = $_POST['telin'];
		$mobin = $_POST['mobin'];
		$emailin = $_POST['emailin'];
		$adresin = $_POST['adresin'];
		/* ....   */

		/* Tozihat Va Sabeghe */
		$historyin    = $_POST['historyin'];
		$explainin    = $_POST['explainin'];
		/* .................  */


		$subject = "درخواست استخدام";

		$message = " 			$namein $familin
				محل تولد: 		$birthin
			    سن: 			$agein
			    وضعیت تاهل:		$conditin
			   	مدرک تحصیلی: 	$evidencein
			    بخش مورد نظر: 	$partin
			   شیفت مورد نظر:	$shiftin
			   تلفن:			$telin
			   همراه:				$mobin
			   email:			$emailin
			   آدرس:				$adresin
			   سابقه فعالیت:	$historyin
			   توضیحات:		$explainin";

			    
		

		if ($accept) {
			if( strlen($name)>=8 && strlen($country)>=2  && strlen($email)>=7 && strlen($persons)>=1 ){
				if( @mail (
						$admin,
						$subject,
						$message,
						"From: $name $email"
						
					 )
				){
					echo '<script type="text/javascript">
							alert("أرسلت النموذج.");
						  </script>';

				}else{
					echo '<script type="text/javascript">
							alert("خطأ! في إرسال النموذج.");
						  </script>';
				}
			}else{
				echo '<script type="text/javascript">
						alert("خطأ! التشيكية يرجى التحقق من الحقول وحاول مرة أخرى.");
					  </script>';
			}
		}else{
			echo '<script type="text/javascript">
					alert("يرجى قبول البيانات.");
				  </script>';
		}
	?>
</body>
</html>