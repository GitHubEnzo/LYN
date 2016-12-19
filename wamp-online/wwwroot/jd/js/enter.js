$(function(){
	$("form").submit(function(){
		var data=$("form").serializeArray();
	 	console.log(data);
	 	$.each(data,function(n,v){	
	 		
	 	})
	 	if(data[0].value==localStorage.getItem("user") && data[1].value==localStorage.getItem("pass") ){
		 	window.location.href='../jd.html';
		 	}else{
		 		alert("账号与密码不符，请重新输入")
		 	}
	})
})
 
	
