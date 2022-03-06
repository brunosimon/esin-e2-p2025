-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 24, 2018 at 11:36 PM
-- Server version: 5.6.38
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hetic_p2021_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `text`, `date`) VALUES
(1, 'Elit aliquip dolore laborum laboris.', 'Occaecat culpa anim do sunt non commodo non esse in aliquip esse proident duis do. Tempor fugiat quis consequat consectetur aliqua dolore consectetur qui culpa. Commodo est nisi officia proident ipsum dolore voluptate Lorem veniam quis laborum dolore id minim. Deserunt aliqua pariatur id proident nisi. Anim minim aliqua Lorem proident dolor do est laboris voluptate eu. Minim enim deserunt elit fugiat dolore ipsum in. Irure consectetur proident sint nostrud est sit anim Lorem nulla in voluptate.\r\n\r\nExercitation dolor sit sint nostrud laborum ullamco esse id irure adipisicing. Sint excepteur incididunt ullamco sit quis commodo qui commodo velit. Qui ad aliquip excepteur nostrud ex enim ea velit consequat esse culpa aliquip ad.\r\n\r\nEx fugiat mollit Lorem esse tempor consequat proident enim. Ullamco ut aliquip consectetur laboris labore in duis officia eiusmod fugiat. Eu aute veniam minim labore mollit eiusmod exercitation excepteur. Exercitation irure nulla tempor exercitation consectetur amet ex excepteur veniam anim.', 1520948683),
(2, 'Nisi aute do ad Lorem', 'Ex incididunt laborum id ut amet non. Minim velit aute magna nulla. Labore elit eiusmod do exercitation qui officia anim ex dolor ipsum laborum tempor ex. Reprehenderit do nisi exercitation pariatur fugiat ipsum et dolore. Sit laboris eiusmod nostrud qui sint commodo ad deserunt.\r\n\r\nExcepteur irure ullamco velit fugiat in ullamco cillum ipsum culpa excepteur. Voluptate minim pariatur qui esse minim occaecat tempor. Lorem laborum laboris id culpa eiusmod tempor et. Labore ea proident ea aute nisi cupidatat exercitation eiusmod. Et enim nostrud culpa consequat mollit est aliqua sint dolore excepteur dolor enim cupidatat adipisicing. Sunt sint excepteur Lorem fugiat ipsum deserunt dolor et esse officia ex in dolore mollit. Ullamco pariatur ut amet Lorem.', 1521550603),
(3, 'Reprehenderit sint', 'Adipisicing veniam non aliqua eu. Deserunt ea velit est Lorem amet sit cillum laborum ipsum id quis id. Mollit ex laboris esse cillum sunt deserunt duis exercitation. Consequat eiusmod exercitation elit in aliqua ea esse id ipsum cupidatat incididunt quis ullamco. Fugiat velit reprehenderit ullamco irure in dolore exercitation. Laboris quis officia excepteur laboris Lorem ex in commodo dolor eiusmod ad quis incididunt.\r\n\r\nConsectetur deserunt labore laborum minim deserunt culpa commodo tempor mollit officia culpa. Eu ex non sit fugiat enim minim deserunt anim laboris labore Lorem. Qui enim consectetur labore cillum do sunt ullamco amet qui dolor do cillum. Laboris irure ea sunt occaecat minim amet ea Lorem. Lorem culpa ea commodo nisi ea adipisicing.', 1521842203),
(4, 'Dolor ad dolore cillum pariatur', 'Irure dolore elit magna voluptate amet ad est. Ipsum labore irure quis labore voluptate duis nulla pariatur incididunt culpa velit voluptate culpa ipsum. Esse consequat enim sint excepteur sit deserunt sit do incididunt excepteur. Esse amet id aute mollit est pariatur nulla ex cillum esse eu ea est ad. Ex dolor excepteur reprehenderit aliqua tempor ut officia reprehenderit do. Eiusmod irure in anim duis et. Occaecat nostrud laboris id aliqua eu officia eiusmod deserunt do commodo irure sint cillum minim.', 1519739083);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `id_article`, `text`) VALUES
(1, 3, 'Culpa tempor cillum fugiat nostrud. Fugiat et quis culpa incididunt voluptate dolor exercitation. Tempor exercitation laborum est commodo in. Pariatur anim dolor labore amet deserunt tempor. Nostrud exercitation nostrud aute amet.'),
(2, 1, 'Adipisicing non ad aliquip sunt labore qui culpa do proident aute qui ut ut velit. Nisi reprehenderit pariatur tempor eu reprehenderit sint. Irure minim nostrud ut voluptate enim ea sunt ut duis.'),
(3, 1, 'Ad aliquip consequat quis magna id nisi. Commodo anim dolore in amet pariatur sunt ut voluptate eu. Aute aliquip enim est qui nisi proident proident voluptate sunt. Eu magna exercitation eiusmod aute aliqua excepteur eu deserunt laborum proident ad ex. Voluptate magna voluptate proident non qui. Mollit reprehenderit aute sint proident magna cillum fugiat. Ad laborum ad consequat duis qui est.'),
(4, 4, 'Ad voluptate aute veniam reprehenderit ipsum in. Aute tempor nostrud incididunt pariatur culpa enim sit duis ad mollit. Sint consequat elit cillum ut non in proident aute ex consectetur proident. Sit enim anim laborum reprehenderit ea aute exercitation exercitation laboris ullamco.'),
(5, 3, 'Ipsum qui Lorem ut ipsum et aliquip elit fugiat eu ullamco tempor ullamco irure. Commodo officia deserunt qui officia nostrud duis. Aute aute fugiat quis nostrud in mollit occaecat. Dolore officia mollit quis reprehenderit veniam culpa. Excepteur anim veniam culpa commodo veniam laborum et esse qui laboris et tempor id est.'),
(6, 1, 'Esse eiusmod officia fugiat Lorem dolor ea sint. Enim consectetur culpa cupidatat velit excepteur sunt officia. Commodo ea minim veniam sint Lorem sint do culpa non fugiat pariatur id. In culpa fugiat tempor in fugiat aliqua amet quis esse enim amet nisi. Duis non cupidatat enim officia amet ex anim anim magna excepteur.'),
(7, 3, 'Cillum cupidatat velit ipsum aliqua irure quis esse consequat elit. Et ut dolor tempor veniam aliquip aute cillum aliqua occaecat proident. Veniam proident laborum deserunt enim labore ipsum.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
