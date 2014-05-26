-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2004 年 05 月 26 日 02:45
-- 服务器版本: 5.0.90
-- PHP 版本: 5.2.14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `2014_gcc`
--

-- --------------------------------------------------------

--
-- 表的结构 `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(1) NOT NULL,
  `style` varchar(20) NOT NULL default 'default',
  `website_title` varchar(20) NOT NULL,
  `website_footer` varchar(200) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `game_ips`
--

CREATE TABLE IF NOT EXISTS `game_ips` (
  `id` int(5) NOT NULL auto_increment,
  `ip` int(9) NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- 表的结构 `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(5) NOT NULL auto_increment,
  `name` varchar(20) NOT NULL,
  `read_rank` int(2) NOT NULL default '0',
  `post_rank` int(2) NOT NULL default '0',
  `display_rank` int(2) NOT NULL default '0',
  `user_id` int(5) NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

-- --------------------------------------------------------

--
-- 表的结构 `index_ips`
--

CREATE TABLE IF NOT EXISTS `index_ips` (
  `id` int(5) NOT NULL auto_increment,
  `ip` int(9) NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=734 ;

-- --------------------------------------------------------

--
-- 表的结构 `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `id` int(5) NOT NULL auto_increment,
  `tid` int(5) NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `text` text NOT NULL,
  `uid` int(5) NOT NULL,
  `ip` int(9) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- 表的结构 `tops`
--

CREATE TABLE IF NOT EXISTS `tops` (
  `id` int(5) NOT NULL auto_increment,
  `display` int(1) NOT NULL default '1',
  `gid` int(5) NOT NULL,
  `title` varchar(200) NOT NULL,
  `view` int(11) NOT NULL default '1',
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  `ip` int(9) NOT NULL,
  `uid` int(5) NOT NULL,
  `text` text NOT NULL,
  `top` int(2) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL auto_increment,
  `admin` int(1) NOT NULL default '0',
  `rank` int(2) NOT NULL default '0',
  `regip` int(9) NOT NULL,
  `name` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `time` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;
