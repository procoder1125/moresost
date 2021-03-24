-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 24 2021 г., 16:03
-- Версия сервера: 5.6.38
-- Версия PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `more`
--

-- --------------------------------------------------------

--
-- Структура таблицы `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `summary` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('member', 2, 1556622732),
('member', 3, 1556816898),
('member', 4, 1557827469),
('member', 5, 1557828598),
('member', 6, 1560517540),
('member', 7, 1561400863),
('member', 8, 1609921798),
('theCreator', 1, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('admin', 1, 'Administrator of this application', NULL, NULL, 1556622564, 1556622564),
('adminArticle', 2, 'Allows admin+ roles to manage articles', NULL, NULL, 1556622564, 1556622564),
('createArticle', 2, 'Allows editor+ roles to create articles', NULL, NULL, 1556622564, 1556622564),
('deleteArticle', 2, 'Allows admin+ roles to delete articles', NULL, NULL, 1556622564, 1556622564),
('editor', 1, 'Editor of this application', NULL, NULL, 1556622564, 1556622564),
('manageUsers', 2, 'Allows admin+ roles to manage users', NULL, NULL, 1556622564, 1556622564),
('member', 1, 'Registered users, members of this site', NULL, NULL, 1556622564, 1556622564),
('premium', 1, 'Premium members. They have more permissions than normal members', NULL, NULL, 1556622564, 1556622564),
('support', 1, 'Support staff', NULL, NULL, 1556622564, 1556622564),
('theCreator', 1, 'You!', NULL, NULL, 1556622564, 1556622564),
('updateArticle', 2, 'Allows editor+ roles to update articles', NULL, NULL, 1556622564, 1556622564),
('updateOwnArticle', 2, 'Update own article', 'isAuthor', NULL, 1556622564, 1556622564),
('usePremiumContent', 2, 'Allows premium+ roles to use premium content', NULL, NULL, 1556622564, 1556622564);

-- --------------------------------------------------------

--
-- Структура таблицы `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('theCreator', 'admin'),
('editor', 'adminArticle'),
('editor', 'createArticle'),
('admin', 'deleteArticle'),
('admin', 'editor'),
('admin', 'manageUsers'),
('support', 'member'),
('support', 'premium'),
('editor', 'support'),
('admin', 'updateArticle'),
('updateOwnArticle', 'updateArticle'),
('editor', 'updateOwnArticle'),
('premium', 'usePremiumContent');

-- --------------------------------------------------------

