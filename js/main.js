// Java
// Script Document
// 首先定义页面数字为2
// 这是第一个问题的
var pagenum=2;
//设置标志为错误
var flag=false;


//设置当前的页面
var page={
	up:function(n){	
		//对当前页面进行隐藏
		$('.layer').hide();
		//对下一个页进行展示
		$('.layer'+n).show();
		//对当前页面的class进行移除操作
		$('.layer').removeClass('active');
		//对下一个页面的class进行增加操作
		$('.layer'+n).addClass('active');
	}
}

//设置问题
var question={
	//答对问题的个数
	marks:0,
	//进行判断
	judge:function(o){
		if(flag){return}
		flag=true;
		var result=$(o).data('ans');
		console.log(result)
		//如果回答正确了
		if(result==1){//right
			question.right(o);
		}
		//回答错误
		else{//wrong
			question.wrong(o);
		}
	},

	//回答正确之后执行的函数
	right:function(o){
		//加上正确的class 也就是给选择的选项上面加一个对号
		$(o).addClass('right');
		//给答题的结果记录加1
		question.marks++;

		setTimeout(function(){
			flag=false; 
			//页面继续加1
			pagenum++;
			//如果已经到12页了
            if(pagenum==12){question.end()}			 
			page.up(pagenum);
		},800);
	},

	//回答错误之后执行的函数
	wrong:function(o){
		//加上被选择则的那个class
		$(o).addClass('selected');
		//给正确答案前面加上对号
		// setTimeout(function(){$(o).parent().find('.answer[data-ans="1"]').addClass('right')},300);

		setTimeout(function(){
			flag=false;  
			//页面继续加1
			pagenum++;
	



            if(pagenum==12){question.end()}				
			page.up(pagenum);
		},1600);
	},



	start:function(pagenum){
		//页面数字为2
		pagenum=2;
		//对答案进行绑定 点击之后就执行函数
		$('.answer').bind("click", function(){
			question.judge(this);
		});
		page.up(pagenum);
	},


	//结束游戏的时候得出的结论
	end:function(){
		console.log(question.marks)
	
        
        //如果答对的个数大于等于6就显示第一个文本文字
        if(question.marks>=10){
        	$('.layer12 .text1').show();
        	$('.layer12 .text2').hide();
        	$('.layer12 .text3').hide();
        }
        else if(question.marks>=6){
        	$('.layer12 .text2').show();
        	$('.layer12 .text1').hide();
        	$('.layer12 .text3').hide();
        }
        else{
        	$('.layer12 .text3').show();
        	$('.layer12 .text1').hide();
        	$('.layer12 .text2').hide();

        }
	},

	//再玩一次，重新回到第二页 也就是第一个问题的页面上
	restart:function(){
		pagenum=2;
		//重新再进行答案的记录 所以对分数进行清空
		question.marks=0;
		//对刚才的选择进行移除 否则就还在这个页面上
        $('.answer').removeClass('right');
		$('.answer').removeClass('selected');
		//显示第二页
		page.up(pagenum);
	}
}

//点击开始测试按钮之后执行的操作
$('.start2').click(function(){
	//执行开始函数
	question.start();
});


function off() {
	      $('.musicon').hide();
	          $('.musicoff').show();

			  audio.pause();
          }

function on() {
	      $('.musicoff').hide();
	          $('.musicon').show();

			   audio.play();
          }
      
