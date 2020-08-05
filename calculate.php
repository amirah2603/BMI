<!DOCTYPE html>
<html>
<head>
	<title>Calculate</title>
	<link rel="stylesheet" type="text/css" href="calculate.css">
</head>
<body>
	<?php 
		$user = $_GET['user'];
	 ?>
	<h2>Please stand on the device, <?php echo $user ?>. </h2>
	<h2>Click "CALCULATE" when ready.</h2>

	<div class="calc-group-vertical">
    	<input type=button onClick="location.href='http://192.168.8.100/<?php echo $user?>'" class="calc" value="CALCULATE">
	</div>

</body>
</html>
