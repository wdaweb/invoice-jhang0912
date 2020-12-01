-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-12-01 21:05:22
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
-- 資料表結構 `award_numbers`
--

CREATE TABLE `award_numbers` (
  `id` int(11) UNSIGNED NOT NULL,
  `year` year(4) NOT NULL COMMENT '年份',
  `period` int(11) NOT NULL COMMENT '期數',
  `category` int(11) NOT NULL COMMENT '獎別',
  `number` int(8) NOT NULL COMMENT '號碼'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `award_numbers`
--

INSERT INTO `award_numbers` (`id`, `year`, `period`, `category`, `number`) VALUES
(16, 2020, 4, 1, 13362795),
(17, 2020, 4, 2, 27580166),
(18, 2020, 4, 3, 53227282),
(19, 2020, 4, 3, 35082085),
(20, 2020, 4, 3, 37175928),
(21, 2020, 4, 4, 987),
(22, 2020, 4, 4, 614),
(23, 2020, 4, 4, 582),
(40, 2020, 5, 1, 42024723),
(41, 2020, 5, 2, 64157858),
(42, 2020, 5, 3, 68550826),
(43, 2020, 5, 3, 84643124),
(44, 2020, 5, 3, 46665810),
(45, 2020, 5, 4, 651),
(46, 2020, 5, 4, 341);

-- --------------------------------------------------------

--
-- 資料表結構 `invoice`
--

CREATE TABLE `invoice` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '發票編號',
  `member_id` int(11) UNSIGNED NOT NULL COMMENT '會員編號',
  `date` date NOT NULL COMMENT '日期',
  `period` int(11) UNSIGNED NOT NULL COMMENT '期數',
  `heading` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '發票號碼前2碼',
  `number` int(8) UNSIGNED NOT NULL COMMENT '發票號碼後8碼',
  `amount` int(11) UNSIGNED NOT NULL COMMENT '金額',
  `sort` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '類別',
  `note` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '備註'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `invoice`
--

INSERT INTO `invoice` (`id`, `member_id`, `date`, `period`, `heading`, `number`, `amount`, `sort`, `note`) VALUES
(2, 1, '2020-10-26', 5, 'EY', 58482651, 30, '食品酒水', '蔥鹽燒肉飯糰*1=NT30'),
(3, 1, '2020-10-13', 5, 'EY', 11740166, 40, '食品酒水', '比菲多原味瓶*1=NT40'),
(4, 1, '2020-10-31', 5, 'EY', 58450826, 35, '食品酒水', '老虎牙子*1=NT35'),
(9, 1, '2020-09-28', 5, 'FE', 63054377, 100, '行車交通', '九五無鉛汽油*4.21=NT100'),
(10, 1, '2020-11-22', 6, 'GQ', 11722488, 35, '食品酒水', '蠻牛能量飲料EX-CAN250*1=NT35'),
(11, 1, '2020-01-21', 1, 'GQ', 11721892, 25, '食品酒水', '御茶園特上紅茶*1=NT25'),
(12, 1, '2020-03-20', 2, 'HS', 61943669, 105, '食品酒水', '莓好時光*1=NT105'),
(13, 1, '2020-09-03', 5, 'EY', 32370629, 10, '食品酒水', '統一麥香奶茶*1=NT10'),
(14, 1, '2020-11-19', 6, 'HA', 79394301, 17, '食品酒水', '維他露P飲料*2=NT17'),
(15, 1, '2020-11-18', 6, 'GQ', 11720103, 45, '食品酒水', '大乾麵紅油擔擔風味*1=NT35\r\n統一麥香紅茶*1=NT10'),
(17, 1, '2020-10-20', 5, 'FE', 96284459, 499, '休閒娛樂', 'PC-GAME*1=NT499'),
(18, 1, '2020-09-18', 5, 'EY', 77658213, 150, '醫療保健', '掛號看診*1=NT150'),
(19, 1, '2020-09-14', 5, 'HX', 74468519, 799, '居家物業', '服飾衣裝*1=NT799'),
(20, 1, '2020-10-17', 5, 'HA', 91556482, 1000, '交流通訊', '電信帳單*1=NT1000'),
(21, 1, '2020-02-12', 1, 'FE', 88469223, 100, '行車交通', '九五無鉛汽油*4.21=NT100'),
(22, 1, '2020-09-22', 5, 'TA', 42024723, 999, '人情往來', '禮品*1=NT999'),
(23, 1, '2020-10-27', 5, 'YZ', 64157858, 175, '食品酒水', '麥當勞大麥克套餐*1=NT175'),
(24, 1, '2020-10-17', 5, 'JA', 84643124, 100, '居家物業', '生活用品*1=NT100'),
(25, 1, '2020-10-08', 5, 'HX', 46851341, 100, '居家物業', '文具用品*1=NT100');

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
(1, 'fantasy', 'fantasy', 'fantasy@gmail.com', '克勞德', '男士'),
(2, 'fantasy_2', 'fantasy', 'fantasy@gmail.com', '蒂法', '女士'),
(3, 'fantasy_3', 'fantasy', 'fantasy@gmail.com', '艾莉絲', '女士'),
(4, 'fantasy_4', 'fantasy', 'fantasy@gmail.com', '賽菲羅斯', '男士');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `award_numbers`
--
ALTER TABLE `award_numbers`
  ADD PRIMARY KEY (`id`);

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
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `award_numbers`
--
ALTER TABLE `award_numbers`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '發票編號', AUTO_INCREMENT=26;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `member_login`
--
ALTER TABLE `member_login`
  MODIFY `member_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '會員編號', AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
