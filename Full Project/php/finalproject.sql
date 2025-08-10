-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2025 at 07:53 PM
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
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_name` varchar(15) NOT NULL,
  `admin_id` int(25) NOT NULL,
  `admin_email` varchar(25) NOT NULL,
  `admin_password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_name`, `admin_id`, `admin_email`, `admin_password`) VALUES
('admin1', 1, 'admin1@email.com', '$2y$10$gfi4cBBQp6ynzbCZ7LWOmONvj9W2xSho86MbEC/he9LMQ1Kt2C436');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_name` varchar(150) NOT NULL,
  `book_id` int(10) NOT NULL,
  `book_category` varchar(50) NOT NULL,
  `book_temp` varchar(50) NOT NULL,
  `book_sample` varchar(500) NOT NULL,
  `book_price` int(10) NOT NULL,
  `book_desc` text NOT NULL,
  `book_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_name`, `book_id`, `book_category`, `book_temp`, `book_sample`, `book_price`, `book_desc`, `book_image`) VALUES
('Skills in Mathematics - Algebra', 3, 'Mathematics', 'C:xampp	mpphp5457.tmp', 'math21.pdf', 45, 'A useful reference for Algebra studying for high school and engineering students.\r\n', 'math21.jpg'),
('Skills in Mathematics - Play With Graphs', 4, 'Mathematics', 'C:xampp	mpphpACC.tmp', 'math22.pdf', 35, 'Learn all about graphs and their equations, properties and transformations.', 'math22.jpg'),
('Skills in Mathematics - Trigonometry', 5, 'Mathematics', 'C:xampp	mpphp13E6.tmp', 'math23.pdf', 35, 'A useful reference for Trigonometry functions ,their laws and applications.', 'math23.jpg'),
('Skills in Mathematics - Coordinate Geometry', 8, 'Mathematics', 'C:xampp	mpphp31DB.tmp', 'math 24.pdf', 45, 'All about Coordinate Geometry for high school and engineering students.', 'math24.jpg'),
('Skills in Mathematics - Differential Calculus', 9, 'Mathematics', 'C:xampp	mpphpB293.tmp', 'math25.pdf', 45, 'Learn about limits, continuity, differentiation, chain rule and more applications.', 'math25.jpg'),
('Skills in Mathematics - Integral Calculus', 10, 'Mathematics', 'C:xampp	mpphpCA16.tmp', 'math26.pdf', 55, 'Learn all about indefinite integrals, definite integral and its applications, and start learning about differential equations.', 'math26.jpg'),
('Skills in Mathematics - Vectors and 3D Geometry', 11, 'Mathematics', 'C:xampp	mpphp4877.tmp', 'math27.pdf', 55, 'A good start of learning about vectors algebra, product of vectors.', 'math27.jpg'),
('Higher Engineering Mathematics', 12, 'Engineering', 'C:xampp	mpphpD026.tmp', 'Higher Engineering Mathematics.pdf', 55, 'An important reference for engineering students, all about algebra, functions, trigonometry, hyperbolic functions, calculus, complex numbers and a lot more. All in a one resource.', 'Higher_Engineering_Mathematics.jpg'),
('40 Days Crash Course for JEE Main Chemistry', 15, 'Chemistry', 'C:xampp	mpphp33E9.tmp', '40 Days Crash Course for JEE Main Chemistry (Arihant Experts) (mamhay).pdf', 45, 'Learn about General, Physical, Inorganic and Organic Chemistry, just in 40 days.', '40_Days_Chemistry.jpg'),
('40 Days Crash Course for JEE Main Mathematics', 16, 'Mathematics', 'C:xampp	mpphp415A.tmp', '40 Days Crash Course for JEE Main Mathematics (Arihant Experts) (mamhay).pdf', 45, 'Learn about Algebra, Calculus, Trigonometry, Coordinate Geometry, Vectors & 3D Geometry, Statistics, Probability and Mathematical Reasoning, just in 40 days.', '40_Days_Mathematics.jpg'),
('40 Days Crash Course for JEE Main Physics', 17, 'Physics', 'C:xampp	mpphp5B4E.tmp', '40 Days Crash Course for JEE Main Physics (Arihant Experts) (mamhay).pdf', 45, 'Learn all about Units and Measurements, Mechanics, Waves and Oscillations, Properties of matter, Electricity and Magnetism, Optics and Modern Physics, just in 40 days.', '40_Days_Physics.jpg'),
('Computer Science - An Overview (12th Global Edition)', 19, 'Engineering', 'C:xampp	mpphp5CB1.tmp', 'Computer Science- An Overview (12th Global Edition).pdf', 55, 'Your gate to the world of programming is in this reference. Important for engineering students.', 'Computer_Science_An_Overview.png'),
('Differential Equations And Their Applications (Fourth Edition)', 20, 'Mathematics', 'C:xampp	mpphp11BA.tmp', 'DifferentialEquationsAndTheirApplications.pdf', 50, 'It is just about Differential Equations And Their Applications.', 'DifferentialEquationsAndTheirApplications.png'),
('Elementary Number Theory', 21, 'Mathematics', 'C:xampp	mpphpBD52.tmp', 'Elementary Number Theory.pdf', 60, 'Elementary number theory.', 'Elementary_Number_Theory.png'),
('Calculus Better Explained - A Guide to Developing Lasting Intuition', 22, 'Mathematics', 'C:xampp	mpphp1DA7.tmp', 'Calculus Better Explained.pdf', 5, 'A small book about Calculus.', 'Calculus_Better_Explained.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `book_category` varchar(50) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`book_category`, `category_id`) VALUES
('Mathematics', 1),
('Chemistry', 2),
('Physics', 3),
('Engineering', 4),
('Machine Learning', 5);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `book_name` varchar(150) NOT NULL,
  `id` int(15) NOT NULL,
  `book_id` int(10) NOT NULL,
  `book_image` varchar(100) NOT NULL,
  `book_price` int(10) NOT NULL,
  `added` int(10) NOT NULL,
  `command` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`book_name`, `id`, `book_id`, `book_image`, `book_price`, `added`, `command`) VALUES
