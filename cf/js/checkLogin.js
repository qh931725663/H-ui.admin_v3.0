	//TODO 1.验证是否登录
	var loginUname = sessionStorage.getItem("loginUname");
		//TODO 处理验证是否登录后的逻辑
		if(loginUname){//TODO 登录过
			//$(".user span:first-child").html(loginUname);
			//TODO 执行默认的订单查询功能
		}else{//TODO 没有登录
			location.href="login.html"
		}