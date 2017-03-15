<?php 



$ime = 'blabla.txt';
$fh = fopen($ime, 'a+');

fwrite($fh, 'I sega shto?');

rewind($fh);
$read = fread($fh, filesize($ime));
// echo filesize($ime);
echo $read;
echo str_word_count($read);

echo file_get_contents('http://www.google.com');



?>