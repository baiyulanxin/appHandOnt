<?php /* Smarty version Smarty-3.1.18, created on 2018-02-03 13:00:23
         compiled from "content\themes\default\app_ipa.html" */ ?>
<?php /*%%SmartyHeaderCode:30095a75b26720c706-86055739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef636bdc573057b9f70c241aa5c160ae52ee7c68' => 
    array (
      0 => 'content\\themes\\default\\app_ipa.html',
      1 => 1461809031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30095a75b26720c706-86055739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tit' => 0,
    'zzurl' => 0,
    'sskey' => 0,
    'stype' => 0,
    'fname' => 0,
    'sstime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5a75b2673dfdd7_67291215',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a75b2673dfdd7_67291215')) {function content_5a75b2673dfdd7_67291215($_smarty_tpl) {?><!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="zh-CN" class="no-js">
<!--<![endif]-->
<head>
    <meta charset="UTF-8">
    <meta name="csrf-param" content="_csrf">
    <meta name="csrf-token" content="...==">
    <title>定制程序 - <?php echo $_smarty_tpl->tpl_vars['tit']->value;?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="stylesheet" href="/wap/css/bootstrap.min.css">

    <link rel="stylesheet" href="/wap/css/animate.css">
    <link rel="stylesheet" href="/wap/css/font-awesome.min.css">
    <link rel="stylesheet" href="/wap/css/slick.css">
    <link rel="stylesheet" href="/wap/css/settings.css">

    <link rel="stylesheet" href="/wap/css/styles.css?v=0.09">

    <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="/wap/js/modernizr.custom.32033.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="http://pre.im/css/custom.css?v=0.09">

</head>

<body>
<section class="section1" style="padding-bottom:0px;" id="pos_inherit">
    <!--当设备为pc机时显示的内容-->
    <div class="logo0622">
        <img src="/content/images/ipa.png">
    </div>
    <p style="text-align:center" class="cy_app_name">定制程序</p>

                <div class="fixed-download">
                            <div data-easing="Power4.easeOut" data-start="1700" data-speed="1000" data-voffset="85" data-hoffset="0" data-y="center" data-x="550" class="tp-caption sfb hidden-xs start" style="min-height: 0px; min-width: 0px; line-height: 20px; border-width: 0px; margin: 0px; padding: 0px; letter-spacing: 0px; font-size: 14px; left: 676.5px; top: 281.5px; visibility: visible; opacity: 1; transform: translate3d(0px, 0px, 0px);">
                    <input type="hidden" id="ios_tips" value="0">
                                    </div>

                    </div>
        <div class="qr tada">
            <div id="qrcodeImg" class="qrwarp" title="">
                <img alt="Scan me!" style="display: block;" src="http://qr.liantu.com/api.php?text=<?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
ipa.php?k=<?php echo $_smarty_tpl->tpl_vars['sskey']->value;?>
&w=200">
            </div>
        </div>
        <div class="tips tada">
            <p class="p1">扫描二维码下载</p>
            <div class="divider">或</div>
            <p class="p2">使用手机浏览器打开下面网址:</p>
            <p class="web_link"><?php echo $_smarty_tpl->tpl_vars['zzurl']->value;?>
ipa.php?k=<?php echo $_smarty_tpl->tpl_vars['sskey']->value;?>
</p>
        </div>
<script src="/includes/download.php?sskey=<?php echo $_smarty_tpl->tpl_vars['sskey']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['stype']->value;?>
" language="JavaScript"></script>

        <!--当设备为移动端设备时显示的内容-->
        <div class="phone_show">
         <p class="p2">签名：<?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
</p>
            <p class="p3">更新于 <?php echo $_smarty_tpl->tpl_vars['sstime']->value;?>
 </p>
            <div class="load_fixed">
                                          <a id="down2" href="itms-services://?action=download-manifest&amp;url=https://bbs.sasadown.cn/my/x<?php echo $_smarty_tpl->tpl_vars['sskey']->value;?>
.plist" class="btn btn-primary inverse btn-lg">
                        <i class="fa fa-apple"></i>
                                        下载安装
                </a>
                <p class="p3" style="display:none" id="down_tip"></p>
                <div id="down_loading" class="fixing" style="display: none;">
                    <i class="fa fa-circle-o-notch fa-4x fa-spin"></i>
                </div>
                <p id="install_tips" style="display: none;" class="home_key">正在安装，请按 Home 键到桌面查看</p>

            </div>
        </div>
        <!--页面下拉提示-->
        <div class="next-page">
            <p>内测服务由 <a href="/" style="color: white;text-decoration: underline;" target="_blank">凯易科技</a> 提供</p>
            <div class="next-page-logo"><img class="array" src="/wap/images/xiala.png"></div>
        </div>
        <!--app-banner-->
            <!--ios9提示结构-->

</section>
<!--ios9提示结构-->
<div class="pos_all" style="display: none">
    <div class="ios9_tips">
        <div class="ios9_tips_content">
            <a class="close_ios9" href="javascript:;"><img src="/wap/images/close.png?v=2"></a>
            <p class="p1">iOS 9 中需要设置才能运行这个 APP</p>
            <p class="p2">向下滑动查看教程</p>
            <p class="p3">打开系统设置中的描述文件</p>
            <a id="down2" href="prefs:root=General&amp;path=ManagedConfigurationList" class="btn btn-primary inverse btn-lg">点击打开</a>
            <p class="p3">选择对应的企业</p>
            <img class="img3" src="/wap/images/ios9_guide/u20.png">
            <p class="p3">点击中间的蓝色文字信任该企业</p>
            <img class="img3" src="/wap/images/ios9_guide/u24.png">
            <p class="p3">在弹出的提示框中点击"信任"</p>
            <img class="img4" src="/wap/images/ios9_guide/u28.png">
            <p class="go_desk">可以回到桌面打开应用体验啦</p>
        </div>
    </div>
</div>
<!--ios9提示结构结束-->
    <section class="section2" style="padding-bottom:0px;">
        <div class="container cy_container0624">
            <div class="title"><?php echo $_smarty_tpl->tpl_vars['fname']->value;?>
</div>
            <div class="section2_content">
                <p class="p2" style="width:100%; text-align:center;"><span>定制程序</span> <span>更新于: <?php echo $_smarty_tpl->tpl_vars['sstime']->value;?>
  </span></p>


<!--更新日志-->

<!--介绍-->
<!--安卓截图-->

            </div>
        </div>
    </section>
    </div>

<footer class="finial_footer" style=" width:100%; height:40px; line-height:40px;">
    <div class="rights" style="margin-top: 0px; text-align: center">
        <p><a href="/">内测分发，用<strong>sofeet</strong></a> </p>
    </div>
</footer>

<link href="/wap/css/app.css?v=0.12" rel="stylesheet" type="text/css" >
<div id="weixin" style="display: none">
    <div class="click_opacity"></div>
    <div class="to_btn">
        <span class="span1"><img src="/wap/images/click_btn.png"></span>
        <span class="span2"><em>1</em> 点击右上角<img src="/wap/images/menu.png">打开菜单</span>
        <span class="span2"><em>2</em> 选择<img src="/wap/images/safari.png">用Safari打开下载</span>
    </div>
</div>
<div id="weixin_an" style="display: none">
    <div class="click_opacity"></div>
    <div class="to_btn">
        <span class="span1"><img src="/wap/images/click_btn.png"></span>
        <span class="span2"><em>1</em> 点击右上角<img src="/wap/images/menu_android.png">打开菜单</span>
        <span class="span2 android_open"><em>2</em> 选择<img src="/wap/images/android.png"></span>
    </div>
</div>
<script src="/wap/js/jquery-1.11.1.min.js"></script>
<script src="/wap/js/jquery.cookie.js"></script>
<script src="/wap/js/slick.min.js"></script>
<script src="/wap/js/waypoints.min.js"></script>
<script src="/wap/js/placeholdem.min.js"></script>
<script src="/wap/js/jquery.themepunch.plugins.min.js"></script>
<script src="/wap/js/jquery.themepunch.revolution.min.js"></script>
<script src="/wap/js/scripts.js"></script>
    <script>

        $(function(){
            var browser = {
                versions: function() {
                    var u = navigator.userAgent, app = navigator.appVersion;
                    return {
                        trident: u.indexOf('Trident') > -1,
                        presto: u.indexOf('Presto') > -1,
                        webKit: u.indexOf('AppleWebKit') > -1,
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/),
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
                        android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
                        iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1,
                        iPad: u.indexOf('iPad') > -1,
                        webApp: u.indexOf('Safari') == -1
                    };
                }()
            }
            if(is_weixin())
            {
                if(browser.versions.ios || browser.versions.iPhone || browser.versions.iPad){
                    $('#weixin').show();
                }else{
                    $('#weixin_an').show();
                }
            }
            var os_type =  2;
            if(browser.versions.ios || browser.versions.iPhone || browser.versions.iPad){
                if(os_type == 2){
                    $('#down2').show();
                }else{
                    $('#down2').hide();
                    $('#down_tip').show().html('请使用安卓设备安装');
                }
            }else if(browser.versions.android){
                if(os_type == 1){
                    $('#down2').show();
                }else{
                    $('#down2').hide();
                    $('#down_tip').show().html('请使用IOS设备安装');
                }
            }
        })
        function ajaxTj()
        {
            var browser = {
                versions: function() {
                    var u = navigator.userAgent, app = navigator.appVersion;
                    return {
                        trident: u.indexOf('Trident') > -1,
                        presto: u.indexOf('Presto') > -1,
                        webKit: u.indexOf('AppleWebKit') > -1,
                        gecko: u.indexOf('Gecko') > -1 && u.indexOf('KHTML') == -1,
                        mobile: !!u.match(/AppleWebKit.*Mobile.*/) || !!u.match(/AppleWebKit/),
                        ios: !!u.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/),
                        android: u.indexOf('Android') > -1 || u.indexOf('Linux') > -1,
                        iPhone: u.indexOf('iPhone') > -1 || u.indexOf('Mac') > -1,
                        iPad: u.indexOf('iPad') > -1,
                        webApp: u.indexOf('Safari') == -1
                    };
                }()
            }

            var tip_val = $('#ios_tips').val();
            if(tip_val ==1){
                $('.pos_all').css('display','block');
                $('#pos_inherit').addClass('pos_inherit');

            }
            if(!is_weixin())
            {
                                if(browser.versions.ios || browser.versions.iPhone || browser.versions.iPad){
                    $("#down2").hide();
                    $("#down_loading").show().delay(5000).fadeOut(100);
                    $("#install_tips").hide().delay(5000).fadeIn(200);
                }
                            }

            $.ajax({
                type: "GET",
                url:'/app/tj',
                data: {package_key:'98d0f7fc5457ddb0777534f47adb9119'},
                success: function(msg){
                    //console.log(msg);
                    if(msg == 1)
                    {
                        $('#down1').attr('href','#');
                        $("#down1").attr("target", "");
                        $('#down2').attr('href','');
                        $("#down2").attr("target", "#");
                    }
                }
            });
        }
        function is_weixin(){
            var ua = navigator.userAgent.toLowerCase();
            if(ua.match(/MicroMessenger/i)=="micromessenger") {
                return true;
            } else {
                return false;
            }
        }

        $(function() {
            $('.close_ios9').click(function(){
                $('.pos_all').css('display','none');
                $('#pos_inherit').removeClass('pos_inherit');
            });

            $("#btnFk").on("click", function() {
                $('#btncontact').css('display', 'block');
                $('#btnFk').css('display', 'none');
                $("#feedback_content_box").slideDown(600);
                $("#feedback_content_box").animate({top: 0}, 600);
                $("#feedback_content_box").focus();
            });



            $("#submit").on("click", function() {
                var contact = $('#btncontact').val().trim();
                var content = $('textarea').val().trim();
                var app_key = "3c4f68eaf91d14a5b16a9129f0ffba0f";
                var app_name = "定转爆粉";
                var url = '/feedback/add';

                if(!content || content == '反馈内容'){

                    $("#content_tips").css({display:'block'});
                    return false;
                }

                $('#toggle').css('display', 'none');
                $('#content_tips').css('display', 'none');
                $("#feedback_content_box").slideUp(600);
                $("#feedback_content_box").animate({ top: 20 }, 600);


                if( !contact || contact == 'Email/QQ/微信/电话' ){
                    contact = '匿名';
                }

                $.post(url,{contact:contact,content:content,app_key:app_key,app_name:app_name},function(msg){
                    if(msg){
                        $('#for_tips,textarea,#btnFk,#submit').css({display:'none'})
                    }else{
                        $('.feedback_tip').text('提交失败，请 <a href="/site/contact">吐槽</a>');
                    }
                    $('.feedback_tip').css({display:'block'})
                },'json')
            });
        })
    </script>


