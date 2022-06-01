<?php 

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        
    require_once("db.php");

    $name = $_GET['name'];

    $query = "SELECT * FROM state WHERE countryId = (SELECT id FROM country WHERE name = '$name')";

    $result = $mysql->query($query);

    if ($mysql->affected_rows > 0) {

        $return_arr['states'] = array();

        while($row = $result -> fetch_array()){

            array_push($return_arr['states'], array(
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