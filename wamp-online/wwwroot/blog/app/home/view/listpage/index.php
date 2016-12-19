<extend file='../home'/>
<block name="content">
	<main class="col-md-8">
		<article>
			<div class="_head category_title">
				<h2>
					{{$HeadData['type']}}：
					<!--分类：-->
					{{$HeadData['name']}}
				</h2>
								<span>
									共 {{$HeadData['total']}} 篇文章
								</span>
			</div>
		</article>
		<foreach from="$ArticleData" key="$k" value="$v">
		<article>
			<div class="_head">
				<h1>{{$v['title']}}</h1>
								<span>
								作者：
								{{$v['author']}}
								</span>
				•
				<!--pubdate表⽰示发布⽇日期-->
				<time pubdate="pubdate" datetime="">{{date('y-m-d',$v['sendtime'])}}</time>
				•
				分类：
				<a href="show_{{$v['cid']}}.html">{{$v['cname']}}</a>
			</div>
			<div class="_digest">
				<img src="{{$v['thumb']}}"  class="img-responsive"/>
				<p>
					{{$v['digest']}}
				</p>
			</div>
			<div class="_more">
				<a href="arc_{{$v['aid']}}.html" class="btn btn-default">阅读全文</a>
			</div>
			<div class="_footer">
				<i class="glyphicon glyphicon-tags"></i>
				<foreach from="$v['tag']" key="$kk" value="$vv">
				<a href="tag_{{$vv['tid']}}.html">{{$vv['tname']}}</a>、
				</foreach>
			</div>
		</article>
		</foreach>
		{{$page}}
	</main>
</block>
