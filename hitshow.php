<?php 
    include("config.php");
    $query = "SELECT hit FROM click WHERE id=1";
    $imgnumber = mysqli_query($db,$query);
    if($imgnumber){
        while($row = mysqli_fetch_array($imgnumber)){
            echo "<h3 Style='color:#1f3095;'>Users login: ";
            echo $row['hit'];
            echo "</h3>";
        }
    }else{
    echo "error".mysqli_error($db);
    }

?>