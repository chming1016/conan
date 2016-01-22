<?php
	//連結資料庫
	
	include('login_num.php');
	
	mysql_connect("$dbServer","$dbUser","$dbPass") or die("can't connect to database");
	//選擇資料庫
    mysql_select_db("collect_log") or die('select database failed.');
	mysql_query("SET CHARACTER SET 'utf8'"); 

?>
