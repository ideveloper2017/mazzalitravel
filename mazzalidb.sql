-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 09, 2024 at 09:00 AM
-- Server version: 5.7.39
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mazzalidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Administrator',
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `phone`, `role`, `photo`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '01629552892', 'Administrator', '1547095032review-profile.png', '$2y$10$p35S2FczpEfpbe41CX4j4.XE548tHBtF5weGLPxZ56MX5dsOFtaCC', 1, 'OpErryvxkLU5yoCpFMRTeIiq3x77dtxtUJugQUCBDyKdW5XJkn66Nyf7ffFt', '2018-02-28 23:27:08', '2019-01-22 06:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(191) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `source` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `meta_tag` text COLLATE utf8mb4_unicode_ci,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `title`, `details`, `photo`, `source`, `views`, `status`, `meta_tag`, `meta_description`, `tags`, `created_at`, `updated_at`) VALUES
(9, 2, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a \r\ndrifting tone like that of a not-quite-tuned-in radio station \r\n                                        rises and for a while drowns out\r\n the patter. These are the sounds encountered by NASA’s Cassini \r\nspacecraft as it dove \r\n                                        the gap between Saturn and its \r\ninnermost ring on April 26, the first of 22 such encounters before it \r\nwill plunge into \r\n                                        atmosphere in September. What \r\nCassini did not detect were many of the collisions of dust particles \r\nhitting the spacecraft\r\n                                        it passed through the plane of \r\nthe ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\">How its Works ?</h3>\r\n                                    <p align=\"justify\">\r\n                                        MIAMI — For decades, South \r\nFlorida schoolchildren and adults fascinated by far-off galaxies, \r\nearthly ecosystems, the proper\r\n                                        ties of light and sound and \r\nother wonders of science had only a quaint, antiquated museum here in \r\nwhich to explore their \r\n                                        interests. Now, with the \r\nlong-delayed opening of a vast new science museum downtown set for \r\nMonday, visitors will be able \r\n                                        to stand underneath a suspended,\r\n 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, \r\nmahi mahi, devil\r\n                                        rays and other creatures through\r\n a 60,000-pound oculus. <br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of\r\n a huge cocktail glass. And that’s just one of many\r\n                                        attractions and exhibits. \r\nOfficials at the $305 million Phillip and Patricia Frost Museum of \r\nScience promise that it will be a \r\n                                        vivid expression of modern \r\nscientific inquiry and exposition. Its opening follows a series of \r\nsetbacks and lawsuits and a \r\n                                        scramble to finish the \r\n250,000-square-foot structure. At one point, the project ran \r\nprecariously short of money. The museum\r\n                                        high-profile opening is \r\nespecially significant in a state s <br></p><p align=\"justify\"><br></p><h3 align=\"justify\">Top 5 reason to choose us</h3>\r\n                                    <p align=\"justify\">\r\n                                        Mauna Loa, the biggest volcano \r\non Earth — and one of the most active — covers half the Island of \r\nHawaii. Just 35 miles to the \r\n                                        northeast, Mauna Kea, known to \r\nnative Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea \r\nlevel. To them it repre\r\n                                        sents a spiritual connection \r\nbetween our planet and the heavens above. These volcanoes, which have \r\nbeguiled millions of \r\n                                        tourists visiting the Hawaiian \r\nislands, have also plagued scientists with a long-running mystery: If \r\nthey are so close together, \r\n                                        how did they develop in two \r\nparallel tracks along the Hawaiian-Emperor chain formed over the same \r\nhot spot in the Pacific \r\n                                        Ocean — and why are their \r\nchemical compositions so different? \"We knew this was related to \r\nsomething much deeper,\r\n                                        but we couldn’t see what,” said \r\nTim Jones.\r\n                                    </p>', '15498643581.jpg', 'www.geniusocean.com', 26, 1, NULL, NULL, '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2018-02-06 09:53:41', '2019-02-11 05:52:38'),
(10, 3, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a \r\ndrifting tone like that of a not-quite-tuned-in radio station \r\n                                        rises and for a while drowns out\r\n the patter. These are the sounds encountered by NASA’s Cassini \r\nspacecraft as it dove \r\n                                        the gap between Saturn and its \r\ninnermost ring on April 26, the first of 22 such encounters before it \r\nwill plunge into \r\n                                        atmosphere in September. What \r\nCassini did not detect were many of the collisions of dust particles \r\nhitting the spacecraft\r\n                                        it passed through the plane of \r\nthe ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\">How its Works ?</h3>\r\n                                    <p align=\"justify\">\r\n                                        MIAMI — For decades, South \r\nFlorida schoolchildren and adults fascinated by far-off galaxies, \r\nearthly ecosystems, the proper\r\n                                        ties of light and sound and \r\nother wonders of science had only a quaint, antiquated museum here in \r\nwhich to explore their \r\n                                        interests. Now, with the \r\nlong-delayed opening of a vast new science museum downtown set for \r\nMonday, visitors will be able \r\n                                        to stand underneath a suspended,\r\n 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, \r\nmahi mahi, devil\r\n                                        rays and other creatures through\r\n a 60,000-pound oculus. <br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of\r\n a huge cocktail glass. And that’s just one of many\r\n                                        attractions and exhibits. \r\nOfficials at the $305 million Phillip and Patricia Frost Museum of \r\nScience promise that it will be a \r\n                                        vivid expression of modern \r\nscientific inquiry and exposition. Its opening follows a series of \r\nsetbacks and lawsuits and a \r\n                                        scramble to finish the \r\n250,000-square-foot structure. At one point, the project ran \r\nprecariously short of money. The museum\r\n                                        high-profile opening is \r\nespecially significant in a state s <br></p><p align=\"justify\"><br></p><h3 align=\"justify\">Top 5 reason to choose us</h3>\r\n                                    <p align=\"justify\">\r\n                                        Mauna Loa, the biggest volcano \r\non Earth — and one of the most active — covers half the Island of \r\nHawaii. Just 35 miles to the \r\n                                        northeast, Mauna Kea, known to \r\nnative Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea \r\nlevel. To them it repre\r\n                                        sents a spiritual connection \r\nbetween our planet and the heavens above. These volcanoes, which have \r\nbeguiled millions of \r\n                                        tourists visiting the Hawaiian \r\nislands, have also plagued scientists with a long-running mystery: If \r\nthey are so close together, \r\n                                        how did they develop in two \r\nparallel tracks along the Hawaiian-Emperor chain formed over the same \r\nhot spot in the Pacific \r\n                                        Ocean — and why are their \r\nchemical compositions so different? \"We knew this was related to \r\nsomething much deeper,\r\n                                        but we couldn’t see what,” said \r\nTim Jones.\r\n                                    </p>', '15498643494.jpg', 'www.geniusocean.com', 14, 1, NULL, NULL, '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2018-03-06 09:54:21', '2019-02-11 05:52:29'),
(12, 2, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a \r\ndrifting tone like that of a not-quite-tuned-in radio station \r\n                                        rises and for a while drowns out\r\n the patter. These are the sounds encountered by NASA’s Cassini \r\nspacecraft as it dove \r\n                                        the gap between Saturn and its \r\ninnermost ring on April 26, the first of 22 such encounters before it \r\nwill plunge into \r\n                                        atmosphere in September. What \r\nCassini did not detect were many of the collisions of dust particles \r\nhitting the spacecraft\r\n                                        it passed through the plane of \r\nthe ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\">How its Works ?</h3>\r\n                                    <p align=\"justify\">\r\n                                        MIAMI — For decades, South \r\nFlorida schoolchildren and adults fascinated by far-off galaxies, \r\nearthly ecosystems, the proper\r\n                                        ties of light and sound and \r\nother wonders of science had only a quaint, antiquated museum here in \r\nwhich to explore their \r\n                                        interests. Now, with the \r\nlong-delayed opening of a vast new science museum downtown set for \r\nMonday, visitors will be able \r\n                                        to stand underneath a suspended,\r\n 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, \r\nmahi mahi, devil\r\n                                        rays and other creatures through\r\n a 60,000-pound oculus. <br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of\r\n a huge cocktail glass. And that’s just one of many\r\n                                        attractions and exhibits. \r\nOfficials at the $305 million Phillip and Patricia Frost Museum of \r\nScience promise that it will be a \r\n                                        vivid expression of modern \r\nscientific inquiry and exposition. Its opening follows a series of \r\nsetbacks and lawsuits and a \r\n                                        scramble to finish the \r\n250,000-square-foot structure. At one point, the project ran \r\nprecariously short of money. The museum\r\n                                        high-profile opening is \r\nespecially significant in a state s <br></p><p align=\"justify\"><br></p><h3 align=\"justify\">Top 5 reason to choose us</h3>\r\n                                    <p align=\"justify\">\r\n                                        Mauna Loa, the biggest volcano \r\non Earth — and one of the most active — covers half the Island of \r\nHawaii. Just 35 miles to the \r\n                                        northeast, Mauna Kea, known to \r\nnative Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea \r\nlevel. To them it repre\r\n                                        sents a spiritual connection \r\nbetween our planet and the heavens above. These volcanoes, which have \r\nbeguiled millions of \r\n                                        tourists visiting the Hawaiian \r\nislands, have also plagued scientists with a long-running mystery: If \r\nthey are so close together, \r\n                                        how did they develop in two \r\nparallel tracks along the Hawaiian-Emperor chain formed over the same \r\nhot spot in the Pacific \r\n                                        Ocean — and why are their \r\nchemical compositions so different? \"We knew this was related to \r\nsomething much deeper,\r\n                                        but we couldn’t see what,” said \r\nTim Jones.\r\n                                    </p>', '15498643393.jpg', 'www.geniusocean.com', 19, 1, NULL, NULL, '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2018-04-06 22:04:20', '2019-02-11 05:52:19'),
(13, 3, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a \r\ndrifting tone like that of a not-quite-tuned-in radio station \r\n                                        rises and for a while drowns out\r\n the patter. These are the sounds encountered by NASA’s Cassini \r\nspacecraft as it dove \r\n                                        the gap between Saturn and its \r\ninnermost ring on April 26, the first of 22 such encounters before it \r\nwill plunge into \r\n                                        atmosphere in September. What \r\nCassini did not detect were many of the collisions of dust particles \r\nhitting the spacecraft\r\n                                        it passed through the plane of \r\nthe ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\">How its Works ?</h3>\r\n                                    <p align=\"justify\">\r\n                                        MIAMI — For decades, South \r\nFlorida schoolchildren and adults fascinated by far-off galaxies, \r\nearthly ecosystems, the proper\r\n                                        ties of light and sound and \r\nother wonders of science had only a quaint, antiquated museum here in \r\nwhich to explore their \r\n                                        interests. Now, with the \r\nlong-delayed opening of a vast new science museum downtown set for \r\nMonday, visitors will be able \r\n                                        to stand underneath a suspended,\r\n 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, \r\nmahi mahi, devil\r\n                                        rays and other creatures through\r\n a 60,000-pound oculus. <br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of\r\n a huge cocktail glass. And that’s just one of many\r\n                                        attractions and exhibits. \r\nOfficials at the $305 million Phillip and Patricia Frost Museum of \r\nScience promise that it will be a \r\n                                        vivid expression of modern \r\nscientific inquiry and exposition. Its opening follows a series of \r\nsetbacks and lawsuits and a \r\n                                        scramble to finish the \r\n250,000-square-foot structure. At one point, the project ran \r\nprecariously short of money. The museum\r\n                                        high-profile opening is \r\nespecially significant in a state s <br></p><p align=\"justify\"><br></p><h3 align=\"justify\">Top 5 reason to choose us</h3>\r\n                                    <p align=\"justify\">\r\n                                        Mauna Loa, the biggest volcano \r\non Earth — and one of the most active — covers half the Island of \r\nHawaii. Just 35 miles to the \r\n                                        northeast, Mauna Kea, known to \r\nnative Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea \r\nlevel. To them it repre\r\n                                        sents a spiritual connection \r\nbetween our planet and the heavens above. These volcanoes, which have \r\nbeguiled millions of \r\n                                        tourists visiting the Hawaiian \r\nislands, have also plagued scientists with a long-running mystery: If \r\nthey are so close together, \r\n                                        how did they develop in two \r\nparallel tracks along the Hawaiian-Emperor chain formed over the same \r\nhot spot in the Pacific \r\n                                        Ocean — and why are their \r\nchemical compositions so different? \"We knew this was related to \r\nsomething much deeper,\r\n                                        but we couldn’t see what,” said \r\nTim Jones.\r\n                                    </p>', '15498643182.jpg', 'www.geniusocean.com', 57, 1, NULL, NULL, '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2018-05-06 22:04:36', '2019-02-11 05:51:58'),
(14, 2, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA’s Cassini spacecraft as it dove the gap between Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft it passed through the plane of the ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">How its Works ?</h3><p align=\"justify\">MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus.&nbsp;<br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s&nbsp;<br></p><p align=\"justify\"><br></p><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">Top 5 reason to choose us</h3><p align=\"justify\">Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level. To them it repre sents a spiritual connection between our planet and the heavens above. These volcanoes, which have beguiled millions of tourists visiting the Hawaiian islands, have also plagued scientists with a long-running mystery: If they are so close together, how did they develop in two parallel tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pacific Ocean — and why are their chemical compositions so different? \"We knew this was related to something much deeper, but we couldn’t see what,” said Tim Jones.</p>', '15498643101.jpg', 'www.geniusocean.com', 0, 1, NULL, NULL, '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2018-06-03 06:02:30', '2019-02-11 05:51:50'),
(15, 3, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA’s Cassini spacecraft as it dove the gap between Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft it passed through the plane of the ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">How its Works ?</h3><p align=\"justify\">MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus.&nbsp;<br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s&nbsp;<br></p><p align=\"justify\"><br></p><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">Top 5 reason to choose us</h3><p align=\"justify\">Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level. To them it repre sents a spiritual connection between our planet and the heavens above. These volcanoes, which have beguiled millions of tourists visiting the Hawaiian islands, have also plagued scientists with a long-running mystery: If they are so close together, how did they develop in two parallel tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pacific Ocean — and why are their chemical compositions so different? \"We knew this was related to something much deeper, but we couldn’t see what,” said Tim Jones.</p>', '15498643044.jpg', 'www.geniusocean.com', 5, 1, NULL, NULL, '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2018-07-03 06:02:53', '2019-02-11 12:02:41'),
(16, 2, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA’s Cassini spacecraft as it dove the gap between Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft it passed through the plane of the ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">How its Works ?</h3><p align=\"justify\">MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus.&nbsp;<br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s&nbsp;<br></p><p align=\"justify\"><br></p><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">Top 5 reason to choose us</h3><p align=\"justify\">Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level. To them it repre sents a spiritual connection between our planet and the heavens above. These volcanoes, which have beguiled millions of tourists visiting the Hawaiian islands, have also plagued scientists with a long-running mystery: If they are so close together, how did they develop in two parallel tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pacific Ocean — and why are their chemical compositions so different? \"We knew this was related to something much deeper, but we couldn’t see what,” said Tim Jones.</p>', '15498642973.jpg', 'www.geniusocean.com', 5, 1, NULL, NULL, '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2018-08-03 06:03:14', '2019-02-11 11:05:15'),
(17, 3, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA’s Cassini spacecraft as it dove the gap between Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft it passed through the plane of the ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">How its Works ?</h3><p align=\"justify\">MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus.&nbsp;<br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s&nbsp;<br></p><p align=\"justify\"><br></p><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">Top 5 reason to choose us</h3><p align=\"justify\">Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level. To them it repre sents a spiritual connection between our planet and the heavens above. These volcanoes, which have beguiled millions of tourists visiting the Hawaiian islands, have also plagued scientists with a long-running mystery: If they are so close together, how did they develop in two parallel tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pacific Ocean — and why are their chemical compositions so different? \"We knew this was related to something much deeper, but we couldn’t see what,” said Tim Jones.</p>', '15498642922.jpg', 'www.geniusocean.com', 49, 1, NULL, NULL, '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2019-01-03 06:03:37', '2019-04-06 05:10:58'),
(18, 2, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA’s Cassini spacecraft as it dove the gap between Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft it passed through the plane of the ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">How its Works ?</h3><p align=\"justify\">MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus.&nbsp;<br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s&nbsp;<br></p><p align=\"justify\"><br></p><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">Top 5 reason to choose us</h3><p align=\"justify\">Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level. To them it repre sents a spiritual connection between our planet and the heavens above. These volcanoes, which have beguiled millions of tourists visiting the Hawaiian islands, have also plagued scientists with a long-running mystery: If they are so close together, how did they develop in two parallel tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pacific Ocean — and why are their chemical compositions so different? \"We knew this was related to something much deeper, but we couldn’t see what,” said Tim Jones.</p>', '15498642851.jpg', 'www.geniusocean.com', 114, 1, '[{\"value\":\"hjk\"},{\"value\":\"hj\"},{\"value\":\"khj\"},{\"value\":\"kh\"},{\"value\":\"jkjh\"},{\"value\":\"k\"}]', 'Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level.', '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2019-01-03 06:03:59', '2019-04-06 05:09:24'),
(20, 2, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA’s Cassini spacecraft as it dove the gap between Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft it passed through the plane of the ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">How its Works ?</h3><p align=\"justify\">MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus.&nbsp;<br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s&nbsp;<br></p><p align=\"justify\"><br></p><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">Top 5 reason to choose us</h3><p align=\"justify\">Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level. To them it repre sents a spiritual connection between our planet and the heavens above. These volcanoes, which have beguiled millions of tourists visiting the Hawaiian islands, have also plagued scientists with a long-running mystery: If they are so close together, how did they develop in two parallel tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pacific Ocean — and why are their chemical compositions so different? \"We knew this was related to something much deeper, but we couldn’t see what,” said Tim Jones.</p>', '15498865263.jpg', 'www.geniusocean.com', 6, 1, NULL, NULL, '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2018-08-03 06:03:14', '2019-02-14 08:34:59'),
(21, 3, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA’s Cassini spacecraft as it dove the gap between Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft it passed through the plane of the ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">How its Works ?</h3><p align=\"justify\">MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus.&nbsp;<br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s&nbsp;<br></p><p align=\"justify\"><br></p><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">Top 5 reason to choose us</h3><p align=\"justify\">Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level. To them it repre sents a spiritual connection between our planet and the heavens above. These volcanoes, which have beguiled millions of tourists visiting the Hawaiian islands, have also plagued scientists with a long-running mystery: If they are so close together, how did they develop in two parallel tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pacific Ocean — and why are their chemical compositions so different? \"We knew this was related to something much deeper, but we couldn’t see what,” said Tim Jones.</p>', '15498865201.jpg', 'www.geniusocean.com', 34, 1, NULL, NULL, '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2019-01-03 06:03:37', '2019-02-12 11:04:18'),
(22, 2, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA’s Cassini spacecraft as it dove the gap between Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft it passed through the plane of the ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">How its Works ?</h3><p align=\"justify\">MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus.&nbsp;<br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s&nbsp;<br></p><p align=\"justify\"><br></p><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">Top 5 reason to choose us</h3><p align=\"justify\">Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level. To them it repre sents a spiritual connection between our planet and the heavens above. These volcanoes, which have beguiled millions of tourists visiting the Hawaiian islands, have also plagued scientists with a long-running mystery: If they are so close together, how did they develop in two parallel tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pacific Ocean — and why are their chemical compositions so different? \"We knew this was related to something much deeper, but we couldn’t see what,” said Tim Jones.</p>', '15498865144.jpg', 'www.geniusocean.com', 43, 1, '[{\"value\":\"hjk\"},{\"value\":\"hj\"},{\"value\":\"khj\"},{\"value\":\"kh\"},{\"value\":\"jkjh\"},{\"value\":\"k\"}]', 'Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level.', '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2019-01-03 06:03:59', '2024-01-08 09:18:07'),
(23, 2, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA’s Cassini spacecraft as it dove the gap between Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft it passed through the plane of the ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">How its Works ?</h3><p align=\"justify\">MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus.&nbsp;<br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s&nbsp;<br></p><p align=\"justify\"><br></p><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">Top 5 reason to choose us</h3><p align=\"justify\">Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level. To them it repre sents a spiritual connection between our planet and the heavens above. These volcanoes, which have beguiled millions of tourists visiting the Hawaiian islands, have also plagued scientists with a long-running mystery: If they are so close together, how did they develop in two parallel tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pacific Ocean — and why are their chemical compositions so different? \"We knew this was related to something much deeper, but we couldn’t see what,” said Tim Jones.</p>', '15498865073.jpg', 'www.geniusocean.com', 5, 1, NULL, NULL, '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2018-08-03 06:03:14', '2019-02-11 12:01:47');
INSERT INTO `blogs` (`id`, `category_id`, `title`, `details`, `photo`, `source`, `views`, `status`, `meta_tag`, `meta_description`, `tags`, `created_at`, `updated_at`) VALUES
(24, 3, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA’s Cassini spacecraft as it dove the gap between Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft it passed through the plane of the ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">How its Works ?</h3><p align=\"justify\">MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus.&nbsp;<br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s&nbsp;<br></p><p align=\"justify\"><br></p><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">Top 5 reason to choose us</h3><p align=\"justify\">Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level. To them it repre sents a spiritual connection between our planet and the heavens above. These volcanoes, which have beguiled millions of tourists visiting the Hawaiian islands, have also plagued scientists with a long-running mystery: If they are so close together, how did they develop in two parallel tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pacific Ocean — and why are their chemical compositions so different? \"We knew this was related to something much deeper, but we couldn’t see what,” said Tim Jones.</p>', '15498865022.jpg', 'www.geniusocean.com', 32, 1, NULL, NULL, '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2019-01-03 06:03:37', '2019-02-11 12:01:42'),
(25, 2, 'How to design effective arts?', '<div align=\"justify\">The recording starts with the patter of a summer squall. Later, a drifting tone like that of a not-quite-tuned-in radio station rises and for a while drowns out the patter. These are the sounds encountered by NASA’s Cassini spacecraft as it dove the gap between Saturn and its innermost ring on April 26, the first of 22 such encounters before it will plunge into atmosphere in September. What Cassini did not detect were many of the collisions of dust particles hitting the spacecraft it passed through the plane of the ringsen the charged particles oscillate in unison.<br><br></div><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">How its Works ?</h3><p align=\"justify\">MIAMI — For decades, South Florida schoolchildren and adults fascinated by far-off galaxies, earthly ecosystems, the proper ties of light and sound and other wonders of science had only a quaint, antiquated museum here in which to explore their interests. Now, with the long-delayed opening of a vast new science museum downtown set for Monday, visitors will be able to stand underneath a suspended, 500,000-gallon aquarium tank and gaze at hammerhead and tiger sharks, mahi mahi, devil rays and other creatures through a 60,000-pound oculus.&nbsp;<br></p><p align=\"justify\">Lens that will give the impression of seeing the fish from the bottom of a huge cocktail glass. And that’s just one of many attractions and exhibits. Officials at the $305 million Phillip and Patricia Frost Museum of Science promise that it will be a vivid expression of modern scientific inquiry and exposition. Its opening follows a series of setbacks and lawsuits and a scramble to finish the 250,000-square-foot structure. At one point, the project ran precariously short of money. The museum high-profile opening is especially significant in a state s&nbsp;<br></p><p align=\"justify\"><br></p><h3 align=\"justify\" style=\"font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);\"=\"\">Top 5 reason to choose us</h3><p align=\"justify\">Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level. To them it repre sents a spiritual connection between our planet and the heavens above. These volcanoes, which have beguiled millions of tourists visiting the Hawaiian islands, have also plagued scientists with a long-running mystery: If they are so close together, how did they develop in two parallel tracks along the Hawaiian-Emperor chain formed over the same hot spot in the Pacific Ocean — and why are their chemical compositions so different? \"We knew this was related to something much deeper, but we couldn’t see what,” said Tim Jones.</p>', '15498864961.jpg', 'www.geniusocean.com', 59, 1, '[{\"value\":\"hjk\"},{\"value\":\"hj\"},{\"value\":\"khj\"},{\"value\":\"kh\"},{\"value\":\"jkjh\"},{\"value\":\"k\"}]', 'Mauna Loa, the biggest volcano on Earth — and one of the most active — covers half the Island of Hawaii. Just 35 miles to the northeast, Mauna Kea, known to native Hawaiians as Mauna a Wakea, rises nearly 14,000 feet above sea level.', '[{\"value\":\"Business\"},{\"value\":\"Research\"},{\"value\":\"Mechanical\"},{\"value\":\"Process\"},{\"value\":\"Innovation\"},{\"value\":\"Engineering\"}]', '2019-01-03 06:03:59', '2024-01-08 20:59:52');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(191) NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `slug`) VALUES
(2, 'Oil & gas', 'oil-and-gas'),
(3, 'Manufacturing', 'manufacturing'),
(4, 'Chemical Research', 'chemical_research'),
(5, 'Agriculture', 'agriculture'),
(6, 'Mechanical', 'mechanical'),
(7, 'Entrepreneurs', 'entrepreneurs'),
(8, 'Technology', 'technology');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(191) UNSIGNED NOT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `photo`) VALUES
(1, '15501421125.jpg'),
(2, '15501421074.jpg'),
(3, '15501421023.jpg'),
(4, '15501420972.jpg'),
(5, '15501420921.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `counters`
--

CREATE TABLE `counters` (
  `id` int(11) NOT NULL,
  `type` enum('referral','browser') NOT NULL DEFAULT 'referral',
  `referral` varchar(255) DEFAULT NULL,
  `total_count` int(11) NOT NULL DEFAULT '0',
  `todays_count` int(11) NOT NULL DEFAULT '0',
  `today` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counters`
--

INSERT INTO `counters` (`id`, `type`, `referral`, `total_count`, `todays_count`, `today`) VALUES
(1, 'referral', 'www.facebook.com', 5, 0, NULL),
(2, 'referral', 'geniusocean.com', 2, 0, NULL),
(3, 'browser', 'Windows 10', 2922, 0, NULL),
(4, 'browser', 'Linux', 220, 0, NULL),
(5, 'browser', 'Unknown OS Platform', 384, 0, NULL),
(6, 'browser', 'Windows 7', 415, 0, NULL),
(7, 'referral', 'yandex.ru', 15, 0, NULL),
(8, 'browser', 'Windows 8.1', 536, 0, NULL),
(9, 'referral', 'www.google.com', 6, 0, NULL),
(10, 'browser', 'Android', 348, 0, NULL),
(11, 'browser', 'Mac OS X', 557, 0, NULL),
(12, 'referral', 'l.facebook.com', 1, 0, NULL),
(13, 'referral', 'codecanyon.net', 6, 0, NULL),
(14, 'browser', 'Windows XP', 2, 0, NULL),
(15, 'browser', 'Windows 8', 1, 0, NULL),
(16, 'browser', 'iPad', 1, 0, NULL),
(17, 'browser', 'Ubuntu', 1, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(191) NOT NULL,
  `name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sign` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` double NOT NULL,
  `is_default` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `name`, `sign`, `value`, `is_default`) VALUES
(1, 'USD', '$', 1, 0),
(7, 'Uzbekistan so\'m', 'söm', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` int(11) NOT NULL,
  `email_type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_subject` mediumtext COLLATE utf8_unicode_ci,
  `email_body` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `email_type`, `email_subject`, `email_body`, `status`) VALUES
(3, 'confirm_booking', 'Your Booking Confirmed !', '<p>Hello&nbsp;<span style=\"font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;;\">{customer_name}</span>,<br>Here You Will write the details of the message</p><p>Thank You<br></p>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `text`, `status`) VALUES
(1, 'Right my front it wound cause fully', '<span style=\"color: rgb(70, 85, 65); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</span><br>', 1),
(3, 'Man particular insensible celebrated', '<span style=\"color: rgb(70, 85, 65); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</span><br>', 1),
(4, 'Civilly why how end viewing related', '<span style=\"color: rgb(70, 85, 65); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</span><br>', 0),
(5, 'Six started far placing saw respect', '<span style=\"color: rgb(70, 85, 65); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</span><br>', 0),
(6, 'She jointure goodness interest debat', '<span style=\"color: rgb(70, 85, 65); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px;\">Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis. Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.</span><br>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(191) UNSIGNED NOT NULL,
  `package_id` int(191) UNSIGNED NOT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `package_id`, `photo`) VALUES
(73, 20, '15534190271-min.jpg'),
(74, 20, '15534190272-min.jpg'),
(75, 20, '15534190273-min.jpg'),
(76, 19, '15534190344-min.jpg'),
(77, 19, '15534190345-min.jpg'),
(78, 19, '15534190346-min.jpg'),
(79, 18, '15534190411-min.jpg'),
(80, 18, '15534190412-min.jpg'),
(81, 18, '15534190413-min.jpg'),
(82, 17, '15534190474-min.jpg'),
(83, 17, '15534190475-min.jpg'),
(84, 17, '15534190476-min.jpg'),
(85, 16, '15534190561-min.jpg'),
(86, 16, '15534190562-min.jpg'),
(87, 16, '15534190563-min.jpg'),
(88, 15, '15534190674-min.jpg'),
(89, 15, '15534190675-min.jpg'),
(90, 15, '15534190676-min.jpg'),
(91, 13, '15534190741-min.jpg'),
(92, 13, '15534190742-min.jpg'),
(93, 13, '15534190743-min.jpg'),
(94, 14, '15534190854-min.jpg'),
(95, 14, '15534190855-min.jpg'),
(96, 14, '15534190856-min.jpg'),
(97, 12, '15534191031-min.jpg'),
(98, 12, '15534191032-min.jpg'),
(99, 12, '15534191033-min.jpg'),
(100, 11, '15534191144-min.jpg'),
(101, 11, '15534191145-min.jpg'),
(102, 11, '15534191146-min.jpg'),
(103, 10, '15534191221-min.jpg'),
(104, 10, '15534191222-min.jpg'),
(105, 10, '15534191223-min.jpg'),
(106, 9, '15534191294-min.jpg'),
(107, 9, '15534191295-min.jpg'),
(108, 9, '15534191296-min.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `generalsettings`
--

CREATE TABLE `generalsettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bgimg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `street` text COLLATE utf8mb4_unicode_ci,
  `phone` text COLLATE utf8mb4_unicode_ci,
  `fax` text COLLATE utf8mb4_unicode_ci,
  `email` text COLLATE utf8mb4_unicode_ci,
  `footer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_title` text COLLATE utf8mb4_unicode_ci,
  `bg_link` text COLLATE utf8mb4_unicode_ci,
  `bg_text` text COLLATE utf8mb4_unicode_ci,
  `bg_video` text COLLATE utf8mb4_unicode_ci,
  `np` int(11) NOT NULL DEFAULT '0',
  `fp` int(11) NOT NULL DEFAULT '0',
  `pb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sk` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ss` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pcheck` tinyint(4) NOT NULL DEFAULT '1',
  `scheck` tinyint(4) NOT NULL DEFAULT '1',
  `mcheck` tinyint(4) NOT NULL DEFAULT '1',
  `bcheck` tinyint(4) NOT NULL DEFAULT '1',
  `ccheck` tinyint(4) NOT NULL DEFAULT '1',
  `mmi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ship` int(191) UNSIGNED NOT NULL,
  `vid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vidimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `sign` tinyint(1) NOT NULL DEFAULT '0',
  `slider` tinyint(4) NOT NULL DEFAULT '1',
  `category` tinyint(4) NOT NULL DEFAULT '1',
  `sb` tinyint(4) NOT NULL DEFAULT '1',
  `hv` tinyint(4) NOT NULL DEFAULT '1',
  `ftp` tinyint(4) NOT NULL DEFAULT '1',
  `lp` tinyint(4) NOT NULL DEFAULT '1',
  `pp` tinyint(4) NOT NULL DEFAULT '1',
  `lb` tinyint(4) NOT NULL DEFAULT '1',
  `bs` tinyint(4) NOT NULL DEFAULT '1',
  `ts` tinyint(4) NOT NULL DEFAULT '1',
  `bl` tinyint(4) NOT NULL DEFAULT '1',
  `colors` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `loader` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_talkto` tinyint(1) NOT NULL DEFAULT '1',
  `talkto` text COLLATE utf8mb4_unicode_ci,
  `is_language` tinyint(1) NOT NULL DEFAULT '1',
  `affilate_banner` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_host` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_port` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_user` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `smtp_pass` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `from_email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `from_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_smtp` tinyint(1) NOT NULL DEFAULT '0',
  `is_comment` tinyint(1) NOT NULL DEFAULT '0',
  `footer_background` text COLLATE utf8mb4_unicode_ci,
  `is_loader` tinyint(1) NOT NULL DEFAULT '1',
  `map_key` text COLLATE utf8mb4_unicode_ci,
  `is_disqus` tinyint(1) NOT NULL DEFAULT '0',
  `disqus` longtext COLLATE utf8mb4_unicode_ci,
  `subscribe_title` text COLLATE utf8mb4_unicode_ci,
  `subscribe_text` text COLLATE utf8mb4_unicode_ci,
  `review_title` text COLLATE utf8mb4_unicode_ci,
  `review_text` text COLLATE utf8mb4_unicode_ci,
  `top_title` text COLLATE utf8mb4_unicode_ci,
  `top_text` text COLLATE utf8mb4_unicode_ci,
  `top_link` text COLLATE utf8mb4_unicode_ci,
  `second_title` text COLLATE utf8mb4_unicode_ci,
  `second_text` text COLLATE utf8mb4_unicode_ci,
  `second_link` text COLLATE utf8mb4_unicode_ci,
  `top_image` text COLLATE utf8mb4_unicode_ci,
  `video_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title` text COLLATE utf8mb4_unicode_ci,
  `blog_text` text COLLATE utf8mb4_unicode_ci,
  `ts_title` text COLLATE utf8mb4_unicode_ci,
  `ts_text` text COLLATE utf8mb4_unicode_ci,
  `fp_title` text COLLATE utf8mb4_unicode_ci,
  `fp_text` text COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalsettings`
--

INSERT INTO `generalsettings` (`id`, `logo`, `favicon`, `title`, `site`, `bgimg`, `cimg`, `about`, `street`, `phone`, `fax`, `email`, `footer`, `bg_title`, `bg_link`, `bg_text`, `bg_video`, `np`, `fp`, `pb`, `sk`, `ss`, `pcheck`, `scheck`, `mcheck`, `bcheck`, `ccheck`, `mmi`, `bi`, `ship`, `vid`, `vidimg`, `tags`, `sign`, `slider`, `category`, `sb`, `hv`, `ftp`, `lp`, `pp`, `lb`, `bs`, `ts`, `bl`, `colors`, `bimg`, `loader`, `is_talkto`, `talkto`, `is_language`, `affilate_banner`, `smtp_host`, `smtp_port`, `smtp_user`, `smtp_pass`, `from_email`, `from_name`, `is_smtp`, `is_comment`, `footer_background`, `is_loader`, `map_key`, `is_disqus`, `disqus`, `subscribe_title`, `subscribe_text`, `review_title`, `review_text`, `top_title`, `top_text`, `top_link`, `second_title`, `second_text`, `second_link`, `top_image`, `video_image`, `blog_title`, `blog_text`, `ts_title`, `ts_text`, `fp_title`, `fp_text`) VALUES
(1, '1549859575logo.png', '1549859657favicon.ico', 'Travel', 'https://geniusocean.com/', '1549864154breadcrumbbg.jpg', '1549955693bgimg.jpg', 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae', '3584 Hickory Heights Drive ,Hanover MD 21076, USA', '00 000 000 000', '00 000 000 000', 'admin@geniusocean.com', 'COPYRIGHT 2019&nbsp;<a href=\"http://geniusocean.com/\">GeniusOcean.com</a>', 'ENG MAQBUL SAYOHAT DASTURLARINI TAQDIM ETAMIZ', 'https://geniusocean.com/', '<span style=\"\" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 26px;\"=\"\">Fun, Convenient and Affordable Tours to 56 countries around the world.</span><br>', 'https://www.youtube.com/watch?v=4DCTTrGjGU4', 0, 10, 'junajunnun@gmail.com', 'pk_test_UnU1Coi1p5qFGwtpjZMRMgJM', 'sk_test_QQcg3vGsKRPlW6T3dXcNJsor', 1, 1, 0, 0, 1, '<span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; text-size-adjust: none; font-family: Raleway, sans-serif;\">Faites vos depots sur les numero suivant 42784249 / 78939896 / 04835863</span>', '<span style=\"font-weight: 700; margin: 0px; padding: 0px; border: 0px; vertical-align: baseline; text-size-adjust: none; font-family: Raleway, sans-serif;\">Bank Compte Bancaire</span>', 5, 'https://www.youtube.com/watch?v=_sI_Ps7JSEk', '1535432669video-bg.jpg', NULL, 1, 1, 1, 1, 0, 1, 1, 1, 1, 0, 0, 0, '#76be5a', '1548136860admin-banner.JPG', '1549862947loader-travel.gif', 0, '<script type=\"text/javascript\">\r\nvar Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n(function(){\r\nvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\ns1.async=true;\r\ns1.src=\'https://embed.tawk.to/5bc2019c61d0b77092512d03/default\';\r\ns1.charset=\'UTF-8\';\r\ns1.setAttribute(\'crossorigin\',\'*\');\r\ns0.parentNode.insertBefore(s1,s0);\r\n})();\r\n</script>', 1, '15455529221538057747banner-2.jpg', 'in-v3.mailjet.com', '587', '0e05029e2dc70da691aa2223aa53c5be', '5df1b6242e86bce602c3fd9adc178460', 'admin@geniusocean.com', 'GeniusOcean', 1, 1, '1549968323footerbg.jpg', 1, 'AIzaSyB1GpE4qeoJ__70UZxvX9CTMUTZRZNHcu8', 0, '<div id=\"disqus_thread\">         \r\n    <script>\r\n    /**\r\n    *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.\r\n    *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/\r\n    /*\r\n    var disqus_config = function () {\r\n    this.page.url = PAGE_URL;  // Replace PAGE_URL with your page\'s canonical URL variable\r\n    this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page\'s unique identifier variable\r\n    };\r\n    */\r\n    (function() { // DON\'T EDIT BELOW THIS LINE\r\n    var d = document, s = d.createElement(\'script\');\r\n    s.src = \'https://junnun.disqus.com/embed.js\';\r\n    s.setAttribute(\'data-timestamp\', +new Date());\r\n    (d.head || d.body).appendChild(s);\r\n    })();\r\n    </script>\r\n    <noscript>Please enable JavaScript to view the <a href=\"https://disqus.com/?ref_noscript\">comments powered by Disqus.</a></noscript>\r\n    </div>', '<h5 class=\"sub-title\" style=\"text-align: center; margin-bottom: 1px;\" open=\"\" sans\",=\"\" sans-serif;=\"\" line-height:=\"\" 38px;=\"\" color:=\"\" rgb(24,=\"\" 42,=\"\" 17);=\"\" font-size:=\"\" 28px;=\"\" text-transform:=\"\" uppercase;=\"\" text-align:=\"\" center;\"=\"\">SUBSCRIBE</h5><h2 class=\"title\" style=\"margin-bottom: 8px; font-family: Ubuntu, sans-serif; font-weight: 700; line-height: 60px; color: rgb(118, 190, 90); font-size: 50px; text-transform: capitalize; text-align: center;\">Get Special Offers</h2>', '<span style=\"color: rgb(70, 85, 65); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" text-align:=\"\" center;\"=\"\"><font size=\"3\">100% no spam guarantee!!Your email is safe! We will only ever use it to send you our Newsletter with news, articles, deals and competitions.</font></span><br>', '<h5 class=\"sub-title\" style=\"text-align: center; margin-bottom: 1px;\" open=\"\" sans\",=\"\" sans-serif;=\"\" line-height:=\"\" 38px;=\"\" color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" font-size:=\"\" 28px;=\"\" text-transform:=\"\" uppercase;=\"\" text-align:=\"\" center;\"=\"\">TAKE A LOOK AT OUR</h5><h2 class=\"title\" style=\"margin-bottom: 8px; font-family: Ubuntu, sans-serif; font-weight: 700; line-height: 60px; color: rgb(118, 190, 90); font-size: 50px; text-transform: capitalize; text-align: center;\">Featured Packages</h2>', '<span style=\"color: rgb(255, 255, 255); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" text-align:=\"\" center;\"=\"\">We’re delighted that many come back to travel on our escorted historical tours and small group cruises again and again. We feel that their testimonials describe who we are and what we do far better than we ever could.</span><br>', '<h5 class=\"sub-title\" style=\"margin-bottom: 1px; font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" line-height:=\"\" 38px;=\"\" color:=\"\" rgb(24,=\"\" 42,=\"\" 17);=\"\" font-size:=\"\" 28px;=\"\" text-transform:=\"\" uppercase;\"=\"\">WELCOME TO OUR</h5><h2 class=\"title\" style=\"margin-bottom: 8px; font-family: Ubuntu, sans-serif; font-weight: 700; line-height: 60px; color: rgb(118, 190, 90); font-size: 50px; text-transform: capitalize;\">Travel Agencey</h2>', '<p style=\"margin-bottom: 1rem; font-size: 18px; color: rgb(70, 85, 65); line-height: 32px;\">With our happiest opportunity to travel all over the World , you are must welcome to buy our 2nd to none competitive Air Ticket , Visa Processing ,Holidays package , Medical Tourism , Car , Airport Service and all other logistic supports .</p><p style=\"margin-bottom: 1rem; font-size: 18px; color: rgb(70, 85, 65); line-height: 32px;\">We are licentiate and truly dedicated to assist you in purchasing the right Ticket at the right time from your Home. Mode of Payment Bank deposit ,Bkash , Rocket or Cash which is comfortable to you . We will send your Ticket to your mail</p>', 'http://geniusocean.com/', '<h5 class=\"sub-title\" style=\"margin-bottom: 1px; font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" line-height:=\"\" 38px;=\"\" color:=\"\" rgb(24,=\"\" 42,=\"\" 17);=\"\" font-size:=\"\" 28px;=\"\" text-transform:=\"\" uppercase;\"=\"\">AMAZING PLACES TO</h5><h2 class=\"title\" style=\"margin-bottom: 8px; font-family: Ubuntu, sans-serif; font-weight: 700; line-height: 60px; color: rgb(118, 190, 90); font-size: 50px; text-transform: capitalize;\">Enjoy Your Travel</h2>', '<p style=\"margin-bottom: 1rem; font-size: 18px; color: rgb(70, 85, 65); line-height: 32px;\">With our happiest opportunity to travel all over the World , you are must welcome to buy our 2nd to none competitive Air Ticket , Visa Processing ,Holidays package , Medical Tourism , Car , Airport Service and all other logistic supports .</p><p style=\"margin-bottom: 1rem; font-size: 18px; color: rgb(70, 85, 65); line-height: 32px;\">We are licentiate and truly dedicated to assist you in purchasing the right Ticket at the right time from your Home. Mode of Payment Bank deposit ,Bkash , Rocket or Cash which is comfortable to you . We will send your Ticket to your mail</p>', 'http://geniusocean.com/', '1550386110about1.png', '1550386817videobg.png', '<div class=\"sub-title\" style=\"text-align: center; font-size: 28px; line-height: 38px; color: rgb(24, 42, 17); text-transform: uppercase; margin-bottom: 1px;\" open=\"\" sans\",=\"\" sans-serif;=\"\" text-align:=\"\" center;=\"\" background-color:=\"\" rgb(244,=\"\" 244,=\"\" 244);\"=\"\">Новости</div>', '<div style=\"text-align: center;\"><span style=\"color: rgb(70, 85, 65); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" text-transform:=\"\" uppercase;=\"\" background-color:=\"\" rgb(244,=\"\" 244,=\"\" 244);\"=\"\"><font face=\"arial\" size=\"4\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</font></span><br></div>', '<h5 class=\"sub-title\" style=\"text-align: center; margin-bottom: 1px;\" open=\"\" sans\",=\"\" sans-serif;=\"\" line-height:=\"\" 38px;=\"\" color:=\"\" rgb(24,=\"\" 42,=\"\" 17);=\"\" font-size:=\"\" 28px;=\"\" text-transform:=\"\" uppercase;=\"\" text-align:=\"\" center;\"=\"\">WELCOME TO OUR</h5><h2 class=\"title\" style=\"margin-bottom: 8px; font-family: Ubuntu, sans-serif; font-weight: 700; line-height: 60px; color: rgb(118, 190, 90); font-size: 50px; text-transform: capitalize; text-align: center;\">Travel Agencey</h2>', '<span style=\"color: rgb(70, 85, 65); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 18px;=\"\" text-align:=\"\" center;\"=\"\">Check the latest tour Package gallery and activities</span>', '<h5 class=\"sub-title\" style=\"text-align: center; margin-bottom: 1px;\" open=\"\" sans\",=\"\" sans-serif;=\"\" line-height:=\"\" 38px;=\"\" color:=\"\" rgb(24,=\"\" 42,=\"\" 17);=\"\" font-size:=\"\" 28px;=\"\" text-transform:=\"\" uppercase;=\"\" text-align:=\"\" center;\"=\"\">TAKE A LOOK AT OUR</h5><h2 class=\"title\" style=\"margin-bottom: 8px; font-family: Ubuntu, sans-serif; font-weight: 700; line-height: 60px; color: rgb(118, 190, 90); font-size: 50px; text-transform: capitalize; text-align: center;\">Featured Packages</h2>', '<span style=\"color: rgb(70, 85, 65); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 18px; text-align: center;\">Browse through our featured monthly vacation packages and save up to 70%. Eligibility and terms apply.</span>');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(191) NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `title`) VALUES
(5, 'Adventure activities like'),
(6, 'Fresh natural environs'),
(7, 'River rafting in Florida'),
(8, 'Swim in the Ganges River');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `rtl` tinyint(1) NOT NULL DEFAULT '0',
  `is_default` tinyint(1) NOT NULL DEFAULT '0',
  `language` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang1` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang2` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang3` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang4` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang5` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang6` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang7` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang8` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang9` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang10` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang11` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang12` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang13` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang14` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang15` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang16` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang17` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang18` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang19` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang20` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang21` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang22` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang23` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang24` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang25` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang26` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang27` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang28` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang29` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang30` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang31` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang32` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang33` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang34` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang35` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang36` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang37` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang38` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang39` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang40` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang41` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang42` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang43` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang44` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang45` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang46` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang47` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang48` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang49` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang50` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang51` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang52` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang53` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang54` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang55` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang56` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang57` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang58` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang59` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang60` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang61` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang62` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang63` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang64` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang65` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang66` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang67` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang68` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang69` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang70` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang71` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang72` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang73` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang74` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang75` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang76` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang77` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang78` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang79` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang80` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang81` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang82` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang83` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang84` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang85` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang86` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang87` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang88` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang89` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang90` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang91` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang92` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang93` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang94` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang95` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang96` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang97` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang98` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang99` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lang100` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `rtl`, `is_default`, `language`, `lang1`, `lang2`, `lang3`, `lang4`, `lang5`, `lang6`, `lang7`, `lang8`, `lang9`, `lang10`, `lang11`, `lang12`, `lang13`, `lang14`, `lang15`, `lang16`, `lang17`, `lang18`, `lang19`, `lang20`, `lang21`, `lang22`, `lang23`, `lang24`, `lang25`, `lang26`, `lang27`, `lang28`, `lang29`, `lang30`, `lang31`, `lang32`, `lang33`, `lang34`, `lang35`, `lang36`, `lang37`, `lang38`, `lang39`, `lang40`, `lang41`, `lang42`, `lang43`, `lang44`, `lang45`, `lang46`, `lang47`, `lang48`, `lang49`, `lang50`, `lang51`, `lang52`, `lang53`, `lang54`, `lang55`, `lang56`, `lang57`, `lang58`, `lang59`, `lang60`, `lang61`, `lang62`, `lang63`, `lang64`, `lang65`, `lang66`, `lang67`, `lang68`, `lang69`, `lang70`, `lang71`, `lang72`, `lang73`, `lang74`, `lang75`, `lang76`, `lang77`, `lang78`, `lang79`, `lang80`, `lang81`, `lang82`, `lang83`, `lang84`, `lang85`, `lang86`, `lang87`, `lang88`, `lang89`, `lang90`, `lang91`, `lang92`, `lang93`, `lang94`, `lang95`, `lang96`, `lang97`, `lang98`, `lang99`, `lang100`) VALUES
(1, 0, 0, 'English', 'Home', 'Tour Packages', 'Blog', 'Faq', 'Other', 'Contact Us', 'GET STARTED', 'READ MORE', 'See More', 'Enter Your Email Address', 'Send', 'bought(s)', 'VIEW DEAL', 'Our Packages', 'Package Details', 'Overview', 'Highlights', 'Including:', 'INCLUSIONS', 'EXCLUSIONS', 'Frequently asked questions', 'Book The Tour:', 'Adults', 'Children', 'Total Amount', 'BOOK NOW', 'Why Book with US?', 'Similar Packages', 'Check Out', 'Your Details', 'First Name', 'Last Name', 'Phone Number', 'Email', 'Billing Information', 'Address', 'City', 'State', 'Postal Code', 'Payment Information', 'Payment Method', 'Card Number', 'Cvv', 'Month', 'Year', 'BOOK NOW', 'PACKAGE INFORMATION', 'LOCATION', 'TOUR DATES', 'Check in :', 'Check out :', 'GUESTS', 'Total Amount:', 'Adult(s)', 'Children', 'Blog Details', 'Search Here', 'Categories', 'Recent Post', 'Archives', 'Archive', 'Tags', 'Tag', 'View(s)', 'Source', 'Search', 'Name', 'Phone Number', 'Email Address', 'Your Message', 'Enter Code', 'SEND MESSAGE', 'Let\'s Connect', 'Get in touch with us', 'Find us here :', 'ABOUT US', 'FOOTER LINKS', 'LATEST BLOG', 'CONTACT US', 'Payment Success.', 'Congratulation !!', 'YOUR BOOKING HAS BEEN CONFIRMED.', 'Reset Password', 'Logout', 'Address:', 'Phone:', 'Email:', 'Subscribe Our Newsletter', 'Enter your email address', 'SUBSCRIBE', 'About Us', 'Footer Links', 'Latest Blog', 'Contact Us', 'Enter Code', 'Advertisement Info', 'Contact With', 'Share This Ad', 'Ad Action', 'Unit Price'),
(2, 0, 0, 'Bangla', 'হোম', 'আমার অ্যাকাউন্ট', 'আমার অ্যাকাউন্ট', 'আমার অ্যাকাউন্ট', 'মোট', 'চেকআউট', 'কার্ট টেক্সট', 'পাঠ্য', 'ব্লগ', 'ব্লগস', 'ফক', 'ফক শিরোনাম', 'ফ্যাক পৃষ্ঠা শিরোনাম', 'যোগাযোগ', 'যোগাযোগের নাম', 'ফোনে  যোগাযোগ করুন', 'যোগাযোগ ইমেইল', 'যোগাযোগ করুন', 'সাইন ইন', 'লগইন করুন', 'সাইন আপ', 'সাইন আপ করুন', 'পর্যালোচনা বিবরণ', 'পোস্টাল কোড', 'শুভ গ্রাহক', 'সাইন আপ পাসওয়ার্ড', 'সাইন আপ পাসওয়ার্ড নিশ্চিত করুন', 'ড্যাশবোর্ড', 'প্রোফাইল সম্পাদন', 'পাসওয়ার্ড রিসেট', 'সাইন আউট', 'বর্তমান পাসওয়ার্ড', 'নতুন পাসওয়ার্ড', 'নতুন পাসওয়ার্ড পুনরায় টাইপ করুন', 'পাসওয়ার্ড পরিবর্তন', 'শীর্ষ বিভাগ', 'শীর্ষ হার', 'কারটে যোগ করুন', 'সর্বশেষ ব্লগ', 'সেরা বিক্রেতা', 'বিস্তারিত দেখুন', 'সাবস্ক্রাইব করুন', 'সাবস্ক্রাইব করুন', 'ফুটের লিংক', 'যোগাযোগ  করুন', 'পাসওয়ার্ড ভুলে গেছি', 'আপনি কি পাসওয়ার্ড ভুলে গেচেন ?', 'ইমেইল', 'ক্লিক করুন', 'নতুন অ্যাকাউন্ট ক্রিয়েট করুন', 'অলরেডি অ্যাকাউন্ট আছে', 'বৈশিষ্ট্যযুক্ত', 'আউট অফ স্টক', 'শিরোনাম', 'স্থানধারক পাঠ্য সন্ধান', 'উপলভ্য', 'অনুসন্ধান ফলাফল', 'ব্লগ উত্স', 'পরিমাণ', 'আকার', 'দ্রুত পর্যালোচনা', 'ফিল্টার অপশন', 'সর্বশেষ লেখা সাজান', 'প্রাচীনতম পাঠ্যক্রম সাজান', 'সর্বনিম্ন পাঠ্য সাজান', 'সাজানোর সর্বোচ্চ', 'সমস্ত বিভাগ', 'মূল্য', 'অনুসন্ধান', 'জনপ্রিয় ট্যাগ', 'ট্যাগ', 'সম্পূর্ণ নাম', 'পেমেন্ট পদ্ধতি', 'পেপ্যাল', 'ক্রেডিট কার্ড', 'রেভিএও সাবমিত করুন', 'নো রেভিএও', 'সম্পর্কিত পণ্য', 'সিটি', 'ঠিকানা', 'ফোন নম্বর', 'ফ্যাক্স', 'আপনার রেটিং', 'মোবাইল মানি', 'ব্যাংক ওয়্যার', 'ক্যাশ অন ডেলিভারি', 'ইমেল ঠিকানা', 'আপডেট', 'স্থানধারক পাঠ্যক্রম সাবস্ক্রাইব করুন', 'আপনি সাকসেসফুল্ভাবে আপডেত করেছেন', 'পর্যালোচনা', 'সম্পূর্ণ বর্ণনা', 'ফেরত এবং নীতি', 'একটি পর্যালোচনা লিখুন', 'কার্ট মুছে ফেলুন', 'ইমেজ', 'পণ্য নাম', 'সম্পাদনা', 'পরিমাণ', 'ইউনিট মূল্য'),
(12, 0, 1, 'Русский', 'Главный', 'Турпакеты', 'Блог', 'Faq', 'Другой', 'Связаться с нами', 'Начать', 'Подробнее', 'Узнать больше', 'Введите ваш адрес электронной почты', 'Отправлять', 'купил(а)', 'ПОСМОТРЕТЬ ПРЕДЛОЖЕНИЕ', 'Our Packages', 'Package Details', 'Overview', 'Highlights', 'Including:', 'INCLUSIONS', 'EXCLUSIONS', 'Frequently asked questions', 'Book The Tour:', 'Adults', 'Children', 'Total Amount', 'BOOK NOW', 'Why Book with US?', 'Similar Packages', 'Check Out', 'Your Details', 'First Name', 'Last Name', 'Phone Number', 'Email', 'Billing Information', 'Address', 'City', 'State', 'Postal Code', 'Payment Information', 'Payment Method', 'Card Number', 'Cvv', 'Month', 'Year', 'BOOK NOW', 'PACKAGE INFORMATION', 'LOCATION', 'TOUR DATES', 'Check in :', 'Check out :', 'GUESTS', 'Total Amount:', 'Adult(s)', 'Childern', 'Blog Details', 'Search Here', 'Categories', 'Recent Posts', 'Archives', 'Archive', 'Tags', 'Tag', 'View(s)', 'Source', 'Search', 'Name', 'Phone Number', 'Email Address', 'Your Message', 'Enter Code', 'SEND MESSAGE', 'Let\'s Connect', 'Get in touch with us', 'Find us here :', 'ABOUT US', 'FOOTER LINKS', 'LATEST BLOG', 'CONTACT US', 'Payment Success.', 'Congratulation !!', 'YOUR BOOKING HAS BEEN CONFIRMED.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(191) NOT NULL,
  `order_id` int(191) UNSIGNED DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `method` varchar(255) DEFAULT NULL,
  `pay_amount` float NOT NULL,
  `txnid` varchar(255) DEFAULT NULL,
  `charge_id` varchar(255) DEFAULT NULL,
  `order_number` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_state` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `customer_phone` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `zip` varchar(255) DEFAULT NULL,
  `total_adults` int(11) NOT NULL DEFAULT '0',
  `total_childs` int(11) NOT NULL DEFAULT '0',
  `booking_date` datetime NOT NULL,
  `status` enum('pending','completed','declined') NOT NULL DEFAULT 'pending',
  `customer_fname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_lname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `package_id`, `method`, `pay_amount`, `txnid`, `charge_id`, `order_number`, `payment_status`, `customer_email`, `customer_state`, `customer_phone`, `address`, `city`, `zip`, `total_adults`, `total_childs`, `booking_date`, `status`, `customer_fname`, `customer_lname`) VALUES
(3, 20, 'Stripe', 100, 'txn_1E54BZJlIV5dN9n74xT61cSb', 'ch_1E54BZJlIV5dN9n7wcPcksoX', '561550465815', 'Completed', 'junnuns@gmail.com', 'adsad', '123213', '234234', 'gdf', '1231', 1, 1, '2019-02-18 10:56:59', 'completed', 'Junnun', 'Da'),
(7, 20, 'Stripe', 240, 'txn_1E54OSJlIV5dN9n71w5efuum', 'ch_1E54OSJlIV5dN9n7miufX3gI', 'I61550466615', 'Completed', 'junnuns@gmail.com', 'sdfsdf', '243423', 'Space Needle 400 Broad St, Seattles', 'gdf', '1231', 2, 3, '2019-02-18 11:10:18', 'completed', 'Ja', 'ds'),
(8, 14, 'Stripe', 95, 'txn_1E55rwJlIV5dN9n7FE7T82wf', 'ch_1E55rwJlIV5dN9n7OnNCLo6k', 'wn1550472286', 'Completed', 'junnuns@gmail.com', 'sdfsdf', '243423', 'Space Needle 400 Broad St, Seattle', 'gdf', '1231', 1, 1, '2019-02-18 12:44:49', 'pending', 'Ja', 'ds'),
(9, 14, 'Stripe', 95, 'txn_1E55svJlIV5dN9n72X9ywwkv', 'ch_1E55svJlIV5dN9n7DtlhZzuQ', 'r91550472347', 'Completed', 'junnuns@gmail.com', 'sdfsdf', '243423', 'Address', 'gdf', '1231', 1, 1, '2019-02-18 12:45:51', 'pending', 'Ja', 'ds'),
(10, 14, 'Stripe', 95, 'txn_1E55tJJlIV5dN9n7dhDXQYqe', 'ch_1E55tJJlIV5dN9n7LTafQ2gu', 'yD1550472371', 'Completed', 'junnuns@gmail.com', 'sdfsdf', '243423', 'Address', 'gdf', '1231', 1, 1, '2019-02-18 12:46:14', 'pending', 'Ja', 'ds'),
(11, 20, 'Paypal', 100, NULL, NULL, 'WL1550472483', 'Pending', NULL, 'sdfsdf', NULL, 'Address', 'gdf', '1231', 1, 1, '2019-02-18 12:48:03', 'pending', 'Ja', 'ds'),
(12, 17, 'Stripe', 210, 'txn_1E567QJlIV5dN9n7tAi9udiO', 'ch_1E567PJlIV5dN9n7k3uIoefL', '5J1550473246', 'Completed', 'junnuns@gmail.com', 'sdfsdf', '243423', 'Address', 'gdf', '1231', 3, 0, '2019-02-18 13:00:49', 'declined', 'Ja', 'ds');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `return_date` datetime DEFAULT NULL,
  `location` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_adult` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost_child` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `highlights` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `includes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `excludes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `featured` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `highlight_discount` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `cost_previous` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `offer_day` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `offer_subtitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `offer_tags` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `offer_details` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `title`, `description`, `photo`, `start_date`, `return_date`, `location`, `cost_adult`, `cost_child`, `highlights`, `includes`, `excludes`, `featured`, `created_at`, `updated_at`, `status`, `highlight_discount`, `cost_previous`, `offer_title`, `offer_day`, `offer_subtitle`, `offer_tags`, `offer_details`) VALUES
(9, '3-Days/2-Nights for only', 'Florida\'s Gem on the Emerald Coast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur sapien sit amet velit posuere finibus. Integer tempor faucibus porttitor. Donec convallis imperdiet odio, eu vestibulum quam vulputate at. Morbi rutrum felis dui, sit amet luctus augue hendrerit sed. Phasellus tristique augue libero, nec tristique erat elementum malesuada. Etiam non nibh nec magna euismod fermentum. Maecenas ultrices metus mauris, nec blandit arcu iaculis et. Vivamus accumsan nisl posuere ultricies luctus. Donec porttitor, eros quis varius molestie, nibh odio porta metus, nec dapibus risus lorem sed felis. Suspendisse potenti. Maecenas placerat ipsum ut libero fermentum tincidunt. Proin vel egestas lacus.\r\n\r\nDonec scelerisque id velit laoreet tempus. Phasellus placerat, eros in rutrum pellentesque, purus diam euismod enim, vel tincidunt orci massa eu mi. Pellentesque at ex porta, bibendum odio sed, ultricies lectus. Maecenas maximus placerat massa, non finibus neque suscipit at. Suspendisse convallis orci sed maximus imperdiet. Mauris magna nibh, auctor eget arcu sed, tristique mattis felis. Nam eu cursus elit. Sed egestas libero id felis lacinia, in dignissim velit tincidunt. Ut eget elit ligula. Morbi molestie interdum erat, eget bibendum metus feugiat ac. Nam quis egestas nibh. Aliquam sagittis, nibh at vehicula aliquet, est arcu suscipit elit, quis congue arcu ipsum et enim. Quisque pulvinar sapien sit amet sollicitudin congue.', '15501370691.jpg', '2019-04-01 00:00:00', '2019-04-07 00:00:00', 'Destin Florida', '55', '40', 'River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking,Swim in the Ganges River', 'Swim in the Ganges River,River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking', 'River rafting in Florida,Fresh natural environs,Swim in the Ganges River,Adventure activities like cliff jumping and trekking', 1, '2017-04-30 11:21:56', '2019-02-14 15:37:49', 1, '20% OFF', '30', NULL, NULL, NULL, NULL, NULL),
(10, '3-Days/2-Nights for only', 'Florida\'s Gem on the Emerald Coast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur sapien sit amet velit posuere finibus. Integer tempor faucibus porttitor. Donec convallis imperdiet odio, eu vestibulum quam vulputate at. Morbi rutrum felis dui, sit amet luctus augue hendrerit sed. Phasellus tristique augue libero, nec tristique erat elementum malesuada. Etiam non nibh nec magna euismod fermentum. Maecenas ultrices metus mauris, nec blandit arcu iaculis et. Vivamus accumsan nisl posuere ultricies luctus. Donec porttitor, eros quis varius molestie, nibh odio porta metus, nec dapibus risus lorem sed felis. Suspendisse potenti. Maecenas placerat ipsum ut libero fermentum tincidunt. Proin vel egestas lacus.\r\n\r\nDonec scelerisque id velit laoreet tempus. Phasellus placerat, eros in rutrum pellentesque, purus diam euismod enim, vel tincidunt orci massa eu mi. Pellentesque at ex porta, bibendum odio sed, ultricies lectus. Maecenas maximus placerat massa, non finibus neque suscipit at. Suspendisse convallis orci sed maximus imperdiet. Mauris magna nibh, auctor eget arcu sed, tristique mattis felis. Nam eu cursus elit. Sed egestas libero id felis lacinia, in dignissim velit tincidunt. Ut eget elit ligula. Morbi molestie interdum erat, eget bibendum metus feugiat ac. Nam quis egestas nibh. Aliquam sagittis, nibh at vehicula aliquet, est arcu suscipit elit, quis congue arcu ipsum et enim. Quisque pulvinar sapien sit amet sollicitudin congue.', '15501370622.jpg', '2019-04-01 00:00:00', '2019-04-07 00:00:00', 'Destin Florida', '60', '40', 'River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking,Swim in the Ganges River', 'Swim in the Ganges River,River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking', 'River rafting in Florida,Fresh natural environs,Swim in the Ganges River,Adventure activities like cliff jumping and trekking', 1, '2017-04-30 11:21:56', '2019-02-14 15:37:42', 1, NULL, '30', 'Florida: Arrival and adventure activities,][,Florida: Arrival adventure and activities,][,Florida: Arrival activities and adventure', 'DAY 1,][,DAY 2,][,DAY 3', 'Other Benefits (On Arrival),][,Other Benefits (On Arrival),][,Other Benefits (On Arrival)', 'River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping', 'On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities'),
(11, '3-Days/2-Nights for only', 'Florida\'s Gem on the Emerald Coast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur sapien sit amet velit posuere finibus. Integer tempor faucibus porttitor. Donec convallis imperdiet odio, eu vestibulum quam vulputate at. Morbi rutrum felis dui, sit amet luctus augue hendrerit sed. Phasellus tristique augue libero, nec tristique erat elementum malesuada. Etiam non nibh nec magna euismod fermentum. Maecenas ultrices metus mauris, nec blandit arcu iaculis et. Vivamus accumsan nisl posuere ultricies luctus. Donec porttitor, eros quis varius molestie, nibh odio porta metus, nec dapibus risus lorem sed felis. Suspendisse potenti. Maecenas placerat ipsum ut libero fermentum tincidunt. Proin vel egestas lacus.\r\n\r\nDonec scelerisque id velit laoreet tempus. Phasellus placerat, eros in rutrum pellentesque, purus diam euismod enim, vel tincidunt orci massa eu mi. Pellentesque at ex porta, bibendum odio sed, ultricies lectus. Maecenas maximus placerat massa, non finibus neque suscipit at. Suspendisse convallis orci sed maximus imperdiet. Mauris magna nibh, auctor eget arcu sed, tristique mattis felis. Nam eu cursus elit. Sed egestas libero id felis lacinia, in dignissim velit tincidunt. Ut eget elit ligula. Morbi molestie interdum erat, eget bibendum metus feugiat ac. Nam quis egestas nibh. Aliquam sagittis, nibh at vehicula aliquet, est arcu suscipit elit, quis congue arcu ipsum et enim. Quisque pulvinar sapien sit amet sollicitudin congue.', '15501370563.jpg', '2019-04-01 00:00:00', '2019-04-07 00:00:00', 'Destin Florida', '65', '40', 'River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking,Swim in the Ganges River', 'Swim in the Ganges River,River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking', 'River rafting in Florida,Fresh natural environs,Swim in the Ganges River,Adventure activities like cliff jumping and trekking', 1, '2017-04-30 11:21:56', '2019-02-14 15:37:36', 1, '20% OFF', '30', NULL, NULL, NULL, NULL, NULL),
(12, '3-Days/2-Nights for only', 'Florida\'s Gem on the Emerald Coast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur sapien sit amet velit posuere finibus. Integer tempor faucibus porttitor. Donec convallis imperdiet odio, eu vestibulum quam vulputate at. Morbi rutrum felis dui, sit amet luctus augue hendrerit sed. Phasellus tristique augue libero, nec tristique erat elementum malesuada. Etiam non nibh nec magna euismod fermentum. Maecenas ultrices metus mauris, nec blandit arcu iaculis et. Vivamus accumsan nisl posuere ultricies luctus. Donec porttitor, eros quis varius molestie, nibh odio porta metus, nec dapibus risus lorem sed felis. Suspendisse potenti. Maecenas placerat ipsum ut libero fermentum tincidunt. Proin vel egestas lacus.\r\n\r\nDonec scelerisque id velit laoreet tempus. Phasellus placerat, eros in rutrum pellentesque, purus diam euismod enim, vel tincidunt orci massa eu mi. Pellentesque at ex porta, bibendum odio sed, ultricies lectus. Maecenas maximus placerat massa, non finibus neque suscipit at. Suspendisse convallis orci sed maximus imperdiet. Mauris magna nibh, auctor eget arcu sed, tristique mattis felis. Nam eu cursus elit. Sed egestas libero id felis lacinia, in dignissim velit tincidunt. Ut eget elit ligula. Morbi molestie interdum erat, eget bibendum metus feugiat ac. Nam quis egestas nibh. Aliquam sagittis, nibh at vehicula aliquet, est arcu suscipit elit, quis congue arcu ipsum et enim. Quisque pulvinar sapien sit amet sollicitudin congue.', '15501369674.jpg', '2019-04-01 00:00:00', '2019-04-07 00:00:00', 'Destin Florida', '70', '40', 'River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking,Swim in the Ganges River', 'Swim in the Ganges River,River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking', 'River rafting in Florida,Fresh natural environs,Swim in the Ganges River,Adventure activities like cliff jumping and trekking', 1, '2017-04-30 11:21:56', '2019-02-14 15:36:07', 1, NULL, '30', 'Florida: Arrival and adventure activities,][,Florida: Arrival adventure and activities,][,Florida: Arrival activities and adventure', 'DAY 1,][,DAY 2,][,DAY 3', 'Other Benefits (On Arrival),][,Other Benefits (On Arrival),][,Other Benefits (On Arrival)', 'River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping', 'On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities'),
(13, '3-Days/2-Nights for only', 'Florida\'s Gem on the Emerald Coast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur sapien sit amet velit posuere finibus. Integer tempor faucibus porttitor. Donec convallis imperdiet odio, eu vestibulum quam vulputate at. Morbi rutrum felis dui, sit amet luctus augue hendrerit sed. Phasellus tristique augue libero, nec tristique erat elementum malesuada. Etiam non nibh nec magna euismod fermentum. Maecenas ultrices metus mauris, nec blandit arcu iaculis et. Vivamus accumsan nisl posuere ultricies luctus. Donec porttitor, eros quis varius molestie, nibh odio porta metus, nec dapibus risus lorem sed felis. Suspendisse potenti. Maecenas placerat ipsum ut libero fermentum tincidunt. Proin vel egestas lacus.\r\n\r\nDonec scelerisque id velit laoreet tempus. Phasellus placerat, eros in rutrum pellentesque, purus diam euismod enim, vel tincidunt orci massa eu mi. Pellentesque at ex porta, bibendum odio sed, ultricies lectus. Maecenas maximus placerat massa, non finibus neque suscipit at. Suspendisse convallis orci sed maximus imperdiet. Mauris magna nibh, auctor eget arcu sed, tristique mattis felis. Nam eu cursus elit. Sed egestas libero id felis lacinia, in dignissim velit tincidunt. Ut eget elit ligula. Morbi molestie interdum erat, eget bibendum metus feugiat ac. Nam quis egestas nibh. Aliquam sagittis, nibh at vehicula aliquet, est arcu suscipit elit, quis congue arcu ipsum et enim. Quisque pulvinar sapien sit amet sollicitudin congue.', '15501369585.jpg', '2019-04-01 00:00:00', '2019-04-07 00:00:00', 'Destin Florida', '75', '40', 'River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking,Swim in the Ganges River', 'Swim in the Ganges River,River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking', 'River rafting in Florida,Fresh natural environs,Swim in the Ganges River,Adventure activities like cliff jumping and trekking', 1, '2017-04-30 11:21:56', '2019-02-14 15:35:58', 1, '20% OFF', '30', NULL, NULL, NULL, NULL, NULL),
(14, '3-Days/2-Nights for only', 'Florida\'s Gem on the Emerald Coast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur sapien sit amet velit posuere finibus. Integer tempor faucibus porttitor. Donec convallis imperdiet odio, eu vestibulum quam vulputate at. Morbi rutrum felis dui, sit amet luctus augue hendrerit sed. Phasellus tristique augue libero, nec tristique erat elementum malesuada. Etiam non nibh nec magna euismod fermentum. Maecenas ultrices metus mauris, nec blandit arcu iaculis et. Vivamus accumsan nisl posuere ultricies luctus. Donec porttitor, eros quis varius molestie, nibh odio porta metus, nec dapibus risus lorem sed felis. Suspendisse potenti. Maecenas placerat ipsum ut libero fermentum tincidunt. Proin vel egestas lacus.\r\n\r\nDonec scelerisque id velit laoreet tempus. Phasellus placerat, eros in rutrum pellentesque, purus diam euismod enim, vel tincidunt orci massa eu mi. Pellentesque at ex porta, bibendum odio sed, ultricies lectus. Maecenas maximus placerat massa, non finibus neque suscipit at. Suspendisse convallis orci sed maximus imperdiet. Mauris magna nibh, auctor eget arcu sed, tristique mattis felis. Nam eu cursus elit. Sed egestas libero id felis lacinia, in dignissim velit tincidunt. Ut eget elit ligula. Morbi molestie interdum erat, eget bibendum metus feugiat ac. Nam quis egestas nibh. Aliquam sagittis, nibh at vehicula aliquet, est arcu suscipit elit, quis congue arcu ipsum et enim. Quisque pulvinar sapien sit amet sollicitudin congue.', '15501369506.jpg', '2019-04-01 00:00:00', '2019-04-07 00:00:00', 'Destin Florida', '55', '40', 'River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking,Swim in the Ganges River', 'Swim in the Ganges River,River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking', 'River rafting in Florida,Fresh natural environs,Swim in the Ganges River,Adventure activities like cliff jumping and trekking', 1, '2017-04-30 11:21:56', '2019-02-16 10:21:34', 1, NULL, '30', 'Florida: Arrival and adventure activities,][,Florida: Arrival adventure and activities,][,Florida: Arrival activities and adventure', 'DAY 1,][,DAY 2,][,DAY 3', 'Other Benefits (On Arrival),][,Other Benefits (On Arrival),][,Other Benefits (On Arrival)', 'River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping', 'On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities'),
(15, '3-Days/2-Nights for only', 'Florida\'s Gem on the Emerald Coast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur sapien sit amet velit posuere finibus. Integer tempor faucibus porttitor. Donec convallis imperdiet odio, eu vestibulum quam vulputate at. Morbi rutrum felis dui, sit amet luctus augue hendrerit sed. Phasellus tristique augue libero, nec tristique erat elementum malesuada. Etiam non nibh nec magna euismod fermentum. Maecenas ultrices metus mauris, nec blandit arcu iaculis et. Vivamus accumsan nisl posuere ultricies luctus. Donec porttitor, eros quis varius molestie, nibh odio porta metus, nec dapibus risus lorem sed felis. Suspendisse potenti. Maecenas placerat ipsum ut libero fermentum tincidunt. Proin vel egestas lacus.\r\n\r\nDonec scelerisque id velit laoreet tempus. Phasellus placerat, eros in rutrum pellentesque, purus diam euismod enim, vel tincidunt orci massa eu mi. Pellentesque at ex porta, bibendum odio sed, ultricies lectus. Maecenas maximus placerat massa, non finibus neque suscipit at. Suspendisse convallis orci sed maximus imperdiet. Mauris magna nibh, auctor eget arcu sed, tristique mattis felis. Nam eu cursus elit. Sed egestas libero id felis lacinia, in dignissim velit tincidunt. Ut eget elit ligula. Morbi molestie interdum erat, eget bibendum metus feugiat ac. Nam quis egestas nibh. Aliquam sagittis, nibh at vehicula aliquet, est arcu suscipit elit, quis congue arcu ipsum et enim. Quisque pulvinar sapien sit amet sollicitudin congue.', '15501369411.jpg', '2019-04-01 00:00:00', '2019-04-07 00:00:00', 'Destin Florida', '60', '40', 'River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking,Swim in the Ganges River', 'Swim in the Ganges River,River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking', 'River rafting in Florida,Fresh natural environs,Swim in the Ganges River,Adventure activities like cliff jumping and trekking', 0, '2017-04-30 11:21:56', '2019-02-14 15:44:55', 1, '20% OFF', '30', 'Florida: Arrival and adventure activities,][,Florida: Arrival adventure and activities,][,Florida: Arrival activities and adventure', 'DAY 1,][,DAY 2,][,DAY 3', 'Other Benefits (On Arrival),][,Other Benefits (On Arrival),][,Other Benefits (On Arrival)', 'River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping', 'On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities'),
(16, '3-Days/2-Nights for only', 'Florida\'s Gem on the Emerald Coast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur sapien sit amet velit posuere finibus. Integer tempor faucibus porttitor. Donec convallis imperdiet odio, eu vestibulum quam vulputate at. Morbi rutrum felis dui, sit amet luctus augue hendrerit sed. Phasellus tristique augue libero, nec tristique erat elementum malesuada. Etiam non nibh nec magna euismod fermentum. Maecenas ultrices metus mauris, nec blandit arcu iaculis et. Vivamus accumsan nisl posuere ultricies luctus. Donec porttitor, eros quis varius molestie, nibh odio porta metus, nec dapibus risus lorem sed felis. Suspendisse potenti. Maecenas placerat ipsum ut libero fermentum tincidunt. Proin vel egestas lacus.\r\n\r\nDonec scelerisque id velit laoreet tempus. Phasellus placerat, eros in rutrum pellentesque, purus diam euismod enim, vel tincidunt orci massa eu mi. Pellentesque at ex porta, bibendum odio sed, ultricies lectus. Maecenas maximus placerat massa, non finibus neque suscipit at. Suspendisse convallis orci sed maximus imperdiet. Mauris magna nibh, auctor eget arcu sed, tristique mattis felis. Nam eu cursus elit. Sed egestas libero id felis lacinia, in dignissim velit tincidunt. Ut eget elit ligula. Morbi molestie interdum erat, eget bibendum metus feugiat ac. Nam quis egestas nibh. Aliquam sagittis, nibh at vehicula aliquet, est arcu suscipit elit, quis congue arcu ipsum et enim. Quisque pulvinar sapien sit amet sollicitudin congue.', '15501369322.jpg', '2019-04-01 00:00:00', '2019-04-07 00:00:00', 'Destin Florida', '65', '40', 'River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking,Swim in the Ganges River', 'Swim in the Ganges River,River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking', 'River rafting in Florida,Fresh natural environs,Swim in the Ganges River,Adventure activities like cliff jumping and trekking', 0, '2017-04-30 11:21:56', '2019-02-14 15:44:53', 1, NULL, '30', 'Florida: Arrival and adventure activities,][,Florida: Arrival adventure and activities,][,Florida: Arrival activities and adventure', 'DAY 1,][,DAY 2,][,DAY 3', 'Other Benefits (On Arrival),][,Other Benefits (On Arrival),][,Other Benefits (On Arrival)', 'River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping', 'On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities'),
(17, '3-Days/2-Nights for only', 'Florida\'s Gem on the Emerald Coast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur sapien sit amet velit posuere finibus. Integer tempor faucibus porttitor. Donec convallis imperdiet odio, eu vestibulum quam vulputate at. Morbi rutrum felis dui, sit amet luctus augue hendrerit sed. Phasellus tristique augue libero, nec tristique erat elementum malesuada. Etiam non nibh nec magna euismod fermentum. Maecenas ultrices metus mauris, nec blandit arcu iaculis et. Vivamus accumsan nisl posuere ultricies luctus. Donec porttitor, eros quis varius molestie, nibh odio porta metus, nec dapibus risus lorem sed felis. Suspendisse potenti. Maecenas placerat ipsum ut libero fermentum tincidunt. Proin vel egestas lacus.\r\n\r\nDonec scelerisque id velit laoreet tempus. Phasellus placerat, eros in rutrum pellentesque, purus diam euismod enim, vel tincidunt orci massa eu mi. Pellentesque at ex porta, bibendum odio sed, ultricies lectus. Maecenas maximus placerat massa, non finibus neque suscipit at. Suspendisse convallis orci sed maximus imperdiet. Mauris magna nibh, auctor eget arcu sed, tristique mattis felis. Nam eu cursus elit. Sed egestas libero id felis lacinia, in dignissim velit tincidunt. Ut eget elit ligula. Morbi molestie interdum erat, eget bibendum metus feugiat ac. Nam quis egestas nibh. Aliquam sagittis, nibh at vehicula aliquet, est arcu suscipit elit, quis congue arcu ipsum et enim. Quisque pulvinar sapien sit amet sollicitudin congue.', '15501369223.jpg', '2019-04-01 00:00:00', '2019-04-07 00:00:00', 'Destin Florida', '70', '40', 'River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking,Swim in the Ganges River', 'Swim in the Ganges River,River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking', 'River rafting in Florida,Fresh natural environs,Swim in the Ganges River,Adventure activities like cliff jumping and trekking', 0, '2017-04-30 11:21:56', '2019-02-14 15:44:52', 1, '20% OFF', '30', 'Florida: Arrival and adventure activities,][,Florida: Arrival adventure and activities,][,Florida: Arrival activities and adventure', 'DAY 1,][,DAY 2,][,DAY 3', 'Other Benefits (On Arrival),][,Other Benefits (On Arrival),][,Other Benefits (On Arrival)', 'River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping', 'On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities'),
(18, '3-Days/2-Nights for only', 'Florida\'s Gem on the Emerald Coast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur sapien sit amet velit posuere finibus. Integer tempor faucibus porttitor. Donec convallis imperdiet odio, eu vestibulum quam vulputate at. Morbi rutrum felis dui, sit amet luctus augue hendrerit sed. Phasellus tristique augue libero, nec tristique erat elementum malesuada. Etiam non nibh nec magna euismod fermentum. Maecenas ultrices metus mauris, nec blandit arcu iaculis et. Vivamus accumsan nisl posuere ultricies luctus. Donec porttitor, eros quis varius molestie, nibh odio porta metus, nec dapibus risus lorem sed felis. Suspendisse potenti. Maecenas placerat ipsum ut libero fermentum tincidunt. Proin vel egestas lacus.\r\n\r\nDonec scelerisque id velit laoreet tempus. Phasellus placerat, eros in rutrum pellentesque, purus diam euismod enim, vel tincidunt orci massa eu mi. Pellentesque at ex porta, bibendum odio sed, ultricies lectus. Maecenas maximus placerat massa, non finibus neque suscipit at. Suspendisse convallis orci sed maximus imperdiet. Mauris magna nibh, auctor eget arcu sed, tristique mattis felis. Nam eu cursus elit. Sed egestas libero id felis lacinia, in dignissim velit tincidunt. Ut eget elit ligula. Morbi molestie interdum erat, eget bibendum metus feugiat ac. Nam quis egestas nibh. Aliquam sagittis, nibh at vehicula aliquet, est arcu suscipit elit, quis congue arcu ipsum et enim. Quisque pulvinar sapien sit amet sollicitudin congue.', '15501369154.jpg', '2019-04-01 00:00:00', '2019-04-07 00:00:00', 'Destin Florida', '75', '40', 'River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking,Swim in the Ganges River', 'Swim in the Ganges River,River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking', 'River rafting in Florida,Fresh natural environs,Swim in the Ganges River,Adventure activities like cliff jumping and trekking', 0, '2017-04-30 11:21:56', '2019-02-14 15:44:50', 1, NULL, '30', 'Florida: Arrival and adventure activities,][,Florida: Arrival adventure and activities,][,Florida: Arrival activities and adventure', 'DAY 1,][,DAY 2,][,DAY 3', 'Other Benefits (On Arrival),][,Other Benefits (On Arrival),][,Other Benefits (On Arrival)', 'River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping', 'On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities'),
(19, '3-Days/2-Nights for only', 'Florida\'s Gem on the Emerald Coast', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur sapien sit amet velit posuere finibus. Integer tempor faucibus porttitor. Donec convallis imperdiet odio, eu vestibulum quam vulputate at. Morbi rutrum felis dui, sit amet luctus augue hendrerit sed. Phasellus tristique augue libero, nec tristique erat elementum malesuada. Etiam non nibh nec magna euismod fermentum. Maecenas ultrices metus mauris, nec blandit arcu iaculis et. Vivamus accumsan nisl posuere ultricies luctus. Donec porttitor, eros quis varius molestie, nibh odio porta metus, nec dapibus risus lorem sed felis. Suspendisse potenti. Maecenas placerat ipsum ut libero fermentum tincidunt. Proin vel egestas lacus.\r\n\r\nDonec scelerisque id velit laoreet tempus. Phasellus placerat, eros in rutrum pellentesque, purus diam euismod enim, vel tincidunt orci massa eu mi. Pellentesque at ex porta, bibendum odio sed, ultricies lectus. Maecenas maximus placerat massa, non finibus neque suscipit at. Suspendisse convallis orci sed maximus imperdiet. Mauris magna nibh, auctor eget arcu sed, tristique mattis felis. Nam eu cursus elit. Sed egestas libero id felis lacinia, in dignissim velit tincidunt. Ut eget elit ligula. Morbi molestie interdum erat, eget bibendum metus feugiat ac. Nam quis egestas nibh. Aliquam sagittis, nibh at vehicula aliquet, est arcu suscipit elit, quis congue arcu ipsum et enim. Quisque pulvinar sapien sit amet sollicitudin congue.', '15501369095.jpg', '2019-04-01 00:00:00', '2019-04-07 00:00:00', 'Destin Florida', '55', '40', 'River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking,Swim in the Ganges River', 'Swim in the Ganges River,River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking', 'River rafting in Florida,Fresh natural environs,Swim in the Ganges River,Adventure activities like cliff jumping and trekking', 0, '2017-04-30 11:21:56', '2019-02-14 15:44:48', 1, '20% OFF', '30', 'Florida: Arrival and adventure activities,][,Florida: Arrival adventure and activities,][,Florida: Arrival activities and adventure', 'DAY 1,][,DAY 2,][,DAY 3', 'Other Benefits (On Arrival),][,Other Benefits (On Arrival),][,Other Benefits (On Arrival)', 'River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping', 'On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities'),
(20, '3-Days/2-Nights for only', 'Florida\'s Gem on the Emerald Coast', '<font size=\"3\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque efficitur sapien sit amet velit posuere finibus. Integer tempor faucibus porttitor. Donec convallis imperdiet odio, eu vestibulum quam vulputate at. Morbi rutrum felis dui, sit amet luctus augue hendrerit sed. Phasellus tristique augue libero, nec tristique erat elementum malesuada. Etiam non nibh nec magna euismod fermentum. Maecenas ultrices metus mauris, nec blandit arcu iaculis et. Vivamus accumsan nisl posuere ultricies luctus. Donec porttitor, eros quis varius molestie, nibh odio porta metus, nec dapibus risus lorem sed felis. Suspendisse potenti. Maecenas placerat ipsum ut libero fermentum tincidunt. Proin vel egestas lacus.\r\n\r\nDonec scelerisque id velit laoreet tempus. Phasellus placerat, eros in rutrum pellentesque, purus diam euismod enim, vel tincidunt orci massa eu mi. Pellentesque at ex porta, bibendum odio sed, ultricies lectus. Maecenas maximus placerat massa, non finibus neque suscipit at. Suspendisse convallis orci sed maximus imperdiet. Mauris magna nibh, auctor eget arcu sed, tristique mattis felis. Nam eu cursus elit. Sed egestas libero id felis lacinia, in dignissim velit tincidunt. Ut eget elit ligula. Morbi molestie interdum erat, eget bibendum metus feugiat ac. Nam quis egestas nibh. Aliquam sagittis, nibh at vehicula aliquet, est arcu suscipit elit, quis congue arcu ipsum et enim. Quisque pulvinar sapien sit amet sollicitudin congue.</font>', '15501369046.jpg', '2019-04-01 00:00:00', '2019-04-07 00:00:00', 'Destin Florida', '60', '40', 'River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking,Swim in the Ganges River', 'Swim in the Ganges River,River rafting in Florida,Fresh natural environs,Adventure activities like cliff jumping and trekking', 'River rafting in Florida,Fresh natural environs,Swim in the Ganges River,Adventure activities like cliff jumping and trekking', 0, '2017-04-30 11:21:56', '2019-02-16 16:45:46', 1, NULL, '30', 'Florida: Arrival and adventure activities,][,Florida: Arrival adventure and activities,][,Florida: Arrival activities and adventure', 'DAY 1,][,DAY 2,][,DAY 3', 'Other Benefits (On Arrival),][,Other Benefits (On Arrival),][,Other Benefits (On Arrival)', 'River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping,][,River Rafting, Adventure,Cliff Jumping', 'On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities,][,On the first day of your 2 days Florida tour check into one of the camps, and freshen up.\r\n\r\nPost this adventurous experience of drifting through the river current, be prepared for more exciting activities and games like- Beach volleyball, body surfing, cliff jumping, campfire, and light trekking.\r\n\r\nAs the day comes to an end, return to your camp and feast on a sumptuous dinner before you retire for the day.\r\n\r\nTip: Wear comfortable clothing and footwear as you will be engaging in sports activities');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(191) NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pos` tinyint(100) NOT NULL DEFAULT '0',
  `meta_tag` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `text`, `pos`, `meta_tag`, `meta_description`) VALUES
(1, 'About Us', 'about', '<div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2>Title number 1<br></h2><p><span style=\"font-weight: 700;\">Lorem Ipsum</span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2>Title number 2<br></h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2>Title number 3<br></h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><h2 helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-weight:=\"\" 700;=\"\" line-height:=\"\" 1.1;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" margin:=\"\" 0px=\"\" 15px;=\"\" font-size:=\"\" 30px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\" style=\"font-family: \" 51);\"=\"\">Title number 9<br></h2><p helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 2, '[{\"value\":\"a1\"},{\"value\":\"a2\"},{\"value\":\"a3\"},{\"value\":\"a4\"},{\"value\":\"a5\"}]', 'The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(2, 'Privacy & Policy', 'privacy', '<div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2><img src=\"https://i.imgur.com/BobQuyA.jpg\" width=\"591\"></h2><h2>Title number 1</h2><p><span style=\"font-weight: 700;\">Lorem Ipsum</span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2>Title number 2<br></h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2>Title number 3<br></h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><h2 helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-weight:=\"\" 700;=\"\" line-height:=\"\" 1.1;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" margin:=\"\" 0px=\"\" 15px;=\"\" font-size:=\"\" 30px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\" 51);\"=\"\" style=\"font-family: \">Title number 9<br></h2><p helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 1, 'test,test1,test2,test3', 'Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.'),
(3, 'Service', 'services', '<div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2>Title number 1<br></h2><p><span style=\"font-weight: 700;\">Lorem Ipsum</span>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2>Title number 2<br></h2><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><div helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2>Title number 3<br></h2><p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><h2 helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-weight:=\"\" 700;=\"\" line-height:=\"\" 1.1;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" margin:=\"\" 0px=\"\" 15px;=\"\" font-size:=\"\" 30px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\" 51);\"=\"\" style=\"font-family: \">Title number 9<br></h2><p helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', 3, 't,t1,t2,t3,t4', 't has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.');

-- --------------------------------------------------------

--
-- Table structure for table `pagesettings`
--

CREATE TABLE `pagesettings` (
  `id` int(10) UNSIGNED NOT NULL,
  `contact_success` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_title` text COLLATE utf8mb4_unicode_ci,
  `contact_text` text COLLATE utf8mb4_unicode_ci,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_status` tinyint(4) NOT NULL DEFAULT '1',
  `a_status` tinyint(4) NOT NULL DEFAULT '1',
  `f_status` tinyint(4) NOT NULL DEFAULT '1',
  `bn` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bnimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_currency` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pagesettings`
--

INSERT INTO `pagesettings` (`id`, `contact_success`, `contact_email`, `contact_title`, `contact_text`, `about`, `faq`, `c_status`, `a_status`, `f_status`, `bn`, `bnimg`, `is_currency`) VALUES
(1, 'Success! Thanks for contacting us, we will get back to you shortly.', 'admin@geniusocean.com', '<h4 class=\"subtitle\" style=\"margin-bottom: 6px; font-family: Ubuntu, sans-serif; font-weight: 600; line-height: 28px; color: rgb(20, 50, 80); font-size: 28px; text-transform: uppercase;\">WE\'D LOVE TO</h4><h2 class=\"title\" style=\"margin-bottom: 13px; font-family: Ubuntu, sans-serif; font-weight: 600; line-height: 50px; color: rgb(118, 190, 90); font-size: 40px; text-transform: uppercase;\">HEAR FROM YOU</h2>', '<div style=\"text-align: justify;\"><span style=\"color: rgb(118, 190, 90); font-family: \" open=\"\" sans\",=\"\" sans-serif;=\"\" font-size:=\"\" 16px;=\"\" text-align:=\"\" left;\"=\"\"><font size=\"4\">Send us a message and we\' ll respond as soon as possible</font></span><br></div>', '<div style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2 style=\"box-sizing: border-box; font-family: inherit; font-weight: 700; line-height: 1.1; color: inherit; margin: 0px 0px 15px; font-size: 30px;\">Title number 1<br style=\"box-sizing: border-box;\"></h2><p style=\"box-sizing: border-box; margin: 0px 0px 10px;\"><strong style=\"box-sizing: border-box; font-weight: 700;\">Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div><div style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2 style=\"box-sizing: border-box; font-family: inherit; font-weight: 700; line-height: 1.1; color: inherit; margin: 0px 0px 15px; font-size: 30px;\">Title number 2<br style=\"box-sizing: border-box;\"></h2><p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p></div><br style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><div style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\"><h2 style=\"box-sizing: border-box; font-family: inherit; font-weight: 700; line-height: 1.1; color: inherit; margin: 0px 0px 15px; font-size: 30px;\">Title number 3<br style=\"box-sizing: border-box;\"></h2><p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"box-sizing: border-box; margin: 0px 0px 10px;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p></div><h2 style=\"box-sizing: border-box; font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-weight:=\"\" 700;=\"\" line-height:=\"\" 1.1;=\"\" color:=\"\" rgb(51,=\"\" 51,=\"\" 51);=\"\" margin:=\"\" 0px=\"\" 15px;=\"\" font-size:=\"\" 30px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\">Title number 9<br style=\"box-sizing: border-box;\"></h2><p style=\"box-sizing: border-box; margin: 0px 0px 10px; color: rgb(51, 51, 51); font-family: \" helvetica=\"\" neue\",=\"\" helvetica,=\"\" arial,=\"\" sans-serif;=\"\" font-size:=\"\" 14px;=\"\" font-style:=\"\" normal;=\"\" font-variant-ligatures:=\"\" font-variant-caps:=\"\" font-weight:=\"\" 400;=\"\" letter-spacing:=\"\" orphans:=\"\" 2;=\"\" text-align:=\"\" start;=\"\" text-indent:=\"\" 0px;=\"\" text-transform:=\"\" none;=\"\" white-space:=\"\" widows:=\"\" word-spacing:=\"\" -webkit-text-stroke-width:=\"\" background-color:=\"\" rgb(255,=\"\" 255,=\"\" 255);=\"\" text-decoration-style:=\"\" initial;=\"\" text-decoration-color:=\"\" initial;\"=\"\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '<div>\r\n<h2>What is Lorem Ipsum, Really?</h2>\r\n<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and\r\n typesetting industry. Lorem Ipsum has been the industry\'s standard \r\ndummy text ever since the 1500s, when an unknown printer took a galley \r\nof type and scrambled it to make a type specimen book. It has survived \r\nnot only five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>\r\n</div><div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the\r\n readable content of a page when looking at its layout. The point of \r\nusing Lorem Ipsum is that it has a more-or-less normal distribution of \r\nletters, as opposed to using \'Content here, content here\', making it \r\nlook like readable English. Many desktop publishing packages and web \r\npage editors now use Lorem Ipsum as their default model text, and a \r\nsearch for \'lorem ipsum\' will uncover many web sites still in their \r\ninfancy. Various versions have evolved over the years, sometimes by \r\naccident, sometimes on purpose (injected humour and the like).</p>\r\n</div><br><div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It\r\n has roots in a piece of classical Latin literature from 45 BC, making \r\nit over 2000 years old. Richard McClintock, a Latin professor at \r\nHampden-Sydney College in Virginia, looked up one of the more obscure \r\nLatin words, consectetur, from a Lorem Ipsum passage, and going through \r\nthe cites of the word in classical literature, discovered the \r\nundoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 \r\nof \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by \r\nCicero, written in 45 BC. This book is a treatise on the theory of \r\nethics, very popular during the Renaissance. The first line of Lorem \r\nIpsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section \r\n1.10.32.</p><p>The standard chunk of Lorem Ipsum used since the 1500s is\r\n reproduced below for those interested. Sections 1.10.32 and 1.10.33 \r\nfrom \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in \r\ntheir exact original form, accompanied by English versions from the 1914\r\n translation by H. Rackham.</p>\r\n</div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but \r\nthe majority have suffered alteration in some form, by injected humour, \r\nor randomised words which don\'t look even slightly believable. If you \r\nare going to use a passage of Lorem Ipsum, you need to be sure there \r\nisn\'t anything embarrassing hidden in the middle of text. All the Lorem \r\nIpsum generators on the Internet tend to repeat predefined chunks as \r\nnecessary, making this the first true generator on the Internet. It uses\r\n a dictionary of over 200 Latin words, combined with a handful of model \r\nsentence structures, to generate Lorem Ipsum which looks reasonable. The\r\n generated Lorem Ipsum is therefore always free from repetition, \r\ninjected humour, or non-characteristic words etc.</p>', 1, 1, 1, 'https://www.google.com/', '1525536094Banner1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `txnid` varchar(255) DEFAULT NULL,
  `paid_amount` int(11) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `payment_id` varchar(255) NOT NULL,
  `featured` varchar(255) NOT NULL,
  `method` varchar(255) DEFAULT NULL,
  `charge_id` varchar(255) DEFAULT NULL,
  `process_time` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `txnid`, `paid_amount`, `payment_status`, `payment_id`, `featured`, `method`, `charge_id`, `process_time`) VALUES
(5, 24, 'txn_1CAM4hJlIV5dN9n7wuIhtbMO', 10, 'Completed', 'Vo1522173546', 'no', 'Stripe', 'ch_1CAM4gJlIV5dN9n74exxkQUJ', '2018-03-27 23:59:10'),
(6, 24, 'txn_1CAM9BJlIV5dN9n7L95Yg4RU', 10, 'Completed', 'wp1522173824', 'yes', 'Stripe', 'ch_1CAM9AJlIV5dN9n7GA4akuVa', '2018-03-28 00:03:48'),
(8, 13, '9V52144530246673F', 10, 'Completed', 'nm1522227283', 'no', 'Paypal', NULL, '2018-03-28 14:54:43'),
(9, 13, '4TL74232C9274030Y', 10, 'Completed', 'YM1522227864', 'yes', 'Paypal', NULL, '2018-03-28 15:04:24'),
(10, 22, 'txn_1CAhOaJlIV5dN9n7SscUvo5B', 20, 'Completed', '6R1522255501', 'yes', 'Stripe', 'ch_1CAhOaJlIV5dN9n740fbr6Rf', '2018-03-28 22:45:08'),
(16, 7, 'txn_1CAipgJlIV5dN9n75bFj2vtM', 10, 'Completed', '1Y1522261025', 'no', 'Stripe', 'ch_1CAipfJlIV5dN9n7OlUy3ugI', '2018-03-29 00:17:12'),
(17, 10, 'txn_1CB5PGJlIV5dN9n7CCj5x5mf', 10, 'Completed', 'cw1522347801', 'yes', 'Stripe', 'ch_1CB5PFJlIV5dN9n7EL0KpPKJ', '2018-03-30 00:23:25'),
(18, 10, 'txn_1CB5VOJlIV5dN9n75O7lhQvU', 10, 'Completed', '1N1522348180', 'yes', 'Stripe', 'ch_1CB5VOJlIV5dN9n7PEuwYLuy', '2018-03-30 00:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` int(10) UNSIGNED NOT NULL,
  `client` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `client`, `photo`, `review`, `address`) VALUES
(3, 'David Smith', '1548221023review-profile.png', 'This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.', 'Virginia, USA'),
(4, 'EBangladesh', '1549964217img1.png', 'This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.', 'Virginia, USA'),
(5, 'The Usual Suspects', '1549964210img2.png', 'This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.', 'Virginia, USA'),
(6, 'Mr. XYZ', '1549964205img1.png', 'This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.', 'Virginia, USA');

-- --------------------------------------------------------

--
-- Table structure for table `seotools`
--

CREATE TABLE `seotools` (
  `id` int(10) UNSIGNED NOT NULL,
  `google_analytics` text COLLATE utf8mb4_unicode_ci,
  `meta_keys` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `seotools`
--

INSERT INTO `seotools` (`id`, `google_analytics`, `meta_keys`) VALUES
(1, '<script>//Google Analytics Scriptfffffffffffffffffffffffssssfffffs</script>', 'Genius,Ocean,Sea,Etc,Genius,Ocean,SeaGenius,Ocean,Sea,Etc,Genius,Ocean,SeaGenius,Ocean,Sea,Etc,Genius,Ocean,Sea');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(191) NOT NULL,
  `title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `photo`) VALUES
(6, 'Ticket Booking', '1549965331icon4.png'),
(7, 'Ticket Booking', '1549965326icon3.png'),
(8, 'Ticket Booking', '1549965321icon2.png'),
(9, 'Ticket Booking', '1549965315icon1.png'),
(10, 'Ticket Booking', '1549965311icon4.png'),
(11, 'Ticket Booking', '1549965303icon3.png'),
(12, 'Ticket Booking', '1549965298icon2.png'),
(13, 'Ticket Booking', '1549965293icon1.png');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(191) UNSIGNED NOT NULL,
  `photo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `photo`) VALUES
(8, '1550143792slider1.png'),
(9, '1550143887slider1.png');

-- --------------------------------------------------------

--
-- Table structure for table `sociallinks`
--

CREATE TABLE `sociallinks` (
  `id` int(10) UNSIGNED NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gplus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_status` tinyint(4) NOT NULL DEFAULT '1',
  `g_status` tinyint(4) NOT NULL DEFAULT '1',
  `t_status` tinyint(4) NOT NULL DEFAULT '1',
  `l_status` tinyint(4) NOT NULL DEFAULT '1',
  `fcheck` tinyint(10) DEFAULT NULL,
  `gcheck` tinyint(10) DEFAULT NULL,
  `fclient_id` text COLLATE utf8mb4_unicode_ci,
  `fclient_secret` text COLLATE utf8mb4_unicode_ci,
  `fredirect` text COLLATE utf8mb4_unicode_ci,
  `gclient_id` text COLLATE utf8mb4_unicode_ci,
  `gclient_secret` text COLLATE utf8mb4_unicode_ci,
  `gredirect` text COLLATE utf8mb4_unicode_ci,
  `pinterest` text COLLATE utf8mb4_unicode_ci,
  `p_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sociallinks`
--

INSERT INTO `sociallinks` (`id`, `facebook`, `gplus`, `twitter`, `linkedin`, `f_status`, `g_status`, `t_status`, `l_status`, `fcheck`, `gcheck`, `fclient_id`, `fclient_secret`, `fredirect`, `gclient_id`, `gclient_secret`, `gredirect`, `pinterest`, `p_status`) VALUES
(1, 'https://www.facebook.com/', 'https://plus.google.com/', 'https://twitter.com/', 'https://www.linkedin.com/', 1, 1, 1, 1, 1, 1, '503140663460329', 'f66cd670ec43d14209a2728af26dcc43', 'https://localhost/updated/kingfinal/auth/facebook/callback', '904681031719-sh1aolu42k7l93ik0bkiddcboghbpcfi.apps.googleusercontent.com', 'yGBWmUpPtn5yWhDAsXnswEX3', 'http://localhost/updated/kingfinal/auth/google/callback', 'https://www.pinterest.com/', 1);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(12, 'admin@gmail.com'),
(11, 'asterix@gmail.com'),
(10, 'aurora@gmail.com'),
(6, 'ban@gmail.com'),
(13, 'doctor@gmail.com'),
(5, 'escanor@gmail.com'),
(14, 'genius@gmail.com'),
(8, 'johnson@gmail.com'),
(15, 'junajunnun@gmail.com'),
(1, 'junnuns@gmail.com'),
(7, 'leon@gmail.com'),
(4, 'meliodas@gmail.com'),
(9, 'nafis@gmail.com'),
(17, 'ssd@gmail.com'),
(16, 'user@gmail.com'),
(2, 'zeref@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counters`
--
ALTER TABLE `counters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalsettings`
--
ALTER TABLE `generalsettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagesettings`
--
ALTER TABLE `pagesettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seotools`
--
ALTER TABLE `seotools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sociallinks`
--
ALTER TABLE `sociallinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribers_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(191) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `counters`
--
ALTER TABLE `counters`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(191) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `generalsettings`
--
ALTER TABLE `generalsettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pagesettings`
--
ALTER TABLE `pagesettings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seotools`
--
ALTER TABLE `seotools`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(191) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sociallinks`
--
ALTER TABLE `sociallinks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
