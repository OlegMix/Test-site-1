-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 03 2016 г., 23:52
-- Версия сервера: 5.6.26
-- Версия PHP: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mv_stom`
--
CREATE DATABASE IF NOT EXISTS `mvstomzd_mvstom` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mvstomzd_mvstom`;

-- --------------------------------------------------------

--
-- Структура таблицы `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id_answer` int(11) NOT NULL,
  `id_questions` int(11) NOT NULL,
  `answer` text NOT NULL,
  `autor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `charter`
--

CREATE TABLE IF NOT EXISTS `charter` (
  `id_char` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `link` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `charter`
--

INSERT INTO `charter` (`id_char`, `title`, `link`) VALUES
(1, 'Устав ГОБУЗ "Маловишерская стоматологическая поликлиника"', 'charter.doc'),
(2, 'Изменения в уставе от 09.02.2012', 'changes_01.doc');

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `id_employees` int(11) NOT NULL,
  `specialty` varchar(250) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `agreement` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id_employees`, `specialty`, `full_name`, `phone`, `agreement`) VALUES
(1, 'Заведующий отделением, врач-стоматолог общей практики, врач-стоматолог терапевт, врач-стоматолог ортопед', 'Байкова Анна Геннадьевна', '8 ( 816-60 ) 31-471', '');

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id_news` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `text` text NOT NULL,
  `date_pub` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id_news`, `title`, `text`, `date_pub`, `image`) VALUES
(1, 'Рождественское послание Митрополита Старорусского и Новгородского Льва', '<p>Рождественское послание Митрополита Новгородского и Старорусского Льва боголюбивым пастырям, честному иночеству и всем верным чадам Новгородской митрополии</p><p>Рождество Твое Христе Боже,<br>воссия мирови Свет разума!<br>(тропарь Рождеству Христову)</p><p>Возлюбленные во Христе отцы, братья и сёстры! Христос рождается, славите! </p><p>В Рождестве Христовом Слово Божие стало плотью и обитало среди нас, людей, чтобы осветить человеческий разум светом Божественной Истины.</p><p>Во грехах своих потеряв Бога, человечество в лице своих лучших представителей в разные времена и в контексте различных культур искало пути возвращения к осмысленному существованию. Некоторые полагали, что удел человека - без остатка раствориться в гармонии Вселенной, другие, что человеческое существование случайно и его уход из жизни имеет столько же смысла, как и его кратковременное бытие. Были, правда, и те, кто предложил некий идеальный мир, к сообразованию с которым должна стремиться человеческая душа.</p><p>Бог же Библии, сотворивший небо и землю, всё видимое и невидимое, сотворивший по образу Своему свободного во всём человека, предузнав его отпадение от Своей Благости, предопределил для него и пути спасения. «Ибо кого Он предузнал, - пишет апостол Павел, - тем и предопределил быть подобными образу Сына Своего»(Рим. 8,29).</p><p>В Аврааме и Иакове, Моисее и пророках Творец мира находил Себе верных служителей, чтобы постепенно сначала отдельных избранников, а потом племена и народы возвращать к бытию с Богом, пред которым херувимы и серафимы трепещут, закрывая лица свои.</p><p>И, наконец, Он рождается в Вифлеемской пещере от Девы Марии, узнанный мудрецами с Востока, прославленный палестинскими пастухами, окружённый любовью тех, кто промыслом Божиим был избран быть рядом с Ним в момент великой Тайны Богоявления. «От явления Его – имя Богоявления, а от рождения – Рождества, - восклицал святой Григорий Богослов в своём слове на Рождество Христово, - ... мы празднуем сегодня пришествие Бога к людям, чтобы нам переселиться к Богу».</p><p>Потаённая во Вселенной пещера рождения Бога Слова и время Боговоплощения в истории свидетельствуют о том, что Бог приходит в этот мир так, чтобы не разрушить человеческую свободу, не повредить естественному развитию событий. Он приходит, чтобы снять проклятие отчуждения от истинной жизни, чтобы исцелять и воскрешать. Приходит, чтобы явить Себя истинным Царём, который не властвует, а спасает. Порицает лицемерие и дарит Свою Любовь.</p><p>Свет Рождества Христова светит вопреки болезненной устремлённости человечества к небытию. Как бы ни погружалась жизнь современных людей в бессмысленность времяпрепровождения за компьютерными играми, искусственными удовольствиями или бесцельным зарабатыванием денег, Свет Христов уже светит, и тьма не может победить Его.</p><p>Это - Свет внутреннего покоя, свет надежды и тихой радости от уверенности в Божественном присутствии Христа в нашей жизни. Это - Свет, который способен сделать осмысленными все достижения современной цивилизации, если их принять как Дар, облегчающий жизнь, дающий возможность людям помогать друг другу. Любить друг друга так, чтобы Христос мог соприсутствовать в человеческой жизни с её скорбями и радостями. Ведь сказал же Христос: там, «...где двое или трое собраны во имя Мое, там Я посреди них»(Мф.18,20).</p><p>Трагическая неправда современной культуры постмодерна заключается в том, что современному миру уже не нужен Христос. Представления о случайностях частного порядка, которые могут сами собой преобразовываться в организованное пространство человеческого бытия, воспитывают из современных людей чаще всего безответственных эгоистов. Но, когда дети ссорятся или болеют, когда мир, в котором они живут становится враждебным, они, обычно, вспоминают о своих родителях. Поэтому и Господь терпеливо ждёт, когда люди, забывшие Бога, вновь обратятся к Нему как к милосердному Спасителю. Но не только ждёт. Как отец в притче о блудном сыне, Он снисходит к ним навстречу.</p><p>Вифлеемская пещера, в которой родился Богомладенец, продолжает светиться во Вселенной светом Божественной Любви. Трудно сказать, сможет ли ответить на эту Любовь человечество, но каждый отдельный человек, как разумный и свободный по образу своего Творца, где бы он ни жил и трудился, какими бы скорбями и радостями он не был бы обременён, может ответить на эту Любовь восторженной молитвой и милостью своего благодарного сердца. Милостью по отношению к ближним, нуждающимся в помощи, в добрых словах поддержки, верности в дружбе и любви. Потому «Днесь вся тварь веселится и радуется, яко Христос родися от Девы – Отроковицы». И всякий, входящий в эту убогую Вифлеемскую пещеру, чтобы поклониться Христу и принести дары своего нелицемерно любящего сердца, входит как бы в преддверие красоты Райского сада, где всё исполнено любовью Божественного Создателя.</p><p>«Слава в Вышних Богу и на земле мир, в человецех благоволение».</p>', '2016-01-14 00:00:00', 'img_n0001');

