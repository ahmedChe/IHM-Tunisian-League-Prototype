-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 23 Mai 2016 à 02:10
-- Version du serveur :  10.1.9-MariaDB
-- Version de PHP :  5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projetihm`
--

-- --------------------------------------------------------

--
-- Structure de la table `but`
--

CREATE TABLE `but` (
  `id` int(11) NOT NULL,
  `idjoueur` int(11) NOT NULL,
  `tempbut` int(11) NOT NULL,
  `idpartie` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `but`
--

INSERT INTO `but` (`id`, `idjoueur`, `tempbut`, `idpartie`) VALUES
(6, 240, 65, 2),
(7, 241, 79, 2),
(8, 135, 45, 3),
(9, 123, 23, 5),
(10, 123, 55, 5),
(11, 65, 60, 6),
(12, 65, 70, 6),
(13, 90, 78, 7),
(14, 193, 28, 8),
(15, 227, 64, 8),
(16, 252, 50, 9),
(17, 251, 77, 9),
(18, 90, 30, 11),
(19, 112, 37, 12),
(20, 110, 86, 12),
(21, 240, 33, 13),
(22, 65, 57, 13),
(23, 66, 69, 13),
(24, 76, 55, 14),
(25, 228, 66, 15),
(26, 180, 40, 16),
(27, 123, 68, 16);

-- --------------------------------------------------------

--
-- Structure de la table `calendrier`
--

CREATE TABLE `calendrier` (
  `id` int(11) NOT NULL,
  `annee` int(11) NOT NULL,
  `idequipe` int(11) NOT NULL,
  `Matches_jouee` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `butsplus` int(11) NOT NULL,
  `butsmoin` int(11) NOT NULL,
  `gains` int(11) NOT NULL,
  `Egalite` int(11) NOT NULL,
  `perdus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `calendrier`
--

INSERT INTO `calendrier` (`id`, `annee`, `idequipe`, `Matches_jouee`, `points`, `butsplus`, `butsmoin`, `gains`, `Egalite`, `perdus`) VALUES
(5, 1, 1, 2, 6, 4, 1, 2, 0, 0),
(6, 1, 3, 2, 6, 2, 0, 2, 0, 0),
(17, 1, 15, 2, 4, 2, 0, 1, 1, 0),
(18, 1, 5, 2, 4, 3, 1, 1, 1, 0),
(19, 1, 13, 2, 4, 2, 1, 1, 1, 0),
(20, 1, 14, 2, 3, 3, 2, 1, 0, 1),
(21, 1, 2, 2, 3, 1, 1, 1, 0, 1),
(22, 1, 4, 2, 3, 2, 2, 1, 0, 1),
(23, 1, 6, 2, 3, 1, 2, 1, 0, 1),
(24, 1, 9, 2, 2, 1, 1, 0, 2, 0),
(25, 1, 10, 2, 2, 1, 1, 0, 2, 0),
(26, 1, 7, 2, 1, 0, 1, 0, 1, 1),
(27, 1, 12, 2, 1, 0, 1, 0, 1, 1),
(28, 1, 8, 2, 1, 0, 2, 0, 1, 1),
(29, 1, 16, 2, 0, 0, 3, 0, 0, 2),
(30, 1, 11, 2, 0, 0, 3, 0, 0, 2);

-- --------------------------------------------------------

--
-- Structure de la table `designation`
--

