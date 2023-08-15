<?php
include 'dbconnect.php';

$name = mysqli_real_escape_string($connection, $_POST['name']);
$email = mysqli_real_escape_string($connection, $_POST['email']);
$message = mysqli_real_escape_string($connection, $_POST['message']);

$sql = "INSERT INTO contacts (name, email, message) VALUES ('$name', '$email', '$message')";

if (mysqli_query($connection, $sql)) {
    echo "Thank you for contacting us!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
