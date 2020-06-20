
<?php

require_once './jssdk.php';

$jssdk = new JSSDK('wx0cc07dafcefcf23c', 'f60b92ad7dd07e6172eca08307f4530b');
$wxconfig = $jssdk->getSignPackage();

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<!-- 需要改的部分，标题 -->
<title>权利的游戏</title>
<audio  src="./bg0.mp3" autoplay="autoplay" id="audio" ></audio>
<meta name="description" content="">
<meta name="keywords" content="">

<!-- 引入样式 -->
<link rel="stylesheet" type="text/css" href="style/main.css">
<link rel="stylesheet" type="text/css" href="style/main1.css">
<link rel="stylesheet" href="style/animate.css">	
</head>

<body > 
<!--loading begin-->
<!--     <div id="loading">

    </div> -->
<!--loading end-->

<!--内容begin-->
<div class="wrapper" id="wrapper">

<!--首屏 BEGIN-->
		<!-- 每个页面都有公共的layer部分 -->		
		<div class="layer layer1 active" style="display: block">
		<!--首屏标题-->
			
		<!--开始测试按钮-->
	   <!-- 	<div class="startbtn pulse animated infinite"></div> -->
	    <div class="bg">
        	
			<div class="start1"></div>
			<div class="start2 pulse animated infinite"></div>
		

        </div>
	 	
		</div>
<!--首屏 END-->

<!-- 问题1 begin -->
<!-- <div class="layer layer2  " style="display: none"> -->
<div class="layer layer2 " >
<!-- 问题和答案区域 -->
	<div class="anserea">		
				<!-- 斜线begin -->
				<div class="line"></div>
				<!-- 斜线end -->
				<!-- 雪花 -->
				<ul class="snowgrounp  ">
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<!-- 答案 -->
				<div class="chose">
					<ul class="anslist " >
						
						<li class="answer" data-ans="0" style="background-image:url(images/q1-1.png);width:95px;height:40px;"><span></span></li>
						<li class="answer" data-ans="1" style="background-image:url(images/q1-2.png);width:111px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q1-3.png);width:78px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q1-4.png);width:111px;height:40px;"><span></span></li>
		
					</ul>
				</div>

				</ul>
				
				<div class="quetext" style="background-image:url(images/q1.png);width:211px;height:22px;"></div>		
	</div>
</div>
<!-- 问题1 end -->



<!-- 问题2 begin -->
<!-- <div class="layer layer3 active " style="display: block"> -->
<!-- <div class="layer layer3  " style="display: none"> -->
<div class="layer layer3 ">
<!-- 问题和答案区域 -->
	<div class="anserea">		
				<!-- 斜线begin -->
				<div class="line"></div>
				<!-- 斜线end -->
				<!-- 雪花 -->
				<ul class="snowgrounp  ">
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<!-- 答案 -->
				<div class="chose">
					<ul class="anslist " >
						
						<li class="answer" data-ans="0" style="background-image:url(images/q2-1.png);width:29px;height:40px;"><span></span></li>
						<li class="answer" data-ans="1" style="background-image:url(images/q2-2.png);width:45.5px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q2-3.png);width:62px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q2-4.png);width:44.5px;height:40px;"><span></span></li>
		
					</ul>
				</div>

				</ul>
				
				<div class="quetext" style="background-image:url(images/q2.png);width:278.5px;height:40px;"></div>		
	</div>

</div>


<!-- 问题2 end -->



<!-- 问题3 begin -->
<!-- <div class="layer layer4 " style="display: none"> -->
<div class="layer layer4 ">
<!-- 问题和答案区域 -->
	<div class="anserea">		
				<!-- 斜线begin -->
				<div class="line"></div>
				<!-- 斜线end -->
				<!-- 雪花 -->
				<ul class="snowgrounp  ">
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<!-- 答案 -->
				<div class="chose">
					<ul class="anslist " >
						
						<li class="answer" data-ans="0" style="background-image:url(images/q3-1.png);width:48.5px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q3-2.png);width:28px;height:40px;"><span></span></li>
						<li class="answer" data-ans="1" style="background-image:url(images/q3-3.png);width:46px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q3-4.png);width:62px;height:40px;"><span></span></li>
		
					</ul>
				</div>

				</ul>
				
				<div class="quetext" style="background-image:url(images/q3.png);width:262.5px;height:20.5px;"></div>		
	</div>


</div>

<!-- 问题3 end -->




