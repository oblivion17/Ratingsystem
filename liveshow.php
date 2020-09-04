<html>
    <head>
        <title>Result</title>
    </head>
    <style>
        body{
            background-color:#f1f1f1;
        }
    </style>
</html>


<?php 
$id = 0;
include("config.php");
//include("header.php");
echo "<h3  style='text-align:center; position:relative;'>Farm house</h3>";
echo "<h2 style='text-align:center; position:relative;'>Rating according to skills and worthiness! </h2>";
echo "<br>";
$query = "SELECT * FROM imagestesting ORDER BY score DESC";
 $img1 = mysqli_query($db, $query);
 
 echo "<div style='padding:20px; width:100%; height:100%;'>";
 while($row = mysqli_fetch_array($img1)){ 
     	echo "<div id='images' style='width:100px; height 200px; float:left;'>";
     	echo "<p>ID:</p>".$id++;
     	echo '<img src="images/'.$row['image'].'" style="width:200px; height: 200px; padding-left:50px; padding-top:50px; position:relative;"/>';
     	echo '<b id="score" style="font-size:2rem;">'.$row['score'].'</b>';
     	 //echo count($row);
  }
  echo "</div>";
  
  echo "<H1 style='text-align:center;'> GOODBYE! </H1>";
 
  $q = "SELECT * FROM animals";
 $animal = mysqli_query($db, $q);
 echo "<div style=' padding:20px; width:100%; position:relative; top:-3000px; left:800px;height:100%;'>";
   while($farm = mysqli_fetch_array($animal)){ 
     	echo "<div id='images' style='width:100px; height 200px; float:right;'>";
     	echo "<p>__ </p>";
     	echo '<img src="animals/'.$farm['image'].'" style="width:200px; height: 200px; padding-left:70px; padding-top:80px; position:relative;"/>';
     	echo '<b id="score" style="font-size:2rem;">--></b>';
     	 //echo count($row);
  }  
  
  echo "</div>"
?>
