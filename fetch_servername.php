<?php 

    $con = mysqli_connect("localhost","root","","prtg_object");


    if (mysqli_connect_errno()) {
        echo 'Failed to connect to MySQL: ' . mysqli_connect_error();
        exit();
    }

    echo "connection success!". "<br>";
    $sql = "SELECT * FROM prtg_object";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
        $name_object =$row['nama'];
        $server_object=$row['server'];
        echo "<option value='$server_object'>$name_object</option>";
        // $lin_inic=$lin_inic+1;    
        }
        } 
    else {
        echo "no result";
        }
    $con->close();
?>