<?php

$apiKey = 'API-KEY-NASA';

$url = "https://api.nasa.gov/planetary/apod?api_key=" . $apiKey;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
curl_close($ch);

var_dump($result);

?>
