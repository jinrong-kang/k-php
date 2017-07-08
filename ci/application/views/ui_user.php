<?php
	define('PACKAGE', 'ui_user');
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

<html>
<head>
	<title>Questionnaire for user</title>
	<script type="text/javascript">
		function redirectPage()
		{
			location.href = "ui_index.php";
		} 
	</script>
</head>
<body>
	<form method = get action="ui_user.php">
			<input type="image" name="language" value="english" src="images/gb.png" alt="Submit" align="right" style="margin:5px;" > 
			<input type="image" name="language" value="france" src="images/fr.png" alt="Submit" align="right" style="margin:5px"> 
			<input type="image" name="language" value="chinese" src="images/cn.png" alt="Submit" align="right" style="margin:5px">
	</form> 
	<h1 align="center"> <?php echo gettext("用户问卷"); ?> </h1>
	<form id="form" method="post" action="libs/business.php">
		<h4><?php echo gettext("一、请帮助我们甄别您的所属群体"); ?></h4>
		<ol>
		<li name="age">
			<span style="color: #ff0000;"><?php echo gettext("您的年龄："); ?></span><br/>
			<input type="radio" name="A1" value="1" required /><?php echo gettext("15岁以下"); ?><br/>
			<input type="radio" name="A1" value="2" /><?php echo gettext("15到25岁"); ?><br/>
			<input type="radio" name="A1" value="3" /><?php echo gettext("26到35岁"); ?><br/>
			<input type="radio" name="A1" value="4" /><?php echo gettext("36到45岁"); ?><br/>
			<input type="radio" name="A1" value="5" /><?php echo gettext("46到55岁"); ?><br/>
			<input type="radio" name="A1" value="6" /><?php echo gettext("55岁以上"); ?><br/><br/>
		</li>
		<li name="sex">
			<span style="color: #ff0000;"><?php echo gettext("您的性别："); ?></span><br/>
			<input type="radio" name="A2" value="1" > <?php echo gettext("男"); ?>
			<input type="radio" name="A2" value="2"> <?php echo gettext("女"); ?><br/><br/>
		</li>
		<li name="user_id">
			<span style="color: #ff0000;"> <?php echo gettext("您的身份是："); ?></span><br/>
			<input type="radio" name="A3" value="1"> <?php echo gettext("在职员工"); ?>	<br/>
			<input type="radio" name="A3" value="2"> <?php echo gettext("学生"); ?><br/>
			<input type="radio" name="A3" value="3"> <?php echo gettext("其它"); ?><br/>
		</li>
		</ol>

		<h4><?php echo gettext("二、请告诉我们您对公共网络的看法"); ?></h4>
		<ol start="1">
		<li name="1.wifi_request">
			<span style="color: #ff0000;"><?php echo gettext("您是否有使用公共网络的需求？"); ?></span><br/>
			<input type="radio" name="B1" value="1"> <?php echo gettext("有"); ?>	<br/>
			<input type="radio" name="B1" value="2"> <?php echo gettext("没有"); ?><br/><br/>
		</li>
		<li name="2.using_way">
			<span style="color: #ff0000;"><?php echo gettext("如果有，您更倾向于哪种使用方式？"); ?></span><br/>
			<input type="radio" name="B2a" value="1"> <?php echo gettext("向店家询问他的wifi密码"); ?>	<br/>
			<input type="radio" name="B2a" value="2"> <?php echo gettext("使用登录平台直接进行网络连接"); ?><br/>
			<?php echo gettext("其它（请说明）："); ?><br/>
			<input type="text" name="B2b"  spellcheck="true" maxlength="100"> <br/><br/>
		</li>
		<li name="3.info_security">
			<span style="color: #ff0000;"> <?php echo gettext("在使用公共网络的同时，您是否会担心自己的信息安全性？"); ?></span><br/>
			<input type="radio" name="B3" value="1"> <?php echo gettext("完全不担心"); ?>	<br/>
			<input type="radio" name="B3" value="2"> <?php echo gettext("不太担心"); ?><br/>
			<input type="radio" name="B3" value="3"> <?php echo gettext("担心"); ?><br/>
			<input type="radio" name="B3" value="4"> <?php echo gettext("有些担心"); ?><br/>
			<input type="radio" name="B3" value="5"> <?php echo gettext("非常担心"); ?><br/><br/>
		</li>
		<li name="4.info_against">
			<span style="color: #ff0000;"><?php echo gettext("您在使用公共wifi时信息是否遭遇过侵害？"); ?></span><br/>
			<input type="radio" name="B4" value="1"> <?php echo gettext("是"); ?>	<br/>
			<input type="radio" name="B4" value="2"> <?php echo gettext("否"); ?><br/>
			<input type="radio" name="B4" value="3"> <?php echo gettext("不知道"); ?><br/><br/>
		</li>
		<li name="5.using_time">
			<span style="color: #ff0000;"> <?php echo gettext("平均每次使用公共网络的时长"); ?></span><br/>
			<input type="radio" name="B5" value="1"> <?php echo gettext("30分钟以下"); ?>	<br/>
			<input type="radio" name="B5" value="2"> <?php echo gettext("30分钟到1小时"); ?><br/>
			<input type="radio" name="B5" value="3"> <?php echo gettext("超过2小时"); ?><br/>
			<input type="radio" name="B5" value="4"> <?php echo gettext("从到该场所一直到离开"); ?><br/><br/>
		</li>
		<li name="6.if_has_wifi">
			<span style="color: #ff0000;"><?php echo gettext("在选择餐厅或娱乐场所的时候是否会考虑有没有wifi？"); ?></span><br/>
			<input type="radio" name="B6" value="1"> <?php echo gettext("是"); ?>	<br/>
			<input type="radio" name="B6" value="2"> <?php echo gettext("否"); ?><br/><br/>
		</li>
		<li name="7.time_extend">
			<span style="color: #ff0000;"><?php echo gettext("商家提供的wifi是否会延长您在该商家停留的时间？"); ?></span><br/>
			<input type="radio" name="B7" value="1"> <?php echo gettext("是"); ?>	<br/>
			<input type="radio" name="B7" value="2"> <?php echo gettext("否"); ?><br/>
		</li>
		</ol>	

		<h4><?php echo gettext("三、请帮助我们完善产品或服务的功能"); ?></h4>
		<ol start="1">
		<li name="1.abcd">
			<span style="color: #ff0000;"> <?php echo gettext("对不同形式wifi连接广告的接受程度："); ?></span><br/>
			<table border="1" >
			<tr >
				<th width="100px"> </th>
				<th width="100px"> <?php echo gettext("不能接受"); ?> </th>
				<th width="100px"> <?php echo gettext("勉强接受"); ?> </th>
				<th width="100px" align="center" > <?php echo gettext("接受"); ?> </th>
				<th width="100px"> <?php echo gettext("乐于接受"); ?> </th>
			</tr>
			<tr>
				<th> <?php echo gettext("登录认证和等待时的网页图片广告"); ?> </th>
				<td align="center"> <input type="radio" name="C1a" value="1"> </td>
				<td align="center"> <input type="radio" name="C1a" value="2"> </td>
				<td align="center"> <input type="radio" name="C1a" value="3"> </td>
				<td align="center"> <input type="radio" name="C1a" value="4"> </td>
			</tr>
			<tr>
				<th> <?php echo gettext("点击广告才能上网"); ?> </th>
				<td align="center"> <input type="radio" name="C1b" value="1"> </td>
				<td align="center"> <input type="radio" name="C1b" value="2"> </td>
				<td align="center"> <input type="radio" name="C1b" value="3"> </td>
				<td align="center"> <input type="radio" name="C1b" value="4"> </td>
			</tr>
			<tr>
				<th> <?php echo gettext("发布微博、朋友圈才能上网"); ?> </th>
				<td align="center"> <input type="radio" name="C1c" value="1"> </td>
				<td align="center"> <input type="radio" name="C1c" value="2"> </td>
				<td align="center"> <input type="radio" name="C1c" value="3"> </td>
				<td align="center"> <input type="radio" name="C1c" value="4"> </td>
			</tr>
			<tr>
				<th> <?php echo gettext("观看完视频广告才能上网"); ?> </th>
				<td align="center"> <input type="radio" name="C1d" value="1"> </td>
				<td align="center"> <input type="radio" name="C1d" value="2"> </td>
				<td align="center"> <input type="radio" name="C1d" value="3"> </td>
				<td align="center"> <input type="radio" name="C1d" value="4"> </td>
			</tr>
			</table><br/>
		</li>
		<li name="2.video_adv_time">
			<span style="color: #ff0000;"> <?php echo gettext("对于要观看完广告视频才能上网的广告，您比较容易接受多长的视频广告？"); ?></span><br/>
			<input type="radio" name="C2" value="1"> <?php echo gettext("10秒以内"); ?>	<br/>
			<input type="radio" name="C2" value="2"> <?php echo gettext("20秒以内"); ?><br/>
			<input type="radio" name="C2" value="3"> <?php echo gettext("30秒以内"); ?><br/>
			<input type="radio" name="C2" value="4"> <?php echo gettext("30秒以上"); ?><br/><br/>
		</li>
		</li>
		<li name="3.relogin_after_30mins">
			<span style="color: #ff0000;"> <?php echo gettext("对于30分钟后要重新登陆验证的wifi，您是否会重新登录？"); ?></span><br/>
			<input type="radio" name="C3" value="1"> <?php echo gettext("会"); ?>	<br/>
			<input type="radio" name="C3" value="2"> <?php echo gettext("不会"); ?><br/><br/>
		</li>
		<li name="4.click_interesting_info">
			<span style="color: #ff0000;"> <?php echo gettext("在wifi跳转页看到感兴趣的产品广告或者商家优惠信息是否会点击了解详情？"); ?></span><br/>
			<input type="radio" name="C4" value="1"> <?php echo gettext("会"); ?>	<br/>
			<input type="radio" name="C4" value="2"> <?php echo gettext("不会"); ?><br/><br/>
		</li>
		<li name="5.accept discount info">
			<span style="color: #ff0000;"> <?php echo gettext("能否接受通过手机号或邮箱地址连接wifi后商家给您发送优惠信息？"); ?></span><br/>
			<input type="radio" name="C5" value="1"> <?php echo gettext("能"); ?>	<br/>
			<input type="radio" name="C5" value="2"> <?php echo gettext("不能"); ?><br/>
		</li>
		</ol>

		<h4><?php echo gettext("四、请告诉我们您对该网络分享平台的一些期待和建议"); ?></h4>
		<textarea name="D1" rows="5" cols="60" maxlength="1000"></textarea>
		<br/><br/>

		<h4><?php echo gettext("五、请填写您的个人信息"); ?></h4>	
		<?php echo gettext("姓名:"); ?> <input type="text" name="name" maxlength="50"><br>
		<?php echo gettext("邮箱:"); ?> <input type="email" name="email" maxlength="50"><br>
		<?php echo gettext("电话:"); ?> <input type="tel" pattern="[0-9]{10}" name="tel" maxlength="20"><br>
		<?php echo gettext("地址:"); ?> <input type="text" name="address" maxlength="50"><br>
		<input type="hidden" name="type" value="1"> 
		<input type="submit"  value=<?php echo gettext("提交"); ?> style="background:red; color:#ff0;"
		onclick= "redirectPage()" />
	</form>

	<p><?php echo gettext("感谢您的参与！"); ?></p>
</body>
</html>


