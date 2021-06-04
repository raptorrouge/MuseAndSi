<?php
include("pdo.php");
include("fonction/F_inscription.php");
?>

<html>

<head>
    <meta charset="UTF-8">
    <title>Inscription</title>

    <script src="fonction.js"></script>
    <link rel="stylesheet" href="style/inscription.css">
    <meta name="viewport" content="width=device-width, initial-scaled=1.0">
    <!--<script> window.alert('passer votre ecran en mode iphone X')</script>-->
</head>

<header>
    <a href=""><img src="image/logo.png" alt="logo_museAndSi"></a>
</header>
<form method="post" action="inscription.php">
    <div class="row">

        <fieldset>
            <legend>Inscription</legend>
            <label>Email
                <br>
                <input name="mail" type="text" size=18 value="<?php if(isset($donnees["mail"])){echo ($donnees["mail"]);}?>"/>
                <?php if ($erreurMail){echo ("<div style='color: red'>Veuillez rentrer une adresse mail valide</div>");} else {echo ("<br>");}?>
                <?php if ($erreurMail2){echo ("<div style='color: red'>Mail deja utilisé</div>");} else {echo ("<br>");}?>
            </label>
            <label>Mot de passe de 8 carractère minimum
                <br>
                <input name="mdp" type="password" minlength="8" required value="<?php if(isset($_POST["mdp"])){echo ($_POST["mdp"]);}?>"/>
                <?php echo ("<br>");?>
            </label>
            <label>Nom
                <br>
                <input name="nom" type="text" size=18 value="<?php if(isset($donnees["nom"])){echo ($donnees["nom"]);}?>"/>
                <?php if ($erreurNom){echo ("<div style='color: red'>Veuillez rentrer un nom de plus de deux lettres</div>");} else {echo ("<br>");}?>
            </label>
            <label>Prenom
                <br>
                <input name="prenom" type="text" size=18 value="<?php if(isset($donnees["prenom"])){echo ($donnees["prenom"]);}?>"/>
                <?php if ($erreurPrenom){echo ("<div style='color: red'>Veuillez rentrer un prenom de plus de deux lettres</div>");} else {echo ("<br>");}?>
            </label>
            <label>Age
                <br>
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

</html>