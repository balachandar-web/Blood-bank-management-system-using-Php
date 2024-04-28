<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="css/modern-business.css" rel="stylesheet">
    <style>
        select[readonly] {
            pointer-events: none;
            touch-action: none;
            background-color: #f8f8f8;
        }
        #id{
            pointer-events: none;
            touch-action: none;
            background-color: #f8f8f8;
        }

        
    </style>
</head>
<body bgcolor="white">

<?php 
include('includes/header.php');
include "dbconn.php";

// Initialize $row variable to an empty array
$row = array();

// Start session at the beginning of the file
session_start();

// Check if session variable is set
// if(isset($_SESSION['email'])) {
    // Retrieve email from session variable
    // $inEmail = $_SESSION['email'];

    // Fetch donor details based on email ID
    if(isset($_POST['getbtn'])) {
        $inEmail = $_POST["email"];
        $sql = "SELECT * FROM donorreg WHERE email = '$inEmail'";
        $result = mysqli_query($conn, $sql);
        // Check if donor record exists
        if(mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
        } else {
            // Handle case where donor record doesn't exist
            echo '<script>alert("Donor not found for the provided email")</script>';
        }
    // } else {
    //     // Handle case where email is not provided
    //     echo '<script>alert("Email parameter not provided")</script>';
    }
// } else {
//     // Handle case where session email is not set
//     echo '<script>alert("Session email parameter not set")</script>';
// }
?>
<br><br>
<form action="" method="post" name="update">
    <center>
        <table>
                        <!-- Form fields with pre-filled values -->
            <tr>
                <td colspan="2"><center><h2>UPDATE YOUR DETAILS</h2><hr></center></td>
            </tr>
            <tr>
                <td><font size="6">Email:</font></td>
                <td><input type="email" name="email" value="<?php echo isset($row['email']) ? $row['email'] : ''; ?>" placeholder="First enter email to view" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="view" name="getbtn">
            </tr>
            <tr>
                <td><font size="6">Id:</font></td>
                <td><input type="text" name="id" id="id" value="<?php echo isset($row['id']) ? $row['id'] : ''; ?>" readonly></input></td>
            </tr>
            <tr>
                <td><font size="6">Name:</font></td>
                <td><input type="text" name="name" value="<?php echo isset($row['name']) ? $row['name'] : ''; ?>"></td>
            </tr>
            <tr>
    <td><font size="6">Gender:</font></td>
    <td>
        <input type="radio" id="male" name="gender" value="male" <?php if(isset($row['gender']) && $row['gender'] == 'male') echo 'checked'; ?>>
        <label for="male"><font size="5">Male</font></label>
        <input type="radio" id="female" name="gender" value="female" <?php if(isset($row['gender']) && $row['gender'] == 'female') echo 'checked'; ?>>
        <label for="female"><font size="5">Female</font></label>
    </td>
