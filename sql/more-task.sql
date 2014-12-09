-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 09 Décembre 2014 à 11:50
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

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
-- Vider la table avant d'insérer `task`
--

TRUNCATE TABLE `task`;
--
-- Contenu de la table `task`
--

INSERT INTO `task` (`id`, `id_category`, `content`, `date_end`, `end_type`, `status`) VALUES
(1, 3, 'Acheter une montre', '2014-12-08 11:27:53', '1', 0),
(2, 1, 'Acheter une maison', '2014-12-08 11:27:53', '2', 0),
(3, 2, 'Conclure le dossier X54', '2014-12-08 11:29:05', '0', 1),
(4, 1, 'Baguette', '2014-12-08 11:29:05', '0', 0),
(5, 2, 'Acheter une dinde\r\n', '2014-12-25 00:00:00', '1', 0),
(6, 2, 'Acheter a boire', '2014-12-25 00:00:00', '1', 0),
(7, 1, 'Se laver', '2014-12-11 00:00:00', '1', 0),
(10, 2, 'Faire ses besoins', '2014-12-30 00:00:00', '1', 0),
(11, 1, 'Jouer', '2014-12-29 00:00:00', '1', 0),
(12, 2, 'Chier', '2015-02-18 00:00:00', '1', 0),
(13, 1, 'Vendre des légumes', '2014-12-09 11:49:30', '1', 0),
(14, 3, 'Chier', '2014-12-29 00:00:00', '1', 0),
(15, 3, 'Vendre son corps', '2014-12-29 00:00:00', '1', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
