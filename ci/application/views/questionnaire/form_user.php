<html>
<head>
	<title>Questionnaire for user</title>
	<base href="{{ base_url() }}">
	<script src="resource/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="resource/js/form.js">
	</script>
	<script type="text/javascript" src="resource/js/table.js">
	</script>
	<link rel="stylesheet" type="text/css" href="resource/css/form_user.css">
</head>
<body>
<header>
	<!-- <embed src="resource/musics/relaxing.mp3" autostart="true" loop=infinite hidden="true" > -->
	<form method="post" action="index.php/questionnaire/userForm">
		<input type="image" name="language" value="en" src="resource/images/gb.png" alt="Submit" align="right" style="margin:5px;">
		<input type="image" name="language" value="fr" src="resource/images/fr.png" alt="Submit" align="right" style="margin:5px"> 
		<input type="image" name="language" value="zh" src="resource/images/cn.png" alt="Submit" align="right" style="margin:5px">
	</form>
	<br/><br/><br/><br/>
</header>
<div class="body_size">
	<h1 align="center" > {% block Title %}AIWIFI 调查问卷{% endblock %}</h1>

	<form action="index.php/questionnaire/valid_userForm" method="post">
	<h2>{% block A %}一、请帮助我们甄别您的所属群体{% endblock %}</h2>
	<div class="a">
		<span>{% block A1 %}1.您的年龄：{% endblock %}</span><br/>
		<input type="radio" id="A11" name="A1" value="1" required>
		<label for="A11">{% block A11 %}15岁以下{% endblock %}</label><br/>
		<input type="radio" id="A12" name="A1" value="2" />
		<label for="A12">{% block A12 %}15到25岁{% endblock %}</label><br/>
		<input type="radio" id="A13" name="A1" value="3" />
		<label for="A13">{% block A13 %}26到35岁{% endblock %}</label><br/>
		<input type="radio" id="A14" name="A1" value="s4" />
		<label for="A14">{% block A14 %}36到45岁{% endblock %}</label><br/>
		<input type="radio" id="A15" name="A1" value="5" />
		<label for="A15">{% block A15 %}46到55岁{% endblock %}</label><br/>
		<input type="radio" id="A16" name="A1" value="6" />
		<label for="A16">{% block A16 %}55岁以上{% endblock %}</label><br/>
	</div><br/>
	<div class="a">
		<span>{% block A2 %}2.您的性别：{% endblock %}</span><br/>
		<input type="radio" id="A21" name="A2" value="1" required> <label for="A21">{% block A21 %}男{% endblock %}</label><br/>
		<input type="radio" id="A22" name="A2" value="2"> <label for="A22">{% block A22 %}女{% endblock %}</label><br/>
	</div><br/>
	<div class="a">
		<span> {% block A3 %}3.您的身份是：{% endblock %}</span><br/>
		<input type="radio" id="A31" name="A3" value="1" required> <label for="A31">{% block A31 %}在职员工{% endblock %}</label>	<br/>
		<input type="radio" id="A32" name="A3" value="2"> <label for="A32">{% block A32 %}学生{% endblock %}</label><br/>
		<input type="radio" id="A33" name="A3" value="3"> <label for="A33">{% block A33 %}其它{% endblock %}</label><br/>
	</div><br/>

	<h2>{% block B %}二、请告诉我们您对公共网络的看法{% endblock %}</h2>
	<div class="a">
		<span>{% block B1 %}1.您是否有使用公共网络的需求？{% endblock %}</span><br/>
		<input type="radio" id="B11" name="B1" value="1" required> <label for="B11">{% block B11 %}有{% endblock %}</label><br/>
		<input type="radio" id="B12" name="B1" value="2"> <label for="B12">{% block B12 %}没有{% endblock %}</label><br/>
	</div><br/>
	<div class="a">
		<span>{% block B2 %}2.如果有，您更倾向于哪种使用方式？{% endblock %}</span><br/>
		<input type="radio" id="B2a1" name="B2a" value="1" required onchange="isDisplay()" > <label for="B2a1">{% block B21 %}向店家询问他的wifi密码{% endblock %}</label>	<br/>
		<input type="radio" id="B2a2" name="B2a" value="2" onchange="isDisplay()" > <label for="B2a2">{% block B22 %}使用登录平台直接进行网络连接{% endblock %}</label><br/>
		<input type="radio" id="B2a3" name="B2a" value="3" onchange="isDisplay()" > <label for="B2a3">{% block B23 %}其它（请说明）：{% endblock %}</label>
		<input id="display" type="text" id="" name="B2b" maxlength="100" style="font-size:25px;margin-left:50px;display:none;border-radius: 10px;width: 80%;height: 30px">
	</div><br/>
	<div class="a">
		<span> {% block B3 %}3.在使用公共网络的同时，您是否会担心自己的信息安全性？{% endblock %}</span><br/>
		<input type="radio" id="B31" name="B3" value="1" required> <label for="B31">{% block B31 %}完全不担心{% endblock %}</label><br/>
		<input type="radio" id="B32" name="B3" value="2"> <label for="B32">{% block B32 %}不太担心{% endblock %}</label><br/>
		<input type="radio" id="B33" name="B3" value="3"> <label for="B33">{% block B33 %}担心{% endblock %}</label><br/>
		<input type="radio" id="B34" name="B3" value="4"> <label for="B34">{% block B34 %}有些担心{% endblock %}</label><br/>
		<input type="radio" id="B35" name="B3" value="5"> <label for="B35">{% block B35 %}非常心{% endblock %}</label><br/>
	</div><br/>
	<div class="a">
		<span>{% block B4 %}4.您在使用公共wifi时信息是否遭遇过侵害？{% endblock %}</span><br/>
		<input type="radio" id="B41" name="B4" value="1" required> <label for="B41">{% block B41 %}是{% endblock %}</label>	<br/>
		<input type="radio" id="B42" name="B4" value="2"> <label for="B42">{% block B42 %}否{% endblock %}</label><br/>
		<input type="radio" id="B43" name="B4" value="3"> <label for="B43">{% block B43 %}不知道{% endblock %}</label><br/>
	</div><br/>
	<div class="a">
		<span> {% block B5 %}5.平均每次使用公共网络的时长{% endblock %}</span><br/>
		<input type="radio" id="B51" name="B5" value="1" required> <label for="B51">{% block B51 %}30分钟以下{% endblock %}</label>	<br/>
		<input type="radio" id="B52" name="B5" value="2"> <label for="B52">{% block B52 %}30分钟到1小时{% endblock %}</label><br/>
		<input type="radio" id="B53" name="B5" value="3"> <label for="B53">{% block B53 %}超过2小时{% endblock %}</label><br/>
		<input type="radio" id="B54" name="B5" value="4"> <label for="B54">{% block B54 %}从到该场所一直到离开{% endblock %}</label><br/>
	</div><br/>
	<div class="a">
		<span>{% block B6 %}6.在选择餐厅或娱乐场所的时候是否会考虑有没有wifi？{% endblock %}</span><br/>
		<input type="radio" id="B61" name="B6" value="1" required> <label for="B61">{% block B61 %}是{% endblock %}</label><br/>
		<input type="radio" id="B62" name="B6" value="2"> <label for="B62">{% block B62 %}否{% endblock %}</label><br/>
	</div><br/>
	<div class="a">
		<span>{% block B7 %}7.商家提供的wifi是否会延长您在该商家停留的时间？{% endblock %}</span><br/>
		<input type="radio" id="B71" name="B7" value="1" required> <label for="B71">{% block B71 %}是{% endblock %}</label>	<br/>
		<input type="radio" id="B72" name="B7" value="2"> <label for="B72">{% block B72 %}否{% endblock %}</label><br/>
	</div><br/>

	<h2>{% block C %}三、请帮助我们完善产品或服务的功能{% endblock %}</h2>
	<div class="a">
		<span> {% block C1 %}1.对不同形式wifi连接广告的接受程度：{% endblock %}</span><br/>
		<table border="3" >
			<tr >
				<th width="100px"> </th>
				<th width="100px"> {% block C1a %}不能接受{% endblock %} </th>
				<th width="100px"> {% block C1b %}勉强接受{% endblock %} </th>
				<th width="100px" align="center" > {% block C1c %}接受{% endblock %} </th>
				<th width="100px"> {% block C1d %}乐于接受{% endblock %} </th>
			</tr>
			<tr>
				<th> {% block C11 %}登录认证和等待时的网页图片广告{% endblock %} </th>
				<td align="center"> <input type="radio" name="C1a" value="1" required> </td>
				<td align="center"> <input type="radio" name="C1a" value="2"> </td>
				<td align="center"> <input type="radio" name="C1a" value="3"> </td>
				<td align="center"> <input type="radio" name="C1a" value="4"> </td>
			</tr>
			<tr>
				<th> {% block C12 %}点击广告才能上网{% endblock %} </th>
				<td align="center"> <input type="radio" name="C1b" value="1" required> </td>
				<td align="center"> <input type="radio" name="C1b" value="2"> </td>
				<td align="center"> <input type="radio" name="C1b" value="3"> </td>
				<td align="center"> <input type="radio" name="C1b" value="4"> </td>
			</tr>
			<tr>
				<th> {% block C13 %}发布微博、朋友圈才能上网{% endblock %} </th>
				<td align="center"> <input type="radio" name="C1c" value="1" required> </td>
				<td align="center"> <input type="radio" name="C1c" value="2"> </td>
				<td align="center"> <input type="radio" name="C1c" value="3"> </td>
				<td align="center"> <input type="radio" name="C1c" value="4"> </td>
			</tr>
			<tr>
				<th> {% block C14 %}观看完视频广告才能上网{% endblock %} </th>
				<td align="center"> <input type="radio" name="C1d" value="1" required> </td>
				<td align="center"> <input type="radio" name="C1d" value="2"> </td>
				<td align="center"> <input type="radio" name="C1d" value="3"> </td>
				<td align="center"> <input type="radio" name="C1d" value="4"> </td>
			</tr>
		</table>

	</div><br/>
	<div class="a">
		<span> {% block C2 %}2.对于要观看完广告视频才能上网的广告，您比较容易接受多长的视频广告？{% endblock %}</span><br/>
		<input type="radio" id="C21" name="C2" value="1" required> <label for="C21">{% block C21 %}10秒以内{% endblock %}</label><br/>
		<input type="radio" id="C22" name="C2" value="2"> <label for="C22">{% block C22 %}20秒以内{% endblock %}</label><br/>
		<input type="radio" id="C23" name="C2" value="3"> <label for="C23">{% block C23 %}30秒以内{% endblock %}</label><br/>
		<input type="radio" id="C24" name="C2" value="4"> <label for="C24">{% block C24 %}30秒以上{% endblock %}</label><br/>
	</div><br/>
	<div class="a">
		<span> {% block C3 %}3.对于30分钟后要重新登陆验证的wifi，您是否会重新登录？{% endblock %}</span><br/>
		<input type="radio" id="C31" name="C3" value="1" required> <label for="C31">{% block C31 %}会{% endblock %}</label><br/>
		<input type="radio" id="C32" name="C3" value="2"> <label for="C32">{% block C32 %}不会{% endblock %}</label><br/>
	</div><br/>
	<div class="a">
		<span> {% block C4 %}4.在wifi跳转页看到感兴趣的产品广告或者商家优惠信息是否会点击了解详情？{% endblock %}</span><br/>
		<input type="radio" id="C41" name="C4" value="1" required> <label for="C41">{% block C41 %}会{% endblock %}</label>	<br/>
		<input type="radio" id="C42" name="C4" value="2"> <label for="C42">{% block C42 %}不会{% endblock %}</label><br/>
	</div><br/>
	<div class="a">
		<span> {% block C5 %}5.能否接受通过手机号或邮箱地址连接wifi后商家给您发送优惠信息？{% endblock %}</span><br/>
		<input type="radio" id="C51" name="C5" value="1" required> <label for="C51">{% block C51 %}能{% endblock %}</label><br/>
		<input type="radio" id="C52" name="C5" value="2"> <label for="C52">{% block C52 %}不能{% endblock %}</label><br/>
	</div><br/>

	<h2>{% block D %}四、请告诉我们您对该网络分享平台的一些期待和建议{% endblock %}</h2>
	<textarea name="D1" rows="5" cols="60" maxlength="1000"></textarea>
	<br/><br/>

	<h2>{% block E %}五、请填写您的个人信息{% endblock %}</h2>
	<div class="a">
	{% block E1 %}姓名:{% endblock %} <input type="text" name="name" maxlength="50" style="font-size:25px;width: 100%;height: 30px;border-radius: 10px"><br>
	{% block E2 %}邮箱:{% endblock %} <input type="email" name="email" maxlength="50" style="font-size:25px;width: 100%;height: 30px;border-radius: 10px"><br>
	{% block E3 %}电话:{% endblock %} <input type="tel" pattern="[0-9]{10}" name="tel" maxlength="20" style="font-size:25px;width: 100%;height: 30px;border-radius: 10px"><br>
	{% block E4 %}地址:{% endblock %} <input type="text" name="address" maxlength="50" style="font-size:25px;width: 100%;height: 30px;border-radius: 10px"><br>
	</div><br/>
	<br/><br/><br/>
	<div style="margin:0px auto;width:200px;">
		<input type="hidden" name="language" value="{{ lang }}" >
		<input id="submit" type="submit" value={% block sub %}提交{% endblock %}>
	</div>
	</form>
</div>
<footer>
	<br/><br/><br/><br/><br/>
</footer>
</body>
</html>


