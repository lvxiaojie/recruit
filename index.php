<?php
require_once "jssdk.php";
$jssdk = new JSSDK("wx68d1d618991c5862", "03612a9a3798d7813517a6c0773c7cc5");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>招贤纳士|连锁口腔品牌——合肥贝杰口腔医院诚聘英才!</title>
    <link href="https://cdn.bootcss.com/fullPage.js/2.9.4/jquery.fullpage.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdn.bootcss.com/fullPage.js/2.9.4/jquery.fullpage.js"></script>
    <script type="text/javascript">
        var deleteLog = false;
        $(document).ready(function() {
            $('#fullpage').fullpage({
                sectionsColor: ['#009cb2', '#0c7ac0', '#e35050', 'whitesmoke', '#ccddff'],
                anchors: ['1st', '2st', '3st', '4st', '5st','6st','7st','8st'],
                css3: true,
                scrollingSpeed: 700,
                onLeave: function(index, nextIndex, direction){

                    if(index == 1){
                    }
                    if(deleteLog){
                        $('#callbacksDiv').html('');
                    }
                    $('#callbacksDiv').append('<p>onLeave - index:' + index + ' nextIndex:' + nextIndex + ' direction:' + direction + '</p>')
                },
                onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex){
                    if(deleteLog){
                        $('#callbacksDiv').html('');
                    }
                    $('#callbacksDiv').append('<p>onSlideLeave - anchorLink:' + anchorLink + " index:" + index + " slideIndex:" + slideIndex +" direction:" + direction + " nextSlideIndex:" + nextSlideIndex + '</p>');
                },
                afterRender: function(){
                    $('#callbacksDiv').append('<p>afterRender</p>');
                },
                afterResize: function(){
                    $('#callbacksDiv').append('<p>afterResize</p>');
                },
                afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex){
                    $('#callbacksDiv').append('<p>afterSlideLoad - anchorLink:' + anchorLink + " index:" + index + " slideAnchor:" + slideAnchor +" slideIndex:" + slideIndex + '</p>');
                    deleteLog = true;
                },
                afterLoad: function(anchorLink, index){
                    $('#callbacksDiv').append('<p>afterLoad - anchorLink:' + anchorLink + " index:" + index + '</p>');
                    deleteLog = true;
                }

            });

        });
    </script>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <script>
        /*
         * 注意：
         * 1. 所有的JS接口只能在公众号绑定的域名下调用，公众号开发者需要先登录微信公众平台进入“公众号设置”的“功能设置”里填写“JS接口安全域名”。
         * 2. 如果发现在 Android 不能分享自定义内容，请到官网下载最新的包覆盖安装，Android 自定义分享接口需升级至 6.0.2.58 版本及以上。
         * 3. 常见问题及完整 JS-SDK 文档地址：http://mp.weixin.qq.com/wiki/7/aaa137b55fb2e0456bf8dd9148dd613f.html
         *
         * 开发中遇到问题详见文档“附录5-常见错误及解决办法”解决，如仍未能解决可通过以下渠道反馈：
         * 邮箱地址：weixin-open@qq.com
         * 邮件主题：【微信JS-SDK反馈】具体问题
         * 邮件内容说明：用简明的语言描述问题所在，并交代清楚遇到该问题的场景，可附上截屏图片，微信团队会尽快处理你的反馈。
         */
        wx.config({
            debug: false,
            appId: '<?php echo $signPackage["appId"];?>',
            timestamp: <?php echo $signPackage["timestamp"];?>,
            nonceStr: '<?php echo $signPackage["nonceStr"];?>',
            signature: '<?php echo $signPackage["signature"];?>',
            jsApiList: [
                'checkJsApi',
                'onMenuShareTimeline',
                'onMenuShareAppMessage',
                // 所有要调用的 API 都要加到这个列表中
            ]
        });
        wx.ready(function () {
            // 在这里调用 API

            wx.checkJsApi({
                jsApiList: ['chooseImage'], // 需要检测的JS接口列表，所有JS接口列表见附录2,
                success: function(res) {
                    // 以键值对的形式返回，可用的api值true，不可用为false
                    // 如：{"checkResult":{"chooseImage":true},"errMsg":"checkJsApi:ok"}
                }
            });

            wx.onMenuShareTimeline({
                title: '招贤纳士|连锁口腔品牌——合肥贝杰口腔医院诚聘英才!', // 分享标题
                link: 'http://www.bjoral.com/zhaopin/', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
                imgUrl: 'http://www.bjoral.com/zhaopin/img/zhaopin.jpg', // 分享图标
                success: function () {
                    // 用户确认分享后执行的回调函数
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                }
            });

            wx.onMenuShareAppMessage({
                title: '招贤纳士|连锁口腔品牌——合肥贝杰口腔医院诚聘英才!', // 分享标题
                desc: '青春正好,不拼易老,趁着年轻,加入贝杰吧！贝杰口腔医院面向社会公开诚聘英才。合肥贝杰口腔医院是安徽省卫计委批准设立的二级口腔专科医院、医保定点单位。医院配备了国内外先进的口腔专业设备和资深口腔专家团队，并与北大附属口腔医院、韩国首尔大学牙科学院等权威机构建立了人才交流合作。成立三年来，温馨、舒适、专业的口腔诊疗服务得到了患者的广泛好评。为进一步方便广大患者就医，医院在政务新区、蜀山区、包河区、庐阳区将陆续开设分院.', // 分享描述
                link: 'http://www.bjoral.com/zhaopin/', // 分享链接，该链接域名或路径必须与当前页面对应的公众号JS安全域名一致
                imgUrl: 'http://www.bjoral.com/zhaopin/img/zhaopin.jpg', // 分享图标
                type: '', // 分享类型,music、video或link，不填默认为link
                dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
                success: function () {
                    // 用户确认分享后执行的回调函数
                },
                cancel: function () {
                    // 用户取消分享后执行的回调函数
                }
            });
        });

        wx.error(function(res){
            // config信息验证失败会执行error函数，如签名过期导致验证失败，具体错误信息可以打开config的debug模式查看，也可以在返回的res参数中查看，对于SPA可以在这里更新签名。
        });




    </script>
