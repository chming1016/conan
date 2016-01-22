function add_new_list_input()
{
	$("#add_list_content").html('<input style="width:150px; margin-right:2px;"'+' type="text" '  
								+ ' id="new_list" '
								+ 'value="請輸入主題(例:個人作品)" '
								+ 'onfocus="$(this).val(\'\');" />'
								+ '<input type="button"' 
								+ ' value="新增"' 
								+ 'onclick="new_list();" />');
}
function add_sub_list_input(l_id,l_name)
{
	
	
	$("#add_sub_list_content").html('<input style="width:150px; margin-right:2px;"'+' type="text" '  
								+ ' id="new_sub_list" '
								+ 'value="替 ' + l_name +' 增加副主題" '
								+ 'onfocus="$(this).val(\'\');" />'
								+ '<input type="button"' 
								+ ' value="新增"' 
								+ 'onclick="new_sub_list('+l_id+');" />');
	
	return;	
}
function new_list()
{
	if($('#new_list').val() == '')
	{
		alert('主題還尚未輸入喔')
		return;
	}
		$.ajax({
		url: 'add_list.php',
		type:'post',
		dataType: 'json',
		data: {new_list:1,new_list:$('#new_list').val()},
		error: function() { alert("new_list function error") },
		success: function(response) 
		{
			if(response == 1)
			{
				location.reload();
			}
			else
			{
				alert('新增過程中可能產生錯誤了,請確認有無新增成功');
			}
		},
		complete: function()
		{		
			
		}
	});
}
function new_sub_list(list_id)
{
	if($('#new_sub_list').val() == '')
	{
		alert('副主題還尚未輸入喔')
		return;
	}
		$.ajax({
		url: 'add_list.php',
		type:'post',
		dataType: 'json',
		data: {new_sub_list:1,l_id:list_id,new_sub_list:$('#new_sub_list').val()},
		error: function() { alert("new_sub_list function error") },
		success: function(response) 
		{
			if(response == 1)
			{
				location.reload();
			}
			else
			{
				alert('新增過程中可能產生錯誤了,請確認有無新增成功');
			}
		},
		complete: function()
		{		
			
		}
	});
}