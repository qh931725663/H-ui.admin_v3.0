<?php
/**
*向客户端分页返回商品详情，以JSON格式
*/
header('Content-Type:text/html;charset=UTF-8');
$m_id=$_REQUEST['m_id'];
//连接数据库
 include('init.php');
 $conn=mysqli_connect($host,$aname,$apwd,$dbname,$port);
  $sql = "SET NAMES UTF8";
  mysqli_query($conn,$sql);
//执行查询数据语句
$sql = "SELECT * FROM cf_message where m_id='$m_id'";
$result = mysqli_query($conn,$sql);
?>
<head>
<meta charset="utf-8" />
<title>无标题文档</title>
<link href="../css/style.css" rel="stylesheet" />
<style>
.msg h2{text-align:center;margin:10px 0;font-size:19px;font-weight:blod;}
.msg .sp1{display:inline-block; margin-left:650px;text-align:center;}
.msg .sp2{display:inline-block;margin-left:20px;}
.msg .news{margin-left:20px;text-indent:2em;margin:20px 30px;}

</style>
</head>
<body>
	<div class="place">
    <span>位置:</span>
    <ul class="placeul">
    <li><a href="#">首页</a></li>
    </ul>
    </div>
  <div id="msgList">
	<?php     
	if(($p=mysqli_fetch_assoc($result))!==null){
		echo "<div class='msg'>";
		echo "<h2>$p[u_title]</h2>";
		echo "<span class='sp1'>$p[u_uname]</span>";
		echo "<span class='sp2'>$p[create_time]</span>";
		echo "<hr/>";
		echo "<div class='news'>";
		echo "$p[m_article]";
		echo "</div>";
		echo "</div>";
	}
	?>
  </div>
 </body>

