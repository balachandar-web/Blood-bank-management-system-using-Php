<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System</title>
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
        margin-top: 270px;
    }
    table {
        /* padding: 0px 20px 0px 20px; */
        width: 90%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    th, td {
        padding: 10px;
        border: 1px solid #ddd;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    tr:hover {
        background-color: #ddd;
    }
    label{
        font-size: 30px;
        font-weight: 10px;
        color: black;
    }
    .col{
        padding: 10px;
        margin-left: 1px;
    }
    #noresult{
        align-items: center;
        background-color: red;
        color: white;
        /* width: 50px; */
        font-size: 20px;
    }
    #red{
        color: red;
        font-weight: 900;
    }
    #green{
        color: green;
        font-weight: 900;

    }
</style>

    </style>

</head>

<body>
<script>
    function validateForm() {
        var city = document.getElementById("city").value;
        var bloodGroup = document.getElementById("bgroup").value;
        
        if (city === "Select" && bloodGroup === "Select") {
            alert("Please select the options to search based on City or Blood Group.");
            return false;
        }
        return true;
    }
</script>




    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Navigation -->
<?php include('includes/header.php');?>
<div>
<tr>
<td><br></td>
</tr><tr>
<td><br></td>
</tr>
<tr>
<td><br></td>
</tr>
<tr>
<td><br></td>
</tr>
<center>
<form name="Search" method="post" onsubmit="return validateForm()" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<div class="row">
                <div class="col" id="col">
                    <label>City:</font></label>
                    <select name="city" id="city">
                       <option>Select</option>
                       <option>Chennai</option>
                       <option>Kanchipuram</option>
                        <option>Thiruvallur</option>
                        <option>Sengalpattu</option>
</select>
</div>
				
                <div class="col" id="col">
                    <label>Blood Group:</label>
                    <select name="bgroup" id="bgroup">
                                <option>Select</option>
                                <option>O+</option>
                                <option>A+</option>
                                <option>B+</option>
                                <option>AB+</option>
                                <option>O-</option>
                                <option>A-</option>
                                <option>B-</option>
                                <option>AB-</option>
                        </select>
</div>
				<div class="col" id="col">
                <input type="submit" value="Search" name="b2"/><br><br>
                <a type="submit" href="donorsearch.php" id="refreshbtn" value="refresh">View all</a></td>

</div>

</div>
</form>
</center>
</div>





<?php
include "dbconn.php";


//Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $inCity = $_POST["city"];
    $inBg = $_POST["bgroup"];


    // Build the WHERE clause dynamically
if ($inCity !== "Select" && $inBg == "Select") {
    // Filter only by city
    $whereClause = "WHERE city = '" . $inCity . "'";
}elseif ($inCity == "Select" && $inBg !== "Select") {
    // Filter only by blood group
    $whereClause = "WHERE blood_Group = '" . $inBg . "'";
} elseif (!empty($inCity) && !empty($inBg)) {
    // Filter by both city and blood group
    $whereClause = "WHERE city = '" . $inCity . "' AND blood_Group = '" . $inBg . "'";
} else {
    // If both inputs are empty, fetch all records
    $whereClause = " ";
 

}

// Modify the query with the WHERE clause
$sql = "SELECT * FROM donorreg " . $whereClause;
$result = $conn->query($sql);

if ($result === false) {
    echo "Error executing query: " . $conn->error;
}

} else {
    // If form is not submitted, fetch all records
    $sql = "SELECT * FROM donorreg";
    $result = $conn->query($sql);
}
    


// Check if there are any results
if ($result->num_rows > 0) {
    // Output the results in a table
    echo "<center><table ><tr><th> Donor Name </th>";
    echo "<th>Gender </th>";
    echo "<th>Age </th>";
    echo "<th>Email </th>";
    echo "<th>Mobile </th>";
    echo "<th>City </th>";
    echo "<th>Blood_Group </th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["gender"]."</td><td>".$row["age"]."</td><td>".$row["email"]."</td><td>".$row["mobile"]."</td><td id=green>".$row["city"]."</td><td id=red>".$row["blood_group"]."</td></tr>";
    }
    echo "</table></center>";
} else {
    // If no results found, display a message
    echo "<center id=noresult >NO RESULTS!</center>";
}


mysqli_close($conn);
?>








<div id="footer">
<?php include('includes/footer.php');?>
<div>

</body>
</html>