<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title></title>
	<base href="{{ base_url()}}">
	<script type="text/javascript">
　　	setTimeout("window.location.href='index.php/questionnaire/index/{{ lang }}'",4500);   
	</script>
	<link rel="stylesheet" type="text/css" href="resource/css/thanks.css">
</head>
<body>
<header>
	<form method="post" action="index.php/questionnaire/thanks">
		<input type="image" name="language" value="en" src="resource/images/gb.png" alt="Submit" align="right" style="margin:5px;">
		<input type="image" name="language" value="fr" src="resource/images/fr.png" alt="Submit" align="right" style="margin:5px"> 
		<input type="image" name="language" value="zh" src="resource/images/cn.png" alt="Submit" align="right" style="margin:5px">
	</form>
	<br/><br/><br/>
</header>
	<div class="word">
		<h1 align="center"> {% block container %}谢谢你的参与!{% endblock %} </h1>
	</div>
	<div style="margin:0 auto;width:200px;">
		<!-- <a href="<?php echo site_url('questionnaire/index'); ?>" id="button" value="Home" >返回</a> -->
		<form style="color: #FFFFE0;" method="post" action="index.php/questionnaire/index">
			<input type="hidden" name="language" value="{{ lang }}" >
			<input type="submit" id="button" value="{% block back %}返回{% endblock %}">
	</div>
<footer>
	
</footer>
</body>
</html>