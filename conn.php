<?php

// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "root"; 
$dbPassword = ""; 
$dbName     = "csvimporter"; 

// Create database connection 
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);
?>