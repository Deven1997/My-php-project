<!DOCTYPE html>
<html>

<head>
    <title>गुणगौरव समारंभ </title>
    <style>
        h1 {
            text-shadow: 5px 5px 5px Tomato;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> -->

    <style>
        h2 {
            border-bottom: 5px solid red;
            background-color: lightgrey;
        }

        h5 {
            background-color: lightgrey;
        }
    </style>
</head>

<body bgcolor="moccasin">
    <div class="w3-panel w3-border">
        <?php
        include "menu.php";
        ?>
        <p>

            <script>
                function myFunction() {
                    window.print();
                }
            </script>


            <div class="container-fluid">
                <div class="container">
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
                        <h2>विद्यार्थी गुणगौरव समारंभ </h2>
                        <h3><u> अर्ज </u></h3>
        </p>
        </center>
        <h4>माननिय अध्यक्ष / सचिव ,यांस <br>
            बृहमुंबई तिळवण तेली समाज ,मुंबई
            <br><br>
            <form action="Homepage.php" method="Post">
                अर्ज स्विकृती दिनांक : <input type="date" id="myDate" value="2019-02-12" required><br><br>
                <h5>आपल्या संस्थेच्या वतीने आयॊजित वार्षिक विध्यार्थी गुण -गौरव समारंभात मी सहभागी होऊ इच्छितो . त्यासाठी मी माझी माहिती खालीलप्रमाणे देत आहे </h5>
                १. विद्यार्थ्यांचे आडनाव:<input type="text" name="aadnav " required> स्वतः चे नाव:<input type="text" name="swata" required> वडिलांचे नाव :<input type="text" name="vadil"><br><br>
                २. उत्तीर्ण झालेली इयत्ता :<input type="text" name="eyatta" required><br><br>
                ३. मिळालेले गुण :<input type="text" name="marks" required><br><br>
                ४. सध्या शिकत असलेली इयत्ता :<input type="text" name="current eyatta " required><br><br>
                ५. शाळा / कॉलेजचे नाव :<input type="text" name="college naav" required><br><br>
                ६. अर्जाचा उद्देश : <input type="radio" name="अभिनंदन" value="अभिनंदन" required> अभिनंदन <input type="radio" name="शिष्यवृत्ती" value="शिष्यवृत्ती"> शिष्यवृत्ती <br><br>
                ७. पालकांचे संपूर्ण नाव :<input type="text" name="parents name" required><br><br>
                ८. राहण्याचा पत्ता :<textarea name="address" width=50 required></textarea><br><br>
                ब्रह्मणध्वनी दूरध्वनी :<input type="text" name="contact no" required><br><br>
                ९. पालक वरील संस्थेचे सभासद :<input type="radio" name="आहेत" value="आहेत"> आहेत <input type="radio" name="नाहीत" value="नाहीत"> नाहीत <br><br>
                १०.गुणपत्रिकेची प्रमाणित प्रत अपलोड :फोटो सिलेक्ट करा :<table class="table table-bordered table-striped">
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
                <h3>
                    <b>*</b> सोबत गुणपत्रिकेची प्रमाणित प्रत जोडणे <br><br>
                    <b>पालक संस्थेचे सभासद असणे गरजेचे आहे . नसेल तर त्यांनी संस्थेचे आजीव सभासद होण्यासाठी रु . २५१/- रु दोनशे एक्कावन्न भरून संस्थेचे सभासद होऊन संस्थेस सहकार्य करावे .</b>
                    <br><br><b>
                        <h4>टीप
                    </b>: बक्षीस स्वीकारण्यासाठी विद्यार्थी / विद्याथीनी यांनी स्वतः हजर राहणे नाते-वाईक किंवा इतर कोणाकडे बक्षीस दिले जाणार नाही याची सर्व समाज बांधवानी नोंद घ्यावी .
                    <br><br><br><b>
                        <h3>
                            <center>
                                * इयत्ता १० वि - किमान ७५% * इयत्ता १२ वि - किमान ६५%<br><br>
                                * पुढील सर्व पदवीका / पदवी अभ्यासक्रमातील उत्तीर्ण विद्यार्ध्यांना टक्केवारीची अट नाही .
                    </b><br><br><br>
                    <button type="submit" class="btn btn-outline-success">सबमिट
                        <button type="button" class="btn btn-outline-primary" onclick="myFunction()"> Print
                            </center>
    </div>
    </div>
</body>

</html>