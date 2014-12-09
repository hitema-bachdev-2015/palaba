-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 09 Décembre 2014 à 10:00
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `todolist`
--

--
-- Vider la table avant d'insérer `category`
--

TRUNCATE TABLE `category`;
--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`, `position`) VALUES
(1, 'Maison', 1),
(2, 'Travail', 2),
(3, 'Noël', 3);

--
-- Vider la table avant d'insérer `task`
--

TRUNCATE TABLE `task`;
--
-- Contenu de la table `task`
--

INSERT INTO `task` (`id`, `id_category`, `content`, `date_end`, `end_type`, `status`) VALUES
(1, 3, 'Acheter une montre', '2014-12-24 00:00:00', '1', 0),
(2, 1, 'Acheter une maison', '2014-12-16 00:00:00', '2', 0),
(3, 2, 'Conclure le dossier X54', '2014-12-23 00:00:00', '0', 1),
(4, 1, 'Baguette', '2014-12-29 00:00:00', '0', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
