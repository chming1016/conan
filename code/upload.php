<html>
	
	<head>
        	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        	<title>Upload</title>
        	<link rel="stylesheet" type="text/css" href=" " />
        	<link rel="stylesheet" type="text/css" href="./menu.css" />
			<link rel="stylesheet" type="text/css" href="uploadify.css" />
        	<style type="text/css">
        	body,td,th {
	font-family: "微軟正黑體";
	font-size: 16px;
}
            </style>
        	<script src="js/jquery.js" type="text/javascript"></script>
        	<script src="js/interface.js" type="text/javascript"></script>
        	<script src="js/jquery.curvycorners.js" type="text/javascript"></script>
        	<script src="js/jquery.cycle.all.min.js"></script>
			<script src="js/jquery-1.5.1.min.js"></script>
			<script src="js/jquery.uploadify.js"></script>
			<script src="js/jquery.uploadify.min.js"></script>

			<script type="text/javascript">
				$(function() {
					$('#superPalo').uploadify({
						//'debug'    : true,
						'swf'      : 'uploadify.swf',
						'uploader' : 'upload_file_palo_super.php'
						// Put your options here
					});
				});
			</script>
	</head>

	<body>
    <div class= "upload" >
    <center>
    <h1>檔案上傳(支援單筆與多筆上傳)</h1>
    <h2>注意：一次只能選擇一種資料型態上傳</h2>
    </center>
    <table border="0" width="1200">
	<tr>
	<th><h3>資料型態一(例如：20120616_bot)</h3></th>
	<th><h3>資料型態二(例如：20120914_urlblockinglog)</h3></th>
	<th><h3>資料型態三(例如：paloalto_20120807_threat)</h3></th>
	<tr>
	<td align="left"><form action="upload_file_bot.php" method="post" enctype="multipart/form-data">
				<label for="file">檔案1:</label>
				<input type="file" name="file1" id="file0" /><br>
                <label for="file">檔案2:</label>
				<input type="file" name="file2" id="file1" /><br>
                <label for="file">檔案3:</label>
				<input type="file" name="file3" id="file1" /><br>
                <label for="file">檔案4:</label>
				<input type="file" name="file4" id="file1" /><br>
                <label for="file">檔案5:</label>
				<input type="file" name="file5" id="file1" /><br>
				<center><input type="submit" name="submit" value="Submit" /></center>
			</form></td>
	<td><form action="upload_file_urlblocking.php" method="post" enctype="multipart/form-data">
				<label for="file">檔案1:</label>
				<input type="file" name="file1" id="file0" /><br>
                <label for="file">檔案2:</label>
				<input type="file" name="file2" id="file1" /><br>
                <label for="file">檔案3:</label>
				<input type="file" name="file3" id="file1" /><br>
                <label for="file">檔案4:</label>
				<input type="file" name="file4" id="file1" /><br>
                <label for="file">檔案5:</label>
				<input type="file" name="file5" id="file1" /><br>
				<center><input type="submit" name="submit" value="Submit" /></center>
			</form></td>
    <td><form action="upload_file_palo.php" method="post" enctype="multipart/form-data">
				<label for="file">檔案1:</label>
				<input type="file" name="file1" id="file0" /><br>
                <label for="file">檔案2:</label>
				<input type="file" name="file2" id="file1" /><br>
                <label for="file">檔案3:</label>
				<input type="file" name="file3" id="file1" /><br>
                <label for="file">檔案4:</label>
				<input type="file" name="file4" id="file1" /><br>
                <label for="file">檔案5:</label>
				<input type="file" name="file5" id="file1" /><br>
				<label for="file">檔案6:</label>
				<input type="file" name="file6" id="file1" /><br>
				<center><input type="submit" name="submit" value="Submit" /></center>
			</form></td>
			
	</tr>
	<table border="0" width="950">
	<tr>
	<th><h3>資料型態四(例如：arcsight_checkpoint_20130221_20130222)</h3></th>
	<th><h3>資料型態五(例如：nccu_snort _alert.txt)</h3></th>
	<th><h3>paloalto</h3></th>
	<tr>
	<td>
	
	<form action="upload_file_arcsight.php" method="post" enctype="multipart/form-data">
				<label for="file">檔案1:</label>
				<input type="file" name="file1" id="file0" /><br>
                <label for="file">檔案2:</label>
				<input type="file" name="file2" id="file1" /><br>
                <label for="file">檔案3:</label>
				<input type="file" name="file3" id="file1" /><br>
                <label for="file">檔案4:</label>
				<input type="file" name="file4" id="file1" /><br>
                <label for="file">檔案5:</label>
				<input type="file" name="file5" id="file1" /><br>
				<center><input type="submit" name="submit" value="Submit" /></center>
			</form>
			</td>
	<td>
	
	<form action="upload_file_snort_alert.php" method="post" enctype="multipart/form-data">
				<label for="file">檔案:</label>
				<input type="file" name="file" id="file" /><br>
				<center><input type="submit" name="submit" value="Submit" /></center>
			</form>
			</td>	
			
	<td>
	<form>
		<div id="queue"></div>
		<input id="superPalo" name="superPalo" type="file" multiple="true">
	</form>
	</td>			
	

	
	<tr>
	
	</table>
	</center>
    </div>
	</body>
</html>
