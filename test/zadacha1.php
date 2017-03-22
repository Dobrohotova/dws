<?php 

// 1. Da se napravi programa so koristenje na switch, kade vlezen parametar ke bide ostatokot pri delenje so 3.
// - vo sekoj case da se ispecati soodvetnata poraka kolku e ostatokot i kako izlgeda operacijata vo format (7 % 3 = 2 i ostatok 1)


$broj = 8;
$ostatok = $broj % 3;

switch ($ostatok) {
	case 2:
		echo "Ostatokot e 2";
		echo '</br>';
		echo "8 % 3 = 2 i ostatok 2";
	break;
	case 1:
		echo "Ostatokot e 1";
		echo '</br>';
		echo "10 % 3 = 3 i ostatok 1";
	break;
	case 0:
		echo "Ostatokot e 0";
		echo '</br>';
		echo "9 % 3 = 3 i ostatok 0";
	break;
}









?>