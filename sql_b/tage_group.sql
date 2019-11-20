-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Ноя 20 2019 г., 16:33
-- Версия сервера: 10.1.43-MariaDB-0ubuntu0.18.04.1
-- Версия PHP: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `htag`
--

-- --------------------------------------------------------

--
-- Структура таблицы `tage.group`
--

CREATE TABLE `tage.group` (
  `id` int(9) NOT NULL,
  `url` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `priopetet` varchar(10) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tage.group`
--

INSERT INTO `tage.group` (`id`, `url`, `name`, `priopetet`, `img`) VALUES
(1, 'piar', 'Пиар', '', ''),
(2, 'fitnes', 'Фитнес', '', ''),
(3, 'devushki', 'Девушки', '', ''),
(4, 'kulinariya', 'Кулинария', '', ''),
(5, 'yumor', 'Юмор', '', ''),
(6, 'puteshestviya', 'Путешествия', '', ''),
(7, 'razvlecheniya', 'Развлечения', '', ''),
(8, 'avtomobili', 'Автомобили', '', ''),
(9, 'lajfhak', 'Лайфхак', '', ''),
(10, 'tsitaty', 'Цитаты', '', ''),
(11, 'fotografii', 'Фотографии', '', ''),
(12, 'zhenskoe-soobschestvo', 'Женское сообщество', '', ''),
(13, 'muzhskoe-soobschestvo', 'Мужское сообщество', '', ''),
(14, 'kino', 'Кино', '', ''),
(15, 'video', 'Видео', '', ''),
(16, 'moda', 'Мода', '', ''),
(17, 'zhivotnye', 'Животные', '', ''),
(18, 'nauka', 'Наука', '', ''),
(19, 'goroskop', 'Гороскоп', '', ''),
(20, 'motivatsiya', 'Мотивация', '', ''),
(21, 'tovary', 'Товары', '', ''),
(22, 'tatuirovki', 'Татуировки', '', ''),
(23, 'dizajn', 'Дизайн', '', ''),
(24, 'interer', 'Интерьер', '', ''),
(25, 'regionalnoe', 'Региональное', '', ''),
(26, 'novosti', 'Новости', '', ''),
(27, 'sport', 'Спорт', '', ''),
(28, 'meditsina', 'Медицина', '', ''),
(29, 'vajny', 'Вайны', '', ''),
(30, 'prochee', 'Прочее', '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tage.group`
--
ALTER TABLE `tage.group`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tage.group`
--
ALTER TABLE `tage.group`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
