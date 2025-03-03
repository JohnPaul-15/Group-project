<?php
session_start();
include('database.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['first_name'];
    $middlename = $_POST['middle_name'];
    $lastname = $_POST['last_name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO members (first_name, middle_name, last_name, age, email, username, password) VALUES ('$firstname', '$middlename', '$lastname', '$age', '$email', '$username', '$password')";

    if (mysqli_query($conn, $sql)){
        $_SESSION['status'] = "Created";
    } else {
        $_SESSION['status'] = "Error";
    }

    mysqli_close($conn);
    header("Location: ../index.php");
    exit();
}

?>