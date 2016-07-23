<!DOCTYPE html>
<head>
	<title>Weatherman</title>
</head>
<?php
		//SPECIFY USB PORT TO USE
		$usb_comPort = "";


		switch ($_POST) {
			case isset($_POST['submitOn']):
				exec("ECHO 1 > $usb_comPort"); //Turn on led 1
				# code...
				break;
			case isset($_POST['submitOff']):
				exec("ECHO 2 > $usb_comPort"); //Turn off LED 1
				# code...
				break;
			case isset($_POST['submitOn1']):
				exec("ECHO 3 > $usb_comPort");// TUrn on led 2
				# code...
				break;
			case isset($_POST['submitOff1']):
				exec("ECHO 4 > $usb_comPort");// turn off led 2
				# code...
				break;
			default:
				# code...
				break;
		}
?>
<body>
<h1> Control Panel</h1>

		<form class="control-panel-frm" method="post" action="<? echo " htmlspecialchars($_SERVER["PHP_SELF"]);" ?>
			<input type="submit" class="s3d turnOn" name="submitOn" value="Turn LED 1 ON">
			<input type="submit" class="s3d switchoff" name="submitOff" value="Turn LED 1 OFF">
			<br><br>
			<input type="submit" class="s3d turnOn" name="submitOn1" value="Turn LED 2 ON">
			<input type="submit" class="s3d switchoff" name="submitOff1" value="Turn LED 2 OFF">
			<br><br>
		</form>
</body>
</html>