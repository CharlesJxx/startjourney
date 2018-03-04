if ($(".articles").length!=0) {
    var ar = $(".articles > img");
    var arW = ar[0].width;      
    var arI = $(".articleInfo");
    arI.height(arW-2.5);
    arI.width(arW-2.5);
    arI.mouseenter(function () {
        $(this).animate({opacity:'0.7'},"700");
    })
    arI.mouseleave(function(){
        $(this).animate({opacity:'0'},"700");
    })
    arI.css("padding-top",(arW-27.5)/2);
}


// if($("#inputName")&&$("#inputPassword2")){
//     $("#inputName").blur(function(){
//         var $nl = $("#inputName").val().length;
//         if( $nl > 12 || $nl <6){
//             $(".notice_line").html("用户名长度不对哦！");
//         }else{
            
//         }
//     });//用户名长度判断
//     $("#inputPassword2").blur(function(){
//         var $p1 = $("#inputPassword1").val();
//         var $p2 = $("#inputPassword2").val();
//         if ($p1!=$p2) {
//             $(".notice_line").html("两次密码输不一致哦！");
//         }else{
//             $(".notice_line").html(" ");
//         }
//     }); //密码是否一致
    
// }
//注册信息检验
function signCheck(){
    var $nl = $("#inputName").val();
    var $p1 = $("#inputPassword1").val();
    var $p2 = $("#inputPassword2").val();
    var $email = $("#inputEmail").val();
    var mailpattern = /\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,5}/;
    var namepattern = /\s/;
    var passpattern = /\s/;

    if( $nl.length > 12 || $nl.length <3 || namepattern.test($nl)){
        $(".notice_line").html("用户名格式不对哦！").fadeIn(1000);
        return false;
    }
    if(passpattern.test($p1)){
        $(".notice_line").html("密码非法！").fadeIn(1000);
        return false;
    }
    if($p1!=$p2){
        $(".notice_line").html("两次密码输不一致哦！").fadeIn(1000);
        return false;
    }
    if(!mailpattern.test($email)){
        $(".notice_line").html("邮箱非法哦！").fadeIn(1000);
        return false;
    }
    //注册中的提示
    $("#submitS").click(function(){
        $(".notice_line").html("处理中...").fadeIn(1000);
    });
}

// if($(".notice_line")){
//     $("#submitS").click(function(){
//         $(".notice_line").html("处理中...").fadeIn(1000);
//     });
// }
if ($(".changeImg")) {
    $(".Imgbox").mouseenter(function(){
        $(".changeImg").fadeIn(500);
    });
    $(".Imgbox").mouseleave(function(){
        $(".changeImg").fadeOut(500);
    });
};//头像更改动画
if ($(".userPage")) {
    $(".cfo").click(function(){
        window.location.href="userInfoChange.php";
    })
    $(".logout").click(function(){
        window.location.href="personalPage.php?action=logout";
    })
};
if (document.getElementById("upImg")) {
    var aaa = document.getElementById("upImg"); //获取显示图片的div元素
    var input = document.getElementById("file_input"); //获取选择图片的input元素
          
    //这边是判断本浏览器是否支持这个API。
    if(typeof FileReader==='undefined'){ 
        aaa.innerHTML = "抱歉，你的浏览器不支持 FileReader"; 
        input.setAttribute('disabled','disabled'); 
    }else{ 
        input.addEventListener('change',readFile,false); //如果支持就监听改变事件，一旦改变了就运行readFile函数。
    } 

          
    function readFile(){ 
        var file = this.files[0]; //获取file对象
        //判断file的类型是不是图片类型。
        if(!/image\/\w+/.test(file.type)){
            alert("文件必须为图片！");
            return false; 
        }else if(file.size > 2000000){
            alert("文件过大(大于2MB)！");
            return false;
        }
        
        var reader = new FileReader(); //声明一个FileReader实例
        reader.readAsDataURL(file); //调用readAsDataURL方法来读取选中的图像文件
        //最后在onload事件中，获取到成功读取的文件内容，并以插入一个img节点的方式显示选中的图片
        reader.onload = function(e){ 
            aaa.innerHTML = '<img src="'+this.result+'" alt=""/>' 
        } 
    }
};
if ($(".newblog")) {
    $(".newblog").mouseenter(function(){
        $(".addblog").fadeIn(500);
    });
    $(".newblog").mouseleave(function(){
        $(".addblog").fadeOut(500);
    });
};

if ($(".food")) {
    var foodInfo =$(".food");
    foodInfo.mouseenter(function() {
        $(this).children("div").css('bottom','0');
        $(this).children("div").css('background-color','rgba(0,0,0,0.2)');
    });
    foodInfo.mouseleave(function() {
        $(this).children("div").css('bottom','-50px');
        $(this).children("div").css('background-color','rgba(0,0,0,0)');
    })
};

function MinHeight(ele,ht){
	var _ch = $(ele).height();//内容div的高度
	var _wh = $(window).height();//整个窗口的高度
	    $(ele).css("min-height",(_wh-ht)+"px");
	
}
if($(".hello_content")){
	MinHeight(".hello_content",194);
};
if($(".provincepage")) {
    MinHeight(".provincepage",165);
};
if($(".foodsDetail")){
    MinHeight(".foodsDetail",165);
}
$(window).resize(function () {
	MinHeight(".hello_content",194);
    MinHeight(".provincepage",165);
    MinHeight(".foodsDetail",165);
});//解决footer不贴底部
if( $(".citybox").length != 0){
    var cy = $(".citybox > img");
    var cyW = cy[0].width;      
    var cn = $(".cityname");
    cn.width(cyW-2.5);
    cn.mouseenter(function () {
        $(this).animate({opacity:'1'},"300");
    })
    cn.mouseleave(function(){
        $(this).animate({opacity:'0'},"300");
    })
}