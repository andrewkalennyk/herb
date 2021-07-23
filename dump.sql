-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: mysql
-- Время создания: Июн 24 2021 г., 08:59
-- Версия сервера: 5.7.23
-- Версия PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `herbarius`
--
CREATE DATABASE IF NOT EXISTS `herbarius` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `herbarius`;

-- --------------------------------------------------------

--
-- Структура таблицы `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) DEFAULT NULL,
  `completed` tinyint(4) NOT NULL,
  `completed_at` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'KAeedobpdF5ngq62xSPIzx1zdZkjjk2P', 1, '2021-04-12 19:23:18', '2021-04-12 19:23:18', '2021-04-12 19:23:18');

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `info_blocks`
--

CREATE TABLE `info_blocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tb_tree_id` int(10) UNSIGNED DEFAULT NULL,
  `template` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `description_ua` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `info_blocks`
--

INSERT INTO `info_blocks` (`id`, `tb_tree_id`, `template`, `title`, `title_ua`, `title_en`, `description`, `description_ua`, `description_en`, `picture`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 4, 'picture_left', 'Подзаголовок', NULL, NULL, 'asdasdasd', NULL, NULL, '/storage/editor/fotos/001bd64a56e8cef8ccea2add4201e7ca_1618413569.jpg', 1, NULL, '2021-04-14 15:19:32'),
(4, NULL, 'picture', 'test', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-04-14 15:31:49'),
(5, 4, 'picture', 'test', NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, '2021-04-14 15:35:13');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_02_22_093849_create_users_table', 1),
(2, '2018_02_22_094422_create_roles_table', 1),
(3, '2018_02_22_095823_create_role_users_table', 1),
(4, '2018_02_22_100056_create_activations_table', 1),
(5, '2018_02_22_103113_create_persistences_table', 1),
(6, '2018_02_22_103444_create_reminders_table', 1),
(7, '2018_02_22_103844_create_settings_table', 1),
(8, '2018_02_22_104132_create_setting_select_table', 1),
(9, '2018_02_22_104452_create_tb_tree_table', 1),
(10, '2018_02_22_105621_create_throttle_table', 1),
(11, '2018_02_22_105933_create_translations_phrases_cms_table', 1),
(12, '2018_02_22_110107_create_translations_cms_table', 1),
(13, '2018_02_22_141402_create_revisions', 1),
(14, '2020_10_13_195654_create_index_users_roles', 1),
(15, '2016_04_18_132921_create_translations_table', 2),
(16, '2014_10_12_100000_create_password_resets_table', 3),
(17, '2019_08_19_000000_create_failed_jobs_table', 3),
(18, '2021_04_13_165105_add_translate_fields_tb_tree', 3),
(19, '2016_11_14_124121_image_storage_migration', 4),
(21, '2021_04_14_115136_create_slides', 5),
(23, '2021_04_14_142453_create_info_blocks', 6),
(24, '2021_04_29_161917_create_product_categories', 7),
(25, '2021_04_29_162804_create_products', 7),
(26, '2021_05_05_163731_add_nullable_to_tb_tree', 8),
(27, '2021_05_05_183244_add_is_active_product_categories', 9),
(28, '2021_05_05_190552_add_priority_product_categories', 10),
(29, '2021_05_06_060045_add_nullable_to_fields', 11),
(30, '2021_05_06_063316_add_nullable_to_fileds2', 11),
(31, '2021_05_06_161647_add_ip_default_to_throttle', 11),
(32, '2021_05_07_051050_add_slug_to_product_and_categories', 12),
(33, '2021_05_13_163443_create_product_price_table', 13),
(34, '2021_05_26_163822_add_fields_to_products', 14),
(35, '2021_06_15_175412_create_orders_table', 15),
(36, '2021_06_21_105506_create_order_products', 16);

-- --------------------------------------------------------

--
-- Структура таблицы `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paid_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_paid` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `first_name`, `last_name`, `phone`, `delivery_type`, `paid_type`, `is_paid`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Андрій', 'Каленник', '+380931428506', 'np', 'online', 0, '2021-06-20 14:04:55', '2021-06-20 14:04:55'),
(3, NULL, 'Андрій', 'Каленник', '+380931428506', 'np', 'online', 0, '2021-06-20 15:01:56', '2021-06-20 15:01:56'),
(4, NULL, 'Андрій', 'Каленник', '+380931428506', 'np', 'online', 0, '2021-06-20 15:02:52', '2021-06-20 15:02:52'),
(5, NULL, 'Андрій', 'Каленник', '+380931428506', 'np', 'online', 0, '2021-06-20 15:05:04', '2021-06-20 15:05:04'),
(6, NULL, 'Андрій', 'Каленник', '+380931428506', 'np', 'online', 0, '2021-06-20 15:05:23', '2021-06-20 15:05:23'),
(7, NULL, 'Андрій', 'aaa', '+380931428506', 'np', 'online', 0, '2021-06-21 11:32:15', '2021-06-21 11:32:15'),
(8, NULL, 'Андрій', 'aaa', '+380931428506', 'np', 'online', 0, '2021-06-21 11:33:51', '2021-06-21 11:33:51'),
(9, NULL, 'Андрій', 'aaa', '+380931428506', 'np', 'online', 0, '2021-06-21 11:34:48', '2021-06-21 11:34:48'),
(10, NULL, 'Андрій', 'aaa', '+380931428506', 'np', 'online', 0, '2021-06-21 11:37:52', '2021-06-21 11:37:52'),
(11, NULL, 'Андрій', 'aaa', '+380931428506', 'np', 'online', 0, '2021-06-21 11:39:19', '2021-06-21 11:39:19'),
(12, NULL, 'Андрій', 'aaa', '+380931428506', 'np', 'online', 0, '2021-06-21 11:46:35', '2021-06-21 11:46:35'),
(13, NULL, 'test', 'test', '+380931428506', 'np', 'online', 0, '2021-06-21 12:49:38', '2021-06-21 12:49:38');

-- --------------------------------------------------------

--
-- Структура таблицы `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `price`, `weight`, `unit_type`, `qty`, `created_at`, `updated_at`) VALUES
(1, 12, 1, '120', '150', 'gr', '1', '2021-06-21 11:46:35', '2021-06-21 11:46:35'),
(2, 13, 1, '120', '150', 'gr', '1', '2021-06-21 12:49:38', '2021-06-21 12:49:38');

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'verXEako4UbNWcKzMAG30HiSD2AxGrFs', '2021-04-12 19:42:11', '2021-04-12 19:42:11'),
(2, 1, 'Rulq0ojUGXgR1ChvrFBmNTuOUQTZvcke', '2021-04-13 04:59:23', '2021-04-13 04:59:23');

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `article` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `short_description_ua` text COLLATE utf8mb4_unicode_ci,
  `short_description_en` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `description_ua` text COLLATE utf8mb4_unicode_ci,
  `description_en` text COLLATE utf8mb4_unicode_ci,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_pictures` text COLLATE utf8mb4_unicode_ci,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vide_cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `composition` text COLLATE utf8mb4_unicode_ci,
  `composition_ua` text COLLATE utf8mb4_unicode_ci,
  `composition_en` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `is_sold_out` tinyint(4) NOT NULL DEFAULT '0',
  `is_discount_fifty` tinyint(4) NOT NULL DEFAULT '0',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `category_id`, `article`, `title`, `title_ua`, `title_en`, `short_description`, `short_description_ua`, `short_description_en`, `description`, `description_ua`, `description_en`, `picture`, `additional_pictures`, `video_url`, `vide_cover_image`, `composition`, `composition_ua`, `composition_en`, `is_active`, `is_sold_out`, `is_discount_fifty`, `slug`, `created_at`, `updated_at`) VALUES
(1, 3, '00001', 'Товар1 для лица', 'Товар1 для особи', 'Product1 for face', '<p>Кратикое описание товара1 для лица</p>', '<p>Кратікое опис товару1 для особи</p>', '<p>Brief description of product1 for face</p>', '<p>Описание товара1 для лица</p>', '<p>Опис товару1 для особи</p>', '<p>Product Description1 for Face</p>', '/storage/editor/fotos/8932656f95cbea2bc911097d0ba63421_1620319348.jpg', '[\"/storage/editor/fotos/001bd64a56e8cef8ccea2add4201e7ca_1618413569.jpg\",\"/storage/editor/fotos/1e2cc6cea9a56b7743564f0dcb6268e8_1618341495.jpg\"]', 'https://www.youtube.com/watch?v=RbiprzmRSdQ', '/storage/editor/fotos/8932656f95cbea2bc911097d0ba63421_1620319348.jpg', '<ul class=\"card__storage\"><li>Листья мяты</li><li>Масло чайного дерева</li><li>Экстракт эхинацеи</li><li>Листья крапивы</li><li>Листья мяты</li><li>Масло чайного дерева</li><li>Экстракт эхинацеи</li><li>Листья крапивы</li></ul>', '<ul class=\"card__storage\"><li>Листя м\'яти</li><li>Масло чайного дерева</li><li>Екстракт ехінацеї</li><li>Листя кропиви</li><li>Листя м\'яти</li><li>Масло чайного дерева</li><li>Екстракт ехінацеї</li><li>Листя кропиви</li></ul>', '<ul class=\"card__storage\"><li>Mint Leaves</li><li>Tea tree oil</li><li>Echinacea extract</li><li>Nettle leaves</li><li>Mint Leaves</li><li>Tea tree oil</li><li>Echinacea extract</li><li>Nettle leaves</li></ul>', 1, 0, 1, 'tovar1-dlya-lica', '2021-05-06 16:42:33', '2021-05-26 17:05:00'),
(2, 3, NULL, 'aaaaa', 'aaaaa', 'aaaaa', '<p>asasdasd</p>', '<p>asasdasd</p>', '<p>asasdasd</p>', '<p>asdasdas</p>', '<p>asdasdas</p>', '<p>asdasdas</p>', NULL, NULL, NULL, NULL, '<p>asdasdads</p>', '<p>asdasdads</p>', '<p>asdasdads</p>', 1, 1, 0, 'aaaaa', '2021-05-11 06:11:52', '2021-05-26 16:59:23');

-- --------------------------------------------------------

--
-- Структура таблицы `product_categories`
--

CREATE TABLE `product_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_ua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depth` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_categories`
--

