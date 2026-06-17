<?php /*a:1:{s:65:"/www/wwwroot/47.86.192.135/app/super/view/member/member_show.html";i:1764755762;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="/static/lib/html5shiv.js"></script>
    <script type="text/javascript" src="/static/lib/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="/static/static/h-ui/css/H-ui.min.css" />
    <link rel="stylesheet" type="text/css" href="/static/static/h-ui.admin/css/H-ui.admin.css" />
    <link rel="stylesheet" type="text/css" href="/static/lib/Hui-iconfont/1.0.8/iconfont.css" />
    <link rel="stylesheet" type="text/css" href="/static/static/h-ui.admin/skin/default/skin.css" id="skin" />
    <link rel="stylesheet" type="text/css" href="/static/static/h-ui.admin/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>用户查看</title>
</head>
<body>

<div class="pd-20">
    <table class="table">
        <tbody>
         <tr>
            <th class="text-r">账户：</th>
            <td><?php echo htmlentities($user['username']); ?></td>
        </tr>
         <tr>
            <th class="text-r">昵称：</th>
            <td><?php echo htmlentities($user['nickname']); ?></td>
        </tr>
        <tr>
            <th class="text-r">个性签名：</th>
            <td><?php echo htmlentities($user['doodling']); ?></td>
        </tr>
        <tr>
            <th class="text-r" width="80">性别：</th>
            <td><?php switch($user['sex']): case "0": ?>男<?php break; case "1": ?>女<?php break; ?>
                <?php endswitch; ?></td>
        </tr>
        <tr>
            <th class="text-r">手机：</th>
            <td><?php echo htmlentities($user['phone']); ?></td>
        </tr>
        <tr>
            <th class="text-r">邮箱：</th>
            <td><?php echo htmlentities($user['email']); ?></td>
        </tr>
        <tr>
            <th class="text-r">注册时间：</th>
            <td><?php echo date('Y-m-d H:i:s',$user['create_time']); ?></td>
        </tr>
        <tr>
            <th class="text-r">积分：</th>
            <td><?php echo htmlentities($user['point']); ?></td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>