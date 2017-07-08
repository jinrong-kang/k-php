<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Questionnaire for client</title>
	<base href="{{base_url()}}">
	<script type="text/javascript" src="resource/js/form.js">
	</script>
	<link rel="stylesheet" type="text/css" href="resource/css/form_client.css">
</head>

<body>
	<header>
		<!-- <embed src="resource/musics/doudizhu.mp3" autostart="true" loop=infinite hidden="true" > -->

		<form method="post" action="index.php/questionnaire/clientForm">
			<input type="image" name="language" value="en" src="resource/images/gb.png" alt="Submit" align="right" style="margin:5px;">
			<input type="image" name="language" value="fr" src="resource/images/fr.png" alt="Submit" align="right" style="margin:5px"> 
			<input type="image" name="language" value="zh" src="resource/images/cn.png" alt="Submit" align="right" style="margin:5px">
		</form>
		<br/><br/><br/><br/>
	</header>
	<div class="body_size">
		<h1 align="center"> {% block Title %}AIWIFI 调查问卷{% endblock %} </h1>

		<form action="index.php/questionnaire/valid_clientForm" method="post">
		<h2>{% block A %}一、请帮助我们甄别您的所属群体{% endblock %}</h2>
		<div class="a">
			<span >&nbsp;{% block A1 %}1.您的年龄：{% endblock %}</span><br/>
			&nbsp;<input type="radio" id="A11" name="A1" value="1" required>
			<label for="A11"> {% block A11 %}15岁以下{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="A12" name="A1" value="2">
			<label for="A12"> {% block A12 %}15到25岁{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="A13" name="A1" value="3">
			<label for="A13"> {% block A13 %}26到35岁{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="A14" name="A1" value="4">
			<label for="A14"> {% block A14 %}36到45岁{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="A15" name="A1" value="5">
			<label for="A15"> {% block A15 %}46到55岁{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="A16" name="A1" value="6">
			<label for="A16"> {% block A16 %}55岁以上{% endblock %}</label><br/>
		</div><br/>
		<div class="a">	
			<span >&nbsp;{% block A2 %}2.您的性别：{% endblock %}</span><br/>
			&nbsp;<input type="radio" id="A21" name="A2" value="1" required>
			<label for="A21"> {% block A21 %}男{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="A22" name="A2" value="2">
			<label for="A22"> {% block A22 %}女{% endblock %}</label><br/>
		</div><br/>
		<div class="a">
			<span >&nbsp;{% block A3 %}3.您所从事的行业是：{% endblock %}</span><br/>
			{% block A3all %}
			<div style="display: inline-block;">
			&nbsp;<input type="radio" id="A31" name="A3" value="1" required>
			<label for="A31"> {% block A31 %}医药卫生{% endblock %}</label>&nbsp;<br/>
			&nbsp;<input type="radio" id="A32" name="A3" value="2">
			<label for="A32"> {% block A32 %}导游导购{% endblock %}</label>&nbsp;<br/>
			&nbsp;<input type="radio" id="A33" name="A3" value="3">
			<label for="A33"> {% block A33 %}理发美容{% endblock %}</label></div>
			<div style="display: inline-block;">
			&nbsp;<input type="radio" id="A34" name="A3" value="4">
			<label for="A34"> {% block A34 %}商场商铺{% endblock %}</label>&nbsp;<br/>
			&nbsp;<input type="radio" id="A35" name="A3" value="5">
			<label for="A35"> {% block A35 %}政府办公{% endblock %}</label>&nbsp;<br/>
			&nbsp;<input type="radio" id="A36" name="A3" value="6">
			<label for="A36"> {% block A36 %}学生{% endblock %}</label></div>
			<div style="display: inline-block;">
			&nbsp;<input type="radio" id="A37" name="A3" value="7">
			<label for="A37"> {% block A37 %}酒楼饭馆{% endblock %}</label>&nbsp;<br/>
			&nbsp;<input type="radio" id="A38" name="A3" value="8">
			<label for="A38"> {% block A38 %}酒店会展{% endblock %}</label>&nbsp;<br/>
			&nbsp;<input type="radio" id="A39" name="A3" value="9">
			<label for="A39"> {% block A39 %}其它{% endblock %}</label></div>
			<!-- Vertical arrangement -->
			{% endblock %}
		</div><br/>

		<h2>{% block B %}二、请告诉我们您对公共网络的看法{% endblock %}</h2>
		<div class="a">
			<span >&nbsp;{% block B1 %}1.您有向顾客提供wifi服务的习惯吗？{% endblock %}</span><br/>
			&nbsp;<input type="radio" id="B11" name="B1" value="1" required>
			<label for="B11"> {% block B11 %}有{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="B12" name="B1" value="2">
			<label for="B12"> {% block B12 %}没有{% endblock %}</label><br/>
		</div><br/>
		<div class="a">
			<span >&nbsp;{% block B2 %}2.如果有，您更倾向于哪种使用方式？{% endblock %}</span><br/>
			&nbsp;<input type="radio" id="B2a1" name="B2a" value="1" onchange="isDisplay()" required>
			<label for="B2a1">{% block B21 %}向顾客公开您的wifi密码{% endblock %}</label>	<br/>
			&nbsp;<input type="radio" id="B2a2" name="B2a" value="2" onchange="isDisplay()">
			<label for="B2a2">{% block B22 %}使用登录平台进行网络连接{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="B2a3" name="B2a" value="3" onchange="isDisplay()">
			<label for="B2a3">{% block B23 %}其它（请说明）：{% endblock %}</label>
			<input id="display" type="text" name="B2b" maxlength="100" style="font-size:25px;margin-left:50px;display:none;border-radius: 10px;width: 80%;height: 30px">
		</div><br/>
		<div class="a">
			<span >&nbsp;{% block B3 %}3.在给顾客提供网络的同时，您是否会担心自己的信息安全性？{% endblock %}</span><br/>
			&nbsp;<input type="radio" id="B31" name="B3" value="1" required>
			<label for="B31"> {% block B31 %}完全不担心{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="B32" name="B3" value="2">
			<label for="B32"> {% block B32 %}不太担心{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="B33" name="B3" value="3">
			<label for="B33"> {% block B33 %}担心{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="B34" name="B3" value="4">
			<label for="B34"> {% block B34 %}有些担心{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="B35" name="B3" value="5">
			<label for="B35"> {% block B35 %}非常担心{% endblock %}</label><br/>
		</div><br/>
		<div class="a">
			<span >&nbsp;{% block B4 %}4.您在提供公共wifi时信息是否遭遇过侵害？{% endblock %}</span><br/>
			&nbsp;<input type="radio" id="B41" name="B4" value="1" required>
			<label for="B41"> {% block B41 %}是{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="B42" name="B4" value="2">
			<label for="B42"> {% block B42 %}否{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="B43" name="B4" value="3">
			<label for="B43"> {% block B43 %}不知道{% endblock %}</label><br/>
		</div><br/>


		<h2>{% block C %}三、请帮助我们完善产品或服务的功能{% endblock %}</h2>
		<div class="a">
			<span >&nbsp;{% block C1 %}1.您希望通过登录平台来控制连接网络的人群吗？{% endblock %}</span><br/>
			&nbsp;<input type="radio" id="C11" name="C1" value="1" required>
			<label for="C11"> {% block C11 %}希望{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C12" name="C1" value="2">
			<label for="C12"> {% block C12 %}不希望{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C13" name="C1" value="3">
			<label for="C13"> {% block C13 %}无所谓{% endblock %}</label><br/>
		</div><br/>
		<div class="a">
			<span >&nbsp;{% block C2 %}2.您希望制定自己的增值服务吗？{% endblock %}</span><br/>
			&nbsp;<input type="radio" id="C21" name="C2" value="1" required>
			<label for="C21"> {% block C21 %}希望{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C22" name="C2" value="2">
			<label for="C22"> {% block C22 %}不希望{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C23" name="C2" value="3">
			<label for="C23"> {% block C23 %}无所谓{% endblock %}</label><br/>
		</div><br/>
		<div class="a">
			<span >&nbsp;{% block C3 %}3.您希望在该平台上发布自己的广告吗？{% endblock %}</span><br/>
			&nbsp;<input type="radio" id="C31" name="C3" value="1" required>
			<label for="C31"> {% block C31 %}希望{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C32" name="C3" value="2">
			<label for="C32"> {% block C32 %}不希望{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C33" name="C3" value="3">
			<label for="C33"> {% block C33 %}无所谓{% endblock %}</label><br/>
		</div><br/>
		<div class="a">
			<span >&nbsp;{% block C4 %}4.您希望给使用过您家共享网络的客户发送广告推送吗？{% endblock %}</span><br/>
			&nbsp;<input type="radio" id="C41" name="C4" value="1" required>
			<label for="C41"> {% block C41 %}希望{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C42" name="C4" value="2">
			<label for="C42"> {% block C42 %}不希望{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C43" name="C4" value="3">
			<label for="C43"> {% block C43 %}无所谓{% endblock %}</label><br/>
		</div><br/>
		<div class="a">
			<span >&nbsp;{% block C5 %}5.您愿意同其它使用该平台的商户结成合作关系吗？{% endblock %}</span><br/>
			&nbsp;<input type="radio" id="C51" name="C5" value="1" required>
			<label for="C51"> {% block C51 %}愿意{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C52" name="C5" value="2">
			<label for="C52"> {% block C52 %}不愿意{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C53" name="C5" value="3">
			<label for="C53"> {% block C53 %}无所谓{% endblock %}</label><br/>
		</div><br/>
		<div class="a">
			<span >&nbsp;{% block C6 %}6.您愿意对合作商户开放广告权限吗？{% endblock %}</span><br/>
			&nbsp;<input type="radio" id="C61" name="C6" value="1" required>
			<label for="C61"> {% block C61 %}愿意{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C62" name="C6" value="2">
			<label for="C62"> {% block C62 %}不愿意{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C63" name="C6" value="3">
			<label for="C63"> {% block C63 %}无所谓{% endblock %}</label><br/>
		</div><br/>
		<div class="a">
			<span >&nbsp;{% block C7 %}7.您愿意通过平台推送来给顾客提供折扣服务吗？{% endblock %}</span><br/>
			&nbsp;<input type="radio" id="C71" name="C7" value="1" required>
			<label for="C71"> {% block C71 %}愿意{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C72" name="C7" value="2">
			<label for="C72"> {% block C72 %}不愿意{% endblock %}</label><br/>
			&nbsp;<input type="radio" id="C73" name="C7" value="3">
			<label for="C73"> {% block C73 %}无所谓{% endblock %}</label><br/>
		</div><br/>

		<h2>{% block D %}四、请告诉我们您对该网络分享平台的一些期待和建议(选填){% endblock %}</h2>
		<textarea name="D1" rows="4" cols="60" maxlength="1000" style="font-size: 25px;"></textarea>

		<h2>{% block E %}五、请填写您的个人信息(选填){% endblock %}</h2>	
		<div class="a">
			&nbsp;{% block E1 %}姓名:{% endblock %} <input type="text" name="name" maxlength="50" style="font-size:25px;width: 100%;height: 30px;border-radius: 10px"><br>
			&nbsp;{% block E2 %}邮箱:{% endblock %} <input type="email" name="email" maxlength="50" style="font-size:25px;width: 100%;height: 30px;border-radius: 10px"><br>
			&nbsp;{% block E3 %}电话:{% endblock %} <input type="tel" pattern="[0-9]{10}" name="tel" maxlength="20" style="font-size:25px;width: 100%;height: 30px;border-radius: 10px"><br>
			&nbsp;{% block E4 %}地址:{% endblock %} <input type="text" name="address" maxlength="50" style="font-size:25px;width: 100%;height: 30px;border-radius: 10px"><br>
		</div><br/>
		<br/><br/><br/>
		<input type="hidden" name="language" value="{{ lang }}" >
		<input id="submit" type="submit" value="{% block F %}提交{% endblock %}">
	</form>
</div>
<footer>
	<br/><br/><br/><br/><br/>
</footer>
</body>
</html>


