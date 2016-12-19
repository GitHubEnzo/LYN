$(function(){
	$("form").submit(function(){
		var data=$("form").serializeArray();
	 	console.log(data);
	 	$.each(data,function(n,v){	
	 		localStorage.setItem(v.name,v.value)
	 	})
	 	if(data[1].value==data[2].value){
	 	window.location.href='enter.html';
	 	}else{
	 		alert("两次密码输入不一致,请重新设定")
	 	}
	})
})
 