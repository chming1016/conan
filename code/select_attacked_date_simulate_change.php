<?php
if (!isset($_SESSION)) { 
    session_start();
}
?>
<html>

        <head>
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>correlation</title>
                <link rel="stylesheet" type="text/css" href=" " />
                <link rel="stylesheet" type="text/css" href="./menu.css" />
        
                <script src="js/jquery.js" type="text/javascript"></script>
                <script src="js/interface.js" type="text/javascript"></script>
                <script src="js/jquery.curvycorners.js" type="text/javascript"></script>
                <script src="js/jquery.cycle.all.min.js"></script>

        </head>

        <body>

	<?
		$user = $_SESSION["loginMember"];

                
                if( is_null($user)==true )
                {
                	echo "未登入喔!!!你想做什麼壞事阿@@!";
                        header("Location:./");
                }
                 

	?>
	
	<div class= "correlation" >


    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;開始日期</p>
	<center>
		<form action="view_attacked_ip_simulate_change.php" method="post">
			<label for="AttackedStartYear"></label>
			<select name="AttackedStartYear" id="AttackedStartYear">
            <option value="2012-">2012</option>
			<option value="2013-">2013</option>	  
          </select>
          年
		  <label for="AttackedStartMonth"></label>
			<select name="AttackedStartMonth" id="AttackedStartMonth">
			  <option value="01-">1</option>
			  <option value="02-">2</option>
              <option value="03-">3</option>
              <option value="04-">4</option>
              <option value="05-">5</option>
              <option value="06-">6</option>
              <option value="07-">7</option>
              <option value="08-">8</option>
              <option value="09-">9</option>
              <option value="10-">10</option>
              <option value="11-">11</option>
              <option value="12-">12</option>
	      </select>
          月
          <label for="AttackedtartDay"></label>
			<select name="AttackedStartDay" id="AttackedStartDay">
			  <option value="01">1</option>
			  <option value="02">2</option>
              <option value="03">3</option>
              <option value="04">4</option>
              <option value="05">5</option>
              <option value="06">6</option>
              <option value="07">7</option>
              <option value="08">8</option>
              <option value="09">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
              </select>
              日
		</center>
		<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;結束日期</p>
		<center>
			<label for="AttackedEndYear"></label>
			<select name="AttackedEndYear" id="AttackedEndYear">
            <option value="2012-">2012</option>
			<option value="2013-">2013</option>	  
          </select>
          年
		  <label for="AttackedEndMonth"></label>
			<select name="AttackedEndMonth" id="AttackedEndMonth">
			  <option value="01-">1</option>
			  <option value="02-">2</option>
              <option value="03-">3</option>
              <option value="04-">4</option>
              <option value="05-">5</option>
              <option value="06-">6</option>
              <option value="07-">7</option>
              <option value="08-">8</option>
              <option value="09-">9</option>
              <option value="10-">10</option>
              <option value="11-">11</option>
              <option value="12-">12</option>
	      </select>
          月
          <label for="AttackedEndDay"></label>
			<select name="AttackedEndDay" id="AttackedEndDay">
			  <option value="01">1</option>
			  <option value="02">2</option>
              <option value="03">3</option>
              <option value="04">4</option>
              <option value="05">5</option>
              <option value="06">6</option>
              <option value="07">7</option>
              <option value="08">8</option>
              <option value="09">9</option>
              <option value="10">10</option>
              <option value="11">11</option>
              <option value="12">12</option>
              <option value="13">13</option>
              <option value="14">14</option>
              <option value="15">15</option>
              <option value="16">16</option>
              <option value="17">17</option>
              <option value="18">18</option>
              <option value="19">19</option>
              <option value="20">20</option>
              <option value="21">21</option>
              <option value="22">22</option>
              <option value="23">23</option>
              <option value="24">24</option>
              <option value="25">25</option>
              <option value="26">26</option>
              <option value="27">27</option>
              <option value="28">28</option>
              <option value="29">29</option>
              <option value="30">30</option>
              <option value="31">31</option>
              </select>
              日
			<?php
			echo "<br>";
			?>
			<?php
			echo "<br>";
			?>

			<input type="submit" />
	  </form>
	  </center>
	</div>
	</body>

</html>
