<?php
$url = 'http://localhost/curl/response.php';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$resp = curl_exec($ch);
curl_close($ch);
$my_data=json_decode($resp);
echo '<pre>';
print_r($my_data);


foreach($my_data->data as $data){
    echo $data->firstname;
    echo $data->lastname;
    echo '<br>';
}


?>