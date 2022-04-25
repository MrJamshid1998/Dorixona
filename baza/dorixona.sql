-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 13 2022 г., 12:52
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dorixona`
--

-- --------------------------------------------------------

--
-- Структура таблицы `aloqa`
--

CREATE TABLE `aloqa` (
  `id` int(11) NOT NULL,
  `fio` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `xabar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `aloqa`
--

INSERT INTO `aloqa` (`id`, `fio`, `email`, `xabar`) VALUES
(1, 'wdasd', 'sadasd@ds.d', 'asdasds');

-- --------------------------------------------------------

--
-- Структура таблицы `dorilar`
--

CREATE TABLE `dorilar` (
  `id` int(11) NOT NULL,
  `nomi` varchar(100) NOT NULL,
  `narxi` int(11) NOT NULL,
  `mal` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dorilar`
--

INSERT INTO `dorilar` (`id`, `nomi`, `narxi`, `mal`, `img`) VALUES
(1, 'Parasetamol', 2000, 'Shamollashga qarshi ', 'images\\dorilar\\parastemol.jpg'),
(2, 'Trimol', 10000, 'Bosh og`riqiga qarshi dori vositasi.', 'images\\dorilar\\trimol.jpg'),
(3, 'Korneregel', 20000, 'Ko`z og`riqiga qarshi dori vositasi.', 'images\\dorilar\\korneregel.jpg'),
(4, 'Deksametazon', 25000, 'Ko`z qizarishiga qarshi dori vositasi.', 'images\\dorilar\\deksametazon.jpg'),
(5, 'Mezim', 15000, 'Oshqozon og`riqiga qarshi dori vositasi.', 'images\\dorilar\\mezim.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `dori_sotish`
--

CREATE TABLE `dori_sotish` (
  `id` int(11) NOT NULL,
  `dori_id` int(11) NOT NULL,
  `soni` int(11) NOT NULL,
  `jami_narxi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `dori_sotish`
--

INSERT INTO `dori_sotish` (`id`, `dori_id`, `soni`, `jami_narxi`) VALUES
(1, 1, 5, 10000),
(2, 2, 2, 20000);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `aloqa`
--
ALTER TABLE `aloqa`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dorilar`
--
ALTER TABLE `dorilar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `dori_sotish`
--
ALTER TABLE `dori_sotish`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `aloqa`
--
ALTER TABLE `aloqa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `dorilar`
--
ALTER TABLE `dorilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `dori_sotish`
--
ALTER TABLE `dori_sotish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
