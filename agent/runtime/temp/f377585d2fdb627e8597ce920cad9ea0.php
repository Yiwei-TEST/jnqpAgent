<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:76:"D:\phpstudy_pro\WWW\agent\public/../application/index\view\index\add_agent.html";i:1563270652;s:64:"D:\phpstudy_pro\WWW\agent\application\index\view\public\nav.html";i:1607503444;s:65:"D:\phpstudy_pro\WWW\agent\application\index\view\public\nav1.html";i:1607503781;}*/ ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=414,user-scalable=no">
	<title>TG</title>
	<link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
	<link rel="stylesheet" href="/static/index/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="/static/index/css/normalize.css">
	<link rel="stylesheet" href="/static/index/css/tab_style.css">
	<link rel="stylesheet" href="/static/index/css/side.css">
	<link rel="stylesheet" href="/static/index/css/Main_Style.css">
	<link rel="stylesheet" href="/static/index/css/marketlist.css">
	<link rel="stylesheet" href="/static/index/css/FIFA_marketlist.css">
	<link rel="stylesheet" href="/static/index/css/ex.css">
	<link rel="stylesheet" href="/static/index/css/my_info_chg.css">
	<link rel="stylesheet" href="/static/index/css/switch.css">
	<link rel="stylesheet" href="/static/index/css/downloadApp.css">
		<!--theme-->
	<link rel="stylesheet" href="/static/index/css/theme/APPui.css">
	<script src="/static/index/js/jquery-3.2.1.min.js"></script>
	<script src="/static/index/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="sidy" onclick="siidyy();">
		<nav data-position="left" data-size="65%" data-fx="slide_overlay" class="sidy__panel" id="panel-1">

    <div class="menu_head_bg">
        <div class="menu_head_title" id="menu_head_title"></div>
    </div>
    <div class="menu_list">
        <ul>
            <li onclick="location.href='/index/index/market'">
                <div class="market_list_icon"></div>
                <div class="menu_text">市场列表</div>
                <div class="menu_arrow"></div>
            </li>
            <li onclick="location.href='/index/index/orderinfo'">
                <div class="trade_detail_icon"></div>
                <div class="menu_text">交易明细</div>
                <div class="menu_arrow"></div>
            </li>
            <li onclick="location.href='/index/index/history'">
                <div class="history_icon"></div>
                <div class="menu_text">历史帐务</div>
                <div class="menu_arrow"></div>
            </li>
            <li onclick="window.open('http://bf.spbo1.com', '_blank')">
                <div class="nowscore_icon_2018"></div>
                <div class="menu_text">即时比分</div>
                <div class="menu_arrow"></div>
            </li>
            <li onclick="location.href='/index/index/gameresult'">
                <div class="game_result_icon"></div>
                <div class="menu_text">赛事结果</div>
                <div class="menu_arrow"></div>
            </li>
        </ul>
    </div>
    <div class="menu_block_group">
        <div class="menu_block">
            <div class="new_icon">NEW</div>
            <div onclick="location.href='/index/index/deposits'" class="menu_block_outline01">
                <div class="menu_wd_icon"></div>
                <div class="menu_block_text">充值提领</div>
            </div>
        </div>
        <!--<div class="menu_block">-->
            <!--<div id="modify111" name="modify111" class="menu_block_outline02">-->
                <!--<div class="menu_live_icon"></div>-->
                <!--<div class="menu_block_text">会员互转</div>-->
            <!--</div>-->
        <!--</div>-->

        <div class="menu_block">
            <div onclick="location.href='/index/index/service'" class="menu_block_outline03">
                <div class="menu_service_icon"></div>
                <div class="menu_block_text">联络客服</div>
            </div>
        </div>
    </div>

    <div class="menu_list">
        <ul>
            <li onclick="location.href='/index/index/statistics'">
                <div class="menu_history_stat_icon"></div>
                <div class="menu_text">历史统计</div>
                <div class="menu_arrow"></div>
            </li>
            <li onclick="location.href='/index/index/rules'">
                <div class="menu_rules_icon"></div>
                <div class="menu_text">规则说明</div>
                <div class="menu_arrow"></div>
            </li>
            <li onclick="location.href='/index/index/help'">
                <div class="menu_help_icon"></div>
                <div class="menu_text">帮助中心</div>
                <div class="menu_arrow"></div>
            </li>
            <li onclick="window.open('http://f.tg333.net/index.html', '_blank')">
                <div class="menu_discuss_icon"></div>
                <div class="menu_text">讨论区</div>
                <div class="menu_arrow"></div>
            </li>
            <li onclick="location.href='/index/index/announce'">
                <div class="menu_announce_icon"></div>
                <div class="menu_text">公　告</div>
                <div class="menu_arrow"></div>
            </li>
            <li onclick="location.href='/index/index/memberlogout'">
                <div class="menu_logout_icon"></div>
                <div class="menu_text">登　出</div>
                <div class="menu_arrow"></div>
            </li>
        </ul>
    </div>
