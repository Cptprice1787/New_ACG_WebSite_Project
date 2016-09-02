<?php
$reIP=$_SERVER["REMOTE_ADDR"]; 
$myfile = fopen("218.88.26.135", "r") or die("Unable to open file!");
$file_info=fread($myfile,filesize("218.88.26.135"));
fclose($myfile);
if($file_info=="logined"){
echo "已登陆！";
}else{
echo "未登录！";
}
?>
<html><a href="login_out.php">退出登录</a><br><a href="GetIP.php"返回GetIP.php</a></html>