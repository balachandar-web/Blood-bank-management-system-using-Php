<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="css/modern-business.css" rel="stylesheet">
<style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block;
    }
    #footer{
        margin-bottom: 1px;
    }
    #editbtn{
	background-color: #0dd34f;
font-size: 200px;
border: none;
color: white;
font-size:15px;
padding: 16px 32px;
text-decoration: bold;
margin: 4px 2px;
cursor: pointer;
}
@keyframes blink {
  0% { opacity: 1; }
  50% { opacity: 0; }
  100% { opacity: 1; }
}

.blink {
  animation: blink 1s infinite;
  color: red;
  font-weight: 900;
}

    </style>
</head>
<?php include('includes/header.php');?>
<body bgcolor="white">

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>




<!-- <div class="topnav">
 <a class="active " href="Home.php">Home</a>
 <a class="active " href="reg.php">Register</a>
 <a class="active " href="search1.php">Search</a>
 <a class="active " href="logout.php">Log Out</a>
</div> -->
<tr>
<td><br></td>
</tr><tr>
<td><br></td>
</tr>
<tr>
<td><br></td>
</tr>
<form action="" method="post" name="register">
<center>
<table>
            <tr>
                <td colspan="2"><center><h2>Be Proud to Become a Donor</h2><hr></center></td>
            </tr>



                <tr>
                    <td><font size="6">Name:</font></td>
                    <td><input type="text" name="name" required></input></td>
                </tr>
                <tr>
                    <td><font size="6" required>Gender :</font></td>
                    <td><input type="radio" id="male" name="gender" value="male">
                    <label for="male"><font size="5">Male</font></label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female"><font size="5">Female</font></label></td>
                </tr>  
                <tr>
                    <td><font size="6">Age :</font></td>
                    <td><input type="text" id="age" name="age" pattern="^(1[5-9]|[2-5][0-9]|60)$" title="Age must be between 15 and 60"><br></td>
                    <!-- required pattern="[0-9]{2}" -->
                    
                </tr>              
                <tr>
                    <td><font size="6" >Email:</font></td>
                    <td><input type="email" name="email" required></input></td>
                </tr>
                <tr>
                    <td><font size="6">Mobile:</font></td>
                    <td><input type="text" name="phn" required pattern="[0-9]{10}"/></td>
                </tr>
                <tr>
                    <td><font size="6">City:</font></td>
                    <td><select name="city">
                                <option>Choose</option>
                                <option>Chennai</option>
                                <option>Kanchipuram</option>
                                <option>Thiruvallur</option>
                                <option>Sengalpattu</option>


                        </select></td>
                </tr>
                <tr><td colspan="2"><p><span class="blink">!! Note  </span>Your blood group can't be changed any more once you<br> have submitted the form. So, please choose the wright one now itself.</p></td>
                </tr>
                <tr>
                    <td><font size="6">Blood Group:</font></td>
                    <td><select name="bgroup">
                                <option>Choose</option>
                                <option>O+</option>
                                <option>A+</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>O-</option>
                                <option>A-</option>
                                <option>B-</option>
                                <option>AB-</option>
                        </select></td>
                </tr>
               <tr>
                    <td></td>
                    <td><input type="submit" value="Submit" name="b1"/></input><a type="reset" href="donorupdate.php" id="editbtn" value="edit">update</a></td>
                </tr>
<tr>
<td><br></td>
</tr>
<tr>
<td><br></td>
</tr>
</table>
</center>
</form>

<?php
include "dbconn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $inName = $_POST["name"];
    $inGender = $_POST["gender"];
    $inAge = $_POST["age"];
    $inEmail = $_POST["email"];
    $inMob = $_POST["phn"];
    $inCity = $_POST["city"];
    $inBg = $_POST["bgroup"];

    $sql = "INSERT INTO donorreg (name, gender, age, email, mobile, city, blood_group) 
            VALUES ('$inName', '$inGender', '$inAge', '$inEmail', '$inMob', '$inCity', '$inBg')";

    if (mysqli_query($conn, $sql)) {
?>
        <script type="text/javascript">alert('Records saved');</script>
<?php
        echo "Record saved";
    } else {
?>
        <script type="text/javascript">alert('Some error occurred in saving records');</script>
<?php
        echo "Error in inserting data: " . mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>






<div id="footer">
<?php include('includes/footer.php');?>
</div>

</body>
</html>
