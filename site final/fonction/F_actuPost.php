<?php


$tabPost =array();

$ma_requete = ("select NOM_User, PRENOM_User, CONTENU_POST, NOM_Musique, CHEMIN_Musique, date_post  from user,post,musique where post.ID_User=user.ID_User  and musique.ID_Post=post.ID_Post order by post.ID_Post DESC LIMIT 10;");

$stmt = $bdd->prepare($ma_requete);
$stmt->execute();

while($post =$stmt->fetch()){

    array_push($tabPost,$post);

}
/*if ($stmt->num_rows > 0) {
    // output data of each row
    while($row = $stmt->fetch_assoc()) {
        var_dump($row);
    }
}*/