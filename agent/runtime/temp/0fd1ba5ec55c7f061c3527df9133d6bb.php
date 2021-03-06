<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"D:\phpstudy_pro\WWW\agent\public/../application/index\view\index\add_agent.html";i:1607766992;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>Registered</title>
    <link rel="stylesheet" href="/static/index/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap-select/2.0.0-beta1/css/bootstrap-select.css">
    <link rel="stylesheet" href="/static/index/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/static/index/css/normalize.css">
    <link rel="stylesheet" href="/static/index/css/registered.css">
    <link rel="stylesheet" href="/static/index/css/theme/APPui.css?v=20190709112359">
</head>

<body>
<div class="bg">
    <div class="head_group">
        <div class="logo_position">
            <div onclick="window.location.href='login.html'" class="logo"></div>
        </div>
        <div class="join_title">添加业务员</div>
    </div>
    <div class="color_border"></div>
    <div class="content_block">
        <div class="block_title">填写帐号与密码<span>*为必填栏位</span></div>
        <div class="black_line"></div>
        <!--<p class="note_text">随机选择您喜欢的帐号后，填写昵称并继续完成输入帐号密码与提款密码，<span class="text_bold">提款密码将是您提款时重要依据。</span></p>-->
        <div class="account_name">业务员&nbsp;</div>
        <div class="acc_pwd_part1">
            <div class="content_table">
                <div class="content_row">
                    <div class="content_cell_title">帐号<span>*</span></div>
                    <div class="content_cell">
                        <input type="text" id="account_out" name="account" value="">
                    </div>
                </div>
                <input type="hidden" id="agentid" name="agentid" value="af140">
                <div class="content_row">
                    <div class="content_cell_title">昵称<span>*</span></div>
                    <div class="content_cell"><input type="text" id="nickname" name="nickname" value=""></div>
                </div>
                <div class="content_row">
                    <div class="content_cell_title">密码<span>*</span></div>
                    <div class="content_cell"><input type="password" id="loginPwd" name="password" placeholder="英数混合至少6个字元！"></div>
                </div>
                <div class="content_row">
                    <div class="content_cell_title">确认密码<span>*</span></div>
                    <div class="content_cell"><input type="password" id="loginPwd2" name="password1" value=""></div>
                </div>
            </div>
        </div>
        <div class="completed_btn">
            <button id="sendbt" onclick="register1()" class="completed">填写完成</button>
            <button onclick="javascript:window.history.go(-1);" class="completed">返回</button>
        </div>
        <input id=mobile_ans type="hidden">
    </div>
</div>

</div>
</div>
<div class="color_border"></div>
</div>


<script src="/static/index/js/jquery-3.2.1.min.js"></script>
<!--<script src="/static/index/js/registered.js"></script>-->
<!--<script src="/static/index/js/registeraction.js?v=20190709112359"></script>-->
<script>
    function register1() {
        var account = $("input[name='account']").val();
        var password     = $("input[name='password']").val();
        var nickname     = $("input[name='nickname']").val();
        var password1     = $("input[name='password1']").val();
        $.post('/index/login/registerpost',{account:account,password:password,password1:password1,nickname:nickname},
            function(res){
                if(res.code==1){
                    alert(res.msg);
                    javascript:window.history.go(-1);
                }else{
                    alert(res.msg);
                }
       })
    }
</script>
</body>

</html>
