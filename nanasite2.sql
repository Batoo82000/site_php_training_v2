-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 19 fév. 2024 à 17:29
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `nanasite2`
--

-- --------------------------------------------------------

--
-- Structure de la table `actualite`
--

CREATE TABLE `actualite` (
  `id_actualite` int(11) NOT NULL,
  `libelle_actualite` varchar(45) NOT NULL,
  `contenu_actualite` longtext NOT NULL,
  `date_publication` date NOT NULL,
  `type_actualite` enum('News','Action','Event') NOT NULL,
  `id_image` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `actualite`
--

INSERT INTO `actualite` (`id_actualite`, `libelle_actualite`, `contenu_actualite`, `date_publication`, `type_actualite`, `id_image`) VALUES
(1, 'Actu 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel vestibulum libero, vel rutrum risus. Nulla placerat nisl imperdiet faucibus malesuada. Sed sollicitudin, ante a laoreet lacinia, magna neque porta felis, at volutpat nisl tellus sit amet lectus. Mauris urna neque, posuere in ultrices quis, rutrum sit amet dolor. In hac habitasse platea dictumst. Aliquam vitae pretium sapien. Nulla facilisi.\r\n\r\nPhasellus non felis ut diam rutrum gravida. In ac tortor at est posuere faucibus ut quis nulla. Nulla aliquet, ante at tincidunt pulvinar, sapien nulla blandit orci, placerat pulvinar nisi massa a magna. Praesent tincidunt auctor rutrum. In eu sem metus. Etiam magna tortor, iaculis nec lorem quis, aliquet condimentum turpis. Nunc quis erat porta, porta nisi sollicitudin, dignissim dolor. Aliquam consectetur dui quis dui commodo, vitae mattis elit euismod. Donec quis scelerisque dui, nec ultrices elit. Phasellus non arcu malesuada, semper risus nec, dapibus turpis. Vivamus non magna maximus, finibus arcu ac, ultricies lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n\r\nInteger malesuada auctor dui. Ut in sollicitudin leo, vitae blandit nisi. Suspendisse nec turpis eget turpis pulvinar mattis. Maecenas sapien quam, ultrices sed enim sed, bibendum consequat tellus. Vestibulum placerat, elit ac imperdiet pharetra, libero justo placerat tortor, eu interdum neque nulla ut est. Aliquam ac mauris congue, dapibus massa sit amet, malesuada purus. Mauris pulvinar enim sit amet ex tincidunt, at faucibus nunc dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis rutrum rhoncus quam facilisis scelerisque. Donec lorem urna, scelerisque et nunc quis, dictum tristique mauris. Praesent id laoreet nibh. Etiam vel diam vulputate, scelerisque sem ac, venenatis nisl. Etiam malesuada nibh magna.\r\n\r\nDonec rutrum egestas rhoncus. In ornare fermentum tellus vel ultrices. Proin sapien lacus, pellentesque quis facilisis ut, fermentum ac tellus. Donec felis enim, ultricies eu tincidunt ac, elementum sit amet nisl. Quisque malesuada, magna ut sollicitudin vestibulum, tellus orci volutpat ipsum, sit amet eleifend mauris mauris vitae purus. Curabitur urna mauris, posuere quis pretium vitae, euismod sit amet lectus. Phasellus id arcu mattis felis imperdiet tempor. Sed placerat ultricies nibh, ac tincidunt sem placerat eget. Morbi convallis felis purus, eu iaculis sapien pellentesque id.\r\n\r\nDonec et sem eu nulla porta eleifend. Fusce ullamcorper libero leo, condimentum ultrices libero dapibus sodales. Integer a condimentum nulla. Mauris efficitur lacus molestie enim convallis cursus. In placerat nibh dictum, pretium ex sit amet, finibus ex. Vestibulum suscipit, libero ut iaculis rhoncus, sapien odio dignissim risus, nec interdum orci justo at dolor. Praesent bibendum leo leo, et elementum ex ullamcorper ac. In pharetra erat ut lobortis elementum.', '2024-02-14', 'Action', 1),
(2, 'Actu 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel vestibulum libero, vel rutrum risus. Nulla placerat nisl imperdiet faucibus malesuada. Sed sollicitudin, ante a laoreet lacinia, magna neque porta felis, at volutpat nisl tellus sit amet lectus. Mauris urna neque, posuere in ultrices quis, rutrum sit amet dolor. In hac habitasse platea dictumst. Aliquam vitae pretium sapien. Nulla facilisi.\r\n\r\nPhasellus non felis ut diam rutrum gravida. In ac tortor at est posuere faucibus ut quis nulla. Nulla aliquet, ante at tincidunt pulvinar, sapien nulla blandit orci, placerat pulvinar nisi massa a magna. Praesent tincidunt auctor rutrum. In eu sem metus. Etiam magna tortor, iaculis nec lorem quis, aliquet condimentum turpis. Nunc quis erat porta, porta nisi sollicitudin, dignissim dolor. Aliquam consectetur dui quis dui commodo, vitae mattis elit euismod. Donec quis scelerisque dui, nec ultrices elit. Phasellus non arcu malesuada, semper risus nec, dapibus turpis. Vivamus non magna maximus, finibus arcu ac, ultricies lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n\r\nInteger malesuada auctor dui. Ut in sollicitudin leo, vitae blandit nisi. Suspendisse nec turpis eget turpis pulvinar mattis. Maecenas sapien quam, ultrices sed enim sed, bibendum consequat tellus. Vestibulum placerat, elit ac imperdiet pharetra, libero justo placerat tortor, eu interdum neque nulla ut est. Aliquam ac mauris congue, dapibus massa sit amet, malesuada purus. Mauris pulvinar enim sit amet ex tincidunt, at faucibus nunc dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis rutrum rhoncus quam facilisis scelerisque. Donec lorem urna, scelerisque et nunc quis, dictum tristique mauris. Praesent id laoreet nibh. Etiam vel diam vulputate, scelerisque sem ac, venenatis nisl. Etiam malesuada nibh magna.\r\n\r\nDonec rutrum egestas rhoncus. In ornare fermentum tellus vel ultrices. Proin sapien lacus, pellentesque quis facilisis ut, fermentum ac tellus. Donec felis enim, ultricies eu tincidunt ac, elementum sit amet nisl. Quisque malesuada, magna ut sollicitudin vestibulum, tellus orci volutpat ipsum, sit amet eleifend mauris mauris vitae purus. Curabitur urna mauris, posuere quis pretium vitae, euismod sit amet lectus. Phasellus id arcu mattis felis imperdiet tempor. Sed placerat ultricies nibh, ac tincidunt sem placerat eget. Morbi convallis felis purus, eu iaculis sapien pellentesque id.\r\n\r\nDonec et sem eu nulla porta eleifend. Fusce ullamcorper libero leo, condimentum ultrices libero dapibus sodales. Integer a condimentum nulla. Mauris efficitur lacus molestie enim convallis cursus. In placerat nibh dictum, pretium ex sit amet, finibus ex. Vestibulum suscipit, libero ut iaculis rhoncus, sapien odio dignissim risus, nec interdum orci justo at dolor. Praesent bibendum leo leo, et elementum ex ullamcorper ac. In pharetra erat ut lobortis elementum.', '2024-02-13', 'Event', 2),
(3, 'Actu 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel vestibulum libero, vel rutrum risus. Nulla placerat nisl imperdiet faucibus malesuada. Sed sollicitudin, ante a laoreet lacinia, magna neque porta felis, at volutpat nisl tellus sit amet lectus. Mauris urna neque, posuere in ultrices quis, rutrum sit amet dolor. In hac habitasse platea dictumst. Aliquam vitae pretium sapien. Nulla facilisi.\r\n\r\nPhasellus non felis ut diam rutrum gravida. In ac tortor at est posuere faucibus ut quis nulla. Nulla aliquet, ante at tincidunt pulvinar, sapien nulla blandit orci, placerat pulvinar nisi massa a magna. Praesent tincidunt auctor rutrum. In eu sem metus. Etiam magna tortor, iaculis nec lorem quis, aliquet condimentum turpis. Nunc quis erat porta, porta nisi sollicitudin, dignissim dolor. Aliquam consectetur dui quis dui commodo, vitae mattis elit euismod. Donec quis scelerisque dui, nec ultrices elit. Phasellus non arcu malesuada, semper risus nec, dapibus turpis. Vivamus non magna maximus, finibus arcu ac, ultricies lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n\r\nInteger malesuada auctor dui. Ut in sollicitudin leo, vitae blandit nisi. Suspendisse nec turpis eget turpis pulvinar mattis. Maecenas sapien quam, ultrices sed enim sed, bibendum consequat tellus. Vestibulum placerat, elit ac imperdiet pharetra, libero justo placerat tortor, eu interdum neque nulla ut est. Aliquam ac mauris congue, dapibus massa sit amet, malesuada purus. Mauris pulvinar enim sit amet ex tincidunt, at faucibus nunc dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis rutrum rhoncus quam facilisis scelerisque. Donec lorem urna, scelerisque et nunc quis, dictum tristique mauris. Praesent id laoreet nibh. Etiam vel diam vulputate, scelerisque sem ac, venenatis nisl. Etiam malesuada nibh magna.\r\n\r\nDonec rutrum egestas rhoncus. In ornare fermentum tellus vel ultrices. Proin sapien lacus, pellentesque quis facilisis ut, fermentum ac tellus. Donec felis enim, ultricies eu tincidunt ac, elementum sit amet nisl. Quisque malesuada, magna ut sollicitudin vestibulum, tellus orci volutpat ipsum, sit amet eleifend mauris mauris vitae purus. Curabitur urna mauris, posuere quis pretium vitae, euismod sit amet lectus. Phasellus id arcu mattis felis imperdiet tempor. Sed placerat ultricies nibh, ac tincidunt sem placerat eget. Morbi convallis felis purus, eu iaculis sapien pellentesque id.\r\n\r\nDonec et sem eu nulla porta eleifend. Fusce ullamcorper libero leo, condimentum ultrices libero dapibus sodales. Integer a condimentum nulla. Mauris efficitur lacus molestie enim convallis cursus. In placerat nibh dictum, pretium ex sit amet, finibus ex. Vestibulum suscipit, libero ut iaculis rhoncus, sapien odio dignissim risus, nec interdum orci justo at dolor. Praesent bibendum leo leo, et elementum ex ullamcorper ac. In pharetra erat ut lobortis elementum.', '2024-02-05', 'News', 3),
(4, 'Actu 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vel vestibulum libero, vel rutrum risus. Nulla placerat nisl imperdiet faucibus malesuada. Sed sollicitudin, ante a laoreet lacinia, magna neque porta felis, at volutpat nisl tellus sit amet lectus. Mauris urna neque, posuere in ultrices quis, rutrum sit amet dolor. In hac habitasse platea dictumst. Aliquam vitae pretium sapien. Nulla facilisi.\r\n\r\nPhasellus non felis ut diam rutrum gravida. In ac tortor at est posuere faucibus ut quis nulla. Nulla aliquet, ante at tincidunt pulvinar, sapien nulla blandit orci, placerat pulvinar nisi massa a magna. Praesent tincidunt auctor rutrum. In eu sem metus. Etiam magna tortor, iaculis nec lorem quis, aliquet condimentum turpis. Nunc quis erat porta, porta nisi sollicitudin, dignissim dolor. Aliquam consectetur dui quis dui commodo, vitae mattis elit euismod. Donec quis scelerisque dui, nec ultrices elit. Phasellus non arcu malesuada, semper risus nec, dapibus turpis. Vivamus non magna maximus, finibus arcu ac, ultricies lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.\r\n\r\nInteger malesuada auctor dui. Ut in sollicitudin leo, vitae blandit nisi. Suspendisse nec turpis eget turpis pulvinar mattis. Maecenas sapien quam, ultrices sed enim sed, bibendum consequat tellus. Vestibulum placerat, elit ac imperdiet pharetra, libero justo placerat tortor, eu interdum neque nulla ut est. Aliquam ac mauris congue, dapibus massa sit amet, malesuada purus. Mauris pulvinar enim sit amet ex tincidunt, at faucibus nunc dictum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis rutrum rhoncus quam facilisis scelerisque. Donec lorem urna, scelerisque et nunc quis, dictum tristique mauris. Praesent id laoreet nibh. Etiam vel diam vulputate, scelerisque sem ac, venenatis nisl. Etiam malesuada nibh magna.\r\n\r\nDonec rutrum egestas rhoncus. In ornare fermentum tellus vel ultrices. Proin sapien lacus, pellentesque quis facilisis ut, fermentum ac tellus. Donec felis enim, ultricies eu tincidunt ac, elementum sit amet nisl. Quisque malesuada, magna ut sollicitudin vestibulum, tellus orci volutpat ipsum, sit amet eleifend mauris mauris vitae purus. Curabitur urna mauris, posuere quis pretium vitae, euismod sit amet lectus. Phasellus id arcu mattis felis imperdiet tempor. Sed placerat ultricies nibh, ac tincidunt sem placerat eget. Morbi convallis felis purus, eu iaculis sapien pellentesque id.\r\n\r\nDonec et sem eu nulla porta eleifend. Fusce ullamcorper libero leo, condimentum ultrices libero dapibus sodales. Integer a condimentum nulla. Mauris efficitur lacus molestie enim convallis cursus. In placerat nibh dictum, pretium ex sit amet, finibus ex. Vestibulum suscipit, libero ut iaculis rhoncus, sapien odio dignissim risus, nec interdum orci justo at dolor. Praesent bibendum leo leo, et elementum ex ullamcorper ac. In pharetra erat ut lobortis elementum.', '2024-02-01', 'News', 4);

-- --------------------------------------------------------

--
-- Structure de la table `animal`
--

CREATE TABLE `animal` (
  `id_animal` int(11) NOT NULL,
  `nom_animal` varchar(45) NOT NULL,
  `type_animal` enum('chien','chat') NOT NULL,
  `puce` int(11) DEFAULT NULL,
  `sexe` tinyint(4) NOT NULL,
  `date_naissance_animal` date NOT NULL DEFAULT current_timestamp(),
  `date_adoption_animal` date DEFAULT NULL,
  `ami_chien` enum('oui','non','N/A') DEFAULT NULL,
  `ami_chat` enum('oui','non','N/A') DEFAULT NULL,
  `ami_enfant` enum('oui','non','N/A') DEFAULT NULL,
  `description_animal` longtext DEFAULT NULL,
  `adoption_description_animal` longtext DEFAULT NULL,
  `engagement_description_animal` longtext DEFAULT NULL,
  `localisation_description_animal` longtext DEFAULT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `animal`
--

INSERT INTO `animal` (`id_animal`, `nom_animal`, `type_animal`, `puce`, `sexe`, `date_naissance_animal`, `date_adoption_animal`, `ami_chien`, `ami_chat`, `ami_enfant`, `description_animal`, `adoption_description_animal`, `engagement_description_animal`, `localisation_description_animal`, `id_status`) VALUES
(1, 'Framboise', 'chat', NULL, 0, '2024-02-05', NULL, 'oui', 'non', 'N/A', 'Framboise est une super chatte !', 'Framboise est une super chatte ! 2', 'Framboise est une super chatte ! 3', 'Framboise est une super chatte ! 4', 3),
(3, 'Mona', 'chat', NULL, 0, '2024-02-05', NULL, 'non', 'N/A', 'oui', 'La gentille chatte Mona', NULL, NULL, NULL, 1),
(6, 'Fonzie', 'chien', NULL, 1, '2024-02-05', NULL, 'oui', 'non', 'oui', 'Le super toutou Fonzie', NULL, NULL, NULL, 1),
(9, 'Odin', 'chat', NULL, 1, '2024-02-05', NULL, 'N/A', 'oui', 'non', 'Odin le chat aveugle comme Daredevil !', NULL, NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Structure de la table `associe`
--

CREATE TABLE `associe` (
  `id_actualite` int(11) NOT NULL,
  `id_animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `caractere`
--

CREATE TABLE `caractere` (
  `id_caractere` int(11) NOT NULL,
  `libelle_caractere_m` varchar(45) NOT NULL,
  `libelle_caractere_f` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `caractere`
--

INSERT INTO `caractere` (`id_caractere`, `libelle_caractere_m`, `libelle_caractere_f`) VALUES
(1, 'Calme', 'Calme'),
(2, 'Doux', 'Douce'),
(3, 'Joueur', 'Joueuse'),
(4, 'Peureux', 'Peureuse'),
(9, 'Câlin', 'Câline');

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE `contient` (
  `id_image` int(11) NOT NULL,
  `id_animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `contient`
--

INSERT INTO `contient` (`id_image`, `id_animal`) VALUES
(1, 1),
(1, 3),
(2, 3),
(3, 3),
(3, 9),
(4, 6);

-- --------------------------------------------------------

--
-- Structure de la table `dispose`
--

CREATE TABLE `dispose` (
  `id_caractere` int(11) NOT NULL,
  `id_animal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `dispose`
--

INSERT INTO `dispose` (`id_caractere`, `id_animal`) VALUES
(1, 1),
(1, 6),
(1, 9),
(2, 3),
(2, 6),
(2, 9),
(3, 1),
(3, 3),
(4, 1),
(4, 3),
(9, 6),
(9, 9);

-- --------------------------------------------------------

--
-- Structure de la table `image`
--

CREATE TABLE `image` (
  `id_image` int(11) NOT NULL,
  `libelle_image` varchar(45) NOT NULL,
  `url_image` varchar(100) NOT NULL,
  `description_image` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `image`
--

INSERT INTO `image` (`id_image`, `libelle_image`, `url_image`, `description_image`) VALUES
(1, 'Photo 1 de Framboise', 'animaux/chat/framboise/framboise.jpg', 'Une belle photo de Framboise'),
(2, 'Photo 1 de Mona', 'animaux/chat/mona/mona.jpg', 'Une belle photo de Mona'),
(3, 'Photo 1 de Odin', 'animaux/chat/odin/odin.jpg', 'Une belle photo de Odin'),
(4, 'Photo 1 de Fonzie', 'animaux/chien/fonzie/fonzie.jpg', 'Une belle photo de Fonzie');

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `libelle_status` varchar(45) NOT NULL,
  `description_status` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`id_status`, `libelle_status`, `description_status`) VALUES
(1, 'A l\'adoption', NULL),
(3, 'Adopté', NULL),
(5, 'FALD', 'Famille d\'accueil longue durée'),
(7, 'A rejoind les étoiles', 'Animal mort');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD PRIMARY KEY (`id_actualite`),
  ADD KEY `fk_Actualite_Image1` (`id_image`);

--
-- Index pour la table `animal`
--
ALTER TABLE `animal`
  ADD PRIMARY KEY (`id_animal`),
  ADD KEY `fk_Animal_Status` (`id_status`);

--
-- Index pour la table `associe`
--
ALTER TABLE `associe`
  ADD PRIMARY KEY (`id_actualite`,`id_animal`),
  ADD KEY `fk_Actualite_has_Animal_Animal1` (`id_animal`);

--
-- Index pour la table `caractere`
--
ALTER TABLE `caractere`
  ADD PRIMARY KEY (`id_caractere`);

--
-- Index pour la table `contient`
--
ALTER TABLE `contient`
  ADD PRIMARY KEY (`id_image`,`id_animal`),
  ADD KEY `fk_Image_has_Animal_Animal1` (`id_animal`);

--
-- Index pour la table `dispose`
--
ALTER TABLE `dispose`
  ADD PRIMARY KEY (`id_caractere`,`id_animal`),
  ADD KEY `fk_Caractere_has_Animal_Animal1` (`id_animal`);

--
-- Index pour la table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id_image`);

--
-- Index pour la table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `actualite`
--
ALTER TABLE `actualite`
  MODIFY `id_actualite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `animal`
--
ALTER TABLE `animal`
  MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `caractere`
--
ALTER TABLE `caractere`
  MODIFY `id_caractere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `dispose`
--
ALTER TABLE `dispose`
  MODIFY `id_caractere` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `image`
--
ALTER TABLE `image`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `actualite`
--
ALTER TABLE `actualite`
  ADD CONSTRAINT `fk_Actualite_Image1` FOREIGN KEY (`id_image`) REFERENCES `image` (`id_image`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `fk_Animal_Status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id_status`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `associe`
--
ALTER TABLE `associe`
  ADD CONSTRAINT `fk_Actualite_has_Animal_Actualite1` FOREIGN KEY (`id_actualite`) REFERENCES `actualite` (`id_actualite`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Actualite_has_Animal_Animal1` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `fk_Image_has_Animal_Animal1` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Image_has_Animal_Image1` FOREIGN KEY (`id_image`) REFERENCES `image` (`id_image`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `dispose`
--
ALTER TABLE `dispose`
  ADD CONSTRAINT `fk_Caractere_has_Animal_Animal1` FOREIGN KEY (`id_animal`) REFERENCES `animal` (`id_animal`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Caractere_has_Animal_Caractere1` FOREIGN KEY (`id_caractere`) REFERENCES `caractere` (`id_caractere`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;