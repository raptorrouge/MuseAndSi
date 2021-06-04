<?php


$erreurNom=false;
$erreurFormat=false;
$newType=false;
$codeType="";
$idPost=-1;

$target_file="musique/";

var_dump($_FILES);

if (isset($_FILES['Musique']) and $_FILES['Musique']['type']=='audio/mpeg'){



}



if (isset($_POST['Nom']) and isset( $_POST['Temps']) and  isset($_POST['Type']) and isset( $_POST['Original']) and  isset($_FILES['Musique'])){

    $donnees["Nom"]=htmlspecialchars($_POST["Nom"]);
    $donnees["Type"]=strtolower(htmlspecialchars($_POST["Type"]));
    $donnees["Temps"]=htmlspecialchars($_POST["Temps"]);
    $donnees["Original"]=htmlspecialchars($_POST["Original"]);
    $date =date("Y-m-d H:i:s");




    if (!preg_match("/[A-Za-z]{2,}/", $donnees["Nom"])) {
        $erreurNom = true;
    }

    if (!$_FILES['Musique']['type']=='audio/mpeg'){
        $erreurFormat= true;
    }

    if (!$erreurNom and !$erreurFormat){
        $ma_requete= "SELECT Nom_Type_Musique FROM type_musique;";

        $typeMusique = $bdd->prepare($ma_requete);
        $typeMusique->execute();


        while($row = $typeMusique->fetch(PDO::FETCH_ASSOC)){
            var_dump($row);
            foreach($row as $type){
                echo $type;
                if( !($donnees["Type"]==$type)){
                    $newType=True;
                    echo "new";
                    break 2;

                }else{
                 echo "<br>"."pas new";
                }
            }



        }
        if($newType){
            echo " toto";
            $ma_requete3="insert into type_musique(Nom_Type_Musique) values ('".$donnees["Type"]."'); ";
            echo $ma_requete3;
            $bdd3->exec($ma_requete3);
        }

        $ma_requete4= "SELECT Code_Type_Musique FROM type_musique where Nom_Type_Musique='".$donnees["Type"]."';";

        echo "<br>". $ma_requete4 ."<br>";
        $reponse =$bdd4->prepare($ma_requete4);
        $reponse->execute();
        while($row = $reponse->fetch()){
            echo "tita";
            $codeType=$row['Code_Type_Musique'];
            echo $codeType;
        }



        $ma_requete5= "INSERT INTO post(CONTENU_POST,ID_USER,date_post) value('".$donnees["Nom"]."','".$_SESSION["id"]."','".$date."'); ";
        echo $ma_requete5;

        $bdd5->exec($ma_requete5);

        $ma_requete6= "SELECT ID_post FROM post where date_post='".$date."' and ID_USER='".$_SESSION["id"]."'and CONTENU_POST='".$donnees["Nom"]."' ;";

        $reponse =$bdd6->prepare($ma_requete6);
        $reponse->execute();
        while($row = $reponse->fetch()){
            var_dump($row);
            echo "titi";
            echo $row['ID_post'];
            $idPost= $row['ID_post'];
            echo "id post =".$idPost;
        }


        $ma_requete2= "INSERT INTO musique(NOM_Musique,TEMPS_Musique,ORIGINAL_Musique,CHEMIN_Musique,ID_Post,CODE_Type_Musique)
                        value('".$donnees["Nom"]."','".$donnees["Temps"]."','".$donnees["Original"]."','/musique/".$_FILES['Musique']['name']."','".$idPost."','".$codeType."') ;";
        echo $ma_requete2;
        $bdd2->exec($ma_requete2);

        echo "<br>".$_FILES["Musique"]["tmp_name"];

        move_uploaded_file($_FILES["Musique"]["tmp_name"], $target_file.$_FILES['Musique']['name']);

        echo "<script> alerte(\"upload OK\") </script>";
    }



//    header("location : profil.php");

}