-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-11-24 20:37:16
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `invoice`
--

-- --------------------------------------------------------

--
-- 資料表結構 `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '發票編號',
  `member_id` int(11) UNSIGNED NOT NULL COMMENT '會員編號',
  `date` date NOT NULL COMMENT '日期',
  `sort` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '類別',
  `amount` int(8) UNSIGNED NOT NULL COMMENT '金額',
  `note` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '備註',
  `heading` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '發票號碼前2碼',
  `number` int(8) UNSIGNED NOT NULL COMMENT '發票號碼後8碼'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `member_login`
--

CREATE TABLE `member_login` (
  `member_id` int(11) UNSIGNED NOT NULL COMMENT '會員編號',
  `acc` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `pass` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `email` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '電子信箱',
  `name` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '用戶者名稱',
  `gender` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '性別'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `member_login`
--

INSERT INTO `member_login` (`member_id`, `acc`, `pass`, `email`, `name`, `gender`) VALUES
(1, 'fantasy', 'fantasy', 'fantasy@gmail.com', '克勞德', '先生'),
(2, 'fantasy_2', 'fantasy_2', 'fantasy@gmail.com', '蒂法', '女士'),
(3, 'fantasy_3', 'fantasy_3', 'fantasy@gmail.com', '艾莉絲', '女士');

-- --------------------------------------------------------

--
-- 資料表結構 `winning_numbers`
--

CREATE TABLE `winning_numbers` (
  `id` int(11) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL COMMENT '年份',
  `period` int(11) NOT NULL COMMENT '期數',
  `category` int(11) NOT NULL COMMENT '獎別',
  `number` int(8) NOT NULL COMMENT '號碼'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `member_login`
--
ALTER TABLE `member_login`
  ADD PRIMARY KEY (`member_id`);

--
-- 資料表索引 `winning_numbers`
--
ALTER TABLE `winning_numbers`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '發票編號';

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member_login`
--
ALTER TABLE `member_login`
  MODIFY `member_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '會員編號', AUTO_INCREMENT=4;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `winning_numbers`
--
ALTER TABLE `winning_numbers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
