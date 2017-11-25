 <?php
 header("content-type:text/html;charset=utf8");

 $id=$_REQUEST['id'];
 $title=$_REQUEST['title'];
 $user=$_REQUEST['user'];
 $nation=$_REQUEST['nation'];
 $create_time=date("y-m-d H:i:s");
 $ischeck=$_REQUEST['ischeck'];
 $article=$_REQUEST['article'];

 include('init.php');
  $conn=mysqli_connect($host,$aname,$apwd,$dbname,$port);
  $sql = "SET NAMES UTF8";
  mysqli_query($conn,$sql);

 $sql="update cf_message set u_title = '$title',u_uname = '$user',m_nation = '$nation',create_time = '$create_time',m_ischeck = '$ischeck',m_article = '$article' where m_id = '$id'";

 //echo $sql;
 $re=mysqli_query($conn,$sql);//执行sql语句
 //echo $re;
 if($re){
     echo "修改成功";
     echo "<script  src='js/jquery-1.11.3.js'></script>";
     echo "<script  src='js/mycf.js'></script>";
     echo "<script>";
     echo "location.href='../right.html'";
     echo "</script>";
 }else{
    echo "修改失败";
 }
