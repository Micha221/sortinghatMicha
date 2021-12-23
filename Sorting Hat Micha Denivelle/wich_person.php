<?php
    include "db/connection.php"; 
    $conn = create_connection();

    $personID = (int)$_GET["personID"];
    $nextPersonId = $personID + 1;


    $wich_house = $_GET["slytherin_button_name"];

    $maxvalue = $_GET["maxvalue"];

    $sqlUpdate = "UPDATE Person SET $wich_house = $wich_house + 1  WHERE person_id like $personID;"; 
    mysqli_query($conn, $sqlUpdate);

    if($personID >= $maxvalue)
    {
        header('location: http://vitrauxart.be/all_rated.php'); //Link aanpassen!
    }
    else
    {
        header('location: http://vitrauxart.be/put_in_house.php?personID=' . $nextPersonId ); //Link aanpassen!
    }
?>