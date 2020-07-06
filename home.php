<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<?php 
		$user = $_GET['user'];
	 ?>
	<h1>Welcome Back, <?php $user ?>.</h1>

	<div class="btn-group-vertical">
    	<input type=button onClick="location.href='calculate.php?user=<?php echo user?>'" class="btn" value="CALCULATE BMI">
    	<input type=button onClick="location.href='progress_update.html?user=<?php echo user?>'" class="btn" value="PERFORMANCE">
    	<input type=button onClick="location.href='advice.php?user=<?php echo user?>'" class="btn" value="NUTRITIONAL ADVICE">
	</div>

</body>
</html>