</nav>

<!--<div class="downloadApp">-->
    <!--<div class="row step_one">-->
        <!--<div class="col-xs-offset-1 col-xs-5"><button type="button" class="forAndriod" id="forAndriod">安卓下载</button></div>-->
        <!--<div class="col-xs-5"><button type="button" class="forIos" id="forIos">IOS下载</button></div>-->
    <!--</div>-->
    <!--<div class="step_two" id="andriod">-->
        <!--<div class="header">-->
            <!--<h2 class="downloadApp_title title_andriod">安卓下载</h2><button type="button" class="app_close"></button>-->
        <!--</div>-->
        <!--<div class="AppContent content_andriod">-->
            <!--<img class="QRcode QRcode_Android" src="/static/index/img/downloadApp/android.png" alt="download android app qrcode">-->
            <!--<img src="/static/index/img/downloadApp/index-white_Andrioid-flow_01.svg" alt="">-->
            <!--<p>步骤一<br>-->
                <!--下载QR Droid<br>扫码器</p>-->
            <!--<p>步骤二<br>-->
                <!--扫码进行下载<br>TG.apk</p>-->
            <!--<p>步骤三<br>-->
                <!--下载<br>apk Installer工具</p>-->
            <!--<img src="/static/index/img/downloadApp/index-white_Andrioid-flow_02.svg" alt="">-->
            <!--<p class="w">步骤四<br>-->
                <!--开启APK Installer工具<br>点选Install APKs项目<br>开启TG.apk档</p>-->
            <!--<p class="w">步骤五<br>-->
                <!--TG安装完成</p>-->
            <!--<span class="download_btn"><a href=" https://info.sxysrn.cn/AppInstallation/downloadQRCode.html">前往下载</a></span>-->
        <!--</div>-->
    <!--</div>-->
    <!--<div class="step_two" id="ios">-->
        <!--<div class="header">-->
            <!--<h2 class="downloadApp_title title_ios">IOS下载</h2><button type="button" class="app_close"></button>-->
        <!--</div>-->
        <!--<div class="AppContent content_ios">-->
            <!--<img class="QRcode QRcode_Ios" src="/static/index/img/downloadApp/ios.png" alt="download ios app qrcode">-->
            <!--<img src="/static/index/img/downloadApp/index-white_Ios-flow_01.svg" alt="">-->
            <!--<p>步骤一<br>-->
                <!--扫描QRcode 开启网页<br>点选前往下载按钮<br>接着点选上方<br>二维码讯息</p>-->
            <!--<p>步骤二<br>-->
                <!--点选安装<br>等待安装完成</p>-->
            <!--<p>步骤三<br>-->
                <!--点击设置进入通用<br>点选设备管理</p>-->

            <!--<img src="/static/index/img/downloadApp/index-white_Ios-flow_02.svg" alt="">-->
            <!--<p class="w">步骤四<br>-->
                <!--验证TG应用</p>-->
            <!--<p class="w">步骤五<br>-->
                <!--TG安装完成</p>-->
            <!--<span class="download_btn"><a href="https://info.sxysrn.cn/AppInstallation/iOSdownload.html">前往下载</a></span>-->
        <!--</div>-->
    <!--</div>-->
