-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2019 年 2 月 07 日 22:16
-- サーバのバージョン： 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bookm`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_table`
--

INSERT INTO `gs_bm_table` (`id`, `name`, `url`, `comment`, `datetime`) VALUES
(1, 'チーズはどこへ消えた', 'http:www.hhhhh/', 'よかった!!!', '2019-01-19 20:07:19'),
(2, '７つの資質', 'http:www.hhhhh/', '懐かしい', '2019-01-19 20:12:37'),
(3, 'テスト書籍', 'http:www.hhhhh/', 'コメントは何だろうか', '2019-01-19 20:16:15'),
(4, '夢をかなえるゾウ ', 'https://www.amazon.co.jp/%', 'よかった', '2019-01-19 20:16:59'),
(5, '課題テスト', 'http://localhost/07_23_namaihisataka/index.php', '課題です。', '2019-01-24 23:17:12');

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_bm_user_table`
--

CREATE TABLE IF NOT EXISTS `gs_bm_user_table` (
`id` int(12) NOT NULL,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `lid` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `lpw` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kanri_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_bm_user_table`
--

INSERT INTO `gs_bm_user_table` (`id`, `name`, `lid`, `lpw`, `kanri_flg`, `life_flg`) VALUES
(1, '管理者', 'test1', '$2y$10$J.22y5QmseHnbspAWI8n4e0ykEjptE4vT2YvtwfLzRd74DD62Clhq', 1, 0),
(2, '管理２', 'test2', '$2y$10$3PSauiPOqWQmNHHm6tMi1uoDB/VDTeV3ajDGJwSR430WIdgp4kA3.', 0, 0),
(4, '一般ユーザー', 'test3', 'test3', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gs_bm_user_table`
--
ALTER TABLE `gs_bm_user_table`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gs_bm_table`
--
ALTER TABLE `gs_bm_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `gs_bm_user_table`
--
ALTER TABLE `gs_bm_user_table`
MODIFY `id` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
