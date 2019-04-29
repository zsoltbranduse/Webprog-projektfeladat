<?php
$windowtitle= array(
    'title' => 'Főoldal',
);

$header = array(
	'title' => 'Magyar Kaktuszgyűjtők Országos Egyesülete',
);



$footer = array(
    'org' => 'Magyar Kaktuszgyűjtők Országos Egyesülete'
);

$oldalak = array(
	'/' => array('fajl' => 'cimlap', 'szoveg' => 'Címlap', 'menun' => array(1,1)),
	'bemutatkozas' => array('fajl' => 'bemutatkozas', 'szoveg' => 'Bemutatkozás', 'menun' => array(1,1)),
	'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => 'Kapcsolat', 'menun' => array(1,1)),
	'cikkek' => array('fajl' => 'cikkek', 'szoveg' => 'Cikkek', 'menun' => array(1,1)),
	'kaktuszokrol' => array('fajl' => 'kaktuszokrol', 'szoveg' => 'Kaktuszokról', 'menun' => array(1,1)),
	'galeria' => array('fajl' => 'galeria', 'szoveg' => 'Galéria', 'menun' => array(1,1)),
	// 
	'belepes' => array('fajl' => 'belepes', 'szoveg' => 'Belépés', 'menun' => array(1,0)),
	'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
	// 
	'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
	'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);
$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>