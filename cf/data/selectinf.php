<?php
/**
*向客户端分页返回商品详情，以JSON格式
*/
header('Content-Type:application/json;charset=UTF-8');

//连接数据库
 include('init.php');
 $conn=mysqli_connect($host,$aname,$apwd,$dbname,$port);
  $sql = "SET NAMES UTF8";
  mysqli_query($conn,$sql);

//执行查询数据语句
$sql = "select u_intitle, u_total_num from cf_information_total";
$result = mysqli_query($conn,$sql);

$output=[];
while(($row=mysqli_fetch_assoc($result))!==null){
	//使用插件图表,里面的参数必须是label和value格式显示的，这里转化了一下参数名称
	$pm=["label"=>0,"value"=>0];
	$pm["label"]=$row['u_intitle'];
	$pm["value"]=$row['u_total_num'];
	$output[]=$pm;
};
echo json_encode($output);
