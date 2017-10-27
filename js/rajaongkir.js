$(document).ready(function(){
	
	$("#province").change(function(){
		
		var a = $('#province').val();
		
		$.ajax({
		type: 'POST',
		url: "koneksi/alamat.php",
		//data: "province="+a,
		data: "province="+a,
		});
		
		if(a < 1){
			$("#city").html( "<option value='0' selected='selected'>(please select a city)</option>" );
		}else{
			
		$.ajax({
		type: 'POST',
		url: "modul/rajaongkir.php",
		data: "province="+a,
		success: function(city) {
		$("#city").html(city);   }
		});
		
		}
	});
	
		
	$("#city").change(function(){
				
		var b = $('#city').val();
		
		$.ajax({
		type: 'POST',
		url: "koneksi/alamat.php",
		data: "city="+b,
		});
		
		if(b < 1){
			$("#cost").html( "<option value='0' selected='selected'>(please select a courier)</option>" );
		}else{
		
		$.ajax({
		type: 'POST',
		url: "modul/rajaongkir.php",
		data: "city="+b,
		success: function(cost) {
		$("#cost").html(cost);   }
		});
		
		}
	});
	
});