</head>
<body>

<!-- <div style="position:fixed;top:50px;left:50px;color:white;z-index:999;" id="callbacksDiv"></div> -->
<span id="musicControl" >
        <a id="mc_play" class="stop" onclick="play_music();">

            <audio src="http://www.bjoral.com/zhaopin/TimeWillTell.mp3" id="musicfx" loop="loop" autoplay="autoplay" preload>

            </audio>
        </a>
    </span>
<div id="fullpage">

    <div class="section " id="section0">

        <!-- <img src="images/section0_bg.png" alt="" class="section0_bg"> -->
        <div class="section0_title_bg">
            <div class="section0_title">
                <img src="images/section0_top_left.png" alt="" class="section0_top_Left">
                <img src="images/section0_top_right.png" alt="" class="section0_top_right">
                <img src="images/section0_left_bottom.png" alt="" class="section0_left_bottom">
                <img src="images/section0_right_bottom.png" alt="" class="section0_right_bottom">
                <img src="images/section0_right_top.png" alt="" class="section0_right_top">
                <img src="images/section0_fly.png" alt="" class="section0_fly">
            </div>

        </div>
        <div class="section0_content"></div>
        <img src="images/section0_bottom.png" alt="" class="section0_bottom">
        <!-- <div class="section0_bottom"></div> -->

    </div>
    <div class="section" id="section1">

        <div class="section1_pic"></div>
        <div class="section1_content">
            <div class="section1_title"></div>
            <div class="section1_intro">
                <img src="images/section1_kind1.png" alt="">
                <img src="images/section1_kind2.png" alt="">
            </div>
            <div class="clear"></div>
            <div class="section1_world">
                合肥贝杰口腔医院是安徽省卫计委批准设立的二级口腔专科医院、医保定点单位。医院配备了国内外先进的口腔专业设备和资深口腔专家团队，并与北大附属口腔医院、韩国首尔大学牙科学院等权威机构建立了人才交流合作。成立三年来，温馨、舒适、专业的口腔诊疗服务得到了患者的广泛好评。为进一步方便广大患者就医，医院在政务新区设立了贝杰分院并将于年底正式开诊。现面向社会公开诚聘各类英才，青春正好，不拼易老，趁年轻，加入贝杰吧！
            </div>
        </div>
    </div>
    <div class="section" id="section2">
        <div class="section2_title"></div>
        <div class="section2_content">
            <img src="images/section2_content.png" alt="" class="section2_content">
            <img src="images/section2_fuli.png" alt="" class="section2_fuli">
            <img src="images/section2_tigong.png" alt="" class="section2_tigong">
        </div>
        <div class="section2_kind_wrap">
