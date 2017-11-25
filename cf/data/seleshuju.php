<?php
/**
*向客户端分页返回商品详情，以JSON格式
*/
header('Content-Type: application/json;charset=UTF-8');


 include('init.php');
  $conn=mysqli_connect($host,$aname,$apwd,$dbname,$port);
  $sql = "SET NAMES UTF8";
  mysqli_query($conn,$sql);

$start = 0;	//从哪一行开始读取
$count = 7; //一次最多读取的行数
$sql = "SELECT * FROM cf_message LIMIT $start,$count";
$result = mysqli_query($conn,$sql);

$output = [];
while(($p=mysqli_fetch_assoc($result))!==null){
	$output[] = $p;
}

echo json_encode($output);