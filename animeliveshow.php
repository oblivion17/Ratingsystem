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
echo "<h3  style='text-align:center; position:relative;'>MOST FAMOUS</h3>";
echo "<h2 style='text-align:center; position:relative;'>Rating according to skilful and worthiness! </h2>";
echo "<br>";
$query = "SELECT * FROM anime ORDER BY score DESC";
 $img1 = mysqli_query($db, $query);
 
 while($row = mysqli_fetch_array($img1)){ 
     	//echo "<div id='images' style='width:100px; height 200px;'>";
     	//echo "<p>ID:</p>".$id++;
     	echo '<img src="animes/'.$row['image'].'" style="width:200px; height: 200px; padding-left:50px; padding-top:50px; position:relative;"/>';
     	echo '<b id="score" style="font-size:2rem;">'.$row['score'].'</b>';
     	 //echo count($row);
  }
  echo "</div>";
  
  echo "<H1 style='text-align:center;'> Anime Character can not be compared with anything... XD GOODBYE! </H1>";
?>
