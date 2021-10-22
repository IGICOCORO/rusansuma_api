<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

require "app/config.php";

//cors();

define('DOCUMENT_ROOT', '/api/');

if ($_SERVER['REQUEST_URI'] == DOCUMENT_ROOT) {
	echo json_encode(
		[	'population_total_commune' => "NOMBRE TOTAL DE LA POPULATION PAR COMMUNE",
			'menage_commune' => "MENAGE PAR COMMUNES",
			'communes' => "TOUS LES COMMUNES",
			'Somme_population_menages_ordinaires_recenses' => "SOMMES DE LA POPULATION DES MENAGES ORDINAIRES RECENSES",
			'somme_des_menages_recenses' => "SOMMES DES MENAGES RECENSES",
			'taille_moyenne_menages' => "TAILLE MOYENNES DES MENAGES",
			'menages_avec_zeros_deces' => "NOMBRE DE MENAGES AVEC ZEROS DECES",
			'personne_avec_residence_non_declaree' => "NOMBRE DE PERSONNES AVEC SITUATION DE RESIDENCE NON DECLAREE",
			'nombre_total_des_hommes' => "NOMBRE TOTAL DES HOMMES",
			'nombre_total_des_femmes' => "NOMBRE TOTAL DES FEMMES",
			'residents_presents_masculins' => "NOMBRE DE MASCULIN RESIDENT_PRESENT",
			//	'/statut_occupation/{province_id}' => "STATUT D'OCCUPPATION DES PROVINCES ",

		], JSON_PRETTY_PRINT

	);
}
if (strpos($_SERVER['REQUEST_URI'], 'population_total_commune')) {
	$data = population_total_commune();
	echo json_encode($data, JSON_PRETTY_PRINT);
}

if (strpos($_SERVER['REQUEST_URI'], 'menage_commune')) {
	$data = nombre_total_menages_par_communes();
	echo json_encode($data, JSON_PRETTY_PRINT);
}


if (strpos($_SERVER['REQUEST_URI'], 'communes')) {
	$data = tous_les_communes();
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'somme_des_menages_recenses')) {
	$data = somme_menage_recenses();
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'taille_moyenne_menages')) {
	$data = taille_moyenne_menages();
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'Somme_population_menages_ordinaires_recenses')) {
	$data = somme_population_menages_ordinaires_recenses();
	echo json_encode($data, JSON_PRETTY_PRINT);
}

if (strpos($_SERVER['REQUEST_URI'], 'menages_avec_zeros_deces')) {
	$data = menages_avec_zeros_deces();
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'menages_avec_zeros_deces')) {
	$data = menages_avec_zeros_deces();
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'personne_avec_residence_non_declaree')) {
	$data = personne_avec_residence_non_declaree();
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'nombre_total_des_hommes')) {
	$data = nombre_total_des_hommes();
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'nombre_total_des_femmes')) {
	$data = nombre_total_des_femmes();
	echo json_encode($data, JSON_PRETTY_PRINT);
}

if (strpos($_SERVER['REQUEST_URI'], 'residents_presents_masculins')) {
	$data = masculin_residents_present();
	echo json_encode($data, JSON_PRETTY_PRINT);
}