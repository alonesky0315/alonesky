<?php
	// header("Content-Type: text/html;charset=gbk"); 
	// $text=file_get_contents('http://item.taobao.com/item.htm?id=563021774948');
	// preg_match('/<img[^>]*id=\"J_ImgBooth\"[^r]*rc=\"([^"]*)\"[^>]*>/',$text,$img); 
	// //运用正则抓取img标签中id为J_ImgBooth的img，$img[0]为该500图img标签，$img[1]为500图的图片地址；
	// preg_match('/<h3[^>]*class=\"tb-main-title\"[^>]*>([^<]*)<\/h3>/',$text,$title); 
	// preg_match('/<em[^>]*class=\"tb-rmb-num\"[^>]*>([^<]*)<\/em>/',$text,$price);
	// preg_match('/<p[^>]*class=\"tb-subtitle\"[^>]*>([^<]*)<\/p>/',$text,$description);
	// print_r($img);print_r($title);print_r($price);print_r($description);
?>
<?php
	header("Content-Type: text/html;charset=utf-8"); 
	print_r(getTBval(3445077081));//563021774948
	function getTBval($id){
        header("Content-Type: text/html;charset=gbk"); 
        $json = file_get_contents("https://hws.alicdn.com/cache/mtop.wdetail.getItemDescx/4.1/?data=%7B%22item_num_id%22%3A%22{$id}%22%7D");
        $data = json_decode($json,1);
        if($data['data']['pages']){
            $content = "";
            foreach($data['data']['pages'] as $p){
                $content .= $p;
            }
            $content = str_replace("<img>","<img src='",$content);
            $content = str_replace("</img>","'>",$content);
            $content = str_replace("txt","p",$content);
        }
        $text=file_get_contents("http://item.taobao.com/item.htm?id={$id}");
        preg_match('/<img[^>]*id=\"J_ImgBooth\"[^r]*rc=\"([^"]*)\"[^>]*>/',$text,$img); 
        preg_match('/<h3[^>]*class=\"tb-main-title\"[^>]*>([^<]*)<\/h3>/',$text,$title); 
        preg_match('/<p[^>]*class=\"tb-subtitle\"[^>]*>([^<]*)<\/p>/',$text,$desc);
        preg_match_all('/<ul[^>]*class=\"attributes-list\">(.*?)<\/ul>/is',$text,$props,PREG_SET_ORDER );
        $qz = substr($img['1'], 0, 2);
        if(strtolower($qz) == '//'){
            $img = 'https:'.$img['1'];
        }
        $imglist=str_replace("<img src='","",$content);
        $imglist=str_replace("'>",",",$imglist);
        $imglist=explode(",",$imglist);
        foreach ( $imglist as $k=>$imgarray ) {
            $url=downloadImage($imgarray);
        }
        //print_r($imglist);exit;
        $props=str_replace('li','p',$props['0']['1']);
        $value['title']=$title['1'];//商品名称
        $value['picsPath']=downloadImage($img);//相片图册
        $value['props']=$props;//详细配置
        $value['descInfo']=$content;//详情url链接
        return $value;
    }
    // function getTBval($id,$goods_id){
    //     $url="http://xukai1.qiyunapp.com/products/product-{$id}.html";
    //     $text=file_get_contents($url);
    //     preg_match('/id=\"productno\">(.*?)<\/span>/is',$text,$productno);
    //     preg_match('/class=\"pdtname clear\">(.*?)<\/div>/is',$text,$goods_name);
    //     preg_match('/id=\"productno\">(.*?)<\/span>/is',$text,$productno);
    //     preg_match('/class=\"pdtdesc\">(.*?)<\/div>/is',$text,$goods_remark);
    //     preg_match('/id=\"marketprice\">(.*?)<\/span>/is',$text,$market_price);
    //     preg_match('/id=\"memberprice\">(.*?)<\/span>/is',$text,$shop_price);
    //     preg_match('/<img[^>]*id=\"thumbnail_img\"[^r]*rc=\"([^"]*)\"[^>]*>/',$text,$original_img);
    //     preg_match_all('/img1=\"([^"]*)\"/',$text,$imglist_800);
    //     preg_match('/class=\"tabitem\">(.*?)<\/div>/is',$text,$goods_content);
    //     $imglist=$imglist_800[1];
    //     foreach ($imglist as $k=>$imgarray ) {
    //         if($k<5){
    //             $url=$this->downloadImage($imgarray);
    //             $find=M('goods_images')->where("goods_id = '".$goods_id."' and image_url='".$url."'")->find();
    //             if(empty($find)){
    //                 M('goods_images')->add(array('goods_id'=>$goods_id,'image_url'=>$url));
    //             }
    //         }
    //     }
    //     $value['goods_name']=trim($goods_name['1']);//商品名称
    //     $value['productno']=trim($productno['1']);//商品编码
    //     $value['goods_remark']=trim($goods_remark['1']);//商品简介
    //     $value['market_price']=trim($market_price['1']);//市场价
    //     $value['shop_price']=trim($shop_price['1']);//售价
    //     $value['original_img']=$this->downloadImage($original_img['1']);//商品缩略图
    //     $value['goods_content']=trim($goods_content[1]);//商品详情
    //     $value['productno']=trim($productno['1']);//商品编码
    //     return $value;
        
    // }
    function downloadImage( $url){
        $path="./download/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
        $file = curl_exec($ch);
        curl_close($ch);
        $filename = pathinfo($url, PATHINFO_BASENAME);
        $resource = fopen($path.$filename, 'a');
        $paths=$path.$filename;
        fwrite($resource, $file);
        fclose($resource);
        return $paths;
    }
?>