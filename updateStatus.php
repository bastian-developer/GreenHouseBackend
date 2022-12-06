<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        require_once("db.php");

        $id = $_POST['id'];

        $airTemperature = $_POST['airTemperature'];
        $airHumidity = $_POST['airHumidity'];
        $soilHumidity = $_POST['soilHumidity'];
        $ambientLight = $_POST['ambientLight'];

        $query = "UPDATE status SET airTemperature = '$airTemperature', airHumidity = '$airHumidity', soilHumidity = '$soilHumidity', ambientLight = '$ambientLight' WHERE id = '$id'";
        $result = $mysql -> query($query);

        if ($mysql->affected_rows > 0) {
            if ($result === TRUE) {
                echo "Status Updated";
            }else{
                echo "Error";
            }
        }else{
            echo "Found Nothing";
        }

        $mysql->close();
    
    }
?>  