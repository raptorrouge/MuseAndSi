<?php
include("pdo.php");
include("fonction/F_connexion.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>inscrivez - vous</title>
    <script src="fonction.js"></script>
    <link rel="stylesheet" href="style/inscription.css.css">
</head>
<body>

<form method="post" action="connexion.php">
    <div class="row">
        <a href="">accueil</a>
        <fieldset class="inscritpion">
            <legend>Connexion</legend>
            <label>Email
                <input name="mail" type="text" size=18 value="<?php if(isset($donnees["mail"])){echo ($donnees["mail"]);}?>"/>

                <?php if ($erreurMail){echo ("<div style='color: red'>Mail inconnu</div>");} else {echo ("<br>");}?>
            </label>
            <label>Mot de passe de 8 carractère minimum
                <input name="mdp" type="password" minlength="8" required value="<?php if(isset($_POST["mdp"])){echo ($_POST["mdp"]);}?>"/>

                <?php if ($erreurMdp){echo ("<div style='color: red'>Mot de passe inconnu</div>");} else {echo ("<br>");}?>
                <?php echo ("<br>");?>
            </label>
            <button type="submit">Valider</button>
        </fieldset>
    </div>
</form>
