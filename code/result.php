<?php
ini_set('display_errors', 0);

?>
<html>
	
	<head>
        	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        	<title>Result</title>
        	<link rel="stylesheet" type="text/css" href=" " />
        	<link rel="stylesheet" type="text/css" href="./menu.css" />

        	<script src="js/jquery.js" type="text/javascript"></script>
        	<script src="js/interface.js" type="text/javascript"></script>
        	<script src="js/jquery.curvycorners.js" type="text/javascript"></script>
        	<script src="js/jquery.cycle.all.min.js"></script>

	</head>

        <body>
        <center>
                <?php

        include('link.php');
		include('menu.php');
		
		$nowPage = $_POST["page"];
		
		if ( $nowPage == "" ){ $nowPage = 1;
		$start_date = $_GET["startdate"];
		$end_date = $_GET["enddate"];
		
		if ($start_date != "" and $end_date != ""){
		
		echo "掃描日期為 : ".$start_date."到".$end_date;
		}
		
		}else{
		$start_date = $_POST["attackedstartdate"];	
		$end_date = $_POST["attackedenddate"];	
		if ($start_date != "" and $end_date != ""){
		
		echo "掃描日期為 : ".$start_date."到".$end_date;
		}
		}
  
	    $perNum = 50;
	    
		$querydate = "SELECT DISTINCT `SuspiciousIP` FROM `collect_log`.`result`";
		
		$rs = mysql_query($querydate);
		
		//echo "fefef".$querydate."<br>";
		
		//echo "fefef".$rs."<br>";
		$totalNum = mysql_num_rows($rs);

?>
</center>
<?php
	$startId = ($nowPage -1)* $perNum;
  
   //實際顯示數目
  if(($startId+$perNum)>$totalNum){
        $realPerNum = $totalNum - $startId;
		//echo $realPerNum1."<br>";
  }else{
        $realPerNum = $perNum;
		//echo $realPerNum2."<br>";
  }
  
  //總頁數
  if($totalNum % $perNum == 0){
       $totalPage = $totalNum / $perNum;
  }else{
        $totalPage = intval($totalNum / $perNum)+1;
  }
  
   //第一頁
  $firstPage=1;
  
  
   //最後一頁
   $lastPage = $totalPage;  
  
  
  //上一頁
  if($nowPage > 1){
       $forwardPage = $nowPage-1;
       $firstPgLink = "<a href=\"javascript:chg(1,'".$start_date."','".$end_date."');\">第一頁</a>";
       $forPgLink = "<a href=\"javascript:chg($forwardPage,'".$start_date."','".$end_date."');\">上一頁</a>";
  }else{
      $forwardPage = false;
      $firstPgLink = "&nbsp;";
      $forPgLink = "&nbsp;";
  } 


  //下一頁
  if($nowPage < $totalPage){
       $nextPage = $nowPage+1;
       $lastPgLink = "<a href=\"javascript:chg($lastPage,'".$start_date."','".$end_date."');\">最後一頁</a>";
	  // echo $lastPgLink;
       $nextPgLink = "<a href=\"javascript:chg($nextPage,'".$start_date."','".$end_date."');\">下一頁</a>";
   }else{  
    $nextPage =  false;
    $nextPgLink = "&nbsp;";
    $lastPgLink = "&nbsp;";
   }


?>

<script language="JavaScript">
            function chg(page,attackedstartdate,attackedenddate){
				
                document.sd.page.value = page;
				document.sd.attackedstartdate.value = attackedstartdate;
				document.sd.attackedenddate.value = attackedenddate;
				document.sd.submit();
            }
        </script>
        <form action="result.php" method="post" name="sd">
            <input type="hidden" name="page">    
            <input type="hidden" name="attackedstartdate">
            <input type="hidden" name="attackedenddate">
        </form>
        
<table border='1' align='center' cellspacing='0' cellpadding='0' width='600' style="font-size:12pt;color:#000000" bordercolor="#173A55">
                   <tr align='center' bgcolor="#418406" style="color:#FFFFFF">
                          <td nowrap width='100' >可疑IP</td>
						  <td nowrap width='100' >階段</td>
                   </tr>
<?php
$output = "SELECT `SuspiciousIP`, `description` FROM `collect_log`.`result` ORDER BY `description` ASC limit $startId, $realPerNum ";
$op = mysql_query($output);
      if($totalNum == 0)
          echo "<td colspan='2' style='text-align:center;background-color:#82CAFF'>並沒有收到可疑的附檔或瀏覽到惡意的網址</td>";
       for($i=0;$i<$realPerNum;$i++){
       mysql_data_seek($op,$i);
       list( $IP, $description ) = mysql_fetch_row($op);
	   ?>
	   <tr align='center' bgcolor="#FFFFFF">
                         
                          <td nowrap 
							<?php
								if(stristr($IP,"192.168.197.")){
									echo "bgcolor=\"#82CAFF\"";
								}else if(stristr($IP,"192.168.201.")){
									echo "bgcolor=\"#82CAFF\"";
								}else if(stristr($IP,"192.168.202.")){
									echo "bgcolor=\"#82CAFF\"";
								}else if(stristr($IP,"192.168.203.")){
									echo "bgcolor=\"#82CAFF\"";
								}else if(stristr($IP,"192.168.223.")){
									echo "bgcolor=\"#82CAFF\"";
								}else if(stristr($IP,"192.168.224.")){
									echo "bgcolor=\"#82CAFF\"";
								}else{
									echo "bgcolor=\"#FFFFFF\"";
								}
													
							?>
						  ><?php echo $IP;?></td>
	   <td nowrap ><?php 
					if ( $description == '疑似處於APT階段'){
					echo "<font color=\"ff0000\">".$description."</font>";
					}else if ($description == '疑似處於Attacking階段'){
					echo "<font color=\"FFA500\">".$description."</font>";
					}else{
					echo $description;
					}
					
					
					?></td>
	   <?php
	   }
?>
</tr>				   
				   
       </table>
       
       
       <table border='0' width='90%' align='center' style="font-size:12pt;color:#555555;">
                   <tr align='center'>
                          <td nowrap width='13%'><?php echo $firstPgLink;?></td>
                           <td nowrap width='13%' ><?php echo $forPgLink;?></td>
                           <td nowrap width='13%' >第<?php echo $nowPage;?>頁</td>
                           <td nowrap width='13%' >共<?php echo $totalPage;?>頁</td>
                           <td nowrap width='13%' > (<?php echo $totalNum?>筆資料)</td>
                           <td nowrap width='13%' ><?php echo $nextPgLink;?></td>
                           <td nowrap width='13%' ><?php echo $lastPgLink;?></td> 
                          
             <form>
             <td nowrap width="20%">
                    <?php
                    if($totalPage == 1){ 
                          echo "&nbsp;";
                        }else{     
                                  $pageFast="<select name=\"pageFast\" onChange=\"chg(this.form.pageFast.value,'".$start_date."','".$end_date."');\" >";
                                                                    for($i=1;$i<=$totalPage;$i++){
                                    
                                    $pageFast.="<option value=\"".$i."\"";
                        if($i==$nowPage) $pageFast.=" selected";
                        $pageFast.=">第".$i."頁</option>";        
                                  }             
                                    $pageFast.="</select>";
                                    echo $pageFast;
                        }
                    ?>     
             </td>
             </form>    
                   </tr>
       </table>
	</body>
</html>
