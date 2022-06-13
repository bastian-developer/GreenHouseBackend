<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        require_once("db.php");


        $temperature = $_POST['temperature'];
        $humidity = $_POST['humidity'];

        $query = "INSERT INTO dht22 (temperature, humidity) VALUES ('$temperature','$humidity')";
        $result = $mysql -> query($query);

        if($result === TRUE) {
            echo "Stats Saved";
        }else{
            echo "Error";
        }
    }
