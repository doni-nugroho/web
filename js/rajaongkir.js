$(document).ready(function(){
	
	$("#province").click(function(){
		var a = $('#province').val();
		$.ajax({
		type: 'POST',
		url: "modul/rajaongkir.php",
		data: "province="+a,
		success: function(city) {
		$("#city").html(city);   }
		});
		});
	
	
});