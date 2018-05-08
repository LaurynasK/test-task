-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2018 at 08:47 AM
-- Server version: 5.5.57-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zet-test-task`
--

-- --------------------------------------------------------

--
-- Table structure for table `File`
--
DROP TABLE IF EXISTS `File`;

CREATE TABLE IF NOT EXISTS `File` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(256) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `tags` text,
  `keywords` text,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `restored_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `File`
--

INSERT INTO `File` (`id`, `name`, `title`, `size`, `tags`, `keywords`, `created_at`, `updated_at`, `deleted_at`, `restored_at`) VALUES
(45, '_89716241_thinkstockphotos-523060154.jpg', 'Gambling', 30168, '["Gambling","Luck"]', '{"name":"_89716241_thinkstockphotos-523060154.jpg","type":"image\\/jpeg","tmp_name":"\\/tmp\\/phphm3iFM","error":0,"size":30168,"title":"Gambling","tags":"[\\"Gambling\\",\\"Luck\\"]"}', '2018-05-08 08:25:38', NULL, NULL, NULL),
(46, '1_17.jpg', 'mb car', 34839, '["car","auto show","red","mb"]', '{"name":"1_17.jpg","type":"image\\/jpeg","tmp_name":"\\/tmp\\/phptydRpv","error":0,"size":34839,"title":"mb car","tags":"[\\"car\\",\\"auto show\\",\\"red\\",\\"mb\\"]"}', '2018-05-08 08:26:40', NULL, NULL, NULL),
(47, '9uq0lzW.jpg', 'satellites', 770921, '["satellites","night","blue","dark","connection","radio"]', '{"name":"9uq0lzW.jpg","type":"image\\/jpeg","tmp_name":"\\/tmp\\/phplmuO7o","error":0,"size":770921,"title":"satellites","tags":"[\\"satellites\\",\\"night\\",\\"blue\\",\\"dark\\",\\"connection\\",\\"radio\\"]"}', '2018-05-08 08:27:48', NULL, NULL, NULL),
(48, '92cc6738caa1e06c8dd25e5b83f3a855.png', 'minecraft', 381498, '["minecraft","night","green","grass","darkman"]', '{"name":"92cc6738caa1e06c8dd25e5b83f3a855.png","type":"image\\/png","tmp_name":"\\/tmp\\/phpSilwZb","error":0,"size":381498,"title":"minecraft","tags":"[\\"minecraft\\",\\"night\\",\\"green\\",\\"grass\\",\\"darkman\\"]"}', '2018-05-08 08:28:25', NULL, NULL, NULL),
(49, '246x0w.jpg', 'google app', 5359, '["google","app","logo"]', '{"name":"246x0w.jpg","type":"image\\/jpeg","tmp_name":"\\/tmp\\/phpGrsYWc","error":0,"size":5359,"title":"google app","tags":"[\\"google\\",\\"app\\",\\"logo\\"]"}', '2018-05-08 08:28:59', NULL, NULL, NULL),
(50, '6569c5b3c8a8f5669344acbd20c5e06a.png', 'hoodie', 170116, '["hoodie","cammo","green","sign"]', '{"name":"6569c5b3c8a8f5669344acbd20c5e06a.png","type":"image\\/png","tmp_name":"\\/tmp\\/phpQ8tFfz","error":0,"size":170116,"title":"hoodie","tags":"[\\"hoodie\\",\\"cammo\\",\\"green\\",\\"sign\\"]"}', '2018-05-08 08:29:35', NULL, NULL, NULL),
(51, '750806.jpg', 'broccoli ', 141162, '["broccoli","tree look"]', '{"name":"750806.jpg","type":"image\\/jpeg","tmp_name":"\\/tmp\\/phpaTYncX","error":0,"size":141162,"title":"broccoli ","tags":"[\\"broccoli\\",\\"tree look\\"]"}', '2018-05-08 08:30:09', NULL, NULL, NULL),
(52, '5187632-photo-wallpapers.jpg', 'City', 709734, '["City","blue","lights","night","wallpaper"]', '{"name":"5187632-photo-wallpapers.jpg","type":"image\\/jpeg","tmp_name":"\\/tmp\\/phpp2ilHh","error":0,"size":709734,"title":"City","tags":"[\\"City\\",\\"blue\\",\\"lights\\",\\"night\\",\\"wallpaper\\"]"}', '2018-05-08 08:31:07', NULL, NULL, NULL),
(53, '5187660-photo-wallpapers.jpg', 'blue wallpaper', 625539, '["blue","wood","wallpaper"]', '{"name":"5187660-photo-wallpapers.jpg","type":"image\\/jpeg","tmp_name":"\\/tmp\\/phpQgYAtA","error":0,"size":625539,"title":"blue wallpaper","tags":"[\\"blue\\",\\"wood\\",\\"wallpaper\\"]"}', '2018-05-08 08:31:33', NULL, NULL, NULL),
(54, '31503350_10156489063928104_5734003677732012032_n.jpg', 'morning ', 66349, '["morning","trees","sun","light"]', '{"name":"31503350_10156489063928104_5734003677732012032_n.jpg","type":"image\\/jpeg","tmp_name":"\\/tmp\\/phpUQWr02","error":0,"size":66349,"title":"morning ","tags":"[\\"morning\\",\\"trees\\",\\"sun\\",\\"light\\"]"}', '2018-05-08 08:32:18', NULL, NULL, NULL),
(55, '450585628.jpg', 'GTA V', 82398, '["gta","v","motorcycle","mission"]', '{"name":"450585628.jpg","type":"image\\/jpeg","tmp_name":"\\/tmp\\/php01OUYm","error":0,"size":82398,"title":"GTA V","tags":"[\\"gta\\",\\"v\\",\\"motorcycle\\",\\"mission\\"]"}', '2018-05-08 08:32:48', NULL, NULL, NULL),
(56, 'christmas-jesus_funny_birthday.png', 'Birtday', 356389, '["black lady","Jesus","birthday","happy","meme"]', '{"name":"christmas-jesus_funny_birthday.png","type":"image\\/png","tmp_name":"\\/tmp\\/phpJHQIUc","error":0,"size":356389,"title":"Birtday","tags":"[\\"black lady\\",\\"Jesus\\",\\"birthday\\",\\"happy\\",\\"meme\\"]"}', '2018-05-08 08:33:44', NULL, NULL, NULL),
(57, 'embed2.jpg', 'cat', 32172, '["cat","jump","high"]', '{"name":"embed2.jpg","type":"image\\/jpeg","tmp_name":"\\/tmp\\/phpeZ1PoV","error":0,"size":32172,"title":"cat","tags":"[\\"cat\\",\\"jump\\",\\"high\\"]"}', '2018-05-08 08:34:22', NULL, NULL, NULL),
(58, 'get.gif', 'gif', 1012688, '["work","winter","manual labor"]', '{"name":"get.gif","type":"image\\/gif","tmp_name":"\\/tmp\\/phpQubY1q","error":0,"size":1012688,"title":"gif","tags":"[\\"work\\",\\"winter\\",\\"manual labor\\"]"}', '2018-05-08 08:34:52', NULL, NULL, NULL),
(59, 'Frog.jpg', 'black white frog', 38918, '["Frog","black","and","white"]', '{"name":"Frog.jpg","type":"image\\/jpeg","tmp_name":"\\/tmp\\/phpQQjEG6","error":0,"size":38918,"title":"black white frog","tags":"[\\"Frog\\",\\"black\\",\\"and\\",\\"white\\"]"}', '2018-05-08 08:36:51', NULL, NULL, NULL),
(60, 'pexels-photo.jpg', 'wallpaper green', 49314, '["Green","wallpaper","tracks"]', '{"name":"pexels-photo.jpg","type":"image\\/jpeg","tmp_name":"\\/tmp\\/phpm6IRqI","error":0,"size":49314,"title":"wallpaper green","tags":"[\\"Green\\",\\"wallpaper\\",\\"tracks\\"]"}', '2018-05-08 08:37:57', NULL, NULL, NULL),
(61, 'new-image-for-blog-post.gif', 'new ', 10513, '["new","brand"]', '{"name":"new-image-for-blog-post.gif","type":"image\\/gif","tmp_name":"\\/tmp\\/phpc8Kjrn","error":0,"size":10513,"title":"new ","tags":"[\\"new\\",\\"brand\\"]"}', '2018-05-08 08:39:56', NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
