<!DOCTYPE html>
<html lang="en">

<head>
  <title>Teli Samaj</title>
  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->
  <link rel="stylesheet" type="text/css" href="css/homecustom.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  <style>
    #myBtn {
      display: none;
      position: fixed;
      bottom: 20px;
      right: 30px;
      z-index: 99;
      font-size: 18px;
      border: none;
      outline: none;
      background-color: lightseagreen;
      color: white;
      cursor: pointer;
      padding: 15px;
      border-radius: 4px;
    }

    #myBtn:hover {
      background-color: #555;
    }

    desc_para {
      display: block;
      margin-top: 1em;
      margin-bottom: 1em;
      margin-left: 0;
      margin-right: 0;
    }

    .glyphicon-plus:before {
      content: "\002b"
    }
  </style>

</head>

<body>
  <header>
    <?php
    include "menu.php"  // menu added to the page
    ?>
  </header>

  <button onclick="topFunction()" id="myBtn" title="Go to top">top</button>

  <script>
    //Get the button
    var mybutton = document.getElementById("myBtn");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }


    function onclickpage() {
      header("Location:matrimony.php");
    }
  </script>

  <?php
  include "database/connection.php";

  $sql = "SELECT * FROM events ORDER BY id DESC";
  $result = $conn->query($sql);

  ?>

  <div class="main" style="margin-top: 40px">
    <aside class="left position-fixed">
      <div class=" bg-light px-sm-3 p-2 d-inline-block mr-5">
        <div class="border-success">
          <img align="right" id="menuicon" src="images/banner3.jpg" alt="your image" width="170px" height="190px" style="border-radius: 60%"></img>
        </div>
      </div>


      <div class="btn-group">
        <button class="btn btn-outline-success dropdown-toggle w-100 m-sm-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          वधू वर सोहळा
        </button>
        <button type="button" class="btn btn-outline-success">
          <span class="glyphicon-plus-sign"></span>
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">2017</a>
          <a class="dropdown-item" href="#">2018</a>
          <a class="dropdown-item" href="#">2019</a>
        </div>
      </div><br>
      <hr>
      <div class="btn-group">
        <button class="btn btn-outline-success dropdown-toggle w-100 m-sm-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          विद्यार्थी गुणगौरव समारंभ
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">2017</a>
          <a class="dropdown-item" href="#">2018</a>
          <a class="dropdown-item" href="#">2019</a>
        </div>
      </div><br>
      <hr>
      <div class="btn-group">
        <button class="btn btn-outline-success dropdown-toggle w-100 m-sm-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          सहल
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">2017</a>
          <a class="dropdown-item" href="#">2018</a>
          <a class="dropdown-item" href="#">2019</a>
        </div>
      </div>

    </aside>
    <section>
      <?php
      if ($result->num_rows > 0) {

        // output data of each row
        while ($row = $result->fetch_assoc()) {

          if ($row["imageurl"] != "") {

            ?>
            <div>
              <h6> &nbsp Date: <?php echo $row["date"] ?> </h6>
              <table class="table border-dark m-2 ml-2" style="background: #ffebcc" width="600">
                <thead>
                  <th class="text-primary" colspan="2" style="text-align: center"><?php echo $row["title"] ?></th>
                </thead>
                <tbody>
                  <tr>
                    <td><img id="previewimg" src="<?php echo $row["imageurl"] ?>" alt="your image" width="200px" height="200px"></img></td>
                    <td>
                      <?php echo $row["description"] ?>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
          <?php
              } else { ?>

            <div>
              <h6>&nbsp Date: <?php echo $row["date"] ?> </h6>
              <table class="table border-dark m-2 ml-2" style="background: #ffebcc" width="600">
                <thead>
                  <th class="text-primary" colspan="2" style="text-align: center"><?php echo $row["title"] ?></th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <?php echo $row["description"] ?>
                    </td>
                  </tr>
                </tbody>
              </table>

            </div>
      <?php
          }
        }
      } else {
        echo "No update available";
      }
      ?>
    </section>

    <aside class="right">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-danger text-md-center">सभासद नोंदणी अर्ज </h5>
          <hr>
          <h6>Description about सभासद नोंदणी अर्ज</h6>
          <!-- <button type="button" class="btn btn-link" onclick="function1()">नोंदणी करा</button> -->
          <a class="btn btn-link" href="sabhsadnondaniarja.php">नोंदणी करा</a>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-danger text-md-center">गुणगौरव अर्ज</h5>
          <hr>
          <h6>Description about गुणगौरव अर्ज </h6>
          <!-- <button type="button" class="btn btn-link" onclick="function1()">नोंदणी करा</button> -->
          <a class="btn btn-link" href="gunagaurav.php">नोंदणी करा</a>
        </div>
      </div>
      <br>
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-danger text-md-center">Dheya</h5>
          <hr>
          <h6>Description about Dheya </h6>
        </div>
      </div>
    </aside>

  </div>

</body>

</html>