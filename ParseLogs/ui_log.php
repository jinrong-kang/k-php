<?php
	define('PACKAGE', 'ui_log');
	$lan = "";
	if (isset($_GET['language'])) {
		$lan = $_GET["language"];
	}
	switch($lan)
	{
		case "chinese": 
			break;
		case "english": 	
			putenv('LANG=en_US'); 
			setlocale(LC_ALL, 'en_US'); 
			break;
		case "france": 
			putenv('LANG=fr_FR'); 
			setlocale(LC_ALL, 'fr_FR'); 
			break;
		default: 
			break;
	}
	bindtextdomain(PACKAGE, 'language/'); 
	textdomain(PACKAGE);
	$ping_msg = gettext("将文件Ping.txt写入t_ping表");
	$login_msg = gettext("将文件Login.txt写入t_login表");
	$auth_msg = gettext("将文件Auth.txt写入t_auth表");
	
?>
<html>
	<head>
		<title>Txt-data insert into  Database</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>

	<body>
		<p style="color:red; font-size:20px;">
			请选择需要解析的txt文件并存入对应的数据库表
		</p>

		<form method = get action="ui_log.php">
			<input type="submit" name="language" value="english">
			<input type="submit" name="language" value="france">
			<input type="submit" name="language" value="chinese">
		</form> 

		<form action="business_log.php">
			<input type="radio" name="type" value="ping" checked> <?php echo $ping_msg; ?> <br>
			<input type="radio" name="type" value="login"> <?php echo $login_msg; ?> <br>
			<input type="radio" name="type" value="auth"> <?php echo $auth_msg; ?> <br>
			<input type="submit" value="test" style="background:red; color:#ff0;">	
		</form> 
	</body>
</html>
