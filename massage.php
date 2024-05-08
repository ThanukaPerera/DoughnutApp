<?php
require_once 'config.php';

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"]; 
$massage = $_POST["massage"];

$sql = "INSERT INTO massage (name, email, phone, massage) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);


$stmt->bind_param("sss", $name, $email, $user_password);


if ($stmt->execute()) {
    // Redirect to another HTML page
    echo "<script>alert('Your massage has recorded.Thank you.')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>