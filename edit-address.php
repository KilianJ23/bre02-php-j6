<?php

require('connexion.php');

$street = $_POST['street'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];
$id = $_POST['id'];

$query = $db->prepare('UPDATE address 
SET street = :street, city = :city, zipcode = :zipcode WHERE address.id = :id');

$parameters = [
    'street' => $street,
    'city' => $city,
    'zipcode' => $zipcode,
    'id' => $id
    ];

$query->execute($parameters);
$address = $query->fetch(PDO::FETCH_ASSOC);


?>