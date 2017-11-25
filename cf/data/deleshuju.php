 <?php
 header("content-type:text/html;charset=utf8");

 $id=$_REQUEST['id'];

 include('init.php');
  $conn=mysqli_connect($host,$aname,$apwd,$dbname,$port);
  $sql = "SET NAMES UTF8";
  mysqli_query($conn,$sql);

 $sql="delete from cf_message  where m_id = '$id'";

 //echo $sql;
 $re=mysqli_query($conn,$sql);//执行sql语句
 //echo $re;
 if($re!==FALSE){
  echo "删除成功";
   echo "<script  src='js/jquery-1.11.3.js'></script>";
   echo "<script  src='js/mycf.js'></script>";
   echo "<script>";
   echo "location.href='../right.html'";
   echo "</script>";
 }else{
  echo "删除失败";
 }