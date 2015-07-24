-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2015 at 05:57 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu1`
--

CREATE TABLE IF NOT EXISTS `menu1` (
  `id` int(3) NOT NULL,
  `code` varchar(15) NOT NULL,
  `item` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  PRIMARY KEY (`item`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu1`
--

INSERT INTO `menu1` (`id`, `code`, `item`, `category`, `price`) VALUES
(1, 'bksb', 'Burger King Suicide Burger', 'SecretMenuItems', '150.00'),
(1, 'cq', 'Chipotle Quesarito', 'SecretMenuItems', '120.40'),
(1, 'dqfhc', 'Dairy Queen Frozen Hot Chocolate', 'SecretMenuItems', '190.00'),
(1, 'ino', 'In N Out', 'SecretMenuItems', '160.00'),
(1, 'jjpb&jsm', 'Jamba Juice PB And JS Moothie', 'SecretMenuItems', '190.00'),
(1, 'kfcd&td', 'KFC Double and Triple Down', 'SecretMenuItems', '250.50'),
(1, 'kfcp', 'KFC Poutine', 'SecretMenuItems', '280.00'),
(1, 'lbs', 'Lavender Blue Sundae', 'SecretMenuItems', '190.00'),
(1, 'McDPieMcFF', 'McDonalds Pie McFlurry Foods', 'SecretMenuItems', '220.50'),
(1, 'sbf', 'Starbucks Biscotti Frappuccino', 'SecretMenuItems', '280.00'),
(2, 'bwl', 'Banana Walnut Lassi', 'beverages', '120.00'),
(2, 'cdm', 'Classic Dry Martini', 'beverages', '80.50'),
(2, 'cm', 'Classic Mojito', 'beverages', '180.00'),
(2, 'css', 'Classic Sangria Shatbhi', 'beverages', '160.00'),
(2, 'e', 'Eternity', 'beverages', '130.80'),
(2, 'g', 'Gimlet', 'beverages', '100.00'),
(2, 'gn', 'Grape Nectar', 'beverages', '160.50'),
(2, 'hc', 'Hot Chocolate ', 'beverages', '120.00'),
(2, 'hfp', 'Hot Fruit Punch', 'beverages', '200.00'),
(2, 'it', 'Iced Tea', 'beverages', '80.00'),
(2, 'kd', 'Kesaria Doodh', 'beverages', '90.60'),
(2, 'pc', 'Pina Colada', 'beverages', '140.00'),
(2, 'tssvbk', 'The Sassy Spoon Very Berry Khatta', 'beverages', '220.00'),
(2, 'vcc', 'Virgin Cucumber Cooler', 'beverages', '210.00'),
(2, 'wm', 'Water Melonggranita', 'beverages', '190.50'),
(3, 'aibcb', 'All In Beer Cheese Burger', 'snacks', '280.00'),
(3, 'bwhd', 'Bacon Wrapped Hot Dog', 'snacks', '170.00'),
(3, 'cp', 'Creamy Polenta', 'snacks', '180.00'),
(3, 'hadb', 'Huevo Al Diablo', 'snacks', '200.00'),
(3, 'ohp', 'Octopus Hush Puppies', 'snacks', '220.50'),
(3, 'pc', 'Pub Cheese', 'snacks', '150.00'),
(3, 'rc&pt', 'Red Chorizo & Potato Taco', 'snacks', '140.00'),
(3, 'sfs&rc', 'Smoked Fish Spread  & Rye Crackers', 'snacks', '250.00'),
(3, 'sggw', 'Soy Garlic Ginger Wings', 'snacks', '190.00'),
(3, 't', 'Tsukune', 'snacks', '180.60'),
(3, 'vc', 'Veggie Chips', 'snacks', '120.80'),
(3, 'wboc', 'Warm Bag Of Croutons', 'snacks', '190.80'),
(4, 'bps', 'Baked Potato Soup', 'soups', '190.00'),
(4, 'cawrs', 'Chicken and Wild Rice Soup', 'soups', '220.00'),
(4, 'cvswh', 'Chicken Verde Stew with Hominy', 'soups', '180.00'),
(4, 'cccs', 'Coconut Curry Chicken Soup', 'soups', '200.00'),
(4, 'gm', 'Garden Minestrone', 'soups', '175.50'),
(4, 'islal', 'Indian Spiced Lentils and Lamb', 'soups', '150.00'),
(4, 'necc', 'New England Clam Chowder', 'soups', '190.00'),
(4, 'nwbs', 'North Woods Bean Soup', 'soups', '160.70'),
(4, 'rbsass', 'Roasted Butternut Squash and Shallot Soup', 'soups', '185.00'),
(4, 'rcns', 'Roasted Chicken Noodle Soup', 'soups', '210.00'),
(4, 'ssacc', 'Summer Squash and Corn Chowder', 'soups', '140.00'),
(4, 'tbvc', 'Three Bean Vegetarian Chili', 'soups', '180.00'),
(4, 'tbs', 'Tomato Basil Soup', 'soups', '145.00'),
(4, 'tms', 'Tortilla Meatball Soup', 'soups', '240.00'),
(4, 'tabc', 'Turkey and Bean Chili', 'soups', '205.50'),
(5, 'afr', 'Asparagus Fried Rice', 'rice', '280.50'),
(5, 'cs', 'Cajun Shrimp', 'rice', '290.00'),
(5, 'cbrb', 'Chicken Broccoli Rice Bowl', 'rice', '320.00'),
(5, 'cr', 'Chicken Rice', 'rice', '250.00'),
(5, 'fr', 'Fried Rice', 'rice', '180.00'),
(5, 'pscar', 'Paella Style Chicken And Rice', 'rice', '300.50'),
(5, 'pc', 'Peanut Chicken', 'rice', '200.00'),
(5, 'rbr', 'Red Beans Rice', 'rice', '190.00'),
(5, 'sprs', 'Shrimp Pesto Rice Salad', 'rice', '215.00'),
(6, 'cars', 'Chicken And Rice Soup', 'starter', '170.00'),
(6, 'ccs', 'Chinese Chicken Salad', 'starter', '140.00'),
(6, 'cl', 'Crab Louis', 'starter', '185.00'),
(6, 'csafp', 'Crustless Spinach  And Feta Pies', 'starter', '140.70'),
(6, 'gs', 'Grain Salad', 'starter', '75.80'),
(6, 'hcs', 'Healthy Chicken Satay', 'starter', '88.90'),
(6, 'mmdgc', 'Mini Masala Dosa Green Chutney', 'starter', '70.80'),
(6, 'pc', 'Panko Chicken', 'starter', '100.00'),
(6, 'prppmr', 'Parmigiano Reggiano Pumpkin Porcini Mushroom Risotto', 'starter', '95.80'),
(6, 'pp', 'Pizza Pockets', 'starter', '145.50'),
(6, 'sap', 'Sag And Paneer', 'starter', '87.00'),
(6, 'sccsrswcag', 'Slow Cooked Chinese Style Rice Soup With Chicken And Ginger', 'starter', '160.70'),
(6, 'tg', 'Tenderstem Galette', 'starter', '88.00'),
(6, 'wmawm', 'Wild Mushroom Arancini With Mozzarella', 'starter', '155.00'),
(7, 'bsss', 'Black Sesame Shaved Snow', 'desserts', '215.00'),
(7, 'c', 'Cannoli', 'desserts', '166.00'),
(7, 'ccc', 'Chocolate Chunk Cookie', 'desserts', '95.00'),
(7, 'cs', 'Cookie Shot', 'desserts', '90.00'),
(7, 'hd', 'Halva Donut', 'desserts', '110.50'),
(7, 'hm', 'Husk Meringue', 'desserts', '75.00'),
(7, 'scps', 'Salted Caramel Pretzel Standard', 'desserts', '175.80'),
(7, 'spss', 'Salty Pistachio Soft Serve', 'desserts', '195.50'),
(8, '5tv', '5-Treasure Vegetables', 'mainCourseVeg', '275.00'),
(8, '8tv', '8-Treasure Vegetables', 'mainCourseVeg', '320.00'),
(8, 'anpirr', 'Aliv Nutri Paratha Iron Rich Recipe', 'mainCourseVeg', '220.00'),
(8, 'ct', 'Celeriac Tart', 'mainCourseVeg', '255.00'),
(8, 'cbcww', 'Chocolate Bean Chilli With Walnuts', 'mainCourseVeg', '300.00'),
(8, 'cfamf', 'Courgette Feta And Mint Frittata', 'mainCourseVeg', '335.00'),
(8, 'ccfwrsabawr', 'Crispy Cauliflower Florets With Romesco Sauce And Basmati And Wild Rice', 'mainCourseVeg', '288.00'),
(8, 'gwspacl', 'Gnocchi With Spinach Pesto And Caramelised Leeks', 'mainCourseVeg', '245.50'),
(8, 'matr', 'Mushroom And Taleggio Risotto', 'mainCourseVeg', '300.00'),
(8, 'pomgsp', 'Pilaf Of Mixed Grains Sweet Potato And Fennel With Avocado Cream', 'mainCourseVeg', '295.00'),
(8, 'qrwpas', 'Quinoa Risotto With Pumpkin And Spinach', 'mainCourseVeg', '280.80'),
(8, 'sacbr', 'Shallot And Chicory Baked Rotolo With Hazelnuts', 'mainCourseVeg', '295.00'),
(8, 'sbcbss', 'Spicy Butterbean Chickpea And Butternut Squash Stew', 'mainCourseVeg', '355.00'),
(8, 'sapc', 'Spinach And Paneer Curry', 'mainCourseVeg', '300.00'),
(9, 'cbm', 'Chicken Butter Masala', 'mainCourseNonVeg', '300.00'),
(9, 'chm', 'Chicken Hariyali Masala', 'mainCourseNonVeg', '310.00'),
(9, 'ckc', 'Chicken Kofta Curry', 'mainCourseNonVeg', '290.55'),
(9, 'cmc', 'Chicken Mushroom Curry', 'mainCourseNonVeg', '350.00'),
(9, 'cpc', 'Chicken Potato Curry', 'mainCourseNonVeg', '285.50'),
(9, 'ctm', 'Chicken Tikka Masala', 'mainCourseNonVeg', '300.50'),
(9, 'ccc', 'Coriander Chicken Curry', 'mainCourseNonVeg', '95.00'),
(9, 'epc', 'Egg Poatato Curry', 'mainCourseNonVeg', '240.50'),
(9, 'kc', 'Kheema Curry', 'mainCourseNonVeg', '290.00'),
(9, 'mc', 'Meatball Curry', 'mainCourseNonVeg', '325.00'),
(9, 'mm', 'Mutton Masala', 'mainCourseNonVeg', '360.00'),
(9, 'pm', 'Prawn Masala', 'mainCourseNonVeg', '300.00'),
(9, 'tmbc', 'Turkey Meat Balls Curry', 'mainCourseNonVeg', '365.00');

