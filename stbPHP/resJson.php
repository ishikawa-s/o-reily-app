<?php
try{
	$con = new mysqli('localhost','todo','Android_t0d0','ToDoon');
	if($con->connect_error){
		die('Error:'.$con->connect_errno. $con->connect_error);
	}
	//var_dump($con);	
	$output=[];

	//$buf = file_get_contents("php://input");
	//echo "buf:" . $buf . "\n";

	//echo $_POST["tblName"];
	//error_log("log: ". print_r($_POST, true)."\n", 3, "/tmp/error.txt");
	//echo "log: ". print_r($_POST, true)."\n";
	if(isset($_POST["tblName"])){
		$tbl = $_POST["tblName"];
		//echo $_POST["tblName"];
		//echo $tbl;
		$query = "SELECT * FROM ".$tbl.";";
		//echo $query;	
//		$query = "SELECT * FROM Business;";
		//error_log($query."\n", 3, "/var/www/html/git_repos/android-app/error.txt");
		if($res = $con->query($query)){
			//echo "query OK";
			while($row = $res->fetch_assoc()){
				$output[]=$row;
			}
			$res->close();
		}
	}
}catch (PDOException $e){
}
$con->close();
//echo "OK";
echo json_encode($output, JSON_UNESCAPED_UNICODE);
