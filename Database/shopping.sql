-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2020 at 02:55 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrateur`
--

CREATE TABLE `administrateur` (
  `email_address` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nom` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrateur`
--

INSERT INTO `administrateur` (`email_address`, `password`, `nom`) VALUES
('sami', '*36BFFB0189C3EC20B6790A3D09D96036126E9F36', 'sami'),
('admin@admin.com', '*514FC2971F3E94BB16F25C396219DFDF01D02443', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `email_address` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `address_line1` varchar(255) DEFAULT NULL,
  `ville` varchar(50) DEFAULT NULL,
  `code_postal` varchar(10) DEFAULT NULL,
  `pays` varchar(50) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`email_address`, `password`, `nom`, `address_line1`, `ville`, `code_postal`, `pays`, `telephone`) VALUES
('sami', '*36BFFB0189C3EC20B6790A3D09D96036126E9F36', 'sami', 'Boulevard Moulay ismail', 'Hoceima', '68000', 'maroc', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `cmd_date` date DEFAULT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  `nom_client` varchar(50) DEFAULT NULL,
  `adress_livraison` varchar(255) DEFAULT NULL,
  `code` varchar(20) NOT NULL,
  `nomP` varchar(20) NOT NULL,
  `prix` decimal(7,2) NOT NULL,
  `quantite` smallint(6) NOT NULL,
  `order_no` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`cmd_date`, `email_address`, `nom_client`, `adress_livraison`, `code`, `nomP`, `prix`, `quantite`, `order_no`) VALUES
('2020-05-15', 'user@gmail.com', 'user', 'hoceima', '3111', 'S10', '749.99', 1, '5eddb6c49b72a'),
('2020-06-08', 'sami', 'sami', 'Hoceima', '3111', 'S10', '749.99', 1, '5edeb58cf04a4'),
('2020-06-08', 'sami', 'sami', 'Hoceima', '3214', 'HP Spectre', '1499.00', 1, '5edeb58cf04a4'),
('2020-06-08', 'sami', 'sami', 'Hoceima', '111', 'MACBOOK', '999.00', 1, '5edeb58cf04a4'),
('2020-06-08', 'sami', 'sami', 'Hoceima', '3113', 'S8', '859.42', 1, '5edeb63ad1a2e'),
('2020-06-09', 'sami', 'sami', 'Hoceima', '3113', 'S8', '859.42', 1, '5eded46f4b3ba'),
('2020-06-09', 'sami', 'sami', 'Hoceima', '11128', 'HUAWEI MATEBOOK 13', '999.00', 1, '5eded485a1483'),
('2020-06-09', 'sami', 'sami', 'Hoceima', '4111', 'Nikon D850', '2965.95', 1, '5edfbad72033c'),
('2020-06-09', 'sami', 'sami', 'Hoceima', '1127', 'SAMSUNG GALAXY BOOK ', '899.99', 1, '5edfc6fc9654e'),
('2020-06-09', 'sami', 'sami', 'Hoceima', '3111', 'Samsung S10', '749.99', 1, '5edfc6fc9654e'),
('2020-06-09', 'sami', 'sami', 'Hoceima', '4112', 'Nikon D3500', '396.95', 1, '5edfde3f37792'),
('2020-06-09', 'sami', 'sami', 'Hoceima', '4112', 'Nikon D3500', '396.95', 1, '5edfde5210f40'),
('2020-06-09', 'sami', 'sami', 'Hoceima', '4112', 'Nikon D3500', '396.95', 1, '5edfdea1b4f30'),
('2020-06-09', 'sami@gmail.com', 'sami', '', '1111', 'Dell XPS 13', '1297.11', 1, '5edfe04c4aba9'),
('2020-06-09', 'adam', 'adam', '', '111', 'MACBOOK', '999.00', 1, '5edfe096edba2'),
('2020-06-09', 'adam', 'adam', 'AL hoceima', '111', 'MACBOOK', '999.00', 1, '5edfe0bb3597a'),
('2020-06-09', 'adam', 'adam', 'AL hoceima', '1112', 'Asus Chromebook C434', '569.00', 1, '5edfe132296d8'),
('2020-06-09', 'adam', 'adam', 'AL hoceima', '1112', 'Asus Chromebook C434', '569.00', 1, '5edfe1ce9f2a2'),
('2020-06-09', 'sami', 'sami', 'Hoceima', '3015', 'iPhone 11', '699.00', 1, '5edfe8fd6960c'),
('2020-06-13', 'sami', 'sami', 'Hoceima', '3120', 'Sony Xperia 1', '693.99', 2, '5ee5949d77230'),
('2020-06-13', 'sami', 'sami', 'Hoceima', '111', 'MACBOOK', '999.00', 3, '5ee5953d3bbcb'),
('2020-06-13', 'sami', 'sami', 'Hoceima', '111', 'MACBOOK', '999.00', 1, '5ee595ac9e595'),
('2020-06-13', 'sami', 'sami', 'Hoceima', '1111', 'Dell XPS 13', '1297.11', 1, '5ee595c725839'),
('2020-06-13', 'sami', 'sami', 'Hoceima', '3015', 'iPhone 11', '699.00', 1, '5ee5997dcee6a'),
('2020-06-13', 'sami', 'sami', 'Hoceima', '3015', 'iPhone 11', '699.00', 1, '5ee59c4fdddbf'),
('2020-06-14', 'sami', 'sami', 'Hoceima', '3111', 'Samsung S10', '749.99', 2, '5ee5a2c32a91a'),
('2020-06-14', 'sami', 'sami', 'Hoceima', '3116', 'OnePlus 8 Pro', '89.88', 1, '5ee5a2c32a91a'),
('2020-06-14', 'sami', 'sami', 'Hoceima', '3119', 'XIAOMI BLACK SHARK 2', '599.99', 3, '5ee5a2c32a91a'),
('2020-06-15', 'sami', 'sami', 'Hoceima', '111', 'MACBOOK', '999.00', 1, '5ee7ac8412b5d'),
('2020-06-15', 'sami', 'sami', 'Hoceima', '1111', 'Dell XPS 13', '1297.11', 1, '5ee7c34298b5a'),
('2020-07-07', 'sami', 'sami', 'Hoceima', '4112', 'Nikon D3500', '396.95', 1, '5f04e42780ec8'),
('2020-07-10', 'sami', 'sami', 'Hoceima', '3214', 'HP Spectre', '1499.00', 1, '5f0881da13ace'),
('2020-07-14', 'sami', 'sami', 'Hoceima', '3015', 'iPhone 11', '699.00', 1, '5f0dd6776f6d1');

-- --------------------------------------------------------

--
-- Table structure for table `panier`
--

CREATE TABLE `panier` (
  `id_sess` char(50) NOT NULL,
  `p_code` varchar(20) NOT NULL,
  `p_quantite` smallint(6) NOT NULL,
  `p_titre` varchar(100) DEFAULT NULL,
  `p_prix` decimal(7,2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panier`