-- --------------------------------------------------------

--
-- Структура таблицы `questionnaire`
--

CREATE TABLE IF NOT EXISTS `questionnaire` (
  `id_questions` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questionnaire`
--

INSERT INTO `questionnaire` (`id_questions`, `text`) VALUES
(1, 'Оцените степень вашей удовлетворенности общим временем, потребовавшимся для получения услуги от начала до конца.'),
(2, 'Оцените степень вашей удовлетворенности временем ожидания в очередях при получении услуги.'),
(3, 'Оцените степень вашей удовлетворенности вежливостью и компетентностью сотрудников, с которыми вы взаимодействовали.'),
(4, 'Оцените комфортность условий в помещении,в котором вам была предоставлена услуга.'),
(5, 'Оцените доступность информации о порядке предоставления услуги.');

-- --------------------------------------------------------

--
-- Структура таблицы `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id_questions` int(11) NOT NULL,
  `full_name` varchar(250) NOT NULL DEFAULT 'anonym',
  `age` int(11) NOT NULL DEFAULT '0',
  `location` varchar(15) NOT NULL DEFAULT 'anonym',
  `gender` varchar(1) NOT NULL DEFAULT 'a',
  `email` varchar(50) NOT NULL DEFAULT 'anonym',
  `question` text NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `questions`
--

INSERT INTO `questions` (`id_questions`, `full_name`, `age`, `location`, `gender`, `email`, `question`, `date_time`, `status`) VALUES
(1, 'Михайлов Олег Александрович', 19, 'city', 'M', 'olegmixa@mail.ru', 'Какойто дебильный вопрос...если взять за пример вот этот текст то сколько будет здесь слов', '2016-02-26 17:18:35', 1),
(2, 'anonym', 0, 'anonym', 'a', 'anonym', 'Сраненький вопрос', '2016-02-26 19:34:56', 1),
(3, 'anonym', 0, 'anonym', 'a', 'anonym', 'Сраненький вопрос', '2016-02-26 19:34:56', 1),
(4, 'anonym', 0, 'anonym', 'a', 'anonym', 'Сраненький вопрос', '2016-02-26 19:34:56', 1),
(5, 'anonym', 0, 'anonym', 'a', 'anonym', 'Сраненький вопрос', '2016-02-26 19:34:56', 1),
(6, 'anonym', 0, 'anonym', 'a', 'anonym', 'Сраненький вопрос', '2016-02-26 19:34:56', 1),
(7, 'anonym', 0, 'anonym', 'a', 'anonym', 'Сраненький вопрос', '2016-02-26 19:34:56', 1),
(8, 'anonym', 0, 'anonym', 'a', 'anonym', 'Сраненький вопрос', '2016-02-26 19:34:56', 1),
(9, 'anonym', 0, 'anonym', 'a', 'anonym', 'Сраненький вопрос', '2016-02-26 19:34:56', 1),
(10, 'anonym', 0, 'anonym', 'a', 'anonym', 'Сраненький вопрос', '2016-02-26 19:34:56', 1),
(11, 'anonym', 0, 'anonym', 'a', 'anonym', 'Сраненький вопрос', '2016-02-26 19:34:56', 1),
(12, 'anonym', 0, 'anonym', 'a', 'anonym', 'Сраненький вопрос', '2016-02-26 19:34:56', 1),
(13, 'anonym', 0, 'anonym', 'a', 'anonym', 'Какой то вопрос', '2016-03-01 14:31:32', 0),
(14, 'Михайлов Олег Александрович', 20, 'village', 'W', 'olegmixa@mail.ru', 'Какой то вопрос', '2016-03-01 14:31:46', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `quick_links`
--

CREATE TABLE IF NOT EXISTS `quick_links` (
  `id_links` int(11) NOT NULL,
  `links` varchar(200) NOT NULL,
  `color` varchar(7) NOT NULL,
  `active` int(11) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `quick_links`
--

INSERT INTO `quick_links` (`id_links`, `links`, `color`, `active`, `title`) VALUES
(1, 'fff', 'red', 1, 'Тестирование'),
(2, 'questionnaire', 'red', 1, 'Оцените качество обслуживания '),
(3, 'questionnaire', 'red', 1, 'Оцените качество обслуживания '),
(4, 'questionnaire', 'red', 1, 'Оцените качество обслуживания '),
(5, 'questionnaire', 'red', 1, 'Оцените качество обслуживания '),
(6, 'questionnaire', 'red', 1, 'Оцените качество обслуживания ');

-- --------------------------------------------------------

--
-- Структура таблицы `regulations`
--

CREATE TABLE IF NOT EXISTS `regulations` (
  `id_char` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `link` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `regulations`
--

INSERT INTO `regulations` (`id_char`, `title`, `link`) VALUES
(1, 'Порядок оказания платных медицинский услуг в ГОБУЗ Маловишерская стоматологическая поликлиника', 'reg_01.doc');

-- --------------------------------------------------------

--
-- Структура таблицы `respondents`
--

CREATE TABLE IF NOT EXISTS `respondents` (
  `id_res` int(11) NOT NULL,
  `full_name` varchar(200) NOT NULL DEFAULT 'Анонимно',
  `email` varchar(60) NOT NULL DEFAULT 'Анонимно',
  `during_questioning` timestamp NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `respondents`
--

INSERT INTO `respondents` (`id_res`, `full_name`, `email`, `during_questioning`) VALUES
(7, 'anonym', 'anonym', '2016-02-19 20:59:12'),
(8, 'anonym', 'anonym', '2016-02-19 20:59:40'),
(9, 'anonym', 'anonym', '2016-02-19 21:29:51'),
(10, 'anonym', 'anonym', '2016-02-19 21:34:00'),
(11, 'anonym', 'anonym', '2016-02-19 21:34:48'),
(12, 'anonym', 'anonym', '2016-02-19 22:04:30'),
(13, 'anonym', 'anonym', '2016-02-19 22:05:13'),
(14, 'anonym', 'anonym', '2016-02-27 16:56:14'),
(15, 'anonym', 'anonym', '2016-03-01 14:29:57');

-- --------------------------------------------------------

--
-- Структура таблицы `survey_results`
--

CREATE TABLE IF NOT EXISTS `survey_results` (
  `id_questions` int(11) NOT NULL,
  `Id_user` int(11) NOT NULL,
  `result` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `survey_results`
--

INSERT INTO `survey_results` (`id_questions`, `Id_user`, `result`) VALUES
(1, 14, 1),
(2, 14, 1),
(3, 14, 1),
(4, 14, 1),
(5, 14, 1),
(1, 15, 1),
(2, 15, 1),
(3, 15, 3),
(4, 15, 1),
(5, 15, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `logins` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `family` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_admin`, `username`, `logins`, `password`, `name`, `family`, `lastname`) VALUES
(1, '', 'Admin', '2e33a9b0b06aa0a01ede70995674ee23', 'Олег', 'Михайлов', 'Александрович');