<!--</div>-->
<script>
    //会员互转
    $("#modify111").on('click', function() {
        $(".sidy").removeClass('sidy--opened');
        $.ajax({
            type: 'POST',
            url: 'pointc2c.html',
            //data: 'IncomeUser=' + username + '&amount=' + amount + '&withdrawpassword=' + passwd ,
            error: function(xhr) {
                alert('error');
                window.location.reload();
                return false;
            },
            beforeSend: function(response) {
                $("#Modal_coverchgall").html("<div class='Loading'></div>");
            },
            success: function(response) {
                $("#Modal_coverchgall").on('keyup', function() {
                    var _this = this;
                    //setTimeout(function(){
                    //_this.scrollIntoViewIfNeeded();
                    //},400);
                });
                $("#Modal_coverchgall").html(response);
            }
        });
        $("#Modal_coverchgall").css('display', 'block');
    });

</script>
		<div class="sidy__content">
<div class="scroll_top" id="return-to-top">
	<div class="scroll_top_bg"><i class="fa fa-chevron-up" aria-hidden="true"></i></div>
</div>
<div class="head_banner nav-bar navbar-fixed-top">
	<div data-panel="panel-1" class="sidy--to-open menu_btn">
		<span></span><br>
		<span></span><br>
		<span></span><br>
	</div>
	<div class="acc"><img class="top_user" src="/static/index/img/top_user.png" width="11" height="11">AMX141</div>
	<div class="money"><img class="top_coin" src="/static/index/img/top_coin.png" width="11" height="11"><span id="quotaView">0.00</span></div>
</div>
<div class="title_background">
	<button class="announcement_btn" onclick="titleannice()">公告<i class="fa fa-caret-right arrow_2" aria-hidden="true"></i></button>
	<div class="title_market">
		<marquee id="marqinfo" direction="left">
			<font style="color:#000000";>TG严正声明：本平台强调宣导禁止代操之行为，请会员勿将『提领密码』及『登入密码』提供给他人，如不听劝导而导致资金损失，TG一律不负相关责任！请谨慎保管自己的密码！TG关心您。</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000";>尊敬的会员您好：为维护会员帐号权益及安全，目前平台已更改会员帐号首充流水规则：自2019/5/26 00：00：00起进行会员帐号首充的会员，首充需达首充点数7倍流水才可进行提领，第二笔后的充值仅需达到3倍流水后即可进行提领，如造成您的不便，请您见谅，TG平台感谢您的支持</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:red";>尊敬的会员您好，平台目前已新增收款帐户关闭时间提示，如未依照显示指定收款帐户进行打款，即日起平台将不再提供查询充值服务。</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000";>尊贵的会员您好，翻本红包活动即将强势回归，详细的活动规则及时间，请您随时关注平台首页及公告，感谢广大会员对平台的支持</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:red";>07-01 / 17:55 [ 韩女联 ] 昌宁女足 v 华川KSPO女足 该场比赛为提前开赛，17:55后注单一律无效删单。</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:red";>06-30 / 22:55 [ 摩尔甲 ] 米萨米 v 斯芬图尔 该场比赛为提前开赛，22:55后注单一律无效删单。</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000";>会员公告：尊敬的会员您好，为让会员享有更好服务品质，平台目前已新增微信充值渠道供会员有更多元的选择进行充值，请广大会员多加利用，感谢您对平台的支持（提醒您：微信充值单笔为100-3000，仅能以100点数为一单位）</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000";>新增端午活动规则：会员如参加端午活动，在参与活动前若有提领，需将已提领金额连同参加活动金额入金后才符合参加资格。</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#A50404";>亲爱的会员您好，贴心提醒您：如发现有心人士散拨不实谣言，请会员勿轻易相信，如有任何疑问，请联系TG平台『线上客服、QQ客服』询问，感谢各位对平台的支持与厚爱，谢谢</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000";>尊敬的会员您好：目前平台会员微信正在进行重整，微信客服暂停服务，如有平台相关问题请您与线上客服联系谘询，谢谢</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000";>尊敬的会员您好，为确保会员权益，一张银行卡仅能绑定一个会员帐号，如造成您的不便，请您见谅，谢谢</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000";>尊贵的会员您好，为加强会员资安以及会员权益，TG平台即日起将延长会员『银行、财务材料变更』的审核期至48小时，为维护会员资金安全，审核时间平台将暂停该帐号的提款功能，造成您的不便，敬请见谅，如有相关问题，请您与线上客服联系，谢谢</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000";>尊敬的会员您好，因应近日支付宝提升安全机制，部分会员限制转账，如遇无法打款至本平台支付宝帐号，平台建议您使用支付宝打款至本平台网银账户，如有操作问题，请洽线上客服，谢谢</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000";>尊贵的会员您好，由于目前活动客服微信添加好友异常，翻本红包活动更改为线上客服申请，请各位会员留意，感谢您对本平台的支持，谢谢！！</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000";>TG平台提醒广大会员，近期出现许多黑网打著反波胆名义，进行资金盘吸金，或利用保证获利口号行欺诈等不法行为，TG平台在此除了严厉斥责不肖黑网，也恳请会员慎选平台，以免资金遭受损失。</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000";>近日发现有心人士假冒平台客服，主动提供账户要求会员进行充值，再次贴心提醒，平台客服绝不主动提供账户供会员充值，开放充值之账户依照平台显示为准，请会员当心留意，勿轻易相信。</font>
		</marquee>
	<div id="markettitle" name="markettitle">市场列表</div>
	</div>
	<div class="mail"><img src="/static/index/img/icon/mail.png" height="18" width="27" /><span onclick="document.location.href='announce.html'" class="message_number"></span></div>
