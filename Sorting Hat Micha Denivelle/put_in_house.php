<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets-putinhouse/css/style.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
        <title>Put people in a house</title>
    </head>
    <body>
        <?php
           include "db/connection.php"; 

           $wich_person = (int)$_GET["personID"]; //welk persoon
           $conn = create_connection();

           $getSql = "select * from Person where person_id = $wich_person;";
           $data_labels = mysqli_query($conn, $getSql)->fetch_all(MYSQLI_ASSOC);

           $sqlMax = "SELECT * FROM Person WHERE person_id = (SELECT MAX(person_id) FROM Person);";
           $maxvalue = mysqli_query($conn, $sqlMax)->fetch_row()[0];

        ?>

        <div class="pagesize">
            <h1>Put people in a house</h1>
            <img src="assets-putinhouse/images/create_account.png" alt="profilepic" class="image_person">
            <br>
            <br>
            <br>
            <br>
            <?php
                foreach($data_labels as $labels)
            {
            ?>
                <li class="labels" data-id="<?php echo $labels['person_id'];?>">
                    <?php echo $labels["firstname"] ?>
                    <br>
                    <br>
                    <?php echo $labels["secondname"] ?>
                    <br>
                    <br>
                    <?php echo $labels["gender"] ?>
                    <br>
                    <br>
                    <?php echo $labels["descriptie"] ?>
                </li>
            <?php
            }
            ?>
            <br>
            <form method="GET" action="wich_person.php">
                <input type="hidden" name="personID" value="<?php echo $wich_person; ?>" />
                <input type="hidden" name="maxvalue" value="<?php echo $maxvalue; ?>" />
                <input type="submit" class="slytherin_button" value="<?php echo "slytherin";?>" name="slytherin_button_name">
                <br>
                <input type="submit" class="gryffindor_button" value="<?php echo "gryffindor";?>"  name="slytherin_button_name">
                <br>
                <input type="submit" class="hufflepuff_button" value="<?php echo "hufflepuff";?>"  name="slytherin_button_name">
                <br>
                <input type="submit" class="ravenclaw_button" value="<?php echo "ravenclaw";?>"  name="slytherin_button_name">
                <br>         
            </form>
        
            <p class="text_firstname">Firstname: </p>
            <p class="text_name">Name: </p>        
            <p class="text_gender">Gender: </p>   
            <p class="text_info">Info: </p>   
        </div>
        <script src="assets-putinhouse/js/script.js"></script>
    </body>
</html>