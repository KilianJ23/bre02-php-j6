<?php

require('connexion.php');

$street = $_POST['street'];
$city = $_POST['city'];
$zipcode = $_POST['zipcode'];

$query = $db->prepare('UPDATE address (street, city, zipcode)
VALUES (?, ?, ?)');

$parameters = [
    $street,
    $city,
    $zipcode
    ];

$query->execute($parameters);
$address = $query->fetch(PDO::FETCH_ASSOC);

var_dump($address);

?>