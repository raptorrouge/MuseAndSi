<?php

session_start ();

include("pdo.php");
include("fonction/F_PostUser.php");

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

            <meta charset="UTF-8">
            <meta name="viewport"
                  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <script src="../fonction.js"></script>
            <link rel="stylesheet" href="../lescss/mise-en-forme.css">
            <link rel="stylesheet" href="../lescss/contact.css">
            <link rel="stylesheet" href="../lescss/menu.css">
            <link rel="stylesheet" href="../lescss/style.css">




    </head>
    <body>
    <header>
        <div class="nav-toggle" onclick="document.documentElement.classList.toggle('menu-open')">
            <div class="nav-toggle-bar"></div>
        </div>
        <nav class="menu">
            <ul>
                <li><img class="logogrand" src="image/logo_black.png" alt="Logo du site"></li>
                <li><a href="../site%20final/accueil.php"
                       class="nav-link">
                        Accueil</a></li>

                <li><a href="../site%20final/profil.php"
                       class="nav-link">
                        Profil</a></li>

                <li><a href="../site%20final/uplaod.php"
                       class="nav-link">
                        Création</a></li>

                <li><a href="../mentions-legales.html"
                       class="nav-link">
                        Mentions</a></li>
                <li><a href="../contact.html"
                       class="nav-link">
                        Contact</a></li>
            </ul>
        </nav>
        <div><a href="../site%20final/accueil.php"><img src="image/logo.png" width="221" height="178" alt="logo"></a></div>
        <div id="recherche"> <form role="search" class="recherche" id="form">
                <input type="search" class="recherche" id="query" name="q"
                       placeholder="Search..."
                       aria-label="Search through site content">
                <button class="recherche">
                    <svg viewBox="0 0 1024 1024"><path class="path1" d="M848.471 928l-263.059-263.059c-48.941 36.706-110.118 55.059-177.412 55.059-171.294 0-312-140.706-312-312s140.706-312 312-312c171.294 0 312 140.706 312 312 0 67.294-24.471 128.471-55.059 177.412l263.059 263.059-79.529 79.529zM189.623 408.078c0 121.364 97.091 218.455 218.455 218.455s218.455-97.091 218.455-218.455c0-121.364-103.159-218.455-218.455-218.455-121.364 0-218.455 97.091-218.455 218.455z"></path></svg>
                </button>
            </form></div>
    </header>
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

    <footer>
        <div class="left box">
            <div class="content">
                <div class="réseaux_sociaux">
                    <a class="insta" href="https://www.instagram.com/"><img src="../image/svg/instagram.svg" alt="Instagram" height="25" width="25"></a>
                    <a class="twi" href="https://twitter.com/"><img src="../image/svg/twitter.svg" alt=Twitter" height="27" width="27"></a>
                    <a class="fb" href="https://www.facebook.com/"><img src="../image/svg/facebook.svg" alt="Facebook" height="25" width="25"></a>
                    <a class="mmi" href="http://mmimontbeliard.com/"><img src="../image/svg/juste-logo-mmi.svg" alt="Site MMI" height="27" width="35"></a>
                </div>
                <p class="mail">
                    david.philippe02@edu.univ-fcomte.fr | harumi25150@gmail.com | jules.crevoisier@edu.univ-fcomte.fr
                </p>
            </div>
        </div>
        <div class="right box">
            <h2>Inscrivez vous à notre Newsletters</h2>
            <div class="content">
                <form action="#">
                    <div class="e-mail">
                        <p class="mail">Votre e-mail</p>
                        <input type="email" required>
                    </div>
                    <div class="btn">
                        <button type="submit">Adhérer</button>
                    </div>
                </form>
                <router-link :to="{name:'Mentions'}">mentions legales </router-link>

            </div>
        </div>
    </footer>
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
