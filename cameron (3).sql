-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : Dim 04 avr. 2021 à 22:00
-- Version du serveur :  10.3.25-MariaDB-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cameron`
--

-- --------------------------------------------------------

--
-- Structure de la table `artistes`
--

CREATE TABLE `artistes` (
  `artiste_id` int(11) NOT NULL,
  `artiste_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `artistes`
--

INSERT INTO `artistes` (`artiste_id`, `artiste_name`) VALUES
(38, 'User'),
(48, 'Laurent'),
(51, 'Sasa'),
(53, 'karimou'),
(54, 'usert');

-- --------------------------------------------------------

--
-- Structure de la table `assoc_artistes_styles`
--

CREATE TABLE `assoc_artistes_styles` (
  `assoc_id` int(11) NOT NULL,
  `assoc_artiste_id` int(11) NOT NULL,
  `assoc_style_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `assoc_artistes_styles`
--

INSERT INTO `assoc_artistes_styles` (`assoc_id`, `assoc_artiste_id`, `assoc_style_id`) VALUES
(81, 48, 11),
(94, 51, 4),
(95, 51, 346),
(97, 53, 1);

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL,
  `genre_name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre_name`) VALUES
(46, 'Aae3');

-- --------------------------------------------------------

--
-- Structure de la table `styles`
--

CREATE TABLE `styles` (
  `style_id` int(11) NOT NULL,
  `style_name` varchar(255) COLLATE utf8mb4_bin DEFAULT NULL,
  `style_genre_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Déchargement des données de la table `styles`
--

INSERT INTO `styles` (`style_id`, `style_name`, `style_genre_id`) VALUES
(1, 'Boogie Woogie', NULL),
(2, 'Chicago Blues', NULL),
(3, 'Country Blues', NULL),
(4, 'Delta Blues', NULL),
(5, 'East Coast Blues', NULL),
(6, 'Electric Blues', NULL),
(7, 'Harmonica Blues', NULL),
(8, 'Hill Country Blues', NULL),
(9, 'Jump Blues', NULL),
(10, 'Louisiana Blues', NULL),
(11, 'Memphis Blues', NULL),
(12, 'Modern Electric Blues', NULL),
(13, 'Piano Blues', NULL),
(14, 'Piedmont Blues', NULL),
(15, 'Texas Blues', NULL),
(16, 'Brass Band', NULL),
(17, 'Marches', NULL),
(18, 'Military', NULL),
(19, 'Pipe & Drum', NULL),
(20, 'Educational', NULL),
(21, 'Nursery Rhymes', NULL),
(22, 'Story', NULL),
(23, 'Baroque', NULL),
(24, 'Choral', NULL),
(25, 'Classical', NULL),
(26, 'Contemporary', NULL),
(27, 'Early', NULL),
(28, 'Impressionist', NULL),
(29, 'Medieval', NULL),
(30, 'Modern', NULL),
(31, 'Neo-Classical', NULL),
(32, 'Neo-Romantic', NULL),
(33, 'Opera', NULL),
(34, 'Operetta', NULL),
(35, 'Oratorio', NULL),
(36, 'Post-Modern', NULL),
(37, 'Renaissance', NULL),
(38, 'Romantic', NULL),
(39, 'Serial', NULL),
(40, 'Twelve-tone', NULL),
(41, 'Zarzuela', NULL),
(46, 'Ambient', NULL),
(47, 'Ballroom', NULL),
(48, 'Baltimore Club', NULL),
(49, 'Bassline', NULL),
(50, 'Beatdown', NULL),
(51, 'Berlin-School', NULL),
(52, 'Big Beat', NULL),
(53, 'Bleep', NULL),
(54, 'Breakbeat', NULL),
(55, 'Breakcore', NULL),
(56, 'Breaks', NULL),
(57, 'Broken Beat', NULL),
(58, 'Chillwave', NULL),
(59, 'Chiptune', NULL),
(60, 'Dance-pop', NULL),
(61, 'Dark Ambient', NULL),
(62, 'Darkwave', NULL),
(63, 'Deep House', NULL),
(64, 'Deep Techno', NULL),
(65, 'Disco', NULL),
(66, 'Disco Polo', NULL),
(67, 'Donk', NULL),
(68, 'Doomcore', NULL),
(69, 'Downtempo', NULL),
(70, 'Drone', NULL),
(71, 'Drum n Bass', NULL),
(72, 'Dub', NULL),
(73, 'Dub Techno', NULL),
(74, 'Dubstep', NULL),
(75, 'Dungeon Synth', NULL),
(76, 'EBM', NULL),
(77, 'Electro', NULL),
(78, 'Electro House', NULL),
(79, 'Electro Swing', NULL),
(80, 'Electroacoustic', NULL),
(81, 'Electroclash', NULL),
(82, 'Euro House', NULL),
(83, 'Euro-Disco', NULL),
(84, 'Eurobeat', NULL),
(85, 'Eurodance', NULL),
(86, 'Experimental', NULL),
(87, 'Footwork', NULL),
(88, 'Freestyle', NULL),
(89, 'Funkot', NULL),
(90, 'Future Jazz', NULL),
(91, 'Gabber', NULL),
(92, 'Garage House', NULL),
(93, 'Ghetto', NULL),
(94, 'Ghetto House', NULL),
(95, 'Ghettotech', NULL),
(96, 'Glitch', NULL),
(97, 'Glitch Hop', NULL),
(98, 'Goa Trance', NULL),
(99, 'Grime', NULL),
(100, 'Halftime', NULL),
(101, 'Hands Up', NULL),
(102, 'Happy Hardcore', NULL),
(103, 'Hard Beat', NULL),
(104, 'Hard House', NULL),
(105, 'Hard Techno', NULL),
(106, 'Hard Trance', NULL),
(107, 'Hardcore', NULL),
(108, 'Hardstyle', NULL),
(109, 'Harsh Noise Wall', NULL),
(110, 'Hi NRG', NULL),
(111, 'Hip Hop', NULL),
(112, 'Hip-House', NULL),
(113, 'House', NULL),
(114, 'IDM', NULL),
(115, 'Illbient', NULL),
(116, 'Industrial', NULL),
(117, 'Italo House', NULL),
(118, 'Italo-Disco', NULL),
(119, 'Italodance', NULL),
(120, 'J-Core', NULL),
(121, 'Jazzdance', NULL),
(122, 'Jersey Club', NULL),
(123, 'Juke', NULL),
(124, 'Jumpstyle', NULL),
(125, 'Jungle', NULL),
(126, 'Latin', NULL),
(127, 'Leftfield', NULL),
(128, 'Lento Violento', NULL),
(129, 'Makina', NULL),
(130, 'Minimal', NULL),
(131, 'Minimal Techno', NULL),
(132, 'Modern Classical', NULL),
(133, 'Moombahton', NULL),
(134, 'Musique Concrète', NULL),
(135, 'Neo Trance', NULL),
(136, 'Neofolk', NULL),
(137, 'Nerdcore Techno', NULL),
(138, 'New Age', NULL),
(139, 'New Beat', NULL),
(140, 'Noise', NULL),
(141, 'Nu-Disco', NULL),
(142, 'Power Electronics', NULL),
(143, 'Progressive Breaks', NULL),
(144, 'Progressive House', NULL),
(145, 'Progressive Trance', NULL),
(146, 'Psy-Trance', NULL),
(147, 'Rhythmic Noise', NULL),
(148, 'Schranz', NULL),
(149, 'Skweee', NULL),
(150, 'Sound Collage', NULL),
(151, 'Speed Garage', NULL),
(152, 'Speedcore', NULL),
(153, 'Synth-pop', NULL),
(154, 'Synthwave', NULL),
(155, 'Tech House', NULL),
(156, 'Tech Trance', NULL),
(157, 'Techno', NULL),
(158, 'Trance', NULL),
(159, 'Tribal', NULL),
(160, 'Tribal House', NULL),
(161, 'Trip Hop', NULL),
(162, 'Tropical House', NULL),
(163, 'UK Funky', NULL),
(164, 'UK Garage', NULL),
(165, 'Vaporwave', NULL),
(166, 'Witch House', NULL),
(169, 'Andalusian Classical', NULL),
(170, 'Andean Music', NULL),
(171, 'Appalachian Music', NULL),
(172, 'Bangladeshi Classical', NULL),
(173, 'Basque Music', NULL),
(174, 'Bengali Music', NULL),
(175, 'Bhangra', NULL),
(176, 'Bluegrass', NULL),
(177, 'Cajun', NULL),
(178, 'Cambodian Classical', NULL),
(179, 'Canzone Napoletana', NULL),
(180, 'Carnatic', NULL),
(181, 'Catalan Music', NULL),
(182, 'Celtic', NULL),
(183, 'Chacarera', NULL),
(184, 'Chamamé', NULL),
(185, 'Chinese Classical', NULL),
(186, 'Chutney', NULL),
(187, 'Cobla', NULL),
(188, 'Copla', NULL),
(189, 'Country', NULL),
(190, 'Cretan', NULL),
(191, 'Dangdut', NULL),
(193, 'Fado', NULL),
(194, 'Filk', NULL),
(195, 'Flamenco', NULL),
(196, 'Folk', NULL),
(197, 'Funaná', NULL),
(198, 'Gagaku', NULL),
(199, 'Galician Traditional', NULL),
(200, 'Gamelan', NULL),
(201, 'Għana', NULL),
(202, 'Ghazal', NULL),
(203, 'Griot', NULL),
(204, 'Guarania', NULL),
(205, 'Gwo Ka', NULL),
(206, 'Hawaiian', NULL),
(207, 'Highlife', NULL),
(208, 'Hillbilly', NULL),
(209, 'Hindustani', NULL),
(210, 'Honky Tonk', NULL),
(211, 'Huayno', NULL),
(212, 'Indian Classical', NULL),
(213, 'Jota', NULL),
(214, 'Jug Band', NULL),
(215, 'Kaseko', NULL),
(216, 'Keroncong', NULL),
(217, 'Kizomba', NULL),
(218, 'Klasik', NULL),
(219, 'Klezmer', NULL),
(220, 'Korean Court Music', NULL),
(221, 'Laïkó', NULL),
(222, 'Lao Music', NULL),
(223, 'Liscio', NULL),
(224, 'Luk Krung', NULL),
(225, 'Luk Thung', NULL),
(226, 'Maloya', NULL),
(227, 'Mbalax', NULL),
(228, 'Min’yō', NULL),
(229, 'Mizrahi', NULL),
(230, 'Mo Lam', NULL),
(231, 'Morna', NULL),
(232, 'Mouth Music', NULL),
(233, 'Mugham', NULL),
(234, 'Népzene', NULL),
(235, 'Nhạc Vàng', NULL),
(236, 'Nordic', NULL),
(237, 'Ottoman Classical', NULL),
(238, 'Overtone Singing', NULL),
(239, 'Pacific', NULL),
(240, 'Pasodoble', NULL),
(241, 'Persian Classical', NULL),
(242, 'Philippine Classical', NULL),
(243, 'Phleng Phuea Chiwit', NULL),
(244, 'Piobaireachd', NULL),
(245, 'Polka', NULL),
(246, 'Progressive Bluegrass', NULL),
(247, 'Qawwali', NULL),
(248, 'Raï', NULL),
(249, 'Rebetiko', NULL),
(250, 'Romani', NULL),
(251, 'Rune Singing', NULL),
(252, 'Salegy', NULL),
(253, 'Sámi Music', NULL),
(254, 'Sea Shanties', NULL),
(255, 'Séga', NULL),
(256, 'Sephardic', NULL),
(257, 'Soukous', NULL),
(258, 'Taarab', NULL),
(259, 'Tamil Film Music', NULL),
(260, 'Thai Classical', NULL),
(261, 'Volksmusik', NULL),
(262, 'Waiata', NULL),
(263, 'Western Swing', NULL),
(264, 'Yemenite Jewish', NULL),
(265, 'Zamba', NULL),
(266, 'Zemer Ivri', NULL),
(267, 'Zouk', NULL),
(268, 'Zydeco', NULL),
(269, 'Bayou Funk', NULL),
(270, 'Boogie', NULL),
(271, 'Contemporary R&B', NULL),
(272, 'Free Funk', NULL),
(273, 'Funk', NULL),
(274, 'Gogo', NULL),
(275, 'Gospel', NULL),
(276, 'Minneapolis Sound', NULL),
(277, 'Neo Soul', NULL),
(278, 'New Jack Swing', NULL),
(279, 'P.Funk', NULL),
(280, 'Psychedelic', NULL),
(281, 'Rhythm & Blues', NULL),
(282, 'Soul', NULL),
(283, 'Swingbeat', NULL),
(284, 'UK Street Soul', NULL),
(285, 'Bass Music', NULL),
(286, 'Beatbox', NULL),
(287, 'Bongo Flava', NULL),
(288, 'Boom Bap', NULL),
(289, 'Bounce', NULL),
(290, 'Britcore', NULL),
(291, 'Cloud Rap', NULL),
(292, 'Conscious', NULL),
(293, 'Crunk', NULL),
(294, 'Cut-up/DJ', NULL),
(295, 'DJ Battle Tool', NULL),
(296, 'Favela Funk', NULL),
(297, 'G-Funk', NULL),
(298, 'Gangsta', NULL),
(299, 'Go-Go', NULL),
(300, 'Hardcore Hip-Hop', NULL),
(301, 'Hiplife', NULL),
(302, 'Horrorcore', NULL),
(303, 'Hyphy', NULL),
(304, 'Instrumental', NULL),
(305, 'Jazzy Hip-Hop', NULL),
(306, 'Kwaito', NULL),
(307, 'Miami Bass', NULL),
(308, 'Motswako', NULL),
(309, 'Phonk', NULL),
(310, 'Pop Rap', NULL),
(311, 'Ragga HipHop', NULL),
(312, 'RnB/Swing', NULL),
(313, 'Screw', NULL),
(314, 'Spaza', NULL),
(315, 'Thug Rap', NULL),
(316, 'Trap', NULL),
(317, 'Turntablism', NULL),
(318, 'Afro-Cuban Jazz', NULL),
(319, 'Afrobeat', NULL),
(320, 'Avant-garde Jazz', NULL),
(321, 'Big Band', NULL),
(322, 'Bop', NULL),
(323, 'Bossa Nova', NULL),
(324, 'Cape Jazz', NULL),
(325, 'Contemporary Jazz', NULL),
(326, 'Cool Jazz', NULL),
(327, 'Dark Jazz', NULL),
(328, 'Dixieland', NULL),
(329, 'Easy Listening', NULL),
(330, 'Free Improvisation', NULL),
(331, 'Free Jazz', NULL),
(332, 'Fusion', NULL),
(333, 'Gypsy Jazz', NULL),
(334, 'Hard Bop', NULL),
(335, 'Jazz-Funk', NULL),
(336, 'Jazz-Rock', NULL),
(337, 'Latin Jazz', NULL),
(338, 'Modal', NULL),
(339, 'Post Bop', NULL),
(340, 'Ragtime', NULL),
(341, 'Smooth Jazz', NULL),
(342, 'Soul-Jazz', NULL),
(343, 'Space-Age', NULL),
(344, 'Stride', NULL),
(345, 'Swing', NULL),
(346, 'Afro-Cuban', NULL),
(347, 'Aguinaldo', NULL),
(348, 'Axé', NULL),
(349, 'Bachata', NULL),
(350, 'Baião', NULL),
(351, 'Bambuco', NULL),
(352, 'Batucada', NULL),
(353, 'Beguine', NULL),
(354, 'Bolero', NULL),
(355, 'Bomba', NULL),
(356, 'Boogaloo', NULL),
(357, 'Bossanova', NULL),
(358, 'Candombe', NULL),
(359, 'Carimbó', NULL),
(360, 'Cha-Cha', NULL),
(361, 'Champeta', NULL),
(362, 'Charanga', NULL),
(363, 'Choro', NULL),
(364, 'Compas', NULL),
(365, 'Conjunto', NULL),
(366, 'Corrido', NULL),
(367, 'Cuatro', NULL),
(368, 'Cubano', NULL),
(369, 'Cumbia', NULL),
(370, 'Danzon', NULL),
(371, 'Descarga', NULL),
(372, 'Forró', NULL),
(373, 'Gaita', NULL),
(374, 'Guaguancó', NULL),
(375, 'Guajira', NULL),
(376, 'Guaracha', NULL),
(377, 'Jibaro', NULL),
(378, 'Joropo', NULL),
(379, 'Lambada', NULL),
(380, 'Mambo', NULL),
(381, 'Marcha Carnavalesca', NULL),
(382, 'Mariachi', NULL),
(383, 'Marimba', NULL),
(384, 'Merengue', NULL),
(385, 'MPB', NULL),
(386, 'Musette', NULL),
(387, 'Música Criolla', NULL),
(388, 'Norteño', NULL),
(389, 'Nueva Cancion', NULL),
(390, 'Nueva Trova', NULL),
(391, 'Occitan', NULL),
(392, 'Pachanga', NULL),
(393, 'Plena', NULL),
(394, 'Porro', NULL),
(395, 'Quechua', NULL),
(396, 'Ranchera', NULL),
(397, 'Reggaeton', NULL),
(398, 'Rumba', NULL),
(399, 'Salsa', NULL),
(400, 'Samba', NULL),
(401, 'Samba-Canção', NULL),
(402, 'Seresta', NULL),
(403, 'Son', NULL),
(404, 'Son Montuno', NULL),
(405, 'Sonero', NULL),
(406, 'Tango', NULL),
(407, 'Tejano', NULL),
(408, 'Timba', NULL),
(409, 'Trova', NULL),
(410, 'Vallenato', NULL),
(411, 'Audiobookk', NULL),
(412, 'Comedy', NULL),
(413, 'Dialogue', NULL),
(414, 'Education', NULL),
(415, 'Erotic', NULL),
(416, 'Field Recording', NULL),
(417, 'Health-Fitness', NULL),
(418, 'Interview', NULL),
(419, 'Monolog', NULL),
(420, 'Movie Effects', NULL),
(421, 'Poetry', NULL),
(422, 'Political', NULL),
(423, 'Promotional', NULL),
(424, 'Public Broadcast', NULL),
(425, 'Public Service Announcement', NULL),
(426, 'Radioplay', NULL),
(427, 'Religious', NULL),
(428, 'Sermon', NULL),
(429, 'Sound Art', NULL),
(430, 'Sound Poetry', NULL),
(431, 'Special Effects', NULL),
(432, 'Speech', NULL),
(433, 'Spoken Word', NULL),
(434, 'Technical', NULL),
(435, 'Therapy', NULL),
(436, 'Ballad', NULL),
(437, 'Barbershop', NULL),
(438, 'Bollywood', NULL),
(439, 'Break-In', NULL),
(440, 'Bubblegum', NULL),
(441, 'Cantopop', NULL),
(442, 'Chanson', NULL),
(443, 'City Pop', NULL),
(444, 'Enka', NULL),
(445, 'Ethno-pop', NULL),
(446, 'Europop', NULL),
(447, 'Hokkien Pop', NULL),
(448, 'Indie Pop', NULL),
(449, 'Indo-Pop', NULL),
(450, 'J-pop', NULL),
(451, 'K-pop', NULL),
(452, 'Karaoke', NULL),
(453, 'Kayōkyoku', NULL),
(454, 'Levenslied', NULL),
(455, 'Light Music', NULL),
(456, 'Mandopop', NULL),
(457, 'Music Hall', NULL),
(458, 'Néo Kyma', NULL),
(459, 'Novelty', NULL),
(460, 'Ryūkōka', NULL),
(461, 'Schlager', NULL),
(462, 'Villancicos', NULL),
(463, 'Vocal', NULL),
(464, 'Azonto', NULL),
(465, 'Bubbling', NULL),
(466, 'Calypso', NULL),
(467, 'Dancehall', NULL),
(468, 'Dub Poetry', NULL),
(469, 'Junkanoo', NULL),
(470, 'Lovers Rock', NULL),
(471, 'Mento', NULL),
(472, 'Ragga', NULL),
(473, 'Rapso', NULL),
(474, 'Reggae', NULL),
(475, 'Reggae Gospel', NULL),
(476, 'Reggae-Pop', NULL),
(477, 'Rocksteady', NULL),
(478, 'Roots Reggae', NULL),
(479, 'Soca', NULL),
(480, 'Steel Band', NULL),
(482, 'Acoustic', NULL),
(483, 'Alternative Rock', NULL),
(485, 'Arena Rock', NULL),
(487, 'Atmospheric Black Metal', NULL),
(488, 'Avantgarde', NULL),
(489, 'Beat', NULL),
(490, 'Black Metal', NULL),
(491, 'Blues Rock', NULL),
(492, 'Brit Pop', NULL),
(493, 'Classic Rock', NULL),
(494, 'Coldwave', NULL),
(495, 'Country Rock', NULL),
(496, 'Crust', NULL),
(497, 'Death Metal', NULL),
(498, 'Deathcore', NULL),
(499, 'Deathrock', NULL),
(500, 'Depressive Black Metal', NULL),
(501, 'Doo Wop', NULL),
(502, 'Doom Metal', NULL),
(503, 'Dream Pop', NULL),
(504, 'Emo', NULL),
(505, 'Ethereal', NULL),
(506, 'Folk Metal', NULL),
(507, 'Folk Rock', NULL),
(508, 'Funeral Doom Metal', NULL),
(509, 'Funk Metal', NULL),
(510, 'Garage Rock', NULL),
(511, 'Glam', NULL),
(512, 'Goregrind', NULL),
(513, 'Goth Rock', NULL),
(514, 'Gothic Metal', NULL),
(515, 'Grindcore', NULL),
(516, 'Groove Metal', NULL),
(517, 'Grunge', NULL),
(518, 'Hard Rock', NULL),
(519, 'Heavy Metal', NULL),
(520, 'Horror Rock', NULL),
(521, 'Indie Rock', NULL),
(522, 'Industrial Metal', NULL),
(523, 'J-Rock', NULL),
(524, 'Jangle Pop', NULL),
(525, 'K-Rock', NULL),
(526, 'Krautrock', NULL),
(527, 'Lo-Fi', NULL),
(528, 'Lounge', NULL),
(529, 'Math Rock', NULL),
(530, 'Melodic Death Metal', NULL),
(531, 'Melodic Hardcore', NULL),
(532, 'Metalcore', NULL),
(533, 'Mod', NULL),
(534, 'NDW', NULL),
(535, 'New Wave', NULL),
(536, 'No Wave', NULL),
(537, 'Noisecore', NULL),
(538, 'Nu Metal', NULL),
(539, 'Oi', NULL),
(540, 'Parody', NULL),
(541, 'Pop Punk', NULL),
(542, 'Pop Rock', NULL),
(543, 'Pornogrind', NULL),
(544, 'Post Rock', NULL),
(545, 'Post-Hardcore', NULL),
(546, 'Post-Metal', NULL),
(547, 'Post-Punk', NULL),
(548, 'Power Metal', NULL),
(549, 'Power Pop', NULL),
(550, 'Power Violence', NULL),
(551, 'Prog Rock', NULL),
(552, 'Progressive Metal', NULL),
(553, 'Psychedelic Rock', NULL),
(554, 'Psychobilly', NULL),
(555, 'Pub Rock', NULL),
(556, 'Punk', NULL),
(557, 'Rock & Roll', NULL),
(558, 'Rock Opera', NULL),
(559, 'Rockabilly', NULL),
(560, 'Shoegaze', NULL),
(561, 'Ska', NULL),
(562, 'Skiffle', NULL),
(563, 'Sludge Metal', NULL),
(564, 'Soft Rock', NULL),
(565, 'Southern Rock', NULL),
(566, 'Space Rock', NULL),
(567, 'Speed Metal', NULL),
(568, 'Stoner Rock', NULL),
(569, 'Surf', NULL),
(570, 'Swamp Pop', NULL),
(571, 'Symphonic Metal', NULL),
(572, 'Symphonic Rock', NULL),
(573, 'Technical Death Metal', NULL),
(574, 'Thrash', NULL),
(575, 'Twist', NULL),
(576, 'Viking Metal', NULL),
(577, 'Yé-Yé', NULL),
(578, 'Cabaret', NULL),
(579, 'Musical', NULL),
(580, 'Score', NULL),
(581, 'Soundtrack', NULL),
(582, 'Theme', NULL),
(583, 'Vaudeville', NULL),
(584, 'Video Game Music', NULL),
(588, 'Arane', NULL),
(591, 'Azou', NULL),
(592, 'Soul', NULL),
(594, 'Zaza', NULL),
(595, 'Zaza', NULL),
(597, 'Newstyle', NULL),
(598, 'Essaif', NULL),
(599, 'Zaza', 46);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artistes`
--
ALTER TABLE `artistes`
  ADD PRIMARY KEY (`artiste_id`);

--
-- Index pour la table `assoc_artistes_styles`
--
ALTER TABLE `assoc_artistes_styles`
  ADD PRIMARY KEY (`assoc_id`),
  ADD KEY `assoc_artiste_id` (`assoc_artiste_id`),
  ADD KEY `assoc_style_id` (`assoc_style_id`);

--
-- Index pour la table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Index pour la table `styles`
--
ALTER TABLE `styles`
  ADD PRIMARY KEY (`style_id`),
  ADD KEY `style_genre_id` (`style_genre_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artistes`
--
ALTER TABLE `artistes`
  MODIFY `artiste_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT pour la table `assoc_artistes_styles`
--
ALTER TABLE `assoc_artistes_styles`
  MODIFY `assoc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `styles`
--
ALTER TABLE `styles`
  MODIFY `style_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=600;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `assoc_artistes_styles`
--
ALTER TABLE `assoc_artistes_styles`
  ADD CONSTRAINT `assoc_artistes_styles_ibfk_1` FOREIGN KEY (`assoc_artiste_id`) REFERENCES `artistes` (`artiste_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `assoc_artistes_styles_ibfk_2` FOREIGN KEY (`assoc_style_id`) REFERENCES `styles` (`style_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `styles`
--
ALTER TABLE `styles`
  ADD CONSTRAINT `styles_ibfk_1` FOREIGN KEY (`style_genre_id`) REFERENCES `genres` (`genre_id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
