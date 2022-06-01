<?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        
        require_once("db.php");

        $email = $_GET['email'];
        $password = $_GET['password'];

        $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";

        $result = $mysql->query($query);

        if ($mysql->affected_rows > 0) {

            while($row = $result -> fetch_assoc()){
                $array = $row;
            }

            echo json_encode($array);
        }else{

            $query2 = "UPDATE user SET tries = tries - 1 WHERE email = '$email'";
            $result2 = $mysql -> query($query2);
            echo "Incorrect email or password";
        }

        $result->close();
        $result2->close();
        $mysql->close();

    }