<!-- 问题4 begin -->
<!-- <div class="layer layer5 " style="display: none"> -->
<div class="layer layer5 ">
<!-- 问题和答案区域 -->
	<div class="anserea">		
				<!-- 斜线begin -->
				<div class="line"></div>
				<!-- 斜线end -->
				<!-- 雪花 -->
				<ul class="snowgrounp  ">
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<!-- 答案 -->
				<div class="chose">
					<ul class="anslist " >
						
						<li class="answer" data-ans="1" style="background-image:url(images/q4-1.png);width:62px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q4-2.png);width:45.5px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q4-3.png);width:12px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q4-4.png);width:11.5px;height:40px;"><span></span></li>
		
					</ul>
				</div>

				</ul>
				
				<div class="quetext" style="background-image:url(images/q4.png);width:286.5px;height:20px;"></div>		
	</div>

</div>

<!-- 问题4 end -->


<!-- 问题5 begin -->
<!-- <div class="layer layer6  " style="display: none"> -->
<div class="layer layer6 ">

<!-- 问题和答案区域 -->
	<div class="anserea">		
				<!-- 斜线begin -->
				<div class="line"></div>
				<!-- 斜线end -->
				<!-- 雪花 -->
				<ul class="snowgrounp  ">
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<!-- 答案 -->
				<div class="chose">
					<ul class="anslist " >	
						<li class="answer" data-ans="0" style="background-image:url(images/q5-1.png);width:79px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q5-2.png);width:79px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q5-3.png);width:95.5px;height:40px;"><span></span></li>
						<li class="answer" data-ans="1" style="background-image:url(images/q5-4.png);width:79px;height:40px;"><span></span></li>
		
					</ul>
				</div>

				</ul>
				
				<div class="quetext" style="background-image:url(images/q5.png);width:250px;height:40px;"></div>		
	</div>

</div>

<!-- 问题5 end -->


<!-- 问题6 begin -->
<!-- <div class="layer layer7  " style="display: none"> -->
<div class="layer layer7 ">
<!-- 问题和答案区域 -->
	<div class="anserea">		
				<!-- 斜线begin -->
				<div class="line"></div>
				<!-- 斜线end -->
				<!-- 雪花 -->
				<ul class="snowgrounp  ">
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<!-- 答案 -->
				<div class="chose">
					<ul class="anslist " >	
						<li class="answer" data-ans="0" style="background-image:url(images/q6-1.png);width:77px;height:40px;"><span></span></li>
						<li class="answer" data-ans="1" style="background-image:url(images/q6-2.png);width:62.5px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q6-3.png);width:77.5px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q6-4.png);width:77.5px;height:40px;"><span></span></li>
		
					</ul>
				</div>

				</ul>
				
				<div class="quetext" style="background-image:url(images/q6.png);width:202px;height:21px;"></div>		
	</div>
</div>

<!-- 问题6 end -->



<!-- 问题7 begin -->
<!-- <div class="layer layer8  " style="display: none"> -->
<div class="layer layer8 ">

<!-- 问题和答案区域 -->
	<div class="anserea">		
				<!-- 斜线begin -->
				<div class="line"></div>
				<!-- 斜线end -->
				<!-- 雪花 -->
				<ul class="snowgrounp  ">
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<!-- 答案 -->
				<div class="chose">
					<ul class="anslist " >	
						<li class="answer" data-ans="1" style="background-image:url(images/q7-1.png);width:78px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q7-2.png);width:78.5px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q7-3.png);width:94.5px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q7-4.png);width:111.5px;height:40px;"><span></span></li>
		
					</ul>
				</div>

				</ul>
				
				<div class="quetext" style="background-image:url(images/q7.png);width:277.5px;height:21px;"></div>		
	</div>

</div>

<!-- 问题7 end -->


<!-- 问题8 begin -->
<!-- <div class="layer layer9   " style="display: none"> -->
<div class="layer layer9">
<!-- 问题和答案区域 -->
	<div class="anserea">		
				<!-- 斜线begin -->
				<div class="line"></div>
				<!-- 斜线end -->
				<!-- 雪花 -->
				<ul class="snowgrounp  ">
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<!-- 答案 -->
				<div class="chose">
					<ul class="anslist " >	
						<li class="answer" data-ans="1" style="background-image:url(images/q8-1.png);width:27.5px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q8-2.png);width:27.5px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q8-3.png);width:27.5px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q8-4.png);width:45px;height:40px;"><span></span></li>
		
					</ul>
				</div>

				</ul>
				
				<div class="quetext" style="background-image:url(images/q8.png);width:211.5px;height:21px;"></div>		
	</div>

</div>

<!-- 问题8 end -->


<!-- 问题9 begin -->
<!-- <div class="layer layer10  " style="display: none"> -->
<div class="layer layer10">

