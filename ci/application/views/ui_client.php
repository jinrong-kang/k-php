<?php
	define('PACKAGE', 'ui_client');
	$lan = "";
	if (isset($_POST['language'])) {
		$lan = $_POST["language"];
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

<html>
<head>
	<title>Questionnaire for client</title>
	<script type="text/javascript">
		function isDisplay()
		{
			var ratios = document.getElementsByName("B2a");
			if(ratios[2].checked)
			{
				document.getElementById("display").style.display="block";
			}
			else
			{
				document.getElementById("display").style.display="none";
			}
		}


	</script>
</head>
<body>
	<form method="post" action="ui_client.php">
			<input type="image" name="language" value="english" src="images/gb.png" alt="Submit" align="right" style="margin:5px;" > 
			<input type="image" name="language" value="france" src="images/fr.png" alt="Submit" align="right" style="margin:5px"> 
			<input type="image" name="language" value="chinese" src="images/cn.png" alt="Submit" align="right" style="margin:5px">
	</form> 
	<h1 align="center"> <?php echo gettext("AIWIFI 调查问卷"); ?> </h1>
	<form id="form" >
		<h4><?php echo gettext("一、请帮助我们甄别您的所属群体"); ?></h4>
		<ol>
		<li name="1.1age">
			<span style="color: #ff0000;"><?php echo gettext("您的年龄："); ?></span><br/>
			<input type="radio" name="A1" value="1" required><?php echo gettext("15岁以下"); ?><br/>
			<input type="radio" name="A1" value="2"><?php echo gettext("15到25岁"); ?><br/>
			<input type="radio" name="A1" value="3"><?php echo gettext("26到35岁"); ?><br/>
			<input type="radio" name="A1" value="4"><?php echo gettext("36到45岁"); ?><br/>
			<input type="radio" name="A1" value="5"><?php echo gettext("46到55岁"); ?><br/>
			<input type="radio" name="A1" value="6"><?php echo gettext("55岁以上"); ?><br/><br/>
		</li>
		<li name="1.2sex">
			<span style="color: #ff0000;"><?php echo gettext("您的性别："); ?></span><br/>
			<input type="radio" name="A2" value="1" required> <?php echo gettext("男"); ?>
			<input type="radio" name="A2" value="2"> <?php echo gettext("女"); ?><br/><br/>
		</li>
		<li name="1.3client_id">
			<span style="color: #ff0000;"> <?php echo gettext("您所从事的行业是："); ?></span><br/>
			<input type="radio" name="A3" value="1" required> <?php echo gettext("医药卫生"); ?>&nbsp;
			<input type="radio" name="A3" value="2"> <?php echo gettext("导游导购"); ?>&nbsp;
			<input type="radio" name="A3" value="3"> <?php echo gettext("理发美容"); ?><br/>
			<input type="radio" name="A3" value="4"> <?php echo gettext("商场商铺"); ?>&nbsp;	
			<input type="radio" name="A3" value="5"> <?php echo gettext("政府办公"); ?>&nbsp;
			<input type="radio" name="A3" value="6"> <?php echo gettext("学生"); ?><br/>
			<input type="radio" name="A3" value="7"> <?php echo gettext("酒楼饭馆"); ?>&nbsp;	
			<input type="radio" name="A3" value="8"> <?php echo gettext("酒店会展"); ?>&nbsp;
			<input type="radio" name="A3" value="9"> <?php echo gettext("其它"); ?><br/>
		</li>
		</ol>

		<h4><?php echo gettext("二、请告诉我们您对公共网络的看法"); ?></h4>
		<ol start="1">
		<li name="2.1wifi_request">
			<span style="color: #ff0000;"><?php echo gettext("您有向顾客提供wifi服务的习惯吗？"); ?></span><br/>
			<input type="radio" name="B1" value="1" required> <?php echo gettext("有"); ?>	<br/>
			<input type="radio" name="B1" value="2"> <?php echo gettext("没有"); ?><br/><br/>
		</li>
		<li name="2.2using_way"  >
			<span style="color: #ff0000;"><?php echo gettext("如果有，您更倾向于哪种使用方式？"); ?></span><br/>
			<input type="radio" name="B2a" value="1" required onchange="isDisplay()"> <?php echo gettext("向顾客公开您的wifi密码"); ?>	<br/>
			<input type="radio" name="B2a" value="2" onchange="isDisplay()"> <?php echo gettext("使用登录平台进行网络连接"); ?><br/>
			<input type="radio" name="B2a" value="3" onchange="isDisplay()"> <?php echo gettext("其它（请说明）："); ?><br/>
			<input id="display" type="text" name="B2b" maxlength="100" style="display:none;" required 	> <br/>
		</li>
		<li name="2.3info_security">
			<span style="color: #ff0000;"> <?php echo gettext("在给顾客提供网络的同时，您是否会担心自己的信息安全性？"); ?></span><br/>
			<input type="radio" name="B3" value="1" required> <?php echo gettext("完全不担心"); ?>	<br/>
			<input type="radio" name="B3" value="2"> <?php echo gettext("不太担心"); ?><br/>
			<input type="radio" name="B3" value="3"> <?php echo gettext("担心"); ?><br/>
			<input type="radio" name="B3" value="4"> <?php echo gettext("有些担心"); ?><br/>
			<input type="radio" name="B3" value="5"> <?php echo gettext("非常担心"); ?><br/><br/>
		</li>
		<li name="2.4info_against">
			<span style="color: #ff0000;"><?php echo gettext("您在提供公共wifi时信息是否遭遇过侵害？"); ?></span><br/>
			<input type="radio" name="B4" value="1" required> <?php echo gettext("是"); ?>	<br/>
			<input type="radio" name="B4" value="2"> <?php echo gettext("否"); ?><br/>
			<input type="radio" name="B4" value="3"> <?php echo gettext("不知道"); ?><br/><br/>
		</li>
		</ol>	

		<h4><?php echo gettext("三、请帮助我们完善产品或服务的功能"); ?></h4>
		<ol start="1">
		<li name="3.1number_control">
			<span style="color: #ff0000;"> <?php echo gettext("您希望通过登录平台来控制连接网络的人群吗？"); ?></span><br/>
			<input type="radio" name="C1" value="1" required> <?php echo gettext("希望"); ?>	<br/>
			<input type="radio" name="C1" value="2"> <?php echo gettext("不希望"); ?><br/>
			<input type="radio" name="C1" value="3"> <?php echo gettext("无所谓"); ?><br/><br/>
		</li>
		<li name="3.2make_own_value_add">
			<span style="color: #ff0000;"> <?php echo gettext("您希望制定自己的增值服务吗？"); ?></span><br/>
			<input type="radio" name="C2" value="1" required> <?php echo gettext("希望"); ?>	<br/>
			<input type="radio" name="C2" value="2"> <?php echo gettext("不希望"); ?><br/>
			<input type="radio" name="C2" value="3"> <?php echo gettext("无所谓"); ?><br/><br/>
		</li>
		<li name="3.3publish_own_adv">
			<span style="color: #ff0000;"> <?php echo gettext("您希望在该平台上发布自己的广告吗？"); ?></span><br/>
			<input type="radio" name="C3" value="1" required> <?php echo gettext("希望"); ?>	<br/>
			<input type="radio" name="C3" value="2"> <?php echo gettext("不希望"); ?><br/>
			<input type="radio" name="C3" value="3"> <?php echo gettext("无所谓"); ?><br/><br/>
		</li>
		<li name="3.4adv_push">
			<span style="color: #ff0000;"> <?php echo gettext("您希望给使用过您家共享网络的客户发送广告推送吗？"); ?></span><br/>
			<input type="radio" name="C4" value="1" required> <?php echo gettext("希望"); ?>	<br/>
			<input type="radio" name="C4" value="2"> <?php echo gettext("不希望"); ?><br/>
			<input type="radio" name="C4" value="3"> <?php echo gettext("无所谓"); ?><br/><br/>
		</li>
		<li name="3.5cooperation">
			<span style="color: #ff0000;"> <?php echo gettext("您愿意同其它使用该平台的商户结成合作关系吗？"); ?></span><br/>
			<input type="radio" name="C5" value="1" required> <?php echo gettext("愿意"); ?>	<br/>
			<input type="radio" name="C5" value="2"> <?php echo gettext("不愿意"); ?><br/>
			<input type="radio" name="C5" value="3"> <?php echo gettext("无所谓"); ?><br/><br/>
		</li>
		<li name="3.6open_adv_right">
			<span style="color: #ff0000;"> <?php echo gettext("您愿意对合作商户开放广告权限吗？"); ?></span><br/>
			<input type="radio" name="C6" value="1" required> <?php echo gettext("愿意"); ?>	<br/>
			<input type="radio" name="C6" value="2"> <?php echo gettext("不愿意"); ?><br/>
			<input type="radio" name="C6" value="3"> <?php echo gettext("无所谓"); ?><br/><br/>
		</li>
		<li name="3.7push_discount_service">
			<span style="color: #ff0000;"> <?php echo gettext("您愿意通过平台推送来给顾客提供折扣服务吗？"); ?></span><br/>
			<input type="radio" name="C7" value="1" required> <?php echo gettext("愿意"); ?>	<br/>
			<input type="radio" name="C7" value="2"> <?php echo gettext("不愿意"); ?><br/>
			<input type="radio" name="C7" value="3"> <?php echo gettext("无所谓"); ?><br/><br/>
		</li>
		</ol>

		<h4><?php echo gettext("四、请告诉我们您对该网络分享平台的一些期待和建议"); ?></h4>
		<textarea name="D1" rows="5" cols="60" maxlength="1000"></textarea>

		<h4><?php echo gettext("五、请填写您的个人信息"); ?></h4>	
		<?php echo gettext("姓名:"); ?> <input type="text" name="name" maxlength="50"><br>
		<?php echo gettext("邮箱:"); ?> <input type="email" name="email" maxlength="50"><br>
		<?php echo gettext("电话:"); ?> <input type="tel" pattern="[0-9]{10}" name="tel" maxlength="20"><br>
		<?php echo gettext("地址:"); ?> <input type="text" name="address" maxlength="50"><br>
		<input type="hidden" name="type" value="2"> 

		<input id="submit" type="submit" value=<?php echo gettext("提交"); ?> style="background:red; color:#ff0;" />
	</form>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		$("#submit").click(function() {
    	var url = "libs/business.php"; // the script where you handle the form input.
    	$.ajax({
           type: "POST",
           url: url,
           data: $("#form").serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert("haha"); // show response from the php script.
           }
         });
    	return false; // avoid to execute the actual submit of the form.
		});
	</script>

	<p><?php echo gettext("感谢您的参与！"); ?></p>
</body>
</html>


