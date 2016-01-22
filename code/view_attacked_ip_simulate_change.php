<?php
ini_set('display_errors', 0);


        include('link.php');
		//include('menu.php');

		$nowPage = $_POST["page"];
		
		
		
	
		$attacked_startdate = $_POST["AttackedStartYear"].$_POST["AttackedStartMonth"].$_POST["AttackedStartDay"];
		$attacked_enddate = $_POST["AttackedEndYear"].$_POST["AttackedEndMonth"].$_POST["AttackedEndDay"];
		
		
		
		
		
		
	    mysql_query("TRUNCATE TABLE  `result`");
		$querydate = "SELECT DISTINCT `Destination address` FROM `collect_log`.`paloalto_intrusion_simulate` WHERE `Receive Time` >= '".$attacked_startdate." 00:00:00' AND `Receive Time` <= '".$attacked_enddate." 23:59:59'";
		
		$rs = mysql_query($querydate);

		$totalNum = mysql_num_rows($rs);

if($totalNum==0){
	header("Refresh:0;Url=result.php");

} else {
	
	//echo "</center>";
	       //取出資料   
	$sql = $querydate." ORDER BY `Destination address` ASC";
	$rs = mysql_query($sql);
	$threathold = 0;
	for($i=0;$i<$totalNum;$i++){
	mysql_data_seek($rs,$i);
	list( $DIP ) = mysql_fetch_row($rs);
	                          
	$attacked_observation = "SELECT `Receive Time` FROM `collect_log`.`paloalto_intrusion_simulate` WHERE `Receive Time` >= '".$attacked_startdate." 00:00:00' AND `Receive Time` <= '".$attacked_enddate." 23:59:59' AND `Destination address` = '".$DIP."' ORDER BY `Receive Time` ASC";

	$attacked = mysql_query($attacked_observation);

	$attackednumber = mysql_num_rows($attacked);
							  
							  //echo $attackednumber;
							  
							         
									
	$Attacked_Time_Temp= array();
	for($j=0;$j<$attackednumber;$j++){
		mysql_data_seek($attacked,$j);
		list($Attacked_Threat,$Attacked_Time) = mysql_fetch_row($attacked);
		$Attacked_Time_Temp[] = $Attacked_Time;
	}
							//echo $Attacked_Time_Temp[0];
	$cnc_observation = "SELECT `Malware Activity`,`Date Time` FROM `collect_log`.`bot_simulate` WHERE `Date Time` >= '".$Attacked_Time_Temp[0]."' AND `Date Time` <= '".$attacked_enddate." 23:59:59' AND `Source` = '".$DIP."' ORDER BY `Date Time` ASC";
							  
	$cnc = mysql_query($cnc_observation);

	$cncnumber = mysql_num_rows($cnc);
							  

							  if ($cncnumber > $threathold){
									
							         
									 $Maliciousfiledownloadcount = 0;
									 $CnCServerConnectcount = 0;
									 $Cnc_Time_Temp= array();
									 
							   for($k=0;$k<$cncnumber;$k++){
	      							 mysql_data_seek($cnc,$k);
	      							 list($MalwareActivity,$Cnc_Time) = mysql_fetch_row($cnc);  
									 $Cnc_Time_Temp[] = $Cnc_Time;
									 
								   if($MalwareActivity == 'Malicious file/exploit download'
								   || $MalwareActivity == 'DNS query of a site known to contain malware'
								   || $MalwareActivity == 'Access to site known to contain malware' 
								   )
								   {
									   $Maliciousfiledownloadcount = $Maliciousfiledownloadcount+1;
									   
								   }else if($MalwareActivity == 'Access to a site known to contain malware' 
								   || $MalwareActivity == 'Communication with C&C'
								   || $MalwareActivity == 'DNS query of a C&C site'
								   || $MalwareActivity == 'Communication with Command and Control site'
								   ){
									   $CnCServerConnectcount = $CnCServerConnectcount+1;

								   }else{
								   }
							   }
							   
							  $Attacking_Observation = "SELECT `Threat/Content Name`,`Receive Time` FROM `collect_log`.`paloalto_simulate` WHERE `Receive Time` >= '".$Cnc_Time_Temp[0]."' AND `Receive Time` <= '".$attacked_enddate." 23:59:59' AND `Source address` = '".$DIP."' ORDER BY `Receive Time` ASC";


							  
							  $Attacking = mysql_query($Attacking_Observation);
							  
							  $attackingnumber = mysql_num_rows($Attacking);
							  
							  if ($attackingnumber > $threathold){
							  
							  $Attacking_Time_Temp= array();
							  $InformationProbecount = 0;
							  $SystemAttemptedAccesscount = 0;
							  $AbnormalNetworkBehaviorcount = 0;
							  
							  for($l=0;$l<$attackingnumber;$l++){
	      							 mysql_data_seek($Attacking,$l);
	      							 list($Attacking_Threat,$Attacking_Time) = mysql_fetch_row($Attacking);
									 $Attacking_Time_Temp[] = $Attacking_Time;
									 
							   if ($Attacking_Threat == 'Internet Explorer Improper URL Canonicalization Domain Spoofing Vulnerability(30140)' 
							   || $Attacking_Threat == 'HTTP OPTIONS Method(30520)'
							   || $Attacking_Threat == 'HTTP Apache 2.0 Path Disclosure Vulnerability(30818)'
							   || $Attacking_Threat == 'Microsoft Windows Registry Enumeration(30840)'
							   || $Attacking_Threat == 'HTTP Directory Traversal Vulnerability(30844)'
							   
							   || $Attacking_Threat == 'Microsoft RPC Endpoint Mapper(30845)'
							   || $Attacking_Threat == 'NetBIOS nbtstat query(31707)'
							   || $Attacking_Threat == 'Microsoft Windows Messenger ActiveX Control Information Disclosure Vulnerability(31730)' 
							   || $Attacking_Threat == 'Microsoft IIS ASP.NET NULL Byte Injection Information Disclosure Vulnerability(32735)'
							   || $Attacking_Threat == 'HTTP Non RFC-Compliant Response Found(32880)' 
							   || $Attacking_Threat == 'ZmEu Scanner Detection(34605)'
							   ){
										 $InformationProbecount = $InformationProbecount + 1 ;
							   
							   }else if($Attacking_Threat == 'Conficker DNS Request(20000)'
							   || $Attacking_Threat == 'Microsoft SMTP Service and Exchange Routing Engine Buffer Overflow Vulnerability(30411)'
							   || $Attacking_Threat == 'HTTP SQL Injection Attempt(30514)'
							   || $Attacking_Threat == 'Microsoft RPC ISystemActivator bind(30846)'
							   || $Attacking_Threat == 'Microsoft Windows Server Service NetrServerGetInfo access(30861)' 
							   || $Attacking_Threat == 'Microsoft Windows Server Service NetrShareEnum access(30862)' 
							   || $Attacking_Threat == 'Netbios SMB Tree connect andX Request admin$ access(30866)' 
							   || $Attacking_Threat == 'Qt BMP Handling Buffer Overflow Vulnerability(31105)'
							   || $Attacking_Threat == 'HTTP Request ACE Encoded Domain Name Access(31298)' 
							   || $Attacking_Threat == 'Failed Authentication Through Mail Protocol(31709)'
							   || $Attacking_Threat == 'Microsoft Windows Netbios ADMIN Connect(31712)'
							   || $Attacking_Threat == 'Buffer overflow in the On-Access Scanner in McAfee VirusScan(31438)'
							   || $Attacking_Threat == 'Microsoft Windows SMB Fragmentation RPC Request Attempt(33033)'
							   || $Attacking_Threat == 'Snort URIContent Rules Detection Evasion Vulnerability(33334)'
							   || $Attacking_Threat == 'Microsoft Windows WinReg Access Attempt(33865)'
							   || $Attacking_Threat == 'Windows Shell Remote Code Execution Vulnerability(34878)'
							   || $Attacking_Threat == 'Microsoft Windows Registry Read Attempt(34940)' 
							   || $Attacking_Threat == 'Microsoft Windows Registry Write Attempt(34941)' 
							   || $Attacking_Threat == 'FTP: login brute force attempt(40001)' 
							   || $Attacking_Threat == 'SMB: User Password Brute-force Attempt(40004)' 
							   || $Attacking_Threat == 'HTTP: User Authentication Brute-force Attempt(40006)' 
							   || $Attacking_Threat == 'MAIL: User Login Brute-force Attempt(40007)' 
							   || $Attacking_Threat == 'MS-RDP Brute Force Attempt(40021)' 
							   || $Attacking_Threat == 'Microsoft ASP.Net Information Leak brute force Attempt(40022)' 
							   || $Attacking_Threat == 'SSL Renegotiation Denial of Service Brute Force(40026)' 
							   || $Attacking_Threat == 'HTTP Forbidden Brute Force Attack(40031)' 
							   || $Attacking_Threat == 'Microsoft Windows SMB NTLM Authentication Lack of Entropy Vulnerability(40034)' 
							   
							   ){
								   $SystemAttemptedAccesscount = $SystemAttemptedAccesscount+1;
								   
							   }else if($Attacking_Threat == 'Generic GET Method Buffer Overflow Vulnerability(34267)' 
							   || $Attacking_Threat == 'HTTP GET Requests Long URI Anomaly(30800)'
							   || $Attacking_Threat == 'VNC Client Connection Failed Response Parsing Buffer Overflow Vulnerability(30226)'){
								   $AbnormalNetworkBehaviorcount = $AbnormalNetworkBehaviorcount+1;
							   }else{
										 
								   }
							   }
							   
							   $datatheft_observation = "SELECT `URL` FROM `collect_log`.`paloalto_datafiltering_simulate` WHERE `Receive Time` >= '".$Attacking_Time_Temp[0]."' AND `Receive Time` <= '".$attacked_enddate." 23:59:59' AND `Source address` = '".$DIP."' AND `URL` !=  ' ' ORDER BY `Receive Time` ASC";
							  //echo $datatheft_observation."<br/>";
							  $datatheft = mysql_query($datatheft_observation);
							  
							  $datatheftnumber = mysql_num_rows($datatheft);
							  
							  if ($datatheftnumber > $threathold){
							  
							  $packettemp = array();
							  for($m=0;$m<$datatheftnumber;$m++){
	      							 mysql_data_seek($datatheft,$m);
	      							 list($packet) = mysql_fetch_row($datatheft);
									 if (!in_array($packet,$packettemp)){
									 $packettemp[] = $packet;
									 }else{	 
									 }
							  }
								//echo "<font color=\"ff0000\">疑似處於APT階段</font>";
								$insert = "INSERT INTO  `collect_log`.`result` (`SuspiciousIP` ,`description`)VALUES ('".$DIP."',  '疑似處於APT階段');";
								mysql_query($insert);
							  }else{
									
							   
							    //echo "<font color=\"FFA500\">疑似處於Attacking階段</font>";
								$insert = "INSERT INTO  `collect_log`.`result` (`SuspiciousIP` ,`description`)VALUES ('".$DIP."',  '疑似處於Attacking階段');";
							  mysql_query($insert);
							  }
							  }else{
							  
							  //echo "疑似處於CNC階段";
							  $insert = "INSERT INTO  `collect_log`.`result` (`SuspiciousIP` ,`description`)VALUES ('".$DIP."',  '疑似處於CNC階段');";
							  mysql_query($insert);
							  }
							   }else{
							   //echo "疑似處於Attacked階段";
							   $insert = "INSERT INTO  `collect_log`.`result` (`SuspiciousIP` ,`description`)VALUES ('".$DIP."',  '疑似處於Attacked階段');";
							   mysql_query($insert);
							   } 
							   
							  
							   
	}
	$url = "result.php?startdate=".$attacked_startdate."&enddate=".$attacked_enddate;
	header("Refresh:0;Url=".$url);
	//header("Location:$url");
	//echo "<script>windows.location.href='".$url."'</script>";
	}
	?>