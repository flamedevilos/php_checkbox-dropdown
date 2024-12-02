<?php
    $servername = "localhost";
    $username = "root";
    $password = "Chakib1983";

    $conn = mysqli_connect($servername, $username, $password);
    // Connection checkin with creating DB & Tables
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Creating Database
    $dbname = "CREATE DATABASE IF NOT EXISTS static_Website";      
    if ($conn->query($dbname) === FALSE) {
        echo "Database Failed!" . mysqli_connect_error();
    } else {
        $conn->query("USE static_Website");        
    }

    // Creating Table brands
    //include "database_Tables.php";   
?>