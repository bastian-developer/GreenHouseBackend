<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        require_once("db.php");

        $id = $_POST['id'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $origin = $_POST['origin'];
        $temperature = $_POST['temperature'];
        $humidity = $_POST['humidity'];
        $water = $_POST['water'];
        $light = $_POST['light'];

        $query = "UPDATE plant SET name = '$name', type = '$type', origin = '$origin', temperature = '$temperature', humidity = '$humidity', water = '$water', light = '$light' WHERE id = '$id'";
        $result = $mysql -> query($query);

        if ($mysql->affected_rows > 0) {
            if ($result === TRUE) {
                echo "Plant Updated";
            }else{
                echo "Error";
            }
        }else{
            echo "Found Nothing";
        }

        $mysql->close();
    
    }
?>