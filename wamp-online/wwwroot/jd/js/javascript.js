
	window.onload=function(){
		var tp=document.getElementById("list_tp");
		var imgs=tp.getElementsByTagName("img");
		var left=document.getElementsByClassName("qhleft")[0];
		var right=document.getElementsByClassName("qhright")[0];
		var	lis=document.getElementsByClassName('li');
		var num=0;
		function chance(){
				num++;			
			if(num==6){num=0};
			run(num);
		};
		function run(){
			for (var i=0;i<imgs.length;i++) {
			imgs[i].style.display="none";
			lis[i].style.borderColor="rgba(0,0,0,0.3)";
			};
			imgs[num].style.display="block";
			lis[num].style.borderColor= "#EE4015";
		}

		tp.onmouseover=function(){
			clearInterval(timer)
		}
		tp.onmouseout=function(){
			timer=setInterval(chance,1500);
		}
		left.onclick=function(){
			 num--;
			 if (num==-1) {num=imgs.length-1}
			 run(num);				
		}	
		left.onmousedown=function(){
			left.style.background="#D84B28";
			left.style.color="#fff"
		}
		left.onmouseup=function(){
			left.style.background="rgba(0,0,0,0.2)";
			left.style.color="black"
		}
		right.onmousedown=function(){
			right.style.background="#D84B28";
			right.style.color="#fff"
		}
		right.onmouseup=function(){
			right.style.background="rgba(0,0,0,0.2)";
			right.style.color="black"
		}				
		right.onclick=function(){
			chance();		
		}		
		for (var j = 0; j < lis.length; j++) {
			lis[j].xuhao=j;
			lis[j].onmouseover=function(){
				num=this.xuhao;
				run(num);
			};
		}
		timer=setInterval(chance,1500);
//			小红条
		var middle=document.getElementById("middle_3");
		var tp2=document.getElementsByClassName("middle_3_1");
		
		

		middle.onmouseover=function(){
           // 执行函数
           tp2[0].style.left = 0 + "px";
           function over(){
           	   // 获得旧值
           	   var old_l = tp2[0].style.left;
           	   // 产生新值
           	   var new_l = parseInt(old_l) + 7;
           	   // 设置范围
           	   if(new_l>=850){
           	   	   clearInterval(timer1);
                   return;
           	   }
           	   middle.onmouseout=function(){
           	   	tp2[0].style.left = 850 + "px";
           	   		clearInterval(timer1);
           	   		
           	   }
       			   // 把值赋回
       			   tp2[0].style.left = new_l + "px";
           }
           // 定时器
           timer1 = setInterval(over,1);
      } 

	};
