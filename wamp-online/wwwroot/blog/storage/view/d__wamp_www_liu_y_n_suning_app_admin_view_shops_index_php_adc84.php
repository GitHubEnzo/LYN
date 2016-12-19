<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>    <title>商城后台管理系统</title>
    <link rel="icon" href="http://localhost/Liu.Y.N/suning/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="http://localhost/Liu.Y.N/suning/resource/hdjs/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://localhost/Liu.Y.N/suning/resource/css/site.css" rel="stylesheet">
    <link href="http://localhost/Liu.Y.N/suning/resource/hdjs/css/font-awesome.min.css" rel="stylesheet">
    <script src="http://localhost/Liu.Y.N/suning/resource/hdjs/js/jquery.min.js"></script>
    <script src="http://localhost/Liu.Y.N/suning/resource/hdjs/app/util.js"></script>
    <script src="http://localhost/Liu.Y.N/suning/resource/hdjs/require.js"></script>
    <script src="http://localhost/Liu.Y.N/suning/resource/hdjs/app/config.js"></script>
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        if (navigator.appName == 'Microsoft Internet Explorer') {
            if (navigator.userAgent.indexOf("MSIE 5.0") > 0 || navigator.userAgent.indexOf("MSIE 6.0") > 0 || navigator.userAgent.indexOf("MSIE 7.0") > 0) {
                alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
            }
        }
    </script>
    <style>
        i {
            color: #337ab7;
        }
    </style>
</head>
<body>
<div class="container-fluid admin-top">
    <!--导航-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <h4 style="display: inline;line-height: 50px;float: left;margin: 0px"><a href="" style="color: white;margin-left: -14px">Suning</a></h4>
                <div class="navbar-header">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="http://www.kancloud.cn/houdunwang/hdphp3/215149" target="_blank"><i class="fa fa-w fa-file-code-o"></i> hdphp在线文档</a>
                        </li>
                        <li>
                            <a href="http://fontawesome.dashgame.com/" target="_blank"><i class="fa fa-w fa-hand-o-right"></i>图标库</a>
                        </li>
                        <li>
                            <a href="http://bbs.houdunwang.com" target="_blank"><i class="fa fa-w fa-forumbee"></i> 论坛讨论</a>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            admin                            <i class="fa fa-w fa-user"></i>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="http://localhost/Liu.Y.N/suning/index.php?s=admin/entry/changePass">修改密码</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="http://localhost/Liu.Y.N/suning/index.php?s=admin/entry/out">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--导航end-->
</div>
<!--主体-->
<div class="container-fluid admin_menu">
    <div class="row">
        <div class="col-xs-12 col-sm-3 col-lg-2 left-menu">
            <div class="panel panel-default" id="menus" >
                <!--类型-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="border-top: 1px solid #ddd;border-radius: 0%">
                    <h4 class="panel-title">类型管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample">
                    <a href="http://localhost/Liu.Y.N/suning/index.php?s=admin/type/index" class="list-group-item" >
                        <i class="fa fa-align-center" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        类型列表
                    </a>
                    <a href="http://localhost/Liu.Y.N/suning/index.php?s=admin/type/add" class="list-group-item" >
                        <i class="fa fa-arrows" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        类型添加
                    </a>
                </ul>
<!--                类型管理结束-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample" style="border-top: 1px solid #ddd;border-radius: 0%">
                    <h4 class="panel-title">分类管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample2" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample2">
                    <a href="http://localhost/Liu.Y.N/suning/index.php?s=admin/category/index" class="list-group-item" >
                        <i class="fa fa-align-center" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        分类列表
                    </a>
                    <a href="http://localhost/Liu.Y.N/suning/index.php?s=admin/category/add" class="list-group-item" >
                        <i class="fa fa-arrows" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        分类添加
                    </a>
                </ul>
<!--                品牌-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample" style="border-top: 1px solid #ddd;border-radius: 0%">
                    <h4 class="panel-title">品牌管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample1" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample1">
                    <a href="http://localhost/Liu.Y.N/suning/index.php?s=admin/brand/index" class="list-group-item" >
                        <i class="fa fa-align-center" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        品牌列表
                    </a>
                    <a href="http://localhost/Liu.Y.N/suning/index.php?s=admin/brand/add" class="list-group-item" >
                        <i class="fa fa-arrows" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        品牌添加
                    </a>
                </ul>
