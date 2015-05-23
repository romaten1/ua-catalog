-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Час створення: Трв 23 2015 р., 20:01
-- Версія сервера: 5.5.41-log
-- Версія PHP: 5.4.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База даних: `ua-catalog`
--
CREATE DATABASE IF NOT EXISTS `ua-catalog` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ua-catalog`;

-- --------------------------------------------------------

--
-- Структура таблиці `attachments`
--

CREATE TABLE IF NOT EXISTS `attachments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_id` int(10) NOT NULL COMMENT 'Продукт',
  `image` varchar(255) NOT NULL COMMENT 'Фотографія',
  `created_at` int(10) NOT NULL COMMENT 'Створено',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп даних таблиці `attachments`
--

INSERT INTO `attachments` (`id`, `product_id`, `image`, `created_at`) VALUES
(4, 5, '_ALUL_yvxqxy8.jpg', 1429356176),
(5, 5, 'e2aQL_dm81xnn.jpg', 1429356217),
(6, 5, 'XpS8o_4s9ixrc.jpg', 1429356228),
(7, 5, 'y2Kn-_t1krkaj.jpg', 1429356243),
(8, 6, 'PEL4x_vfbzrta.jpg', 1429356439),
(9, 6, 'mPDMG_55v_drt.jpg', 1429356451),
(10, 8, 'S7KkW_fxzjsmt.jpg', 1429363956),
(11, 9, '8pCsW_l3vz6kn.jpg', 1429363968),
(12, 9, 't6F-__2_buxkp.jpg', 1429363980),
(13, 9, 'fOl_V_ss2p5un.jpg', 1429363994);

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `created_at` int(10) NOT NULL,
  `class` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `title`, `created_at`, `class`) VALUES
(1, 'Засоби гігієни', 1429278301, 'hygiene'),
(2, 'Одяг', 1429279063, 'clothes'),
(3, 'Взуття', 1429279076, 'shoes'),
(4, 'Валізи та сумки', 1429279092, 'bags'),
(5, 'Посуд', 1429279108, 'dashes'),
(6, 'Декоративна косметика', 1429279124, 'cosmetics'),
(7, 'Товари для дітей', 1429279138, 'children-goods'),
(8, 'Продукти харчування', 1429279164, 'food'),
(9, 'Алкогольні напої', 1429279180, 'alcohol'),
(10, 'Прикраси', 1429279197, 'ornamentation'),
(11, 'Ювелірні вироби', 1429279210, 'jewelry'),
(12, 'Різне', 1429279224, 'variables');

-- --------------------------------------------------------

--
-- Структура таблиці `category_lang`
--

CREATE TABLE IF NOT EXISTS `category_lang` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `category_id` int(5) NOT NULL,
  `lang_id` int(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп даних таблиці `category_lang`
--

INSERT INTO `category_lang` (`id`, `category_id`, `lang_id`, `title`) VALUES
(1, 1, 2, 'Предметы гигиены'),
(2, 3, 2, 'Обувь');

-- --------------------------------------------------------

--
-- Структура таблиці `category_second`
--

CREATE TABLE IF NOT EXISTS `category_second` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `parent_id` int(5) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=29 ;

--
-- Дамп даних таблиці `category_second`
--

INSERT INTO `category_second` (`id`, `title`, `parent_id`, `created_at`) VALUES
(1, 'Догляд за волоссям', 1, 1429278601),
(2, 'Догляд за ротовою порожниною ', 1, 1429285693),
(3, 'Догляд за шкірою', 1, 1429285716),
(4, 'Для дітей', 1, 1429285731),
(5, 'Для жінок', 2, 1429285852),
(6, 'Для чоловіків', 2, 1429285864),
(7, 'Для дітей', 2, 1429285875),
(8, 'Для жінок', 3, 1429285908),
(9, 'Для чоловіків', 3, 1429285922),
(10, 'Для дітей', 3, 1429285932),
(11, 'Для жінок', 4, 1429285956),
(12, 'Валізи', 4, 1429286075),
(13, 'Каструлі', 5, 1429286095),
(14, 'Тарілки', 5, 1429286106),
(15, 'Креми', 6, 1429286171),
(16, 'Пудра', 6, 1429286186),
(17, 'Іграшки', 7, 1429286200),
(18, 'Косметика', 7, 1429286213),
(19, 'М''ясні продукти', 8, 1429286233),
(20, 'Консерви', 8, 1429286244),
(21, 'Горілка', 9, 1429286255),
(22, 'Вино', 9, 1429286268),
(23, 'Намисто', 10, 1429290333),
(24, 'Біжутерія', 10, 1429290360),
(25, 'Ланцюжки', 11, 1429290381),
(26, 'Кільця', 11, 1429290402),
(27, 'Машини', 12, 1429290419),
(28, 'Велосипеди', 12, 1429290431);

-- --------------------------------------------------------

--
-- Структура таблиці `category_second_lang`
--

CREATE TABLE IF NOT EXISTS `category_second_lang` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `category_id` int(5) NOT NULL,
  `lang_id` int(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблиці `category_third`
--

CREATE TABLE IF NOT EXISTS `category_third` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `parent_id` int(5) NOT NULL,
  `created_at` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп даних таблиці `category_third`
--

INSERT INTO `category_third` (`id`, `title`, `parent_id`, `created_at`) VALUES
(1, 'Костюми', 5, 1429291483),
(2, 'Піджаки', 5, 1429291497),
(3, 'Плаття', 5, 1429291508),
(4, 'Спідниці', 5, 1429291528),
(5, 'Костюми', 6, 1429291561),
(6, 'Краватки', 6, 1429291576),
(7, 'Брюки', 6, 1429291589),
(8, 'Футболки', 6, 1429291601),
(9, 'Шкільна форма', 7, 1429291620),
(10, 'Брюки', 7, 1429291638),
(11, 'Футболки', 7, 1429291653),
(12, 'Шампуні', 1, 1429341599),
(13, 'Зубні пасти', 2, 1429341611);

-- --------------------------------------------------------

--
-- Структура таблиці `category_third_lang`
--

CREATE TABLE IF NOT EXISTS `category_third_lang` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `category_id` int(5) NOT NULL,
  `lang_id` int(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп даних таблиці `category_third_lang`
--

INSERT INTO `category_third_lang` (`id`, `category_id`, `lang_id`, `title`) VALUES
(1, 2, 2, 'Пиджаки');

-- --------------------------------------------------------

--
-- Структура таблиці `category_third__manufacturer`
--

CREATE TABLE IF NOT EXISTS `category_third__manufacturer` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `manufacturer_id` int(7) NOT NULL COMMENT 'Виробник',
  `category_id` int(5) NOT NULL COMMENT 'Категорія третього рівня',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Дамп даних таблиці `category_third__manufacturer`
--

INSERT INTO `category_third__manufacturer` (`id`, `manufacturer_id`, `category_id`) VALUES
(2, 11, 3),
(3, 8, 7),
(4, 10, 8),
(5, 9, 10),
(6, 8, 1),
(7, 9, 8),
(8, 8, 3),
(9, 7, 5),
(10, 7, 2),
(11, 9, 3),
(12, 12, 3),
(13, 8, 8),
(14, 12, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `collection`
--

CREATE TABLE IF NOT EXISTS `collection` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(7) NOT NULL COMMENT 'Користувач',
  `product_id` int(7) NOT NULL COMMENT 'Продукт',
  `created_at` int(10) NOT NULL COMMENT 'Створено',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп даних таблиці `collection`
--

INSERT INTO `collection` (`id`, `user_id`, `product_id`, `created_at`) VALUES
(3, 3, 8, 1429364396);

-- --------------------------------------------------------

--
-- Структура таблиці `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL COMMENT 'email',
  `created_at` int(10) NOT NULL COMMENT 'Створено',
  `token` varchar(255) NOT NULL COMMENT 'Запит на видалення з підписки',
  `time_token` int(10) DEFAULT NULL COMMENT 'Час запиту на видалення з підписки',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп даних таблиці `email`
--

