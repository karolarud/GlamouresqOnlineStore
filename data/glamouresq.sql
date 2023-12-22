-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2023 at 12:05 AM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glamouresq`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `admin`
--

CREATE TABLE `admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `admin_Name` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `admin_Name`, `password`) VALUES
(1, 'Joe_Bloggs', 'start'),
(2, 'John_Doe', 'start');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `itemCode` varchar(10) NOT NULL,
  `itemName` varchar(25) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` enum('RINGS','BRACELETS','NECKLACES','EARRINGS') NOT NULL,
  `qtyOnHand` int(11) NOT NULL DEFAULT 0,
  `price` decimal(10,2) UNSIGNED NOT NULL DEFAULT 0.00,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`itemCode`, `itemName`, `description`, `category`, `qtyOnHand`, `price`, `photo`) VALUES
('A001', 'Diamond Ring', 'Oval Diamond 2 Carat White Gold Ring with Side Stones', 'RINGS', 3, 3000.00, 'ring_diamond.jfif'),
('A002', 'Emerald Ring', 'Square Emerald White Gold Ring With Side Stones', 'RINGS', 2, 2000.00, 'ring_emerald.jfif'),
('A003', 'Pearl Ring', 'Asymmetrical Yellow Gold Pearl Ring', 'RINGS', 4, 1000.00, 'ring_pearl.jfif'),
('A004', 'Ruby Ring', 'Square Ruby Yellow Gold Ring With Side Stones', 'RINGS', 2, 2500.00, 'ring_ruby.jfif'),
('A005', 'Sapphire Ring', 'Oval Sapphire White Gold Ring with 2 Side Diamonds', 'RINGS', 3, 2700.00, 'ring_sapphire.jfif'),
('A006', 'Diamond Bracelet', 'White Gold Diamond Tennis Bracelet', 'BRACELETS', 2, 5000.00, 'bracelet_diamond.jfif'),
('A007', 'Emerald Bracelet', 'White Gold Oval Stone Emerald Bracelet', 'BRACELETS', 3, 3900.00, 'bracelet_emerald.jfif'),
('A008', 'Pearl Bracelet', 'Yellow Gold Pearl Bracelet With Side Crystals', 'BRACELETS', 5, 1600.00, 'bracelet_pearl.jfif'),
('A009', 'Ruby Bracelet', 'White Gold Round Stone Ruby Bracelet', 'BRACELETS', 3, 1500.00, 'bracelet_ruby.jfif'),
('A010', 'Sapphire Bracelet', 'White Gold Sapphire Bracelet With Small Crystals', 'BRACELETS', 2, 2500.00, 'bracelet_sapphire.jfif'),
('A011', 'Diamond Necklace', 'White Gold Halo Diamond Necklace With Crystals', 'NECKLACES', 4, 2700.00, 'necklace_diamond.jfif'),
('A012', 'Emerald Necklace', 'White Gold Volume Up Emerald Necklace With Crystals', 'NECKLACES', 3, 3900.00, 'necklace_emerald.jpg'),
('A013', 'Pearl Necklace', 'Volume Up 4 Layer Pearl Necklace', 'NECKLACES', 5, 1200.00, 'necklace_pearl.jfif'),
('A014', 'Ruby Necklace', 'White Gold Volume Up Ruby Necklace With Crystals', 'NECKLACES', 4, 1900.00, 'necklace_ruby.jpg'),
('A015', 'Sapphire Necklace', 'Yellow Gold Sapphire Necklace With Crystals', 'NECKLACES', 5, 1700.00, 'necklace_sapphire.jfif'),
('A016', 'Diamond Earrings', 'Yellow Gold 2 Carat Diamond Stud Earrings', 'EARRINGS', 5, 3800.00, 'earrings_diamond.jfif'),
('A017', 'Emerald Earrings', 'Yellow Gold Emerald Stud Earrings', 'EARRINGS', 4, 300.00, 'earrings_emerald.jfif'),
('A018', 'Pearl Earrings', 'Large White Gold Pearl Stud Earrings', 'EARRINGS', 5, 250.00, 'earrings_pearl.jfif'),
('A019', 'Ruby Earrings', 'Yellow Gold Ruby Stud Earrings', 'EARRINGS', 4, 150.00, 'earrings_ruby.jfif'),
('A020', 'Sapphire Earrings', 'Rose Gold Sapphire Stud Earrings', 'EARRINGS', 3, 120.00, 'earrings_sapphire.jfif');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `postcode` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `surname`, `email`, `username`, `password`, `address1`, `address2`, `city`, `postcode`, `date`) VALUES
(1, 'Karolina', 'Rudnik', 'karolarud@gmail.com', 'karolarud', 'pass', '85 The Pines', '', 'Arklow', 'Y14WT02', '2023-12-22 22:37:11'),
(2, 'Amy', 'Lee', 'amy.lee@gmail.com', 'amyyy', 'pass', '22 Woodbrook', '', 'Bray', 'B22 WT08', '2023-12-12 22:13:55'),
(4, 'Daniel', 'Craig', 'daniel.craiq@gmail.com', 'daniel_c', 'blackcat', '131 Wheatfield', 'Boghall Rd.', 'Bray', 'B78 RT36', '2023-12-12 23:37:46'),
(5, 'Kate', 'Hopkins', 'kate77@gmail.com', 'kate77', 'blackcat', '77 Meadowvale', 'Wexford Road', 'Arklow', 'Y32 BV07', '2023-12-12 23:39:54'),
(6, 'Ann', 'Kelly', 'ann.kelly@gmail.com', 'annie', 'pass', '33 Cre Na Mara', 'Wexford Road', 'Arklow', '5814 LT07', '2023-12-22 19:19:35'),
(7, 'Naomi', 'Roche', 'naomi@gmail.com', 'naomi30', 'blackcat', '45 Woodlands', '', 'Avoca', 'Z87 PO36', '2023-12-13 20:43:28'),
(8, 'Avril', 'Lavelle', 'a.lavelle@gmail.com', 'avril85', 'pass', '90 Knockmore', 'Dublin Road', 'Arklow', 'R33 RD09', '2023-12-13 20:46:48'),
(9, 'Mary', 'Maguire', 'mary.m@gmail.com', 'mary14', 'pass', '63 Avondale', 'Wexford Road', 'Gorey', 'P78 BL36', '2023-12-13 20:53:55'),
(10, 'Alex', 'Sweeney', 'alex@gmail.com', 'alexx', 'start', '147 Woodlands', '', 'Wicklow', 'Y77WW66', '2023-12-19 20:42:04'),
(11, 'Louise', 'Harvey', 'louise@gmail.com', 'louiseee', 'start', '333 Avondale', '', 'Arklow', 'Y88 PT11', '2023-12-22 22:24:21'),
(12, 'Emma', 'Watson', 'emma@gmail.com', 'emmaaa', 'web', '55 Ferrybank', 'Dublin Road', 'Arklow', 'P14 PT72', '2023-12-21 10:24:39'),
(13, 'Angelina', '|Jolie', 'angelina@gmail.com', 'angie', 'web', '11 Avonmore', 'Dublin Road', 'Wicklow', 'P14LT77', '2023-12-21 10:58:33'),
(14, 'Eva', 'Mendez', 'eva@gmail.com', 'eva01', 'web', '123 North Quay', 'Dublin Road', 'Wicklow', 'P77PT99', '2023-12-21 11:04:04'),
(15, 'Hugo', 'Boss', 'hugo@gmail.com', 'hugo01', 'web', '1 Pearson Street', 'Quay Road', 'Wicklow', 'R55SE36', '2023-12-21 11:11:18'),
(16, 'Sandra', 'Carroll', 'sandra@gmail.com', 'sandra77', 'web', '87 Peter Place', '', 'Arklow', 'P04 PP77', '2023-12-21 11:16:31'),
(17, 'Emily', 'Blunt', 'emily@gmail.com', 'emilyyy', 'webdev', '99 Florence Road', '', 'Bray', 'L09YR12', '2023-12-21 11:18:53'),
(18, 'Maggie', 'Gee', 'maggie@gmail.com', 'maggie22', 'webdev', '7 Knockmore', 'Wexford Road', 'Arklow', 'L74 WW45', '2023-12-22 19:28:45'),
(19, 'Lisa', 'Dillon', 'lisa@gmail.com', 'lisa', 'webdev1', '66 Glenhorn', '', 'Bray', 'R33ZX21', '2023-12-21 11:24:51'),
(20, 'Jerry', 'Dixon', 'jerry@gmail.com', 'jerry', 'webdev2', '52 Lower Main Street', '', 'Wicklow', 'T44UJ87', '2023-12-21 11:29:41'),
(21, 'Donald', 'Trump', 'donald@gmail.com', 'donald1', 'webdev3', '66 Vevey Road', '', 'Bray', 'P66LK87', '2023-12-21 11:32:30'),
(22, 'Ciara', 'Kennedy', 'ciara@gmail.com', 'ciara05', 'webdev1', '97 Sommerland', '', 'Bray', 'S22RE14', '2023-12-21 11:34:40'),
(23, 'Clara', 'Wilson', 'clara@gmail.com', 'clara12', 'webdev12', '32 Putland Road', '', 'Bray', 'K87YJ36', '2023-12-21 11:38:24'),
(24, 'Frieda', 'Larson', 'frieda@gmail.com', 'frieda', 'webdev123', '74 Sea Road', '', 'Bray', 'R54WS12', '2023-12-21 11:42:03'),
(25, 'Ronda', 'Doyle', 'ronda@gmail.com', 'ronda', 'webdev01', '73 Merton', '', 'Arklow', 'U87TR43', '2023-12-21 11:44:51'),
(26, 'Gina', 'Kelly', 'gina@gmail.com', 'gina', 'webdev', '1 Ferrybank', '', 'Bray', 'P74YT45', '2023-12-21 11:47:18'),
(27, 'Mandy', 'Moore', 'mandy@gmail.com', 'mandy02', 'webdev5', '5 Hollyfort Road', '', 'Gorey', 'E54YT78', '2023-12-21 11:52:40'),
(28, 'Fabio', 'Perez', 'fabio@hotmail.com', 'fabio55', 'webdev55', '98 Upper Main Street', '', 'Wicklow', 'T65WU30', '2023-12-21 12:02:23'),
(29, 'Karolina', 'Rudnik', 'karolarud@gmail.com', 'karolarud', 'pass', '85 The Pines', '', 'Arklow', 'Y14 WT02', '2023-12-21 12:06:24'),
(30, 'Kathy', 'Perry', 'kathy@gmail.com', 'kathyy', 'cat', '71 Vevey Road', '', 'Wicklow', 'P44WT11', '2023-12-22 13:52:58');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users_products`
--

CREATE TABLE `users_products` (
  `id` int(11) UNSIGNED NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `itemCode` varchar(10) DEFAULT NULL,
  `status` enum('Added to cart','Confirmed') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`itemCode`);
ALTER TABLE `products` ADD FULLTEXT KEY `description` (`description`);
ALTER TABLE `products` ADD FULLTEXT KEY `itemName` (`itemName`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users_products`
--
ALTER TABLE `users_products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users_products`
--
ALTER TABLE `users_products`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
