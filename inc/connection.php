<?php 

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'cns'; 

    $connection = mysqli_connect('localhost', 'root', '', 'cns');

    // Checking the connection
    if (mysqli_connect_errno()) {
        die('Database connection failed ' . mysqli_connect_error());
    }

?>