CREATE TABLE `designation` (
  `id_designation` int(11) NOT NULL,
  `id_partie` int(11) NOT NULL,
  `temp_depart` time NOT NULL,
  `arbitre` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `designation`
--

INSERT INTO `designation` (`id_designation`, `id_partie`, `temp_depart`, `arbitre`) VALUES
(1, 17, '15:00:00', 'Yessine Harrouch'),
(2, 18, '16:00:00', 'Mourad Werteni'),
(3, 19, '14:00:00', 'Saiid Kordi'),
(4, 20, '14:30:00', 'Fawzi Lakhal'),
(5, 21, '14:30:00', 'Mounir Mrabet'),
(6, 22, '15:00:00', 'Sami Jomaa'),
(7, 23, '15:00:00', 'Slim Chtourou'),
(8, 24, '15:00:00', 'Mehdi Nebli');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `Abreviation` varchar(5) NOT NULL,
  `ville` varchar(50) NOT NULL,
  `Couleurs` varchar(80) NOT NULL,
  `Fondation` int(4) NOT NULL,
  `Président` varchar(75) NOT NULL,
  `Entraîneur` varchar(75) NOT NULL,
  `Logo` varchar(300) NOT NULL,
  `stade` varchar(50) NOT NULL,
  `Sigle` varchar(300) NOT NULL,
  `Site` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `equipe`
--

INSERT INTO `equipe` (`id`, `nom`, `Abreviation`, `ville`, `Couleurs`, `Fondation`, `Président`, `Entraîneur`, `Logo`, `stade`, `Sigle`, `Site`) VALUES
(1, 'Es Sahel', 'ESS', 'Sousse', 'Rouge & Blanc', 1925, 'Ridha Charfeddine', 'Faouzi Benzarti', '../Web/images/etoile.png', 'Olympique de Souse', '../Web/images/ess_logo.png', 'http://www.etoile-du-sahel.com/fr'),
(2, 'JS Kairouanaise', 'JSK', 'kairouan', 'Vert & Blanc', 1942, 'Mourad Bellakhal', 'Houcine Mestiri', '../Web/images/jsk.png', 'Hamda Laâouani Kairouan', '../Web/images/jsk_logo.png', 'http://www.jskairouan.com/'),
(3, 'CS Sfaxien', 'CSS', 'Sfax', 'Noir & Blanc', 1928, 'Lotfi Abdennadher', 'Chiheb Ellili', '../Web/images/css.png', 'Taieb Mhiri', '../Web/images/css_logo.png', 'http://www.css.org.tn/'),
(4, 'ES Tunis', 'EST', 'Tunis', 'Rouge, Jaune & Noir', 1919, 'Hamdi Meddeb', 'Ammar Souayeh', '../Web/images/est.png', 'El Menzah', '../Web/images/est_logo.png', 'http://www.est.org.tn/'),
(5, 'AS Marsa', 'ASM', 'Tunis', 'Jaune & Vert', 1939, 'Hammouda Louzir', 'Mondher Kebaier', '../Web/images/marsa.png', 'Chtioui La Marsa', '../Web/images/asm_logo.png', 'http://www.asmarsa.com/home.php'),
(6, 'Club Africain', 'CA', 'Tunis', 'Rouge & Blanc', 1920, 'Slim Riahi', 'Ruud Krol', '../web/images/ca.png', 'El Menzah', '../web/images/ca_logo.png', 'http://www.clubafricain.net/'),
(7, 'EGS Gafsa', 'ESGS', 'Gafsa', 'Jaune & Vert', 1967, 'Ridha Mhamedi', 'Khaled Ben Yahia', '../Web/images/gafsa.png', 'Gafsa Gazon', '../Web/images/egsg_logo.png', 'http://www.egsg-1967.com/'),
(8, 'A. Sportif Kasserine', 'ASK', 'Kasserine', 'Vert & Blanc', 1948, 'Kamel Hamzaoui', 'Tarek Thabet', '../Web/images/gasrin.png', 'Stade Kasserine', '../Web/images/ask_logo.png', 'https://www.facebook.com/ask.by.yassine/'),
(9, 'ES Zarzis', 'ESZ', 'Zarzis', 'Rouge & Jaune', 1934, 'El Mouldi Abichou', 'Moncef Mchareg', '../Web/images/esz.png', 'Zarzis Nouveau', '../Web/images/esz_logo.png', 'https://www.facebook.com/Esperance.sportive.zarzis/'),
(10, 'Stade Tunisien', 'ST', 'Tunis', 'Rouge & Vert', 1948, 'Ghazi Ben Tounes', 'Maher Kanzari', '../Web/images/st.png', 'Chedly Zouiten', '../Web/images/st_logo.png', 'http://www.stadetunisien.be/'),
(11, 'ES. Metlaoui', 'ESM', 'Metlaoui', 'Rouge & Jaune', 1950, 'Boujlel Boujlel', 'Mohamed Kouki', '../Web/images/esm.png', 'Métlaoui', '../Web/images/esm_logo.png', 'https://www.facebook.com/E.S.Metlaoui/'),
(12, 'CS Hammam-Lif', 'CSHL', 'Hammam-lif', 'Vert & Blanc', 1944, 'Adel Daadaa', 'Mouine Chaabani', '../Web/images/hamem.png', 'Hammam-Lif Gazon', '../Web/images/cshl_logo.png', 'http://www.hammam-lif.com/Accueil.html'),
(13, 'Stade Gabesien', 'SG', 'Gabes', 'Vert & Blanc', 1957, 'Saber Jemai', 'Jamel Belhadi', '../Web/images/sg.png', 'Gabès Gazon', '../Web/images/sg_logo.gif', 'http://stadegabesien.net/'),
(14, 'C A. Bizertin', 'CAB', 'Bizerte', 'Jaune & Noir', 1928, 'Mehdi Ben Gharbia', 'Sofiene Hidoussi', '../Web/images/cab.png', '15 Octobre Bizerte', '../Web/images/cab_logo.png', 'http://www.cab-officiel.com/'),
(15, 'E.O. Sidi Bouzid', 'EOSB', 'Sidi Bouzid', 'Vert & Blanc', 1959, 'Abdelkader El Afi', ' Hassene Gabsi', '../Web/images/osb.png', 'Sidi Bouzid', '../Web/images/osb_logo.png', 'http://olympiquesidibouzid.tn/'),
(16, 'US Ben Guerdane', 'USBG', 'Ben Guerdane', 'Jaune & Noir', 1934, 'Jlidi Arf', 'Chokri Khatoui', '../Web/images/usbg.png', 'Stade Ben Guerdane', '../Web/images/usbg_logo.png', 'www.usbg.tn/');

-- --------------------------------------------------------

--
-- Structure de la table `joueur`
--

CREATE TABLE `joueur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `pays` varchar(30) NOT NULL,
  `poste` varchar(30) NOT NULL,
  `numero` int(11) NOT NULL,
  `idequipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `joueur`
--

INSERT INTO `joueur` (`id`, `nom`, `prenom`, `pays`, `poste`, `numero`, `idequipe`) VALUES
(55, 'Aymen', 'Mathlouthi', 'Tunisienne', 'Gardien', 1, 1),
(56, 'Hamza', 'Lahmar', 'Tunisienne', 'Defenseur', 2, 1),
(57, 'Iheb', 'Msakni', 'Tunisienne', 'Defenseur', 3, 1),
(58, 'Marouane', 'Tej', 'Tunisienne', 'Defenseur', 4, 1),
(59, 'Mohamed Amine', 'Ben Amor', 'Tunisienne', 'Defenseur', 5, 1),
(60, 'Ahmed', 'Akaichi', 'Tunisienne', 'Milieu', 6, 1),
(61, 'Alaya', 'Brigui', 'Tunisienne', 'Milieu', 7, 1),
(62, 'Khalil', 'Bangoura', 'Guinee', 'Milieu', 8, 1),
(63, 'Ghazi', 'Abdelrazek', 'Tunisienne', 'Attaquant', 9, 1),
(64, 'Diogo da Silva', 'Farias', 'Tunisienne', 'Attaquant', 10, 1),
(65, 'Saddam', 'Ben Aziza', 'Tunisienne', 'Attaquant', 11, 1),
(66, 'Moses', 'Orkuma', 'Nigerien', 'Attaquant', 12, 1),
(67, 'Najah', 'Hammadi', 'Tunisienne', 'Gardien', 1, 2),
(68, 'Nourddine', 'Cherteni', 'Tunisienne', 'Defenseur', 2, 2),
(69, 'Hamza', 'Zakkar', 'Tunisienne', 'Defenseur', 3, 2),
(70, 'Abderrahim', 'Jelliti', 'Tunisienne', 'Defenseur', 4, 2),
(71, 'Ali', 'Korbi', 'Tunisienne', 'Defenseur', 5, 2),
(72, 'Amine', 'Mahdhbi', 'Tunisienne', 'Milieu', 6, 2),
(73, 'Aymen', 'Herzi', 'Tunisienne', 'Milieu', 7, 2),
(74, 'Sabri', 'Zaidi', 'Tunisienne', 'Milieu', 8, 2),
(75, 'Marouan', 'Gharbi', 'Tunisienne', 'Attaquant', 9, 2),
(76, 'Mohamed', 'Slama', 'Tunisienne', 'Attaquant', 10, 2),
(77, 'Slim', 'Jdaid', 'Tunisienne', 'Attaquant', 11, 2),
(78, 'Wael', 'Chaiebi', 'Tunisienne', 'Attaquant', 12, 2),
(79, 'Rami', 'Jridi', 'Tunisienne', 'Gardien', 1, 3),
(80, 'Ali', 'Maaloul', 'Tunisienne', 'Defenseur', 2, 3),
(81, 'Slim', 'Ben Jmiaa', 'Tunisienne', 'Defenseur', 3, 3),
(82, 'Mahmoud', 'Ben salah', 'Tunisienne', 'Defenseur', 4, 3),
(83, 'Yessine', 'Meryeh', 'Tunisienne', 'Defenseur', 5, 3),
(84, 'Zied', 'Derbeli', 'Tunisienne', 'Milieu', 6, 3),
(85, 'Ala', 'Marzouki', 'Tunisienne', 'Milieu', 7, 3),
(86, 'Houssem', 'Louati', 'Tunisienne', 'Milieu', 8, 3),
(87, 'Karim', 'Aouadhi', 'Tunisienne', 'Attaquant', 9, 3),
(88, 'Maher', 'Hannechi', 'Tunisienne', 'Attaquant', 10, 3),
(89, 'Ezchiel', 'Ndouassel', 'Tunisienne', 'Attaquant', 11, 3),
(90, 'Hamdi', 'Harbaoui', 'Tunisienne', 'Attaquant', 12, 3),
(101, 'Moez', 'Ben chrifia', 'Tunisienne', 'Gardien', 1, 4),
(102, 'Chams elddin', 'dhaouadi', 'Tunisienne', 'Defenseur', 2, 4),
(103, 'Iheb', 'Mbarki', 'Tunisienne', 'Defenseur', 3, 4),
(104, 'Khalil', 'Chamem', 'Tunisienne', 'Defenseur', 4, 4),
(105, 'Mohamed', 'Ben mansour', 'Tunisienne', 'Defenseur', 5, 4),
(106, 'Semah', 'Derbeli', 'Tunisienne', 'Milieu', 6, 4),
(107, 'Ali', 'Macheni', 'Tunisienne', 'Milieu', 7, 4),
(108, 'Edem', 'Rjeybi', 'Tunisienne', 'Milieu', 8, 4),
(109, 'Houcine', 'Regued', 'Tunisienne', 'Attaquant', 9, 4),
(110, 'Idriss', 'Mhirsi', 'Tunisienne', 'Attaquant', 10, 4),
(111, 'Saad', 'Bguir', 'Tunisienne', 'Attaquant', 11, 4),
(112, 'Taha yessine', 'Khnissi', 'Tunisienne', 'Attaquant', 12, 4),
(113, 'Aymen', 'Ben Ayoub', 'Tunisienne', 'Gardien', 1, 5),
(114, 'Ahmed', 'Ayedi', 'Tunisienne', 'Defenseur', 2, 5),
(115, 'Maher', 'Abidi', 'Tunisienne', 'Defenseur', 3, 5),
(116, 'Mohamed Ali', 'Kozdoghli', 'Tunisienne', 'Defenseur', 4, 5),
(117, 'Aleddine', 'Abbes', 'Tunisienne', 'Defenseur', 5, 5),
(118, 'Bilel', 'Ben Massoud', 'Tunisienne', 'Milieu', 6, 5),
(119, 'Amor', 'Fhal', 'Tunisienne', 'Milieu', 7, 5),
(120, 'Khalid', 'Yahia', 'Tunisienne', 'Milieu', 8, 5),
(121, 'Mohamed ', 'Touati', 'Tunisienne', 'Attaquant', 9, 5),
(122, 'Mohamed Ali', 'Ben Hammouda', 'Tunisienne', 'Attaquant', 10, 5),
(123, 'Nizar', 'Amri', 'Tunisienne', 'Attaquant', 11, 5),
(124, 'Nour', 'Hadhria', 'Tunisienne', 'Attaquant', 12, 5),
(125, 'Farouk', 'Ben Mostfa', 'Tunisienne', 'Gardien', 1, 6),
(126, 'Saifeddine', 'Lahouel', 'Tunisienne', 'Defenseur', 2, 6),
(127, 'Biel', 'Ifa', 'Tunisienne', 'Defenseur', 3, 6),
(128, 'Hamza', 'Agrebi', 'Tunisienne', 'Defenseur', 4, 6),
(129, 'Hichem', 'Belkaroui', 'Tunisienne', 'Defenseur', 5, 6),
(130, 'houcine', 'Nater', 'Tunisienne', 'Milieu', 6, 6),
(131, 'Ahmed', 'Khalil', 'Tunisienne', 'Milieu', 7, 6),
(132, 'Oussema', 'Haddedi', 'Tunisienne', 'Milieu', 8, 6),
(133, 'Saif', 'Tka', 'Tunisienne', 'Attaquant', 9, 6),
(134, 'Yessine', 'Mikeri', 'Tunisienne', 'Attaquant', 10, 6),
(135, 'Bassem', 'Srarfi', 'Tunisienne', 'Attaquant', 11, 6),
(136, 'Ibrahim', 'Chnihi', 'Tunisienne', 'Attaquant', 12, 6),
(137, 'Khmaies', 'Themri', 'Tunisienne', 'Gardien', 1, 7),
(138, 'Slim', 'Becha', 'Tunisienne', 'Defenseur', 2, 7),
(139, 'Abdelkader', 'Dhaw', 'Tunisienne', 'Defenseur', 3, 7),
(140, 'Aleddine', 'Bouslimi', 'Tunisienne', 'Defenseur', 4, 7),
(141, 'Amir', 'Dridi', 'Tunisienne', 'Defenseur', 5, 7),
(142, 'Ayoub', 'Tlili', 'Tunisienne', 'Milieu', 6, 7),
(143, 'Bessem', 'Nafti', 'Tunisienne', 'Milieu', 7, 7),
(144, 'Borhen', 'Ghannem', 'Tunisienne', 'Milieu', 8, 7),
(145, 'Ghazi', 'Challouf', 'Tunisienne', 'Attaquant', 9, 7),
(146, 'Hamza', 'Mabrouk', 'Tunisienne', 'Attaquant', 10, 7),
(147, 'Marouane', 'Troudi', 'Tunisienne', 'Attaquant', 11, 7),
(148, 'Skander', 'Cheikh', 'Tunisienne', 'Attaquant', 12, 7),
(149, 'Alledine', 'Kawem', 'Tunisienne', 'Gardien', 1, 8),
(150, 'Chiheb', 'Ben Frej', 'Tunisienne', 'Defenseur', 2, 8),
(160, 'Nidhal', 'Nefzi', 'Tunisienne', 'Defenseur', 3, 8),
(161, 'Sofien', 'Ksairi', 'Tunisienne', 'Defenseur', 4, 8),
(162, 'Mahmoud', 'Dridi', 'Tunisienne', 'Defenseur', 5, 8),
(163, 'Nidhal', 'Dalhoumi', 'Tunisienne', 'Milieu', 6, 8),
(164, 'Wael', 'Bahri', 'Tunisienne', 'Milieu', 7, 8),
(165, 'Ayemen', 'Souda', 'Tunisienne', 'Milieu', 8, 8),
(166, 'Marouane', 'Tritar', 'Tunisienne', 'Attaquant', 9, 8),
(167, 'Moussa', 'Kamara', 'Tunisienne', 'Attaquant', 10, 8),
(168, 'Rochdi ', 'Jarbouii', 'Tunisienne', 'Attaquant', 11, 8),
(169, 'Samir', 'Laaroussi', 'Tunisienne', 'Attaquant', 12, 8),
(170, 'Hamza', 'Adala', 'Tunisienne', 'Gardien', 1, 9),
(171, 'Abdelkader', 'Khchech', 'Tunisienne', 'Defenseur', 2, 9),
(172, 'Hamdi', 'Mabrouk', 'Tunisienne', 'Defenseur', 3, 9),
(173, 'Mohktar', 'Fall', 'Tunisienne', 'Defenseur', 4, 9),
(174, 'Rami', 'Bouchnibi', 'Tunisienne', 'Defenseur', 5, 9),
(175, 'Sadek', 'Ourimi', 'Tunisienne', 'Milieu', 6, 9),
(176, 'Slim', 'Ben Belgacem', 'Tunisienne', 'Milieu', 7, 9),
(177, 'Zouhair', 'Atia', 'Tunisienne', 'Milieu', 8, 9),
(178, 'Achref', 'Nasri', 'Tunisienne', 'Attaquant', 9, 9),
(179, 'Hamza', 'Messadi', 'Tunisienne', 'Attaquant', 10, 9),
(180, 'Jacques', 'Beson', 'Tunisienne', 'Attaquant', 11, 9),
(181, 'Mohamed Ali', 'Jouini', 'Tunisienne', 'Attaquant', 12, 9),
(182, 'Kais', 'Amdouni', 'Tunisienne', 'Gardien', 1, 10),
(183, 'Lassad', 'Hammemi', 'Tunisienne', 'Defenseur', 2, 10),
(184, 'Achref', 'Boudhieb', 'Tunisienne', 'Defenseur', 3, 10),
(185, 'Aleddine', 'Dahnous', 'Tunisienne', 'Defenseur', 4, 10),
(186, 'Hachem', 'Abbes', 'Tunisienne', 'Defenseur', 5, 10),
(187, 'Hamdi', 'Rouid', 'Tunisienne', 'Milieu', 6, 10),
(188, 'Melek', 'Landolsi', 'Tunisienne', 'Milieu', 7, 10),
(189, 'Mohamed', 'Ben Ali', 'Tunisienne', 'Milieu', 8, 10),
(190, 'Walid', 'Hichri', 'Tunisienne', 'Attaquant', 9, 10),
(191, 'Sylinho', '', 'Gabon', 'Attaquant', 10, 10),
(192, 'Adama', 'Traore', 'Cameroune', 'Attaquant', 11, 10),
(193, 'Saieffedine', 'Jerbi', 'Tunisienne', 'Attaquant', 12, 10),
(194, 'Abdesslem', 'Hallaoui', 'Tunisienne', 'Gardien', 1, 11),
(195, 'Aymen', 'Ayari', 'Tunisienne', 'Defenseur', 2, 11),
(196, 'Bilel', 'Yaken', 'Tunisienne', 'Defenseur', 3, 11),
(197, 'Charfeddine', 'Bilhaj', 'Tunisienne', 'Defenseur', 4, 11),
(198, 'Achref', 'Zouaghi', 'Tunisienne', 'Defenseur', 5, 11),
(199, 'Adib', 'Mesbehi', 'Tunisienne', 'Milieu', 6, 11),
(200, 'Amor', 'Shimi', 'Tunisienne', 'Milieu', 7, 11),
(201, 'Atef', 'Mazni', 'Tunisienne', 'Milieu', 8, 11),
(202, 'Cissoco', '', 'Senegal', 'Attaquant', 9, 11),
(203, 'Zied', 'Baccouche', 'Tunisienne', 'Attaquant', 10, 11),
(204, 'Slim', 'Mezlini', 'Tunisienne', 'Attaquant', 11, 11),
(205, 'Yessine', 'Majdi', 'Tunisienne', 'Attaquant', 12, 11),
(206, 'Arbi', 'Mejri', 'Tunisienne', 'Gardien', 1, 12),
(207, 'Hamza', 'Behi', 'Tunisienne', 'Defenseur', 2, 12),
(208, 'Fahmi', 'Ben Romdhane', 'Tunisienne', 'Defenseur', 3, 12),
(209, 'Ibrahim', 'Camara', 'Tunisienne', 'Defenseur', 4, 12),
(210, 'Mehdi', 'Rsaisi', 'Tunisienne', 'Defenseur', 5, 12),
(211, 'Meskini', 'Saifallah', 'Tunisienne', 'Milieu', 6, 12),
(212, 'Chedli', 'Chaar', 'Tunisienne', 'Milieu', 7, 12),
(213, 'Firas', 'Aouissaoui', 'Tunisienne', 'Milieu', 8, 12),
(214, 'Jamel', 'Melek', 'Tunisienne', 'Attaquant', 9, 12),
(215, 'Khaled', 'Melliti', 'Tunisienne', 'Attaquant', 10, 12),
(216, 'Daouda', 'Camara', 'Senegal', 'Attaquant', 11, 12),
(217, 'Hamdi', 'Jawchi', 'Tunisienne', 'Attaquant', 12, 12),
(218, 'Nadim', 'Thabet', 'Tunisienne', 'Gardien', 1, 13),
(219, 'Akrem', 'Ben Sassi', 'Tunisienne', 'Defenseur', 2, 13),
(220, 'Ali', 'Hammemi', 'Tunisienne', 'Defenseur', 3, 13),
(221, 'Hamza', 'Baccouche', 'Tunisienne', 'Defenseur', 4, 13),
(222, 'Ahmed', 'Mida', 'Tunisienne', 'Defenseur', 5, 13),
(223, 'Aleddine', 'Cherni', 'Tunisienne', 'Milieu', 6, 13),
(224, 'Hamza', 'Jlassi', 'Tunisienne', 'Milieu', 7, 13),
(225, 'Houssem', 'Taboubi', 'Tunisienne', 'Milieu', 8, 13),
(226, 'Wael', 'Ben Ramdhane', 'Tunisienne', 'Attaquant', 9, 13),
(227, 'Wejdi', 'Mejri', 'Tunisienne', 'Attaquant', 10, 13),
(228, 'Ahmed', 'Hosni', 'Tunisienne', 'Attaquant', 11, 13),
(229, 'Fakhreddine', 'Galbi', 'Tunisienne', 'Attaquant', 12, 13),
(230, 'Achraf', 'Jlassi', 'Tunisienne', 'Gardien', 1, 14),
(231, 'Houssem Eddine', 'Sdiri', 'Tunisienne', 'Defenseur', 2, 14),
(232, 'Khaled', 'Hmani', 'Tunisienne', 'Defenseur', 3, 14),
(233, 'Seifallah', 'Hosni', 'Tunisienne', 'Defenseur', 4, 14),
(234, 'Slimene', 'Kchok', 'Tunisienne', 'Defenseur', 5, 14),
(235, 'Youssef', 'Trabelsi', 'Tunisienne', 'Milieu', 6, 14),
(236, 'Ahmed', 'Sassi', 'Tunisienne', 'Milieu', 7, 14),
(237, 'Zoubair', 'Darraji', 'Tunisienne', 'Milieu', 8, 14),
(238, 'Hamza', 'Mathlouthi', 'Tunisienne', 'Attaquant', 9, 14),
(239, 'Mohamed Amine', 'Touati', 'Tunisienne', 'Attaquant', 10, 14),
(240, 'Mortadha', 'Ben ouanes', 'Tunisienne', 'Attaquant', 11, 14),
(241, 'Prince', 'Ipara', 'Mali', 'Attaquant', 12, 14),
(242, 'Bilel', 'Ben Brahim', 'Tunisienne', 'Gardien', 1, 15),
(243, 'Abdelkader', 'Dhaw', 'Tunisienne', 'Defenseur', 2, 15),
(244, 'Aymen', 'Sfaxi', 'Tunisienne', 'Defenseur', 3, 15),
(245, 'Aymen', 'Sallemi', 'Tunisienne', 'Defenseur', 4, 15),
(246, 'Hamdi', 'Msalmi', 'Tunisienne', 'Defenseur', 5, 15),
(247, 'Khaldoun', 'Mansour', 'Tunisienne', 'Milieu', 6, 15),
(248, 'Malek', 'Miledi', 'Tunisienne', 'Milieu', 7, 15),
(249, 'Marouane', 'Touzri', 'Tunisienne', 'Milieu', 8, 15),
(250, 'Aboubaker', 'Camara', 'Tunisienne', 'Attaquant', 9, 15),
(251, 'Heithem', 'Sessi', 'Tunisienne', 'Attaquant', 10, 15),
(252, 'Mondher', 'Guesmi', 'Tunisienne', 'Attaquant', 11, 15),
(253, 'Mohamed', 'Sahbi', 'Tunisienne', 'Attaquant', 12, 15),
(254, 'Ali', 'Jmal', 'Tunisienne', 'Gardien', 1, 16),
(255, 'Amine', 'Abbes', 'Tunisienne', 'Defenseur', 2, 16),
(256, 'Laarousi', 'Bargougi', 'Tunisienne', 'Defenseur', 3, 16),
(257, 'Mohamed Amine', 'Ben Abbes', 'Tunisienne', 'Defenseur', 4, 16),
(258, 'Ahmed', 'Mida', 'Tunisienne', 'Defenseur', 5, 16),
(259, 'Ahmed', 'Dhib', 'Tunisienne', 'Milieu', 6, 16),
(260, 'Fahmi', 'Abcha', 'Tunisienne', 'Milieu', 7, 16),
(261, 'Fedi', 'Hmizi', 'Tunisienne', 'Milieu', 8, 16),
(262, 'Jileni', 'Abdesslem', 'Tunisienne', 'Attaquant', 9, 16),
(263, 'Rafik', 'Mednini', 'Tunisienne', 'Attaquant', 10, 16),
(264, 'Cederic', 'Mbegba', 'Tunisienne', 'Attaquant', 11, 16),
(265, 'Chiheb', 'Zoghlemi', 'Tunisienne', 'Attaquant', 12, 16);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id_article` int(11) NOT NULL,
  `titre` varchar(100) NOT NULL,
  `Recapitulation` varchar(300) NOT NULL,
  `contenu` text NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id_article`, `titre`, `Recapitulation`, `contenu`, `image`) VALUES
