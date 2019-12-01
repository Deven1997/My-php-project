<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Add information</title>
</head>

<body style="background-color: #F9EFA8;">

    <!-- this page only access on admin login otherwise sent it to homepage -->
    <?php
    session_start();
    if (!isset($_SESSION['email']) || $_SESSION['email'] != "d.bodkhe21@gmail.com") {
        header("Location:Homepage.php");
    } else {
        ?>


        <?php
            include "menu.php"
            ?>

        <br>

        <div class="container bg-white">
            <div id="output"></div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="bg-secondary text-white " style="text-align: center ">Create post to publish</th>
                    </tr>
                </thead>
                <tbody>
                    <form id="login" method="post" action="Homepage.php">
                        <tr>
                            <td>
                                <div class="form-group">
                                    <label> Add title of the post</label>
                                    <input class="form-control" placeholder="Title" type="text" name="titlename" required>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="table table-bordered table-striped">
                                    <col width="180">
                                    <col width="700">
                                    <tbody>
                                        <tr>
                                            <th> <img id="previewimg" src="#" alt="your image" width="200px" height="200px">
                                                <input type="file" name="image" id="image" onchange="readURL(this)">
                                                <script type="text/javascript">
                                                    function readURL(input) {
                                                        if (input.files && input.files[0]) {
                                                            var reader = new FileReader();

                                                            reader.onload = function(e) {
                                                                $('#previewimg').attr('src', e.target.result);
                                                            }

                                                            reader.readAsDataURL(input.files[0]);
                                                        }
                                                    }
                                                </script>
                                            </th>
                                            <th> <textarea class="form-control input-lg" placeholder="Description..." type="text" name="description" cols="40" rows="8" required></textarea> </th>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>

                        <tr>
                            <td align="right">
                                <button class="btn btn-primary pull-left">Submit</button>
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>

        </div>

        <?php

            include "database/connection.php";

            ?>
    <?php }
    ?>
</body>

</html>