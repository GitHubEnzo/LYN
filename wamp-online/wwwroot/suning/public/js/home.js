$(function(){
//	顶部广告开关
	$('.close').click(function(){
		$("#top_ad").css({display:'none'});
		$('.open').css({display:'block'});
		$('.close').css({display:'none'})
	});
	$('.open').click(function(){
		$("#top_ad").css({display:'block'});
		$('.open').css({display:'none'});
		$('.close').css({display:'block'})	
	});
//	回到顶部
$('.back').click(function(){
    $('body,html').animate({ scrollTop: 0 }, 500);
//  阻止跳转
    return false;
})
//滚动条
	function runs(){
		 var i=0;
			$('#run_bar_left').click(function(){
				run();			
			});
			$('#run_bar_right').click(function(){
				i=i-2;
				run();
			});	
		function run(){
			i++;console.log(i);
			//	回流
			if(i==3){
				$("#run_bar_all").css('left','0px');
				i=1;
			}
			if(i==-1){
				$("#run_bar_all").css('left','-2380px');
				i=1;
			}
			$('#run_bar_all').animate({left:i*-1190+'px'},500);
		}
	}
runs();	
})
