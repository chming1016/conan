	<script type="text/javascript">
	$(document).ready
	(
		function()
		{
			$('#dock').Fisheye
			(
				{
					maxWidth: 40,
					items: 'a',
					itemsText: 'span',
					container: '.dock-container',
					itemWidth: 60,
					proximity: 40,
					halign : 'left'
				}
			)
		}
	);
	

</script>
		

		<div class="bar">
			<div class="user">
<?php
					session_start();
					                                        
					$user = $_SESSION["loginMember"];
					
					echo "$user"."登入中";
					if( is_null($user)==true )
 					{
					  echo "未登入喔!!!你想做什麼壞事阿@@!";
                                          header("Location:./");
					}
				?>
		    </div>
	                <div class="control"> <a href="?option=logout">[登出系統]</a>                    </div>
                        <div class="prize"> 
                        </div>
                        <div>
                        </div>
		</div>
		

    <div class="function">
	    <ul class="functionBar">   
		  <li><a href="./menu.php?option=upload">檔案上傳</a></li>

		  <li><a href="./menu.php?option=check">查看資料表</a></li>
		  <li><a href="./menu.php?option=select_attacked_date_simulate_change">查詢</a>

	  </ul>
		</div>
	<div>
	<?php

		if(isset($_GET['option'])) 
		{
			include $_GET['option'].".php";
		}
	?>	
</div>