-- --------------------------------------------------------

--
-- Структура таблицы `vacancies`
--

CREATE TABLE IF NOT EXISTS `vacancies` (
  `id_vacancies` int(11) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `demands` text NOT NULL,
  `сonditions` text NOT NULL,
  `support` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `vacancies`
--

INSERT INTO `vacancies` (`id_vacancies`, `job_title`, `demands`, `сonditions`, `support`) VALUES
(1, 'Заместитель директора по медицинской части', 'Высшее медицинское образование по специальностям "стоматология", сертификат специалиста ,  стаж работы по специальности не менее 5 лет.', 'Работа основная, постоянная (возможно по совместительству), оформление и социальные гарантии в соответствии с ТК РФ. Предельный уровень зарплаты  устанавливается в кратности 2  к средней заработной платы работников учреждения.', 'Предоставляется съемное жилье с оплатой 50% стоимости проживания.'),
(2, 'Врач стоматолог детский \r\n(врач стоматолог общей практики, зубной врач)', 'Высшее образование по специальности «стоматология детская», «стоматология общей практики», среднее специальное образование по специальности «стоматология», сертификат специалиста.', 'Работа основная, постоянная,    (возможно по совместительству), оформление и социальные гарантии в соответствии с ТК РФ. Заработная плата от 30000 рублей.', 'Предоставляется съемное жилье с оплатой 50% стоимости проживания.'),
(3, 'Медицинская\r\nсестра', 'Среднее специальное образование.', 'Работа основная, постоянная,    (возможно по совместительству), оформление и социальные гарантии в соответствии с ТК РФ. Заработная плата  от 15000 рублей.', 'Предоставляется съемное жилье с оплатой 50% стоимости проживания.');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id_answer`);

--
-- Индексы таблицы `charter`
--
ALTER TABLE `charter`
  ADD PRIMARY KEY (`id_char`);

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id_employees`);

