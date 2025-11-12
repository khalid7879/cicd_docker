<?php
include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];

$sql = "INSERT INTO students (name, email) VALUES ('$name', '$email')";

if ($conn->query($sql) === TRUE) {
  // The echo statement was causing the "headers already sent" error.
  // It has been removed. The user will be redirected to index.php.
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
?>