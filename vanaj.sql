-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2024 at 06:41 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vanaj`
--

-- --------------------------------------------------------

--
-- Table structure for table `boty`
--

CREATE TABLE `boty` (
  `IDB` int(11) NOT NULL,
  `shoeName` varchar(2000) NOT NULL,
  `popisek` mediumtext NOT NULL,
  `price` int(25) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boty`
--

INSERT INTO `boty` (`IDB`, `shoeName`, `popisek`, `price`, `img1`, `img2`, `img3`) VALUES
(1, 'Travis Scott x Air Jordan 1 Low\'Reverse Mocha\'', 'The Travis Scott x Air Jordan 1 Retro Low OG ‘Reverse Mocha’ delivers a twist on the original ‘Mocha’ AJ1 Low from 2019. The upper combines a brown suede base with ivory leather overlays and the Houston rapper’s signature reverse Swoosh on the lateral side, featuring oversized dimensions and a neutral cream finish. Contrasting scarlet accents distinguish a pair of woven Nike Air tongue tags, as well as mismatched Cactus Jack and retro Wings logos embroidered on each heel tab. A vintage off-white rubber midsole is bolstered with encapsulated Nike Air cushioning in the heel and a brown rubber outsole underfoot.', 1200, './images/jordan1-reversemocha-1.webp', './images/jordan1-reversemocha-2.webp', './images/jordan1-reversemocha-3.webp'),
(2, '\r\nAir Max DN \'Black Dark Grey\'', 'The Nike Air Max Dn \'Black Dark Grey\' features an allover haptic print that adds texture to the breathable black mesh upper, marked with a retro-inspired Air Max Dn emblem on the molded TPU heel counter. A prominent TPU clip bridges the decoupled injected Phylon midsole, treated to a matching black finish and fitted with a dual-chamber, four-tubed Nike Air unit in the heel. Underfoot, the rubber outsole features a waffle tread that ties back to Nike heritage.', 160, './images/airmax-dn-1.webp', './images/airmax-dn-2.webp', './images/airmax-dn-3.webp'),
(3, 'Air Jordan 5 Retro SE \'Sail\'', 'The Air Jordan 5 Retro SE \'Sail\' is crafted with off-white suede on the upper, featuring heritage AJ5 details, including lace locks, molded TPU eyelets and breathable quarter panel netting. A black embroidered Jumpman embellishes the back heel and exposed-foam tongue. The cushioning setup comprises a white polyurethane midsole, fitted with an Air-sole heel unit and accented with speckled black shark tooth detailing. A milky translucent rubber outsole provides grippy traction underfoot.', 220, './images/jordan5-1.webp', './images/jordan5-2.webp', './images/jordan5-3.webp'),
(4, 'Rick Owens DRKSHDW Hexa High \'Black Milk\'', 'These Hexa sneaks are above ankle height and feature eyelets and hooks, Hexa front laces that criss cross the foot, and wrap around the ankle. They have a zipper on the inside ankle for easy fastening, toe caps and shark-tooth soles. This heavyweight cotton satin is compact with a rigid handfeel. This fabric is made using GOTS certified organic cotton which means the natural fiber is grown without harmful chemicals, leaving our soil, air and water cleaner from contaminates.', 700, './images/rickowens-1.webp', './images/rickowens-2.webp', './images/rickowens-3.webp'),
(5, 'Dunk Low SB \'Sandy Bodecker\'', 'The Nike Dunk Low SB ‘Sandy Bodecker’ is a unique shoe inspired by the 2003 Charity Dunk. It features eBay\'s signature colors, was sold in a charity auction for Portland skateparks, and was won by Sandy Bodecker, the \'father of Nike Skateboarding.\' The shoe is one-of-a-kind, with the sample pair destroyed to ensure its uniqueness. It has translucent windows and custom insoles with images honoring Bodecker\'s legacy.', 150, './images/sbdunk-ebay-1.webp', './images/sbdunk-ebay-2.webp', './images/sbdunk-ebay-3.webp'),
(6, 'Supreme x 6 Inch Premium Waterproof Boot \'Embossed Diamond Plate - Wheat\'', 'Crafted from waterproof premium nubuck with an embossed pattern, this boot ensures durability and comfort. It features a padded leather collar and rubber outsoles, providing excellent traction and comfort for all-day wear. The debossed Timberland logo at the heel and the logo tab at the side add to the boot’s aesthetic appeal.\r\n\r\nThis boot is part of the Supreme x Timberland Diamond Plate Collection, which introduces the 6\" Waterproof Boot in three eye-catching colorways: Pink, Black, and Wheat. Each boot is made exclusively for Supreme, reflecting the brand’s commitment to quality and style.', 400, './images/supreme-timberland-1.webp', './images/supreme-timberland-2.webp', './images/supreme-timberland-3.webp'),
(7, 'Wales Bonner x Samba \'Silver Metallic\'', 'Launching as part of a capsule collection imbued with Caribbean heritage and elevated sport style, the Wales Bonner x adidas Samba ‘Silver Metallic’ showcases a polished makeover. A gleaming metallic silver finish is applied to the leather upper, accented with crocheted three-stripes and deo stitching along the heel tab. The elongated fold-over tongue is marked with dual branding, while the Wales Bonner logotype is stamped on the lateral heel. A brown rubber cupsole anchors the streamlined silhouette.', 600, './images/adidas-walesbonner-1.webp', './images/adidas-walesbonner-2.webp', './images/adidas-walesbonner-3.webp'),
(8, 'HUF x Dunk Low SB \'New York\'', 'The HUF x Nike Dunk Low SB ‘New York’ is a special edition shoe celebrating the 20th anniversary of the HUF brand. It features a tumbled leather upper with navy base, white overlays, and an off-white Swoosh. The shoe has unique features like the HUF logo on the toe box, ‘Keith Forever’ embroidered on the heel, and a hidden tie-dye print on canvas. It’s a tribute to the late skateboarder Keith Hufnagel and his New York roots.', 300, './images/sbdunk-huf-1.webp', './images/sbdunk-huf-2.webp', './images/sbdunk-huf-3.webp'),
(9, 'XT-6 SKYLINE \'Bleached Sand Dazzling Blue\'', 'Experience style and comfort with the Salomon XT-6. These fashion-forward shoes feature a neutral ‘Bleached Sand’ base with ‘Dazzling Blue’ accents. Designed for durability and comfort, they include a cushioned insole, supportive midsole, and high-traction outsole. The breathable upper and adjustable lace-up closure ensure a perfect fit.', 140, './images/salomon-xt-6-1.webp', './images/salomon-xt-6-2.webp', './images/salomon-xt-6-3.webp'),
(10, 'AIR MAX PLUS\'Triple Black\'', 'Experience the epitome of sleek style with the Nike Airmax Plus. These shoes feature an all-black design, delivering a timeless and versatile look. Known for their durability and comfort, they come with a cushioned insole, supportive midsole, and high-traction outsole. The breathable upper and adjustable lace-up closure ensure a snug fit.', 150, './images/airmax-plus-1.webp', './images/airmax-plus-2.webp', './images/airmax-plus-3.webp'),
(11, 'Dunk Low \'Concord\'', 'The Nike Dunk Low \'Concord\' is built with smooth leather construction, featuring a crisp white base with bluish purple overlays and a color-matched Swoosh. In addition to Nike branding on the tongue tag and back tab, a crimson Nike logo embellishes the sockliner, delivering a hidden pop of contrasting color. The low-top is completed with a durable rubber cupsole.', 100, './images/dunk-blueconcord-1.webp', './images/dunk-blueconcord-2.webp', './images/dunk-blueconcord-3.webp'),
(12, 'Air Jordan 4 Retro GS \'Hyper Violet\'', 'Offered in grade school sizing, the Air Jordan 4 Retro GS \'Hyper Violet\' features white leather construction with a padded mid-cut collar and breathable quarter-panel netting. The shoe\'s TPU eyelets are finished in a bright violet hue, matching the molded support wings and the Jumpman branding hits that adorn the woven tongue tag and molded back tab. Lightweight cushioning arrives via a white polyurethane midsole with a visible Air-sole unit in the heel. A violet-tinged outsole in semi-translucent rubber utilizes a herringbone tread for optimal grip.', 140, './images/jordan4-hyperviolet-1.webp', './images/jordan4-hyperviolet-2.webp', './images/jordan4-hyperviolet-3.webp'),
(13, 'Wmns Air Jordan 4 Retro \'Frozen Moments\'', 'The Women’s Air Jordan 4 Retro ‘Frozen Moments’ features a pale grey suede upper with a color-matched forefoot overlay in glossy leather. Breathable netting is utilized on the throat and quarter panel, while the shoe’s molded eyelets and support wings shine in a metallic silver finish. Tonal Jumpman branding embellishes the tongue and molded heel tab. Anchoring the sneaker is a grey foam midsole with visible Air-sole cushioning in the heel.', 400, './images/jordan4-frozenmoments-1.webp', './images/jordan4-frozenmoments-2.webp', './images/jordan4-frozenmoments-3.webp'),
(14, 'Bapesta \'Black\'', 'Step into the world of streetwear with the Bapesta ‘Black’. These shoes showcase a classic all-black design, offering a versatile and timeless look. Known for their durability and comfort, they feature a cushioned insole and supportive midsole. The high-traction outsole ensures a steady grip, while the breathable upper and lace-up closure provide a snug fit.', 600, './images/bapesta-1.webp', './images/bapesta-2.webp', './images/bapesta-3.webp'),
(15, 'Rick Owens x DRKSHDW TURBOWPN Mid \'Black Cloud Cream\'', 'Embrace the unconventional with the Rick Owens x DRKSHDW TURBOWPN Mid ‘Black Cloud Cream’. These shoes, with their unique ‘Black Cloud Cream’ color scheme, embody the avant-garde aesthetic that Rick Owens is renowned for. Crafted for comfort and durability, they feature a cushioned insole and supportive midsole. The high-traction outsole ensures a steady grip, while the breathable upper and lace-up closure provide a snug fit.', 380, './images/rickowens-converse-1.webp', './images/rickowens-converse-2.webp', './images/rickowens-converse-3.webp'),
(16, 'Supreme x Air Max 98 TL SP \'Black\'', 'The Supreme x Nike Air Max 98 TL SP ‘Black’ is taken from a four-piece collection made exclusively for the influential New York skate brand. Supreme’s take on the ‘90s running shoe showcases a reworked upper built with black mesh and tonal overlays in TPU and synthetic leather. Reflective threads are woven into the laces, while additional hits of 3M make their way to the lateral-side Swoosh and a wraparound Supreme wordmark along the back heel. The latter is accompanied by a retro TL badge. The sneaker sits atop a matching black foam midsole, featuring a full-length Air-sole unit for soft landings and a smooth ride.', 350, './images/supreme-airmax-1.webp', './images/supreme-airmax-2.webp', './images/supreme-airmax-3.webp'),
(17, 'Wmns Gazelle Indoor \'Collegiate Green Pink\'', 'Step into retro style with the Wmns Gazelle Indoor ‘Collegiate Green Pink’. These shoes feature a vibrant ‘Collegiate Green Pink’ color scheme, adding a pop of color to any outfit. Known for their comfort and durability, they come with a cushioned insole, supportive midsole, and high-traction outsole. The breathable upper and adjustable lace-up closure ensure a perfect fit.', 120, './images/adidas-gazelle-1.webp', './images/adidas-gazelle-2.webp', './images/adidas-gazelle-3.webp'),
(18, 'Joe Freshgoods x 1000 \'When Things Were Pure Pack - Pink Mink\'', 'Launching as part of the \'When Things Were Pure Pack,\' the Joe Freshgoods x New Balance 1000 \'Pink Mink\' features off-white open-knit mesh with leather overlays in ivory and metallic pink hues. A rubberized \'N\' logo adorns the quarter panel, while \'1000\' and \'JFG\' are embroidered on the lateral forefoot of the left and right shoe, respectively. The sneaker rests on a lightweight polyurethane midsole with ABZORB cushioning in the heel. Underfoot, a gum rubber outsole provides durable traction.', 450, './images/newballance-2.webp', './images/newballance-2.webp', './images/newballance-3.webp'),
(19, 'Wmns Air Jordan 3 Retro \'Georgia Peach\'', 'The Women\'s Air Jordan 3 Retro \'Georgia Peach\' showcases a white tumbled leather upper, contrasted by orange molded eyelets and fortified with grey elephant print overlays at the forefoot and heel. Jumpman branding adorns the tongue and back heel. A vintage off-white finish is applied to the polyurethane midsole, featuring visible Air-sole cushioning and a wraparound splash of Cosmic Clay.', 200, './images/jordan3-peach-1.webp', './images/jordan3-peach-2.webp', './images/jordan3-peach-3.webp'),
(20, 'Off-White x Wmns Air Jordan 4 Retro SP \'Sail\'', 'Step into high fashion with the Off-White x Wmns Air Jordan 4 Retro SP ‘Sail’. This collaboration offers a fresh take on the classic silhouette with a deconstructed leather build and a ‘Sail’ colorway. Known for comfort and durability, these shoes feature a cushioned insole, supportive midsole, and high-traction outsole. Abloh’s signature flourishes add a unique touch to these sneakers.', 1500, './images/jordan4-offwhite-1.webp', './images/jordan4-offwhite-2.webp', './images/jordan4-offwhite-3.webp');

