<!DOCTYPE html>
<html>
<head>
<!--     //<meta content="text/html;charset=utf-8" http-equiv="Content-Type"> 
    //<meta content="utf-8" http-equiv="encoding">  -->
    <title>Performance</title>
    <link href="default.css" rel="stylesheet">
    <style type="text/css">
      html { 
    	font-family: Helvetica; 
    	display: inline-block; 
    	margin: 0px auto; 
    	text-align: center;
	}

      body{
    	margin-top: 50px;
	}
	    
      .performance {
        color: #ffffff;
    	background-color: #f9c230;
    	cursor: pointer;
    	text-align: center;
    	font-size: 20px;
    	border-radius: 12px;
    	transition: .15s ease-in-out;
    	margin-bottom: 10px;
    	padding: 14px 40px;
      }
	.performance:hover {
        background-color: #0069d9;
      }

      .performance:focus {
        box-shadow: 0 0 0 0.2rem rgba(38,143,255,.5);
      }

       h1 {
         color: #444444;
    	 margin: 50px auto 30px;
      }  
    </style>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="Chart.min.js"></script>
   
</head>
<body>
  <h1>Your Current Performance</h1>
  <div class="chart-container">
    <canvas id="line-chartcanvas"></canvas>
  </div>   
	<?php 
		$user = $_GET['user']; 
		if($user == "amirah"){
			echo '<script type="text/javascript" src="line-db-php(amirah).js">','','</script>';
		}
		else{
			echo '<script type="text/javascript" src="line-db-php(guest).js">','','</script>';
		}
	?>
<!-- 	<script type="text/javascript" src="line-db-php(amirah).js"></script> -->
  <div class="performance-group-vertical">
  	<input type=button onClick="location.href='home.php?user=<?php echo $user?>'" class="performance" value="HOME">
  </div>
    
</body>
</html>
