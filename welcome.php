<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Blood Bank & Donor Management System</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .heart-drop-icon {
      color: #e74c3c; /* Adjust the color to match your design */
      font-size: 4rem; /* Adjust size as needed */
    }
    .bg-theme {
      background-color: #343a40; /* Dark theme background color */
      color: white; /* Text color */
    }
    #text {
        margin-top: 160px;
    }
    #bloodicon {
      width: 500px; /* Adjust the width as per your requirement */
      height: auto; /* This will maintain the aspect ratio */
      margin-left: 0px;
      margin-top: 30px;
      animation-name: zoomInOut;
      animation: zoomInOut 3s infinite alternate;

    }
    marquee {
        width: 450px;
        margin-left: 40px;
    }
    /* #col1, #col2, footer {
      animation-duration: 2s;
    } */
    #col1 {
      /* margin-top: 20px; */
      animation-name: slideInLeft;
      animation: slideInLeft 4s;
      
    }
    
    #col2 {
      animation: slideInRight 4s;
    }
    footer {
      animation: slideInUp 6s;
    }
    @keyframes zoomInOut {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
        100% {
            transform: scale(1);
        }
    }
    
    @keyframes slideInLeft {
      0% {
        transform: translateX(-100%);
      }
      100% {
        transform: translateX(-0%);
      }
/* 
      4% {
        transform: translateX(0);
      }
      7% {
        transform: translateX(-8%);
      }
      9% {
        transform: translateX(0);
      }

      10% {
        transform: translateX(-10%);
      }
      20% {
        transform: translateX(-0%);
      }
      30% {
        transform: translateX(-8%);
      }
      40% {
        transform: translateX(-0%);
      }
      50% {
        transform: translateX(-6%);
      }
      60% {
        transform: translateX(-0%);
      }
      70% {
        transform: translateX(-4%);
      }
      80% {
        transform: translateX(-0%);
      }
      90% {
        transform: translateX(-2%);
      } */
      /* 100% {
        transform: translateX(-0%);
      } */
      
    }
    @keyframes slideInRight {
      0% {
        transform: translateX(100%);
      }
      100% {
        transform: translateX(0);
      }
    }
    @keyframes slideInUp {
      0% {
        transform: translateY(100%);
      }
      100% {
        transform: translateY(0);
      }
    }
    #text > h5{
        margin-left: 50px;
    }
  </style>
</head>

<script>
        document.addEventListener("DOMContentLoaded", function() {
            document.body.addEventListener("click", function() {
                // Redirect to the desired URL
                window.location.href = "register.php"; // Replace "https://example.com" with your desired URL
            });
        });
    </script>

<body class="bg-theme" type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Tap to Join">
  <div class="container">
    <div class="row">
      <div class="col" id="col1">
        <img src="./blood-donation.png" alt="Icon Description" id="bloodicon">
      </div>
      <div class="col" id="col2">
        <div id="text">
          <h2>BloodBank & Donor Management System</h2><br><br>
          <h1><marquee>Join Us in Saving Lives</marquee></h1>
          <h5>Every drop counts. Become a donor today.</h5>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center py-3">
    
    <p>© 2024 made by balachandar</p>
  </footer>

  <!-- Bootstrap and FontAwesome scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>
</body>
</html>
