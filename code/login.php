<?php
header('Content-type: text/html; charset=utf-8'); 
//資料庫比對正確的帳號密碼
  include('link.php');
	//使用者資料
	$name = addslashes($_POST['user_id']);
	$pw = sha1($_POST['user_pw']);
	
	
	$level=" ";
	//記住session資料
	//session_register("user","pw");
	//$user = $username;
	//$pw = $userpw;
	session_start();

	//檢查使用者帳號密碼
	//$sql = "SELECT * FROM `account` WHERE user_id='" . $username . "' AND user_pw='". $userpw . "'";
  //$sql = "SELECT *  FROM `account` WHERE `user_id` = '$username' AND `user_pw` = '$userpw'";
  //$result = mysql_query($sql);
  //echo $sql."<br />";
  //$num = mysql_num_rows($result);
  
	//if($num==0)
	//{
	//  	echo "請輸入正確的帳號密碼";
	//  	header("Refresh:3;Url=./index.tpl");
	//  }
	//  else
	//  {
	//  	echo "歡迎登入";
	//  	header("Refresh:3;Url=./album.tpl");
	//  }

  //if(!isset($_SESSION["loginMember"]) || ($_SESSION["loginMember"]==""))
  if(1)
  {  
		if(isset($name) && isset($pw))
		{
			
			//選取儲存帳號密碼的資料表
			$sql = "SELECT *  FROM `account` WHERE `user_id` = '$name' AND `user_pw` = '$pw'";
			//$sql2 = "SELECT * FROM `account` WHERE `user_level` = 1";
  			$result = mysql_query($sql);
  			//$result2 = mysql_query($sql2);
			//取出帳號密碼的值
			$row_result=mysql_fetch_assoc($result);
			$username = $row_result["user_id"];
			$passwd = $row_result["user_pw"];
			//$level = $row_result["user_level"];
			
			//比對帳號密碼，若登入成功則進往管理界面，否則就退回主畫面。
				if(($name==$username) && ($pw==$passwd))
				{
					$_SESSION["loginMember"]=$username;
					//$_SESSION["loginLevel"]=$level;
					echo "歡迎".$username."登入，轉頁中";
					header("Refresh:1;Url=./menu.php?option=select_attacked_date_simulate_change");
				}
				else
				{
					echo "請輸入正確的帳號密碼";
					header("Location: index.html");
				}		
		}
	}
	else
	{
		echo "not entering if" ;
	}
?>

