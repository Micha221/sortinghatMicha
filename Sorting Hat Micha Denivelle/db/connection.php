<?php
        function create_Connection()
        {
            $hostname = "ID362602_sortinghat.db.webhosting.be";
            $dbUser = "ID362602_sortinghat";
            $dbPassword = "admin123";
            $dbName = "ID362602_sortinghat"; //Servernaam
            $dbPort = 3306; //Poort (op phpmyadmin)

            $conn = mysqli_connect($hostname, $dbUser, $dbPassword, $dbName, $dbPort); //Connectie maken met de database (Mysqli )

            if($conn == false) //Checken of de connectie nog werkt
            {
            echo "Broken Connection";
            die();
            }

            return $conn;
        }

        function getQuery($conn, $query)
        {
            return mysqli_query($conn, $query)->fetch_all(MYSQLI_ASSOC); //Geef alles terug
        }

        function closeConnection($conn)
        {
            $conn->close();
        }
?>