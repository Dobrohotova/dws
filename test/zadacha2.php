<?php 


$niza = [3, 5, 6, 8, 4];


if (count($niza) % 2 == 0) {
	$broj1 = count($niza) / 2;
	$broj2 = count($niza) / 2 - 1;
	echo $niza[$broj1] * $niza[$broj2];
} else {
	$broj = (count($niza) - 1) / 2;
	echo pow($niza[$broj], 2);
}





?>