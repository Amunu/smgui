-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2014 年 06 月 18 日 20:21
-- 服务器版本: 5.5.32
-- PHP 版本: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `think_mydemo`
--
CREATE DATABASE IF NOT EXISTS `think_mydemo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `think_mydemo`;

-- --------------------------------------------------------

--
-- 表的结构 `think_chat`
--

CREATE TABLE IF NOT EXISTS `think_chat` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `content` text NOT NULL,
  `create_time` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `think_chat`
--

INSERT INTO `think_chat` (`id`, `username`, `content`, `create_time`) VALUES
(10, 'linea', '中间件（MiddleWare）和应用程序（Application）。根据Android的软件框图，其软件层次结构自下而上分为以下几个层次：\r\n操作系统层（OS \r\n各种库（Libraries）和Android 运行环境（RunTime） \r\n应用程序框架（ApplicationFramework） \r\n应用程序', 1403110447),
(7, 'linea', '小伙伴们都被删光了！！！(ノД`)・゜・。', 1403109683),
(9, 'linea', 'Android系统承袭了Linux开源操作系统的安全特性，并采用了层次化的方式来保证系统安全，本文将详细介绍Android层次化安全架构及其核心组件。 \r\nAndroid层次化安全架构\r\n', 1403110405),
(11, 'XadillaX', '<script>\r\nalert("sb");\r\n</script>', 1403115476);

-- --------------------------------------------------------

--
-- 表的结构 `think_user`
--

CREATE TABLE IF NOT EXISTS `think_user` (
  `id` int(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=41 ;

--
-- 转存表中的数据 `think_user`
--

INSERT INTO `think_user` (`id`, `username`, `password`) VALUES
(39, 'root', '78f9dbe2eb3a8c8a1433a934bf3e7046'),
(38, 'admin', '0192023a7bbd73250516f069df18b500'),
(37, '123', '202cb962ac59075b964b07152d234b70'),
(36, '111', 'c4ca4238a0b923820dcc509a6f75849b'),
(35, 'linea', '78f9dbe2eb3a8c8a1433a934bf3e7046'),
(40, 'XadillaX', '045f382f08038084d9ef8d74a8402363');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
