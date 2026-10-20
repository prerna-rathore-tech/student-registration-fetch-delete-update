<?php 

include 'connection.php';

$del_id = $_GET['delid'];
//echo $del_id;

$query = $obj->query("delete from std_register where id='$del_id'");

if($query){
	header("location:index.php");
}else{
	echo "error";
}

?>