<?php


$tabPost = array();



if(!isset($_GET['nom'])){


            unset($_SESSION['recherche']);


            $ma_requete=("select * from user where ID_User=".$_SESSION['id'].";");
            $stmt = $bdd->prepare($ma_requete);
            $stmt->execute();
            $user = $stmt->fetch();
            $_SESSION['NOM_USER']=$user['NOM_User'];
            $_SESSION['PRENOM_USER']=$user['PRENOM_User'];



            $ma_requete2 = ("select NOM_User, PRENOM_User, CONTENU_POST, NOM_Musique, CHEMIN_Musique, date_post from user,post,musique where post.ID_User=user.ID_User and user.ID_User=".$_SESSION['id']."  and musique.ID_Post=post.ID_Post order by post.ID_Post DESC LIMIT 10;");

            $stmt = $bdd->prepare($ma_requete2);
            $stmt->execute();

}else if(isset($_GET['nom'])){

    $ma_requete=("select * from user where NOM_User='".$_GET['nom']."';");
    $stmt = $bdd->prepare($ma_requete);
    $stmt->execute();
    $user = $stmt->fetch();

    $_SESSION['recherche']=$user['ID_User'];

    echo $_SESSION['recherche'];


    $ma_requete2 = ("select NOM_User, PRENOM_User, CONTENU_POST, NOM_Musique, CHEMIN_Musique, date_post from user,post,musique where post.ID_User=user.ID_User and user.ID_User=".$_SESSION['recherche']."  and musique.ID_Post=post.ID_Post order by post.ID_Post DESC LIMIT 10;");

    $stmt = $bdd->prepare($ma_requete2);
    $stmt->execute();
}


while ($post = $stmt->fetch()) {

    array_push($tabPost, $post);

}
