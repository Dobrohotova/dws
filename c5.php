<?php 


function paren($broj){
	if ($broj % 2 == 0) {
		return true;
	} else {
		return false;
	}
}


echo paren(5);


?>