<?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $userId = $_POST['userId'];
 $image = $_POST['image'];
 
 require_once('db.php');
 
 $sql ="SELECT id FROM icon ORDER BY id ASC";
 
 $res = mysqli_query($mysql, $sql);
 
 $id = 0;
 
 while($row = mysqli_fetch_array($res)){
 $id = $row['id'];
 }
 
 $path = "user_uploads/$id.png";
 
 $actualpath = "http://192.168.0.3/greenhousedb/$path";
 
 $sql = "INSERT INTO icon (userId, url) VALUES ('$userId','$actualpath')";
 
 if(mysqli_query($mysql,$sql)){
 file_put_contents($path,base64_decode($image));
 echo "Successfully Uploaded";
 }

 $query2 = "UPDATE user SET photo='$actualpath' WHERE id='$userId'";
 $result2 = $mysql -> query($query2);

 mysqli_close($mysql);
 }else{
 echo "Error";
 }
?>