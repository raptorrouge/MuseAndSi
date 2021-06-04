<?php

$erreurMail=false;
$erreurMdp=false;


if ( isset($_POST["mail"]) and isset($_POST["mdp"]) )
{
    echo "daulphin";

    $donnees["mail"]=
        htmlspecialchars($_POST["mail"]);
    $donnees["mdp"]=hash('sha256',$_POST["mdp"]);


    if (!filter_var($donnees["mail"], FILTER_VALIDATE_EMAIL)) {
        $erreurMail = true;
    }else{
        echo "daulphin 2";
        $requeteMail= ("select EMAIL from user;");
        $dataMails = $bdd2->prepare($requeteMail);
        $dataMails->execute();
        while ($row = $dataMails->fetch(PDO::FETCH_ASSOC)) {

            foreach($row as $mails){
                echo "<br>";
                if( $donnees["mail"]!=$mails){
                    echo $mails;
                    echo "<br>";
                    $erreurMail = true;
                }else{
                    break 2;
                }
            }
        }
        $requeteMdp= ("select MDP from user where EMAIL='".$donnees["mail"]."';");
        $dataMDP = $bdd3->prepare($requeteMdp);
        $dataMDP->execute();

        while ($row = $dataMDP->fetch(PDO::FETCH_ASSOC)) {

            foreach($row as $MDP){
                if( $donnees["mdp"]!=$MDP){

                    $erreurMdp = true;
                }
            }
        }
    }

//    echo 1;


    if (!$erreurMail and !$erreurMdp ) {
        $ma_requete = ("select ID_User, NOM_User, PRENOM_User from user where '".$donnees["mail"]."'=EMAIL and '".$donnees["mdp"]."'=MDP;"  );



        $stmt = $bdd->prepare($ma_requete);
        $stmt->execute();
       while($id = $stmt->fetch()){
           session_start();
           $_SESSION['id']=$id['ID_User'];
           $_SESSION['NOM']=$id['NOM_User'];
           $_SESSION['PRENOM']=$id['PRENOM_User'];

           header("location: accueil.php");
       }
    }


}

?>
