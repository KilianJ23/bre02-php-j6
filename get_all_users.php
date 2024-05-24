<?php

require('connexion.php');

$query = $db->prepare('SELECT * FROM users');
/*$parameters = [
    'id' => $_GET['id']
    ];
*/
$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);

var_dump($users);


?>