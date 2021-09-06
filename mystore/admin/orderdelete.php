<?php 
include('../partials/connect.php');
$newid=$_GET['del_id'];

$sql="Delete from orders where id='$newid'";
$sql1="Delete from orders_detail where id='$newid'";


if (mysqli_query($connect,$sql) AND mysqli_query($connect,$sql1) ) {
	header('location: orders.php');
}else{
	echo "Not Deleted";
}










?>