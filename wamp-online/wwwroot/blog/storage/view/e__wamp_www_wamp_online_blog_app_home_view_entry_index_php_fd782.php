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
    <link rel="stylesheet" type="text/css" href="http://localhost/wamp-online/blog/resource/home/org/bootstrap-3.3.5-dist/css/bootstrap.min.css" />
    <script src="http://localhost/wamp-online/blog/resource/home/js/jquery-1.11.3.min.js" type="text/javascript" charset="utf-8"></script>
    <script src="http://localhost/wamp-online/blog/resource/home/org/bootstrap-3.3.5-dist/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="stylesheet" type="text/css" href="http://localhost/wamp-online/blog/resource/home/css/index.css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/wamp-online/blog/resource/home/css/backTop.css"/>
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
                        <li  class="_active"><a href="http://localhost/wamp-online/blog/">首页</a></li>
                                                    <li ><a href="show_11.html">新闻</a></li>
                                                    <li ><a href="show_16.html">娱乐</a></li>
                                                    <li ><a href="show_14.html">电影</a></li>
                                                    <li ><a href="show_17.html">体育</a></li>
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
            
	<main class="col-md-8">
		<?php if(!empty($data)){ foreach ($data as $k=>$v){?>
		<article>
			<div class="_head">
				<h1><?php echo $v['title']?></h1>
								<span>
								作者：
								<?php echo $v['author']?>
								</span>
				•
				<!--pubdate表⽰示发布⽇日期-->
				<time pubdate="pubdate" datetime="2011-1-1"><?php echo date('y-m-d',$v['sendtime'])?></time>
				•
				分类：
				<a href="<?php echo u('listpage.index',['cid'=>$v['cid']])?>"><?php echo $v['cname']?></a>
				<p>浏览：<?php echo $v['click']?></p>
			</div>
			<div class="_digest">
				<img src="<?php echo $v['thumb']?>"  class="img-responsive"/>
				<p>
					<?php echo $v['digest']?>
				</p>
			</div>
			<div class="_more">
				<a href="<?php echo u('content.index',['aid'=>$v['aid']])?>" class="btn btn-default">阅读全文</a>
			</div>
			<div class="_footer">
				<i class="glyphicon glyphicon-tags"></i>
				<?php if(!empty($v['tag'])){ foreach ($v['tag'] as $kk=>$vv){?>
				<a href="<?php echo u('listpage.index',['tid'=>$vv['tid']])?>"><?php echo $vv['tname']?></a>、
				<?php }}?>
			</div>
		</article>
		<?php }}?>

		<?php echo $page?>
	</main>


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
                                                <a href="show_11.html">新闻 (1)</a>
                                                <a href="show_16.html">娱乐 (1)</a>
                                                <a href="show_14.html">电影 (1)</a>
                                                <a href="show_17.html">体育 (0)</a>
                                                <a href="show_18.html">科技 (0)</a>
                                                <a href="show_19.html">旅游 (0)</a>
                                                <a href="show_20.html">游戏 (0)</a>
                                                <a href="show_21.html">社会 (0)</a>
                                                <a href="show_22.html">国际 (0)</a>
                                            </div>
                </div>
                <div class="_widget">
                    <h4>标签云</h4>
                    <div class="_tag">
                                                <a href="tag_30.html">八卦</a>
                                                <a href="tag_31.html">范儿</a>
                                                <a href="tag_32.html">畅想</a>
                                                <a href="tag_33.html">清晨</a>
                                                <a href="tag_34.html">show</a>
                                                <a href="tag_35.html">爱情</a>
                                                <a href="tag_36.html">快玩</a>
                                                <a href="tag_37.html">星座</a>
                                                <a href="tag_38.html">情感</a>
                                                <a href="tag_39.html">公益</a>
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
                                        <p><a href="arc_14.html">春江花月夜</a></p>
                    <time>2016-10-31</time>
                                        <p><a href="arc_13.html">布达拉宫 四大皆空</a></p>
                    <time>2016-10-31</time>
                                        <p><a href="arc_12.html">滕王阁序</a></p>
                    <time>2016-10-31</time>
                                    </div>

            </div>
            <div class="col-sm-4 footer_tag">
                <div id="">
                    <h4 class="_title">标签云</h4>
                                            <a href="tag_30.html">八卦</a>
                                            <a href="tag_31.html">范儿</a>
                                            <a href="tag_32.html">畅想</a>
                                            <a href="tag_33.html">清晨</a>
                                            <a href="tag_34.html">show</a>
                                            <a href="tag_35.html">爱情</a>
                                            <a href="tag_36.html">快玩</a>
                                            <a href="tag_37.html">星座</a>
                                            <a href="tag_38.html">情感</a>
                                            <a href="tag_39.html">公益</a>
                                    </div>
            </div>
            <div class="col-sm-4">
                <h4 class="_title">友情链接</h4>
                <div id="" class="_single">
                                     <p><a href="http://www.mensa.com" target="_blank">门萨中国</a></p>
                                     <p><a href="https://en.wikipedia.org" target="_blank">维基百科</a></p>
                                     <p><a href="https://www.zhihu.com" target="_blank">知乎</a></p>
                                     <p><a href="www.sina.com" target="_blank">新浪</a></p>
                                     <p><a href="https://www.douban.com" target="_blank">豆瓣</a></p>
                                 </div>
            </div>
        </div>
    </div>
</footer>
<div class="footer_bottom">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="">一少的博客</a>
                |
                <a href="">我和自己所有</a>
                |
                <a href="">id_signorino@sina.com</a>
            </div>
        </div>
    </div>
</div>
<!--返回顶部自己写的插件-->
<script src="http://localhost/wamp-online/blog/resource/home/js/backTop.js" type="text/javascript" charset="utf-8"></script>
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

