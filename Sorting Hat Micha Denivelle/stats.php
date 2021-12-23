<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=µ, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        var_dump($_GET);
        $personID = (int)$_GET["personID"];
        $nextPersonId = $personID + 1;
    ?>
</body>
</html>