<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");
require "app/config.php";

define('DOCUMENT_ROOT', '/');

if ($_SERVER['REQUEST_URI'] == DOCUMENT_ROOT) {
	echo json_encode(
		[
			'menage_commune' => "MENAGE PAR COMMUNES",
			'type_habitation' => "TYPE D'HABITATION",
			'materiau_murs_exterieurs' => "Materiaux murs exterieurs",
			'materiaux_pavement' => "Materiaux de pavement",
			"type_toiture" => 'TYPE DE TOITURE '
		], JSON_PRETTY_PRINT);
}

if (strpos($_SERVER['REQUEST_URI'], 'menage_commune')) {
	$data = total_number_of_menage_by_communes();
	echo json_encode($data, JSON_PRETTY_PRINT);
}

if (strpos($_SERVER['REQUEST_URI'], 'type_habitation')) {
	$data = type_habitation_par_commune();
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'type_toiture')) {
	$data = type_toiture();
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'materiau_murs_exterieurs')) {
	$data = materiau_murs_exterieurs();
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'materiaux_pavement')) {
	$data = materiaux_pavement();
	echo json_encode($data, JSON_PRETTY_PRINT);
}