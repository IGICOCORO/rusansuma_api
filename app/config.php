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
	$sql = "SELECT SUM(ID08) as menages,ID02 as communes from hlsample GROUP BY communes";
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
	$sql = "SELECT SUM(ID08) as menages,ID02 as communes from hlsample GROUP BY communes";
}

function type_toiture(){
	$sql = 'SELECT count(*) as totalType ,H03 as type_toiture,  ID02 as commune from hlsample GROUP BY H03,  ID02';
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
	$sql = 'SELECT count(*) as totalMenage ,H04 as type_mur,  ID02 as commune from hlsample GROUP BY H04,  ID02';

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
	$sql = "SELECT count(*) as totalType ,H05 as materiauxPavament,  ID02 as commune from hlsample GROUP BY H05,  ID02";
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
 // QUESTION DE GUY MICHELLE

 // - nombre de deces par ZD,Province,commune,colline ....

function search_deces($zone, $value){
	$sql = 'select sum(HDEATH) AS nbre_deces from  hlsample WHERE '.$zone.'='.$value;
	return executeQuery($sql);
}
// PROVINCE 
function deces_province($value = 1){
	return search_deces('ID01',$value);
}
//  ID02	2	Commune
function deces_commune($value = 1){
	return search_deces('ID02',$value);
}
//  ID03	3	Colline
function deces_colline($value = 1){
	return search_deces('ID03',$value);
}
//  ID05	4	Zone de dénombrement
function deces_zone_denombrement($value = 1){
	return search_deces('ID05',$value);
}

// Les CHOMMEURS

function search_chomeurs($zone, $value){
	$sql = 'select count(*) nombre_total from  hlsample WHERE p23=3 AND '.$zone.'='.$value;
	return executeQuery($sql);
}
##ID01	1	Province
function chomeur_province($value=1){
	return search_chomeurs('ID01', $value);
}
##ID02	2	Commune
function chomeur_commune($value=1){
	return search_chomeurs('ID02', $value);
}
## ID03	3	Colline
function chomeur_colline($value=1){
	return search_chomeurs('ID03', $value);
}

## ID05	4	Zone de dénombrement
function chomeur_zonne_denombrement($value=1){
	return search_chomeurs('ID05', $value);
}

// NOMBRE DE NAISSANCE 

function search_naissance($zone, $value){
	$sql ='select sum(P28M) as total_garcon,sum(P28F) as total_fille ,sum(P28F + P28M) as total from hlsample WHERE '.$zone.'='.$value;
	return executeQuery($sql);
}

# ID01	1	Province
function naissance_province($value){
	return search_naissance('ID01', $value);
}
#ID02	2	Commune
function naissance_commune($value){
	return search_naissance('ID02', $value);
}
#ID03	3	Colline
function naissance_colline($value){
	return search_naissance('ID03', $value);
}
# ID05	4	Zone de dénombrement
function naissance_zonne_denombrement($value){
	return search_naissance('ID05', $value);
}

# - nbre d'handicap par type d'handicap 

function search_handicap($zone, $value){
	$sql = 'SELECT  P15CM as type_handicap ,count(*) as total,CASE 
			WHEN P15CM = 0 THEN "Sans handicap"
			WHEN P15CM = 1 THEN "Aveugle"
			WHEN P15CM = 2 THEN "Sourd"
			WHEN P15CM = 3 THEN "Muet"
			WHEN P15CM = 4 THEN "Sourd/muet"
			WHEN P15CM = 5 THEN "Infirme des membres inférieurs"
			WHEN P15CM = 6 THEN "Infirme des membres supérieurs"
			WHEN P15CM = 7 THEN "Déficience mentale"
			WHEN P15CM = 8 THEN "Autre handicap"
			END AS signification FROM hlsample WHERE '.$zone.'='.$value.' group by P15CM';
	return executeQuery($sql);
}

## ID01	1	Province
function handicap_province($value){
	return search_handicap('ID01', $value);
}
## ID02	2	Commune
function handicap_commune($value){
	return search_handicap('ID02', $value);
}
## ID03	3	Colline 
function handicap_colline($value){
	return search_handicap('ID03', $value);
}
## ID05	4	Zone de dénombrement  
function handicap_zonne_denombrement($value){
	return search_handicap('ID05', $value);
}

