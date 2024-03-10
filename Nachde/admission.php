<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dance Class Admission Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
    include "navbar.php";
?>

<h1>Dance Class Admission Form</h1>

<form action="process_admission.php" method="post">
    <label for="name">Full Name:</label><br>
    <input type="text" id="name" name="name" required><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="dob">Date of Birth:</label><br>
    <input type="date" id="dob" name="dob" required><br>

    <label for="phone">Phone Number:</label><br>
    <input type="tel" id="phone" name="phone" required><br>


    <label for="payment_method">Payment Method:</label><br>
    <select id="payment_method" name="payment_method" required>
        <option value="credit_card">Credit Card</option>
        <option value="debit_card">Debit Card</option>
        <option value="paypal">PayPal</option>
        
    </select><br>

    <label for="address">Address:</label><br>
    <textarea id="address" name="address" rows="4" required></textarea><br>


    <input type="submit" name="submit" value="Proceed to pay">

</form>

</body>
</html>