</div>
			<div class="head_banner nav-bar navbar-fixed-top" id="topLink">
    <div data-panel="panel-1" class="sidy--to-open menu_btn" onclick="siidyy();" style="cursor: pointer;">
        <span></span><br>
        <span></span><br>
        <span></span><br>
    </div>
    <input type="hidden" id="memberQuota" name="memberQuota" value="0.00">
</div>
<div class="title_background ">
    <button class="announcement_btn" onclick="titleannice()">公告<i class="fa fa-caret-right arrow_2" aria-hidden="true"></i></button>
    <div class="title_market">
        <marquee id="marqinfo" direction="left">
            <font style="color:#000000" ;="">TG严正声明：本平台强调宣导禁止代操之行为，请会员勿将『提领密码』及『登入密码』提供给他人，如不听劝导而导致资金损失，TG一律不负相关责任！请谨慎保管自己的密码！TG关心您。</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000" ;="">尊敬的会员您好：为维护会员帐号权益及安全，目前平台已更改会员帐号首充流水规则：自2019/5/26 00：00：00起进行会员帐号首充的会员，首充需达首充点数7倍流水才可进行提领，第二笔后的充值仅需达到3倍流水后即可进行提领，如造成您的不便，请您见谅，TG平台感谢您的支持</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:red" ;="">尊敬的会员您好，平台目前已新增收款帐户关闭时间提示，如未依照显示指定收款帐户进行打款，即日起平台将不再提供查询充值服务。</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000" ;="">尊贵的会员您好，翻本红包活动即将强势回归，详细的活动规则及时间，请您随时关注平台首页及公告，感谢广大会员对平台的支持</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:red" ;="">07-01 / 17:55 [ 韩女联 ] 昌宁女足 v 华川KSPO女足 该场比赛为提前开赛，17:55后注单一律无效删单。</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:red" ;="">06-30 / 22:55 [ 摩尔甲 ] 米萨米 v 斯芬图尔 该场比赛为提前开赛，22:55后注单一律无效删单。</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000" ;="">会员公告：尊敬的会员您好，为让会员享有更好服务品质，平台目前已新增微信充值渠道供会员有更多元的选择进行充值，请广大会员多加利用，感谢您对平台的支持（提醒您：微信充值单笔为100-3000，仅能以100点数为一单位）</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000" ;="">新增端午活动规则：会员如参加端午活动，在参与活动前若有提领，需将已提领金额连同参加活动金额入金后才符合参加资格。</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#A50404" ;="">亲爱的会员您好，贴心提醒您：如发现有心人士散拨不实谣言，请会员勿轻易相信，如有任何疑问，请联系TG平台『线上客服、QQ客服』询问，感谢各位对平台的支持与厚爱，谢谢</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000" ;="">尊敬的会员您好：目前平台会员微信正在进行重整，微信客服暂停服务，如有平台相关问题请您与线上客服联系谘询，谢谢</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000" ;="">尊敬的会员您好，为确保会员权益，一张银行卡仅能绑定一个会员帐号，如造成您的不便，请您见谅，谢谢</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000" ;="">尊贵的会员您好，为加强会员资安以及会员权益，TG平台即日起将延长会员『银行、财务材料变更』的审核期至48小时，为维护会员资金安全，审核时间平台将暂停该帐号的提款功能，造成您的不便，敬请见谅，如有相关问题，请您与线上客服联系，谢谢</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000" ;="">尊敬的会员您好，因应近日支付宝提升安全机制，部分会员限制转账，如遇无法打款至本平台支付宝帐号，平台建议您使用支付宝打款至本平台网银账户，如有操作问题，请洽线上客服，谢谢</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000" ;="">尊贵的会员您好，由于目前活动客服微信添加好友异常，翻本红包活动更改为线上客服申请，请各位会员留意，感谢您对本平台的支持，谢谢！！</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000" ;="">TG平台提醒广大会员，近期出现许多黑网打著反波胆名义，进行资金盘吸金，或利用保证获利口号行欺诈等不法行为，TG平台在此除了严厉斥责不肖黑网，也恳请会员慎选平台，以免资金遭受损失。</font>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font style="color:#000000" ;="">近日发现有心人士假冒平台客服，主动提供账户要求会员进行充值，再次贴心提醒，平台客服绝不主动提供账户供会员充值，开放充值之账户依照平台显示为准，请会员当心留意，勿轻易相信。</font>
        </marquee>
        <div id="markettitle" name="markettitle">市场列表</div>
    </div>
    <div class="mail"><img src="/static/index/img/theme/APPui/mail.png" height="18" width="27"><span onclick="document.location.href='announce.html'" class="message_number"></span></div>
