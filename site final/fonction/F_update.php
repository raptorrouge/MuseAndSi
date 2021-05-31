<?php
$erreurMail=false;

$erreurNom=false;
$erreurPrenom=false;
$erreurAge=false;
$erreurRole=false;

if ( isset($_POST["mail"]) and isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["age"]))
{

    echo 2;

    $donnees["mail"]=htmlspecialchars($_POST["mail"]);
    $donnees["nom"]=htmlspecialchars($_POST["nom"]);
    $donnees["prenom"]=htmlspecialchars($_POST["prenom"]);
    $donnees["age"]=htmlspecialchars($_POST["age"]);
    $donnees["role"]=htmlspecialchars($_POST["role"]);


    if (!filter_var($donnees["mail"], FILTER_VALIDATE_EMAIL)) {
        $erreurMail = true;
    }




    if (!preg_match("/[A-Za-z]{2,}/", $donnees["nom"])) {
        $erreurNom = true;
    }
    if (!preg_match("/[A-Za-z]{2,}/", $donnees["prenom"])) {
        $erreurPrenom = true;
    }
    echo (int)$donnees["age"];
    if ( (int)$donnees["age"]<10 || (int)$donnees["age"]>199) {
        $erreurAge = true;
    }


    if($_POST["role"]==""){
        $erreurRole=true;
    }




    if (!$erreurMail  and !$erreurRole  and !$erreurNom and !$erreurPrenom and !$erreurAge) {
        echo 3;
        $ma_requete = ("UPDATE user SET EMAIL =?, NOM_User =? , PRENOM_User =?,AGE_User=?,ROLE_User= ? where ID_User=?;"  );
        echo $ma_requete;
    /*    $bdd->exec($ma_requete);*/
        $stmt = $bdd->prepare($ma_requete);
        $stmt->execute(array((string)$donnees["mail"],$donnees["nom"],$donnees["prenom"],$donnees["age"],$donnees["role"],$_GET['id']));
        header("location: profil.php?id=".$_GET['id']);
    }



}

?>
