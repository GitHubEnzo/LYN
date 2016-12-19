<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">    	
    <title>个人中心</title>
    <link rel="icon" href="favicon.ico" />
    <link href="http://localhost/wamp-online/suning/resource/hdjs/css/font-awesome.min.css" rel="stylesheet">
    <script type="text/javascript" src="http://localhost/wamp-online/suning/resource/hdjs/js/jquery.min.js"></script>
    <script type="text/javascript" src='http://localhost/wamp-online/suning/public/js/home.js'></script>
    <script type="text/javascript" src="http://localhost/wamp-online/suning/libs/functions.js"></script>
    <link rel="stylesheet" type="text/css" href="http://localhost/wamp-online/suning/public/css/home.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/wamp-online/suning/public/icon/iconfont.css"/>
    <link rel="stylesheet" type="text/css" href="http://localhost/wamp-online/suning/libs/functions.css"/>
</head>
<body>
<!--顶部广告-->


<!--顶部广告结束-->
<!--顶部条-->

<!--顶部条结束-->
<!--右边条-->

<!--右边条结束-->
<!--搜索-->

			
<!--主体部分-->
<div>
    
<!--顶部开始-->
<header>
	
	<header>
    <div id="top_bar">
        <!--顶部条左-->
        <div id="top_bar_left">
            <p>
                <a href="">网站导航</a><i class="icon iconfont" style="color: #BBBBBB;font-size: 10px;">&#xe6a6;</i>
            </p>
            <p>
                <a href="">商家入住</a><i class="icon iconfont" style="color: #BBBBBB ;font-size: 10px;">&#xe6a6;</i>
            </p>
        </div>
        <!--顶部条左结束-->
        <!--顶部条右-->
        <div id="top_bar_right">
            <p>
                <a href="<?php echo u('orderlist.index')?>">我的订单</a><i class="icon iconfont" style="color: #BBBBBB ;font-size: 10px;">&#xe6a6;</i>
            </p>
            <p>
                <a href="">我的易购</a><i class="icon iconfont" style="color: #BBBBBB ;font-size: 10px;">&#xe6a6;</i>
            </p>
            <p>
                <em class="icon iconfont " id="bus">&#xe698;</em><a href="<?php echo u('incart.index')?>">购物车</a>
            </p>
            <p id="phone">
                <em class="icon iconfont">&#xe72a;</em><a href="">手机苏宁</a><i class="icon iconfont" style="color: #BBBBBB ;font-size: 10px;">&#xe6a6;</i>
            </p>
            <p>
                <a href="<?php echo u('pay.index')?>">易付宝</a>
            </p>
            <p>
                <a href="">企业采购</a>
            </p>
            <p>           	
                <a href="">客户服务<img src="public/image/askBar.gif"/></a>
            </p>
        </div>
        <!--顶部条右结束-->
        <!--登陆、注册-->
        <div id="login_reg">
            <?php if($_SESSION['home']['uid']){?>
                
                <a href="<?php echo u('orderlist.index')?>" id="login">欢迎您！<span style="color: orange;"><?php echo $_SESSION['home']['account']?><span></a>
                <a href="<?php echo u('entry.out')?>" id="reg">退出</a>
                <?php }else{?>
                <a href="<?php echo u('login.index')?>" id="login">登陆</a>
                <a href="<?php echo u('reg.index')?>" id="reg">注册</a>
            
               <?php }?>

        </div>
        <!--登陆、注册结束-->
    </div>
    </header>

</header>
<!--我的易购-->
<div class="">
	<div class="yigou">
		<h1>我的易购</h1>
	</div>
</div>
<!--分类-->
<div class="list">
	<ul>
		<h3><li>全部订单</li></h3>
		<h3><li>代付款</li></h3>
		<h3><li>代收货</li></h3>
		<h3><li>待评价</li></h3>
	</ul>
	<div class="">
		
		<p></p>
	</div>
</div>
<!--顶部条-->
<div id="">
	<div id="cart_bar">
		<p>
		<select name="">
			<option value="">近一个月订单</option>
			<option value="">近三个月订单</option>
			<option value="">近半年订单</option>
		</select>
		</p>
		<p>商品信息</p>
		<p>单价（元）</p>
		<p>数量</p>
		<p>下单时间</p>
		<p>支付总金额（元）</p>
		<p>订单状态</p>
		<p>操作</p>
	</div>

