-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 31 mai 2021 à 13:28
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `museandsi`
--

--
-- Déchargement des données de la table `musique`
--

INSERT INTO `musique` (`ID_Musique`, `NOM_Musique`, `TEMPS_Musique`, `ORIGINAL_Musique`, `CHEMIN_Musique`, `ID_Post`, `CODE_Type_Musique`) VALUES
(1, 'test', '00:01:30', 1, 'C:/wamp64/www/MuseAndSi/site final/musique/test.mp3', 1, 2),
(2, 'test', '00:01:30', 1, 'C:/wamp64/www/MuseAndSi/site final/musique/test.mp3', 2, 2);

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`ID_Post`, `CONTENU_POST`, `ID_User`, `ID_Groupe`, `date_post`) VALUES
(1, 'retour a l\'ère jurassic', 1, NULL, NULL),
(2, 'retour a l\'ère jurassic', 2, NULL, NULL);

--
-- Déchargement des données de la table `type_musique`
--

INSERT INTO `type_musique` (`Code_Type_Musique`, `Nom_Type_Musique`) VALUES
(1, 'jazz'),
(2, 'rock');

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`ID_User`, `EMAIL`, `MDP`, `NOM_User`, `PRENOM_User`, `AGE_User`, `ROLE_User`, `Photo_Profil`) VALUES
(1, 'julescrecre@gmail.com', '3961b48c3ae84ae579b329d73298f8d18687df2a8f5a49fcd8270ba1bc9a62c3', 'CREVOISIER', 'raptorrouge', 24, 'Musicien', NULL),
(2, 'luciencrevoisier@gmail.com', '824325a2216c44f3c92e028c7b1a2f1e62504f184ce123da059eb0aad7fac010', 'Crevoisier', 'Lucien', 29, 'Auditeur', NULL),
(3, 'luciencrevoisi2er@gmail.com', '824325a2216c44f3c92e028c7b1a2f1e62504f184ce123da059eb0aad7fac010', 'Crevoisier', 'Lucien', 29, 'Auditeur', NULL),
(4, 'luciencrevoisi3er@gmail.com', '824325a2216c44f3c92e028c7b1a2f1e62504f184ce123da059eb0aad7fac010', 'Crevoisier', 'Lucien', 29, 'Auditeur', NULL),
(5, 'luciencrevoisi4er@gmail.com', '824325a2216c44f3c92e028c7b1a2f1e62504f184ce123da059eb0aad7fac010', 'Crevoisier', 'Lucien', 29, 'Auditeur', NULL),
(6, 'luciencrevoisi46er@gmail.com', '824325a2216c44f3c92e028c7b1a2f1e62504f184ce123da059eb0aad7fac010', 'Crevoisier', 'Lucien', 29, 'Auditeur', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
