<?php
//设置最大执行时间是 120秒
ini_set('max_execution_time',900);
function httpcode($url){
  $ch = curl_init();
  $timeout = 3;
  curl_setopt($ch,CURLOPT_FOLLOWLOCATION,1);
  curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
  curl_setopt($ch, CURLOPT_HEADER, 1);
  curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
  curl_setopt($ch,CURLOPT_URL,$url);
  curl_exec($ch);
  return $httpcode = curl_getinfo($ch,CURLINFO_HTTP_CODE);
  curl_close($ch);
}
$check_web = array(
  'http://0539jk.539360.com/',
  'http://aisttools.539360.com/',
  'http://ensenhai.539360.com/',
  'http://gd.539360.com/',
  'http://guangming.539360.com/',
  'http://gufeng.539360.com/',
  'http://haina.539360.com/',
  'http://haoda.539360.com/',
  'http://hengxu.539360.com/',
  'http://huiying.539360.com/',
  'http://hy.539360.com/',
  'http://jiazheng.539360.com/',
  'http://jinhu.539360.com/',
  'http://kangjia.539360.com/',
  'http://keming.539360.com/',
  'http://laiyibei.539360.com/',
  'http://lanjian.539360.com/',
  'http://lantu.539360.com/',
  'http://longwen.539360.com/',
  'http://lts.539360.com/',
  'http://lyjsxc.539360.com/',
  'http://minghua.539360.com/',
  'http://mkcvs.539360.com/',
  'http://mne.539360.com/',
  'http://ocshop.539360.com/',
  'http://pinggu.539360.com/',
  'http://putao.539360.com/',
  'http://qgd.539360.com/',
  'http://qite.539360.com/',
  'http://rihua2.539360.com/',
  'http://runyatang.539360.com/',
  'http://sdjgq.539360.com/',
  'http://senhai.539360.com/',
  'http://senyuan.539360.com/',
  'http://shengdao.539360.com/',
  'http://shenghe.539360.com/',
  'http://shimei.539360.com/',
  'http://shuangyuan.539360.com/',
  'http://shufa.539360.com/',
  'http://snc.539360.com/',
  'http://tianhe.539360.com/',
  'http://tongjiang.539360.com/',
  'http://www.539360.com/',
  'http://xingfushu.539360.com/',
  'http://xinhe.539360.com/',
  'http://xute.539360.com/',
  'http://ycz.539360.com/',
  'http://yisuitianshi.539360.com/',
  'http://zhui.539360.com/',

);
for($i=0;$i<count($check_web);$i++){
  echo $check_web[$i].' -> '.httpcode($check_web[$i]).'<br>';
}
