<?php 
session_start();
?> 

<?php
    include('config.php');
 //$db = mysqli_connect("localhost", "root", "", "name_me");
  $msg = "";
  $img1 = mysqli_query($db, "SELECT * FROM anime");

  while($row = mysqli_fetch_array($img1)){
     $arr[] = array('image' => $row['image'] );
  }
  
?>

<!DOCTYPE html>
<html>
<head>
  <title>Image Upload</title>
    <link rel="stylesheet" type="text/css" href="imageStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


  <style type="text/css">

    #formSet{
      top:-15px;
      position: relative;
      background-color: #f1f1f1;
    }
     #image_container{
      position: relative;
      top:10px;
      border-radius: 25px;
      background-color: #f1f1f1;
    }

    #next{
      width: 100px;
      position: relative;
      top:10px;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">

<script>
var countDownDate = new Date("may 01, 2020 21:00:00").getTime();

var x = setInterval(function() {
  var now = new Date().getTime();
  var distance = countDownDate - now;
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
  document.getElementById("Clock").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("Clock").innerHTML = "EXPIRED";
  }
}, 1000);
</script>



<script type="text/javascript">
  $(document).ready(function(){
    var id = 0;
    $("#next").click(function(){
          var check = 0;
      var x = 0
      $("#comments").load("animes.php",{
        commentnewCount: id,
        src: x,
        bool:check
      });
      id += 2;  
    });
  });

</script>
</head>
<body>
<div id="content">
    STARTING IN:
     <p id="Clock"></p>
</div>
<div id="formSet">
  <form method="POST" action="images.php" enctype="multipart/form-data">
  	<div id="image_container" style="background-color: #d1d3dd; height:100%;">
      <p style="background-color: #f1f1f1; width: 90%; text-align: center; height: 30px; border-radius: 10px; position: relative; left:50px;top:-50px;">NOT YOUR LOVER</p>   
        <div id="comments">
        
        </div>
      <button id="next" type="button" onclick="change();">NEXT</button>
  	</div>
</form>
</div>


</body>
</html>
