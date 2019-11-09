-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 09 2019 г., 01:27
-- Версия сервера: 5.7.25
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `session_id` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `ordered` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `session_id`, `product_id`, `ordered`) VALUES
(52, 'b7vman05rrs72cp7u1g612vi27t012o', 1, NULL),
(53, 'b7vman05rrs72cp7u1g612vi27t012or', 1, NULL),
(54, 'b7vman05rrs72cp7u1g612vi27t012or', 2, NULL),
(55, 'b7vman05rrs72cp7u1g612vi27t012or', 1, NULL),
(56, 'b7vman05rrs72cp7u1g612vi27t012or', 1, NULL),
(57, 'b7vman05rrs72cp7u1g612vi27t012or', 1, NULL),
(58, 'dpmrqkkd6tsl3778hu0jah6l6163e0k2', 1, 0),
(59, 'f7utu0nrpdn82quori9h9c6ndii6snme', 6, 0),
(60, 'f7utu0nrpdn82quori9h9c6ndii6snme', 8, 0),
(61, 'f7utu0nrpdn82quori9h9c6ndii6snme', 5, 0),
(62, '6s9fkea5q3thfbk8is79kegmeqq0tkbd', 4, 0),
(63, '6s9fkea5q3thfbk8is79kegmeqq0tkbd', 3, 0),
(64, 'q62qs1gksf4cqnl930hv64nvdlinpdrt', 10, 0),
(65, 'vae942u8dascv4ep3qug55ect21h3ktm', 4, 0),
(66, 'vae942u8dascv4ep3qug55ect21h3ktm', 3, 0),
(67, '5vv3i1s6183kirji32b0agt951vgpmat', 2, 0),
(68, 'u78t99bufpc08ek3uh8bc2j8i8crsdff', 2, 0),
(69, 'u78t99bufpc08ek3uh8bc2j8i8crsdff', 2, 0),
(70, 'u78t99bufpc08ek3uh8bc2j8i8crsdff', 2, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `session_id` text NOT NULL,
  `login` text NOT NULL,
  `phone` int(11) NOT NULL,
  `formed` tinyint(1) DEFAULT NULL,
  `paid` tinyint(1) DEFAULT NULL,
  `processed` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `session_id`, `login`, `phone`, `formed`, `paid`, `processed`) VALUES
(39, 'b7vman05rrs72cp7u1g612vi27t012or', '4', 4, NULL, NULL, NULL),
(40, 'b7vman05rrs72cp7u1g612vi27t012or', '5', 5, NULL, NULL, NULL),
(41, 'b7vman05rrs72cp7u1g612vi27t012or', '6', 6, NULL, NULL, NULL),
(42, 'b7vman05rrs72cp7u1g612vi27t012or', '5', 5, NULL, NULL, NULL),
(43, 'b7vman05rrs72cp7u1g612vi27t012or', '8', 8, NULL, NULL, NULL),
(44, '6s9fkea5q3thfbk8is79kegmeqq0tkbd', '1', 1, NULL, NULL, NULL),
(45, 'q62qs1gksf4cqnl930hv64nvdlinpdrt', 'admin', 34567890, NULL, NULL, NULL),
(46, 'vae942u8dascv4ep3qug55ect21h3ktm', 'littlebear1@yandex.ru', 34567890, NULL, NULL, NULL),
(47, '5vv3i1s6183kirji32b0agt951vgpmat', 'littlebear8@yandex.ru', 34567890, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`) VALUES
(1, 'ПРЕССОВАННЫЙ ПУЭР СЯО ТО', '(МИНИ ТО ЧА) ЧЕРНАЯ', 110),
(2, 'ВИШНЕВЫЙ ШУ ПУЭР', 'ВИШНЕВЫЙ ШУ ПУЭР', 130),
(3, 'НАЙ СЯН ПУЭР (МОЛОЧНЫЙ ПУЭР)', 'НАЙ СЯН ПУЭР (МОЛОЧНЫЙ ПУЭР)', 188),
(4, 'НАЙ СЯН ЦЗИНЬ СЮАНЬ (улун)', '(МОЛОЧНЫЙ УЛУН) ВЫСШЕЙ КАТЕГОРИИ', 195),
(5, 'ДА ХУН ПАО (улун)', 'ДА ХУН ПАО (БОЛЬШОЙ КРАСНЫЙ ХАЛАТ)', 389),
(6, 'НАЙ СЯН ЦЗИНЬ СЮАНЬ (улун)', 'НАЙ СЯН ЦЗИНЬ СЮАНЬ (ПРЕМИУМ, ТАЙВАНЬ)', 385),
(8, 'чай черный', 'цейлонский', 36),
(10, 'чай черный', 'краснодарский', 48),
(11, 'чай черный', 'краснодарский', 48),
(12, 'чай черный', 'вьетнамский', 48),
(13, 'чай', 'краснодарский', 108),
(14, 'чай черный', 'грузинскмй', 118),
(15, 'jhdb fcjhwgf ', 'цейлонский', 3000),
(16, 'вкусный чай', 'узбекский', 68),
(17, 'чай очень черный', 'цейлонский', 99),
(18, 'чай черный', '1 сорт. Очень крепкий', 999),
(19, 'чай черный', '1 сорт. Очень крепкий', 999),
(20, 'чай черный', '1 сорт. Очень крепкий', 999),
(21, 'чай черный', '1 сорт. Очень крепкий', 999),
(22, 'чай черный', '1 сорт. Очень крепкий', 999),
(23, 'чай черный', '1 сорт. Очень крепкий', 999),
(24, 'чай черный', '1 сорт. Очень крепкий', 999),
(25, 'чай черный', '1 сорт. Очень крепкий', 999),
(26, 'чай ароматный', 'С цветками лотоса', 111),
(27, 'чай', 'с плодами манго', 111),
(28, 'чай ароматный', 'С цветками лотоса', 111),
(29, 'чай ароматный', 'С цветками лотоса', 111),
(30, 'чай ароматный', 'С цветками лотоса', 121),
(31, 'чай ароматный', 'С цветками незабудки', 123),
(32, 'чай ароматный', 'ароматный', 222),
(33, 'просто чай', 'ароматный', 111);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` text NOT NULL,
  `pass` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`) VALUES
(1, 'admin', '123'),
(2, 'user', '456'),
(3, 'John', '789'),
(4, 'Mary', '011'),
(5, 'Bob', '000'),
(6, 'Bob', '000'),
(7, 'Thomas', '000'),
(8, 'Thomas', '000');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
