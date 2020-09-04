<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="imageStyle.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <script src="jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
  	 var id = 0;
	$("#img").click(function(){
		id += 2;
      	var x = document.getElementById("img").src;
        var check = 1;
      $("#comments").load("collector.php",{
      	commentnewCount: id,
        src: x,
        bool: check
      });
    });
    $("#img1").click(function(){
    	id += 2;
      	var x = document.getElementById("img1").src;
       	
       	var check = 1;
      $("#comments").load("collector.php",{
      	commentnewCount: id,
        src: x,
        bool: check
      });

    });
  });
  </script>
</head>
<body>
</body>
</html>
<?php
	include('config.php');
	$check = $_POST["bool"];
	$commentNewCount = $_POST["commentnewCount"];
	//echo $check;
	//echo $commentNewCount;
	$src = $_POST['src'];
	$sql = "SELECT * FROM facemsh LIMIT $commentNewCount";
	$result = mysqli_query($db,$sql);
	
	//if(mysqli_num_rows($result) > 0){
		//while($row = mysqli_fetch_assoc($result)){
			//echo "<br>";
			//echo $row['username'];

		//}
	//}//else{
		//echo "there is no user";
	//}
	$img1 = mysqli_query($db, "SELECT * FROM imagestesting");
  	 while($row = mysqli_fetch_array($img1)){ 
     	$arr[] = array('image' => $row['image'] );
  	}

	 $imgnumber = mysqli_query($db,"SELECT id FROM facemsh WHERE username='pam'");
	 $num =	mysqli_fetch_array($imgnumber);

	 //echo count($arr);
	if($commentNewCount >= (count($arr) - 1)){
		echo '<div>';
		echo 'CLICK HERE FOR:';
		echo '<br>';
		echo '<a href="live.php">RESULT</a>';
		echo '<br>';
		echo "thanks for voting, bye!";
		echo '</div>';
		return 0;
	}

	 //checking frequenty 

	 //image putting into array;
    //echo $src;

  	foreach ($arr as $ar) {
  		if($src == '0'){
  			//echo "0";
		}else{
			//echo "doing";
			if($src == "https://personalthing.000webhostapp.com/images/".$ar['image']){
				$t = $ar['image'];
				echo $t;
				echo "<br>";
				$s =  "UPDATE imagestesting SET score=score+12 WHERE image='$t'";
				$a = mysqli_query($db,$s);
				if($a){
					echo "Submited";

				}else if($a == ""){
					//echo "empty";
				
				}
			}
		}
  	}
  	if($check == 1){
		return 0;

	}
  	
			//echo '<div id="image" style = "background-color:#363636; ">';
  			echo '<div id="value_container"  style = "background-color:#d1d3dd; width:100%; border-radius:25px; height:400px;" >';
    		echo '<img src="images/'.$arr[$commentNewCount]['image'].'" id="img"/>';
    		echo "_____________";
    		echo '<img src="images/'.$arr[$commentNewCount+1]['image'].'" id="img1"/>';
    		echo '<br>';
    		echo '<br>';
    		echo '<br>';
    		echo "<p>RIGHT [---------------OR--------------] LEFT</p>";
    		
    		echo '</div>';
    		//echo '</div>';


  
?>

