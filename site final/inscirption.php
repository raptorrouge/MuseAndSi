<?php
?>

<?php
include("pdo.php");
$erreurMail=false;
$erreurNom=false;
$erreurPrenom=false;
$erreurAge=false;
$erreurAdresse=false;
$erreurRole=false;
echo "1";

if ( isset($_POST["mail"]) and isset($_POST["mdp"]) and isset($_POST["nom"]) and isset($_POST["prenom"]) and isset($_POST["adresse"]))
{
    echo "2";

    $donnees["mail"]=htmlspecialchars($_POST["mail"]);
    $donnees["mdp"]=hash('sha256',$_POST["mdp"]);
    $donnees["nom"]=htmlspecialchars($_POST["nom"]);
    $donnees["prenom"]=htmlspecialchars($_POST["prenom"]);
    $donnees["age"]=htmlspecialchars($_POST["age"]);
    $donnees["role"]=htmlspecialchars($_POST["adresse"]);
    $donnees["adresse"]=htmlspecialchars($_POST["adresse"]);

    if (!filter_var($donnees["mail"], FILTER_VALIDATE_EMAIL)) {
        $erreurMail = true;
    }

    if (!preg_match("/[A-Za-z]{2,}/", $donnees["nom"])) {
        $erreurNom = true;
    }
    if (!preg_match("/[A-Za-z]{2,}/", $donnees["prenom"])) {
        $erreurPrenom = true;
    }
    if (!preg_match("/(2[0-1]|1[0-9]|0[0-9])/", $donnees["age"])) {
        $erreurAge = true;
    }
    if (!preg_match("/[A-Za-z]{2,}/", $donnees["adresse"])) {
        $erreurAdresse = true;
    }

    if (sizeof($_POST["role"])!=1) {
        $erreurRole = true;
    } else{
        foreach ($_POST["role"] as  $role ){
            $donnees["role"]=htmlspecialchars($role);
            echo $role;
        }
    }


    if (!$erreurAdresse and !$erreurNom and !$erreurPrenom and !$erreurAge) {
        $ma_requete = ("INSERT INTO user(EMAIL,MDP,NOM_User,PRENOM_User,AGE_User,ROLE_User) VALUES('". $donnees["mail"] . "','". $donnees["mdp"] . "','". $donnees["nom"] . "' , '" .  $donnees["prenom"]. "','" . $donnees["age"] . "','" . $donnees["role"] . "');"  );
        echo $ma_requete;
        $bdd->exec($ma_requete);
        echo "3";

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
            </label>
            <label>Mot de passe
                <input name="mdp" type="text" size=18 value="<?php if(isset($_POST["mdp"])){echo ($_POST["mdp"]);}?>"/>
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
                <?php if ($erreurAge){echo ("<div style='color: #ff0000'>Veuillez rentrer un age valide entre 0 et 199 ans</div>");} else {echo ("<br>");}?>
            </label>
            <label>Ville d'habitation
                <input name="adresse" type="text" size=18 value="<?php if(isset($donnees["adresse"])){echo ($donnees["adresse"]);}?>"/>
                <?php if ($erreurAdresse){echo ("<div style='color: red'>Veuillez rentrer une ville de plus de deux lettres</div>");} else {echo ("<br>");}?>
            </label>
            <label> Choisiser votre role
                <br>
                <?php
                $roles = array("Musicien","Auditeur");
                for($i=0;$i<sizeof($roles);$i++){
                    echo"<input type='checkbox' name='role[]' value='".$roles[$i]."'/>".$roles[$i]."<br>";
                }
                ?>
                <?php if ($erreurRole){echo ("<div style='color: red'>Veuillez choisir un seul role</div>");} else {echo ("<br>");}?>

            </label>
            <button type="submit">Valider</button>
        </fieldset>
    </div>
</form>
