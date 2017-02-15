<?php 
	
$broj = 4;
// echo $broj;
// echo $broj++;
echo ++$broj;

echo '<hr/>';

$parnost = ($broj % 2 == 0) ? 'Paren' : 'Neparen';
echo $parnost;

if($broj % 2 == 0){
	echo 'Paren';
} else {
	echo 'Neparen';
}



// Primer za kratenje - dvete se isti :)

// $brojj += 5;
// $brojj = $broj + 5;




$niza = array(10, 9, 8 , 7);
var_dump($niza);
$brojNaElementi = count($niza);
echo "<br/>";
// $suma = 0;
// $q = 0;

// while($q < count($niza)){
// 	// echo $suma += $niza[$q].'<br/>';
// 	$suma = $suma + $niza[$q].'<br/>';
// 	$q++;
// }

// echo $suma;




// for(inicijalizacija; uslov; inkrement)

for($suma = 0, $i = 0; $i < $brojNaElementi; $i++){
	$suma = $suma + $niza[$i].'<br/>';
}

echo $suma;
echo '<br/>Prosek: '.$suma / $brojNaElementi;

echo "<br/>";



// ne smee da ima isto ime bidejkji toa ni e asocijacijata (kako indeksot vo indeksiranite nizi)

$uchenici = array(
	  'Dobrohotova' => 'Irina', 
	  'Stojkovski' => 'Stefan', 
	  'Blazhevski' => 'Stefan',
	  'Postolovski' => 'Martin',
	  'Danev' => 'Martin',
);

// print_r($uchenici);



// i nataka raboti samo so $ime, bidejkji toa mu se naznachuva - mu se dava samo asocijacijata


$brojach = 1;
foreach ($uchenici as $ime) {
	echo $brojach++.'. '.$ime."<br/>";
}


$brojach = 1;
foreach ($uchenici as $prezime => $ime) {
	echo $brojach++.'. '.$ime.' '.$prezime."<br/>";
}



?>