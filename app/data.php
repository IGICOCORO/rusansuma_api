<?php

// ID02 BUBANZA 
$communes_liste = [	 
	1 => "Bubanza",
	2 => "Gihanga",
	3 => "Mpanda",
	4 => "Musigati",
	5 => "Rugazi",
		     
];

// QS 03
$milieu_habitation = [
	1 => "Urbain",
	2 => "Rural",
];

$typeToiture = [
	1 => 'Tôle ',
	2 => 'Tuile locale',
	3 => 'Tuile /Ardoise industrielles',
	4 => 'Béton',
	5 => 'Cartons / sheeting',
	6 => 'Paille ',
	7 => 'Autres ',
];

 $type_de_materiaux = [
 	1 => 'Bois/pisé non cimenté',
	2 => 'Bois/pisé/cimenté',
	3 => 'Briques adobes',
	4 => 'Briques cuites',
	5 => 'Blocs ciment / Béton',
	6 => 'Pierres',
	7 => 'Planches ',
	8 => 'Plastique / sheeting/Cartons ',
	9 => 'Autres ',
 ];

$materiauxPavament = [
	1 => 'Terre ',
	2 => 'Ciment',
	3 => 'Pierres',
	4 => 'Carreaux',
	5 => 'Briques cuites',
	6 => 'Autre ',
];

$modeApprovisionement = 
[
	1 =>'Eau de robinet intérieur',
	2 =>'Eau de robinet extérieur',
	3 =>'Robinet public ',
	4 =>'Source aménagée',
	5 =>'Source non aménagée',
	6 =>'Rivière/Lac',
	7 =>'Autres',
];

$typeEclairage = [
	1 => 'Electricité',
	2 => 'Lampe à pétrol',
	3 => 'Feu de boi',
	4 => 'Lampion / Mazou',
	5 => 'Bougi',
	6 => 'Autres',
];


define('COMMUNES', $communes_liste );
define('TYPE_HABITATION', $milieu_habitation);
define('TYPETOITURE', $typeToiture);
define('TYPE_DE_MATERIAUX', $type_de_materiaux);
define('MATERIAUX_PAVAMENT', $materiauxPavament);
define('TYPEECLAIRAGE', $typeEclairage);

//var_dump(COMMUNES[1] == "Bubanza");

