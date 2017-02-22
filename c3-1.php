<?php 

$studenti = array(
	[
		'ime' => 'Irina',
		'prezime' => 'Dobrohotova',
		'godini' => 24,
	],
	[
		'ime' => 'Stefan',
		'prezime' => 'Stojkovski',
		'godini' => 27,
	],
	[
		'ime' => 'Stefan',
		'prezime' => 'Blazhevski',
		'godini' => 19,
	],
	[
		'ime' => 'Martin',
		'prezime' => 'Postolovski',
		'godini' => 22,
	],
	[
		'ime' => 'Martin',
		'prezime' => 'Danev',
		'godini' => 18,
	],
);


?>



<table border="1">
	<tr>
		<th>Broj</th>
		<th>Ime</th>
		<th>Prezime</th>
		<th>Godini</th>
	</tr>
	<?php foreach ($studenti as $indeks => $student) { ?>
		<tr>
			<td><?=$indeks+1?></td>
			<td><?=$student['ime']?></td>
			<td><?=$student['prezime']?></td>
			<td><?=$student['godini']?></td>
		</tr>
	<?php } ?>
</table>
