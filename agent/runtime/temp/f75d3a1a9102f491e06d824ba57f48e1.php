<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"D:\phpstudy_pro\WWW\tp5admin\public/../application/admin\view\qyq\add_qyq.html";i:1606816330;s:70:"D:\phpstudy_pro\WWW\tp5admin\application\admin\view\public\header.html";i:1606978548;s:70:"D:\phpstudy_pro\WWW\tp5admin\application\admin\view\public\footer.html";i:1606978544;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo config('WEB_SITE_TITLE'); ?></title>
    <link href="/static/admin/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/static/admin/css/font-awesome.min.css?v=4.4.0" rel="stylesheet">
    <link href="/static/admin/css/animate.min.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/chosen/chosen.css" rel="stylesheet">
    <link href="/static/admin/css/plugins/switchery/switchery.css" rel="stylesheet">
    <link href="/static/admin/css/style.min.css?v=4.1.0" rel="stylesheet">
    <link href="/static/admin/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="/static/admin/css/jedate.css" rel="stylesheet">
    <link href="/static/home/layui/css/layui.css" rel="stylesheet">
    <style type="text/css">
    .long-tr th{
        text-align: center
    }
    .long-td td{
        text-align: center
    }
    </style>
</head>

<body class="gray-bg">
<div class="wrapper wrapper-content animated fadeInRight" id="addQyq">
    <!-- Panel Other -->
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>账号信息</h5>
        </div>
        <div class="ibox-content">
            <!--搜索框开始-->
            <div class="row">
                <div class="col-sm-12">
                    <form name="admin_list_sea" class="form-search" method="post">
                        <div class="col-sm-3">
                            <div class="input-group">
                                <input type="text" v-model="uid" class="form-control"  placeholder="输入需查询的玩家ID" />
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn-primary" @click="seach()"><i class="fa fa-search"></i> 搜索</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--搜索框结束-->
            <div class="hr-line-dashed"></div>

            <div class="example-wrap">
                <div class="example">

                    <div style="padding: 20px; background-color: #F2F2F2;">
                        <div class="layui-row layui-col-space15">
                            <div class="layui-col-md3">
                                <div class="layui-card">
                                    <div class="layui-card-header">账号:</div>
                                    <div class="layui-card-body">
                                          {{uid}}
                                    </div>
                                </div>
                            </div>
                            <div class="layui-col-md3">
                                <div class="layui-card">
                                    <div class="layui-card-header">昵称:</div>
                                    <div class="layui-card-body">
                                         {{username}}
                                    </div>
                                </div>
                            </div>
                            <div class="layui-col-md3">
                                <div class="layui-card">
                                    <div class="layui-card-header">数字账号:</div>
                                    <div class="layui-card-body">
                                        {{naccount}}
                                    </div>
                                </div>
                            </div>
                            <div class="layui-col-md3">
                                <div class="layui-card">
                                    <div class="layui-card-header">注册时间:</div>
                                    <div class="layui-card-body">
                                        {{regTime}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layui-row layui-col-space15">
                            <div class="layui-col-md3">
                                <div class="layui-card">
                                    <div class="layui-card-header">房钻:</div>
                                    <div class="layui-card-body">
                                        {{card}}
                                    </div>
                                </div>
                            </div>
                            <div class="layui-col-md3">
                                <div class="layui-card">
                                    <div class="layui-card-header">上级邀请码:</div>
                                    <div class="layui-card-body">
                                          {{payBindId}}
                                    </div>
                                </div>
                            </div>
                            <div class="layui-col-md3">
                                <div class="layui-card">
                                    <div class="layui-card-header">绑定时间:</div>
                                    <div class="layui-card-body">
                                        {{payBindTime}}
                                    </div>
                                </div>
                            </div>
                            <div class="layui-col-md3">
                                <div class="layui-card">
                                    <div class="layui-card-header">账号状态:</div>
                                    <div class="layui-card-body">
                                        <span v-if="userState=='- -'" >- -</span>
                                        <span v-if="userState==1" class="layui-badge layui-bg-green">正常</span>
                                        <span v-if="userState==0" class="layui-badge layui-bg-gray">禁止登录</span>
                                        <span v-if="userState==2" class="layui-badge">红名</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layui-row layui-col-space15">
                            <div class="layui-col-md3">
                                <div class="layui-card">
                                    <div class="layui-card-body" style="height: 60px">
                                        <div class="layui-form-item">
                                                <input type="text" v-model="groupId" lay-verify="title" autocomplete="off" placeholder="请输入亲友圈靓号" class="layui-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-col-md2">
                                <div class="layui-card">
                                    <div class="layui-card-body" style="text-align: center;padding: 0">
                                    <button  class="btn btn-primary" style="width: 100%;height: 60px;margin-bottom: 0px" @click="add_qyq()">添加亲友圈</button>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-col-md1">
                                <div class="layui-card">
                                    <div class="layui-card-body" style="text-align: center;padding: 0">
                                        <button class="btn btn-primary" style="width: 100%;height: 60px;margin-bottom: 0px">返回</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Example Pagination -->
        </div>
    </div>
</div>
<!-- End Panel Other -->
</div>
<script src="/static/admin/js/jquery.min.js?v=2.1.4"></script>
<script src="/static/admin/js/bootstrap.min.js?v=3.3.6"></script>
<script src="/static/admin/js/content.min.js?v=1.0.0"></script>
<script src="/static/admin/js/plugins/chosen/chosen.jquery.js"></script>
<script src="/static/admin/js/plugins/iCheck/icheck.min.js"></script>
<script src="/static/admin/js/plugins/layer/laydate/laydate.js"></script>
<script src="/static/admin/js/plugins/switchery/switchery.js"></script><!--IOS开关样式-->
<script src="/static/admin/js/jquery.form.js"></script>
<script src="/static/admin/js/layer/layer.js"></script>
<script src="/static/admin/js/laypage/laypage.js"></script>
<script src="/static/admin/js/laytpl/laytpl.js"></script>
<script src="/static/admin/js/lunhui.js"></script>
<script src="/static/admin/js/jedate.js"></script>
<script src="/static/admin/js/vue.js"></script>
<script src="/static/admin/js/axios.min.js"></script>
<script src="/static/admin/js/echarts.min.js"></script>
<script src="/static/home/layui/layui.js"></script>
<script>
    $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
</script>

<script type="text/javascript">
    var app = new Vue({
        el: '#addQyq',
        data: {
            groupId: '',
            account: "- -",
            username: "- -",
            naccount: "- -",
            regTime: "- -",
            card: "- -",
            payBindId: "- -",
            payBindTime: "- -",
            userState: "- -",
            uid: '',
            apiurl : ''
        },
        created () {

        },
        methods: {
            seach () {
                let vm = this;
                let uid = vm.uid;
                axios
                    .post('/admin/qyq/get_user',{uid: uid})
                    .then(function (response) {
                        if(response.data.code==1) {
                             vm.username = response.data.data.name;
                             vm.regTime = response.data.data.regTime;
                             vm.card = response.data.data.cards + response.data.data.freeCards;
                             vm.payBindId = response.data.data.payBindId;
                             if(response.data.data.payBindTime && response.data.data.payBindTime!=''){
                                 vm.payBindTime = response.data.data.payBindTime;
                             }
                             vm.userState = response.data.data.userState;
                             vm.apiurl = response.data.apiurl;
                        }else{

                        }
                        console.log(response);
                    })
                    .catch(function (error) { // 请求失败处理
                        console.log(error);
                    });
            },
            add_qyq () {
                let vm = this;
                let groupName = vm.uid;
                let userId = vm.uid;
                if(!userId) {
                    layer.msg('用户信息不存在');
                    return;
                }
                let groupId = vm.groupId;
                if(!groupId ){
                    layer.msg('亲友圈Id不能为空');
                    return;
                }
                let gameIds = '';
                let apiurl = vm.apiurl + "createGroup.do";
                axios
                    .post(apiurl,{groupname: groupName,userId:userId,groupId:groupId,gameIds:gameIds})
                    .then(function (response) {
                        if(response.data.code==1) {

                        }else{

                        }
                        console.log(response);
                    })
                    .catch(function (error) { // 请求失败处理
                        console.log(error);
                    });
            },
        },
        mounted:function(){
        }
    })
</script>
</body>
</html>