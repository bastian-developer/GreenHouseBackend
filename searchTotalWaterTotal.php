<?php

    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        
        require_once("db.php");

        $query = "SELECT SUM(waterSpent) FROM plant";

        $result = $mysql->query($query);

        if ($mysql->affected_rows > 0) {

            while($row = $result -> fetch_assoc()){
                $array = $row;
            }

            echo json_encode($array);

        }

        $result->close();
        $mysql->close();

    }
?>
