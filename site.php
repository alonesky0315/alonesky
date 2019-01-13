<?php
header("Content-Type: text/html;charset=utf-8"); 
$sitearr=array(
	'www.baidu.com',
	'www.qq.com',
	'www.sohu.com',

);
/*
*方法一
$array=array();
for($i=0;$i<count($sitearr);$i++){
	if(array_diff($sitearr,array('www.'.$sitearr[$i]))){
		$sitearr=array_merge(array_diff($sitearr,array('www.'.$sitearr[$i])));
	}
	$array[$i]=$sitearr[$i]."     ".gettitle($sitearr[$i]);
}
echo '<pre>';
print_r($array);exit;
function gettitle($url){
	@$text=file_get_contents('http://'.$url);
	preg_match('/<title[^>]*>([^<]*)<\/title>/i',$text,$title);
	return @$title[1];exit;
}
*/
/*
*方法二
*/
define('root', str_replace("\\", '/', dirname(__FILE__)));
/**
 * 自动转字符串编码为utf-8
 * @param  string $string 字符串
 * @return string
 */
function strcoding($string){ 
	$encode = mb_detect_encoding($string, array('ASCII','UTF-8','GB2312','GBK','BIG5'));
	if ($string != "UTF-8"){
		$string = iconv($encode,'UTF-8',$string);
	}
	return trim($string);
}
/**
 * 获取网址站点信息
 * @author JunjunChen
 * @param  string $url 目标地址
 * @return Array
 */
function siteinfo($url){
	$url='http://'.$url;
	if(empty($url)){return false;}
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
	$contents=curl_exec($ch);
	@curl_close($ch);
	$meta = get_meta_tags($url);
	@preg_match("/<title[^>]*>([^<]*)<\/title>/",$contents,$title);//匹配代码中的标题部分
	$title['1'] = (isset($title['1']))?strCoding($title['1']):'';
	//print_r($title['1']);exit;
	$description = (isset($meta['description']))?strCoding($meta['description']):'';
	$keywords = (isset($meta['keywords']))?strCoding($meta['keywords']):'';
    //$i = array('url'=>$url,'title'=>$title[1],'description'=>$description,'keywords'=>$keywords);
	return $title[1];
}
/**
 * 数据记录
 * @author JunjunChen
 * @param  Array  $sitearr url集数组
 * @return string
 */
function record(array $sitearr){
	$xmlurl = null;
	if(count($sitearr)<=0){die('请输入数据');}
	foreach ($sitearr as $value) {
		$xmlurl[] = siteinfo($value);
	}
	print_r($xmlurl);exit;
	$xmlurl = serialize($xmlurl);
	$logfile = fopen(root.'/'.date('Y-m-d').'.txt',"w");
	fwrite($logfile, $xmlurl);
	fclose($logfile);
	die('记录完成！');
}
record($sitearr);
