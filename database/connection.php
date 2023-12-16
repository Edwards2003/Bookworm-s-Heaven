<?php
    $servername = "localhost"; // or your specific host address
    $username = "root"; // your database username
    $password = ""; // your database password
    $database = "bookworms_heaven"; // your database name

    // Create connection
    $con = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

?>
