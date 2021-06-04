<?php
include("pdo.php");
include("fonction/F_inscription.php");
?>

<html>

<head>
    <title>Inscription</title>

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