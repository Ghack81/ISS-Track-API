<?php
// Coordonnées de Paris
$lat1 = 48.856614;
$lon1 = 2.3522219;

// Coordonnées de l'ISS
$iss_data = json_decode(file_get_contents('https://api.open-notify.org/iss-now.json'), true);
$iss_lat = $iss_data['iss_position']['latitude'];
$iss_lon = $iss_data['iss_position']['longitude'];

// Création de la carte
$image = imagecreatefrompng("carte.png");

// Couleurs
$rouge = imagecolorallocate($image, 255, 0, 0);
$bleu = imagecolorallocate($image, 0, 0, 255);

// Positionnement des marqueurs
$ville1_nom = "Paris";
$ville1_icone = imagecreatefrompng("ville.png");
$ville2_nom = "ISS";
$ville2_icone = imagecreatefrompng("iss.png");

$x1 = $lon1;
$y1 = $lat1;
$x2 = $iss_lon;
$y2 = $iss_lat;

$px1 = round(10 + 450 * ($x1 + 180) / 360);
$py1 = round(10 + 225 * (90 - $y1) / 180);
$px2 = round(10 + 450 * ($x2 + 180) / 360);
$py2 = round(10 + 225 * (90 - $y2) / 180);

imagecopy($image, $ville1_icone, $px1 - 16, $py1 - 16, 0, 0, 32, 32);
imagestring($image, 5, $px1 + 10, $py1 - 10, $ville1_nom, $rouge);

imagecopy($image, $ville2_icone, $px2 - 16, $py2 - 16, 0, 0, 32, 32);

header('Content-Type: image/png');
imagepng($image);
imagedestroy($image);
?>
