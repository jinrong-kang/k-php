$(document).ready(function(){
	$("td").click(function(){
		$(this).children().attr("checked", true);
	});
});