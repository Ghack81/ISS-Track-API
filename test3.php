<?php

// Récupérer les données de l'API
$json = file_get_contents('http://api.open-notify.org/iss-now.json');
$data = json_decode($json, true);

// Extraire les coordonnées
$latitude = $data['iss_position']['latitude'];
$longitude = $data['iss_position']['longitude'];

// Créer une image de 500x500 pixels
$image = imagecreatetruecolor(500, 500);

// Définir les couleurs
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

// Dessiner un fond blanc
imagefilledrectangle($image, 0, 0, 499, 499, $white);

// Calculer les coordonnées du point sur l'image
$x = round((180 + $longitude) * (500 / 360));
$y = round((90 - $latitude) * (500 / 180));

// Dessiner un cercle rouge pour le point
imagefilledellipse($image, $x, $y, 10, 10, $red);

// Dessiner une croix noire pour l'origine
imageline($image, 0, 250, 499, 250, $black);
imageline($image, 250, 0, 250, 499, $black);

// Afficher l'image
header('Content-Type: image/png');
imagepng($image);

// Libérer la mémoire
imagedestroy($image);

?>