<!--            <img src="images/section2_kind1.png" alt="" class="section2_kind1 section2_kind">-->
            <img src="images/section2_kind2.png" alt="" class="section2_kind2 section2_kind">
            <img src="images/section2_kind3.png" alt="" class="section2_kind3 section2_kind">
            <img src="images/section2_kind4.png" alt="" class="section2_kind4 section2_kind">
            <img src="images/section2_kind5.png" alt="" class="section2_kind5 section2_kind">
            <img src="images/section2_kind6.png" alt="" class="section2_kind6 section2_kind">
            <img src="images/section2_kind7.png" alt="" class="section2_kind7 section2_kind">
        </div>
    </div>
    <div class="section" id="section3">
        <div class="section3_bg"></div>
        <div class="section3_title"></div>
        <div class="section3_kinds_wrap">
            <img src="images/section3_kind1.png" alt="" class="section3_kind1">
            <img src="images/section3_kind2.png" alt="" class="section3_kind2">
            <!-- <div class="clear"></div> -->
            <img src="images/section3_kind3.png" alt="" class="section3_kind3">
            <img src="images/section3_kind4.png" alt="" class="section3_kind4">
        </div>
        <div class="clear"></div>
        <div class="section3_content">
            <div class="section3_content_white"></div>
        </div>
    </div>
    <div class="section" id="section4">
        <div class="section4_pic_wrap">
            <img src="images/section4_pic.png" alt="" class="section4_pic">
        </div>
        <div class="section4_title_wrap">
            <img src="images/section4_title.png" alt="" class="section4_title">
        </div>
        <div class="section4_content_wrap">
            <img src="images/section4_sub.png" alt="" class="section4_sub">
            <img src="images/section4_world.png" alt="" class="section4_world">
            <img src="images/section4_bottom.png" alt="" class="section4_bottom">
        </div>
    </div>
    <div class="section" id="section5-1" style="background-color: #098ce0">
        <div class="section5_title_wrap">
            <img src="images/section5_title.png" alt="" class="section5_title">
        </div>
        <div class="section5_content_wrap">
            <img src="images/manage_title.png" alt="" class="section5_sub section5_kind"/>
            <img src="images/manage_content.png" alt="" class="section5_content section5_kind"/>
            <img src="images/manage_bottom.png" alt="" class="section5_bottom section5_kind"/>
        </div>
    </div>
    <div class="section" id="section5">
        <div class="section5_title_wrap">
            <img src="images/section5_title.png" alt="" class="section5_title">
        </div>
        <div class="section5_content_wrap">
            <img src="images/section5_sub.png" alt="" class="section5_sub section5_kind"/>
            <img src="images/section5_content.png" alt="" class="section5_content section5_kind"/>
            <img src="images/section5_bottom.png" alt="" class="section5_bottom section5_kind"/>
        </div>
    </div>
    <div class="section" id="section6">
        <div class="section6_title_wrap">
            <img src="images/section6_title.png" alt="" class="section6_title">
        </div>
        <div class="section6_content">
            <img src="images/section6_content.png" alt="" class="section6_content_pic"/>
            <div class="section6_contact">
                <a href="tel:18555689175">联系电话：18555689175</a>
                <a href="mailto:3465234182@qq.com">邮箱：3465234182@qq.com</a>
            </div>
            <div class="section6_footer"></div>
        </div>


    </div>
</div>
<script>
    
    $(function() {
        var ie6 = window.ActiveXObject&&!window.XMLHttpRequest;
        var Slider = function(){

            function slideTo(idx) {

            }

            var timer;
            function startAutoPlay() {
                stop();
                // timer = setTimeout(Slider.slideNext, 5000);
            }
            function stop() {
                timer && clearTimeout(timer);
            }

            return {
                slideTo: slideTo,
                slidePrev: function() {
                    if (current == 0) return;
                    slideTo(current - 1);
                },
                slideNext: function() {
                    slideTo(current + 1);
                },
                startAutoPlay: startAutoPlay,
                stop: stop
            }
        }();

        if (!ie6) {
            Slider.startAutoPlay();
        }


        $('#section1').bind("touchmove",function(e){

            $('.section1 .bg12_rocket').css('top', 0 - window.innerHeight);
            $('.bg12_rocket_light').css('top', 0 - window.innerHeight);

        })
        $('.section1').click(function(e) {
            $('.section1 .bg12_rocket').css('top', 0 - window.innerHeight);
            $('.bg12_rocket_light').css('top', 0 - window.innerHeight);
            setTimeout(function() {
                $.fn.fullpage.moveTo(2);
            }, 1000)
        });
        $('.section1').click(function(e) {
            $('.section1 .bg12_rocket').css('top', 0 - window.innerHeight);
            $('.bg12_rocket_light').css('top', 0 - window.innerHeight);
            setTimeout(function() {
                $.fn.fullpage.moveTo(2);
            }, 1000)
        });
    })



    function play_music(){
        if ($('#mc_play').hasClass('on')){
            $('#mc_play audio').get(0).pause();
            $('#mc_play').attr('class','stop');
        }else{
            $('#mc_play audio').get(0).play();
            $('#mc_play').attr('class','on');
        }
        $('#music_play_filter').hide();
        event.stopPropagation(); //阻止冒泡
    }
    function just_play(id){
        $('#mc_play audio').get(0).play();
        $('#mc_play').attr('class','on');
        if (typeof(id)!='undefined'){
            $('#music_play_filter').hide();
        }
        event.stopPropagation(); //阻止冒泡
    }
    function is_weixn(){
        return false;
        var ua = navigator.userAgent.toLowerCase();
        if(ua.match(/MicroMessenger/i)=="micromessenger") {
            return true;
        } else {
            return false;
        }
    }
    window.onload=function(){
        if (!is_weixn()){
            just_play();
        }
    }


    document.addEventListener('DOMContentLoaded', function () {
        function audioAutoPlay() {
            var audio = document.getElementById('musicfx');
            audio.play();
            document.addEventListener("WeixinJSBridgeReady", function () {
                audio.play();
            }, false);
        }
        audioAutoPlay();
    });


</script>

</body>




</html>

        