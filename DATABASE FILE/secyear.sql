-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 12:53 PM
-- Server version: 5.6.21
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `secyear`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
    `user_id` int(11) NOT NULL AUTO_INCREMENT,
    `username` varchar(50) NOT NULL,
    `password` varchar(50) NOT NULL,
    `name` varchar(50) NOT NULL,
    PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `admin` (`username`, `password`, `name`) VALUES
('roaa', 'roaa', 'roaa');


-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS books (
  isbn BIGINT(250) NOT NULL AUTO_INCREMENT,
  title varchar (500) NOT NULL,
  category varchar (500) NOT NULL,
  author varchar (500) NOT NULL,
  publisher varchar (500) NOT NULL,
  pub_date DATE NOT NULL,
  PRIMARY KEY (isbn)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- --------------------------------------------------------

INSERT INTO `books` (`isbn`, `title`, `category`, `author`, `publisher`, `pub_date`) VALUES ('7382937638', 'Harvard professor', 'Business', 'Donna Tartt', 'Crown', '2009-06-10');

INSERT INTO `books` (`isbn`, `title`, `category`, `author`, `publisher`, `pub_date`) VALUES ('3867392773', 's Dilemma', 'Finance', 'Donna Tartt', 'Crown', '2003-02-06');

INSERT INTO `books` (`isbn`, `title`, `category`, `author`, `publisher`, `pub_date`) VALUES ('8639208979', 'Revolutionary Book', 'Romance', 'Clayton ', 'Penguin Press', '2009-02-04');

INSERT INTO `books` (`isbn`, `title`, `category`, `author`, `publisher`, `pub_date`) VALUES ('5526462684', 'A Midsummer Night’s Dream', 'Romance', 'William Shakespeare', 'Crown', '2001-01-31');

INSERT INTO `books` (`isbn`, `title`, `category`, `author`, `publisher`, `pub_date`) VALUES ('9573728477', 'Biography of X', 'Biography', 'Catherine Lacey', 'Farrar', '2023-08-08');

INSERT INTO `books` (`isbn`, `title`, `category`, `author`, `publisher`, `pub_date`) VALUES ('4436289697', 'Let It Snow: Three Holiday Romances', 'Romance', 'John Green', 'Speak', '2008-03-12');

INSERT INTO `books` (`isbn`, `title`, `category`, `author`, `publisher`, `pub_date`) VALUES ('1832876388', 'Frida: A Biography of Frida Kahlo', 'Biography', 'Hayden Herrera', 'Harper Perennial', '2011-08-08');

INSERT INTO `books` (`isbn`, `title`, `category`, `author`, `publisher`, `pub_date`) VALUES ('7846354725', 'Basic Economics: A Citizens Guide to the Economy', 'Economics', 'Thomas Sowell', 'Basic Books', '2003-07-23');

INSERT INTO `books` (`isbn`, `title`, `category`, `author`, `publisher`, `pub_date`) VALUES ('9463845827', 'The Alchemy of Finance', 'Finance', ' Paul A. Volcker', 'Wiley', '2015-07-15');

INSERT INTO `books` (`isbn`, `title`, `category`, `author`, `publisher`, `pub_date`) VALUES ('6538684749', 'A Brief History of Time', 'History', 'Stephen Hawking', 'Bantam Books', '1998-05-08');