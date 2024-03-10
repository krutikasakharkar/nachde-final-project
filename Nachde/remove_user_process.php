<?php
include "connection.php";

$user_id = $_POST['user_id'];

// Delete data from db
$sql = "DELETE FROM users WHERE id='$user_id'";

if ($conn->query($sql) === TRUE) {
    // Redirect to view all users 
    header("Location: view_user.php");
    exit(); // to make sure no more output is sent
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>