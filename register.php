<?php

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    die("Please submit the form from index.html");
}

$conn = new mysqli("localhost", "root", "root2006", "lab7", 3307);

if ($conn->connect_error)
{
    die("Connection Failed");
}

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

// Validation

// Full name
if(strlen($fullname) > 40)
{
    die("Full name should not exceed 40 characters.");
}

// Email validation
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
{
    die("Invalid Email Address.");
}

// Username validation
// Starts with letters followed by numbers

if(!preg_match("/^[A-Za-z]+[0-9]+$/", $username))
{
    die("Username must start with letters followed by numbers.");
}

// Password validation

if(strlen($password) <= 8)
{
    die("Password must be more than 8 characters.");
}

// Insert

$sql = "INSERT INTO users(fullname,email,username,password)
VALUES('$fullname','$email','$username','$password')";

if($conn->query($sql))
{
    echo "Registration Successful";
}
else
{
    echo "Error";
}

$conn->close();

?>