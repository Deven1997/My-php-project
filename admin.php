<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Domine&display=swap" rel="stylesheet">

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

        <div class="container bg-white" style="margin-top: 50px">
            <div id="output"></div>
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th class="bg-secondary text-white " style="text-align: center ">Create a post to publish</th>
                    </tr>
                </thead>
                <tbody>
                    <form id="admin" method="post" action="upload2.php" enctype="multipart/form-data">
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
                                                <input type="file" name="fileToUpload" id="fileToUpload" onchange="readURL(this)">

                                                <!-- below javascript code is to preview the image before uploding  -->
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
                                <input class="btn bg-success" type="submit" value="Publish" name="Upload Now">

                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>

        </div>

        <?php
            include "database/connection.php";
            ?>

    <?php } ?>

</body>

</html>