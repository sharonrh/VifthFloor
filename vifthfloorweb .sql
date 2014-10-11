-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2014 at 12:59 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vifthfloorweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `CategoryId` int(5) NOT NULL AUTO_INCREMENT,
  `CategoryName` varchar(100) NOT NULL,
  PRIMARY KEY (`CategoryId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryId`, `CategoryName`) VALUES
(1, 'Curhat'),
(2, 'Develop'),
(3, 'Games');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `ReleaseDate` date NOT NULL,
  `Description` text NOT NULL,
  `AvailableOn` varchar(100) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`Id`, `Title`, `ReleaseDate`, `Description`, `AvailableOn`) VALUES
(1, 'New Stuff', '2014-10-11', 'Test </br>\r\nKerjaan mantapz\r\n</br>\r\nHaiiii', 'Ps2'),
(2, 'first game', '2014-10-11', 'Tessss\r\nBuat game</br>\r\nhaiii</br>', 'Ps2'),
(13, 'RAM', '2014-10-11', 'The following steps are required for you to be able to add foreign keys using phpadmin (in xampp).\r\n\r\nSelect any table and go to operations tab, if InnoDB is listed under storage engine drop down menu then jump to step 5.\r\nSo InnoDB is disabled in mysql engine, edit the \\xampp\\mysql\\bi\\my.cnf file and remove the hashes that are required to enable InnoDB (its self explanatory).\r\nAdd a line in the above file, default_storage_engine=InnoDB (This makes InnoDB the default storage engine).\r\nRestart mysql from the xampp control panel or from MS services.\r\nMake sure, both PARENT and CHILD tables are of storage type InnoDB.\r\nREFERENCED key (in parent) should be primary and REFERENCING key (in child) should be index.\r\nIn the CHILD table’s structure view, click on the link ‘relations view’ (it lies above ‘add fields’).\r\nIn the row corresponding to the REFERENCING key, select the REFERENCED key from the second column drop box.\r\nClick go .. you’ll see that the required query is executed.\r\nFor storage type information go here.', 'Android, Lumia'),
(14, 'res', '2014-10-11', 'The following steps are required for you to be able to add foreign keys using phpadmin (in xampp).\r\n\r\nSelect any table and go to operations tab, if InnoDB is listed under storage engine drop down menu then jump to step 5.\r\nSo InnoDB is disabled in mysql engine, edit the \\xampp\\mysql\\bi\\my.cnf file and remove the hashes that are required to enable InnoDB (its self explanatory).\r\nAdd a line in the above file, default_storage_engine=InnoDB (This makes InnoDB the default storage engine).\r\nRestart mysql from the xampp control panel or from MS services.\r\nMake sure, both PARENT and CHILD tables are of storage type InnoDB.\r\nREFERENCED key (in parent) should be primary and REFERENCING key (in child) should be index.\r\nIn the CHILD table’s structure view, click on the link ‘relations view’ (it lies above ‘add fields’).\r\nIn the row corresponding to the REFERENCING key, select the REFERENCED key from the second column drop box.\r\nClick go .. you’ll see that the required query is executed.\r\nFor storage type information go here.', 'Ps2'),
(15, 'ytr', '2014-10-11', 'The following steps are required for you to be able to add foreign keys using phpadmin (in xampp).\r\n\r\nSelect any table and go to operations tab, if InnoDB is listed under storage engine drop down menu then jump to step 5.\r\nSo InnoDB is disabled in mysql engine, edit the \\xampp\\mysql\\bi\\my.cnf file and remove the hashes that are required to enable InnoDB (its self explanatory).\r\nAdd a line in the above file, default_storage_engine=InnoDB (This makes InnoDB the default storage engine).\r\nRestart mysql from the xampp control panel or from MS services.\r\nMake sure, both PARENT and CHILD tables are of storage type InnoDB.\r\nREFERENCED key (in parent) should be primary and REFERENCING key (in child) should be index.\r\nIn the CHILD table’s structure view, click on the link ‘relations view’ (it lies above ‘add fields’).\r\nIn the row corresponding to the REFERENCING key, select the REFERENCED key from the second column drop box.\r\nClick go .. you’ll see that the required query is executed.\r\nFor storage type information go here.', 'Android, Lumia'),
(16, 'Anatomy of Computer', '2014-10-11', 'The following steps are required for you to be able to add foreign keys using phpadmin (in xampp).\r\n\r\nSelect any table and go to operations tab, if InnoDB is listed under storage engine drop down menu then jump to step 5.\r\nSo InnoDB is disabled in mysql engine, edit the \\xampp\\mysql\\bi\\my.cnf file and remove the hashes that are required to enable InnoDB (its self explanatory).\r\nAdd a line in the above file, default_storage_engine=InnoDB (This makes InnoDB the default storage engine).\r\nRestart mysql from the xampp control panel or from MS services.\r\nMake sure, both PARENT and CHILD tables are of storage type InnoDB.\r\nREFERENCED key (in parent) should be primary and REFERENCING key (in child) should be index.\r\nIn the CHILD table’s structure view, click on the link ‘relations view’ (it lies above ‘add fields’).\r\nIn the row corresponding to the REFERENCING key, select the REFERENCED key from the second column drop box.\r\nClick go .. you’ll see that the required query is executed.\r\nFor storage type information go here.', 'Ps2'),
(17, 'miss', '2014-10-11', 'The following steps are required for you to be able to add foreign keys using phpadmin (in xampp).\r\n\r\nSelect any table and go to operations tab, if InnoDB is listed under storage engine drop down menu then jump to step 5.\r\nSo InnoDB is disabled in mysql engine, edit the \\xampp\\mysql\\bi\\my.cnf file and remove the hashes that are required to enable InnoDB (its self explanatory).\r\nAdd a line in the above file, default_storage_engine=InnoDB (This makes InnoDB the default storage engine).\r\nRestart mysql from the xampp control panel or from MS services.\r\nMake sure, both PARENT and CHILD tables are of storage type InnoDB.\r\nREFERENCED key (in parent) should be primary and REFERENCING key (in child) should be index.\r\nIn the CHILD table’s structure view, click on the link ‘relations view’ (it lies above ‘add fields’).\r\nIn the row corresponding to the REFERENCING key, select the REFERENCED key from the second column drop box.\r\nClick go .. you’ll see that the required query is executed.\r\nFor storage type information go here.', 'Ps2'),
(18, 'yeah', '2014-10-11', 'The following steps are required for you to be able to add foreign keys using phpadmin (in xampp).\r\n\r\nSelect any table and go to operations tab, if InnoDB is listed under storage engine drop down menu then jump to step 5.\r\nSo InnoDB is disabled in mysql engine, edit the \\xampp\\mysql\\bi\\my.cnf file and remove the hashes that are required to enable InnoDB (its self explanatory).\r\nAdd a line in the above file, default_storage_engine=InnoDB (This makes InnoDB the default storage engine).\r\nRestart mysql from the xampp control panel or from MS services.\r\nMake sure, both PARENT and CHILD tables are of storage type InnoDB.\r\nREFERENCED key (in parent) should be primary and REFERENCING key (in child) should be index.\r\nIn the CHILD table’s structure view, click on the link ‘relations view’ (it lies above ‘add fields’).\r\nIn the row corresponding to the REFERENCING key, select the REFERENCED key from the second column drop box.\r\nClick go .. you’ll see that the required query is executed.\r\nFor storage type information go here.', 'Android');

