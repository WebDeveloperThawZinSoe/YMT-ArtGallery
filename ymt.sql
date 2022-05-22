-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 09:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ymt`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  `create_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `name`, `password`, `status`, `create_date`) VALUES
(18, 'admin', 'ThdWpyewrPpVI', 0, '2022-05-21 20:22:52'),
(19, 'thaw zin soe', 'ThtIJz9FnwURk', 0, '2022-05-22 07:53:42');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `bio` text DEFAULT NULL,
  `create_date` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`id`, `name`, `image`, `bio`, `create_date`) VALUES
(7, 'Leonardo da Vinci Biography', '73_250-leonardo-da-vinci.jpg', 'Leonardo da Vinci (1452 – 1519) is one of the world’s greatest thinkers, artists and philosophers. Seeking after perfection, he created rare masterpieces of art such as ‘The Mona Lisa’ and The Last Supper.’', '2022-05-11'),
(8, 'vincent van gogh', '66_8472392-3x2-700x467.jpg', 'Vincent Willem van Gogh was a Dutch Post-Impressionist painter who posthumously became one of the most famous and influential figures in Western art history. In a decade, he created about 2,100 artworks, including around 860 oil paintings, most of which date from the last two years of his life.', '2022-05-11'),
(9, 'Rembrandt', '94_Rembrandt_aged51.jpeg', 'Rembrandt was born in Leiden in the Netherlands in 1606. It was during a period known as the ‘Dutch Golden Age’. He came from a reasonably wealthy family. His father was a miller and somehow managed to send his son to a Latin school and later the University of Leiden. His education and knowledge of scriptures later proved important when he sought to capture the essence of biblical scenes in his art.', '2022-05-11'),
(10, 'Michelangelo', '16_Michelangelo_Daniele_da_Volterra_(dettaglio).jpg', 'Michelangelo (1475–1564) Italian Renaissance sculptor, painter, poet and architect. One of the most influential Western artists of all time, he is famous for his Statue of David, The Pieta and the great paintings of the Sistine Chapel, The Vatican.\r\n\r\n', '2022-05-11'),
(11, 'Claude Monet', '44_Claude_Monet_1899_Nadar_crop.jpg', 'Claude Monet (1840-1926) was the primary inspiration for the new art movement of impressionism. Along with his contemporaries, he captured the light of nature on canvas in a unique, spontaneous and vivacious style. He painted a wide range of subjects ranging from urban scenes to his own beloved formal garden. Monet strove to capture the essence of what he saw in nature, without being constrained by formal ideas of style and substance.', '2022-05-11'),
(12, 'Pablo Picasso', '80_pablo-picasso-at-his-home-in-cannes-circa-1960-photo-by-popperfoto_getty-images.jpg', 'Pablo Picasso (1881 – 1973) Spanish painter, sculptor, ceramicist and poet. Picasso was a founder of Cubism and one of the most influential artists of the Twentieth Century. Picasso was an influential peace activist whose art touched on the horrors of war.', '2022-05-11'),
(13, 'Auguste Renoir', '85_download (6).jfif', 'Auguste Renoir (1841–1919) was one of the founders of impressionism – a revolutionary new development amongst young painters, seeking to develop art in less formal directions. Renoir continued to innovate throughout his life – moving on from impressionism after being deeply moved by the Italian Renaissance Masters. He was famous for his rich, colourful paintings of Parisiens, which captured the excitement and life of Paris around the turn of the century.', '2022-05-11');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `create_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `title`, `phone`, `message`, `create_date`) VALUES
(7, 'Thaw Zin Soe', '09403077739', 'No 9/689\r\nShwepadar Street , East Dagon', '2022-05-09'),
(8, 'Thiri San', '09251016448', 'North Dangon', '2022-05-09'),
(9, 'Tester', '199', 'This is testing\r\n', '2022-05-09'),
(10, 'Baby Thaw', '111', 'Testing', '2022-05-09'),
(11, '&lt;script&gt; alert(1) &lt;/script&gt;', '1111', '&lt;script&gt; alert(1) &lt;/script&gt;', '2022-05-12'),
(12, 'Testing ', '09403077739', 'No 9/689\r\nShwepadar Street , East Dagon', '2022-05-21 20:31:54');

-- --------------------------------------------------------

--
-- Table structure for table `contact_page`
--

CREATE TABLE `contact_page` (
  `main_text` varchar(225) NOT NULL,
  `secondary_text` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `content_text` text NOT NULL,
  `map` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_page`
