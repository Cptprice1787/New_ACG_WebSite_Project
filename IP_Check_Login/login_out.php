<?php
$reIP=$_SERVER["REMOTE_ADDR"]; 
echo $reIP; 
$myfile = fopen($reIP, "w") or die("<red>提示：这里程序出现了一个错误，希望你能帮忙报告给网站的技术员/n将后面的一段文字报告给技术员“GetIPerror”，谢谢！</red>");
$txt = "unlogin";
fwrite($myfile, $txt);
fclose($myfile);
?>
<html>
<a href="IP_INDEX.php">GO_BACK!</a>
</html>