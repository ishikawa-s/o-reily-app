<?php
try{
$con = mysqli_connect('192.168.15.180','root','irodoriha37E','ToDoon');
$db_sel = mysqli_select_db('todo', $con);
$query = "SELECT name, deadened_id, deadend, detail FROM todo;";
$res = mysql_query($query);
$output=array();
var_dump($res);
for($i=0; $i<=$output.length; $i++){
	var_dump($output[i]);
}
}catch (PDOException $e){
	var_dump($e);
}
while($e=mysqli_fetch_assoc($res)){$output[]=$e;}
mysqli_free_result($res);
mysqli_close($con);

echo json_encode($output);