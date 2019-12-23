-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 23 2019 г., 17:04
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `crud`
--

-- --------------------------------------------------------

--
-- Структура таблицы `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `info`
--

INSERT INTO `info` (`id`, `name`, `price`, `url`) VALUES
(11, 'Sony1', 0, 'https://images-na.ssl-images-amazon.com/images/I/51urhkklfsL._SL1000_.jpg'),
(20, 'f', -4, 'https://static.thenounproject.com/png/1077671-200.png'),
(21, 'sa', -5, 'https://static.thenounproject.com/png/1077671-200.png'),
(22, 'fd', 0, ''),
(23, 'ZHanserik', -85, 'https://static.thenounproject.com/png/1077671-200.png'),
(24, 'sdf', 5, 'https://static.thenounproject.com/png/1077671-200.png'),
(25, 'dsd', -9, 'https://static.thenounproject.com/png/1077671-200.png'),
(26, 'ZHanserik', -95, 'https://static.thenounproject.com/png/1077671-200.png'),
(27, 'm,', 6, 'https://static.thenounproject.com/png/1077671-200.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
