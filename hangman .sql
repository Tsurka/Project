-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 15 март 2017 в 18:40
-- Версия на сървъра: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hangman`
--

-- --------------------------------------------------------

--
-- Структура на таблица `categories`
--

CREATE TABLE `categories` (
  `category_id` int(10) NOT NULL,
  `category` varchar(150) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `categories`
--

INSERT INTO `categories` (`category_id`, `category`, `date_deleted`) VALUES
(1, 'Държави', NULL),
(2, 'Градове', NULL),
(3, 'Животни', NULL),
(4, 'Известни личности', NULL),
(5, 'Междузвездни войни', NULL);

-- --------------------------------------------------------

--
-- Структура на таблица `categories_eng`
--

CREATE TABLE `categories_eng` (
  `category_id` int(10) NOT NULL,
  `category` varchar(150) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `categories_eng`
--

INSERT INTO `categories_eng` (`category_id`, `category`, `date_deleted`) VALUES
(1, 'Countries', NULL),
(2, 'Cities', NULL),
(3, 'Animals', NULL),
(4, 'Famous people', NULL),
(5, 'Star Wars', NULL);

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
-- Структура на таблица `phrases_eng`
--

CREATE TABLE `phrases_eng` (
  `phrase_id` int(10) NOT NULL,
  `phrase` varchar(150) NOT NULL,
  `category_id` int(10) NOT NULL,
  `date_deleted` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `phrases_eng`
--

INSERT INTO `phrases_eng` (`phrase_id`, `phrase`, `category_id`, `date_deleted`) VALUES
(1, 'Guatemala', 1, NULL),
(2, 'Saint Lucia', 1, NULL),
(3, 'Curacao', 1, NULL),
(4, 'Myanmar', 1, NULL),
(5, 'Turkmenistan', 1, NULL),
(6, 'Uzbekistan', 1, NULL),
(7, 'Botswana', 1, NULL),
(8, 'Zanzibar', 1, NULL),
(9, 'Micronesia', 1, NULL),
(10, 'Liechtenstein', 1, NULL),
(11, 'Sаo Paulo', 2, NULL),
(12, 'Kolkata', 2, NULL),
(13, 'Buenos Aires', 2, NULL),
(14, 'Karachi', 2, NULL),
(15, 'Manila', 2, NULL),
(16, 'Istanbul', 2, NULL),
(17, 'Jakarta', 2, NULL),
(18, 'Tangerang', 2, NULL),
(19, 'Faridabad', 2, NULL),
(20, 'Guаngzhоu', 2, NULL),
(21, 'Monodon monoceros', 3, NULL),
(22, 'Moloch horridus', 3, NULL),
(23, 'Glakus', 3, NULL),
(24, 'Tenrek', 3, NULL),
(25, 'Tamarin', 3, NULL),
(26, 'Balaenicipitidae', 3, NULL),
(27, 'Axolotl', 3, NULL),
(28, 'Pygmy marmoset', 3, NULL),
(29, 'Yeti crab', 3, NULL),
(30, 'Alpaca', 3, NULL),
(31, 'Robin Williams', 4, NULL),
(32, 'Catherine Middleton', 4, NULL),
(33, 'Kimberly Kardashian', 4, NULL),
(34, 'Scarlett Johansson', 4, NULL),
(35, 'Neil deGrasse Tyson', 4, NULL),
(36, 'Jason Statham', 4, NULL),
(37, 'Johny Depp', 4, NULL),
(38, 'Marshall Bruce', 4, NULL),
(43, 'Darren Hayes', 4, NULL),
(44, 'Angelina Jolie', 4, NULL),
(45, 'Sandhill crane ', 3, NULL),
(46, 'Sturgeon', 3, NULL),
(47, 'The Chinese giant salamander ', 3, NULL),
(48, 'Goblin shark ', 3, NULL),
(49, 'Horseshoe crab ', 3, NULL),
(50, 'African coelacanth', 3, NULL),
(51, 'Nautilus', 3, NULL),
(52, 'Alligator Gar', 3, NULL),
(53, 'Admiral Ackbar', 5, NULL),
(54, 'Darth Sidious', 5, NULL),
(55, 'Palpatine', 5, NULL),
(56, 'Chewbacca', 5, NULL),
(57, 'Nute Gunray', 5, NULL),
(58, 'Darth Vader', 5, NULL),
(59, 'Rankor', 5, NULL),
(60, 'Ysalamir', 5, NULL),
(61, 'Motmot', 5, NULL),
(62, 'Adegan crystal', 5, NULL),
(63, 'TAI Interceptor class Predator', 5, NULL),
(64, 'Star Destroyer', 5, NULL),
(65, 'Wookiee', 5, NULL),
(66, 'Neimoidian', 5, NULL),
(67, 'Kel Dor', 5, NULL),
(68, 'Kashyyyk', 5, NULL),
(69, 'Mustafar', 5, NULL),
(70, 'Podracer', 5, NULL),
(71, 'Trade Federation', 5, NULL),
(72, 'Intergalactic banking clan', 5, NULL),
(73, 'Blaster rifle', 5, NULL),
(74, 'Felucia', 5, NULL),
(75, 'Confederacy of independent systems', 5, NULL),
(77, 'Cato Neimoidia', 5, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `categories_eng`
--
ALTER TABLE `categories_eng`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `phrases`
--
ALTER TABLE `phrases`
  ADD PRIMARY KEY (`phrase_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `phrases_eng`
--
ALTER TABLE `phrases_eng`
  ADD PRIMARY KEY (`phrase_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `categories_eng`
--
ALTER TABLE `categories_eng`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `phrases`
--
ALTER TABLE `phrases`
  MODIFY `phrase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
--
-- AUTO_INCREMENT for table `phrases_eng`
--
ALTER TABLE `phrases_eng`
  MODIFY `phrase_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `phrases`
--
ALTER TABLE `phrases`
  ADD CONSTRAINT `phrases_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

--
-- Ограничения за таблица `phrases_eng`
--
ALTER TABLE `phrases_eng`
  ADD CONSTRAINT `phrases_eng_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories_eng` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
