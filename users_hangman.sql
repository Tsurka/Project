-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users_hangman`
--

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `player_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `game_id` int(10) NOT NULL,
  `score` int(10) NOT NULL,
  `role` int(2) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`player_id`, `username`, `password`, `game_id`, `score`, `role`, `date_deleted`) VALUES
(1, 'danail', '123456', 1, 0, 1, NULL),
(2, 'deni', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0, 0, NULL),
(3, 'deni', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0, 0, NULL),
(4, 'denica', '827ccb0eea8a706c4c34a16891f84e7b', 0, 0, 0, NULL),
(5, 'denica2', '6067cf39c5f97d76309d6864d5b6b22a', 0, 0, 0, NULL),
(6, 'dani4', 'ab32c7f5ba7f459e407a17a07ed0020c', 0, 0, 0, NULL),
(7, '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0, 0, NULL),
(8, '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0, 0, NULL),
(9, '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0, 0, NULL),
(10, '', 'd41d8cd98f00b204e9800998ecf8427e', 0, 0, 0, NULL),
(11, 'danail4', '8d70d8ab2768f232ebe874175065ead3', 0, 0, 0, NULL),
(12, 'danail4', '8d70d8ab2768f232ebe874175065ead3', 0, 0, 0, NULL),
(13, 'danail4', '8d70d8ab2768f232ebe874175065ead3', 0, 0, 0, NULL),
(14, 'danail4', '8d70d8ab2768f232ebe874175065ead3', 0, 0, 0, NULL),
(15, 'danail4', '8d70d8ab2768f232ebe874175065ead3', 0, 0, 0, NULL),
(16, 'danail4', '8d70d8ab2768f232ebe874175065ead3', 0, 0, 0, NULL),
(17, 'danail4', '8d70d8ab2768f232ebe874175065ead3', 0, 0, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
