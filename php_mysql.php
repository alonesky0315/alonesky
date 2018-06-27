<?php 
header("Content-Type: text/html; charset=UTF-8");
$dbhost = 'localhost'; 
$dbuser = 'root'; //我的用户名 
$dbpass = 'webqin0607080910'; //我的密码 
$dbname = 'ygcb'; //我的mysql库名 
$connect = mysql_connect($dbhost,$dbuser,$dbpass,$dbname)or die("数据库连接失败");
mysql_query("set names utf8");
mysql_select_db($dbname); //打开数据库


/*单个*/
<?php
	include_once(dirname(__FILE__)."./action.php");
	$catid=!empty($_GET['catid'])?(intval($_GET['catid'])):'4';
	$strsql="select * from zz_category where `id`=$catid";
	$result=mysql_query($strsql);
	$row = mysql_fetch_array($result);
?>

<!--多个产品-->
<?php
	include_once(dirname(__FILE__)."./action.php");
	$catid=!empty($_GET['catid'])?(intval($_GET['catid'])):'4';
	$strsql="select * from zz_article where `catid`=$catid";
	$result=mysql_query($strsql);
	while($row = mysql_fetch_assoc($result)){
?>

<?php echo $row['thumb'];?>

<?php 	}   ?>

<!--列表分页-->

<?php 
	include_once(dirname(__FILE__)."./action.php");
	@include("./page_class.php");
	$catid=!empty($_GET['catid'])?(intval($_GET['catid'])):'4';
	$strsql="select * from zz_article where `catid`=$catid";
	$result=mysql_query($strsql);
	$total = mysql_num_rows($result);
	pageft($total,6);
	if($firstcount>=0)
	$strsql.=" limit ".$firstcount.",6";
	$query = mysql_query($strsql);
	while($row = mysql_fetch_assoc($query)){	
?>
<?php }?>
<div class="manu"><span class="disabled" ><?php echo $pagenav;?></span></div>
