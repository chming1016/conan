function login()
{
	if($("#login_input").css("display")=="none")
		$("#login_input").show();
	else
		$("#login_input").hide();	
}

function logout()
{
	location.href="./logout.php";
}
function search_account()
{
		$.ajax({
		url: 'search_account.php',
		type:'post',
		dataType: 'json',
		data: {s_account:$('#search_name').val()},
		error: function() { alert("search_account function error") },
		success: function(response) 
		{
			if(response == 0)
			{
				alert('查無此帳號');
			}
			else if(response == 'account_ok')
			{
				window.location="myep/?user=" + $('#search_name').val();
			}

		},
		complete: function()
		{		
			
		}
	});	
	
}