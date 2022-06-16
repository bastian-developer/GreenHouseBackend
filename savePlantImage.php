 <?php
 
 if($_SERVER['REQUEST_METHOD']=='POST'){
 
 $plantId = $_POST['plantId'];
 $image = $_POST['image'];
 
 require_once('db.php');
 
 $sql ="SELECT id FROM photo ORDER BY id ASC";
 
 $res = mysqli_query($mysql, $sql);
 
 $id = 0;
 
 while($row = mysqli_fetch_array($res)){
 $id = $row['id'];
 }
 
 $path = "user_uploads/$id.Plant.png";
 
 $actualpath = "http://10.42.64.108/greenhousedb/$path";
 
 $sql = "INSERT INTO photo (plantId, url) VALUES ('$plantId','$actualpath')";
 
 if(mysqli_query($mysql,$sql)){
 file_put_contents($path,base64_decode($image));
 echo "Successfully Uploaded";
 }

 $query2 = "UPDATE plant SET photos='$actualpath' WHERE id='$plantId'";
 $result2 = $mysql -> query($query2);

 mysqli_close($mysql);
 }else{
 echo "Error";
 }
?>