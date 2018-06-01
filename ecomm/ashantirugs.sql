-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 01, 2018 at 10:18 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.1.16-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashantirugs`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(12, 'BOLT2', 'Cap', 'A sleek, tonal stitched cap for runners. The plain texture and unique design will help runners to concentrate more on running and less on their hair. The combbination of casual and formal look is just brilliant.', 200, 1, 200, '2018-05-30 15:00:42', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` longtext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price_xs` decimal(10,2) NOT NULL,
  `price_sm` decimal(10,2) DEFAULT NULL,
  `price_md` decimal(10,2) DEFAULT NULL,
  `price_lg` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price_xs`, `price_sm`, `price_md`, `price_lg`) VALUES
(4, 'AR-01', 'Grey Spark | Cowhide Patchwork Rug', '<div class="std">\r\n        <p>Grey Spark is hand crafted from individual segments of cowhide to form a remarkable patchwork masterpiece. Each piece of cowhide originates from offcuts of the luxury leather goods industry which are carefully sorted and individually inspected in order to become part of the rug. It takes significant time and skill to sort through and select the perfect colour &amp; shade of each individual segment which our master craftsmen then piece together, forming the most beautiful and unique designs. All our rugs are supplied with a choice of free premium backing material to suit different flooring types which not only significantly increases the rugs durability over its life, it also makes the rug more comfortable to walk on.</p>\r\n\r\n<ul>\r\n\r\n<li>Two year manufacturing warranty as standard.</li>\r\n\r\n<li>Choice of premium backing materials to suit different flooring types while increasing overall durability of the rug and comfort</li>\r\n\r\n<li>Optional proofing service, allowing you to be sure of the layout before the rug is stitched and dispatched.</li>\r\n\r\n<li>Customize everything, Chose your own size, colour or shape. Just contact us before ordering .</li>\r\n\r\n<li>We are fast! Guaranteed Free Worldwide delivery within 14 working days.</li>\r\n\r\n<li>Ethically Made with love. Unlike other sellers, we only use cowhide off-cuts from the luxury leather goods industry.</li>\r\n\r\n<li>Made from natural hide therefore naturally fire resistant.</li>\r\n\r\n</ul>    </div>', 'grey-spark_.jpg', 16, '914.00', '1495.00', '2400.00', '4800.00'),
(5, 'AR-02', 'Positivia | Cowhide Patchwork Rug', '<div class="std">\r\n        <p>Positivia is hand crafted from individual segments of cowhide to form a remarkable patchwork masterpiece. Each piece of cowhide originates from offcuts of the luxury leather goods industry which are carefully sorted and individually inspected in order to become part of the rug. It takes significant time and skill to sort through and select the perfect colour &amp; shade of each individual segment which our master craftsmen then piece together, forming the most beautiful and unique designs. All our rugs are supplied with a choice of free premium backing material to suit different flooring types which not only significantly increases the rugs durability over its life, it also makes the rug more comfortable to walk on.</p>\r\n\r\n<ul>\r\n\r\n<li>Two year manufacturing warranty as standard.</li>\r\n\r\n<li>Choice of premium backing materials to suit different flooring types while increasing overall durability of the rug and comfort</li>\r\n\r\n<li>Optional proofing service, allowing you to be sure of the layout before the rug is stitched and dispatched.</li>\r\n\r\n<li>Customize everything, Chose your own size, colour or shape. Just contact us before ordering .</li>\r\n\r\n<li>We are fast! Guaranteed Free Worldwide delivery within 14 working days.</li>\r\n\r\n<li>Ethically Made with love. Unlike other sellers, we only use cowhide off-cuts from the luxury leather goods industry.</li>\r\n\r\n<li>Made from natural hide therefore naturally fire resistant.</li>\r\n\r\n</ul>    </div>', 'Positivia_2_.jpg', 19, '828.00', '1354.00', '2160.00', '3000.00'),
(6, 'AR-03', 'Martian Trail | Cowhide Patchwork Rug', '<div class="std">\r\n        <p>Martian Trail is hand crafted from individual segments of premium cowhide to form a remarkable patchwork masterpiece. Each piece of cowhide originates from offcuts of the luxury leather goods industry which are carefully sorted and individually inspected in order to become part of the rug. It takes significant time and skill to sort through and select the perfect colour &amp; shade of each individual segment which our master craftsmen then piece together, forming the most beautiful and unique designs. All our rugs are supplied with a choice of free premium backing material to suit different flooring types which not only significantly increases the rugs durability over its life, it also makes the rug more comfortable to walk on.</p>\r\n\r\n<ul>\r\n\r\n<li>Two year manufacturing warranty as standard.</li>\r\n\r\n<li>Choice of premium backing materials to suit different flooring types while increasing overall durability of the rug and comfort</li>\r\n\r\n<li>Optional proofing service, allowing you to be sure of the layout before the rug is stitched and dispatched.</li>\r\n\r\n<li>Customize everything, Chose your own size, colour or shape. Just contact us before ordering .</li>\r\n\r\n<li>We are fast! Guaranteed Free Worldwide delivery within 14 working days.</li>\r\n\r\n<li>Ethically Made with love. Unlike other sellers, we only use cowhide off-cuts from the luxury leather goods industry.</li>\r\n\r\n<li>Made from natural hide therefore naturally fire resistant.</li>\r\n\r\n</ul>    </div>', 'Martian_Trial_-_D76A1700_.jpg', 22, '396.00', '599.00', '960.00', '1920.00'),
(7, 'AR-04', 'Zodiac | Cowhide Patchwork Rug', '<div class="std">\r\n        <p>Zodiac is hand crafted from individual segments of premium cowhide to form a remarkable patchwork masterpiece. Each piece of cowhide originates from offcuts of the luxury leather goods industry which are carefully sorted and individually inspected in order to become part of the rug. It takes significant time and skill to sort through and select the perfect colour &amp; shade of each individual segment which our master craftsmen then piece together, forming the most beautiful and unique designs. All our rugs are supplied with a choice of free premium backing material to suit different flooring types which not only significantly increases the rugs durability over its life, it also makes the rug more comfortable to walk on.</p>\r\n\r\n<ul>\r\n\r\n<li>Two year manufacturing warranty as standard.</li>\r\n\r\n<li>Choice of premium backing materials to suit different flooring types while increasing overall durability of the rug and comfort</li>\r\n\r\n<li>Optional proofing service, allowing you to be sure of the layout before the rug is stitched and dispatched.</li>\r\n\r\n<li>Customize everything, Chose your own size, colour or shape. Just contact us before ordering .</li>\r\n\r\n<li>We are fast! Guaranteed Free Worldwide delivery within 14 working days.</li>\r\n\r\n<li>Ethically Made with love. Unlike other sellers, we only use cowhide off-cuts from the luxury leather goods industry.</li>\r\n\r\n<li>Made from natural hide therefore naturally fire resistant.</li>\r\n\r\n</ul>    </div>', 'Zodiac_1_.jpg', 70, '534.00', '842.00', '1344.00', '2688.00'),
(8, 'AR-05', 'October Sky | Cowhide Patchwork Rug', '<div class="std">\r\n        <p>October Sky is hand crafted from individual segments of cowhide to form a remarkable patchwork masterpiece. Each piece of cowhide originates from offcuts of the luxury leather goods industry which are carefully sorted and individually inspected in order to become part of the rug. It takes significant time and skill to sort through and select the perfect colour &amp; shade of each individual segment which our master craftsmen then piece together, forming the most beautiful and unique designs. All our rugs are supplied with a choice of free premium backing material to suit different flooring types which not only significantly increases the rugs durability over its life, it also makes the rug more comfortable to walk on.</p>\r\n\r\n<ul>\r\n\r\n<li>Two year manufacturing warranty as standard.</li>\r\n\r\n<li>Choice of premium backing materials to suit different flooring types while increasing overall durability of the rug and comfort</li>\r\n\r\n<li>Optional proofing service, allowing you to be sure of the layout before the rug is stitched and dispatched.</li>\r\n\r\n<li>Customize everything, Chose your own size, colour or shape. Just contact us before ordering .</li>\r\n\r\n<li>We are fast! Guaranteed Free Worldwide delivery within 14 working days.</li>\r\n\r\n<li>Ethically Made with love. Unlike other sellers, we only use cowhide off-cuts from the luxury leather goods industry.</li>\r\n\r\n<li>Made from natural hide therefore naturally fire resistant.</li>\r\n\r\n</ul>    </div>', 'October_Sky_-_D76A1690_.jpg', 19, '396.00', '599.00', '960.00', '1920.00'),
(11, 'AR-06', 'Zag | Cowhide Patchwork Rug', '<div class="std">\r\n        <p>Zag is hand crafted from individual segments of cowhide to form a remarkable patchwork masterpiece. Each piece of cowhide originates from offcuts of the luxury leather goods industry which are carefully sorted and individually inspected in order to become part of the rug. It takes significant time and skill to sort through and select the perfect colour &amp; shade of each individual segment which our master craftsmen then piece together, forming the most beautiful and unique designs. All our rugs are supplied with a choice of free premium backing material to suit different flooring types which not only significantly increases the rugs durability over its life, it also makes the rug more comfortable to walk on.</p>\r\n\r\n<ul>\r\n\r\n<li>Two year manufacturing warranty as standard.</li>\r\n\r\n<li>Choice of premium backing materials to suit different flooring types while increasing overall durability of the rug and comfort</li>\r\n\r\n<li>Optional proofing service, allowing you to be sure of the layout before the rug is stitched and dispatched.</li>\r\n\r\n<li>Customize everything, Chose your own size, colour or shape. Just contact us before ordering .</li>\r\n\r\n<li>We are fast! Guaranteed Free Worldwide delivery within 14 working days.</li>\r\n\r\n<li>Ethically Made with love. Unlike other sellers, we only use cowhide off-cuts from the luxury leather goods industry.</li>\r\n\r\n<li>Made from natural hide therefore naturally fire resistant.</li>\r\n\r\n</ul>    </div>', 'Zag_2_.jpg', 7, '534.00', '842.00', '1344.00', '2688.00'),
(12, 'AR-07', 'Versailles | Cowhide Patchwork Rug', '<div class="std">\r\n        <p>Versailles is hand crafted from individual segments of cowhide to form a remarkable patchwork masterpiece. Each piece of cowhide originates from offcuts of the luxury leather goods industry which are carefully sorted and individually inspected in order to become part of the rug. It takes significant time and skill to sort through and select the perfect colour &amp; shade of each individual segment which our master craftsmen then piece together, forming the most beautiful and unique designs. All our rugs are supplied with a choice of free premium backing material to suit different flooring types which not only significantly increases the rugs durability over its life, it also makes the rug more comfortable to walk on.</p>\r\n\r\n<ul>\r\n\r\n<li>Two year manufacturing warranty as standard.</li>\r\n\r\n<li>Choice of premium backing materials to suit different flooring types while increasing overall durability of the rug and comfort</li>\r\n\r\n<li>Optional proofing service, allowing you to be sure of the layout before the rug is stitched and dispatched.</li>\r\n\r\n<li>Customize everything, Chose your own size, colour or shape. Just contact us before ordering .</li>\r\n\r\n<li>We are fast! Guaranteed Free Worldwide delivery within 14 working days.</li>\r\n\r\n<li>Ethically Made with love. Unlike other sellers, we only use cowhide off-cuts from the luxury leather goods industry.</li>\r\n\r\n<li>Made from natural hide therefore naturally fire resistant.</li>\r\n\r\n</ul>    </div>', 'Versailles_2_.jpg', 57, '534.00', '842.00', '1344.00', '1944.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(1, 'Steve', 'Jobs', 'Infinite Loop', 'California', 95014, 'daud.csbt@gmail.com', '123456', 'user'),
(2, 'Admin', 'Webmaster', 'Internet', 'Electricity', 101010, 'admin@admin.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
