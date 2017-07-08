<html>

<head>
	<script type="text/javascript" src="verify.js">	</script>

	<style type="text/css">  
    body {  
        font-size:20px;   
    }  
	</style>  
</head>

  <body>
    <form action="business.php" method="post">
      Name    : <input type="text" name="name" onBlur="validate_name(this.value)">  <span id="nameText">  </span> <br>
      PassWord: <input type="password" name="passwd"> <br>
      Age     : <input type="number" min=0 name="age"> <br>
      Email   : <input type="email" name="email" onBlur="validate_email(this.value)"> <span id="emailText">  </span> <br>
      <input type="submit" value="注册"> 
   	</form>
  </body>

</html>
