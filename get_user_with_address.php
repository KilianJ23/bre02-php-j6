<?php

require('connexion.php');

$query = $db->prepare('SELECT users.first_name, users.last_name, address.street, address.city FROM users
JOIN address ON address.id = users.id
GROUP BY users.id
HAVING users.id = :id');
$parameters = [
    'id' => $_GET['id']
    ];

$query->execute($parameters);
$users = $query->fetch(PDO::FETCH_ASSOC);

var_dump($users);

/* jouer sur l'URL pour passer l'ID voulu comme paramètre : https://kilianjanus.sites.3wa.io/PHP/bre02-php-j6/get_single_user.php?id=4 */

?>