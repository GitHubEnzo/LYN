	
$(function(){
	$("header p").addClass("animated zoomIn");
	$("header span").addClass("animated zoomIn");
//	$(".img1").addClass("animated bounceInUp");
	var num=1;
	$("header i").click(function(){		
		if(num==1){
		$("header ul").css({display:"block"});
		num=0;
		}else{
		$("header ul").css({display:"none"})
		num=1;
		};		
	});
	$("header ul a").mouseover(function(){
			$(this).css({fontSize:23+"px",color:"#00D1CA"}).siblings().css({fontSize:16+"px",color:"#E71E8D"})
		});
	$(window).scroll(function(){
        	// 获取滚上去的距离
        	var top = $(window).scrollTop();
        	// document.title = top;
        	// 根据滚动上去的距离添加定位样式
        	if(top>=1800){
 				
		$("footer span").addClass("animated bounceInDown")
		}
	})
});
$(function()
	{ function music(){
		timer=setInterval(run,50);
		timers=setInterval(runs,1500);
		var j=1;
		var num=0;
		$("#dv").click(function abc()
		{	
			clearInterval(timer);
			clearInterval(timers)
			j++; 	
			
			if (j%2==0){clearInterval(timer);
						clearInterval(timers);						
			}
			else{timer=setInterval(run,50);
				timers=setInterval(runs,1500);
			}
		});
		function run()
			{
			 	num++;	 
			 	$("#dv").css({transform:"rotate("+num+"deg)"})
			 	
			};	
		var i=0;
		function runs(){
			i++;
			if (i==10){$("#dv2 #uls").css("top","0px");
				i=1;
			};
			$("#dv2 #uls").animate({top:i*-25+"px"},500);
			$("#uls li").eq(i+1).css("color","#E71E8D").siblings("li").css("color","#fff")
		}
	}
	music()
})
window.onload=function(){
	var dian=document.getElementById("dv");
	var mic=document.getElementById("mic");
	var c=0;
	dian.onclick=function(){
		if(c==0){
			mic.pause();
			c=1;
			}else{
			mic.play();
			c=0	
			}
		}
	}

	

