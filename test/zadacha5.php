<?php 


$niza = [
	'ime' => 'Irina', 
	'prezime' => 'Dobrohotova', 
	'godini' => 24,
	'grad' => 'Skopje',
];


$filename = 'zadacha5.txt';
$filehandle = fopen($filename, 'a+');

foreach ($niza as $key => $value) {
	fwrite($filehandle, $key.': '.$value.'</br>');
}

	// $ime = $niza['ime'];
	// $prezime = $niza['prezime'];
	// $godini = $niza['godini'];
	// $grad = $niza['grad'];


// fwrite($filehandle, $ime.' '.$prezime.' '.$godini.' '.$grad.'; ');

rewind($filehandle);
$read = fread($filehandle, filesize($filename));
echo $read;
fclose($filehandle);   


?>


