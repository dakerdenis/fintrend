-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 23 2023 г., 06:14
-- Версия сервера: 10.4.27-MariaDB
-- Версия PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fintrend`
--

-- --------------------------------------------------------

--
-- Структура таблицы `files`
--

CREATE TABLE `files` (
  `id` int(11) NOT NULL,
  `name_az` varchar(255) NOT NULL,
  `name_en` varchar(255) NOT NULL,
  `name_ru` varchar(255) NOT NULL,
  `desc_az` varchar(255) NOT NULL,
  `desc_en` varchar(255) NOT NULL,
  `desc_ru` varchar(255) NOT NULL,
  `file_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `files`
--

INSERT INTO `files` (`id`, `name_az`, `name_en`, `name_ru`, `desc_az`, `desc_en`, `desc_ru`, `file_name`) VALUES
(14, 'üadüadaüdaüdadüdəəəşçşöımçöpl', 'acasczxcxzc', 'vbnvbnыфвфывЫВФЫПВЫФП', '123sadfzdf', 'asfasf', 'фыафыва', 'IMG_20230410_180505.jpg'),
(15, 'ASDASDASD', 'ASDASDvcxcv', 'Сталкер 228', 'asdasdas', 'vvsgerghteahtk', 'суаукава', '123.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `files`
--
ALTER TABLE `files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
