<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        
    require_once("db.php");

    $query = "SELECT * FROM country";

    $result = $mysql->query($query);

    if ($mysql->affected_rows > 0) {

        $return_arr['countries'] = array();

        while($row = $result -> fetch_array()){

            array_push($return_arr['countries'], array(
                'id'=>$row['id'],
                'name'=>$row['name'],
            ));
        }

        echo json_encode($return_arr);

    }else{

        echo "Found Nothing";

    }

    $result->close();
    
    $mysql->close();

}

?>