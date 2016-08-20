-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 20, 2016 at 11:44 PM
-- Server version: 5.7.13-log
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'PHP 7'),
(2, 'HTML 5'),
(3, 'Bootstrap 3'),
(4, 'JavaScript'),
(5, 'CSS'),
(6, 'JQuery'),
(7, 'Laravel'),
(24, 'MySQL');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` text NOT NULL,
  `post_status` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_status`, `post_comment_count`) VALUES
(1, 1, 'Hello World with PHP', 'Sushil P.', '2016-07-01', 'php.jpg', '<p>This is a demo content.</p>\r\n<p>\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi lacinia, nisl vitae egestas hendrerit, magna tortor auctor neque, vel fringilla nibh quam sed nunc. Etiam vel mi neque. Integer venenatis, leo at egestas euismod, lectus nibh porta arcu, vitae hendrerit erat lorem at mi. Etiam fringilla neque commodo, viverra quam et, lacinia risus. Proin aliquam sapien vitae laoreet pharetra. Nunc mattis ipsum id semper molestie. Vivamus enim leo, viverra eu quam porttitor, tempor suscipit mi. Duis feugiat sed nisi nec viverra. Fusce quam sapien, aliquet id dolor id, imperdiet laoreet arcu. Maecenas quis accumsan augue. Nulla suscipit accumsan ligula, aliquam rutrum ex pellentesque et. Interdum et malesuada fames ac ante ipsum primis in faucibus.\r\n</p>', 'hello, world, sushil', 'draft', 0),
(2, 2, 'HTML Blog Post', 'HTML Expert', '2016-07-22', 'html2.jpg', '<p>This is HTML course </p>\n<p>Curabitur vitae lacinia lorem. Maecenas rutrum turpis vel nisl convallis tincidunt. Aliquam erat volutpat. Proin sed laoreet magna. Pellentesque eget purus eros. Praesent mattis, magna quis auctor consequat, est nibh consectetur ipsum, in faucibus ex quam id turpis. Duis quis bibendum ex. Morbi scelerisque commodo bibendum. Quisque in metus nec dolor pulvinar pharetra ut in nisi. Vestibulum fermentum dignissim eleifend. Aenean ac lectus sodales, dictum quam id, fringilla quam. Duis semper interdum placerat. Sed feugiat ex a suscipit aliquet. Etiam commodo hendrerit faucibus.</p>', 'html, expert', 'publish', 0),
(3, 3, 'Bootstrap 3 is Awesome', 'Marry Jane', '2016-07-15', 'bootstrap.jpg', '<p> Bootstrap 3 is open source HTML / CSS framework </p>\r\n<p>\r\nProin vitae hendrerit purus. Aenean placerat accumsan tortor ut molestie. In ornare luctus nisl vitae imperdiet. Praesent at ex elit. Aenean luctus commodo ex eget malesuada. Donec suscipit sodales dolor, vel pretium mi sodales eu. Sed fringilla lacus auctor felis mollis elementum. Aenean posuere feugiat nulla, ac sodales sapien blandit non. Maecenas eget elementum tortor. Integer suscipit condimentum odio, id egestas nulla vulputate sit amet.\r\n</p>', 'bootstrap, bootstrap 3, marry, jane', 'draft', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
