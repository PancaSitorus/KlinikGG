<?php
	include 'params.php';
	
	$totalPembayaran = $_POST['totalPembayaran'];

	$params['amount'] = $totalPembayaran;
	$params['code'] = uniqid("Klinik_GG--");
	$json_encode = json_encode($params);
	
	$url = 'https://sigurita.com/sikilat/account/payment?data='.$json_encode;

	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	
	header("location:$url");
?>