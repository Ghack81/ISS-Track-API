<?php
$city = "Paris";
$url = "http://api.open-notify.org/iss-pass.json?lat=" . urlencode($city_latitude[$city]) . "&lon=" . urlencode($city_longitude[$city]);

$response = file_get_contents($url);
$data = json_decode($response, true);

if ($data['message'] == "success") {
    $passes = $data['response'];
    foreach ($passes as $pass) {
        $timestamp = $pass['risetime'];
        $date = date('Y-m-d H:i:s', $timestamp);
        echo "La Station Spatiale Internationale passera au-dessus de $city à $date <br>";
    }
} else {
    echo "Erreur lors de la récupération des données ISS";
}
?>
