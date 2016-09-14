<?php
$view=$_POST["talk"];//获取form
$time=(date("Y.m.d")."·".date("h.i.sa"));//获取日期
$user_ip=$_SERVER["REMOTE_ADDR"]; //获取客户端ip
$a="<!--ip";
$b="start-->";
$br="<br>";
$c="end-->";
$myfile = fopen("upload_number", "r") or die("Notice:Unable to open file!————Linux下权限出错，请联系管理员修改文件upload_number权限为777！");//读取楼层，楼层初始值为0
$floor=fread($myfile,filesize("upload_number"));//同09行注释
$floor=($floor+1);//计算当前（新的）楼层
file_put_contents("./upload_number",$floor);//放回楼层为下一则评论做准备
$view_put=($a.$user_ip.$b.$time.$floor."楼".$br.$view.$a.$user_ip.$c.$br);//载入文件内容
file_put_contents("main_view.html",$view_put,FILE_APPEND);//写入文件
?>