</div>
<div class="icon_bar navbar-fixed-bottom">
    <div class="icon_bar_row">
        <div class="icon_bar_cell">
            <a id="market_a" name="market_a" href="/index/index/market">
                <div class="icon_bar_marketlist"></div>
                <div class="icon_bar_text">添加代理</div>
            </a>
        </div>
        <div class="icon_bar_cell"><a id="orderinfo_a" name="orderinfo_a" href="/index/index/orderinfo"><div class="icon_bar_trade"></div><div class="icon_bar_text">成员列表</div></a></div>
        <div class="icon_bar_cell"><a class="active" href="/index/index/index"><div class="icon_bar_index"></div><div class="icon_bar_text">首　页</div></a></div>
        <div class="icon_bar_cell"><a name="history_a" id="history_a" href="/index/index/history"><div class="icon_bar_history"></div><div class="icon_bar_text">数据统计</div></a></div>
        <div class="icon_bar_cell"><a name="my_a" id="my_a" href="/index/index/my"><div class="icon_bar_my"></div><div class="icon_bar_text">我　的</div></a></div>
    </div>
    <div id="Modal_coverchgall" class="cover"></div>
</div>
<script
<script src="/static/index/js/vue.js"></script>
<script src="/static/index/js/axios.min.js"></script>
<script>
    var app = new Vue ({
        el: '#topLink',
        data: {
            username:null,
            money:0,
            timer:'',
        },
        methods:{
            getMoney() {
                _this = this;
                axios
                    .get('/home/index/getMoney')
                    .then(function (response) {
                        //_this.money = response.data;
                        //console.log(response.data.account);
                        _this.money = response.data.money;
                        _this.username = response.data.account;
                    })
                    .catch(function (error) { // 请求失败处理
                        console.log(error);
                    });
            }
        },
        mounted: function() {
            //_this = this;
            this.getMoney()
            this.timer = setInterval(this.getMoney,10000);
        },
        beforeDestroy() {
            _this = this;
            clearInterval( _this.timer);
        }
    })
