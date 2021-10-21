<?php
require "app/db.php";
require "app/communes.php";
// NOMBRE DE MENAGE PAR COMMUNE

function executeQuery($sql = "") {
	$db = getConnection();
	$result = $db->query($sql);
	if ($result) {
		return $result->fetchAll();
	} else {
		return ["error" => "PAS DE RESULT"];
	}
}
// NOMBRE TOTAL DE MENAGE PAR COMMUNE

function total_number_of_menage_by_communes(){
		$sql = "SELECT SUM(ID08) as menages,ID02 as communes from feuil GROUP BY communes";
		$result = executeQuery($sql);

		$data = [];
		foreach($result as $r)
		{
			$r["commune_name"] = COMMUNES[$r['communes']];

			$data[] = $r;
		}
		return $data;

}
// TOUS LES COMMUNES
function tous_les_communes() {
	$sql = "SELECT ID02 as commune from feuil GROUP BY commune ORDER BY commune ASC ";
	$result = executeQuery($sql);
	$data = [];
	foreach($result as $r)
	{
		$r['commune_name'] = COMMUNES[$r['commune'] ?? 0];
		$data[] = $r;
	}
	return $data;
}



// SOMME MENAGES RECENSEES
function somme_menage_recenses() {
	$sql = "SELECT COUNT(ID08) AS somme_menages_recensés FROM hlsample";

	$data = executeQuery($sql);

	
	return $data;
}

// Somme de la population des menages ordinaires recenses
function somme_population_menages_ordinaires_recenses() {
	$sql = "SELECT count(`P03`) as Total_residents  from hlsample WHERE P03 IN (1,2)";

	$data = executeQuery($sql);

	
	return $data;
}

// TAILLE MOYENNE DES MENAGES 
function taille_moyenne_menages() {
	$sql = "SELECT  COUNT(`P03`) / COUNT(`ID08`) as Taille_moyenne_menages  from hlsample";

	$data = executeQuery($sql);	
	return $data;
}

// MENAGES AVEC ZEROS DECES
function menages_avec_zeros_deces() {
	$sql = "SELECT COUNT(`ID08`) as Menages_avec_zeros_deces from feuil WHERE HDEATH = 0";

	$data = executeQuery($sql);	
	return $data;
}
//NOMBRE DE PERSONNE AVEC SITUATION DE RESIDENCE NON DECLAREE
function personne_avec_residence_non_declaree() {
	$sql = "SELECT COUNT(P03) as nombre_personne_avec_resi_non_declare FROM `hlsample` WHERE P03 IS NULL OR P03";

	$data = executeQuery($sql);	
	return $data;
}






/*## DEBUG

function debug($v = null) {

echo "<pre>";
var_dump($v);
echo "</pre>";

}*/

/**
 *  An example CORS-compliant method.  It will allow any GET, POST, or OPTIONS requests from any
 *  origin.
 *
 *  In a production environment, you probably want to be more restrictive, but this gives you
 *  the general idea of what is involved.  For the nitty-gritty low-down, read:
 *
 *  - https://developer.mozilla.org/en/HTTP_access_control
 *  - https://fetch.spec.whatwg.org/#http-cors-protocol
 *
 */
/*function cors() {

	// Allow from any origin
	if (isset($_SERVER['HTTP_ORIGIN'])) {
		// Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
		// you want to allow, and if so:
		header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
		header('Access-Control-Allow-Credentials: true');
		header('Access-Control-Max-Age: 86400'); // cache for 1 day
	}

	// Access-Control headers are received during OPTIONS requests
	if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

		if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
		// may also be using PUT, PATCH, HEAD etc
		{
			header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
		}

		if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS'])) {
			header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");
		}

		exit(0);
	}

	//echo "You have CORS!";
}*/