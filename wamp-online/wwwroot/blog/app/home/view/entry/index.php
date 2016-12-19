<extend file='../home'/>
<block name="content">
	<main class="col-md-8">
		<foreach from="$data" key="$k" value="$v">
		<article>
			<div class="_head">
				<h1>{{$v['title']}}</h1>
								<span>
								作者：
								{{$v['author']}}
								</span>
				•
				<!--pubdate表⽰示发布⽇日期-->
				<time pubdate="pubdate" datetime="2011-1-1">{{date('y-m-d',$v['sendtime'])}}</time>
				•
				分类：
				<a href="{{u('listpage.index',['cid'=>$v['cid']])}}">{{$v['cname']}}</a>
				<p>浏览：{{$v['click']}}</p>
			</div>
			<div class="_digest">
				<img src="{{$v['thumb']}}"  class="img-responsive"/>
				<p>
					{{$v['digest']}}
				</p>
			</div>
			<div class="_more">
				<a href="{{u('content.index',['aid'=>$v['aid']])}}" class="btn btn-default">阅读全文</a>
			</div>
			<div class="_footer">
				<i class="glyphicon glyphicon-tags"></i>
				<foreach from="$v['tag']" key="$kk" value="$vv">
				<a href="{{u('listpage.index',['tid'=>$vv['tid']])}}">{{$vv['tname']}}</a>、
				</foreach>
			</div>
		</article>
		</foreach>

		{{$page}}
	</main>
</block>
