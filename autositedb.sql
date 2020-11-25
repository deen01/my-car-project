-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 25 Novembre 2020 à 14:01
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `autositedb`
--

-- --------------------------------------------------------

--
-- Structure de la table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `marque` text NOT NULL,
  `modele` text NOT NULL,
  `couleur` text NOT NULL,
  `boitevitesse` text NOT NULL,
  `prixttc` decimal(10,0) NOT NULL,
  `puissancefiscale` text NOT NULL,
  `typevehicule` text NOT NULL,
  `type_` text NOT NULL,
  `carburant` text NOT NULL,
  `portes` decimal(10,0) NOT NULL,
  `places` decimal(10,0) NOT NULL,
  `imgp` text NOT NULL,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `img5` text,
  `kilometrage` text NOT NULL,
  `critair` text,
  `coo` text,
  `carosserie` text NOT NULL,
  `reservoir` text NOT NULL,
  `nbre_cylindre` text NOT NULL,
  `puissancereelle` text NOT NULL,
  `ville` text,
  `garantie` text,
  `mec` text,
  `reference` text,
  `prixcat` decimal(10,0) DEFAULT NULL,
  `prixmois` decimal(10,0) DEFAULT NULL,
  `categorie` text
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `cars`
--

INSERT INTO `cars` (`id`, `marque`, `modele`, `couleur`, `boitevitesse`, `prixttc`, `puissancefiscale`, `typevehicule`, `type_`, `carburant`, `portes`, `places`, `imgp`, `img1`, `img2`, `img3`, `img4`, `img5`, `kilometrage`, `critair`, `coo`, `carosserie`, `reservoir`, `nbre_cylindre`, `puissancereelle`, `ville`, `garantie`, `mec`, `reference`, `prixcat`, `prixmois`, `categorie`) VALUES
(1, 'AUDI', 'Q2 30 TDI 106 S tronic 7 Sport Limited', 'NOIR MYTIC METALLISE', 'Automatique', '33039', '6 CV', '4x4 SUV', 'Véhicule particulier', 'Diesel', '5', '5', 'images/occasions/AUDI Q2/imgp.jpg', 'images/occasions/AUDI Q2/img (1).jpg', 'images/occasions/AUDI Q2/img (2).jpg', 'images/occasions/AUDI Q2/img (3).jpg', 'images/occasions/AUDI Q2/img (4).jpg', 'images/occasions/AUDI Q2/img (5).jpg', '9500 km', 'NIVEAU 2', '156 g/km', '4x4 SUV', 'n', 'n', '116 Ch din', 'Vignes', 'Distributeur', '13/ 07/ 2020', '2186-2507-09(au76c1)', '33900', '686', 'occasion'),
(2, 'BMW', 'Serie 7 2018 750dA xDrive 400ch M Sport Euro6c', 'Carbonschwarz metallisee', 'Automatique', '67990', '28 CV', 'n', 'Véhicule particulier', 'Diesel', '4', '5', 'images/occasions/BMW Serie 7/imgp.jpg', 'images/occasions/BMW Serie 7/img (1).jpg', 'images/occasions/BMW Serie 7/img (2).jpg', 'images/occasions/BMW Serie 7/img (3).jpg', 'images/occasions/BMW Serie 7/img (4).jpg', 'images/occasions/BMW Serie 7/img (5).jpg', '39775 km', 'NIVEAU 2', '164 g/km', 'Grande Berline', 'n', 'n', '400 Ch din', 'MERIGNAC', 'BPS 24 MOIS', '26/ 05/ 2019', '17452500-22(bay3)', '68500', '350', 'occasion'),
(3, 'CITROEN', 'Berlingo M 650kg BlueHDi 75 Club', 'Blanc Banqui', 'Mannuelle', '19974', '5 CV', 'n', 'Vehicule Particulier', 'Diesel', '3', '2', 'images/occasions/CITROEN Berlingo/imgp.jpg', 'images/occasions/CITROEN Berlingo/img (1).jpg', 'images/occasions/CITROEN Berlingo/img (2).jpg', 'images/occasions/CITROEN Berlingo/img (3).jpg', 'images/occasions/CITROEN Berlingo/img (4).jpg', 'images/occasions/CITROEN Berlingo/img (5).jpg', '56 Km', 'NIVEAU 2', '111 g/Km', 'UTILITAIRE', 'n', 'n', '76 Ch din', 'SANCE', 'Citroên Select Pro 12 Mois', '12/01/2020', '1845-5264-58 (ber5)', '17100', '213', 'occasion'),
(4, 'CITROEN', 'C3 2019 PureTech 110ch Feel S&S E6.d', 'Gris Platinium', 'Manuelle', '14490', '5 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/occasions/CITROEN C3/imgp.jpg', 'images/occasions/CITROEN C3/img (1).jpg', 'images/occasions/CITROEN C3/img (2).jpg', 'images/occasions/CITROEN C3/img (3).jpg', 'images/occasions/CITROEN C3/img (4).jpg', 'images/occasions/CITROEN C3/img (5).jpg', '21232 km', 'NIVEAU 1', '107 g/km', 'BERLINE', 'n', 'n', '110 Ch din', 'Rezé', 'Summum 12 mois', '05/11/2019', '1548-5525-74 (mu35c3)', '14850', '302', 'occasion'),
(5, 'CITROEN', 'C3 AIRCROSS PureTech 110ch S&S Shine E6.d', 'GRIS', 'Manuelle', '18991', '5 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/occasions/CITROEN C3 Air cross/imgp.jpg', 'images/occasions/CITROEN C3 Air cross/img (1).jpg', 'images/occasions/CITROEN C3 Air cross/img (2).jpg', 'images/occasions/CITROEN C3 Air cross/img (3).jpg', 'images/occasions/CITROEN C3 Air cross/img (4).jpg', 'images/occasions/CITROEN C3 Air cross/img (5).jpg', '10 km', 'NIVEAU 1', '104 g/km', '4x4 SUV', 'n', 'n', '110 Ch din', 'REIMS', 'Citroen Select 12 mois', '18/ 03/ 2020', '2433-7751-60 (ct51c2)', '20000', '189', 'occasion'),
(6, 'PEUGEOT', '308 2020 1.2 PureTech 130 ch E63 S&S Active EAT8', 'BLANC BANQUISE OPAQUE', 'Automatique', '21990', '6 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/occasions/PEUGEOT 308/imgp.jpg', 'images/occasions/PEUGEOT 308/img (1).jpg', 'images/occasions/PEUGEOT 308/img (2).jpg', 'images/occasions/PEUGEOT 308/img (3).jpg', 'images/occasions/PEUGEOT 308/img (4).jpg', 'images/occasions/PEUGEOT 308/img (5).jpg', '6 km', 'NIVEAU 1', '0 g/km', 'BERLINE', 'n', 'n', '130 Ch din', 'PARIS', 'Auto Express Plus 24 mois', '28/ 04/ 2020', '8847-4151-60 (vasa)', '22100', '200', 'occasion'),
(7, 'PEUGEOT', '3008 2020 1.5 BlueHDi 130 ch E6c GT Line S&S 6cv', 'SMART GREY METALLISE', 'Manuelle', '30990', '6 CV', 'n', 'Véhicule particulier', 'Diesel', '5', '5', 'images/occasions/PEUGEOT 3008/imgp.jpg', 'images/occasions/PEUGEOT 3008/img (1).jpg', 'images/occasions/PEUGEOT 3008/img (2).jpg', 'images/occasions/PEUGEOT 3008/img (3).jpg', 'images/occasions/PEUGEOT 3008/img (4).jpg', 'images/occasions/PEUGEOT 3008/img (5).jpg', '20535 km', 'NIVEAU 2', '106 g/km', '4x4 SUV', 'n', 'n', '130 Ch din', 'ROMANS SUR ISERE', 'PREMIUM 12 mois', '14/ 12/ 2019', '1123-4266-70 (pe26c1)', '31500', '331', 'occasion'),
(8, 'VOLKSWAGEN', 'Polo 2020 1.0 80 S&S BVM5 Lounge', 'blanc', 'Manuelle', '15984', '4 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/occasions/VOLKSWAGEN Polo/imgp.jpg', 'images/occasions/VOLKSWAGEN Polo/img (1).jpg', 'images/occasions/VOLKSWAGEN Polo/img (2).jpg', 'images/occasions/VOLKSWAGEN Polo/img (3).jpg', 'images/occasions/VOLKSWAGEN Polo/img (4).jpg', 'images/occasions/VOLKSWAGEN Polo/img (5).jpg', '10 km', 'NIVEAU 1', '0 g/km', 'CITADINE', 'n', 'n', '80 Ch din', 'TOMBLAINE', 'Constructeur', '15/ 05/ 2020', '4049-3475-02 (krvo)', '16000', '330', 'occasion'),
(9, 'VOLKSWAGEN', 'T-roc 2019 1.0 TSI 115 Start/BVM6 Lounge', 'ROUGE FLASH', 'Manuelle', '20894', '6 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/occasions/VOLKSWAGEN T-Roc/imgp.jpg', 'images/occasions/VOLKSWAGEN T-Roc/img (1).jpg', 'images/occasions/VOLKSWAGEN T-Roc/img (2).jpg', 'images/occasions/VOLKSWAGEN T-Roc/img (3).jpg', 'images/occasions/VOLKSWAGEN T-Roc/img (4).jpg', 'images/occasions/VOLKSWAGEN T-Roc/img (5).jpg', '13000 km', 'NIVEAU 1', '115 g/km', '4x4 SUV', 'n', 'n', '115 Ch din', 'TOMBLAINE', 'Das Welt Auto', '25/ 01/ 2019', '3521-9007-30 (krvo)', '20950', '430', 'occasion'),
(10, 'BMW', 'Serie 3 touring 330e xDrive 292ch BVAB', 'Mineralweiss metalisse', 'Automatique', '63981', '10 CV', 'n', 'Véhicule particulier', 'Hybride', '5', '5', 'images/neuves/BMW Serie 3 Touring/imgp.jpg', 'images/neuves/BMW Serie 3 Touring/img (1).jpg', 'images/neuves/BMW Serie 3 Touring/img (1).jpg', 'images/neuves/BMW Serie 3 Touring/img (1).jpg', 'images/neuves/BMW Serie 3 Touring/img (1).jpg', 'images/neuves/BMW Serie 3 Touring/img (1).jpg', ' ', 'NIVEAU 1', 'N.C', 'BREAK', 'n', 'n', 'N.C', 'NIMES', 'Garantie Constructeur BMW', ' ', 'EF0FK35002', '64000', '1319', 'neuf'),
(11, 'BMW', 'X2 Lounge X2 sDrive 18i 140 Ch BVM6', 'Mineralgrau metalisee', 'Manuelle', '40356', '7 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/neuves/BMW X2/imgp.jpg', 'images/neuves/BMW X2/img (1).jpg', 'images/neuves/BMW X2/img (1).jpg', 'images/neuves/BMW X2/img (1).jpg', 'images/neuves/BMW X2/img (1).jpg', 'images/neuves/BMW X2/img (1).jpg', ' ', 'NIVEAU', '125 g/Km', '4x4 SUV', 'n', 'n', 'N.C.', 'BAYONNE', 'Garantie Constructeur BMW', ' ', 'EF05R97101', '43865', '388', 'neuf'),
(12, 'BMW', 'X5 Lounge X5 xDrive30d 265 Ch BVA8', 'Artikgrau Brillant Metalisse', 'Automatique', '85017', '16 CV', 'n', 'Véhicule particulier', 'Diesel', '5', '5', 'images/neuves/BMW X5/imgp.jpg', 'images/neuves/BMW X5/img (1).jpg', 'images/neuves/BMW X5/img (1).jpg', 'images/neuves/BMW X5/img (1).jpg', 'images/neuves/BMW X5/img (1).jpg', 'images/neuves/BMW X5/img (1).jpg', ' ', 'NIVEAU', '162 g/Km', '4x4 SUV', 'n', 'n', 'N.C.', 'BAYONNE', 'Garantie Constructeur BMW', ' ', 'EF09C77750', '96610', '1764', 'neuf'),
(13, 'MERCEDES', 'CLASSE A Business Line Classe A 180 d BM6', 'Noir cosmos métallisé', 'Manuelle', '35076', '6 CV', 'n', 'Véhicule particulier', 'Diesel', '4', '5', 'images/neuves/MERCEDES Classe A/imgp.jpg', 'images/neuves/MERCEDES Classe A/img (1).jpg', 'images/neuves/MERCEDES Classe A/img (1).jpg', 'images/neuves/MERCEDES Classe A/img (1).jpg', 'images/neuves/MERCEDES Classe A/img (1).jpg', 'images/neuves/MERCEDES Classe A/img (1).jpg', ' ', 'NIVEAU', '105 g/km', 'BERLINE', 'n', 'n', 'N.C.', 'SAINT MAXIMIN', 'Garantie Constructeur Mercedes', ' ', 'EF1J270180', '39800', '393', 'neuf'),
(14, 'MERCEDES', 'CLASSE A Inspiration A 180 d', 'Gris montagne métallisé', 'Manuelle', '34276', '5 CV', 'n', 'Véhicule particulier', 'Diesel', '5', '5', 'images/neuves/MERCEDES Classe Aa/imgp.jpg', 'images/neuves/MERCEDES Classe Aa/img (1).jpg', 'images/neuves/MERCEDES Classe Aa/img (1).jpg', 'images/neuves/MERCEDES Classe Aa/img (1).jpg', 'images/neuves/MERCEDES Classe Aa/img (1).jpg', 'images/neuves/MERCEDES Classe Aa/img (1).jpg', ' ', 'NIVEAU', '107 g/km', 'BERLINE', 'n', 'n', 'N.C.', 'RIVERY', 'Garantie Constructeur Mercedes', ' ', 'EF1V203399', '40000', '411', 'neuf'),
(15, 'MERCEDES', 'CLASSE A AMG Line 180 7G DCT', 'Bleu denim métallisé', 'Automatique', '43776', '7 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/neuves/MERCEDES Classe Aaa/imgp.jpg', 'images/neuves/MERCEDES Classe Aaa/img (1).jpg', 'images/neuves/MERCEDES Classe Aaa/img (1).jpg', 'images/neuves/MERCEDES Classe Aaa/img (1).jpg', 'images/neuves/MERCEDES Classe Aaa/img (1).jpg', 'images/neuves/MERCEDES Classe Aaa/img (1).jpg', ' ', 'NIVEAU', 'N.C.', 'BERLINE', 'n', 'n', 'N.C.', 'PUILBOREAU', 'Garantie Constructeur Mercedes', ' ', 'EF1V064281', '46600', '503', 'neuf'),
(16, 'PEUGEOT', '208 Active Business 208 Electrique', 'Opaque Blanc Banquise', 'Automatique', '33860', '4 CV', 'n', 'Véhicule particulier', 'Electrique', '5', '5', 'images/neuves/PEUGEOT 208/imgp.jpg', 'images/neuves/PEUGEOT 208/img (1).jpg', 'images/neuves/PEUGEOT 208/img (1).jpg', 'images/neuves/PEUGEOT 208/img (1).jpg', 'images/neuves/PEUGEOT 208/img (1).jpg', 'images/neuves/PEUGEOT 208/img (1).jpg', ' ', 'NIVEAU 0', 'N.C.', 'BERLINE', 'n', 'n', 'N.C.', 'SETE', 'Garantie Constructeur Peugeot', ' ', 'EFLT072378', '34800', '377', 'neuf'),
(17, 'PEUGEOT', '2008 GT Line 2008 PureTech 130 Start/Stop BVM6', 'Gris métallisé', 'Manuelle', '26043', '6 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/neuves/PEUGEOT 2008/imgp.jpg', 'images/neuves/PEUGEOT 2008/img (1).jpg', 'images/neuves/PEUGEOT 2008/img (1).jpg', 'images/neuves/PEUGEOT 2008/img (1).jpg', 'images/neuves/PEUGEOT 2008/img (1).jpg', 'images/neuves/PEUGEOT 2008/img (1).jpg', ' ', 'NIVEAU', '102 g/km', '4x4 SUV', 'n', 'n', 'N.C.', 'VALENCE', 'Garantie Constructeur Peugeot', ' ', 'EFLJ861026', '28170', '227', 'neuf'),
(18, 'PEUGEOT', '3008 BlueHDi 130ch Start/Stop EAT8', 'Gris métallisé Artense', 'Automatique', '31990', '6 CV', 'n', 'Véhicule particulier', 'Diesel', '5', '5', 'images/neuves/PEUGEOT 3008/imgp.jpg', 'images/neuves/PEUGEOT 3008/img (1).jpg', 'images/neuves/PEUGEOT 3008/img (1).jpg', 'images/neuves/PEUGEOT 3008/img (1).jpg', 'images/neuves/PEUGEOT 3008/img (1).jpg', 'images/neuves/PEUGEOT 3008/img (1).jpg', ' ', 'NIVEAU', '102 g/km', '4x4 SUV', 'n', 'n', 'N.C.', 'BILLERE', 'Garantie Constructeur Peugeot', ' ', 'EFLS253868', '36160', '309', 'neuf'),
(19, 'RENAULT', 'Captur Intens Captur TCe 130 EDC FAP', 'YPE', 'Automatique', '24990', '7 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/neuves/RENAULT Captur/imgp.jpg', 'images/neuves/RENAULT Captur/img (1).jpg', 'images/neuves/RENAULT Captur/img (1).jpg', 'images/neuves/RENAULT Captur/img (1).jpg', 'images/neuves/RENAULT Captur/img (1).jpg', 'images/neuves/RENAULT Captur/img (1).jpg', ' ', 'NIVEAU', 'N.C.', '4x4 SUV', 'n', 'n', 'N.C.', 'SAINS EN GOHELLE', 'Garantie Constructeur Renault', ' ', 'EF66618859', '28250', '196', 'neuf'),
(20, 'RENAULT', 'Captur Intens Captur TCe 130 FAP', 'BLEU IRON/NOIR', 'Manuelle', '24024', '7 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/neuves/RENAULT Captur2/imgp.jpg', 'images/neuves/RENAULT Captur2/img (1).jpg', 'images/neuves/RENAULT Captur2/img (1).jpg', 'images/neuves/RENAULT Captur2/img (1).jpg', 'images/neuves/RENAULT Captur2/img (1).jpg', 'images/neuves/RENAULT Captur2/img (1).jpg', ' ', 'NIVEAU', 'N.C.', '4x4 SUV', 'n', 'n', 'N.C.', 'MOSCOW', 'Garantie Constructeur Renault', ' ', 'EF66209077', '27200', '289', 'neuf'),
(21, 'RENAULT', 'Twingo Life SCe 65', 'Opaque Spéciale Vert Pistache', 'Manuelle', '10262', '4 CV', 'n', 'Véhicule particulier', 'Essence', '5', '4', 'images/neuves/RENAULT Twingo/imgp.jpg', 'images/neuves/RENAULT Twingo/img (1).jpg', 'images/neuves/RENAULT Twingo/img (1).jpg', 'images/neuves/RENAULT Twingo/img (1).jpg', 'images/neuves/RENAULT Twingo/img (1).jpg', 'images/neuves/RENAULT Twingo/img (1).jpg', ' ', 'NIVEAU', 'N.C.', 'BERLINE', 'n', 'n', 'N.C.', 'LOISON SOUS LENS', 'Garantie Constructeur Renault', ' ', 'EF66176240', '12300', '94', 'neuf'),
(22, 'DACIA', 'Dokker Essentiel Blue dCi 95', 'BLANC GLACIER', 'Manuelle', '16100', '5 CV', 'n', 'Véhicule particulier', 'Diesel', '5', '5', 'images/neuves/Dacia dokker/imgp.jpg', 'images/neuves/Dacia dokker/img (1).jpg', 'images/neuves/Dacia dokker/img (1).jpg', 'images/neuves/Dacia dokker/img (1).jpg', 'images/neuves/Dacia dokker/img (1).jpg', 'images/neuves/Dacia dokker/img (1).jpg', ' ', 'NIVEAU', '113 g/km', 'MONOSPACE', 'n', 'n', 'N.C.', 'MARIGNANE', 'Garantie Constructeur Dacia', ' ', 'EF66349941', '18000', '335', 'neuf'),
(23, 'DACIA', 'Sandero Urban Stepway SCe 75', 'BLANC GLACIER', 'Manuelle', '11090', '4 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/neuves/DACIA Sandero/imgp.jpg', 'images/neuves/DACIA Sandero/img (1).jpg', 'images/neuves/DACIA Sandero/img (1).jpg', 'images/neuves/DACIA Sandero/img (1).jpg', 'images/neuves/DACIA Sandero/img (1).jpg', 'images/neuves/DACIA Sandero/img (1).jpg', ' ', 'NIVEAU', '117 g/km', 'BERLINE', 'n', 'n', 'N.C.', 'Soissons', 'Garantie Constructeur Dacia', ' ', 'EF66190492', '12000', '231', 'neuf'),
(24, 'DACIA', 'Sandero 15 ans TCe 90 Easy-R', 'BLEU IRON', 'Automatique', '14900', '5 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/neuves/DACIA Sandero 2/imgp.jpg', 'images/neuves/DACIA Sandero 2/img (1).jpg', 'images/neuves/DACIA Sandero 2/img (1).jpg', 'images/neuves/DACIA Sandero 2/img (1).jpg', 'images/neuves/DACIA Sandero 2/img (1).jpg', 'images/neuves/DACIA Sandero 2/img (1).jpg', ' ', 'NIVEAU', 'N.C.', 'BERLINE', 'n', 'n', 'N.C.', 'CRETEIL', 'Garantie Constructeur Dacia', ' ', 'EF66248543', '14900', '326', 'neuf'),
(25, 'DACIA', 'Sandero City + SCe 75', 'BLANC GLACIER', 'Manuelle', '10290', '4 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/neuves/Dacia Sandero 3/imgp.jpg', 'images/neuves/DACIA Sandero 3/img (1).jpg', 'images/neuves/DACIA Sandero 3/img (1).jpg', 'images/neuves/DACIA Sandero 3/img (1).jpg', 'images/neuves/DACIA Sandero 3/img (1).jpg', 'images/neuves/DACIA Sandero 3/img (1).jpg', ' ', 'NIVEAU', 'N.C.', 'BERLINE', 'n', 'n', 'N.C.', 'REIMS', 'Garantie Constructeur Dacia', ' ', 'EF66190275', '11900', '212', 'neuf'),
(26, 'FORD', 'Fiesta Cool & Connect 1.1 75 ch BVM5', 'GRIS LUNAIRE', 'Manuelle', '13680', '4 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/neuves/FORD Fiesta/imgp.jpg', 'images/neuves/FORD Fiesta/img (1).jpg', 'images/neuves/FORD Fiesta/img (1).jpg', 'images/neuves/FORD Fiesta/img (1).jpg', 'images/neuves/FORD Fiesta/img (1).jpg', 'images/neuves/FORD Fiesta/img (1).jpg', ' ', 'NIVEAU', '102 g/km', 'BERLINE', 'n', 'n', 'N.C.', 'LAMBRES LEZ DOUAI', 'Garantie Constructeur Ford', ' ', 'EFJLY65168', '18180', '129', 'neuf'),
(27, 'FORD', 'Fiesta Cool & Connect 1.1 75 ch BVM5', 'GRIS LUNAIRE', 'Manuelle', '12330', '4 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/neuves/FORD Fiesta 2/imgp.jpg', 'images/neuves/FORD Fiesta 2/img (1).jpg', 'images/neuves/FORD Fiesta 2/img (1).jpg', 'images/neuves/FORD Fiesta 2/img (1).jpg', 'images/neuves/FORD Fiesta 2/img (1).jpg', 'images/neuves/FORD Fiesta 2/img (1).jpg', ' ', 'NIVEAU', '102 g/km', 'BERLINE', 'n', 'n', 'N.C', 'MAUBEUGE', 'Garantie Constructeur Ford', ' ', 'EFJLB53383', '16830', '255', 'neuf'),
(28, 'FORD', 'Fiesta Connect Business 1.0 EcoBoost 95 ch Start/Stop BVM6', 'ROUGE RACING', 'Manuelle', '14180', '5 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/neuves/FORD Fiesta 3/imgp.jpg', 'images/neuves/FORD Fiesta 3/img (1).jpg', 'images/neuves/FORD Fiesta 3/img (1).jpg', 'images/neuves/FORD Fiesta 3/img (1).jpg', 'images/neuves/FORD Fiesta 3/img (1).jpg', 'images/neuves/FORD Fiesta 3/img (1).jpg', ' ', 'NIVEAU', '94 g/km', 'BERLINE', 'n', 'n', 'N.C', 'LAMBRES LEZ DOUAI', 'Garantie Constructeur Ford', ' ', 'EFJL570996', '18680', '291', 'neuf'),
(29, 'FORD', 'Fiesta Cool & Connect 1.0 EcoBoost 95 ch Start/Stop BVM6', 'ROUGE CANDY', 'Manuelle', '14810', '5 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/neuves/FORD Fiesta 4/imgp.jpg', 'images/neuves/FORD Fiesta 4/img (1).jpg', 'images/neuves/FORD Fiesta 4/img (1).jpg', 'images/neuves/FORD Fiesta 4/img (1).jpg', 'images/neuves/FORD Fiesta 4/img (1).jpg', 'images/neuves/FORD Fiesta 4/img (1).jpg', ' ', 'NIVEAU', '94 g/km', 'BERLINE', 'n', 'n', 'N.C', 'VITRY SUR SEINE', 'Garantie Constructeur Ford', ' ', 'EFJLY65046', '19310', '129', 'neuf'),
(30, 'FORD', 'Puma ST-Line X 1.0 EcoBoost 155 ch mHEV Start/Stop BVM6', 'NOIRE AGATHE', 'Manuelle', '27330', '7 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/neuves/FORD Puma/imgp.jpg', 'images/neuves/FORD Puma/img (1).jpg', 'images/neuves/FORD Puma/img (1).jpg', 'images/neuves/FORD Puma/img (1).jpg', 'images/neuves/FORD Puma/img (1).jpg', 'images/neuves/FORD Puma/img (1).jpg', ' ', 'NIVEAU', '99 g/km', '4X4 SUV', 'n', 'n', 'N.C', 'LAMBRES LEZ DOUAI', 'Garantie Constructeur Ford', ' ', 'EF2LL73411', '31330', '564', 'neuf'),
(31, 'CITROEN', 'C3 BlueHDi 100 Confort Business S&S 79g', 'BLANC BANQUISE', 'Manuelle', '10990', '4 CV', 'n', 'Véhicule particulier', 'Diesel', '5', '5', 'images/occasions/Citroen C3 2/imgp.jpg', 'images/occasions/Citroen C3 2/img (1).jpg', 'images/occasions/Citroen C3 2/img (2).jpg', 'images/occasions/Citroen C3 2/img (3).jpg', 'images/occasions/Citroen C3 2/img (4).jpg', 'images/occasions/Citroen C3 2/img (5).jpg', '40595', 'NIVEAU 2', '79 g/km', 'BERLINE', 'n', 'n', '99 Ch din', 'POITIERS', 'Auto Express Plus 6 mois', '25/01/2017', '1808-8524-37', '12900', '143', 'occasion'),
(32, 'FIAT', '500 1.2 8V 69ch SPORT', 'Coloris métal Crossover Black', 'Manuelle', '10999', '4 CV', 'n', 'Véhicule particulier', 'Essence', '3', '4', 'images/occasions/FIAT 500/imgp.jpg', 'images/occasions/FIAT 500/img (1).jpg', 'images/occasions/FIAT 500/img (2).jpg', 'images/occasions/FIAT 500/img (3).jpg', 'images/occasions/FIAT 500/img (4).jpg', 'images/occasions/FIAT 500/img (5).jpg', '27933 km', 'NIVEAU 1', '115 g/km', 'Citadine', 'n', 'n', '69 Ch din', 'Rezé', 'Auto Express Plus 12 mois', '30/05/2018', '1959-5357-64', '10999', '229', 'occasion'),
(33, 'FIAT', '500 1.2 8V 69ch S&S Pop Euro6d', 'Coloris métal Groove Metal Grey', 'Manuelle', '10299', '4 CV', 'n', 'Véhicule particulier', 'Essence', '3', '4', 'images/occasions/FIAT 500 2/imgp.jpg', 'images/occasions/FIAT 500 2/img (1).jpg', 'images/occasions/FIAT 500 2/img (2).jpg', 'images/occasions/FIAT 500 2/img (3).jpg', 'images/occasions/FIAT 500 2/img (4).jpg', 'images/occasions/FIAT 500 2/img (5).jpg', '26056 km', 'NIVEAU 1', '124 g/km', 'Citadine', 'n', 'n', '69 Ch din', 'Rezé', '12 mois Summum', '17/06/2019', '1747-6491-04', '12600', '113', 'occasion'),
(34, 'FORD', 'Fiesta   1.25   82ch Trend Fiesta  5p', 'Noir Shadow', 'Manuelle', '8999', '5 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/occasions/FORD Fiesta/imgp.jpg', 'images/occasions/FORD Fiesta/img (1).jpg', 'images/occasions/FORD Fiesta/img (2).jpg', 'images/occasions/FORD Fiesta/img (3).jpg', 'images/occasions/FORD Fiesta/img (4).jpg', 'images/occasions/FORD Fiesta/img (5).jpg', '69460 km', 'NIVEAU 1', '122 g/km', 'BERLINE', 'n', 'n', '82 Ch din', 'Rezé', 'Auto Express Plus 12 mois Summum', '03/05/2017', '3049-5387-06', '10000', '133', 'occasion'),
(35, 'NISSAN', 'Leaf 109ch 30kWh Acenta', 'Noir Metal', 'Automatique', '14990', '3 CV', 'n', 'Véhicule particulier', 'Electrique', '5', '5', 'images/occasions/NISSAN Leaf/imgp.jpg', 'images/occasions/NISSAN Leaf/img (1).jpg', 'images/occasions/NISSAN Leaf/img (2).jpg', 'images/occasions/NISSAN Leaf/img (3).jpg', 'images/occasions/NISSAN Leaf/img (4).jpg', 'images/occasions/NISSAN Leaf/img (5).jpg', '70 052 km', 'NIVEAU 0', '0 g/km', 'BERLINE', 'n', 'n', '109ch', 'Roncq', 'Nissan Club Occasions véhicules électriques 12 mois', '19/03/2016', '1035-2464-60', '17000', '330', 'occasion'),
(36, 'PEUGEOT', '208 1.2 PureTech 82ch E6.c Active 5p', 'Gris Artense', 'Manuelle', '12490', '4 CV', 'n', 'Véhicule particulier', 'Essence', '5', '5', 'images/occasions/PEUGEOT 208/imgp.jpg', 'images/occasions/PEUGEOT 208/img (1).jpg', 'images/occasions/PEUGEOT 208/img (2).jpg', 'images/occasions/PEUGEOT 208/img (3).jpg', 'images/occasions/PEUGEOT 208/img (4).jpg', 'images/occasions/PEUGEOT 208/img (5).jpg', '22000 km', 'NIVEAU 1', '110 g/km', 'BERLINE', 'n', 'n', '82 Ch din', 'Rezé', 'Auto Express Plus 12 mois', '03/04/2019', '2458-7220-49', '14000', '261', 'occasion'),
(37, 'PEUGEOT', 'Gt LINE HYBRID 225CH e-EAT8', 'Noir', ' Automatique', '41900', '10 CV', 'n', 'Véhicule particulier', 'Hybride', '5', '5', 'images/occasions/PEUGEOT Gt/imgp.jpg', 'images/occasions/PEUGEOT Gt/img (1).jpg', 'images/occasions/PEUGEOT Gt/img (2).jpg', 'images/occasions/PEUGEOT Gt/img (3).jpg', 'images/occasions/PEUGEOT Gt/img (4).jpg', 'images/occasions/PEUGEOT Gt/img (5).jpg', '2000 km', 'NIVEAU 1', '0 g/km', '4x4 SUV', 'n', 'n', '0 Ch din', 'AIX EN PROVENCE', 'Auto Express Plus 48 mois', '27/10/2020', '1966-3183-38', '41900', '863', 'occasion'),
(38, 'RENAULT', 'Twingo 1.0 SCe 70ch Life Euro6c', 'Blanc', ' Manuelle', '8790', '4 CV', 'n', 'Véhicule particulier', 'Essence', '5', '4', 'images/occasions/RENAULT Twingo/imgp.jpg', 'images/occasions/RENAULT Twingo/img (1).jpg', 'images/occasions/RENAULT Twingo/img (2).jpg', 'images/occasions/RENAULT Twingo/img (3).jpg', 'images/occasions/RENAULT Twingo/img (4).jpg', 'images/occasions/RENAULT Twingo/img (5).jpg', '13000 km', 'NIVEAU 1', '125 g/km', 'CITADINE', 'n', 'n', '69 Ch din', 'LISBONE', 'Garantie Constructeur Renault', '17/04/2020', '1827-4307-73(re62c8)', '9000', '105', 'occasion'),
(39, 'RENAULT', 'Twingo 1.0 SCe 75ch Intens', 'Jaune', ' Manuelle', '11300', '4 CV', 'n', 'Véhicule particulier', 'Essence', '5', '4', 'images/occasions/RENAULT Twingo 2/imgp.jpg', 'images/occasions/RENAULT Twingo 2/img (1).jpg', 'images/occasions/RENAULT Twingo 2/img (2).jpg', 'images/occasions/RENAULT Twingo 2/img (3).jpg', 'images/occasions/RENAULT Twingo 2/img (4).jpg', 'images/occasions/RENAULT Twingo 2/img (5).jpg', '6784 km', 'NIVEAU 1', '100 g/km', 'CITADINE', 'n', 'n', '73 Ch din', 'LONDRES', 'Garantie Constructeur Renault', '02/01/2020', '3776-8452-25(re51c3)', '11500', '110', 'occasion'),
(40, 'RENAULT', 'Twingo 1.0 SCe 70ch Intens Euro6C', 'Gris', 'Manuelle', '9890', '4 CV', 'n', 'Véhicule particulier', 'Essence', '5', '4', 'images/occasions/RENAULT Twingo 3/imgp.jpg', 'images/occasions/RENAULT Twingo 3/img (1).jpg', 'images/occasions/RENAULT Twingo 3/img (2).jpg', 'images/occasions/RENAULT Twingo 3/img (3).jpg', 'images/occasions/RENAULT Twingo 3/img (4).jpg', 'images/occasions/RENAULT Twingo 3/img (5).jpg', '1400 km', 'NIVEAU 1', '125 g/km', 'CITADINE', 'n', 'n', '69 Ch din', 'AMSTERDAM', 'GARANTIE DIAMANT 12 Mois', '27/03/2019', '3699-9716-59(re10c1)', '10000', '102', 'occasion'),
(41, 'RENAULT', 'Zoe Life Charge Normale', 'Blanc', 'Automatique', '10290', '1 CV', 'n', 'Vehicule Particulier', 'Electrique', '5', '5', 'images/occasions/RENAULT Zoe/imgp.jpg', 'images/occasions/RENAULT Zoe/img (1).jpg', 'images/occasions/RENAULT Zoe/img (2).jpg', 'images/occasions/RENAULT Zoe/img (3).jpg', 'images/occasions/RENAULT Zoe/img (4).jpg', 'images/occasions/RENAULT Zoe/img (5).jpg', '20500', '-', '0 g/km', 'BERLINE', '-', 'f', '77 Ch din', 'PARIS', 'GARANTIE CONSTRUCTEUR RENAULT', '12/12/2017', '3676-5805-71(re73c1)', '10500', '141', 'occasion');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
