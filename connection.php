<?php 
    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db = 'mydb';

    $conn = mysqli_connect($host, $user, $pass, $db);
    if(!$conn){
        die('could not connect' .mysqli_connect_error());
    } else {
        echo "Database Connected Successfully";
    }

    // mysqli_close($conn)
?>