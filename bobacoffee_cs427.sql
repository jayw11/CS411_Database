-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2019 at 09:05 PM
-- Server version: 10.1.43-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bobacoffee_cs427`
--

DELIMITER $$
--
-- Procedures
--
$$

$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `allergies`
--

CREATE TABLE `allergies` (
  `userID` int(11) DEFAULT NULL,
  `ingredientID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allergies`
--

INSERT INTO `allergies` (`userID`, `ingredientID`) VALUES
(10, 5),
(10, 5),
(10, 1),
(10, 5),
(10, 5),
(1, 8),
(1, 11),
(21, 1),
(21, 5),
(21, 2),
(21, 14),
(21, 3),
(21, 15),
(21, 15),
(15, 13),
(15, 10),
(13, 8),
(10, 5),
(8, 7),
(8, 14),
(8, 13),
(8, 12),
(8, 9),
(8, 8),
(14, 10),
(14, 2),
(14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `drinks`
--

CREATE TABLE `drinks` (
  `drinkID` int(11) NOT NULL,
  `drinkName` varchar(255) DEFAULT NULL,
  `sweetness` int(11) DEFAULT NULL,
  `hot_cold` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drinks`
--

INSERT INTO `drinks` (`drinkID`, `drinkName`, `sweetness`, `hot_cold`) VALUES
(1, 'Bobatea', 80, 'hot'),
(2, 'Mocha', 60, 'hot'),
(3, 'Latte', 20, 'hot'),
(4, 'Americano', 0, 'hot'),
(5, 'Cappuccino', 60, 'hot'),
(6, 'Espresso', 0, 'hot'),
(7, 'Chai Tea', 0, 'hot'),
(8, 'Hot Chocolate', 100, 'hot'),
(9, 'Frappuccino', 60, 'cold'),
(10, 'KF Milk Tea', 60, 'cold'),
(11, 'Coconut Milk Tea', 60, 'cold'),
(12, 'Honey Lemonade', 80, 'cold'),
(13, 'Matcha Red Bean', 20, 'cold'),
(14, 'Oolong Tea Cap', 40, 'cold'),
(15, 'Red Bean Wow Milk', 60, 'cold'),
(16, 'Herbal Jelly Wow Milk', 60, 'cold'),
(17, 'Iced Chai Tea Latte', 20, 'cold'),
(18, 'Caramel Apple Spice', 40, 'cold'),
(19, 'Caramel Cream', 100, 'cold'),
(20, 'Iced Americano', 0, 'cold'),
(21, 'Honey Tea Cap', 80, 'cold'),
(22, 'Winter Melon Tea Cap', 20, 'cold'),
(23, 'Mango Green Tea', 40, 'cold'),
(24, 'Taro Slush', 60, 'cold'),
(25, 'Longan Jujube Tea', 40, 'cold');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `ingredientID` int(11) NOT NULL,
  `ingredientName` varchar(255) DEFAULT NULL,
  `ingredientCalories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`ingredientID`, `ingredientName`, `ingredientCalories`) VALUES
(1, 'boba', 170),
(2, 'puddings', 150),
(3, 'caramel', 200),
(4, 'coconut', 100),
(5, 'milk', 100),
(6, 'fruit', 100),
(7, 'honey', 200),
(8, 'matcha', 100),
(9, 'red_bean', 120),
(10, 'taro', 180),
(11, 'cream', 280),
(12, 'jelly', 150),
(13, 'jujube', 150),
(14, 'cocoa', 200),
(15, 'chocolate', 250);

-- --------------------------------------------------------

--
-- Table structure for table `new_table`
--

CREATE TABLE `new_table` (
  `drinkID` int(11) DEFAULT NULL,
  `drinkName` varchar(255) DEFAULT NULL,
  `avg_ratings` double DEFAULT NULL,
  `Grade` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_table`
--

