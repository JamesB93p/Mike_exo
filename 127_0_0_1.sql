-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 06 Juin 2017 à 09:17
-- Version du serveur :  10.1.13-MariaDB
-- Version de PHP :  5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetapp`
--
CREATE DATABASE IF NOT EXISTS `projetapp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projetapp`;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `slug` varchar(20) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type` enum('category','trend') NOT NULL DEFAULT 'category',
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `image`, `type`, `date_create`) VALUES
(1, 'test', 'test', 'test', 'category', '2017-05-30 15:14:19'),
(2, 'politics', 'politics', 'test.jpg', 'category', '2017-05-30 15:17:21'),
(3, 'Mike', 'Mike', 'Mike', 'trend', '2017-05-30 16:47:36');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(5) NOT NULL,
  `title` mediumtext NOT NULL,
  `picture` varchar(255) NOT NULL,
  `shares` int(5) NOT NULL DEFAULT '0',
  `comments` int(5) NOT NULL DEFAULT '0',
  `likes` int(5) NOT NULL DEFAULT '0',
  `liked` tinyint(1) NOT NULL DEFAULT '1',
  `description` longtext NOT NULL,
  `date_create` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `category_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `posts`
--

INSERT INTO `posts` (`id`, `title`, `picture`, `shares`, `comments`, `likes`, `liked`, `description`, `date_create`, `category_id`) VALUES
(1, 'Mike22', 'Mike22', 0, 0, 0, 1, 'Mike22', '2017-05-31 10:32:59', 3),
(2, 'defaulujkt text', 'ukyf', 0, 0, 0, 1, 'default text', '2017-05-31 16:19:58', 2),
(3, 'defaulujkt text', 'ukyf', 0, 0, 0, 1, 'default text', '2017-05-31 16:20:54', 2),
(4, 'default text', 'u-sx', 0, 0, 0, 1, 'default text', '2017-06-01 10:18:22', 1),
(5, 'default textgrsegfzerg', 'regergv', 0, 0, 0, 1, 'default text', '2017-06-01 14:07:27', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `fk_posts_has_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;