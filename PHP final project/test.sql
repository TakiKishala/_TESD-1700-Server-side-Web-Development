-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2026 at 10:50 PM
-- Server version: 5.7.24
-- PHP Version: 8.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `name` varchar(255) NOT NULL,
  `platform` varchar(100) NOT NULL,
  `note` text,
  `user_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`name`, `platform`, `note`, `user_id`, `image`) VALUES
('fifa', 'ps4', 'ff', 1, NULL),
('fum', 'ps4', 'fdsfs', 2, NULL),
('gta', 'xbox', 'gg', 1, NULL),
('gtav', 'ps4', 'f', 2, NULL),
('ss', 'nintendo', 'ffs', 1, NULL),
('star', 'xbox one', 'fdxxfx', 1, NULL),
('tintin', 'xbox', 'fsdfs', 1, NULL),
('gta', 'ps4', 'f', 2, NULL),
('gta', 'ps4', 'i love gaming ', 3, NULL),
('tintin2', 'xbox', 'ff', 3, 'game_69518915de9f27.12882224.jpg'),
('the witcher', 'ps5', 'ff', 3, 'game_695189b5602645.27277931.jpg'),
('test', 'test', 'sssss', 3, 'game_695189cfecfd43.77468299.jpg'),
('tintin2', 'xbox', 's', 3, 'game_695189df2fc809.30470802.jpg'),
('fifa', 'steam', 'I love football and this game is a good football game.', 3, 'game_69574d6e1612d3.00888468.jpg'),
('testt', 'dtest', 'test', 3, 'game_69574dda7e98a1.77026913.webp'),
('test', 'test', 'test', 3, 'game_69574e39420d44.27831480.jpg'),
('test', 'test', 'test', 3, 'game_69574e476c2530.55462531.jpg'),
('test', 'test', 'test', 1, 'game_6957519e2ec8f7.76806893.jpg'),
('tests', 'tsst', 'fsdf', 3, 'game_69575a49668c68.33138274.jpg'),
('testsss', 'tsstsss', 'fsfsdfsfdfsf fsdfsf fsdfsfsdf sdfsfsdf', 4, 'game_69575c5c276796.18129828.jpg'),
('tintin', 'xbox', '3rd game', 4, 'game_695808bc8dfb11.42349896.jpg'),
('test no image', 'ps5', '', 4, NULL),
('test', 'xbox', '', 4, NULL),
('tintin2', 'ps4', '', 4, NULL),
('tintin2', 'ps4', '', 4, NULL),
('tintin2', 'ps4', '', 4, 'game_69580dd5a24661.00824031.jpg'),
('ggd', 'gd', 'gdfg', 4, NULL),
('the witcher', 'ps5', '', 3, NULL),
('test', 'test', 'test', 5, NULL),
('god of war ', 'steam', 'this is game is god of war', 6, 'game_69599409df7f82.68387828.jpg'),
('the legend of zelda tears of the kingdom', 'nintendo switch', 'no comment ', 6, 'game_695995e7a07990.76202701.webp'),
('pubg', 'steam', 'no comment', 6, 'game_69599775b6c6f1.79893855.jpg'),
('zelda', 'ps4', 'I am trying to write as much as I can to test how many characters I need to write yes yes yse yse yse  yse yse yes yes yse', 3, NULL),
('elden ring ', 'steam', 'I had more than 200h on this game ', 6, 'game_695ae61e1eb772.43380768.jpg'),
('the last of us', 'ps3', 'nice game', 6, 'game_695ae63d720df6.05037308.jpg'),
('for honor', 'steam', 'decent game', 6, 'game_695ae662656298.53213930.jpg'),
('gta 5', 'steam', 'best open world', 6, 'game_695ae800966870.65285638.jpg'),
('The witcher 3', 'steam', 'best open world rpg', 6, 'game_695ae82dbc8828.54038055.jpg'),
('Borderlands 2', 'ps3', 'childhood game', 6, 'game_695ae91b5a4156.11456647.jpg'),
('Borderlands 3', 'steam', 'the game is ok.', 6, 'game_695ae93cdda185.94657518.jpg'),
('Call of duty: Black ops', 'pc', 'My fist cod ', 6, 'game_695ae96c853dc4.19764112.jpg'),
('Call of duty: MW3', 'ps3', 'decent game but not better than MW2', 6, 'game_695ae9a6104924.66542547.jpg'),
('Red dead redemption', 'steam', 'nice graphics ', 6, 'game_695ae9d4035f43.52460412.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `PASSWORD`) VALUES
(1, 'jason', 'jason@gmail.com', '$2y$10$efzign53y4JJwVii3yvsDOEyIBRsTvXTBBKAgLHKNKAnQmzFItDne'),
(2, 'taki', 't@gmail.com', '$2y$10$ycE1rp3znuGnl6TTXjC5POb80AUI5aHQtR5O1LdZZU9UAyseNo1cS'),
(3, 'bo', 'bo@gmail.com', '$2y$10$y//jPKXXD3xT5T.XNd0vduANEZrK9sy1yEJ1xCyZ.sO6gQrFmXDJy'),
(4, 'yy', 'yy@gmail.com', '$2y$10$ItI4/h2LusBGtyExjbWQ3.V4SuayUSph7gbHM.zFXT9./8BnMRhKS'),
(5, 'takisco', 'ta@gmail.com', '$2y$10$TAAdns6wzdr6PfXQG3bBHeZ8QJkX8R/.5QC5cTKGJPmgPugKwDkRG'),
(6, 'test', 'test@gmail.com', '$2y$10$sODzRogzLxmH8P64IGaVm.4jLmWGxngrGy0OrX/816D6MfISW.8Z6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD KEY `fk_games_users` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `games`
--
ALTER TABLE `games`
  ADD CONSTRAINT `fk_games_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
