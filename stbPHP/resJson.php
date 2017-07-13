<?php
echo ("okok");

try{
$con = mysqli_connect('localhost','root','irodoriha37E','ToDoon');
$db_sel = mysqli_select_db('todo', $con);
$query = "SELECT name, deadened_id, deadend, detail FROM todo;";
$res = mysql_query($query);
$output=array();
console.log($output);
}catch (PDOException $e){
	console.log($e);
}
while($e=mysqli_fetch_assoc($res)){$output[]=$e;}
mysqli_free_result($res);
mysqli_close($con);

echo json_encode($output);