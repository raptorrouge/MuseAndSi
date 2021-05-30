<?php
?>

<?php
include("pdo.php");
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
        $bdd->exec($ma_requete);
    }


}

?>

<form method="post" action="inscirption.php">
    <div class="row">
        <a href="">accueil</a>
        <fieldset>
            <legend>Inscription</legend>
            <label>Email
                <input name="mail" type="text" size=18 value="<?php if(isset($donnees["mail"])){echo ($donnees["mail"]);}?>"/>
                <?php if ($erreurMail){echo ("<div style='color: red'>Veuillez rentrer une adresse mail valide</div>");} else {echo ("<br>");}?>
                <?php if ($erreurMail2){echo ("<div style='color: red'>Mail deja utilisé</div>");} else {echo ("<br>");}?>
            </label>
            <label>Mot de passe de 8 carractère minimum
                <input name="mdp" type="password" minlength="8" required value="<?php if(isset($_POST["mdp"])){echo ($_POST["mdp"]);}?>"/>
                <?php echo ("<br>");?>
            </label>
            <label>Nom
                <input name="nom" type="text" size=18 value="<?php if(isset($donnees["nom"])){echo ($donnees["nom"]);}?>"/>
                <?php if ($erreurNom){echo ("<div style='color: red'>Veuillez rentrer un nom de plus de deux lettres</div>");} else {echo ("<br>");}?>
            </label>
            <label>Prenom
                <input name="prenom" type="text" size=18 value="<?php if(isset($donnees["prenom"])){echo ($donnees["prenom"]);}?>"/>
                <?php if ($erreurPrenom){echo ("<div style='color: red'>Veuillez rentrer un prenom de plus de deux lettres</div>");} else {echo ("<br>");}?>
            </label>
            <label>Age
                    <input name="age" type="text" size=18 value="<?php if(isset($donnees["age"])){echo ($donnees["age"]);}?>"/>
                <?php if ($erreurAge){echo ("<div style='color: #ff0000'>Veuillez rentrer un age valide entre 10 et 199 ans</div>");} else {echo ("<br>");}?>
            </label>
            <label> Choisiser votre role
                <br>
                <select name="role" id="role">
                    <option value="Auditeur">Auditeur</option>
                    <option value="Musicien">Musicien</option>
                    <?php echo $_POST["role"]; if ($erreurRole){echo ("<div style='color: #ff0000'>Choisisez un role</div>");} else {echo ("<br>");}?>
                </select>
            </label>
            <br>
            <button type="submit">Valider</button>
        </fieldset>
    </div>
</form>
