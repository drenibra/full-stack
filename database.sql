-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 07:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekti`
--

-- --------------------------------------------------------

--
-- Table structure for table `kompania`
--

CREATE TABLE `kompania` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `ceo` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `logo` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kompania`
--

INSERT INTO `kompania` (`id`, `name`, `email`, `ceo`, `address`, `logo`) VALUES
('ly615', 'computer.ly', 'comp-ly@gmail.com', 'Dren Ibrahimi', 'Prishtinë', 'computerly.png'),
('Fluent879', 'Computer Fluent', 'fluentpc@gmail.com', 'Eros Mehmeti', 'Prishtinë', 'computer-fluent.png'),
('Gjirafa179', 'Gjirafa', 'gjirafa@gmail.com', 'Mergim Cahani', 'Fushë Kosovë', 'gjirafa.jpg'),
('SmartProject717', 'Smart Project', 'smartproject@contact.com', 'Barlet Bejta', 'Prishtinë', 'smartproject.png'),
('ShellKosova734', 'Shell Kosova', 'shell-ks@contact.com', 'Ledion Shehu', 'Prishtinë', 'shell.svg'),
('ModiumStudio820', 'Modium Studio', 'studio-modium@contact.com', 'Ardita Logoreci', 'Gjakovë', 'modium.png'),
('bonami514', 'BonAmi Bar', 'bonami-ks@contact.com', 'Filan Gjinolli', 'Gjilan', 'bonami.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kontakti`
--

CREATE TABLE `kontakti` (
  `id` varchar(50) NOT NULL,
  `emri` varchar(50) NOT NULL,
  `mbiemri` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nrTel` varchar(50) NOT NULL,
  `mesazhi` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kontakti`
--

INSERT INTO `kontakti` (`id`, `emri`, `mbiemri`, `email`, `nrTel`, `mesazhi`) VALUES
('Dren957', 'Dren', 'Ibrahimi', 'drenibrahimi02@gmail.com', '+38349724563', 'Pershendetje, puna mbare!'),
('Filan480', 'Filan', 'Fisteku', 'filan@hotmail.com', '+38344123456', 'Pershendetje, jam i kenaqur me punen qe po e beni! Do kisha deshire ta regjistroja kompanine time ne kete faqe. \r\n\r\nFalemnderit!');

-- --------------------------------------------------------

--
-- Table structure for table `kritika`
--

CREATE TABLE `kritika` (
  `userId` varchar(50) NOT NULL,
  `mesazhi` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kritika`
--

INSERT INTO `kritika` (`userId`, `mesazhi`) VALUES
('Josh140', 'Kompania jonë Gjirafa është duke bashkëpunuar me kompaninë GjejPune që nga viti I kaluar dhe kemi pasur eksperiencë të mirë me këtë kompani. Gjatë kësaj kohe ne nuk kemi hasur në probleme, dhe aplikuesit të cilët kanë aplikuar për vendet e punës kanë qenë të gjithë aplikues të nivelit të lartë dhe me të gjitha kriteret e plotsuara.'),
('Saige128', 'TompLabs është në bashkëpunim me GjejPune për një kohë të gjatë dhe duhet të themi se jemi mjaftë të kënaqur me ta. GjejPune na ka ndihmuar kompanisë tone në rekrutimin e mbi 100 punëtorëve dhe secili nga ta kanë vetëm fjalë të mira për GjejPune dhe qfarë ndihme e madhe ishte kjo website në rrugëtimin e tyre për të gjetur punë.'),
('Zion330', 'Mendoj që kompania GjejPune është një nga kompanitë më të mira me të cilët kemi bashkëpunuar për të gjetur punëtor sipas kërkesave të shpalljeve që kemi paraqitur. Koha e plotsimit të shpalljeve është Goxha e shkurtë për shkak të numrit të madh të përdoruesve, gjithashtu deri tani jemi të kënaqur me të gjithë punëtorët që kemi punësuar nga kjo kompani.'),
('Lucas886', 'GjejPune është kompania më e mirë për të gjetur aplikues të dedikuar ndaj punës dhe është një nga mënyrat më të lehta për të aplikuar. Deri tani marrëdhënia e kompanisë tone Zigga me GjejPune është në nivel shumë të mire bashkëpunues dhe shpresojmë që do të vazhdojë kështu. Lucas Miller');

-- --------------------------------------------------------

--
-- Table structure for table `shpallja`
--

CREATE TABLE `shpallja` (
  `id` varchar(50) NOT NULL,
  `titulli` varchar(50) NOT NULL,
  `kompani` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `employment` varchar(50) NOT NULL,
  `niveli` varchar(50) NOT NULL,
  `fusha` varchar(50) NOT NULL,
  `lokacioni` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shpallja`
--

INSERT INTO `shpallja` (`id`, `titulli`, `kompani`, `foto`, `employment`, `niveli`, `fusha`, `lokacioni`) VALUES
('SmartProject406', 'Arkitekt/e', 'SmartProject717', 'arkitekt.jpg', 'Part-Time', 'Advanced', 'Arkitekturë', 'Prishtinë'),
('Gjirafa650', 'Software developer', 'Gjirafa179', 'programer.jpg', 'Full-Time', 'Intern', 'Programim', 'Fushë Kosovë'),
('ModiumStudio692', '3D Rendering and Visualization', 'ModiumStudio820', '3dvisualizer.jpg', 'Part-Time', 'Mesatar', 'Arkitekturë', 'Pejë'),
('ComputerFluent891', 'Front End Developer', 'Fluent879', 'data-science.jpg', 'Full-Time', 'Mesatar', 'Programim', 'Prishtinë'),
('Shell289', 'Database Analyst', 'ShellKosova734', 'sbd.jpg', 'Full-Time', 'Advanced', 'Programim', 'Prishtinë'),
('BonAmiBar683', 'Kamarier', 'bonami514', 'kamarier.jpg', 'Part-Time', 'Mesatar', 'Gastronomi', 'Gjilan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `puna` varchar(50) NOT NULL,
  `pervoja` int(100) NOT NULL,
  `picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `username`, `email`, `password`, `role`, `puna`, `pervoja`, `picture`) VALUES
('100', 'Dren', 'Ibrahimi', 'drenibrahimi', 'drenibrahimi02@gmail.com', 'Ddreni123', 'admin', 'Full Stack Developer', 2022, 'dren_ibrahimi.jpeg'),
('Josh140', 'Josh', 'Abbott', 'Josh245', 'Josh.Abbott@gmail.com', 'test', 'user', 'Back End Developer', 2019, 'josh.jpg'),
('Tyree466', 'Tyree', 'Hurst', 'Tyree276', 'Tyree.Hurst@gmail.com', 'test', 'user', '', 0, ''),
('Saige128', 'Saige', 'Melton', 'Saige252', 'Saige.Melton@gmail.com', 'test', 'user', '', 0, ''),
('Katelyn253', 'Katelyn', 'Vang', 'Katelyn354', 'Katelyn.Vang@gmail.com', 'test', 'user', '', 0, ''),
('Nigel674', 'Nigel', 'Fitzpatrick', 'Nigel383', 'Nigel.Fitzpatrick@gmail.com', 'test', 'user', '', 0, ''),
('Zion330', 'Dion', 'Barrett', 'Zion328', 'Zion.Barrett@gmail.com', 'test', 'user', '', 0, ''),
('Kyleigh871', 'Kyleigh', 'Hughes', 'Kyleigh8', 'Kyleigh.Hughes@gmail.com', 'test', 'user', '', 0, ''),
('Shelby976', 'Shelby', 'Brennan', 'Shelby279', 'Shelby.Brennan@gmail.com', 'test', 'user', '', 0, ''),
('Lucas886', 'Lucas', 'Miller', 'Lucas325', 'Lucas.Miller@gmail.com', 'test', 'user', '', 0, ''),
('Benjamin793', 'Benjamin', 'Ray', 'Benjamin214', 'Benjamin.Ray@gmail.com', 'test', 'user', '', 0, ''),
('erosi198', 'Eros', 'Mehmeti', 'erosi12', 'em52473@ubt-uni.net', 'Erossi123', 'admin', 'Back End Developer', 2022, 'erosi.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
