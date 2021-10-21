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


define('COMMUNES', $communes_liste );
define('TYPE_HABITATION', $milieu_habitation);
define('TYPETOITURE', $typeToiture);

//var_dump(COMMUNES[1] == "Bubanza");

