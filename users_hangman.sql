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
-- Структура на таблица `phrases`
--

CREATE TABLE `phrases` (
  `phrase_id` int(10) NOT NULL,
  `phrase` varchar(250) NOT NULL,
  `category_id` int(10) NOT NULL,
  `phrases_eng` varchar(250) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `phrases`
--

INSERT INTO `phrases` (`phrase_id`, `phrase`, `category_id`, `phrases_eng`, `date_deleted`) VALUES
(1, 'Гватемала', 1, 'Guatemala', NULL),
(2, 'Сейнт Лусия', 1, 'Saint Lucia', NULL),
(3, 'Кюрасао', 1, 'Curacao', NULL),
(4, 'Мианмар', 1, 'Myanmar', NULL),
(5, 'Туркменистан', 1, 'Turkmenistan', NULL),
(6, 'Узбекистан', 1, 'Uzbekistan', NULL),
(7, 'Ботсвана', 1, 'Botswana', NULL),
(8, 'Занзибар', 1, 'Zanzibar', NULL),
(9, 'Микронезия', 1, 'Micronesia', NULL),
(10, 'Лихтенщайн', 1, 'Liechtenstein', NULL),
(11, 'Сао Пауло', 2, 'Sаo Paulo', NULL),
(12, 'Калкута', 2, 'Kolkata', NULL),
(13, 'Буенос Айрес', 2, 'Buenos Aires', NULL),
(14, 'Карачи', 2, 'Karachi', NULL),
(15, 'Манила', 2, 'Manila', NULL),
(16, 'Истанбул', 2, 'Istanbul', NULL),
(17, 'Джакарта', 2, 'Jakarta', NULL),
(18, 'Тангеранг', 2, 'Tangerang', NULL),
(19, 'Фаридабад', 2, 'Faridabad', NULL),
(20, 'Гуанджоу', 2, 'Guаngzhоu', NULL),
(21, 'Нарвал', 3, 'Monodon monoceros', NULL),
(22, 'Молох', 3, 'Moloch horridus', NULL),
(23, 'Глакус', 3, 'Glakus', NULL),
(24, 'Тенрек', 3, 'Tenrek', NULL),
(25, 'Тамарин', 3, 'Tamarin', NULL),
(26, 'Китоглава чапла', 3, 'Balaenicipitidae', NULL),
(27, 'Ашолотъл', 3, 'Axolotl', NULL),
(28, 'Джуджевидна Мармозетка', 3, 'Pygmy marmoset', NULL),
(29, 'Рак йети', 3, 'Yeti crab', NULL),
(30, 'Алпака', 3, 'Alpaca', NULL),
(31, 'Робин Уилямс', 4, 'Robin Williams', NULL),
(32, 'Катрин Мидълтън', 4, 'Catherine Middleton', NULL),
(33, 'Кимбърли Кардашиян', 4, 'Kimberly Kardashian', NULL),
(34, 'Скарлет Йохансон', 4, 'Scarlett Johansson', NULL),
(35, 'Нийл деГрас Тайсън', 4, 'Neil deGrasse Tyson', NULL),
(36, 'Джейсън Стейтъм', 4, 'Jason Statham', NULL),
(37, 'Джони Деп', 4, 'Johny Depp', NULL),
(38, 'Маршъл Брус', 4, 'Marshall Bruce', NULL),
(39, 'Дарън Хейс', 4, 'Darren Hayes', NULL),
(40, 'Анджелина Джоли', 4, 'Angelina Jolie', NULL),
(41, 'Канадски жерав', 3, 'Sandhill crane', NULL),
(42, 'Есетра', 3, 'Sturgeon', NULL),
(43, 'Китайски гигантски саламандър', 3, 'The Chinese giant salamander', NULL),
(44, 'Акула гоблин', 3, 'Goblin shark', NULL),
(45, 'Меченосец', 3, 'Horseshoe crab', NULL),
(46, 'Латимерия', 3, 'African coelacanth', NULL),
(47, 'Наутилус', 3, 'Nautilus', NULL),
(48, 'Мисисипски зарган', 3, 'Alligator Gar', NULL),
(68, 'Адмирал Акбар', 5, 'Admiral Ackbar', NULL),
(69, 'Дарт Сидиус', 5, 'Darth Sidious', NULL),
(70, 'Палпатин', 5, 'Palpatine', NULL),
(71, 'Чубака', 5, 'Chewbacca', NULL),
(72, 'Нют Гънрей', 5, 'Nute Gunray', NULL),
(73, 'Дарт Вейдър', 5, 'Darth Vader', NULL),
(74, 'Ранкор', 5, 'Rankor', NULL),
(75, 'Йосаламир', 5, ' Ysalamir', NULL),
(76, 'Мотмот', 5, 'Motmot', NULL),
(77, 'Адегански кристал', 5, 'Adegan crystal', NULL),
(78, 'Тай изтребител клас Хищник', 5, 'TAI Interceptor class Predator', NULL),
(79, 'Звезден разрушител', 5, 'Star Destroyer', NULL),
(80, 'Ууки', 5, 'Wookiee', NULL),
(81, 'Наймойдианец', 5, 'Neimoidian', NULL),
(82, 'Кел Дор', 5, 'Kel Dor', NULL),
(83, 'Кашийк', 5, 'Kashyyyk', NULL),
(84, 'Мустафар', 5, 'Mustafar', NULL),
(85, 'Реактивна шейна', 5, 'Podracer', NULL),
(86, 'Търговска Федерация', 5, 'Trade Federation', NULL),
(87, 'Интергалактически клан на банкерите', 5, 'Intergalactic banking clan', NULL),
(88, 'Бластерна винтовка', 5, 'Blaster rifle', NULL),
(89, 'Фелуция', 5, 'Felucia', NULL),
(90, 'Конфедерация на Независимите системи', 5, 'Confederacy of independent systems', NULL),
(91, 'Кейто Неймойдия', 5, 'Cato Neimoidia', NULL);

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
(1, 'danail', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, 0, NULL),
(2, 'данаил', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, 0, NULL),
(3, 'dani_bg', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, 0, NULL),
(4, 'dani_en', 'e10adc3949ba59abbe56e057f20f883e', 0, 0, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phrases`
--
ALTER TABLE `phrases`
  ADD PRIMARY KEY (`phrase_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`player_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phrases`
--
ALTER TABLE `phrases`
  MODIFY `phrase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `player_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
