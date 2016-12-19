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
//楼层导航**********************************************************************
function floor (){
		   //窗口宽高发生变化时执行
      $(window).resize(function(){
        setLeft();
      })
      //计算楼层导航定位的left值,并赋值
      function setLeft(){
        var clientWidth = $(window).width();//获取可视区宽度
        var mainWidth = $('.wrapper').width();
        var menuWidth = $('#floorMenu').width();
        var menuLeft = (clientWidth - mainWidth)/2-menuWidth-10;
        $('#floorMenu').css('left',menuLeft);

      }
	  var floor = [];//各楼层距离顶部距离的数组
      $('.floor').each(function(i,ele){
        //将各楼层距离文档的top距离存入数组中
        floor.push($(ele).offset().top);
      });
      $(window).on('scroll.floor',scroll);
      function scroll(){//滚动条滚动事件
        //时时获取滚动条滚过的距离
        var scrollTop = $(window).scrollTop();
        if(scrollTop>=1100){
//          超过400让楼层导航显示
          $('#floorMenu').show('fast');
        }
        if(scrollTop<1100){
//          小于400让楼层导航消失
          $('#floorMenu').hide('fast');
        }
        //通过滚过的距离获取楼层索引
        var index = getIndex(scrollTop);
        //改变对应索引值楼层导航的样式.
        changeFloor(index);
      }

      //根据滚动条滚过的距离计算楼层索引
      function getIndex(scrollTop){
        //当滚动条滚过的距离大于最后一层到顶部的距离时,那么返回最后一层的索引值
        if(scrollTop>floor[floor.length-1]-400){
          return floor.length - 1;
        }
        //循环比对,滚过的距离>当前楼层顶部 < 下一楼层顶部,那么返回当前楼层索引.
        //-200是为了有更好的用户体验,让当前楼层在中间显示.
        for(var i=0;i<floor.length;i++){
          if(scrollTop>floor[i]-400&&scrollTop<floor[i+1]-400){
            return i;
          }
        }
      }
      //根据索引,控制楼层导航样式
      function changeFloor(num){

        $('#floorMenu li').eq(num).addClass('active').siblings('li').removeClass('active');
      }


      $('#floorMenu li').click(function(){
//        点击时取消滚动事件,目的是为了防止,animate运动时触发滚动事件,进而产生楼层切换的跑马灯效果
        $(window).off('scroll.floor');
        var index = $(this).index();
        changeFloor(index);
//        根据索引去数组中取出 滚动条要滚到的距离
//        console.log(index,floor,floor[index]);
        var target = floor[index];
        $('html,body').animate({scrollTop:target},500,function(){
//          运动结束之后,重新绑定滚动事件,不绑定的话,在手动滚动滚动条时,将无法做楼层导航的切换,因为滚动事件已经被取消了
          $(window).on('scroll.floor',scroll);
        });
      })
}
floor();













})
