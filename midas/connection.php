<?php
    //connect to database
    $conn = mysqli_connect('localhost:3307','midas','midas2903','project');

    //check the connection
    if (!$conn){
        echo 'connection error : ' .mysqli_connect_error();
    }

    


?>