</tr>


            <tr>
                <td><font size="6">Age:</font></td>
                <td><input type="text" name="age" value="<?php echo isset($row['age']) ? $row['age'] : ''; ?>"></td>
            </tr>
            
            <!-- <tr>
                <td><font size="6">Mobile:</font></td>
                <td><input type="text" name="phn" value="<?php echo isset($row['phn']) ? $row['phn'] : ''; ?>" pattern="[0-9]{10}"/></td>
            </tr> -->
            <tr>
                <td><font size="6">Mobile:</font></td>
                <td><input type="text" name="mobile" value="<?php echo isset($row['mobile']) ? $row['mobile'] : ''; ?>" pattern="[0-9]{10}"/></td>
            </tr>

            <tr>
                <td><font size="6">City:</font></td>
                <td>
                    <select name="city">
                        <option>Choose</option>
                        <option value="Chennai" <?php if(isset($row['city']) && $row['city'] == 'Chennai') echo 'selected'; ?>>Chennai</option>
                        <option value="Kanchipuram" <?php if(isset($row['city']) && $row['city'] == 'Kanchipuram') echo 'selected'; ?>>Kanchipuram</option>
                        <option value="Thiruvallur" <?php if(isset($row['city']) && $row['city'] == 'Thiruvallur') echo 'selected'; ?>>Thiruvallur</option>
                        <option value="Sengalpattu" <?php if(isset($row['city']) && $row['city'] == 'Sengalpattu') echo 'selected'; ?>>Sengalpattu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><font size="6">Blood Group:</font></td>
                <td>
                <select name="blood_group" readonly>
    <option>Choose</option>
    <option value="O+" <?php if(isset($row['blood_group']) && $row['blood_group'] == 'O+') echo 'selected'; ?>>O+</option>
    <option value="A+" <?php if(isset($row['blood_group']) && $row['blood_group'] == 'A+') echo 'selected'; ?>>A+</option>
    <option value="B+" <?php if(isset($row['blood_group']) && $row['blood_group'] == 'B+') echo 'selected'; ?>>B+</option>
    <option value="AB+" <?php if(isset($row['blood_group']) && $row['blood_group'] == 'AB+') echo 'selected'; ?>>AB+</option>
    <option value="O-" <?php if(isset($row['blood_group']) && $row['blood_group'] == 'O-') echo 'selected'; ?>>O-</option>
    <option value="A-" <?php if(isset($row['blood_group']) && $row['blood_group'] == 'A-') echo 'selected'; ?>>A-</option>
    <option value="B-" <?php if(isset($row['blood_group']) && $row['blood_group'] == 'B-') echo 'selected'; ?>>B-</option>
    <option value="AB-" <?php if(isset($row['blood_group']) && $row['blood_group'] == 'AB-') echo 'selected'; ?>>AB-</option>
</select>

                </td>
            </tr>
            <!-- Update button -->
            <tr>
                <td></td>
                <td><input type="submit" value="Update" name="update_btn"><input type="submit" value="delete" name="delbtn" style="background-color: red"></td>
            </tr>
        </table>
    </center>
</form><br><br>

<?php
// Handle update operation
{if(isset($_POST['update_btn'])) {
    $id = $_POST["id"];
    $inName = $_POST["name"];
    $inGender = $_POST["gender"];
    $inAge=$_POST["age"];
    $inEmail = $_POST["email"];
    $inMob=$_POST["mobile"];
    $inCity=$_POST["city"];
    $inBg=$_POST["blood_group"];
    // Retrieve other form values similarly

    $sql = "UPDATE donorreg SET name = '$inName', gender = '$inGender', age = '$inAge', email = '$inEmail', mobile = '$inMob', city = '$inCity', blood_group = '$inBg' WHERE id = '$id'";
    // mysqli_query($conn, $sql)
    if(mysqli_query($conn, $sql)) {
        echo '<script>alert("Record updated successfully")</script>';
    } else {
        echo '<script>alert("Error in updating record: '.mysqli_error($conn).'")</script>';
    }
}}

// include('includes/footer.php');
// mysqli_close($conn);

// Handle delete operation
{if(isset($_POST['delbtn'])) {
    $id = $_POST["id"];
    // $inName = $_POST["name"];
    // $inGender = $_POST["gender"];
    // $inAge=$_POST["age"];
    $inEmail = $_POST["email"];
    // $inMob=$_POST["mobile"];
    // $inCity=$_POST["city"];
    // $inBg=$_POST["blood_group"];
    // Retrieve other form values similarly

    $sql = "DELETE FROM donorreg WHERE id = '$id' OR email = '$inEmail'";
    // mysqli_query($conn, $sql)
    if(mysqli_query($conn, $sql)) {
        echo '<script>alert("Record deleted successfully")</script>';
    } else {
        echo '<script>alert("Error in Deleting record: '.mysqli_error($conn).'")</script>';
    }
}}

include('includes/footer.php');
mysqli_close($conn);
?>

</body>
</html>
