<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

require "app/config.php";
$value = intval(end(explode('/',$_SERVER['REQUEST_URI'])));

define('DOCUMENT_ROOT', '/');

if ($_SERVER['REQUEST_URI'] == DOCUMENT_ROOT) {
	echo json_encode(
		[
			'/menage_commune' => "MENAGE PAR COMMUNES",
			'/type_habitation' => "TYPE D'HABITATION",
			'/materiau_murs_exterieurs' => "Materiaux murs exterieurs",
			'/materiaux_pavement' => "Materiaux de pavement",
			"/type_toiture" => 'TYPE DE TOITURE ',
			'/deces_province' => 'NOMBRE DE DECES PAR PROVINCE',
			'/deces_commune' => 'NOMBRE DE DECES PAR COMMUNE',
			'/deces_colline' => 'NOMBRE DE DECES PAR COLLINE',
			'/deces_zone_denombrement' => 'NOMBRE DE DECES PAR ZONNE DE DENOMBREMENT',

			'/chomeur_province/id' => 'CHOMMEUR PAR PROVINCE',
			'/chomeur_commune/id' => 'CHOMMEUR PAR COMMUNE',
			'/chomeur_colline/id' => 'CHOMMEUR PAR COLLINE',
			'/chomeur_zonne_denombrement/id' => 'CHOMMEUR PAR ZONE DE DENOMBREMENT',

			'/naissance_province/id' => 'NAISSANCE PAR PROVINCE',
			'/naissance_commune/id' => 'NAISSANCE PAR COMMUNE',
			'/naissance_colline/id' => 'NAISSANCE PAR COLLINE',
			'/naissance_zonne_denombrement/id' => 'NAISSANCE PAR ZONE DE DENOMBREMENT',


			'/handicap_province/id' => 'HANDICAPE PAR PROVINCE',
			'/handicap_commune/id' => 'HANDICAPE PAR COMMUNE',
			'/handicap_colline/id' => 'HANDICAPE PAR COLLINE',
			'/handicap_zonne_denombrement/id' => 'HANDICAPE PAR ZD',
			'/piramide' => 'PYRAMIDE',
			
		], JSON_PRETTY_PRINT);
}

// HANDICAP PAR PROVINCE

if (strpos($_SERVER['REQUEST_URI'], 'handicap_province')) {
	$data = handicap_province($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'handicap_commune')) {
	$data = handicap_commune($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'handicap_colline')) {
	$data = handicap_colline($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'handicap_zonne_denombrement')) {
	$data = handicap_zonne_denombrement($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'piramide')) {
	$data = pyramideAge();
	echo json_encode($data, JSON_PRETTY_PRINT);
}

//END HADICAP

if (strpos($_SERVER['REQUEST_URI'], 'menage_commune')) {
	$data = total_number_of_menage_by_communes();
	echo json_encode($data, JSON_PRETTY_PRINT);
}

if (strpos($_SERVER['REQUEST_URI'], 'deces_province')) {
	$data = deces_province($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'deces_commune')) {
	$data = deces_commune($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'deces_colline')) {
	$data = deces_colline($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'deces_zone_denombrement')) {
	$data = deces_zone_denombrement($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
// CHOMMEUR
if (strpos($_SERVER['REQUEST_URI'], 'chomeur_province')) {
	$data = chomeur_province($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'chomeur_commune')) {
	$data = chomeur_commune($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'chomeur_colline')) {
	$data = chomeur_colline($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'chomeur_zonne_denombrement')) {
	$data = chomeur_zonne_denombrement($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}

// NAISSANCE 

if (strpos($_SERVER['REQUEST_URI'], 'naissance_province')) {
	$data = naissance_province($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'naissance_commune')) {
	$data = naissance_commune($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'naissance_colline')) {
	$data = naissance_colline($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}

if (strpos($_SERVER['REQUEST_URI'], 'naissance_zonne_denombrement')) {
	$data = naissance_zonne_denombrement($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}


//FIN NAISSANCE 


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