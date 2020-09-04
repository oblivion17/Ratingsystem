<!DOCTYPE html>
<html>
<head>
	<title>Live Rating</title>
</head>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
 		function loadDoc() {
  

  setInterval(function(){

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("comments").innerHTML = this.responseText;
    }
   };
   xhttp.open("GET", "liveshow.php", true);
   xhttp.send();
  },1000);
 }
 loadDoc();
	</script>
	
		<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
 		function loadDoc() {
  

  setInterval(function(){

   var xhttp = new XMLHttpRequest();
   xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("users").innerHTML = this.responseText;
    }
   };
   xhttp.open("GET", "hitshow.php", true);
   xhttp.send();
  },1500);
 }
 loadDoc();
	</script>

<body>
    <div id="users" style="text-align:right">
        
    </div>
	<div id="comments">
		
	</div>
</body>
</html>