-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 06 2021 г., 13:26
-- Версия сервера: 10.4.21-MariaDB
-- Версия PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `collectorsdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `collectors`
--

CREATE TABLE `collectors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(45) NOT NULL,
  `id_crew` int(10) UNSIGNED NOT NULL,
  `img_path` varchar(45) NOT NULL,
  `birth_date` date NOT NULL,
  `characteristic` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `collectors`
--

INSERT INTO `collectors` (`id`, `name`, `id_crew`, `img_path`, `birth_date`, `characteristic`) VALUES
(1, 'Дементьев Агафон Александрович', 1, 'https://localhost/LR2/inc/images/1.jpg', '1968-08-23', 'Аккуратный, трудолюбивый'),
(2, 'Герасимов Парамон Игнатьевич', 2, 'https://localhost/LR2/inc/images/2.jpg', '1960-01-29', 'Трудолюбивый, надежный, аккуратный'),
(3, 'Некрасов Кирилл Лукьевич', 3, 'https://localhost/LR2/inc/images/3.jpg', '1971-02-04', 'Надежный, активный, ответственный'),
(4, 'Васильев Ярослав Созонович', 4, 'https://localhost/LR2/inc/images/4.jpg', '1979-10-12', 'Аккуратный'),
(5, 'Зайцев Григорий Николаевич', 5, 'https://localhost/LR2/inc/images/5.jpg', '1997-11-18', 'Ответственный, активный'),
(6, 'Кудряшов Афанасий Петрович', 1, 'https://localhost/LR2/inc/images/6.jpg', '1965-10-27', 'Трудолюбивый, надежный'),
(7, 'Силин Макар Денисович', 2, 'https://localhost/LR2/inc/images/7.jpg', '1961-08-18', 'Ответственный, активный'),
(8, 'Шарапов Донат Станиславович', 3, 'https://localhost/LR2/inc/images/8.jpg', '1990-11-15', 'Надежный, аккуратный'),
(9, 'Евсеев Андрей Филатович', 4, 'https://localhost/LR2/inc/images/9.jpg', '1971-07-12', 'Активный, ответственный'),
(10, 'Дорофеев Остап Кимович', 5, 'https://localhost/LR2/inc/images/10.jpg', '1994-10-10', 'Надежный, активный'),
(11, 'Котов Олег Викторович', 1, 'https://localhost/LR2/inc/images/11.jpg', '1980-05-21', 'Трудолюбивый, ответственный'),
(12, 'Сидоров Павел Владимирович', 2, 'https://localhost/LR2/inc/images/12.jpg', '1967-12-19', 'Надежный'),
(13, 'Жуков Адольф Борисович', 3, 'https://localhost/LR2/inc/images/13.jpg', '1967-05-15', 'Активный, ответственный'),
(14, 'Тихонов Дмитрий Платонович', 4, 'https://localhost/LR2/inc/images/14.jpg', '2000-01-31', 'Аккуратный, активный'),
(15, 'Кудрявцев Дмитрий Германович', 5, 'https://localhost/LR2/inc/images/15.jpg', '1970-03-30', 'Ответственный, надежный'),
(16, 'Киселёв Аскольд Николаевич', 1, 'https://localhost/LR2/inc/images/16.jpg', '1989-10-24', 'Надежный, трудолюбивый'),
(17, 'Марков Юлиан Васильевич', 2, 'https://localhost/LR2/inc/images/17.jpg', '1955-05-20', 'Аккуратный, трудолюбивый'),
(18, 'Мясников Тимофей Валентинович', 3, 'https://localhost/LR2/inc/images/18.jpg', '1981-02-17', 'Активный, трудолюбивый'),
(19, 'Гурьев Августин Григорьевич', 4, 'https://localhost/LR2/inc/images/19.jpg', '1994-04-08', 'Аккуратный, трудолюбивый'),
(20, 'Коротков Марк Владимирович', 5, 'https://localhost/LR2/inc/images/20.jpg', '2002-03-15', 'Надежный, активный, ответственный');

-- --------------------------------------------------------

--
-- Структура таблицы `crews`
--

CREATE TABLE `crews` (
  `id` int(10) UNSIGNED NOT NULL,
  `crew` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `crews`
--

INSERT INTO `crews` (`id`, `crew`) VALUES
(1, 'Первая'),
(2, 'Вторая'),
(3, 'Третья'),
(4, 'Четвертая'),
(5, 'Пятая');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `collectors`
--
ALTER TABLE `collectors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign_key_1` (`id_crew`);

--
-- Индексы таблицы `crews`
--
ALTER TABLE `crews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `collectors`
--
ALTER TABLE `collectors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `crews`
--
ALTER TABLE `crews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `collectors`
--
ALTER TABLE `collectors`
  ADD CONSTRAINT `foreign_key_1` FOREIGN KEY (`id_crew`) REFERENCES `crews` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