--
-- Структура таблицы `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `auth_rule`
--

INSERT INTO `auth_rule` (`name`, `data`, `created_at`, `updated_at`) VALUES
('isAuthor', 'O:28:\"common\\rbac\\rules\\AuthorRule\":3:{s:4:\"name\";s:8:\"isAuthor\";s:9:\"createdAt\";i:1556622563;s:9:\"updatedAt\";i:1556622563;}', 1556622563, 1556622563);

-- --------------------------------------------------------

--
-- Структура таблицы `brand_category`
--

CREATE TABLE `brand_category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand_category`
--

INSERT INTO `brand_category` (`id`, `name`) VALUES
(1, 'odejda'),
(2, 'obov'),
(3, 'karzinka');

-- --------------------------------------------------------

--
-- Структура таблицы `brand_logotype`
--

CREATE TABLE `brand_logotype` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `filename` varchar(255) DEFAULT NULL,
  `original_name` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `brand_logotype`
--

INSERT INTO `brand_logotype` (`id`, `category_id`, `name`, `filename`, `original_name`, `created_at`) VALUES
(2, 1, 'afwef', '15591288483530.jpg', 'Untitled-1.jpg', '2019-05-29 14:20:00');

-- --------------------------------------------------------

--
-- Структура таблицы `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `positsiya` int(11) NOT NULL,
  `dvigatel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_razgon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `max_moshnost` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `obyom_bogajnika` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `car`
--

INSERT INTO `car` (`id`, `category_id`, `created_at`, `positsiya`, `dvigatel`, `time_razgon`, `max_moshnost`, `obyom_bogajnika`, `sena`) VALUES
(1, 1, '2019-04-12', 1, '1485', '13', '107', '405/1225', 18481810),
(2, 2, '2019-04-12', 1, '1485', '13', '107', '405/1225', 19152470),
(3, 3, '2019-04-12', 1, '1485', '13', '107', '405/1225', 151654962),
(4, 1, '2019-04-15', 2, '1489', '13', '110', '405/1225', 122181500),
(5, 1, '2019-04-15', 3, '1489', '13', '110', '405/1225', 132181500),
(6, 1, '2019-04-15', 4, '1489', '13', '110', '405/1225', 138181500);

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `title`, `price`, `description`) VALUES
(1, 'HTML / CSS', '400 000', 'HTML (the Hypertext Markup Language) and CSS (Cascading Style Sheets) are two of the core technologies for building Web pages. HTML provides the structure of the page, CSS the (visual and aural) layout, for a variety of devices. Along with graphics and scripting, HTML and CSS are the basis of building Web pages and Web Applications. Learn more below about:'),
(2, 'Java SCRIPT + JQUERY', '400 000', 'JavaScript runs on the client side of the web, which can be used to design / program how the web pages behave on the occurrence of an event. JavaScript is an easy to learn and also powerful scripting language, widely used for controlling web page behaviour.\r\nContrary to popular misconception, JavaScript is not \"Interpreted Java\". In a nutshell, JavaScript is a dynamic scripting language supporting prototype based object construction.'),
(3, 'MySQL', '400 000', 'MySQL is an Oracle-backed open source relational database management system (RDBMS) based on Structured Query Language (SQL). MySQL runs on virtually all platforms, including Linux, UNIX and Windows. Although it can be used in a wide range of applications, MySQL is most often associated with web applications and online publishing.'),
(4, 'PHP', '400 000', 'What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was. You can even configure your web server to process all your HTML files with PHP, and then there\'s really no way that users can tell what you have up your sleeve.'),
(5, 'YII 2 Framework', '400 000', 'Yii started as an attempt to fix perceived drawbacks of the PRADO framework: Slow handling of complex pages, steep learning curve and difficulty to customize many controls. In October 2006, after ten months of development, the first alpha version of Yii was released, followed by the formal 1.00 release in December 2008..\r\n\r\nYii 1.1 was released in January 2010 adding a form builder, relational Active record queries, a unit testing framework and more. The Yii community continues to follow the 1.1 branch with PHP7 support and security fixes. The last release was version 1.1.20 in July 2018.');

-- --------------------------------------------------------

--
-- Структура таблицы `foto_cours`
--

CREATE TABLE `foto_cours` (
  `id` int(11) NOT NULL,
  `cours_id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `original_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `foto_cours`
--

INSERT INTO `foto_cours` (`id`, `cours_id`, `filename`, `original_name`) VALUES
(5, 1, '15574936052262.jpg', 'html-css-code-interactive-websites.jpg'),
(7, 2, '15574944449622.jpg', 'Untitled-2.jpg'),
(8, 3, '15575567735511.jpg', 'ps-5.jpg'),
(9, 5, '15575569124700.jpg', 'ps-6.jpg'),
(10, 4, '15575575024678.jpg', 'ps-7.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `groups`
--

CREATE TABLE `groups` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cours_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `groups`
--

INSERT INTO `groups` (`id`, `name`, `cours_id`) VALUES
(1, 'Algoritm', 2),
(2, 'English children', 1),
(3, 'Pifagor', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `lang`
--

CREATE TABLE `lang` (
  `id` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `local` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `default` int(11) NOT NULL,
  `date_update` int(11) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `message`
--

INSERT INTO `message` (`id`, `user_id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 3, 'Ajiniyoz', 'aji@mail.ru', 'sefd', 'sfeef', '0000-00-00 00:00:00'),
(2, 3, 'Ajiniyoz', 'aji@mail.ru', 'ss', 'sw', '0000-00-00 00:00:00'),
(3, 3, 'Ajiniyoz', 'aji@mail.ru', 'wefw', 'fwefwefwefwefwe', '0000-00-00 00:00:00'),
(4, 3, 'Ajiniyoz', 'aji@mail.ru', 'faefsef', 'aefwefwe', '0000-00-00 00:00:00'),
(5, 3, 'Ajiniyoz', 'aji@mail.ru', 'cscsa', 'faefwef', '0000-00-00 00:00:00'),
(6, 3, 'Ajiniyoz', 'aji@mail.ru', 'wafwfwef', 'wefwefwaef', '0000-00-00 00:00:00'),
(7, NULL, 'eshqobil', 'mq@mail.ru', 'esfewfok', 'oka9jfierjfkaiewjfiuaewfjioaej iejfiwaejfiwaej fiwefjaiewfja ief', '0000-00-00 00:00:00'),
(8, 1, 'maxmud', 'kamol_ikramov@mail.ru', 'sdfsdfsdf', 'fwefwef', '2019-05-26 00:00:00'),
(9, 1, 'Kamol', 'kamol_ikramov@mail.ru', 'ded', 'dwdwa', '2019-05-26 00:00:00'),
(10, 1, 'Kamol', 'kamol_ikramov@mail.ru', 'aefwefwef', 'fe vrfefvaefewfvwea', '2019-05-26 00:00:00');

