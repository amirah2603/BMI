<!DOCTYPE html>
<html>
<head>
<!--     //<meta content="text/html;charset=utf-8" http-equiv="Content-Type"> 
    //<meta content="utf-8" http-equiv="encoding">  -->
    <title>Performance</title>
<!--     <link href="default.css" rel="stylesheet"> -->
    <style type="text/css">
      .performance {
        color: #ffffff;
        background-color: #f9c230;
        cursor: pointer;
        text-align: center;
        font-size: 20px;
        border-radius: 12px;
        transition: .15s ease-in-out;
        margin-left: 600px;
        margin-bottom: 150px;
        padding: 14px 40px;
      }

      .performance:hover {
        background-color: #0069d9;
      }

      .performance:focus {
        box-shadow: 0 0 0 0.2rem rgba(38,143,255,.5);
      }

       h1 {
         text-align:center;
      }  
     .chart-container {
	width:  65%;
	height: 450px;
	margin: 0 auto;
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
<php? 
  $user = $_GET['user'];
  if($user == "amirah"){
      <script type="text/javascript" src="line-db-php.js(amirah)"></script>;
  }
  else{
	<script type="text/javascript" src="line-db-php.js(guest)"></script>;
  }
  ?> 
  <div class="performance-group-vertical">
    <input type=button onClick="location.href='home.php?user=<?php echo $user?>'" class="performance" value="HOME">
  </div>
    
</body>
</html>
