<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
  <link rel="stylesheet" href="./header.css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans|Oswald:300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->1
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>




  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="./footer.css">
  <link rel="stylesheet" href="events.css">

  
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'><link rel="stylesheet" href="./header.css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans|Oswald:300' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">




  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="./footer.css">
</head> 
<body>
  
  
  
  
  <?php include 'header.html';?>

<!-- Main division -->
  <div class="maindiv">  
          
  
  


<!-- Team Members div end -->

<!-- Video section -->
<div class="container">
  <div class="row">


  </div>
</div>


<!-- video section ends -->










</div>
<!-- Main division ends -->

<?php include 'footer.html';?>







</body>

</html>


<script  src="./footer.js"></script>


<script type="text/javascript">



function openModal(id) {
      var model = document.getElementById("myModal");
      var span = document.getElementsByClassName("close")[0];

      $.ajax({
        url: "http://random6.xyz/StudentCouncil/getEventDataById.php",
        method: "GET",
        dataType: "JSON",
        data:{
          eventId: id
        },
        success: function(response) {
          // let details = response["events"];
          // let count = details.length;
          var description = response.description;
          console.log(description);
          document.getElementById("desc").innerHTML = description;
        }
      });

      // Displaying Modal on Popup
      model.style.display = "block";

      // Clicking anywhere on window will disappear the modal view
      window.onclick = function(event) {
        if (event.target == model) {
          model.style.display = "none";
        }
      }

      span.onclick = function() {
        model.style.display = "none";
      }
}

  document.addEventListener('DOMContentLoaded', function() {
      $.ajax({
        url: "http://random6.xyz/StudentCouncil/getEventData.php",
        method: "GET",
        dataType: "JSON",
        data:{
          toggle: "active"
        },
        success: function(response) {
          let output = `
          
          <section id="features" class="padd-section text-center wow fadeInUp">

<div class="container">





<!-- Team Members div start -->


<div class="container">
<div class="row">
          `;
          let details = response["events"];
          let count = details.length;
          if (count > 0) {
            for (var i = 0; i < count; i++) {
              var monthArray = [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
                "August",
                "September",
                "October",
                "November",
                "December"
              ];
              var id = details[i].id;
              var name = details[i].name;
              var image = details[i].image;
              var description = details[i].description;
              var days = details[i].days;
              var date = details[i].date;
              var time = details[i].time;
              var venue = details[i].venue;
              var price = details[i].price;
              var participants = details[i].participants;
              var datestr = new Date(date);
              var month = monthArray[datestr.getMonth()];
              var day = datestr.getDate();
              var year = datestr.getFullYear();


              output += `
              <div class="col-md-6 col-lg-4">
      <div class="feature-block">
        <img src="images/team/shreyasingh.jpg" alt="img" class="img-fluid">
        <h4>Shreya Singh</h4>
        <p>General Secretary</p>
      </div>
    </div>
              
            `;
            }
            output += `</div>
                      </div>`;

            
            document.getElementById("row").innerHTML = output;
          } else {
            window.alert("No event entries found.");
          }
        }
      });
    });

</script>