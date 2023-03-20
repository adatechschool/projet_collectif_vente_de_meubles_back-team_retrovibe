-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 16, 2023 at 01:10 AM
-- Server version: 8.0.32-0ubuntu0.22.04.2
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anciens_meubles`
--

-- --------------------------------------------------------

--
-- Table structure for table `commandes`
--

CREATE TABLE `commandes` (
  `id` int NOT NULL,
  `utilisateurs_id` int NOT NULL,
  `meubles_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commandes`
--

INSERT INTO `commandes` (`id`, `utilisateurs_id`, `meubles_id`, `created_at`, `updated_at`) VALUES
(1, 4, 2, '2023-03-15 23:02:50', '2023-03-15 23:02:50'),
(2, 1, 1, '2023-03-15 23:05:11', '2023-03-15 23:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `meubles`
--

CREATE TABLE `meubles` (
  `id` int NOT NULL,
  `nom` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prix` decimal(10,2) DEFAULT NULL,
  `couleur_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `couleur_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `matiere_1` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `matiere_2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `longueur` float DEFAULT NULL,
  `largeur` float DEFAULT NULL,
  `hauteur` float DEFAULT NULL,
  `photo_1` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo_2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo_3` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo_4` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `photo_5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `statut` varchar(20) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `meubles`
--

INSERT INTO `meubles` (`id`, `nom`, `type`, `prix`, `couleur_1`, `couleur_2`, `matiere_1`, `matiere_2`, `longueur`, `largeur`, `hauteur`, `photo_1`, `photo_2`, `photo_3`, `photo_4`, `photo_5`, `statut`, `created_at`, `updated_at`) VALUES
(1, 'chaise', 'bois', '15.00', 'rouge', 'bleu', 'Plastique', '', 40, 45, 100, NULL, NULL, NULL, NULL, NULL, 'livré', '2023-03-15 23:41:35', '2023-03-15 23:41:35'),
(2, 'penderie', 'fer', '50.00', 'noir', 'blanc', 'metal', 'plastique', 120, 80, 100, NULL, NULL, NULL, NULL, NULL, 'vendu', '2023-03-15 23:41:35', '2023-03-15 23:41:35'),
(3, 'bureau', 'marbre', '300.00', 'gris', NULL, 'marbre', NULL, 200, 80, 80, NULL, NULL, NULL, NULL, NULL, 'cours de livraison', '2023-03-15 23:41:35', '2023-03-15 23:41:35'),
(4, 'lampe', 'ancienne', '30.00', 'blanc', 'vert', 'plastique', NULL, NULL, NULL, 170, NULL, NULL, NULL, NULL, NULL, 'en vente', '2023-03-15 23:41:35', '2023-03-15 23:41:35'),
(5, 'lit', 'gigogne', '600.00', 'marron', 'beige', 'bois', NULL, 200, 100, 50, NULL, NULL, NULL, NULL, NULL, 'vendu', '2023-03-15 23:41:35', '2023-03-15 23:41:35');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------
 
--
-- Table structure for table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `nom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `prenom` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `mot_de_passe` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telephone` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `adresse` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `code_postal` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `ville` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom`, `prenom`, `email`, `mot_de_passe`, `telephone`, `adresse`, `code_postal`, `ville`, `created_at`, `updated_at`) VALUES
(1, 'YI', 'Léon', 'leonyi@ada.com', '$2y$10$5gvmyt5teD/pUyTcF/RSk.5BfjzKu6jYnHItt5L8fGg2HiaqNK6qC', '0146058263', '10 rue du General Leclerc', '75010', 'Paris', '2023-03-15 23:41:35', '2023-03-15 23:41:35'),
(2, 'Dambreville', 'Sandy', 'sandydambreville@ada.com', '$2y$10$5gvmyt5teD/pUyTcF/RSk.5BfjzKu6jYnHItt5L8fGg2HiaqNK6qC', '0146523466', '24 rue de la Paix', '75010', 'Paris', '2023-03-15 23:41:35', '2023-03-15 23:41:35'),
(3, 'Kante', 'Mohamed', 'mohamedkante@ada.com', '$2y$10$5gvmyt5teD/pUyTcF/RSk.5BfjzKu6jYnHItt5L8fGg2HiaqNK6qC', '0142346873', '12 rue Saint Emilion', '75010', 'Paris', '2023-03-15 23:41:35', '2023-03-15 23:41:35'),
(4, 'Merlaud', 'Pierre', 'pierremerlaud@ada.com', '$2y$10$5gvmyt5teD/pUyTcF/RSk.5BfjzKu6jYnHItt5L8fGg2HiaqNK6qC', '0156439876', '234 rue du Mail', '75010', 'Paris', '2023-03-15 23:41:35', '2023-03-15 23:41:35'),
(5, 'Zynger', 'Jeremy', 'jeremyzynger@ada.com', '$2y$10$5gvmyt5teD/pUyTcF/RSk.5BfjzKu6jYnHItt5L8fGg2HiaqNK6qC', '0145956784', '10 boulevard Jean Jaures', '75010', 'Paris', '2023-03-15 23:41:35', '2023-03-15 23:41:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commandes`
--
ALTER TABLE `commandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateurs_id` (`utilisateurs_id`),
  ADD KEY `meubles_id` (`meubles_id`);

--
-- Indexes for table `meubles`
--
ALTER TABLE `meubles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commandes`
--
ALTER TABLE `commandes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `meubles`
--
ALTER TABLE `meubles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `commandes_ibfk_1` FOREIGN KEY (`utilisateurs_id`) REFERENCES `utilisateurs` (`id`),
  ADD CONSTRAINT `commandes_ibfk_2` FOREIGN KEY (`meubles_id`) REFERENCES `meubles` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
