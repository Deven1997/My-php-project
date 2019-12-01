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
  </style>
</head>

<body>

  <?php
  // if you want to update menu bar(nav bar) then edit this file
  ?>

  <nav class="navbar navbar-expand-lg navbar-success" style="background:#ffd017">
    <a class="navbar-brand" href="Homepage.php">तेली समाज, मुंबई</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

        <li class="nav-item active">
          <a class="nav-link" href="matrimony.php">Matrimony <span class="sr-only">(current)</span></a>
        </li>
        <!-- login logout code start-->
        <?php

        if (session_status() == PHP_SESSION_NONE) {
          session_start();
        }

        if (isset($_SESSION['email'])) {
          ?>
          <li class="nav-item active">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal"> Logout </a>
            <!-- The Modal -->
            <div class="modal fade" id="myModal">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Logout</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    Are you sure to logout ?
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <form id="logout" method="post" action="logout.php">
                      <button class="btn btn-primary pull-left">Logout</button>
                    </form>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="#"><?php echo $_SESSION['email'] ?> <span class="sr-only">(current)</span></a>
          </li>

        <?php } else { ?>
          <li class="nav-item active">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        <?php } ?>

        <!-- login logout code end -->

        <li class="nav-item active">
          <a class="nav-link" href="gunagaurav.php">गुणगौरव अर्ज </a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="#"> contact info</a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="sabhsadnondaniarja.php">सभासद नोंदणी अर्ज </a>
        </li>

      </ul>
    </div>
  </nav>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>