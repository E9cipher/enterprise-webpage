<?php
// echo "Hello World!";
// Collect data from the form
$email = $_POST['email'];
// echo $email;
// Create a DB connection
$conn = new mysqli('localhost', 'scripts', 'Scripts123!', 'enterprise-webpage');
// Check for connection error
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}

// Insert data into the DB
$sql = "INSERT INTO users (email) VALUES ('$email')";
if($conn->query($sql) === TRUE) {
    // echo "<script>alert('New record created successfully');</script>";
    echo "Inserted!<br/>";
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}
// Close the connection
$conn->close();

// Redirect to the home page and sleep a bit. 2000miliseconds is more than nothing :)

echo "Record inserted!";
echo "<script>window.location.href = '../index.php';</script>";
exit();
?>