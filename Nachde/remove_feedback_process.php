<?php
include "connection.php";


if(isset($_POST['submit'])){
    $query_id = $_POST['query_id'];

    // Delete data from db
    $sql = "DELETE FROM query WHERE id='$query_id'";

    if ($conn->query($sql) === TRUE) {
        // Redirect to view all feedback page
        header("Location: form_handler_process.php");
        exit(); // to make sure no more output is sent
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
