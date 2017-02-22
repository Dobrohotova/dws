<?php 

$predavach = array(
	'ime' => 'Gorjan',
	'prezime' => 'Ilievski',
	'godini' => 29,
);



?>


<table border="1">
	<tr>
		<th>Kolona</th>
		<th>Vrednost</th>
	</tr>
	<?php foreach ($predavach as $key => $value) { ?>
		<tr>
			<td><?=$key?></td>
			<td><?=$value?></td>
		</tr>
	<?php } ?>
</table>


