-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 28 2021 г., 16:49
-- Версия сервера: 5.6.51
-- Версия PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `images`
--

-- --------------------------------------------------------

--
-- Структура таблицы `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `img`
--

INSERT INTO `img` (`id`, `path`, `size`, `title`, `count`) VALUES
(1, './img/small/1.jpg', 48, '1', 1),
(2, './img/small/2.jpg', 22, '2', 1),
(3, './img/small/3.jpg', 52, '3', 0),
(4, './img/small/4.jpg', 48, '4', 0),
(5, './img/small/5.jpg', 59, '5', 0),
(6, './img/small/6.jpg', 32, '6', 0),
(7, './img/big/7.jpg', 151, '7', 0),
(8, './img/big/8.jpg', 475, '8', 0),
(9, './img/big/9.jpg', 183, '9', 0),
(10, './img/big/10.jpg', 155, '10', 0),
(11, './img/big/11.jpg', 193, '11', 0),
(12, './img/big/12.jpg', 94, '12', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
