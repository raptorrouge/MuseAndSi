<?php

session_start ();

include("pdo.php");

if(isset($_SESSION['id']) AND $_SESSION['id']>0)
{
    echo $_SESSION['id'];

    $ma_requete=("select * from user where ID_User=".$_SESSION['id'].";");
    $stmt = $bdd->prepare($ma_requete);
    $stmt->execute();
    $user = $stmt->fetch();
    $_SESSION['NOM_USER']=$user['NOM_User'];
    $_SESSION['PRENOM_USER']=$user['PRENOM_User'];

?>

    <html>
    <head>
        <title> Profil <?php echo $user['NOM_User'] ?> </title>
    </head>
    <body>
    <form method="post" action="<?php echo "MiseAJourProfil.php" ?>">
        <div class="row">
            <a href="accueil.php">accueil</a>
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

    <?php  if($user['ROLE_User'] == "Musicien") { ?>

        <a href="uplaod.php"> <button> Upload </button></a>

    <?php }   ?>

    </body>
    </html>
<?php
}else{

?>


<html>
<head>
    <title> Uplaod Musique  </title>
</head>
<body>
<p>Merci de vous connecter <a href="connexion.php"> ici </a></p>
</body>

<?php } ?>