</div>
</div>
<!--顶部条结束-->
<!--商品开始-->
<div class="oldergoods">
	<?php if(!empty($data)){ foreach ($data as $k=>$v){?>
	<div id="by">
		<img src="./favicon.ico"/>
		<h3 class="num" value='<?php echo $v['number']?>'>订单号:<?php echo $v['number']?></h3>
	</div>
</div>
<div class="oldergoods">
<?php if(!empty($v['goods'])){ foreach ($v['goods'] as $kk=>$vv){?>
	
	<div class="cart_goods" >
		<p><input type="checkbox" name="" id="" value="" /></p>
		<div class="">
			<img src="<?php echo $vv['pic']?>"/>
			<div class="words">
				<a href="<?php echo u('goods.index',['gid'=>$vv['gid'],'tid'=>$vv['tid']])?>"><?php echo $vv['gname']?></a>
				<br>
				<img src="./favicon.ico"/>
			</div>
		</div>
		<div class="cart_details">
			<span>¥ <?php echo $vv['shopprice']?></span>
		</div>
		<div class="cart_details">
			<span><?php echo $vv['quantity']?> <?php echo $vv['unit']?></span>
		</div>
		<div class="cart_details">
						<a href=""><span><?php echo date('Y-m-s,H:m:s',$v['time'])?></span></a>
		</div>
		<div class="cart_details">
						<span>¥ <?php echo $vv['subtotal']?></span>
		</div>
		<div class="cart_details">
						<span style="color: red;" class="state"><?php echo $v['status']?></span>
		</div>
	</div>
<?php }}?>
		<div class="cart_details pay">

						<?php if($v["status"] == "未付款"){?>
                
						<a href="javascript:;"><span value="<?php echo $v['number']?>" >收藏</span></a>							
						<a href="javascript:;" ><span class="pays" value="<?php echo $v['number']?>">马上支付</span></a>						    												     
						<?php }else if($v["status"] == "退货中"){?>
						<a href="javascript:;"><span value="<?php echo $v['number']?>" >正在退货</span></a>						
						<?php }else{?>
						<a href="javascript:;"><span value="<?php echo $v['number']?>" class='sales'>退货</span></a>						
						<a href="javascript:;" ><span value="<?php echo $v['number']?>">交易正在处理</span></a>
						
               <?php }?>

		</div>
<?php }}?>
</div>
<!--底部开始-->
<footer>
	
	<footer>
        <!--友情链接开始-->
        <div id="link">
            <a href="">苏宁控股</a><span >|</span>
            <a href="">苏宁云商</a><span >|</span>
            <a href="">苏宁互联</a><span >|</span>
            <a href="">苏宁金融</a><span >|</span>
            <a href="">PPTV</a><span >|</span>
            <a href="">红孩子</a><span >|</span>
            <a href="">乐购仕</a><span >|</span>
            <a href="">苏宁物流</a><span >|</span>
            <a href="">手机苏宁</a><span >|</span>
            <a href="">苏宁酒店</a><span >|</span>
            <a href="">知识产权举报</a>
            <br>
            <a href="">关于苏宁易购</a><span >|</span>
            <a href="">联系我们</a><span >|</span>
            <a href="">诚聘英才</a><span >|</span>
            <a href="">供应商入驻</a><span >|</span>
            <a href="">广告平台</a><span >|</span>
            <a href="">苏宁联盟</a><span >|</span>
            <a href="">苏宁招标</a><span >|</span>
            <a href="">友情链接</a><span >|</span>
            <a href="">法律申明</a><span >|</span>
            <a href="">用户体验提升计划</a><span >|</span>
            <a href="">股东会员认证</a>
        </div>
        <!--友情链接结束-->
        <!--网站配置开始-->
        <div id="webset">
            <span>Copyright© 2002-2016 ，苏宁云商集团股份有限公司版权所有 苏ICP备10207551号-4</span>
            <span >|</span>
            <span>苏B1-20130131</span>
            <span >|</span>
            <span >苏B2-20130376</span>
            <br>
            <span>苏B2-20130391 出版物经营许可证新出发苏批字第A-243号</span>
            <span >|</span>
            <span>互联网药品信息服务资格证书（苏）-非经营性-2016-0005</span>
            <br>
            <span >本网站直接或间接向消费者推销商品或者服务的商业宣传均属于“广告”（包装及参数、售后保障等商品信息除外）</span>
        </div>
        <!--网站配置结束-->
        <!--授权开始-->
        <div id="authorization">
            <img src="./public/image/chengxin.png"/>
            <img src="./public/image/unicom.png"/>
            <img src="./public/image/dianxin.png"/>
            <img src="./public/image/dianzi.png"/>
        </div>
    </footer>
        <!--授权结束-->

</footer>
<!--底部结束	-->

</div>
<!--主体部分结束-->
<!--服务-->

<!--底部开始-->

<!--底部结束-->
</body>
</html></extend>
<link rel="stylesheet" type="text/css" href="<?php echo __ROOT__?>/public/css/orderlist.css"/>
<!--<script type="text/javascript" src="./public/js/orderlist.js">-->
	
</script>

<script type="text/javascript">
	$(function(){
		$('.pays').click(function(){
			if($(this).text()=='马上支付'){
				var num=$(this).attr('value');
			var  jq_this=$(this);
			data={num:num}
			$.post("<?php echo u('pay')?>",data,function(res){
				jq_this.parents('.cart_details').siblings().find('.state').html('待发货');
				jq_this.parent('a').siblings().find('span').html('退货');				
				jq_this.parent('a').siblings().find('span').addClass("sales");
				jq_this.html('交易正在处理');				
				alert('订单'+num+'付款成功')
		},"json");
		return false;
			}						
		})
//		退货
		$('.cart_details').on('click','.sales',function(){
			if($(this).text()=='退货'){
				var num=$(this).attr('value');
			var  jq_this=$(this);
			data={num:num}
			$.post("<?php echo u('sales')?>",data,function(res){
				jq_this.parents('.cart_details').siblings().find('.state').html('退货中');
				jq_this.html('正在退货');				
				alert('订单'+num+'已退货，等待卖家处理')
		},"json");
		return false;
			}						
		})
	})
</script>