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

<div class="container">
  <div id="output"></div>
<table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Login</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <form id="login">
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
      </tbody>
    </table>

    </div>

</body>
</html>