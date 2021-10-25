<?php
require "app/db.php";
require "app/data.php";

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

function total_number_of_menage_by_communes(){
	$sql = "SELECT SUM(ID08) as menages,ID02 as communes from feuil GROUP BY communes";
	$result = executeQuery($sql);
	$data = [];
	foreach($result as $r)
	{
		$r['communeName'] = COMMUNES[$r['communes']];
		$data[] = $r;
	}
	return $data;

}


// TYPE D'HABITATION PAR COMMUNE
function type_habitation_par_commune() {
	$sql = "SELECT SUM(ID08) as menages,ID02 as communes from feuil GROUP BY communes";
}

function type_toiture(){
	$sql = 'SELECT count(*) as totalType ,H03 as type_toiture,  ID02 as commune from feuil GROUP BY H03,  ID02';
	$result = executeQuery($sql);
	$data = [];
	foreach($result as $r)
	{
		$r['type_toiture_name'] = TYPETOITURE[$r['type_toiture']];
		$r['communeName'] = COMMUNES[$r['commune']];
		$data[] = $r;
	}
	return $data;
}

function materiau_murs_exterieurs(){
	$sql = 'SELECT count(*) as totalMenage ,H04 as type_mur,  ID02 as commune from feuil GROUP BY H04,  ID02';

	$result = executeQuery($sql);
	$data = [];
	foreach($result as $r)
	{
		$r['mur_exterieur'] = TYPE_DE_MATERIAUX[$r['type_mur']];
		$r['communeName'] = COMMUNES[$r['commune']];
		$data[] = $r;
	}
	return $data;
}

function materiaux_pavement(){
	$sql = "SELECT count(*) as totalType ,H05 as materiauxPavament,  ID02 as commune from feuil GROUP BY H05,  ID02";
	$result = executeQuery($sql);
	$data = [];
	foreach($result as $r)
	{
		$r['mur_exterieur'] = MATERIAUX_PAVAMENT[$r['materiauxPavament']];
		$r['communeName'] = COMMUNES[$r['commune']];
		$data[] = $r;
	}
	return $data;

}
