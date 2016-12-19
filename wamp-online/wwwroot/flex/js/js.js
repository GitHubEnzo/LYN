$(function(){
var num=true;
	$("span").click(function(){
		if(num==true){
			$("aside a").stop().slideDown(1000);
			$("span").css({transform: "rotate("+90+"deg)"})
			num=false;
		}
else{
			$("aside a").stop().slideUp(1000);
			$("span").css({transform: "rotate("+-90+"deg)"})
			num=true;
		}
	})
	
})
