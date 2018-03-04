$(function(){
  //处理用户认证
  $(".apply").click(function show_confirm(e){
    var applyName;
    if($(e.target).parent("td").length == 0){
      applyName = $(e.target).parent("a").parent("td").prevAll().eq(-1).text();
    }else{
      applyName = $(e.target).parent("td").prevAll().eq(-1).text();
    }
    //console.log(applyName);
    if(confirm(applyName + " 是否通过审核？")){
      $.ajax({
          type: "post",
          url: "doTable.php",
          data: "applyName=" + applyName + "&&" + "pass=" + true
      })
      .success(function(){
        alert(applyName + "已经成功认证！");
        if($(e.target).parent("td").length == 0){
          $(e.target).parent("a").parent("td").prevAll().eq(0).text("是");
        }else{
          $(e.target).parent("td").prevAll().eq(0).text("是");
        }
      });
    }else{
      $.ajax({
          type: "post",
          url: "doTable.php",
          data: "applyName=" + applyName + "&&" + "pass=" + false
      })
      .success(function(){
        alert("您已否定" + applyName + "的认证！");
        if($(e.target).parent("td").length == 0){
          $(e.target).parent("a").parent("td").prevAll().eq(0).text("否");
        }else{
          $(e.target).parent("td").prevAll().eq(0).text("否");
        }
      });
    }
  });

  //处理用户删除
  $(".delete").click(function show_confirm(e){
    var deleteName;
    if($(e.target).parent("td").length == 0){
      deleteName = $(e.target).parent("a").parent("td").prevAll().eq(-1).text();
    }else{
      deleteName = $(e.target).parent("td").prevAll().eq(-1).text();
    }
    //console.log(deleteName);
    if(confirm("是否删除用户 " + deleteName + " , 此操作不可逆！")){
      var adminPass = prompt("请输入管理员密码：");
      if(adminPass != null){
        $.ajax({
          type: "post",
          url: "doTable.php",
          data: "adminPass=" + adminPass + "&&" + "adminName=" + $.trim($("#adminName").text())
        })
        .success(function(msg){
          if(msg){
            $.ajax({
              type: "post",
              url: "doTable.php",
              data: "deleteName=" + deleteName
            })
            .success(function(){
              alert("删除用户成功！");
              if($(e.target).parent("td").length == 0){
                deleteName = $(e.target).parent("a").parent("td").parent("tr").css("display", "none");
              }else{
                deleteName = $(e.target).parent("td").parent("tr").css("display", "none");
              }
            });
          }else{
            alert("管理员密码错误，删除用户失败！")
          }
        });
      }
    }else{
      //不删除
    }
  });
});