INSERT INTO `email` (`id`, `email`, `created_at`, `token`, `time_token`) VALUES
(1, 'romaten1@rambler.ru', 123, '1', 123),
(2, 'romaten2@rambler.ru', 0, '', NULL),
(3, 'romaten3@rambler.ru', 1429247667, '', NULL),
(4, 'romaten1@rambler.ru', 1429472355, '', NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT 'Назва',
  `date` varchar(255) NOT NULL COMMENT 'Дата проведення',
  `status` int(2) NOT NULL COMMENT 'Опубліковано',
  `created_at` int(10) NOT NULL COMMENT 'Створено',
  `updated_at` int(10) NOT NULL COMMENT 'Оновлено',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп даних таблиці `event`
--

INSERT INTO `event` (`id`, `title`, `date`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Збори шанувальників українського гумору', '1 квытня', 1, 0, 0),
(2, 'Збори шанувальників українського гумору співу', '2 квітня', 1, 0, 1429384336);

-- --------------------------------------------------------

--
-- Структура таблиці `event_lang`
--

CREATE TABLE IF NOT EXISTS `event_lang` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `event_id` int(5) NOT NULL COMMENT 'Подія',
  `lang_id` int(2) NOT NULL COMMENT 'Мова',
  `title` varchar(255) NOT NULL COMMENT 'Назва',
  `description` text NOT NULL COMMENT 'Опис',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Дамп даних таблиці `event_lang`
--

INSERT INTO `event_lang` (`id`, `event_id`, `lang_id`, `title`, `description`) VALUES
(1, 2, 1, 'Збори шанувальників українського гумору співу', '<p><span style="background-color:rgb(249, 249, 249); font-family:segoeuiregular,sans-serif; font-size:12px">Збори шанувальників українського гумору співу</span></p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблиці `lang`
--

CREATE TABLE IF NOT EXISTS `lang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `default` smallint(6) NOT NULL DEFAULT '0',
  `date_update` int(11) NOT NULL,
  `date_create` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп даних таблиці `lang`
--

INSERT INTO `lang` (`id`, `url`, `local`, `name`, `default`, `date_update`, `date_create`) VALUES
(1, 'uk', 'uk-UA', 'Українська', 1, 1429108931, 1429108931),
(2, 'ru', 'ru-RU', 'Русский', 0, 1429108931, 1429108931);

-- --------------------------------------------------------

--
-- Структура таблиці `manufacturer`
--

CREATE TABLE IF NOT EXISTS `manufacturer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT 'Назва',
  `image` varchar(255) NOT NULL COMMENT 'Логотип',
  `site` varchar(255) NOT NULL COMMENT 'Сайт виробника',
  `updated_at` int(11) NOT NULL COMMENT 'Оновлено',
  `created_at` int(11) NOT NULL COMMENT 'Створено',
  `status` int(11) NOT NULL COMMENT 'Опубліковано',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='таблиця даних про виробника' AUTO_INCREMENT=13 ;

--
-- Дамп даних таблиці `manufacturer`
--

INSERT INTO `manufacturer` (`id`, `title`, `image`, `site`, `updated_at`, `created_at`, `status`) VALUES
(7, 'Етномодерн', 't92DK_etnomod.png', 'http://ethnomodern.com.ua/', 1429368016, 1429301008, 0),
(8, 'Nenka', '8jXgQ_nenka.png', 'http://nenka.kiev.ua/', 1429301185, 1429301185, 1),
(9, 'Raslov', 'S3QMx_raslov.png', 'http://raslov.com.ua/', 1429301297, 1429301297, 1),
(10, 'tago', 'Yv9hx_tago.png', 'http://tago.ua/', 1429301483, 1429301483, 1),
(11, 'e-korali', 'jmc6z_e-koral.jpg', 'http://e-korali.com/', 1429301750, 1429301696, 1),
(12, 'Отаман', 'TqRl__otaman.png', 'http://www.otaman.com.ua', 1429354089, 1429354037, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `manufacturer_lang`
--

CREATE TABLE IF NOT EXISTS `manufacturer_lang` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `manufacturer_id` int(5) NOT NULL COMMENT 'Виробник',
  `lang_id` int(2) NOT NULL COMMENT 'Мова',
  `title` varchar(255) NOT NULL COMMENT 'Назва',
  `description` text NOT NULL COMMENT 'Опис',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Дамп даних таблиці `manufacturer_lang`
--

INSERT INTO `manufacturer_lang` (`id`, `manufacturer_id`, `lang_id`, `title`, `description`) VALUES
(2, 7, 1, 'Етномодерн', '<div class="description clearfix" style="box-sizing: border-box; color: rgb(85, 85, 85); font-family: ''Source Sans Pro'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; font-weight: bold; text-align: justify;">\r\n<p><span style="font-family:courier new,courier,monospace"><span style="font-family:comic sans ms,cursive">Студія українського одягу Етно Модерн спеціалізується на виробництві різноманітної якісної вишиваної продукції уже понад 10років. Протягом цього часу нашого існування, ми здобули широку клієнтську базу на всій території України та за її межами.&nbsp;</span></span><span style="font-family:courier new,courier,monospace"><span style="font-family:comic sans ms,cursive">Модельний ряд Етно Модерн відрізняється незрівнянним смаком, особливою елегантністю та неперевершеним шиком. У нас Ви можете знайти для себе жіночу, чоловічу та дитячу вишиванку на будь-який смак, а також яскраву сувенірну продукцію. Виробнича база представлена європейським виробником швейного обладнання &quot;Kingtex&quot;,&nbsp;</span></span><span style="font-family:comic sans ms,cursive">яке дозволяє виготовляти велику кількість одиниць одягу за достатньо короткий термін часу.&nbsp;При цьому зберігається високий рівень якості в оптимальному ціновому сегменті.&nbsp;Асортимент представленої продукції постійно оновлюється та відповідає смакам найвибагливіших покупців.&nbsp;Будемо раді бачити Вас серед наших партнерів.</span></p>\r\n</div>\r\n\r\n<div class="blog-content clearfix" style="box-sizing: border-box; color: rgb(85, 85, 85); font-family: ''Source Sans Pro'', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px; margin-bottom: 20px;">\r\n<div class="content-wrap clearfix" style="box-sizing: border-box;">\r\n<p><strong><span style="font-family:comic sans ms,cursive">Ми можемо запропонувати масове пошиття жіночого, чоловічого та дитячого одягу.</span></strong></p>\r\n\r\n<p><strong><span style="font-family:comic sans ms,cursive">Два пошивочні цехи розміщують універсальні машини, оверлоки, розпошивалки, фетлоки, двоголкові, петельні, гудзикові та закріпочні.</span></strong></p>\r\n</div>\r\n</div>\r\n'),
(3, 7, 2, 'Етномодерн', '<p>Студия украинского одежды Этно Модерн специализируется на производстве разнообразной качественной вышитой продукции уже более 10 лет. В течение этого времени нашего существования, мы получили широкую клиентскую базу на всей территории Украины и за ее пределами. Модельный ряд Этно Модерн отличается несравненным вкусом, особой элегантностью и непревзойденным шиком. У нас Вы можете найти для себя женскую, мужскую и детскую вышиванку на любой вкус, а также яркую сувенирную продукцию. Производственная база представлена ​​европейским производителем швейного оборудования &quot;Kingtex&quot;, которое позволяет изготавливать большое количество единиц одежды по достаточно короткий период времени. При этом сохраняется высокий уровень качества в оптимальном ценовом сегменте. Ассортимент представленной продукции постоянно обновляется и соответствует вкусам самых требовательных покупателей. Будем рады видеть Вас среди наших партнеров.</p>\r\n\r\n<p>Мы можем предложить пошив женской, мужской и детской одежды.</p>\r\n\r\n<p>Два пошивочные цеха размещают универсальные машины, оверлоки, розпошивалкы, фетлокы, двухигольные, петельные, пуговичные и Закрепочные.</p>\r\n'),
(4, 8, 1, 'Nenka', '<p>Шановні клієнти, раді вітати Вас на сайті інтернет-магазина Nenka! Nenka пропонує своїм клієнтам дизайнерський одяг тільки високої якості та унікального дизайну, розробленого талановитими модельєрами, враховуючи останні тенденції моди. Купуючи будь-яку модель із коллекції Nenka, можете бути впевненими на всі сто відсотків, що унікальний стиль та елегантність Вам гарантовані!</p>\r\n\r\n<p>Ми виробники одягу, тому найбільш привабливі умови для оптових клієнтів, безумовно, тільки в нашому інтернет-магазині! Одяг Nenka користується великим попитом, не тільки в Україні - країні виробництва, але і в Россії, Казахстані, та в інших країнах світу. Постійне оновлення моделей і тільки якісні технології пошиву і підбору тканини. Динамічні кольори, яскраві фасони, з використанням дизайнерських рішень та неординарних підходів.</p>\r\n\r\n<p>Влітку Nenka випустила коллекцію жіночого та чоловічого вбрання. Це - яскраві плаття, блузи, кофти та багато іншого.Кожній дівчині важливо бути бездоганно гарною та її одяг повинен бути ексклюзивним. З таким настроєм дизайнери створюють завершеність образу і витонченість, що властиво жіночому силуету. Також Nenka представляє чоловічу коллекцію, яка поєднує в собі всі варіанти чоловічого одягу, починаючи з футболок-поло, закінчуючись легкими спортивними брюками. Вітровки, джинси, футболки, та багато іншого. Nenka орієнтована на Ваш комфорт!&nbsp;</p>\r\n'),
(5, 8, 2, 'Nenka', '<p>Уважаемые клиенты, рады приветствовать Вас на сайте интернет-магазина Nenka! Nenka предлагает своим клиентам дизайнерскую одежду только высокого качества и уникального дизайна, разработанного талантливыми дизайнерами, учитывая последние тенденции моды. Покупая любую модель из Коллекции Nenka, можете быть уверенными на все сто процентов, что уникальный стиль и элегантность Вам гарантированы!<br />\r\nМы производители одежды, поэтому наиболее привлекательные условия для оптовых клиентов, безусловно, только в нашем интернет-магазине! Одежда Nenka пользуется большим спросом, не только в Украине - стране производства, но и в России, Казахстане, и в других странах мира. Постоянное обновление моделей и только качественные технологии пошива и подбора ткани. Динамические цвета, яркие фасоны, с использованием дизайнерских решений и неординарных подходов.<br />\r\nЛетом Nenka выпустила коллекцию женской и мужской одежды. Это - яркие платья, блузы, кофты и многое иншого.Кожний девушке важно быть безупречно красивой и ее одежда должна быть эксклюзивным. С таким настроением дизайнеры создают завершенность образа и изящество, что свойственно женскому силуэту. Также Nenka представляет мужскую коллекцию, которая сочетает в себе все варианты мужской одежды, начиная с футболок-поло, заканчиваясь легкими спортивными брюками. Ветровки, джинсы, футболки и многое другое. Nenka ориентирована на Ваш комфорт!</p>\r\n'),
(6, 9, 2, 'Raslov', '<p>Компания RASLOV представлена на рынке уже более 10 лет. Начиная с сезона осень-зима 2007, компания поменяла направление в создании одежды и получила новый облик, взяв курс на создание модных коллекций верхней одежды. Основное направление продукции нашей компании - пальто и плащи.</p>\r\n\r\n<p>При производстве одежды, мы применяем исключительно добротные ткани итальянских мастеров. Каждая наша коллекция по-своему неповторима.</p>\r\n\r\n<p>Недавно реорганизованная производственная база нашей компании использует уникальные технологии.</p>\r\n\r\n<p>Торговая марка RASLOV обладает узнаваемостью и имеет свой неповторимый стиль. Качество продукции RASLOV удовлетворяет вкусам самых изысканных покупателей. А цены и условия, которые мы предлагаем нашим партнерам, дают возможность развиваться и вести стабильный и прибыльный бизнес.</p>\r\n'),
(7, 9, 1, 'Raslov', '<p>Компанія RASLOV представлена ​​на ринку вже більше 10 років. Починаючи з сезону осінь-зима 2007, компанія поміняла напрям в створенні одягу і отримала новий вигляд, взявши курс на створення модних колекцій верхнього одягу. Основний напрямок продукції нашої компанії - пальто і плащі.<br />\r\nПри виробництві одягу, ми застосовуємо виключно добротні тканини італійських майстрів. Кожна наша колекція по-своєму неповторна.<br />\r\nНещодавно реорганізована виробнича база нашої компанії використовує унікальні технології.<br />\r\nТоргова марка RASLOV володіє впізнаваністю і має свій неповторний стиль. Якість продукції RASLOV задовольняє смакам самих вишуканих покупців. А ціни та умови, які ми пропонуємо нашим партнерам, дають можливість розвиватися і вести стабільний і прибутковий бізнес.</p>\r\n'),
(8, 10, 1, 'Tago', '<p>Tago - виробник одежі</p>\r\n'),
(9, 10, 2, 'Tago', '<p>Производитель одежды</p>\r\n'),
(10, 11, 1, 'e-korali', '<p style="text-align:justify">Є особливі люди, події, і почуття... А є особливі речі - єдині, неповторні, створені вмілими руками талановитих майстрів.</p>\r\n\r\n<p style="text-align:justify">Ми пропонуємо якісні оригінальні традиційні та стилізовані вишиванки для будь-якого віку. Крім того, у нашому магазині Ви знайдете цікаві жіночі прикраси, вишиті краватки, сумки та інші аксесуари, ляльки-мотанки, сувеніри та листівки ручної роботи. Асортимент постійно збільшується та змінюється. Ми працюємо згідно каталогу і приймаємо індивідуальні замовлення згідно побажань клієнтів.</p>\r\n\r\n<p style="text-align:center">Бажаємо Вам приємного гортання сторінок нашого каталогу та задоволення від покупок на&nbsp;<a href="http://e-korali.com/" style="color: rgb(234, 150, 52); text-decoration: none;">www.e-korali.com</a>.</p>\r\n\r\n<p style="text-align:center">Ви варті найкращого! Ви варті ручної роботи!</p>\r\n'),
(11, 11, 1, 'e-korali', '<p>Есть особые люди, события и чувства ... А есть особенные вещи - единственные, неповторимые, созданные умелыми руками талантливых мастеров.</p>\r\n\r\n<p>Мы предлагаем качественные оригинальные традиционные и стилизованные вышиванки для любого возраста. Кроме того, в нашем магазине Вы найдете интересные женские украшения, вышитые галстуки, сумки и другие аксессуары, куклы-мотанки, сувениры и открытки ручной работы. Ассортимент постоянно увеличивается и изменяется. Мы работаем согласно каталогу и принимаем индивидуальные заказы согласно пожеланиям клиентов.</p>\r\n\r\n<p>Желаем Вам приятного перелистывания страниц нашего каталога и удовлетворения от покупок на www.e-korali.com.</p>\r\n\r\n<p>Вы достойны лучшего! Вы достойны ручной работы!</p>\r\n'),
(12, 12, 1, 'Отаман', '<h1>Своя сорочка</h1>\r\n\r\n<p style="text-align:justify">Своя сорочка - завжди ближча до тіла. І українці, як ніхто, це розуміють. Це у нас на рушниках вишивають не просто візерунки, а долю. Це у нас на вишиванках розпускаються не просто квіти, а цвіт життя. Це у нас в народному костюмі відбивається багатовікова історія.</p>\r\n\r\n<p style="text-align:justify">Український стрій формувався і змінювався протягом століть. І на основі традицій та особливостей народного костюму сформувався й одяг запорізьких козаків. Вони надавали величезне значення своєму зовнішньому вигляду. Любили як простий одяг, так і шляхетні шати. Особливо це стосувалося козацької старшини. Ошатні тканини, дороге оздоблення, каміння, хутро &ndash; все це стало невід&rsquo;ємною частиною костюму козацької верхівки. І відтворити цю красу у сучасному світі і є місією бутік-ательє &laquo;Отаман&raquo;.</p>\r\n\r\n<p style="text-align:justify">Своїм клієнтам ми пропонуємо стилізований одяг козацької старшини. Панянки знайдуть у нас вбрання, в якому гармонійно поєдналися класика українського традиційного одягу та сучасні тренди. Також у нас представлене взуття, автентичні аксесуари, сувеніри ручної роботи, козацька атрибутика.</p>\r\n'),
(13, 12, 2, 'Атаман', '<p>Своя рубашка</p>\r\n\r\n<p>Своя рубашка - всегда ближе к телу. И Украинцы, как никто, это понимают. Это у нас на полотенцах вышивают не просто узоры, а судьбу. Это у нас на вышиванках распускаются не просто цветы, а цвет жизни. Это у нас в народном костюме отражается многовековая история.</p>\r\n\r\n<p>Украинский строй формировался и менялся на протяжении веков. И на основе традиций и особенностей народного костюма сформировался и одежда запорожских казаков. Они придавали огромное значение своему внешнему виду. Любили как простую одежду, так и благородные одежды. Особенно это касалось казацкой старшины. Нарядные ткани, дорогая отделка, камни, мех - все это стало неотъемлемой частью костюма казацкой верхушки. И воссоздать эту красоту в современном мире и является миссией бутик-ателье &laquo;Атаман&raquo;.</p>\r\n\r\n<p>Своим клиентам мы предлагаем стилизованный одежду казацкой старшины. Барышни найдут у нас наряд, в котором гармонично соединились классика украинской традиционной одежды и современные тренды. Также у нас представлена ​​обувь, аутентичные аксессуары, сувениры ручной работы, казацкая атрибутика.</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблиці `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1429092404),
('m140209_132017_init', 1429092409),
('m140403_174025_create_account_table', 1429092410),
('m140504_113157_update_tables', 1429092412),
('m140504_130429_create_token_table', 1429092413),
('m140830_171933_fix_ip_field', 1429092413),
('m140830_172703_change_account_table_name', 1429092413),
('m141222_110026_update_ip_field', 1429092414);

-- --------------------------------------------------------

--
-- Структура таблиці `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT 'Назва',
  `image` varchar(255) NOT NULL COMMENT 'Фотографія',
  `author_id` int(5) NOT NULL COMMENT 'Автор',
  `status` int(2) NOT NULL COMMENT 'Статус',
  `updated_at` int(10) NOT NULL COMMENT 'Оновлено',
  `created_at` int(10) NOT NULL COMMENT 'Створено',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='Новини' AUTO_INCREMENT=5 ;

--
-- Дамп даних таблиці `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `author_id`, `status`, `updated_at`, `created_at`) VALUES
(2, '"Зелене світло" у Європу: українські товари стають помітнішими на ринку ЄС ', '00Gy5_zelene-.png', 3, 1, 1429343068, 1429342935),
(3, 'Росспоживнагляд почав масштабну перевірку українських товарів', 'oYPV4_rosspoj.jpeg', 3, 1, 1429343316, 1429343316),
(4, '10 Українських брендів які замінять імпортні товари', 'V5-77_10-ukra.jpg', 3, 1, 1429343424, 1429343424);

-- --------------------------------------------------------

--
-- Структура таблиці `news_lang`
--

CREATE TABLE IF NOT EXISTS `news_lang` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `news_id` int(5) NOT NULL COMMENT 'Новина',
  `lang_id` int(2) NOT NULL COMMENT 'Мова',
  `title` varchar(255) NOT NULL COMMENT 'Назва',
  `text` text NOT NULL COMMENT 'Текст',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Дамп даних таблиці `news_lang`
--

INSERT INTO `news_lang` (`id`, `news_id`, `lang_id`, `title`, `text`) VALUES
(1, 1, 1, 'Захист магістерських робіт студентів спеціальності 8.10010201 «Процеси, машини та обладнання агропромислових підприємств»', '<p><span style="background-color:rgb(243, 244, 245); font-family:segoeuiregular,sans-serif; font-size:12px">Захист магістерських робіт студентів спеціальності 8.10010201 &laquo;Процеси, машини та обладнання агропромислових підприємств&raquo;</span></p>\r\n'),
(2, 2, 1, '"Зелене світло" у Європу: українські товари стають помітнішими на ринку ЄС', '<p><span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:medium">&quot;Зелене світло&quot; у Європу: українські товари стають помітнішими на ринку ЄС</span></p>\r\n\r\n<p><span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:medium">&nbsp;Українські виробники шукають ринки збуту, щоб компенсувати втрати від російської блокади. Як йдеться в сюжеті ТСН.19:30, експорт продукції до ЄС цього року зріс на чверть. Цього року експорт продукції української птахофабрики до Росії - припинився, зате збільшився до Євросоюзу. Умови торгівлі з ЄС покращились, а стандарти виробництва на фабриці європейці перевірили і переконалися &ndash; ідеальна чистота, модулі зважування і комп&#39;ютерне сканування тушок. Українські машини із зерном вирушать у Німеччину. Ринок завойовували чистотою пшениці &ndash; ніякої хімії на полях, лише природні добрива. Тепер немає відбою від покупців за кордоном. &quot;Є більше бажаючих придбати нашу продукцію, ніж ми її можемо продати&quot;, - кажуть у компанії. Читайте також: Експорт українських товарів зрушив від Росії у бік Євросоюзу - Більдт Ці сівалки, до яких можна під&#39;єднувати комп&#39;ютери &ndash; гордість кіровоградського заводу - вже знають у Європі. &quot;Ми заключили нові контракти з новими нашими ділерами в Латвії, Угорщині і Румунії&quot;, - кажуть на заводі.</span><br />\r\n<span style="color:rgb(0, 0, 0); font-family:times new roman; font-size:medium">Більше читайте тут:&nbsp;</span><a href="http://tsn.ua/groshi/zelene-svitlo-u-yevropu-ukrayinski-tovari-stayut-pomitnishimi-na-rinku-yes-391960.html" style="font-family: ''Times New Roman''; font-size: medium; line-height: normal;">http://tsn.ua/groshi/zelene-svitlo-u-yevropu-ukrayinski-tovari-stayut-pomitnishimi-na-rinku-yes-391960.html</a></p>\r\n'),
(3, 2, 2, '"Зеленый свет" в Европу: украинские товары становятся более заметными на рынке ЕС ', '<p>Украинские производители ищут рынки сбыта, чтобы компенсировать потери от российской блокады. Как говорится в сюжете ТСН.19: 30 экспорт продукции в ЕС в этом году вырос на четверть. В этом году экспорт продукции украинского птицефабрики в России - прекратился, зато увеличился в Евросоюз. Условия торговли с ЕС улучшились, а стандарты производства на фабрике европейцы проверили и убедились - идеальная чистота, модули взвешивания и компьютерное сканирование тушек. Украинские машины с зерном отправятся в Германию. Рынок завоевывали чистотой пшеницы - никакой химии на полях, только природные удобрения. Теперь нет отбоя от покупателей за рубежом. &quot;Есть больше желающих приобрести нашу продукцию, чем мы ее можем продать&quot;, - говорят в компании. Читайте также: Экспорт украинских товаров сдвинулся от России в сторону Евросоюза - Бильдт Эти сеялки, к которым можно подключать компьютеры - гордость кировоградского завода - уже знают в Европе. &quot;Мы заключили новые контракты с новыми нашими дилерами в Латвии, Венгрии и Румынии&quot;, - говорят на заводе.<br />\r\nБольше читайте здесь: http://tsn.ua/groshi/zelene-svitlo-u-yevropu-ukrayinski-tovari-stayut-pomitnishimi-na-rinku-yes-391960.html</p>\r\n'),
(4, 3, 1, 'Росспоживнагляд почав масштабну перевірку українських товарів', '<div class="typography" style="margin: 0px; padding: 0px; border: 0px; color: rgb(58, 58, 58); font-size: 15px; line-height: 21px; font-family: Arial, sans-serif;">\r\n<h2>&nbsp;</h2>\r\n\r\n<p>РФ починає новий етап торговельної війни з Україною.</p>\r\n</div>\r\n\r\n<div class="post-body typography" style="margin: 0px; padding: 0px; border: 0px; color: rgb(58, 58, 58); font-size: 15px; line-height: 21px; font-family: Arial, sans-serif;">\r\n<p><a href="http://ukr.lb.ua/news/2015/04/03/300750_rosiya_zaboronila_ukrainskiy.html" style="margin: 0px; padding: 0px; border: 0px; color: rgb(97, 130, 153); font-weight: bold;">Заборону на ввезення до Росії засобів для чищення і миття української &quot;СК Джонсон&quot;</a>запроваджено в рамках масштабної кампанії перевірки&nbsp;української продукції.</p>\r\n\r\n<p>Про це свідчить публікація&nbsp;<a href="http://lb.ua/go.php?url=aHR0cDovL3RvcC5yYmMucnUvYnVzaW5lc3MvMDMvMDQvMjAxNS81NTFkNjkwMDlhNzk0N2ZhMTQ0MGM3NTM=" style="margin: 0px; padding: 0px; border: 0px; color: rgb(97, 130, 153); font-weight: bold;">РБК</a>, що ґрунтується на листі заступника голови Росспоживнагляду Ірини Брагіної.</p>\r\n\r\n<p>У ньому місцевим санітарним лікарям РФ наказано &quot;терміново... організувати заходи для виявлення продукції виробництва України, зазначеної в додатку, та проведення її експертиз&quot;. У додатку - список із 15 видів продукції, зокрема косметика, парфумерія, мило, засоби для миття, шпалери, меблі, постіль, жіночі гігієнічні прокладки і тампони, дитячі пелюшки і підгузки, аналогічні вироби з будь-якого матеріалу, духи і туалетна вода.</p>\r\n\r\n<p>У планах Росспоживнагляду на першу половину 2015 року таких перевірок української продукції немає. Відповідно, перевірки проводять за скаргами споживачів на якість продукції.</p>\r\n\r\n<p>За даними Федеральної митної служби, з України в Росію торік із зазначеного списку ввезли засобів для миття на $51 млн, туалетного мила - майже на $22 млн, шпалер і настінних покриттів з паперу - більш ніж на $205 млн, стільців і крісел - на $33 млн, жіночих гігієнічних прокладок, тампонів і дитячих підгузків - майже на $122 млн.</p>\r\n</div>\r\n'),
(5, 3, 2, 'Роспотребнадзор начал масштабную проверку украинских товаров', '<p>РФ начинает новый этап торговой войны с Украиной.</p>\r\n\r\n<p><br />\r\nЗапрет на ввоз в Россию средств для чистки и мойки Украинская &quot;СК Джонсон&quot; введен в рамках масштабной кампании проверки украинской продукции.</p>\r\n\r\n<p>Об этом свидетельствует публикация РБК, основанной на письме заместителя главы Роспотребнадзора Ирины Брагиной.</p>\r\n\r\n<p>В нем местным санитарным врачам РФ предписано &quot;срочно ... организовать мероприятия для выявления продукции производства Украины, указанной в приложении, и проведения ее экспертизы&quot;. В приложении - список из 15 видов продукции, в частности косметика, парфюмерия, мыло, средства для мытья, обои, мебель, постель, женские гигиенические прокладки и тампоны, детские пеленки и подгузники, аналогичные изделия из любого материала, духи и туалетная вода.</p>\r\n\r\n<p>В планах Роспотребнадзора на первую половину 2015 таких проверок украинской продукции нет. Соответственно, проверки проводятся по жалобам потребителей на качество продукции.</p>\r\n\r\n<p>По данным Федеральной таможенной службы, из Украины в Россию в прошлом году из указанного списка ввезли моющих средств на $ 51 млн, туалетного мыла - почти на $ 22 млн, обоев и настенных покрытий из бумаги - более чем на $ 205 млн, стульев и кресел - на $ 33 млн , женских гигиенических прокладок, тампонов и детских подгузников - почти на $ 122 млн.</p>\r\n'),
(6, 4, 1, '10 Українських брендів які замінять імпортні товари', '<div class="itemIntroText" style="margin: 0px; padding: 0px; color: rgb(64, 64, 64); font-family: Arial, Helvetica, sans-serif; line-height: 16px;">Нам часто нарікають, що українськи товари важко знайти в супермаркетах. Ми підготували 10 брендів, які легко купити і відмовитись від імпорту!</div>\r\n\r\n<div class="itemFullText" style="margin: 0px; padding: 0px; color: rgb(64, 64, 64); font-family: Arial, Helvetica, sans-serif; font-size: 12px; line-height: 16px;">\r\n<p>1. Зубна паста. Ми знайшли декілька виробників зубної пасти, але більшість з них не чітко пояснили в яких торгових мережах вони продають свій товар. Тому у цьому розділі ми дамо посилання на сайт<a href="http://www.irenbukur.com/" rel="nofollow" style="margin: 0px; padding: 0px; color: rgb(68, 68, 68); text-decoration: none; outline: none;" target="_blank">www.irenbukur.com.</a>&nbsp;Ми купували пасту цієї торгової марки у неї натуральний смак і відсутній різкий хімічний смак. Міусом є ціна. Ця паста не&nbsp;з дешевих, але на наш погляд вартує своїх грошей.</p>\r\n\r\n<div class="text_exposed_show" style="margin: 0px; padding: 0px;">\r\n<p>2. Чай. Українці вживають багато гарячих напоїв. Раніше ми вже писали про Каву зі Львова, та чай, який вирощено (!) в Україні. Тому сьогодні ми рекомендуємо звернути увагу на Поліський Чай<a href="https://www.facebook.com/profile.php?id=100007325264905" style="margin: 0px; padding: 0px; color: rgb(68, 68, 68); text-decoration: none; outline: none;">https://www.facebook.com/profile.php?id=100007325264905</a></p>\r\n\r\n<p>3. Чоловічий одяг. В Україні є безліч виробників одягу. Їх варто тільки пошукати. Але особливої уваги заслуговує український виробник джинсів&nbsp;<a href="https://www.facebook.com/HeadgesUA" style="margin: 0px; padding: 0px; color: rgb(68, 68, 68); text-decoration: none; outline: none;">https://www.facebook.com/HeadgesUA</a></p>\r\n\r\n<p>4. Жіноче взуття. Не так давно ми розповідали про чудового виробника взуття. Тому сьогодні просто варто нагадати про&nbsp;<a href="http://l.facebook.com/l.php?u=http%3A%2F%2Fwww.kasandra.ua%2F&amp;h=UAQFOPUqr&amp;enc=AZP9p6yL_wzcxROzj91fH0cV69GbU-YefeXmgBVzzAh06T_0vmtJiJwMXPiolERbecTm45Vl4_Y8sSsvj3816bRxxxM6hXA6u_31iqQDkbZDp8xXV45XP5WUHFO3tIycyJn58C6QDKThksUv_htxb9hrXCstvgEQPVM4ZdctCl5Gn2BhfGOaHHcmc1DqlF7-IPnTuAhwZtCvxYGziJ4L33HtkS6L-2HcOdiRvb6zPvChlzlivUxnRk2QMhezcKkMq-8okjBMrUMOl1XYqb7ijrH1YksxOrtSMRCZ4Ryl8UwaYIcFgEsDhf0StYBvDWG7UOyCvfYDkbN8Z_7GgjPHfnoYVgjofHfdAGr9Uiz6Ykx44qLqTwAm2ch1-HKChPg0rxeAzPUdHq_zy1ILYYNQi6qBlYIqVpPfZNNSJWp1usnT9-r7BH5cFz_RTeJHqaIZ9cPRFEivXO-XOuvwF4Zg74xNkdvSHKfaY1WXmBtbT1NvmaNdxu0HtkjFRLsZwk2f6Pl7SWQKeET4TIKkz01ejEPo0YQBubIUJiLYVGPGwDAn5InS7tyRN3ZJip5zzXZhF3fyNXWHTCdW6UHu7bEE5HLezWA2tol77qfYXWEJIxDx1IKq2HsiGAVJ1U9tRdfs9noOgp4519HOopS2JNtGjQwT0ELTgunNcWnBLR40ZhFuG-940iDS8Ev19kuo16hI5YRWlfQNN0rh0xacDEUSBuGnuSy0_PqwPj1Kl7fgvNGE8Lb9d5-LkXXCPt0LJwJ2IQJ8XoUIFVY0u1St1EXNbMknSrGINpdqfM0BPeg2C4f47zdPAgudpFjYO0S0ANt1zwwMNehLXDu-UAzOfbyEl97hZqeo31fWHnEpqiRfqdkuUdTgp48JyIr8ospn3wp83Fo-shy7Tac4-iJOc3V2uwqnCiA6fDxklQJyq799iI7RZJhY6TpT6asX0BIaRUnWv5UhuxXH0JheVBjVjYvnXvNkD-YTdXRdGXgEtGvY-2MN35qqkKF_dvPdJnUhqRSEHqje1ojmXvQpioRPBubblwYN8akJAXraMqPsQa53dtxaUnh0HXvaLY7tl4SiE1Rk7i-F7yZOGiP-KDGcGW9ptSIcptlXpnCtwFpbLtOD83_xDHY7j9-byrbWYAVqF781efCVARnV65acv-lNNOFq5Xc9b5hqC_7cMOoDUM-oLdM4BOchgK0ZF_Yt4BXHdsd9ZlTNpOqfc_X8uYWZQllqV-WADZ1ckGgNjSXip73Nx_rUIhIOeND-JjJ0F3n3NhLO9r_34wuWNP7wTD2ZMa-lnCfxZtgx-LWRuHJgcP4VB8jXITRr1AvIdh41Jz4_nx--d9wMnIhQXkLvQAEs7PhrRzKPF5uf_fIzBRlC5DHuUZUkTplZnKn3H5b4hCaj42CoU6Sl45vGmLyrJb4dL6neEip-OG4zaPGMvigTJ7ZznPtGn5EVPDKJsGvhZpwMgKr2a9QQeVPY27mHXKMxpd5r0SUKwPAP1zb7mQ3ciBX3k4f1dFe1aqxwVp_erj7n3JBxMP3g4vOZMa9ncciu19QbngFovX3KWRbszSG5xGHFPjRZYAU59B8Mtw7GIX_xzXByDF-gC9x2GrFzvU1JqrjQJQ4EwCW4xYpF7qc1uDXysvcBqlGYkQZGgf6iKzXftlx4TWFyl4w3BK5RIDL7byke5SavT6qlfI7v9NCYMCtm3iyGFYdHqBSTNSk5EJ-_6OBdZApeAz7mGmMes_szhaIRD87d36MHeSYACTwHJwpmircJKtHZdJC7vXu6QD-Z9r3Dw60MEuMzuUk8S2Is55azFIQMlPyJPIeWnz9oKAvuSVTZbZx0qchgVUrfpulJ2qXtOM6Tc7I3W0xOEFGCbWg5IatCU7nHUFGI9rGNyUqUoQ8POkb3pvCKlSJyMWsiwOde35M3Ips13MypBOLuFZPDblSpnl4uRD6P99HZP5yVPj6ZHEFcdopuaFd6dzX7yuXI5F5bPFb8vb7jqAVFiXoSV1ZvSeI6UaN21yHzBqvb7bTkL_uNYgEBGBXb0U8by9Bg6HF-dQmNU4ssPG1ryaZPaGLxLmePdfuABNNbSrENrD8WYBdmlKaVuT8ne2m2cQUvElMAnNJ45ldoaUdkCJr3Ixbno4r6YvSa6SrIWP_nFsmUd9eEzlkjEECbCz9msY-Sh6tb3_bU_lS2ngqHVWuZepD3jROndfgu037-V1H7Db3T79gA6zt5fekAljE4YKjUGkpLk3BMVs1xgOEPm_9n-5UNww8LfiJqEmKc-22aBZGT4_F_GQUE1ay53iGBPg9QdrYd3Xq7gpZ9COQOnFnhH1-40yfph6njEi55G2W8LnSxjducZmpwJyp-Qj3pfOcKH0W4JLSYYQvb3rPsDRP3ShDcJteyig_q9zOnyIK2E5SkZdpZt4NDtOEefvu3y5NsPGJJ50lqYLa_0iBGOZl3joWFNnR3PFh9Qg67ecQmlImX4ViN1tdRNgd2DmZNgXCjNWCmNNDvza_cIpxNFsyt6Op2qj9JzYwuRx26V0Ed0UUhtVSiUEpwU3L7U7qmFTBEH_RZpL1lZO0ivwiCRnU_E5kv9L-XQ-hmBm6EgUFTXODPH-Iwk7POYi1kiAnvexhzxBXBQcjOtCptBfpIBHmHmCBh2uLpLGjjO2-bNXIypcEK84-oHNYpiFaYiqCqUVLKdzGDCQEPVVCOhEG4zgntesLJoiDJuscakcSz9lAwawXj5ydDGBXDnFmATfoTga1FsPAtbC1qTnaom7CBswanSClirWDwBtNI0nbCKHyLB5fCN9wee1kUESxO6148QhhBjdT5avDFuMi79-Q_OhXRUMIckBpGju2iECsnU9ptUUH3J-JL7B3PwwUALasdpRXJe4jNJxTS7kcN10TyHAIERwvNlNzUNKFb7sYnsTJjfl9wsQECv2OQApwx6Hki8c-OcA8VzpUBnbseJzrzFZ8JxDH4SGakHyhVspMTnGef9W5xoAbHbn2PwoKkUdDpelU1jL1pyX0mAys9bT-8t-jrC0C6GyPvkb5wgV4Q0CPbPZVIFXDfQfVIzYh5wkMzOtcBNzFRuJ0XsHqgBtB75z1Eh85jebyLapywqfxTfBCvjcFmcRFNjty9rezh39mUIV18JaZobw6hvMfCk5v9EKowxasVfvZhLeSg9hFG5-h6ldCgVDJ2WxqQX8fAPBf-JosGl35gvcNF--3-2C1J-9pgvBI488Z1Hyc_UzWFInKdZEHejj3ukWNSqcqqe4uIIa1lyhnR7o_Etbct-se293vVqKe8HolzdIT4KrKcIdzeqMQ_0l2daTBmFF0SXaLXvgRqXP1oZT7h5VJUNi63njvKqOR7kZO-P2to6dj0uWbgDv47ziSONi7df9CF4mfZ2IYzWcxQ5UwCNYBeKWC_Z9tRB1Zr2nbwXZn5BQnuwi1bhwmjyTWoywVsxaQdBsWbPVGcGmYYNHv6U4ncJCF8YrcmOBeNMEvf7XwDAqUqq4DMvp6NhZrNoVx4qpmfxUoEDo5QzaYMq6B9qMP3O6NBp2XkfemkiJwglOnOWPXdXNYpeSG-_sGKd2N7QQR-1RD1sSkJxl0lW1WOZwYducWIu-vtWM38K6xxjPuUPqqzJ5z56dc9cUCHPGwMnmWcuVJuNik2d5OJ5y-56BWNV6oECHTfgP0imzRgKHcIXV1lkVCFe-_td-JXMMvMv2WFqHJ2ColulayTkF-9ETIY6iwyZA_IoOasBALLA1ZrURT3AYW-yrgkj45HbBLXSgphsRfkgfY6nrHr39YSS8zYkJWpyIIDnRm6TWHTZn9t_sEC9t9SeN9eVMx4fnq-6tRxC7Ih71T2Xqrtu8Wi_vzKzxnBl0eCwltOGVVC1kFJBU-bc6yUckrMWp9Tu9DVTaEsCieQZ71HsbiPKXiYQMthvF7g0pLQAKWri4XpD5dUqSGn2PJWCayD8lbZNDX2bXBRdPpFB6HXfzbcfBqM3sk806sP6lek-ikp79jlRoeigsrT0JXpdPn3rypYPVGMpd552HS5JhB2Y5EFNUqGt99SDzFhXv1mO3tyG8ILR8WnFMeJLoGSc35-bbCEcLQxSlGKwMcMKaQFXkNiTXaJQd5Y4U-JAEkysNmLPFAR0PSUKcUJG12aY2jSXSowIFCmUcqfqZBAGCDpgPLMq9PTwOjje9om5OmYWjORVvz4BaEZZA5dT-5URM2O1RGhxmrVZsTIb8QPeY9mFSeWtf5pDO8EW1d3P5YnyLxa0bnxKEG0L3SGykCMxnSaxVBH5LcD6LP1neVEw-A82vKTzFFYD9DYwfAuioLKvxIS&amp;s=1" rel="nofollow" style="margin: 0px; padding: 0px; color: rgb(68, 68, 68); text-decoration: none; outline: none;" target="_blank">www.kasandra.ua</a></p>\r\n\r\n<p>5. Дитячі іграшки ви знайдете на сторінці сайті&nbsp;<a href="http://www.tsypashop.com.ua/" rel="nofollow" style="margin: 0px; padding: 0px; color: rgb(68, 68, 68); text-decoration: none; outline: none;" target="_blank">www.tsypashop.com.ua</a></p>\r\n\r\n<p>6. А це нас здивували дитячі підгузки. Їх ви зможете придбати на сайті інтернет магазину&nbsp;<a href="http://nyatko.com.ua/catalog/pidguzky/" style="margin: 0px; padding: 0px; color: rgb(68, 68, 68); text-decoration: none; outline: none;">http://nyatko.com.ua/catalog/pidguzky/</a></p>\r\n\r\n<p>7. У вас дома є домашні тварини? Їх теж ви можете годувати кормами українського виробництва&nbsp;<a href="http://kormotech.com/" style="margin: 0px; padding: 0px; color: rgb(68, 68, 68); text-decoration: none; outline: none;">http://kormotech.com/</a></p>\r\n\r\n<p>8. Окремо стоїть питання побутової хімії. Дуже важливо, щоб вона була безпечна! Тому ми радимо звернути на безфосфатні мийні засоби від&nbsp;<a href="http://www.delamark.com.ua/" style="margin: 0px; padding: 0px; color: rgb(68, 68, 68); text-decoration: none; outline: none;">http://www.delamark.com.ua/</a></p>\r\n\r\n<p>9. Також є великий вибір косметики і засобів гігієни. Для нашого огляду ми обрали&nbsp;<a href="http://l.facebook.com/l.php?u=http%3A%2F%2Fwww.elfa.ua%2F&amp;h=fAQGwG8zD&amp;enc=AZOb4FzyZNZRtQ30ZYcrdbUiEF_t947E4bXa7tneMfffnbVCXnJQEjdLN8pB_oDw9jsFN2uqLF9Se28vkjdPwqUCMlQp6yocmWMAvSHjp1ni13mSC6iGl2PjkWf0rCqxWcSnzmG97ngHxca95G1mLA3g4Fxx3g0_GFTZKVAVIu2bWwyqzKVtHZZNqv2jRZ8uO7jxVSJWabIRTd6778Yw2vNk8QNu0FISdfjtsX0WHBDLPJjvAPaePlq8V_LdHAOnmv5AsNYWHI47hPwkBgPcYBApBvZyTJw35VNwghMazgSKHTKCHVZ161PANwb2JNHVVluSJb-W-POfSrr_qKeWINw88RVUTM2lhco_Gq0K2QCx5q41-RjZ3jrd54UMgZsI2KsGdYupr2jOsnveq9M7eAyGCzstR4QFwau9HCkMDNajgOCazyevA_2t4Kd1aPNvevWRdLkJVo2fCbkwdYU8SQDzkYdI7-qJfFsX3q-T10L8zQB0cxZACSA75P7rpUNWhGXYpSvWHH-k2PZ7Y-0gMZ8RGbM4KojNPi-fenCn9PkmxFv9Nc7_OkKC5SZh2A7984MNqrerGo9ZeXbwX7-q2yvvlH6631pc0PG-j5QGPTCGkglSU3hXsLriDSrOMF401tmCULgWnArSgi66AhMm1Za6-TLeJKuM6XHf2Bdb8XIR50KG4JB7nd4O4HAzU1uAfD-aGguU_1SNtWRyAAjESNm6MTOmbxQ-DM2X8CD6J36g_sjt1eqHv2cf2jzVhfXyfJkSzBS9ApQMinJfUv_J8k3Wpr-4eL4_uMoDGqpwhrvJ8WZgz7kmRRt4tZVjmt48GQHYVpKAUidPx42ZIwNYUyif9Wp9Y8jYuAH8DliTNxUkhxRHwpZkdvj-mMQ1kxzLTFl6oWjchCOtkm1ELwNVroOov-prFEiqxn5MsoxdsxzrwbBUqpCK3ceqch97PG5VIdV5XAIiuSWr793H1a8ME0hdTk6HwdG_TkZ_iAY598TFHmUgLvU9fOCqh2iS6Pw_hJjHCAOUPMouNhTYu1JOSwDYXgdiU6KnuhL5vfPLKe4ueBGplxll3bbBwFoJowDai82yHwmeo3VBW-m8L73Qb80szhaPsCZLxVSJnrTGWhcnmuEeM0ugkUm8aB-Sfnd_F9ddk3MYRS1X24HlPTB_eY7y4yLwQAs_MPtjaA9CGf2ZNWmx3PqbzasrO1DqICd7D01BhAS4OYnvo9g4aOArDiCm8TcUjHMVhpSl5fBscSh1D4HRI9lcCtxeuOgflKw7enOAITMcUljYzcn7lQML8F3iq474Wv5HyXI5J1dViMfxc8vAlzvNwoJwk6E1EAr6qMo6ts37cmOI17utpM4t10YOkf2--cLx6W5FN9U6R6QlIGp0Y2cEMIc91tWHe_h4uZGnLS5HvEtfnZdr-1JesZuyRK9vVpTkhOYpy-PgTFx6g3W3DUmxzgt7oKtESDmcpH2UQ7cnGTXltr412D4fUqIbyA8rx4DzXXV_B0XsYxPw1zMfoi_DaZJoEd8l6aPjLszvvtnAJJ4E3lIEtpwki7Ot6lE6OBGsm23StZW5fVAzxVaDxQmPcsd9T7ZKyi8NIK7wbYt6iK0Jb-Ot0AJ-dPM9d5bSM-ij4_goLxet_tiZG4OilYFKCAIBsfxGEp55QVHRH3CNg0z5mQpVIjuO-j0AlUl2Sy8Ed0wgZu02xSLCL2zYc5BZqC31eAGYG78hg7mkSkkfrYj0xoz7u6tmMGl_rvFhtnC9_xR11CWCBPNnmh9gp4n2fJPR21Q4scVd6Vzj8rDcEZQuFuYdK8yTEpBqxLFspkSDbi7aNETf156mGIxKtFdx0-5xNvnK_4BF38sT9d5CrC4WRnkhR1OvCCQTh_KcaiqyUf743yb-SyPI7ED1agNP_l1d5cESEAVC280Qjg3f7asbM94hlYLYpF38cOoOUVVGaXwm54mm4lJFgKALnhcjjtRM-Hi6--WTLvjFSpLjQRpBSLKkLmCs17SessxiGnkR8S8l8G4K8XVygFw59DUJE-K-E-e6vVWx6aTHqCUuRCnQL08jHcRo4iY2i0D0B3jaK2ZFRBOqzd1Z8BwVk63T-_GqX9sfnUCQUedtJI4ALfHMHa2jT0iHPGjvFWcNWF_rzQqtse7-la8HwxktNcqneqIyJY2HZ7akjmNPK-TZ3sUtcdK6AbJW6dLwMvDdpoNJp_QnWRF50vV8GpHVT7QUjWBzY-uOTVDAltI2O78NcAv94jLS0C8UpHTQBYbN3EgeXGd1KXzhQDG3b0OmUdkQjxu7H_zMAk1K7UzbXJwVZyzgQpRBb5VwbGsf7BjhK9-38eZ8TAuGXBSZ7AZdNcPZbw8-mcOEeFBVDpf34jtJAP6G9zM1RTWhuqCdclRPBIt9QM7fypa5Adu4jUeHDcNeD_dPweoyh884kVwoWprYeqAf6VSNlVo58KXO-aogg-kWjG1-bNRKj5Ua7Wg3vH3CWFFBGDjLcJzCneNOl1iXHsZPgZaV8aSpXdcYxK_ju-Fy3MPuhGCQTfSVj5-OQ6mNWQj6xmwwd4aptDeXDR4h_cPAzRsUmHjCEgmHcmgFsxZFw8EXADSPT5tWKCI5GV-f-N6KaV1aBCup-VfAXmuQtd_zggLAgtiryyAToVVCXt5exQBttwpYto0U8SfmzUYyFRoRkEOdP6XJbIC-4mR6CpUbxk73uq18jYL-da3t_s8k-w86j4U2qYRopO64K0NrDVJ4anQZ-68ygAA2Vu_o_WD3YYxPhMfktioFyMNRT4X_YsFXCa_Qs9BKZYzvqUyCAMWVc4OMei2a39GpZ5pVrAYFNuKiyPKhYD6K-MFLT7jQnwx6_MC2dh0HX_EyZiG7hU4bizRvk48bhXe0f0uDns4jYmtDS7meXcarrkwVM83PVcViCYujrApm2bJeQ94KsdcNJVeWhLlN_qqiWhCBeOVgUTR9aq0KVIuqJl9gKbKEFEhxmSdAsMmskakhZKyLqUy1r9fB_MAQW_ySuP2bp0_vPjrbEwtZB3WUY7VvOyQ1RQKyr-XG9_gbobcMcJxkKeg1uh3PVWi9WyyWkMfVg2IHOPGBNapZEK_bJnj83W1s3kZRiDNlgyzcu7pHM8vQWzcQmLLA-oxUD4RyYFve309gKAHDN8GkME9oxw2TTzhundpsrFb29AGqcHrLWKMfVMof5NqNk4gkwU8hqlk-N4WrW4b0qStYOo1K2LdkXcHmT5KZAlsOjQLjtHEQRi_v3Q8ARDHuvIF5MJ4KSwTsQESMC0yoPYtwTLdgcBcKpTxGbh5dppM1dRPUAlas1_Gr3m-ieFuX5uskc3GvWipQMOj3dZ6WkXs3r27D6IAWE6nzCqY-to2BYgd6HAW6NqeFJm1RowA23L1aFlPPVeKaAPjMgTHB7xviTFJzwzcqFfe8zaeM0aMy9ymcxvCyof29NSmIQhatPC9v6JECoSRiqQpFXnaZdTBW0-Kq1y4MvFDmlT0_1Cyc-z9JCmowntmNyuA6ptUlQHDAczqKdluyxGmOaG7qxEu-cYYPtg-v1BTomHwKl-LkbNSycepOlXUPumnL6q-gywljjOdj9l6F5oWPqTpHoatLnIlJl-ALp-5eHnkejN7XXtKNCZhj_Uyr7A63dQBiCm1QnVbIX_3vHlUNNZ-HqVwh7VtgJneqtc0hxFo8NWzyDitrQqxcbc9Fmqnq_HxmkyJXH3caAVxdkiG0P3V8PpaTNIELCYdAVO_YRQg62vftjaoSgRj53UiyY4ATt65MS0nFvuFv8e65tTj1bWuu8W3C4ny8hlSDzmnCUqRInUbZJPtLtWLvlBJJw8RuO59SieuHkjZGxAyoXtNqQD8SyvGKzkckkyKonnJ8TvO1Kn4r6Pc3p9KJDj957z1Zw0u3ZCwn_-7bl5deTrF6eS-tEy5KmoY6b4wzDhz_F9dMR0bYeWiLxCbTHUbSV0ZBqVjaEuNJfG9IYtAb88Zr9GRCKHe32zxC058trHseVrV9ucA9MLQjMgI6Nv5En5_UGYxpvQJGrsceraJNsebUA5zV9pHv2mTiFw8z64jVRukqDv1-HYvVFpii0MCS6ycsM7u0gZxxyHxmVYvLvSRH7I7fh_BIhI76_sNKwiyjesXsOoAfVmx17zQHoYkdqegGy3OTRDLTI4Pni7Gwj51TFbaQ-uc-HJ7psLLoK-JUboHCirPRqFkcCPKMrftrksj_2eeDW50xMG6AT--Lf26Fj5bgle7mela-yp3TmdFsyakpWDsLAOLztGBmF3JceH8RH5UozsxmYg6hVvO63qBotAD506nkGS5B&amp;s=1" rel="nofollow" style="margin: 0px; padding: 0px; color: rgb(68, 68, 68); text-decoration: none; outline: none;" target="_blank">www.elfa.ua</a></p>\r\n\r\n<p>10. І нарешті домашній текстиль від&nbsp;<a href="http://www.interiomania.com/" rel="nofollow" style="margin: 0px; padding: 0px; color: rgb(68, 68, 68); text-decoration: none; outline: none;" target="_blank">www.interiomania.com/</a></p>\r\n\r\n<p>Сподіваємось що цей огляд був для вас корисний! Підтримайте наш проект і запросіть друзі до нашої спільноти!&nbsp;<br />\r\nТисніть like &amp; share. Разом ми змінимо країну на краще!</p>\r\n</div>\r\n</div>\r\n'),
(7, 4, 2, '10 Украинских брендов заменяющие импортные товары', '<p>Нам часто жалуются, что украински товары трудно найти в супермаркетах. Мы подготовили 10 брендов, которые легко купить и отказаться от импорта!<br />\r\n1. Зубная паста. Мы нашли несколько производителей зубной пасты, но большинство из них не четко объяснили в каких торговых сетях они продают свой товар. Поэтому в этом разделе мы дадим ссылку на сайтwww.irenbukur.com. Мы покупали пасту этой торговой марки у нее натуральный вкус и отсутствует резкий химический вкус. Миусом является цена. Эта паста не из дешевых, но на наш взгляд стоит своих денег.</p>\r\n\r\n<p>2. Чай. Украинцы употребляют много горячих напитков. Ранее мы уже писали о Кофе со Львова, и чай, который выращен (!) В Украине. Поэтому сегодня мы рекомендуем обратить внимание на Полесский Чайhttps: //www.facebook.com/profile.php? Id = 100007325264905</p>\r\n\r\n<p>3. Мужская одежда. В Украине есть множество производителей одежды. Их стоит только поискать. Но особого внимания заслуживает украинский производитель джинсов https://www.facebook.com/HeadgesUA</p>\r\n\r\n<p>4. Женская обувь. Не так давно мы рассказывали о замечательном производителя обуви. Поэтому сегодня просто стоит напомнить о www.kasandra.ua</p>\r\n\r\n<p>5. Детские игрушки вы найдете на странице сайте www.tsypashop.com.ua</p>\r\n\r\n<p>6. А это нас удивили детские подгузники. Их вы сможете приобрести на сайте интернет магазина http://nyatko.com.ua/catalog/pidguzky/</p>\r\n\r\n<p>7. У вас дома есть домашние животные? Их тоже можно кормить кормами украинского производства http://kormotech.com/</p>\r\n\r\n<p>8. Отдельно стоит вопрос бытовой химии. Очень важно, чтобы она была безопасна! Поэтому мы советуем обратить на бесфосфатные моющие средства от http://www.delamark.com.ua/</p>\r\n\r\n<p>9. Также есть большой выбор косметики и средств гигиены. Для нашего обзора мы выбрали www.elfa.ua</p>\r\n\r\n<p>10. И наконец домашний текстиль от www.interiomania.com/</p>\r\n\r\n<p>Надеемся что этот обзор был для вас полезен! Поддержите наш проект и пригласите друзья к нашему сообществу!<br />\r\nЖмите like &amp; share. Вместе мы изменим страну к лучшему!</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблиці `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT 'Назва',
  `image` varchar(255) NOT NULL COMMENT 'Фотографія',
  `author_id` int(5) NOT NULL COMMENT 'Автор',
  `status` int(1) NOT NULL COMMENT 'Опубліковано',
  `updated_at` int(10) NOT NULL COMMENT 'Оновлено',
  `created_at` int(10) NOT NULL COMMENT 'Створено',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='таблиця записів блогу' AUTO_INCREMENT=14 ;

--
-- Дамп даних таблиці `post`
--

INSERT INTO `post` (`id`, `title`, `image`, `author_id`, `status`, `updated_at`, `created_at`) VALUES
(5, 'Найстильніше україньке висілля 2015', 'gYDUL_naystil.jpg', 3, 1, 1429163060, 1429129971),
(6, 'Айдентика в націнальному стилі тепер у моді', 'cjanD_aydenti.jpg', 3, 1, 1429130016, 1429130016),
(7, 'Залиш свій слід', 'lcD6x_zalish-.jpg', 3, 1, 1429130037, 1429130037),
(8, 'Парад фотоконкурсів в українському строї', '8F7uk_parad-f.jpg', 3, 1, 1429130073, 1429130073),
(9, 'Найстильніше україньке висілля 2015', 'HJrJH_naystil.jpg', 3, 1, 1429130114, 1429130114),
(10, 'Парад фотоконкурсів в українському строї', 'XTVP9_parad-f.gif', 3, 1, 1429130157, 1429130157),
(11, 'Айдентика в націнальному стилі тепер у моді', 'ukbQ9_aydenti.jpg', 3, 1, 1429130185, 1429130185),
(12, 'Найстильніше україньке висілля 2015', 'yPv6F_naystil.jpg', 3, 1, 1429130206, 1429130206),
(13, 'У ПОШУКАХ MADE IN UKRAINE', '9cbzc_u-poshu.jpg', 3, 1, 1429386898, 1429167337);

-- --------------------------------------------------------

--
-- Структура таблиці `post_lang`
--

CREATE TABLE IF NOT EXISTS `post_lang` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `post_id` int(5) NOT NULL COMMENT 'Пост',
  `lang_id` int(2) NOT NULL COMMENT 'Мова',
  `title` varchar(255) NOT NULL COMMENT 'Назва',
  `text` text NOT NULL COMMENT 'Текст',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп даних таблиці `post_lang`
--

INSERT INTO `post_lang` (`id`, `post_id`, `lang_id`, `title`, `text`) VALUES
(13, 5, 1, 'Найстильніше українcьке весілля 2015', '<h1><strong>Спершу були&nbsp;<em>змовини</em>&nbsp;, </strong></h1>\r\n\r\n<p>на яких підписувалась шлюбна угода. яку записували в урядові книги та підписували свідки і молоді. Люди простіші в урядові книги умов не вписували, а домовлялися при свідках. На змовини скликались родичі та приятелі. Тут домовлялись також про посаг, віно, привінок. Посагом називали те, що батьки давали дівчині&nbsp;: гроші, золоті та срібні прикраси, намиста, посуд срібний, мідний, цинковий, одяг, коні, слуги. Якщо в молодої не було братів то в посаг давали і землю. Якщо земля була в матері то вона йшла не синам, а дочкам. Молодий записував віно і привінок. Звичай давати віно йшов ще з княжих часів, але він давався спочатку як викуп, а пізніше записувався самій молодій. В &quot; змовному листі &quot; записували&nbsp;<em>посаг</em>,&nbsp;<a href="http://uk.wikipedia.org/wiki/%D0%92%D1%96%D0%BD%D0%BE" style="text-decoration: none; color: rgb(11, 0, 128); background: none;" title="Віно">віно</a>&nbsp;та привінок. В лист записували також коли мало відбутись вінчання та весілля. Записували в листі також&nbsp;<em>грошову заруку</em>, на той випадок коли одна із сторін не дотримиє умов. Змовні листи записували в урядові актові книги. Після одруження дружина самостійно володіла своїм віном, так само вона розпоряжалася власними або набутими маєтками, тобто мала право продавати, дарувати чи віддавати в заставу.</p>\r\n\r\n<p>Після змовин були&nbsp;<em>заручини</em>&nbsp;і після заручин весілля . Після цього пара вважалася одруженою.</p>\r\n\r\n<p><span style="color:rgb(37, 37, 37); font-family:sans-serif; font-size:14px">В суботу ввечері вили &laquo;вільце&raquo; (гільце, деревце, ріщка), невелике деревце або гілку прикрашали квітами, це супроводжувалось також піснями, танцями та вечерею. В той самий день жінки пекли коровай, який прикрашали птахами з тіста та квітами. Гільце (священе дерево) втикають в хліб та прикрашають, свічками, калиною, позолоченими горіхами, яблуками, рутою, кольоровими свічками. Гільце ставлять в кутку навпроти образів. Гільце прикрашалось зверху до низу.</span></p>\r\n'),
(15, 5, 2, 'Русский вариант', '<p>Краткий текст русского варианта</p>\r\n'),
(16, 13, 1, 'У ПОШУКАХ MADE IN UKRAINE', '<p style="text-align:justify">18-19 квітня на Контрактовій площі зберуть понад 200 виробників товарів і послуг по всій Україні &ndash; на фестивалі &quot;У пошуках made in Ukraine&quot;.</p>\r\n\r\n<p style="text-align:justify">Під час монтажу і демонтажу обладнання та техніки, а також проведення самого заходу буде перекрито дорожній рух на площі &ndash; з 17:00 17 квітня до 4:00 20 квітня. Відповідні зміни будуть внесені і в роботу пасажирського транспорту загального користування. Крім того, Департаменту охорони здоров&#39;я доручено забезпечити під час фестивалю чергування бригад швидкої (екстреної) медичної допомоги.</p>\r\n\r\n<p style="text-align:justify">Нагадаємо, що фестиваль &quot;У пошуках made in Ukraine&quot; відбудеться вже втретє. Він має підтримати вітчизняних початківців виробників. Відвідувачам в різних тематичних зонах запропонують широкий асортимент товарів &ndash; від прикрас ручної роботи до меблів: одяг, взуття, спорттовари, косметику, побутову хімію, предмети декору, посуд, продукти харчування тощо.</p>\r\n\r\n<p style="text-align:justify">За інформацією Подільської райдержадміністрації, серед особливостей фестивалю буде організація зони розвиваючих ігор для дітей, де з ними будуть займатися професійні дитячі аніматори. Відкриють і зони зеленого туризму для тих, хто бажає пізнати і відвідати заповідні та мальовничі куточки країни: там будуть представлені еко-готелі і кемпінги. Також працюватимуть майданчики з їжею і зразками хенд-мейд від українських майстрів. Крім цього, для відвідувачів ярмарку співатимуть відомі українські артисти. Вхід вільний.</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблиці `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT 'Назва',
  `price` float NOT NULL COMMENT 'Ціна',
  `category_id` int(5) NOT NULL COMMENT 'Категорія',
  `manufacturer_id` int(5) NOT NULL COMMENT 'Виробник',
  `updated_at` int(10) NOT NULL COMMENT 'оновлено',
  `created_at` int(10) NOT NULL COMMENT 'Створено',
  `image` varchar(255) NOT NULL COMMENT 'Фотографія',
  `status` int(1) NOT NULL COMMENT 'Опубліковано',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп даних таблиці `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `category_id`, `manufacturer_id`, `updated_at`, `created_at`, `image`, `status`) VALUES
(5, 'Вишиванка батистова з поясом', 150, 1, 12, 1429354780, 1429354780, 'glDz7_vishiva.jpg', 1),
(6, 'Вишиванка батистова синя з біло-коричневою вишивкою', 250, 3, 9, 1429426165, 1429356366, 'A1usy_vishiva.jpg', 1),
(7, 'Блуза чорна з вишивкою "Калина"', 20000, 3, 12, 1429356874, 1429356874, 'pITOE_bluza-c.jpg', 1),
(8, 'Вишиванка з блакитно-білою вишивкою', 500, 5, 7, 1429363805, 1429363805, 'Kf8cv_vishiva.jpg', 1),
(9, 'Вишиванка з коричнево-жовтою вишивкою', 5000, 8, 8, 1429363911, 1429363911, 'EHHTa_vishiva.jpg', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `product_lang`
--

CREATE TABLE IF NOT EXISTS `product_lang` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `product_id` int(7) NOT NULL,
  `lang_id` int(2) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп даних таблиці `product_lang`
--

INSERT INTO `product_lang` (`id`, `product_id`, `lang_id`, `title`, `description`) VALUES
(1, 2, 1, 'Продукт 1', '<p>Продукт 1 - короткий опис</p>\r\n'),
(2, 5, 1, 'Вишиванка батистова з поясом', '<p>Вишиванка жіноча стилізована з машинною вишивкою темно-синього кольору.</p>\r\n\r\n<p>Тканина - батист, склад - шовк 50 %, бавовна 50%.</p>\r\n\r\n<p>Машинна вишивка. Нитки - бавовняні.</p>\r\n\r\n<p>Планка та рукава оздобені машинною вишивкою контрастного кольору, в основі якої лежать орнаментальні геометричні елементи, що взяті з рушників Центральної України.</p>\r\n\r\n<p>Блуза виготовляється під замовлення. Термін виготовлення - до 15 днів.</p>\r\n'),
(3, 6, 1, 'Вишиванка батистова синя з біло-коричневою вишивкою', '<p><span style="color:rgb(20, 24, 35); font-family:helvetica,arial,lucida grande,sans-serif">Вишиванка жіноча стилізована з машинною вишивкою</span><br />\r\n<span style="color:rgb(20, 24, 35); font-family:helvetica,arial,lucida grande,sans-serif">Тканина - батист, склад - шовк 50 %, бавовна 50%.</span><br />\r\n<span style="color:rgb(20, 24, 35); font-family:helvetica,arial,lucida grande,sans-serif">Машинна вишивка. Нитки - бавовняні.</span></p>\r\n'),
(4, 7, 1, 'Блуза чорна з вишивкою "Калина"', '<p><span style="font-size:14px">Блуза з чорного шифону, стилізована під традиційну українську вишиванку. Застібка асиметрична. Вишивка стилізована, ручна (стебловий шов + бісер).</span></p>\r\n\r\n<p><span style="font-size:14px">Блуза стане в нагоді під час святкових і урочистих подій. Також може стати окрасою комплектів ділового одягу.</span></p>\r\n'),
(5, 8, 1, 'Вишиванка з блакитно-білою вишивкою', '<p>Стилізована чоловіча сорочка прилеглого силуету з супатною застібкою.</p>\r\n\r\n<p>Тканина - бавовна сорочкова, нитки - поліестер.</p>\r\n\r\n<p>Машинна вишивка, хрестик.</p>\r\n\r\n<p>Геометричний орнамент.</p>\r\n\r\n<p>В даній вишиванці використано &quot;S&quot;-подібний елемент (&quot;сигма&quot;, &quot;вужик&quot;) - образ підземного Змія або Вужа. Змій - символ води, грому, блискавки. Змій також є охоронцем домашнього вогнища, володарем незліченних підземних скарбів, якими, за легендою, він щедро одаровує того, хто йому сподобається. Цей знак є схематичним зображенням еволюції всесвіту, його безкінечності, а також рухом сонця, знаком плодючості.</p>\r\n\r\n<p style="text-align:justify">Виготовляється на замовлення за стандартними чи індивідуальними розмірами.</p>\r\n\r\n<p style="text-align:justify">Термін виготовлення - до 10 днів.</p>\r\n'),
(6, 9, 1, 'Вишиванка з коричнево-жовтою вишивкою', '<p>Стилізована чоловіча сорочка прилеглого силуету з супатною застібкою.</p>\r\n\r\n<p>Тканина - бавовна сорочкова, нитки - поліестер.</p>\r\n\r\n<p>Машинна вишивка, хрестик.</p>\r\n\r\n<p>Геометричний орнамент.</p>\r\n\r\n<p>В даній вишиванці використано &quot;S&quot;-подібний елемент (&quot;сигма&quot;, &quot;вужик&quot;) - образ підземного Змія або Вужа. Змій - символ води, грому, блискавки. Змій також є охоронцем домашнього вогнища, володарем незліченних підземних скарбів, якими, за легендою, він щедро одаровує того, хто йому сподобається. Цей знак є схематичним зображенням еволюції всесвіту, його безкінечності, а також рухом сонця, знаком плодючості.</p>\r\n\r\n<p>Коричневий - колір матері-землі асоціюється з міцністю і надійністю</p>\r\n\r\n<p style="text-align:justify">Виготовляється на замовлення за стандартними чи індивідуальними розмірами.</p>\r\n\r\n<p style="text-align:justify">Термін виготовлення - до 10 днів.</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблиці `profile`
--

CREATE TABLE IF NOT EXISTS `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `public_email` varchar(255) DEFAULT NULL,
  `gravatar_email` varchar(255) DEFAULT NULL,
  `gravatar_id` varchar(32) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `bio` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `profile`
--

INSERT INTO `profile` (`user_id`, `name`, `public_email`, `gravatar_email`, `gravatar_id`, `location`, `website`, `bio`) VALUES
(3, NULL, NULL, 'admin@ua-catalog.ua', 'b6d39acf4a012742ffdfc729471cd6b4', NULL, NULL, NULL),
(4, NULL, NULL, 'user@ua-catalog.ua', '712f4489c27a82dbae17252241b26352', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблиці `shop`
--

CREATE TABLE IF NOT EXISTS `shop` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT 'Назва',
  `sity` varchar(255) NOT NULL COMMENT 'Місто',
  `address` varchar(255) NOT NULL COMMENT 'Адреса',
  `created_at` int(10) NOT NULL COMMENT 'Створено',
  `updated_at` int(10) NOT NULL COMMENT 'Оновлено',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп даних таблиці `shop`
--

INSERT INTO `shop` (`id`, `title`, `sity`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Магазин', 'Умань1', 'вул. Уманська 1', 1429211587, 1429211587),
(2, 'Магазин 2', 'Умань2', 'вул. Уманська 2', 1429212840, 1429212840),
(3, 'Магазин 3', 'Київ', 'вул. Київська 1', 1429213477, 1429213477);

-- --------------------------------------------------------

--
-- Структура таблиці `shop_product`
--

CREATE TABLE IF NOT EXISTS `shop_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `shop_id` int(5) NOT NULL COMMENT 'Магазин',
  `product_id` int(10) NOT NULL COMMENT 'Продукт',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Дамп даних таблиці `shop_product`
--

INSERT INTO `shop_product` (`id`, `shop_id`, `product_id`) VALUES
(1, 1, 5),
(2, 2, 6),
(3, 3, 9),
(4, 1, 7),
(5, 3, 8),
(6, 3, 6);

-- --------------------------------------------------------

--
-- Структура таблиці `slider_up`
--

CREATE TABLE IF NOT EXISTS `slider_up` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL COMMENT 'Фото',
  `title` int(255) NOT NULL COMMENT 'Назва',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп даних таблиці `slider_up`
--

INSERT INTO `slider_up` (`id`, `image`, `title`) VALUES
(1, 'O_YTW_1.jpg', 1),
(2, '_7lXu_2.jpg', 2),
(3, 'UHv3t_3.jpg', 3);

-- --------------------------------------------------------

--
-- Структура таблиці `social_account`
--

CREATE TABLE IF NOT EXISTS `social_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(255) NOT NULL,
  `client_id` varchar(255) NOT NULL,
  `data` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_unique` (`provider`,`client_id`),
  KEY `fk_user_account` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Структура таблиці `static_lang`
--

CREATE TABLE IF NOT EXISTS `static_lang` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `static_id` int(5) NOT NULL COMMENT 'Статична сторінка',
  `lang_id` int(2) NOT NULL COMMENT 'Мова',
  `title` varchar(255) NOT NULL COMMENT 'Назва',
  `text` text NOT NULL COMMENT 'Текст',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Дамп даних таблиці `static_lang`
--

INSERT INTO `static_lang` (`id`, `static_id`, `lang_id`, `title`, `text`) VALUES
(1, 1, 1, 'Робота і вакансії', '<h1>Робота і вакансії</h1>\r\n'),
(2, 1, 2, 'Работа и вакансии', '<p>Работа и вакансии</p>\r\n'),
(3, 2, 1, 'Що таке UA КАТАЛОГ?', '<p>Що таке UA КАТАЛОГ?</p>\r\n'),
(4, 2, 2, 'Что такое UA КАТАЛОГ?', '<p>Что такое UA КАТАЛОГ?</p>\r\n'),
(5, 3, 2, 'Реквизиты', '<p>Реквизиты</p>\r\n'),
(6, 4, 1, 'Контакти', '<p>Контакти</p>\r\n'),
(7, 4, 2, 'Контакты', '<p>Контакты</p>\r\n'),
(8, 5, 1, 'Про проект', '<p>Про проект</p>\r\n'),
(9, 5, 2, 'О проекте', '<p>О проекте</p>\r\n'),
(10, 6, 1, 'Зареєструвати магазин', '<p>Зареєструвати магазин</p>\r\n'),
(11, 6, 2, 'Зарегистрировать магазин', '<p>Зарегистрировать магазин</p>\r\n'),
(12, 7, 1, 'Розмістити рекламу', '<p>Розмістити рекламу</p>\r\n'),
(13, 8, 1, 'Розмістити акцію', '<p>Розмістити акцію</p>\r\n'),
(14, 7, 2, 'Разместить рекламу', '<p>Разместить рекламу</p>\r\n'),
(15, 10, 1, 'Зворотній з’язок', '<p>Зворотній з&rsquo;язок</p>\r\n'),
(16, 9, 1, 'Зворотній з’язок', '<p>Зворотній з&rsquo;язок</p>\r\n');

-- --------------------------------------------------------

--
-- Структура таблиці `static_page`
--

CREATE TABLE IF NOT EXISTS `static_page` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT 'Назва',
  `updated_at` int(11) NOT NULL COMMENT 'Оновлено',
  `created_at` int(11) NOT NULL COMMENT 'Створено',
  `status` int(1) NOT NULL COMMENT 'Статус',
  `type` int(2) NOT NULL COMMENT 'Тип сторінки',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Дамп даних таблиці `static_page`
--

INSERT INTO `static_page` (`id`, `title`, `updated_at`, `created_at`, `status`, `type`) VALUES
(1, 'Робота і вакансії', 1429210397, 1429210364, 1, 1),
(2, 'Що таке UA КАТАЛОГ?', 1429334054, 1429334054, 1, 1),
(3, 'Реквізити', 1429334110, 1429334110, 1, 1),
(4, 'Контакти', 1429334172, 1429334172, 1, 1),
(5, 'Про проект', 1429334238, 1429334232, 1, 2),
(6, 'Зареєструвати магазин', 1429334391, 1429334334, 1, 2),
(7, 'Розмістити рекламу', 1429334689, 1429334689, 1, 2),
(8, 'Розмістити акцію', 1429334732, 1429334732, 1, 2),
(9, 'Зворотній з’язок', 1429334896, 1429334896, 1, 2),
(10, 'Зворотній з’язок', 1429334907, 1429334907, 1, 3),
(11, 'Правила коментування і написання відгуків', 1429335103, 1429335103, 1, 3),
(12, 'Допомога', 1429335160, 1429335160, 1, 3);

-- --------------------------------------------------------

--
-- Структура таблиці `token`
--

CREATE TABLE IF NOT EXISTS `token` (
  `user_id` int(11) NOT NULL,
  `code` varchar(32) NOT NULL,
  `created_at` int(11) NOT NULL,
  `type` smallint(6) NOT NULL,
  UNIQUE KEY `token_unique` (`user_id`,`code`,`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(60) NOT NULL,
  `auth_key` varchar(32) NOT NULL,
  `confirmed_at` int(11) DEFAULT NULL,
  `unconfirmed_email` varchar(255) DEFAULT NULL,
  `blocked_at` int(11) DEFAULT NULL,
  `registration_ip` varchar(45) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `flags` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_unique_username` (`username`),
  UNIQUE KEY `user_unique_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `auth_key`, `confirmed_at`, `unconfirmed_email`, `blocked_at`, `registration_ip`, `created_at`, `updated_at`, `flags`) VALUES
(3, 'admin', 'admin@ua-catalog.ua', '$2y$10$azglCmrc3MAFmI2mxTXioeYYidSYT.6ck0CcreAfELAgHN.smA8oO', 'h9FwUI4G_kk8Qf0TsCFxc_PDP19rXsvc', 1429093748, NULL, NULL, '127.0.0.1', 1429093748, 1429093748, 0),
(4, 'user', 'user@ua-catalog.ua', '$2y$10$RoPczry85HIVd4c1XMdYkuqt9ttXqEBd/rr/GxZW.yLb.GOioX2ii', 'M3ZNwJBCHMeUDGrgK7v53PeC34C3oarr', 1429101785, NULL, NULL, '127.0.0.1', 1429101785, 1429101785, 0);

--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Обмеження зовнішнього ключа таблиці `social_account`
--
ALTER TABLE `social_account`
  ADD CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Обмеження зовнішнього ключа таблиці `token`
--
ALTER TABLE `token`
  ADD CONSTRAINT `fk_user_token` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