</script>

<div id="Modal_coverchgall" class="cover"></div>
<section class="tabs">
	<input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
	<label for="tab-1" class="tab-label-1">全部<span><?php echo $sum2; ?></span></label>
	<input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
	<label for="tab-2" class="tab-label-2">今日<span><?php echo $sum; ?></span></label>
	<input id="tab-3" type="radio" name="radio-set" class="tab-selector-3" />
	<label for="tab-3" class="tab-label-3">明日<span><?php echo $sum1; ?></span></label>
	<!--<input id="tab-4" type="radio" name="radio-set" class="tab-selector-4" />-->
	<!--<label for="tab-4" class="tab-label-4"><i class="fa fa-shield shield" aria-hidden="true"></i>选择联盟</label>-->
	<div class="clear-shadow"></div>
	<div class="content">
		<div class="content-1">
			<ul class="game_list">
				<?php if(is_array($list2) || $list2 instanceof \think\Collection || $list2 instanceof \think\Paginator): if( count($list2)==0 ) : echo "" ;else: foreach($list2 as $key=>$v): ?>
				<li>
					<a href="/index/index/marketorder?id=<?php echo $v['id']; ?>"}>
						<div class="color_border"></div>
						<div class="time"><span><?php echo $v['start_time']; ?></span></div>
						<div class="game_name"><?php echo $v['title']; ?></div>
						<div class="arrow">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</div>
						<div class="game_team">
							<div class="game_team_row">
								<div class="game_team_cell cell01">【主】<?php echo $v['team_home']; ?></div>
								<div class="game_team_cell cell02">VS</div>
								<div class="game_team_cell cell03"><?php echo $v['team_guest']; ?></div>
							</div>
						</div>
					</a>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="content-2">
			<ul class="game_list">
				<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$v): ?>
				<li>
					<a href="/index/index/marketorder?id=<?php echo $v['id']; ?>"}>
						<div class="color_border"></div>
						<div class="time"><span><?php echo $v['start_time']; ?></span></div>
						<div class="game_name"><?php echo $v['title']; ?></div>
						<div class="arrow">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</div>
						<div class="game_team">
							<div class="game_team_row">
								<div class="game_team_cell cell01">【主】<?php echo $v['team_home']; ?></div>
								<div class="game_team_cell cell02">VS</div>
								<div class="game_team_cell cell03"><?php echo $v['team_guest']; ?></div>
							</div>
						</div>
					</a>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="content-3">
			<ul class="game_list">
				<?php if(is_array($list1) || $list1 instanceof \think\Collection || $list1 instanceof \think\Paginator): if( count($list1)==0 ) : echo "" ;else: foreach($list1 as $key=>$v): ?>
				<li>
					<a href="/index/index/marketorder?id=<?php echo $v['id']; ?>"}>
						<div class="color_border"></div>
						<div class="time"><span><?php echo $v['start_time']; ?></span></div>
						<div class="game_name"><?php echo $v['title']; ?></div>
						<div class="arrow">
							<i class="fa fa-caret-right" aria-hidden="true"></i>
						</div>
						<div class="game_team">
							<div class="game_team_row">
								<div class="game_team_cell cell01">【主】<?php echo $v['team_home']; ?></div>
								<div class="game_team_cell cell02">VS</div>
								<div class="game_team_cell cell03"><?php echo $v['team_guest']; ?></div>
							</div>
						</div>
					</a>
				</li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</section>