--

INSERT INTO `contact_page` (`main_text`, `secondary_text`, `image`, `content_text`, `map`, `address`) VALUES
('WELCOME FROM YMT ART GALLERY', 'Contact Page', '97_images (4).jfif', 'Looking for inspiration for your Contact Us page? See these 39 amazing examples from ecommerce, SaaS, agencies, and other brands.', '9/689 East Dagon Yangon', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15276.304635496479!2d96.12119426977537!3d16.822577499999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c19594833192b5%3A0xc1cb7786f279825e!2sKBTC%20University!5e0!3m2!1sen!2smm!4v1652402271157!5m2!1sen!2smm\" width=\"100%\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `dasktop_style`
--

CREATE TABLE `dasktop_style` (
  `background_color` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`name`) VALUES
('99_logo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `logo_style`
--

CREATE TABLE `logo_style` (
  `style` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logo_style`
--

INSERT INTO `logo_style` (`style`) VALUES
('rounded-circle');

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `name`, `link`) VALUES
(1, 'facebook', 'https://www.facebook.com/yemyat.amz'),
(2, 'instergram', 'https://www.instagram.com/p/CdQsoM5vCrb/?igshid=YmMyMTA2M2Y='),
(3, 'phone', '09791946212'),
(4, 'email', 'ymtartgallery@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_style`
--

CREATE TABLE `mobile_style` (
  `background_color` varchar(255) NOT NULL,
  `color` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist_id` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` varchar(255) NOT NULL,
  `status` int(2) NOT NULL,
  `create_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `artist_id`, `category_id`, `image`, `description`, `price`, `status`, `create_date`) VALUES
(1, 'Pierre-Auguste Renoir', '13', NULL, '7_1.jpg', 'Among all the painters of the Impressionist group, Pierre-Auguste Renoir (1841-1919) was possibly the most prolific, the most focused on classical themes as opposed to the modernity of iron bridges or train stations, and the one with the most disconcerting career. A staunch defender of Impressionism during the 1870s, participating in all the Impressionist Exhibitions, in the following decade he abruptly abandoned the Impressionist style, but not -as was the case with Cézanne or Gauguin- to venture into the unexplored territories of what has been called Post-Impressionism, but to return to a more classical style, of an “Ingresque” precision, which would evolve, during the last two decades of his life, towards a personal classicism in which the influences of masters such as Rubens can be appreciated.', '400000', 0, '2022-05-12'),
(2, 'Michelangelo ITALIAN PAINTER, SCULPTOR, POET, AND ARCHITECT', '10', NULL, '11_michelangelo_5.jpg', 'ITALIAN PAINTER, SCULPTOR, POET, AND ARCHITECT\r\n\r\nBorn: March 6, 1475 - Caprese, Arezzo, Florence\r\nDied: February 18, 1564 - Rome', '18000', 0, '2022-05-12'),
(3, 'Rembrandt van Rijn (1606-1669)', '9', NULL, '42_pieter-lastman-de-prediking-van-johannes-de-doper-mh1219-mauritshuis.jpg', 'Rembrandt van Rijn was a Dutch 17th-century painter, and one of the most interesting artists of all time. His paintings are full of drama, contrasts between light and dark and experimental brushwork, and are famous all over the world. His lively and original images still touch people today. Rembrandt’s work is unbelievably varied. He mainly made history paintings and portraits, though he also painted landscapes and still lifes. Rembrandt made almost 300 paintings and many prints and drawings in his career.', '18500', 0, '2022-05-12'),
(4, 'Rembrandt: Newly discovered work to go on display', '9', NULL, '95__109315465_rembrandt.jpg', 'A newly discovered Rembrandt painting depicting a well-known Biblical scene is to be shown in the UK for the first time.\r\n\r\nLet the Little Children Come to Me was listed as &quot;Dutch School, mid 17th century&quot; at a 2014 German auction but has since been credited as a Rembrandt.\r\n\r\nA technical examination revealed the canvas had largely been painted over later in the seventeenth century.\r\n\r\nIt was discovered by the Amsterdam art dealer, Jan Six.\r\n\r\nSix is a direct descendant of his namesake, who was painted by his friend Rembrandt van Rijn in 1654.\r\n\r\nThe figure wearing white at the top of the painting, dated between 1627 and 1628, has been verified as a self-portrait.', '18000', 0, '2022-05-12'),
(5, 'Rembrandt', '9', NULL, '42_images (1).jfif', 'Compare me with Rembrandt! What sacrilege! With Rembrandt, the colossus of Art! What are you thinking of, my friend! We should prostrate ourselves before Rembrandt and never compare anyone with him!', '18000', 0, '2022-05-12'),
(6, 'The Experimental Printmaker', '8', NULL, '41_unnamed.jpg', 'When Rembrandt first took up printmaking in the late 1620s, prints were characterized by a careful system of stylized lines used by engravers from Albrecht Dürer (German, 1471–1528) to Hendrick Goltzius (Dutch, 1558–1616). ', '199999', 0, '2022-05-12'),
(7, 'Remember when Eve bit into the…fig?!', '10', NULL, '68_21f9b3d0-79cd-4af1-9478-30f0cb936c04bfa5c6b93cc280484a_Forbidden_fruit.jpg', 'A Detail You May Not Have Noticed in Michelangelo’s Sistine Chapel Fresco', '3000', 1, '2022-05-12'),
(8, 'The master and Michelangelo', '7', NULL, '61_images (2).jfif', 'This is the story of three great cities of the Italian Renaissance, two exceptional artists and one revolutionary new medium. Michelangelo Buonarroti was from Florence, where drawing – disegno – was considered the father of all arts. Sebastiano del Piombo, ten years younger, came from Venice, where cross-continental trade brought rare minerals and pigments to artists who became masters of colour – colorito. The two men met where all roads meet, in Rome.', '12000', 0, '2022-05-12'),
(9, 'Le Bassin aux nymphéas', '8', NULL, '97_restricted.jfif', 'Le Bassin aux nymphéas (Water Lily Pond, 1919), a celebrated work from Charles Monet’s iconic Water Lilies series of paintings, was sold for near $70.4 million (€58.3 million) in New York on Tuesday.', '3000', 0, '2022-05-12'),
(10, 'Monets art garden', '8', NULL, '1_download (8).jfif', 'Many of the flowers and trees Monet planted in his garden were exotic specimens that were becoming popular in France at the beginning of the 20th century.', '18000', 1, '2022-05-12'),
(11, 'Painting as a patriotic duty', '7', NULL, '94_57482880_401.jpg', 'Monet referred to such works as great decorations intended to distract from the suffering caused by the war. The day after the armistice of November 11, 1918, Monet donated two large-scale water lily works to the French state as a symbol of peace', '18500', 1, '2022-05-12'),
(12, 'A cottage on a rock', '7', NULL, '9_37221920_303.jpg', 'Like many other of Claude Monets works this 1882 painting depicting a cottage is dominated by water. The sea is rough and the wind blows through the bushes surrounding the modest hut. The colors are earthy and heavy. But Monets brush works quickly, eternalizing a fleeting moment in nature.', '18500', 1, '2022-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `seo`
--

CREATE TABLE `seo` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `keywords` text NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `seo`
--

INSERT INTO `seo` (`id`, `description`, `keywords`, `author`) VALUES
(0, 'Our indoor and outdoor exhibitions are family-friendly and enjoyable for all ages! Enjoy the best free places to visit in Norfolk, VA! A Family Favorite. Unlimited Family Fun. Self Guided Tours. Affordable Fun. Highly Rated. Historic Hermitage. Iconic Location. Tours Available.', 'Art , Gallery , Painting', 'Thaw Zin SOe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
