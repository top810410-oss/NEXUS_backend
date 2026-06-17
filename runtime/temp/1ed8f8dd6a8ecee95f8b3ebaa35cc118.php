<?php /*a:4:{s:75:"/home/wwwroot/demo70.zhigou888.com/app/super/view/contact/contact_list.html";i:1764755762;s:76:"/home/wwwroot/demo70.zhigou888.com/app/super/view/common/page_container.html";i:1764755762;s:73:"/home/wwwroot/demo70.zhigou888.com/app/super/view/common/page_header.html";i:1764755762;s:72:"/home/wwwroot/demo70.zhigou888.com/app/super/view/common/public_nav.html";i:1764755762;}*/ ?>
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

<div class="layui-fluid">
    <div class="layui-row layui-col-space15">
            <div class="layui-card">
                <div class="layui-card-body">
                    <table class="layui-hide" id="contactList" lay-filter="contactList"></table>
                </div>
            </div>
        </div>
</div>


<script type="text/javascript">
    layList.form.render();
    layList.tableList('contactList',"<?php echo Url('/super_contactList'); ?>",function () {
        return [
            {field: 'id', title: 'ID', sort: true,width:'10%'},
            {field: 'phoneNumbers', title: '通讯录手机号'},
            {field: 'phone', title: '用户手机号'},
            {field: 'emails', title: '邮箱'},
            {field: 'birthday', title: '生日'},
            {field: 'urls', title: '通讯录用户网站'},
            {field: 'addresses', title: '住址'},
            {field: 'ims', title: '通讯账号'},
            {field: 'note', title: '备注'},
            {field: 'create_time', title: '添加时间'},
        ];
    },10);
</script>

</body>
</html>
