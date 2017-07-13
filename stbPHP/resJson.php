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
<<<<<<< HEAD
	echo mysqli_errno($query).PHP_EOL;
	echo mysqli_error($query).PHP_EOL;
=======
	echo mysqli_errno($con).PHP_EOL;
	echo mysqli_error($con).PHP_EOL;
>>>>>>> ebebd3f3c83411f05dcc1252f8dfd02e7fea466c
}

$output=array();

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