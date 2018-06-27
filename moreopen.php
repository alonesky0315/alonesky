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
  'http://www.baidu.com/',
  'http://www.qq.com/',
  'http://www.alonesky.com/',
  'http://more.alonesky.com/',
);
for($i=0;$i<count($check_web);$i++){
  echo $check_web[$i].' -> '.httpcode($check_web[$i]).'<br>';
}
