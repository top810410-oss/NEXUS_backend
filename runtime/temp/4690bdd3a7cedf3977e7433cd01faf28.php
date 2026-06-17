<?php /*a:4:{s:75:"/www/wwwroot/012.demo.zhigou888.cn/app/super/view/article/article_list.html";i:1764755762;s:76:"/www/wwwroot/012.demo.zhigou888.cn/app/super/view/common/page_container.html";i:1764755762;s:73:"/www/wwwroot/012.demo.zhigou888.cn/app/super/view/common/page_header.html";i:1764755762;s:72:"/www/wwwroot/012.demo.zhigou888.cn/app/super/view/common/public_nav.html";i:1764755762;}*/ ?>
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
    .laytable-cell-1-0-10 {
        width: 10px;
    }
</style>
<div class="layui-fluid">
    <div class="layui-row layui-col-space15"  id="app">
<div class="layui-col-md12">
    <div class="layui-card">
        <div class="layui-card-header">搜索条件</div>
        <div class="layui-card-body">
            <form class="layui-form layui-form-pane" action="">
                <div class="layui-form-item">
                    <div class="layui-inline">
                        <label class="layui-form-label">文章状态</label>
                        <div class="layui-input-block">
                            <select name="status">
                                <option value="">是否启用</option>
                                <option value="1">上架</option>
                                <option value="0">下架</option>
                            </select>
                        </div>
                    </div>
                    <div class="layui-inline">
                        <label class="layui-form-label">文章名称</label>
                        <div class="layui-input-block">
                            <input type="text" name="merchant_name" class="layui-input" placeholder="请输入文章名称">
                        </div>
                    </div>
                    <div class="layui-inline">
                        <div class="layui-input-inline">
                            <button class="layui-btn layui-btn-sm layui-btn-normal" lay-submit="search" lay-filter="search">
                                <i class="layui-icon layui-icon-search"></i>搜索</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="layui-row layui-col-space15" >
    <div class="layui-col-md12">
        <div class="layui-card">
            <div class="layui-card-header">文章列表</div>
            <div class="layui-card-body">
                <div class="layui-btn-container">
                   <a type="button" class="layui-btn layui-btn-sm layui-btn-normal" href="<?php echo Url('/super_addArticle'); ?>">添加文章</a>
                </div>
                <table class="layui-hide" id="List" lay-filter="List"></table>
                <script type="text/html" id="act">
                    <button type="button" class="layui-btn layui-btn-xs" lay-event="edit"><i class="layui-icon layui-icon-edit"></i>编辑</button>
                 </script>
                <script type="text/html" id="status">
                    {{#  if(d.status == 1){ }}
                    <span>已上架</span>
                    {{# }else{ }}
                    <span style="color: red;">已下架</span>
                    {{#  } }}
                </script>
            </div>
        </div>
    </div>
</div>
    </div>
</div>
<script src="{__ADMIN_PATH}js/layuiList.js"></script>


<script>
    layList.form.render();
    layList.tableList('List',"<?php echo Url('/super_articleList'); ?>",function (){
        return [
            {field:'id', width:'13%', title: '序号', sort: true,align:'center'},
            {field:'article_name',  title: '文章名称',align:'center'},
            {field:'article_desc', title: '文章描述',align:'center',sort: true},
            {field:'status', title: '文章状态',align:'center',sort: true,templet:"#status"},
            {field:'position', title: '展示位置',align:'center'},
            {field:'sort', title: '排序',align:'center'},
            {field:'create_time', title: '上架时间',align:'center'},
            {field:'right', title: '操作',align:'center',toolbar:'#act'},
        ];
    });
    layList.search('search',function(where){
        layList.reload(where,true);
    });

    layList.tool(function (event,data,obj) {
        switch (event) {
            case 'edit':
                var url = "<?php echo Url('/super_addArticle'); ?>"+'?id='+data.id;
                location.href = url+"&time="+(new Date()).getTime()
                // layList.createModalFrame('编辑',url+'?id='+data.id)
                break;
        }
    })
</script>

</body>
</html>
