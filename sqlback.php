<?php
header("Content-Type:text/html;charset=utf-8");
$host="localhost"; 
$user="root";
$password="root"; 
$dbname="jusen"; 
@mysql_connect($host,$user,$password); 
mysql_select_db($dbname); 
$mysql= "set charset utf8;\r\n";#for mysql>=5.0 
$q1=mysql_query("show tables"); 
while($t=mysql_fetch_array($q1)){ 
$table=$t[0]; 
$q2=mysql_query("show create table `$table`"); 
$sql=mysql_fetch_array($q2); 
$mysql.=$sql['Create Table'].";\r\n\r\n";#DDL 
$q3=mysql_query("select * from `$table`"); 
while($data=mysql_fetch_assoc($q3)) 
{ 
$keys=array_keys($data); 
$keys=array_map('addslashes',$keys); 
$keys=join('`,`',$keys); 
$keys="`".$keys."`"; 
$vals=array_values($data); 
$vals=array_map('addslashes',$vals); 
$vals=join("','",$vals); 
$vals="'".$vals."'"; 
$mysql.="insert into `$table`($keys) values($vals);\r\n"; 
} 
$mysql.="\r\n"; 
} 
$filename=date('Ymj').".sql"; //文件名为当天的日期
$fp = fopen($filename,'w'); 
fputs($fp,$mysql); 
fclose($fp); 
echo "<br><center>数据备份成功,生成备份文件".$filename."</center>";
?>