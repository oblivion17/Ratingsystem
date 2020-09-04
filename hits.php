<?php 
    include("config.php");
    $query = "UPDATE click SET hit=hit+1 WHERE id=1";
    $imgnumber = mysqli_query($db,$query);
    echo $imgnumber;
    if($imgnumber){
            echo "done";
    }else{
            echo "err".mysqli_error($db);
    }
   
?>