<!-- 问题和答案区域 -->
	<div class="anserea">		
				<!-- 斜线begin -->
				<div class="line"></div>
				<!-- 斜线end -->
				<!-- 雪花 -->
				<ul class="snowgrounp  ">
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<!-- 答案 -->
				<div class="chose">
					<ul class="anslist " >	
						<li class="answer" data-ans="0" style="background-image:url(images/q9-1.png);width:45px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q9-2.png);width:33.5px;height:40px;"><span></span></li>
						<li class="answer" data-ans="1" style="background-image:url(images/q9-3.png);width:29px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q9-4.png);width:35.5px;height:40px;"><span></span></li>
		
					</ul>
				</div>

				</ul>
				
				<div class="quetext" style="background-image:url(images/q9.png);width:189.5px;height:37px;"></div>		
	</div>

</div>

<!-- 问题9 end -->

<!-- 问题10 begin -->
<div class="layer layer11">
<!-- 问题和答案区域 -->
	<div class="anserea">		
				<!-- 斜线begin -->
				<div class="line"></div>
				<!-- 斜线end -->
				<!-- 雪花 -->
				<ul class="snowgrounp  ">
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<li class="snow" ><span></span>  </li>
					<!-- 答案 -->
				<div class="chose">
					<ul class="anslist"  onclick="to1()" >
						<li class="answer" data-ans="0" style="background-image:url(images/q10-1.png);width:32px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q10-2.png);width:34.5px;height:40px;"><span></span></li>
						<li class="answer" data-ans="1" style="background-image:url(images/q10-3.png);width:42px;height:40px;"><span></span></li>
						<li class="answer" data-ans="0" style="background-image:url(images/q10-4.png);width:32px;height:40px;"><span></span></li>
		
					</ul>
				</div>

				</ul>
				<div class="quetext" style="background-image:url(images/q10.png);width:301.5px;height:60.5px;"></div>		
	</div>


</div>

<!-- 问题10 end -->


  <!--音乐 BEGIN-->
  <img class="musicon"  id="musicon"   src="images/on.png"   onclick="off()" /> 
  <img class="musicoff" id="musicoff"   src="images/off.png"   onclick="on()" /> 
  
  <!--音乐 END-->
   
 </div>
 <!--内容end-->
  <!-- Demo styles -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.1.min.js"></script>
<script>
    $('#loading').fadeOut(4000)
	
	function to1(){
	
	setTimeout(
	function to(){ 
	    var getval =question.marks;
    window.location.href="next.php?valus="+getval; },600);	
}



	document.addEventListener('WeixinJSBridgeReady',function(){
	document.getElementById('audio').play()
})
</script>

<script src="http://res.wx.qq.com/open/js/jweixin-1.4.0.js"></script>

  <script>
    wx.config({
      appId: '<?php echo $wxconfig['appId'];?>',
      timestamp: '<?php echo $wxconfig['timestamp'];?>',
      nonceStr: '<?php echo $wxconfig['nonceStr'];?>',
      signature: '<?php echo $wxconfig['signature'];?>',
      jsApiList: [
        
        'onMenuShareTimeline',
        'onMenuShareAppMessage',
        'onMenuShareQQ',
        'onMenuShareWeibo',
        'openLocation',
        'updateAppMessageShareData'
  
      ]
    });

    wx.ready(function() {
      
      var shareTitle = '凡人皆有一测，你是哪个段位的权游粉';
      var shareDesc = 'Valar Morghulis , Valar Testis';
      var shareLink = 'http://pangtouyutech.com/H5/qy';
      var shareImg = 'http://pangtouyutech.com/H5/qy/share.png';

      wx.updateAppMessageShareData({
        title: shareTitle,
        desc: shareDesc,
        link: shareLink,
        imgUrl: shareImg,
        success: function () {
          // 设置成功
        }
      });
      
      
      // 分享给朋友事件绑定
      wx.onMenuShareAppMessage({
        title: shareTitle,
        desc: shareDesc,
        link: shareLink,
        imgUrl: shareImg
      });

      // 分享到朋友圈
      wx.onMenuShareTimeline({
        title: shareTitle,
        link: shareLink,
        imgUrl: shareImg
      });

      // 分享到QQ
      wx.onMenuShareQQ({
        title: shareTitle,
        desc: shareDesc,
        link: shareLink,
        imgUrl: shareImg
      });

      // 分享到微博
      wx.onMenuShareWeibo({
        title: shareTitle,
        desc: shareDesc,
        link: shareLink,
        imgUrl: shareImg
      });
    });
  </script>



<!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
<script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>    
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>