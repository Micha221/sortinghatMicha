<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets-index/css/style.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Festive&display=swap" rel="stylesheet">
        <title>Sorting Hat Page</title>
    </head>
    <body>
        <div class="pagesize">
            <h1>Hogwarts Sorting Hat</h1>
            <img src="assets-index/images/SortingHatMainImage.jpeg" alt="TheSortingHat" class="img-SortingHatMain">
            <br>
            <br>

            <?php
                
            ?>
            <div class ="links">
                <nav>
                    <a href="addperson.php" class="link-person">
                        Add a person
                    </a> 
                    <br>
                    <br>
                    <a href="index_house_buffer.php" class="link-house"> <!-- Stuur naar house buffer voor person_id  + 1 te doen-->
                        Put people in a house
                    </a> 
                    <br>
                    <br>
                    <a href="index_rating_buffer.php" class="link-ratings"> <!-- Stuur naar ratings buffer voor person_id  + 1 te doen-->
                        Check ratings
                    </a> 
                </nav>
            </div>
        </div>
        <script src="assets-index/js/indexscript.js"></script>
    </body>
</html>