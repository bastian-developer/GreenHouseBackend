<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        require_once("db.php");

        $id = $_POST['id'];
        $waterSpent = $_POST['waterSpent'];


        $query = "UPDATE plant SET waterSpent = waterSpent + '$waterSpent' WHERE id = '$id'";


        $result = $mysql -> query($query);

        if ($mysql->affected_rows > 0) {
            if ($result === TRUE) {
                echo "Water Spent Saved";
            }else{
                echo "Error";
            }
        }else{
            echo "Found Nothing";
        }

        $mysql->close();
    
    }
?>