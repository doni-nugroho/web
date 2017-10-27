<?php

 if (!isset($_SESSION)) {
        session_start();
    }
	
	
//GET PROVINCE////////////////////////////////////////////////////////////////////////////////
function get_province(){
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: 6a9589b574e020b90d72190d410437ff"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
 $data = json_decode($response, true);
 for($i=0; $i < count($data['rajaongkir']['results']); $i++){
	if (isset($_SESSION['province'])) {
		if($data['rajaongkir']['results'][$i]['province_id'] == $_SESSION['province']){
			echo "<option value='".$data['rajaongkir']['results'][$i]['province_id']."' selected>".$data['rajaongkir']['results'][$i]['province']."</option>";
		}else{
			echo "<option value='".$data['rajaongkir']['results'][$i]['province_id']."'>".$data['rajaongkir']['results'][$i]['province']."</option>";
		}
    }else{
		echo "<option value='".$data['rajaongkir']['results'][$i]['province_id']."'>".$data['rajaongkir']['results'][$i]['province']."</option>";
	}
 }
}

}



//GET CITY////////////////////////////////////////////////////////////////////////////////////
function get_city($province){

	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://api.rajaongkir.com/starter/city?province=$province",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "GET",
	  CURLOPT_HTTPHEADER => array(
		"key: 6a9589b574e020b90d72190d410437ff"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
		echo "<option value='0'>(please select a city)</option>";
		$data = json_decode($response, true);
		for($j=0; $j < count($data['rajaongkir']['results']); $j++){
			if (isset($_SESSION['city'])) {
				if($data['rajaongkir']['results'][$j]['city_id'] == $_SESSION['city']){
					echo "<option value='".$data['rajaongkir']['results'][$j]['city_id']."' selected>".$data['rajaongkir']['results'][$j]['city_name']."</option>";
				}else{
					echo "<option value='".$data['rajaongkir']['results'][$j]['city_id']."'>".$data['rajaongkir']['results'][$j]['city_name']."</option>";
				}
			}else{
			echo "<option value='".$data['rajaongkir']['results'][$j]['city_id']."'>".$data['rajaongkir']['results'][$j]['city_name']."</option>";
			}
		}
	}
}

function session_get_city(){
		if(isset($_SESSION['province'])){
			echo get_city($_SESSION['province']);
		}else{
			echo "<option value='0'>(please select a city)</option>";
		}
}

if (isset($_POST['province'])) {
    echo get_city($_POST['province']);
}
	
	
	
//GET COST////////////////////////////////////////////////////////////////////////////////////////
function get_cost($destination){

	//JNE/////////////////////////
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=256&destination=$destination&weight=1000&courier=jne",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
    "key: 6a9589b574e020b90d72190d410437ff"
  ),
));



$response1 = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $data = json_decode($response1, true);

//print_r ($data);  
for($j=0; $j < count($data['rajaongkir']['results'][0]['costs']); $j++){
echo 	"<option value='".$data['rajaongkir']['results'][0]['costs'][$j]['service']."'>JNE "
		.$data['rajaongkir']['results'][0]['costs'][$j]['service']." - Rp "
		.number_format($data['rajaongkir']['results'][0]['costs'][$j]['cost'][0]['value'])." (Est. "
		.$data['rajaongkir']['results'][0]['costs'][$j]['cost'][0]['etd']." hari)</option>";
}
	
}

	//POS/////////////////////////////
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=256&destination=$destination&weight=1000&courier=pos",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
    "key: 6a9589b574e020b90d72190d410437ff"
  ),
));



$response2 = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $data = json_decode($response2, true);

//print_r ($data);  
for($j=0; $j < count($data['rajaongkir']['results'][0]['costs']); $j++){
echo 	"<option value='".$data['rajaongkir']['results'][0]['costs'][$j]['service']."'>POS "
		.$data['rajaongkir']['results'][0]['costs'][$j]['service']." - Rp "
		.number_format($data['rajaongkir']['results'][0]['costs'][$j]['cost'][0]['value'])." (Est. "
		.$data['rajaongkir']['results'][0]['costs'][$j]['cost'][0]['etd'].")</option>";
}
	
}

	//TIKI/////////////////////////////
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/cost",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "origin=256&destination=$destination&weight=1000&courier=tiki",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/x-www-form-urlencoded",
    "key: 6a9589b574e020b90d72190d410437ff"
  ),
));



$response2 = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  $data = json_decode($response2, true);

//print_r ($data);  
for($j=0; $j < count($data['rajaongkir']['results'][0]['costs']); $j++){
echo 	"<option value='".$data['rajaongkir']['results'][0]['costs'][$j]['service']."'>TIKI "
		.$data['rajaongkir']['results'][0]['costs'][$j]['service']." - Rp "
		.number_format($data['rajaongkir']['results'][0]['costs'][$j]['cost'][0]['value'])." (Est. "
		.$data['rajaongkir']['results'][0]['costs'][$j]['cost'][0]['etd']." hari)</option>";
}
	
}

}

function session_get_cost(){
		if(isset($_SESSION['city'])){
			echo get_cost($_SESSION['city']);
		}else{
			echo "<option value='0'>(please select a courier)</option>";
		}
}

if (isset($_POST['city'])) {
        echo get_cost($_POST['city']);
    }
	
?>