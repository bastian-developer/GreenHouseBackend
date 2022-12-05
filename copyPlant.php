<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        require_once("db.php");

        $userId = $_POST['userId'];
        $id = $_POST['id'];
    
        $resetWater = 0;


        $query = "SELECT * FROM plant WHERE id = '$id'";
        
        $result = $mysql->query($query);

        if ($mysql->affected_rows > 0) {
            while($row = $result -> fetch_assoc()){
                $array = $row;

                $name = $row['name'];
                $type = $row['type'];
                $origin = $row['origin'];
                $photos = $row['photos'];

                $waterSpent = $row['waterSpent'];
                $temperature = $row['temperature'];
                $humidity = $row['humidity'];
                $water = $row['water'];
                $light = $row['light'];

            }

        }else{
            echo "Found Nothing";
        }


        $query2 = "INSERT INTO plant (userId, name, type, origin, photos, waterSpent, temperature, humidity, water, light) VALUES ('$userId','$name', '$type', '$origin', '$photos', '$resetWater', '$temperature', '$humidity', '$water', '$light')";
        $result2 = $mysql -> query($query2);

        if($result2 === TRUE) {
            echo "Plant Cloned Successfully";
        }else{
            echo "Error";
        }


        $result->close();
        $mysql->close();

    }
?>