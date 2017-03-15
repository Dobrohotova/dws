<?php 

function paren($broj){
	if ($broj % 2 == 0) {
		return true;
	} else {
		return false;
	}
}


echo paren(5);



function dolzhina_na_string($string){
	if (strlen($string) > 5){
		return true;
	} else {
		return paren(strlen($string));
	}
}





$string = 'Zdra';
echo dolzhina_na_string($string);


?>