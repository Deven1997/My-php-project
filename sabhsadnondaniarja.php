<?php
include "menu.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title> सभासद नोंदणी अर्ज </title>
    <style>
        h1 {
            text-shadow: 5px 5px 5px Tomato;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body bgcolor="moccasin">
    <p>

        <script>
            function myFunction() {
                window.print();
            }
        </script>
        <!-- <script>
            th, td {
                border: 5 px solid black;
                border - collapse: collapse;
                padding: 15 px;
            }
        </script> -->



        <div class="container" style="margin-top: 60px">
            <div id="output"></div>
            <form action="/action_page.php" method="post">
                <table class="table table-bordered table-striped">
                    <col width="180">
                    <col width="1100">
                    <tbody>
                        <tr>
                            <th><img src="images/banner3.jpg" width="104" height="142"></th>
                            <th>
                                <h1>
                                    <center>बृहन्मुंबई तिळवण तेली समाज, मुंबई</center>
                                </h1>
                                <h5>
                                    <center> ( नोंदणी क्रमांक.अ २१४१ मुंबई)
                                        <br>श्री स्वयंभू रामेश्वर संक्रमण शिबिर,रूम क्रमांक २,कल्याणदस वाडी , जयहिंद सिनेमा समोर ,
                                        <br> डॉ . आंबेडकर रॊड , चिंचपोकळी (पूर्व ),मुंबई - ४०००१२<br></center>
                                    <hr size="10" color="black">
                                    </hr>
                            </th>
                    </tbody>
                </table>

                <center>
                    <h2><b><u> सभासद नोंदणी अर्ज </u></b></h2>
                </center>
                <p>मा .अध्यक्ष</p>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th> दिनांक :<input class="form-control" type="date" id="myDate" value="2019-02-12"></th>
                            <th>सभासद क्र: <input class="form-control" type="text" name=" " required></th>
                        </tr>
                    </thead>
                </table>


                <p>महोदय,</p>
                <p>मी आपल्या तेली समाजातील ज्ञाती बांधव / भगिनी असून मी माझ्या स्वतः च्या इच्छेने आपल्या तेली समाजाचा /ची सभासद होऊ इच्छिते /तो माझी माहिती खालीलप्रमाणे :-</p>
                <br><br>
                <table class="table table-borderless">
                    <thead>
                        <tr>
                            <th> संपूर्ण नाव:<input class="form-control" type="text" name="name" required></th>
                            <th>भ्रमणध्वनी :<input class="form-control" type="text" name="contact" required></th>
                        </tr>
                        <tr>
                            <th><label>कायमचा पत्ता : </label><textarea class="form-control" name="address" required></textarea></th>
                        </tr>
                        <tr>
                            <th><label>व्यायसाय /नोकरी :</label><input class="form-control" type="text" name="nokari" required></th>
                        </tr>
                        <tr>
                            <th><label> ई-मेल :</label><input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required></th>
                        </tr>
                        <tr>
                            <th><label>सेट पासवर्ड :</label> <input class="form-control" type="password" name="password" required></th>
                            <th><label>पासवर्ड पुष्टी :</label> <input class="form-control" type="password" name="confirm_password" required></th>
                        </tr>
                    </thead>
                </table>
                <table>


                    <table class="table table-striped" border="1" align="center">

                        <tr>
                            <th>क्र .</th>
                            <th>परिवराबद्दल माहिती</th>
                            <th>सभासद क्र.</thalign="center">
                            <th>वय</thalign="center">
                            <th>नाते </thalign="center">
                            <th>शिक्षण </thalign="center">
                            <th>नोकरी /व्यायसाय</thalign="center">
                        </tr>
                        <tr>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                        </tr>
                        <tr>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                        </tr>
                        <tr>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                        </tr>

                        <tr>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                        </tr>
                        <tr>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                            <td> <input type="text" name=" "> </td>
                        </tr>
                    </table>
                    <br><br>
                    <input type="checkbox" name="accept" required> वरील सर्व माहिती सत्य असून त्यामध्ये बदल आढळल्यास त्याची संपूर्ण जबाबदारी माझी राहील . <br><br>
                    स्वाभिमानाने मला आपल्या बृहन्मुंबई तिळवण तेली समाजाचा / ची क्रियाशील सभासद व्हायची इच्छा असून , मी समाज सेवेला यथाशक्ति सर्व प्रकारे सहकार्य करणे .समाजाच्या हिताला बाधक ठरेल असे कोणतेही काम करणार नाही .समाजाच्या घटनेचे नियमांचे मी पालन कारेन आणि ते माझ्यावर बंधनकारक राहतील . <br><br>

                    <tr>
                        <th><label>शिफारस करणाऱ्या सभासदाचे नाव:-</label> <input class="form-control" type="text" name="sabhasad naav" required>
                            <br> <label>अर्जदाराची सही : </label>
                            <label>फोटो सिलेक्ट करा :</label>
                            <table class="table table-bordered table-striped">
                                <col width="180">
                                <tbody>
                                    <tr>
                                        <th> <img id="previewimg" src="#" alt="your image" width="200px" height="200px" align="right">
                                            <input type="file" name="imageUpload" id="image" onchange="readURL(this)">
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
                                    </tr>
                                </tbody>
                            </table>
                    <tr>
                        <th><label>शिफारस करणाऱ्या सभासद क्रमांक :- </label><input class="form-control" type="text" name="sabhasad number" required></th> <br>
                    </tr>
                </table>

                <center>

                    <button type="submit" class="btn btn-outline-success" href="login.php">सबमिट </a></button>
                    <button type="button" class="btn btn-outline-primary" onclick="myFunction()"> Print</center>
                <!-- <?php include "database/connection.php";
                        ?> -->


        </div>
        </div>
        </form>
        </div>

</body>

</html>