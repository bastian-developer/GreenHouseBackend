<?php

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        require_once("db.php");
        $id = $_POST['id'];

        $query = "DELETE FROM plants WHERE id = '$id'";
        $result = $mysql->query($query);

        if ($mysql->affected_rows > 0) {
            if ($result === TRUE) {
                echo "Plant deleted successfully";
            }
        }else{
            echo "Found Nothing";
        }

        $mysql->close();
    }