INSERT INTO `new_table` (`drinkID`, `drinkName`, `avg_ratings`, `Grade`) VALUES
(10, 'KF Milk Tea', 9.5, 'A'),
(15, 'Red Bean Wow Milk', 8, 'A'),
(15, 'Red Bean Wow Milk', 8, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `new_table2`
--

CREATE TABLE `new_table2` (
  `drinkID` int(11) DEFAULT NULL,
  `sum_calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_table2`
--

INSERT INTO `new_table2` (`drinkID`, `sum_calories`) VALUES
(10, 570),
(15, 390),
(15, 390);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `drinkID` int(11) NOT NULL,
  `drinkName` varchar(255) NOT NULL,
  `userID` int(11) NOT NULL,
  `ratings` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`drinkID`, `drinkName`, `userID`, `ratings`) VALUES
(1, 'bobatea', 1, 10),
(1, 'bobatea', 5, 9),
(2, 'Hot Mocha', 1, 9),
(2, 'Hot Mocha', 4, 7),
(2, 'Hot Mocha', 5, 7),
(3, 'Hot Latte', 1, 9),
(3, 'Hot Latte', 4, 8),
(3, 'Hot Latte', 5, 8),
(4, 'Hot Americano', 1, 6),
(4, 'Hot Americano', 4, 6),
(4, 'Hot Americano', 5, 6),
(5, 'Hot cappuccino', 1, 5),
(5, 'Hot cappuccino', 4, 3),
(5, 'Hot cappuccino', 5, 4),
(1, 'bobatea', 1, 10),
(1, 'bobatea', 5, 9),
(2, 'Hot Mocha', 1, 9),
(2, 'Hot Mocha', 4, 7),
(2, 'Hot Mocha', 5, 7),
(3, 'Hot Latte', 1, 9),
(3, 'Hot Latte', 4, 8),
(3, 'Hot Latte', 5, 8),
(4, 'Hot Americano', 1, 6),
(4, 'Hot Americano', 4, 6),
(4, 'Hot Americano', 5, 6),
(5, 'Hot cappuccino', 1, 5),
(5, 'Hot cappuccino', 4, 3),
(5, 'Hot cappuccino', 5, 4),
(6, 'Espresso', 1, 8),
(6, 'Espresso', 2, 6),
(7, 'Chai Tea', 1, 5),
(7, 'Chai Tea', 2, 5),
(8, 'Hot Chocolate', 1, 6),
(8, 'Hot Chocolate', 2, 8),
(9, 'Frappuccino', 1, 6),
(9, 'Frappuccino', 2, 7),
(10, 'KF Milk Tea', 1, 10),
(10, 'KF Milk Tea', 2, 9),
(11, 'Coconut Milk Tea', 1, 9),
(11, 'Coconut Milk Tea', 2, 8),
(12, 'Honey Lemonade', 1, 8),
(12, 'Honey Lemonade', 2, 6),
(13, 'Matcha Red Bean', 1, 6),
(13, 'Matcha Red Bean', 2, 8),
(14, 'Oolong Tea Cap', 1, 8),
(14, 'Oolong Tea Cap', 2, 7),
(15, 'Red Bean Wow Milk', 1, 8),
(15, 'Red Bean Wow Milk', 2, 8),
(16, 'Herbal Jelly Wow Milk', 1, 8),
(16, 'Herbal Jelly Wow Milk', 2, 8),
(17, 'Iced Chai Tea Latte', 1, 7),
(17, 'Iced Chai Tea Latte', 2, 5),
(18, 'Caramel Apple Spice', 1, 4),
(18, 'Caramel Apple Spice', 2, 3),
(19, 'Caramel Cream', 1, 5),
(19, 'Caramel Cream', 2, 9),
(20, 'Iced Americano', 1, 8),
(20, 'Iced Americano', 2, 7),
(21, 'Honey Tea Cap', 1, 7),
(21, 'Honey Tea Cap', 2, 6),
(22, 'Winter Melon Tea Cap', 1, 5),
(22, 'Winter Melon Tea Cap', 2, 5),
(23, 'Mango Green Tea', 1, 7),
(24, 'Taro Slush', 1, 8),
(24, 'Taro Slush', 2, 8),
(25, 'Longan Jujube Tea', 1, 8),
(25, 'Longan Jujube Tea', 1, 6),
(25, 'Longan Jujube Tea', 1, 9),
(18, 'Caramel Apple Spice', 1, 6),
(1, 'Bobatea', 1, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sells`
--

CREATE TABLE `sells` (
  `storeID` int(11) NOT NULL,
  `drinkID` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sells`
--

INSERT INTO `sells` (`storeID`, `drinkID`, `price`) VALUES
(1, 1, 4),
(1, 10, 5),
(1, 11, 5),
(1, 12, 5),
(1, 13, 6),
(1, 14, 5),
(1, 15, 7),
(1, 16, 7),
(1, 21, 7),
(1, 22, 7),
(1, 23, 6),
(1, 24, 6),
(1, 25, 6),
(1, 1, 4),
(1, 10, 5),
(1, 11, 5),
(1, 12, 5),
(1, 13, 6),
(1, 14, 5),
(1, 15, 7),
(1, 16, 7),
(1, 21, 7),
(1, 22, 7),
(1, 23, 6),
(1, 24, 6),
(1, 25, 6),
(4, 2, 5.2),
(4, 3, 4),
(4, 4, 3.2),
(4, 5, 5.8),
(4, 6, 4.5),
(4, 7, 5),
(4, 8, 4.8),
(4, 9, 7),
(4, 17, 6.8),
(4, 18, 6.8),
(4, 19, 6),
(4, 20, 5),
(2, 1, 4.5),
(2, 11, 5),
(2, 12, 6),
(2, 13, 6.5),
(2, 14, 6),
(2, 21, 7.5),
(2, 25, 7.5),
(3, 1, 4.3),
(3, 11, 6),
(3, 12, 6.5),
(3, 13, 7),
(5, 24, 7),
(5, 21, 6),
(6, 12, 6.5),
(7, 15, 7.8),
(8, 23, 7.5),
(9, 11, 7),
(10, 21, 7),
(11, 16, 6.8),
(12, 24, 6.5),
(13, 10, 6),
(14, 24, 6.4),
(15, 13, 6),
(16, 2, 5),
(17, 6, 5),
(18, 18, 6),
(19, 9, 6.5),
(20, 19, 6.2),
(21, 7, 6),
(22, 19, 6),
(23, 21, 6.3),
(24, 8, 5),
(25, 20, 4.8),
(25, 5, 4.7);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `storeID` int(11) NOT NULL,
  `storeName` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`storeID`, `storeName`, `location`) VALUES
(1, 'Kung Fu Tea', '707 S 6th St Suite 107, Champaign, IL 61820'),
(2, 'Taipei Cafe', '512 E Green St, Champaign, IL 61820'),
(3, 'Teamoji', '617 E Green St, Champaign, IL 61820'),
(4, 'Starbucks', '1401 W Green St, Urbana, IL 61801'),
(5, 'Cracked on Green', '619 E Green St, Champaign, IL 61820'),
(6, 'Latea Bubble Tea Lounge', '601 S 6th St, Ste 105, Champaign, IL 61820'),
(7, 'Bearology', '608 E University Ave, Champaign, IL 61820'),
(8, 'Cocomero', '709 S Wright St, Champaign, IL 61820'),
(9, 'Paris Super Crepes', '601 S 6th St, Ste 106, Champaign, IL 61820'),
(10, 'Vivi Bubble Tea', '333 S State St, Chicago, IL 60604'),
(11, 'KURIMU', '1159 W Taylor St, Chicago, IL 60607'),
(12, 'Elitea', '2002 S Wentworth Ave, Ste B09, Chicago, IL 60616'),
(13, 'Bingo Tea', '2150 S Archer Ave, Chicago, IL 60616'),
(14, 'Gathers Tea Bar', '1311 W Taylor St, Chicago, IL 60607'),
(15, 'Boba Club', '1825 Waukegan Rd, Glenview, IL 60025'),
(16, 'Espresso Royale', '1411 S Neil St, Champaign, IL 61821'),
(17, 'Espresso Royale', '2401 Village Green Pl, Champaign, IL 61822'),
(18, 'Starbucks', '1701 West Division Street, Chicago, IL 60622'),
(19, 'Starbucks', '1932 N Milwaukee, Chicago, IL 60647, University of Illinois-Illini Union, Urbana, IL 61801'),
(20, 'Starbucks', '809 S Wright St, Unv of Illinois Champaign-Bookstore, Champaign, IL 61820'),
(21, 'Starbucks', '2702 North Prospect, Champaign, IL 61822'),
(22, 'Espresso Royale', '1117 W Oregon St, Urbana, IL 61801'),
(23, 'Tsaocaa', '608 S 6th St, Champaign, IL 61820'),
(24, 'Caffe Bene', '524 E Green St, Champaign, IL 61820'),
(25, 'Xinh Xinh Cafe', '114 N Vine St, Urbana, IL 61802');

-- --------------------------------------------------------

--
-- Table structure for table `toppings`
--

CREATE TABLE `toppings` (
  `drinkID` int(11) NOT NULL,
  `ingredientID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toppings`
--

INSERT INTO `toppings` (`drinkID`, `ingredientID`) VALUES
(1, 1),
(2, 5),
(2, 11),
(2, 14),
(2, 15),
(3, 5),
(3, 14),
(4, 14),
(5, 5),
(5, 14),
(6, 14),
(8, 15),
(9, 5),
(9, 11),
(10, 1),
(10, 5),
(11, 4),
(11, 5),
(12, 7),
(13, 8),
(13, 9),
(13, 5),
(14, 11),
(15, 1),
(15, 9),
(15, 5),
(16, 12),
(16, 5),
(17, 5),
(18, 3),
(18, 6),
(19, 3),
(19, 11),
(20, 14),
(21, 7),
(21, 14),
(22, 11),
(22, 6),
(23, 6),
(24, 10),
(24, 5),
(25, 13),
(10, 2),
(10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `username`, `password`) VALUES
(1, 'yuw14', '12345678'),
(4, '111', '111'),
(5, '123', '123'),
(6, '1', '1'),
(7, 'aaa', 'aaa'),
(8, '213', '213'),
(9, '212', '212'),
(10, '123123', '123123'),
(11, '123123123', '123123123'),
(12, 'asdasd', 'asdasd'),
(13, 'edr', 'edr'),
(14, 'eded', 'eded'),
(15, 'erer', 'erer'),
(16, 'rdfrffa', 'rdfrffa'),
(17, 'aeae', 'aeae'),
(18, 'arwwa', 'aewa'),
(19, 'awriawr', 'awriawr'),
(20, 'ar2a', 'ar2a'),
(21, 'asfaa3', 'asfaa3'),
(22, 'ruox', 'wuruoxuan'),
(23, 'wef', 'werf'),
(24, '01239jur0', '1-239jd'),
(25, '00h0hh', 'd9dj'),
(26, 'wsdf', '23rr3'),
(27, '23fc3fc', '23f'),
(28, '23fcf', 'sevv');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allergies`
--
ALTER TABLE `allergies`
  ADD KEY `userID` (`userID`),
  ADD KEY `ingredientID` (`ingredientID`);

--
-- Indexes for table `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`drinkID`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`ingredientID`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`storeID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
