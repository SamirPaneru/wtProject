<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "admin";
    $password = "password";
    $dbname = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        //echo "Connected Successfully <br>";
    }

    // Create Database
    $dbname = "userDB";
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";

    if ($conn->query($sql) === TRUE) {
        //echo "Database connected successfully <br>";
    } else {
        echo "Error creating database: " . $conn->error;
    }

    // Refresh connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Create Table
    $sql = "CREATE TABLE IF NOT EXISTS form (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        remarks VARCHAR(30) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        //echo "Table users created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $name = $_POST["name"];
    $email = $_POST["email"];
    $remarks = $_POST["remarks"];

    $x = 0;

    if(empty($name)) {
        $x++;
    }
    if(empty($email)) {
        $x++;
    }
    if(empty($remarks)) {
        $x++;
    }

    if($x=='0') {
        $sql = "INSERT INTO form(name, email, remarks) VALUES('$name', '$email', '$remarks')";

        if ($conn->query($sql) === TRUE) {
            echo "Data sumbitted Successfully";
        } else {
            echo "Error inserting data: " . $conn->error;
        }
    }
    
}

// $conn->close();

?>