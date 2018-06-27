<?php
header("Content-type: text/html; charset=utf-8"); 
//连接FTP服务器
$conn = ftp_connect("bxu2359740113.my3w.com");
// 使用username和password登录
ftp_login($conn, 'bxu2359740113', 'chen1234');
//被动模式（PASV）的开关，打开或关闭PASV（1表示开）
ftp_pasv($conn, 1);
// 获取远端系统类型
ftp_systype($conn);
ftp_chdir($conn, "htdocs");
// 下载文件
$ftp_get=ftp_get($conn,'lat_lon.php','lat_lon.php', FTP_BINARY);
if($ftp_get){
	// 关闭联接
	ftp_quit($conn);
	echo '下载成功';exit;
}else{
	echo '下载失败';exit;
}
?>