-- --------------------------------------------------------

--
-- Table structure for table `gamesimage`
--

CREATE TABLE IF NOT EXISTS `gamesimage` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `IdGame` int(11) NOT NULL,
  `Location` text NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `gamesimage`
--

INSERT INTO `gamesimage` (`Id`, `IdGame`, `Location`) VALUES
(6, 18, '6a533-Penguins.jpg'),
(7, 18, '2e188-Desert.jpg'),
(8, 18, '6780b-Chrysanthemum.jpg'),
(9, 18, '1f121-Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `Id` int(5) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `PublishedDate` date NOT NULL,
  `ModifiedDate` date NOT NULL,
  `Content` text NOT NULL,
  `CreatorId` int(5) NOT NULL,
  PRIMARY KEY (`Id`),
  KEY `CreatorId` (`CreatorId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`Id`, `Title`, `PublishedDate`, `ModifiedDate`, `Content`, `CreatorId`) VALUES
(6, 'Anatomy of Computer', '2014-09-28', '0000-00-00', 'To understand the programming process, you need to have a rudimentary understanding of the building\r\nblocks that make up a computer. This section will describe a personal computer. Larger computers have\r\nfaster, larger, or more powerful components, but they have fundamentally the same design. At the\r\nheart of the computer lies the central processing unit (CPU). It consists of a single chip (integrated\r\ncircuit) or a small number of chips. A computer chip is a component with a plastic or metal housing,\r\nmetal connectors, and inside wiring made principally from silicon. For a CPU chip, the inside wiring is\r\nenormously complicated. For example, the Intel Atom chip (a popular CPU for inexpensive laptops at the\r\ntime of this writing) contains about 50 million structural elements called transistors —the elements that\r\nenable electrical signals to control other electrical signals, making automatic computing possible. The\r\nCPU locates and executes the program instructions; it carries out arithmetic operations such as addition,\r\nsubtraction, multiplication, and division; and it fetches data from storage and input/output devices and\r\nsends data back', 1),
(7, 'RAM', '2014-09-28', '0000-00-00', 'The computer keeps data and programs in storage. There are two kinds of storage. Primary storage, also\r\ncalled random-access memory (RAM) or simply memory, is fast but expensive; it is made from memory\r\nchips (see Figure 2). Primary storage has two disadvantages. It is comparatively expensive, and it loses\r\nall its data when the power is turned off. Secondary storage, usually a hard disk provides less expensive\r\nstorage that persists without electricity. A hard disk consists of rotating platters, which are coated with a\r\nmagnetic material, and read/write heads, which can detect and change the patterns of varying magnetic\r\nflux on the platters.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Id` int(5) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Role` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `Name`, `Password`, `Role`) VALUES
(1, 'Admin', '21d863fc0a7b287c8c3c9b7b27a744ab', 'Admin');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`CreatorId`) REFERENCES `user` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
