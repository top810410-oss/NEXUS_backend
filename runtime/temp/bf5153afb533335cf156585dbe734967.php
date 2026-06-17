<?php /*a:1:{s:80:"/home/wwwroot/demo70.zhigou888.com/app/super/view/chatlist/member_chat_list.html";i:1764755762;}*/ ?>
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
<div class="page-container">
   
    <div style="margin-top: 10px;">
        <table class="table table-border table-bordered table-hover table-bg table-sort">
            <thead>
             <tr class="text-c">
              
               
                <th width="10%">会话类型</th>
               
                <th width="65%">会话内容</th>
                <th width="25%">会话时间</th>
            </tr>
            </thead>
            <tbody>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): $mod = ($i % 2 );++$i;?>
                    <tr class="text-c">
                      
                      
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
                                              <video id="videoPlay1" width="262" height="195" src="/static/chat/$c.list_id/<?php echo htmlentities($c['content']['url']); ?>" loop="loop" x-webkit-airplay="true" webkit-playsinline="true">
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
       <?php echo $chatlist->appends('user_id',$user_id)->render(); ?>
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