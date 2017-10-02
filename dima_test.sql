-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Окт 02 2017 г., 17:30
-- Версия сервера: 10.1.24-MariaDB
-- Версия PHP: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dima_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `region_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `city`
--

INSERT INTO `city` (`id`, `title`, `region_id`) VALUES
(2, 'Sochi', 1),
(3, 'Anapa', 1),
(4, 'Krasnodar', 1),
(5, 'Irkutsk', 2),
(6, 'Bratsk', 2),
(7, 'Angarsk', 2),
(8, 'Rostov', 3),
(9, 'Shahty', 3),
(10, 'Bataysk', 3),
(11, 'Stavropol', 4),
(12, 'Pyatigorsk', 4),
(13, 'Kislovodsk', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `middle_name` varchar(20) NOT NULL,
  `region_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comment`
--

INSERT INTO `comment` (`id`, `first_name`, `last_name`, `middle_name`, `region_id`, `city_id`, `phone`, `email`, `comment`) VALUES
(1, 'first name 1', 'last name 1', 'middle name 1', 1, 2, '8918123123', 'test1@test.test', 'test comment 1'),
(2, 'first name 2', 'last name 2', 'middle name 2', 1, 2, '8918123123', 'test2@test.test', 'test comment 2'),
(3, 'first name 3', 'last name 3', 'middle name 3', 1, 2, '8918123123', 'test3@test.test', 'test comment 3'),
(4, 'first name 4', 'last name 4', 'middle name 4', 1, 2, '8918123123', 'test4@test.test', 'test comment 4'),
(5, 'first name 5', 'last name 5', 'middle name 5', 1, 4, '8918123123', 'test5@test.test', 'test comment 5'),
(6, 'first name 6', 'last name 6', 'middle name 6', 1, 2, '8918123123', 'test6@test.test', 'test comment 6'),
(7, 'first name 7', 'last name 7', 'middle name 7', 1, 4, '8918123123', 'test7@test.test', 'test comment 7'),
(8, 'first name 8', 'last name 8', 'middle name 8', 2, 5, '8918123123', 'test8@test.test', 'test comment 8'),
(9, 'first name 9', 'last name 9', 'middle name 9', 2, 6, '8918123123', 'test9@test.test', 'test comment 9'),
(10, 'first name 10', 'last name 10', 'middle name 10', 2, 7, '8918123123', 'test10@test.test', 'test comment 10');

-- --------------------------------------------------------

--
-- Структура таблицы `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `region`
--

INSERT INTO `region` (`id`, `title`) VALUES
(1, 'Krasnodarsky kray'),
(2, 'Irkutsk region'),
(3, 'Rostovsky region'),
(4, 'Stavropolsky kray');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `region_id` (`region_id`);

--
-- Индексы таблицы `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `region_id` (`region_id`),
  ADD KEY `city_id` (`city_id`);

--
-- Индексы таблицы `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT для таблицы `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT для таблицы `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `city` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
