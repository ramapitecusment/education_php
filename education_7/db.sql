CREATE DATABASE IF NOT EXISTS `worker` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `worker`;

-- --------------------------------------------------------

--
-- Структура таблицы `worker`
--

CREATE TABLE `worker` (
  `ID_WORKER` int(11) NOT NULL,
  `WORKER_NAME` varchar(45) NOT NULL,
  `WORKER_AGE` int(11) NOT NULL,
  `WORKER_SALARY` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `worker`
--

INSERT INTO `worker` (`ID_WORKER`, `WORKER_NAME`, `WORKER_AGE`, `WORKER_SALARY`) VALUES
(15, 'Ivan', 21, 3000),
(16, 'Tamerlan', 20, 1000),
(17, 'Tamerlan', 21, 1500);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`ID_WORKER`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `worker`
--
ALTER TABLE `worker`
  MODIFY `ID_WORKER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;