-- --------------------------------------------------------

--
-- Структура таблицы `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1556562447),
('m141022_115823_create_user_table', 1556562450),
('m141022_115912_create_rbac_tables', 1556562452),
('m141022_115922_create_session_table', 1556562452),
('m150104_153617_create_article_table', 1556562452),
('m190502_160826_create_user_profile_table', 1556813536),
('m190502_172113_create_courses_table', 1556818372),
('m190502_172144_create_groups_table', 1556818373),
('m190502_172237_create_foto_cours_table', 1557231761),
('m190502_172237_create_message_table', 1558377947),
('m190502_172237_create_otvet_table', 1558850884),
('m190502_172300_create_brand_logotype_table', 1559055934),
('m190502_172301_create_brand_category_table', 1559062641),
('m190502_172349_create_lang_table', 1560185417);

-- --------------------------------------------------------

--
-- Структура таблицы `otvet`
--

CREATE TABLE `otvet` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `otvet`
--

INSERT INTO `otvet` (`id`, `user_id`, `user_email`, `message`, `created_at`) VALUES
(1, 3, 'aji@mail.ru', 'swsws', '0000-00-00 00:00:00'),
(2, 1, 'kamol_ikramov@mail.ru', 'dadawd', '2019-05-26 15:13:00');

-- --------------------------------------------------------

--
-- Структура таблицы `session`
--

CREATE TABLE `session` (
  `id` char(64) COLLATE utf8_unicode_ci NOT NULL,
  `expire` int(11) NOT NULL,
  `data` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `session`
--

INSERT INTO `session` (`id`, `expire`, `data`) VALUES
('0b5mesggg9qpfuecje6u5va1n2', 1561402992, 0x5f5f666c6173687c613a303a7b7d),
('0ohe0nl2u5b02juio3136uf8d5', 1587974561, 0x5f5f666c6173687c613a303a7b7d),
('2l8s0vt0tdmgujvkodn7ftgem6', 1559628216, 0x5f5f666c6173687c613a303a7b7d6c616e677c733a323a227275223b),
('4sgo102qc6n8ngi6oem49nobs4', 1606555554, 0x5f5f666c6173687c613a303a7b7d),
('5ldqhklbfvo2sceuriaspfrer5', 1560186858, 0x5f5f666c6173687c613a303a7b7d),
('5uq682egmohkbekn0qmh71rge6', 1613622056, 0x5f5f666c6173687c613a303a7b7d),
('65799gd513fq0tu4ehrsudoe11', 1600752681, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('6fpuhh6cmklct6evvus05skev4', 1560354339, 0x5f5f666c6173687c613a303a7b7d),
('6qe6tlc1i31c6k42m4aa392gv9vtvaks', 1616490265, 0x5f5f666c6173687c613a303a7b7d),
('7c0or91ap58lkrbpf2kk0futc5', 1559847411, 0x5f5f666c6173687c613a303a7b7d),
('9d6u5ea2p767eef3btdiav0fs0', 1560448588, 0x5f5f666c6173687c613a303a7b7d),
('c0jmefa6s0m165kmqe6i6jvhu2', 1573709836, 0x5f5f666c6173687c613a303a7b7d),
('c276t08m5rp3t83pfbts9cbq54', 1560668506, 0x5f5f666c6173687c613a303a7b7d),
('ci7s52vhafvonrbkfv676bdna2', 1580660786, 0x5f5f666c6173687c613a303a7b7d),
('d2f57rehev5o5gta5t4rqvjsc5', 1610017193, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('ecol24ti8p3lhnvrrtipi6age1', 1559925960, 0x5f5f666c6173687c613a303a7b7d6c616e677c733a323a227275223b),
('gfjdnuvprirah0ur22sm052s51', 1573736256, 0x5f5f666c6173687c613a303a7b7d),
('h8ivov488s6ffunab2doc9ihh6', 1568921005, 0x5f5f666c6173687c613a303a7b7d),
('hdsvnab0ev7c7r3qlvtu8qfdc6', 1597245535, 0x5f5f666c6173687c613a303a7b7d6c616e677c733a323a22757a223b),
('hul8u114i8vodeb26kvphhnkh7', 1561202059, 0x5f5f666c6173687c613a303a7b7d6c616e677c733a323a227275223b),
('ik1r4pe50hvoq95o00f9nftmj4', 1590478623, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('lco9fl655r35so7j181kconjb6', 1596894896, 0x5f5f666c6173687c613a303a7b7d),
('lfv9r6meed7k29r0epuvbadjh5', 1562085872, 0x5f5f666c6173687c613a303a7b7d),
('m62lhehu541d6p8ot0la0jptk3', 1560186688, 0x5f5f666c6173687c613a303a7b7d),
('mb5kn9cb21l986kovj2tio8pc7', 1574854838, 0x5f5f666c6173687c613a303a7b7d),
('mrjh2uh5u0peovruijvk9p75g3', 1560522905, 0x5f5f666c6173687c613a303a7b7d),
('pob8kq4m3itg6rqfvhgo9p0ea0', 1597473090, 0x5f5f666c6173687c613a303a7b7d),
('q6ur0oe7r1i7f0clctlo8s7ma3', 1560282664, 0x5f5f666c6173687c613a303a7b7d),
('rcki23874vtokivq4r21dnsco2', 1566210390, 0x5f5f666c6173687c613a303a7b7d),
('u4ssa2bqbriuuv79llgl4dhvu4', 1560186582, 0x5f5f666c6173687c613a303a7b7d),
('uj2ca5eio7dr4c7f7so06nnko4', 1598509758, 0x5f5f666c6173687c613a303a7b7d5f5f69647c693a313b),
('uokmh3hqn7lsl4hgnhbrp10g13', 1560187118, 0x5f5f666c6173687c613a303a7b7d),
('vm7c5k87l3tk3cuo76gfoltpn2', 1576783664, 0x5f5f666c6173687c613a303a7b7d);

-- --------------------------------------------------------

--
-- Структура таблицы `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `group_id` varchar(255) NOT NULL,
  `user_profile_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `student`
--

INSERT INTO `student` (`id`, `fullname`, `group_id`, `user_profile_id`) VALUES
(2, '', '2', 2);

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_activation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password_hash`, `status`, `auth_key`, `password_reset_token`, `account_activation_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'kamol_ikramov@mail.ru', '$2y$13$YRE.rHRs2bw5m/W48SFAV.di97SQ.omlAK8AyS2WXQ4C5VjzJ5hDa', 10, 'ZR5wf7Z7_DIZEYS-CQm4uMcZz7mhsMC8', NULL, NULL, 1556622511, 1556622511),
(2, 'akmal', 'fwlll@mail.ru', '$2y$13$XST5e5A0sFO7eH2WUi/bT.H3qT5Dd0tEiHrxeNWIIFZvum9DA4KaK', 10, 'SBbgPDoyrvHSTnm7VFNxV-dotTsPhTXN', NULL, NULL, 1556622732, 1556622732),
(3, 'aji', 'aji@mail.ru', '$2y$13$MIG0mVLNeI/UeozqLqWdwORpOchTdqUV.xAvkvuTBqo35xJ.9XUoS', 10, 'gI6YcdT-aM0rH853iIdMOKa_xGBpExvi', NULL, NULL, 1556816898, 1556816898),
(4, 'lola', 'lola@mail.ru', '$2y$13$FyV1yENqvc/669Z8I9Iwcul9p6cZKBdaSqTaT2hnY5P29QkraVCWq', 10, 'OE6KntdJ3rHrvfdEQE3a6R7tNqSi6sYj', NULL, NULL, 1557827469, 1557827469),
(5, 'Sindor', 'sindor@mail.ru', '$2y$13$wDoOl6RqnLMdUpmPNNBTL.uoOqI.Y7Wk3alJ4oME.CwgPIkwLVy0i', 10, 'dsDjNF4vmEFQsc91zsHnpvB3ogHzYOpV', NULL, NULL, 1557828598, 1557828598),
(6, 'llaijf', 'aeffewe@mail.ru', '$2y$13$eI8XL6CA2uu08DK3NFi6yuhlGAlt5mOZFy9t.Qteucyj/pcc01Qri', 10, '1Xca7J2VGnmwW7AG-KExRRE7rvcCtRou', NULL, NULL, 1560517539, 1560517539),
(7, 'gr', 'grsrg@mail.ru', '$2y$13$o4v9e45JcCWIUzdnnskpiO2MzrCuJQECPcaacvGQhUJ6QdRxBsAzi', 10, 'eqeDZaNJAnbbnTEEDCZtsNesyRCWuX-X', NULL, NULL, 1561400863, 1561400863),
(8, 'koko', '323faef@mail.ru', '$2y$13$Hl58jBO1Utg3d1fjl3ACQuIDh8kSq7Q1Hd8zw8Bsg7gKxNvXJoSw6', 10, 'EXNtLxpjFWV52kUa4-T0kI3V60_nP1DA', NULL, NULL, 1609921798, 1609921798);

-- --------------------------------------------------------

--
-- Структура таблицы `user_profile`
--

CREATE TABLE `user_profile` (
  `id` int(11) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user_profile`
