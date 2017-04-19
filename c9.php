<?php 

$config = 'mysql:host=127.0.0.1;dbname=sa_sajt';
$username = 'root';
$password = 'root';
$db = new PDO($config, $username, $password);

// PDO -> persistance data object

$sql = 'select classes.name, classes.description, classes.number_of_classes, professors.first_name, professors.last_name from classes, professors where classes.professor_id = professors.id and classes.id = 1';
$query = $db->query($sql);
$classes = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($classes);


?>

<table border=1>
	<tr>
		<th>Name</th>
		<th>Description</th>
		<th>Number of Classes</th>
		<th>First Name</th>
		<th>Last Name</th>
	</tr>
	<?php foreach ($classes as $class) { ?>
	<tr>	
		<td><?=$class['name']?></td>
		<td><?=$class['description']?></td>
		<td><?=$class['number_of_classes']?></td>
		<td><?=$class['first_name']?></td>
		<td><?=$class['last_name']?></td>
	</tr>
	<?php } ?>
</table>


	