<?php /*a:1:{s:69:"/home/wwwroot/demo70.zhigou888.com/app/super/view/chatlist/index.html";i:1764755762;}*/ ?>
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
      <link rel="stylesheet" type="text/css" href="/static/css/style.css" />
    <!--[if IE 6]>
    <script type="text/javascript" src="/static/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
    <script>DD_belatedPNG.fix('*');</script>
    <![endif]-->
    <title>对话管理</title>
    
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 对话管理 <span class="c-gray en">&gt;</span> 对话列表 <a class="btn btn-success radius r" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="page-container">
     <form method="get" action="<?php echo url('/super_chatList'); ?>">
        <input type="hidden" name="act" value="check">
        <div class="text-l"> 日期范围(添加时间)：
            <input type="text" onfocus="selecttime('start')" id="datemin" class="input-text Wdate" style="width:120px;" name="start_time" value="<?php if(isset($key['start_time'])): ?><?php echo htmlentities($key['start_time']); ?><?php endif; ?>">
            -
            <input type="text" onfocus="selecttime('end')" id="datemax" class="input-text Wdate" style="width:120px;" name="end_time" value="<?php if(isset($key['end_time'])): ?><?php echo htmlentities($key['end_time']); ?><?php endif; ?>">
            <input type="text" class="input-text" style="width:250px" placeholder="请输入会员账户或者昵称" id="" name="key" value="<?php if(isset($key['key'])): ?><?php echo htmlentities($key['key']); ?><?php endif; ?>">
            <button type="submit" class="btn btn-success radius" id="" name=""><i class="Hui-iconfont">&#xe665;</i> 搜索</button>
        </div>
    </form>
    <div style="margin-top: 10px;">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
            <thead>
             <tr class="text-c">
                <th width="20%">ID</th>
                <th width="10%">用户昵称</th>
                <th width="10%">会话类型</th>
               
                <th width="50%">会话内容</th>
                <th width="10%">会话时间</th>
            </tr>
            </thead>
            <tbody>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                    <tr class="text-c">
                        <td><?php echo htmlentities($c['list_id']); ?></td>
                        <td><?php echo htmlentities($c['nickname']); ?></td>
                        <td>
                            <?php switch($c['content_type']): case "0": ?>文字/表情<?php break; case "1": ?>语音<?php break; case "2": ?>图片<?php break; case "3": ?>视频<?php break; case "4": ?>文件<?php break; case "5": ?>红包消息<?php break; ?>
                            <?php endswitch; ?>
                           
                        </td>
                        <td>

                         
                             <?php if(isset($c['content']['text'])): ?>
                               <?php echo htmlentities($c['content']['text']); else: if(isset($c['content']['url'])): switch($c['content_type']): case "0": ?>
                                                 <img src="/static/chat/<?php echo htmlentities($c['list_id']); ?>/<?php echo htmlentities($c['content']['url']); ?>" style="height:20px" >
                                            <?php break; case "1": ?>
                                              <audio src="/static/chat/<?php echo htmlentities($c['list_id']); ?>/<?php echo htmlentities($c['content']['url']); ?>"  style="height:20px" controls="controls"> </audio>
                                            <?php break; case "2": ?>
                                              <img src="/static/chat/<?php echo htmlentities($c['list_id']); ?>/<?php echo htmlentities($c['content']['url']); ?>"  style="height:20px" >
                                            <?php break; case "3": ?>
                                                <video id="videoPlay1" width="262" height="195" src="/static/chat/<?php echo htmlentities($c['list_id']); ?>/<?php echo htmlentities($c['content']['url']); ?>" loop="loop" x-webkit-airplay="true" webkit-playsinline="true">
                                                    您的浏览器暂不支持播放视频   。
                                                </video>
                                            <?php break; case "4": ?>文件<?php break; case "5": ?>红包消息<?php break; ?>
                                        <?php endswitch; ?>
                               <?php endif; ?>
                            <?php endif; ?>
                         
                       </td>
                        <td> <?php echo date('Y-m-d H:i:s',$c['time']); ?></td>
                    </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
               
            </tbody>
        </table>
    </div>

    <div class="mt-15">
       <?php echo $chatlist->appends($key)->render(); ?>
    </div>
</div>
<!--_footer 作为公共模版分离出去-->
<script type="text/javascript" src="/static/lib/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="/static/lib/layer/2.4/layer.js"></script>
<script type="text/javascript" src="/static/static/h-ui/js/H-ui.min.js"></script>
<script type="text/javascript" src="/static/static/h-ui.admin/js/H-ui.admin.js"></script> <!--/_footer 作为公共模版分离出去-->

<script type="text/javascript" src="/static/lib/My97DatePicker/4.8/WdatePicker.js"></script>
<script type="text/javascript" src="/static/js/date_opt.js"></script>
<script type="text/javascript">
    var video1=document.getElementById("videoPlay1");

    video1.onclick=function(){
        if(video1.paused){
            video1.play();
        }else{
            video1.pause();
        }
    }
</script>
</body>
</html>