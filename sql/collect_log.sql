-- phpMyAdmin SQL Dump
-- version 4.4.7
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2015-07-29 14:33:37
-- 伺服器版本: 5.6.20
-- PHP 版本： 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `collect_log`
--

-- --------------------------------------------------------

--
-- 資料表結構 `bot_simulate`
--

CREATE TABLE IF NOT EXISTS `bot_simulate` (
  `Number` mediumtext COLLATE utf8_unicode_ci,
  `Date Time` datetime DEFAULT NULL,
  `Interface` mediumtext COLLATE utf8_unicode_ci,
  `Origin` mediumtext COLLATE utf8_unicode_ci,
  `Action` mediumtext COLLATE utf8_unicode_ci,
  `Service` mediumtext COLLATE utf8_unicode_ci,
  `Source` mediumtext COLLATE utf8_unicode_ci,
  `Destination` mediumtext COLLATE utf8_unicode_ci,
  `Information` mediumtext COLLATE utf8_unicode_ci,
  `Packets` mediumtext COLLATE utf8_unicode_ci,
  `UA Session Id` mediumtext COLLATE utf8_unicode_ci,
  `URL` mediumtext COLLATE utf8_unicode_ci,
  `Protection Name` mediumtext COLLATE utf8_unicode_ci,
  `Severity` mediumtext COLLATE utf8_unicode_ci,
  `Confidence Level` mediumtext COLLATE utf8_unicode_ci,
  `Packet Capture` mediumtext COLLATE utf8_unicode_ci,
  `Packet Tagging Key` mediumtext COLLATE utf8_unicode_ci,
  `Payload` mediumtext COLLATE utf8_unicode_ci,
  `Suppressed Logs` mediumtext COLLATE utf8_unicode_ci,
  `Sent Bytes` mediumtext COLLATE utf8_unicode_ci,
  `Received Bytes` mediumtext COLLATE utf8_unicode_ci,
  `Packet Capture Time` mediumtext COLLATE utf8_unicode_ci,
  `Protection Type` mediumtext COLLATE utf8_unicode_ci,
  `Malware Family` mediumtext COLLATE utf8_unicode_ci,
  `Malware Activity` mediumtext COLLATE utf8_unicode_ci,
  `Packet Capture ID` mediumtext COLLATE utf8_unicode_ci,
  `Packet Capture Name` mediumtext COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `paloalto_datafiltering_simulate`
--

CREATE TABLE IF NOT EXISTS `paloalto_datafiltering_simulate` (
  `Domain` mediumtext COLLATE utf8_unicode_ci,
  `Receive Time` datetime DEFAULT NULL,
  `Serial #` mediumtext COLLATE utf8_unicode_ci,
  `Type` mediumtext COLLATE utf8_unicode_ci,
  `Threat/Content Type` mediumtext COLLATE utf8_unicode_ci,
  `Config Version` mediumtext COLLATE utf8_unicode_ci,
  `Generate Time` mediumtext COLLATE utf8_unicode_ci,
  `Source address` mediumtext COLLATE utf8_unicode_ci,
  `Destination address` mediumtext COLLATE utf8_unicode_ci,
  `NAT Source IP` mediumtext COLLATE utf8_unicode_ci,
  `NAT Destination IP` mediumtext COLLATE utf8_unicode_ci,
  `Rule` mediumtext COLLATE utf8_unicode_ci,
  `Source User` mediumtext COLLATE utf8_unicode_ci,
  `Destination User` mediumtext COLLATE utf8_unicode_ci,
  `Application` mediumtext COLLATE utf8_unicode_ci,
  `Virtual System` mediumtext COLLATE utf8_unicode_ci,
  `Source Zone` mediumtext COLLATE utf8_unicode_ci,
  `Destination Zone` mediumtext COLLATE utf8_unicode_ci,
  `Inbound Interface` mediumtext COLLATE utf8_unicode_ci,
  `Outbound Interface` mediumtext COLLATE utf8_unicode_ci,
  `Log Action` mediumtext COLLATE utf8_unicode_ci,
  `Time Logged` mediumtext COLLATE utf8_unicode_ci,
  `Session ID` mediumtext COLLATE utf8_unicode_ci,
  `Repeat Count` mediumtext COLLATE utf8_unicode_ci,
  `Source Port` mediumtext COLLATE utf8_unicode_ci,
  `Destination Port` mediumtext COLLATE utf8_unicode_ci,
  `NAT Source Port` mediumtext COLLATE utf8_unicode_ci,
  `NAT Destination Port` mediumtext COLLATE utf8_unicode_ci,
  `Flags` mediumtext COLLATE utf8_unicode_ci,
  `IP Protocol` mediumtext COLLATE utf8_unicode_ci,
  `Action` mediumtext COLLATE utf8_unicode_ci,
  `URL` mediumtext COLLATE utf8_unicode_ci,
  `Threat/Content Name` mediumtext COLLATE utf8_unicode_ci,
  `Category` mediumtext COLLATE utf8_unicode_ci,
  `Severity` mediumtext COLLATE utf8_unicode_ci,
  `Direction` mediumtext COLLATE utf8_unicode_ci,
  `seqno` mediumtext COLLATE utf8_unicode_ci,
  `actionflags` mediumtext COLLATE utf8_unicode_ci,
  `Source Country` mediumtext COLLATE utf8_unicode_ci,
  `Destination Country` mediumtext COLLATE utf8_unicode_ci,
  `cpadding` mediumtext COLLATE utf8_unicode_ci,
  `contenttype` mediumtext COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `paloalto_intrusion_simulate`
--

CREATE TABLE IF NOT EXISTS `paloalto_intrusion_simulate` (
  `Domain` mediumtext COLLATE utf8_unicode_ci,
  `Receive Time` datetime DEFAULT NULL,
  `Serial #` mediumtext COLLATE utf8_unicode_ci,
  `Type` mediumtext COLLATE utf8_unicode_ci,
  `Threat/Content Type` mediumtext COLLATE utf8_unicode_ci,
  `Config Version` mediumtext COLLATE utf8_unicode_ci,
  `Generate Time` mediumtext COLLATE utf8_unicode_ci,
  `Source address` mediumtext COLLATE utf8_unicode_ci,
  `Destination address` mediumtext COLLATE utf8_unicode_ci,
  `NAT Source IP` mediumtext COLLATE utf8_unicode_ci,
  `NAT Destination IP` mediumtext COLLATE utf8_unicode_ci,
  `Rule` mediumtext COLLATE utf8_unicode_ci,
  `Source User` mediumtext COLLATE utf8_unicode_ci,
  `Destination User` mediumtext COLLATE utf8_unicode_ci,
  `Application` mediumtext COLLATE utf8_unicode_ci,
  `Virtual System` mediumtext COLLATE utf8_unicode_ci,
  `Source Zone` mediumtext COLLATE utf8_unicode_ci,
  `Destination Zone` mediumtext COLLATE utf8_unicode_ci,
  `Inbound Interface` mediumtext COLLATE utf8_unicode_ci,
  `Outbound Interface` mediumtext COLLATE utf8_unicode_ci,
  `Log Action` mediumtext COLLATE utf8_unicode_ci,
  `Time Logged` mediumtext COLLATE utf8_unicode_ci,
  `Session ID` mediumtext COLLATE utf8_unicode_ci,
  `Repeat Count` mediumtext COLLATE utf8_unicode_ci,
  `Source Port` mediumtext COLLATE utf8_unicode_ci,
  `Destination Port` mediumtext COLLATE utf8_unicode_ci,
  `NAT Source Port` mediumtext COLLATE utf8_unicode_ci,
  `NAT Destination Port` mediumtext COLLATE utf8_unicode_ci,
  `Flags` mediumtext COLLATE utf8_unicode_ci,
  `IP Protocol` mediumtext COLLATE utf8_unicode_ci,
  `Action` mediumtext COLLATE utf8_unicode_ci,
  `URL` mediumtext COLLATE utf8_unicode_ci,
  `Threat/Content Name` mediumtext COLLATE utf8_unicode_ci,
  `Category` mediumtext COLLATE utf8_unicode_ci,
  `Severity` mediumtext COLLATE utf8_unicode_ci,
  `Direction` mediumtext COLLATE utf8_unicode_ci,
  `seqno` mediumtext COLLATE utf8_unicode_ci,
  `actionflags` mediumtext COLLATE utf8_unicode_ci,
  `Source Country` mediumtext COLLATE utf8_unicode_ci,
  `Destination Country` mediumtext COLLATE utf8_unicode_ci,
  `cpadding` mediumtext COLLATE utf8_unicode_ci,
  `contenttype` mediumtext COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `paloalto_simulate`
--

CREATE TABLE IF NOT EXISTS `paloalto_simulate` (
  `Domain` mediumtext COLLATE utf8_unicode_ci,
  `Receive Time` datetime DEFAULT NULL,
  `Serial #` mediumtext COLLATE utf8_unicode_ci,
  `Type` mediumtext COLLATE utf8_unicode_ci,
  `Threat/Content Type` mediumtext COLLATE utf8_unicode_ci,
  `Config Version` mediumtext COLLATE utf8_unicode_ci,
  `Generate Time` mediumtext COLLATE utf8_unicode_ci,
  `Source address` mediumtext COLLATE utf8_unicode_ci,
  `Destination address` mediumtext COLLATE utf8_unicode_ci,
  `NAT Source IP` mediumtext COLLATE utf8_unicode_ci,
  `NAT Destination IP` mediumtext COLLATE utf8_unicode_ci,
  `Rule` mediumtext COLLATE utf8_unicode_ci,
  `Source User` mediumtext COLLATE utf8_unicode_ci,
  `Destination User` mediumtext COLLATE utf8_unicode_ci,
  `Application` mediumtext COLLATE utf8_unicode_ci,
  `Virtual System` mediumtext COLLATE utf8_unicode_ci,
  `Source Zone` mediumtext COLLATE utf8_unicode_ci,
  `Destination Zone` mediumtext COLLATE utf8_unicode_ci,
  `Inbound Interface` mediumtext COLLATE utf8_unicode_ci,
  `Outbound Interface` mediumtext COLLATE utf8_unicode_ci,
  `Log Action` mediumtext COLLATE utf8_unicode_ci,
  `Time Logged` mediumtext COLLATE utf8_unicode_ci,
  `Session ID` mediumtext COLLATE utf8_unicode_ci,
  `Repeat Count` mediumtext COLLATE utf8_unicode_ci,
  `Source Port` mediumtext COLLATE utf8_unicode_ci,
  `Destination Port` mediumtext COLLATE utf8_unicode_ci,
  `NAT Source Port` mediumtext COLLATE utf8_unicode_ci,
  `NAT Destination Port` mediumtext COLLATE utf8_unicode_ci,
  `Flags` mediumtext COLLATE utf8_unicode_ci,
  `IP Protocol` mediumtext COLLATE utf8_unicode_ci,
  `Action` mediumtext COLLATE utf8_unicode_ci,
  `URL` mediumtext COLLATE utf8_unicode_ci,
  `Threat/Content Name` mediumtext COLLATE utf8_unicode_ci,
  `Category` mediumtext COLLATE utf8_unicode_ci,
  `Severity` mediumtext COLLATE utf8_unicode_ci,
  `Direction` mediumtext COLLATE utf8_unicode_ci,
  `seqno` mediumtext COLLATE utf8_unicode_ci,
  `actionflags` mediumtext COLLATE utf8_unicode_ci,
  `Source Country` mediumtext COLLATE utf8_unicode_ci,
  `Destination Country` mediumtext COLLATE utf8_unicode_ci,
  `cpadding` mediumtext COLLATE utf8_unicode_ci,
  `contenttype` mediumtext COLLATE utf8_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `result`
--

CREATE TABLE IF NOT EXISTS `result` (
  `SuspiciousIP` text COLLATE utf8_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `bot_simulate`
--
ALTER TABLE `bot_simulate`
  ADD KEY `Date Time` (`Date Time`) USING BTREE,
  ADD KEY `Source` (`Source`(16)) USING BTREE,
  ADD KEY `Destination` (`Destination`(16)) USING BTREE;

--
-- 資料表索引 `paloalto_datafiltering_simulate`
--
ALTER TABLE `paloalto_datafiltering_simulate`
  ADD KEY `Receive Time` (`Receive Time`) USING BTREE,
  ADD KEY `Source address` (`Source address`(16)) USING BTREE;

--
-- 資料表索引 `paloalto_intrusion_simulate`
--
ALTER TABLE `paloalto_intrusion_simulate`
  ADD KEY `Receive Time` (`Receive Time`) USING BTREE,
  ADD KEY `Destination address` (`Destination address`(16)) USING BTREE;

--
-- 資料表索引 `paloalto_simulate`
--
ALTER TABLE `paloalto_simulate`
  ADD KEY `Receive Time` (`Receive Time`) USING BTREE,
  ADD KEY `Source address` (`Source address`(16)) USING BTREE,
  ADD KEY `Destination address` (`Destination address`(16)) USING BTREE;

--
-- 資料表索引 `result`
--
ALTER TABLE `result`
  ADD KEY `SuspiciousIP` (`SuspiciousIP`(16)) USING BTREE,
  ADD KEY `description` (`description`(99)) USING BTREE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
