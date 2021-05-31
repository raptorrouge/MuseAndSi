<?php
include("pdo.php");
include ("fonction/F_actuPost.php");




?>


<html>
<head>
    <title>  accueil </title>
</head>
    <body>

    <?php /*for($i=sizeof($tabPost)-1; $i>=0;$i--)*/ for($i=0; $i<sizeof($tabPost);$i++) {

        echo "<h2>".$tabPost[$i]['NOM_User']." ".$tabPost[$i]['PRENOM_User']."</h2>";

            echo "<p>".$tabPost[$i]['CONTENU_POST']."</p>";

            echo "<p>".$tabPost[$i]['NOM_Musique']."</p>";
            echo "<audio controls>";

              echo  "<source src=\"/MuseAndSi/site%20final/musique/".$tabPost[$i]['NOM_Musique'].".mp3\">";
              echo "<p>".$tabPost[$i]['CONTENU_POST']."</p>";

            echo " </audio>";

     } ?>
    </body>
</html>