('40 Days Crash Course for JEE Main Physics', 22, 17, '40_Days_Physics.jpg', 45, 1, 'Remove from cart 🛒'),
('Higher Engineering Mathematics', 22, 12, 'Higher_Engineering_Mathematics.jpg', 55, 0, 'Add to cart 🛒'),
('Skills in Mathematics - Algebra', 22, 3, 'math21.jpg', 40, 1, 'Remove from cart 🛒'),
('Skills in Mathematics - Trigonometry', 22, 5, 'math23.jpg', 35, 1, 'Remove from cart 🛒'),
('Skills in Mathematics - Trigonometry', 20, 5, 'math23.jpg', 35, 0, 'Add to cart 🛒'),
('40 Days Crash Course for JEE Main Mathematics', 20, 16, '40_Days_Mathematics.jpg', 45, 1, 'Remove from cart 🛒'),
('Skills in Mathematics - Trigonometry', 21, 5, 'math23.jpg', 35, 1, 'Remove from cart 🛒'),
('Skills in Mathematics - Algebra', 21, 3, 'math21.jpg', 40, 1, 'Remove from cart 🛒'),
('Differential Equations And Their Applications (Fourth Edition)', 21, 20, 'DifferentialEquationsAndTheirApplications.png', 50, 1, 'Remove from cart 🛒'),
('Skills in Mathematics - Vectors & 3D Geometry', 23, 11, 'math27.jpg', 45, 1, 'Remove from cart 🛒'),
('Calculus Better Explained - A Guide to Developing Lasting Intuition', 23, 14, 'Calculus_Better_Explained.jpg', 10, 1, 'Remove from cart 🛒'),
('Higher Engineering Mathematics', 23, 12, 'Higher_Engineering_Mathematics.jpg', 55, 1, 'Remove from cart 🛒'),
('40 Days Crash Course for JEE Main Mathematics', 23, 16, '40_Days_Mathematics.jpg', 45, 1, 'Remove from cart 🛒'),
('Skills in Mathematics - Algebra', 23, 3, 'math21.jpg', 45, 1, 'Remove from cart 🛒'),
('Skills in Mathematics - Coordinate Geometry', 22, 8, 'math24.jpg', 45, 1, 'Remove from cart 🛒'),
('Skills in Mathematics - Play With Graphs', 24, 4, 'math22.jpg', 35, 0, 'Add to cart 🛒'),
('Skills in Mathematics - Integral Calculus', 24, 10, 'math26.jpg', 55, 1, 'Remove from cart 🛒'),
('Higher Engineering Mathematics', 24, 12, 'Higher_Engineering_Mathematics.jpg', 55, 1, 'Remove from cart 🛒'),
('Skills in Mathematics - Algebra', 24, 3, 'math21.jpg', 45, 1, 'Remove from cart 🛒'),
('Skills in Mathematics - Play With Graphs', 22, 4, 'math22.jpg', 35, 1, 'Remove from cart 🛒'),
('40 Days Crash Course for JEE Main Chemistry', 22, 15, '40_Days_Chemistry.jpg', 45, 1, 'Remove from cart 🛒'),
('Differential Equations And Their Applications (Fourth Edition)', 22, 20, 'DifferentialEquationsAndTheirApplications.png', 50, 1, 'Remove from cart 🛒'),
('Skills in Mathematics - Differential Calculus', 22, 9, 'math25.jpg', 45, 1, 'Remove from cart 🛒'),
('Skills in Mathematics - Integral Calculus', 22, 10, 'math26.jpg', 55, 1, 'Remove from cart 🛒');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(15) NOT NULL,
  `id` int(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(300) NOT NULL,
  `phonenumber` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `id`, `email`, `password`, `phonenumber`) VALUES
('user111111', 20, 'newuser@email.com', '$2y$10$OxqftLwv0qK4peHt4xYfhOj8Xi/TLeNcGWMGDO7GoZuQ8rjATg9We', '01298212310'),
('mohammed', 21, 'mohammed@email.com', '$2y$10$gQsUnQ8xcdlE2IwZTf2RBeyXcN9YRFlNBM21J8HSyUC2xJT6ST.z6', '01042176280'),
('cmp_engineer', 22, 'wafgy@email.com', '$2y$10$pWGZ4EKoOv0ApwVSo72XVO.tZeQUF3gxBULsMujnpMVe46UpESlLe', '01152136510'),
('python', 23, 'python@email.com', '$2y$10$V41KG5eS0u58d/MTpEDmAON6lrEYItaLekZwnxZPakXtfkorArwd6', '01000100101'),
('mohammed_hero', 24, 'mohammed1@email.com', '$2y$10$57uKKS2pMUIRTMPIdjpzF.jM.6spTPEoXsLI0rilljP.oYmIZxUoy', '01123432198'),
('Omar', 25, 'jhgg@jkhsak.com', '$2y$10$6xOYdkLQIsTLhPoFTpNgm.Hd1bfg5soqaohtr1Q8FWqOY.wuBeHqe', '12345678910');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
