<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets-ratings/css/style.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
        <title>Ratings</title>
    </head>
    <body>
        <?php
           include "db/connection.php"; 

           $wich_person = (int)$_GET["personID"]; 
           $conn = create_connection();


           $getSql = "select * from Person where person_id = $wich_person;";
           $data_labels = mysqli_query($conn, $getSql)->fetch_all(MYSQLI_ASSOC);

           $sqlMax = "SELECT * FROM Person WHERE person_id = (SELECT MAX(person_id) FROM Person);";
           $maxvalue = mysqli_query($conn, $sqlMax)->fetch_row()[0];

        ?>

        <div class="pagesize">
            <h1>Check ratings</h1>
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
                    <?php echo $labels["slytherin"] ?>
                    <br>
                    <br>
                    <?php echo $labels["gryffindor"] ?>
                    <br>
                    <br>
                    <?php echo $labels["ravenclaw"] ?>
                    <br>
                    <br>
                    <?php echo $labels["hufflepuff"] ?>
                    
                </li>
            <?php
            }
            ?>
            <br>
            <form method="GET" action="wichperson_ratings.php">
                <input type="hidden" name="personID" value="<?php echo $wich_person; ?>" />
                <input type="hidden" name="maxvalue" value="<?php echo $maxvalue; ?>" />
                <input type="submit" class="next_person" value="Next Person" name="next_person_name">
                <br>      
            </form>
        
            <p class="text_firstname">Firstname: </p>
            <p class="text_name">Name: </p>        
            <p class="text_slytherin">Slyhterin: </p>   
            <p class="text_gryffindor">Gryffindor: </p>   
            <p class="text_ravenclaw">Ravenclaw: </p>   
            <p class="text_hufflepuff">Hufflepuff: </p>   
        </div>
    </body>
</html>