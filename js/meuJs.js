$(document).ready(function(){
	$(".curri").click(function(){
		$.post('http://thiagois.esy.es/php/contaCv.php',{},function(e){
			$(".quantas_baixadas").html(e);
		});
	});
});