<!--                商品管理-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample5" aria-expanded="false" aria-controls="collapseExample" style="border-top: 1px solid #ddd;border-radius: 0%">
                    <h4 class="panel-title">商品管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExample5" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample5">
                    <a href="http://localhost/Liu.Y.N/suning/index.php?s=admin/goods/index" class="list-group-item" >
                        <i class="fa fa-align-center" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        商品列表
                    </a>
                    <a href="http://localhost/Liu.Y.N/suning/index.php?s=admin/goods/add" class="list-group-item" >
                        <i class="fa fa-arrows" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        商品添加
                    </a>
                </ul>
                <!--订单管理-->
                <div class="panel-heading" role="button" data-toggle="collapse" href="#collapseExample6" aria-expanded="false" aria-controls="collapseExample" style="border-top: 1px solid #ddd;border-radius: 0%">
                    <h4 class="panel-title">订单管理</h4>
                    <a class="panel-collapse" data-toggle="collapse" href="#collapseExampl6" aria-expanded="true">
                        <i class="fa fa-chevron-circle-down"></i>
                    </a>
                </div>
                <ul class="list-group menus collapse in" id="collapseExample6">
                    <a href="http://localhost/Liu.Y.N/suning/index.php?s=admin/shops/index" class="list-group-item" >
                        <i class="fa fa-align-center" aria-hidden="true"></i>
                        <span class="pull-right" href=""></span>
                        订单列表
                    </a>
                </ul>
            </div>

        </div>
        <div class="col-xs-12 col-sm-9 col-lg-10">
            
    <style>
        th{
            text-align: center;
        }
    </style>
    <ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
        <li>
            <a href="<?php echo u('index')?>"><i class="fa fa-cogs"></i>
                    订单管理</a>
        </li>
        <li class="active">
            <a href="<?php echo u('index')?>">订单列表</a>
        </li>
    </ol>
    <ul class="nav nav-tabs" role="tablist">
    </ul>
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr style="text-align: center">
                        <th width="100">序号</th>                   	
                        <th width="200">订单号</th>
						<th width="100">下单时间</th>                        
                        <th width="100">总价</th>
                        <th width="100">状态</th>
                        <th width="200">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if(!empty($data)){ foreach ($data as $k=>$v){?>
                        <tr style="text-align: center">
                        	<td><?php echo $v['oid']?></td>
                            <td><?php echo $v['number']?></td> 
                            <td><?php echo date('Y-m-s,H:m:s',$v['time'])?></td>                                                                                 
                            <td width="100"><?php echo $v['total']?>.00</td>                            
                            <td width="100">
                            <select class="js-example-basic-single form-control" name="status" oid="<?php echo $v['oid']?>">                                
                                <option value="未付款" <?php if($v["status"] == "未付款"){?>
                selected
               <?php }?> >未付款</option>
                                <option value="待发货" <?php if($v["status"] == "待发货"){?>
                selected
               <?php }?> >待发货</option>
                                <option value="已发货" <?php if($v["status"] == "已发货"){?>
                selected
               <?php }?> >已发货</option>
                                <option value="已完成" <?php if($v["status"] == "已完成"){?>
                selected
               <?php }?> >已完成</option>
                                <option value="退货中" <?php if($v["status"] == "退货中"){?>
                selected
               <?php }?> >退货中</option>                            
                            </select>
                            </td>                           
                            <td>
                                <div class="btn-group" width="200">
                                    <button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">操作 <span class="caret"></span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="<?php echo u('edit',['glid'=>$v['glid'],'gid'=>Q('get.gid')])?>">编辑</a></li>
                                        <li><a href="<?php echo u('del',['glid'=>$v['glid'],'gid'=>Q('get.gid')])?>">删除</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    <?php }}?>
                    </tbody>
                </table>
            </div>
        </div>
    <div class="pagination pagination-sm pull-right">
    	<?php echo $page?>
    </div>

        </div>
    </div>
</div>
<div class="master-footer" style="margin-top: 150px">
    <a href="http://www.houdunwang.com">高端培训</a>
    <a href="http://www.hdphp.com">开源框架</a>
    <a href="http://bbs.houdunwang.com">后盾论坛</a>
    <br>
    Powered by hdphp v2.0 © 2016-2022 www.hdphp.com
</div>
</body>
</html>
<script>
    require(['bootstrap'],function($){})
</script>

<script >
	$('select[name=status]').change(function(){
        //:selected抓到选中元素
        var status = $(this).find(':selected').val();
        var oid = $(this).attr('oid');					
        $.post("<?php echo u('chenged')?>",{oid:oid,status:status},function(res){
        	alert('状态修改为 ['+status+'] 成功');
        },'json');
    })
</script>