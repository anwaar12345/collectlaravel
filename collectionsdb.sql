-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2020 at 06:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collectionsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `age`, `designation`, `qualification`, `company`, `technology`, `salary`, `created_at`, `updated_at`) VALUES
(30, 'Sikander Deen Muhammad', 25, 'Trainee Php Junior Dev', 'BSSE(LAST SEMESTER) Maju Khi', 'Next Generations Innovations', 'Python Stack', '20000', NULL, NULL),
(31, 'Ismail Akhtar', 25, 'Trainee Php Junior Dev', 'BSSE(LAST SEMESTER) Maju Khi', 'Next Generations Innovations', 'JAM STACK', '20000', NULL, NULL),
(32, 'Syed Anwar Ahmed Shah', 25, 'Trainee Php Junior Dev', 'BSSE(LAST SEMESTER) Maju Khi', 'Next Generations Innovations', 'LAMP STACK', '20000', NULL, NULL),
(47, 'Ismail Akhtar', 25, 'Trainee Php Junior Dev', 'BSSE(LAST SEMESTER) Maju Khi', 'Next Generations Innovations', 'JAM STACK', '20000', NULL, NULL),
(48, 'Syed Anwar Ahmed Shah', 25, 'Trainee Php Junior Dev', 'BSSE(LAST SEMESTER) Maju Khi', 'Next Generations Innovations', 'LAMP STACK', '20000', NULL, NULL),
(49, 'Ali Asghar', 25, 'Trainee Php Junior Dev', 'BSSE(LAST SEMESTER) Maju Khi', 'Next Generations Innovations', 'Ruby STACK', '20000', NULL, NULL),
(50, 'Abdul Wahab', 25, 'Trainee Php Junior Dev', 'BSSE(LAST SEMESTER) Maju Khi', 'Next Generations Innovations', 'IOT Developer', '20000', NULL, NULL),
(56, 'Syed Anwar Ahmed Shah', 25, 'Trainee Php Junior Dev', 'BSSE(LAST SEMESTER) Maju Khi', 'Next Generations Innovations', 'LAMP STACK', '20000', NULL, NULL),
(57, 'Ali Asghar', 25, 'Trainee Php Junior Dev', 'BSSE(LAST SEMESTER) Maju Khi', 'Next Generations Innovations', 'Ruby STACK', '20000', NULL, NULL),
(58, 'Abdul Wahab', 25, 'Trainee Php Junior Dev', 'BSSE(LAST SEMESTER) Maju Khi', 'Next Generations Innovations', 'IOT Developer', '20000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2020_04_17_083205_employees', 1),
(4, '2020_04_17_123129_employees', 2),
(5, '2020_04_17_125406_alter_employees_age', 3),
(6, '2020_04_17_125748_alter_employees_age_place', 4),
(7, '2020_04_17_132202_alter_employees_qualification', 5),
(8, '2020_04_17_132507_alter_employees_qualification_string', 6),
(9, '2020_04_17_132653_alter_employees_qualification_strings', 7),
(10, '2020_04_17_140144_storecollections', 8),
(11, '2020_04_17_141213_storecollections_alter', 9),
(12, '2020_04_17_141804_storecollections_alter', 10);

-- --------------------------------------------------------

--
-- Table structure for table `storecollections`
--

CREATE TABLE `storecollections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `freeitems` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `storecollections`
--

INSERT INTO `storecollections` (`id`, `name`, `company`, `Model`, `color`, `price`, `freeitems`, `created_at`, `updated_at`) VALUES
(1, 'Laptop', 'Dell', 'core i9', 'Black', '70000', 0, NULL, NULL),
(2, 'Computer', 'Dell', 'core 2 Duo', 'Grey', '7000', 1, NULL, NULL),
(3, 'Laptop', 'HP', 'core i9', 'Black', '80000', 0, NULL, NULL),
(4, 'Laptop', 'Lenovo', 'core i9', 'Black', '80000', 0, NULL, NULL),
(5, 'Computer', 'Lenovo', 'core i9', 'Black', '80000', 0, NULL, NULL),
(6, 'Laptop', 'Dell', 'core i9', 'Black', '70000', 0, NULL, NULL),
(7, 'Computer', 'Dell', 'core 2 Duo', 'Grey', '7000', 1, NULL, NULL),
(8, 'Laptop', 'HP', 'core i9', 'Black', '80000', 0, NULL, NULL),
(9, 'Laptop', 'Lenovo', 'core i9', 'Black', '80000', 0, NULL, NULL),
(10, 'Computer', 'Lenovo', 'core i9', 'Black', '80000', 0, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storecollections`
--
ALTER TABLE `storecollections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `storecollections`
--
ALTER TABLE `storecollections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
