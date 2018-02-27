-- phpMyAdmin SQL Dump
-- version 4.7.8
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 27-Fev-2018 às 08:33
-- Versão do servidor: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.2.2-3+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sisport_new`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `coordenacoes`
--

CREATE TABLE `coordenacoes` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` text COLLATE utf8_unicode_ci NOT NULL,
  `sigla` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `coordenacoes`
--

INSERT INTO `coordenacoes` (`id`, `nome`, `sigla`, `created_at`, `updated_at`) VALUES
(1, 'Coordenação de Informática', 'COINF', '2018-02-25 01:08:24', '2018-02-25 01:08:24'),
(2, 'Coordenação de Gestão Acadêmica', 'COGEA', '2018-02-25 01:08:42', '2018-02-25 01:08:42'),
(3, 'Direção de Ensino', 'DIREN', '2018-02-27 06:49:05', '2018-02-27 06:49:05'),
(4, 'Coordenação de Sistemas para Internet', 'COTSI', '2018-02-27 06:49:28', '2018-02-27 06:49:28');

-- --------------------------------------------------------

--
-- Estrutura da tabela `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '', 1),
(2, 1, 'author_id', 'text', 'Author', 1, 0, 1, 1, 0, 1, '', 2),
(3, 1, 'category_id', 'text', 'Category', 1, 0, 1, 1, 1, 0, '', 3),
(4, 1, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '', 4),
(5, 1, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 5),
(6, 1, 'body', 'rich_text_box', 'Body', 1, 0, 1, 1, 1, 1, '', 6),
(7, 1, 'image', 'image', 'Post Image', 0, 1, 1, 1, 1, 1, '{\"resize\":{\"width\":\"1000\",\"height\":\"null\"},\"quality\":\"70%\",\"upsize\":true,\"thumbnails\":[{\"name\":\"medium\",\"scale\":\"50%\"},{\"name\":\"small\",\"scale\":\"25%\"},{\"name\":\"cropped\",\"crop\":{\"width\":\"300\",\"height\":\"250\"}}]}', 7),
(8, 1, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}', 8),
(9, 1, 'meta_description', 'text_area', 'meta_description', 1, 0, 1, 1, 1, 1, '', 9),
(10, 1, 'meta_keywords', 'text_area', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 10),
(11, 1, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{\"default\":\"DRAFT\",\"options\":{\"PUBLISHED\":\"published\",\"DRAFT\":\"draft\",\"PENDING\":\"pending\"}}', 11),
(12, 1, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, '', 12),
(13, 1, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 13),
(14, 2, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(15, 2, 'author_id', 'text', 'author_id', 1, 0, 0, 0, 0, 0, '', 2),
(16, 2, 'title', 'text', 'title', 1, 1, 1, 1, 1, 1, '', 3),
(17, 2, 'excerpt', 'text_area', 'excerpt', 1, 0, 1, 1, 1, 1, '', 4),
(18, 2, 'body', 'rich_text_box', 'body', 1, 0, 1, 1, 1, 1, '', 5),
(19, 2, 'slug', 'text', 'slug', 1, 0, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"title\"}}', 6),
(20, 2, 'meta_description', 'text', 'meta_description', 1, 0, 1, 1, 1, 1, '', 7),
(21, 2, 'meta_keywords', 'text', 'meta_keywords', 1, 0, 1, 1, 1, 1, '', 8),
(22, 2, 'status', 'select_dropdown', 'status', 1, 1, 1, 1, 1, 1, '{\"default\":\"INACTIVE\",\"options\":{\"INACTIVE\":\"INACTIVE\",\"ACTIVE\":\"ACTIVE\"}}', 9),
(23, 2, 'created_at', 'timestamp', 'created_at', 1, 1, 1, 0, 0, 0, '', 10),
(24, 2, 'updated_at', 'timestamp', 'updated_at', 1, 0, 0, 0, 0, 0, '', 11),
(25, 2, 'image', 'image', 'image', 0, 1, 1, 1, 1, 1, '', 12),
(26, 3, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(27, 3, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 2),
(28, 3, 'email', 'text', 'email', 1, 1, 1, 1, 1, 1, '', 3),
(29, 3, 'password', 'password', 'password', 0, 0, 0, 1, 1, 0, '', 4),
(30, 3, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"roles\",\"pivot\":\"0\"}', 10),
(31, 3, 'remember_token', 'text', 'remember_token', 0, 0, 0, 0, 0, 0, '', 5),
(32, 3, 'created_at', 'timestamp', 'created_at', 0, 1, 1, 0, 0, 0, '', 6),
(33, 3, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 7),
(34, 3, 'avatar', 'image', 'avatar', 0, 1, 1, 1, 1, 1, '', 8),
(35, 5, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(36, 5, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 2),
(37, 5, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3),
(38, 5, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4),
(39, 4, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(40, 4, 'parent_id', 'select_dropdown', 'parent_id', 0, 0, 1, 1, 1, 1, '{\"default\":\"\",\"null\":\"\",\"options\":{\"\":\"-- None --\"},\"relationship\":{\"key\":\"id\",\"label\":\"name\"}}', 2),
(41, 4, 'order', 'text', 'order', 1, 1, 1, 1, 1, 1, '{\"default\":1}', 3),
(42, 4, 'name', 'text', 'name', 1, 1, 1, 1, 1, 1, '', 4),
(43, 4, 'slug', 'text', 'slug', 1, 1, 1, 1, 1, 1, '{\"slugify\":{\"origin\":\"name\"}}', 5),
(44, 4, 'created_at', 'timestamp', 'created_at', 0, 0, 1, 0, 0, 0, '', 6),
(45, 4, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 7),
(46, 6, 'id', 'number', 'id', 1, 0, 0, 0, 0, 0, '', 1),
(47, 6, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '', 2),
(48, 6, 'created_at', 'timestamp', 'created_at', 0, 0, 0, 0, 0, 0, '', 3),
(49, 6, 'updated_at', 'timestamp', 'updated_at', 0, 0, 0, 0, 0, 0, '', 4),
(50, 6, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, '', 5),
(51, 1, 'seo_title', 'text', 'seo_title', 0, 1, 1, 1, 1, 1, '', 14),
(52, 1, 'featured', 'checkbox', 'featured', 1, 1, 1, 1, 1, 1, '', 15),
(53, 3, 'role_id', 'text', 'role_id', 1, 1, 1, 1, 1, 1, '', 9),
(54, 7, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(55, 7, 'descricao', 'text', 'Descricão', 1, 1, 1, 1, 1, 1, NULL, 2),
(56, 7, 'created_at', 'timestamp', 'Criado em', 0, 1, 1, 1, 0, 1, NULL, 3),
(57, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(58, 8, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(59, 8, 'descricao', 'text', 'Nome do Status', 1, 1, 1, 1, 1, 1, NULL, 2),
(60, 9, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(61, 9, 'nome', 'text', 'Nome', 1, 1, 1, 1, 1, 1, NULL, 2),
(62, 9, 'sigla', 'text', 'Sigla', 1, 1, 1, 1, 1, 1, NULL, 3),
(63, 9, 'created_at', 'timestamp', 'Criado em', 0, 1, 1, 1, 0, 1, NULL, 4),
(64, 9, 'updated_at', 'timestamp', 'Atualizado em', 0, 0, 0, 0, 0, 0, NULL, 5),
(65, 10, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(66, 10, 'nome', 'text', 'Nome', 1, 1, 1, 1, 1, 1, NULL, 2),
(67, 10, 'siape', 'number', 'Siape', 0, 1, 1, 1, 1, 1, NULL, 3),
(68, 10, 'cpf', 'text', 'CPF', 0, 1, 1, 1, 1, 1, NULL, 4),
(69, 10, 'coordenacoes_id', 'number', 'Coordenação', 0, 1, 1, 1, 1, 1, NULL, 6),
(70, 10, 'created_at', 'timestamp', 'Criado em', 0, 0, 1, 0, 0, 1, NULL, 7),
(71, 10, 'updated_at', 'timestamp', 'Atualizado em', 0, 0, 1, 0, 0, 0, NULL, 8),
(72, 10, 'pessoa_belongsto_coordenaco_relationship', 'relationship', 'Coordenação', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Coordenacao\",\"table\":\"coordenacoes\",\"type\":\"belongsTo\",\"column\":\"coordenacoes_id\",\"key\":\"id\",\"label\":\"nome\",\"pivot_table\":\"categories\",\"pivot\":\"0\"}', 5),
(73, 11, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(74, 11, 'port_num', 'text', 'Número da protaria', 1, 1, 1, 1, 1, 1, NULL, 2),
(75, 11, 'descricao', 'text_area', 'Descrição', 1, 1, 1, 1, 1, 1, NULL, 3),
(76, 11, 'data_emissao', 'date', 'Data publicação', 1, 1, 1, 1, 1, 1, NULL, 4),
(77, 11, 'publicacao', 'text', 'Publicado em', 0, 1, 1, 1, 1, 1, NULL, 5),
(78, 11, 'vencimento', 'date', 'Vencimento', 0, 1, 1, 1, 1, 1, NULL, 6),
(79, 11, 'periodicidades_id', 'checkbox', 'Periodicidades Id', 1, 1, 1, 1, 1, 1, NULL, 8),
(80, 11, 'status_id', 'checkbox', 'Status Id', 1, 1, 1, 1, 1, 1, NULL, 10),
(81, 11, 'prev_renovacao', 'date', 'Previsão de renovação', 0, 1, 1, 1, 1, 1, NULL, 11),
(82, 11, 'revoga_port', 'text', 'Revoga portaria', 0, 1, 1, 1, 1, 1, NULL, 12),
(83, 11, 'observacao', 'text_area', 'Observação', 0, 1, 1, 1, 1, 1, NULL, 14),
(84, 11, 'created_at', 'timestamp', 'Criada em', 0, 0, 1, 0, 0, 1, NULL, 15),
(85, 11, 'updated_at', 'timestamp', 'Atualizada em', 0, 0, 1, 0, 0, 0, NULL, 16),
(86, 11, 'portaria_belongsto_periodicidade_relationship', 'relationship', 'Periodicidade', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Periodicidade\",\"table\":\"periodicidades\",\"type\":\"belongsTo\",\"column\":\"periodicidades_id\",\"key\":\"id\",\"label\":\"descricao\",\"pivot_table\":\"categories\",\"pivot\":\"0\"}', 7),
(87, 11, 'portaria_belongsto_status_relationship', 'relationship', 'Status', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Status\",\"table\":\"status\",\"type\":\"belongsTo\",\"column\":\"status_id\",\"key\":\"id\",\"label\":\"descricao\",\"pivot_table\":\"categories\",\"pivot\":\"0\"}', 9),
(88, 12, 'id', 'checkbox', 'Id', 1, 0, 0, 0, 0, 0, NULL, 1),
(89, 12, 'pessoas_id', 'number', 'Pessoas Id', 1, 1, 1, 1, 1, 1, NULL, 2),
(90, 12, 'portarias_id', 'number', 'Portarias Id', 1, 1, 1, 1, 1, 1, NULL, 3),
(91, 11, 'portaria_belongstomany_pessoa_relationship', 'relationship', 'Membros', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\Pessoa\",\"table\":\"pessoas\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"nome\",\"pivot_table\":\"pessoas_portarias\",\"pivot\":\"1\"}', 13);

-- --------------------------------------------------------

--
-- Estrutura da tabela `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `created_at`, `updated_at`) VALUES
(1, 'posts', 'posts', 'Post', 'Posts', 'voyager-news', 'TCG\\Voyager\\Models\\Post', 'TCG\\Voyager\\Policies\\PostPolicy', '', '', 1, 0, '2018-02-25 00:08:07', '2018-02-25 00:08:07'),
(2, 'pages', 'pages', 'Page', 'Pages', 'voyager-file-text', 'TCG\\Voyager\\Models\\Page', NULL, '', '', 1, 0, '2018-02-25 00:08:07', '2018-02-25 00:08:07'),
(3, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', '', '', 1, 0, '2018-02-25 00:08:07', '2018-02-25 00:08:07'),
(4, 'categories', 'categories', 'Category', 'Categories', 'voyager-categories', 'TCG\\Voyager\\Models\\Category', NULL, '', '', 1, 0, '2018-02-25 00:08:07', '2018-02-25 00:08:07'),
(5, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, '2018-02-25 00:08:07', '2018-02-25 00:08:07'),
(6, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, '2018-02-25 00:08:07', '2018-02-25 00:08:07'),
(7, 'periodicidades', 'periodicidades', 'Periodicidade', 'Periodicidades', 'voyager-refresh', 'App\\Periodicidade', NULL, NULL, NULL, 1, 0, '2018-02-25 00:34:21', '2018-02-25 00:34:21'),
(8, 'status', 'status', 'Status', 'Statuses', 'voyager-activity', 'App\\Status', NULL, NULL, NULL, 1, 0, '2018-02-25 00:35:46', '2018-02-25 00:35:46'),
(9, 'coordenacoes', 'coordenacoes', 'Coordenacao', 'Coordenacoes', 'voyager-group', 'App\\Coordenacao', NULL, NULL, NULL, 1, 0, '2018-02-25 00:37:18', '2018-02-25 00:37:18'),
(10, 'pessoas', 'pessoas', 'Pessoa', 'Pessoas', 'voyager-person', 'App\\Pessoa', NULL, NULL, NULL, 1, 0, '2018-02-25 01:01:34', '2018-02-25 01:02:46'),
(11, 'portarias', 'portarias', 'Portaria', 'Portarias', 'voyager-file-text', 'App\\Portaria', NULL, NULL, NULL, 1, 0, '2018-02-25 01:15:38', '2018-02-27 07:00:10'),
(12, 'pessoas_portarias', 'pessoas-portarias', 'Pessoas Portaria', 'Pessoas Portarias', 'voyager-data', 'App\\PessoasPortaria', NULL, NULL, NULL, 1, 0, '2018-02-27 06:42:48', '2018-02-27 06:43:23');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2018-02-25 00:08:09', '2018-02-25 00:08:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Painel Administrativo', '', '_self', 'voyager-boat', '#000000', NULL, 1, '2018-02-25 00:08:09', '2018-02-27 07:47:17', 'voyager.dashboard', 'null'),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 4, '2018-02-25 00:08:09', '2018-02-25 01:06:52', 'voyager.media.index', NULL),
(4, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 3, '2018-02-25 00:08:09', '2018-02-25 00:08:09', 'voyager.users.index', NULL),
(7, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 2, '2018-02-25 00:08:10', '2018-02-25 00:08:10', 'voyager.roles.index', NULL),
(8, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 11, '2018-02-25 00:08:10', '2018-02-25 01:16:13', NULL, NULL),
(9, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 8, 1, '2018-02-25 00:08:10', '2018-02-25 01:06:52', 'voyager.menus.index', NULL),
(10, 1, 'Database', '', '_self', 'voyager-data', NULL, 8, 2, '2018-02-25 00:08:10', '2018-02-25 01:06:52', 'voyager.database.index', NULL),
(11, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 8, 3, '2018-02-25 00:08:10', '2018-02-25 01:06:52', 'voyager.compass.index', NULL),
(12, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 10, '2018-02-25 00:08:10', '2018-02-25 01:16:13', 'voyager.settings.index', NULL),
(13, 1, 'Hooks', '', '_self', 'voyager-hook', NULL, 8, 4, '2018-02-25 00:08:14', '2018-02-25 01:06:52', 'voyager.hooks', NULL),
(14, 1, 'Periodicidades', '/admin/periodicidades', '_self', 'voyager-refresh', NULL, NULL, 5, '2018-02-25 00:34:21', '2018-02-25 01:07:04', NULL, NULL),
(15, 1, 'Status', '/admin/status', '_self', 'voyager-activity', '#000000', NULL, 6, '2018-02-25 00:35:46', '2018-02-25 01:10:52', NULL, ''),
(16, 1, 'Coordenações', '/admin/coordenacoes', '_self', 'voyager-group', '#000000', NULL, 7, '2018-02-25 00:37:18', '2018-02-25 01:07:30', NULL, ''),
(17, 1, 'Pessoas', '/admin/pessoas', '_self', 'voyager-person', '#000000', NULL, 8, '2018-02-25 01:01:34', '2018-02-25 01:07:46', NULL, ''),
(18, 1, 'Portarias', '/admin/portarias', '_self', 'voyager-file-text', '#000000', NULL, 9, '2018-02-25 01:15:38', '2018-02-25 01:16:25', NULL, ''),
(19, 1, 'Pessoas Portarias', '/admin/pessoas-portarias', '_self', NULL, NULL, NULL, 12, '2018-02-27 06:42:48', '2018-02-27 06:42:48', NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_add_permission_group_id_to_permissions_table', 1),
(17, '2017_01_15_000000_create_permission_groups_table', 1),
(18, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(19, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(20, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(21, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(22, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(23, '2017_08_05_000000_add_group_to_settings_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodicidades`
--

CREATE TABLE `periodicidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `periodicidades`
--

INSERT INTO `periodicidades` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Quinzenal', '2018-02-25 01:12:16', '2018-02-25 01:12:16'),
(2, 'Mensal', '2018-02-25 01:12:22', '2018-02-25 01:12:22'),
(3, 'Bimestral', '2018-02-25 01:12:30', '2018-02-25 01:12:30'),
(4, 'Semestral', '2018-02-25 01:12:38', '2018-02-25 01:12:38'),
(5, 'Anual', '2018-02-25 01:12:44', '2018-02-25 01:12:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `permission_group_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`, `permission_group_id`) VALUES
(1, 'browse_admin', NULL, '2018-02-25 00:08:10', '2018-02-25 00:08:10', NULL),
(2, 'browse_database', NULL, '2018-02-25 00:08:10', '2018-02-25 00:08:10', NULL),
(3, 'browse_media', NULL, '2018-02-25 00:08:10', '2018-02-25 00:08:10', NULL),
(4, 'browse_compass', NULL, '2018-02-25 00:08:10', '2018-02-25 00:08:10', NULL),
(5, 'browse_menus', 'menus', '2018-02-25 00:08:10', '2018-02-25 00:08:10', NULL),
(6, 'read_menus', 'menus', '2018-02-25 00:08:10', '2018-02-25 00:08:10', NULL),
(7, 'edit_menus', 'menus', '2018-02-25 00:08:10', '2018-02-25 00:08:10', NULL),
(8, 'add_menus', 'menus', '2018-02-25 00:08:10', '2018-02-25 00:08:10', NULL),
(9, 'delete_menus', 'menus', '2018-02-25 00:08:10', '2018-02-25 00:08:10', NULL),
(10, 'browse_pages', 'pages', '2018-02-25 00:08:10', '2018-02-25 00:08:10', NULL),
(11, 'read_pages', 'pages', '2018-02-25 00:08:10', '2018-02-25 00:08:10', NULL),
(12, 'edit_pages', 'pages', '2018-02-25 00:08:10', '2018-02-25 00:08:10', NULL),
(13, 'add_pages', 'pages', '2018-02-25 00:08:10', '2018-02-25 00:08:10', NULL),
(14, 'delete_pages', 'pages', '2018-02-25 00:08:11', '2018-02-25 00:08:11', NULL),
(15, 'browse_roles', 'roles', '2018-02-25 00:08:11', '2018-02-25 00:08:11', NULL),
(16, 'read_roles', 'roles', '2018-02-25 00:08:11', '2018-02-25 00:08:11', NULL),
(17, 'edit_roles', 'roles', '2018-02-25 00:08:11', '2018-02-25 00:08:11', NULL),
(18, 'add_roles', 'roles', '2018-02-25 00:08:11', '2018-02-25 00:08:11', NULL),
(19, 'delete_roles', 'roles', '2018-02-25 00:08:11', '2018-02-25 00:08:11', NULL),
(20, 'browse_users', 'users', '2018-02-25 00:08:11', '2018-02-25 00:08:11', NULL),
(21, 'read_users', 'users', '2018-02-25 00:08:11', '2018-02-25 00:08:11', NULL),
(22, 'edit_users', 'users', '2018-02-25 00:08:11', '2018-02-25 00:08:11', NULL),
(23, 'add_users', 'users', '2018-02-25 00:08:11', '2018-02-25 00:08:11', NULL),
(24, 'delete_users', 'users', '2018-02-25 00:08:11', '2018-02-25 00:08:11', NULL),
(25, 'browse_posts', 'posts', '2018-02-25 00:08:11', '2018-02-25 00:08:11', NULL),
(26, 'read_posts', 'posts', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(27, 'edit_posts', 'posts', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(28, 'add_posts', 'posts', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(29, 'delete_posts', 'posts', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(30, 'browse_categories', 'categories', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(31, 'read_categories', 'categories', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(32, 'edit_categories', 'categories', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(33, 'add_categories', 'categories', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(34, 'delete_categories', 'categories', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(35, 'browse_settings', 'settings', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(36, 'read_settings', 'settings', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(37, 'edit_settings', 'settings', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(38, 'add_settings', 'settings', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(39, 'delete_settings', 'settings', '2018-02-25 00:08:12', '2018-02-25 00:08:12', NULL),
(40, 'browse_hooks', NULL, '2018-02-25 00:08:14', '2018-02-25 00:08:14', NULL),
(41, 'browse_periodicidades', 'periodicidades', '2018-02-25 00:34:21', '2018-02-25 00:34:21', NULL),
(42, 'read_periodicidades', 'periodicidades', '2018-02-25 00:34:21', '2018-02-25 00:34:21', NULL),
(43, 'edit_periodicidades', 'periodicidades', '2018-02-25 00:34:21', '2018-02-25 00:34:21', NULL),
(44, 'add_periodicidades', 'periodicidades', '2018-02-25 00:34:21', '2018-02-25 00:34:21', NULL),
(45, 'delete_periodicidades', 'periodicidades', '2018-02-25 00:34:21', '2018-02-25 00:34:21', NULL),
(46, 'browse_status', 'status', '2018-02-25 00:35:46', '2018-02-25 00:35:46', NULL),
(47, 'read_status', 'status', '2018-02-25 00:35:46', '2018-02-25 00:35:46', NULL),
(48, 'edit_status', 'status', '2018-02-25 00:35:46', '2018-02-25 00:35:46', NULL),
(49, 'add_status', 'status', '2018-02-25 00:35:46', '2018-02-25 00:35:46', NULL),
(50, 'delete_status', 'status', '2018-02-25 00:35:46', '2018-02-25 00:35:46', NULL),
(51, 'browse_coordenacoes', 'coordenacoes', '2018-02-25 00:37:18', '2018-02-25 00:37:18', NULL),
(52, 'read_coordenacoes', 'coordenacoes', '2018-02-25 00:37:18', '2018-02-25 00:37:18', NULL),
(53, 'edit_coordenacoes', 'coordenacoes', '2018-02-25 00:37:18', '2018-02-25 00:37:18', NULL),
(54, 'add_coordenacoes', 'coordenacoes', '2018-02-25 00:37:18', '2018-02-25 00:37:18', NULL),
(55, 'delete_coordenacoes', 'coordenacoes', '2018-02-25 00:37:18', '2018-02-25 00:37:18', NULL),
(56, 'browse_pessoas', 'pessoas', '2018-02-25 01:01:34', '2018-02-25 01:01:34', NULL),
(57, 'read_pessoas', 'pessoas', '2018-02-25 01:01:34', '2018-02-25 01:01:34', NULL),
(58, 'edit_pessoas', 'pessoas', '2018-02-25 01:01:34', '2018-02-25 01:01:34', NULL),
(59, 'add_pessoas', 'pessoas', '2018-02-25 01:01:34', '2018-02-25 01:01:34', NULL),
(60, 'delete_pessoas', 'pessoas', '2018-02-25 01:01:34', '2018-02-25 01:01:34', NULL),
(61, 'browse_portarias', 'portarias', '2018-02-25 01:15:38', '2018-02-25 01:15:38', NULL),
(62, 'read_portarias', 'portarias', '2018-02-25 01:15:38', '2018-02-25 01:15:38', NULL),
(63, 'edit_portarias', 'portarias', '2018-02-25 01:15:38', '2018-02-25 01:15:38', NULL),
(64, 'add_portarias', 'portarias', '2018-02-25 01:15:38', '2018-02-25 01:15:38', NULL),
(65, 'delete_portarias', 'portarias', '2018-02-25 01:15:38', '2018-02-25 01:15:38', NULL),
(66, 'browse_pessoas_portarias', 'pessoas_portarias', '2018-02-27 06:42:48', '2018-02-27 06:42:48', NULL),
(67, 'read_pessoas_portarias', 'pessoas_portarias', '2018-02-27 06:42:48', '2018-02-27 06:42:48', NULL),
(68, 'edit_pessoas_portarias', 'pessoas_portarias', '2018-02-27 06:42:48', '2018-02-27 06:42:48', NULL),
(69, 'add_pessoas_portarias', 'pessoas_portarias', '2018-02-27 06:42:48', '2018-02-27 06:42:48', NULL),
(70, 'delete_pessoas_portarias', 'pessoas_portarias', '2018-02-27 06:42:48', '2018-02-27 06:42:48', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_groups`
--

CREATE TABLE `permission_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(2, 1),
(3, 1),
(3, 3),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(20, 3),
(21, 1),
(21, 3),
(22, 1),
(22, 3),
(23, 1),
(23, 3),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(41, 1),
(41, 3),
(42, 1),
(42, 3),
(43, 1),
(43, 3),
(44, 1),
(44, 3),
(45, 1),
(45, 3),
(46, 1),
(46, 3),
(47, 1),
(47, 3),
(48, 1),
(48, 3),
(49, 1),
(49, 3),
(50, 1),
(50, 3),
(51, 1),
(51, 3),
(52, 1),
(52, 3),
(53, 1),
(53, 3),
(54, 1),
(54, 3),
(55, 1),
(55, 3),
(56, 1),
(56, 2),
(56, 3),
(57, 1),
(57, 2),
(57, 3),
(58, 1),
(58, 3),
(59, 1),
(59, 3),
(60, 1),
(60, 3),
(61, 1),
(61, 2),
(61, 3),
(62, 1),
(62, 2),
(62, 3),
(63, 1),
(63, 3),
(64, 1),
(64, 3),
(65, 1),
(65, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `siape` int(11) DEFAULT NULL,
  `cpf` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coordenacoes_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `siape`, `cpf`, `coordenacoes_id`, `created_at`, `updated_at`) VALUES
(1, 'Felipe Gustavo Braiani Santos', 2310754, '038.925.001-50', 2, '2018-02-25 01:09:11', '2018-02-25 01:09:11'),
(2, 'Wesley Eiji Sanches Kanashiro', 2240784, NULL, 1, '2018-02-27 06:48:39', '2018-02-27 06:48:39'),
(3, 'Rodrigo Andrade Cardoso', 1950436, NULL, 4, '2018-02-27 06:50:32', '2018-02-27 06:50:32'),
(4, 'Elton da Silva Paiva Valiente', 1844741, NULL, 3, '2018-02-27 06:51:00', '2018-02-27 06:51:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas_portarias`
--

CREATE TABLE `pessoas_portarias` (
  `id` int(10) UNSIGNED NOT NULL,
  `pessoa_id` int(10) UNSIGNED NOT NULL,
  `portaria_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pessoas_portarias`
--

INSERT INTO `pessoas_portarias` (`id`, `pessoa_id`, `portaria_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 4, 2),
(4, 2, 1),
(5, 1, 3),
(6, 2, 3),
(7, 3, 3),
(8, 4, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `portarias`
--

CREATE TABLE `portarias` (
  `id` int(10) UNSIGNED NOT NULL,
  `port_num` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_emissao` date NOT NULL,
  `publicacao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `vencimento` date DEFAULT NULL,
  `periodicidades_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL,
  `prev_renovacao` date DEFAULT NULL,
  `revoga_port` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `observacao` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `portarias`
--

INSERT INTO `portarias` (`id`, `port_num`, `descricao`, `data_emissao`, `publicacao`, `vencimento`, `periodicidades_id`, `status_id`, `prev_renovacao`, `revoga_port`, `observacao`, `created_at`, `updated_at`) VALUES
(1, '001/2018', 'Bla bla bla', '2018-02-23', 'BS 001/2018', '2018-04-10', 1, 1, '2018-03-22', NULL, 'Teste de Portaria', '2018-02-25 01:21:04', '2018-02-25 01:21:04'),
(2, '002/2018', 'Teste de segunda portaria', '2018-02-26', 'BS 002/2018', '2018-05-24', 1, 1, '2018-04-18', NULL, 'Nada a observar', '2018-02-27 06:52:26', '2018-02-27 06:52:26'),
(3, '003/2018', 'Teste 03', '2018-02-26', NULL, '2018-03-21', 1, 1, NULL, '083/2017', NULL, '2018-02-27 07:37:58', '2018-02-27 07:37:58');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'Administrador', 'Administrador', '2018-02-25 00:08:10', '2018-02-25 01:24:32'),
(2, 'Usuário', 'Servidor', '2018-02-25 00:08:10', '2018-02-25 01:23:16'),
(3, 'DIRGE', 'Direção Geral', '2018-02-25 01:24:07', '2018-02-25 01:24:07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', '', '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings/February2018/8XQjvTcaScDOZ1BGvmbn.png', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'SISPORT', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Sistema de controle de emissão de portarias', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', '', '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `status`
--

CREATE TABLE `status` (
  `id` int(10) UNSIGNED NOT NULL,
  `descricao` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `status`
--

INSERT INTO `status` (`id`, `descricao`) VALUES
(1, 'Ativo'),
(2, 'Revogado'),
(3, 'Cancelado');

-- --------------------------------------------------------

--
-- Estrutura da tabela `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `siape` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `password`, `remember_token`, `created_at`, `updated_at`, `siape`) VALUES
(1, 1, 'Administrador', 'admin@admin.com', 'users/February2018/6BrjwUzkRf96v5hwgvst.png', '$2y$10$mhleBkT6bjIRJwHytr0eFO6d.u1LnmF7Z0y/OLBG5P/GVkGV2itey', 'kcYjBZXxGkVo6kahwRdRNWufQCVEXUiPxrc5fbDPaAGL6XCFeitTCW68WDj1', '2018-02-25 00:09:25', '2018-02-25 01:28:06', NULL),
(2, 2, 'Usuário', 'user@user.com', 'users/default.png', '$2y$10$/4S3lKd/J8sU7EgnV2kJtu9u97cpD2YJnYUfj2wV5lt93nzXpBVZq', 'lmyBUthuxsm3vjLEsx4CLqucv1eR40tXMrtHJk7WYj7A8CLwhpG3l60V2A9F', '2018-02-25 01:21:43', '2018-02-25 01:21:43', NULL),
(3, 3, 'Direção Geral', 'dirge@dirge.com', 'users/default.png', '$2y$10$MvYD9NwNagD/E5b08nzsZuzG62d8BOyWpdlEw6G.pmOVf1EtdGRQC', 'Sy6176KX8SZsDzx3m9jrSx6a0FPQzvkmDffDAGZDpcUSb3RZm5nXNC6X6hNi', '2018-02-25 01:28:33', '2018-02-25 01:28:33', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `coordenacoes`
--
ALTER TABLE `coordenacoes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `periodicidades`
--
ALTER TABLE `periodicidades`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `periodicidades_descricao_unique` (`descricao`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_groups`
--
ALTER TABLE `permission_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permission_groups_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pessoas_siape_unique` (`siape`),
  ADD UNIQUE KEY `pessoas_cpf_unique` (`cpf`);

--
-- Indexes for table `pessoas_portarias`
--
ALTER TABLE `pessoas_portarias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pessoas_portarias_pessoas_id_index` (`pessoa_id`),
  ADD KEY `pessoas_portarias_portarias_id_index` (`portaria_id`);

--
-- Indexes for table `portarias`
--
ALTER TABLE `portarias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `portarias_port_num_unique` (`port_num`),
  ADD KEY `portarias_periodicidades_id_index` (`periodicidades_id`),
  ADD KEY `portarias_status_id_index` (`status_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_siape_unique` (`siape`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coordenacoes`
--
ALTER TABLE `coordenacoes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `periodicidades`
--
ALTER TABLE `periodicidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `permission_groups`
--
ALTER TABLE `permission_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pessoas_portarias`
--
ALTER TABLE `pessoas_portarias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portarias`
--
ALTER TABLE `portarias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Limitadores para a tabela `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
