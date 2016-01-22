<html>

        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Check</title>
                <link rel="stylesheet" type="text/css" href=" " />
                <link rel="stylesheet" type="text/css" href="./menu.css" />
        
                <script src="js/jquery.js" type="text/javascript"></script>
                <script src="js/interface.js" type="text/javascript"></script>
                <script src="js/jquery.curvycorners.js" type="text/javascript"></script>
                <script src="js/jquery.cycle.all.min.js"></script>

        </head>

        <body>
                <div class= "check_table" >
		<?php
                if( is_null($user)==true )
                {
                         echo "未登入喔!!!你想做什麼壞事阿@@!";
                         header("Location:./");
                }


        	include('link.php');

        	$sql = "SHOW TABLES";
        	$result = mysql_query($sql);
        	$num = 1;
		?>
			<table border="1" width = "500" >
                   <tr>
        <td width = "100" align="center">資料表數量</td>
        <td width = "400" align="center">名稱</td>
                          	</tr>
                        </table>

		<?php
		//echo mysql_field_len($result, 0);	
		
        	while( $row = mysql_fetch_array($result) )
        	{
			
			
		
                	if (strcasecmp($row[0],"account"))
                	{	

                        ?>
                        	<table border="1" width = "500" >
                                	<tr>
                                        	<td width = "100" align="center"><?php echo $num ;?>            </td>
                                        	<td width = "400" align="left"><?php print_r( $row[0]) ?>     </td>
                                	</tr>
                        	</table>
                        <?php
                        	$num++;
                	}
        	}

		
		?>


                </div>
        </body>
</html>
