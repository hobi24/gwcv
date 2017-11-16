<?php
/*session_start();
$_SESSION['demo'] = 'shoo';
echo "$_SESSION['demo']";*/
header("Content-type:text/html;charset=utf-8");
echo "string";
$link = mysql_connect("localhost","root","");
//echo $link;
if($link) {
	echo "成功";
}else {
	echo "失败";
}
?>