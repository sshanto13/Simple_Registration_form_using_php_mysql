-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 12:13 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'Shantonu Suman', 'sumancsediu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Shantonu Suman', '123@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b'),
(3, 'Rashed.khan@nybsys.com.bd', 'tbs017', '96e79218965eb72c92a549dd5a330112'),
(4, 'shanto', 'abc@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'Akash Srabon', 'abc@bd.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'Akash Srabon', 'abc@bd.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(7, 'munmn ahmed', 'abcd@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'munmn ahmed', 'abcd@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 'amir khan', 'abcd@domain.com', '202cb962ac59075b964b07152d234b70'),
(10, 'amir khan', 'abcdsss@domain.com', '202cb962ac59075b964b07152d234b70'),
(11, 'Amir kha', 'abcd@gmail.com', '202cb962ac59075b964b07152d234b70'),
(12, 'amir khan', 'amirkhan@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'NUSRAT FARAIA', 'ABAA@GMAILC.COM', 'e1faffb3e614e6c2fba74296962386b7'),
(14, 'sshanto13', 'sumancsediu@gmail.com', 'd50d7808f65a7c5960bc39f4f6598622');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
