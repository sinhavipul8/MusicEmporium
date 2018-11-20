SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `grievance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(12) NOT NULL,
  `subject` varchar(2500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `eprice` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `rating` float NOT NULL,
  `spec` varchar(1000) NOT NULL,
  `about` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pay` int(11) NOT NULL,
  PRIMARY KEY (`payment_id`),
  KEY `user_id` (`user_id`),
  KEY `pay` (`pay`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=222 ;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `address` varchar(3000) NOT NULL,
  `landmark` varchar(1000) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `profile` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;


INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `country`, `address`, `landmark`, `phone`, `profile`) VALUES
(3, 'Vipul', 'sinhavipul8@gmail.com', 'qwerty', '7077114184', 'Varanasi', 'UP', '', '', '', 'images/uploads/fac1.jpg');


CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

INSERT INTO `database`.`items` (`id`, `name`, `brand`, `price`, `eprice`, `image`, `rating`, `spec`, `about`) VALUES (1, 'Beats EP ML9D2ZM/A On-Ear Headphones (Blue)', 'Beats', 9000, 7252, 'beats1.jpg', 4.3, 'Fine-tuned acoustics for the clarity and depth you expect from Beats
Durable, lightweight design reinforced with stainless steel
Adjustable vertical sliders for a personalized fit
Take calls and control your music with RemoteTalk cable', 'Beats ep ml992ll/a wired headphones in black enter premium sound beats ep on-ear headphones deliver masterfully tuned sound the way it was meant to be heard. Powered by fine-tuned acoustics for incredible clarity, breadth and balance, they are the ideal introduction to beats for any music lover. Built for life beats ep headphones are tough, lightweight and comfortable. Their durable frame is reinforced with stainless steel and aDJustable vertical sliders allow for personalised comfort. Designed for everyday use. Grab and go beats ep headphones are designed to go everywhere you do. Their battery-free design offers unlimited playback and a hassle-free, fixed cable lets you focus on the music. Just grab and go. Fine-tuned acoustics for the clarity and depth you expect from beats durable, lightweight design reinforced with stainless steel battery-free for unlimited playback aDJustable vertical sliders for a personalised fit take calls and control your music with the remote talk cable. Compatible with iOS devices. Functionality may vary by device.

');
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=106 ;

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(104, 3, 1, 'paid'),
(105, 3, 1, 'unpaid');
