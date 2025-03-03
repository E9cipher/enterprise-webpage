<?php
session_start();
// echo "Hello World!";
// Collect data from the form
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);

    // Validate the email, we don't want hacks in our DB
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Fine work! User is not a hacker
        $_SESSION['result'] = "1";
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
        // Our job is done :)
        header("Location: ../index.php");
        exit();
    } else {
        // Hmm... Something's wrong with that email...
        $_SESSION['result'] = "0";
        // Good job! We avoided a hacker!
    }
} else {
    // Seems someone tries to access this directly... Let's get him out
    header("Location: ../index.php");
    exit();
}

echo "Record inserted!";
sleep (2);
echo "<script>window.location.href = '../index.php';</script>";
exit();
?>