--

INSERT INTO `panier` (`id_sess`, `p_code`, `p_quantite`, `p_titre`, `p_prix`) VALUES
('8857ekjjtloqnc2nb3dina11td', '1', 2, 'A20', '179.99'),
('8857ekjjtloqnc2nb3dina11td', '3214', 1, 'HP Spectre', '1499.00'),
('8857ekjjtloqnc2nb3dina11td', '1234', 5, 'MACBOOK', '999.00'),
('m954mpue4mg6u9r8r8n6dmh1di', '8', 1, 'VIVOBOOK S15', '694.79'),
('dd822f7s4rr31ten7d15tfjoup', '1234', 1, 'MACBOOK', '999.00'),
('dd822f7s4rr31ten7d15tfjoup', '2', 1, 'S10', '749.99'),
('dd822f7s4rr31ten7d15tfjoup', '3214', 1, 'HP Spectre', '1499.00'),
('5erhndq27b12bda3n0nk9fs2ki', '1234', 1, 'MACBOOK', '999.00'),
('4o3r7pdf50tmv0pqdnkdd8okon', '2', 1, 'S10', '749.99'),
('n2vahr7p25emefrqvaf22t6jgr', '3214', 2, 'HP Spectre', '1499.00'),
('4o3r7pdf50tmv0pqdnkdd8okon', '3214', 1, 'HP Spectre', '1499.00'),
('5ad1deo9mk793h30b9ueda01bo', '1234', 1, 'MACBOOK', '999.00'),
('5erhndq27b12bda3n0nk9fs2ki', '3214', 5, 'HP Spectre', '1499.00'),
('aob7a6eb0mon0imv33hbib52nc', '1', 1, 'A20', '179.99'),
('qp8lms364auk1v7umc1j3hn7sp', '3214', 1, 'HP Spectre', '1499.00'),
('1ko4q6d2hupub2oml05j37jlgv', '1234', 5, 'MACBOOK', '999.00'),
('e0sad307cdmiad2lbsbda57jsk', '1234', 1, 'MACBOOK', '999.00'),
('1ko4q6d2hupub2oml05j37jlgv', '3214', 1, 'HP Spectre', '1499.00'),
('lii6n2m4al54o26aggqs4iha6h', '1234', 2, 'MACBOOK', '999.00'),
('mo6ok9e7c1aregn207jt8cuj4o', '1234', 1, 'MACBOOK', '999.00'),
('5uei9v9ocjebcis5grp7snfivm', '2', 1, 'S10', '749.99'),
('5uei9v9ocjebcis5grp7snfivm', '1', 1, 'A20', '179.99'),
('h480q7tjt50gctbiom7aujeltd', '1234', 1, 'MACBOOK', '999.00'),
('h480q7tjt50gctbiom7aujeltd', '1', 1, 'A20', '179.99'),
('tp7kvjacbfauklq8m3e5ujeort', '1234', 1, 'MACBOOK', '999.00'),
('fa5uop4hs35d0he8uf7rju4333', '1234', 3, 'MACBOOK', '999.00'),
('5jlc8qkvvge52u2b1m6sj5lecl', '1234', 1, 'MACBOOK', '999.00'),
('7qc04taa2s9u7tvlgofuiosemo', '1234', 1, 'MACBOOK', '999.00'),
('ib6tv9ss3rl9881a7h1u34fqi1', '3', 1, 'S8', '859.42'),
('k905tov7bdve2irfaijhkj6f2v', '564', 10, 'Canon 600d', '279.99'),
('k905tov7bdve2irfaijhkj6f2v', '1234', 2, 'MACBOOK', '999.00'),
('3n6tan6ro9b9t3e7036vbs0lkp', '2', 6, 'S10', '749.99'),
('rc87v7l658oghbl1g9jga7p2hu', '3', 1, 'S8', '859.42'),
('jmtuq1mitv01ac7ale1svdtak5', '1234', 2, 'MACBOOK', '999.00'),
('a8s2hfi3a173qjr8uufkbt1fov', '1234', 1, 'MACBOOK', '999.00'),
('a8s2hfi3a173qjr8uufkbt1fov', '2', 1, 'S10', '749.99'),
('ma1r4ji8ggl7e0k86hjm83r4pc', '1234', 1, 'MACBOOK', '999.00'),
('cb404tjdpueh9ojd5hj23fk0r0', '1234', 1, 'MACBOOK', '999.00'),
('r28g1s6krd9b7kqr2k0eibh8g1', '1', 1, 'MACBOOK', '999.00'),
('7mqvr7fm7sc2h6jc80j445h47g', '11128', 1, 'HUAWEI MATEBOOK 13', '999.00'),
('qn9s4labtpa2pcjsuqev71mhqt', '1234', 1, 'MACBOOK', '999.00'),
('373547b1f541a077c718bb8b5e494451', '3015', 1, 'iPhone 11', '699.00'),
('ac8c4876faea6eab59480d67ab53a915', '1126', 1, 'HP Stream 13', '229.99'),
('373547b1f541a077c718bb8b5e494451', '111', 1, 'MACBOOK', '999.00'),
('92287156c02d0d7b160bbf6770fce47a', '111', 1, 'MACBOOK', '999.00'),
('373547b1f541a077c718bb8b5e494451', '4111', 1, 'Nikon D850', '2965.95'),
('92287156c02d0d7b160bbf6770fce47a', '3111', 1, 'Samsung S10', '749.99'),
('31b2b3296537ddf649a8c20fc66a5017', '4114', 2, 'Nikon D7500', '896.95'),
('ebe63e65582b4fb79e76abd5ce5c546a', '4117', 1, 'Fujifilm X-T30', '851.91'),
('ebe63e65582b4fb79e76abd5ce5c546a', '1129', 1, 'VIVOBOOK S15', '694.79'),
('493c31e7a83902eb837d10fe5044c1cc', '2116', 1, 'Code: The Hidden Language of Computer Hardware and Software ', '18.01'),
('493c31e7a83902eb837d10fe5044c1cc', '2114', 1, 'The Four: The Hidden DNA of Amazon, Apple, Facebook, and Google', '12.39'),
('493c31e7a83902eb837d10fe5044c1cc', '4115', 1, 'Canon EOS 5D Mark IV', '1958.18'),
('5416b9cea9ba7179612bbaedf1428528', '111', 1, 'MACBOOK', '999.00'),
('6hdhmj148lpsv95uc5gf6juoqh', '111', 2, 'MACBOOK', '999.00');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `order_no` int(20) NOT NULL,
  `date_pay` date DEFAULT NULL,
  `montant_payer` decimal(7,2) DEFAULT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  `nomCli` varchar(50) DEFAULT NULL,
  `carteNom` varchar(30) DEFAULT NULL,
  `NumCarte` varchar(20) DEFAULT NULL,
  `expiration_date` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`order_no`, `date_pay`, `montant_payer`, `email_address`, `nomCli`, `carteNom`, `NumCarte`, `expiration_date`) VALUES
