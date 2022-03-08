<?php 

$mysqli = new mysqli("localhost","root","","jobs");

    if($mysqli == false)
    {
        echo "Connection is not done";

    }
    else
    {
        // Start the session
        session_start();
       
    }
    
?>