<!-- <script>
	function listmrketorder(a, b, c, d, g, h) {
		document.location.href = 'marketorder.html?gc12=' + a + '&gameid=' + b + '&time=' + c + '&name=' + d + '&competitionname=' + g + '&status_id=' + h + '';
	}

	function marketchoose(a) {
		document.location.href = 'add_agent.html?marketid=' + a + '';
	}

	$('.icon_bar_cell > a').removeClass('active');
	$('.icon_bar_cell > #market_a').addClass('active');

</script> -->

		</div>
	</div>

	<script src="/static/index/js/side.js"></script>
	<script src="/static/index/js/marketlist.js"></script>
	<script src="/static/index/js/main.js"></script>
	<script src="/static/index/js/scrollTop.js"></script>
	<script src="/static/index/js/downloadApp.js"></script>

	<script>

		function surecheck() {
			var select0 = new Array();
			var c2bet = new Object;
			$('.choose_alliance > div.click').each(function(e) {
				select0[e] = $(this).attr('id');
			});

			c2bet["select0"] = select0;
			if (select0.length == 0) {
				return;
			}
			jQuery.ajax({
				type: 'POST',
				url: './allleague.html',
				data: c2bet,

				error: function(xhr) {
					//alert('ERROR!163');
					return false;
				},
				beforeSend: function(response) {
					//jQuery('#Modal_cover4').html("<div class='Loading'></div>");
					$('.content-4').html("<div class='Loading'></div>");
				},
				success: function(response) {
					$('.content-4').html(response);
					window.location.hash = '#anchorName';
					window.parent.location.hash = '#anchorName';
				}
			});

			$(".sidy__content").scrollTop(0);
		}

		function cleancheck() {
			var select0 = new Array();
			var c2bet = new Object;
			var ss = $('#all_check').attr('class');
			if (ss != 'box') {
				$('#all_check > i').attr("style", "display:none");
				$('#all_check').removeClass('checked');
			}
			$('.choose_alliance > div').each(function(e) {
				$(this).removeClass('click');
			});
			$('.choose_alliance > div > i').each(function(e) {
				$(this).attr("style", "display:none");
			});
		}

		function allcheck() {
			var ss = $('#all_check').attr('class');
			if (ss == 'box') {
				$('.choose_alliance > div').each(function(e) {
					$(this).addClass('click');
				});
				$('.choose_alliance > div > i').each(function(e) {
					$(this).attr("style", "display:inline");
				});
			} else {
				$('.choose_alliance > div').each(function(e) {
					$(this).removeClass('click');
				});
				$('.choose_alliance > div > i').each(function(e) {
					$(this).attr("style", "display:none");
				});
			}
		}

		function ttt(a) {
			if (a == 'a') {
				window.location.hash = '';
				window.parent.location.hash = '#anchorName';
			} else {
				var window_scrollTop = $(".tabs div.content-1").offset().top;
				var ss = $('html,body').height();
				var tt = $(".tabs div.content-1").height();
				so = (window_scrollTop) - (ss);
				tt = tt - '700';
				$(".tabs div.content-1").animate({
					top: '-' + tt + 'px'
				}, 1000);
			}

		}

		function titleannice() {
			var ss = $('#marqinfo').css("display");

			if (ss == 'none') {
				$('#marqinfo').attr('style', 'margin-top:3px;font-size:16px;margin-left:22%;width:80%;display:block');
				$('#markettitle').attr('style', 'display:none');
			} else {
				$('#marqinfo').attr('style', 'display:none');
				$('#markettitle').attr('style', 'display:block;padding-left:150px;width:80%;');
			}
		}

	</script>
</body>

</html>