(85235, '2020-07-14', '699.00', 'sami', 'sami', '', '', ''),
(85236, '2020-06-08', '4579.87', 'user@gmail.com', 'user', '', '', ''),
(85238, NULL, NULL, 'admin', NULL, NULL, NULL, NULL),
(85239, '2020-06-09', '1297.11', 'sami@gmail.com', 'sami', '', '', ''),
(85240, '2020-06-09', '1297.11', 'sami@gmail.com', 'sami', '', '', ''),
(85241, '2020-06-09', '1598.99', 'jaadarsami1@gmail.com', 'JAADAR', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `produits`
--

CREATE TABLE `produits` (
  `Code` varchar(20) NOT NULL,
  `Titre` varchar(150) NOT NULL,
  `Marque` varchar(50) NOT NULL,
  `Modele` varchar(30) NOT NULL,
  `Poids` varchar(20) DEFAULT NULL,
  `Dimensions` varchar(50) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Categorie` varchar(50) DEFAULT NULL,
  `Quantite` smallint(6) NOT NULL,
  `Prix` decimal(7,2) DEFAULT NULL,
  `Image` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produits`
--

INSERT INTO `produits` (`Code`, `Titre`, `Marque`, `Modele`, `Poids`, `Dimensions`, `Description`, `Categorie`, `Quantite`, `Prix`, `Image`) VALUES
('1111', 'Dell XPS 13', 'Dell', 'XPS 13', '1,22 kg', '12.8 inches (325mm) x 8.94 inches (227mm)', 'CPU: Intel Core i5-1065G7 | GPU: Intel Iris Plus | RAM: 16GB | Storage: 512GB M.2 NVMe SSD | ', 'ordinateurs', 16, '1297.11', 'laptop/notebook-xps-13.jfif'),
('3111', 'Samsung S10', 'samsung', 'S10', '157 g', '149.9 mm x 70.4 mm x 7.8 mm', 'Release date: March 2019 | Weight: 175g / 198g (ceramic) | Dimensions: 157.6 x 74.1 x 7.8mm | OS: Android Pie | Screen size: 6.4-inch | Resolution: 3040Ã—1440 | CPU: Snapdragon 855 | RAM: 8/12GB | Storage: 128/512GB/1TB (up to 1.5TB with card) | Battery: 4,100mAh | Rear camera: 12MP + 12MP + 16MP | Front camera: 10MP + 8MP', 'telephones', 15, '749.99', 'phones/samsungS10.jpg'),
('3112', 'IphoneX', 'Apple', '1234', '174 g', '143.6 mm x 70.9 mm x 7.8 mm', NULL, 'telephones', 20, '749.99', 'phones/iphonex.jpg'),
('111', 'MACBOOK', 'APPLE', '1234', '1157 g', '1058.4 x 704.7 x 7.8 mm (6.24 x 2.94 x 0.31 in)', 'CPU: Intel Core i9 | GPU: AMD Radeon Pro 5500M | RAM: 32GB | Storage: 512GB SSD | Display: 16-inch, 1920p |', 'ordinateurs', 12, '999.00', 'laptop/mac.jpg'),
('1129', 'VIVOBOOK S15', 'ASUS', '123', '1.8Kg', '1920x1080', '', 'ordinateurs', 17, '694.79', 'laptop/156.jpg'),
('3214', 'HP Spectre', 'HP', 'Spectre', '1234g', ' 1,69 cm* 3.60cm * 19,45cm', '', 'ordinateurs', 18, '1499.00', 'laptop/hp.jfif'),
('41121', 'Canon 600d', 'Canon', '600d', '570 g', '133 mm * 100 mm * 80 mm', '', 'Cameras', 18, '279.99', 'Camera/canon.jpg'),
('1112', 'Asus Chromebook C434', 'ASUS', 'Chromebook C434', '1,45 Kg', '321 x 202 x 15.7 mm (12.64\" x 7.95\" x 0.62\")', 'CPU: Intel Core m3-8100Y | GPU: Intel UHD 615 | RAM: 4GB | Storage: 64GB eMMC |', 'ordinateurs', 18, '569.00', 'laptop/asus_c434tadsm4t.jpg'),
('1113', 'HP Envy 13t', 'HP', 'Envy 13t', '1.288 kg', '12 x 8.5 x 0.55 inches', 'CPU: Intel Core i7-8550U | GPU: Intel UHD Graphics 620 | RAM: 4GB | Storage: 256GB PCIe m.2 SSD |', 'ordinateurs', 20, '1119.00', 'laptop/envy.webp'),
('11128', 'HUAWEI MATEBOOK 13', 'HUAWEI ', 'MATEBOOK 13', '1,28 kg', '', 'CPU: up to 4.1GHz 8th-gen Intel Core i7-8565U Intel Core m5-6Y54 (quad core)Graphics: up to Nvidia GeForce MX150RAM: 8GB LPDDR3Screen: 13-inch, 2,160 x 1,440 IPS LED displayStorage: 256-512GB SSD', 'ordinateurs', 19, '999.00', 'laptop/yEsEEpu63ZcLVeByq.jpg'),
('1125', 'Lenovo Yoga C940', 'Lenovo', 'Yoga C940', '1,5 kg', '12.6 x 8.5 x 0.6 inches', 'CPU: Intel Core i7-1065G7 | GPU: Intel Iris Plus GPU | RAM: 16GB | Storage: 512GB SSD | Display: 14-inch, 1080/4K', 'ordinateurs', 20, '1164.85', 'laptop/lenovo-laptop.jpg'),
('1127', 'SAMSUNG GALAXY BOOK S', 'samsung', 'GALAXY BOOK S', '960 g', '305,2 x 203,2 x 6,2', 'PU: Qualcomm Snapdragon 8cxGraphics: IntegratedRAM: 8GBScreen: 13.3-inch, 1,920 x 1,080 pixelsStorage: 256 GB SSD', 'ordinateurs', 18, '899.99', 'laptop/samsung-galaxy-note.jpg'),
('2120', 'Elon Musk: Tesla, SpaceX, and the Quest for a Fantastic Future', '', '', '', '', '', 'livres', 20, '15.02', 'book/5112YFsXIJL.jpg'),
('2112', 'Alibaba: The House That Jack Ma Built', '', '', '', '', 'In just a decade and half Jack Ma, a man who rose from humble beginnings and started his career as an English teacher, founded and built Alibaba into the second largest Internet company in the world. The companyâ€™s $25 billion IPO in 2014 was the worldâ€™s largest, valuing the company more than Facebook or Coca Cola. Alibaba today runs the e-commerce services that hundreds of millions of Chinese consumers depend on every day, providing employment and income for tens of millions more. A Rockefeller of his age, Jack has become an icon for the countryâ€™s booming private sector, and as the face of the new, consumerist China is courted by heads of state and CEOs from around the world.', 'livres', 20, '18.68', 'book/images.jfif'),
('2112', 'Algorithms to Live By: The Computer Science of Human Decisions', '', '', '', '', 'A fascinating exploration of how computer algorithms can be applied to our everyday lives.', 'livres', 20, '15.00', 'book/51eaUAjgiwL.jpg'),
('2113', 'Hello World: How to be Human in the Age of the Machine', '', '', '', '', '', 'livres', 20, '18.99', 'book/71sNdoQrecL.jpg'),
('2115', 'The Industries of the Future', '', '', '', '', 'Alex Ross has traveled the world as a Senior Advisor for Innovation to the Secretary of State and explored the latest changes coming out of every continent, including cybercrime and security, robotics and the next steps for big data.', 'livres', 20, '14.20', 'book/71s-MrcZOTL.jpg'),
('2114', 'The Four: The Hidden DNA of Amazon, Apple, Facebook, and Google', '', '', '', '', 'â€œThe Fourâ€ tells you about the secrets behind the enormous growth and power of Google, Apple, Facebook, and Amazon. Scott Galloway is one the smartest and entertaining observes and he asks the fundamental questions, how did the Giants infiltrate in our lives and how come we almost canâ€™t avoid them anymore.', 'livres', 20, '12.39', 'book/71QUWyQvlsL.jpg'),
('2116', 'Code: The Hidden Language of Computer Hardware and Software ', '', '', '', '', 'Using everyday objects and familiar language systems such as Braille and Morse code, author Charles Petzold weaves an illuminating narrative for anyone whoâ€™s ever wondered about the secret inner life of computers and other smart machines.', 'livres', 20, '18.01', 'book/61bA23zSr5L.jpg'),
('2118', 'Cracking the Coding Interview', '', '', '', '', '', 'livres', 20, '26.99', 'book/71jRvBEDNmL.jpg'),
('2117', 'Traffic Secrets', '', '', '', '', '', 'livres', 20, '18.76', 'book/51DEjt8psoL._SY445_QL70_ML2_.jpg'),
('3120', 'Sony Xperia 1', 'Sony', ' Xperia 1', '', '', 'Dual-SIM 128GB/6GB Dual Sim - International Model - No Warranty in The USA - GSM ONLY, NO CDMA (Black)', 'telephones', 28, '693.99', 'phones/615w0YOV2OL.jpg'),
('3119', 'XIAOMI BLACK SHARK 2', 'XIAOMI', 'BLACK SHARK 2', '', '', 'Fast performance for a reasonable price\r\nMagicTouch makes gaming more enjoyable', 'telephones', 27, '599.99', 'phones/616gqh2aECL.jpg'),
('3118', 'Huawei P30 Pro', 'Huawei', 'Pro', '', '', 'Release date: March 2019 | Weight: 192g | Dimensions: 158 x 73.4 x 8.4mm | OS: Android 9 | Screen size: 6.47-inch | Resolution: 2340Ã—1080 | CPU: Kirin 980 | RAM: 8GB | Storage: 128/256/512GB | Battery: 4,200mAh | Rear camera: 40MP + 20MP + 8MP + ToF | Front camera: 32MP', 'telephones', 30, '638.99', 'phones/61ichz+YnFL.jpg'),
('3117', 'Google Pixel 4', 'Google', 'Pixel 4', '', '', 'Release date: October 2019 | Weight: 193g | Dimensions: 160.4 x 75.1 x 8.2mm | OS: Android 10 | Screen size: 6.3-inch | Resolution: 1440 x 3040 | CPU: Snapdragon 855 | RAM: 6GB | Storage: 64GB/128 | Battery: 3,700mAh | Rear camera: 12.2MP + 16MP | Front camera: 8MP', 'telephones', 30, '499.00', 'phones/613cG+X-BCL.jpg'),
('3116', 'OnePlus 8 Pro', 'OnePlus', '8 Pro', '', '', 'Release date: April 2020 | Weight: 199g | Dimensions: 165.3 x 74.35 x 8.5mm | OS: Android 10 | Screen size: 6.78-inch | Resolution: 3168 x 1440 | CPU: Snapdragon 865 | RAM: 8/12GB | Storage: 128/256GB | Battery: 4,510mAh | Rear camera: 48MP+48MP+5MP+8MP | Front camera: 16MP', 'telephones', 29, '89.88', 'phones/51uEwkqjZTL.jpg'),
('4111', 'Nikon D850', 'Nikon', 'D850', '', '', 'Sensor: Full-frame CMOS | Megapixels: 45.4MP | Autofocus: 153-point AF, 99 cross-type | Screen type: 3.2-inch tilt-angle touchscreen, 2,359,000 dots | Maximum continuous shooting speed: 7fps | Movies: 4K | User level: Expert', 'Cameras', 9, '2965.95', 'Camera/71HJnJrxzEL.jpg'),
('4112', 'Nikon D3500', 'Nikon', 'D3500', '', '', 'Sensor: APS-C CMOS | Megapixels: 24.2MP | Autofocus: 11-point AF, 1 cross-type | Screen type: 3.0-inch, 921,000 dots | Maximum continuous shooting speed: 5fps | Movies: 1080p | User level: Beginner', 'Cameras', 6, '396.95', 'Camera/71TSinb4usL.jpg'),
('4113', 'Canon EOS 90D', 'Canon', 'EOS 90D', '', '', 'Sensor: APS-C CMOS | Megapixels: 32.5MP | Autofocus: 45-point AF, 45 cross-type | Screen type: 3.0-inch, 1,040,000 dots | Maximum continuous shooting speed: 10fps | Movies: 4K | User level: Intermediate', 'Cameras', 9, '1299.99', 'Camera/81rzzz+4ayL._AC_SL1500_.jpg'),
('4114', 'Nikon D7500', 'Nikon', 'D7500', '', '', 'ensor: APS-C CMOS | Megapixels: 20.9MP | Autofocus: 51-point AF, 15 cross-type | Screen type: 3.2-inch tilt-angle touchscreen, 922,000 dots | Maximum continuous shooting speed: 8fps | Movies: 4K | User level: Intermediate', 'Cameras', 10, '896.95', 'Camera/81Qep7cWdgL._AC_SL1500_.jpg'),
('4116', 'Canon EOS Rebel T7', 'Canon', 'EOS Rebel T7', '', '', 'Sensor: APS-C CMOS | Megapixels: 24.1MP | Autofocus: 9-point AF | Screen type: 3.0-inch, 920,000 dots | Maximum continuous shooting speed: 3fps | Movies: 1080p | User level: Beginner', 'Cameras', 10, '399.99', 'Camera/41ogNMjDNxL._AC_.jpg'),
('4115', 'Canon EOS 5D Mark IV', 'Canon', 'EOS 5D Mark IV', '', '', 'Sensor: Full-frame CMOS | Megapixels: 30.4MP | Autofocus: 61-point AF, 41 cross-type | Screen type: 3.2-inch touchscreen, 1,620,000 dots | Maximum continuous shooting speed: 7fps | Movies: 4K | User level: Expert', 'Cameras', 20, '1958.18', 'Camera/41jKCyC2+8L._AC_.jpg'),
('4117', 'Fujifilm X-T30', 'Fujifilm', 'X-T30', '', '', 'Sensor size: APS-C | Resolution: 26.1MP | Viewfinder: 2,360K dots | Monitor: 3.0-inch tilt-angle touchscreen, 1,040K dots | Autofocus: 425-point AF | Maximum continuous shooting rate: 8fps | Movies: 4K at 30p | User level: Expert', 'Cameras', 10, '851.91', 'Camera/81A6ZqzPeiL.jpg'),
('4119', 'Sony A7 III', 'Sony', 'A7 III', '', '', 'Sensor size: Full-frame | Resolution: 24.2MP | Viewfinder: 2,359K dots | Monitor: 3.0-inch tilt-angle touchscreen, 921K dots | Autofocus: 693-point AF | Maximum continuous shooting rate: 10fps | Movies: 4K at 30p ', 'Cameras', 10, '1739.51', 'Camera/41UBVTuPO7L._AC_.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`email_address`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`order_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `order_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85242;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
