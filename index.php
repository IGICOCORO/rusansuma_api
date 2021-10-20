<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

require "app/config.php";

//cors();

define('DOCUMENT_ROOT', '/api/');

if ($_SERVER['REQUEST_URI'] == DOCUMENT_ROOT) {
	echo json_encode(
		[
			'menage_commune' => "MENAGE PAR COMMUNES",
			'type_habitation' => "TYPE D'HABITATION",
			//	'/communes' => "NOMBRE D'HABITATANT PAR COMMUNES",
			//	'/menages' => "NOMBRE TOTAL DES MENAGES",
			//	'/provinces' => "NOMBRE D'HABITATANT PAR PROVINCES",
			//	'/menage_province' => "NOMBRE DE MENAGE PAR PROVINCES",
			//	'/nombre_communes' => "NOMBRE DE POPULATION PAR COMMUNES",
			//	'/femmes' => "NOMBRE DES FEMMES",
			//	'/hommes' => "NOMBRE DES HOMMES",
			//	'/usage_appareil' => "USAGE DES APPAREILS",
			//	'/statut_occupation/{province_id}' => "STATUT D'OCCUPPATION DES PROVINCES ",

		], JSON_PRETTY_PRINT

	);
}

if (strpos($_SERVER['REQUEST_URI'], 'menage_commune')) {
	$data = total_number_of_menage_by_communes();
	echo json_encode($data, JSON_PRETTY_PRINT);
}

if (strpos($_SERVER['REQUEST_URI'], 'type_habitation')) {
	$data = type_habitation_par_commune();
	echo json_encode($data, JSON_PRETTY_PRINT);
}