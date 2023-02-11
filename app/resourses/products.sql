-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 04 2023 г., 20:13
-- Версия сервера: 8.0.29
-- Версия PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `divisima`
--

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount` int NOT NULL DEFAULT '0',
  `count` int NOT NULL,
  `hot` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `price`, `img`, `discount`, `count`, `hot`) VALUES
(1, 'massa non ante bibendum', 2, '89.56', '1.jpg', 15, 39, 0),
(2, 'id, libero. Donec consectetuer mauris id', 5, '48.25', '2.jpg', 89, 45, 1),
(3, 'tellus. Phasellus elit pede, malesuada vel,', 5, '2.37', '3.jpg', 61, 28, 1),
(4, 'nec tempus scelerisque, lorem ipsum sodales', 4, '55.44', '4.jpg', 35, 27, 1),
(5, 'molestie pharetra', 5, '3.28', '5.jpg', 74, 8, 0),
(6, 'mauris id sapien. Cras', 2, '7.44', '6.jpg', 55, 47, 1),
(7, 'augue ac', 1, '79.09', '7.jpg', 0, 19, 0),
(8, 'dolor quam, elementum', 2, '40.31', '8.jpg', 88, 15, 0),
(9, 'tincidunt adipiscing. Mauris molestie pharetra', 1, '70.76', '9.jpg', 92, 45, 1),
(10, 'ante, iaculis nec, eleifend non,', 5, '87.73', '10.jpg', 15, 23, 1),
(11, 'egestas. Fusce', 5, '71.31', '11.jpg', 27, 1, 0),
(12, 'egestas. Fusce aliquet magna a', 5, '18.19', '12.jpg', 23, 49, 0),
(13, 'laoreet lectus quis massa.', 4, '35.37', '13.jpg', 97, 44, 1),
(14, 'non, sollicitudin', 4, '10.57', '14.jpg', 47, 8, 0),
(15, 'magna', 1, '23.92', '15.jpg', 49, 16, 0),
(16, 'nisi a odio semper cursus. Integer', 1, '76.02', '16.jpg', 61, 36, 1),
(17, 'pharetra nibh. Aliquam ornare,', 3, '17.42', '17.jpg', 12, 14, 1),
(18, 'id, libero. Donec consectetuer mauris', 3, '59.17', '18.jpg', 50, 23, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
