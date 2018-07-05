<?php
header("Content-Type: text/html;charset=utf-8"); 
$sitearr=array(
	'ccggcl.com',
'www.ccggcl.com',
'cailiao.ccggcl.com',
'flb.ccggcl.com',
'kaibingfoods.com',
'www.kaibingfoods.com',
'kt.ccggcl.com',
'jiagong.ccggcl.com',
'yongjiuhats.com',
'www.yongjiuhats.com',
'sdblyy.com',
'www.sdblyy.com',
'zhengtongjituan.com',
'www.zhengtongjituan.com',
'taiwanzhongzheng.com',
'www.taiwanzhongzheng.com',
'zhongzheng.539360.com',
'fuluxiehui.com',
'www.fuluxiehui.com',
'yuanqiaoshuiyi.com',
'www.yuanqiaoshuiyi.com',
'zsy678.com',
'www.zsy678.com',
'www.zsy678.xyz',
'zsy678.xyz',
'yiguangdianlan.com',
'www.yiguangdianlan.com',
'zejigroup.com',
'www.zejigroup.com',
'haodekouqiang.com',
'www.haodekouqiang.com',
'sdlvdanban.com',
'www.sdlvdanban.com',
'eucanchina.com',
'm.eucanchina.com',
'z.lyyibang.com',
'zdystone.com',
'www.zdystone.com',
'tianhuishipin.com',
'www.tianhuishipin.com',
'sdlydxmy.com',
'www.sdlydxmy.com',
'daxing.539360.com',
'm.haitang.com.cn',
'm.hibang.com.cn',
'dongliguanye.com',
'www.dongliguanye.com',
'dongliguanye.cn',
'www.dongliguanye.cn',
'cnwish.com',
'www.cnwish.com',
'cnweishi.539360.com',
'en.cnwish.com',
'enweishi.539360.com',
'xdgjbdc.com',
'www.xdgjbdc.com',
'xinda.539360.com',
'dahaiwater.com',
'dahaiwater1.com',
'www.dahaiwater1.com',
'ks.539360.com',
'yimaiquan.cn',
'www.yimaiquan.cn',
'maifanshi.539360.com',
'www.menyakv.com',
'www.menyalv.com',
'ypbasi.com',
'yapeng.539360.com',
'www.ypbasi.com',
'foodlol.cn',
'www.foodlol.cn',
'gjbj110.net',
'www.gjbj110.net',
'cnpiaoqian.com',
'www.cnpiaoqian.com',
'lymozhou.com',
'www.lymozhou.com',
'mozhou.539360.com',
'guoan110.net',
'guojing110.com',
'www.guojing110.com',
'en.chaotaishiye.com',
'ru.chaotaishiye.com',
'lygufeng.com',
'gufeng.539360.com',
'www.lygufeng.com',
'kaishuotools.com',
'www.kaishuotools.com',
'lykaishuo.com',
'youyinggroup.com',
'www.youyinggroup.com',
'lyxylj.com',
'xinnengyuan.539360.com',
'www.lyxylj.com',
'sdfsgg.com',
'www.sdfsgg.com',
'lyshuadu.com',
'www.lyshuadu.com',
'm.lyxlys.com',
'xuelin.539360.com',
'm.sdxuelin.com',
'sdyingbeidi.com',
'www.sdyingbeidi.com',
'hlylawyer.com',
'www.hlylawyer.com',
'dehong.539360.com',
'cnfqhg.com',
'www.cnfqhg.com',
'haibaobike.com',
'www.haibaobike.com',
'tjbolijixie.com',
'www.tjbolijixie.com',
'tj.539360.com',
'shengdaoqiye.com',
'www.shengdaoqiye.com',
'shengdao.539360.com',
'pulinkj.com',
'www.pulinkj.com',
'jinchenglvxiang.com',
'www.jinchenglvxiang.com',
'jincheng.539360.com',
'hsjqchotel2.com',
'huasheng.539360.com',
'hsjqchotel.com',
'www.hsjqchotel.com',
'huazizhaoming.com',
'www.huazizhaoming.com',
'huazi.539360.com',
'yiyuanxiujiao.com',
'www.yiyuanxiujiao.com',
'cminny.cn',
'www.cminny.cn',
'mingyi.539360.com',
'jianshenjiameng.com',
'www.jianshenjiameng.com',
'jianshen.539360.com',
'www.eucanchina.com',
'ouchuan.539360.com',
'ceshi.eucanchina.com',
'eucanchinapc.com',
'putaohuzhu.cn',
'www.putaohuzhu.cn',
'putao.539360.com',
'lytianma.cn',
'www.lytianma.cn',
'huitaosc.cn',
'www.huitaosc.cn',
'doulikeji.cn',
'www.doulikeji.cn',
'sdxinger.com',
'www.sdxinger.com',
'www.xingerkeji.com',
'xingerkeji.com',
'en.xmgch.com',
'lygmykyy.com',
'www.lygmykyy.com',
'mifeiertc.com',
'www.mifeiertc.com',
'mkvks.com',
'mkcvs.com',
'mkcvs.539360.com',
'www.mkcvs.com',
'frklg.com',
'www.frklg.com',
'feiliao.539360.com',
'en.com',
'en.hsjqchotel.com',
'huasheng2.539360.com',
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