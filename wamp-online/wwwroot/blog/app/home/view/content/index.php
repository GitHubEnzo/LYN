<extend file='../home'/>
<block name="content">
	<main class="col-md-8">
		<article>
			<div class="_head">
				<h1>{{$ArticleData['title']}}</h1>
								<span>
								作者：
								<a href="">{{$ArticleData['author']}}</a>
								</span>

				<!--pubdate表⽰示发布⽇日期-->
				<time pubdate="pubdate" datetime="2015年8月31日星期一晚上9点44">{{date('Y-m-d',$ArticleData['sendtime'])}}</time>
			</div>
			<div class="_digest">
				<p>
					{{$ArticleData['content']}}
				</p>
			</div>
			<div class="_footer">
				<i class="glyphicon glyphicon-tags"></i>
				<foreach from="$ArticleData['tag']" value="$v">
				<a href="tag_{{$v['tid']}}.html">{{$v['tname']}}</a>
				</foreach>
			</div>
		</article>
		<!-- 多说评论框 start -->
		<div class="ds-thread" data-thread-key="{{$ArticleData['aid']}}" data-title="{{$ArticleData['title']}}" data-url="{{$ArticleData['author']}}"></div>
		<!-- 多说评论框 end -->
		<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
		<script type="text/javascript">
			var duoshuoQuery = {short_name:"yishao"};
			(function() {
				var ds = document.createElement('script');
				ds.type = 'text/javascript';ds.async = true;
				ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
				ds.charset = 'UTF-8';
				(document.getElementsByTagName('head')[0]
				|| document.getElementsByTagName('body')[0]).appendChild(ds);
			})();
		</script>
		<!-- 多说公共JS代码 end -->

	</main>
</block>
