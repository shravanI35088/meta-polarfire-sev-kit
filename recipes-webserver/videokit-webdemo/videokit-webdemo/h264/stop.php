<html>
<head>
	<title>Microchip H.264 GUI Demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="pfsoc.css">
</style>
</head>
<body>		
<!--	<img src="microchip_logo.png" alt="Microchip" width="150" height="100"></br> -->
	<img src="mchp_logo2.png" alt="Microchip" width="187" height="100"></br>
	<h1 align=center style="background-color:powderblue;color:blue">H.264 GUI</h1>

<?php
?>
<table align=center>
<tr></tr>
<tr align=center>
	<td>
		<h2> Stopping video streaming... </h2>
	</td>
</tr>
</table>
<?php
    	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
		$url = "https://";   
    	else  
		$url = "http://";   
    	$url.= $_SERVER['HTTP_HOST'];   
	$url.= $_SERVER['REQUEST_URI'];    
	$ip_server = $_SERVER['SERVER_ADDR'];
//	sleep(1);
	echo shell_exec("sudo /srv/www/h264/stop.sh >/srv/www/h264/messages 2>/srv/www/h264/error_log");

header('Refresh: 3; URL=http://'.$ip_server.'/h264/index.htm?stream=stopped');
exit();
?>

</body>
</html>
