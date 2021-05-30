<?php


define("database", "museandsi");
define("hostname", "localhost");
define("username", "root");
define("password", "");


$dsn = 'mysql:dbname=' . database . ';host=' . hostname . ';charset=utf8';

$bdd = new PDO($dsn, username, password);
// pour afficher les erreurs
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// pour récupérer le résultat des requêtes SELECT sous forme de tableaux associatifs
$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$sql = " SELECT * FROM user";
$stmt = $bdd->prepare($sql);
$stmt->execute([1]);

var_dump($bdd);

/*var_dump($stmt->fetch());
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $user = new user($row);
    var_dump($user);
}*/


