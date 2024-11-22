<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
            #nav-link{
                color: white;
            }
            #nav-link:hover{
                color: grey;
            }

            #bloodicon {
                width: 50px; /* Adjust the width as per your requirement */
                height: auto; /* This will maintain the aspect ratio */
                margin-left: 0px;
            }
            #container{
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
                margin-left: 20px;
                padding: 0px 1px 0px 0px;
            }
            .navbar-brand{
                margin-left: 30px;
            }
            #navbarExample{
                margin-left: 30px;
            }


    </style>
</head>
<body>
    
   <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse bg-inverse">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarExample" aria-controls="navbarExample" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container" id="container">
        <!-- <a href="https://www.flaticon.com/free-animated-icons/blood-donation" title="blood donation animated icons">Blood donation animated icons created by Freepik - Flaticon</a> -->
        <img src="./blood-donation.png" alt="Icon Description" id="bloodicon">
            <a class="navbar-brand" href="index.php">BloodBank & Donor Management System</a>
            <div class="collapse navbar-collapse" id="navbarExample">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" id="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-link" href="donorreg.php">Become donor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="nav-link" href="donorsearch.php">Search Blood</a>
                    </li>
                      <li class="nav-item">
                        <a class="nav-link" id="nav-link" href="logout.php">Logout</a>
                    </li>
                 
                 
                </ul>
            </div>
        </div>
    </nav>
    
    
</body>
</html>