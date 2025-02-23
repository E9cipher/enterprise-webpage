<?php
// echo "Hello World!";
// Collect data from the form
$email = $_POST['email'];
// echo $email;
// Create a DB connection
$conn = new mysqli('localhost', 'scripts', 'Scripts123!', 'php');
// Check for connection error
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}

// Insert data into the DB
$sql = "INSERT INTO users (email) VALUES ('$email')";
if($conn->query($sql) === TRUE){
    echo "New record created successfully";
}else{
    echo "Error: ".$sql."<br>".$conn->error;
}
// Close the connection
$conn->close();
?>