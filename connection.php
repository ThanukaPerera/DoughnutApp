<?php
$servername = 'localhost';
$username = 'root';
$db_password = ''; // Database password
$database = 'doughnutapp';


// Get user inputs
$name = $_POST["name"];
$email = $_POST["email"];
$user_password = $_POST["password"]; // Rename to avoid conflict
$confirm_password = $_POST["confirmpassword"];



// Create connection
$conn = new mysqli($servername, $username, $db_password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement
$sql = "INSERT INTO Customer (name, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);

// Bind parameters and execute statement
$stmt->bind_param("sss", $name, $email, $user_password);

//Checking redundancy
$duplicate = mysqli_query($conn, "SELECT * FROM Customer WHERE email='$email'");

if (mysqli_num_rows($duplicate) > 0) {
    echo "<script>alert('Your email is already registered')</script>";
    // Redirect to another HTML page
    header("Location: registeredSuccessfully.html");
    exit(); // Stop further execution of PHP script
}

// Execute statement
else if ($stmt->execute()) {
    echo "<script>alert('Your account has been created successfully')</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statement and connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account creation</title>
</head>



</html>