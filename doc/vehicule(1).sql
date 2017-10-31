-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 31 Octobre 2017 à 14:28
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `vehicule`
--

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `idVehicule` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `image`
--

INSERT INTO `image` (`id`, `idVehicule`, `image`) VALUES
(7, 44, 'voiture.jpg'),
(14, 67, 'monster-821-static-05.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `idVehicule` int(11) NOT NULL,
  `mark` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `registration` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `door` int(11) NOT NULL,
  `wheel` int(11) NOT NULL,
  `fuel` varchar(255) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`idVehicule`, `mark`, `model`, `registration`, `price`, `type`, `door`, `wheel`, `fuel`, `detail`) VALUES
(44, 'ZQRCTRBTÈ1556', 'CRZT\'R-B', 'CZ\'TVEBUÈN', 498, 'Moto', 0, 1, 'Essence', '<p>Xdzfegtry</p>'),
(67, 'Ducati ', 'Monster 821 E4 2018 ', 'DR-895-FR', 11450, 'Voiture', 0, 2, 'Essence', '<div class="resume" style="text-align: center;"><strong> A Rimini, sur la c&ocirc;te adriatique italienne, nous venons d&rsquo;essayer l&rsquo;&eacute;volution du Ducati Monster 821. En jaune, telle la premi&egrave;re M900 de 1992, et pour tous, car son homologation A2 vient d&rsquo;&ecirc;tre confirm&eacute;e, la Monster du milieu enthousiasmante s&rsquo;est r&eacute;v&eacute;l&eacute;e plus d&eacute;vou&eacute;e qu&rsquo;auparavant. Et toujours si sexy ! </strong></div>\r\n<div class="resume" style="text-align: center;"><strong>&lt;script&gt; alert("oui");&lt;/script&gt;</strong></div>\r\n<p><a name="video"></a></p>\r\n<p>Station baln&eacute;aire de la Riviera Adriatica, Rimini est courue pour sa plage interminable aux multiples concessions et ses h&ocirc;tels de charme situ&eacute;s face &agrave; la mer. Une ville qui respire les vacances et la convivialit&eacute; o&ugrave; Ducati a jet&eacute; ses bases pour la pr&eacute;sentation internationale de son Monster 821 2018. Car avec plus de 320 000 d&eacute;licieux petits monstres vendus &agrave; travers le monde depuis la M900 n&eacute;e en 1992 (elle a donc 25 ans aujourd&rsquo;hui !), le constructeur de Borgo Panigale fixe donc cet essai dynamique sous le signe de l&rsquo;amiti&eacute; (suppos&eacute;e !) propre &agrave; la communaut&eacute; des <em>Monsteristi</em>. D&rsquo;ailleurs nos h&ocirc;tes ont &eacute;galement invit&eacute; un amateur du genre plut&ocirc;t inattendu, au guidon de son Monster 797 personnalis&eacute; par ses soins : <strong>Aldo Drudi</strong>, le c&eacute;l&egrave;bre designer italien, &agrave; qui l&rsquo;on doit notamment les d&eacute;corations fac&eacute;tieuses des casques de Valentino Rossi.</p>\r\n<p>Ici, &agrave; quelques kilom&egrave;tres du circuit de Misano, l&rsquo;ambiance motarde est sympathique et d&eacute;tendue. C&rsquo;est agr&eacute;able. N&eacute;anmoins, cela ne fait pas oublier le peu d&rsquo;&eacute;volutions subies par le <a href="http://www.motoservices.com/essai-moto/essai-ducati-monster-821-puissance-sous-controle.htm" target="_blank" rel="noopener">Monster 821 2014</a> pour 2018. Pas de changement moteur, pas d&rsquo;optimisation de la partie cycle (le monobras oscillant ce sera pour une prochaine !), en revanche la &laquo;&nbsp;nouvelle&nbsp;&raquo; 821 adopte le look de la <a href="http://www.motoservices.com/essai-moto/test-essai-ducati-monster-1200-S-2017-encore-plus-mechant.htm" target="_blank" rel="noopener">Monster 1200 2017</a> et quelques nouveaux &eacute;quipements. Une n&eacute;cessit&eacute; finalement : car depuis sa sortie en 2015 ses ventes sont pass&eacute;es de 678 unit&eacute;s &agrave; 276 aujourd&rsquo;hui (&agrave; fin septembre). Il faut dire que depuis le printemps la <a href="http://www.motoservices.com/essai-moto/test-ducati-monster-797-monsterino-le-retour.htm" target="_blank" rel="noopener">Monster 797</a> (428 unit&eacute;s), moins ch&egrave;re et plus accessible, a certainement attir&eacute; vers elle davantage de nouveaux arrivants. En braquant aujourd&rsquo;hui les projecteurs sur sa Monster du milieu am&eacute;lior&eacute;e, Ducati r&eacute;agit. Et il a bien fait&hellip;</p>');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idVehicule_4` (`idVehicule`),
  ADD KEY `idVehicule` (`idVehicule`),
  ADD KEY `idVehicule_2` (`idVehicule`),
  ADD KEY `idVehicule_3` (`idVehicule`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`idVehicule`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `idVehicule` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_ibfk_1` FOREIGN KEY (`idVehicule`) REFERENCES `vehicule` (`idVehicule`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
