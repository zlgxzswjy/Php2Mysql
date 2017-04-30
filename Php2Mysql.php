<?php
header("Content-type:text/html;charset=utf-8");
$server="localhost";
$username="root";
$password="123456";
echo '开始mysql数据库连接．<br><br><br>';
$mysqli=new mysqli($server,$username,$password);
if($mysqli)
{
	echo '连接mysql数据库成功．<br>';
	echo 'You can use \'new mysqli()\' to connect.<br><br>';
	$mysqli->close();
}
if($con1= mysqli_connect($server,$username,$password))
{
	echo '连接mysql数据库成功．<br>';
	echo 'You can use mysqli_connect() to connect.<br><br>';
	mysqli_close($con1);
}
if($con2=mysql_connect($server,$username,$password)) 
{
	echo '连接mysql数据库成功．<br>';
     echo 'You can use mysql_connect() to connect.<br><br>';	
     mysql_close($con2);
}
else
{
	die('连接mysql数据库失败：' . mysql_error());
}
echo '<br><br><br>';
echo '关闭mysql数据库连接．';
?>