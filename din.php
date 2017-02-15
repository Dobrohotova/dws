<?php

$a = 20;
$b = 10;
$c = 7;

// if ($a > $b && $a > $c) {
// 	echo $a;
// } else if ($b > $a && $b > $c) {
// 	echo $b;
// } else {
// 	echo $c;
// }


if ($a > $b) {
	if ($a > $c){
		echo $a;
	} else {
		echo $c;
	}
} else {
	if ($b > $c){
		echo $b;
	} else {
		echo $c;
	}
}
echo "<br/>";







$site_varijabli = array($a, $b, $c); 



for($i = 0; $i < count($site_varijabli); $i++){
	if (is_numeric($site_varijabli[$i])){
		echo $site_varijabli[$i]."<br/>";
	} else {
		echo "Внеси број!";
	}
}
// }

?>