<?php 




// ako stavime vaka vo vlezniot parametar, toa kje ni bide default ako ne stavime parametar koga ja povikuvame funkcijata
function funkcija($in1, $in2 = 'Dobrohotova'){
	echo $in1.$in2;
}

$string1 = 'Irina';
$string2 = 'I';

funkcija($string1, $string2);
echo '<br/>';
funkcija($string1);
// funkcija('Zdravo');







?>