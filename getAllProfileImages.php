<?php
 require_once('db.php');
 
 $sql = "select url from icon";
 
 $res = mysqli_query($mysql,$sql);
 
 $result = array();
 
 while($row = mysqli_fetch_array($res)){
 array_push($result,array('url'=>$row['url']));
 }
 
 echo json_encode(array("result"=>$result));
 
 mysqli_close($mysql);

?>