<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets-addperson/css/personstyle.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
        <title>Add a person</title>
    </head>
    <body>
        <?php
           include "db/connection.php"; 
           $conn = create_connection();


           $getSql = "select * from Person;";
           $data_labels = mysqli_query($conn, $getSql)->fetch_all(MYSQLI_ASSOC);



           /*foreach($data_labels as $labels) //Labels afprinten mag nog weg
           {*/
        ?>
            <!--<li class="labels" data-id="<?php echo $labels['person_id'];?>">
                </*?php
                    echo $labels["firstname"] . " - " . $labels["secondname"] . " - " . $labels["gender"] . " - " . $labels["descriptie"] . " - " . $labels["slytherin"] . " - " . $labels["hufflepuff"] . " - ". $labels["ravenclaw"] . " - " . $labels["gryffindor"];
                ?>*/
            </li> -->
        <?php
           //}
           $conn->close();
        ?>

        <div class="pagesize">
            <h1>Create a new account</h1>
            <img src="assets-addperson/images/create_account.png" alt="create_account" class="image_account"/>

            <p class="text_labels_complete">Every field needs to be filled!</p>

            <form action="personadded.php" method="GET">
                <div class="class-labels">


                    <!-- Firstname -->
                    <label for="input-firstname">
                        First Name
                    </label>
                    <br>
                    <input type="text" id="input-firstname" name="firstname">
                    <br>
                    <br>

                    <!-- Name -->
                    <label for="input-name">
                        Name
                    </label>
                    <br>
                    <input type="text" id="input-name" name="name">
                    <br>
                    <br>

                    <!-- Gender -->
                    <label for="input-gender">
                        Gender
                    </label>
                    <br>
                    <input type="text" id="input-gender" name="gender">
                    <br>
                    <br>

                    <!-- Description -->
                    <label for="input-description">
                        Description
                    <br>
                    <input type="text" id="input-description" name="descriptie">
                    <br>
                    <br>
                </div>
                <input type="submit" class="create_account_button" value="Create Account">
            </form>
        </div>
        <script src="assets-addperson/js/script.js"></script>
    </body>
</html>


