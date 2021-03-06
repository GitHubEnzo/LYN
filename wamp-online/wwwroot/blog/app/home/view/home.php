<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>dfsd</title>
    <!--描述和摘要-->
    <meta name="Description" content=""/>
    <meta name="Keywords" content=""/>
    <!--载入公共模板-->
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/home/org/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
    <script src="{{__ROOT__}}/resource/home/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="{{__ROOT__}}/resource/home/org/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/home/css/index.css" />
    <link rel="stylesheet" type="text/css" href="{{__ROOT__}}/resource/home/css/backTop.css"/>
</head>
<body>
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>欢迎来到刘一宁的BLOG</h1>
            </div>
        </div>
    </div>
</header>
<nav role="navigation" class="navbar navbar-default">
    <div class="container">
        <div class="row">
            <div class="col-sm-12" >

                <div class="navbar-header">

                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">

                        <span class="sr-only">切换导航</span>

                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>


                <div class="collapse navbar-collapse" id="example-navbar-collapse">
                    <ul class="_menu" >
                        <li  <?php if(CONTROLLER=='Entry'){ ?>class="_active"<?php } ?>><a href="{{__ROOT__}}/">首页</a></li>
                        <foreach from="$CateData" key="$k" value="$v">
                            <li <if value="Q('get.cid')==$v['cid']">class="_active"</if>><a href="show_{{$v['cid']}}.html">{{$v['cname']}}</a></li>
                        </foreach>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<section>
    <div class="container">
        <div class="row">
            <!--标签规定文档的主要内容main-->

            <!--主体部分-->
            <blade name="content"/>

            <aside class="col-md-4 hidden-sm hidden-xs">
                <div class="_widget">
                    <h4>关于自己</h4>
                    <div class="_info">
                        <p>曾从业：机械设计、工业设计</p>
                        <p>
                            <i class="glyphicon glyphicon-volume-down"></i>
                            <a href="http://c72_yining.houdunphp.com" target="_blank">不喧哗，自有声</a>
                        </p>
                    </div>
                </div>
                <div class="_widget">
                    <h4>分类列表</h4>
                    <div>
                        <foreach from="$CateTotalData" key="$k" value="$v">
                        <a href="show_{{$v['cid']}}.html">{{$v['cname']}} ({{$v['total']}})</a>
                        </foreach>
                    </div>
                </div>
                <div class="_widget">
                    <h4>标签云</h4>
                    <div class="_tag">
                        <foreach from="$TagData" key="$k" value="$v">
                        <a href="tag_{{$v['tid']}}.html">{{$v['tname']}}</a>
                        </foreach>
                    </div>
                </div>

            </aside>
        </div>
    </div>
</section>
<footer class="hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <h4 class="_title">最新文章</h4>
                <div id="" class="_single">
                    <foreach from="$newData" key="$k" value="$v">
                    <p><a href="arc_{{$v['aid']}}.html">{{$v['title']}}</a></p>
                    <time>{{date('Y-m-d',$v['sendtime'])}}</time>
                    </foreach>
                </div>

            </div>
            <div class="col-sm-4 footer_tag">
                <div id="">
                    <h4 class="_title">标签云</h4>
                    <foreach from="$TagData" key="$k" value="$v">
                        <a href="tag_{{$v['tid']}}.html">{{$v['tname']}}</a>
                    </foreach>
                </div>
            </div>
            <div class="col-sm-4">
                <h4 class="_title">友情链接</h4>
                <div id="" class="_single">
                 <foreach from="$linkData" key="$k" value="$v">
                    <p><a href="{{$v['url']}}" target="_blank">{{$v['lname']}}</a></p>
                 </foreach>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="">{{$WebsetData['0']}}</a>
                |
                <a href="">{{$WebsetData['2']}}</a>
                |
                <a href="">{{$WebsetData['1']}}</a>
            </div>
        </div>
    </div>
</div>
<!--返回顶部自己写的插件-->
<script src="{{__ROOT__}}/resource/home/js/backTop.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
    $(function(){
        //插件使用
        $('.back_top').backTop({right:30});
    })
</script>
<div class="back_top hidden-xs hidden-md">
    <i class="glyphicon glyphicon-menu-up"></i>
</div>
</body>
</html>