(1, 'CS Hammam Lif-Club Sportif Sfaxien : Formation probable des sfaxiens', 'Voici la formation probable du Club Sportif Sfaxien qui affrontera cet après midi le CS Hammam-Lif pour le compte de la 26ème journée de Ligue 1', 'Voici la formation probable du Club Sportif Sfaxien qui affrontera cet après midi le CS Hammam-Lif pour le compte de la 26ème journée de Ligue 1\r\n\r\nRami Jeridi, Yassine Meriah, Mahmoud Ben Salah, Zied Derbali, Slim Mahjebi, Kingsley Sokari, Wassim Kammoun, Maher Hannachi, Mohamed Ali Moncer, Junior Ajayi et Alaeddine Marzouki.\r\nCe match qui aura lieu au stade de Hammam-Lif débutera à 16h15.', '../Web/images/Zied-Derbali.jpg'),
(2, 'La FTF refuse la demande du CSS de reporter son match face à l''Espérance', 'La Fédération Tunisienne de Football a refusé aujourd''hui la demande du CSS de respecter l''ordre des prochaines journées de la Ligue.', 'La Fédération Tunisienne de Football a refusé aujourd''hui la demande du Club Sportif SFaxien de respecter l''ordre des prochaines journées de la Ligue 1.\r\nLa formation sfaxienne avait refusé de disputer son match pour le compte de la 26ème journée face à l''Espérance Sportive de Tunis avant la rencontre de la 25ème journée de cette dernière face à l''Etoile du Sahel.\r\nLa FTF indique dans son communiqué que le calendrier général de la Ligue 1 a été préparé à l''avance et accepté par tous les clubs.\r\nLa surcharge des rendez-vous nationaux et internationaux constitue la principale cause de ce refus de changer les dates des prochains matches du championnat.', '../Web/images/federation.jpg'),
(3, 'Espérance de Zarzis-JSK : Liste des joueurs convoqués', 'Voici la liste des joueurs de la Jeunesse Sportive Kairouanaise convoqués ce dimanche pour disputer le match de la 26ème journée de Ligue 1 ', 'Voici la liste des joueurs de la Jeunesse Sportive Kairouanaise convoqués ce dimanche pour disputer le match de la 26ème journée de Ligue 1 face à l''Espérance Sportive de Zarzis :\r\nAli Kalai, Ali Frioui, Noureedine Chortani, Heithem Layouni, Firas Hleli, Bangaly Keita, Hamza Zakkar, Houssem Bnina, Sabri Amari, Safouane Ben Salem, Khalil Traoré, Mohamed Ali Ragoubi, Faïçal Mannaï, Slim Mhadhbi, Marouen Ghribi, Abderrahim Jelity, Riadh Frioui, Sabri Zaidi, Aymen Harzi, Ali Korbi.', '../Web/images/jsk-conf.jpg'),
(4, 'Coupes Africaines des Clubs: Résultats du tirage au sort', 'Voici les résultats du tirage au sort du tour préliminaire des deux compétitions Africaines des clubs la ligue des champions.', 'Voici les résultats du tirage au sort du tour préliminaire des deux compétitions Africaines des clubs la ligue des champions  et la coupe de la Confédération.\r\n<br>\r\nLigue des Champions:\r\n<br>\r\n1er tour:\r\n<br>\r\nClub Africain – AS Tanda (CIV)\r\n<br>\r\nAller le 12, 13 ou 14 février et le retour en Côte d’Ivoire le 26, 27 ou 28 du même mois. En cas de qualification, le club de Bab Jedid affrontera le vainqueur de la double confrontation entre Asante Gold (Ghana) et le MCO Bejaia (Algérie).\r\n<br>\r\nSecond tour:\r\n<br>\r\nEtoile Sportive du Sahel – le vainqueur de la double confrontation entre l’Olympique Khouribga (Maroc) et le FC Gamtel (Gambie)\r\n<br>\r\nCoupe de la CAF:\r\n<br>\r\n1er Tour:\r\n<br>\r\nStade Gabésien – AS Bakary-Djan de Baroueli (Mali)\r\n<br>\r\nLe match aller aura lieu le 12, 13 ou 14 février au Mali, alors que la rencontre retour se déroulera au stade de Gabes le 26, 27 ou 28 du même mois.\r\n<br>\r\nSecond tour:\r\n<br>\r\nES Tunis – le vainqueur du duel qui opposera CHAD aux camerounais de News Stars de Douala.', '../Web/images/CAF-logo.jpg'),
(6, 'Décisions de la Ligue Nationale de Foot Ball Professionnel', 'Le Bureau de Ligue Nationale de Football Professionnel réuni et a décidé', 'Le Bureau de Ligue Nationale de Football Professionnel réuni le Lundi 9 Mai 2016 dans l’après midi et a décidé ce qui suit:<br>\r\n\r\n1- suspension de 2 match et 1000 DT d’amende du joueur du CSS  Ali Maaloul.<br>\r\n\r\n2 -Suspension de 3 matchs et 700 DT d’amende du joueur  de l’USBG Chiheb Zoghlami .<br>\r\n\r\n3- une amende de 2500 DT pour le trésorier de l’ASK Mr. Sabeur Grira.\r\n<br>\r\n4- l’entraineur Adjoint de l’O.B Nebil Bechaouech est interdit du banc pour 5 matchs avec 1500 DT d’amende.\r\n<br>\r\n5-l’entraineur Adjoint de J.S Maher Soltani  est interdit du banc pour 1 matchs avec 350 DT d’amende.\r\n<br>\r\n6- l’officiel de l’ASG Yosri Touati est interdit du banc pour 5 matchs avec une amende de 2000 DT.\r\n<br>\r\n7- 1000 DT d’amende pour le ÇA pour jet de bouteilles.\r\n<br>\r\n8- 2000 DT d’amende pour l’ASK pour jet de projectiles  (Récidives ).\r\n<br>\r\n9-1000 DT d’amende pour JS pour jet de bouteilles  ( Récidive ).', '../Web/images/FTF-1.jpg'),
(7, 'Commission de discipline : Convocation de 5 joueurs du CA et EST', '5 joueurs du Club Africain et de l’Espérance Sportive de Tunis sont convoqués à comparaître devant la commission de discipline de la Ligue 1', '5 joueurs du Club Africain et de l’Espérance Sportive de Tunis sont convoqués à comparaître devant la commission de discipline de la Ligue Nationale de Football professionnel et ce demain matin  Jeudi 7 Avril 2016 au siège de la Ligue.\r\n<br>\r\nIl s’agit de Mourad Hedhli, Imed Miniaoui et Ghazi Ayadi du Club Africain et Moez Ben Cherifia et Ghaylene Chaalani de l’EST.', '../Web/images/LIGUE-I.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `palmares`
--

CREATE TABLE `palmares` (
  `id` int(11) NOT NULL,
  `titre` varchar(50) NOT NULL,
  `nomEquipe` varchar(100) NOT NULL,
  `saison` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `palmares`
--

INSERT INTO `palmares` (`id`, `titre`, `nomEquipe`, `saison`) VALUES
(1, 'championnat', 'ES Tunis', 2014),
(2, 'championnat', 'ES Tunis', 2012),
(3, 'championnat', 'ES Tunis', 2011),
(4, 'championnat', 'ES Tunis', 2010),
(5, 'championnat', 'ES Tunis', 2009),
(6, 'championnat', 'ES Tunis', 2006),
(7, 'championnat', 'ES Tunis', 2004),
(8, 'championnat', 'ES Tunis', 2003),
(9, 'championnat', 'ES Tunis', 2002),
(10, 'championnat', 'ES Tunis', 2001),
(11, 'championnat', 'CS Sfaxien', 2013),
(12, 'championnat', 'CS Sfaxien', 2005),
(13, 'championnat', 'CS Sfaxien', 1995),
(14, 'championnat', 'CS Sfaxien', 1983),
(15, 'championnat', 'CS Sfaxien', 1981),
(16, 'championnat', 'CS Sfaxien', 1978),
(17, 'championnat', 'CS Sfaxien', 1971),
(18, 'championnat', 'CS Sfaxien', 1969),
(19, 'championnat', 'Club Africain', 2015),
(20, 'championnat', 'Club Africain', 2008),
(21, 'championnat', 'Club Africain', 1996),
(22, 'championnat', 'Club Africain', 1992),
(23, 'championnat', 'Club Africain', 1990),
(24, 'championnat', 'Club Africain', 1980),
(25, 'championnat', 'Club Africain', 1979),
(26, 'championnat', 'Club Africain', 1974),
(27, 'championnat', 'Club Africain', 1973),
(28, 'championnat', 'Club Africain', 1967),
(29, 'championnat', 'Club Africain', 1964),
(30, 'championnat', 'Club Africain', 1948),
(31, 'championnat', 'Es Sahel', 2007),
(32, 'championnat', 'Es Sahel', 1997),
(33, 'championnat', 'Es Sahel', 1987),
(34, 'championnat', 'Es Sahel', 1986),
(35, 'championnat', 'Es Sahel', 1972),
(36, 'championnat', 'C A. Bizertin', 1984),
(37, 'championnat', 'C A. Bizertin', 1949),
(38, 'championnat', 'C A. Bizertin', 1946),
(39, 'championnat', 'C A. Bizertin', 1945),
(40, 'championnat', 'Stade Tunisien', 1965),
(41, 'championnat', 'Stade Tunisien', 1962),
(42, 'championnat', 'Stade Tunisien', 1961),
(43, 'championnat', 'CS HAMMAM-Lif', 1956),
(44, 'championnat', 'CS HAMMAM-Lif', 1955),
(45, 'coupe', 'Es Sahel', 2015),
(46, 'coupe', 'Es Sahel', 2014),
(47, 'coupe', 'C A. Bizertin', 2013),
(48, 'coupe', 'Es Sahel', 2012),
(49, 'coupe', 'ES Tunis', 2011),
(50, 'coupe', 'Olympique Beja', 2010),
(51, 'coupe', 'CS Sfaxien', 2009),
(52, 'coupe', 'ES Tunis', 2008),
(53, 'coupe', 'ES Tunis', 2007),
(54, 'coupe', 'ES Tunis', 2006),
(55, 'coupe', 'ES Zarzis', 2005),
(56, 'coupe', 'CS Sfaxien', 2004),
(57, 'coupe', 'Stade Tunisien', 2003),
(58, 'coupe', 'Coupe non achevee', 2002),
(59, 'coupe', 'CS Hammam-Lif', 2001),
(60, 'champions league', 'ES Tunis', 2011),
(61, 'champions league', 'Es Sahel', 2007),
(62, 'champions league', 'ES Tunis', 1994),
(63, 'champions league', 'Club Africain', 1991),
(64, 'championnat', 'ES Tunis', 2000),
(65, 'championnat', 'ES Tunis', 1999),
(66, 'championnat', 'ES Tunis', 1998),
(67, 'championnat', 'ES Tunis', 1994),
(68, 'championnat', 'ES Tunis', 1993),
(69, 'championnat', 'ES Tunis', 1991),
(70, 'championnat', 'ES Tunis', 1989),
(71, 'championnat', 'ES Tunis', 1988),
(72, 'championnat', 'ES Tunis', 1985),
(73, 'championnat', 'ES Tunis', 1982),
(74, 'championnat', 'JS Kairouanaise', 1977),
(75, 'championnat', 'Avant garde', 1929),
(76, 'championnat', 'Savoia de La Goulette', 1938),
(77, 'championnat', 'Racing Club	', 1922),
(78, 'championnat', 'Racing Club	', 1925),
(79, 'championnat', 'Sporting Club	', 1926),
(80, 'championnat', 'Sporting Club	', 1928),
(81, 'championnat', 'Club sportif gabesien', 1939),
(82, 'championnat', 'Stade gaulois', 1923),
(83, 'championnat', 'Stade gaulois', 1924),
(84, 'championnat', 'Stade gaulois', 1927),
(85, 'championnat', 'Union sportive tunisienne', 1930),
(86, 'championnat', 'Union sportive tunisienne', 1931),
(87, 'championnat', 'Union sportive tunisienne', 1933),
(88, 'championnat', 'Sfax railways sports', 1934),
(89, 'championnat', 'Sfax railways sports', 1953),
(90, 'championnat', 'Sfax railways sports', 1968),
(91, 'championnat', 'Italia', 1937),
(92, 'championnat', 'Italia', 1932),
(93, 'championnat', 'Italia', 1935),
(94, 'championnat', 'Italia', 1936),
(95, 'championnat ', 'Es Sahel', 1950),
(96, 'championnat', 'Es Sahel', 1958),
(97, 'championnat', 'Es Sahel', 1963),
(98, 'championnat', 'Es Sahel', 1966),
(99, 'championnat', 'ES Tunis', 1976),
(100, 'championnat', 'ES Tunis', 1942),
(101, 'championnat', 'ES Tunis', 1959),
(102, 'championnat', 'ES Tunis', 1960),
(103, 'championnat', 'ES Tunis', 1970),
(104, 'championnat', 'ES Tunis', 1975),
(105, 'Coupe d''Afrique des Vainqueurs de Coupe', 'Es Sahel', 1997),
(106, 'Coupe d''Afrique des Vainqueurs de Coupe', 'Es Sahel', 2003),
(107, 'Coupe d''Afrique des Vainqueurs de Coupe', 'ES Tunis', 1998),
(108, 'Coupe d''Afrique des Vainqueurs de Coupe', 'C A. Bizertin', 1988),
(109, 'Coupe de la Confederation Africaine', 'Es Sahel', 2015),
(110, 'Coupe de la Confédération Africaine', 'CS Sfaxien', 2013),
(111, 'Coupe de la Confédération Africaine', 'CS Sfaxien', 2008),
(112, 'Coupe de la Confédération Africaine', 'CS Sfaxien', 2007),
(113, 'Coupe de la Confédération Africaine', 'Es Sahel', 2006),
(114, 'Coupe de la Confédération Africaine', 'Es Sahel', 1999),
(115, 'Coupe de la Confédération Africaine', 'CS Sfaxien', 1998),
(116, 'Coupe de la Confédération Africaine', 'ES Tunis', 1997),
(117, 'Coupe de la Confédération Africaine', 'Es Sahel', 1995);

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

CREATE TABLE `partie` (
  `id` int(11) NOT NULL,
  `idequipeRec` int(11) NOT NULL,
  `idequipeInv` int(11) NOT NULL,
  `date` date NOT NULL,
  `journee` int(11) NOT NULL,
  `Saison` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `partie`
--

INSERT INTO `partie` (`id`, `idequipeRec`, `idequipeInv`, `date`, `journee`, `Saison`) VALUES
(1, 12, 15, '2015-09-17', 1, 1),
(2, 8, 14, '2015-09-13', 1, 1),
(3, 6, 2, '2015-09-13', 1, 1),
(4, 7, 9, '2015-09-13', 1, 1),
(5, 5, 4, '2015-09-16', 1, 1),
(6, 16, 1, '2015-09-16', 1, 1),
(7, 11, 3, '2015-09-16', 1, 1),
(8, 10, 13, '2015-09-17', 1, 1),
(9, 15, 6, '2015-09-19', 2, 1),
(10, 10, 8, '2015-09-19', 2, 1),
(11, 3, 16, '2015-09-21', 2, 1),
(12, 4, 11, '2015-09-21', 2, 1),
(13, 14, 1, '2015-09-22', 2, 1),
(14, 2, 12, '2015-09-22', 2, 1),
(15, 13, 7, '2015-09-22', 2, 1),
(16, 9, 5, '2015-09-22', 2, 1),
(17, 5, 13, '2015-10-22', 3, 1),
(18, 14, 10, '2015-10-22', 3, 1),
(19, 16, 4, '2015-10-23', 3, 1),
(20, 6, 7, '2015-10-23', 3, 1),
(21, 2, 3, '2015-10-23', 3, 1),
(22, 15, 8, '2015-10-23', 3, 1),
(23, 11, 9, '2015-10-23', 3, 1),
(24, 1, 12, '2015-10-23', 3, 1),
(25, 4, 12, '2015-10-30', 4, 1),
(26, 1, 9, '2015-10-31', 4, 1),
(27, 5, 10, '2015-10-31', 4, 1),
(28, 16, 3, '2015-10-31', 4, 1),
(29, 2, 14, '2015-10-31', 4, 1),
(30, 8, 16, '2015-10-31', 4, 1),
(31, 11, 7, '2015-10-31', 4, 1),
(32, 13, 15, '2015-10-31', 4, 1),
(33, 15, 11, '2015-11-06', 5, 1),
(34, 14, 12, '2015-11-06', 5, 1),
(35, 8, 1, '2015-11-07', 5, 1),
(36, 7, 5, '2015-11-07', 5, 1),
(37, 2, 13, '2015-11-07', 5, 1),
(38, 13, 2, '2015-11-07', 5, 1),
(39, 10, 16, '2015-11-07', 5, 1),
(40, 3, 4, '2015-11-07', 5, 1);

-- --------------------------------------------------------

--
-- Structure de la table `saison`
--

CREATE TABLE `saison` (
  `id_Saison` int(11) NOT NULL,
  `Saison_sportif` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `saison`
--

INSERT INTO `saison` (`id_Saison`, `Saison_sportif`) VALUES
(1, '2016');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `but`
--
ALTER TABLE `but`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpartie` (`idpartie`),
  ADD KEY `idjoueur` (`idjoueur`);

--
-- Index pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `annee` (`annee`,`idequipe`),
  ADD KEY `idequipe` (`idequipe`);

--
-- Index pour la table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`id_designation`),
  ADD UNIQUE KEY `id_partie` (`id_partie`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idequipe` (`idequipe`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id_article`);

--
-- Index pour la table `palmares`
--
ALTER TABLE `palmares`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `partie`
--
ALTER TABLE `partie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idequipeRec` (`idequipeRec`),
  ADD KEY `idequipeInv` (`idequipeInv`);

--
-- Index pour la table `saison`
--
ALTER TABLE `saison`
  ADD PRIMARY KEY (`id_Saison`),
  ADD UNIQUE KEY `Saison_sportif` (`Saison_sportif`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `but`
--
ALTER TABLE `but`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT pour la table `calendrier`
--
ALTER TABLE `calendrier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `designation`
--
ALTER TABLE `designation`
  MODIFY `id_designation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `joueur`
--
ALTER TABLE `joueur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=266;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id_article` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `palmares`
--
ALTER TABLE `palmares`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;
--
-- AUTO_INCREMENT pour la table `partie`
--
ALTER TABLE `partie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT pour la table `saison`
--
ALTER TABLE `saison`
  MODIFY `id_Saison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `but`
--
ALTER TABLE `but`
  ADD CONSTRAINT `but_ibfk_1` FOREIGN KEY (`idpartie`) REFERENCES `partie` (`id`),
  ADD CONSTRAINT `but_ibfk_2` FOREIGN KEY (`idjoueur`) REFERENCES `joueur` (`id`);

--
-- Contraintes pour la table `calendrier`
--
ALTER TABLE `calendrier`
  ADD CONSTRAINT `calendrier_ibfk_1` FOREIGN KEY (`idequipe`) REFERENCES `equipe` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `joueur`
--
ALTER TABLE `joueur`
  ADD CONSTRAINT `joueur_ibfk_1` FOREIGN KEY (`idequipe`) REFERENCES `equipe` (`id`);

--
-- Contraintes pour la table `partie`
--
ALTER TABLE `partie`
  ADD CONSTRAINT `partie_ibfk_1` FOREIGN KEY (`idequipeRec`) REFERENCES `equipe` (`id`),
  ADD CONSTRAINT `partie_ibfk_2` FOREIGN KEY (`idequipeInv`) REFERENCES `equipe` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
