<?php

//����n�X�ʧ@
//if(isset($_GET["logout"]) && ($_GET["logout"]=="true"))
//{
	session_start();
	session_unset();//["loginMember"]
	session_destroy();
	header("Location: ./");
//}

?>