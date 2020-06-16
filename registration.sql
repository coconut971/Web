-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 juin 2020 à 11:24
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `registration`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `id_annonce` int(3) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `prix` varchar(10) NOT NULL,
  `url_img1` varchar(500) DEFAULT NULL,
  `url_img2` varchar(500) DEFAULT NULL,
  `url_img3` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`id_annonce`, `titre`, `descriptions`, `prix`, `url_img1`, `url_img2`, `url_img3`) VALUES
(1, 'Canard en plastique noir', 'Bonjour, je me sépare de mon canard en plastique noir cela fait 3 ans qu il fait partie de mon quotidiens j espère que vous en prendrez grand soins', '55', 'https://m.media-amazon.com/images/I/41ChByq47WL._AC_SS350_.jpg', '', ''),
(2, 'Canard en plastique rouge ', 'Bonjour, je vend mon canard en plastique rouge, c était mon fidèle compagnon depuis maintenant 6 ans je doit m en séparer car je viens d acquérir un canard argenté et les deux ne peuvent pas cohabité. Pour plus d informations vous pouvez me contacter via ', '92', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTLOoxLUy2KaIcjDliyQpLWSBD7zTpk-B3ceZ7JBwTg44H3Oi6PLVUkwaez6zkV1wtSwsJgpOnBpA&usqp=CAc', 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEBAQEw8SEhAQDw8PEBAPEA8PDw8QFREWFhURFRMYHSggGBolGxUVITEhJSkrLi4uFx8/ODMtNygtLisBCgoKDg0OGhAQGi0dHx0rLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLi0tLS0tLS0tLS0tLS0tLS0tLSstLf/AABEIAOEA4QMBEQACEQEDEQH/xAAbAAEAAwADAQAAAAAAAAAAAAAAAwQFAQIGB//EADoQAAICAQIEBAQCBgsBAAAAAAABAgMRBAUSITFRBkFhcROBkaFSsRQiIzNCkhUyQ1NicoKiweHxB//EABoBAQADAQEBAAAAAAAAAAAAAAACAwQBBQb/xAAsEQEAAgIBBAEDAwMFAAAAAAAAAQIDEQQSITFBBRMiUTJhcRRC8BUjM4GR/9oADAMBAAIRAxEAPwD7iAAAAAAAA', ''),
(6, 'Canard en plastique bleu', 'Salut tout le monde, j ai le regret de devoir me séparer de mon fidèle compagnon, il m a accompagné pendant toutes mes vacances à la mer. Il se camoufle à la perfection dans l eau.', '23', 'https://i.pinimg.com/564x/48/61/09/4861095ef36cd1fc27138c82bd1c43af.jpg', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(5) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `author` varchar(50) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='La table qui va contenir tous les messages voyons !';

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`id`, `author`, `content`, `created_at`) VALUES
(72, 'Clement', 'Le canard bleu me fait de l\'oeil, pouvons nous se rencontrer dans Paris comme ca je pourrais le voir de plus près?', '2020-06-16 11:13:28'),
(71, 'Franck', 'Oui bien sur quel canard vous interesse?', '2020-06-12 17:05:17'),
(70, 'Clement', 'Bonjour Franck, je souhaiterais vous acheter votre canard que vous vendez est-t-il possible de convenir d\'un rendez- vous?', '2020-06-12 17:04:38'),
(73, 'Franck ', 'Biens sûr, demain 14h00 place de l\'étoile cela vous convient-il?', '2020-06-16 11:15:01'),
(74, 'Clement', 'Oui très bien à demain alors merci', '2020-06-16 11:15:20');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mdp` varchar(100) NOT NULL,
  `tel` varchar(100) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT 'default.png',
  `inscription` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `mdp`, `tel`, `adresse`, `avatar`, `inscription`) VALUES
(1, 'Clément', 'clement.dufourlamartinie@ynov.com', '03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4', '0770015105', '38 rue de fontenay 94300 Vincennes', 'default.png', '2020-06-02 14:20:49'),
(4, 'admin', 'admin@gmail.com', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '0613270658', '27 bis rue d estienne d orves 94160 Fontenay Sous bois', 'default.png', '2020-06-02 14:20:49'),
(5, 'coconut971', 'franck.ramassamy971@gmail.com', 'cb1ad2119d8fafb69566510ee712661f9f14b83385006ef92aec47f523a38358', '0761551556', 'chez naruto', 'default.png', '2020-06-10 14:52:17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`id_annonce`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `id_annonce` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
