<?php
header("Content-Type: text/html;charset=utf-8");
function addFileToZip($path,$zip){
    $handler=opendir($path); //打开当前文件夹由$path指定。
    while(($filename=readdir($handler))!==false){
        if($filename != "." && $filename != ".."){//文件夹文件名字为'.'和‘..’，不要对他们进行操作
            if(is_dir($path."/".$filename)){// 如果读取的某个对象是文件夹，则递归
                addFileToZip($path."/".$filename, $zip);
            }else{ //将文件加入zip对象
                $zip->addFile($path."/".$filename);
            }
        }
    }
    @closedir($path);
}
$zip=new ZipArchive();
if($zip->open('file.zip', ZipArchive::OVERWRITE)=== TRUE){
    $path = './';
    if(is_dir($path)){  //给出文件夹，打包文件夹
        addFileToZip($path, $zip);
    }else if(is_array($path)){  //以数组形式给出文件路径
        foreach($path as $file){
            $zip->addFile($file);
        }
    }else{      //只给出一个文件
        $zip->addFile($path);
    }
    $zip->close(); //关闭处理的zip文件
    echo '打包成功点击<a href="http://'.$_SERVER['HTTP_HOST'].'/file.zip">下载</a>';
}