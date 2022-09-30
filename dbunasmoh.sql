-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2022 at 09:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbunasmoh`
--

-- --------------------------------------------------------

--
-- Table structure for table `etudiant`
--

CREATE TABLE `etudiant` (
  `code` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `sexe` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `religion` varchar(30) NOT NULL,
  `optionb` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `telephoneparent` varchar(15) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etudiant`
--

INSERT INTO `etudiant` (`code`, `nom`, `prenom`, `sexe`, `email`, `religion`, `optionb`, `photo`, `telephone`, `telephoneparent`, `date`) VALUES
(17, 'Denival rolph', 'Peterwens king', 'on', 'dourolph@gmail.com', 'protestantffd', 'juridique', '', '2025550116', '2025550116', '2020-09-30'),
(18, 'Denival', 'Peterwens', 'on', 'Raymonralph@gmail.com', 'protestant', 'juridiques', '11.jpg', '7865', '8675', '2020-10-02'),
(19, 'raymond', 'Andreta', 'on', 'Raymonralph@gmail.com', 'protestant', 'juridiques', 'etud2.jpg', '2025550116', '56789', '2020-10-20'),
(20, 'Denival', 'Peterwens', 'on', 'Raymonralph@gmail.com', 'protestant', 'juridiques', 'etud1.jpg', '2025550116', '2025550116', '2020-10-12'),
(57, 'Joseph', 'Sandra', 'Feminin', 'salomondaniel@gmail.com', 'dsjk', 'Sciences informatiques', '00Device-RAM.png', '(+509)2', '(+509)3', '2021-11-11'),
(58, 'Raymond', 'Ralph', 'Masculin', 'pdenival@applausemail.com', 'j', 'Sciences informatiques', '00Device-Ss.png', '(+509)9', '(+509)8', '2021-11-09'),
(60, 'My', 'Love', 'Feminin', 'Dpeterwensdourolph47@gmail.com', 'b', 'Sciences informatiques', '00Device-RAM.png', '(+509)9', '(+509)0', '2021-11-20');

-- --------------------------------------------------------

--
-- Table structure for table `etudiantenligne`
--

