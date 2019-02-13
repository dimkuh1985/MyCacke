-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Янв 31 2019 г., 16:05
-- Версия сервера: 5.7.11
-- Версия PHP: 5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `db1`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `info` varchar(300) CHARACTER SET utf8mb4 NOT NULL,
  `price` float NOT NULL,
  `image` varchar(300) NOT NULL,
  `gcount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `info`, `price`, `image`, `gcount`) VALUES
(41, 'Beach', 'Sand and Water', 158.05, 'res/img/gallery/beach.jpg', 3),
(42, 'ToyBox', 'Box with animals', 99.1, 'res/img/gallery/box.jpg', 15),
(43, 'UnicornCastle', 'Huge castle with unicon above it', 100.99, 'res/img/gallery/castle.jpg', 2),
(45, 'Cookies', 'Box of cookies', 50, 'res/img/gallery/cookies1.jpg', 17),
(46, 'LoveIs', 'Almost a bubblegum', 123.11, 'res/img/gallery/loveis.jpg', 10),
(47, 'DogWedding', 'Wedding for dogs', 450.5, 'res/img/gallery/dogwedding.jpg', 5),
(49, 'PatricsDay', 'Lepicon', 93.5, 'res/img/gallery/patrick.jpg', 4),
(53, 'OfficeCupcake', 'For office party', 46.6, 'res/img/gallery/cupcake_office.jpg', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `passw` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `regdate` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `passw`, `email`, `regdate`, `status`) VALUES
(1, 'admin', '698d51a19d8a121ce581499d7b701668', 'admin@ukr.net', '2019-01-28 14:48:48', 'norm'),
(2, 'moder', '698d51a19d8a121ce581499d7b701668', 'moder@ukr.net', '2019-01-28 14:49:55', 'norm'),
(3, 'user1', '698d51a19d8a121ce581499d7b701668', 'user1@ukr.net', '2019-01-28 14:50:09', 'norm'),
(4, 'user2', '698d51a19d8a121ce581499d7b701668', 'user2@ukr.net', '2019-01-28 14:50:27', 'norm'),
(5, 'user3', '698d51a19d8a121ce581499d7b701668', 'user3@ukr.net', '2019-01-28 14:50:37', 'norm'),
(7, 'Ð’Ð°ÑÑ', '698d51a19d8a121ce581499d7b701668', 'Vas@ukr.net', '2019-01-28 14:58:34', 'norm'),
(8, 'test', '698d51a19d8a121ce581499d7b701668', 'test@ukr.net', '2019-01-29 12:50:59', 'norm'),
(9, 'test1', '698d51a19d8a121ce581499d7b701668', 'test@bigmir.net', '2019-01-30 11:03:52', 'norm');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
