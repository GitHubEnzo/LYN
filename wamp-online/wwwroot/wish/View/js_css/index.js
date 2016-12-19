$(function(){
    //显示注册窗口
    $('.reg').click(function(){
        $("#reg").stop().slideDown(1000);
        $("#login").css({display:"none"});
    });
    //显示注册窗口
    $('.login').click(function(){
        $("#login").stop().slideDown(1000);
        $("#reg").css({display:"none"});
    });
    //取消注册或登陆
    $('.delbt').click(function(){
        $("#login").stop().slideUp(1000);
        $("#reg").stop().slideUp(1000);
        $("#write").stop().slideUp(1000);

    })
    //注册时异步检验用户名
    $('#regin').keyup(function(){
        var username=$(this).val();
        if($.trim(username)==''){
            //清除原有残留消息
            $('#regu').html('');
            //如果为空,不发异步,return 终止
            return;
        }
        console.log(username);
        $.ajax({
            url:'?fun=uname',
            type:'post',
            data:{u:username},
            dataType:'json',
            success:function(phpData){
                if(phpData=="0"){
                    $('#regu').html('<span style="color:blue">用户名可用</span>');
                    $('.regbt').attr('disabled',false);
                }else{
                    $('#regu').html('<span style="color:red">用户名已存在</span>');
                    $('.regbt').attr('disabled',true);
                }
            }
         })
    })
    //注册
    $('#reg').submit(function () {
        var formData = $(this).serialize();
        $.ajax({
            url:"?fun=reg",
            data:formData,
            type:'post',
            success:function (phpData) {
                    alert(phpData);
                     $('#regu').html('');
                    $("#reg").stop().slideUp(1000);
                    $("#reg")[0].reset();
                    $("#login").stop().slideDown(1000);
            }
        })
    })
    //登陆
    $('#login').submit(function () {
        var formData = $(this).serialize();
        $.ajax({
            url:"?fun=login",
            data:formData,
            type:'post',
            success:function (phpData) {
                if(phpData=="2"){
                    alert('验证码错误')
                }
                if(phpData=="0"){
                    $("#login")[0].reset();
                    $("#login").stop().slideUp(1000);
                    location.href='index.php';
                    // alert ("登陆成功，快许愿吧！")
                }
                if(phpData=="1"){
                        $("#login")[0].reset();
                        alert ("用户名或密码错误")
                    }
                }
        })
    })
    //写愿望
    $(".wish").click(function(){
        $("#write").stop().slideDown(1000);
    })
    //异步添加愿望
    $("#write").submit(function(){
        var formData = $(this).serialize();
        $.ajax({
            url:"?fun=wish",
            data:formData,
            type:'post',
            dataType:'json',
            //指定PHP服务器返回的数据类型
            success:function (phpData) {
                var t=phpData[0].numt+'px';
                var l=phpData[0].numl+'px'
                var str='<div class="paper" style="top:';
                str +=t+';left:'+l+'">'
                str +="<p class='id'>"+phpData[0].username+"</p>";
                str +='<p class="content">'+phpData[0].wish+"</p>";
                str += '</div>';
                $('body').append(str);
                $("#write").stop().slideUp(1000);
                $("#write")[0].reset();
            }
        })
    })
    //双击删除(只删除标签不删除数据库)
    $(".paper").live('dblclick',function(){
        $(this).remove();
    })
//  单击移动位置
    $(".paper").live('mousedown',function(ev){ 
    	var top=ev.offsetY;
		var left=ev.offsetX;
		var i=true;		
    	$(this).live('mousemove',function (ev){    		
			console.log(ev.clientX)
			console.log(left)			
			w= ev.clientX-left;
			h= ev.clientY-top;
			console.log(w)
			console.log(h)
			if(i){
				$(this).css({left:w,top:h});
			}				
    	})
    	$(this).live('mouseup',function(ev){
    		i=false;	    		
    	})
    	$(this).live('mouseout',function(ev){
    		i=false;	    		
    	})
    })
})