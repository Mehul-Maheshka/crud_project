<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "12345"; 
$dbname = "employee_management";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $skills = $_POST["skills"];
    $experience = $_POST["experience"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO employees (firstName, lastName, skills, experience, age, gender)
            VALUES ('$firstName', '$lastName', '$skills', '$experience', '$age', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
