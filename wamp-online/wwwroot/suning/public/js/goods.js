	$(function(){
//	   $(".jqzoom").jqueryzoom({
//			xzoom:400,
//			yzoom:400,
//			offset:10,
//			position:"right",
//			preload:1,
//			lens:1
//		});
		$("#spec-list img").bind("mouseover",function(){
			var src=$(this).attr("src");
			$("#spec-n1 img").eq(0).attr({
				src:src.replace("\/n5\/","\/n1\/"),
				jqimg:src.replace("\/n5\/","\/n0\/")
			});
			$(this).css({
				"border":"2px solid #ff6600",
				"padding":"1px"
			});
		}).bind("mouseout",function(){
			$(this).css({
				"border":"1px solid #ccc",
				"padding":"2px"
			});
		});
		$('.clr-item').click(function(){
			 $(this).addClass("selected").siblings().removeClass("selected");
		})
		$('.clearfix li').click(function(){
			$(this).addClass("selected").siblings().removeClass("selected");
		})
		$('.tzmyb li').click(function(){
			var val=$(this).attr('class');
			if(val=='selected'){
				$(this).removeClass("selected");
			}else{
				$(this).addClass("selected");
			}
//			
		})
		   var t = $(".textBox");
		$('.min').attr('disabled',true);
		    $(".add").click(function(){    
		        t.val(parseInt(t.val())+1)
		        if (parseInt(t.val())!=1){
		            $('.min').attr('disabled',false);
		        }
		      
		    }) 
		    $(".min").click(function(){
		        t.val(parseInt(t.val())-1);
		        if (parseInt(t.val())==1){
		            $('.min').attr('disabled',true);
		        }
		      
		    })	
		    $(".tabarea-lis").click(function(){
		    	$(this).addClass("surrent").siblings().removeClass("surrent");
		    	var hao=$(".tabarea-lis").index(this);
		    	$('.procon-box').eq(hao).css({display:"block"}).siblings('.procon-box').css({display:"none"});
		    })  
	})  
