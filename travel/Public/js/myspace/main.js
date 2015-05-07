// JavaScript Document
$(function(){
    var TimeFn = null;
    $(".liftDiv>div").each(function(){
        $(this).click(function(){
            $(".liftDiv>div").removeClass();
            $(this).addClass('liftDefault');

            insContent($(this).attr('id'));
        });
    });
	/**
	* 添加/取消按钮事件
	*/
	$(".dragsort  li .add-btn").on("click",function(){
		var dthis = $(this),
			itemid = $(this).closest("li").attr("itemid"),
			name = $(this).closest("li").find(".s-mod-def span").text(),
			count = $(this).closest("li").find(".s-mod-img span").text();
		if(dthis.hasClass("btn-primary")){
			$("#dotted ul").append("<li itemid='"+itemid+"'><div class='s-mod-img'><span>"+count+"</span></div><div><h4 class=tit>"+name+"</h4></div></li>");
			dthis.text("取消").removeClass("btn-primary").addClass("btn-success").closest("li").css("border-color","#A7DC87").find(".s-mod-img").css("background","url(images/sel.png) no-repeat");
		}else{
			var targetLi = $("#dotted ul").children("[itemid="+itemid+"]");
			// 当前元素处于配置状态，清空配置内容
			if(targetLi.hasClass("curConfig")){
				$("#config-section").html("");
			}
			targetLi.remove();
			dthis.text("添加").removeClass("btn-success").addClass("btn-primary").closest("li").css("border-color","").find(".s-mod-img").css("background","");
		}
	});
	/**
	* 编辑按钮事件
	*/
	$(".dragsort  li .edit-btn").on("click",function(){
		var li = $(this).closest("li");
		li.find(".s-mod-container-wrap").fadeOut("fast",function(){
		   li.append("<div class='inpDiv'><div class='inpDIV-inner'><span>条数：</span><input type='text' style='width: 53px;'/></div>" +
           "<div class='btn btn-primary confirm-btn'>确定</div></div>")
		   .find(".confirm-btn").on("click",function(){ // 确定按钮事件
				// 当前条数
				var count = $(this).siblings(".inpDIV-inner").find("input").val() || 1; // 默认为1
				$(".inpDiv",li).fadeOut("fast",function(){
					var itemid = li.attr("itemid");
					$("#dotted,#dragsList").each(function(){
						$(this).find("li[itemid="+itemid+"] .s-mod-img span").text(count);
					});
					li.find(".s-mod-container-wrap").fadeIn("fast");
					$(this).remove();
				});
			});
		});
	});
	/**
	* 列表元素浮动事件
	*/
	$(".dragsort  li").hover(function(){
		$(this).find(".s-mod-container").stop(true).animate({"top":"-100px"},320);
	},function(){
		$(this).find(".s-mod-container").stop(true).animate({"top":"0px"},320);
	}); 
	
	/**
	* 用户列表元素事件
	*/
	$("#dotted").on("click","li",function(){
		var dthis = $(this);
		dthis.siblings(".curConfig").removeClass("curConfig").css({"border-color":"","background":""}).find(".s-mod-img").css("background","");
		if(!dthis.hasClass("curConfig")){
			var name = dthis.find("h4").text(),
				jsonArr = [ // 当前元素配置数据
					{
						name : "账户名称",
						value : "admin"
					},
					{
						name : "登入密码",
						value : "1"
					},
					{
						name : "登入密码",
						value : "2"
					}
				],
				str = '<div class="config-title">'+name+'</div>'+
						'<div class="config-content">';
				for(var i = 0; i < jsonArr.length; i++){
					str += '<div>'+jsonArr[i].name+'：<input type="text" value="'+jsonArr[i].value+'"/></div>';
				}		
				str += '</div>';
			$("#config-section").html(str);		
			dthis.addClass("curConfig").css({"border-color":"#A7DC87","background":"#EFFEE7"}).find(".s-mod-img").css("background","url(images/sel.png) no-repeat");
		}
	});
});
function saveOrder() {
    alert("11111");
    var data = $("#list1 li").map(function(){
        return
        $(this).children().html();
    }).get();
    $("input[name=list1SortOrder]").val(data.join("|"));
};
function insContent(menuDivId){
    if(menuDivId=="menu1"){
        $("#dragsList").html("<ul class='dragsort' id='list2'>" +
            "<li ><div>  <h4 class='tit'>账号创建</h4> <p>根据参数可以创建Q、T、P、W账户</p></div></li>" +
            "<li ><div>   <h4 class='tit'>账号创建2</h4> <p>根据参数可以创建Q、T、P、W账户</p></div></li>" +
            "<li ><div>  <h4 class='tit'>账号创建3</h4> <p>根据参数可以创建Q、T、P、W账户</p></div></li>" +
            "<li ><div>  <h4 class='tit'>账号创建4</h4> <p>根据参数可以创建Q、T、P、W账户</p></div></li>" +
            "<li ><div>  <h4 class='tit'>账号创建5</h4> <p>根据参数可以创建Q、T、P、W账户</p></div></li>" +
            "<li ><div>  <h4 class='tit'>账号创建6</h4> <p>根据参数可以创建Q、T、P、W账户</p></div></li>" +
            "</ul>");

    }
    if(menuDivId=="menu2"){
        $("#dragsList").html("<ul class='dragsort' id='list2'>" +
            "<li ><div>  <h4 class='tit'>充值历史记录</h4> <p>创建账户并且绑定手机号码，创建充值历史记录</p></div></li>" +
            "</ul>");
    }
    if(menuDivId=="menu3"){
        $("#dragsList").html("<ul class='dragsort' id='list2'>" +
            "<li ><div>  <h4 class='tit'>信用卡绑定</h4> <p>根据用户ID绑定不同的账号</p></div></li>" +
            "</ul>");
    }
    if(menuDivId=="menu4"){
        $("#dragsList").html("<ul class='dragsort' id='list2'>" +
            "<li ><div>  <h4 class='tit'>实名制安全</h4> <p>实名制进行身份证验证并且下载安全控件</p></div></li>" +
            "</ul>");
    }
}
