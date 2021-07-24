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
    $sql = "CREATE TABLE IF NOT EXISTS users(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        email VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL
    )";

    if ($conn->query($sql) === TRUE) {
        //echo "Table users created successfully <br>";
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // 
    $email = $_POST["email"];
    $pass = $_POST["password"];

    $sql1 = "SELECT email FROM users WHERE email='$email'";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows>0) {
        echo "Sorry username already in use";
    } else {
        $sql = "INSERT INTO users (email, password) VALUES('$email', '$pass')";

        if ($conn->query($sql) === TRUE) {
            echo "Account created successfully";
        } else {
            echo "Error creating Account: " . $conn->error;
        }
    }
}

$conn->close();
?>