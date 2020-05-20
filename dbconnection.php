<?php
$servername = "localhost";
$username = "tuesptrh_myerp";
$password = "tuespot@100";

try {
    $conn = new PDO("mysql:host=$servername;dbname=tuesptrh_myerp", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


?>