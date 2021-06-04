<?php
session_start();
?>


<html>
<head>
    <title>  accueil </title>
    <link rel="stylesheet" href="style/menu.css">
</head>

    <?php

        if (isset($_SESSION['id'])){

        include("pdo.php");
        include("fonction/F_actuPost.php");
        ?>

        <header>
            <a href=""><img src="image/logo.png" alt="logo_museAndSi"></a>
            <a href="profil.php">Profil</a>
            <form action="fonction/F_déconnexion.php">
                <button>déconnexion</button>
            </form>
        </header>

        <body>

        <?php  for($i=0; $i<sizeof($tabPost);$i++) {

            echo "<h2>".$tabPost[$i]['NOM_User']." ".$tabPost[$i]['PRENOM_User']."</h2>";

            echo "<p>".$tabPost[$i]['date_post']."</p>";

            echo "<p>".$tabPost[$i]['CONTENU_POST']."</p>";

            echo "<p>".$tabPost[$i]['NOM_Musique']."</p>";
            echo "<audio controls>";

            echo  "<source src=\"/MuseAndSi/site%20final/".$tabPost[$i]['CHEMIN_Musique']."\">";
            echo "<p>".$tabPost[$i]['CONTENU_POST']."</p>";

            echo " </audio>";

        } ?>

        </body>
    <?php
    }else{
        include("pdo.php");
        include("fonction/F_inscription.php");
        ?>

        <header>
            <a href=""><img src="image/logo.png" alt="logo_museAndSi"></a>
            <a href="connexion.php">Connexion</a>
            <a href="inscription.php">Inscription</a>
            <link rel="stylesheet" href="style/menu.css">
            <link rel="stylesheet" href="style/inscription.css.css">
        </header>



        <body>

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

        </body>

        <?php
    } ?>

    <body>


    </body>
</html>
