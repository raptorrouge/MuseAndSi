<?php
session_start();

include("pdo.php");

if(isset($_GET['id']) AND $_GET['id']>0)
{
    $ma_requete=("select * from user where ID_User=".$_GET['id'].";");
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
    <form method="post" action="<?php echo "MiseAJourProfil.php?id=".$user['ID_User']; ?>">
        <div class="row">
            <a href="">accueil</a>
            <fieldset>
                <legend>Information</legend>
                <label>Email :
                    <?php echo ($user['EMAIL'])?>
                </label>
                <br>
                <label>Nom :
                    <?php echo ($user['NOM_User'])?>
                </label>
                <br>
                <label>Prenom :
                    <?php echo ($user['PRENOM_User'])?>
                </label>
                <br>
                <label>Age :
                    <?php echo ($user['AGE_User'])?>
                </label>
                <br>
                <label> Role :

                    <?php echo ($user['ROLE_User'])?>
                </label>
                <br>
                <button type="submit">Metre a jours</button>
            </fieldset>
        </div>
    </form>

    </body>
    </html>
<?php
}

?>
