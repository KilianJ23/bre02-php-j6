<?php

require('connexion.php');


$id = $_POST['id'];

$query = $db->prepare('DELETE FROM address WHERE address.id = :id');

$parameters = [
    'id' => $id
    ];

$query->execute($parameters);
$address = $query->fetch(PDO::FETCH_ASSOC);


?>