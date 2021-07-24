<?php

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $servername = "localhost";
    $username = "admin";
    $password = "password";
    $dbname = "userDB";

    // Create Connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {
        //echo "Connected successfully <br>";
    }

    $email = $_POST["emailL"];
    $pass = $_POST["passwordL"];

    $emailErr = $passErr = "";

    $sql1 = "SELECT id, email FROM users WHERE email='$email'";
    $result1 = $conn->query($sql1);

    if ($result1->num_rows>0) {
        $sql2 = "SELECT password FROM users WHERE email='$email' AND password='$pass'";
        $result2 = $conn->query($sql2);

        if ($result2->num_rows>0) {
            echo "<br>Hello user, $email <br>";
        } else {
            $passErr = "Wrong Password";
        }
    } else {
        $emailErr = "Sorry email not found";
    }

}
?>