CREATE TABLE `etudiantenligne` (
  `code` varchar(100) NOT NULL,
  `option` varchar(50) NOT NULL,
  `typeprogramme` varchar(50) NOT NULL,
  `vacation` varchar(15) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `sexe` varchar(50) NOT NULL,
  `datenaiss` varchar(100) NOT NULL,
  `lieunaiss` varchar(100) NOT NULL,
  `nif` varchar(100) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `notel` varchar(100) NOT NULL,
  `telresp` varchar(100) NOT NULL,
  `autretel` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `etatcivil` varchar(50) NOT NULL,
  `sportpratique` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `etudiantenligne`
--

INSERT INTO `etudiantenligne` (`code`, `option`, `typeprogramme`, `vacation`, `nom`, `prenom`, `sexe`, `datenaiss`, `lieunaiss`, `nif`, `adresse`, `photo`, `notel`, `telresp`, `autretel`, `email`, `etatcivil`, `sportpratique`) VALUES
('CasWil-65847-12-4024501', 'ENS-Maths/Physiques(NS-SMP)', 'Programme Licence', 'Matin', 'Caseneuve ', 'Wildryph', 'Masculin', '2021-11-12', 'delmas', '423675453454', 'delmas 80', '00Device-Ss.png', '(+509)3124567', '(+509)654323', '(+509)3245657', 'Willtoutcourt@gmail.com', 'Celibataire', 'Volley-ball'),
('DenPet06597', 'Sciences comptables', 'Programme Licence', 'Matin', 'Denival', 'Peterwens Dourolph', 'Masculin', '2021-11-06', 'gfbdgsfae', '56', 'hgfd', '00Device-RAM.png', '(+509)40952481', '(+509)37108302', '(+509)37108302', 'Peterwensdourolph@gmail.com', 'Marie', 'Volley-ball'),
('DenPet30148', 'Sciences informatiques', 'Programme cycle court', 'Matin', 'Denival', 'Peterwens Dourolph', 'Masculin', '1998-03-30', 'Cite soleil', '1928873773', 'Vilage solidarite', '00Device-RAM.png', '(+509)40952481', '(+509)37108302', '(+509)37108302', 'pdenival@applausemail.com', 'Marie', 'Football'),
('jea-87268-22-4407091', 'Sciences informatiques', 'Programme cycle court', 'Matin', '', 'jean', 'Masculin', '2021-11-22', 'kings', '423675453454', 'delmas 80', '', '(+509)72782293', '(+509)37373882', '(+509)283893993', 'jean12@gmail.com', 'Celibataire', 'Football'),
('jespre09495', 'Sciences informatiques', 'Programme cycle court', 'Matin', 'jesuis', 'pret', 'Masculin', '2021-11-09', 'Cite soleil', '56', 'Vilage solidarite', '00Device-Ss.png', '(+509)3', '(+509)4', '(+509)5', 'dpeterwensdourolph37dmkfkjdk@gmail.com', 'veuf(ve)', 'Tennis de table'),
('JosSan-63030-06-1453880', 'Sciences administratives', 'Programme Licence', 'Median', 'Joseph', 'Sandra', 'Feminin', '1997-01-06', 'Ouanaminthe', '838737287823', 'delmas33', '', '(+509)43667777', '(+509)77666665', '(+509)676889999', 'SandrianaJoseph@gmail.com', 'Celibataire', 'Volley-ball'),
('judmar1087', 'Sciences comptables', 'Programme cycle court', 'Median', 'jude', 'marcelin', 'Masculin', '2021-11-10', 'Cite soleil', '1928873773', 'Vilage solidarite', 'Google play services version.png', '(+509)40952481', '(+509)0', '(+509)37108302', 'jeanandrekklllkl@gmail.com', 'Celibataire', 'Volley-ball'),
('KinAbl19352', 'Sciences informatiques', 'Programme cycle court', 'Soir', 'King', 'Able', 'Masculin', '2021-11-19', 'Cite soleil', '1928873773', 'Vilage solidarite', '00Device-RAM.png', '(+509)40952481', '(+509)0', '(+509)8', 'salomondaniel@gmail.com', 'Celibataire', 'Football'),
('KinAbl19602', 'Sciences informatiques', 'Programme cycle court', 'Soir', 'King', 'Able', 'Masculin', '2021-11-19', 'Cite soleil', '1928873773', 'Vilage solidarite', '00Device-RAM.png', '(+509)40952481', '(+509)0', '(+509)8', 'salomondaniel@gmail.com', 'Celibataire', 'Football'),
('libkar-55776-17-9568297', 'Sciences comptables', 'Programme Licence', 'Soir', 'lib', 'karl', 'Masculin', '2021-11-17', 'Cite soleil', '56', 'Vilaj', '', '(+509)9878987788', '(+509)83734858585', '(+509)88373783488', 'KarlLib@gmail.com', 'Marie', 'Tennis de table'),
('MarKab19733', 'Sciences informatiques', 'Programme cycle court', 'Soir', 'Marechal', 'Kabalistik', 'Masculin', '2021-11-19', 'Cite soleil', '1928873773', 'Vilage solidarite', '+509 39 47 8721 20200202_203248.jpg', '(+509)40952481', '(+509)37108302', '(+509)37108302', 'pdenival@applausemail.com', 'veuf(ve)', 'Football'),
('okand19913', 'Sciences informatiques', 'Programme cycle court', 'Soir', 'ok', 'andre', 'Masculin', '2021-11-19', 'gfbdgsfae', '1928873773', 'hgf', '', '(+509)6', '(+509)4', '(+509)3', 'pdeniva4gfgdgdgdgdl@applausemail.com', 'veuf(ve)', 'Basket-ball'),
('tregfd04391', 'Sciences informatiques', 'Programme cycle court', 'Matin', 'tre', 'gfd', 'Masculin', '2021-11-04', 'fgh', '56', 'hgf', '', '(+509)6', '(+509)6', '(+509)65', 'salomondaniel566gnb@gmail.com', 'veuf(ve)', 'Tennis de table');

-- --------------------------------------------------------

--
-- Table structure for table `info_perso_user`
--

CREATE TABLE `info_perso_user` (
  `code` varchar(100) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `fonction` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info_perso_user`
--

INSERT INTO `info_perso_user` (`code`, `nom`, `prenom`, `email`, `sexe`, `telephone`, `fonction`, `photo`) VALUES
('12', 'Denival', 'Peterwens', 'peterwens@gmail.com', 'on', '509876543', 'Secretaire', '13.jpg'),
('13', 'dourolph', 'king', 'dourolph@gmail.com', 'on', '50940952481', 'Coordonateur', '13.jpg'),
('14', 'able', 'pierre', 'pier@gmail.com', 'on', '50937108302', 'Secretaire', '13.jpg'),
('15', 'able', 'pierre', 'pier@gmail.com', 'on', '50937108302', 'Secretaire', '13.jpg'),
('16', 'able', 'pierre', 'pier@gmail.com', 'on', '50937108302', 'Secretaire', '11.jpg'),
('17', 'able', 'pierre', 'pier@gmail.com', 'on', '50937108302', 'Secretaire', '13.jpg'),
('18', 'Peterwens', 'dourolph', 'Dpeterwensdourolph@gmail.com', 'on', '50940952481', 'Coordonateur', '13.jpg'),
('19', 'Garcia', 'pierre', 'garciapierre@gmail.com', 'on', '5097655443', 'Coordonateur', 'ac.jpg'),
('20', 'Salomon', 'Daniel', 'salomondaniel@gmail.com', 'on', '5095643423', 'Secretaire', 'etud1.jpg'),
('21', 'jhon', ' richard willy', 'jhonrichardwilly@gmail.com', 'on', '509245546', 'Secretaire', 'et4.jpg'),
('22', 'Salomon', 'kender', 'salomonkender@gmail.com', 'on', '50939044226', 'Secretaire', 'Smooth-Blends.jpg'),
('23', 'jean', 'andre', 'jeanandre@gmail.com', 'on', '50946738792', 'SCience infirmieres', 'WhatsApp Image 2021-09-11 at 0'),
('24', 'jean', 'andre', 'jeanandre@gmail.com', 'on', '50946738792', 'SCience infirmieres', 'WhatsApp Image 2021-09-11 at 0'),
('25', 'jean', 'andre', 'jeanandre@gmail.com', 'on', '509675432343', 'SCience infirmieres', 'WhatsApp Image 2021-09-11 at 0'),
('26', 'jean', 'andre', 'jeanandre@gmail.com', 'on', '509543234', 'Coordonateur', 'WhatsApp Image 2021-09-11 at 0'),
('27', 'jean', 'andre', 'jeanandre@gmail.com', 'on', '5095432345', 'Coordonateur', 'WhatsApp Image 2021-09-11 at 0'),
('28', 'allo', 'nike', 'Dpeterwensdourolph@gmail.com', 'on', '509874784884', 'Coordonateur', ''),
('29', 'kyle', 'mike', 'mike@gmail.com', 'on', '509837637288', 'Coordonateur', ''),
('30', 'klol', 'jude', 'Jude@gmail.com', 'on', '50934563444', 'Coordonateur', ''),
('31', 'ok', 'broh', 'broh@gmail.com', 'on', '5094673828', 'Coordonateur', ''),
('32', 'ralph', 'lll', 'brah@gmail.com', 'on', '5090909999', 'Coordonateur', ''),
('33', 'mike', 'ij', 'biri@gmail.com', '', '509497833939', 'Coordonateur', ''),
('34', 'able', 'fd', 'able@gmail.com', 'on', '5098726828', 'Coordonateur', ''),
('35', 'sandra', 'jude', 'sandra@gmail.com', 'on', '50987656527', 'Coordonateur', ''),
('36', 'jh', 'kjh', 'sandro@gmail.com', 'on', '5098676677', 'Coordonateur', ''),
('37', 'ijuhg', 'kj', 'sandri@gmail.com', 'on', '50987687888', 'Coordonateur', ''),
('38', 'mike', 'mike', 'mikemike@gmail.com', 'on', '509232435', 'Secretaire', ''),
('39', 'kj', 'mi', 'mikej@gmail.com', 'on', '509988888877', 'Coordonateur', ''),
('40', 'okkk', 'l', 'ok@gmail.com', 'on', '509666566566', 'Coordonateur', ''),
('41', 'hhdj', 'aa', 'aa@gmail.com', '', '5098339944', 'Coordonateur', ''),
('42', 'lol', 'ju', 'aa@gmail.com', '', '50998899990', 'Coordonateur', ''),
('loakfjur934', 'loal', 'kfjdfh', 'loal@gmail.com', 'on', '509876543', 'Coordonateur', ''),
('petjhgur487', 'peterking', 'jhg', 'aazz@gmail.com', 'on', '5098', 'Coordonateur', ''),
('petoki464', 'peter', 'oki', 'aazz@gmail.com', 'on', '50922', 'Coordonateur', '');

-- --------------------------------------------------------

--
-- Table structure for table `matiere`
--

CREATE TABLE `matiere` (
  `codematiere` varchar(40) NOT NULL,
  `nommatiere` varchar(40) NOT NULL,
  `prof` varchar(40) NOT NULL,
  `classe` varchar(40) NOT NULL,
  `session` varchar(40) NOT NULL,
  `horaire` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matiere`
--

INSERT INTO `matiere` (`codematiere`, `nommatiere`, `prof`, `classe`, `session`, `horaire`) VALUES
('ph-Men', 'php 1', 'Menlly Joseph ', '2em anne', 'deuxieme session', 'mardi h-10h jeudi 10h-12h'),
('ph-Ken', 'php 2', 'Kender Joseph', '3em anne', 'premiere session', 'Mercredi 8h-10h'),
('vi-Geo', 'visual basic 1', 'Georges Joseph jean', '3em anne', 'premiere session', 'Mardi 8h-10h samdi 10h-12h'),
('Pr-Han', 'Programmation fondamentale', 'Hanky joseph', '1er annee', 'premiere session', 'Mardi 8h-10h samdi 10h-12h'),
('fr-Jea', 'francais 1', 'Jean Andre', '2em anne', 'premiere session', 'jeudi 10h-12h'),
('Pr-Alv', 'Programmation 1', 'Alva Joseph', '1er annee', 'deuxieme session', 'lundi 12h-2h'),
('Co-Wil', 'Concept objet', 'Wilky Joseph', '2em anne', 'deuxieme session', 'jeudi 8h-10h'),
('As-Han', 'Assembleur 1', 'Hanky joseph', '2em anne', 'premiere session', 'mercredi 10h-12h');

-- --------------------------------------------------------

--
-- Table structure for table `notecinquiemeasbelectromeca`
--

CREATE TABLE `notecinquiemeasbelectromeca` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notecinquiemeasbgeniecivil`
--

CREATE TABLE `notecinquiemeasbgeniecivil` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notecinquiemeaselectromeca`
--

CREATE TABLE `notecinquiemeaselectromeca` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notecinquiemeasgenie`
--

CREATE TABLE `notecinquiemeasgenie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeas`
--

CREATE TABLE `notedeuxiemeas` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notedeuxiemeas`
--

INSERT INTO `notedeuxiemeas` (`codeetudiant`, `nometudiant`, `prog2`, `html`, `assemleur`, `analyse`, `concept`, `system`, `mse`, `fr`) VALUES
(1, 'peter', 4, 55, 11, 9, 5, 22, 11, 55),
(2, 'peter', 41, 55, 11, 90, 11, 33, 22, 55),
(3, 'dou', 12, 33, 22, 66, 55, 77, 88, 99),
(4, 'dou', 4, 55, 3, 14, 22, 34, 55, 3);

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasadministratives`
--

CREATE TABLE `notedeuxiemeasadministratives` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasagronomie`
--

CREATE TABLE `notedeuxiemeasagronomie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasb`
--

CREATE TABLE `notedeuxiemeasb` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notedeuxiemeasb`
--

INSERT INTO `notedeuxiemeasb` (`codeetudiant`, `nometudiant`, `prog2`, `html`, `assemleur`, `analyse`, `concept`, `system`, `mse`, `fr`) VALUES
(1, 'dou', 5, 30, 6, 3, 4, 2, 8, 0),
(2, 'Marie', 70, 650, 68, 67, 79, 80, 76, 0);

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasbadministratives`
--

CREATE TABLE `notedeuxiemeasbadministratives` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasbagronomie`
--

CREATE TABLE `notedeuxiemeasbagronomie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasbelectromeca`
--

CREATE TABLE `notedeuxiemeasbelectromeca` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasbensmathsphysiques`
--

CREATE TABLE `notedeuxiemeasbensmathsphysiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasbenssciencesnatchimie`
--

CREATE TABLE `notedeuxiemeasbenssciencesnatchimie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasbgeniecivil`
--

CREATE TABLE `notedeuxiemeasbgeniecivil` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasbjuridiques`
--

CREATE TABLE `notedeuxiemeasbjuridiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasblaboratoiremedical`
--

CREATE TABLE `notedeuxiemeasblaboratoiremedical` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasbsciencesdeleducation`
--

CREATE TABLE `notedeuxiemeasbsciencesdeleducation` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasbsciencesdudeveloppement`
--

CREATE TABLE `notedeuxiemeasbsciencesdudeveloppement` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasbsciencesinfirmieres`
--

CREATE TABLE `notedeuxiemeasbsciencesinfirmieres` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeaselectromeca`
--

CREATE TABLE `notedeuxiemeaselectromeca` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasensmathsphysiques`
--

CREATE TABLE `notedeuxiemeasensmathsphysiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasenssciencesnatchimie`
--

CREATE TABLE `notedeuxiemeasenssciencesnatchimie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasenssciencessocecon`
--

CREATE TABLE `notedeuxiemeasenssciencessocecon` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasgeniecivil`
--

CREATE TABLE `notedeuxiemeasgeniecivil` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeasjuridiques`
--

CREATE TABLE `notedeuxiemeasjuridiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeaslaboratoiremedical`
--

CREATE TABLE `notedeuxiemeaslaboratoiremedical` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeassciencesdeleducation`
--

CREATE TABLE `notedeuxiemeassciencesdeleducation` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeassciencesdudeveloppement`
--

CREATE TABLE `notedeuxiemeassciencesdudeveloppement` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notedeuxiemeassciencesinfirmieres`
--

CREATE TABLE `notedeuxiemeassciencesinfirmieres` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `prog2` int(11) NOT NULL,
  `html` int(11) NOT NULL,
  `assemleur` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `concept` int(11) NOT NULL,
  `system` int(11) NOT NULL,
  `mse` int(11) NOT NULL,
  `fr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremieras`
--

CREATE TABLE `notepremieras` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(40) NOT NULL,
  `boole` int(11) NOT NULL,
  `anglais` int(11) NOT NULL,
  `Stat1` int(11) NOT NULL,
  `Comptabilite1` int(11) NOT NULL,
  `Progfond` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `depanage` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notepremieras`
--

INSERT INTO `notepremieras` (`codeetudiant`, `nometudiant`, `boole`, `anglais`, `Stat1`, `Comptabilite1`, `Progfond`, `lineaire`, `depanage`, `windows`) VALUES
(1, 'peter', 33, 2, 1, 0, 0, 0, 9, 44),
(2, 'Pieere', 43, 0, 0, 0, 0, 50, 67, 46),
(3, '65', 65, 65, 66, 70, 700, 69, 90, 60),
(4, '88', 9, 99, 0, 9, 80, 66, 55, 44),
(5, 'peter', 43, 56, 9, 45, 34, 78, 9, 78);

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasadministratives`
--

CREATE TABLE `notepremierasadministratives` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(40) NOT NULL,
  `boole` int(11) NOT NULL,
  `anglais` int(11) NOT NULL,
  `Stat1` int(11) NOT NULL,
  `Comptabilite1` int(11) NOT NULL,
  `Progfond` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `depanage` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasagronomie`
--

CREATE TABLE `notepremierasagronomie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(40) NOT NULL,
  `boole` int(11) NOT NULL,
  `anglais` int(11) NOT NULL,
  `Stat1` int(11) NOT NULL,
  `Comptabilite1` int(11) NOT NULL,
  `Progfond` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `depanage` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notepremierasagronomie`
--

INSERT INTO `notepremierasagronomie` (`codeetudiant`, `nometudiant`, `boole`, `anglais`, `Stat1`, `Comptabilite1`, `Progfond`, `lineaire`, `depanage`, `windows`) VALUES
(0, '20', 34, 3, 5, 4, 7, 6, 5, 8);

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasb`
--

CREATE TABLE `notepremierasb` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `boole` int(11) NOT NULL,
  `stat2` int(11) NOT NULL,
  `programmation1` int(11) NOT NULL,
  `Comptabilite2` int(11) NOT NULL,
  `Progfondb` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notepremierasb`
--

INSERT INTO `notepremierasb` (`codeetudiant`, `nometudiant`, `boole`, `stat2`, `programmation1`, `Comptabilite2`, `Progfondb`, `analyse`, `lineaire`, `windows`) VALUES
(1, 'peter', 33, 33, 20, 40, 9, 5, 9, 44),
(2, 'Pieere', 44, 55, 33, 22, 24, 54, 67, 46);

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasbadministratives`
--

CREATE TABLE `notepremierasbadministratives` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `boole` int(11) NOT NULL,
  `stat2` int(11) NOT NULL,
  `programmation1` int(11) NOT NULL,
  `Comptabilite2` int(11) NOT NULL,
  `Progfondb` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasbagronomie`
--

CREATE TABLE `notepremierasbagronomie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `boole` int(11) NOT NULL,
  `stat2` int(11) NOT NULL,
  `programmation1` int(11) NOT NULL,
  `Comptabilite2` int(11) NOT NULL,
  `Progfondb` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasbelectromeca`
--

CREATE TABLE `notepremierasbelectromeca` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `boole` int(11) NOT NULL,
  `stat2` int(11) NOT NULL,
  `programmation1` int(11) NOT NULL,
  `Comptabilite2` int(11) NOT NULL,
  `Progfondb` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasbensmathsphysiques`
--

CREATE TABLE `notepremierasbensmathsphysiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `boole` int(11) NOT NULL,
  `stat2` int(11) NOT NULL,
  `programmation1` int(11) NOT NULL,
  `Comptabilite2` int(11) NOT NULL,
  `Progfondb` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasbenssciencesnatchimie`
--

CREATE TABLE `notepremierasbenssciencesnatchimie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `boole` int(11) NOT NULL,
  `stat2` int(11) NOT NULL,
  `programmation1` int(11) NOT NULL,
  `Comptabilite2` int(11) NOT NULL,
  `Progfondb` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasbgeniecivil`
--

CREATE TABLE `notepremierasbgeniecivil` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `boole` int(11) NOT NULL,
  `stat2` int(11) NOT NULL,
  `programmation1` int(11) NOT NULL,
  `Comptabilite2` int(11) NOT NULL,
  `Progfondb` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasbjuridiques`
--

CREATE TABLE `notepremierasbjuridiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `boole` int(11) NOT NULL,
  `stat2` int(11) NOT NULL,
  `programmation1` int(11) NOT NULL,
  `Comptabilite2` int(11) NOT NULL,
  `Progfondb` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasblaboratoiremedical`
--

CREATE TABLE `notepremierasblaboratoiremedical` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `boole` int(11) NOT NULL,
  `stat2` int(11) NOT NULL,
  `programmation1` int(11) NOT NULL,
  `Comptabilite2` int(11) NOT NULL,
  `Progfondb` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasbscienceeducation`
--

CREATE TABLE `notepremierasbscienceeducation` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `boole` int(11) NOT NULL,
  `stat2` int(11) NOT NULL,
  `programmation1` int(11) NOT NULL,
  `Comptabilite2` int(11) NOT NULL,
  `Progfondb` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasbsciencesdudeveloppement`
--

CREATE TABLE `notepremierasbsciencesdudeveloppement` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `boole` int(11) NOT NULL,
  `stat2` int(11) NOT NULL,
  `programmation1` int(11) NOT NULL,
  `Comptabilite2` int(11) NOT NULL,
  `Progfondb` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasbsciencesinfirmieres`
--

CREATE TABLE `notepremierasbsciencesinfirmieres` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `boole` int(11) NOT NULL,
  `stat2` int(11) NOT NULL,
  `programmation1` int(11) NOT NULL,
  `Comptabilite2` int(11) NOT NULL,
  `Progfondb` int(11) NOT NULL,
  `analyse` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremieraselectromeca`
--

CREATE TABLE `notepremieraselectromeca` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(40) NOT NULL,
  `boole` int(11) NOT NULL,
  `anglais` int(11) NOT NULL,
  `Stat1` int(11) NOT NULL,
  `Comptabilite1` int(11) NOT NULL,
  `Progfond` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `depanage` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasensmathsphysiques`
--

CREATE TABLE `notepremierasensmathsphysiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(40) NOT NULL,
  `boole` int(11) NOT NULL,
  `anglais` int(11) NOT NULL,
  `Stat1` int(11) NOT NULL,
  `Comptabilite1` int(11) NOT NULL,
  `Progfond` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `depanage` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasenssciencesnatchimie`
--

CREATE TABLE `notepremierasenssciencesnatchimie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(40) NOT NULL,
  `boole` int(11) NOT NULL,
  `anglais` int(11) NOT NULL,
  `Stat1` int(11) NOT NULL,
  `Comptabilite1` int(11) NOT NULL,
  `Progfond` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `depanage` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notepremierasenssciencesnatchimie`
--

INSERT INTO `notepremierasenssciencesnatchimie` (`codeetudiant`, `nometudiant`, `boole`, `anglais`, `Stat1`, `Comptabilite1`, `Progfond`, `lineaire`, `depanage`, `windows`) VALUES
(1, 'pier', 4, 5, 7, 6, 5, 3, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasenssciencessocecon`
--

CREATE TABLE `notepremierasenssciencessocecon` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(40) NOT NULL,
  `boole` int(11) NOT NULL,
  `anglais` int(11) NOT NULL,
  `Stat1` int(11) NOT NULL,
  `Comptabilite1` int(11) NOT NULL,
  `Progfond` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `depanage` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasgeniecivil`
--

CREATE TABLE `notepremierasgeniecivil` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(40) NOT NULL,
  `boole` int(11) NOT NULL,
  `anglais` int(11) NOT NULL,
  `Stat1` int(11) NOT NULL,
  `Comptabilite1` int(11) NOT NULL,
  `Progfond` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `depanage` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierasjuridiques`
--

CREATE TABLE `notepremierasjuridiques` (
  `codeetudiant` int(20) NOT NULL,
  `nometudiant` varchar(2) NOT NULL,
  `boole` int(2) NOT NULL,
  `anglais` int(2) NOT NULL,
  `Stat1` int(2) NOT NULL,
  `Comptabilite1` int(2) NOT NULL,
  `Progfond` int(2) NOT NULL,
  `lineaire` int(2) NOT NULL,
  `depanage` int(2) NOT NULL,
  `windows` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremieraslaboratoiremedical`
--

CREATE TABLE `notepremieraslaboratoiremedical` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(40) NOT NULL,
  `boole` int(11) NOT NULL,
  `anglais` int(11) NOT NULL,
  `Stat1` int(11) NOT NULL,
  `Comptabilite1` int(11) NOT NULL,
  `Progfond` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `depanage` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierassciencesdeleducation`
--

CREATE TABLE `notepremierassciencesdeleducation` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(40) NOT NULL,
  `boole` int(11) NOT NULL,
  `anglais` int(11) NOT NULL,
  `Stat1` int(11) NOT NULL,
  `Comptabilite1` int(11) NOT NULL,
  `Progfond` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `depanage` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierassciencesdudeveloppement`
--

CREATE TABLE `notepremierassciencesdudeveloppement` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(40) NOT NULL,
  `boole` int(11) NOT NULL,
  `anglais` int(11) NOT NULL,
  `Stat1` int(11) NOT NULL,
  `Comptabilite1` int(11) NOT NULL,
  `Progfond` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `depanage` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notepremierassciencesinfirmieres`
--

CREATE TABLE `notepremierassciencesinfirmieres` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(40) NOT NULL,
  `boole` int(11) NOT NULL,
  `anglais` int(11) NOT NULL,
  `Stat1` int(11) NOT NULL,
  `Comptabilite1` int(11) NOT NULL,
  `Progfond` int(11) NOT NULL,
  `lineaire` int(11) NOT NULL,
  `depanage` int(11) NOT NULL,
  `windows` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeas`
--

CREATE TABLE `notequatriemeas` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notequatriemeas`
--

INSERT INTO `notequatriemeas` (`codeetudiant`, `nometudiant`, `mysql2`, `sgbd2`, `reseau2`, `vb2`, `recherche2`, `si2`, `uml`) VALUES
(1, 'peter', 4, 54, 0, 3, 0, 98, 7),
(2, 'peter', 44, 4, 8, 4, 0, 98, 7),
(3, 'peter', 43, 5, 8, 3, 2, 98, 7),
(4, 'Deniavl', 90, 77, 88, 99, 88, 77, 66),
(5, 'mike', 43, 54, 76, 43, 65, 32, 23);

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasadministratives`
--

CREATE TABLE `notequatriemeasadministratives` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasagronomie`
--

CREATE TABLE `notequatriemeasagronomie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasagronomiezootechnie`
--

CREATE TABLE `notequatriemeasagronomiezootechnie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasb`
--

CREATE TABLE `notequatriemeasb` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notequatriemeasb`
--

INSERT INTO `notequatriemeasb` (`codeetudiant`, `nometudiant`, `mysql2`, `sgbd2`, `reseau2`, `vb2`, `recherche2`, `si2`, `uml`) VALUES
(1, 'jean', 42, 50, 8, 3, 2, 1, 3),
(2, 'Rolph', 90, 5, 88, 99, 88, 0, 0),
(3, 'ok', 66, 54, 78, 34, 54, 34, 22);

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbadministratives`
--

CREATE TABLE `notequatriemeasbadministratives` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbagronomie`
--

CREATE TABLE `notequatriemeasbagronomie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbagronomiezootechnie`
--

CREATE TABLE `notequatriemeasbagronomiezootechnie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbcomptables`
--

CREATE TABLE `notequatriemeasbcomptables` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbeconomie`
--

CREATE TABLE `notequatriemeasbeconomie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbelectromeca`
--

CREATE TABLE `notequatriemeasbelectromeca` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbensmathsphysiques`
--

CREATE TABLE `notequatriemeasbensmathsphysiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbenssciencesnatchimie`
--

CREATE TABLE `notequatriemeasbenssciencesnatchimie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbenssciencessocecon`
--

CREATE TABLE `notequatriemeasbenssciencessocecon` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbgeniecivil`
--

CREATE TABLE `notequatriemeasbgeniecivil` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbgestion`
--

CREATE TABLE `notequatriemeasbgestion` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbjuridiques`
--

CREATE TABLE `notequatriemeasbjuridiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasblaboratoiremedical`
--

CREATE TABLE `notequatriemeasblaboratoiremedical` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbsciencesdeleducation`
--

CREATE TABLE `notequatriemeasbsciencesdeleducation` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbsciencesdudeveloppement`
--

CREATE TABLE `notequatriemeasbsciencesdudeveloppement` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbscienceseduphilosophieetlettre`
--

CREATE TABLE `notequatriemeasbscienceseduphilosophieetlettre` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasbsciencesinfirmieres`
--

CREATE TABLE `notequatriemeasbsciencesinfirmieres` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeascomptables`
--

CREATE TABLE `notequatriemeascomptables` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeaseconomie`
--

CREATE TABLE `notequatriemeaseconomie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeaselectromeca`
--

CREATE TABLE `notequatriemeaselectromeca` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasensmathsphysiques`
--

CREATE TABLE `notequatriemeasensmathsphysiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasenssciencesnatchimie`
--

CREATE TABLE `notequatriemeasenssciencesnatchimie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasenssciencessocecon`
--

CREATE TABLE `notequatriemeasenssciencessocecon` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasgeniecivil`
--

CREATE TABLE `notequatriemeasgeniecivil` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasgestion`
--

CREATE TABLE `notequatriemeasgestion` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasjuridiques`
--

CREATE TABLE `notequatriemeasjuridiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeaslaboratoiremedical`
--

CREATE TABLE `notequatriemeaslaboratoiremedical` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeassciencesdeleducation`
--

CREATE TABLE `notequatriemeassciencesdeleducation` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeassciencesdudeveloppement`
--

CREATE TABLE `notequatriemeassciencesdudeveloppement` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeasscienceseduphilosophieetlettre`
--

CREATE TABLE `notequatriemeasscienceseduphilosophieetlettre` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notequatriemeassciencesinfirmieres`
--

CREATE TABLE `notequatriemeassciencesinfirmieres` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeas`
--

CREATE TABLE `notetroisiemeas` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notetroisiemeas`
--

INSERT INTO `notetroisiemeas` (`codeetudiant`, `nometudiant`, `sgbd1`, `php2`, `vb1`, `java`, `analyse3`, `mysql`, `reseau`, `si`, `recherche1`) VALUES
(1, 'peter', 45, 340, 54, 56, 43, 9, 88, 77, 56);

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasadministratives`
--

CREATE TABLE `notetroisiemeasadministratives` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasagronomie`
--

CREATE TABLE `notetroisiemeasagronomie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasagronomiezootechnie`
--

CREATE TABLE `notetroisiemeasagronomiezootechnie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasb`
--

CREATE TABLE `notetroisiemeasb` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notetroisiemeasb`
--

INSERT INTO `notetroisiemeasb` (`codeetudiant`, `nometudiant`, `mysql2`, `sgbd2`, `reseau2`, `vb2`, `recherche2`, `si2`, `uml`) VALUES
(1, 'pierre', 111, 2, 30, 57, 4, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbadministratives`
--

CREATE TABLE `notetroisiemeasbadministratives` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbagronomie`
--

CREATE TABLE `notetroisiemeasbagronomie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbagronomiezootechnie`
--

CREATE TABLE `notetroisiemeasbagronomiezootechnie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbcomptables`
--

CREATE TABLE `notetroisiemeasbcomptables` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbeconomie`
--

CREATE TABLE `notetroisiemeasbeconomie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbelectromeca`
--

CREATE TABLE `notetroisiemeasbelectromeca` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbensmathsphysiques`
--

CREATE TABLE `notetroisiemeasbensmathsphysiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbenssciencesnatchimie`
--

CREATE TABLE `notetroisiemeasbenssciencesnatchimie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbenssciencessocecon`
--

CREATE TABLE `notetroisiemeasbenssciencessocecon` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbgeniecivil`
--

CREATE TABLE `notetroisiemeasbgeniecivil` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbgestion`
--

CREATE TABLE `notetroisiemeasbgestion` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbjuridiques`
--

CREATE TABLE `notetroisiemeasbjuridiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasblaboratoiremedical`
--

CREATE TABLE `notetroisiemeasblaboratoiremedical` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbsciencesdeleducation`
--

CREATE TABLE `notetroisiemeasbsciencesdeleducation` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbsciencesdudeveloppement`
--

CREATE TABLE `notetroisiemeasbsciencesdudeveloppement` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbscienceseduphilosophieetlettre`
--

CREATE TABLE `notetroisiemeasbscienceseduphilosophieetlettre` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasbsciencesinfirmieres`
--

CREATE TABLE `notetroisiemeasbsciencesinfirmieres` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `mysql2` int(11) NOT NULL,
  `sgbd2` int(11) NOT NULL,
  `reseau2` int(11) NOT NULL,
  `vb2` int(11) NOT NULL,
  `recherche2` int(11) NOT NULL,
  `si2` int(11) NOT NULL,
  `uml` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeascomptables`
--

CREATE TABLE `notetroisiemeascomptables` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeaseconomie`
--

CREATE TABLE `notetroisiemeaseconomie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeaselectromeca`
--

CREATE TABLE `notetroisiemeaselectromeca` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasensmathsphysiques`
--

CREATE TABLE `notetroisiemeasensmathsphysiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasenssciencesnatchimie`
--

CREATE TABLE `notetroisiemeasenssciencesnatchimie` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasenssciencessocecon`
--

CREATE TABLE `notetroisiemeasenssciencessocecon` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasgeniecivil`
--

CREATE TABLE `notetroisiemeasgeniecivil` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasgestion`
--

CREATE TABLE `notetroisiemeasgestion` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasjuridiques`
--

CREATE TABLE `notetroisiemeasjuridiques` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeaslaboratoiremedical`
--

CREATE TABLE `notetroisiemeaslaboratoiremedical` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeassciencesdeleducation`
--

CREATE TABLE `notetroisiemeassciencesdeleducation` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeassciencesdudeveloppement`
--

CREATE TABLE `notetroisiemeassciencesdudeveloppement` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeasscienceseduphilosophieetlettre`
--

CREATE TABLE `notetroisiemeasscienceseduphilosophieetlettre` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notetroisiemeassciencesinfirmieres`
--

CREATE TABLE `notetroisiemeassciencesinfirmieres` (
  `codeetudiant` int(11) NOT NULL,
  `nometudiant` varchar(50) NOT NULL,
  `sgbd1` int(11) NOT NULL,
  `php2` int(11) NOT NULL,
  `vb1` int(11) NOT NULL,
  `java` int(11) NOT NULL,
  `analyse3` int(11) NOT NULL,
  `mysql` int(11) NOT NULL,
  `reseau` int(11) NOT NULL,
  `si` int(11) NOT NULL,
  `recherche1` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `professeur`
--

CREATE TABLE `professeur` (
  `code` int(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `cours` varchar(30) NOT NULL,
  `hcours` varchar(6) NOT NULL,
  `censeigner` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `telephone` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `professeur`
--

INSERT INTO `professeur` (`code`, `nom`, `prenom`, `sexe`, `cours`, `hcours`, `censeigner`, `email`, `photo`, `telephone`, `date`) VALUES
(6, 'kender', 'joseph', 'on', 'php', '4', '3em annee', 'dourolph@gmail.com', '11.jpg', '40952481', '2020-09-22'),
(8, 'pierre', 'daniewla', 'on', 'algebre', 'lundi ', '3em annee', 'Raymonralph@gmail.com', 'castle-336498.jpg', '2025550116', '2020-10-06');

-- --------------------------------------------------------

--
-- Table structure for table `salle`
--

CREATE TABLE `salle` (
  `nosalle` int(11) NOT NULL,
  `nomsalle` varchar(40) NOT NULL,
  `etage` varchar(30) NOT NULL,
  `classeattribue` varchar(40) NOT NULL,
  `annee` varchar(40) NOT NULL,
  `heureattribue` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salle`
--

INSERT INTO `salle` (`nosalle`, `nomsalle`, `etage`, `classeattribue`, `annee`, `heureattribue`) VALUES
(2, 'salle 01', '2em etage', 'Science comptable', '1er anne', '11h-12h'),
(3, 'salle 10', 'premier etage', 'Science informatique', '3em annee', '10h-12h'),
(5, 'salle 4', 'premier etage', 'Science comptable', '2em annee', '12h-4h'),
(6, 'salle 13', 'premier etage', 'Science informatique', '2em annee', '10h-14h'),
(7, 'salle 20', 'premier etage', 'Science informatique', '4em annee', '11h-13h'),
(8, 'salle 2', 'premier etage', 'Science administrative', '2em anne', '10h-12h'),
(9, 'salle 23', '2em etage', 'Science comptable', '3em anne', '8h-10h'),
(10, 'salle 11', '2em etage', 'Genie', '4em anne', '12h-2h'),
(11, 'salle 14', '2em etage', 'Science informatique', '4em anne', '8h-12h'),
(12, 'salle 20', 'premier etage', 'Science comptable', '3em anne', '11h-13h');

-- --------------------------------------------------------

--
-- Table structure for table `tblarticle`
--

CREATE TABLE `tblarticle` (
  `code` int(11) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `categorie` int(30) NOT NULL,
  `prix` int(10) NOT NULL,
  `quantite` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblarticles`
--

CREATE TABLE `tblarticles` (
  `code` int(11) NOT NULL,
  `libelle` varchar(30) NOT NULL,
  `categorie` varchar(25) NOT NULL,
  `prix` int(10) NOT NULL,
  `quantite` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblarticles`
--

INSERT INTO `tblarticles` (`code`, `libelle`, `categorie`, `prix`, `quantite`) VALUES
(1, 'FER', 'cat1', 10, 320),
(3, 'FER', 'cat2', 100, 500),
(4, 'clous', 'cat1', 100, 600);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `code` varchar(100) NOT NULL,
  `fonction` varchar(30) NOT NULL,
  `mdp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` varchar(30) NOT NULL,
  `Faculte` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`code`, `fonction`, `mdp`, `email`, `photo`, `Faculte`) VALUES
('CasWil-65847-12-4024501', 'Etudiant', '', 'Willtoutcourt@gmail.com', '00Device-Ss.png', 'ENS-Maths/Physiques(NS-SMP)'),
('denPet06597', 'Etudiant', '', 'Peterwensdourolph@gmail.com', '00Device-RAM.png', 'Sciences comptables'),
('DenPet30118\r\n', 'Secretaire', '1234', 'mikemike@gmail.com', '', 'SCience informatique'),
('denPet30128\r\n', 'Coordonateur', '1234', 'DenPet30118', '', 'Economie'),
('denPet30138\r\n', 'Coordonateur', '1234', 'sandro@gmail.com', '', 'Gestion'),
('DenPet30140\r\n', 'Coordonateur', '2468', 'salomonkender@gmail.com', 'Smooth-Blends.jpg', 'Developpement'),
('DenPet30141\r\n', 'Coordonateur', '12345', 'Jude@gmail.com', '', 'Education scs soc/Econ'),
('DenPet30142\r\n', 'Coordonateur', '12345', 'mike@gmail.com', '', 'Education scs Nat/chimie'),
('DenPet30143\r\n', 'Coordonateur', '12345', 'Dpeterwensdourolph@gmail.com', '', 'SCience informatique'),
('DenPet30144\r\n', 'Coordonateur', '123456', 'jeanandre@gmail.com', '', 'Science infirmieres'),
('DenPet30145\r\n', 'Coordonateur', '1234', 'salomondaniel@gmail.com', 'etud1.jpg', 'Science education'),
('DenPet30146\r\n', 'Coordonateur', '12345', 'garciapierre@gmail.com', 'ac.jpg', 'Science informatique'),
('DenPet30147\r\n', 'Coordonateur', '12345', 'Dpeterwensdourolph@gmail.com', '13.jpg', 'Ecole normal'),
('DenPet30149\r\n', 'Coordonateur', '1234', 'jhonrichardwilly@gmail.com', 'et4.jpg', 'laboratoire medicale'),
('DenPet30158\r\n', 'Coordonateur', '1234', 'sandra@gmail.com', '', 'Comptables'),
('DenPet30168\r\n', 'Coordonateur', '12345', 'able@gmail.com', '', 'Science Administratives'),
('DenPet30178\r\n', 'Coordonateur', '12345', 'biri@gmail.com', '', 'Juridiques'),
('DenPet30188\r\n', 'Coordonateur', '12345', 'brah@gmail.com', '', 'Electromeca'),
('DenPet30198\r\n', 'Coordonateur', '12345', 'broh@gmail.com', '', 'Education phylosophie'),
('DenPet30348\r\n', 'Coordonateur', '12345', 'aa@gmail.com', '', 'SCience informatique'),
('DenPet30748\r\n', 'Coordonateur', '12345', 'aa@gmail.com', '', 'Genie Civile'),
('DenPet30848\r\n', 'Coordonateur', '1234', 'ok@gmail.com', '', 'Agronomie'),
('denPet30948\r\n', 'Coordonateur', '1234', 'mikej@gmail.com', '', 'Education matphysiques'),
('jea-87268-22-4407091', 'Etudiant', '', 'jean12@gmail.com', '', 'Sciences informatiques'),
('JosSan-63030-06-1453880', 'Etudiant', '', 'SandrianaJoseph@gmail.com', '', 'Sciences administratives'),
('libkar-55776-17-9568297', 'Etudiant', '', 'KarlLib@gmail.com', '', 'Sciences comptables'),
('loakfjur934', 'Coordonateur', '12345', 'loal@gmail.com', '', 'SCience informatique'),
('petjhgur487', 'Coordonateur', '12345', 'aazz@gmail.com', '', 'SCience informatique'),
('petoki464', 'Coordonateur', '12345', 'aazz@gmail.com', '', 'SCience informatique');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `etudiantenligne`
--
ALTER TABLE `etudiantenligne`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `info_perso_user`
--
ALTER TABLE `info_perso_user`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `notedeuxiemeas`
--
ALTER TABLE `notedeuxiemeas`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeasb`
--
ALTER TABLE `notedeuxiemeasb`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeasbensmathsphysiques`
--
ALTER TABLE `notedeuxiemeasbensmathsphysiques`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeasbenssciencesnatchimie`
--
ALTER TABLE `notedeuxiemeasbenssciencesnatchimie`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeasblaboratoiremedical`
--
ALTER TABLE `notedeuxiemeasblaboratoiremedical`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeasbsciencesdeleducation`
--
ALTER TABLE `notedeuxiemeasbsciencesdeleducation`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeasbsciencesdudeveloppement`
--
ALTER TABLE `notedeuxiemeasbsciencesdudeveloppement`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeasbsciencesinfirmieres`
--
ALTER TABLE `notedeuxiemeasbsciencesinfirmieres`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeasensmathsphysiques`
--
ALTER TABLE `notedeuxiemeasensmathsphysiques`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeasenssciencesnatchimie`
--
ALTER TABLE `notedeuxiemeasenssciencesnatchimie`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeasenssciencessocecon`
--
ALTER TABLE `notedeuxiemeasenssciencessocecon`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeaslaboratoiremedical`
--
ALTER TABLE `notedeuxiemeaslaboratoiremedical`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeassciencesdeleducation`
--
ALTER TABLE `notedeuxiemeassciencesdeleducation`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeassciencesdudeveloppement`
--
ALTER TABLE `notedeuxiemeassciencesdudeveloppement`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notedeuxiemeassciencesinfirmieres`
--
ALTER TABLE `notedeuxiemeassciencesinfirmieres`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremieras`
--
ALTER TABLE `notepremieras`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierasb`
--
ALTER TABLE `notepremierasb`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierasbensmathsphysiques`
--
ALTER TABLE `notepremierasbensmathsphysiques`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierasbenssciencesnatchimie`
--
ALTER TABLE `notepremierasbenssciencesnatchimie`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierasblaboratoiremedical`
--
ALTER TABLE `notepremierasblaboratoiremedical`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierasbscienceeducation`
--
ALTER TABLE `notepremierasbscienceeducation`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierasbsciencesdudeveloppement`
--
ALTER TABLE `notepremierasbsciencesdudeveloppement`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierasbsciencesinfirmieres`
--
ALTER TABLE `notepremierasbsciencesinfirmieres`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierasensmathsphysiques`
--
ALTER TABLE `notepremierasensmathsphysiques`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierasenssciencesnatchimie`
--
ALTER TABLE `notepremierasenssciencesnatchimie`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierasenssciencessocecon`
--
ALTER TABLE `notepremierasenssciencessocecon`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierasjuridiques`
--
ALTER TABLE `notepremierasjuridiques`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremieraslaboratoiremedical`
--
ALTER TABLE `notepremieraslaboratoiremedical`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierassciencesdeleducation`
--
ALTER TABLE `notepremierassciencesdeleducation`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierassciencesdudeveloppement`
--
ALTER TABLE `notepremierassciencesdudeveloppement`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notepremierassciencesinfirmieres`
--
ALTER TABLE `notepremierassciencesinfirmieres`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeas`
--
ALTER TABLE `notequatriemeas`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeasb`
--
ALTER TABLE `notequatriemeasb`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeasbensmathsphysiques`
--
ALTER TABLE `notequatriemeasbensmathsphysiques`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeasbenssciencesnatchimie`
--
ALTER TABLE `notequatriemeasbenssciencesnatchimie`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeasbenssciencessocecon`
--
ALTER TABLE `notequatriemeasbenssciencessocecon`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeasblaboratoiremedical`
--
ALTER TABLE `notequatriemeasblaboratoiremedical`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeasbsciencesdeleducation`
--
ALTER TABLE `notequatriemeasbsciencesdeleducation`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeasbsciencesdudeveloppement`
--
ALTER TABLE `notequatriemeasbsciencesdudeveloppement`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeasbscienceseduphilosophieetlettre`
--
ALTER TABLE `notequatriemeasbscienceseduphilosophieetlettre`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeasbsciencesinfirmieres`
--
ALTER TABLE `notequatriemeasbsciencesinfirmieres`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeasensmathsphysiques`
--
ALTER TABLE `notequatriemeasensmathsphysiques`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeasenssciencesnatchimie`
--
ALTER TABLE `notequatriemeasenssciencesnatchimie`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeasenssciencessocecon`
--
ALTER TABLE `notequatriemeasenssciencessocecon`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeaslaboratoiremedical`
--
ALTER TABLE `notequatriemeaslaboratoiremedical`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeassciencesdeleducation`
--
ALTER TABLE `notequatriemeassciencesdeleducation`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeassciencesdudeveloppement`
--
ALTER TABLE `notequatriemeassciencesdudeveloppement`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeasscienceseduphilosophieetlettre`
--
ALTER TABLE `notequatriemeasscienceseduphilosophieetlettre`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notequatriemeassciencesinfirmieres`
--
ALTER TABLE `notequatriemeassciencesinfirmieres`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeas`
--
ALTER TABLE `notetroisiemeas`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeasb`
--
ALTER TABLE `notetroisiemeasb`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeasbensmathsphysiques`
--
ALTER TABLE `notetroisiemeasbensmathsphysiques`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeasbenssciencesnatchimie`
--
ALTER TABLE `notetroisiemeasbenssciencesnatchimie`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeasbenssciencessocecon`
--
ALTER TABLE `notetroisiemeasbenssciencessocecon`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeasblaboratoiremedical`
--
ALTER TABLE `notetroisiemeasblaboratoiremedical`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeasbsciencesdeleducation`
--
ALTER TABLE `notetroisiemeasbsciencesdeleducation`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeasbsciencesdudeveloppement`
--
ALTER TABLE `notetroisiemeasbsciencesdudeveloppement`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeasbscienceseduphilosophieetlettre`
--
ALTER TABLE `notetroisiemeasbscienceseduphilosophieetlettre`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeasbsciencesinfirmieres`
--
ALTER TABLE `notetroisiemeasbsciencesinfirmieres`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeasensmathsphysiques`
--
ALTER TABLE `notetroisiemeasensmathsphysiques`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeasenssciencesnatchimie`
--
ALTER TABLE `notetroisiemeasenssciencesnatchimie`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeasenssciencessocecon`
--
ALTER TABLE `notetroisiemeasenssciencessocecon`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeaslaboratoiremedical`
--
ALTER TABLE `notetroisiemeaslaboratoiremedical`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeassciencesdeleducation`
--
ALTER TABLE `notetroisiemeassciencesdeleducation`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeassciencesdudeveloppement`
--
ALTER TABLE `notetroisiemeassciencesdudeveloppement`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeasscienceseduphilosophieetlettre`
--
ALTER TABLE `notetroisiemeasscienceseduphilosophieetlettre`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `notetroisiemeassciencesinfirmieres`
--
ALTER TABLE `notetroisiemeassciencesinfirmieres`
  ADD PRIMARY KEY (`codeetudiant`);

--
-- Indexes for table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`nosalle`);

--
-- Indexes for table `tblarticles`
--
ALTER TABLE `tblarticles`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `notedeuxiemeas`
--
ALTER TABLE `notedeuxiemeas`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notedeuxiemeasb`
--
ALTER TABLE `notedeuxiemeasb`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notedeuxiemeasbensmathsphysiques`
--
ALTER TABLE `notedeuxiemeasbensmathsphysiques`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notedeuxiemeasbenssciencesnatchimie`
--
ALTER TABLE `notedeuxiemeasbenssciencesnatchimie`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notedeuxiemeasblaboratoiremedical`
--
ALTER TABLE `notedeuxiemeasblaboratoiremedical`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notedeuxiemeasbsciencesdeleducation`
--
ALTER TABLE `notedeuxiemeasbsciencesdeleducation`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notedeuxiemeasbsciencesdudeveloppement`
--
ALTER TABLE `notedeuxiemeasbsciencesdudeveloppement`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notedeuxiemeasbsciencesinfirmieres`
--
ALTER TABLE `notedeuxiemeasbsciencesinfirmieres`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notedeuxiemeasensmathsphysiques`
--
ALTER TABLE `notedeuxiemeasensmathsphysiques`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notedeuxiemeasenssciencesnatchimie`
--
ALTER TABLE `notedeuxiemeasenssciencesnatchimie`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notedeuxiemeasenssciencessocecon`
--
ALTER TABLE `notedeuxiemeasenssciencessocecon`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notedeuxiemeaslaboratoiremedical`
--
ALTER TABLE `notedeuxiemeaslaboratoiremedical`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notedeuxiemeassciencesdeleducation`
--
ALTER TABLE `notedeuxiemeassciencesdeleducation`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notedeuxiemeassciencesdudeveloppement`
--
ALTER TABLE `notedeuxiemeassciencesdudeveloppement`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notedeuxiemeassciencesinfirmieres`
--
ALTER TABLE `notedeuxiemeassciencesinfirmieres`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notepremieras`
--
ALTER TABLE `notepremieras`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notepremierasb`
--
ALTER TABLE `notepremierasb`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notepremierasbensmathsphysiques`
--
ALTER TABLE `notepremierasbensmathsphysiques`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notepremierasbenssciencesnatchimie`
--
ALTER TABLE `notepremierasbenssciencesnatchimie`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notepremierasblaboratoiremedical`
--
ALTER TABLE `notepremierasblaboratoiremedical`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notepremierasbscienceeducation`
--
ALTER TABLE `notepremierasbscienceeducation`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notepremierasbsciencesdudeveloppement`
--
ALTER TABLE `notepremierasbsciencesdudeveloppement`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notepremierasbsciencesinfirmieres`
--
ALTER TABLE `notepremierasbsciencesinfirmieres`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notepremierasensmathsphysiques`
--
ALTER TABLE `notepremierasensmathsphysiques`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notepremierasenssciencesnatchimie`
--
ALTER TABLE `notepremierasenssciencesnatchimie`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notepremierasenssciencessocecon`
--
ALTER TABLE `notepremierasenssciencessocecon`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notepremierasjuridiques`
--
ALTER TABLE `notepremierasjuridiques`
  MODIFY `codeetudiant` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notepremieraslaboratoiremedical`
--
ALTER TABLE `notepremieraslaboratoiremedical`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notepremierassciencesdeleducation`
--
ALTER TABLE `notepremierassciencesdeleducation`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notepremierassciencesdudeveloppement`
--
ALTER TABLE `notepremierassciencesdudeveloppement`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notepremierassciencesinfirmieres`
--
ALTER TABLE `notepremierassciencesinfirmieres`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeas`
--
ALTER TABLE `notequatriemeas`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notequatriemeasb`
--
ALTER TABLE `notequatriemeasb`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `notequatriemeasbensmathsphysiques`
--
ALTER TABLE `notequatriemeasbensmathsphysiques`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeasbenssciencesnatchimie`
--
ALTER TABLE `notequatriemeasbenssciencesnatchimie`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeasbenssciencessocecon`
--
ALTER TABLE `notequatriemeasbenssciencessocecon`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeasblaboratoiremedical`
--
ALTER TABLE `notequatriemeasblaboratoiremedical`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeasbsciencesdeleducation`
--
ALTER TABLE `notequatriemeasbsciencesdeleducation`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeasbsciencesdudeveloppement`
--
ALTER TABLE `notequatriemeasbsciencesdudeveloppement`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeasbscienceseduphilosophieetlettre`
--
ALTER TABLE `notequatriemeasbscienceseduphilosophieetlettre`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeasbsciencesinfirmieres`
--
ALTER TABLE `notequatriemeasbsciencesinfirmieres`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeasensmathsphysiques`
--
ALTER TABLE `notequatriemeasensmathsphysiques`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeasenssciencesnatchimie`
--
ALTER TABLE `notequatriemeasenssciencesnatchimie`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeasenssciencessocecon`
--
ALTER TABLE `notequatriemeasenssciencessocecon`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeaslaboratoiremedical`
--
ALTER TABLE `notequatriemeaslaboratoiremedical`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeassciencesdeleducation`
--
ALTER TABLE `notequatriemeassciencesdeleducation`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeassciencesdudeveloppement`
--
ALTER TABLE `notequatriemeassciencesdudeveloppement`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeasscienceseduphilosophieetlettre`
--
ALTER TABLE `notequatriemeasscienceseduphilosophieetlettre`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notequatriemeassciencesinfirmieres`
--
ALTER TABLE `notequatriemeassciencesinfirmieres`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeas`
--
ALTER TABLE `notetroisiemeas`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notetroisiemeasb`
--
ALTER TABLE `notetroisiemeasb`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notetroisiemeasbensmathsphysiques`
--
ALTER TABLE `notetroisiemeasbensmathsphysiques`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeasbenssciencesnatchimie`
--
ALTER TABLE `notetroisiemeasbenssciencesnatchimie`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeasbenssciencessocecon`
--
ALTER TABLE `notetroisiemeasbenssciencessocecon`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeasblaboratoiremedical`
--
ALTER TABLE `notetroisiemeasblaboratoiremedical`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeasbsciencesdeleducation`
--
ALTER TABLE `notetroisiemeasbsciencesdeleducation`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeasbsciencesdudeveloppement`
--
ALTER TABLE `notetroisiemeasbsciencesdudeveloppement`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeasbscienceseduphilosophieetlettre`
--
ALTER TABLE `notetroisiemeasbscienceseduphilosophieetlettre`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeasbsciencesinfirmieres`
--
ALTER TABLE `notetroisiemeasbsciencesinfirmieres`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeasensmathsphysiques`
--
ALTER TABLE `notetroisiemeasensmathsphysiques`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeasenssciencesnatchimie`
--
ALTER TABLE `notetroisiemeasenssciencesnatchimie`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeasenssciencessocecon`
--
ALTER TABLE `notetroisiemeasenssciencessocecon`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeaslaboratoiremedical`
--
ALTER TABLE `notetroisiemeaslaboratoiremedical`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeassciencesdeleducation`
--
ALTER TABLE `notetroisiemeassciencesdeleducation`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeassciencesdudeveloppement`
--
ALTER TABLE `notetroisiemeassciencesdudeveloppement`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeasscienceseduphilosophieetlettre`
--
ALTER TABLE `notetroisiemeasscienceseduphilosophieetlettre`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notetroisiemeassciencesinfirmieres`
--
ALTER TABLE `notetroisiemeassciencesinfirmieres`
  MODIFY `codeetudiant` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `salle`
--
ALTER TABLE `salle`
  MODIFY `nosalle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblarticles`
--
ALTER TABLE `tblarticles`
  MODIFY `code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
