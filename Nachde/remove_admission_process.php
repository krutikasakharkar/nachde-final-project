<?php
include "connection.php";

// Form data
$admission_id = $_POST['admission_id'];

// Delete data from db
$sql = "DELETE FROM admission WHERE id='$admission_id'";

if ($conn->query($sql) === TRUE) {
    // Redirect to view all admission page
    header("Location: view_admission.php");
    exit(); // to make sure no more output is sent
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>