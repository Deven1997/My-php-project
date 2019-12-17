<!DOCTYPE html>
<html>

<head>
    <title>वधू-वराची माहिती </title>
    <style>
        h1 {
            text-shadow: 5px 5px 5px Tomato;
        }

        p.solid {
            border-style: solid;
        }

        h3 {
            text-shadow: 5px 5px 5px ForestGreen;
        }
    </style>
    <script>
        function myFunction() {
            window.print();
        }
    </script>

    <script>
        function myFunction() {
            window.print();
        }
    </script>
    <script>
        function myFunctionDate() {
            var x = document.getElementById("myDate").value;
            document.getElementById("demo").innerHTML = x;
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <style>
        h2 {
            border-bottom: 5px solid red;
            background-color: lightgrey;
        }

        h5 {
            background-color: lightgrey;
        }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>

<body bgcolor="moccasin">

    <div class="w3-panel w3-border">
        <?php

        //include "database/connection.php";
        include "menu.php";

        //   $useremail = "";
        //   $userpass = "";
        //   if (isset($_POST['email'])) {
        //     $useremail = $_POST['email'];
        //   }
        //   if (isset($_POST['password'])) {
        //     $userpass = $_POST['password'];
        //   }


        //   $sql = "SELECT * FROM admin_login where email = '$useremail'";
        //   $result = $conn->query($sql);

        //   if ($result->num_rows > 0) {
        //     $row = $result->fetch_assoc();
        //     if ($useremail == $row["email"] && $userpass == $row["password"]) {
        //       session_destroy();
        //       session_start();  //user login session start
        //       $_SESSION['email'] = $useremail; // to identify user on another page
        //       header("Location:Homepage.php");
        //     } else {
        //       echo "<script> alert('Invalid Credentials, please try again')</script>";
        //     }
        //   } else {
        //     echo "0 results";
        //   }
        ?>

        <div class="container" style="margin-top: 60px">
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
                <h2><b><u>परिचय पुस्तिकेसाठी वधू-वराची माहिती </u></b></h2>
            </center><br><br></center>
            <form action="matrimony.php" method="post">
                १. वधू / वराचे नावं :<input type="text" name=" naav" required> कुळ :<input type="text" name=" "> <br><br>
                २. जन्म दिनांक : <input type="date" id="myDate" value="2019-02-12" required> जन्म वेळ :<input type="text" name=" "> स्थळ :<input type="text" name=" "> वर्ण :<input type="text" name=" "> <br><br>उंची : फूट :<input type="text" name=" "> इंच :<input type="text" name=" "><br><br>
                ३. शिक्षण : <input type="text" name=" "> <br><br>
                ४. रक्तगट: <input type="text" name=" "> &nbsp&nbsp&nbsp <b>मंगल :</b> <input type="Radio" name="आहे" checked>आहे <input type="Radio" name="नाही" checked> नाही &nbsp&nbsp&nbsp<b>चष्मा :</b> <input type="Radio" name="आहे" checked>आहे<input type="Radio" name="नाही" checked> नाही <br><br>
                ५. वधू / वर नोकरी /व्यायसाय : <input type="text" name=" "> उत्पन्न रु :<input type="text" name=" "><br><br>
                ६. नोकरी / व्यायसाय पत्ता : <textarea name=" "></textarea><br><br>
                ७. वधू / वराबाबत अपेक्षा :<input type="text" name=" "><br><br>
                ८. स्वतः बद्दल अधिक माहिती (काही व्यंग असल्यास ):<input type="text" name=" "><br><br>
                ९. विधवा / विधुर / घटस्फोट :<input type="text" name=" "><br><br>
                १०. पालकांचे संपूर्ण नाव :<input type="text" name=" "><br><br>
                ११. पालकांचा संपूर्ण पत्ता :<textarea name=""></textarea><br><br>
                १२. पालकांची नोकरी/व्यायसाय पत्ता : <textarea name=" "></textarea> मोबाईल नंबर :<input type="text" name=" "><br><br>
                १३. मामाचे नाव: <input type="text" name="mamache naav" required> कुळ :<input type="text" name=" "> गाव :<input type="text" name=" "><br><br>
                १४. मेळाव्यातील संपर्कासाठी मोबाइल नंबर / ई -मेल :<input type="text" name=" number" required><br><br>
                १५. फोटो अपलोड : फोटो सिलेक्ट करा :<table class="table table-bordered table-striped">
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
                <input type="checkbox" name=" ">वरील सर्व माहिती सत्य असून त्यामध्ये बदल आढळल्यास त्याची संपूर्ण जबाबदारी माझी राहील . <br><br>


                दिनांक : <input type="date" id="myDate" value="2019-02-12">
                <center>
                    <button type="submit" class="btn btn-outline-success">सबमिट
                        <button type="button" class="btn btn-outline-primary" onclick="myFunction()"> Print</center>
                </p>
        </div>
    </div>
    </form>
</body>

</html>