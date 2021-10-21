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
		return ["error" => "PAS DE RESULTAT"];
	}
}
// NOMBRE TOTAL DE MENAGE PAR COMMUNE
function total_number_of_menage_by_communes() {
	$sql = "SELECT SUM(ID08) as menages,ID02 as communes from feuil GROUP BY communes";
}

// TYPE D'HABITATION PAR COMMUNE
function type_habitation_par_commune() {
	$sql = "SELECT SUM(ID08) as menages,ID02 as communes from feuil GROUP BY communes";
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
function cors() {

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
}