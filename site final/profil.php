<?php

session_start ();

include("pdo.php");
include("fonction/F_PostUser.php");



if(isset($_SESSION['id']) AND $_SESSION['id']>0 and !isset($_GET['nom']))
{

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

        <?php  for($i=0; $i<sizeof($tabPost);$i++) {

            echo "<p>".$tabPost[$i]['date_post']."</p>";

            echo "<p>".$tabPost[$i]['CONTENU_POST']."</p>";

            echo "<p>".$tabPost[$i]['NOM_Musique']."</p>";
            echo "<audio controls>";

            echo  "<source src=\"/MuseAndSi/site%20final/".$tabPost[$i]['CHEMIN_Musique']."\">";
            echo "<p>".$tabPost[$i]['CONTENU_POST']."</p>";

            echo " </audio>";

        }  }   ?>

    </body>
    </html>
<?php
}else if (isset($_SESSION['id']) AND $_SESSION['id']>0 and isset($_GET['nom'])){

if($_GET['nom']==$_SESSION['NOM']){
    echo "titi";
    header("location: profil.php");
}

?>

<html>
<head>
    <title> Profil <?php echo $user['NOM_User'] ?> </title>
</head>
<body>

    <div class="row">
        <a href="accueil.php">accueil</a>
        <fieldset>
            <legend>Information</legend>

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

        </fieldset>
    </div>
</form>

    <?php  for($i=0; $i<sizeof($tabPost);$i++) {

        echo "<p>".$tabPost[$i]['date_post']."</p>";

        echo "<p>".$tabPost[$i]['CONTENU_POST']."</p>";

        echo "<p>".$tabPost[$i]['NOM_Musique']."</p>";
        echo "<audio controls>";

        echo  "<source src=\"/MuseAndSi/site%20final/".$tabPost[$i]['CHEMIN_Musique']."\">";
        echo "<p>".$tabPost[$i]['CONTENU_POST']."</p>";

        echo " </audio>";

    }   ?>

</body>

    <?php
        }else{
    ?>

    <html>
    <head>
        <title> Profil </title>
    </head>
    <body>
    <p>Merci de vous connecter <a href="connexion.php"> ici </a></p>
    </body>

<?php } ?>
