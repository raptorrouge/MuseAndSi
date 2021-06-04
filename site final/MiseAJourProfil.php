<?php


include("pdo.php");
include ("fonction/F_update.php");
session_start();

if(isset($_SESSION['id']) AND $_SESSION['id']>0)
{
    $ma_requete=("select * from user where ID_User=".$_SESSION['id'].";");
    $stmt = $bdd->prepare($ma_requete);
    $stmt->execute();
    $user = $stmt->fetch();
    var_dump($user);

    ?>

    <html>
    <head>
        <title> Profil <?php echo $user['NOM_User'] ?> </title>
    </head>
    <body>
    <form method="post" action="<?php echo "MiseAJourProfil.php" ?>">
        <div class="row">
            <a href="">accueil</a>
            <fieldset>
                <legend>Information</legend>

                <label>Email :
                    <input name="mail" type="text" size=18 value="<?php echo ($user['EMAIL'])?>"/>

                    <?php if ($erreurMail){echo ("<div style='color: red'>Veuillez rentrer une adresse mail valide</div>");} else {echo ("<br>");}?>
                </label>
                <br>

                <label>Nom :
                    <input name="nom" type="text" size=18 value="<?php echo ($user['NOM_User'])?>"/>
                    <?php if ($erreurNom){echo ("<div style='color: red'>Veuillez rentrer un nom de plus de deux lettres</div>");} else {echo ("<br>");}?>
                </label>
                <br>
                <label>Prenom :
                    <input name="prenom" type="text" size=18 value="<?php echo ($user['PRENOM_User'])?>"/>
                    <?php if ($erreurPrenom){echo ("<div style='color: red'>Veuillez rentrer un prenom de plus de deux lettres</div>");} else {echo ("<br>");}?>
                </label>
                <br>
                <label>Age :
                    <input name="age" type="text" size=18 value="<?php echo ($user['AGE_User'])?>"/>
                    <?php if ($erreurAge){echo ("<div style='color: #ff0000'>Veuillez rentrer un age valide entre 10 et 199 ans</div>");} else {echo ("<br>");}?>                </label>
                <br>
                <label> Role :
                    <?php echo ($user['ROLE_User'])?>
                </label>
                <br>
                <br>
                <label> Nouveau role :
                    <br>
                    <select name="role" id="role">
                        <option selected="<?php echo ($user['ROLE_User'])?>"><?php echo ($user['ROLE_User'])?></option>
                        <option value="Auditeur">Auditeur</option>
                        <option value="Musicien">Musicien</option>
                        <?php echo $_POST["role"]; if ($erreurRole){echo ("<div style='color: #ff0000'>Choisisez un role</div>");} else {echo ("<br>");}?>
                    </select>
                </label>
                <br>
                <br>
                <button type="submit">valider</button>
            </fieldset>
        </div>
    </form>

    </body>
    </html>
    <?php
}

?>
<?php