--

INSERT INTO `user_profile` (`id`, `first`, `last`, `phone`, `address`, `description`, `user_id`) VALUES
(1, 'Ajiniyoz', 'Qidirboyev', '+ 99890 254 16 81', NULL, NULL, 3),
(2, 'Lola', 'Salimova', NULL, NULL, NULL, 4),
(3, 'Sindor', 'Suyunov', NULL, NULL, NULL, 5),
(4, 'weqweqw', 'eqweqw', NULL, NULL, NULL, 6),
(5, 'fwef', 'wef', NULL, NULL, NULL, 7),
(6, 'Akmalxon', 'Ikramov', NULL, NULL, NULL, 8);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Индексы таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- Индексы таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- Индексы таблицы `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Индексы таблицы `brand_category`
--
ALTER TABLE `brand_category`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `brand_logotype`
--
ALTER TABLE `brand_logotype`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `foto_cours`
--
ALTER TABLE `foto_cours`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses-groups` (`cours_id`);

--
-- Индексы таблицы `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Индексы таблицы `otvet`
--
ALTER TABLE `otvet`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- Индексы таблицы `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user-user_profile` (`user_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `brand_category`
--
ALTER TABLE `brand_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `brand_logotype`
--
ALTER TABLE `brand_logotype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `foto_cours`
--
ALTER TABLE `foto_cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `groups`
--
ALTER TABLE `groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `lang`
--
ALTER TABLE `lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `otvet`
--
ALTER TABLE `otvet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `courses-groups` FOREIGN KEY (`cours_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `user_profile`
--
ALTER TABLE `user_profile`
  ADD CONSTRAINT `user-user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
