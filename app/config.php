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


// SOMME MENAGES RECENSEES
function somme_menage_recenses() {
	$sql = "SELECT SUM(ID08) AS somme_menages_recenses FROM hlsample";

	$data = executeQuery($sql);

	
	return $data;
}

// Somme de la population des menages ordinaires recenses
function somme_population_menages_ordinaires_recenses() {
	$sql = "SELECT SUM(`P02`) as population_des_menages_collectes FROM hlsample";

	$data = executeQuery($sql);
	
	return $data;
}

//NOMBRE TOTAL DES HOMMES
function nombre_total_des_hommes() {
	$sql = "SELECT SUM(`P02`) as Homme from hlsample WHERE P02 IN (1)";

	$data = executeQuery($sql);	
	return $data;
}
//NOMBRE TOTAL DES FEMMES
function nombre_total_des_femmes() {
	$sql = "SELECT SUM(`P02`) as femme from hlsample WHERE P02 IN (2)";

	$data = executeQuery($sql);	
	return $data;
}
// NOMBRE DE MASCULIN RESIDENT_PRESENT
function masculin_residents_present(){
	$sql = "SELECT count(P02) as masculin , P03 as `typeResidence` from hlsample WHERE P02 = 1 AND P03 = 1;";
	$data = executeQuery($sql);
	return $data;

}
// NOMBRE DE MASCULIN RESIDENT_ABSENT
function masculin_residents_absent(){
	$sql = "SELECT count(P02) as masculin , P03 as `typeResidence` from hlsample WHERE P02 = 1 AND P03 = 2;";
	$data = executeQuery($sql);
	return $data;

}
// NOMBRE DE FEMININ RESIDENT_PRESENT
function feminin_residents_present(){
	$sql = "SELECT count(P02) as feminin , P03 as `typeResidence` from hlsample WHERE P02 = 2 AND P03 = 1;";
	$data = executeQuery($sql);
	return $data;

}
// NOMBRE DE FEMININ RESIDENT_ABSENT
function feminin_residents_absent(){
	$sql = "SELECT count(P02) as feminin , P03 as `typeResidence` from hlsample WHERE P02 = 2 AND P03 = 2;";
	$data = executeQuery($sql);
	return $data;

}
// NOMBRE DE FEMININ VISITEUR
function feminin_visiteur(){
	$sql = "SELECT count(P02) as feminin , P03 as `typeResidence` from hlsample WHERE P02 = 2 AND P03 = 3;";
	$data = executeQuery($sql);
	return $data;

}
// NOMBRE DE FEMININ VISITEUR
function masculin_visiteur(){
	$sql = "SELECT count(P02) as masculin , P03 as `typeResidence` from hlsample WHERE P02 = 1 AND P03 = 3;";
	$data = executeQuery($sql);
	return $data;

}


// NOMBRE TOTAL DE MENAGE PAR COMMUNE

function total_number_of_menage_by_communes(){
	$sql = "SELECT SUM(ID08) as menages,ID02 as communes from hlsample GROUP BY communes";
	$result = executeQuery($sql);
	$total_menage = executeQuery("SELECT SUM(ID08) as total_menage from hlsample");
	$data = [];
	foreach($result as $key => $r)
	{
		$r['communeName'] = COMMUNES[$r['communes']];
		$data[$r['communes']] = $r;
	}
	return [$total_menage , $data];

}


// TYPE D'HABITATION PAR COMMUNE
function type_habitation_par_commune() {
	$sql = "SELECT SUM(ID08) as menages,ID02 as communes from hlsample GROUP BY communes";
	
	return executeQuery($sql);
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
	$sql = 'select sum(HDEATH) AS nbre_deces from  hlsample';
	if($value > 0){
		$sql .= ' WHERE '.$zone.'='.$value;
	}
	
	return executeQuery($sql);
}
// PROVINCE 
function deces_province($value = 0){
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
	$condition = "";
	if($value > 0){
			$condition .= ' WHERE '.$zone.'='.$value;
	}
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
			END AS signification FROM hlsample '.$condition.' group by P15CM' ;
	$sql2 = 'SELECT count(*) as total_handicap FROM hlsample WHERE P15CM <> 0';
	if($value > 0)
		$sql2 .= ' AND '.$zone.'='.$value;
		
	return [ executeQuery($sql2), executeQuery($sql)];
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


function pyramideAge(){
	//$sql = "select HP06  as age,P02 as sexe from hlsample order by HP06";
	$sql = "select HP06 as age ,P02 as sexe,count(*) as total from hlsample group by age, sexe";
	$info = executeQuery($sql);
	$tableau = [];
	$born_inferieur = 0;
	$born_superieur = 4;

	foreach($info as $key => $v){
		if($v["age"] < $born_superieur){
			$tableau[$born_inferieur ."-".$born_superieur][] = $v;
		}else if($v["age"] > $born_superieur){
			$born_inferieur +=5;
			$born_superieur += 5;
			$tableau[$born_inferieur ."-".$born_superieur][] = $v;
		}else{
			$tableau["UNKNOWN"][] = $v;
		}
	}

	$tab = [];
	foreach ($tableau as $key => $tranch) {
		$total_homme = 0;
		$total_femme = 0;
		foreach ($tranch as $value) {

			if($value["sexe"] == 1){
				$total_homme += $value['total'];
			}
			if($value["sexe"] == 2){
				$total_femme += $value['total'];
			}
		}
		$tab[] = [
			'AGE' => $key,
			'HOMME' => $total_homme,
			'FEMME' => $total_femme,
			'ENSEMBLE' => ($total_homme + $total_femme)
		];
	}

	return $tab;
}

function population_age($debut =0 , $fin=140, $sexe = -1){
	$sql = "select count(*) as `$debut - $fin - SEXE $sexe` from hlsample WHERE HP06 BETWEEN $debut AND $fin";
	if($sexe  > -1){
		$sql.= " AND P02=$sexe";
	}
	return executeQuery($sql );
}

function naissance_vivante($debut=0, $fin=140){
	$sql = "select sum(P28F) as `TOTAL FEMME VIVANTE AGE $debut - $fin` from hlsample WHERE HP06 BETWEEN $debut AND $fin ";

	return executeQuery($sql );
}