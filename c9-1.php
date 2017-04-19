<?php 


$config = 'mysql:host=127.0.0.1;dbname=sa_sajt';
$username = 'root';
$password = 'root';
$db = new PDO($config, $username, $password);

// PDO -> persistance data object

$sql = 'select * from professors where id = :id';

$query = $db->prepare($sql);
$query->bindValue(':id', 1, PDO::PARAM_INT);
$query->execute();

$res = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($res);




?>

//SELECT classes.name, classes.description, classes.number_of_classes, professors.first_name, professors.last_name 
FROM classes, professors
WHERE classes.professor_id = professors.id AND classes.id = 1;

SELECT classes.name, classes.description, classes.number_of_classes, professors.first_name, professors.last_name 
FROM classes
JOIN professors ON classes.professor_id = professors.id
WHERE classes.id = 1;