-- --------------------------------------------------------

--
-- Table structure for table `kosik`
--

CREATE TABLE `kosik` (
  `idK` int(11) NOT NULL,
  `idB` int(11) NOT NULL,
  `size` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kosik`
--

INSERT INTO `kosik` (`idK`, `idB`, `size`) VALUES
(175, 1, 46),
(176, 3, 41),
(177, 3, 41),
(178, 1, 40);

-- --------------------------------------------------------

--
-- Table structure for table `objednavka`
--

CREATE TABLE `objednavka` (
  `idO` int(11) NOT NULL,
  `idZ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zakaznik`
--

CREATE TABLE `zakaznik` (
  `idZ` int(11) NOT NULL,
  `Cname` varchar(11) NOT NULL,
  `surname` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `address1` varchar(11) NOT NULL,
  `address2` varchar(11) DEFAULT NULL,
  `city` varchar(11) NOT NULL,
  `country` varchar(11) NOT NULL,
  `zip` int(11) NOT NULL,
  `cardNumber` int(11) DEFAULT NULL,
  `cvv` int(11) DEFAULT NULL,
  `expM` int(11) DEFAULT NULL,
  `expY` int(11) DEFAULT NULL,
  `email2` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zakaznik`
--

INSERT INTO `zakaznik` (`idZ`, `Cname`, `surname`, `email`, `phone`, `address1`, `address2`, `city`, `country`, `zip`, `cardNumber`, `cvv`, `expM`, `expY`, `email2`) VALUES
(6, 'safasf', 'asfasf', 'asfasf', 13, 'fasf', 'asfasf', 'asfasf', 'safasf', 13, 131, 131, 0, 0, 'fasff'),
(7, '', '', '', 0, '', '', '', '', 0, 0, 0, 0, 0, ''),
(8, 'gasg', 'asgasg', 'asggsa', 131, 'gsag', 'asgasg', 'asgasg', 'agsasg', 4242, 3113, 242, 0, 0, 'fasfasf'),
(14, 'Pavel', 'Horáček', 'pavnda@gmai', 242, 'saf', 'asf', 'Praha', 'Česko', 94695, 242, 242, 0, 0, ''),
(15, '', '', '', 0, '', '', '', '', 0, 0, 0, 0, 0, ''),
(16, 'Pavel', 'Horáček', 'pavnda@gmai', 242, 'saf', 'asf', 'Praha', 'Česko', 94695, 242, 242, 0, 0, ''),
(17, '', '', '', 0, '', '', '', '', 0, 0, 0, 0, 0, ''),
(18, 'Pavel', 'Horáček', 'pavnda@gmai', 242, 'saf', 'asf', 'Praha', 'Česko', 94695, 242, 242, 0, 0, ''),
(19, '', '', '', 0, '', '', '', '', 0, 0, 0, 0, 0, ''),
(20, '', '', '', 0, '', '', '', '', 0, 0, 0, 0, 0, ''),
(21, '', '', '', 0, '', '', '', '', 0, 0, 0, 0, 0, ''),
(22, '', '', '', 0, '', '', '', '', 0, 0, 0, 0, 0, ''),
(23, '', '', '', 0, '', '', '', '', 0, 0, 0, 0, 0, ''),
(24, '', '', '', 0, '', '', '', '', 0, 0, 0, 0, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boty`
--
ALTER TABLE `boty`
  ADD PRIMARY KEY (`IDB`);

--
-- Indexes for table `kosik`
--
ALTER TABLE `kosik`
  ADD PRIMARY KEY (`idK`);

--
-- Indexes for table `objednavka`
--
ALTER TABLE `objednavka`
  ADD PRIMARY KEY (`idO`);

--
-- Indexes for table `zakaznik`
--
ALTER TABLE `zakaznik`
  ADD PRIMARY KEY (`idZ`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boty`
--
ALTER TABLE `boty`
  MODIFY `IDB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kosik`
--
ALTER TABLE `kosik`
  MODIFY `idK` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `objednavka`
--
ALTER TABLE `objednavka`
  MODIFY `idO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `zakaznik`
--
ALTER TABLE `zakaznik`
  MODIFY `idZ` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
