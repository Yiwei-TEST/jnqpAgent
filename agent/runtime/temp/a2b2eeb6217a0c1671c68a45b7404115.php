<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\phpStudy\WWW\foot\tp5admin\public/../application/admin\view\login.html";i:1559778488;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="renderer" content="webkit">
    <title>best365后台登录</title>
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css" rel="stylesheet">
    <link href="/static/admin/css/login.min.css" rel="stylesheet">
    <link href="/static/admin/css/jquery.slider.css" rel="stylesheet">
    <script type="text/javascript" src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>
</head>

<body class="signin">
<div class="signinpanel">
    <div class="row">
        <div class="col-sm-7" style="color:#fff">
            <div class="signin-info">
                <div class="logopanel m-b">
                </div>
                <div class="m-b"></div>
                <h2>欢迎使用best365后台管理</h2>
                <ul class="m-b"></ul>
            </div>
        </div>
        <div class="col-sm-5" style="color:#fff">
            <form id="doLogin" name="doLogin" method="post" action="<?php echo url('doLogin'); ?>">
                <p class="m-t-md" id="err_msg">登录到后台</p>
                <input type="text" class="form-control uname" placeholder="用户名" id="username" name="username" />
                <input type="password" class="form-control pword m-b" placeholder="密码" id="password" name="password" />
                <?php if($verify_type == 1): ?>
                    <div style="margin-bottom:70px">
                        <input type="text" class="form-control" placeholder="验证码" style="color:black;width:120px;float:left;margin:0px 0px;" name="code" id="code"/>
                        <img src="<?php echo url('checkVerify'); ?>" onclick="javascript:this.src='<?php echo url('checkVerify'); ?>?tm='+Math.random();" style="float:right;cursor: pointer"/>
                    </div>
                <?php else: ?>
                    <div id="slider" class="slider"></div>
                <?php endif; ?>
                <button type="submit" class="btn btn-primary btn-block">登　录</button>
            </form>
        </div>
    </div>
    <div class="signup-footer">
        <div class="pull-left" style="color:#fff">
            &copy; 2019 best365后台管理系统 All Rights Reserved.
        </div>
    </div>
</div>

<script type="text/javascript" src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script type="text/javascript" src="/static/admin/js/jquery.form.js"></script>
<script type="text/javascript" src="/static/admin/js/layer/layer.js"></script>
<script type="text/javascript" src="/static/admin/js/lunhui.js"></script>
<script type="text/javascript" src="/static/admin/js/jquery.slider.min.js"></script>
<script type="text/javascript">
    var check_result = false;

    $(function(){
        $('#doLogin').ajaxForm({
            beforeSubmit: checkForm, // 此方法主要是提交前执行的方法，根据需要设置
            success: complete, // 这是提交后的方法
            dataType: 'json'
        });

        function checkForm(){
            if( '' == $.trim($('#username').val())){
                lunhui.error('请输入登录用户名');
                return false;
            }

            if( '' == $.trim($('#password').val())){
                lunhui.error('请输入登录密码');
                return false;
            }

            if (<?php echo $verify_type; ?> == 0) {
                if( false == check_result){
                    lunhui.error('请拖动滑块到最右边');
                    return false;
                }
            }
            $('button').addClass('disabled').text('登录中...');
        }

        function complete(data){
            if(data.code==1){
                console.log(data);
                lunhui.success(data.msg,data.url);
            }else{
                lunhui.error(data.msg);
                $('button').removeClass('disabled').text('登　录');
                return false;
            }
        }
    });

</script>
</body>
</html>