<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script>
    var wxData = {
        "imgUrl": 'http://fs09.testin.cn/ctf/GXFFFI9IRkZGSS90ZXN0aW5QcmUvMjAxNi8wMy8xMC8xOC80MjA3MzYyMy9hZjU3YTA3ejdTeg==.png',//图片
        "link": 'http://pre.im/pSee',//分享链接
        "title" : '定转爆粉 - Pre.im',//分享到微信的标题
        "title2": '定转爆粉 - Pre.im',//分享到qq的标题
        "desc": ''
    };
    wx.config({
        debug: false,
        appId: 'wx65db44acf39a5516',
        timestamp: 1457794997,
        nonceStr: 'SWyKlWlD6r6ABawQ',
        signature: '203edacb9332f59df96064e8a73a2cc1cdae71e6',
        jsApiList: [
            'onMenuShareTimeline',
            'onMenuShareAppMessage',
            'onMenuShareQQ',
            'onMenuShareWeibo',
            'onMenuShareQZone',
        ]
    });

    wx.ready(function () {
        /*分享到朋友圈*/
        wx.onMenuShareTimeline({
            title: wxData['title'], // 分享标题
            link: wxData['link'], // 分享链接
            imgUrl: wxData['imgUrl'], // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
        /*分享给朋友*/
        wx.onMenuShareAppMessage({
            title: wxData['title'], // 分享标题
            desc: wxData['desc'], // 分享描述
            link: wxData['link'], // 分享链接
            imgUrl: wxData['imgUrl'], // 分享图标
            type: '', // 分享类型,music、video或link，不填默认为link
            dataUrl: '', // 如果type是music或video，则要提供数据链接，默认为空
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
        /*分享到qq*/
        wx.onMenuShareQQ({
            title: wxData['title2'], // 分享标题
            desc: wxData['desc'], // 分享描述
            link: wxData['link'], // 分享链接
            imgUrl: wxData['imgUrl'], // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
        /*分享到微博*/
        wx.onMenuShareWeibo({
            title: wxData['title2'], // 分享标题
            desc: wxData['desc'], // 分享描述
            link: wxData['link'], // 分享链接
            imgUrl: wxData['imgUrl'], // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
        /*分享到空间*/
        wx.onMenuShareQZone({
            title: wxData['title2'], // 分享标题
            desc: wxData['desc'], // 分享描述
            link: wxData['link'], // 分享链接
            imgUrl: wxData['imgUrl'], // 分享图标
            success: function () {
                // 用户确认分享后执行的回调函数
            },
            cancel: function () {
                // 用户取消分享后执行的回调函数
            }
        });
    });

    $(document).ready(function(){

        $('a.v-banner-link').click(function(){
            if ( ga && $.isFunction(ga)){
                ga( 'send', 'event', 'Pre-下载页推广', '来源应用: ', '' ); //$appprefixForBanner
                console.log('banner-link: 1');
            }
        });
        $('a.v-banner-close').click(function(){
            $('div.app-banner').hide();
            return false;
        });
            });

</script>
<script>
    window.onscroll = function(){
        var screenH = $(window).height();
        var t = document.documentElement.scrollTop || document.body.scrollTop;
//        var open=1;
        if( t > 15 && open!=0) {
//      alert(11)
            $(".next-page").css("display","none");
            open = 0;
        }
        if(t == 0){
            open =1;
            $(".next-page").css("display","block");
        }
    }
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-70408876-3', 'auto');
    ga('send', 'pageview');

</script>
</body></html><?php }} ?>
