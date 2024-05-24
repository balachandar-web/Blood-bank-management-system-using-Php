<!DOCTYPE html>
<html>
<head>
    <title>BLOODBANK MANAGEMENT SYSTEM</title>
    <!-- <link rel="stylesheet" type="text/css" href="style1.css"/> -->

    <script>
        function validate(){
            let uname=document.getElementById("uname").value.trim();
            let pw=document.getElementById("pw").value.trim();
 
            let errormeg=document.getElementById("error");
            errormeg.innerHTML="";

            if(uname==""){
                errormeg.innerHTML="please fill this username";
                return false;
            }
            if(uname.length<3){
                errormeg.innerHTML="* uname more than 3 char*";
                return false;
            }
            if(pw==""){
                errormeg.innerHTML="please fill this password";
                return false;
            }
            if(pw.length<5){
                errormeg.innerHTML="password more than 5 char";
                return false;
            }

            // Show alert message
            alert("Login successful");

            // Redirect after OK is clicked
            window.location.href = "index.php";

            return true;
        }
    </script>

<style>
        body{
            background-color: grey ;
            
        }

        .a{
            width: 350px;
            height: 500px;
            background-color: lightgreen;
            margin: 20px 0px 0px 500px;
            border-radius: 0px 30px 0px 30px;
            box-shadow: 5px 5px 10px 4px  black;
        }
        .a h1{
            padding-top: 30px;
            padding-bottom: 30px;
            text-align: center;
            font-stretch: ultra-expanded;
            font-size: 50px;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            border-bottom-style: double;
            
            
        }
 
        form{
            margin-left: 30px;
        }

        form label{
            display: block;
            margin-top: 15px;
            font-size: 20px;
            text-transform: capitalize;
            text-transform: capitalize;
            font-weight: bold;
            

        }

        form input{
            margin-top: 5px;
            width: 80%;
            border: none;
            padding: 7px;
        }

        /* form input[type="submit"]{ */
        form >button{
            border: none;
            padding: 5px;
            width: 100px;
            font-weight: bold;
            background-color: black;
            color: white;
            margin-top: 15px;
            margin-left: 20px;
        }

        form #error{
            margin-top: 10px;
            color: red;
        }
    </style>


</head>
<body>


 <?php 
 include_once("connection.php"); 
 session_start(); //always start a session in the beginning 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{ 
    if (empty($_POST['uname']) || empty($_POST['pw'])) //Validating inputs using PHP code 
    { 
        echo 
        "Incorrect username or password"; //
        header("location: log.php");//You will be sent to Login.php for re-login 
    } 
 
     $inUsername = $_POST["uname"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[] 
     $inPassword = $_POST["pw"]; 

    //  $stmt= $conn->prepare("SELECT USERNAME, PASSWORD FROM LOGIN WHERE USERNAME = '$inUsername' AND PASSWORD = '$inPassword'"); //Fetching all the records with input credentials
    //  $stmt->bind_param("s",$inUsername); //bind_param() - Binds variables to a prepared statement as parameters. "s" indicates the type of the parameter.
    //  $stmt->execute();

     $stmt= $conn->prepare("SELECT USERNAME, PASSWORD FROM REGISTER WHERE USERNAME = ? AND PASSWORD = ?");
     $stmt->bind_param("ss", $inUsername, $inPassword); // Bind parameters with types and values
     $stmt->execute();

     $stmt->bind_result($UsernameDB, $PasswordDB); // Binding i.e. mapping database results to new variables
      
    //Compare if the database has username and password entered by the user. Password has to be decrypted while comparing.
     if ($stmt->fetch() ) 
     {
        $_SESSION['uname']=$inUsername ; //Storing the username value in session variable so that it can be retrieved on other pages
        // No need to show alert here
        // Redirect immediately
        header("location: index.php"); // user will be taken to profile page
     }
     else
     {
        echo "<script>alert('Invalid login Credentials');</script>";
        // header("location: log.php");
 
     } 
} 
       ?>


    <div class="a">
    <h1>login</h1>
    <form name="bbms" method="post" action="" onsubmit="return validate();" >

    <label for="uname">username :</label>
    <input type="text" id="uname" name="uname" placeholder="Enter your username">

    <label for="uname">password :</label>
    <input type="password" id="pw" name="pw" placeholder="Enter your password">
    <div id="error">


    </div>     

    <button type="submit" id="btn" value="login">login</button>
    <button type="reset">reset</button>


    </form>
    </div>


</body>
</html>
