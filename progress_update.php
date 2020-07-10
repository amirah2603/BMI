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
<script type="text/javascript">
  $(document).ready(function() {
  $.ajax({
    url : "https://34.92.199.218/bmi.php",
    type : "GET",
    success : function(data) {
      console.log(data);
      var bmi = [];

      var date = [];


      var len = data.length;

      for (var i = 0; i < len; i++){
        bmi.push(data[i].user_bmi);
        date.push(data[i].created_at);
      }

      console.log(bmi)
      console.log(date)


      var ctx = $("#line-chartcanvas");

      var data = {
        labels : date,
        datasets : [
          {
            label : "Your BMI",
            data : bmi,
            backgroundColor : "blue",
            borderColor : "lightblue",
            fill : false,
            LineTension : 0,
            pointRadius : 5
          },
        ]
      };

      var chart = new Chart( ctx, {
        type : "line",
        data : data,
        options : {}
      });

    },
    error : function(data){
      console.log(data);
    }

  });

});
  </script>
  <div class="performance-group-vertical">
    <input type=button onClick="location.href='home.php?user=<?php echo $user?>'" class="performance" value="HOME">
  </div>
    
</body>
</html>
