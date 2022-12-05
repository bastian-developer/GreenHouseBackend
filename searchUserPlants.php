<?php

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        
    require_once("db.php");

    $userId = $_GET['userId'];

    $query = "SELECT * FROM plant WHERE userId = '$userId'";

    $result = $mysql->query($query);

    $res = array();

    while($row = mysqli_fetch_array($result)){

        array_push($res,array('id'=>$row['id']));
        array_push($res,array('userId'=>$row['userId']));
        array_push($res,array('name'=>$row['name']));
        array_push($res,array('type'=>$row['type']));
        array_push($res,array('origin'=>$row['origin']));
        array_push($res,array('photos'=>$row['photos']));

        array_push($res,array('photos'=>$row['waterSpent']));
        array_push($res,array('photos'=>$row['temperature']));
        array_push($res,array('photos'=>$row['humidity']));
        array_push($res,array('photos'=>$row['water']));
        array_push($res,array('photos'=>$row['light']));

        }
        
        echo json_encode(array("result"=>$res));

    $result->close();
    
    $mysql->close();

}
?>