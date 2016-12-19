$(function(){
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
//      floor.push($('.floor').eq(0).offset().top);
//      floor.push($('.floor').eq(1).offset().top);
//      floor.push($('.floor').eq(2).offset().top);
//      floor.push($('.floor').eq(3).offset().top);
//      floor.push($('.floor').eq(4).offset().top);
//      floor.push($('.floor').eq(5).offset().top);
//      floor.push($('.floor').eq(6).offset().top);
//      floor.push($('.floor').eq(7).offset().top);
//      floor.push($('.floor').eq(8).offset().top);
//      floor.push($('.floor').eq(9).offset().top);
//      console.log(floor);

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
      	console.log(num);
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
	
	
})
