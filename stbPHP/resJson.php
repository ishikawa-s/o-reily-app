<?php
try{
$con = mysqli_connect('localhost','root','irodoriha37E','ToDoon');
$db_sel = mysqli_select_db('todo', $con);
if(!$con){
	echo mysqli_connect_errno().PHP_EOL.'\n';
	echo mysqli_connect_error().PHP_EOL.'\n';
}
$query = "SELECT name, deadend_id, deadend, detail FROM todo;";
$res = mysqli_query($query);
if(!$res){
	echo mysqli_sqlstate().PHP_EOL;
}

$output=array();

}catch (PDOException $e){
	var_dump($e);
}
while($e=mysqli_fetch_assoc($res)){$output[]=$e;}
var_dump($output);
mysqli_free_result($res);
mysqli_close($con);

echo json_encode($output);