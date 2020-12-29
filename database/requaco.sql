-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 17, 2020 lúc 01:45 PM
-- Phiên bản máy phục vụ: 10.4.13-MariaDB
-- Phiên bản PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `requaco`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `show_home` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `brand`
--

INSERT INTO `brand` (`id`, `name`, `show_home`) VALUES
(1, 'D&G', 1),
(2, 'Dior', 1),
(3, 'Louis Vuitton', 1),
(4, 'Prada', 1),
(5, 'Burberry', 1),
(6, 'Gucci', 1),
(7, 'Versace', 1),
(8, 'Hermès', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(125) COLLATE utf8_unicode_ci NOT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` double(13,2) NOT NULL,
  `pttt` tinyint(1) NOT NULL COMMENT '1. BANK 2. CREDIT CART 3. CASH',
  `ttdh` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0. Đang giao hàng\r\n1.Yêu cầu huỷ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `name`, `phone`, `adress`, `email`, `note`, `total`, `pttt`, `ttdh`) VALUES
(97, 'hot', '0999888777', '123 Quang Trung', 'ahihi@gmail.com', NULL, 13200001.99, 1, 0),
(100, '4h30 3/8', '0999888777', '123 Quang Trung', 'ahihi@gmail.com', NULL, 33000001.99, 1, 0),
(102, 'ahihi', '0999888777', '123 Quang Trung', 'ahihi@gmail.com', NULL, 2200001.99, 1, 0),
(105, 'ahihi', '0999888777', '123 Quang Trung', 'ahihi@gmail.com', NULL, 2200001.99, 1, 0),
(106, 'xong', '0999888777', '123 Quang Trung', 'ahihi@gmail.com', NULL, 25000001.99, 1, 0),
(107, 'm', '0999888777', '123 Quang Trung', 'ahihi@gmail.com', NULL, 25000001.99, 1, 0),
(108, 'test-xyz', '0123456789', 'aaaaaaa', 'abcdxyzt6996@gmail.com', NULL, 3830001.99, 2, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart_detail`
--

CREATE TABLE `cart_detail` (
  `id_cart` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `hinh` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(50) NOT NULL,
  `so_luong` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cart_detail`
--

INSERT INTO `cart_detail` (`id_cart`, `id_product`, `hinh`, `name`, `gia`, `so_luong`) VALUES
(97, 28, '../upload/MEDUSA BUTTON WOOL SAFARI JACKET.png', 'MEDUSA BUTTON WOOL SAFARI JACKET', 12000000, '1'),
(97, 37, '../upload/banner-limit.png', 'Cozy Back', 1200000, '1'),
(100, 21, '../upload/Wool tweed jacket.png', 'Wool tweed jacket', 21000000, '1'),
(100, 28, '../upload/MEDUSA BUTTON WOOL SAFARI JACKET.png', 'MEDUSA BUTTON WOOL SAFARI JACKET', 12000000, '1'),
(102, 29, '../upload/SAFETY PIN LEATHER SANDALS.png', 'SAFETY PIN LEATHER SANDALS', 1200000, '1'),
(102, 35, '../upload/product-home1.png', 'Fur coats', 1000000, '1'),
(105, 29, '../upload/SAFETY PIN LEATHER SANDALS.png', 'SAFETY PIN LEATHER SANDALS', 1200000, '1'),
(105, 30, '../upload/BRAIDED LEATHER CHARM BRACELET.png', 'BRAIDED LEATHER CHARM BRACELET', 1000000, '1'),
(106, 24, '../upload/High collar sweater.png', 'High collar sweater', 2000000, '1'),
(106, 27, '../upload/Clic H Zebres de Tanzanie bracelet.png', 'Clic H Zebres de Tanzanie bracelet', 23000000, '1'),
(107, 24, '../upload/High collar sweater.png', 'High collar sweater', 2000000, '1'),
(107, 27, '../upload/Clic H Zebres de Tanzanie bracelet.png', 'Clic H Zebres de Tanzanie bracelet', 23000000, '1'),
(108, 7, '../upload/FIT-AND-FLARE DRESS.webp', 'FIT-AND-FLARE DRESS', 630000, '1'),
(108, 23, '../upload/Wool tweed midi skirt with slit.png', 'Wool tweed midi skirt with slit', 2000000, '1'),
(108, 37, '../upload/banner-limit.png', 'Cozy Back', 1200000, '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `show_home` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `mo_ta`, `show_home`) VALUES
(1, 'Pants', 'Quần', 1),
(2, 'Dress', 'Chân váy', 1),
(5, 'Shoes', 'Giày', 1),
(6, 'Shirt', 'Áo', 1),
(7, 'Handbags', 'Túi xách', 1),
(8, 'Skirt', 'Váy', 1),
(9, 'Jewelry', 'Trang sức', 1),
(10, 'Hat', 'Nón', 1),
(13, 'Jackets', 'Áo khoác', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date DEFAULT NULL,
  `id_product` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `noidung`, `date`, `id_product`) VALUES
(1, 'Admin', 'admin@123', 'Đẹp quá', NULL, 1),
(2, 'User', 'user@123456', 'Xấu quá', NULL, 1),
(13, 'Lực', 'ctv04.viecco@gmail.com', 'aâ', NULL, 7),
(14, 'AssMIN', 'ctv04.viecco@gmail.com', 'kaka', NULL, 7),
(15, 'Lực', 'abcdxyzt6996@gmail.com', 'Nice', NULL, 2),
(16, 'Lực', 'lucdtps11360@fpt.edu.vn', 'Good', NULL, 2),
(17, 'aaaaa', 'abcdxyzt6996@gmail.com', 'sadasd', NULL, 30),
(18, 'aaaaa', 'abcdxyzt6996@gmail.com', 'sadasd', NULL, 30),
(19, 'aaaaa', 'abcdxyzt6996@gmail.com', 'sadasd', NULL, 30);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(50) NOT NULL,
  `gia_cu` int(50) NOT NULL,
  `hinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `mau_sac` int(11) DEFAULT NULL,
  `size` tinyint(11) DEFAULT NULL,
  `tags` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hot` tinyint(1) DEFAULT 0 COMMENT '1 là hot',
  `id_catalog` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `noi_dung` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `mo_ta` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `gia`, `gia_cu`, `hinh`, `rating`, `mau_sac`, `size`, `tags`, `hot`, `id_catalog`, `id_brand`, `noi_dung`, `mo_ta`) VALUES
(1, 'Nappa leather skirt', 1100000, 1200000, 'Nappa leather skirt.webp', NULL, NULL, NULL, '0', 1, 8, 4, 'Product code: 51774_FLY_F0002\r\n\r\nThis flared opaque nappa leather skirt sands out for its refined look. The garment has a side zipper closure with hook.\r\n\r\n\r\nFlared fit\r\nSide zipper with hook\r\nLambskin\r\n\r\n62 cm Height\r\n', 'The model is 175 cm tall and wear a size 40'),
(2, 'SMALL DG MILLENNIALS BAG IN NAPPA', 2000000, 2100000, 'SMALL DG MILLENNIALS BAG IN NAPPA LEATHER.png', NULL, NULL, NULL, '0', 1, 7, 1, 'The DG Millennials line is renewed with a new compact and essential version. The small bucket bag is made of nappa calfskin and features a drawstring and on top handle. Presented in the first-time seen shades that can be coordinated perfectly with the sea', 'Code: BB6844AX49580610'),
(3, 'The iconic Dolce&Gabbana', 2500000, 2600000, 'The iconic Dolce_Gabbana woman dresses.png', NULL, NULL, NULL, NULL, 0, 8, 1, 'The iconic Dolce&Gabbana woman dresses in florals with this dress that flaunts a sensual, feminine shape. With its clean, form-fitting shape, it will be easy to wear no matter the occasion:\r\n• Plunging round neck\r\n• Short sleeves\r\n• Central rear slit\r\n• S', 'Code: F6H4PTFSRMJHC1AM'),
(5, 'STRAIGHT PANTS', 2500000, 2600000, 'STRAIGHT PANTS.webp', NULL, NULL, NULL, NULL, 0, 1, 3, 'This casual piece reinterprets the safari pants silhouette in stretch cotton gabardine. Flap pockets at the front and back have snap button closures. Ideal to mix-and-match, the pants feature an integrated belt to accentuate the waistline.', 'Detailed Features\r\nMain: 97% Cotton 3% Elastane\r\nLining: 53% Viscose 47% Cupro\r\nCreme, White\r\nRegular fit\r\nModel wears size 36\r\nModel measurements : Bust 24\'\' / 81 cm, Height 5\' 10\" / 178 cm, Waist 24\'\' / 61 cm, Hips 34\'\' / 88 cm\r\nMade in Italy\r\nDo not wa'),
(6, 'NEVERFULL MM', 2800000, 2900000, 'NEVERFULL MM.webp', NULL, NULL, NULL, NULL, 1, 7, 3, 'The Neverfull MM tote unites timeless design with heritage details. Made from supple Monogram canvas with natural cowhide trim, it is roomy yet not bulky, with side laces that cinch for a sleek allure or loosen for a casual look. Slim, comfortable handles', '12.6 x 11.4 x 6.7 inches\r\n(Length x Height x Width)\r\nBeige\r\nMonogram coated canvas\r\nNatural cowhide-leather trim\r\nStriped textile lining\r\nGold-color hardware\r\n2 top handles for hand, elbow or shoulder carry\r\nHook closure\r\nFlat, textile-lined zipped inside pocket\r\nRemovable zipped pouch\r\n4 side laces\r\nD-ring'),
(7, 'FIT-AND-FLARE DRESS', 630000, 650000, 'FIT-AND-FLARE DRESS.webp', NULL, NULL, NULL, '', 1, 8, 3, 'The collar of this fit-and-flare dress is held in place with a fully functional zip, allowing it to be removed for a clean neckline, or secured in place and tied into a lavallière. The House’s signature Initial and Monogram Flower motifs discreetly embellish button details, giving this casual summer piece a pared-back finish.', 'Detailed Features\r\nLength: 85cm/33.4 inches\r\nOuter material: 97% Cotton 3% Elastane\r\nLining: 100% Cotton\r\nWhite\r\nRegular fit\r\nModel wears size 36\r\nModel measurements: Bust 29,5\'\' / 75 cm, Height 5\' 11\" / 180 cm, Waist 22,5\'\' / 57 cm, Hips 33\'\' / 84 cm\r\nMade in Italy\r\nDo not wash\r\nDo not bleach\r\nDo not tumble dry\r\nIron at a maximum sole-plate temperature of 110°C\r\nMild professional dry cleaning in hydrocarbons'),
(10, 'Monogram Wool Cashmere Blend Oversized Cardigan', 1000000, 2100000, 'Monogram Wool Cashmere Blend Oversized Cardigan.png', NULL, NULL, NULL, NULL, 0, 6, 5, 'An oversized cardigan in a double-faced wool and cashmere blend, jacquard-woven with our Monogram motif and finished with rib-knit trims.\r\nThis style fits large to size. For a regular fit, please take a size smaller than normal.\r\nCardigan length: 74cm/29.1in. This is based on a size UK S as proportions change slightly according to size.\r\nModel’s height: 180cm/5ft 11in. Model wears size UK S.', 'Outer: 40% polyester, 40% wool, 17% cashmere, 2% polyamide, 1% elastane\r\nTrim: 69% wool, 29% cashmere, 1% elastane, 1% polyamide\r\nPatch pockets\r\nSpecialist dry clean\r\nImported\r\nItem 80287211'),
(11, 'Scarf Tie Detail Technical Wool Point-toe Mules', 2000000, 3000000, 'Scarf Tie Detail Technical Wool Point-toe Mules.png', NULL, NULL, NULL, NULL, 0, 5, 5, 'Point-toe mules in technical wool, sculpted with wraparound scarf ties and a slanted block heel.\r\nUpper: 96% wool, 4% polyamide\r\nLining: 88% sheep leather, 9% wool, 2% thermoplastic polyurethane, 1% polyamide\r\nSole: 100% leather\r\nSelf-tie ankle strap\r\nPointed toe\r\nHeel height: 10cm/3.9in\r\nMade in Italy', 'Item 80285941'),
(12, 'Latticed Leather Bucket Hat', 1000000, 2100000, 'Latticed Leather Bucket Hat.png', NULL, NULL, NULL, NULL, 0, 10, 5, 'A hand-woven bucket hat in intricately latticed leather, referencing our signature Vintage check. The style is lined in cotton twill.', 'Outer: 100% calf leather\r\nLining: 100% cotton\r\nMade in Italy\r\nItem 80295921'),
(13, 'Logo Graphic Canvas and Leather Louise Bag', 7000000, 7500000, 'Logo Graphic Canvas and Leather Louise Bag.png', NULL, NULL, NULL, NULL, 0, 7, 5, 'A mini round bag in cotton canvas and leather, highlighted with a printed logo graphic. The design is named after Queen Victoria’s daughter Louise – an artist and advocate for gender equality. Wear as a crossbody or detach the strap to carry as a clutch.\r\n17 x 7 x 17cm/6.7 x 2.8 x 6.7in\r\nMin. shoulder strap drop: 25cm/9.8in\r\nMax. shoulder strap drop: 55cm/21.7in', 'Outer: 100% cotton\r\nTrim: 100% leather\r\nLining: 71% cotton, 29% polyamide\r\nLeather side handle\r\nDetachable, adjustable shoulder strap\r\nTwo interior card slots\r\nTwo interior compartments\r\nZip closure\r\nHand-painted edges\r\nPolished metal hardware\r\nMade in Italy\r\nItem 80276021'),
(16, 'Crystal Pinstriped Ruched Jersey Dress', 1000000, 1500000, 'Crystal Pinstriped Ruched Jersey Dress.png', NULL, NULL, NULL, NULL, 0, 8, 5, 'A long-sleeved dress in ruched jersey knitted with a hint of silk, featuring a cinched waist inspired by Victorian corsetry. The design is decorated with crystal pinstripes.', 'Dress length: 100cm/39.4in\r\nModel’s height: 176cm/5ft 9in\r\nOuter: 81% viscose, 19% Mulberry silk\r\nLining: 74% polyamide, 26% elastane\r\nFront and back zip closure\r\nSpecialist dry clean\r\nMade in Italy\r\nItem 45644331'),
(18, 'Navy Blue Jacquard with Green and White Tie & Dior', 1200000, 1300000, 'Navy Blue Jacquard with Green and White Tie _ Dior Pattern.png', NULL, NULL, NULL, NULL, 0, 6, 1, 'The navy blue shell is crafted in thick compact knit jacquard. Adorned with the House\'s signature green and white Tie & Dior motif, it has a classic crewneck and a slim fit. Sleeveless and easy to layer, it can be worn under the matching cardigan.\r\n\r\nNavy blue compact knit jacquard with green and white Tie & Dior pattern\r\nCrewneck\r\nSleeveless\r\n66% viscose, 18% nylon, 14% elastane, 2% polyurethane\r\nMade in Italy', 'The model measures 179 cm and is wearing the item in size 36 (FR).'),
(20, 'Tweed vest with detachable cape', 2100000, 3000000, 'Tweed vest with detachable cape.png', NULL, NULL, NULL, NULL, 0, 6, 6, 'Style ‎627337 ZAD93 9053\r\nPart of a tone-on-tone look, this off-white light tweed damier vest features a wide collar and patch pockets. The design comes with a detachable cape, enhancing the item\'s dramatic appeal. Bon ton inspired silhouettes play a central role in shaping Gucci\'s new idea of femininity, reimagined within a contemporary aesthetic imbued with ladylike vibes.', 'Off-white light tweed damier\r\nHorn buttons\r\nDiagonal Interlocking G stripe jacquard lining\r\nDetachable cape\r\nVest with wide collar and patch pockets\r\nExternal fabric: 61% cotton and 39% wool Lining: 73% acetate and 27% silk\r\nMade in Italy\r\nThe model is 5\'9\" tall. The product shown in this image is a size 40 (IT)'),
(21, 'Wool tweed jacket', 21000000, 22005000, 'Wool tweed jacket.png', NULL, NULL, NULL, NULL, 0, 6, 6, 'Style ‎619267 ZAD82 5175\r\nTaking cues from 1960s fashion, this bubblegum pink soft wool tweed jacket has a cropped cut and a slight cocoon shape. Contrast buttons, a rounded lapel and front patch pockets emphasize the silhouette’s vintage feel. Bon ton inspired designs play a central role in shaping Gucci\'s new idea of femininity. The jacket is presented in a pastel ensemble with its coordinating tonal skirt.', 'Pink soft wool tweed\r\nInterlocking G leather buttons\r\nRounded notch lapel\r\nButton-through patch pockets\r\nSlightly oversize\r\nExternal fabric: 92% wool and 8% polyamide Lining: 100% viscose\r\nMade in Italy\r\nThe model is 5\'7\". The product shown in this image is a size 42 (IT)'),
(22, 'Short tweed dress', 10000000, 12000000, 'Short tweed dress.png', NULL, NULL, NULL, NULL, 0, 8, 6, 'Style ‎631480 ZAD93 9053\r\nBon ton inspired silhouettes play a central role in shaping Gucci\'s new idea of femininity, reimagined within a contemporary aesthetic imbued with ladylike vibes. Crafted from off-white light tweed damier, this dress is designed with short sleeves and a round scoop neck. Enameled Interlocking G buttons embellish the front patch pockets.', 'Off-white light tweed damier\r\nGold-toned Interlocking G metal buttons with ivory enamel\r\nUnlined\r\nRound scoop neck\r\nShort sleeves\r\nFlap patch pockets with button\r\nBack zip closure\r\nLength: 34\" based on a size 40 (IT)\r\nExternal fabric: 61% cotton and 39% wool Lining: 73% acetate and 27% silk\r\nMade in Italy\r\nThe model is 5\'9\". The product shown in this image is a size 40 (IT)'),
(23, 'Wool tweed midi skirt with slit', 2000000, 2100000, 'Wool tweed midi skirt with slit.png', NULL, NULL, NULL, NULL, 0, 8, 6, 'Style ‎627497 ZAD82 5175\r\nHigh-waisted skirts with daring slits are part of the femininity that defines the new aesthetic of Gucci, one that mixes ladylike vibes with what the Creative Director described as a “beautiful cliché of sexiness.\" Crafted from bubblegum pink soft wool tweed, a distinctive bon ton fabric, this skirt is presented in a pastel ensemble with its coordinating tonal jacket inspired by the ‘60s.', 'Pink soft wool tweed\r\nFront left slit, 25\" high\r\nSide zip closure\r\nSits high on the waist; ankle length\r\nLength: 37\"\r\nPlease note, the slit is designed to be easily altered to a lower length or closed as desired.\r\nMeasurements are based on a size 40 (IT)\r\nExternal fabric: 92% wool and 8% polyamide Lining: 100% viscose\r\nMade in Italy\r\nThe model is 5\'7\". The product shown in this image is a size 40 (IT)'),
(24, 'High collar sweater', 2000000, 3000000, 'High collar sweater.png', NULL, NULL, NULL, NULL, 0, 6, 8, 'High collar sweater in silk and cashmere knit (50% silk, 50% cashmere)\r\n- Chest with \"Caleche\" embroidery\r\nMade in Italy', 'Model is 1m80 / 5\'11\" and wearing a size 38.'),
(25, 'Supple trench coat', 1000000, 2100000, 'Supple trench coat.png', NULL, NULL, NULL, NULL, 0, 6, 8, 'Supple trench coat in double-sided cashmere (100% cashmere)\r\n\r\n- Collar and flat button fastening with horn buttons\r\n- Front and pocket flap fastening with horn buttons\r\n\r\nMade in Italy\r\n', 'Model is 1m80 / 5\'11\" and wearing a size 38.'),
(26, 'Voyage knit pants', 4000000, 5000000, 'Voyage knit pants.png', NULL, NULL, NULL, NULL, 0, 1, 8, 'Pants in \"Voyage\" merinos wool knit (100% virgin wool)\r\n\r\n- Two palladium-plated details\r\n- Knit pouch\r\n\r\nMade in Italy', 'Model is 1m79 / 5\'10.5\" and wearing a size 38.'),
(27, 'Clic H Zebres de Tanzanie bracelet', 23000000, 24600000, 'Clic H Zebres de Tanzanie bracelet.png', NULL, NULL, NULL, NULL, 0, 9, 8, 'Narrow bracelet in \"Zebres de Tanzanie\" printed enamel with rose gold plated hardware.\r\n\r\nMade in France\r\n', 'Circumference: 7.5\" | Width: .47\"'),
(28, 'MEDUSA BUTTON WOOL SAFARI JACKET', 12000000, 13000000, 'MEDUSA BUTTON WOOL SAFARI JACKET.png', NULL, NULL, NULL, NULL, 0, 6, 7, 'Inspired by the notion of embarking on a city safari, this jacket is embellished with four cargo pockets. The lightly flared style is enriched with heritage gold-tone Medusa buttons', 'Single-breasted\r\nMedusa buttons\r\nCargo pockets\r\nOuter fabric: 96% Virgin wool, 4% Elastane\r\nLining: 100% Cupro\r\nDelicate dry clean\r\nDo not wash\r\nProtect accessory before washing\r\nDo not bleach\r\nDo not tumble dry\r\nCool iron\r\nMade in Italy'),
(29, 'SAFETY PIN LEATHER SANDALS', 1200000, 1500000, 'SAFETY PIN LEATHER SANDALS.png', NULL, NULL, NULL, NULL, 0, 5, 7, 'Intrinsically glamorous, these supple leather sandals add a dose of attitude to an array of occasions with bold zipper accents and statement Safety Pin hardware', 'Zipper accents\r\nSafety Pin hardware\r\nSquared toe\r\nMid-high heel\r\nOuter fabric: 100% Leather\r\nInsole: 100% Leather\r\nSole: 100% Leather\r\nMade in Italy'),
(30, 'BRAIDED LEATHER CHARM BRACELET', 1000000, 2100000, 'BRAIDED LEATHER CHARM BRACELET.png', NULL, NULL, NULL, NULL, 0, 9, 7, 'Braided leather charm bracelet with gold tone metal accents featuring a Medusa clip charm with lobster closure. All Versace Jewelry products are lead and nickel free. All the materials are hypoallergenic', 'Braided leather\r\nLobster closure\r\nIncludes Medusa charm\r\nMore charms sold separately\r\n100% Calf Leather\r\n100% Metal\r\nPlease note that water and perfume can damage the item.'),
(34, 'VIRTUS LARGE SADDLE BAG', 2000000, 2100000, 'VIRTUS LARGE SADDLE BAG.png', NULL, NULL, NULL, NULL, 0, 7, 7, 'The newest addition to the Virtus line, this exceptional saddle bag is crafted from supple calf leather. The style boasts an elegant, curved silhouette accentuated by iconic Barocco V hardware that represents courage, strength and character of Virtus - a Roman deity after which the coveted handbag line is named', 'Barocco V hardware\r\nAdjustable shoulder strap\r\nMagnetic flap over closure\r\nInternal flat pocket\r\nOuter fabric: 100% Leather\r\nLining: 100% Leather\r\nMade in Italy'),
(35, 'Fur coats', 1000000, 2100000, 'product-home1.png', NULL, NULL, NULL, NULL, 0, 13, 1, 'Jersey sweatshirt with heart print and dg love patch embellishment\r\n', 'For the new DGARTWORK jersey capsule collection, Dolce&Gabbana is playing around with T-shirts and sweatshirts so they can be worn for any occasion and at any time. Punk Rock provides the inspiration, a movement that historically emerged in the United States in the mid-70s, yet it was in Great Britain that it would develop, especially from the perspective of the aesthetic. The features and details that distinguish this movement have been reworked and imbued with a new, contemporary witty feel. T'),
(36, 'Umbrella jacket', 2000000, 2300000, 'product-home2.png', NULL, NULL, NULL, NULL, 0, 13, 2, 'For the new DGARTWORK jersey capsule collection, Dolce&Gabbana is playing around with T-shirts and sweatshirts so they can be worn for any occasion and at any time. Punk Rock provides the inspiration, a movement that historically emerged in the United States in the mid-70s, yet it was in Great Britain that it would develop, especially from the perspective of the aesthetic. The features and details that distinguish this movement have been reworked and imbued with a new, contemporary witty feel. T', 'External composition: 100% Cotton\r\n'),
(37, 'Cozy Back', 1200000, 1800000, 'banner-limit.png', NULL, NULL, NULL, NULL, 0, 7, 8, 'Bag in Evercolor calfskin with adjustable strap, two pockets and palladium plated hardware', 'Complementary to Evergrain calfskin, this leather has a similar suppleness and comes in a wide palette of \"forever\" colors!\r\nFirst appeared in the collections: 2012\r\nAppearance: Satiny; small, regular grain obtained by printing\r\nFeel: Grain more visible than that of Evergrain calfskin\r\nHand: Supple and soft\r\nChange over time: Softens and becomes shinier');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag`
--

CREATE TABLE `tag` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `hot` tinyint(1) DEFAULT 0 COMMENT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tag`
--

INSERT INTO `tag` (`id`, `name`, `hot`) VALUES
(1, 'bracelet', 1),
(2, 'dress', 1),
(4, 'hat', 1),
(6, 'jacket', 1),
(7, 'short', 1),
(8, 'coat', 1),
(9, 'Wool', 1),
(10, 'vest', 1),
(11, 'oversize', 1),
(12, 'high', 1),
(13, 'bag', 0),
(14, 'large', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 là user\r\n1 là admin',
  `hinh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `adress` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `role`, `hinh`, `email`, `phone`, `adress`) VALUES
(1, 'User', 'user', '1234', 0, NULL, 'aaa@gmail.com', NULL, NULL),
(2, 'admin', 'admin', '1234', 1, NULL, NULL, NULL, NULL),
(4, 'Lực', 'lucdt', '1234', 0, NULL, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD PRIMARY KEY (`id_cart`,`id_product`),
  ADD KEY `FK_productdetail` (`id_product`);

--
-- Chỉ mục cho bảng `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_productcomment` (`id_product`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_PersonOrder` (`id_catalog`),
  ADD KEY `FK_brand` (`id_brand`);

--
-- Chỉ mục cho bảng `tag`
--
ALTER TABLE `tag`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT cho bảng `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `tag`
--
ALTER TABLE `tag`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cart_detail`
--
ALTER TABLE `cart_detail`
  ADD CONSTRAINT `FK_detail` FOREIGN KEY (`id_cart`) REFERENCES `cart` (`id`),
  ADD CONSTRAINT `FK_productdetail` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `FK_productcomment` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `FK_PersonOrder` FOREIGN KEY (`id_catalog`) REFERENCES `catalog` (`id`),
  ADD CONSTRAINT `FK_brand` FOREIGN KEY (`id_brand`) REFERENCES `brand` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