INSERT INTO `product_categories` (`id`, `parent_id`, `title`, `title_ua`, `title_en`, `depth`, `created_at`, `updated_at`, `is_active`, `slug`, `priority`) VALUES
(1, NULL, 'Для лица', 'Для обличчя', 'For face', 1, '2021-05-05 18:47:31', '2021-05-09 10:35:44', 1, 'dlya-lica', '1'),
(2, NULL, 'Для тела', 'Для тіла', 'For body', 1, '2021-05-05 18:47:55', '2021-05-09 10:36:03', 1, 'dlya-tela', '2'),
(3, 1, 'Категория для лица подменю', 'Категорія для особи підміню', 'Facial category submenu', 1, '2021-05-05 19:05:03', '2021-05-09 10:36:10', 1, 'kategoriya-dlya-lica-podmenyu', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `product_prices`
--

CREATE TABLE `product_prices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `unit_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT '0',
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `product_prices`
--

INSERT INTO `product_prices` (`id`, `product_id`, `unit_type`, `unit_value`, `old_price`, `price`, `is_default`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'gr', '150', NULL, '120', 1, 1, '2021-05-13 17:21:47', '2021-05-13 17:23:13'),
(2, 1, 'gr', '250', NULL, '220', 0, 1, '2021-05-13 17:23:54', '2021-05-13 17:23:54'),
(3, 2, 'gr', '1', NULL, '12', 1, 1, '2021-05-25 06:17:58', '2021-05-25 06:17:58');

-- --------------------------------------------------------

--
-- Структура таблицы `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) NOT NULL,
  `completed` tinyint(4) NOT NULL,
  `completed_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `revisions`
--

CREATE TABLE `revisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `revisionable_type` varchar(100) NOT NULL,
  `revisionable_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `key` varchar(255) DEFAULT NULL,
  `old_value` text,
  `new_value` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `revisions`
--

INSERT INTO `revisions` (`id`, `revisionable_type`, `revisionable_id`, `user_id`, `key`, `old_value`, `new_value`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Tree', 2, 4, 'lft', NULL, '76', '2021-04-13 16:48:43', '2021-04-13 16:48:43'),
(2, 'App\\Models\\Tree', 2, 4, 'rgt', NULL, '77', '2021-04-13 16:48:43', '2021-04-13 16:48:43'),
(3, 'App\\Models\\Tree', 3, 4, 'lft', NULL, '78', '2021-04-13 16:49:02', '2021-04-13 16:49:02'),
(4, 'App\\Models\\Tree', 3, 4, 'rgt', NULL, '79', '2021-04-13 16:49:02', '2021-04-13 16:49:02'),
(5, 'App\\Models\\Tree', 4, 4, 'lft', NULL, '80', '2021-04-13 16:49:31', '2021-04-13 16:49:31'),
(6, 'App\\Models\\Tree', 4, 4, 'rgt', NULL, '81', '2021-04-13 16:49:31', '2021-04-13 16:49:31'),
(7, 'App\\Models\\Tree', 5, 4, 'lft', NULL, '82', '2021-04-13 16:49:41', '2021-04-13 16:49:41'),
(8, 'App\\Models\\Tree', 5, 4, 'rgt', NULL, '83', '2021-04-13 16:49:41', '2021-04-13 16:49:41'),
(9, 'App\\Models\\Tree', 2, 4, 'lft', NULL, '8', '2021-04-13 16:49:47', '2021-04-13 16:49:47'),
(10, 'App\\Models\\Tree', 2, 4, 'rgt', NULL, '9', '2021-04-13 16:49:47', '2021-04-13 16:49:47'),
(11, 'App\\Models\\Tree', 2, 4, 'lft', NULL, '82', '2021-04-13 16:49:48', '2021-04-13 16:49:48'),
(12, 'App\\Models\\Tree', 2, 4, 'rgt', NULL, '83', '2021-04-13 16:49:48', '2021-04-13 16:49:48'),
(13, 'App\\Models\\Tree', 2, 4, 'lft', NULL, '4', '2021-04-13 16:49:49', '2021-04-13 16:49:49'),
(14, 'App\\Models\\Tree', 2, 4, 'rgt', NULL, '5', '2021-04-13 16:49:49', '2021-04-13 16:49:49'),
(15, 'App\\Models\\Tree', 2, 4, 'lft', NULL, '82', '2021-04-13 16:49:49', '2021-04-13 16:49:49'),
(16, 'App\\Models\\Tree', 2, 4, 'rgt', NULL, '83', '2021-04-13 16:49:49', '2021-04-13 16:49:49'),
(17, 'App\\Models\\Tree', 5, 4, 'lft', NULL, '4', '2021-04-13 16:49:58', '2021-04-13 16:49:58'),
(18, 'App\\Models\\Tree', 5, 4, 'rgt', NULL, '5', '2021-04-13 16:49:58', '2021-04-13 16:49:58'),
(19, 'App\\Models\\Tree', 5, 4, 'lft', NULL, '82', '2021-04-13 16:49:59', '2021-04-13 16:49:59'),
(20, 'App\\Models\\Tree', 5, 4, 'rgt', NULL, '83', '2021-04-13 16:49:59', '2021-04-13 16:49:59'),
(21, 'App\\Models\\Tree', 3, 4, 'lft', NULL, '6', '2021-04-13 16:50:01', '2021-04-13 16:50:01'),
(22, 'App\\Models\\Tree', 3, 4, 'rgt', NULL, '7', '2021-04-13 16:50:01', '2021-04-13 16:50:01'),
(23, 'App\\Models\\Tree', 3, 4, 'lft', NULL, '82', '2021-04-13 16:50:01', '2021-04-13 16:50:01'),
(24, 'App\\Models\\Tree', 3, 4, 'rgt', NULL, '83', '2021-04-13 16:50:01', '2021-04-13 16:50:01'),
(25, 'App\\Models\\Tree', 2, 4, 'is_active', '0', '1', '2021-04-13 16:50:04', '2021-04-13 16:50:04'),
(26, 'App\\Models\\Tree', 3, 4, 'is_active', '0', '1', '2021-04-13 16:50:06', '2021-04-13 16:50:06'),
(27, 'App\\Models\\Tree', 4, 4, 'is_active', '0', '1', '2021-04-13 16:50:07', '2021-04-13 16:50:07'),
(28, 'App\\Models\\Tree', 5, 4, 'is_active', '0', '1', '2021-04-13 16:50:08', '2021-04-13 16:50:08'),
(29, 'App\\Models\\Tree', 1, 4, 'title_ua', NULL, 'Головна', '2021-04-13 19:18:36', '2021-04-13 19:18:36'),
(30, 'App\\Models\\Tree', 1, 4, 'title_en', NULL, 'the main', '2021-04-13 19:18:36', '2021-04-13 19:18:36'),
(31, 'App\\Models\\Tree', 1, 4, 'picture', '', '/storage/editor/fotos/1e2cc6cea9a56b7743564f0dcb6268e8_1618341495.jpg', '2021-04-13 19:18:36', '2021-04-13 19:18:36'),
(32, 'App\\Models\\Tree', 1, 4, 'description', NULL, '<h2>Подзаголовок</h2>\n<p>\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n</p>', '2021-04-14 04:14:49', '2021-04-14 04:14:49'),
(33, 'App\\Models\\Tree', 1, 4, 'description_ua', '', '<H2> Підзаголовок </h2>\n<P>\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n</P>', '2021-04-14 04:14:49', '2021-04-14 04:14:49'),
(34, 'App\\Models\\Tree', 1, 4, 'description_en', '', '<h2> Subheading </h2>\n<p>\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget, Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n</p>', '2021-04-14 04:14:49', '2021-04-14 04:14:49'),
(35, 'App\\Models\\Tree', 2, 4, 'template', 'main', 'about_us', '2021-04-14 04:38:57', '2021-04-14 04:38:57'),
(36, 'App\\Models\\Tree', 4, 4, 'template', 'main', 'delivery', '2021-04-14 05:12:35', '2021-04-14 05:12:35'),
(37, 'App\\Models\\Tree', 3, 4, 'template', 'main', 'production', '2021-04-14 05:28:01', '2021-04-14 05:28:01'),
(38, 'App\\Models\\Tree', 5, 4, 'title_ua', NULL, 'Контакти', '2021-04-14 06:27:31', '2021-04-14 06:27:31'),
(39, 'App\\Models\\Tree', 5, 4, 'title_en', NULL, 'Contacts', '2021-04-14 06:27:31', '2021-04-14 06:27:31'),
(40, 'App\\Models\\Tree', 5, 4, 'description', NULL, '<h6>Телефон:</h6>\n            <p><a href=\"tel:+380677777777\">+38 067 777 77 77</a>, <a href=\"tel:+380637777777\">+38 063 777 77 77</a></p>\n            <h6>E-mail:</h6>\n            <p><a href=\"mailto:order@herbarius.store\">order@herbarius.store</a></p>', '2021-04-14 06:27:31', '2021-04-14 06:27:31'),
(41, 'App\\Models\\Tree', 5, 4, 'description_ua', NULL, '<H6> Телефон: </h6>\n            <P> <a href=\"tel:+380677777777\"> +38 067 777 77 77 </a>, <a href=\"tel:+380637777777\"> +38 063 777 77 77 </a> </p>\n            <H6> E-mail: </h6>\n            <P> <a href=\"mailto:order@herbarius.store\"> order@herbarius.store </a> </p>', '2021-04-14 06:27:31', '2021-04-14 06:27:31'),
(42, 'App\\Models\\Tree', 5, 4, 'description_en', NULL, '<h6> Phone: </h6>\n            <p> <a href=\"tel:+380677777777\"> +38 067 777 77 77 </a>, <a href=\"tel:+380637777777\"> +38 063 777 77 77 </a> </p>\n            <h6> E-mail: </h6>\n            <p> <a href=\"mailto:order@herbarius.store\"> order@herbarius.store </a> </p>', '2021-04-14 06:27:31', '2021-04-14 06:27:31'),
(43, 'App\\Models\\Tree', 2, 4, 'title_ua', NULL, 'Про нас', '2021-04-14 06:32:13', '2021-04-14 06:32:13'),
(44, 'App\\Models\\Tree', 2, 4, 'title_en', NULL, 'About us', '2021-04-14 06:32:13', '2021-04-14 06:32:13'),
(45, 'App\\Models\\Tree', 2, 4, 'is_show_in_menu', '0', '1', '2021-04-14 06:32:13', '2021-04-14 06:32:13'),
(46, 'App\\Models\\Tree', 2, 4, 'is_show_in_footer_menu', '0', '1', '2021-04-14 06:32:13', '2021-04-14 06:32:13'),
(47, 'App\\Models\\Tree', 3, 4, 'title_ua', NULL, 'Продукція', '2021-04-14 08:19:41', '2021-04-14 08:19:41'),
(48, 'App\\Models\\Tree', 3, 4, 'title_en', NULL, 'Products', '2021-04-14 08:19:41', '2021-04-14 08:19:41'),
(49, 'App\\Models\\Tree', 3, 4, 'is_show_in_menu', '0', '1', '2021-04-14 08:19:41', '2021-04-14 08:19:41'),
(50, 'App\\Models\\Tree', 3, 4, 'is_show_in_footer_menu', '0', '1', '2021-04-14 08:19:41', '2021-04-14 08:19:41'),
(51, 'App\\Models\\Tree', 4, 4, 'title_ua', NULL, 'доставка', '2021-04-14 08:19:51', '2021-04-14 08:19:51'),
(52, 'App\\Models\\Tree', 4, 4, 'title_en', NULL, 'Delivery', '2021-04-14 08:19:51', '2021-04-14 08:19:51'),
(53, 'App\\Models\\Tree', 4, 4, 'is_show_in_menu', '0', '1', '2021-04-14 08:19:51', '2021-04-14 08:19:51'),
(54, 'App\\Models\\Tree', 4, 4, 'is_show_in_footer_menu', '0', '1', '2021-04-14 08:19:51', '2021-04-14 08:19:51'),
(55, 'App\\Models\\Tree', 5, 4, 'description', '<h6>Телефон:</h6>\n            <p><a href=\"tel:+380677777777\">+38 067 777 77 77</a>, <a href=\"tel:+380637777777\">+38 063 777 77 77</a></p>\n            <h6>E-mail:</h6>\n            <p><a href=\"mailto:order@herbarius.store\">order@herbarius.store</a></p>', '<h6>Телефон:</h6><p><a href=\"tel:+380677777777\">+38 067 777 77 77</a>, <a href=\"tel:+380637777777\">+38 063 777 77 77</a></p><h6>E-mail:</h6><p><a href=\"mailto:order@herbarius.store\">order@herbarius.store</a></p>', '2021-04-14 08:19:59', '2021-04-14 08:19:59'),
(56, 'App\\Models\\Tree', 5, 4, 'description_ua', '<H6> Телефон: </h6>\n            <P> <a href=\"tel:+380677777777\"> +38 067 777 77 77 </a>, <a href=\"tel:+380637777777\"> +38 063 777 77 77 </a> </p>\n            <H6> E-mail: </h6>\n            <P> <a href=\"mailto:order@herbarius.store\"> order@herbarius.store </a> </p>', '<h6>Телефон:</h6><p><a href=\"tel:+380677777777\">&nbsp;+38 067 777 77 77&nbsp;</a>, <a href=\"tel:+380637777777\">&nbsp;+38 063 777 77 77&nbsp;</a></p><h6>E-mail:</h6><p><a href=\"mailto:order@herbarius.store\">&nbsp;order@herbarius.store&nbsp;</a></p>', '2021-04-14 08:19:59', '2021-04-14 08:19:59'),
(57, 'App\\Models\\Tree', 5, 4, 'description_en', '<h6> Phone: </h6>\n            <p> <a href=\"tel:+380677777777\"> +38 067 777 77 77 </a>, <a href=\"tel:+380637777777\"> +38 063 777 77 77 </a> </p>\n            <h6> E-mail: </h6>\n            <p> <a href=\"mailto:order@herbarius.store\"> order@herbarius.store </a> </p>', '<h6>Phone:</h6><p><a href=\"tel:+380677777777\">&nbsp;+38 067 777 77 77&nbsp;</a>, <a href=\"tel:+380637777777\">&nbsp;+38 063 777 77 77&nbsp;</a></p><h6>E-mail:</h6><p><a href=\"mailto:order@herbarius.store\">&nbsp;order@herbarius.store&nbsp;</a></p>', '2021-04-14 08:19:59', '2021-04-14 08:19:59'),
(58, 'App\\Models\\Tree', 5, 4, 'is_show_in_menu', '0', '1', '2021-04-14 08:19:59', '2021-04-14 08:19:59'),
(59, 'App\\Models\\Tree', 5, 4, 'is_show_in_footer_menu', '0', '1', '2021-04-14 08:19:59', '2021-04-14 08:19:59'),
(60, 'Vis\\Builder\\Setting', 1, 4, 'value', 'arturishe@ukr.net', 'andrewkalennyk@gmail.com', '2021-04-14 10:42:31', '2021-04-14 10:42:31'),
(61, 'App\\Models\\Slide', 1, 4, 'created_at', NULL, '2021-04-14 13:28:34', '2021-04-14 13:28:34', '2021-04-14 13:28:34'),
(62, 'App\\Models\\Slide', 2, 4, 'created_at', NULL, '2021-04-14 13:29:03', '2021-04-14 13:29:03', '2021-04-14 13:29:03'),
(63, 'App\\Models\\Slide', 1, 4, 'url', NULL, 'http://herbarius.test/dostavka', '2021-04-14 14:18:27', '2021-04-14 14:18:27'),
(64, 'App\\Models\\Slide', 1, 4, 'url_ua', NULL, 'хттп://херваріус.тест/доставка', '2021-04-14 14:18:27', '2021-04-14 14:18:27'),
(65, 'App\\Models\\Slide', 1, 4, 'url_en', NULL, 'http://hervius.test/delivery', '2021-04-14 14:18:27', '2021-04-14 14:18:27'),
(66, 'App\\Models\\Slide', 2, 4, 'url', NULL, '/dostavka', '2021-04-14 14:18:37', '2021-04-14 14:18:37'),
(67, 'App\\Models\\Slide', 2, 4, 'url_ua', NULL, '/доставка', '2021-04-14 14:18:37', '2021-04-14 14:18:37'),
(68, 'App\\Models\\Slide', 2, 4, 'url_en', NULL, '/delivery', '2021-04-14 14:18:37', '2021-04-14 14:18:37'),
(69, 'App\\Models\\InfoBlock', 2, 4, 'created_at', NULL, NULL, '2021-04-14 15:19:32', '2021-04-14 15:19:32'),
(70, 'App\\Models\\InfoBlock', 3, 4, 'created_at', NULL, NULL, '2021-04-14 15:30:43', '2021-04-14 15:30:43'),
(71, 'App\\Models\\InfoBlock', 4, 4, 'created_at', NULL, NULL, '2021-04-14 15:31:49', '2021-04-14 15:31:49'),
(72, 'App\\Models\\InfoBlock', 5, 4, 'created_at', NULL, NULL, '2021-04-14 15:35:13', '2021-04-14 15:35:13'),
(73, 'App\\Models\\ProductCategory', 1, 4, 'created_at', NULL, '2021-05-05 18:47:31', '2021-05-05 18:47:31', '2021-05-05 18:47:31'),
(74, 'App\\Models\\ProductCategory', 2, 4, 'created_at', NULL, '2021-05-05 18:47:55', '2021-05-05 18:47:55', '2021-05-05 18:47:55'),
(75, 'App\\Models\\ProductCategory', 3, 4, 'created_at', NULL, '2021-05-05 19:05:03', '2021-05-05 19:05:03', '2021-05-05 19:05:03'),
(76, 'App\\Models\\ProductCategory', 4, NULL, 'created_at', NULL, '2021-05-06 16:38:52', '2021-05-06 16:38:52', '2021-05-06 16:38:52'),
(77, 'App\\Models\\ProductCategory', 5, NULL, 'created_at', NULL, '2021-05-06 16:38:52', '2021-05-06 16:38:52', '2021-05-06 16:38:52'),
(78, 'App\\Models\\ProductCategory', 6, NULL, 'created_at', NULL, '2021-05-06 16:38:52', '2021-05-06 16:38:52', '2021-05-06 16:38:52'),
(79, 'App\\Models\\ProductCategory', 7, NULL, 'created_at', NULL, '2021-05-06 16:38:52', '2021-05-06 16:38:52', '2021-05-06 16:38:52'),
(80, 'App\\Models\\Product', 1, 4, 'created_at', NULL, '2021-05-06 16:42:33', '2021-05-06 16:42:33', '2021-05-06 16:42:33'),
(81, 'App\\Models\\Product', 1, 4, 'short_description_ua', '<P> Кратікое опис товару1 для особи </p>', '<p>Кратікое опис товару1 для особи</p>', '2021-05-07 05:43:19', '2021-05-07 05:43:19'),
(82, 'App\\Models\\Product', 1, 4, 'short_description_en', '<p> Brief description of product1 for face </p>', '<p>Brief description of product1 for face</p>', '2021-05-07 05:43:19', '2021-05-07 05:43:19'),
(83, 'App\\Models\\Product', 1, 4, 'description_ua', '<P> Опис товару1 для особи </p>', '<p>Опис товару1 для особи</p>', '2021-05-07 05:43:19', '2021-05-07 05:43:19'),
(84, 'App\\Models\\Product', 1, 4, 'description_en', '<p> Product Description1 for Face </p>', '<p>Product Description1 for Face</p>', '2021-05-07 05:43:19', '2021-05-07 05:43:19'),
(85, 'App\\Models\\Product', 2, 4, 'created_at', NULL, '2021-05-11 06:11:52', '2021-05-11 06:11:52', '2021-05-11 06:11:52'),
(86, 'App\\Models\\ProductPrice', 1, 4, 'created_at', NULL, '2021-05-13 17:21:47', '2021-05-13 17:21:47', '2021-05-13 17:21:47'),
(87, 'App\\Models\\ProductPrice', 1, 4, 'is_default', '0', '1', '2021-05-13 17:23:13', '2021-05-13 17:23:13'),
(88, 'App\\Models\\ProductPrice', 1, 4, 'is_active', '0', '1', '2021-05-13 17:23:13', '2021-05-13 17:23:13'),
(89, 'App\\Models\\ProductPrice', 2, 4, 'created_at', NULL, '2021-05-13 17:23:54', '2021-05-13 17:23:54', '2021-05-13 17:23:54'),
(90, 'App\\Models\\Product', 1, 4, 'composition', NULL, '<ul class=\"card__storage\">\n                            <li>Листья мяты</li>\n                            <li>Масло чайного дерева</li>\n                            <li>Экстракт эхинацеи</li>\n                            <li>Листья крапивы</li>\n                            <li>Листья мяты</li>\n                            <li>Масло чайного дерева</li>\n                            <li>Экстракт эхинацеи</li>\n                            <li>Листья крапивы</li>\n                        </ul>', '2021-05-21 04:51:32', '2021-05-21 04:51:32'),
(91, 'App\\Models\\Product', 1, 4, 'composition_ua', '', '<Ul class = \"card__storage\">\n                            <Li> Листя м\'яти </li>\n                            <Li> Масло чайного дерева </li>\n                            <Li> Екстракт ехінацеї </li>\n                            <Li> Листя кропиви </li>\n                            <Li> Листя м\'яти </li>\n                            <Li> Масло чайного дерева </li>\n                            <Li> Екстракт ехінацеї </li>\n                            <Li> Листя кропиви </li>\n                        </Ul>', '2021-05-21 04:51:32', '2021-05-21 04:51:32'),
(92, 'App\\Models\\Product', 1, 4, 'composition_en', '', '<ul class = \"card__storage\">\n                            <li> Mint Leaves </li>\n                            <li> Tea tree oil </li>\n                            <li> Echinacea extract </li>\n                            <li> Nettle leaves </li>\n                            <li> Mint Leaves </li>\n                            <li> Tea tree oil </li>\n                            <li> Echinacea extract </li>\n                            <li> Nettle leaves </li>\n                        </ul>', '2021-05-21 04:51:32', '2021-05-21 04:51:32'),
(93, 'App\\Models\\Product', 1, 4, 'article', NULL, '00001', '2021-05-21 04:53:32', '2021-05-21 04:53:32'),
(94, 'App\\Models\\Product', 1, 4, 'composition', '<ul class=\"card__storage\">\n                            <li>Листья мяты</li>\n                            <li>Масло чайного дерева</li>\n                            <li>Экстракт эхинацеи</li>\n                            <li>Листья крапивы</li>\n                            <li>Листья мяты</li>\n                            <li>Масло чайного дерева</li>\n                            <li>Экстракт эхинацеи</li>\n                            <li>Листья крапивы</li>\n                        </ul>', '<ul class=\"card__storage\"><li>Листья мяты</li><li>Масло чайного дерева</li><li>Экстракт эхинацеи</li><li>Листья крапивы</li><li>Листья мяты</li><li>Масло чайного дерева</li><li>Экстракт эхинацеи</li><li>Листья крапивы</li></ul>', '2021-05-21 04:53:32', '2021-05-21 04:53:32'),
(95, 'App\\Models\\Product', 1, 4, 'composition_ua', '<Ul class = \"card__storage\">\n                            <Li> Листя м\'яти </li>\n                            <Li> Масло чайного дерева </li>\n                            <Li> Екстракт ехінацеї </li>\n                            <Li> Листя кропиви </li>\n                            <Li> Листя м\'яти </li>\n                            <Li> Масло чайного дерева </li>\n                            <Li> Екстракт ехінацеї </li>\n                            <Li> Листя кропиви </li>\n                        </Ul>', '<ul class=\"card__storage\"><li>Листя м\'яти</li><li>Масло чайного дерева</li><li>Екстракт ехінацеї</li><li>Листя кропиви</li><li>Листя м\'яти</li><li>Масло чайного дерева</li><li>Екстракт ехінацеї</li><li>Листя кропиви</li></ul>', '2021-05-21 04:53:32', '2021-05-21 04:53:32'),
(96, 'App\\Models\\Product', 1, 4, 'composition_en', '<ul class = \"card__storage\">\n                            <li> Mint Leaves </li>\n                            <li> Tea tree oil </li>\n                            <li> Echinacea extract </li>\n                            <li> Nettle leaves </li>\n                            <li> Mint Leaves </li>\n                            <li> Tea tree oil </li>\n                            <li> Echinacea extract </li>\n                            <li> Nettle leaves </li>\n                        </ul>', '<ul class=\"card__storage\"><li>Mint Leaves</li><li>Tea tree oil</li><li>Echinacea extract</li><li>Nettle leaves</li><li>Mint Leaves</li><li>Tea tree oil</li><li>Echinacea extract</li><li>Nettle leaves</li></ul>', '2021-05-21 04:53:32', '2021-05-21 04:53:32'),
(97, 'App\\Models\\Product', 1, 4, 'additional_pictures', NULL, '[\"/storage/editor/fotos/001bd64a56e8cef8ccea2add4201e7ca_1618413569.jpg\",\"/storage/editor/fotos/1e2cc6cea9a56b7743564f0dcb6268e8_1618341495.jpg\"]', '2021-05-21 04:53:59', '2021-05-21 04:53:59'),
(98, 'App\\Models\\Product', 1, 4, 'video_url', NULL, 'https://www.youtube.com/watch?v=5yHZNCAgzpo', '2021-05-21 04:55:04', '2021-05-21 04:55:04'),
(99, 'App\\Models\\ProductPrice', 3, 4, 'created_at', NULL, '2021-05-25 06:17:58', '2021-05-25 06:17:58', '2021-05-25 06:17:58'),
(100, 'App\\Models\\Product', 2, 4, 'short_description_ua', '<P> asasdasd </p>', '<p>asasdasd</p>', '2021-05-25 06:18:03', '2021-05-25 06:18:03'),
(101, 'App\\Models\\Product', 2, 4, 'short_description_en', '<p> asasdasd </p>', '<p>asasdasd</p>', '2021-05-25 06:18:03', '2021-05-25 06:18:03'),
(102, 'App\\Models\\Product', 2, 4, 'description_ua', '<P> asdasdas </p>', '<p>asdasdas</p>', '2021-05-25 06:18:03', '2021-05-25 06:18:03'),
(103, 'App\\Models\\Product', 2, 4, 'description_en', '<p> asdasdas </p>', '<p>asdasdas</p>', '2021-05-25 06:18:03', '2021-05-25 06:18:03'),
(104, 'App\\Models\\Product', 2, 4, 'composition_ua', '<P> asdasdads </p>', '<p>asdasdads</p>', '2021-05-25 06:18:03', '2021-05-25 06:18:03'),
(105, 'App\\Models\\Product', 2, 4, 'composition_en', '<p> asdasdads </p>', '<p>asdasdads</p>', '2021-05-25 06:18:03', '2021-05-25 06:18:03'),
(106, 'App\\Models\\Product', 1, 4, 'vide_cover_image', '', '/storage/editor/fotos/8932656f95cbea2bc911097d0ba63421_1620319348.jpg', '2021-05-26 16:54:01', '2021-05-26 16:54:01'),
(107, 'App\\Models\\Product', 1, 4, 'is_discount_fifty', '0', '1', '2021-05-26 16:54:13', '2021-05-26 16:54:13'),
(108, 'App\\Models\\Product', 2, 4, 'is_sold_out', '0', '1', '2021-05-26 16:59:23', '2021-05-26 16:59:23'),
(109, 'App\\Models\\Product', 1, 4, 'video_url', 'https://www.youtube.com/watch?v=5yHZNCAgzpo', 'https://www.youtube.com/watch?v=RbiprzmRSdQ', '2021-05-26 17:05:00', '2021-05-26 17:05:00'),
(110, 'App\\Models\\Order', 1, NULL, 'created_at', NULL, '2021-06-20 14:02:15', '2021-06-20 14:02:15', '2021-06-20 14:02:15'),
(111, 'App\\Models\\Order', 2, NULL, 'created_at', NULL, '2021-06-20 14:04:55', '2021-06-20 14:04:55', '2021-06-20 14:04:55'),
(112, 'App\\Models\\Order', 3, NULL, 'created_at', NULL, '2021-06-20 15:01:56', '2021-06-20 15:01:56', '2021-06-20 15:01:56'),
(113, 'App\\Models\\Order', 4, NULL, 'created_at', NULL, '2021-06-20 15:02:52', '2021-06-20 15:02:52', '2021-06-20 15:02:52'),
(114, 'App\\Models\\Order', 5, NULL, 'created_at', NULL, '2021-06-20 15:05:04', '2021-06-20 15:05:04', '2021-06-20 15:05:04'),
(115, 'App\\Models\\Order', 6, NULL, 'created_at', NULL, '2021-06-20 15:05:23', '2021-06-20 15:05:23', '2021-06-20 15:05:23'),
(116, 'App\\Models\\Order', 7, NULL, 'created_at', NULL, '2021-06-21 11:32:15', '2021-06-21 11:32:15', '2021-06-21 11:32:15'),
(117, 'App\\Models\\Order', 8, NULL, 'created_at', NULL, '2021-06-21 11:33:51', '2021-06-21 11:33:51', '2021-06-21 11:33:51'),
(118, 'App\\Models\\Order', 9, NULL, 'created_at', NULL, '2021-06-21 11:34:48', '2021-06-21 11:34:49', '2021-06-21 11:34:49'),
(119, 'App\\Models\\Order', 10, NULL, 'created_at', NULL, '2021-06-21 11:37:52', '2021-06-21 11:37:52', '2021-06-21 11:37:52'),
(120, 'App\\Models\\Order', 11, NULL, 'created_at', NULL, '2021-06-21 11:39:19', '2021-06-21 11:39:19', '2021-06-21 11:39:19'),
(121, 'App\\Models\\Order', 12, NULL, 'created_at', NULL, '2021-06-21 11:46:35', '2021-06-21 11:46:35', '2021-06-21 11:46:35'),
(122, 'App\\Models\\OrderProduct', 1, NULL, 'created_at', NULL, '2021-06-21 11:46:35', '2021-06-21 11:46:35', '2021-06-21 11:46:35'),
(123, 'App\\Models\\Order', 13, 4, 'created_at', NULL, '2021-06-21 12:49:38', '2021-06-21 12:49:38', '2021-06-21 12:49:38'),
(124, 'App\\Models\\OrderProduct', 2, 4, 'created_at', NULL, '2021-06-21 12:49:38', '2021-06-21 12:49:38', '2021-06-21 12:49:38');

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `permissions` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Администратор', '{\"admin.access\":true,\"tree.view\":true,\"sliders.view\":true,\"products.view\":true,\"productcategories.view\":true,\"orders.view\":true,\"settingsblock.view\":true,\"settingssettingsall.view\":true,\"translationscmsphrases.view\":true,\"revisions.view\":true,\"translationsphrases.view\":true,\"usersgroup.view\":true,\"users.view\":true,\"groups.view\":true}', '2021-04-12 19:23:18', '2021-06-21 11:54:45'),
(2, 'editor', 'Редактор', '{\"admin.access\":true,\"tree.view\":true,\"articles.view\":true,\"settings_block.view\":true,\"settingssettings_all.view\":true,\"translations_cmsphrases.view\":true,\"revisions.view\":true,\"translationsphrases.view\":true,\"users_group.view\":true,\"users.view\":true,\"groups.view\":true}', '2021-04-12 19:23:18', '2021-04-12 19:23:18');

-- --------------------------------------------------------

--
-- Структура таблицы `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `group_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `settings`
--

INSERT INTO `settings` (`id`, `type`, `title`, `slug`, `value`, `group_type`) VALUES
(1, 0, 'Email администратора', 'email-administratora', 'andrewkalennyk@gmail.com', 'general'),
(2, 0, 'facebook', 'facebook', 'https://www.facebook.com/', 'general'),
(3, 0, 'youtube', 'youtube', 'https://www.youtube.com/', 'general'),
(4, 0, 'instagram', 'instagram', 'https://www.instagram.com/', 'general');

-- --------------------------------------------------------

--
-- Структура таблицы `setting_select`
--

CREATE TABLE `setting_select` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_setting` int(10) UNSIGNED NOT NULL,
  `value` varchar(255) NOT NULL,
  `value2` varchar(255) NOT NULL,
  `value3` varchar(255) NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_ua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_ua` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `slides`
--

INSERT INTO `slides` (`id`, `title`, `title_ua`, `title_en`, `picture`, `url`, `url_ua`, `url_en`, `is_active`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'slide1', 'slide1', 'slide1', '/storage/editor/fotos/97b2ed25fae33d01b3858feb89351099_1618406907.jpg', 'http://herbarius.test/dostavka', 'хттп://херваріус.тест/доставка', 'http://hervius.test/delivery', 1, NULL, '2021-04-14 13:28:34', '2021-04-14 14:18:27'),
(2, 'slide2', 'slide2', 'slide2', '/storage/editor/fotos/97b2ed25fae33d01b3858feb89351099_1618406907.jpg', '/dostavka', '/доставка', '/delivery', 1, NULL, '2021-04-14 13:29:03', '2021-04-14 14:18:37');

-- --------------------------------------------------------

--
-- Структура таблицы `tb_tree`
--

CREATE TABLE `tb_tree` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `lft` int(11) NOT NULL,
  `rgt` int(11) NOT NULL,
  `depth` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `title_ua` varchar(255) DEFAULT NULL,
  `title_en` varchar(255) DEFAULT NULL,
  `description` text,
  `description_ua` text,
  `description_en` text,
  `slug` varchar(255) NOT NULL,
  `template` varchar(120) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `additional_pictures` text,
  `is_active` tinyint(3) UNSIGNED DEFAULT NULL,
  `seo_title` varchar(255) DEFAULT NULL,
  `seo_title_ua` varchar(255) DEFAULT NULL,
  `seo_title_en` varchar(255) DEFAULT NULL,
  `seo_description` varchar(255) DEFAULT NULL,
  `seo_description_ua` varchar(255) DEFAULT NULL,
  `seo_description_en` varchar(255) DEFAULT NULL,
  `seo_keywords` varchar(255) DEFAULT NULL,
  `seo_keywords_ua` varchar(255) DEFAULT NULL,
  `seo_keywords_en` varchar(255) DEFAULT NULL,
  `is_show_in_menu` tinyint(3) UNSIGNED DEFAULT NULL,
  `is_show_in_footer_menu` tinyint(3) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tb_tree`
--

INSERT INTO `tb_tree` (`id`, `parent_id`, `lft`, `rgt`, `depth`, `title`, `title_ua`, `title_en`, `description`, `description_ua`, `description_en`, `slug`, `template`, `picture`, `additional_pictures`, `is_active`, `seo_title`, `seo_title_ua`, `seo_title_en`, `seo_description`, `seo_description_ua`, `seo_description_en`, `seo_keywords`, `seo_keywords_ua`, `seo_keywords_en`, `is_show_in_menu`, `is_show_in_footer_menu`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 84, 0, 'Главная', 'Головна', 'the main', '<h2>Подзаголовок</h2>\n<p>\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n</p>', '<H2> Підзаголовок </h2>\n<P>\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget.Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n</P>', '<h2> Subheading </h2>\n<p>\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget, Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar sic tempor. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus pronin sapien nunc accuan eget, Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n</p>', '/', 'main', '/storage/editor/fotos/1e2cc6cea9a56b7743564f0dcb6268e8_1618341495.jpg', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, 0, 0, '2021-04-12 19:23:18', '2021-04-14 04:14:49'),
(2, 1, 2, 3, NULL, 'О нас', 'Про нас', 'About us', NULL, '', '', 'o-nas', 'about_us', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-04-13 16:48:43', '2021-04-14 06:32:13'),
(3, 1, 4, 5, NULL, 'Продукция', 'Продукція', 'Products', NULL, '', '', 'produkciya', 'production', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-04-13 16:49:02', '2021-04-14 08:19:41'),
(4, 1, 6, 7, NULL, 'Доставка', 'доставка', 'Delivery', NULL, '', '', 'dostavka', 'delivery', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-04-13 16:49:30', '2021-04-14 08:19:51'),
(5, 1, 8, 9, NULL, 'Контакты', 'Контакти', 'Contacts', '<h6>Телефон:</h6><p><a href=\"tel:+380677777777\">+38 067 777 77 77</a>, <a href=\"tel:+380637777777\">+38 063 777 77 77</a></p><h6>E-mail:</h6><p><a href=\"mailto:order@herbarius.store\">order@herbarius.store</a></p>', '<h6>Телефон:</h6><p><a href=\"tel:+380677777777\">&nbsp;+38 067 777 77 77&nbsp;</a>, <a href=\"tel:+380637777777\">&nbsp;+38 063 777 77 77&nbsp;</a></p><h6>E-mail:</h6><p><a href=\"mailto:order@herbarius.store\">&nbsp;order@herbarius.store&nbsp;</a></p>', '<h6>Phone:</h6><p><a href=\"tel:+380677777777\">&nbsp;+38 067 777 77 77&nbsp;</a>, <a href=\"tel:+380637777777\">&nbsp;+38 063 777 77 77&nbsp;</a></p><h6>E-mail:</h6><p><a href=\"mailto:order@herbarius.store\">&nbsp;order@herbarius.store&nbsp;</a></p>', 'kontakty', 'contacts', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, '2021-04-13 16:49:41', '2021-04-14 08:19:59');

-- --------------------------------------------------------

--
-- Структура таблицы `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2021-05-06 16:18:16', '2021-05-06 16:18:16'),
(2, NULL, 'ip', '172.19.0.1', '2021-05-06 16:18:16', '2021-05-06 16:18:16');

-- --------------------------------------------------------

--
-- Структура таблицы `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_translations_phrase` int(10) UNSIGNED NOT NULL,
  `lang` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `translate` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations`
--

INSERT INTO `translations` (`id`, `id_translations_phrase`, `lang`, `translate`) VALUES
(1, 1, 'ru', 'от А до Я'),
(2, 1, 'ua', 'від А до Я'),
(3, 1, 'en', 'from A to Z'),
(4, 2, 'ru', 'от Я до А'),
(5, 2, 'ua', 'від Я до А'),
(6, 2, 'en', 'from Z to A'),
(7, 3, 'ru', 'По цене'),
(8, 3, 'ua', 'За ціною'),
(9, 3, 'en', 'By price'),
(10, 4, 'ru', 'по убиванию'),
(11, 4, 'ua', 'по вбивання'),
(12, 4, 'en', 'to kill'),
(13, 5, 'ru', 'по возрастанию'),
(14, 5, 'ua', 'за зростанням'),
(15, 5, 'en', 'Ascending'),
(16, 6, 'ru', 'гр'),
(17, 6, 'ua', 'гр'),
(18, 6, 'en', 'gr'),
(19, 7, 'ru', 'грн'),
(20, 7, 'ua', 'грн'),
(21, 7, 'en', 'hryvnias'),
(22, 8, 'ru', 'Купить'),
(23, 8, 'ua', 'купити'),
(24, 8, 'en', 'Buy'),
(25, 9, 'ru', 'В каталог товаров'),
(26, 9, 'ua', 'В каталог товарів'),
(27, 9, 'en', 'To the product catalog'),
(28, 10, 'ru', 'Артикул'),
(29, 10, 'ua', 'Артикул'),
(30, 10, 'en', 'vendor code'),
(31, 11, 'ru', 'Объем'),
(32, 11, 'ua', 'Об `єм'),
(33, 11, 'en', 'Volume'),
(34, 12, 'ru', 'Смотреть видео'),
(35, 12, 'ua', 'Дивитися відео'),
(36, 12, 'en', 'Watch the video'),
(37, 13, 'ru', 'Состав'),
(38, 13, 'ua', 'склад'),
(39, 13, 'en', 'Structure'),
(40, 14, 'ru', 'Описание товара'),
(41, 14, 'ua', 'Опис товару'),
(42, 14, 'en', 'Product description'),
(43, 15, 'ru', 'Сообщить о наличии'),
(44, 15, 'ua', 'Повідомити про наявність'),
(45, 15, 'en', 'Inform about availability'),
(46, 16, 'ru', 'Корзина'),
(47, 16, 'ua', 'Кошик'),
(48, 16, 'en', 'Basket'),
(49, 17, 'ru', 'Итого'),
(50, 17, 'ua', 'Разом'),
(51, 17, 'en', 'Total'),
(52, 18, 'ru', 'Оформить заказ'),
(53, 18, 'ua', 'Оформити замовлення'),
(54, 18, 'en', 'Checkout'),
(55, 19, 'ru', 'Название товара'),
(56, 19, 'ua', 'Назва товару'),
(57, 19, 'en', 'Product Name'),
(58, 20, 'ru', 'Корзина пуста'),
(59, 20, 'ua', 'Кошик порожній'),
(60, 20, 'en', 'Cart is empty'),
(61, 21, 'ru', 'Оформление заказа'),
(62, 21, 'ua', 'оформлення замовлення'),
(63, 21, 'en', 'Checkout'),
(64, 22, 'ru', 'Контактные данные'),
(65, 22, 'ua', 'Контактні дані'),
(66, 22, 'en', 'Contact details'),
(67, 23, 'ru', 'Я новый покупатель'),
(68, 23, 'ua', 'Я новий покупець'),
(69, 23, 'en', 'I am a new customer'),
(70, 24, 'ru', 'Я постоянный покупатель'),
(71, 24, 'ua', 'Я постійний покупець'),
(72, 24, 'en', 'I am a regular customer'),
(73, 25, 'ru', 'Имя'),
(74, 25, 'ua', 'ім\'я'),
(75, 25, 'en', 'Name'),
(76, 26, 'ru', 'Фамилия'),
(77, 26, 'ua', 'Прізвище'),
(78, 26, 'en', 'Surname'),
(79, 27, 'ru', 'Телефон'),
(80, 27, 'ua', 'Телефон'),
(81, 27, 'en', 'Telephone'),
(82, 28, 'ru', 'Город'),
(83, 28, 'ua', 'Місто'),
(84, 28, 'en', 'City'),
(85, 29, 'ru', 'Заказ'),
(86, 29, 'ua', 'замовлення'),
(87, 29, 'en', 'Order'),
(88, 30, 'ru', 'Способ доставки'),
(89, 30, 'ua', 'Спосіб доставки'),
(90, 30, 'en', 'Delivery method'),
(91, 31, 'ru', 'Новая почта'),
(92, 31, 'ua', 'Нова Пошта'),
(93, 31, 'en', 'New mail'),
(94, 32, 'ru', 'Новая почта (курьер)'),
(95, 32, 'ua', 'Нова пошта (кур\'єр)'),
(96, 32, 'en', 'New mail (courier)'),
(97, 33, 'ru', 'Самовывоз (только по Киеву)'),
(98, 33, 'ua', 'Самовивіз (тільки по Києву)'),
(99, 33, 'en', 'Local pickup (only in Kiev)'),
(100, 34, 'ru', 'Способ оплаты'),
(101, 34, 'ua', 'Спосіб оплати'),
(102, 34, 'en', 'Payment method'),
(103, 35, 'ru', 'Онлайн оплата'),
(104, 35, 'ua', 'онлайн оплата'),
(105, 35, 'en', 'Online payment'),
(106, 36, 'ru', 'Наложенный платеж'),
(107, 36, 'ua', 'Накладений платіж'),
(108, 36, 'en', 'C.O.D'),
(109, 37, 'ru', '2 товара на сумму'),
(110, 37, 'ua', '2 товари на суму'),
(111, 37, 'en', '2 items worth'),
(112, 38, 'ru', 'Стоимость доставки'),
(113, 38, 'ua', 'Вартість доставки'),
(114, 38, 'en', 'Cost of delivery'),
(115, 39, 'ru', 'По тарифам перевозчика'),
(116, 39, 'ua', 'За тарифами перевізника'),
(117, 39, 'en', 'At carrier rates'),
(118, 40, 'ru', 'К оплате'),
(119, 40, 'ua', 'До оплати'),
(120, 40, 'en', 'To pay'),
(121, 41, 'ru', 'Заказ подтверждаю'),
(122, 41, 'ua', 'Замовлення підтверджую'),
(123, 41, 'en', 'The order is confirmed'),
(124, 42, 'ru', 'Подтверждая заказ, я принимаю условия'),
(125, 42, 'ua', 'Підтверджуючи замовлення, я приймаю умови'),
(126, 42, 'en', 'By confirming the order, I accept the conditions'),
(127, 43, 'ru', 'пользовательского соглашения'),
(128, 43, 'ua', 'Користувальницької угоди'),
(129, 43, 'en', 'user agreement'),
(130, 44, 'ru', 'товар(a/ов) на сумму'),
(131, 44, 'ua', 'товар (a / ів) на суму'),
(132, 44, 'en', 'item (s) in the amount');

-- --------------------------------------------------------

--
-- Структура таблицы `translations_cms`
--

CREATE TABLE `translations_cms` (
  `id` int(10) UNSIGNED NOT NULL,
  `translations_phrases_cms_id` int(10) UNSIGNED NOT NULL,
  `lang` varchar(2) NOT NULL,
  `translate` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `translations_cms`
--

INSERT INTO `translations_cms` (`id`, `translations_phrases_cms_id`, `lang`, `translate`) VALUES
(11, 8, 'ru', 'Фраза'),
(12, 8, 'uk', 'Фраза'),
(13, 8, 'en', 'The phrase'),
(14, 9, 'ru', 'Код'),
(15, 9, 'uk', 'Код'),
(16, 9, 'en', 'Code'),
(17, 10, 'ru', 'Переводы'),
(18, 10, 'uk', 'Переклади'),
(19, 10, 'en', 'Translations'),
(20, 11, 'ru', 'Добавить'),
(21, 11, 'uk', 'Додати'),
(22, 11, 'en', 'Add'),
(23, 12, 'ru', 'Удалить'),
(24, 12, 'uk', 'Видалити'),
(25, 12, 'en', 'Delete'),
(26, 13, 'ru', 'Каталог пустой'),
(27, 13, 'uk', 'Каталог порожній'),
(28, 13, 'en', 'Directory is empty'),
(29, 14, 'ru', 'Показано'),
(30, 14, 'uk', 'Показано'),
(31, 14, 'en', 'Shown'),
(32, 15, 'ru', 'записей'),
(33, 15, 'uk', 'записів'),
(34, 15, 'en', 'records'),
(35, 16, 'ru', 'из'),
(36, 16, 'uk', 'з'),
(37, 16, 'en', 'from'),
(38, 17, 'ru', 'Главная'),
(39, 17, 'uk', 'Головна'),
(40, 17, 'en', 'Main'),
(44, 19, 'ru', 'О нас'),
(45, 19, 'uk', 'Про нас'),
(46, 19, 'en', 'About us'),
(47, 20, 'ru', 'Переменые'),
(48, 20, 'uk', 'Змінні'),
(49, 20, 'en', 'Changes'),
(50, 21, 'ru', 'Настройки'),
(51, 21, 'uk', 'Налаштування'),
(52, 21, 'en', 'Settings'),
(53, 22, 'ru', 'Пресса'),
(54, 22, 'uk', 'Преса'),
(55, 22, 'en', 'Press'),
(56, 23, 'ru', 'Структура сайта'),
(57, 23, 'uk', 'Структура сайту'),
(58, 23, 'en', 'Structure  website'),
(59, 24, 'ru', 'Кейсы'),
(60, 24, 'uk', 'Кейси'),
(61, 24, 'en', 'Cases'),
(62, 25, 'ru', 'Команда'),
(63, 25, 'uk', 'Команда'),
(64, 25, 'en', 'Team'),
(65, 26, 'ru', 'Упр. пользователями'),
(66, 26, 'uk', 'Упр. користувачами'),
(67, 26, 'en', 'Users'),
(68, 27, 'ru', 'Пользователи'),
(69, 27, 'uk', 'Користувачі'),
(70, 27, 'en', 'Users'),
(71, 28, 'ru', 'Группы'),
(72, 28, 'uk', 'Групи'),
(73, 28, 'en', 'Groups'),
(74, 29, 'ru', 'Показывать по'),
(75, 29, 'uk', 'Показувати по'),
(76, 29, 'en', 'Show'),
(77, 30, 'ru', 'Все'),
(78, 30, 'uk', 'Всі'),
(79, 30, 'en', 'All'),
(80, 31, 'ru', 'Административная часть сайта'),
(81, 31, 'uk', 'Адміністративна частина сайту'),
(82, 31, 'en', 'The administrative part of the site'),
(83, 32, 'ru', 'Служба поддержки'),
(84, 32, 'uk', 'Служба підтримки'),
(85, 32, 'en', 'Support'),
(86, 33, 'ru', 'Войти'),
(87, 33, 'uk', 'Увійти'),
(88, 33, 'en', 'Enter in CMS'),
(89, 34, 'ru', 'Эл.почта'),
(90, 34, 'uk', 'Ел.пошта'),
(91, 34, 'en', 'Email'),
(92, 35, 'ru', 'Пароль'),
(93, 35, 'uk', 'Пароль'),
(94, 35, 'en', 'Password'),
(95, 36, 'ru', 'Запомнить меня'),
(96, 36, 'uk', 'Запамятати мене'),
(97, 36, 'en', 'Remember me'),
(98, 37, 'ru', 'Введите адрес эл.почты'),
(99, 37, 'uk', 'Введіть адреса ел.пошти'),
(100, 37, 'en', 'Enter your email'),
(101, 38, 'ru', 'Введите валидный адрес эл.почты'),
(102, 38, 'uk', 'Введіть дійсний адреса ел.пошти'),
(103, 38, 'en', 'Enter a valid email'),
(104, 39, 'ru', 'Введите пароль'),
(105, 39, 'uk', 'Введіть пароль'),
(106, 39, 'en', 'Enter the password'),
(107, 40, 'ru', 'Пользователь не найден'),
(108, 40, 'uk', 'Користувач не знайдений'),
(109, 40, 'en', 'User not found'),
(110, 41, 'ru', 'Создать'),
(111, 41, 'uk', 'Створити'),
(112, 41, 'en', 'Add'),
(113, 42, 'ru', 'Тип'),
(114, 42, 'uk', 'Тип'),
(115, 42, 'en', 'Type'),
(116, 43, 'ru', 'Группа'),
(117, 43, 'uk', 'Група'),
(118, 43, 'en', 'Group'),
(119, 44, 'ru', 'Значение'),
(120, 44, 'uk', 'Значення'),
(121, 44, 'en', 'Value'),
(122, 45, 'ru', 'Редактировать'),
(123, 45, 'uk', 'Редагувати'),
(124, 45, 'en', 'Edit'),
(125, 46, 'ru', 'Редактирование'),
(126, 46, 'uk', 'Редагування'),
(127, 46, 'en', 'Edit'),
(128, 47, 'ru', 'Название'),
(129, 47, 'uk', 'Назва'),
(130, 47, 'en', 'Title'),
(131, 48, 'ru', 'Клонировать'),
(132, 48, 'uk', 'Клонувати'),
(133, 48, 'en', 'Clone'),
(134, 49, 'ru', 'Дата создания'),
(135, 49, 'uk', 'Дата створення'),
(136, 49, 'en', 'Created date'),
(137, 50, 'ru', 'Статья активна'),
(138, 50, 'uk', 'Стаття активна'),
(139, 50, 'en', 'Article active'),
(140, 51, 'ru', 'Общие'),
(141, 51, 'uk', 'Загальні'),
(142, 51, 'en', 'Common'),
(143, 52, 'ru', 'Телефоны'),
(144, 52, 'uk', 'Телефони'),
(145, 52, 'en', 'Phones'),
(149, 54, 'ru', 'Новости'),
(150, 54, 'uk', 'Новини'),
(151, 54, 'en', 'News'),
(152, 55, 'ru', 'Создание'),
(153, 55, 'uk', 'Створення'),
(154, 55, 'en', 'Creation'),
(155, 56, 'ru', 'Отмена'),
(156, 56, 'uk', 'Скасування'),
(157, 56, 'en', 'Cancel'),
(158, 57, 'ru', 'Сохранить'),
(159, 57, 'uk', 'Зберегти'),
(160, 57, 'en', 'Save'),
(161, 58, 'ru', 'Показать дерево'),
(162, 58, 'uk', 'Показати дерево'),
(163, 58, 'en', 'To show the tree'),
(164, 59, 'ru', 'Спрятать дерево'),
(165, 59, 'uk', 'Сховати дерево'),
(166, 59, 'en', 'To hide a tree'),
(167, 60, 'ru', 'Шаблон'),
(168, 60, 'uk', 'Шаблон'),
(169, 60, 'en', 'Template'),
(170, 61, 'ru', 'Активный'),
(171, 61, 'uk', 'Активний'),
(172, 61, 'en', 'Active'),
(173, 62, 'ru', 'Предпросмотр'),
(174, 62, 'uk', 'Попередній перегляд'),
(175, 62, 'en', 'Preview'),
(176, 63, 'ru', 'ДА'),
(177, 63, 'uk', 'ТАК'),
(178, 63, 'en', 'YES'),
(179, 64, 'ru', 'НЕТ'),
(180, 64, 'uk', 'НI'),
(181, 64, 'en', 'NO'),
(182, 65, 'ru', 'Выберите шаблон'),
(183, 65, 'uk', 'Виберіть шаблон'),
(184, 65, 'en', 'Select the template'),
(185, 66, 'ru', 'Общая'),
(186, 66, 'uk', 'Загальна'),
(187, 66, 'en', 'Common'),
(188, 67, 'ru', 'Текст'),
(189, 67, 'uk', 'Текст'),
(190, 67, 'en', 'The text'),
(191, 68, 'ru', 'Выберите изображение для загрузки'),
(192, 68, 'uk', 'Виберіть зображення для завантаження'),
(193, 68, 'en', 'Select the image to load'),
(194, 69, 'ru', 'Нет изображений'),
(195, 69, 'uk', 'Немає зображень'),
(196, 69, 'en', 'No images'),
(197, 70, 'ru', 'Выбрать'),
(198, 70, 'uk', 'Вибрати'),
(199, 70, 'en', 'Choose'),
(200, 71, 'ru', 'Нет изображения'),
(201, 71, 'uk', 'Немає зображення'),
(202, 71, 'en', 'No picture'),
(203, 72, 'ru', 'Код(для вставки)'),
(204, 72, 'uk', 'Код (для вставки)'),
(205, 72, 'en', 'Code(to paste)'),
(206, 73, 'ru', 'Большой текст'),
(207, 73, 'uk', 'Великий текст'),
(208, 73, 'en', 'Large text'),
(209, 74, 'ru', 'Большой текст с редактором'),
(210, 74, 'uk', 'Великий текст з редактором'),
(211, 74, 'en', 'Great text editor'),
(212, 75, 'ru', 'Список'),
(213, 75, 'uk', 'Список'),
(214, 75, 'en', 'List'),
(215, 76, 'ru', 'Двойной список'),
(216, 76, 'uk', 'Подвійний список'),
(217, 76, 'en', 'Double list'),
(218, 77, 'ru', 'Тройной список'),
(219, 77, 'uk', 'Потрійний список'),
(220, 77, 'en', 'Triple list'),
(221, 78, 'ru', 'Файл'),
(222, 78, 'uk', 'Файл'),
(223, 78, 'en', 'File'),
(224, 79, 'ru', 'Шаблоны писем'),
(225, 79, 'uk', 'Шаблони листів'),
(226, 79, 'en', 'Email templates'),
(227, 80, 'ru', 'Тема письма'),
(228, 80, 'uk', 'Тема листа'),
(229, 80, 'en', 'Subject'),
(230, 81, 'ru', 'Пусто'),
(231, 81, 'uk', 'Порожньо'),
(232, 81, 'en', 'Empty'),
(233, 82, 'ru', 'Тело письма'),
(234, 82, 'uk', 'Тіло листа'),
(235, 82, 'en', 'The body of the email'),
(236, 83, 'ru', 'Загрузка...'),
(237, 83, 'uk', 'Завантаження...'),
(238, 83, 'en', 'Loading...'),
(239, 84, 'ru', 'Выберите время'),
(240, 84, 'uk', 'Виберіть час'),
(241, 84, 'en', 'Select the time'),
(242, 85, 'ru', 'Время'),
(243, 85, 'uk', 'Час'),
(244, 85, 'en', 'Time'),
(245, 86, 'ru', 'Часы'),
(246, 86, 'uk', 'Години'),
(247, 86, 'en', 'Hours'),
(248, 87, 'ru', 'Минуты'),
(249, 87, 'uk', 'Хвилини'),
(250, 87, 'en', 'Minutes'),
(251, 88, 'ru', 'Секунды'),
(252, 88, 'uk', 'Секунди'),
(253, 88, 'en', 'Seconds'),
(254, 89, 'ru', 'Миллисекунды'),
(255, 89, 'uk', 'Мілісекунди'),
(256, 89, 'en', 'Milliseconds'),
(257, 90, 'ru', 'Часовой пояс'),
(258, 90, 'uk', 'Часовий пояс'),
(259, 90, 'en', 'Time zone'),
(260, 91, 'ru', 'Сейчас'),
(261, 91, 'uk', 'Зараз'),
(262, 91, 'en', 'Now'),
(263, 92, 'ru', 'Закрыть'),
(264, 92, 'uk', 'Закрити'),
(265, 92, 'en', 'Close'),
(266, 93, 'ru', 'Баннера'),
(267, 93, 'uk', 'Банера'),
(268, 93, 'en', 'Banners'),
(269, 94, 'ru', 'Баннерные площадки'),
(270, 94, 'uk', 'Банерні майданчики'),
(271, 94, 'en', 'Banners area'),
(272, 95, 'ru', 'Площадка'),
(273, 95, 'uk', 'Майданчик'),
(274, 95, 'en', 'Area'),
(275, 96, 'ru', 'Кол.показов'),
(276, 96, 'uk', 'Кількість.показів'),
(277, 96, 'en', 'Count showing'),
(278, 97, 'ru', 'Кол.кликов'),
(279, 97, 'uk', 'Кіл.кліків'),
(280, 97, 'en', 'Count clicks'),
(281, 98, 'ru', 'Статус'),
(282, 98, 'uk', 'Статус'),
(283, 98, 'en', 'Status'),
(284, 99, 'ru', 'Начало показа'),
(285, 99, 'uk', 'Початок показу'),
(286, 99, 'en', 'Beginning of the show'),
(287, 100, 'ru', 'Конец показа'),
(288, 100, 'uk', 'Кінець показу'),
(289, 100, 'en', 'End of the show'),
(290, 101, 'ru', 'Всегда показывать'),
(291, 101, 'uk', 'Завжди показувати'),
(292, 101, 'en', 'Always show'),
(293, 102, 'ru', 'Баннерная площадка'),
(294, 102, 'uk', 'Банерна майданчик'),
(295, 102, 'en', 'Banner area'),
(296, 103, 'ru', 'Ссылка'),
(297, 103, 'uk', 'Посилання'),
(298, 103, 'en', 'Link'),
(299, 104, 'ru', 'Файл для показа'),
(300, 104, 'uk', 'Файл'),
(301, 104, 'en', 'File'),
(302, 105, 'ru', 'Выбрать файл (jpg, gif, png или swf)'),
(303, 105, 'uk', 'Вибрати файл (jpg, gif, png або swf)'),
(304, 105, 'en', 'To select a file (jpg, gif, png or swf)'),
(305, 106, 'ru', 'Показывать всегда'),
(306, 106, 'uk', 'Завжди показувати'),
(307, 106, 'en', 'Show always'),
(308, 107, 'ru', 'Открывать в новом окне'),
(309, 107, 'uk', 'Відкрити у новому вікні'),
(310, 107, 'en', 'To open in a new window'),
(311, 108, 'ru', 'Короткий текст'),
(312, 108, 'uk', 'Короткий текст'),
(313, 108, 'en', 'Short text'),
(314, 109, 'ru', 'Изображение'),
(315, 109, 'uk', 'Зображення'),
(316, 109, 'en', 'Image'),
(317, 110, 'ru', 'Дополнительные изображение'),
(318, 110, 'uk', 'Додаткові зображення'),
(319, 110, 'en', 'Additional image'),
(320, 111, 'ru', 'Описание'),
(321, 111, 'uk', 'Опис'),
(322, 111, 'en', 'Description'),
(323, 112, 'ru', 'Письма'),
(324, 112, 'uk', 'Листи'),
(325, 112, 'en', 'Mails'),
(326, 113, 'ru', 'Кому'),
(327, 113, 'uk', 'Кому'),
(328, 113, 'en', 'Sent to'),
(329, 114, 'ru', 'Дата отправки'),
(330, 114, 'uk', 'Дата відправки'),
(331, 114, 'en', 'Date sent'),
(332, 115, 'ru', 'Просмотреть'),
(333, 115, 'uk', 'Переглянути'),
(334, 115, 'en', 'Show'),
(335, 116, 'ru', 'Письмо'),
(336, 116, 'uk', 'Лист'),
(337, 116, 'en', 'Mail'),
(338, 117, 'ru', 'Если включен тестовый режим, то письма не будут уходить, а будут складываться в лог файл'),
(339, 117, 'uk', 'Якщо ввімкнути тестовий режим, то листи не будуть іти, а будуть складатися в лог файл'),
(340, 117, 'en', 'If you enable test mode, then mails will not leave, and will be stored in the log file'),
(341, 118, 'ru', 'Настройки почты'),
(342, 118, 'uk', 'Налаштування пошти'),
(343, 118, 'en', 'Mail settings'),
(344, 119, 'ru', 'Драйвер'),
(345, 119, 'uk', 'Драйвер'),
(346, 119, 'en', 'Driver'),
(347, 120, 'ru', 'Обратный адрес в письме'),
(348, 120, 'uk', 'Зворотна адреса у листі'),
(349, 120, 'en', 'The return address in the letter'),
(350, 121, 'ru', 'Имя отправителя'),
(351, 121, 'uk', 'Імя відправника'),
(352, 121, 'en', 'The name of the sender'),
(353, 122, 'ru', 'Тестовый режим'),
(354, 122, 'uk', 'Тестовий режим'),
(355, 122, 'en', 'Test mode'),
(356, 123, 'ru', 'Почта'),
(357, 123, 'uk', 'Пошта'),
(358, 123, 'en', 'Mails'),
(359, 124, 'ru', 'Настройки почты обновлены'),
(360, 124, 'uk', 'Налаштування пошти оновлено'),
(361, 124, 'en', 'Mail settings updated'),
(362, 125, 'ru', 'Выход'),
(363, 125, 'uk', 'Вихід'),
(364, 125, 'en', 'Exit'),
(365, 126, 'ru', 'Группы пользователей'),
(366, 126, 'uk', 'Групи користувачів'),
(367, 126, 'en', 'User group'),
(368, 127, 'ru', 'Имя'),
(369, 127, 'uk', 'Імя'),
(370, 127, 'en', 'Name'),
(371, 128, 'ru', 'Фамилия'),
(372, 128, 'uk', 'Прізвище'),
(373, 128, 'en', 'Surname'),
(374, 129, 'ru', 'Дата последнего входа'),
(375, 129, 'uk', 'Дата останнього входу'),
(376, 129, 'en', 'Date of last login'),
(377, 130, 'ru', 'Дата регистрации'),
(378, 130, 'uk', 'Дата реєстрації'),
(379, 130, 'en', 'Registration date'),
(380, 131, 'ru', 'Активен'),
(381, 131, 'uk', 'Активний'),
(382, 131, 'en', 'Active'),
(383, 132, 'ru', 'Поиск'),
(384, 132, 'uk', 'Пошук'),
(385, 132, 'en', 'Search'),
(386, 133, 'ru', 'Права'),
(387, 133, 'uk', 'Права'),
(388, 133, 'en', 'Right'),
(389, 134, 'ru', 'Профайл'),
(390, 134, 'uk', 'Профайл'),
(391, 134, 'en', 'Profile'),
(392, 135, 'ru', 'Загрузить'),
(393, 135, 'uk', 'Завантажити'),
(394, 135, 'en', 'Download'),
(395, 136, 'ru', 'Подписан на рассылку'),
(396, 136, 'uk', 'Підписаний на розсилку'),
(397, 136, 'en', 'Signed up for the newsletter'),
(398, 137, 'ru', 'Группы пользователя'),
(399, 137, 'uk', 'Групи'),
(400, 137, 'en', 'User group'),
(401, 138, 'ru', 'Разрешить'),
(402, 138, 'uk', 'Дозволити1'),
(403, 138, 'en', 'Allow'),
(404, 139, 'ru', 'Запретить'),
(405, 139, 'uk', 'Заборонити'),
(406, 139, 'en', 'Prohibit'),
(407, 140, 'ru', 'Наследовать'),
(408, 140, 'uk', 'Успадковувати'),
(409, 140, 'en', 'Inherit'),
(410, 141, 'ru', 'Эту операцию нельзя будет отменить.'),
(411, 141, 'uk', 'Цю операцію не можна буде скасувати.'),
(412, 141, 'en', 'This operation cannot be undone.'),
(413, 142, 'ru', 'Поле удалено успешно'),
(414, 142, 'uk', 'Поле видалено успішно'),
(415, 142, 'en', 'Field deleted successfully'),
(416, 143, 'ru', 'Что-то пошло не так, попробуйте позже'),
(417, 143, 'uk', 'Щось пішло не так, спробуйте пізніше'),
(418, 143, 'en', 'Something went wrong, try again later'),
(419, 144, 'ru', 'Сохранено'),
(420, 144, 'uk', 'Збережено1'),
(421, 144, 'en', 'Saved'),
(422, 145, 'ru', 'Новоя запись добавлена'),
(423, 145, 'uk', 'Новоя запис додано'),
(424, 145, 'en', 'New entry added'),
(425, 146, 'ru', 'Ошибка при загрузке изображения'),
(426, 146, 'uk', 'Помилка при завантаженні зображення'),
(427, 146, 'en', 'Error loading image'),
(428, 147, 'ru', 'Ошибка при загрузке файла'),
(429, 147, 'uk', 'Помилка при завантаженні файлу'),
(430, 147, 'en', 'Error loading file'),
(431, 148, 'ru', 'Порядок следования изменен1'),
(432, 148, 'uk', 'Порядок змінено1'),
(433, 148, 'en', 'The order changed'),
(434, 149, 'ru', 'Последние 5 заказов1'),
(435, 149, 'uk', 'qweqwewe'),
(436, 149, 'en', 'qweqwewe'),
(440, 149, 'ru', 'test'),
(441, 149, 'uk', 'te'),
(442, 149, 'en', 'te'),
(443, 149, 'ru', 'Последние 5 заказов'),
(444, 149, 'uk', 'Останні 5 замовлень'),
(445, 149, 'en', 'The last 5 orders'),
(449, 151, 'ru', 'Русский111'),
(450, 151, 'uk', 'Російська22233'),
(451, 151, 'en', 'Russian11111133'),
(452, 152, 'ru', 'Русский1'),
(453, 152, 'uk', 'Русский1'),
(454, 152, 'en', 'Русский1'),
(461, 166, 'ru', 'Переводы CMS'),
(462, 166, 'uk', 'Переклади CMS'),
(463, 166, 'en', 'The translation of CMS'),
(464, 167, 'ru', 'Переклади CMS'),
(465, 167, 'uk', 'Переклади CMS'),
(466, 167, 'en', 'Perekladi CMS'),
(467, 168, 'ru', 'Статьи'),
(468, 168, 'uk', 'Статті'),
(469, 168, 'en', 'Article'),
(470, 169, 'ru', 'Управление'),
(471, 169, 'uk', 'Управління'),
(472, 169, 'en', 'Management'),
(473, 170, 'ru', 'Контроль изменений'),
(474, 170, 'uk', 'Контроль змін'),
(475, 170, 'en', 'Change control'),
(476, 171, 'ru', 'Обрезать изображение'),
(477, 171, 'uk', 'Обрізати зображення'),
(478, 171, 'en', 'Crop the image'),
(479, 172, 'ru', 'The translation of CMS'),
(480, 172, 'uk', 'The translation of CMS'),
(481, 172, 'en', 'The translation of CMS'),
(482, 173, 'ru', 'SEO'),
(483, 173, 'uk', 'SEO'),
(484, 173, 'en', 'SEO'),
(485, 174, 'ru', 'Безопасность'),
(486, 174, 'uk', 'Безпека'),
(487, 174, 'en', 'Security'),
(488, 175, 'ru', 'Цены'),
(489, 175, 'uk', 'Ціни'),
(490, 175, 'en', 'Prices'),
(491, 176, 'ru', 'Код для вставки'),
(492, 176, 'uk', 'Код для вставки'),
(493, 176, 'en', 'Embed code'),
(494, 177, 'ru', 'Текстовое поле'),
(495, 177, 'uk', 'Текстове поле'),
(496, 177, 'en', 'Text box'),
(497, 178, 'ru', 'Вкл/Выкл'),
(498, 178, 'uk', 'Вкл/Викл'),
(499, 178, 'en', 'On/Off'),
(500, 179, 'ru', '#'),
(501, 179, 'uk', '#'),
(502, 179, 'en', '#'),
(503, 180, 'ru', 'Email'),
(504, 180, 'uk', 'Email'),
(505, 180, 'en', 'Email'),
(506, 181, 'ru', 'Редактироварь'),
(507, 181, 'uk', 'Редактироварь'),
(508, 181, 'en', 'Редактироварь'),
(509, 182, 'ru', '20'),
(510, 182, 'uk', '20'),
(511, 182, 'en', '20'),
(512, 183, 'ru', '100'),
(513, 183, 'uk', '100'),
(514, 183, 'en', '100'),
(515, 184, 'ru', '1000'),
(516, 184, 'uk', '1000'),
(517, 184, 'en', '1000'),
(518, 185, 'ru', 'Общее'),
(519, 185, 'uk', 'Общее'),
(520, 185, 'en', 'Общее'),
(521, 186, 'ru', 'Заголовок'),
(522, 186, 'uk', 'Заголовок'),
(523, 186, 'en', 'Заголовок'),
(524, 187, 'ru', 'Url'),
(525, 187, 'uk', 'Url'),
(526, 187, 'en', 'Url'),
(527, 188, 'ru', 'Картинка'),
(528, 188, 'uk', 'Картинка'),
(529, 188, 'en', 'Картинка'),
(530, 189, 'ru', 'Выбрать из загруженных'),
(531, 189, 'uk', 'Выбрать из загруженных'),
(532, 189, 'en', 'Выбрать из загруженных'),
(533, 190, 'ru', 'Выберите изображения'),
(534, 190, 'uk', 'Выберите изображения'),
(535, 190, 'en', 'Выберите изображения'),
(536, 191, 'ru', 'Дополнительные картинки'),
(537, 191, 'uk', 'Дополнительные картинки'),
(538, 191, 'en', 'Дополнительные картинки'),
(539, 192, 'ru', 'Активно'),
(540, 192, 'uk', 'Активно'),
(541, 192, 'en', 'Активно'),
(542, 193, 'ru', 'Seo title'),
(543, 193, 'uk', 'Seo title'),
(544, 193, 'en', 'Seo title'),
(545, 194, 'ru', 'Seo description'),
(546, 194, 'uk', 'Seo description'),
(547, 194, 'en', 'Seo description'),
(548, 195, 'ru', 'Создать js файл с переводами'),
(549, 195, 'uk', 'Создать js файл с переводами'),
(550, 195, 'en', 'Создать js файл с переводами'),
(551, 196, 'ru', 'создание'),
(552, 196, 'uk', 'создание'),
(553, 196, 'en', 'создание'),
(554, 197, 'ru', 'Пользователь не активирован'),
(555, 197, 'uk', 'Пользователь не активирован'),
(556, 197, 'en', 'Пользователь не активирован'),
(557, 198, 'ru', 'История'),
(558, 198, 'uk', 'История'),
(559, 198, 'en', 'История'),
(560, 199, 'ru', 'ru'),
(561, 199, 'uk', 'ru'),
(562, 199, 'en', 'ru'),
(563, 200, 'ru', 'ua'),
(564, 200, 'uk', 'ua'),
(565, 200, 'en', 'ua'),
(566, 201, 'ru', 'en'),
(567, 201, 'uk', 'en'),
(568, 201, 'en', 'en'),
(569, 202, 'ru', 'Меню'),
(570, 202, 'uk', 'Меню'),
(571, 202, 'en', 'Меню'),
(572, 203, 'ru', 'Меню верхнее'),
(573, 203, 'uk', 'Меню верхнее'),
(574, 203, 'en', 'Меню верхнее'),
(575, 204, 'ru', 'Меню футера'),
(576, 204, 'uk', 'Меню футера'),
(577, 204, 'en', 'Меню футера'),
(578, 205, 'ru', 'Выбрать файл для загрузки'),
(579, 205, 'uk', 'Выбрать файл для загрузки'),
(580, 205, 'en', 'Выбрать файл для загрузки'),
(581, 206, 'ru', 'Сохренено'),
(582, 206, 'uk', 'Сохренено'),
(583, 206, 'en', 'Сохренено'),
(584, 207, 'ru', 'Слайдер'),
(585, 207, 'uk', 'Слайдер'),
(586, 207, 'en', 'Слайдер'),
(587, 208, 'ru', 'Права доступа'),
(588, 208, 'uk', 'Права доступа'),
(589, 208, 'en', 'Права доступа'),
(590, 209, 'ru', 'Дооступ в cms'),
(591, 209, 'uk', 'Дооступ в cms'),
(592, 209, 'en', 'Дооступ в cms'),
(593, 210, 'ru', 'Да'),
(594, 210, 'uk', 'Да'),
(595, 210, 'en', 'Да'),
(596, 211, 'ru', 'Просмотр'),
(597, 211, 'uk', 'Просмотр'),
(598, 211, 'en', 'Просмотр'),
(599, 212, 'ru', 'Активность'),
(600, 212, 'uk', 'Активность'),
(601, 212, 'en', 'Активность'),
(602, 213, 'ru', 'Нет'),
(603, 213, 'uk', 'Нет'),
(604, 213, 'en', 'Нет'),
(605, 214, 'ru', 'Пока пусто'),
(606, 214, 'uk', 'Пока пусто'),
(607, 214, 'en', 'Пока пусто'),
(608, 215, 'ru', 'Клонировтаь'),
(609, 215, 'uk', 'Клонировтаь'),
(610, 215, 'en', 'Клонировтаь'),
(611, 216, 'ru', 'Блоки'),
(612, 216, 'uk', 'Блоки'),
(613, 216, 'en', 'Блоки'),
(614, 217, 'ru', 'Инфо-блоки'),
(615, 217, 'uk', 'Инфо-блоки'),
(616, 217, 'en', 'Инфо-блоки'),
(617, 218, 'ru', 'Загрузка..'),
(618, 218, 'uk', 'Загрузка..'),
(619, 218, 'en', 'Загрузка..'),
(620, 219, 'ru', 'Картика'),
(621, 219, 'uk', 'Картика'),
(622, 219, 'en', 'Картика'),
(623, 220, 'ru', 'Checkbox'),
(624, 220, 'uk', 'Checkbox'),
(625, 220, 'en', 'Checkbox'),
(626, 221, 'ru', 'Datetime'),
(627, 221, 'uk', 'Datetime'),
(628, 221, 'en', 'Datetime'),
(629, 222, 'ru', 'Тип блока'),
(630, 222, 'uk', 'Тип блока'),
(631, 222, 'en', 'Тип блока'),
(632, 223, 'ru', 'Товары'),
(633, 223, 'uk', 'Товары'),
(634, 223, 'en', 'Товары'),
(635, 224, 'ru', 'Категория'),
(636, 224, 'uk', 'Категория'),
(637, 224, 'en', 'Категория'),
(638, 225, 'ru', 'Категория продуктов'),
(639, 225, 'uk', 'Категория продуктов'),
(640, 225, 'en', 'Категория продуктов'),
(641, 226, 'ru', 'Главная категория'),
(642, 226, 'uk', 'Главная категория'),
(643, 226, 'en', 'Главная категория'),
(644, 227, 'ru', 'Продукция'),
(645, 227, 'uk', 'Продукция'),
(646, 227, 'en', 'Продукция'),
(647, 228, 'ru', 'Краткое описание'),
(648, 228, 'uk', 'Краткое описание'),
(649, 228, 'en', 'Краткое описание'),
(650, 229, 'ru', 'Ссылка на видео'),
(651, 229, 'uk', 'Ссылка на видео'),
(652, 229, 'en', 'Ссылка на видео'),
(653, 230, 'ru', 'Состав'),
(654, 230, 'uk', 'Состав'),
(655, 230, 'en', 'Состав'),
(656, 231, 'ru', 'Картинки доп'),
(657, 231, 'uk', 'Картинки доп'),
(658, 231, 'en', 'Картинки доп'),
(659, 232, 'ru', 'Медиа'),
(660, 232, 'uk', 'Медиа'),
(661, 232, 'en', 'Медиа'),
(662, 233, 'ru', 'Цена'),
(663, 233, 'uk', 'Цена'),
(664, 233, 'en', 'Цена'),
(665, 234, 'ru', 'Тип измерений'),
(666, 234, 'uk', 'Тип измерений'),
(667, 234, 'en', 'Тип измерений'),
(668, 235, 'ru', 'Величина измерений'),
(669, 235, 'uk', 'Величина измерений'),
(670, 235, 'en', 'Величина измерений'),
(671, 236, 'ru', 'Старая цена'),
(672, 236, 'uk', 'Старая цена'),
(673, 236, 'en', 'Старая цена'),
(674, 237, 'ru', 'Дефолтная цена'),
(675, 237, 'uk', 'Дефолтная цена'),
(676, 237, 'en', 'Дефолтная цена'),
(677, 238, 'ru', 'Артикул'),
(678, 238, 'uk', 'Артикул'),
(679, 238, 'en', 'Артикул'),
(680, 239, 'ru', 'Превью видео'),
(681, 239, 'uk', 'Превью видео'),
(682, 239, 'en', 'Превью видео'),
(683, 240, 'ru', 'Продано'),
(684, 240, 'uk', 'Продано'),
(685, 240, 'en', 'Продано'),
(686, 241, 'ru', '50% скидка'),
(687, 241, 'uk', '50% скидка'),
(688, 241, 'en', '50% скидка'),
(689, 242, 'ru', 'Заказы'),
(690, 242, 'uk', 'Заказы'),
(691, 242, 'en', 'Заказы'),
(692, 243, 'ru', 'Телефон'),
(693, 243, 'uk', 'Телефон'),
(694, 243, 'en', 'Телефон'),
(695, 244, 'ru', 'Продукты'),
(696, 244, 'uk', 'Продукты'),
(697, 244, 'en', 'Продукты'),
(698, 245, 'ru', 'Вес'),
(699, 245, 'uk', 'Вес'),
(700, 245, 'en', 'Вес'),
(701, 246, 'ru', 'Тип веса'),
(702, 246, 'uk', 'Тип веса'),
(703, 246, 'en', 'Тип веса'),
(704, 247, 'ru', 'Количество'),
(705, 247, 'uk', 'Количество'),
(706, 247, 'en', 'Количество');

-- --------------------------------------------------------

--
-- Структура таблицы `translations_phrases`
--

CREATE TABLE `translations_phrases` (
  `id` int(10) UNSIGNED NOT NULL,
  `phrase` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `translations_phrases`
--

INSERT INTO `translations_phrases` (`id`, `phrase`) VALUES
(1, 'от А до Я'),
(2, 'от Я до А'),
(3, 'По цене'),
(4, 'по убиванию'),
(5, 'по возрастанию'),
(6, 'gr'),
(7, 'грн'),
(8, 'Купить'),
(9, 'В каталог товаров'),
(10, 'Артикул'),
(11, 'Объем'),
(12, 'Смотреть видео'),
(13, 'Состав'),
(14, 'Описание товара'),
(15, 'Сообщить о наличии'),
(16, 'Корзина'),
(17, 'Итого'),
(18, 'Оформить заказ'),
(19, 'Название товара'),
(20, 'Корзина пуста'),
(21, 'Оформление заказа'),
(22, 'Контактные данные'),
(23, 'Я новый покупатель'),
(24, 'Я постоянный покупатель'),
(25, 'Имя'),
(26, 'Фамилия'),
(27, 'Телефон'),
(28, 'Город'),
(29, 'Заказ'),
(30, 'Способ доставки'),
(31, 'Новая почта'),
(32, 'Новая почта (курьер)'),
(33, 'Самовывоз (только по Киеву)'),
(34, 'Способ оплаты'),
(35, 'Онлайн оплата'),
(36, 'Наложенный платеж'),
(37, '2 товара на сумму'),
(38, 'Стоимость доставки'),
(39, 'По тарифам перевозчика'),
(40, 'К оплате'),
(41, 'Заказ подтверждаю'),
(42, 'Подтверждая заказ, я принимаю условия'),
(43, 'пользовательского соглашения'),
(44, 'товар(a/ов) на сумму');

-- --------------------------------------------------------

--
-- Структура таблицы `translations_phrases_cms`
--

CREATE TABLE `translations_phrases_cms` (
  `id` int(10) UNSIGNED NOT NULL,
  `phrase` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `translations_phrases_cms`
--

INSERT INTO `translations_phrases_cms` (`id`, `phrase`) VALUES
(8, 'Фраза'),
(9, 'Код'),
(10, 'Переводы'),
(11, 'Добавить'),
(12, 'Удалить'),
(13, 'Каталог пустой'),
(14, 'Показано'),
(15, 'записей'),
(16, 'из'),
(17, 'Главная'),
(19, 'О нас'),
(20, 'Переменые'),
(21, 'Настройки'),
(22, 'Пресса'),
(23, 'Структура сайта'),
(24, 'Кейсы'),
(25, 'Команда'),
(26, 'Упр. пользователями'),
(27, 'Пользователи'),
(28, 'Группы'),
(29, 'Показывать по'),
(30, 'Все'),
(31, 'Административная часть сайта'),
(32, 'Служба поддержки'),
(33, 'Войти'),
(34, 'Эл.почта'),
(35, 'Пароль'),
(36, 'Запомнить меня'),
(37, 'Введите адрес эл.почты'),
(38, 'Введите валидный адрес эл.почты'),
(39, 'Введите пароль'),
(40, 'Пользователь не найден'),
(41, 'Создать'),
(42, 'Тип'),
(43, 'Группа'),
(44, 'Значение'),
(45, 'Редактировать'),
(46, 'Редактирование'),
(47, 'Название'),
(48, 'Клонировать'),
(49, 'Дата создания'),
(50, 'Статья активна'),
(51, 'Общие'),
(52, 'Телефоны'),
(54, 'Новости'),
(55, 'Создание'),
(56, 'Отмена'),
(57, 'Сохранить'),
(58, 'Показать дерево'),
(59, 'Спрятать дерево'),
(60, 'Шаблон'),
(61, 'Активный'),
(62, 'Предпросмотр'),
(63, 'ДА'),
(64, 'НЕТ'),
(65, 'Выберите шаблон'),
(66, 'Общая'),
(67, 'Текст'),
(68, 'Выберите изображение для загрузки'),
(69, 'Нет изображений'),
(70, 'Выбрать'),
(71, 'Нет изображения'),
(72, 'Код(для вставки)'),
(73, 'Большой текст'),
(74, 'Большой текст с редактором'),
(75, 'Список'),
(76, 'Двойной список'),
(77, 'Тройной список'),
(78, 'Файл'),
(79, 'Шаблоны писем'),
(80, 'Тема письма'),
(81, 'Пусто'),
(82, 'Тело письма'),
(83, 'Загрузка...'),
(84, 'Выберите время'),
(85, 'Время'),
(86, 'Часы'),
(87, 'Минуты'),
(88, 'Секунды'),
(89, 'Миллисекунды'),
(90, 'Часовой пояс'),
(91, 'Сейчас'),
(92, 'Закрыть'),
(93, 'Баннера'),
(94, 'Баннерные площадки'),
(95, 'Площадка'),
(96, 'Кол.показов'),
(97, 'Кол.кликов'),
(98, 'Статус'),
(99, 'Начало показа'),
(100, 'Конец показа'),
(101, 'Всегда показывать'),
(102, 'Баннерная площадка'),
(103, 'Ссылка'),
(104, 'Файл для показа'),
(105, 'Выбрать файл (jpg, gif, png или swf)'),
(106, 'Показывать всегда'),
(107, 'Открывать в новом окне'),
(108, 'Короткий текст'),
(109, 'Изображение'),
(110, 'Дополнительные изображение'),
(111, 'Описание'),
(112, 'Письма'),
(113, 'Кому'),
(114, 'Дата отправки'),
(115, 'Просмотреть'),
(116, 'Письмо'),
(117, 'Если включен тестовый режим, то письма не будут уходить, а будут складываться в лог файл'),
(118, 'Настройки почты'),
(119, 'Драйвер'),
(120, 'Обратный адрес в письме'),
(121, 'Имя отправителя'),
(122, 'Тестовый режим'),
(123, 'Почта'),
(124, 'Настройки почты обновлены'),
(125, 'Выход'),
(126, 'Группы пользователей'),
(127, 'Имя'),
(128, 'Фамилия'),
(129, 'Дата последнего входа'),
(130, 'Дата регистрации'),
(131, 'Активен'),
(132, 'Поиск'),
(133, 'Права'),
(134, 'Профайл'),
(135, 'Загрузить'),
(136, 'Подписан на рассылку'),
(137, 'Группы пользователя'),
(138, 'Разрешить'),
(139, 'Запретить'),
(140, 'Наследовать'),
(141, 'Эту операцию нельзя будет отменить.'),
(142, 'Поле удалено успешно'),
(143, 'Что-то пошло не так, попробуйте позже'),
(144, 'Сохранено'),
(145, 'Новоя запись добавлена'),
(146, 'Ошибка при загрузке изображения'),
(147, 'Ошибка при загрузке файла'),
(148, 'Порядок следования изменен'),
(149, 'Последние 5 заказов'),
(151, 'Русский'),
(152, 'Русский1'),
(166, 'Переводы CMS'),
(167, 'Переклади CMS'),
(168, 'Статьи'),
(169, 'Управление'),
(170, 'Контроль изменений'),
(171, 'Обрезать изображение'),
(172, 'The translation of CMS'),
(173, 'SEO'),
(174, 'Безопасность'),
(175, 'Цены'),
(176, 'Код для вставки'),
(177, 'Текстовое поле'),
(178, 'Вкл/Выкл'),
(179, '#'),
(180, 'Email'),
(181, 'Редактироварь'),
(182, '20'),
(183, '100'),
(184, '1000'),
(185, 'Общее'),
(186, 'Заголовок'),
(187, 'Url'),
(188, 'Картинка'),
(189, 'Выбрать из загруженных'),
(190, 'Выберите изображения'),
(191, 'Дополнительные картинки'),
(192, 'Активно'),
(193, 'Seo title'),
(194, 'Seo description'),
(195, 'Создать js файл с переводами'),
(196, 'создание'),
(197, 'Пользователь не активирован'),
(198, 'История'),
(199, 'ru'),
(200, 'ua'),
(201, 'en'),
(202, 'Меню'),
(203, 'Меню верхнее'),
(204, 'Меню футера'),
(205, 'Выбрать файл для загрузки'),
(206, 'Сохренено'),
(207, 'Слайдер'),
(208, 'Права доступа'),
(209, 'Дооступ в cms'),
(210, 'Да'),
(211, 'Просмотр'),
(212, 'Активность'),
(213, 'Нет'),
(214, 'Пока пусто'),
(215, 'Клонировтаь'),
(216, 'Блоки'),
(217, 'Инфо-блоки'),
(218, 'Загрузка..'),
(219, 'Картика'),
(220, 'Checkbox'),
(221, 'Datetime'),
(222, 'Тип блока'),
(223, 'Товары'),
(224, 'Категория'),
(225, 'Категория продуктов'),
(226, 'Главная категория'),
(227, 'Продукция'),
(228, 'Краткое описание'),
(229, 'Ссылка на видео'),
(230, 'Состав'),
(231, 'Картинки доп'),
(232, 'Медиа'),
(233, 'Цена'),
(234, 'Тип измерений'),
(235, 'Величина измерений'),
(236, 'Старая цена'),
(237, 'Дефолтная цена'),
(238, 'Артикул'),
(239, 'Превью видео'),
(240, 'Продано'),
(241, '50% скидка'),
(242, 'Заказы'),
(243, 'Телефон'),
(244, 'Продукты'),
(245, 'Вес'),
(246, 'Тип веса'),
(247, 'Количество');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `permissions` text,
  `last_login` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `first_name`, `last_name`, `image`, `permissions`, `last_login`, `created_at`, `updated_at`) VALUES
(1, 'admin@vis-design.com', '$2y$10$pP9gTXiR.k40P14/HccCpuW4kyPQ7xka.NMlOqe9fqR8yWqTrVWSO', 'admin', 'admin', '', '', '2021-04-13 16:44:20', '2021-04-12 19:23:18', '2021-04-13 16:44:20');

-- --------------------------------------------------------

--
-- Структура таблицы `vis_documents`
--

CREATE TABLE `vis_documents` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_folder` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_source` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vis_galleries`
--

CREATE TABLE `vis_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vis_images`
--

CREATE TABLE `vis_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_folder` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_source` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_cms_preview` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exif_data` text COLLATE utf8mb4_unicode_ci,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `date_time_source` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `vis_images`
--

INSERT INTO `vis_images` (`id`, `file_folder`, `file_source`, `file_cms_preview`, `title`, `slug`, `exif_data`, `is_active`, `date_time_source`, `created_at`, `updated_at`) VALUES
(1, '/storage/editor/fotos/', '1e2cc6cea9a56b7743564f0dcb6268e8_1618341495.jpg', '//via.placeholder.com/200x200', NULL, '', NULL, 1, '2021-04-13 19:18:16', '2021-04-13 19:18:16', '2021-04-13 19:18:16'),
(2, '/storage/editor/fotos/', '97b2ed25fae33d01b3858feb89351099_1618406907.jpg', '//via.placeholder.com/200x200', NULL, '-1', NULL, 1, '2021-04-14 13:28:27', '2021-04-14 13:28:27', '2021-04-14 13:28:27'),
(3, '/storage/editor/fotos/', '001bd64a56e8cef8ccea2add4201e7ca_1618413569.jpg', '//via.placeholder.com/200x200', NULL, '-1-1', NULL, 1, '2021-04-14 15:19:29', '2021-04-14 15:19:29', '2021-04-14 15:19:29'),
(4, '/storage/editor/fotos/', '8932656f95cbea2bc911097d0ba63421_1620319348.jpg', '//via.placeholder.com/200x200', NULL, '-1-1-1', NULL, 1, '2021-05-06 16:42:29', '2021-05-06 16:42:29', '2021-05-06 16:42:29');

-- --------------------------------------------------------

--
-- Структура таблицы `vis_images2galleries`
--

CREATE TABLE `vis_images2galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_image` int(10) UNSIGNED NOT NULL,
  `id_gallery` int(10) UNSIGNED NOT NULL,
  `is_preview` tinyint(4) NOT NULL,
  `priority` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vis_tags`
--

CREATE TABLE `vis_tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vis_tags2entities`
--

CREATE TABLE `vis_tags2entities` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_tag` int(10) UNSIGNED NOT NULL,
  `id_entity` int(10) UNSIGNED NOT NULL,
  `entity_type` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vis_videos`
--

CREATE TABLE `vis_videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_preview` int(10) UNSIGNED DEFAULT NULL,
  `api_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_provider` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vis_videos2video_galleries`
--

CREATE TABLE `vis_videos2video_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_video` int(10) UNSIGNED NOT NULL,
  `id_video_gallery` int(10) UNSIGNED NOT NULL,
  `is_preview` tinyint(4) NOT NULL,
  `priority` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `vis_video_galleries`
--

CREATE TABLE `vis_video_galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_active` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activations_user_id_index` (`user_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `info_blocks`
--
ALTER TABLE `info_blocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `info_blocks_tb_tree_id_foreign` (`tb_tree_id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Индексы таблицы `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`),
  ADD KEY `order_products_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `persistences_user_id_index` (`user_id`),
  ADD KEY `persistences_code_index` (`code`);

--
-- Индексы таблицы `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_categories_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `product_prices`
--
ALTER TABLE `product_prices`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_prices_product_id_foreign` (`product_id`);

--
-- Индексы таблицы `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reminders_user_id_index` (`user_id`);

--
-- Индексы таблицы `revisions`
--
ALTER TABLE `revisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `revisions_revisionable_id_revisionable_type_index` (`revisionable_id`,`revisionable_type`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Индексы таблицы `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Индексы таблицы `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `setting_select`
--
ALTER TABLE `setting_select`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setting_select_id_setting_index` (`id_setting`);

--
-- Индексы таблицы `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tb_tree`
--
ALTER TABLE `tb_tree`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tb_tree_lft_index` (`lft`),
  ADD KEY `tb_tree_rgt_index` (`rgt`),
  ADD KEY `tb_tree_parent_id_foreign` (`parent_id`);

--
-- Индексы таблицы `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`),
  ADD KEY `throttle_type_ip_created_at_index` (`type`,`ip`,`created_at`);

--
-- Индексы таблицы `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_id_translations_phrase_index` (`id_translations_phrase`);

--
-- Индексы таблицы `translations_cms`
--
ALTER TABLE `translations_cms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_cms_translations_phrases_cms_id_index` (`translations_phrases_cms_id`);

--
-- Индексы таблицы `translations_phrases`
--
ALTER TABLE `translations_phrases`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `translations_phrases_cms`
--
ALTER TABLE `translations_phrases_cms`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_email_index` (`email`);

--
-- Индексы таблицы `vis_documents`
--
ALTER TABLE `vis_documents`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vis_galleries`
--
ALTER TABLE `vis_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vis_images`
--
ALTER TABLE `vis_images`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vis_images2galleries`
--
ALTER TABLE `vis_images2galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vis_images2galleries_id_image_foreign` (`id_image`),
  ADD KEY `vis_images2galleries_id_gallery_foreign` (`id_gallery`);

--
-- Индексы таблицы `vis_tags`
--
ALTER TABLE `vis_tags`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vis_tags2entities`
--
ALTER TABLE `vis_tags2entities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vis_tags2entities_id_tag_foreign` (`id_tag`);

--
-- Индексы таблицы `vis_videos`
--
ALTER TABLE `vis_videos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vis_videos_id_preview_foreign` (`id_preview`);

--
-- Индексы таблицы `vis_videos2video_galleries`
--
ALTER TABLE `vis_videos2video_galleries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `vis_videos2video_galleries_id_video_foreign` (`id_video`),
  ADD KEY `vis_videos2video_galleries_id_video_gallery_foreign` (`id_video_gallery`);

--
-- Индексы таблицы `vis_video_galleries`
--
ALTER TABLE `vis_video_galleries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `info_blocks`
--
ALTER TABLE `info_blocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `product_prices`
--
ALTER TABLE `product_prices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `revisions`
--
ALTER TABLE `revisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT для таблицы `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `setting_select`
--
ALTER TABLE `setting_select`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `tb_tree`
--
ALTER TABLE `tb_tree`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT для таблицы `translations_cms`
--
ALTER TABLE `translations_cms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=707;

--
-- AUTO_INCREMENT для таблицы `translations_phrases`
--
ALTER TABLE `translations_phrases`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT для таблицы `translations_phrases_cms`
--
ALTER TABLE `translations_phrases_cms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `vis_documents`
--
ALTER TABLE `vis_documents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `vis_galleries`
--
ALTER TABLE `vis_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `vis_images`
--
ALTER TABLE `vis_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `vis_images2galleries`
--
ALTER TABLE `vis_images2galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `vis_tags`
--
ALTER TABLE `vis_tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `vis_tags2entities`
--
ALTER TABLE `vis_tags2entities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `vis_videos`
--
ALTER TABLE `vis_videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `vis_videos2video_galleries`
--
ALTER TABLE `vis_videos2video_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `vis_video_galleries`
--
ALTER TABLE `vis_video_galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `activations`
--
ALTER TABLE `activations`
  ADD CONSTRAINT `activations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `info_blocks`
--
ALTER TABLE `info_blocks`
  ADD CONSTRAINT `info_blocks_tb_tree_id_foreign` FOREIGN KEY (`tb_tree_id`) REFERENCES `tb_tree` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ограничения внешнего ключа таблицы `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `order_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `persistences`
--
ALTER TABLE `persistences`
  ADD CONSTRAINT `persistences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `product_categories`
--
ALTER TABLE `product_categories`
  ADD CONSTRAINT `product_categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `tb_tree` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `product_prices`
--
ALTER TABLE `product_prices`
  ADD CONSTRAINT `product_prices_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Ограничения внешнего ключа таблицы `reminders`
--
ALTER TABLE `reminders`
  ADD CONSTRAINT `reminders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `setting_select`
--
ALTER TABLE `setting_select`
  ADD CONSTRAINT `setting_select_id_setting_foreign` FOREIGN KEY (`id_setting`) REFERENCES `settings` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `tb_tree`
--
ALTER TABLE `tb_tree`
  ADD CONSTRAINT `tb_tree_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `tb_tree` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `throttle`
--
ALTER TABLE `throttle`
  ADD CONSTRAINT `throttle_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `translations`
--
ALTER TABLE `translations`
  ADD CONSTRAINT `translations_id_translations_phrase_foreign` FOREIGN KEY (`id_translations_phrase`) REFERENCES `translations_phrases` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `translations_cms`
--
ALTER TABLE `translations_cms`
  ADD CONSTRAINT `translations_cms_translations_phrases_cms_id_foreign` FOREIGN KEY (`translations_phrases_cms_id`) REFERENCES `translations_phrases_cms` (`id`) ON DELETE CASCADE;

--
-- Ограничения внешнего ключа таблицы `vis_images2galleries`
--
ALTER TABLE `vis_images2galleries`
  ADD CONSTRAINT `vis_images2galleries_id_gallery_foreign` FOREIGN KEY (`id_gallery`) REFERENCES `vis_galleries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vis_images2galleries_id_image_foreign` FOREIGN KEY (`id_image`) REFERENCES `vis_images` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `vis_tags2entities`
--
ALTER TABLE `vis_tags2entities`
  ADD CONSTRAINT `vis_tags2entities_id_tag_foreign` FOREIGN KEY (`id_tag`) REFERENCES `vis_tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ограничения внешнего ключа таблицы `vis_videos`
--
ALTER TABLE `vis_videos`
  ADD CONSTRAINT `vis_videos_id_preview_foreign` FOREIGN KEY (`id_preview`) REFERENCES `vis_images` (`id`) ON DELETE SET NULL ON UPDATE SET NULL;

--
-- Ограничения внешнего ключа таблицы `vis_videos2video_galleries`
--
ALTER TABLE `vis_videos2video_galleries`
  ADD CONSTRAINT `vis_videos2video_galleries_id_video_foreign` FOREIGN KEY (`id_video`) REFERENCES `vis_videos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `vis_videos2video_galleries_id_video_gallery_foreign` FOREIGN KEY (`id_video_gallery`) REFERENCES `vis_video_galleries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