-- --------------------------------------------------------

--
-- Table structure for table `tablebooking`
--

CREATE TABLE IF NOT EXISTS `tablebooking` (
  `id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `persons` int(2) NOT NULL,
  `date1` date NOT NULL,
  `time` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tablebooking`
--

INSERT INTO `tablebooking` (`id`, `name`, `email`, `persons`, `date1`, `time`, `status`) VALUES
('802838836', 'ANUP', 'anup@gmail.com', 7, '2015-06-10', '14:22', 'CONFIRM'),
('640484902', 'anurag', 'anuragyadavkool@gmail.com', 50, '2015-06-25', '17:05', 'CONFIRM'),
('1976800393', 'pratyush', 'p@gmail.com', 4, '2015-07-16', '15:30', 'CONFIRM'),
('379263928', 'RAVI', 'r@gmail.com', 5, '2015-07-16', '14:30', 'CONFIRM'),
('676083211', 'yuvraz', 'y@gmail.com', 5, '2015-07-16', '14:30', 'Pending'),
('1054929355', 'RS yadav', 'rs@gmail.com', 5, '2031-06-12', '12:30', 'CONFIRM'),
('1954892854', 'AGNISH', 'A@gmail.com', 5, '2015-07-10', '13:30', 'CONFIRM'),
('21729431', 'anurag', 'anuragyadavkool@gmail.com', 3, '2015-06-09', '15:03', 'CANCELLED'),
('1282840363', 'anurag', 'anuragyadavkool@gmail.com', 3, '2015-06-12', '15:03', ''),
('1337596065', 'R S yadav', 'anuragyadavkool@gmail.com', 1, '2015-06-03', '02:22', 'CONFIRM'),
('1263549797', 'anurag', 'anuragyadavkool@gmail.com', 3, '2015-06-04', '15:33', ''),
('1174726892', 'vikas', 'vvknid@gmail.com', 50, '2017-06-15', '14:02', ''),
('138511089', 'anurag', 'anuragyadavkool@gmail.com', 4, '2015-06-17', '16:04', ''),
('1858941227', 'anurag', 'anuragyadavkool@gmail.com', 4, '2015-06-03', '15:03', 'CANCELLED'),
('369725970', 'Sid', 'sid@gmail.com', 2, '2015-07-24', '14:22', 'Pending'),
('299270769', 'SHREYA', 'S@gmail.com', 7, '2023-06-15', '14:30', 'CONFIRM'),
('1118026920', 'AAyush', 'DNS@gmail.com', 7, '2015-06-11', '02:02', 'Pending'),
('1193902504', 'anurag', 'anuragyadavkool@gmail.com', 3, '2015-06-12', '15:33', ''),
('1889093527', 'anurag', 'anuragyadavkool@gmail.com', 3, '2015-06-03', '03:03', ''),
('11804189', 'RAMA Shankar yadav', 'rsy@gmail.com', 5, '2015-06-26', '15:03', ''),
('1379865401', 'asdas', 'asdasd@gmail.com', 5, '2015-06-18', '14:02', ''),
('936286637', 'anup', 'anup@gmail.com', 30, '2015-06-26', '14:02', 'CONFIRM'),
('410035938', 'Anurag Yadav', 'anuragyadavkiit@gmail.com', 5, '2015-07-04', '14:30', 'Pending'),
('632533595', 'Asha', 'asha@gmail.com', 20, '2015-06-25', '01:01', 'Pending'),
('260303864', 'sasa', 'anuragyadavkool@gmail.com', 2, '2015-06-10', '14:02', 'Pending'),
('121917073', 'anurag', 'anuragyadavkool@gmail.com', 2, '2015-06-17', '15:30', 'Pending'),
('546174322', 'anurag', 'anuragyadavkool@gmail.com', 2, '2015-06-28', '10:30', 'Pending'),
('1780719401', 'yuvraj', 'yv@gmail.com', 3, '2015-06-19', '01:01', 'CONFIRM'),
('428583419', 'anurag', 'anuragyadavkool@gmail.com', 3, '2015-06-10', '15:03', 'Pending'),
('906019886', 'Karan', 'karan@gmail.com', 5, '2015-06-19', '01:01', 'CONFIRM'),
('1668630748', 'Kriti', 'something@gmail.com', 5, '2015-06-18', '15:30', 'Pending'),
('1031304281', 'GEMINI', 'g@gmail.com', 5, '2015-07-22', '14:30', 'Pending'),
('279130306', 'Kashis', 'gemini@gmail.com', 5, '2015-07-16', '14:30', 'CONFIRM'),
('1782056481', 'Chandim', 'c@gmail.com', 6, '2015-07-17', '14:01', 'CONFIRM'),
('1743174819', 'xyz', 'x@mail.com', 5, '2015-07-17', '03:00', 'CONFIRM'),
('248745563', 'Jadu', 'j@gmail.com', 5, '2015-07-24', '14:30', 'CONFIRM'),
('493557611', 'INDER', 'i@gmail.com', 5, '2015-07-16', '15:30', 'CONFIRM'),
('418269063', 'Karan', 'k@gmail.com', 7, '2015-07-17', '15:00', 'CONFIRM');

-- --------------------------------------------------------

--
-- Table structure for table `visitorcomment`
--

CREATE TABLE IF NOT EXISTS `visitorcomment` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitorcomment`
--

INSERT INTO `visitorcomment` (`id`, `name`, `comment`) VALUES
(1954892854, 'AGNISH', 'Will visit again....'),
(369725970, 'Sid', 'its very good'),
(248745563, 'Jadu', 'its good'),
(906019886, 'Karan', 'surely i will visit again...'),
(676083211, 'yuvraz', 'its vey bauuu....'),
(279130306, 'Kashis', 'food is good\r\n'),
(1782056481, 'Chandim', 'its very good');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
