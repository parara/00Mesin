-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 07 Jul 2014 pada 09.25
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mesin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `kodebarang` char(3) DEFAULT NULL,
  `namabarang` varchar(25) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `satuan` varchar(7) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`kodebarang`, `namabarang`, `stok`, `harga`, `satuan`) VALUES
('K01', 'Komputer Destop Hebat Ten', 12, 5000000, 'buah'),
('K02', 'Monitor', 11, 2000000, 'buah'),
('K03', 'Keyboard', 6, 200000, 'buah'),
('K04', 'Speaker', 3, 350000, 'buah'),
('K05', 'leptop tosiba', 5, 6000000, 'buah'),
('K06', 'Meja Komputer', 4, 400000, 'Buah');

-- --------------------------------------------------------

--
-- Struktur dari tabel `bmarks`
--

CREATE TABLE IF NOT EXISTS `bmarks` (
  `bid` tinyint(4) NOT NULL,
  `uid` tinyint(4) NOT NULL,
  `url` varchar(50) NOT NULL,
  `desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bmarks`
--

INSERT INTO `bmarks` (`bid`, `uid`, `url`, `desc`) VALUES
(1, 1, 'http://www.common.com/phpworks', 'common php work'),
(2, 1, 'http://www.common.com/phpfunctions', 'about php'),
(3, 2, 'http://www.personal.com/home', 'my personal page'),
(4, 2, 'http://www.common.com/phpworks', 'php works'),
(5, 2, 'http://www.common.com/phpfunctions', 'about php functions'),
(6, 4, 'http://www.common.com/phpworks', 'about php works'),
(7, 4, 'http://www.common.com/phpfunctions', 'about php functions'),
(8, 4, 'http://www.personal.com/activities', 'my personal site'),
(2, 1, 'http://www.common.com/phpfunctions', 'about php'),
(3, 2, 'http://www.personal.com/home', 'my personal page'),
(4, 2, 'http://www.common.com/phpworks', 'php works'),
(5, 2, 'http://www.common.com/phpfunctions', 'about php functions'),
(6, 4, 'http://www.common.com/phpworks', 'about php works'),
(7, 4, 'http://www.common.com/phpfunctions', 'about php functions'),
(8, 4, 'http://www.personal.com/activities', 'my personal site');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Customer`
--

CREATE TABLE IF NOT EXISTS `Customer` (
  `user_name` varchar(20) NOT NULL,
  `create_date` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `first_name` varchar(40) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `drivers`
--

CREATE TABLE IF NOT EXISTS `drivers` (
  `licensenum` varchar(10) DEFAULT NULL,
  `lastname` varchar(10) DEFAULT NULL,
  `firstname` varchar(10) DEFAULT NULL,
  `location` varchar(15) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `drivers`
--

INSERT INTO `drivers` (`licensenum`, `lastname`, `firstname`, `location`, `class`) VALUES
('13232', 'Baker', 'Roland', 'New York', 'Car'),
('18431', 'Smythe', 'Michael', 'Miami', 'Truck'),
('41948', 'Jacobs', 'Abraham', 'Seattle', 'Car'),
('81231', 'Ryan', 'Jack', 'Annapolis', 'Car');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `username` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `firstname` varchar(20) DEFAULT NULL,
  `lastname` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `desk` varchar(50) DEFAULT NULL,
  `web` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`username`, `password`, `firstname`, `lastname`, `email`, `desk`, `web`) VALUES
('estu', 'pengguna', 'Dadang', 'Sudarman', 'humas@jogja.linux.or.id', 'http://jgos.or.id', NULL),
('makan', 'makan', NULL, NULL, NULL, NULL, NULL),
('sapi', 'sapi', 'syah', 'dwi', 'andro.medh4@gmail.com', 'paijo', 'http://dotslah.com'),
('ijal', 'ijal', NULL, NULL, NULL, NULL, NULL),
('maling', 'maling', NULL, NULL, NULL, NULL, NULL),
('pagi', 'pagi', 'dadang', 'fardani', 'andro.medh4@gmail.com', 'suka makan', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `Persons`
--

CREATE TABLE IF NOT EXISTS `Persons` (
  `PID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` char(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `LastName` char(30) CHARACTER SET utf8mb4 DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  PRIMARY KEY (`PID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `Persons`
--

INSERT INTO `Persons` (`PID`, `FirstName`, `LastName`, `Age`) VALUES
(3, 'paijo', 'arab', 21),
(4, 'adam', 'buos', 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` tinyint(4) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) NOT NULL,
  `upass` varchar(32) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `level` varchar(6) NOT NULL,
  `bgc` varchar(15) NOT NULL,
  `img` char(50) NOT NULL,
  PRIMARY KEY (`uid`),
  KEY `log` (`uid`,`uname`,`upass`,`email`,`level`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`uid`, `uname`, `upass`, `email`, `level`, `bgc`, `img`) VALUES
(1, 'lnam', '1a1dc91c907325c69271ddf0c944bc72', 'lnam@lnam.com', 'admin', 'red', 'user.gif'),
(2, 'jane', '5844a15e76563fedd11840fd6f40ea7b', 'jane@web.com', 'normal', 'green', 'user.gif'),
(4, '#goms', ' 9b8d9480d8c452f5287bcba7101ae92', '#goms@web.com', 'admin', 'blue', 'user.gif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `Valid_User`
--

CREATE TABLE IF NOT EXISTS `Valid_User` (
  `user_name` varchar(10) NOT NULL,
  `password` varchar(40) NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`user_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `Valid_User`
--

INSERT INTO `Valid_User` (`user_name`, `password`, `create_date`) VALUES
('estu', 'e1899d2b87b7d2e2398535d4fe444d23', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vehicles`
--

CREATE TABLE IF NOT EXISTS `vehicles` (
  `tag` varchar(10) DEFAULT NULL,
  `location` varchar(15) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `vehicles`
--

INSERT INTO `vehicles` (`tag`, `location`, `class`) VALUES
('D824HA', 'Miami', 'Truck'),
('H122JM', 'New York', 'Car'),
('J291QR', 'Seattle', 'Car'),
('L990MT', 'Seattle', 'Truck'),
('P091YF', 'Miami', 'Car');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
