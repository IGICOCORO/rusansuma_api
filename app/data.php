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


define('COMMUNES', $communes_liste );
define('TYPE_HABITATION', $milieu_habitation);
define('TYPETOITURE', $typeToiture);
define('TYPE_DE_MATERIAUX', $type_de_materiaux);

//var_dump(COMMUNES[1] == "Bubanza");

