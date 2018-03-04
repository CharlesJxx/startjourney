$("#usrinfo").click(function(){
	if(!($("input[name=nickname]").val().length != 0 || $("textarea").val().length != 0)){
		$("#message").text("用户名或者个人简介不能同时为空哦！").css("display", "block").fadeOut(3000);
	}else{
		$.ajax({
			type: "post",
			url: "userDoPost.php",
			data: "nickname=" + $("input[name=nickname]").val() +"&&"+ "usrintroduce=" + $("textarea").val() 
		})
		.success(function(msg){
			$("#message").text(msg).css("display", "block").fadeOut(3000);
		});
	}
});

$("#usrpw").click(function(){
	if($("input[name=oldPass]").val()=="" || $("input[name=newPass]").val()=="" || $("input[name=confirmPass]").val()==""){
		$("#message").text("请输入相关信息！").css("display", "block").fadeOut(3000);
	}
	else if($("input[name=newPass]").val() != $("input[name=confirmPass]").val()){
		$("#message").text("两次输入的密码不一致！").css("display", "block").fadeOut(5000);
	}else{
		$.ajax({
			type: "post",
			url: "userDoPost.php",
			data: "oldPass=" + $("input[name=oldPass]").val() +"&&"+ "newPass=" + $("input[name=newPass]").val() +"&&"+ "confirmPass=" + $("input[name=confirmPass]").val()
		})
		.success(function(msg){
			$("#message").text(msg).css("display", "block").fadeOut(3000);
		});
	}
	
});

// $("#usrimg").click(function(){
// 	$("#")
// });
$(function(){
    $(".apply").click(function(){
      $("#mymodal").modal("toggle");
    });
  });
$("#apply").click(function(){
	$.ajax({
		type: "post",
		url: "userDoPost.php",
		data: "applyName=" + $(".change_name").text()
	})
	.success(function(msg){
		console.log(msg);
	})
	;
});