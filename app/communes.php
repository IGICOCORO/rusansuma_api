<?php

// ID02
$communes_liste = [
		0 => "INCONNUE",
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

define('COMMUNES', $communes_liste );
define('TYPE_HABITATION', $milieu_habitation);

//var_dump(COMMUNES[1] == "Bubanza");