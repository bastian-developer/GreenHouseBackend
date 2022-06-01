<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        require_once("db.php");

        $name = $_POST['name'];
        $type = $_POST['type'];
        $origin = $_POST['origin'];
        $photos = $_POST['photos'];

        $query = "INSERT INTO plants (name, type, origin, photos) VALUES ('$name', '$type', '$origin', '$photos')";
        $result = $mysql -> query($query);

        if($result === TRUE) {
            echo "Plant Created Successfully";
        }else{
            echo "Error";
        }
    }
