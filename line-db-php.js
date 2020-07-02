$(document).ready(function() {

  /**
   * call the data.php file to fetch the result from db table.
   */
  $.ajax({
    url : "http://localhost/BMI/api/data.php",
    type : "GET",
    success : function(data) {
      console.log(data);

      // var score = {
      //   TeamA : [],
      //   TeamB : []
      // };
      var bmi = [];

      var date = [];


      var len = data.length;

      for (var i = 0; i < len; i++){
        bmi.push(data[i].length);
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
          // {
          //   label : "TeamB score",
          //   data : score.TeamB,
          //   backgroundColor : "blue",
          //   borderColor : "lightblue",
          //   fill : false,
          //   LineTension : 0,
          //   pointRadius : 5
          // }
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