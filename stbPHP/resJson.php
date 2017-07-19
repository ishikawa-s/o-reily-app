<?php
try{
	$con = new mysqli('localhost','tw_ishikawa','ishikawa','Todo');
	if($con->connect_error){
		die('Error:'.$con->connect_errno. $con->connect_error);
	}

	$output=[];

	//echo $_POST;
	$tbl = $_POST['tbl'];
	//echo $tbl;
	$query = "SELECT name, deadend_id, deadend, detail FROM ". $tbl .";";
	if($res = $con->query($query)){
		while($row = $res->fetch_assoc()){
			$output[]=$row;
		}
		$res->close();
	}
}catch (PDOException $e){
}
$con->close();
echo json_encode($output, JSON_UNESCAPED_UNICODE);