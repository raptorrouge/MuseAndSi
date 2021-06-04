<?php
session_start();
include ("pdo.php");
include ("fonction/F_uplaod.php");

?>

<html>
<head>
    <title> Uplaod Musique pour le profil <?php echo $_SESSION['NOM']." ".$_SESSION['PRENOM'] ?> </title>
</head>
<body>
<form method="post" action="" enctype="multipart/form-data">
    <div class="row">
        <a href="profil.php">profil</a>
        <a href="accueil.php">accueil</a>
        <fieldset>
            <legend>Uplaod pour <?php echo $_SESSION['NOM']." ".$_SESSION['PRENOM'] ?></legend>
            <label>Nom Musique :
                <input type="text" name="Nom">

            </label>
            <br>
            <br>
            <label>Temps en minutes et secondes :
                <input type="time"  name="Temps" value="mm:ss">
            </label>
            <br>
            <br>
            <label> Original :
                <select name="Original" >
                    <option value="0"> non </option>
                    <option value="1"> oui </option>
                </select>
            </label>
            <br>
            <br>
            <label>Type de la Musique :
                <input type="text" name="Type">
            </label>
            <br>
            <br>
            <label >
                <input type="file" name="Musique" id="Musique">
            </label>
            <br>
            <br>
            <button type="submit">Metre en ligne</button>
        </fieldset>
    </div>
</form>

