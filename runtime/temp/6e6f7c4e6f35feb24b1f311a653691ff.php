<?php /*a:4:{s:67:"/home/wwwroot/demo70.zhigou888.com/app/super/view/manual/index.html";i:1764755762;s:76:"/home/wwwroot/demo70.zhigou888.com/app/super/view/common/page_container.html";i:1764755762;s:73:"/home/wwwroot/demo70.zhigou888.com/app/super/view/common/page_header.html";i:1764755762;s:72:"/home/wwwroot/demo70.zhigou888.com/app/super/view/common/public_nav.html";i:1764755762;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title></title>
    <!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport"
          content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <title>通讯录管理</title>
    <script src="/static/static/plug/jquery/jquery.min.js"></script>
    <script src="/static/static/plug/layui/layui.all.js"></script>
    <link href="/static/static/plug/layui/css/layui.css" rel="stylesheet">
    <link href="/static/static/plug/css/layui-admin.css" rel="stylesheet">
    <script src="/static/static/plug/layui/layuiList.js"></script>
</head>
<body>
<link rel="stylesheet" type="text/css" href="/static/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/static/static/h-ui.admin/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="/static/lib/Hui-iconfont/1.0.8/iconfont.css" />
<nav class="breadcrumb">
    <i class="Hui-iconfont">&#xe67f;</i>
    首页 <span class="c-gray en">&gt;
        </span> <?php echo isset($menu[0]) ? htmlentities($menu[0]) : ''; ?> <span class="c-gray en">&gt;
        </span> <?php echo isset($menu[1]) ? htmlentities($menu[1]) : ''; ?> <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新"><i class="Hui-iconfont">&#xe68f;</i></a></nav>
</head>
<body>

<style>
    .form-content{
        width: 100%;
        height: 100%;
        margin: 0 auto;
        padding-left: 10%;
        padding-top: 20px;
    }
    .form-content-left{
        width: 30%;
    }
    .form-content-right{
        width: 400px;
        border: 1px solid black;
        padding: 10px 20px;
        margin-bottom: 20px;
    }
    .form-content-right div{
        padding: 5px;
    }
</style>
<div class="form-content">
    <div class="form-content-right">
        <div>会员昵称：<span id="username"></span></div>
        <div>会员余额：<span id="money"></span></div>
        <div>操作后金额：<span id="final_money"></span></div>
    </div>
    <div class="form-content-left">
        <form class="layui-form" action="">
            <div class="layui-form-item">
                <label class="layui-form-label">会员账号/ID</label>
                <div class="layui-input-block">
                    <input type="text" name="key"  oninput="getUserInfo(this)" required  lay-verify="required" placeholder="请输入会员账号/会员ID" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">操作金额</label>
                <div class="layui-input-block">
                    <input type="text" name="amount" oninput="cualAmount(this)" required  lay-verify="required" placeholder="请输入会员账号/会员ID" autocomplete="off" class="layui-input">
                </div>
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">操作类型</label>
                <div class="layui-input-block">
                    <select name="type" lay-verify="required">
                        <option value="1">加钱</option>
                        <option value="0">扣钱</option>
                    </select>
                </div>
            </div>
            <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">备注</label>
                <div class="layui-input-block">
                    <textarea name="remark" placeholder="请输入内容"  maxlength="50" class="layui-textarea"></textarea>
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" lay-submit lay-filter="submit">立即提交</button>
                    <button type="reset" class="layui-btn layui-btn-primary">重置</button>
                </div>
            </div>
        </form>
    </div>

</div>



<script type="text/javascript">
    layList.form.render();
    layui.use('form', function(){
        var form = layui.form;

        //监听提交
        form.on('submit(submit)', function(data){
            var json =data.field;
            $.post('/super_update_amount',json,function (ret) {
                layer.msg(ret.msg);
               if(ret.err == 0){
                   form.reset();
               }
            },'json');
            return false;
        });
    });
    function getUserInfo(dom) {
        console.log($(dom).val());
        $.get('/super_userInfo',{'key':$(dom).val().trim()},function (ret) {
            console.log(ret)
                if(ret.err == 0){
                    $("#username").text(ret.data.username);
                     $("#money").text(ret.data.money);
                }else {
                    $("#username").text('');
                    $("#money").text('');
                    $("#amount").text('');
                }
        },'json');
    }
    function cualAmount(dom) {
        var val =$(dom).val().trim();
        if(val == '')val = 0;
        var amount = parseFloat(val);
        console.log(amount)

        var money = parseFloat($("#money").text());
        $("#final_money").text((money+amount).toFixed(2))
    }
</script>

</body>
</html>
