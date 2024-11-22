<?php
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BloodBank & Donor Management System</title>
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
    /* #imghero{
        border-style:groove;
        border-radius: 5px 5px 5px 5px;
        box-shadow: 0px 0px 4px 0px;
        border-color: black;
        border-block-end-width: 10px;
        border-width: 10px;
        height: 370px;
        width: 100px;
    } */
    /* #donorbtn{
        border-color: greenyellow;
        border-style: solid;
        width: 220px;
        border-width: 5px;
        box-shadow: 4px 4px 8px 4px;
        margin-left: 90px;
        margin-top: 30px;
        font-size: 20px;
        animation: zoomInOut 1s infinite alternate;

        height: 60px;
    } */
    #col-md-4{
        /* margin-top: 100px; */
    }
    .card{
        /* height: 390px;    */
    }
    .card-header{
        color: white;
        background-color: black;
    }
    .card-text{
        background-color: rgb(203, 203, 203);
        padding: 10px;
        height: 445px;
    }

    @keyframes zoomInOut {
        0% {
            transform: scale(0.9);
        }
        50% {
            transform: scale(1.1);
        }
        100% {
            transform: scale(0.6);
        }
    }
    #donorbtn {
    animation: zoomInOut 1s infinite alternate;
    animation-play-state: running; /* Initially set to running */

    }

    /* Pause the animation on hover */
    #donorbtn:hover{
        animation-play-state: paused;
        background-color: black;
        color: white;
    }
    #donorbtn {
        display: inline-block;
        /* padding: 15px 5px; */
        margin-top: 70px;
        margin-left: 90px;
        font-size: 18px;
        font-weight: bold;
        width: 230px;
        color: black;
        background-color: #0dd34f;
        text-transform: uppercase;
        background-color: #4CAF50;
        border: none;
        border-radius: 30px;
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
        cursor: pointer;
        transition: all 0.3s eae;
        animation: zoomInOut 1s infinite alternate;
        animation-play-state: running; /* Initially set to running */


    }

    #donorbtn:hover {
        background-color: #45a049;
        box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
        transform: translateY(-3px);
    }

    #donorbtn:active {
        transform: translateY(1px);
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2);
    }
    .paragraph {
    font-family: Arial, sans-serif;
    font-size: 18px;
    line-height: 1.5;
    color: #333;
    background-color: #f9f9f9;
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    @import url('https://fonts.googleapis.com/css2?family=Roboto');

    body {
  font-family: 'Roboto', sans-serif; /* Use the custom font */
  font-size: 18px; /* Adjust font size as needed */
  color: #333; /* Set text color */
  background-color: #f0f0f0; /* Set background color */
}

h1, h2, h3, h4, h5, h6 {
  font-weight: bold; /* Make headings bold */
  margin-bottom: 10px; /* Add spacing between headings and other elements */
}

p {
  line-height: 1.6; /* Set line height for paragraphs */
  margin-bottom: 20px; /* Add spacing between paragraphs */
}

a {
  color: #007bff; /* Set link color */
  text-decoration: none; /* Remove underline from links */
}

a:hover {
  text-decoration: underline; /* Add underline on hover */
}



    

    </style>

</head>

<body>
    <!-- Bootstrap core javaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    
<!-- Navigation -->
<?php include('includes/header.php');?>
<?php include('includes/slider.php');?>
   
    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Welcome to BloodBank & Donor Management System</h1>

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">The need for blood</h4>
                   
                        <p class="card-text" style="padding-left:2%">Every two seconds someone in India needs blood. It is essential for surgeries, Covid-19, cancer treatment, chronic illnesses, and traumatic injuries. Whether a patient receives whole blood, red cells, platelets or plasma, this lifesaving care starts with one person making a generous donation. The need for blood is constant and critical in healthcare systems worldwide. Every day, countless individuals require blood transfusions for various medical reasons, including surgery, trauma, cancer treatment, childbirth complications, and chronic conditions. </p>
               </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Blood Tips</h4>
                   
                        <p class="card-text" style="padding-left:2%">To optimize your blood donation experience, it's crucial to prioritize your health and well-being both before and after your donation. Start by staying well-hydrated and consuming a nutritious meal rich in iron and protein before your appointment. Ensure you're well-rested to minimize the risk of feeling faint or dizzy during your donation. When you arrive, bring a valid form of identification and be prepared to answer screening questions honestly to maintain the safety of the blood supply. </p>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <h4 class="card-header">Who you could Help</h4>
                   
                        <p class="card-text" style="padding-left:2%">As a blood donor, your altruistic act has the potential to save lives and positively impact the health and well-being of individuals in need. Your donation could support patients undergoing medical treatments, trauma victims, those with chronic illnesses, surgical patients, women experiencing childbirth complications, individuals with blood disorders, and those affected by emergency situations.</p>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
       

        <!-- Features Section -->
        <div class="row paragraph">
            <div class="col-lg-6">
                <h2><bold>BLOOD GROUPS</bold></h2>
          <p>  Blood group of any human being will mainly fall in any one of the following groups.</p>
                <ul>
                
                
<li>A positive or A negative</li>
<li>B positive or B negative</li>
<li>O positive or O negative</li>
<li>AB positive or AB negative.</li>
                </ul>
                <p>A healthy diet helps ensure a successful blood donation, and also makes you feel better! Check out the following recommended foods to eat prior to your donation.</p>
            </div>
            <div class="col-lg-6" id="imghero">
                <img class="img-fluid rounded" src="images/blood-donor (1).jpg" alt="" width="600">
            </div>
        </div>
        <!-- /.row -->

        <br>

        <!-- Call to Action Section -->
        <div class="row mb-4">
            <div class="col-md-8">
            <h4><bold>UNIVERSAL DONORS AND RECIPIENTS</bold></h4>

                <p class="paragraph">

The most common blood type is O, followed by type A.

Type O individuals are often called "universal donors" since their blood can be transfused into persons with any blood type. Those with type AB blood are called "universal recipients" because they can receive blood of any type.</p>
            </div>
            <div class="col-md-4">
                <a class="btn btn-lg  btn-block" id="donorbtn" href="donorreg.php" style="background-color: #0dd34f;" data-bs-toggle="tooltip" data-bs-placement="bottom" title="click">Become a Donar</a>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <!-- Footer -->
  <?php include('includes/footer.php');?>
</body>

</html>
