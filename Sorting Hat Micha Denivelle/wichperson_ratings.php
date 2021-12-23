<?php
    include "db/connection.php"; 
    $conn = create_connection();

    $personID = (int)$_GET["personID"];
    $nextPersonId = $personID + 1;

    $maxvalue = $_GET["maxvalue"];

    if($personID >= $maxvalue)
    {
        header('location: http://vitrauxart.be/all_checked.php'); //Link aanpassen!
    }
    else
    {
        header('location: http://vitrauxart.be/ratings.php?personID=' . $nextPersonId ); //Link aanpassen!
    }
?>