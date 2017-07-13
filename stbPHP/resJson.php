<?php
$con = mysqli_connect('localhost','root','irodoriha37E','ToDoon');
$db_sel = mysqli_select_db('todo', $con);
$query = "SELECT name, deadened_id, deadend, detail FROM todo;";
$res = mysql_query($query);
$output=array();
while($e=mysqli_fetch_assoc($res)){$output[]=$e;}
mysqli_free_result($res);
mysqli_close($con);

echo json_encode($output);