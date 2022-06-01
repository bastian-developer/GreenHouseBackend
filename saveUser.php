<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        require_once("db.php");

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $address = $_POST['address'];
        $photo = $_POST['photo'];
        $isBlocked = $_POST['isBlocked'];

        $query = "INSERT INTO user (name, email, password, address, photo, isBlocked) VALUES ('$name', '$email', '$password', '$address', '$photo', '$isBlocked')";
        $result = $mysql -> query($query);

        if($result === TRUE) {
            echo "User Created Successfully";
        }else{
            echo "Error Creating User";
        }
    }

