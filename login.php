<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
</head>

<body>

  <?php
  include "menu.php"
  ?>

  <br>
  <br>
  <br>

  <div class="container">
    <div id="output"></div>
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th class="bg-primary text-white " style="text-align: center ">Login</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <form id="login" method="post" action="login.php">
              <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password">
              </div>
              <button class="btn btn-primary pull-left">Login</button>
            </form>
          </td>
        </tr>

        <tr>
          <td align="right">
            <p class="text-success">Not have an account?
              <button class="btn btn-primary pull-left">Register</button></p>
          </td>
        </tr>
      </tbody>
    </table>

  </div>

  <?php

  include "database/connection.php";

  $useremail = "";
  $userpass = "";
  if (isset($_POST['email'])) {
    $useremail = $_POST['email'];
  }
  if (isset($_POST['password'])) {
    $userpass = $_POST['password'];
  }


  $sql = "SELECT * FROM admin_login where email = '$useremail'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($useremail == $row["email"] && $userpass == $row["password"]) {
      session_destroy();
      session_start();  //user login session start
      $_SESSION['email'] = $useremail; // to identify user on another page
      header("Location:Homepage.php");
    } else {
      echo "<script> alert('Invalid Credentials, please try again')</script>";
    }
  } else {
    echo "0 results";
  }
  ?>
</body>

</html>