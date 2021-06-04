<?php
$erreurMail=false;
$erreurMail2=false;
$erreurNom=false;
$erreurPrenom=false;
$erreurAge=false;
$erreurRole=false;



if ( isset($_POST["mail"]) and isset($_POST["mdp"]) and isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["age"]))
{

    $donnees["mail"]=htmlspecialchars($_POST["mail"]);
    $donnees["mdp"]=hash('sha256',$_POST["mdp"]);
    $donnees["nom"]=htmlspecialchars($_POST["nom"]);
    $donnees["prenom"]=htmlspecialchars($_POST["prenom"]);
    $donnees["age"]=htmlspecialchars($_POST["age"]);
    $donnees["role"]=htmlspecialchars($_POST["role"]);


    if (!filter_var($donnees["mail"], FILTER_VALIDATE_EMAIL)) {
        $erreurMail = true;
    }else{

        $requeteMail= ("select EMAIL from user;");
        $dataMails = $bdd2->prepare($requeteMail);
        $dataMails->execute();
        while ($row = $dataMails->fetch(PDO::FETCH_ASSOC)) {

            foreach($row as $mail){
                if( $donnees["mail"]==$mail){

                    $erreurMail2 = true;
                    break;
                }
            }
        }
    }



    if (!preg_match("/[A-Za-z]{2,}/", $donnees["nom"])) {
        $erreurNom = true;
    }
    if (!preg_match("/[A-Za-z]{2,}/", $donnees["prenom"])) {
        $erreurPrenom = true;
    }
    if ( (int)$donnees["age"]<10 || (int)$donnees["age"]>199) {
        $erreurAge = true;
    }


    if($_POST["role"]==""){
        $erreurRole=true;
    }




    if (!$erreurMail and !$erreurMail2  and !$erreurRole  and !$erreurNom and !$erreurPrenom and !$erreurAge) {
        $ma_requete = ("INSERT INTO user(EMAIL,MDP,NOM_User,PRENOM_User,AGE_User,ROLE_User) VALUES('". $donnees["mail"] . "','". $donnees["mdp"] . "','". $donnees["nom"] . "' , '" .  $donnees["prenom"]. "','" . $donnees["age"] . "','" . $donnees["role"] . "');"  );
        echo $ma_requete;
    /*    $bdd->exec($ma_requete);*/
        $stmt = $bdd->prepare($ma_requete);
        $stmt->execute();
        var_dump($stmt->fetch());
        header("location: connexion.php");
    }


}

?>
