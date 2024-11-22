<html>
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
        header("location: login.php");//You will be sent to Login.php for re-login 
    } 
 
     $inUsername = $_POST["uname"]; // as the method type in the form is "post" we are using $_POST otherwise it would be $_GET[] 
     $inPassword = $_POST["pw"]; 

    //  $stmt= $conn->prepare("SELECT USERNAME, PASSWORD FROM LOGIN WHERE USERNAME = '$inUsername' AND PASSWORD = '$inPassword'"); //Fetching all the records with input credentials
    //  $stmt->bind_param("s",$inUsername); //bind_param() - Binds variables to a prepared statement as parameters. "s" indicates the type of the parameter.
    //  $stmt->execute();

     $stmt= $conn->prepare("SELECT USERNAME, PASSWORD FROM LOGIN WHERE USERNAME = ? AND PASSWORD = ?");
     $stmt->bind_param("ss", $inUsername, $inPassword); // Bind parameters with types and values
     $stmt->execute();

     $stmt->bind_result($UsernameDB, $PasswordDB); // Binding i.e. mapping database results to new variables
      
    //Compare if the database has username and password entered by the user. Password has to be decrypted while comparing.
     if ($stmt->fetch() ) 
     {
        $_SESSION['uname']=$inUsername ; //Storing the username value in session variable so that it can be retrieved on other pages
        header("location: Home.php"); // user will be taken to profile page
     }
     else
     {
           echo "Incorrect ";
 
          ?>         
          <a href="login.php">Login</a>
       <?php 
     } 
} 
       ?>
</body> 
</html>