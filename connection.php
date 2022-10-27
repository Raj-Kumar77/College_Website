<?php

$usernme="root";
$password="";
$server="localhost";
$db='enquiry';

$con = mysqli_connect($server,$usernme,$password,$db);
if($con){
    // echo "Connection Succesful";
    ?>

    <!-- <script>
        alert('Connection Successful');
    </script> -->

    <?php
}
else{
    echo "No Connection";
    // die("no connection".mysqli_connect_error());
}

?>