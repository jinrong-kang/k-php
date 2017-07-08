<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		// function redirectPage()
		// {
		// 	location.href="success.php";
		// }
		// function add(){
	 //    document.getElementById(form).submit();
	 //   	return false;
  //       }
 $("#submit").click(function() {

    var url = "libs/business.php"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#form").serialize(), // serializes the form's elements.
           success: function(data)
           {
               alert(data); // show response from the php script.
           }
         });

    return false; // avoid to execute the actual submit of the form.
	});
}
	</script>
</head>
<body>
<form method="post" id="form" >
	<span style="color: #ff0000;"><?php echo gettext("您的性别："); ?></span><br/>
	<input type="radio" name="A2" value="1" required> <?php echo gettext("男"); ?>
	<input type="radio" name="A2" value="2"> <?php echo gettext("女"); ?><br/><br/>
	<input id="submit" type="submit" value=<?php echo gettext("提交"); ?> style="background:red; color:#ff0;" />
</form>
<!-- <iframe id="id_iframe" name="id_iframe" style="display:block;"></iframe>   -->
</body>
</html>
