<?php
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
	 echo "<option value='".$data['rajaongkir']['results'][$i]['province_id']."'>".$data['rajaongkir']['results'][$i]['province']."</option>";
 }
}

}



//GET CITY////////////////////////////////////////////////////////////////////////////////////
function get_city($province){

if ($_POST['province']==0) {
        echo "<option value='0' selected='selected'>(please select a city)</option>";                            ;
    }else{
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
	echo "<option value='0' selected='selected'>(please select a city)</option>";
 $data = json_decode($response, true);
 for($j=0; $j < count($data['rajaongkir']['results']); $j++){
	echo "<option value='".$data['rajaongkir']['results'][$j]['city_id']."'>".$data['rajaongkir']['results'][$j]['city_name']."</option>";
 }
}
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
echo ($data['rajaongkir']['results'][0]['costs'][$j]['service']);
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
echo ($data['rajaongkir']['results'][0]['costs'][$j]['service']);
}
	
}

}

if (isset($_POST['city'])) {
        echo get_cost($_POST['city']);
    }
	
?>