-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 16, 2024 at 08:26 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library_`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `name`, `password`) VALUES
('admin', 'Admin User', '45e982346d9a41f84efd3b3688e2c72b2759f3b9');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `name`, `author`) VALUES
(1, 'Clean Code: A Handbook of Agile Software Craftsmanship', 'Robert C. Martin'),
(2, 'JavaScript: The Good Parts', 'Douglas Crockford'),
(3, 'Head First Design Patterns', 'Eric Freeman, Elisabeth Robson, Bert Bates, Kathy Sierra'),
(4, 'Eloquent JavaScript: A Modern Introduction to Programming', 'Marijn Haverbeke'),
(5, 'HTML and CSS: Design and Build Websites', 'Jon Duckett'),
(6, 'Python Crash Course: A Hands-On, Project-Based Introduction to Programming', 'Eric Matthes'),
(7, 'Learning Python The Hard Way', 'JD Philips'),
(8, 'Cracking the Coding Interview: 189 Programming Questions and Solutions', 'Gayle Laakmann McDowell'),
(9, 'Web Development with Node.js, Express, and MongoDB', 'Ethan Brown'),
(10, 'React: Up & Running: Building Web Applications', 'Stoyan Stefanov'),
(11, 'Learning React: A Hands-On Guide to Building Web Applications Using React and Redux', 'Alex Banks, Eve Porcello'),
(12, 'Node.js Design Patterns - Second Edition: Master best practices to build modular and scalable server-side web applications', 'Mario Casciaro'),
(13, 'Learning PHP, MySQL & JavaScript: With jQuery, CSS & HTML5', 'Robin Nixon'),
(14, 'Vue.js 2 and Bootstrap 4 Web Development: Build Responsive SPAs with Bootstrap 4, Vue.js 2, and Firebase', 'Olga Filipova, Sergiio Widen'),
(15, 'Learning Web Design: A Beginner\'s Guide to HTML, CSS, JavaScript, and Web Graphics', 'Jennifer Niederst Robbins'),
(16, 'Angular Development with TypeScript', 'Yakov Fain, Anton Moiseev'),
(17, 'Learning SQL: Generate, Manipulate, and Retrieve Data', 'Alan Beaulieu'),
(18, 'Beginning Programming with Python For Dummies', 'John Paul Mueller'),
(20, 'Java: A Beginner\'s Guide', 'Herbert Schildt'),
(21, 'sql injection', 'Adrian Makori'),
(22, 'millionarea', 'Adrian Makori'),
(23, 'databse management for beginners', 'Travis Scott');

-- --------------------------------------------------------

--
-- Table structure for table `issue`
--

CREATE TABLE `issue` (
  `id` int(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `issue`
--

INSERT INTO `issue` (`id`, `sid`, `name`, `author`, `date`) VALUES
(5, '1045858', 'Clean Code: A Handbook of Agile Software Craftsmanship', 'Robert C. Martin', '16/03/2024'),
(6, '1045858', 'Python Crash Course: A Hands-On, Project-Based Introduction to Programming', 'Eric Matthes', '16/03/2024'),
(7, '1045121', 'Beginning Programming with Python For Dummies', 'John Paul Mueller', '16/03/2024');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `name`, `author`, `sid`) VALUES
(2, 'Full Stack Development with JHipster: Build Full Stack Web Applications and Microservices with Spring Boot and Vue', 'Deepu K Sasidharan, Sendil Kumar N', '1045858'),
(3, 'harry', 'lukas martin', '1045858');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `sid`, `name`, `branch`, `sem`, `password`, `email`) VALUES
(3, '1045121', 'lucky', 'Mechanical Engineering', '2', 'bfcf63b7b62e8d1812d0a68fb0c58f9f60f94bd4', 'lucymwongeli08@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `issue`
--
ALTER TABLE `issue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `sid` (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `issue`
--
ALTER TABLE `issue`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
