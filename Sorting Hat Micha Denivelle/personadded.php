<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets-personadded/css/personaddedstyle.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
        <title>Account created!</title>
    </head>
    <body>
        <?php
           include "db/connection.php"; 
           $conn = create_connection();

           $firstname = $_GET["firstname"];
           $name = $_GET["name"];
           $gender = $_GET["gender"];
           $descriptie = $_GET["descriptie"];

            $sqlInsert = "INSERT INTO Person (firstname,secondname,gender,descriptie) VALUES('$firstname','$name','$gender','$descriptie');";
            mysqli_query($conn, $sqlInsert);

            //header("Location: http://localhost/personadded.php");
       ?>


        <div class="pagesize">
            <h1>Account created!</h1>
            <img src="assets-personadded/images/account_created.jpg" alt="ronthumbsup" class="image_account_created">
            <br>
            <br>
            <input type="submit" class="put_in_house" value="Home">
        </div>
        <script src="assets-personadded/js/personaddedscript.js"></script>
    </body>
</html>