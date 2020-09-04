<!DOCTYPE html>
<html>
<head>
	<title>PM Smash</title>
	
</head>

<style type="text/css">
	*{
		
		margin: 0;
		padding:0;
		box-sizing: border-box;
	}
	   #content{
   	width: 100%;
    height: 80px;
    font-size:3;
    text-align: center;
   	margin: 9px auto;
   	position:relative;
   }

	html{
		background: linear-gradient(-45deg,#EE7752,#E73C7E,#23A6D5,#23D5AB);
		background-size: 400% 400%;
		font-size: 10px;
		font-family: "Lato", Arial, sans-serif;
		animation: change 10s ease-in-out infinite;

	}

	footer{
		font-size: 2rem;
		position: relative;
		top:-200px;
		text-align: center;
	}
	
  #Clock{
      
    text-align: center;
    font-size: 30px;
  }


	section{
		width: 100%;
		height:100vh;
		color: #fff;

		position: relative;
		
	}


	h1{
		font-size: 2rem;
		text-transform: uppercase;
		letter-spacing: 2px;
		border:3px solid #fff;
		position: absolute;
		top:25%;
		left:50%;
		transform: translate(-50%,-50%);
		padding:5rem 10rem;
	}
	a{
	font-size: 2rem;
	}
	#a1{
		background-color: black;
		opacity: 0.8;
		padding-top: 10px;
		font-size: 1rem;
		letter-spacing: 4px;
		text-align: center;
		padding-top: 10px;
		border:1px solid #fff;
		position: relative;
		top:50%;
		left:50%;
		transform: translate(-50%,-50%);
		padding:5rem 10rem;
	}

	@keyframes change{
		0%{
			background-position: 0 50%;

		}

		50%{
			background-position: 100% 50%;

		}

		100%{
			background-position: 0 50%;
		}
	}
	
	</style>
	 <script src="jquery.js"></script>
<script>
var countDownDate = new Date("april 30, 2020 21:00:00").getTime();

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
    $("#image").click(function(){
      $("#content").load("hits.php",{
      });
    });
  });

</script>

</script>
<body>
    
    <div id="content">
    ENDs IN:
    <p id="clicks" style="text-align:center;"></p>
     <p id="Clock"></p>
</div>
	<section>
		<h1>BEE HIVE</H1>
		<p id="a1">
			links for<br>
			<br>
		<a id="image" href="images.php" >Raisonian</a>
		<br>
		<br>
		<a id="image" href="animesIndex.php">Anime lovers</a>
		</p>
	</section>


	<footer>
		ENJOY<br>PM's production

	</footer>
</body>
</html>