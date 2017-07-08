<?php
	define('PACKAGE', 'ui_index');
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
	bindtextdomain(PACKAGE, 'languages/'); 
	textdomain(PACKAGE);
?>	
<!DOCTYPE html>
<html>
<head>
	<title >AIWIFI Questionnaire</title>
	<style type="text/css">
	form {
		text-align: center;
	}
	h1 {
		text-align: center;
	}
	</style>
</head>
<body>
	<form method = get action="ui_index.php">
			<input type="image" name="language" value="english" src="images/gb.png" alt="Submit" align="right" style="margin:5px;">
			<input type="image" name="language" value="france" src="images/fr.png" alt="Submit" align="right" style="margin:5px"> 
			<input type="image" name="language" value="chinese" src="images/cn.png" alt="Submit" align="right" style="margin:5px">
	</form> 
	<h1> <?php echo gettext("用户调查问卷"); ?> </h1>
	<p><?php echo gettext("您好！"); ?>
	<?php echo gettext("我们是AIWIFI项目研发团队的成员，正在进行一项有关公共网络（即公共wifi）应用状态的调查，想请教您的一些看法，您的回答将作为我们的重要参考。希望您在百忙之中抽出一点宝贵的时间，协助我们完成以下调查问卷，我们郑重保证您的回答只会作为完善我们服务的参考信息，不予公开。感谢您的配合！"); ?>
	</p>
	<form method=get action="ui_user.php">
		<input type="submit" name="type" value=<?php echo gettext("用户"); ?> >
	</form>
	<form method=get action="ui_client.php">
		<input type="submit" name="type" value=<?php echo gettext("商家"); ?>  >
	</form>
</body>
</html>