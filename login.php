<!DOCTYPE html>
<html>
<head>
	<title>BLOODBANK MANAGEMENT SYSTEM</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">

	<script>
        let button=document.getElementById("btn");
        button.addEventListener("click",validate)

        function validate() {
            let uname = document.getElementById("uname").value.trim();
            let pw = document.getElementById("pw").value.trim();

            let error = document.getElementById("error");
            error.innerHTML = "";

            if (uname === "") {
                error.innerHTML = "! Please enter your username";
                return false;
            }
            if (uname.length < 5) {
                error.innerHTML = "Username at least 5 characters long";
                return false;
            }
            if (pw === "") {
                error.innerHTML = "! Please enter your password";
                return false;
            }
            if (pw.length < 5) {
                error.innerHTML = "Password at least 5 characters long";
                return false;
            }

            return true;
        
        }

        
    </script>

	<style>
        body {
            background-color: grey;
        }

        .a {
            max-width: 500px;
            margin: 50px auto;
            width: 300px;
            height: 500px;
            background-color: rgb(224, 75, 75);
            /* margin: 100px 0px 0px 500px; */
            border-radius: 0px 30px 0px 30px;
            box-shadow: 5px 5px 10px 4px black;
        }

        .a h1 {
            padding-top: 30px;
            padding-bottom: 30px;
            text-align: center;
            font-stretch: ultra-expanded;
            font-size: 50px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border-bottom-style: double;
        }

        form {
            margin-left: 30px;
        }

        form label {
            display: block;
            margin-top: 15px;
            font-size: 20px;
            font-weight: bold;
        }

        form input {
            margin-top: 5px;
            width: 80%;
            border: none;
            padding: 7px;
        }

        form > button {
            border: none;
            padding: 5px;
            width: 100px;
            font-weight: bold;
            background-color: black;
            color: white;
			/* margin-top: 30px; */
			margin-bottom: 5px;
            margin-left: 7px;
        }

        #error {
            margin-top: 10px;
            color: yellow;
        }
        #signup{
            margin-left: 45px;
        }
        #signup > a {
            font-size: 20px;
        }
        #sign{
            color: white;
        }
        #resetpwd{
            margin-left: 50px;
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
    
</head>
<body>

    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>



	<?php 

	include_once("connection.php"); 
	session_start();//always start a session in the beginning 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
	    if (empty($_POST['username']) || empty($_POST['pw'])) { 
	        echo "<script>alert('Username and password are required');</script>";
	    } else { 
	        $inEmail = $_POST["username"]; 
	        $inPassword = $_POST["pw"]; 
	        $stmt= $conn->prepare("SELECT USERNAME, PASSWORD FROM REGISTER WHERE USERNAME = ? AND PASSWORD = ?");
	        $stmt->bind_param("ss", $inEmail, $inPassword); 
	        $stmt->execute();
	        $stmt->bind_result($EmailDB, $PasswordDB); 
	        if ($stmt->fetch() ) { 
	            $_SESSION['email']=$inEmail ; 
	            echo "<script>alert('LoggedIn successfully');</script>";
                echo "<script>window.location.href = 'index.php';</script>"; // user will be taken to profile page

	        } else { 
                echo "<script>alert('Invalid Login Credentials');</script>";
            } 
	    } 
	} 
	?>

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
		<h1>Login</h1>
		<form id="bbms" method="post" action="" onsubmit="return validate();">
			<label for="username">Name:</label>
			<input type="text" id="username" name="username" placeholder="Enter your username">
			<label for="pw">Password:</label>
			<input type="password" id="pw" name="pw" placeholder="Enter your password">
			<div class="error">
				<p id="error"><b> </b></p>
			</div>
            <div id="signup">
             New user? <a href="register.php" id="sign"> signup</a>
            </div>
            <div id="resetpwd">
            <a href="resetpwd.php" id="sign">forgot password?</a>
            </div><br>
			<button type="submit" id="btn" value="login">Login</button>
			<button type="reset">Reset</button>
		</form>
	</div>
</body>
</html>
