<?php
header("Content-Type:application/json;charset");

$uname=$_REQUEST['uname'];
$upwd=$_REQUEST['upwd'];

//$conn=mysqli_connect("localhost","root","root","cf",3306);
//$sql="SET NAMES UTF8";
//mysqli_query($conn,$sql);

include('init.php');
$conn=mysqli_connect($host,$aname,$apwd,$dbname,$port);
$sql = "SET NAMES UTF8";
mysqli_query($conn,$sql);

$sql="select * from cf_user where u_name='$uname' and u_pwd='$upwd'";
$result=mysqli_query($conn,$sql);

$output = [['code'=>0, 'msg'=>'用户名或密码输入错误!'],
['code'=>1, 'msg'=>'用户名或密码输入正确']
];
if($result===FALSE){
	echo 'sql执行失败'.$sql;
}else{
	if(($row=mysqli_fetch_assoc($result)===NULL)){
		$output=$output[0];
	}else{
		$output=$output[1];
	}
}
echo json_encode($output);

