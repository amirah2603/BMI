$(document).ready(function() {

  /**
   * call the data.php file to fetch the result from db table.
   */
  $.ajax({
    url : "https://34.92.199.218/bmi_guest.php",
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
        bmi.push(data[i].user_bmi);
        date.push(data[i].date_created);
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
