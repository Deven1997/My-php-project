<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Domine&display=swap" rel="stylesheet">
</head>

<body>

  <?php

  // include "menu.php";
  include "php_files/checkCredentials.php";
  ?>

  <br>
  <br>
  <br>

  <div class="container" style="margin-top: 50px">
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
            <form id="login" method="post" action="#">
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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>