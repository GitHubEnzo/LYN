$(function(){
//放大镜**********************************************************
function magnify(){
			var imgs=$(".magnify li").find('img').eq(0).attr('src');
			$(".mf_picture").css({background:'url('+imgs+')','background-size':'cover'})
			$(".mf_picture_big img").attr('src',imgs)
			$(".mf_picture_max").css({background:'url('+imgs+')','background-size':'cover'})
//			移入小图
			$(".magnify li").mouseover(function(){
			var imgs=$(this).find('img').attr('src');
			$(".mf_picture").css({background:'url('+imgs+')','background-size':'cover'})
			$(".mf_picture_big img").attr('src',imgs)
			$(".mf_picture_max").css({background:'url('+imgs+')','background-size':'cover'})
			});
//			移入中图
			$(".film").mousemove(function(ev){
			$(".patch").css({display:"block"});
			$(".mf_picture_big ").stop().fadeIn();
//			鼠标在中图的位置
			var top=ev.offsetY;
			var left=ev.offsetX;			
//			限制
			if(left<$('.patch').width()/2){
	          left = $('.patch').width()/2;
	        }
	        if(left>$('.film').width()-$('.patch').width()/2){
	          left =$('.film').width()-$('.patch').width()/2;
	        }
	        if(top<$('.patch').height()/2){
	          top = $('.patch').height()/2;
	        }
	        if(top>$('.film').height()-$('.patch').height()/2){
	          top = $('.film').height()-$('.patch').height()/2;
	        }
//			设定小块位置
        	w=left-$(".patch").width()/2;
			h=top-$(".patch").height()/2;
			$(".patch").css({left:w,top:h});
			$(".mf_picture_big img").css({left:-2*w,top:-2*h})
			});
//			移出中图
			$(".film").mouseout(function(){		
			$(".mf_picture_big").stop().fadeOut();
			$(".patch").css({display:"none"})
			});
//			点击中图
			$(".film").click(function(){
				$(".mf_picture_max").stop().fadeIn();
				$(".mf_picture_big").stop().fadeOut();
				$(".patch").css({display:"none"})
			});
			$(".mf_picture_max").click(function(){
				$(".mf_picture_max").stop().fadeOut();
			});
//			左点击
//			$(".magnify_left").click(function(){
//				$("")
//			});
			
}
 magnify();
//轮播图（支持多运动）*************************************************
function shuffling(){
$(".shuffling").each(function(){
	var jq_this=$(this);
	var js_this=this
	js_this.i=0;
	js_this.j=0;
	js_this.k=jq_this.find('li').length;
	js_this.tp_w=parseInt(jq_this.css('width'));
	console.log(js_this.tp_w);
//	自动轮播
	js_this.run=function(){
		js_this.i++;
		js_this.j++;
//		左点击、自动判断
		if(js_this.i==js_this.k+1){
				jq_this.find(".sf_picture").css('left','0px');
				js_this.i=1;				
			}		
		if(js_this.j==js_this.k){
			js_this.j=0;
		}
//		右点击判断
		if(js_this.i==-1){
				jq_this.find(".sf_picture").css('left',js_this.k*-(js_this.tp_w)+'px');
				js_this.i=js_this.k-1;				
			}
		if(js_this.j==-2){
			js_this.j=js_this.k-2;
		}		
		jq_this.find('.sf_picture').animate({left:-(js_this.tp_w)*js_this.i+'px'},ani);
		jq_this.find('li').eq(js_this.j).css({border:'2px solid red'}).siblings().css({border:'2px solid black'});
	};
//	鼠标移入
	jq_this.mouseover(function(){
		clearInterval(js_this.timer);
	});
//	鼠标移出
	jq_this.mouseout(function(){
		js_this.timer=setInterval(js_this.run,stime);
	});
//	左点击
	jq_this.find('.sf_left').stop().click(function(){
		js_this.run();
	});
//	右点击
	jq_this.find('.sf_right').stop().click(function(){	
		js_this.i=js_this.i-2;
		js_this.j=js_this.j-2;
		js_this.run(js_this.i,js_this.j);
	});
//	小圆点手动
	jq_this.find('li').mouseover(function(){
		js_this.i=$(this).index()-1;
		js_this.j=$(this).index()-1;
		js_this.run(js_this.i,js_this.j);
	})
		js_this.timer=setInterval(js_this.run,stime);
})
}
//执行轮播图
//shuffling(ani=动画时间(单位毫秒),stime=定时器时间(单位毫秒));
shuffling(ani=500,stime=2000);
//********************************************************************************
//加减（支持多运动）*****************************************************************************
function add_cut(){
	$(".add_cut").each(function(){
		var jq_this=$(this);
		var js_this=this
		jq_this.find('.cut').attr('disabled',true);
//		减
		jq_this.find('.cut').stop().click(function(){
			    js_this.i=jq_this.find('.num').val();
				js_this.i=--js_this.i;
//				限制最小数量
				if (parseInt(js_this.i)==min){
            		jq_this.find('.cut').attr('disabled',true);
       			}
//				数量变化
				jq_this.find('.num').val(js_this.i);
				js_this.j=jq_this.find('.price').html();
				js_this.j=(Number(js_this.j*js_this.i)).toFixed(digit);	
//				总价变化
				jq_this.find('.total').html(js_this.j);
		});
//		加
		jq_this.find('.add').stop().click(function(){
				js_this.i=jq_this.find('.num').val();
				js_this.i=++js_this.i;
//	   			限制最大数量
       			if (parseInt(js_this.i)!=min){
            		jq_this.find('.cut').attr('disabled',false);
       			}
       			if (parseInt(js_this.i)==max){
            		jq_this.find('.add').attr('disabled',true);
       			}
       			jq_this.find('.num').val(js_this.i);
       			js_this.j=jq_this.find('.price').html();       			
				js_this.j=(Number(js_this.j*js_this.i)).toFixed(digit);				
				jq_this.find('.total').html(js_this.j);				
		});    
	});
}
//执行加减
//add_cut(min=最小值,max=最大值,digit=小数位数);
add_cut(min=1,max=99,digit=2);
//****************************************************************************
//固定搜索框*********************************************************************
function search(){	
	$(window).scroll(function(){
//		滚动条高度
		tops=$(window).scrollTop();
//		调试使用title显示高度
//		document.title=tops;
//		适口宽度
		width=$(window).width();
		if(tops>=i){//定位
			$(".search_all").css({position:'fixed',top:0+'px',left:(width-j)/2+'px'})
		}else{//取消定位
			$(".search_all").css({position:'static'})
		}
	});
}
//执行固定
//search(i=响应高度,j=元素宽度);
search(i=500,j=1190);
//**********************************************************************************
//音乐播放旋转************************************************************************************
function music(){
	var jq_this=$(this);
	var js_this=this;	
	var i=1;
	var j=0;
	var k=1;
	$(".music_rotate").click(function(){	
		clearInterval(js_this.timer);
		i++; 
//			控制旋转
		if (i%2==0){
			clearInterval(js_this.timer);					
		}
		else{
			js_this.timer=setInterval(js_this.run,mtime);
		}
//			控制音乐
		var mic=document.getElementById("mic"); 
		if(k==0){
		mic.play();
		k=1;
		}else{
		mic.pause();
		k=0;			
		}
	});
//	旋转函数
	 js_this.run=function(){
		j++;	 
		$(".music_rotate").css({transform:"rotateZ("+j*10+"deg)"})			 	
	};
	js_this.timer=setInterval(js_this.run,mtime);
}
//music(mtime=定时器执行时间(单位：毫秒)控制旋转速度)
//默认为自动播放
music(mtime=50)
//**********************************************************************














})
