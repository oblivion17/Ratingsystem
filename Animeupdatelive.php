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
   xhttp.open("GET", "animeliveshow.php", true);
   xhttp.send();
  },1000);
 }
 loadDoc();
	</script>
<body>
	<div id="comments">
		
	</div>
</body>
</html>