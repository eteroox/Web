-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 20, 2016 at 01:30 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cog`
--

-- --------------------------------------------------------

--
-- Table structure for table `energetsko`
--

CREATE TABLE `energetsko` (
  `id` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `paragraf` text COLLATE cp1250_croatian_ci,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `idZgradarstvo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `energetsko`
--

INSERT INTO `energetsko` (`id`, `naslov`, `paragraf`, `path`, `idZgradarstvo`) VALUES
(1, 'Energetsko certificiranje', 'Ovo je relativno nova područje za većinu tvrtki u Hrvatskoj. Naša tvrtka je aktivna na tom području od 2009 godine kada smo započeli s projektom nisko-energetske zgrade u Gračanima. Zgrada je projektirana i izvedena kao zgrada za ispitivanje i proučavanje primjene pojedinih mjera energetske učinkovitosti. Zgrada je dobila uporabnu dozvolu 2011 godine , ali na njoj se još uvijek mijenjaju, dorađuju i ispituju razni sustavi kako bi sva ta znanja mogli primijeniti na drugim građevinama. Osim tog projekta aktivni smo kao:\r\n\r\n1) konzultanti tvrtkama koje upravljaju zgradama na projektima energetske obnove građevina\r\n\r\n2) projektanti pri rekonstrukciji i energetskoj obnovi zgrada.', 'slike/zgradarstvo/111.jpg', 0),
(2, 'Energy certification', 'This is a relatively new area for most companies in Croatia . Our company is active in this area since 2009 , when we started with the project of low - energy buildings in the settlement Gračani in Zagreb. The building was designed and constructed as a building for the trial and the study of individual measures of energy efficiency . The building received a use permit 2011 years, but on it is still changing, reconditioned and tested various systems to all this knowledge can be applied to other structures. In addition to this project, we are active as :\r\n\r\n- Consultants companies that manage buildings on energy projects of reconstruction of buildings\r\n\r\n- Planners for the reconstruction and energy renovation.', 'slike/zgradarstvo/111.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `galerija`
--

CREATE TABLE `galerija` (
  `id` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `galerija`
--

INSERT INTO `galerija` (`id`, `naslov`) VALUES
(1, ' Galerija'),
(2, 'drugi');

-- --------------------------------------------------------

--
-- Table structure for table `inadzor`
--

CREATE TABLE `inadzor` (
  `id` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `paragraf` text COLLATE cp1250_croatian_ci,
  `idInfrastruktura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `inadzor`
--

INSERT INTO `inadzor` (`id`, `naslov`, `path`, `paragraf`, `idInfrastruktura`) VALUES
(1, 'Nadzor', 'slike/infrastruktura/1.jpg', 'Poslovi stručnog nadzora obavljani su na  infrastrukturnim građevinama i to:\r\n\r\n- državnim cestama i autocestama,\r\n\r\n- energetskim postrojenjima i mrežama\r\n\r\n– trafostanice, mreža, vjetroelektrane\r\n\r\n- plinovodima i cjevovodima\r\n\r\n- sustavima za pročišćavanje voda, kolektorima i sustavima odvodnju voda\r\n\r\n- željezničkim prugama i industrijskim kolosijecima\r\n\r\n- lukama\r\n\r\nPoslovi se sastoje od:\r\n\r\n-Analize projekta i troškovnika radova\r\n\r\n-Definiranja optimalnosti primijenjenih rješenja\r\n\r\n-Kontrole izvedbe građevine u skladu s projektom i građevinskom dozvolom\r\n\r\n-Provođenje kontrole kvalitete ugrađenih materijala, uređaja i opreme te izvedenih radova\r\n\r\n-Kontrola dinamike provođenja projekta\r\n\r\n-Kontrola količina izvedenih radova i ugrađene opreme uz kontrolu ukupnih troškova na projektu\r\n\r\n-Priprema projekta za tehnički pregled i ishođenje uporabne dozvole', 0),
(2, 'Nadzor', 'slike/infrastruktura/2.jpg', NULL, 0),
(3, 'Nadzor', 'slike/infrastruktura/3.jpg', NULL, 0),
(4, 'Supervision', 'slike/infrastruktura/1.jpg', ' Expert supervision were carried out on the buildings and infrastructure to :  - State roads and highways ,  - Energy plants and networks  - Substations , networks , wind farms  - Pipelines and pipelines  - Systems for water purification , solar collectors and systems drainage water  - Railways and industrial intersections  - ports  Jobs consist of :  Analysis of the project and cost estimate works  -Define Optimality of the solutions  -Controls Performance of buildings in accordance with the project and building permit  -Provođenje Quality control built in materials , devices and equipment and performed works  -control Of the dynamics of the project  -control Amount of works and installed equipment by controlling the total cost of the project  -Prepare Project for technical inspection and obtaining occupancy permit', 0),
(5, 'Supervision', 'slike/infrastruktura/2.jpg', NULL, 0),
(6, 'Supervision', 'slike/infrastruktura/3.jpg', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `infrastruktura`
--

CREATE TABLE `infrastruktura` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `infrastruktura`
--

INSERT INTO `infrastruktura` (`id`, `naziv`, `path`) VALUES
(1, 'Infrastruktura', 'slike/infrastruktura/109.jpg'),
(2, 'Infrastructure', 'slike/infrastruktura/109.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `iprojektiranje`
--

CREATE TABLE `iprojektiranje` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `paragraf` text COLLATE cp1250_croatian_ci,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `idInfrastruktura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `iprojektiranje`
--

INSERT INTO `iprojektiranje` (`id`, `naziv`, `paragraf`, `path`, `idInfrastruktura`) VALUES
(1, 'Projektiranje', 'Kao projektanti sudjelovali smo na nekoliko projekata  izgradnje županijskih i državnih cesta. Osim toga  sudjelovali smo kao suradnici i u energetskim projektima  trafostanica, mreže (VN, SN i NN)  te vjetro-elektrana i fotonaponskih postrojenja.', 'slike/infrastruktura/137.jpg', 0),
(2, 'Projecting', 'As planners we have been participating in several projects for the construction of county and state roads . In addition , we participated as partners in energy projects and substations , network ( HV, MV and LV ) and wind - power plants and photovoltaic plants .', 'slike/infrastruktura/137.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `irealizirani`
--

CREATE TABLE `irealizirani` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `objekt` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `lokacija` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `investitor` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `vrstaUsluge` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `vrijemeRadova` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `opis` text COLLATE cp1250_croatian_ci,
  `idInfrastruktura` int(11) NOT NULL,
  `idRealizirani` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `irealizirani`
--

INSERT INTO `irealizirani` (`id`, `naziv`, `path`, `objekt`, `lokacija`, `investitor`, `vrstaUsluge`, `vrijemeRadova`, `opis`, `idInfrastruktura`, `idRealizirani`) VALUES
(1, 'Slavonski Brod', 'slike/infrastruktura/realizirano/slika1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 0, 1),
(2, 'Most Bosut', 'slike/infrastruktura/realizirano/slika2.jpg', 'most', 'Vinkovci', ' HC d.o.o.', '', '', 'IZMJEŠTANJE TRASE CESTE D 46, DIONICA : Stari Mikanovci – Vinkovci-Mirkovci, III. Dionica (Vinkovci Zapad – Mirkovci), \r\nIZMJEŠTANJE TRASE CESTE D 46, DIONICA : Stari Mikanovci – Vinkovci-Mirkovci, III. Dionica (Vinkovci Zapad – Mirkovci), ', 0, 1),
(3, 'Udbina', 'slike/infrastruktura/realizirano/slika3.jpg', NULL, 'Državna cesta D1, Zaobilaznica Udbine', 'HC d.o.o.', NULL, NULL, NULL, 0, 1),
(4, 'Tunel Krapina', 'slike/infrastruktura/realizirano/slika4.jpg', 'Tunel Krapina ', 'Grad Krapina', ' HC d.o.o.', '', '', 'Sanacija tunela Krapina na državnoj cesti D1, dionica 003', 0, 1),
(5, 'AC Županja - Lipovac', 'slike/infrastruktura/realizirano/slika5.jpg', 'dionica Županja - Lipovac', 'Autocesta A3', ' HC d.o.o.', NULL, NULL, 'Autocesta Zagreb-Lipovac, dionica Županja - Lipovac', 0, 1),
(6, 'Sanacije tunela Đurmanec', 'slike/infrastruktura/realizirano/slika6.jpg', 'tunel Đurmanec', 'državna cesta D1', ' HC d.o.o.', 'stručni nadzor ', '2012/2013g.', 'Kompletni nadzor nad radovima sanacije tunela Đurmanec', 0, 1),
(7, 'Dionica Sredanci-granicaBIH', 'slike/infrastruktura/realizirano/slika7.jpg', 'dionica ceste od Sredanaca do granice sa republiko', 'autocesta Beli Manastir - Osijek - Svilaj - Ploče', ' HC d.o.o.', 'stručni nadzor', ' 2011 g.', 'stručni nadzor nad izgradnjom dionice Sredanci - granica BIH', 0, 1),
(8, 'Sanacije tunela Mali Stog', 'slike/infrastruktura/realizirano/slika8.jpg', 'tunel Mali Stog', 'državna cesta D1', ' HC d.o.o.', 'stručni nadzor', ' 2012/2013g.', 'Kompletni nadzor nad radovima sanacije tunela Meliki Stog', 0, 1),
(9, 'Sanacije tunela Veliki Stog', 'slike/infrastruktura/realizirano/slika9.jpg', 'tunel Veliki Stog', 'državna cesta D1', ' HC d.o.o.', 'stručni nadzor', ' 2012/2013g.', 'Kompletni nadzor nad radovima sanacije tunela Veliki Stog', 0, 1),
(10, 'Državna cesta - dionica 3 Jelsa - Poljica', 'slike/infrastruktura/realizirano/slika10.jpg', 'Državna cesta -  dionica 3 : Jelsa - Poljica', 'Otok Hvar', ' HC d.o.o.', 'stručni nadzor', ' 2012g.', 'Kompletni nadzor nad izgradnjom brze ceste Popovec-Marija Bistrica-Zabok sa spojem na Breznički Hum;dionica: Andraševec (Bračak)-Mokrice (D307)', 0, 1),
(11, 'Eko Kaštelanski zaljev', 'slike/infrastruktura/realizirano/slika11.jpg', 'Eko Kaštelanski zaljev', 'Splitsko - dalmatinska županija', 'Vodovod i kanalizacija Split', 'stručni nadzor', ' 2007g. - 2014g.', 'stručni nadzor geotehničkih radova na izgradnji naftnog terminala u luci Ploče.', 0, 1),
(12, 'Komarevo - Brđani', 'slike/infrastruktura/realizirano/headerLogo.png', ' dionica 16: Komarevo - Brđani', 'Komarevo - Brđani ', 'HC d.o.o.', 'stručni nadzor ', '2013', 'Kompletni nadzor na projektu obnove državnih cesta II, faza B,dionica 16: Komarevo - Brđani', 0, 1),
(13, 'Križanje željezničke pruge MG2 i držane ceste D423', 'slike/infrastruktura/realizirano/headerLogo.png', ' križanje željezničke pruge MG2 i držane ceste D42', 'Slavonski Brod', 'HC d.o.o.', 'stručni nadzor ', '2014', 'Kompletni nadzor nad građ. radovima i prelaganjem instalacija na izgradnji objekata na križanju željezničke pruge MG2 i držane ceste D423 u Slavonskom Brodu', 0, 1),
(14, 'Andraševec (Bračak)-Mokrice (D307)', 'slike/infrastruktura/realizirano/headerLogo.png', 'dionica: Andraševec (Bračak)-Mokrice (D307)', 'državna cesta D307', 'HC d.o.o.', 'stručni nadzor ', '2012g.', 'Kompletni nadzor nad izgradnjom brze ceste Popovec-Marija Bistrica-Zabok sa spojem na Breznički Hum;dionica: Andraševec (Bračak)-Mokrice (D307)', 0, 1),
(15, 'Državna cesta D41 i D28 u Vrbovcu', 'slike/infrastruktura/realizirano/headerLogo.png', 'državna cesta D41 i D28 u Vrbovcu', 'Vrbovac', 'HC d.o.o.', 'stručni nadzor ', '2012g.', 'Kompletni nadzor na rekonstrukciji raskrižja državnih cesta D41 i D28 u Vrbovcu', 0, 1),
(16, 'Državna cesta - dionica 15 Petrinja - Gora', 'slike/infrastruktura/realizirano/headerLogo.png', 'Državna cesta - dionica 15 Petrinja - Gora', 'Petrinja', 'HC d.o.o.', 'stručni nadzor ', '2012g.', 'Kompletni nadzor na projektu obnove državnih cesta II, faza B, dionica 15: Petrinja - Gora', 0, 1),
(17, 'Državna cesta - dionica 18 Ivanić Grad', 'slike/infrastruktura/realizirano/headerLogo.png', 'Državna cesta - dionica 18 Ivanič Grad', 'Ivanić Grad', 'HC d.o.o.', 'stručni nadzor ', '2012g.', 'Kompletni nadzor na projektu obnove državnih cesta II faza B, dionica 18: Ivanić Grad po FIDIC-u', 0, 1),
(18, 'transformatorske stanice i dalekovodi', 'slike/infrastruktura/realizirano/headerLogo.png', 'transformatorske stanice i dalekovodi', 'Splitsko - dalmatinska županija', 'Elektrodalmacija Split', 'stručni nadzor ', '2012g.', 'stručni nadzor elektromontažnih radova na izgradnji više transformatorskih stanica i dalekovoda', 0, 1),
(19, 'Terminal luka Ploče', 'slike/infrastruktura/realizirano/headerLogo.png', 'terminal luka Ploče', 'Ploče', 'Luka Ploče trgovina d.o.o.', 'stručni nadzor ', '2013.g', 'stručni nadzor geotehničkih radova na izgradnji naftnog terminala u luci Ploče', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `irealiziranieng`
--

CREATE TABLE `irealiziranieng` (
  `id` int(11) NOT NULL,
  `naziv` varchar(80) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `objekt` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `lokacija` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `investitor` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `vrstaUsluge` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `vrijemeRadova` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `opis` text COLLATE cp1250_croatian_ci,
  `idGalerija` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `irealiziranieng`
--

INSERT INTO `irealiziranieng` (`id`, `naziv`, `path`, `objekt`, `lokacija`, `investitor`, `vrstaUsluge`, `vrijemeRadova`, `opis`, `idGalerija`) VALUES
(1, 'Slavonski Brod', 'slike/infrastruktura/realizirano/slika1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 1),
(2, 'Bridge Bosut', 'slike/infrastruktura/realizirano/slika2.jpg', 'bridge', 'Vinkovci', 'HC d.o.o', NULL, NULL, 'Relocation of the route of the road D 46 , shares : Stari Mikanovci - Vinkovci - Mirkovci , III . Shares ( Vinkovci West - Mirkovci ) , displacement route of the road D 46 , shares : Stari Mikanovci - Vinkovci - Mirkovci , III . Shares ( Vinkovci West - Mirkovci )', 1),
(3, 'Udbina', 'slike/infrastruktura/realizirano/slika3.jpg', 'bridge', 'State road D1 , Bypass Udbina', 'HC d.o.o.', NULL, NULL, NULL, 1),
(4, 'The tunnel Krapina', 'slike/infrastruktura/realizirano/slika4.jpg', 'The tunnel Krapina', 'City Krapina', 'HC d.o.o.', NULL, NULL, 'Rehabilitation of tunnels Krapina on the state road D1, section 003', 1),
(5, 'AC Županja - Lipovac', 'slike/infrastruktura/realizirano/slika5.jpg', 'road Županja - Lipovac', 'Motorway A3', 'HC d.o.o.', NULL, NULL, 'Zagreb- Lipovac , section Županja - Lipovac', 1),
(6, 'Repairing the tunnel Đurmanec', 'slike/infrastruktura/realizirano/slika6.jpg', 'tunnel Đurmanec', 'State Road D1', 'HC d.o.o.', 'professional supervision', '2012/2013g.', 'Complete supervision of the recovery of the tunnel Đurmanec', 1),
(7, 'Road Sredanci - granicaBIH', 'slike/infrastruktura/realizirano/slika7.jpg', 'Section of road from Sredanci to the border', 'highway Beli Manastir - Osijek - Svilaj - Plates', 'HC d.o.o.', 'professional supervision', '2011 g.', 'professional supervision of construction stocks Sredanci - borders of Bosnia and Herzegovina', 1),
(8, 'Repairing the tunnel Mali Stog', 'slike/infrastruktura/realizirano/slika8.jpg', 'Tunnel Mali Stog', 'State Road D1', 'HC d.o.o.', 'professional supervision', '2012/2013g.', 'Complete supervision of the recovery of the tunnel Mali Stog', 1),
(9, 'Repairing of the tunnel Veliki Stog', 'slike/infrastruktura/realizirano/slika9.jpg', 'tunnel Veliki Stog', 'State Road D1', 'HC d.o.o.', 'professional supervision', '2012/2013g.', 'Complete supervision of the recovery of the tunnel Veliki Stog', 1),
(10, 'State road - Split - Poljica', 'slike/infrastruktura/realizirano/slika10.jpg', 'State road', 'Otok Hvar', 'HC d.o.o.', 'professional supervision', '2012.g.', 'Complete control over the construction of the fast road Popovec - Marija Bistrica - Zabok with a compound of the Breznički Hum , shares : Andraševec ( Bračak ) -Mokrice ( D307 )', 1),
(11, 'Eko Kaštelanski zaljev', 'slike/infrastruktura/realizirano/slika11.jpg', 'Eko Kaštelanski zaljev', 'Split-Dalmatia county', 'Vodovod i kanalizacija Split', 'professional supervision', '2007g. - 2014g.', 'Professional supervision of geotechnical works on the construction of the oil terminal in the port of Ploce .', 1),
(12, 'Komarevo - Brđani', 'slike/infrastruktura/realizirano/headerLogo.png', 'section of road 16: Komarevo - Brđani', 'Komarevo - Brđani', 'HC d.o.o.', 'professional supervision', '2013g.', 'Complete control on renovation of the state roads II , Phase B , section 16 : Komarevo - Brđani', 1),
(13, 'Crossing of railroad MG2 and the state road D423', 'slike/infrastruktura/realizirano/headerLogo.png', 'railroad crossing', 'Slavonski Brod', 'HC d.o.o.', 'professional supervision', '2014', 'Complete control over construction. works and installations postponing the construction of facilities at the crossroads of the railway MG2 and the state road D423 in Slavonski Brod', 1),
(14, 'Andraševec (Bračak)-Mokrice (D307)', 'slike/infrastruktura/realizirano/headerLogo.png', 'Andraševec (Bračak)-Mokrice (D307)', 'state road D307', 'HC d.o.o.', 'professional supervision', ' 2012g.', 'Complete control over the construction of the fast road Popovec - Marija Bistrica - Zabok with a compound of the Breznički Hum , shares : Andraševec ( Bračak ) -Mokrice ( D307 )', 1),
(15, 'State road D41 and D28 in Vrbovec', 'slike/infrastruktura/realizirano/headerLogo.png', 'State road D41 and D28 in Vrbovec', 'Vrbovac', 'HC d.o.o.', 'professional supervision', '2012g.', 'Complete control of the reconstruction of the intersection of state roads D41 and D28 in Vrbovec', 1),
(16, 'State road - section 15 Petrinja - Gora', 'slike/infrastruktura/realizirano/headerLogo.png', 'State road - section 15 Petrinja - Gora', 'Petrinja', ' HC d.o.o.', 'professional supervision', '2012g.', 'Complete control on the reconstruction of state roads II , Phase B , section 15 : Petrinja - Montenegro', 1),
(17, 'State road - section 18 Ivanić Grad', 'slike/infrastruktura/realizirano/headerLogo.png', 'State road - section 18 Ivanić Grad', 'Ivanić Grad', 'HC d.o.o.', 'professional supervision', '2012g.', 'Complete control on the reconstruction of the state road state II B , Section 18 : Ivanic Grad FIDIC', 1),
(18, 'Substations and transmission lines', 'slike/infrastruktura/realizirano/headerLogo.png', 'Substations and transmission lines', 'Split-Dalmatia county', 'Elektrodalmacija Split', 'professional supervision', '2012.g.', 'professional supervision electrical installation works on the construction of more substations and transmission lines', 1),
(19, 'Terminal port of Ploče', 'slike/infrastruktura/realizirano/headerLogo.png', 'Terminal port of Ploče', 'Ploče', 'Luka Ploče trgovina d.o.o.', 'professional supervision', '2013g.', 'professional supervision of geotechnical works on the construction of the oil terminal in the port of Ploce', 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) COLLATE cp1250_croatian_ci NOT NULL,
  `pass` varchar(30) COLLATE cp1250_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `pass`) VALUES
(1, 'cog', 'mirela');

-- --------------------------------------------------------

--
-- Table structure for table `novostihr`
--

CREATE TABLE `novostihr` (
  `id` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `paragraf` text COLLATE cp1250_croatian_ci,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `novostihr`
--

INSERT INTO `novostihr` (`id`, `naslov`, `paragraf`, `path`) VALUES
(1, 'Neki naslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu semper lectus. Suspendisse sit amet turpis elementum, faucibus nibh vitae, finibus libero. Aenean fermentum sem et tellus ultricies, eget convallis tellus finibus. Aenean dictum lacinia elementum. Nulla pellentesque, tortor at aliquet iaculis, ligula enim consequat odio, a mollis turpis quam quis lectus. Duis hendrerit iaculis hendrerit. Etiam eget vulputate lectus. Aliquam sit amet nisi luctus, lacinia risus vitae, fermentum purus. Nunc et augue placerat, vestibulum libero non, volutpat urna. Vivamus pulvinar varius lorem eget mattis. ', 'slike/pozadina/headerLogo.png'),
(2, 'Neki naslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu semper lectus. Suspendisse sit amet turpis elementum, faucibus nibh vitae, finibus libero. Aenean fermentum sem et tellus ultricies, eget convallis tellus finibus. Aenean dictum lacinia elementum. Nulla pellentesque, tortor at aliquet iaculis, ligula enim consequat odio, a mollis turpis quam quis lectus. Duis hendrerit iaculis hendrerit. Etiam eget vulputate lectus. Aliquam sit amet nisi luctus, lacinia risus vitae, fermentum purus. Nunc et augue placerat, vestibulum libero non, volutpat urna. Vivamus pulvinar varius lorem eget mattis. ', NULL),
(3, 'Neki naslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu semper lectus. Suspendisse sit amet turpis elementum, faucibus nibh vitae, finibus libero. Aenean fermentum sem et tellus ultricies, eget convallis tellus finibus. Aenean dictum lacinia elementum. Nulla pellentesque, tortor at aliquet iaculis, ligula enim consequat odio, a mollis turpis quam quis lectus. Duis hendrerit iaculis hendrerit. Etiam eget vulputate lectus. Aliquam sit amet nisi luctus, lacinia risus vitae, fermentum purus. Nunc et augue placerat, vestibulum libero non, volutpat urna. Vivamus pulvinar varius lorem eget mattis. ', NULL),
(4, 'Neki naslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu semper lectus. Suspendisse sit amet turpis elementum, faucibus nibh vitae, finibus libero. Aenean fermentum sem et tellus ultricies, eget convallis tellus finibus. Aenean dictum lacinia elementum. Nulla pellentesque, tortor at aliquet iaculis, ligula enim consequat odio, a mollis turpis quam quis lectus. Duis hendrerit iaculis hendrerit. Etiam eget vulputate lectus. Aliquam sit amet nisi luctus, lacinia risus vitae, fermentum purus. Nunc et augue placerat, vestibulum libero non, volutpat urna. Vivamus pulvinar varius lorem eget mattis. ', NULL),
(5, 'Neki naslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu semper lectus. Suspendisse sit amet turpis elementum, faucibus nibh vitae, finibus libero. Aenean fermentum sem et tellus ultricies, eget convallis tellus finibus. Aenean dictum lacinia elementum. Nulla pellentesque, tortor at aliquet iaculis, ligula enim consequat odio, a mollis turpis quam quis lectus. Duis hendrerit iaculis hendrerit. Etiam eget vulputate lectus. Aliquam sit amet nisi luctus, lacinia risus vitae, fermentum purus. Nunc et augue placerat, vestibulum libero non, volutpat urna. Vivamus pulvinar varius lorem eget mattis. ', NULL),
(6, 'Neki naslov', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu semper lectus. Suspendisse sit amet turpis elementum, faucibus nibh vitae, finibus libero. Aenean fermentum sem et tellus ultricies, eget convallis tellus finibus. Aenean dictum lacinia elementum. Nulla pellentesque, tortor at aliquet iaculis, ligula enim consequat odio, a mollis turpis quam quis lectus. Duis hendrerit iaculis hendrerit. Etiam eget vulputate lectus. Aliquam sit amet nisi luctus, lacinia risus vitae, fermentum purus. Nunc et augue placerat, vestibulum libero non, volutpat urna. Vivamus pulvinar varius lorem eget mattis. ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pocetna`
--

CREATE TABLE `pocetna` (
  `id` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `paragraf` text COLLATE cp1250_croatian_ci,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `pocetna`
--

INSERT INTO `pocetna` (`id`, `naslov`, `paragraf`, `path`) VALUES
(1, 'Centar za organizaciju građenja', 'Tvrtka Centar za organizaciju građenja d.o.o. osnovana je 1994 godine. Započeli smo s poslovima na obnovi Republike Hrvatske i grada Mostara. Nastavili smo s projektima izgradnje stanova za hrvatske branitelje. Po završetku navedenih projekata i stečenom iskustvu u organizaciji velikih projekata započeli smo paralelno raditi na projektima visokogradnje , projektima industrijskih postrojenja  i projektima infrastrukture. I tako sve do današnjih dana.\r\nCentar za organizaciju građenja d.o.o. je među vodećim hrvatskim tvrtkama na području vođenja projekata, konzaltinga, projektiranja, stručnog nadzora i energetskog certificiranja. Navedene poslove obavljamo na projektima izgradnje infrastrukture, zgrada i industrijskih postrojenja. Prilikom provođenja projekata koristimo najnovija svjetska stručna saznanja .', 'slike/pocetna/105.jpg'),
(2, 'Centar za organizaciju građenja', 'Company Centar za organizaciju građenja d.o.o. was founded in 1994 . We started with jobs on rebuilding the Croatian city of Mostar . We continued with the construction of apartments for the Croatian defenders . Upon completion of these projects and with previous experience in organizing big projects we have started parallel work on construction projects , projects of industrial facilities and infrastructure projects . We kept doing so to this day . Centar za organizaciju građenja d.o.o. is one of the leading Croatian companies in the field of project management , consulting, design , supervision and energy certification . These tasks are performed on the construction of infrastructure , buildings and industrial plants . During the implementation of projects we are using the latest world professional knowledge .', 'slike/pocetna/105.jpg'),
(3, 'Centar za organizaciju građenja', NULL, 'slike/pocetna/2.jpg'),
(4, 'Centar za organizaciju građenja', NULL, 'slike/pocetna/3.jpg'),
(5, 'Centar za organizaciju građenja', NULL, 'slike/pocetna/4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `projekti`
--

CREATE TABLE `projekti` (
  `id` int(11) NOT NULL,
  `jezik` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `naziv` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `objekt` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `lokacija` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `investitor` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `vrstaUsluge` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `vrijemeRadova` varchar(50) COLLATE cp1250_croatian_ci NOT NULL,
  `opis` text COLLATE cp1250_croatian_ci
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `projekti`
--

INSERT INTO `projekti` (`id`, `jezik`, `path`, `naziv`, `objekt`, `lokacija`, `investitor`, `vrstaUsluge`, `vrijemeRadova`, `opis`) VALUES
(1, 'hr', 'slike/projekti/139.jpg', 'Most Bračak', 'most Bračak', 'Županijska cesta 2197', ' HC d.o.o.', 'nadzor', 'u tijeku', 'Inadzor na izgradnji mosta Bračak'),
(2, 'eng', 'slike/projekti/139.jpg', 'Bridge Bračak- Supervision', 'bridge', 'County Road 2197', 'HC d.o.o.', 'Supervision', 'in progress', 'Supervision of the construction on the bridge Bračak'),
(3, 'hr', 'slike/projekti/140.jpg', 'Slavonski Brod - nadzor', NULL, 'Slavonski Brod', NULL, 'nadzor', 'u tijeku', 'Nadzor nad građevinskim radovima i prelaganjem instalacija na izgradnji objekata na križanju željezničke pruge MG2 i državne ceste D423 u Slavonskom Brodu'),
(4, 'eng', 'slike/projekti/140.jpg', 'Slavonski Brod - Supervision', NULL, 'Slavonski Brod', NULL, 'Supervision', 'in progress', 'Supervising construction and installation of postponing the construction of facilities at the crossroads of the railway MG2 and D423 road in Slavonski Brod');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `naziv` text COLLATE cp1250_croatian_ci,
  `path` varchar(40) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `paragraf` text COLLATE cp1250_croatian_ci
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `naziv`, `path`, `paragraf`) VALUES
(1, 'Neki naslov', 'slike/pozadina/105.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `upravljanje`
--

CREATE TABLE `upravljanje` (
  `idUpravljanje` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `paragraf` text COLLATE cp1250_croatian_ci,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `idZgradarstvo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `upravljanje`
--

INSERT INTO `upravljanje` (`idUpravljanje`, `naslov`, `paragraf`, `path`, `idZgradarstvo`) VALUES
(1, 'Upravljanje projektima', 'Iskustvo na upravljanju je stjecano na velikim projektima. Tako  smo započeli s projektom obnove ratom razorenih građevina i to na područjima Slavonije, Like, Korduna, Banije i Dalmacije. Tu se posebno ističu Rastoke kao zaštićena cjelina. Nastavili smo s  većim projektom - izgradnje stanova za stradalnike Domovinskog rata na području cijele Republike Hrvatske.Po završetku tog projekta započeli smo s projektom stambenog zbrinjavanja stradalnika dodjelom stambenih kredita.Osim tih velikih projekata sudjelovali smo i u upravljanju projektima izgradnje građevina kao što su trgovački centri tvrtke, stambene zgrade,  industrijskih zgrada i postrojenja, te u projektima provođenja mjera energetske učinkovitosti.', 'slike/zgradarstvo/1.jpg', 0),
(2, NULL, NULL, 'slike/zgradarstvo/2.jpg', 0),
(3, 'Project management', 'Experience in the management was acquired on large projects. We started with the project of reconstruction of war - torn buildings in region of Slavonia , Lika , Kordun and Dalmatia . Particularly interesting are Rastoke as \r\nprotected cultural heritage . We continued with a larger project - construction of apartments for victims of war in the entire Republic of Croatia . After completion of this project , we started with the project of housing victims of allocating housing loan. Except these large projects we have been involved in the project management of construction of buildings such as shopping centers , residential buildings, industrial buildings and installations, and in projects of implementation of energy efficiency measures .', 'slike/zgradarstvo/1.jpg', 0),
(4, NULL, NULL, 'slike/zgradarstvo/2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `vjestacenja`
--

CREATE TABLE `vjestacenja` (
  `id` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `paragraf` text COLLATE cp1250_croatian_ci,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `idZgradarstvo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `vjestacenja`
--

INSERT INTO `vjestacenja` (`id`, `naslov`, `paragraf`, `path`, `idZgradarstvo`) VALUES
(1, 'Vještačenja', 'Za potrebe projekta stambenog zbrinjavanja hrvatskih branitelja i njihovih obitelji razrađena je kompletna metodologija vještačenja i procjene nekretnina i tom metodologijom je procijenjeno cca  15 tisuća nekretnina', 'slike/zgradarstvo/136.jpg', 0),
(2, 'Expert evaluation', 'For the purposes of the project housing Croatian war veterans and their families we developed a complete methodology expertise and real estate valuation and the methodology is estimated approximately 15,000 real estate', 'slike/zgradarstvo/136.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `zgradarstvo`
--

CREATE TABLE `zgradarstvo` (
  `id` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `zgradarstvo`
--

INSERT INTO `zgradarstvo` (`id`, `naslov`, `path`) VALUES
(1, 'Zgradarstvo', 'slike/zgradarstvo/112.jpg'),
(2, 'Building and construction industry', 'slike/zgradarstvo/112.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `znadzor`
--

CREATE TABLE `znadzor` (
  `id` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `paragraf` text COLLATE cp1250_croatian_ci,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `idZgradarstvo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `znadzor`
--

INSERT INTO `znadzor` (`id`, `naslov`, `paragraf`, `path`, `idZgradarstvo`) VALUES
(1, 'Nadzor', 'Poslovi stručnog nadzora nad izgradnjom građevina su najzastupljeniji poslovi u opsegu rada tvrtke. U području zgradarstva obavljali smo poslove stručnog nadzora  na izgradnji stambenih  zgrada, trgovačkih centara, hotela, industrijskih zgrada i postrojenja, poslovnih zgrada, javnih zgrada.', 'slike/zgradarstvo/112.jpg', 0),
(2, 'Supervision', 'Construction supervision during construction of buildings are the most common activities in the scope of work of the company. In the field of building construction , we performed expert supervision on the construction of residential buildings, shopping centers, hotels, industrial buildings and facilities, office buildings, public buildings .', 'slike/zgradarstvo/112.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `zprojektiranje`
--

CREATE TABLE `zprojektiranje` (
  `id` int(11) NOT NULL,
  `naslov` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `paragraf` text COLLATE cp1250_croatian_ci,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `idZgradarstvo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `zprojektiranje`
--

INSERT INTO `zprojektiranje` (`id`, `naslov`, `paragraf`, `path`, `idZgradarstvo`) VALUES
(1, 'Projektiranje', 'Poslove projektiranja započeli smo na projektima obnove stambenih građevina. Tu se svakako ističu zaštićene građevine u naselju Rastoke u Slunju. Po završetku aktivnosti poslovi projektiranja podijeljeni  su u dvije grupe i to :\r\n\r\n1) projekti realizirani uglavnom  na komercijalnim sadržajima\r\n\r\n2) projekti koji su realizirani na industrijskim postrojenjima', 'slike/zgradarstvo/3.jpg', 0),
(2, NULL, NULL, 'slike/zgradarstvo/4.jpg', 0),
(3, 'Projecting', 'We started with the project of reconstruction of residential buildings . Protected buildings in the village Rastoke in Slunj are certainly standing out as the project we are mostly proud of . Upon completion of the tasks of projecting we can devide them into two groups: 1 ) projects implemented mainly on commercial facilities 2 ) projects carried out at industrial plants', 'slike/zgradarstvo/3.jpg', 0),
(4, NULL, NULL, 'slike/zgradarstvo/4.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `zrealizirani`
--

CREATE TABLE `zrealizirani` (
  `id` int(11) NOT NULL,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `naziv` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `objekat` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `lokacija` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `investitor` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `vrstaUsluge` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `vrijemeRadova` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `opis` text COLLATE cp1250_croatian_ci,
  `idZgradarstvo` int(11) NOT NULL,
  `idGalerija` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `zrealizirani`
--

INSERT INTO `zrealizirani` (`id`, `path`, `naziv`, `objekat`, `lokacija`, `investitor`, `vrstaUsluge`, `vrijemeRadova`, `opis`, `idZgradarstvo`, `idGalerija`) VALUES
(1, 'slike/zgradarstvo/realizirano/slika1.jpg', 'Hoteli Corinthia', 'Hotel Coorinthia', 'Otok Krk, Baška', 'Glumina banka / Coning', 'Inženjering', '1995 g', 'Adaptacija restorana, recepcije, terasa, sanitarnih čvorova, kuhinje', 0, 1),
(2, 'slike/zgradarstvo/realizirano/slika2.jpg', 'Sisačka banka', 'Sisačka banka', 'Zagreb, Zvonimirova ulica', 'Sisačka banka', 'Inženjering', '1997g.', 'Adaptacija poslovnice, izvođenje građevinsko-obrtničkih i instalaterskih radova', 0, 1),
(3, 'slike/zgradarstvo/realizirano/slika3.jpg', 'Rastoke Slunj (spomenik kulture)', 'Spomenik kulture-naselje Rastoke', 'Slunj, Rastoke', 'Ministarstvo razvitka i obnove RH', 'Inženjering', '1998g.', 'Saniranje oštećenja V. i VI.stupnja ratnih šteta, građevinsko-obrtnički i instalaterski radovi', 0, 1),
(4, 'slike/zgradarstvo/realizirano/slika4.jpg', 'Trgovački centar Kaufland u Bjelovaru', 'trgovački centar', 'Bjelovar', 'Kaufland d.o.o.', 'stručni nadzor', '', 'izgradnja novog trgovačkog centra ', 0, 1),
(5, 'slike/zgradarstvo/realizirano/slika5.jpg', 'Trgovački centar Kaufland u Virovitici', 'trgovački centar', 'Virovitica', ' Kaufland d.o.o.', 'stručni nadzor', '', 'izgradnja novog trgovačkog centra ', 0, 1),
(6, 'slike/zgradarstvo/realizirano/slika6.jpg', 'Adaptacija pogona SM1', 'pogon SM1', 'Savski Marof', ' Pliva d.o.o.', 'projektiranje i stručni nadzor', '2012 g.', 'projektiranje i stručni nadzor na adaptaciji laboratorija i uredskih prostorija od 1-6 kata;izvođenje energetski učinskovite fasade.', 0, 1),
(7, 'slike/zgradarstvo/realizirano/slika7.jpg', 'Izgradnja i premještanje novog laboratorija TAPI', 'istraživački laboratorij TAPI', 'Savski Marof', ' PLIVA HRVATSKA d.o.o', 'projektiranje, vođenje projekta, stručni nadzor', '2013 g.', 'premještanje i izgradnja novog laboratorija TAPI ', 0, 1),
(8, 'slike/zgradarstvo/realizirano/slika8.jpg', 'Sanacija i rekonstrukcija tankvana i bazena organs', 'Tankvani i bazeni organskih otapala', 'Savski Marof', ' PLIVA HRVATSKA d.o.o.', 'stručni nadzor, projektiranje, vođenje projekata', '', 'Sanacija i rekonstrukcija tankvana i bazena organskih otapala za pogone ', 0, 1),
(9, 'slike/zgradarstvo/realizirano/slika9.jpg', 'Pilot postrojenje u laboratoriju TAPI', 'laboratorij TAPI', 'Savski Marof', ' PLIVA HRVATSKA d.o.o.', 'stručni nadzor, projektiranje, vođenje projekta', '2014 g.', 'Pilot postrojenje u laboratoriju TAPI', 0, 1),
(10, 'slike/zgradarstvo/realizirano/slika10.jpg', 'Skladište intermedijara gotovih proizvoda skladišt', 'Tankvani i bazeni organskih otapala', 'Savski Marof', ' PLIVA HRVATSKA d.o.o.', 'stručni nadzor, projektiranje, vođenje projekata', '2014 g.', 'Adaptacija skladište intermedijara gotovih proizvoda skladište 45D', 0, 1),
(11, 'slike/zgradarstvo/realizirano/slika11.jpg', 'Pumpna stanica pogona SM2', 'Pumpna stanica pogona SM2', 'Savski Marof', ' PLIVA HRVATSKA d.o.o.', 'stručni nadzor, projektiranje', '', 'izgradnja pumpne stanice pogona SM2', 0, 1),
(12, 'slike/zgradarstvo/realizirano/slika12.jpg', 'Rekonstrukcija skladišta gotove robe (SGR)', 'skladišta gotove robe (SGR)', 'Savski Marof', ' PLIVA HRVATSKA d.o.o.', 'stručni nadzor, projektiranje', '2014 g.', 'Rekonstrukcija skladišta gotove robe (SGR) i prostora mikronizacija ', 0, 1),
(13, 'slike/zgradarstvo/realizirano/slika13.jpg', 'Skladište zapaljivih tekučina', 'istraživački laboratorij TAPI', 'Savski Marof', ' PLIVA HRVATSKA d.o.o.', ' stručni nadzor', '2014 g.', 'Skladište zapaljivih tekučina s bazenom za opožarene vode ', 0, 1),
(14, 'slike/zgradarstvo/realizirano/slika14.jpg', 'Skladište VNS', 'skladište VNS', 'Savski Marof', ' PLIVA HRVATSKA d.o.o.', ' projektiranje, vođenje projekta, stručni nadzor', '2013g.', 'Izgradnja skladišta za intermedijare i gotove proizvode azitromicina (Sumamed)', 0, 1),
(15, 'slike/zgradarstvo/realizirano/slika15.jpg', 'Skladište SM1', 'skladište SM1', 'Savski Marof', ' PLIVA HRVATSKA d.o.o.', ' projektiranje, vođenje projekta, stručni nadzor', '2014g.', ' izgradnja novog skladišta za pogon višenamjenske sinteze', 0, 1),
(16, 'slike/zgradarstvo/realizirano/slika16.jpg', 'Pročiščivać', NULL, NULL, NULL, NULL, NULL, NULL, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `zrealiziranieng`
--

CREATE TABLE `zrealiziranieng` (
  `id` int(11) NOT NULL,
  `path` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `naziv` varchar(80) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `objekt` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `lokacija` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `investitor` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `vrstaUsluge` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `vrijemeRadova` varchar(50) COLLATE cp1250_croatian_ci DEFAULT NULL,
  `opis` text COLLATE cp1250_croatian_ci,
  `idGalerija` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=cp1250 COLLATE=cp1250_croatian_ci;

--
-- Dumping data for table `zrealiziranieng`
--

INSERT INTO `zrealiziranieng` (`id`, `path`, `naziv`, `objekt`, `lokacija`, `investitor`, `vrstaUsluge`, `vrijemeRadova`, `opis`, `idGalerija`) VALUES
(1, 'slike/zgradarstvo/realizirano/slika1.jpg', 'Hotels Corinthia', 'Hotel Coorinthia', 'The island of Krk , Baška', 'Glumina banka / Coning', 'Engineering', '1995 g', 'Adaptation of the restaurant , reception , terrace , sanitary facilities , kitchens', 1),
(2, 'slike/zgradarstvo/realizirano/slika2.jpg', 'Sisačka banka', 'Sisačka banka', 'Zagreb , Zvonimir Street', 'Sisačka banka', 'Engineering', '1997g.', 'Adaptation of the Branch and installation works', 1),
(3, 'slike/zgradarstvo/realizirano/slika3.jpg', 'Rastoke Slunj(monument)', 'Cultural monument - Rastoke', 'Slunj, Rastoke', 'Ministarstvo razvitka i obnove RH', 'Engineering', '1998g.', 'Remediation from damage of V. and VI. degree war damages , construction craft and installation works', 1),
(4, 'slike/zgradarstvo/realizirano/slika4.jpg', 'Shopping center Kaufland in Bjelovar', 'Shopping center', 'Bjelovar', 'Kaufland d.o.o.', 'professional supervision', NULL, 'construction of a new shopping center', 1),
(5, 'slike/zgradarstvo/realizirano/slika5.jpg', 'Shopping center Kaufland in Virovitica', 'Shopping center', 'Virovitica', 'Kaufland d.o.o.', 'professional supervision', NULL, 'construction of a new shopping center', 1),
(6, 'slike/zgradarstvo/realizirano/slika6.jpg', 'Adaptation of drive SM1', 'drive SM1', 'Savski Marof', 'PLIVA HRVATSKA d.o.o', 'Design and supervision', '2012.g.', 'design and supervision on the adaptation of laboratory and office space of 1-6 floors ; staging of the energy effective facade', 1),
(7, 'slike/zgradarstvo/realizirano/slika7.jpg', 'Construction and relocation of the new laboratory ', 'Research laboratory TAPI', 'Savski Marof', 'PLIVA HRVATSKA d.o.o', 'design, project management , technical supervision', '2013 g.', 'Relocation and construction of a new laboratory TAPI', 1),
(8, 'slike/zgradarstvo/realizirano/slika8.jpg', 'Recovery and reconstruction of bunds and pools organs', 'Bund and pools of organic solvents', 'Savski Marof', 'PLIVA HRVATSKA d.o.o.', 'supervision, design, project management', NULL, 'Rehabilitation and reconstruction of bunds and pools of organic solvents for drives', 1),
(9, 'slike/zgradarstvo/realizirano/slika9.jpg', 'Pilot plant in laboratory TAPI', 'laboratory TAPI', 'Savski Marof', 'PLIVA HRVATSKA d.o.o.', 'supervision, design, project management', '2014 g.', 'Pilot plant in laboratory TAPI', 1),
(10, 'slike/zgradarstvo/realizirano/slika10.jpg', 'Warehouse intermediates finished products wareho', ' Bund and pools of organic solvents', 'Savski Marof', 'PLIVA HRVATSKA d.o.o.', 'supervision, design, project management', '2014 g.', 'Adaptation of the intermediate storage of finished goods warehouse 45D', 1),
(11, 'slike/zgradarstvo/realizirano/slika11.jpg', 'Pumping station drive SM2', 'Pumping station drive SM2', 'Savski Marof', 'PLIVA HRVATSKA d.o.o.', ' technical supervision , design', NULL, 'construction of pumping stations drive SM2', 1),
(12, 'slike/zgradarstvo/realizirano/slika12.jpg', 'Reconstruction of the warehouse with finished good', 'storage of finished goods ( SGR )', 'Savski Marof', 'PLIVA HRVATSKA d.o.o.', 'technical supervision , design', ' 2014 g.', 'Reconstruction of finished goods ( SGR ) and space micronization', 1),
(13, 'slike/zgradarstvo/realizirano/slika13.jpg', 'Storage of flammable liquids', 'Research laboratory TAPI', 'Savski Marof', 'PLIVA HRVATSKA d.o.o.', 'professional supervision', ' 2014 g.', 'Storage of flammable liquids with a pool for fire-affected water', 1),
(14, 'slike/zgradarstvo/realizirano/slika14.jpg', 'Warehouse VNS', 'Warehouse VNS', 'Savski Marof', 'PLIVA HRVATSKA d.o.o.', 'design, project management , technical supervision', '2013g.', 'Building a warehouse for intermediates and final products of azithromycin ( Sumamed )', 1),
(15, 'slike/zgradarstvo/realizirano/slika15.jpg', 'Warehouse SM1', 'Warehouse SM1', 'Savski Marof', 'PLIVA HRVATSKA d.o.o.', 'design, project management , technical supervision', '2014g.', 'construction of a new warehouse to drive multi-purpose synthesis', 1),
(16, 'slike/zgradarstvo/realizirano/slika16.jpg', 'Purifier', NULL, NULL, NULL, NULL, NULL, NULL, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `energetsko`
--
ALTER TABLE `energetsko`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idZgradarstvo` (`idZgradarstvo`);

--
-- Indexes for table `galerija`
--
ALTER TABLE `galerija`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inadzor`
--
ALTER TABLE `inadzor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infrastruktura`
--
ALTER TABLE `infrastruktura`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iprojektiranje`
--
ALTER TABLE `iprojektiranje`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `irealizirani`
--
ALTER TABLE `irealizirani`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idRealizirani` (`idRealizirani`);

--
-- Indexes for table `irealiziranieng`
--
ALTER TABLE `irealiziranieng`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idGalerija` (`idGalerija`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `novostihr`
--
ALTER TABLE `novostihr`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pocetna`
--
ALTER TABLE `pocetna`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `projekti`
--
ALTER TABLE `projekti`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upravljanje`
--
ALTER TABLE `upravljanje`
  ADD PRIMARY KEY (`idUpravljanje`),
  ADD KEY `idZgradarstvo` (`idZgradarstvo`);

--
-- Indexes for table `vjestacenja`
--
ALTER TABLE `vjestacenja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idZgradarstvo` (`idZgradarstvo`);

--
-- Indexes for table `zgradarstvo`
--
ALTER TABLE `zgradarstvo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `znadzor`
--
ALTER TABLE `znadzor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idZgradarstvo` (`idZgradarstvo`);

--
-- Indexes for table `zprojektiranje`
--
ALTER TABLE `zprojektiranje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idZgradarstvo` (`idZgradarstvo`);

--
-- Indexes for table `zrealizirani`
--
ALTER TABLE `zrealizirani`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idZgradarstvo` (`idZgradarstvo`),
  ADD KEY `idGalerija` (`idGalerija`);

--
-- Indexes for table `zrealiziranieng`
--
ALTER TABLE `zrealiziranieng`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idGalerija` (`idGalerija`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `energetsko`
--
ALTER TABLE `energetsko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `galerija`
--
ALTER TABLE `galerija`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `inadzor`
--
ALTER TABLE `inadzor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `infrastruktura`
--
ALTER TABLE `infrastruktura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `iprojektiranje`
--
ALTER TABLE `iprojektiranje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `irealizirani`
--
ALTER TABLE `irealizirani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `irealiziranieng`
--
ALTER TABLE `irealiziranieng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `novostihr`
--
ALTER TABLE `novostihr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pocetna`
--
ALTER TABLE `pocetna`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `projekti`
--
ALTER TABLE `projekti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `upravljanje`
--
ALTER TABLE `upravljanje`
  MODIFY `idUpravljanje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `vjestacenja`
--
ALTER TABLE `vjestacenja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zgradarstvo`
--
ALTER TABLE `zgradarstvo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `znadzor`
--
ALTER TABLE `znadzor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `zprojektiranje`
--
ALTER TABLE `zprojektiranje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `zrealizirani`
--
ALTER TABLE `zrealizirani`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `zrealiziranieng`
--
ALTER TABLE `zrealiziranieng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `irealizirani`
--
ALTER TABLE `irealizirani`
  ADD CONSTRAINT `irealizirani_ibfk_1` FOREIGN KEY (`idRealizirani`) REFERENCES `galerija` (`id`);

--
-- Constraints for table `irealiziranieng`
--
ALTER TABLE `irealiziranieng`
  ADD CONSTRAINT `irealiziranieng_ibfk_1` FOREIGN KEY (`idGalerija`) REFERENCES `galerija` (`id`);

--
-- Constraints for table `zrealizirani`
--
ALTER TABLE `zrealizirani`
  ADD CONSTRAINT `zrealizirani_ibfk_2` FOREIGN KEY (`idGalerija`) REFERENCES `galerija` (`id`);

--
-- Constraints for table `zrealiziranieng`
--
ALTER TABLE `zrealiziranieng`
  ADD CONSTRAINT `zrealiziranieng_ibfk_1` FOREIGN KEY (`idGalerija`) REFERENCES `galerija` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
