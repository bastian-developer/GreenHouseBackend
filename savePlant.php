<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        require_once("db.php");

        $userId = $_POST['userId'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $origin = $_POST['origin'];
        $photos = $_POST['photos'];

        $waterSpent = $_POST['waterSpent'];
        $temperature = $_POST['temperature'];
        $humidity = $_POST['humidity'];
        $water = $_POST['water'];
        $light = $_POST['light'];

        $query = "INSERT INTO plant (userId, name, type, origin, photos, waterSpent, temperature, humidity, water, light) VALUES ('$userId','$name', '$type', '$origin', '$photos', '$waterSpent', '$temperature', '$humidity', '$water', '$light')";
        $result = $mysql -> query($query);

        if($result === TRUE) {
            echo "Plant Created Successfully";
        }else{
            echo "Error";
        }
    }

?>