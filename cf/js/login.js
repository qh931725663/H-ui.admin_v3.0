/*********页面加载设置登录框的位置****************/
$(function(){
	$('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
	$(window).resize(function(){
		$('.loginbox').css({'position':'absolute','left':($(window).width()-692)/2});
	})
});
/**********页面登录处理*************/
	var loginUname=null;
	$("#bt_login").click(function(){
		var data1=$("#login_form").serialize();
		$.ajax({
			type:"POST",
			url:"data/checkLogin.php",
			data:data1,
			success:function(arr){
				//console.log(arr);
				if(arr.code!==1){	
					$("#login_form .alert").html(arr.msg);
					$("p.alert").css("display","block");
				}else{
					//console.log("dd");
					//$(".modal").fadeOut(500);
					loginUname=$("[name='uname']").val();
					//TODO 将用户信息保存到sessionStorage中
					sessionStorage.setItem("loginUname",loginUname);
					location.href="index.html";
			}
		}
	  });
 });