//	tab
	$(function(){
		$(".middle_7_1_2 li").mouseover(function(){
			var num=$(this).index(".middle_7_1_2 li");
			$(".middle_7_1_2 li").eq(num).css({	borderTopColor:"#C81623",
		borderLeftColor: "#C81623",borderBottomColor:"#ffffff",borderRightColor: "#C81623"}).siblings("li").css({borderColor:"transparent"});
			$(".middle_7_1_2 li").eq(num+1).css({borderLeftColor: "#C81623",});
			$(".dvc").eq(num).stop().fadeIn().siblings(".dvc").stop().fadeOut();		
		});
//		多运动
		$(".dv1_1_1").each(function(){
//			赋值
			var jq_this=$(this);
			var js_this=this;
			js_this.num=1;
			
//			自动回流
			js_this.run=function (){
				js_this.num++;
				if(js_this.num==6){
					jq_this.find(".dv1_1_1_1").css({left:-439+"px"});
					js_this.num=2;
				};
				js_this.runs(js_this.num);
			};
//			主函数
			js_this.runs=function(){
				jq_this.find(".dv1_1_1_1").stop().animate({left:js_this.num*-439+"px"},1000);
				js_this.num1=js_this.num-1;
				if(js_this.num1==4){
					js_this.num1=0;
				}
				jq_this.find(".dvli").eq(js_this.num1).css({background:"#C81623"}).siblings().css({background:"black"})
			};	
//			计时器
			js_this.timer=setInterval(js_this.run,2000);
//			移入
			jq_this.mouseover(function(){			
				clearInterval(js_this.timer);
			});
//			移除
			jq_this.mouseout(function(){
				js_this.timer=setInterval(js_this.run,2000);
			});	
//			左右切换
			jq_this.find(".dv_left").click(function(){
				js_this.num--;
				if(js_this.num==-1){
					jq_this.find(".dv1_1_1_1").css({left:-1756+"px"});
					js_this.num=3;
				}
				js_this.runs(js_this.num);
			});
			jq_this.find(".dv_right").click(function(){
				js_this.run();
			});
//			移入
			jq_this.find(".dvli").mouseover(function(){
				
				js_this.num=$(this).index()+1;
				js_this.runs();
			});
	
		});
//		地址选择
//	$(".top_l_4_1_1 a").click(function(){
//		var number1=$(this).index(".top_l_4_1_1 a);
//		$(".top_l_4_1_1 a").css({background:"#fff"}).eq(number1).css({background:"#C81623",color:"#FFF"})
//	})
//	滚动条事件
	$(window).scroll(function(){
		tops=$(window).scrollTop();
		document.title=tops;
//	滚动条出现
		if(tops>=1400){
			numb=20;
			$(".nav_left").css({display:"block"})
		}
		else{
			$(".nav_left").css({display:"none"})
		}
//	滚动条控制导航
		if(tops>=1700){
			numb=0
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
			$(".middle_7_1_1 .mp").css({background:"block"})
			$(".middle_7_1_1 .mp").eq(numb).css({background:"none"})
		}		
		if(tops>=2400){
			numb=1
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
			$(".middle_7_1_1 .mp").css({background:"block"})
			$(".middle_7_1_1 .mp").eq(numb).css({background:"none"})
		}
		if(tops>=3100){
			numb=2	
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
			$(".middle_7_1_1 .mp").css({background:"block"})
			$(".middle_7_1_1 .mp").eq(numb).css({background:"none"})
		}
		if(tops>=3800){
			numb=3
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
			$(".middle_7_1_1 .mp").css({background:"block"})
			$(".middle_7_1_1 .mp").eq(numb).css({background:"none"})
		}
		if(tops>=4500){
			numb=4
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
			$(".middle_7_1_1 .mp").css({background:"block"})
			$(".middle_7_1_1 .mp").eq(numb).css({background:"none"})
		}
		if(tops>=5200){
			numb=5
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
			$(".middle_7_1_1 .mp").css({background:"block"})
			$(".middle_7_1_1 .mp").eq(numb).css({background:"none"})
		}
		if(tops>=5900){
			numb=6
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
			$(".middle_7_1_1 .mp").css({background:"block"})
			$(".middle_7_1_1 .mp").eq(numb).css({background:"none"})
		}
		if(tops>=6600){
			numb=7
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
			$(".middle_7_1_1 .mp").css({background:"block"})
			$(".middle_7_1_1 .mp").eq(numb).css({background:"none"})
		}
		if(tops>=7300){
			numb=8
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
			$(".middle_7_1_1 .mp").css({background:"block"})
			$(".middle_7_1_1 .mp").eq(numb).css({background:"none"})
		}
		if(tops>=8000){
			numb=9
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
			$(".middle_7_1_1 .mp").css({background:"block"})
			$(".middle_7_1_1 .mp").eq(numb).css({background:"none"})
		}
		if(tops>=8700){
			numb=10
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
			$(".middle_7_1_1 .mp").css({background:"block"})
			$(".middle_7_1_1 .mp").eq(numb).css({background:"none"})
		}
		if(tops>=9300){
			numb=11
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
			$(".middle_7_1_1 .mp").css({background:"url('../images/aa.png)+ 0 -35+'px;'"})
			$(".middle_7_1_1 .mp").eq(numb).css({background:"none"})
		}
	});
//鼠标移入
	$(".nav_left1").mouseover(function(){
		 numa = $(this).index(".nav_left1");
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numa).css({background:"#C81623",color:"#FFF",display:"block"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
	})
//鼠标移出去
	$(".nav_left1").mouseout(function(){
		 numa = $(this).index(".nav_left1");
			$(".nav_left1 p").css({display:"none"})
			$(".nav_left1 p").eq(numb).css({background:"#FFF",color:"#C81623",display:"block"})
	})
//点击跳转楼层
		$(".nav_left1").click(function(){
			 numb = $(this).index(".nav_left1");
			 
			$(".nav_left1 p").css({background:"#C81623",color:"#FFF",display:"none"})
			$("html,body").animate({scrollTop:numb*700+1700},1000);
			$(".nav_left1 p").eq(numb).css({background:"#C81623",color:"#FFF",display:"block"})
			
		});
//		登陆
var name = localStorage.getItem("user");
//alert(name)
	if(null){
		$(".denglu").html("请登录");
		$(".tuichu").html("免费注册");
		$(".tuichu").click(function(){
	        	    localStorage.clear();
	        	    location.href = "html/register.html";
	       })
	}
	
	else{	
		$(".denglu").html("欢迎您&nbsp;"+name+"&nbsp;先生/女士");
		$(".tuichu").html("退出登陆");
		$(".tuichu").click(function(){
	        	    localStorage.clear();
	        	    location.href = "html/register.html";
	       })
	}
});