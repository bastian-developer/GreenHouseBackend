<?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        
        require_once("db.php");

        $id = $_GET['id'];

        $query = "SELECT * FROM status WHERE id = '$id'";

        $result = $mysql->query($query);

        if ($mysql->affected_rows > 0) {

            while($row = $result -> fetch_assoc()){

                $array = $row;

            }

            echo json_encode($array);

        }else{

            echo "Found Nothing";

        }

        $result->close();
        
        $mysql->close();

    }
?>
