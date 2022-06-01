<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        require_once("db.php");

        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];

        $query = "UPDATE users SET name = '$name', email = '$email', password = '$password', address = '$address' WHERE id = '$id'";
        $result = $mysql -> query($query);

        if ($mysql->affected_rows > 0) {
            if ($result === TRUE) {
                echo "User Updated";
            }else{
                echo "Error";
            }
        }else{
            echo "Found Nothing";
        }

        $mysql->close();
    
    }