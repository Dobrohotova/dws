<?php 

// var_dump($_GET);
echo '<hr/>';

if($_GET['strana'] == 'studenti'){
	include 'c3-1.php';
}
else {
	include 'c3.php';
}

?>


<a href="?strana=predavachi">Predavachi</a></br>
<a href="c3-2.php?strana=studenti">Studenti</a>
