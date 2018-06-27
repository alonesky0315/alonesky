<!doctype html>
<html lang="zh-cmn-Hans">
<head>
    <meta charset="UTF-8">
    <title>知牛财经</title>
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="keywords" content="汇盈财经讲师">
    <meta name="description" content="汇盈财经讲师-风趣幽默、抓住重点、狙击行情">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.png"/>
</head>
<body>
<div id="js-app"></div>
<script type="text/x-template" id="js-tpl-app">
    <div class="app">
        <app-live v-if="teacher.uid" :videoList="videoList" :teacher="teacher" :chatMessage="chatMessage"/>
    </div>
</script>
<script type="text/x-template" id="js-tpl-live">
    <article class="live">
        <section class="video-play" ref="player_wrap"></section>
        <section><nav class="nav-bar" ref="nav_tab"></nav></section>
    </article>
</script>
<script src="http://res.yy.com/libs/??zepto/1.2.0/zepto.all.min.js,seajs/2.2.1/sea.js" type="text/javascript"></script>
<script type="text/javascript" src="http://vodplayer.bs2dl-ssl.yy.com/yywebplayer.min.js"></script>
<script type="text/javascript">
    var _DATA = { 
        videoList: "[]",   
        teacher: "{\"flexTeacherId\":47973,\"uid\":2178676329,\"yyNum\":2178844889,\"nickName\":\"\u6C47\u76C8\u8D22\u7ECF\u8BB2\u5E08\",\"headUrl\":\"http:\/\/yyfinancesmall.bs2dl-ssl.huanjuyun.com\/defaultHeadImage\/images\/faces\/person\/10001.jpg\",\"finType\":\"gold\",\"liveStatus\":6,\"liveSid\":51866446,\"liveSsid\":51866446,\"liveSidAlias\":51866446,\"streamId\":\"51866446_50020_2178676329_540247\",\"liveChannelName\":\"\u6C47\u76C8\u8D22\u7ECF\",\"liveSubChannelName\":\"\u6C47\u76C8\u8D22\u7ECF\",\"livePopulation\":3,\"ipUsers\":3,\"liveTime\":76,\"status\":6,\"textZoneA\":\"\u98CE\u8DA3\u5E7D\u9ED8\u3001\u6293\u4F4F\u91CD\u70B9\u3001\u72D9\u51FB\u884C\u60C5\",\"isTextZoonHDefaultCover\":false,\"coverStatus\":0,\"level\":1,\"headUrlPathStatus\":6,\"liveThumb\":\"http:\/\/screenshot.dwstatic.com\/yysnapshot\/180457be4c4ea1f899a47cb27a7bd1221e74b9110c58\",\"contractSid\":51866446,\"contractSidAlias\":51866446,\"pageTagId\":0,\"isFinTypeGold\":true,\"firstLiveTime\":1508947200000,\"isPush\":true,\"fansCount\":0,\"isApplyLive\":\"yes\",\"realName\":\"a2RqcW1qRFVHblpZcXZ1bLmQYhSYVrGGbwI3x5Q6Xcw=\"}"  
    };
    var config = seajs.config({
        base: 'http://www.zhiniu8.com/assets/js',
        alias: {  
            "vue":location.protocol + "//cdn.bootcss.com/vue/2.3.3/vue.min.js", 
            "wx" :location.protocol + "//res.wx.qq.com/open/js/jweixin-1.1.0.js"
        }
    });
    seajs.use(["pages/h5live_vue"]);
</script>
</body>
</html>