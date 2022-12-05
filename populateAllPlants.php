<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        
    require_once("db.php");


    $query = "SELECT * FROM plant";

    $result = $mysql->query($query);

    if ($mysql->affected_rows > 0) {

        $return_arr['plants'] = array();

        while($row = $result -> fetch_array()){

            array_push($return_arr['plants'], array(
                'id'=>$row['id'],
                'userId'=>$row['userId'],
                'name'=>$row['name'],
                'type'=>$row['type'],
                'origin'=>$row['origin'],
                'photos'=>$row['photos'],

                'waterSpent'=>$row['waterSpent'],
                'temperature'=>$row['temperature'],
                'humidity'=>$row['humidity'],
                'water'=>$row['water'],
                'light'=>$row['light'],
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