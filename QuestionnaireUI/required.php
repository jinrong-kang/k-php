
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script type="text/javascript">

		// $(document).ready(function() {
  //       $('body').on('change', '#textareaId', function(){
  //         console.log("test");
  //         if ($(this).val() != '') {
  //           $(":selectId").attr('required', true);
  //         }
  //       });
  //       $(":radio").attr('required', true);
  //       $('#textareaId').change();
  //   });
	</script>
  <script>
$(document).ready(function(){
  $("#submit").mouseenter(function(){
    alert('您的鼠标移到了 id="p1" 的元素上!');
  });
});
</script>
</head>
<body>
<form>
	   <textarea id="textareaId"></textarea>

    <select id="selectId">
      <option value=""></option>
      <option value="opt1">opt1</option>
    </select>

      <input id="radio" type="radio" name="C7" value="1" > <?php echo gettext("愿意"); ?> <br/>
      <input type="radio" name="C7" value="2"> <?php echo gettext("不愿意"); ?><br/>
      <input type="radio" name="C7" value="3"> <?php echo gettext("无所谓"); ?><br/>

<input id="submit" type="submit" name="dsf">
</form>
</body>
</html>