--
-- Индексы таблицы `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_news`);

--
-- Индексы таблицы `questionnaire`
--
ALTER TABLE `questionnaire`
  ADD PRIMARY KEY (`id_questions`);

--
-- Индексы таблицы `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id_questions`);

--
-- Индексы таблицы `quick_links`
--
ALTER TABLE `quick_links`
  ADD PRIMARY KEY (`id_links`);

--
-- Индексы таблицы `regulations`
--
ALTER TABLE `regulations`
  ADD PRIMARY KEY (`id_char`);

--
-- Индексы таблицы `respondents`
--
ALTER TABLE `respondents`
  ADD PRIMARY KEY (`id_res`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_admin`);

--
-- Индексы таблицы `vacancies`
--
ALTER TABLE `vacancies`
  ADD PRIMARY KEY (`id_vacancies`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `answers`
--
ALTER TABLE `answers`
  MODIFY `id_answer` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблицы `charter`
--
ALTER TABLE `charter`
  MODIFY `id_char` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id_employees` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id_news` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `questionnaire`
--
ALTER TABLE `questionnaire`
  MODIFY `id_questions` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `questions`
--
ALTER TABLE `questions`
  MODIFY `id_questions` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT для таблицы `quick_links`
--
ALTER TABLE `quick_links`
  MODIFY `id_links` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `regulations`
--
ALTER TABLE `regulations`
  MODIFY `id_char` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `respondents`
--
ALTER TABLE `respondents`
  MODIFY `id_res` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT для таблицы `vacancies`
--
ALTER TABLE `vacancies`
  MODIFY `id_vacancies` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
