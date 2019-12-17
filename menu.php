<?php
// if you want to update menu bar(nav bar) then edit this file
if (session_status() == PHP_SESSION_NONE) {
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>menu</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Domine&display=swap" rel="stylesheet">

  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: 'Domine', serif;
    }

    .cd-popup {
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s 0s, visibility 0s 0.3s;
    }

    .cd-popup.is-visible {
      opacity: 1;
      visibility: visible;
      transition: opacity 0.3s 0s, visibility 0s 0s;
    }

    .cd-popup-container {
      transform: translateY(-40px);
      transition-property: transform;
      transition-duration: 0.3s;
    }

    .is-visible .cd-popup-container {
      transform: translateY(0);
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-success fixed-top " style="background:#ffd017">
    <img id="menuicon" src="images/banner3.jpg" alt="your image" width="40px" height="40px"></img>
    <a class="navbar-brand" href="Homepage.php" style="margin-left: 5px"> बृहन्मुंबई तिळवण तेली समाज, मुंबई</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item active">
          <a class="nav-link" href="matrimony.php">Matrimony <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="aboutus.php">कार्यकारी मंडळ</a>
        </li>

        <li class="nav-item active">
          <!-- <div class="dropdown">
            <a class="nav-link dropdown-toggle" ata-toggle="dropdown" href="#"><span>contact info</span></a> -->

          <div class="dropdown dropleft">
            <button type="button" class="btn text-primary dropdown-toggle" data-toggle="dropdown">
              contact info
            </button>
            <div class="dropdown-menu">
              <h5 class="dropdown-header text-primary">अध्यक्ष</h5>
              <a class="dropdown-item" href="#">रमाकांत काळे -९८६०१४८१००</a>
              <hr>
              <h5 class="dropdown-header text-primary">मुख्य चिटणीस</h5>
              <a class="dropdown-item" href="#">जयवंत काळे - ९९६९५७६०९९</a>
              <a class="dropdown-item" href="#">किसान कर्डीले - ९८६९४५०४३२</a>
            </div>
          </div>
        </li>


        <!-- login logout code start-->
        <?php
        if (isset($_SESSION['email'])) {
          ?>

          </li>
          <div class="dropdown">
            <li class="nav-item active">
              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"><?php echo $_SESSION['email'] ?> <span class="sr-only">(current)</span></a>
              <div class="dropdown-menu">
                <a class="nav-link" href="logout.php"> Logout </a>

              </div>
          </div>
          </li>

        <?php } else { ?>
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        <?php } ?>

        <!-- login logout code end -->

      </ul>

    </div>
  </nav>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>