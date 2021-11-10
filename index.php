<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

require "app/config.php";
$a = explode('/',$_SERVER['REQUEST_URI']);
$b = end($a);

$value = intval($b);

define('DOCUMENT_ROOT', '/');

if ($_SERVER['REQUEST_URI'] == DOCUMENT_ROOT) {
	echo json_encode(
		[	
			'/nombre_total_des_hommes' => "NOMBRE TOTAL DES HOMMES",
			'/nombre_total_des_femmes' => "NOMBRE TOTAL DES FEMMES",
			'/residents_presents_masculins' => "NOMBRE DE MASCULIN RESIDENT_PRESENT",
			'/residents_presents_feminin' => "NOMBRE DE FEMININ RESIDENT_PRESENT",
			'/femmes_residents_absents' => "NOMBRE DE FEMININ RESIDENT_ABSENT",
			'/masculins_residents_absents' => "NOMBRE DE MASCULIN RESIDENT_ABSENT",
			'/visiteur_masculin' => "NOMBRE DE MASCULIN VISITEUR",
			'/visiteur_feminin' => "NOMBRE DE FEMININ VISITEUR",
			'/Somme_population_menages_ordinaires_recenses' => "SOMMES DE LA POPULATION DES MENAGES ORDINAIRES RECENSES",
			'/somme_des_menages_recenses' => "SOMMES DES MENAGES RECENSES",

			//separator
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
			//POPULATION PAR LA TRANCHE D'AGE 
			'population_age' => 'POPULATION AGEE DE _DEBUT ET _FIN',
			// NOMBRE DE FEMME DE 10 ET PLUS P02			
			'femmes_dix_plus' => 'FEMME DE 10 et PLUS AGEE DE _DEBUT ET _FIN',
			// NOMBRE DE FEMME DE 10 ET PLUS P02
		], JSON_PRETTY_PRINT);
}

if (strpos($_SERVER['REQUEST_URI'], 'nombre_total_des_hommes')) {
	$data = nombre_total_des_hommes($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'nombre_total_des_femmes')) {
	$data = nombre_total_des_femmes($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'residents_presents_masculin')) {
	$data = masculin_residents_present($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'residents_presents_feminin')) {
	$data = feminin_residents_present($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'femmes_residents_absents')) {
	$data = feminin_residents_absent($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'masculins_residents_absents')) {
	$data = masculin_residents_absent($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'visiteur_masculin')) {
	$data = masculin_visiteur($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'visiteur_feminin')) {
	$data = feminin_visiteur($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}
if (strpos($_SERVER['REQUEST_URI'], 'Somme_population_menages_ordinaires_recenses')) {
	$data = somme_population_menages_ordinaires_recenses($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}

if (strpos($_SERVER['REQUEST_URI'], 'somme_des_menages_recenses')) {
	$data = somme_menage_recenses($value);
	echo json_encode($data, JSON_PRETTY_PRINT);
}



// separator

// HANDICAP PAR PROVINCE

if (strpos($_SERVER['REQUEST_URI'], 'population_age')) {
	$data_3 = population_age(0,3);
	$data_6 = population_age(0,6);
	$data_12 = population_age(0,12);
	$data_5 = population_age(5);
	$femmes_10_plus = population_age(10,140, 2);
	$nombre_chomeur = chomeur_province(1);
	//P28F	37	Naissances vivantes : Féminin
	$femmes_vivate_10_plus = naissance_vivante(10);
	$femmes_vivate_15_49 = naissance_vivante(15, 49);

	$data = array_merge($data_3,$data_6 ,	$data_12 ,$data_5 ,$femmes_10_plus,
	 $nombre_chomeur, $femmes_vivate_10_plus,$femmes_vivate_15_49);
	echo json_encode($data, JSON_PRETTY_PRINT);
}

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