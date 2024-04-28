
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
        /* Basic CSS styling */
        body{
            background-color: grey;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .a {
            max-width: 500px;
            margin: 50px auto;
            padding: 5px 30px 10px 30px;
            width: 400px;
            height: 850px;
            background-color: rgb(224, 75, 75);
            /* margin: 50px 0px 0px 100px; */
            border-radius: 0px 30px 0px 30px;
            box-shadow: 5px 5px 10px 4px black;
        }
        .a h2 {
            padding-bottom: 30px;
            text-align: center;
            font-stretch: ultra-expanded;
            font-size: 50px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border-bottom-style: double;
        }
        input[type=submit],[type=reset] {
            border: none;
            padding: 5px;
            width: 80px;
            height: 30px;
            font-weight: bold;
            font-size: 15px;
            background-color: black;
            color: white;
			/* margin-top: 30px; */
			margin-bottom: 5px;
            margin-left: 30px;
        }
        form {
            padding: 0px 50px 0px 50px;
        }
        input[type=text], input[type=password], input[type=email], input[type=date] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        /* input[type=submit],[type=reset]{
            padding-left: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 45%;
        } */
        input[type=reset]{
            margin-left: 35px;
        }
        input [type=submit]&[type=reset]:hover {
            background-color: #45a049;
        }
        label {
            font-weight: bold;
        }
        .error-message {
            color: red;
            margin-top: 5px;
        }
        h2{
            text-align: center;
        }
        #login{
            margin-left: 40px;
        }
        #log{
            font-size: 20px;
            color: white;
        }
        #bloodicon {
                width: 50px; /* Adjust the width as per your requirement */
                height: auto; /* This will maintain the aspect ratio */
                margin-left: 0px;
        }
        .navbar-brand{
            margin-left: 20px;
        }
    </style>
    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;
            var username = document.getElementById("username").value.trim();
            var password = document.getElementById("password").value.trim();

            if (password != confirmPassword) {
                document.getElementById("error-message").innerText = "Passwords do not match";
                return false;
            }
            if (username.length < 6) {
                error.innerHTML = "Username at least 6 characters long";
                return false;
            }
            if (password.length < 6) {
                error.innerHTML = "Password at least 6 characters long";
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <!-- <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button> -->
        <div class="container d-flex justify-content-center" id="container">
            <img src="./blood-donation.png" alt="Icon Description" id="bloodicon">
            <a class="navbar-brand" href="#">BloodBank & Donor Management System</a>
        </div>
    </nav>

<div class="a">
<h2>SignUp</h2>
<form action="" method="post" onsubmit="return validateForm()">
    <label for="fullname">Full Name:</label>
    <input type="text" id="fullname" name="fullname" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="dob">Date of Birth:</label>
    <input type="date" id="dob" name="dob" required>

    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" id="confirm_password" name="confirm_password" required>
    <div id="error-message" class="error-message"></div>

    <div id="login">
        Already a user? <a href="login.php" id="log"> Login</a>
    </div><br>

    <input type="submit" value="Register"><input type="reset" value="reset">
</form>
</div>

<?php
include "dbconn.php";

// Form data
if($_SERVER['REQUEST_METHOD']=='POST')
{
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$username = $_POST['username'];
$password = $_POST['password']; // Remember to hash the password before storing it in the database


// SQL to insert data into register table
$sql = "INSERT INTO register (fullname, email, dob, username, password)
        VALUES ('$fullname', '$email', '$dob', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registered successfully');</script>";
    echo "<script>window.location.href = 'login.php';</script>";
} 
else {
    echo "<script>alert('Please try again');</script>";
}

$conn->close();
}
?>

</body>
</html>

