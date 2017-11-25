/**************添加发布信息************************/
	$("#tjbtn").click(function(){
    //表单序列化
    var result = $('#adarticle').serialize();
    $.post('data/shujuinsert.php',result,function(data,msg,xhr){
      console.log('开始处理响应结果');
      console.log(msg);
	  if(msg=="success"){
		 $('#title').val('');
		 $('#user').val('');
		 $('#ischeck').removeAttr("checked");
		 $('#article').val('');
		 window.history.back(-1); 
	  }else{
		alert("添加失败");
	  }
    })
  });

	/***3列表页加载完成，异步请求第1页记录 ****/
$(function(){
  loadProduct(1);
});
$('#pager1').on('click','a', function(e){
  e.preventDefault();
  var pno = $(this).attr('href'); //目标页号
  loadProduct(pno);
});

///异步分页加载数据
function loadProduct(pno){
  //$.get  $.getJSON  $.ajax
  $.getJSON('data/right.php',{pno:pno},function(pager){
    //console.log('开始处理响应数据-产品列表');
    //console.log(pager);
    //1 构建产品列表的内容
    var html = '';
    $.each(pager.data, function(i,p){
          html +=`<tr>
				<td><input name="" type="checkbox" value="" /></td>
				 <td>${p.m_id}</td>
				 <td>${p.u_title}</td>
				 <td>${p.u_uname}</td>
				 <td>${p.m_nation}</td>
				 <td>${p.create_time}</td>
				 <td>${p.m_ischeck}</td>
				 <td>
				 <a href="data/1upshuju.php?id=${p.m_id}" class="tablelink">修改 </a>
				 <a href="data/deleshuju.php?id=${p.m_id}" class="tablelink"> 删除</a></td>
				 </tr>`;
			});	
			$(".tablelist tbody.mlist").html(html);
			 //2 构建分页条中的内容
		 var pagerHtml = '';
		if(pager.pno-2>0){
		  pagerHtml += `<li><a href="${pager.pno-2}">${pager.pno-2}</a></li> `;
		}
		if(pager.pno-1>0){
		  pagerHtml += `<li><a href="${pager.pno-1}">${pager.pno-1}</a></li> `;
		}
		pagerHtml += `<li class="active"><a href="#">${pager.pno}</a></li> `;
		if(pager.pno+1<=pager.pageCount){
		  pagerHtml += `<li><a href="${pager.pno+1}">${pager.pno+1}</a></li> `;
		}
		if(pager.pno+2<=pager.pageCount){
		  pagerHtml += `<li><a href="${pager.pno+2}">${pager.pno+2}</a></li> `;
		}

		$('.pager').html(pagerHtml);
		}
	);
}
	$(function(){
	//首页饼图显示，使用
		$.getJSON("data/selectinf.php",function(responseData){
			console.log(responseData);
            var chart=new FusionCharts({
                type:"pie3d",
                renderAt:"maintj",
                width:600,
                height:200,
                dataFormat:"json",
                dataSource:{ //指定数据源
                    data:responseData
                }
            });
            chart.render();//渲染统计图
    });
	 })
	//首页新闻信息展示 待办事项 最新信息
	$(function(){
			$.getJSON("data/seleshuju.php",function(arr){
			var html="";
			$.each(arr,function(i,p){
				html+=`<li><a href="data/selectnews.php?m_id=${p.m_id}">${p.u_title}</a></li>`;
			});	
			$("#newlist1").html(html);
		}
	);
 })
$(function(){
	$.getJSON("data/seleshuju.php",function(arr){
			var html="";
			$.each(arr,function(i,p){
				html+=`<li><a href="data/selectnews.php?m_id=${p.m_id}">${p.u_title}</a></li>`;
			});	
			$("#newlist2").html(html);
		}
	);
 })
 //信息统计信息显示
$(function(){
	$.getJSON("data/selectinf.php",function(arr){
		var html="";
		$.each(arr,function(i,p){
			html+=`<li><i>${p.label}:</a></i>${p.value}</li>
				`;
		});
		$("#newlist3").html(html);
	});
})