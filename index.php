<?php 	

// var_dump($_GET);
// exit;


echo '<a href="c4.php">Link</a>';

echo '<br/>';

if(isset($_GET['enterpin']) && is_numeric($_GET['enterpin']) && isset($_GET['confirmpin']) && is_numeric($_GET['confirmpin'])) {
		if($_GET['confirmpin'] === $_GET['enterpin']){
			echo "Pinovite se isti i validni";
		} else {
			echo 'Validni ama razlichni pinovi<br/>';
	}
} else {
 echo 'Nevaliden pin!';
}








?>



