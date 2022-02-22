-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-12-11 13:53:42
-- 伺服器版本： 10.1.38-MariaDB
-- PHP 版本： 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `final`
--

-- --------------------------------------------------------

--
-- 資料表結構 `accounts`
--

CREATE TABLE `accounts` (
  `FirstName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Nickname` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `TWD` decimal(10,5) NOT NULL,
  `USD` decimal(10,5) NOT NULL,
  `HKD` decimal(10,5) NOT NULL,
  `GBP` decimal(10,5) NOT NULL,
  `AUD` decimal(10,5) NOT NULL,
  `CAD` decimal(10,5) NOT NULL,
  `SGD` decimal(10,5) NOT NULL,
  `CHF` decimal(10,5) NOT NULL,
  `JPY` decimal(10,5) NOT NULL,
  `ZAR` decimal(10,5) NOT NULL,
  `SEK` decimal(10,5) NOT NULL,
  `NZD` decimal(10,5) NOT NULL,
  `THB` decimal(10,5) NOT NULL,
  `PHP` decimal(10,5) NOT NULL,
  `IDR` decimal(10,5) NOT NULL,
  `EUR` decimal(10,5) NOT NULL,
  `KRW` decimal(10,5) NOT NULL,
  `VND` decimal(10,5) NOT NULL,
  `MYR` decimal(10,5) NOT NULL,
  `CNY` decimal(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `accounts`
--

INSERT INTO `accounts` (`FirstName`, `LastName`, `Nickname`, `Email`, `Password`, `TWD`, `USD`, `HKD`, `GBP`, `AUD`, `CAD`, `SGD`, `CHF`, `JPY`, `ZAR`, `SEK`, `NZD`, `THB`, `PHP`, `IDR`, `EUR`, `KRW`, `VND`, `MYR`, `CNY`) VALUES
('test', 'test', 'test', 'test@gmail.com', 'test', '100.00000', '100.00000', '100.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000'),
('test2', 'test2', 'test2', 'test2@gmail.com', 'test2', '100.00000', '0.00000', '0.00000', '50.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000', '0.00000');

-- --------------------------------------------------------

--
-- 資料表結構 `exchange_rate_buy`
--

CREATE TABLE `exchange_rate_buy` (
  `USD` decimal(10,5) NOT NULL,
  `HKD` decimal(10,5) NOT NULL,
  `GBP` decimal(10,5) NOT NULL,
  `AUD` decimal(10,5) NOT NULL,
  `CAD` decimal(10,5) NOT NULL,
  `SGD` decimal(10,5) NOT NULL,
  `CHF` decimal(10,5) NOT NULL,
  `JPY` decimal(10,5) NOT NULL,
  `ZAR` decimal(10,5) NOT NULL,
  `SEK` decimal(10,5) NOT NULL,
  `NZD` decimal(10,5) NOT NULL,
  `THB` decimal(10,5) NOT NULL,
  `PHP` decimal(10,5) NOT NULL,
  `IDR` decimal(10,5) NOT NULL,
  `EUR` decimal(10,5) NOT NULL,
  `KRW` decimal(10,5) NOT NULL,
  `VND` decimal(10,5) NOT NULL,
  `MYR` decimal(10,5) NOT NULL,
  `CNY` decimal(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `exchange_rate_buy`
--

INSERT INTO `exchange_rate_buy` (`USD`, `HKD`, `GBP`, `AUD`, `CAD`, `SGD`, `CHF`, `JPY`, `ZAR`, `SEK`, `NZD`, `THB`, `PHP`, `IDR`, `EUR`, `KRW`, `VND`, `MYR`, `CNY`) VALUES
('27.66500', '3.52200', '36.52500', '19.72500', '21.65000', '20.23000', '29.92000', '0.24230', '1.69200', '3.01000', '18.72000', '0.80680', '0.00000', '0.00000', '31.09500', '0.00000', '0.00000', '0.00000', '4.32200');

-- --------------------------------------------------------

--
-- 資料表結構 `exchange_rate_sell`
--

CREATE TABLE `exchange_rate_sell` (
  `USD` decimal(10,5) NOT NULL,
  `HKD` decimal(10,5) NOT NULL,
  `GBP` decimal(10,5) NOT NULL,
  `AUD` decimal(10,5) NOT NULL,
  `CAD` decimal(10,5) NOT NULL,
  `SGD` decimal(10,5) NOT NULL,
  `CHF` decimal(10,5) NOT NULL,
  `JPY` decimal(10,5) NOT NULL,
  `ZAR` decimal(10,5) NOT NULL,
  `SEK` decimal(10,5) NOT NULL,
  `NZD` decimal(10,5) NOT NULL,
  `THB` decimal(10,5) NOT NULL,
  `PHP` decimal(10,5) NOT NULL,
  `IDR` decimal(10,5) NOT NULL,
  `EUR` decimal(10,5) NOT NULL,
  `KRW` decimal(10,5) NOT NULL,
  `VND` decimal(10,5) NOT NULL,
  `MYR` decimal(10,5) NOT NULL,
  `CNY` decimal(10,5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `exchange_rate_sell`
--

INSERT INTO `exchange_rate_sell` (`USD`, `HKD`, `GBP`, `AUD`, `CAD`, `SGD`, `CHF`, `JPY`, `ZAR`, `SEK`, `NZD`, `THB`, `PHP`, `IDR`, `EUR`, `KRW`, `VND`, `MYR`, `CNY`) VALUES
('27.81500', '3.59200', '37.15500', '20.07000', '21.98000', '20.45000', '30.31000', '0.24730', '1.78200', '3.13000', '19.02000', '0.85280', '0.00000', '0.00000', '31.69500', '0.00000', '0.00000', '0.00000', '4.38200');

-- --------------------------------------------------------

--
-- 資料表結構 `record`
--

CREATE TABLE `record` (
  `Email` varchar(50) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Event` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `record`
--

INSERT INTO `record` (`Email`, `Time`, `Event`) VALUES
('test@gmail.com', '2021-12-11 05:38:23', '註冊'),
('test2@gmail.com', '2021-12-11 05:40:16', '註冊'),
('test@gmail.com', '2021-12-11 05:42:50', '登入'),
('test@gmail.com', '2021-12-11 05:53:40', '存入 100 TWD'),
('test@gmail.com', '2021-12-11 05:53:57', '轉出 test2@gmail.com 100 TWD'),
('test2@gmail.com', '2021-12-11 05:53:57', 'test@gmail.com 轉入 100 TWD'),
('test@gmail.com', '2021-12-11 07:55:19', '存入 100 TWD'),
('test@gmail.com', '2021-12-11 07:55:39', '100 TWD 換成 3.59518 USD'),
('test@gmail.com', '2021-12-11 07:55:55', '3.59518 USD 換成 99.46065 TWD'),
('test@gmail.com', '2021-12-11 08:02:47', '提領 99.46065 TWD'),
('test@gmail.com', '2021-12-11 08:02:52', '存入 100 USD'),
('test@gmail.com', '2021-12-11 08:11:33', '登出'),
('test@gmail.com', '2021-12-11 08:13:23', '登入'),
('test@gmail.com', '2021-12-11 08:13:54', '存入 100 TWD'),
('test@gmail.com', '2021-12-11 08:13:58', '存入 100 HKD'),
('test@gmail.com', '2021-12-11 12:44:13', '存入 100 GBP'),
('test@gmail.com', '2021-12-11 12:44:35', '轉出 test2@gmail.com 50 GBP'),
('test2@gmail.com', '2021-12-11 12:44:35', 'test@gmail.com 轉入 50 GBP'),
('test@gmail.com', '2021-12-11 12:52:25', '提領 50 GBP');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
