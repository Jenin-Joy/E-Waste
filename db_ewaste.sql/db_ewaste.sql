-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 15, 2023 at 09:49 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ewaste`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_catageory`
--

CREATE TABLE `tbl_catageory` (
  `cat_id` int(11) NOT NULL auto_increment,
  `cat_name` varchar(20) NOT NULL,
  `cat_status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_catageory`
--

INSERT INTO `tbl_catageory` (`cat_id`, `cat_name`, `cat_status`) VALUES
(4, 'Food Waste', 0),
(5, 'Plastic Waste', 0),
(6, 'Electronic Waste', 0),
(7, 'Municipal Solid Wast', 1),
(8, 'Hazardous Waste', 1),
(9, 'Construction and Dem', 1),
(10, 'Biodegradable Waste', 1),
(11, 'Non biodegradable Wa', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `cmp_id` int(11) NOT NULL auto_increment,
  `cmp_date` date NOT NULL,
  `cmp_rdate` date NOT NULL,
  `cmp_content` varchar(500) NOT NULL,
  `pajayathe_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `to_status` char(1) NOT NULL,
  `cmp_status` char(1) NOT NULL default '0',
  `cmp_replay` varchar(500) NOT NULL default 'NA',
  PRIMARY KEY  (`cmp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`cmp_id`, `cmp_date`, `cmp_rdate`, `cmp_content`, `pajayathe_id`, `user_id`, `to_status`, `cmp_status`, `cmp_replay`) VALUES
(6, '2023-03-12', '0000-00-00', 'Someone is trying to crack the sit', 0, 60, '1', '0', 'NA'),
(7, '2023-03-12', '0000-00-00', 'Workers are not efficient', 0, 60, '2', '0', 'NA'),
(8, '2023-03-12', '0000-00-00', 'I am sorry to say, but some user behavior has been consistently inappropriate and disruptive.', 0, 58, '1', '0', 'NA'),
(9, '2023-03-12', '2023-03-12', 'I am sorry to say, but this user has been causing a lot of problems. Their behavior has been consistently inappropriate and disruptive. They have been repeatedly ignoring guidelines and rules set by the community, and their actions have caused conflict and tension among members. Despite numerous warnings and attempts to resolve the issue, they continue to engage in problematic behavior. I believe that their actions are damaging to the community and should not be tolerated.', 0, 58, '1', '1', 'i will fix it'),
(10, '2023-03-12', '0000-00-00', 'I have to say, I am disappointed with this work. There were a lot of errors and inconsistencies that made it difficult to follow. I was expecting a higher level of quality and attention to detail.', 0, 58, '2', '0', 'NA'),
(11, '2023-03-12', '2023-03-12', 'I am sorry to say, but I was extremely disappointed with this work. The quality was far below what I was expecting, with numerous errors and inconsistencies throughout. The overall organization and structure was also confusing, making it difficult to follow the main points being presented. Despite the significant amount of time and effort put into this work, it failed to meet even the basic requirements outlined. I am concerned about the implications this may have on our goals and expectations m', 0, 58, '2', '1', 'I will correct it'),
(12, '2023-03-12', '0000-00-00', 'I am sorry to say, but this user has been causing a lot of problems. Their behavior has been consistently inappropriate and disruptive. They have been repeatedly ignoring guidelines and rules set by the community, and their actions have caused conflict and tension among members. Despite numerous warnings and attempts to resolve the issue, they continue to engage in problematic behavior. I believe that their actions are damaging to the community and should not be tolerated.', 2, 0, '1', '0', 'NA'),
(13, '2023-03-12', '2023-03-12', 'I am sorry to say, but this user has been causing a lot of problems. Their behavior has been consistently inappropriate and disruptive. They have been repeatedly ignoring guidelines and rules set by the community, and their actions have caused conflict and tension among members. Despite numerous warnings and attempts to resolve the issue, they continue to engage in problematic behavior. I believe that their actions are damaging to the community and should not be tolerated.', 2, 0, '1', '1', 'ok i do the necessary steps'),
(14, '2023-03-13', '0000-00-00', 'some users in the site are fake', 0, 33, '1', '0', 'NA'),
(15, '2023-03-13', '0000-00-00', 'workers are not come properly', 0, 33, '2', '0', 'NA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_days`
--

CREATE TABLE `tbl_days` (
  `day_id` int(11) NOT NULL auto_increment,
  `day_name` varchar(10) NOT NULL,
  `day_desc` varchar(100) NOT NULL,
  `day_status` char(1) NOT NULL default '0',
  PRIMARY KEY  (`day_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `tbl_days`
--

INSERT INTO `tbl_days` (`day_id`, `day_name`, `day_desc`, `day_status`) VALUES
(10, 'Monday', '1,4,5,7\r\n', '0'),
(11, 'Tuesday', '2,8,9,10', '0'),
(12, 'Wednesday', '11,14', '0'),
(13, 'Thursday', '16', '0'),
(14, 'Friday', '17', '0'),
(15, 'Saturaday', '19,20', '0'),
(16, 'Sunday', 'Leave', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `fb_id` int(11) NOT NULL auto_increment,
  `fb_date` date NOT NULL,
  `fb_content` varchar(500) NOT NULL,
  `pajayathe_id` int(11) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `to_status` char(1) NOT NULL default '0',
  PRIMARY KEY  (`fb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`fb_id`, `fb_date`, `fb_content`, `pajayathe_id`, `user_id`, `to_status`) VALUES
(5, '2023-03-12', 'Good Site', 0, 60, '1'),
(6, '2023-03-12', 'Good Site', 0, 60, '1'),
(7, '2023-03-12', 'Good Work\r\n', 0, 60, '2'),
(8, '2023-03-12', 'Great site! Easy to navigate and the content is helpful and informative.', 0, 58, '1'),
(9, '2023-03-12', 'Your work is impressive! The attention to detail is evident and the results are outstanding. You sho', 0, 58, '2'),
(10, '2023-03-12', 'I just wanted to let you know that I am really impressed with your site The design is visually appea', 2, 0, '1'),
(11, '2023-03-12', 'I just wanted to let you know that I am really impressed with your site The design is visually appea', 2, 0, '1'),
(12, '2023-03-12', 'I just wanted to let you know that I am really impressed with your site The design is visually appea', 2, 0, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pajayathe`
--

CREATE TABLE `tbl_pajayathe` (
  `pajayathe_id` int(11) NOT NULL auto_increment,
  `pajayathe_name` varchar(100) NOT NULL,
  `pajayathe_contact` char(10) NOT NULL,
  `pajayathe_pincode` char(6) NOT NULL,
  `pajayathe_district` varchar(15) NOT NULL,
  `pajayathe_location` varchar(20) NOT NULL,
  `pajayathe_username` varchar(20) NOT NULL,
  `pajayathe_password` varchar(20) NOT NULL,
  `pajayathe_status` char(1) NOT NULL default '0',
  PRIMARY KEY  (`pajayathe_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_pajayathe`
--

INSERT INTO `tbl_pajayathe` (`pajayathe_id`, `pajayathe_name`, `pajayathe_contact`, `pajayathe_pincode`, `pajayathe_district`, `pajayathe_location`, `pajayathe_username`, `pajayathe_password`, `pajayathe_status`) VALUES
(2, 'Malayattoor Neeleeswaram Garma Panchayath', '9539891072', '683574', 'Ernakulam', 'Neeleeswaram', 'MNpanchayath', 'MNP123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL auto_increment,
  `user_name` varchar(15) NOT NULL,
  `user_contact` char(10) NOT NULL,
  `user_email` varchar(25) NOT NULL,
  `user_address` varchar(100) NOT NULL,
  `ward_id` int(11) NOT NULL,
  `user_hno` varchar(5) NOT NULL,
  `user_username` varchar(25) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `user_status` char(1) NOT NULL default '0',
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `user_contact`, `user_email`, `user_address`, `ward_id`, `user_hno`, `user_username`, `user_password`, `user_status`) VALUES
(31, 'Sarah', '1234567890', 'Sarah@gmail.com', 'Oak Grove Residence (h)\r\n Elm Street, Anytown, USA', 12, '11', 'sarah10', 'sarah123', '1'),
(32, 'John', '9876543210', 'john@gmail.com', ' Cedarwood House (h)\r\nOak Lane, London, UK', 16, '1', 'John2255', '2255john', '1'),
(33, 'Maria', '9987654321', 'maria@gmail.com', ' Maplewood Manor (h)\r\nMaple Avenue, Toronto, Canada', 31, '8', 'mariajoy', 'maria10joy', '1'),
(34, 'David', '9887654321', 'david@gmail.com', 'Elmwood Estate (h)\r\nPine Road, Sydney, Australia', 16, '4', 'david10', 'd10avid', '2'),
(35, 'Lisa', '9877654321', 'lisa@gmail.com', 'Birchwood Cottage (h)\r\nCedar Drive, Paris, France', 21, '5', 'Lisa', 'lisa10', '2'),
(36, 'Michael', '9876654321', 'michael@gmail.com', 'Pinecrest Place (h)\r\nBirch Lane, Rome, Italy', 30, '7', 'Michael', 'mic100', '2'),
(37, 'Jennifer', '9876554321', 'jennifer@gmail.com', 'Spruce Haven (h)\r\nCherry Street, Beijing, China', 15, '15', 'Jennifer', 'jeni55', '2'),
(38, 'James', '9876544321', 'james@gmail.com', 'Redwood Lodge (h)\r\nWalnut Avenue, Seoul, South Korea', 16, '22', 'James', 'james007', '2'),
(39, 'Jessica', '9876543321', 'jessica@gmail.com', 'Willow Springs Home (h)\r\nCedar Lane, Brussels, Belgium', 20, '2', 'Jessica', 'jess60', '0'),
(40, 'Robert', '9876543221', 'robert@gmail.com', 'Forest View Villa (h)\r\nOak Street, Dublin, Ireland', 21, '33', 'Robert', 'rob100', '0'),
(41, 'Emily', '9876543211', 'emily@gmail.com', 'Rosewood Retreat (h)\r\nMagnolia Avenue, Jejudo, South Korea', 12, '8', 'Emily', 'emily500', '0'),
(42, 'Daniel', '9876543200', 'daniel@gmail.com', 'Riverfront House (h)\r\nDogwood Lane, Toronto, Canada', 30, '1', 'Daniel', 'dan400', '0'),
(43, 'Samantha', '9876543100', 'samantha@gmail.com', 'Lakeside Villa (h)\r\nSpruce Street, Moscow, Russia', 12, '4', 'Samantha', 'sam1000', '0'),
(44, 'William', '9876540033', 'wlliam@gmail.com', 'Beachside Bungalow (h)\r\nBirch Road, London, UK', 12, '11', 'William', 'will200', '0'),
(45, 'Amamda', '9870065432', 'amamda@gmail.com', 'Mountain View Home (h)\r\nCedar Avenue, New York City, USA', 25, '22', 'Amamda', 'amamda10', '0'),
(46, 'Christopher', '9870054162', 'christopher@gmail.com', 'Meadowbrook Estate (h)\r\nElm Lane, Barcelona, Spain', 25, '16', 'Chris', 'chri200', '0'),
(47, 'Stephanie', '9800753246', 'stephaine@gmail.com', 'Hilltop Haven (h)\r\nOak Avenue, Singapore', 27, '18', 'Stephanie', 'step10', '0'),
(48, 'Matthew', '9005876421', 'matthew@gmail.com', 'Sunset Terrace (h)\r\nMaple Road, Edinburgh, UK', 27, '16', 'Matthew', 'Matthew10', '0'),
(49, 'Lauren', '9317862450', 'lauren@gmail.com', 'Ocean View Residence (h)\r\nPine Street, Shanghai, China', 12, '25', 'Lauren', 'Lauren55', '0'),
(50, 'Andrew', '8624931705', 'andrew@gmail.com', 'Garden Court House (h)\r\nCedar Lane, Paris, France', 31, '20', 'Andrew', 'Andrew99', '0'),
(51, 'Ashley', '9517534568', 'ashely@gmail.com', 'Sunny Acres Home (h)\r\nBirch Lane, Melbourne, Australia', 16, '5', 'Ashley', 'Ashley7', '0'),
(52, 'Nicholas', '6549873210', 'nicholas@gmail.com', 'Greenfield Cottage (h)\r\nWillow Drive, MontrÃ©al, Canada', 18, '7', 'Nicholas', 'Nicholas2', '0'),
(53, 'Rachel', '9118227330', 'rachel@gmail.com', 'Skyline House (h)\r\nDogwood Drive, Sydney, Australia', 19, '8', 'Rachel', 'Rachel700', '0'),
(54, 'Joshua', '9879873216', 'joshua@gmail.com', 'Wildwood Retreat (h)\r\nSpruce Street, London, UK', 20, '9', 'Joshua', 'Joshua1130', '0'),
(55, 'Elizabeth', '6547893215', 'elizabeth@gmail.com', 'Pineview Place (h)\r\nMagnolia Lane, Tokyo, Japan', 21, '10', 'Elizabeth', 'eli1000', '0'),
(56, 'Joseph', '9873213214', 'joseph@gmail.com', 'Waterfront Villa (h)\r\nCherry Lane, Vicenza, Italy', 22, '11', 'Joseph', 'joseph40', '0'),
(57, 'Megan', '9876546543', 'megan@gmail.com', ' Countryside Cottage (h)\r\nCedar Road, Beijing, China', 25, '14', 'Megan', 'm47egan', '0'),
(58, 'Benjamin', '9911773355', 'benjamin@gmail.com', 'Sunrise Ridge House (h)\r\nBirch Lane, St. Petersburg, Russia', 28, '17', 'Benju', 'benju007', '1'),
(59, 'Taylor', '8822446600', 'taylor@gmail.com', 'Ivy Lane Home (h)\r\nPine Avenue, Oxfordshire, UK', 30, '19', 'Taylor', 'Taylor88', '0'),
(60, 'Antony', '9539891072', 'antony@gmail.com', 'Stonebridge Estate (h)\r\nElm Street, Pasadena, California, USA', 31, '20', 'Antony', 'antony001', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ward`
--

CREATE TABLE `tbl_ward` (
  `ward_id` int(11) NOT NULL auto_increment,
  `ward_name` varchar(10) NOT NULL,
  `ward_status` int(1) NOT NULL default '0',
  PRIMARY KEY  (`ward_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tbl_ward`
--

INSERT INTO `tbl_ward` (`ward_id`, `ward_name`, `ward_status`) VALUES
(12, 'Ward 1', 0),
(13, 'Ward 2', 0),
(14, 'Ward 3', 1),
(15, 'Ward 4', 0),
(16, 'Ward 5', 0),
(17, 'Ward 6', 1),
(18, 'Ward 7', 0),
(19, 'Ward 8', 0),
(20, 'Ward 9', 0),
(21, 'Ward 10', 0),
(22, 'Ward 11', 0),
(23, 'Ward 12', 1),
(24, 'Ward 13', 1),
(25, 'Ward 14', 0),
(26, 'Ward 15', 1),
(27, 'Ward 16', 0),
(28, 'Ward 17', 0),
(29, 'Ward 18', 1),
(30, 'Ward 19', 0),
(31, 'Ward 20', 0),
(32, 'Ward 21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_waste`
--

CREATE TABLE `tbl_waste` (
  `waste_id` int(11) NOT NULL auto_increment,
  `cat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `waste_content` int(10) NOT NULL,
  `waste_date` date NOT NULL,
  `waste_adate` date NOT NULL,
  `waste_cdate` date NOT NULL,
  `waste_status` char(1) NOT NULL default '0',
  PRIMARY KEY  (`waste_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_waste`
--

INSERT INTO `tbl_waste` (`waste_id`, `cat_id`, `user_id`, `waste_content`, `waste_date`, `waste_adate`, `waste_cdate`, `waste_status`) VALUES
(5, 5, 60, 3, '2023-03-12', '2023-03-13', '2023-03-13', '2'),
(6, 6, 60, 4, '2023-03-12', '0000-00-00', '0000-00-00', '0'),
(7, 4, 60, 8, '2023-03-13', '0000-00-00', '0000-00-00', '0'),
(8, 6, 60, 3, '2023-03-13', '2023-03-13', '0000-00-00', '1'),
(9, 5, 58, 4, '2023-03-13', '0000-00-00', '0000-00-00', '0'),
(10, 4, 33, 4, '2023-03-13', '2023-03-13', '0000-00-00', '1'),
(11, 6, 33, 6, '2023-03-13', '0000-00-00', '0000-00-00', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_worker`
--

CREATE TABLE `tbl_worker` (
  `worker_id` int(11) NOT NULL auto_increment,
  `worker_name` varchar(25) NOT NULL,
  `worker_contact` char(10) NOT NULL,
  `worker_status` char(1) NOT NULL default '0',
  PRIMARY KEY  (`worker_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `tbl_worker`
--

INSERT INTO `tbl_worker` (`worker_id`, `worker_name`, `worker_contact`, `worker_status`) VALUES
(15, 'Michael', '9987654321', '0'),
(16, 'James', '9876543210', '0'),
(17, 'Robert', '9887654321', '1'),
(18, 'Matthew', '9877654321', '1'),
(19, 'Nicholas', '9876654321', '1');
