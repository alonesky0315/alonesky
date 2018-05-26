<html>
    <head>
        <meta http-equiv="Content-Type" content="charset=utf-8">
        <script language="javascript" type="text/javascript"> 
            var interval = 1000; 
            function ShowCountDown(year,month,day,times){ 
            var now = new Date(); 
            var endDate = new Date(year, month-1, day); 
            var leftTime=endDate.getTime()-now.getTime(); 
            var leftsecond = parseInt(leftTime/1000); 
            //var days=parseInt(leftsecond/(24*60*60*6)); 
            var days=Math.floor(leftsecond/(60*60*24)); 
            var hour=Math.floor((leftsecond-days*24*60*60)/3600); 
            var minute=Math.floor((leftsecond-days*24*60*60-hour*3600)/60); 
            var second=Math.floor(leftsecond-days*24*60*60-hour*3600-minute*60); 
            var cc = document.getElementById(times); 
            cc.innerHTML = "距离抽奖时间"+year+"年"+month+"月"+day+"日还有："+days+"天"+hour+"小时"+minute+"分"+second+"秒"; 
            } 
            window.setInterval(function(){ShowCountDown(2018,5,1,'times');}, interval); 
        </script> 
    </head> 
<body> 
<div id="times"></div> 
</body> 