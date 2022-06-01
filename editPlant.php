<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        require_once("db.php");

        $id = $_POST['id'];
        $name = $_POST['name'];
        $type = $_POST['type'];
        $origin = $_POST['origin'];
        $photos = $_POST['photos'];

        $query = "UPDATE plants SET name = '$name', type = '$type', origin = '$origin', photos = '$photos' WHERE id = '$id'";
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