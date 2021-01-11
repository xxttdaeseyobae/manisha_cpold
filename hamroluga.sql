
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `book` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `days` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `days`, `username`) VALUES
(1, 'bike', '2', 'manik'),
(2, '', '3', ''),
(3, '', '3', ''),
(4, '', '3', ''),
(5, '', '1', ''),
(6, '', '1', 'aa'),
(7, '', '1', 'aa'),
(8, '', '1', 'aa'),
(9, '', '1', 'asdsasd'),
(10, '', '1', 'asdsasd'),
(11, '1', '2', 'aa'),
(12, '2', '3', 'manik'),
(13, '2', '2', ''),
(14, '2', '2', ''),
(15, '1', 'Days', 'sdasd'),
(16, 'Choose your bike', 'Days', 'aaaa'),
(17, 'Choose your bike', 'Days', 'aaaa'),
(18, 'Choose your bike', 'Days', 'aaaa'),
(19, 'Choose your bike', 'Days', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(100) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(100) NOT NULL,
  `time` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `event_name`, `date`, `description`, `time`) VALUES
(1, 'manik', '0000-00-00', '0', '2018-10-20 12:30:00'),
(2, 'mm', '0222-01-01', 'asdasd', ''),
(4, 'manik', '0001-11-05', 'ndjofhauidhsd9ufhu', ''),
(5, 'manik', '0001-11-05', 'ndjofhauidhsd9ufhu', ''),
(6, 'asdasd', '1111-02-01', 'asdasdad', ''),
(7, 'adasd', '3213-12-31', 'asdsa', ''),
(8, 'asdas', '0011-11-11', 'asdasd', ''),
(9, 'asdas', '0011-11-11', 'asdasd', ''),
(10, 'mani', '0001-01-01', 'sdsada', '00:00'),
(11, 'mani', '0001-01-01', 'sdsada', '00:00'),
(12, 'adfasd', '2018-01-01', 'asdfsadf', '01:00'),
(13, 'asdf', '2018-01-01', 'asdf', '05:04'),
(14, 'sdaf', '2018-01-01', 'asdfasdfasdfsdfasdfasdf', '12:00'),
(15, 'sdaf', '2018-01-01', 'asdfasdfasdfsdfasdfasdf', '12:00'),
(16, 'sadfsdf', '2018-01-01', 'asdf', '01:59'),
(17, 'manik', '2018-01-01', 'afawesafasdf', '01:00'),
(18, 'manik', '2018-01-01', 'afawesafasdf', '01:00'),
(19, 'manik', '0111-11-02', 'hhhh', '12:00');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `image`, `description`) VALUES
(12, 'Giant pro cycle', 80000, 'Giant pro cycle.jpg', 'Weight: Light\r\nBrake: Double brake\r\nGear: Smooth\r\nGender: BOth'),
(13, 'Malmut', 5000, 'Malmut.jpg', 'Cycling Jacket    Windproof    Waterproof  Washabale'),
(14, 'Jack Wolf', 6000, 'Jack Wolf.jpg', 'Made for cycling offroad.  Washable   Windproof  Water resistence'),
(15, 'North face', 2000, 'North face.jpg', 'Best Jacket for Cycling  Washable  Windproof'),
(16, 'Trek', 120000, 'Trek.jpg', 'Light weight,  Made for offroad,   For both gender, Gear system. Best brake for latest trek design'),
(17, 'Tiger gloves', 800, 'Tiger gloves.jpg', 'Easy and Comfortable,  Makes you wan ride more, Fashionable , '),
(18, 'Levis ', 7000, 'Levis .jpg', 'Fashionable,  Windproof, Washable, Waterproff '),
(19, 'Cycling Custume', 20000, 'Cycling Custume.jpg', 'Offer, Latest fashionable Costume ');

-- --------------------------------------------------------

--
-- Table structure for table `product_user`
--

CREATE TABLE `product_user` (
  `id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `isadmin` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `password`, `email`, `isadmin`) VALUES
(1, 'saurav', 'saurav maharjan', 'oop', 'a@a.com', 1),
(2, 'Manik', 'Manik Maharjan', 'manik', 'manikmaharjan1@yahoo.com', 1),
(3, 'Samir', 'Manikmaa', 'manik	', 'manik@', 0),
(4, 'saurssaurav', 'saurav mahrajan', '1111', 's@s.com', 0),
(5, '', '', '1111', 'naat', 0),
(6, 'naat', 'sad', '1111', 'asd', 0),
(7, 'naat', '', '1111', '', 0),
(8, 'manik', 'manikmaharjan', '1111', 'manik1@gmail.com', 0),
(9, 'sadassad', 'sadasd', 'asdasd', 'sdas', 0),
(10, 'naat', 'asdasda', '1111', 'sSasdsadsdasd', 0),
(11, 'naat', 'asdfasdf', '1111', 'dasdf@asdf.com', 0),
(12, 'jhon', 'jhon maharjan', '1111', 'j@j.com', 0),
(13, 'Manik_Maharjan', 'Manik Maharjan', '1111', 'manikmaharjan@yahoo.com', 0),
(14, 'naruto', 'naruto maharjan', '1111', 'naruto@yahoo.com', 0),
(15, 'sadasd', 'dasd', 'asdas', 'sdasd', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_user`
--
ALTER TABLE `product_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pp` (`product_id`),
  ADD KEY `uu` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_user`
--
ALTER TABLE `product_user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_user`
--
ALTER TABLE `product_user`
  ADD CONSTRAINT `pp` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `uu` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
