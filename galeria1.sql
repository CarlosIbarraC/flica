-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 50.62.209.18:3306
-- Tiempo de generación: 24-09-2019 a las 17:20:59
-- Versión del servidor: 5.5.51-38.1-log
-- Versión de PHP: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `galeria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`) VALUES
(1, 'Rodillos'),
(2, 'Pinceles'),
(3, 'Accesorios para Aerografo/Pistolas'),
(4, 'Pistolas'),
(5, 'Aerografos'),
(6, 'Cauchos'),
(7, 'Guantes'),
(8, 'Brochas'),
(9, 'Cintas'),
(10, 'Siliconas'),
(11, 'Impermeabilizantes/masilla'),
(12, 'Metros'),
(13, 'Seguridad Industrial'),
(14, 'Espatulas/Llanas'),
(16, 'Varios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_clientes` int(11) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(12) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `nit` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `cliente`, `direccion`, `telefono`, `ciudad`, `nit`) VALUES
(1, 'PEDRO PEREZ', 'Calle 23 # 45-67', '4555555', 'Bogota', 70456897),
(2, 'CARLOS IBARRA', 'car 15 # 119 76', '34567889', 'Bogota', 79067890),
(3, 'PEDRO LOPEZ', 'calle 12 # 34 78 bodega 3', '3127890562- ', 'Medellin', 900567890),
(95, 'ALMACEN', 'Cr 23 # 44 82 sur', '7606450', 'Bogota', 35492582),
(96, 'PABLO PAREDES', 'car 21 # 34- 78', '311118999', 'cali', 900000876),
(97, 'PEPITO PEREZ', 'calle 34 Â· 25-90 barrio estrada', '3456778900', 'bogota', 900678965);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cobros`
--

CREATE TABLE `cobros` (
  `id` int(11) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `factura` int(10) NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `comentario` text NOT NULL,
  `recibo` varchar(5) NOT NULL,
  `fecha` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cobros`
--

INSERT INTO `cobros` (`id`, `cliente`, `factura`, `valor`, `tipo`, `comentario`, `recibo`, `fecha`) VALUES
(41, 'carlos ibarra', 456, '1200000', 'abono', 'saldo 15 dias', '1000', '2019/03/07 h: 04:14:pm'),
(42, 'Roberto Prieto', 2345, '1600000', 'total', 'cheque 23789 colombia', '1003', '2019/04/24 h: 04:30:pm'),
(43, 'Ricardo Paredes', 2346, '1900000', 'abono', '', '1002', '2019/04/24 h: 06:55:pm'),
(44, 'Pepito Perez', 2390, '2500000', 'abono', 'saldo en 20 dias', '1000', '2019/04/25 h: 09:47:am'),
(45, 'Mickey Mouse', 5678, '1000000', 'total', 'enviar pedido', '1000', '2019/04/25 h: 09:50:am'),
(46, 'Pepe Equix', 2367, '2340000', 'total', '', '1000', '2019/05/01 h: 05:47:pm'),
(47, 'Tren Nevado', 4567, '3000000', 'total', 'pago adelantado', '1000', '2019/05/01 h: 05:48:pm'),
(48, 'pedro perez', 5678, '2000000', 'abono', 'saldo a 15 dias', '1000', '2019/05/21 h: 11:27:am'),
(49, 'pedro perez', 5678, '2000000', 'abono', 'saldo a 15 dias', '1000', '2019/05/21 h: 11:27:am'),
(50, 'carlos restrepo', 2345, '7890000', 'abono', 'pago parcial ', '1000', '2019/05/30 h: 03:35:pm'),
(51, 'Armando CortÃ©s', 1253, '125000', 'abono', 'saldo viernes 3 julio', '1000', '2019/05/30 h: 04:42:pm'),
(52, '', 0, '0', '', '', '1000', ''),
(53, 'Pablo Rueda', 7425, '1500000', 'total', 'abono', '1000', '2019/05/30 h: 08:22:pm'),
(54, 'Pablo Cortes', 4567, '5300000', 'abono', 'saldo el viernes 3 de julio', '1000', '2019/05/30 h: 08:38:pm'),
(55, 'Sarita', 456, '5000000', 'abono', 'saldo 15 dias', '1000', '2019/07/24 h: 07:10:pm'),
(56, 'carlos', 2154, '1000000', 'total', 'cancelada efectivo', '1000', '2019/07/24 h: 07:11:pm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `codigo`
--

CREATE TABLE `codigo` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `codigo` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `codigo`
--

INSERT INTO `codigo` (`id_producto`, `nombre`, `codigo`) VALUES
(188, 'RODILLOS PARA PINTURA EPOXICA Ref.1 ', 7705555188),
(189, 'RODILLOS PARA PINTURA EPOXICA Ref.2 ', 7705555189),
(190, 'RODILLOS PARA PINTURA EPOXICA Ref.3 ', 7705555190),
(191, 'RODILLOS PARA PINTURA EPOXICA Ref.4 ', 7705555191),
(192, 'RODILLOS PARA PINTURA EPOXICA Ref.5 ', 7705555192),
(193, 'RODILLOS PARA PINTURA EPOXICA Ref.6 ', 7705555193),
(194, 'RODILLOS PARA PINTURA EPOXICA Ref.7 ', 7705555194),
(195, 'RODILLOS OVEJERO Ref. 1 ', 7705555195),
(196, 'RODILLOS OVEJERO Ref. 2 ', 7705555196),
(197, 'RODILLOS OVEJERO Ref. 3 ', 7705555197),
(198, 'RODILLOS OVEJERO Ref. 4 ', 7705555198),
(199, 'RODILLOS OVEJERO Ref. 5 ', 7705555199),
(200, 'RODILLOS OVEJERO Ref. 6 ', 7705555200),
(201, 'RODILLOS OVEJERO Ref. 7 ', 7705555201),
(202, 'RODILLOS OVEJERO Ref. 8 ', 7705555202),
(211, 'RODILLOS  LINEA ESPUMA Ref. 1  ', 7705555211),
(212, 'RODILLOS  LINEA ESPUMA Ref. 2  ', 7705555212),
(213, 'RODILLOS  LINEA ESPUMA Ref. 3  ', 7705555213),
(214, 'RODILLOS LINEA ESPUMA Ref. 4  ', 7705555214),
(218, 'RODILLOS LINEA PROFESIONAL - FELPA Ref. 1 ', 7705555218),
(219, 'RODILLOS LINEA PROFESIONAL - FELPA Ref. 2 ', 7705555219),
(220, 'RODILLOS LINEA PROFESIONAL - FELPA Ref. 3 ', 7705555220),
(221, 'RODILLOS LINEA PROFESIONAL - FELPA Ref. 4 ', 7705555221),
(222, 'RODILLOS LINEA PROFESIONAL - FELPA Ref. 5 ', 7705555222),
(223, 'RODILLOS LINEA PROFESIONAL - FELPA Ref. 6 ', 7705555223),
(224, 'LINEA DE RODILLOS MASTDER Ref. 902 ', 7705555224),
(225, 'LINEA DE RODILLOS MASTDER Ref. 912 ', 7705555225),
(226, 'LINEA DE RODILLOS MASTDER Ref. 612 ', 7705555226),
(227, 'LINEA DE RODILLOS MASTDER Ref. 212 ', 7705555227),
(228, 'LINEA DE RODILLOS MASTDER Ref. 312 ', 7705555228),
(229, 'RODILLOS EN POLIURETANO Ref. 901 ', 7705555229),
(230, 'RODILLOS EN POLIURETANO Ref. 611 ', 7705555230),
(231, 'RODILLOS EN POLIURETANO Ref. 301 ', 7705555231),
(232, 'RODILLOS EN POLIURETANO Ref. 201 ', 7705555232),
(233, 'REPUESTOS PARA PISTOLA SPRAY N 1 ', 7705555233),
(234, 'N 2Aguja Spray.', 7705555234),
(235, 'REPUESTOS PARA PISTOLA SPRAY N 3 ', 7705555235),
(236, 'REPUESTOS PARA PISTOLA SPRAY N 4 ', 7705555236),
(237, 'REPUESTOS PARA PISTOLA SPRAY N 5 ', 7705555237),
(238, 'REPUESTOS PARA PISTOLA SPRAY N 6 ', 7705555238),
(239, 'REPUESTOS PARA PISTOLA SPRAY N 7 ', 7705555239),
(240, 'REPUESTOS PARA PISTOLA SPRAY N 8 ', 7705555240),
(241, 'REPUESTOS PARA PISTOLA SPRAY N 9 ', 7705555241),
(242, 'REPUESTOS PARA PISTOLA SPRAY N 10 ', 7705555242),
(243, 'REPUESTOS PARA PISTOLA SPRAY N 11 ', 7705555243),
(244, 'REPUESTOS PARA PISTOLA SPRAY N 12 ', 7705555244),
(245, 'REPUESTOS PARA PISTOLA SPRAY N 13 ', 7705555245),
(246, 'REPUESTOS PARA PISTOLA SPRAY N 14 ', 7705555246),
(247, 'REPUESTOS PARA PISTOLA SPRAY N 15 ', 7705555247),
(248, 'REPUESTOS PARA PISTOLA SPRAY N 16 ', 7705555248),
(249, 'REPUESTOS PARA PISTOLA SPRAY N 17 ', 7705555249),
(250, 'REPUESTOS PARA PISTOLA SPRAY N 18 ', 7705555250),
(251, 'REPUESTOS PARA PISTOLA SPRAY N 19 ', 7705555251),
(252, 'N 20Union hembra.', 7705555252),
(253, 'N 21Union macho.', 7705555253),
(254, 'N 22Union manguera.', 7705555254),
(255, 'REPUESTOS PARA PISTOLA SPRAY N 23 ', 7705555255),
(256, 'REPUESTO DE VILBISS N 1 ', 7705555256),
(257, 'REPUESTO DE VILBISS N 2 ', 7705555257),
(258, 'REPUESTO DE VILBISS N 3 ', 7705555258),
(259, 'REPUESTO DE VILBISS N 4 ', 7705555259),
(260, 'REPUESTO DE VILBISS N 5 ', 7705555260),
(261, 'REPUESTO DE VILBISS N 6 ', 7705555261),
(262, 'REPUESTO DE VILBISS N 7 ', 7705555262),
(263, 'REPUESTO DE VILBISS N 8 ', 7705555263),
(264, 'REPUESTO DE VILBISS N 9 ', 7705555264),
(265, 'REPUESTO DE VILBISS N 10 ', 7705555265),
(266, 'BROCHA TIPO PROFESIONAL Ref.1 ', 7705555266),
(267, 'BROCHA TIPO PROFESIONAL Ref.2 ', 7705555267),
(269, 'BROCHA TIPO PROFESIONAL Ref.3 ', 7705555269),
(270, 'BROCHA TIPO PROFESIONAL Ref.4 ', 7705555270),
(271, 'BROCHA TIPO PROFESIONAL Ref.5 ', 7705555271),
(272, 'BROCHA TIPO PROFESIONAL Ref.6 ', 7705555272),
(273, 'BROCHA TIPO PROFESIONAL Ref.7 ', 7705555273),
(274, 'BROCHA TIPO PROFESIONAL Ref.8 ', 7705555274),
(275, 'BROCHA TIPO PROFESIONAL Ref.9 ', 7705555275),
(276, 'BROCHA TIPO PROFESIONAL Ref.10 ', 7705555276),
(277, 'BROCHA MULTIUSOS Ref. 1 ', 7705555277),
(278, 'BROCHA MULTIUSOS Ref. 2 ', 7705555278),
(279, 'BROCHA MULTIUSOS Ref. 3 ', 7705555279),
(280, 'Ref. 4.Brocha multiusos 2 Â½â€', 7705555280),
(281, 'BROCHA MULTIUSOS Ref. 5 ', 7705555281),
(282, 'BROCHA MULTIUSOS Ref. 6 ', 7705555282),
(283, 'BROCHA MULTIUSOS Ref. 7 ', 7705555283),
(284, 'BROCHA MULTIUSOS Ref. 8 ', 7705555284),
(285, 'PINCEL PLANO -  REDONDO N 1 ', 7705555285),
(286, 'PINCEL PLANO -  REDONDO N 2 ', 7705555286),
(287, 'PINCEL PLANO -  REDONDO N 3 ', 7705555287),
(288, 'PINCEL PLANO -  REDONDO N 4 ', 7705555288),
(289, 'PINCEL PLANO -  REDONDO N 5 ', 7705555289),
(290, 'PINCEL PLANO -  REDONDO N 6 ', 7705555290),
(291, 'PINCEL PLANO -  REDONDO N 7 ', 7705555291),
(292, 'PINCEL PLANO -  REDONDO N 8 ', 7705555292),
(293, 'PINCEL PLANO -  REDONDO N 9 ', 7705555293),
(294, 'PINCEL PLANO -  REDONDO N 10 ', 7705555294),
(295, 'PINCEL PLANO -  REDONDO N 11 ', 7705555295),
(296, 'PINCEL PLANO -  REDONDO N 12 ', 7705555296),
(297, 'Ref. 1EspÃ¡tula plÃ¡stica pequeÃ±a', 7705555297),
(298, 'ESPATULA PLASTICA Ref. 2 ', 7705555298),
(299, 'ESPATULA PLASTICA Ref. 3 ', 7705555299),
(300, 'ESPÃTULA METÃLICA Ref.1 ', 7705555300),
(301, 'ESPÃTULA METÃLICA Ref.2 ', 7705555301),
(302, 'ESPÃTULA METÃLICA Ref.3 ', 7705555302),
(303, 'ESPÃTULA METÃLICA Ref.4 ', 7705555303),
(304, 'ESPÃTULA METÃLICA Ref. 5 ', 7705555304),
(305, 'ESPÃTULA METÃLICA Ref. 6 ', 7705555305),
(306, 'ESPÃTULA METÃLICA Ref. 7 ', 7705555306),
(307, 'ESPÃTULA METÃLICA Ref. 8 ', 7705555307),
(308, 'ESPÃTULA METÃLICA Ref. 9 ', 7705555308),
(309, 'ESPÃTULA METÃLICA Ref. 10 ', 7705555309),
(310, 'Kit De Espatula Kit de Espatulas ', 7705555310),
(311, 'ESPATULA METALICA MEZCLADORA Ref.1  ', 7705555311),
(312, 'ESPATULA METALICA MEZCLADORA Ref.2  ', 7705555312),
(313, 'ESPATULA METALICA MEZCLADORA Ref.3  ', 7705555313),
(314, 'ESPATULA METALICA MEZCLADORA Ref.4  ', 7705555314),
(315, 'ESPATULA METALICA MEZCLADORA Ref.5 ', 7705555315),
(316, 'ESPATULA METALICA MEZCLADORA Ref.6 ', 7705555316),
(317, 'CINTA ENMASCARAR CELLUX Ref. 1 ', 7705555317),
(318, 'CINTA ENMASCARAR CELLUX Ref. 2 ', 7705555318),
(319, 'CINTA ENMASCARAR CELLUX Ref. 3 ', 7705555319),
(320, 'CINTA ENMASCARAR CELLUX Ref. 4 ', 7705555320),
(321, 'CINTA ENMASCARAR CELLUX Ref. 5 ', 7705555321),
(322, 'CINTA ENMASCARAR CELLUX Ref. 6 ', 7705555322),
(323, 'CINTA ENMASCARAR SOCO Ref. 1 ', 7705555323),
(324, 'CINTA ENMASCARAR SOCO Ref. 2 ', 7705555324),
(325, 'CINTA ENMASCARAR SOCO Ref. 3 ', 7705555325),
(326, 'CINTA ENMASCARAR SOCO Ref. 4 ', 7705555326),
(327, 'CINTA ENMASCARAR SOCO Ref. 5 ', 7705555327),
(328, 'CINTA ENMASCARAR STARTAPE Ref. 1 ', 7705555328),
(329, 'CINTA ENMASCARAR STARTAPE Ref. 2 ', 7705555329),
(330, 'CINTA ENMASCARAR STARTAPE Ref. 3 ', 7705555330),
(331, 'CINTA ENMASCARAR STARTAPE Ref. 4 ', 7705555331),
(332, 'CINTA ENMASCARAR STARTAPE Ref. 5 ', 7705555332),
(333, 'Ref. 1largo-20 mts', 7705555333),
(334, 'Ref. 2largo-40 mts', 7705555334),
(335, 'Ref. 3largo-100 mts', 7705555335),
(336, 'Ref. 4largo-200 mts', 7705555336),
(337, 'CINTA AISLANTE Ref 1 ', 7705555337),
(338, 'CINTA AISLANTE Ref 2 ', 7705555338),
(339, 'CINTA AISLANTE Ref 3 ', 7705555339),
(340, 'CINTA TEFLON Ref. 1 ', 7705555340),
(341, 'CINTA TEFLON Ref. 2 ', 7705555341),
(342, 'CINTA TEFLON Ref. 3 ', 7705555342),
(343, 'Ref. 419mm  Super', 7705555343),
(344, 'AERÃ“GRAFO W71 RANGER PROFESIONAL w_716 ', 7705555344),
(345, 'AEROGRAFO F75 RANGER Ref.  F75 ', 7705555345),
(346, 'AEROGRAFO F75 USA 600CC Ref. f75 -600 ', 7705555346),
(347, 'AEROGRAFO H887 RANGER Ref. H887 ', 7705555347),
(348, 'Ref. S980BVaso metalico 1000 ml-Boquilla aban', 7705555348),
(349, 'Ref. H200G1Vaso metalico 100ml- Boquilla aban', 7705555349),
(350, 'Ref. H200G2Vaso plastico 100ml- Boquilla aban', 7705555350),
(351, 'MINI PISTOLA DE GRAVEDAD F2 Ref. F2 ', 7705555351),
(352, 'Ref . PS-8 Ranger58 102 Psi - Maxima presion ', 7705555352),
(353, 'PISTOLA DE BAJA FLICA Ref. 472A Flica ', 7705555353),
(354, 'Ref. Hopex 472 A1Pistola De Baja presiÃ³n 100', 7705555354),
(355, 'PISTOLA MC CASTI Ref. Pistola Mc Casti ', 7705555355),
(356, 'Ref.Sprayir GoldEs una pistola de baja presio', 7705555356),
(357, 'VASOS DE PISTOLAS Y AEROGRAFOS Ref. Repuestos', 7705555357),
(358, 'GUANTES DE CAUCHO Ref. 1 ', 7705555358),
(359, 'GUANTE CARNAZA Ref 1 ', 7705555359),
(360, 'GUANTE DE NITRILO Ref. 1 ', 7705555360),
(361, 'GUANTE DE NITRILO Ref. 2 ', 7705555361),
(362, 'GUANTE DE NITRILO Ref. 3 ', 7705555362),
(363, 'GUANTE DE NITRILO Ref.4 ', 7705555363),
(364, 'Ref 1Guante en vinilo para usos Medicos y Odo', 7705555364),
(366, 'GUANTES ESPECIALES Ref 1 ', 7705555366),
(367, 'GUANTES ESPECIALES Ref 2 ', 7705555367),
(368, 'GUANTES ESPECIALES Ref 3 ', 7705555368),
(369, 'GUANTES ESPECIALES Ref 4 ', 7705555369),
(370, 'GUANTES ESPECIALES Ref SR 913 ', 7705555370),
(371, 'GUANTES ESPECIALES Ref SR 903 ', 7705555371),
(372, 'GUANTES ESPECIALES Ref SR 1601 ', 7705555372),
(373, 'Ref. 1Llana Standar JAMAKA', 7705555373),
(374, 'Ref. 2Llana Veneciana JAMAKA', 7705555374),
(375, 'Ref. 3Llana HOPEX.', 7705555375),
(376, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL Ref 1 ', 7705555376),
(377, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL Ref 2 ', 7705555377),
(378, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL Ref 3 ', 7705555378),
(379, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL Ref 4 ', 7705555379),
(380, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL Ref 5 ', 7705555380),
(381, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL Ref 6 ', 7705555381),
(382, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL Ref 7 ', 7705555382),
(383, 'EMPAQUE PARA PISTOLA Ref. 1 ', 7705555383),
(384, 'EMPAQUE PARA PISTOLA Ref. 2 ', 7705555384),
(385, 'EMPAQUE PARA PISTOLA Ref. 3 ', 7705555385),
(386, 'EMPAQUE PARA PISTOLA Ref. 4 ', 7705555386),
(387, 'EMPAQUE PARA PISTOLA Ref. 5 ', 7705555387),
(388, 'EMPAQUE PARA PISTOLA Ref. 6 ', 7705555388),
(389, 'EMPAQUE PARA PISTOLA Ref. 7 ', 7705555389),
(390, 'Ref. 8Rosca PlÃ¡stica', 7705555390),
(391, 'Ref. Silicona SpraySilicona en tres presentac', 7705555391),
(392, 'SILICONA EN TUBO. Ref 1 ', 7705555392),
(393, 'CAUCHO LIJADOR Ref 1 ', 7705555393),
(394, 'CAUCHO LIJADOR Ref 2 ', 7705555394),
(395, 'PEGANTE BOX GYD Ref 1 ', 7705555395),
(396, 'PEGANTE BOX GYD Ref 2 ', 7705555396),
(397, 'PEGANTE BOX GYD Ref 3 ', 7705555397),
(398, 'PEGANTE BOX GYD Ref 4 ', 7705555398),
(399, 'PEGANTE BOX GYD Ref 5 ', 7705555399),
(400, 'FLEXOMETRO Ref . 1 ', 7705555400),
(401, 'FLEXOMETRO Ref . 2 ', 7705555401),
(402, 'FLEXOMETRO Ref . 3 ', 7705555402),
(403, 'Ref. 1Veteador en Caucho Ultra mini', 7705555403),
(404, 'VETEADORES Ref. 2 ', 7705555404),
(405, 'BISTURIS Ref. 1 ', 7705555405),
(406, 'BISTURIS Ref. 2 ', 7705555406),
(407, 'Ref. 3Bisturi Metalico Grande.', 7705555407),
(408, 'BISTURIS Ref. 4 ', 7705555408),
(409, 'PISTOLAS DE SILICONA Ref. 1 ', 7705555409),
(410, 'PISTOLAS DE SILICONA Ref. 2 ', 7705555410),
(411, 'Ref. 3Pistola de Silicona tipo Media Caja', 7705555411),
(412, 'SUPERBONDER Ref 1 ', 7705555412),
(413, 'Ref. 1Balde Plastico Mastder.', 7705555413),
(414, 'BALDES Ref. 2 ', 7705555414),
(416, 'GUANTES PEPAS Ref. 1 ', 7705555416),
(417, 'GUANTES PEPAS Ref. 2 ', 7705555417),
(418, 'DISCOS DE CORTE Ref. 1 ', 7705555418),
(419, 'DISCOS DE CORTE Ref. 2 ', 7705555419),
(420, 'DISCOS DE CORTE Ref. 3 ', 7705555420),
(421, 'PISTOLA PETROLIZADORA. Ref. DO-10-J RANGER ', 7705555421),
(422, 'PISTOLA PETROLIZADORA. Ref. DO-10-HOPEX ', 7705555422),
(423, 'ESQUINERO Y CAUCHO GUIA Ref. 1 ', 7705555423),
(424, 'ESQUINERO Y CAUCHO GUIA Ref. 2 ', 7705555424),
(425, 'RESPIRADOR Y GAFAS Ref. 1 ', 7705555425),
(426, 'RESPIRADOR Y GAFAS Ref. Doble TG RANGER. ', 7705555426),
(427, 'RESPIRADOR Y GAFAS Ref. 2. ', 7705555427),
(428, 'ACCESORIOS LIMPIEZA. Ref. 1 ', 7705555428),
(429, 'ACCESORIOS LIMPIEZA. Ref. 2 ', 7705555429),
(430, 'Ref. 3Bayetilla en Rojo y Blanco.', 7705555430),
(431, 'CATALIZADOR CATALIZADOR ', 7705555431),
(434, 'Rodillo Imagen Rodillo Imagen N-1 ', 7705555434),
(441, 'Cinta Aislante Celux Ref . 1 ', 7705555441),
(442, 'Cinta Aislante Celux Ref . 2 ', 7705555442),
(443, 'SQ PulituraEmulsion para uso automotriz en pr', 7705555443),
(444, 'AEROGRAFO GOLDEN F75 Aerografo Golden F-75 ', 7705555444),
(445, 'AEROGRAFO GOLDEN F75 Aerografo Golden F-75 ', 7705555445),
(446, 'AEROGRAFO H 2000.Profesional con tanque plast', 7705555446),
(447, 'ESPATULA HOPEX Ref 1 ', 7705555447),
(448, 'ESPATULA HOPEX Ref 1.1/2\" ', 7705555448),
(449, 'ESPATULA HOPEX Ref 2\" ', 7705555449),
(450, 'ESPATULA HOPEX Ref 2.1/2\" ', 7705555450),
(451, 'ESPATULA HOPEX Ref 3\" ', 7705555451),
(452, 'ESPATULA HOPEX Ref 4\" ', 7705555452),
(453, 'ESPATULA HOPEX Ref 5\" ', 7705555453),
(454, 'ESPATULA HOPEX Ref 6\" ', 7705555454),
(472, 'BROCHAS FLICA  Ref 1 ', 7705555472),
(473, 'BROCHAS FLICA  Ref 2 ', 7705555473),
(474, 'BROCHAS FLICA  Ref 3 ', 7705555474),
(475, 'BROCHAS FLICA  Ref 4 ', 7705555475),
(476, 'BROCHAS FLICA  Ref 5 ', 7705555476),
(477, 'BROCHAS FLICA  Ref 6 ', 7705555477),
(479, 'prueba-flica ref 456 ', 7705555479),
(480, 'prueba-flica ref 457 ', 7705555480),
(481, 'prueba 2 ref 1 ', 7705555481),
(483, 'prueba ref 1 ', 7705555483),
(484, 'Rodillo Linea Verde Ref # 1 ', 7705555484),
(485, 'Rodillo Linea Verde Ref # 2 ', 7705555485),
(486, 'Rodillo Linea Verde Ref # 3 ', 7705555486),
(487, 'Rodillo Linea Verde Ref # 4 ', 7705555487),
(488, 'Rodillo Linea Verde Ref # 5 ', 7705555488),
(489, 'Rodillo Linea Verde Ref # 6 ', 7705555489),
(490, 'Rodillo Linea Verde Ref # 7 ', 7705555490),
(491, 'Rodillo Linea Verde Ref # 8 ', 7705555491),
(492, 'RODILLO EN ESPUMA Ref # 1 ', 7705555492),
(493, 'RODILLO EN ESPUMA Ref # 2 ', 7705555493),
(494, 'RODILLO EN ESPUMA Ref # 3 ', 7705555494),
(495, 'RODILLO EN ESPUMA Ref # 4 ', 7705555495),
(496, 'RODILLO LINEA ECONOMICA Ref # 1 ', 7705555496),
(497, 'RODILLO LINEA ECONOMICA Ref # 2 ', 7705555497),
(498, 'RODILLO LINEA ECONOMICA Ref # 3 ', 7705555498),
(499, 'RODILLO PROFESIONAL FELPA ULTRA Ref # 1 ', 7705555499),
(500, 'RODILLO PROFESIONAL FELPA ULTRA Ref # 2 ', 7705555500),
(501, 'RODILLO PROFESIONAL FELPA ULTRA Ref # 3 ', 7705555501),
(503, 'RODILLO PROFESIONAL FELPA ULTRA Ref # 5 ', 7705555503),
(504, 'RODILLO PROFESIONAL FELPA ULTRA Ref # 6 ', 7705555504),
(505, 'LINEA DE RODILLOS MASTDER Ref. 112 ', 7705555505),
(508, 'xxxx ref # 1 ', 7705555508),
(509, 'Rodillos Especiales. Ref # 1 ', 7705555509),
(510, 'Rodillos Especiales. Ref # 2 ', 7705555510),
(511, 'Rodillos Especiales. Ref # 3 ', 7705555511),
(512, 'Ref # 4Rodillo esferico en felpa Ovejera', 7705555512),
(513, 'Rodillos Especiales. Ref # 5 ', 7705555513),
(514, 'Rodillos Especiales. Ref # 6 ', 7705555514),
(515, 'TAPA BOCAS Ref # 1 ', 7705555515),
(516, 'Llana PlÃ¡stica Ref # 1 ', 7705555516),
(517, 'VETEADORES.\r\n Ref. 3 ', 7705555517),
(518, 'ESPATULA HOPEX Ref 8 ', 7705555518),
(519, 'VETEADORES Ref # 1 ', 7705555519),
(520, 'VETEADORES Ref # 2 ', 7705555520),
(521, 'VETEADORES Ref # 3 ', 7705555521),
(523, 'BROCHAS HOPEX Ref # 1 ', 7705555523),
(524, 'BROCHAS HOPEX Ref # 2 ', 7705555524),
(525, 'BROCHAS HOPEX Ref # 3 ', 7705555525),
(526, 'BROCHAS HOPEX Ref # 4 ', 7705555526),
(527, 'BROCHAS HOPEX Ref # 5 ', 7705555527),
(528, 'BROCHAS HOPEX Ref # 6 ', 7705555528),
(529, 'BROCHAS HOPEX Ref # 7 ', 7705555529),
(530, 'BROCHAS HOPEX Ref # 8 ', 7705555530),
(531, 'AEROGRAFO W-71 G -400 Ref # W-71 G -400 ', 7705555531),
(532, 'AEROGRAFO W-71 G-600 Ref # W-71 G - 600 ', 7705555532),
(533, 'AEROGRAFO Q-S 1104 GOLDEN Ref # Aerografo Q-S', 7705555533),
(534, 'CINTA ENMASCARAR 3M Ref # 1 ', 7705555534),
(535, 'CINTA ENMASCARAR 3M Ref # 2 ', 7705555535),
(536, 'CINTA ENMASCARAR 3M Ref # 3 ', 7705555536),
(537, 'DESTAPA CUÃ‘ETE Ref # 1 ', 7705555537),
(538, 'CUBETA DE PINTURA. Ref # 1 ', 7705555538),
(539, 'MASILLA CONTINENTAL Ref # 1 ', 7705555539),
(540, 'GUANTES PEPAS DOBLE CARA Pepas doble cara ', 7705555540),
(541, 'CINTA ENMASCARAR 3M Ref # 4 ', 7705555541),
(542, 'Ref 1Cinta de 12 mm x 8 mts espesor 0.075mm c', 7705555542),
(543, 'Ref 2Cinta de 19 mm x 15 mts espesor 0.2mm ca', 7705555543),
(544, 'MASILLA PLASTICA PLASTI-FLEX Ref 1 ', 7705555544),
(545, 'MASILLA PLASTICA PLASTI-FLEX Ref 2 ', 7705555545),
(546, 'MASILLA PLASTICA PLASTI-FLEX Ref 3 ', 7705555546),
(549, 'Ref 1Destapa cuÃ±ete plÃ¡stico de alta resist', 7705555549),
(550, 'DESTAPA CUÃ‘ETE Ref 1 ', 7705555550);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `foto`
--

CREATE TABLE `foto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `texto` text NOT NULL,
  `categoria` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `foto`
--

INSERT INTO `foto` (`id`, `titulo`, `imagen`, `texto`, `categoria`) VALUES
(104, 'RODILLOS PARA PINTURA EPOXICA', 'rodillo-epoxico-1.jpg', 'De alta durabilidad y resistencia. Este rodillo es de uso industrial y su calidad permite una alta exigencia al momento de  aplicaciÃ³n de la pintura.<br> \r\nPuede ser utilizado en:<br>\r\nâ€¢ Estructuras metÃ¡licas en general.<br>\r\nâ€¢ Interior y exterior de estanques.<br>\r\nâ€¢ Pisos y muros.<br>\r\nâ€¢ Interiores de piscinas.<br>\r\nâ€¢ Instalaciones sanitarias.<br>\r\nâ€¢ Plantas de alimentos y bebidas.<br>', 'Rodillos'),
(105, 'RODILLOS OVEJERO', 'rodillo-ovejero.jpg', 'Apto para aplicar pinturas  (esmaltes, vinilos) alta durabilidad en su uso. Resistente a los solventes.<br> \r\nRodillos elaborados en felpa ovejera 100% industria colombiana ', 'Rodillos'),
(106, 'RODILLO EN ESPUMA', 'rodillo-espuma.jpg', 'Rodillo en espuma de alta densidad para trabajos de calidad.', 'Rodillos'),
(107, 'RODILLO PROFESIONAL FELPA ULTRA', 'rodillo profesional.jpg', 'Apto para aplicar pinturas  (esmaltes, vinilos) ,gran duraciÃ³n trabajo pesado.', 'Rodillos'),
(108, 'RODILLO LINEA VERDE.', 'rodillo linea verde.jpg', 'Rodillo de felpa Industrial para trabajo standar con excelente acabado.', 'Rodillos'),
(110, 'LINEA DE RODILLOS MASTDER', 'rodillo-master.jpg', 'Indicado para la aplicacion de  pinturas vinilicas ,  poliester, latex, aceites etc.<br> Utilizado en diferentes superficies, este rodillo cuenta  con materias primas de primera calidad, tecnologia industrial y un meticuloso trabajo artesanal.', 'Rodillos'),
(112, 'REPUESTOS PARA PISTOLA SPRAY', 'repuestos pistola.jpg', 'Repuestos para pistola spray  y sagola. Elaborados en 12L 14 y bronce, con el fin de cubrir en un alto margen a los requerimientos  del  pintor y de igual manera satisfacer sus necesidades.', 'Accesorios para Aerografo/Pistolas'),
(113, 'REPUESTO DE VILBISS', 'VASOS PISTOLA â€“ AERÃ“GRAFOS.jpg', 'Repuestos para pistola  de vilbiss.<br> Elaborados en acero y bronce, con el fin de cubrir en un alto margen las necesidades del  pintor y de igual manera satisfacer sus necesidades. ', 'Accesorios para Aerografo/Pistolas'),
(114, 'BROCHA TIPO PROFESIONAL JAMAKA', 'BROCHA-PROFESIONAL.jpg', 'Brocha tipo profesional de alta calidad, diseñada con el fin de cumplir las exigencias del pintor profesional y personas del común.<br>\r\nEstán diseñada con cerdas de pelo natural importadas y seleccionadas.<br> La cerda natural da durabilidad y calidad en la aplicación de la pintura. ', 'Brochas'),
(115, 'BROCHA MULTIUSOS JAMAKA', 'BROCHA-MULTIUSOS.jpg', 'Diseñada para todos los usos y comodidades para personas que utilizan una brocha para trabajos de poco tiempo, y menos durabilidad.<br> Fabricada con cerdas naturales de calidad y con un mango económico (no macizo).', 'Brochas'),
(116, 'PINCEL PLANO -  REDONDO', 'PINCELES.jpg', 'CARACTERISTICAS<br>\r\nâ€¢ Haz de Pelo: pelo natural <br>\r\nâ€¢ Virola: conecta el mango con el pelo.<br>\r\nâ€¢ Mango: es de madera laqueada para protegerlo del agua y los solventes.<br> \r\nEstos pinceles son recomendables para la pintura tradicional, especialmente en tÃ©cnicas finas como la acuarela y el Ã³leo.', 'Pinceles'),
(117, 'ESPATULA PLASTICA', 'ESPATULA-PLASTICA.jpg', 'Espátula plástica con gran variedad de usos', 'Espatulas/Llanas'),
(118, 'ESPATULA METALICA', 'ESPATULA-METALICA.jpg', 'Nuestra industria le ofrece un tipo de espÃ¡tula metÃ¡lica flexible, con materiales antioxidantes para no manchar su trabajo y para mayor durabilidad. Es una espÃ¡tula con flexibilidad adecuada para la aplicaciÃ³n de masillas plÃ¡sticas para Ã¡rea automotriz, estucos plÃ¡sticos utilizados en  decoraciÃ³n de interiores.', 'Espatulas/Llanas'),
(119, 'Kit De Espatula', 'ESPATULA-METALICA-RECT.jpg', 'DiseÃ±adas para ayudar a la aplicaciÃ³n de la masilla haciendo una aplicaciÃ³n tÃ©cnica.<br> Los diferentes tamaÃ±os de espÃ¡tulas flexibles dan terminados de alta calidad.', 'Espatulas/Llanas'),
(120, 'ESPATULA METALICA MEZCLADORA', 'ESPATULA-METALICA-MEZCLADORA.jpg', 'Es usada en la mezcla de  todo tipo de pinturas, como una herramienta funcional y eficaz. <br>\r\nNuestro portafolio ofrece una gran variedad de espÃ¡tulas metÃ¡licas, diseÃ±adas para mezclar desde cuÃ±etes hasta octavos de pintura.<br>\r\nâ€¢ Hoja. Elaborada en acero inoxidable, de fÃ¡cil uso y gran durabilidad ', 'Espatulas/Llanas'),
(121, 'CINTA ENMASCARAR CELLUX', 'CINTA-ENMASCARAR.jpg', 'Cinta de enmascarar de papel cresponado saturado. Resistente a la rotura, humedad, solvente y aceites. <br>\r\nAdhesivo acrÃ­lico de alta adhesiÃ³n<br>\r\nRecomendada como cinta de protecciÃ³n de superficies, en la industria de refrigeraciÃ³n, elÃ©ctrica, laboratorio, para demarcar muestras.<br>\r\nEspesor:  120 a 130 micras\r\nCohesion: >24 horas', 'Cintas'),
(122, 'CINTA ENMASCARAR SOCO', 'CINTA ENMASCARAR SOCO.jpg', 'Cinta con base en papel crepado crema, de alta confortabilidad y resistencia al rasgado, resistente a temperaturas y condiciones normales.<br>\r\nBuena adherencia a la mayoria de superficies, alta fuerza de retencion.<br> Uso multipropositos.<br> Ideal en trabajos de artes graficas y arquitectura, fijacion de planos, maquetas y pintura arquitectonica.<br>\r\n No resistente a los solventes.', 'Cintas'),
(123, 'CINTA ENMASCARAR STARTAPE', 'CINTA ENMASCARAR STARTAPE.jpg', ' Buena adherencia a la mayorÃ­a de superficies, alta fuerza de retenciÃ³n.<br> Uso multipropÃ³sitos.<br> Ideal en trabajos de artes grÃ¡ficas y arquitectura, fijaciÃ³n de planos, maquetas y pintura arquitectÃ³nica.<br>\r\n No resistente a los solventes.', 'Cintas'),
(124, 'CINTA EMPAQUE CELLUX', 'CINTA EMPAQUE CELLUX.jpg', ' â€¢ Reforzadas para resistir desgarres\r\nY grietas.<br>\r\nâ€¢ Surtido en adhesiv hot melt o adhesivo acrÃ­lico en transparente o color habano.<br>\r\nEspesor: 0.09 mm', 'Cintas'),
(126, 'CINTA TEFLON', 'CINTA TEFLON.jpg', 'ProtecciÃ³n contra la oxidaciÃ³n \r\nen acoples  y uniones.<br>\r\nâ€¢ 100% resistente al agua.<br>\r\nâ€¢ Resistencia a los rayos UV.<br>\r\nâ€¢ Responde de manera mÃ¡s eficiente a condiciones de\r\nelongaciÃ³n y tensiÃ³n.', 'Cintas'),
(127, 'AERÃ“GRAFO W71 RANGER PROFESIONAL', 'aerografo w 71.jpg', 'â€¢ Calidad profesional y excelente pulverizaciÃ³n.<br>\r\nâ€¢ Aguja y boquilla en acero inoxidable.<br>\r\nâ€¢ Destape y lavado de la boquilla convenientes.<br>\r\nâ€¢ Control de patrones completamente ajustables.<br>', 'Aerografos'),
(128, 'AEROGRAFO F75 RANGER', 'AEROGRAFO F75 RANGER.jpg', 'Pistola Pulverizadora de alta Calidad', 'Aerografos'),
(129, 'AEROGRAFO F75 USA 600CC', 'AEROGRAFO F75 USA 600CC.jpg', 'Aerografo pulverizador de alta Calidad', 'Aerografos'),
(130, 'AEROGRAFO H887 RANGER', 'AEROGRAFO H887 RANGER.jpg', 'Aerografo de gran versatilidad', 'Aerografos'),
(131, 'AEROGRAFO S980B HOPEX', 'AEROGRAFO S980B HOPEX.jpg', 'Unidad de Trabajo con vaso Grande', 'Aerografos'),
(132, 'AEROGRAFO H200G1', 'AEROGRAFO H200G1.jpg', 'Aerografo metálico para Trabajo', 'Aerografos'),
(133, 'MINI PISTOLA DE GRAVEDAD F2', 'MINI PISTOLA DE GRAVEDAD.jpg', 'â€¢ Para trabajos profesionales con gran calidad .<br>\r\nâ€¢ Posee una funciÃ³n de pulverizaciÃ³n perfecta.<br>\r\nâ€¢ Peso liviano y opera fÃ¡cilmente.<br>\r\nâ€¢ Principalmente usada para Ã¡reas pequeÃ±as.<br> ', 'Aerografos'),
(134, 'PISTOLA SPRAYIR GOLD', 'PISTOLA SPRAYIR GOLD.jpg', 'Es una pistola de baja presiÃ³n que se puede adaptar a cualquier tipo de compresor; bajo consumo de aire y vaso en aluminio reforzado para mayor durabilidad.', 'Pistolas'),
(135, 'PISTOLA DE BAJA FLICA', 'PISTOLA DE BAJA FLICA.jpg', 'Pistola para Trabajo pesado de gran versatilidad', 'Pistolas'),
(137, 'PISTOLA MC CASTI', 'PISTOLA MC CASTI.jpg', 'Pistola para pintar<br>\r\nPistola de spray en una sola pieza, con vaso metÃ¡lico de mayor durabilidad.<br>\r\nMaterial	Aluminio<br>\r\nUso	Para aplicaciÃ³n de pintura y recubrimientos.<br>\r\nNo exceder las 50 libras de presiÃ³n', 'Pistolas'),
(138, 'PISTOLA PARA BODY  SHOOT PS-8 RANGER', 'PISTOLA PARA BODY SHOOT PS-8 RANGER.jpg', 'Uso body Shoot<br>\r\n\r\n Presion recomendada 58 102 Psi <br>\r\n\r\n Maxima presion 130 Psi', 'Pistolas'),
(139, 'VASOS DE PISTOLAS Y AEROGRAFOS', 'VASOS PISTOLA â€“ AERÃ“GRAFOS.jpg', 'Vasos para Pistolas y Aerografos .<br>\r\nRepuestos Aer..h2000.<br>\r\nRepuestos W 71. <br>\r\nRepuestos W 77.', 'Aerografos'),
(140, 'GUANTES DE CAUCHO', 'GUANTES DE CAUCHO.jpg', 'â€¢ Forma anatómica.<BR>\r\nâ€¢ Antideslizantes.<BR>\r\nâ€¢ Resistentes al uso.<BR>\r\nâ€¢ Látex 100% natural.<BR>\r\nâ€¢ Satinados suaves de calzar.<BR> ', 'Guantes'),
(141, 'GUANTE CARNAZA', 'GUANTE CARNAZA.jpg', 'Ideal para trabajos de corte de lÃ¡mina, manejo de filos, soldadores, operadores, fundiciones, agricultores, bodegueros, torneros, electricistas, supervisores, entre otras. ', 'Guantes'),
(142, 'GUANTE DE NITRILO', 'GUANTE DE NITRILO.jpg', 'â€¢ LÃ¡tex sintÃ©tico de gran resistencia quÃ­mica.<br>\r\nâ€¢ Flexible y adecuado a todo tipo de pieles.<br>\r\nâ€¢ AntialÃ©rgico.<br>\r\nLos guantes de nitrilo suponen una excelente alternativa al lÃ¡tex normal ya que proporcionan una barrera de protecciÃ³n ante agentes infecciosos y productos quÃ­micos.<br> \r\n', 'Guantes'),
(144, 'GUANTES ESPECIALES', 'GUANTES DE POLIURETAN.jpg', 'Diferentes tipos de guantes para todo tipo de trabajo Industrial', 'Guantes'),
(145, 'LLANAS METALICAS', 'LLANAS METALICAS.jpg', 'Las llanas metÃ¡licas estÃ¡n hechas de una lÃ¡mina en acero inoxidable para estucos venecianos y otros. <br>Esta lÃ¡mina no contamina los colores cuando se estÃ© trabajando en especial el color blanco.', 'Espatulas/Llanas'),
(146, 'IMPERMEABILIZANTES FLICACRYL', 'IMPERMEABILIZANTES.jpg', 'Es un recubrimiento impermeabilizante  automotriz  a base de resinas  acrÃ­licas de excelente elasticidad, adherencia, cubrimiento y protecciÃ³n anticorrosiva.', 'Impermeabilizantes/masilla'),
(147, 'EMPAQUE PARA PISTOLA', 'LÃNEA DE EMPAQUE PARA PISTOLA.jpg', 'Empaques para los diferentes tipos de pistolas.', 'Accesorios para Aerografo/Pistolas'),
(148, 'SILICONAS SQ SPRAY.', 'SILICONAS SQ SPRAY.jpg', 'Es un producto versÃ¡til, Ãºtil tanto para el cuidado y mantenimiento de su vehÃ­culo como en el hogar.<br> Por su alto contenido en silicona.<br>\r\nLimpia, protege y lubrica a la vez que proporciona el brillo. <br>Utilizado en:<br> FÃ³rmica, metales, vinilos, lonas, tableros de auto, etc.', 'Siliconas'),
(150, 'CAUCHO LIJADOR', 'CAUCHO LIJADOR.jpg', 'Caucho para lijado profesional en Talleres Automotrices- CarpinterÃ­as-Fibra de Vidrio-ConstrucciÃ³n.', 'Cauchos'),
(152, 'FLEXOMETRO', 'FLEXOMETRO.jpg', 'Flexometros para trabajo en tres referencias', 'Metros'),
(154, 'BISTURIS', 'BISTURI.jpg', 'Bisturis de cuchillas intercambiables para trabajo liviano y pesado ', 'Varios'),
(155, 'PISTOLAS DE SILICONA', 'PISTOLAS DE SILICONA.jpg', 'Tres tipos de Pistolas para sus tubos de silicona de acuerdo al trabajo.', 'Siliconas'),
(157, 'BALDES', 'BALDES.jpg', 'Balde de Caucho para uso pesado- construccion', 'Cauchos'),
(159, 'GUANTES PEPAS', 'GUANTES PEPAS.jpg', 'Guante de Pepas para Agarre .', 'Guantes'),
(160, 'DISCOS DE CORTE', 'DISCOS DE CORTE.jpg', 'Discos para pulidora y sierra', 'Varios'),
(161, 'PISTOLA PETROLIZADORA.', 'PISTOLA PETROLIZADORA.jpg', 'Pistola para aplicacion de productos de limpieza por asperciÃ³n.', 'Pistolas'),
(163, 'RESPIRADOR Y GAFAS', 'RESPIRADOR Y GAFAS.jpg', 'Respirador y gafas para trabajo Industrial.', 'Seguridad Industrial'),
(172, 'Cinta Aislante Celux', 'celux.jpg', 'Cinta Aislante de gran calidad para uso domestico o industrial.', 'Cintas'),
(173, 'SQ PULITURA', 'SQ POLITURA.jpg', 'Producto Profesional para el pulido de Automoviles', 'Impermeabilizantes/masilla'),
(174, 'AEROGRAFO GOLDEN F75', 'AEROGRAFO F-75 GOLDEN.jpg', 'Aerografo profesional para uso industrial de gran versatilidad y manejo.', 'Aerografos'),
(175, 'AEROGRAFO H 2000', 'aerografo h 2000.jpg', 'Aerografo profesional de gran versatilidad con tanque plÃ¡stico y accesorios.', 'Aerografos'),
(176, 'ESPATULA HOPEX', 'espatulaHpx.jpg', 'EspÃ¡tula de aplicaciÃ³n en acero inoxidable de alta calidad para trabajo pesado en 8 tamaÃ±os .', 'Espatulas/Llanas'),
(197, 'BROCHAS FLICA ', 'brochas flica E.jpg', 'Brochas de calidad con excelente precio.mango plÃ¡stico elaborada en 6 referencias (ver Listado) ', 'Brochas'),
(204, 'RODILLO LINEA ECONOMICA', 'rodillos linea economica.jpg', 'Rodillos para trabajos ocasionales de excelente precio y calidad justa.', 'Rodillos'),
(207, 'Rodillos Especiales.', 'RodillosVarios.jpg', 'Rodillos para usos especiales , texturizados y tipo globo para tejas.', 'Rodillos'),
(208, 'TAPA BOCAS', 'tapabocas.jpg', 'Tapa bocas de uso general, para dotaciÃ³n industrial.', 'Seguridad Industrial'),
(209, 'Llana PlÃ¡stica', 'llana-plastica.jpg', 'Llama en platico rÃ­gido , con un excelente precio y acabado. ', 'Espatulas/Llanas'),
(210, 'VETEADORES', 'VETEADORES.jpg', 'Caucho de alta densidad para la formacion de vetas decorativas en sus acabados.', 'Cauchos'),
(212, 'BROCHAS HOPEX', 'Brochas Hopex.jpg', 'Brochas de excelente calidad y alta duracion ', 'Brochas'),
(213, 'AEROGRAFO W-71 G -400', 'AEROGRAFO W-71-G-400.jpg', 'Excelente AEROGRAFO W-71 G DE 400 cc para trabajo profesional', 'Aerografos'),
(214, 'AEROGRAFO W-71 G-600', 'AEROGRAFO W-71-G-600.jpg', 'Excelente Aerografo de trabajo profesional con una capacidad de 600cc.', 'Aerografos'),
(215, 'AEROGRAFO Q-S 1104 GOLDEN', 'Aerografo Q-S-1104 G.jpg', 'Aerografo profesional para trabajo pesado.', 'Aerografos'),
(216, 'CINTA ENMASCARAR 3M', 'cinta enmascarar 3m.jpg', 'La mejor cinta del mercado, con garantia total', 'Cintas'),
(218, 'CUBETA DE PINTURA.', 'CUBETA.jpg', 'Cubetya plastica para comodidad y maximizar el uso de la pintura.', 'Varios'),
(219, 'REPUESTOS DE VILBISS', 'REPUESTOS-DE VILBISS.jpg', 'Repuestos para la Marca D Vilbiss.', 'Accesorios para Aerografo/Pistolas'),
(220, 'MASILLA CONTINENTAL', 'Masilla-continental.jpg', 'Excelente masilla para trabajo automotiz', 'Impermeabilizantes/masilla'),
(221, 'GUANTES PEPAS DOBLE CARA', 'GUANTES PEPAS DOBLE CARA.jpg', 'Guante de trabajo con pepas en ambas caras', 'Guantes'),
(223, 'CINTA AQUAVID', 'Cinta Aquavid.jpg', 'Cinta teflon profesional en dos presentaciones', 'Cintas'),
(224, 'MASILLA PLASTICA PLASTI-FLEX', 'plastiflex.jpg', 'Masilla extrafina Plasti-flex tipo 1 premium, fabricada con productos de poliester y poliuretano', 'Impermeabilizantes/masilla'),
(228, 'DESTAPA CUÃ‘ETE', 'DESTAPA CUÃ‘ETE.jpg', 'Destapa cuÃ±etes de plastico de alta resistencia', 'Varios');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `numeroremision`
--

CREATE TABLE `numeroremision` (
  `remision` int(8) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `numeroremision`
--

INSERT INTO `numeroremision` (`remision`, `cliente`, `fecha`) VALUES
(1, 'ALMACEN', '2019-05-30 16:11:48'),
(2, 'CARLOS IBARRA', '2019-05-30 16:13:39'),
(3, 'PEDRO LOPEZ', '2019-05-30 16:15:18'),
(4, 'PEDRO PEREZ', '2019-05-30 16:17:34'),
(5, 'PABLO PAREDES', '2019-05-30 16:19:22'),
(6, 'CARLOS IBARRA', '2019-05-30 16:21:03'),
(7, 'ALMACEN', '2019-05-30 16:22:44'),
(8, 'PABLO PAREDES', '2019-05-30 16:24:08'),
(9, 'CARLOS IBARRA', '2019-05-30 16:26:51'),
(10, 'PEPITO PEREZ', '2019-05-30 20:27:06'),
(11, 'ALMACEN', '2019-05-30 20:32:10'),
(12, 'PABLO PAREDES', '2019-05-30 20:45:18'),
(13, 'CARLOS IBARRA', '2019-05-30 20:55:14'),
(14, 'CARLOS IBARRA', '2019-05-30 21:37:06'),
(15, 'CARLOS IBARRA', '2019-06-09 04:07:45'),
(16, 'PABLO PAREDES', '2019-06-10 19:34:09'),
(17, 'CARLOS IBARRA', '2019-06-23 16:53:20'),
(18, 'PABLO PAREDES', '2019-06-23 18:34:57'),
(19, 'PEDRO LOPEZ', '2019-06-23 18:36:04'),
(22, 'CARLOS IBARRA', '2019-06-25 15:17:05'),
(23, 'CARLOS IBARRA', '2019-06-25 15:22:53'),
(24, 'PABLO PAREDES', '2019-06-25 15:23:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `referencias`
--

CREATE TABLE `referencias` (
  `id` int(50) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `referencia` varchar(200) NOT NULL,
  `Caracteristicas` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `referencias`
--

INSERT INTO `referencias` (`id`, `titulo`, `referencia`, `Caracteristicas`) VALUES
(188, 'RODILLOS PARA PINTURA EPOXICA', 'Ref.1', '1\" Cabo Plastico'),
(189, 'RODILLOS PARA PINTURA EPOXICA', 'Ref.2', '2\" Cabo Plastico'),
(190, 'RODILLOS PARA PINTURA EPOXICA', 'Ref.3', '3\" Cabo Plastico'),
(191, 'RODILLOS PARA PINTURA EPOXICA', 'Ref.4', '4\" Cabo Metalico'),
(192, 'RODILLOS PARA PINTURA EPOXICA', 'Ref.5', '6\" Cabo Metalico'),
(193, 'RODILLOS PARA PINTURA EPOXICA', 'Ref.6', '7\" Cabo Metalico'),
(194, 'RODILLOS PARA PINTURA EPOXICA', 'Ref.7', '9\" Cabo Metalico'),
(195, 'RODILLOS OVEJERO', 'Ref. 1', '1\" Cabo Plastico'),
(196, 'RODILLOS OVEJERO', 'Ref. 2', '2\" Cabo Plastico'),
(197, 'RODILLOS OVEJERO', 'Ref. 3', '4\" Cabo Metalico'),
(199, 'RODILLOS OVEJERO', 'Ref. 4', '3\" Cabo Metalico'),
(200, 'RODILLOS OVEJERO', 'Ref. 5', '4\" Cabo Metalico'),
(201, 'RODILLOS OVEJERO', 'Ref. 6', '6\" Cabo Metalico'),
(202, 'RODILLOS OVEJERO', 'Ref. 7', '9\" Cabo Metalico'),
(211, 'RODILLOS  LINEA ESPUMA', 'Ref. 1 ', '2\"  densidad 26, cabo plástico'),
(212, 'RODILLOS  LINEA ESPUMA', 'Ref. 2 ', '4\"  densidad 26, cabo plástico'),
(213, 'RODILLOS  LINEA ESPUMA', 'Ref. 3 ', '6\"  densidad 26, cabo metálico'),
(214, 'RODILLOS   LINEA ESPUMA', 'Ref. 4 ', '9\"  densidad 26, cabo metálico'),
(218, 'RODILLOS  LINEA PROFESIONAL - FELPA', 'Ref. 1', '2\"   cabo plástico'),
(219, 'RODILLOS  LINEA PROFESIONAL - FELPA', 'Ref. 2', '3\"  cabo metálico'),
(220, 'RODILLOS  LINEA PROFESIONAL - FELPA', 'Ref. 3', '4\"   cabo metálico'),
(221, 'RODILLOS  LINEA PROFESIONAL - FELPA', 'Ref. 4', '6\"   cabo metálico'),
(222, 'RODILLOS  LINEA PROFESIONAL - FELPA', 'Ref. 5', '7\"   cabo metálico'),
(223, 'RODILLOS  LINEA PROFESIONAL - FELPA', 'Ref. 6', '9\"   cabo metálico'),
(224, 'LINEA DE RODILLOS MASTDER', 'Ref. 902', 'Rodillo de 9\" (230mm) de longitud en felpa acrilica y  LINEA  poliester.'),
(225, 'LINEA DE RODILLOS MASTDER', 'Ref. 912', 'Rodillo de 9\" Rodillo el pintor felpa.'),
(226, 'LINEA DE RODILLOS MASTDER', 'Ref. 612', 'Rodillo 6\" versatil  felpa verde.'),
(227, 'LINEA DE RODILLOS MASTDER', 'Ref. 212', 'Rodillo mastder 2\" felpa verde'),
(228, 'LINEA DE RODILLOS MASTDER', 'Ref. 312', 'Rodillo mastder 4\" felpa verde'),
(229, 'LINEA DE RODILLOS MASTDER', 'Ref. 901', 'Rodillo mastder      9\" poliuretano'),
(230, 'RODILLOS EN POLIURETANO', 'Ref. 611', 'Rodillo pinta-fácil  6\" poliuretano'),
(231, 'RODILLOS EN POLIURETANO', 'Ref. 301', 'Rodillo máster      3\" poliuretano'),
(232, 'RODILLOS EN POLIURETANO', 'Ref. 201', 'Rodillo máster      2\" poliuretano'),
(233, 'REPUESTOS PARA PISTOLA SPRAY', 'N 1', 'Acople rápido.'),
(234, 'REPUESTOS PARA PISTOLA SPRAY', 'N 2', 'Aguja Spray.'),
(235, 'REPUESTOS PARA PISTOLA SPRAY', 'N 3', 'Aguja sagola.'),
(236, 'REPUESTOS PARA PISTOLA SPRAY', 'N 4', 'Boquilla abanico.'),
(237, 'REPUESTOS PARA PISTOLA SPRAY', 'N 5', 'Boquilla chorro.'),
(238, 'REPUESTOS PARA PISTOLA SPRAY', 'N 6', 'Estabilizador.'),
(239, 'REPUESTOS PARA PISTOLA SPRAY', 'N 7', 'Fitin.'),
(240, 'REPUESTOS PARA PISTOLA SPRAY', 'N 8', 'Impulsor.'),
(241, 'REPUESTOS PARA PISTOLA SPRAY', 'N 9', 'Racor acople hembra.'),
(242, 'REPUESTOS PARA PISTOLA SPRAY', 'N 10', 'Racor acople  macho.'),
(243, 'REPUESTOS PARA PISTOLA SPRAY', 'N 11', 'Racor hembra (fijo).'),
(244, 'REPUESTOS PARA PISTOLA SPRAY', 'N 12', 'Racor macho (compresor).'),
(245, 'REPUESTOS PARA PISTOLA SPRAY', 'N 13', 'Racor marguera (pistola).'),
(246, 'REPUESTOS PARA PISTOLA SPRAY', 'N 14', 'Racor protector.'),
(247, 'REPUESTOS PARA PISTOLA SPRAY', 'N 15', ' Resorte spray.'),
(248, 'REPUESTOS PARA PISTOLA SPRAY', 'N 16', 'Tobera (rf)'),
(249, 'REPUESTOS PARA PISTOLA SPRAY', 'N 17', 'Tobera (ro)'),
(250, 'REPUESTOS PARA PISTOLA SPRAY', 'N 18', 'Tubo (rf).'),
(251, 'REPUESTOS PARA PISTOLA SPRAY', 'N 19', 'Tubo (ro).'),
(252, 'REPUESTOS PARA PISTOLA SPRAY', 'N 20', 'Union hembra.'),
(253, 'REPUESTOS PARA PISTOLA SPRAY', 'N 21', 'Union macho.'),
(254, 'REPUESTOS PARA PISTOLA SPRAY', 'N 22', 'Union manguera.'),
(255, 'REPUESTOS PARA PISTOLA SPRAY', 'N 23', 'Anillo (rf)'),
(256, 'REPUESTOS DE VILBISS', 'N 1', 'Aguja de vilbiss'),
(257, 'REPUESTOS DE VILBISS', 'N 2', 'Anillo'),
(258, 'REPUESTOS DE VILBISS', 'N 3', 'Boquilla abanico'),
(259, 'REPUESTOS DE VILBISS', 'N 4', 'Boquilla chorro'),
(260, 'REPUESTOS DE VILBISS', 'N 5', 'Estabilizador'),
(261, 'REPUESTOS DE VILBISS', 'N 6', 'Impulsor'),
(262, 'REPUESTOS DE VILBISS', 'N 7', 'Racor'),
(263, 'REPUESTOS DE VILBISS', 'N 8', 'Tobera'),
(264, 'REPUESTOS DE VILBISS', 'N 9', 'Tubo'),
(265, 'REPUESTOS DE VILBISS', 'N 10', 'Resorte largo'),
(266, 'BROCHA TIPO PROFESIONAL JAMAKA', 'Ref.1', 'Brocha profesional  ½\"'),
(267, 'BROCHA TIPO PROFESIONAL JAMAKA', 'Ref.2', 'Brocha profesional 1 ½\"'),
(269, 'BROCHA TIPO PROFESIONAL JAMAKA', 'Ref.3', 'Brocha profesional  1 ½\"'),
(270, 'BROCHA TIPO PROFESIONAL JAMAKA', 'Ref.4', 'Brocha profesional  2\"'),
(271, 'BROCHA TIPO PROFESIONAL JAMAKA', 'Ref.5', ' Brocha profesional  2 ½\"'),
(272, 'BROCHA TIPO PROFESIONAL JAMAKA', 'Ref.6', ' Brocha profesional  3\"'),
(273, 'BROCHA TIPO PROFESIONAL JAMAKA', 'Ref.7', ' Brocha profesional  3 ½\"'),
(274, 'BROCHA TIPO PROFESIONAL JAMAKA', 'Ref.8', ' Brocha profesional  4\"'),
(275, 'BROCHA TIPO PROFESIONAL JAMAKA', 'Ref.9', ' Brocha profesional  5\"'),
(276, 'BROCHA TIPO PROFESIONAL JAMAKA', 'Ref.10', ' Brocha profesional  6\"'),
(277, 'BROCHA MULTIUSOS JAMAKA', 'Ref. 1', 'Brocha multiusos 1\"'),
(278, 'BROCHA MULTIUSOS JAMAKA', 'Ref. 2', 'Brocha multiusos 1 ½\"'),
(279, 'BROCHA MULTIUSOS JAMAKA', 'Ref. 3', 'Brocha multiusos 2\"'),
(280, 'BROCHA MULTIUSOS JAMAKA', 'Ref. 4.', 'Brocha multiusos 2 ½\"'),
(281, 'BROCHA MULTIUSOS JAMAKA', 'Ref. 5', 'Brocha multiusos 3\"'),
(282, 'BROCHA MULTIUSOS JAMAKA', 'Ref. 6', 'Brocha multiusos 4\"'),
(283, 'BROCHA MULTIUSOS JAMAKA', 'Ref. 7', 'Brocha multiusos 5\"'),
(284, 'BROCHA MULTIUSOS JAMAKA', 'Ref. 8', 'Brocha multiusos 6\"'),
(285, 'PINCEL PLANO -  REDONDO', 'N 1', 'Pincel Pelo Natural Redondo o Plano'),
(286, 'PINCEL PLANO -  REDONDO', 'N 2', 'Pincel Pelo Natural Redondo o Plano'),
(287, 'PINCEL PLANO -  REDONDO', 'N 3', 'Pincel Pelo Natural Redondo o Plano'),
(288, 'PINCEL PLANO -  REDONDO', 'N 4', 'Pincel Pelo Natural Redondo o Plano'),
(289, 'PINCEL PLANO -  REDONDO', 'N 5', 'Pincel Pelo Natural Redondo o Plano'),
(290, 'PINCEL PLANO -  REDONDO', 'N 6', 'Pincel Pelo Natural Redondo o Plano'),
(291, 'PINCEL PLANO -  REDONDO', 'N 7', 'Pincel Pelo Natural Redondo o Plano'),
(292, 'PINCEL PLANO -  REDONDO', 'N 8', 'Pincel Pelo Natural Redondo o Plano'),
(293, 'PINCEL PLANO -  REDONDO', 'N 9', 'Pincel Pelo Natural Redondo o Plano'),
(294, 'PINCEL PLANO -  REDONDO', 'N 10', 'Pincel Pelo Natural Redondo o Plano'),
(295, 'PINCEL PLANO -  REDONDO', 'N 11', 'Pincel Pelo Natural Redondo o Plano'),
(296, 'PINCEL PLANO -  REDONDO', 'N 12', 'Pincel Pelo Natural Redondo o Plano'),
(297, 'ESPATULA PLASTICA', 'Ref. 1', 'Espátula plástica pequeña'),
(298, 'ESPATULA PLASTICA', 'Ref. 2', 'Espátula plástica mediana'),
(299, 'ESPATULA PLASTICA', 'Ref. 3', 'Espátula plástica mezcladora'),
(300, 'ESPATULA METALICA', 'Ref.1', '1\" Espatula Metalica'),
(301, 'ESPATULA METALICA', 'Ref.2', '1 ½\" Espátula Metálica'),
(302, 'ESPATULA METALICA', 'Ref.3', '2\" Espatula Metalica'),
(303, 'ESPATULA METALICA', 'Ref.4', '2 ½\" Espátula Metálica'),
(304, 'ESPATULA METALICA', 'Ref. 5', '3\" Espatula Metalica'),
(305, 'ESPATULA METALICA', 'Ref. 6', '4\" Espatula Metalica'),
(306, 'ESPATULA METALICA', 'Ref. 7', '5\" Espatula Metalica'),
(307, 'ESPATULA METALICA', 'Ref. 8', '6\" Espatula Metalica'),
(308, 'ESPATULA METALICA', 'Ref. 9', '8\" Espatula Metalica'),
(309, 'ESPATULA METALICA', 'Ref. 10', '10\" Espatula Metalica'),
(310, 'Kit De Espatula', 'Kit de Espatulas', 'Juego de Espátulas metálicas '),
(314, 'ESPATULA METALICA MEZCLADORA', 'Ref.6', '1/4 Galón Espátula Mezcladora'),
(315, 'ESPATULA METALICA MEZCLADORA', 'Ref.8', '1/2 Galón Espátula Mezcladora'),
(316, 'ESPATULA METALICA MEZCLADORA', 'Ref.10', '1 Galón Espátula Mezcladora'),
(317, 'CINTA ENMASCARAR CELLUX', 'Ref. 1', '6mm \" 40 metros'),
(318, 'CINTA ENMASCARAR CELLUX', 'Ref. 2', '12mm \" 40 metros'),
(319, 'CINTA ENMASCARAR CELLUX', 'Ref. 3', '18mm \" 40 metros'),
(320, 'CINTA ENMASCARAR CELLUX', 'Ref. 4', '24mm \" 40 metros'),
(321, 'CINTA ENMASCARAR CELLUX', 'Ref. 5', '36mm \" 40 metros'),
(322, 'CINTA ENMASCARAR CELLUX', 'Ref. 6', '48mm \" 40 metros'),
(323, 'CINTA ENMASCARAR SOCO', 'Ref. 1', '12 mm por 40 mts'),
(324, 'CINTA ENMASCARAR SOCO', 'Ref. 2', '18 mm por 40 mts'),
(325, 'CINTA ENMASCARAR SOCO', 'Ref. 3', '24 mm por 40 mts'),
(326, 'CINTA ENMASCARAR SOCO', 'Ref. 4', '36 mm por 40 mts'),
(327, 'CINTA ENMASCARAR SOCO', 'Ref. 5', '48 mm por 40 mts'),
(328, 'CINTA ENMASCARAR STARTAPE', 'Ref. 1', '12mm- metros 40'),
(329, 'CINTA ENMASCARAR STARTAPE', 'Ref. 2', '18mm- metros 40'),
(330, 'CINTA ENMASCARAR STARTAPE', 'Ref. 3', '24mm- metros 40'),
(331, 'CINTA ENMASCARAR STARTAPE', 'Ref. 4', '36mm- metros 40'),
(332, 'CINTA ENMASCARAR STARTAPE', 'Ref. 5', '48mm- metros 40'),
(333, 'CINTA EMPAQUE CELLUX', 'Ref. 1', 'largo-20 mts'),
(334, 'CINTA EMPAQUE CELLUX', 'Ref. 2', 'largo-40 mts'),
(335, 'CINTA EMPAQUE CELLUX', 'Ref. 3', 'largo-90 mts'),
(336, 'CINTA EMPAQUE CELLUX', 'Ref. 4', 'largo-180 mts'),
(340, 'CINTA TEFLON', 'Ref. 1', '1/2\" pequeña'),
(341, 'CINTA TEFLON', 'Ref. 2', '3/4\" pequeña'),
(342, 'CINTA TEFLON', 'Ref. 3', '3/4\" Grande'),
(343, 'CINTA TEFLON', 'Ref. 4', '19mm  Super'),
(344, 'AEROGRAFO W71 RANGER PROFESIONAL', 'w_716', '400ml capacidad vaso Entrada de Alimentacion 1/4\"'),
(345, 'AEROGRAFO F75 RANGER', 'Ref.  F75', 'vaso 400ml - toma 1/4\"ml - CFM 3-8  '),
(346, 'AEROGRAFO F75 USA 600CC', 'Ref. f75 -600', 'Entrada1/4\"- 600ml - CFM 3-8'),
(347, 'AEROGRAFO H887 RANGER', 'Ref. H887', 'entrada 1/4\"- 600 ml - 45-60 PSI'),
(348, 'AEROGRAFO S980B HOPEX', 'Ref. S980B', 'Vaso metalico 1000 ml-Boquilla abanico de 1.4 mm'),
(349, 'AEROGRAFO H200G1', 'Ref. H200G1', 'Vaso metalico 100ml- Boquilla abanico 0.8 mm - PSI 50'),
(350, 'AEROGRAFO H200G1', 'Ref. H200G2', 'Vaso plastico 100ml- Boquilla abanico 0.8 mm - PSI 50'),
(351, 'MINI PISTOLA DE GRAVEDAD F2', 'Ref. F2', 'Vaso 200ml- Entrada por Gravedad- entrada 1/4 NPS'),
(352, 'PISTOLA PARA BODY  SHOOT PS-8 RANGER', 'Ref . PS-8 Ranger', '58 102 Psi - Maxima presion 130 Psi'),
(353, 'PISTOLA DE BAJA FLICA', 'Ref. 472A Flica', 'Uso Standar-50 PSI'),
(355, 'PISTOLA MC CASTI', 'Ref. Pistola Mc Casti', 'Pistola de alta Calidad y Trabajo pesado.'),
(356, 'PISTOLA SPRAYIR GOLD', 'Ref.Sprayir Gold', 'Es una pistola de baja presion que se puede adaptar a cualquier tipo de compresor; bajo consumo de aire y vaso en aluminio reforzado para mayor durabilidad.'),
(357, 'VASOS DE PISTOLAS Y AEROGRAFOS', 'Ref. Repuestos Pistolas y Aerografos', 'Vasos para Pistolas y Aerografos , Kit H2000-W 77-W-71'),
(358, 'GUANTES DE CAUCHO', 'Ref. 1', 'Guante de Caucho tipo Industrial'),
(359, 'GUANTE CARNAZA', 'Ref 1', 'Guante Carnaza Uso pesado'),
(360, 'GUANTE DE NITRILO', 'Ref. 1', 'Guante nitrilo negro T. S'),
(361, 'GUANTE DE NITRILO', 'Ref. 2', 'Guante nitrilo negro-azul T. M'),
(362, 'GUANTE DE NITRILO', 'Ref. 3', 'Guante nitrilo negro T. L'),
(363, 'GUANTE DE NITRILO', 'Ref.4', 'Guante nitrilo azul    T.M'),
(366, 'GUANTES ESPECIALES', 'Ref 1', 'Guante Poliuretano Talla 8-9'),
(367, 'GUANTES ESPECIALES', 'Ref 2', 'Guante Latex Rojo Talla 8-9'),
(368, 'GUANTES ESPECIALES', 'Ref 3', 'Guante Impermeable Talla 8-9'),
(369, 'GUANTES ESPECIALES', 'Ref 4', 'Guante Nylon Siliconado'),
(370, 'GUANTES ESPECIALES', 'Ref SR 913', 'Guante Nitrilo.'),
(371, 'GUANTES ESPECIALES', 'Ref SR 903', 'Guante Nitrilo Triton.'),
(372, 'GUANTES ESPECIALES', 'Ref SR 1601', 'Guante Nitrilo Triton.'),
(373, 'LLANAS METALICAS', 'Ref. 1', 'Llana Standar JAMAKA'),
(374, 'LLANAS METALICAS', 'Ref. 2', 'Llana Veneciana JAMAKA'),
(375, 'LLANAS METALICAS', 'Ref. 3', 'Llana HOPEX.'),
(376, 'IMPERMEABILIZANTES FLICACRYL', 'Ref 1', 'Color Negro'),
(377, 'IMPERMEABILIZANTES FLICACRYL', 'Ref 2', 'Color Blanco'),
(378, 'IMPERMEABILIZANTES FLICACRYL', 'Ref 3', 'Color Gris'),
(379, 'IMPERMEABILIZANTES FLICACRYL', 'Ref 4', 'Color Verde.'),
(380, 'IMPERMEABILIZANTES FLICACRYL', 'Ref 5', 'Color Rojo.'),
(381, 'IMPERMEABILIZANTES FLICACRYL', 'Ref 6', 'Color Amarillo.'),
(382, 'IMPERMEABILIZANTES FLICACRYL', 'Ref 7', 'Color Azul.'),
(383, 'EMPAQUE PARA PISTOLA', 'Ref. 1', 'Empaque Cuero'),
(384, 'EMPAQUE PARA PISTOLA', 'Ref. 2', 'Empaque Caucho Negro.'),
(385, 'EMPAQUE PARA PISTOLA', 'Ref. 3', 'Empaque Goni Negro.'),
(386, 'EMPAQUE PARA PISTOLA', 'Ref. 4', 'Empaque Goni Gris.'),
(387, 'EMPAQUE PARA PISTOLA', 'Ref. 5', 'Empaque Blanco.'),
(388, 'EMPAQUE PARA PISTOLA', 'Ref. 6', 'Empaque Acrilico.'),
(389, 'EMPAQUE PARA PISTOLA', 'Ref. 7', 'Empaque Aguja.'),
(390, 'EMPAQUE PARA PISTOLA', 'Ref. 8', 'Rosca Plástica'),
(391, 'SILICONAS SQ SPRAY.', 'Ref. Silicona Spray', 'Silicona en tres presentaciones Uva-Limon-Fresa.'),
(393, 'CAUCHO LIJADOR', 'Ref 1', 'Caucho Plano Lijado Profesional.'),
(394, 'CAUCHO LIJADOR', 'Ref 2', 'Caucho Curvo Lijado Profesional.'),
(400, 'FLEXOMETRO', 'Ref . 1', 'Flexometro de 3mts.'),
(401, 'FLEXOMETRO', 'Ref . 2', 'Flexometro de 5mts.'),
(402, 'FLEXOMETRO', 'Ref . 3', 'Flexometro de 7.5 mts.'),
(405, 'BISTURIS', 'Ref. 1', 'Bisturi Profesional.'),
(406, 'BISTURIS', 'Ref. 2', 'Bisturi Economico.'),
(407, 'BISTURIS', 'Ref. 3', 'Bisturi Metalico Grande.'),
(408, 'BISTURIS', 'Ref. 4', 'Set de Cuchillas.'),
(409, 'PISTOLAS DE SILICONA', 'Ref. 1', 'Pistola de Silicona con Cuerpo en Aluminio.'),
(411, 'PISTOLAS DE SILICONA', 'Ref. 2', 'Pistola de Silicona tipo Media Caja'),
(413, 'BALDES', 'Ref. 1', 'Balde Plastico Mastder.'),
(414, 'BALDES', 'Ref. 2', 'Balde Economico.'),
(416, 'GUANTES PEPAS', 'Ref. 1', 'Guante de pepas antideslizantes doble cara.'),
(417, 'GUANTES PEPAS', 'Ref. 2', 'Guante de pepas antideslizantes una cara.'),
(418, 'DISCOS DE CORTE', 'Ref. 1', 'Disco pulidora 4-1/2-Diamante.'),
(419, 'DISCOS DE CORTE', 'Ref. 2', 'Disco  4-1/2-Sierra.'),
(420, 'DISCOS DE CORTE', 'Ref. 3', 'Disco pulidora 7-Diamante.'),
(421, 'PISTOLA PETROLIZADORA.', 'Ref. DO-10-J RANGER', 'Petrolizadora de trabajo pesado.'),
(422, 'PISTOLA PETROLIZADORA.', 'Ref. DO-10-HOPEX', 'Petrolizadora de trabajo Industrial.'),
(423, 'ESQUINERO Y CAUCHO GUIA', 'Ref. 1', 'Esquinero en felpa de alta Calidad.'),
(424, 'ESQUINERO Y CAUCHO GUIA', 'Ref. 2', 'Caucho Guia.'),
(425, 'RESPIRADOR Y GAFAS', 'Ref. 1', 'Gafas de protección Unilente Ranger.'),
(426, 'RESPIRADOR Y GAFAS', 'Ref. Doble TG RANGER.', 'Respirador Doble TG RANGER.'),
(427, 'RESPIRADOR Y GAFAS', 'Ref. 2.', 'Repuesto Doble TG RANGER. para gases, polvo, veneno.'),
(431, 'CATALIZADOR', 'CATALIZADOR', 'PRUEBA'),
(434, 'Rodillo Imagen', 'Rodillo Imagen N-1', 'rodillos que establece marcas'),
(441, 'Cinta Aislante Celux', 'Ref . 1', 'Cinta pequeña de 16mm por 6mts. Profesional Industrial.'),
(442, 'Cinta Aislante Celux', 'Ref . 2', 'Cinta Grande de 16mm por 15mts. Profesional Industrial.'),
(443, 'SQ PULITURA', 'SQ Pulitura', 'Emulsion para uso automotriz en presentacion de 360 cm3'),
(444, 'AEROGRAFO GOLDEN F75', 'Aerografo Golden F-75', 'Aerografo profesional con vaso Metalico de capacidad de'),
(445, 'AEROGRAFO GOLDEN F75', 'Aerografo Golden F-75', 'Aerografo profesional con vaso de capacidad '),
(446, 'AEROGRAFO H 2000', 'AEROGRAFO H 2000.', 'Profesional con tanque plastico alta durabilidad.'),
(447, 'ESPATULA HOPEX', 'Ref 1', 'Espatula de 1\".'),
(448, 'ESPATULA HOPEX', 'Ref 2', 'Espatula de 1.1/2\".'),
(449, 'ESPATULA HOPEX', 'Ref 3', 'Espatula de 2\".'),
(450, 'ESPATULA HOPEX', 'Ref 4', 'Espatula de 2 .1/2\".'),
(451, 'ESPATULA HOPEX', 'Ref 5', 'Espatula de 3\".'),
(452, 'ESPATULA HOPEX', 'Ref 6', 'Espatula de 4\".'),
(453, 'ESPATULA HOPEX', 'Ref 7', 'Espatula de 5\".'),
(454, 'ESPATULA HOPEX', 'Ref 8', 'Espatula de 6\".'),
(472, 'BROCHAS FLICA ', 'Ref 1', 'Brocha de 1\" Economica'),
(473, 'BROCHAS FLICA ', 'Ref 2', 'Brocha de 1-1/2\" Economica'),
(474, 'BROCHAS FLICA ', 'Ref 3', 'Brocha de 2\" Economica'),
(475, 'BROCHAS FLICA ', 'Ref 4', 'Brocha de 2-1/2\" Economica'),
(476, 'BROCHAS FLICA ', 'Ref 5', 'Brocha de 3\" Economica'),
(477, 'BROCHAS FLICA ', 'Ref 6', 'Brocha de 4\" Economica'),
(479, 'prueba-flica', 'ref 456', 'pegante instantaneo de 18 grs '),
(480, 'prueba-flica', 'ref 457', 'pegante instantaneo de 30 grs '),
(484, 'RODILLO LINEA VERDE.', 'Ref # 1', '1\" cabo plástico'),
(485, 'RODILLO LINEA VERDE.', 'Ref # 2', '2\" cabo plástico'),
(486, 'RODILLO LINEA VERDE.', 'Ref # 3', '4\" cabo plástico'),
(487, 'RODILLO LINEA VERDE.', 'Ref # 4', '2\" varilla.'),
(488, 'RODILLO LINEA VERDE.', 'Ref # 5', '4\" varilla.'),
(489, 'RODILLO LINEA VERDE.', 'Ref # 6', '6\" varilla.'),
(490, 'RODILLO LINEA VERDE.', 'Ref # 7', '7\" varilla.'),
(491, 'RODILLO LINEA VERDE.', 'Ref # 8', '9\" varilla.'),
(492, 'RODILLO EN ESPUMA', 'Ref # 1', 'Cabo plastico 2\"'),
(493, 'RODILLO EN ESPUMA', 'Ref # 2', 'Cabo plastico 4\"'),
(494, 'RODILLO EN ESPUMA', 'Ref # 3', 'Cabo varilla 6\"'),
(495, 'RODILLO EN ESPUMA', 'Ref # 4', 'Cabo varilla 9\"'),
(496, 'RODILLO LINEA ECONOMICA', 'Ref # 1', '9\" altura felpa 20 ml, cabo metalico, color amarillo'),
(497, 'RODILLO LINEA ECONOMICA', 'Ref # 2', '9\" altura felpa 20 ml, cabo metalico, color naranja.'),
(499, 'RODILLO PROFESIONAL FELPA ULTRA', 'Ref # 1', '2\" cabo metálico'),
(500, 'RODILLO PROFESIONAL FELPA ULTRA', 'Ref # 2', '3\" cabo metálico'),
(501, 'RODILLO PROFESIONAL FELPA ULTRA', 'Ref # 3', '4\" cabo metálico'),
(503, 'RODILLO PROFESIONAL FELPA ULTRA', 'Ref # 4', '7\" cabo metálico'),
(504, 'RODILLO PROFESIONAL FELPA ULTRA', 'Ref # 5', '9\" cabo metálico'),
(505, 'LINEA DE RODILLOS MASTDER', 'Ref. 112', 'Rodillo de 1\" Rodillo el pintor felpa.'),
(509, 'Rodillos Especiales.', 'Ref # 1', 'Rodillo texturizado en caucho.'),
(510, 'Rodillos Especiales.', 'Ref # 2', 'Rodillo texturizado en espuma'),
(511, 'Rodillos Especiales.', 'Ref # 3', 'Rodillo esferico en espuma'),
(512, 'Rodillos Especiales.', 'Ref # 4', 'Rodillo esferico en felpa Ovejera'),
(513, 'Rodillos Especiales.', 'Ref # 5', 'Rodillo de 9\" azul.'),
(514, 'Rodillos Especiales.', 'Ref # 6', 'Rodillo de 9\" zanahoria.'),
(515, 'TAPA BOCAS', 'Ref # 1', 'Tapa Bocas de uso general.'),
(516, 'Llana Plástica', 'Ref # 1', 'Llana Plastica de tamaño standar con mango de doble anclaje.'),
(517, 'ESPATULA HOPEX', 'Ref 9', 'Espatula de 8\"'),
(518, 'ESPATULA HOPEX', 'Ref 10', 'Espatula de 10\"'),
(519, 'VETEADORES', 'Ref # 1', 'Veteador de tamaño pequeño.'),
(520, 'VETEADORES', 'Ref # 2', 'Veteador de tamaño mediano.'),
(521, 'VETEADORES', 'Ref # 3', 'Veteador de tamaño grande.'),
(523, 'BROCHAS HOPEX', 'Ref # 1', 'Brocha de 1/2 \"'),
(524, 'BROCHAS HOPEX', 'Ref # 2', 'Brocha de 1\"'),
(525, 'BROCHAS HOPEX', 'Ref # 3', 'Brocha de 1-1/2\"'),
(526, 'BROCHAS HOPEX', 'Ref # 4', 'Brocha de 2\"'),
(527, 'BROCHAS HOPEX', 'Ref # 5', 'Brocha de 2-1/2\"'),
(528, 'BROCHAS HOPEX', 'Ref # 6', 'Brocha de 3\"'),
(529, 'BROCHAS HOPEX', 'Ref # 7', 'Brocha de 4\"'),
(530, 'BROCHAS HOPEX', 'Ref # 8', 'Brocha de 5\"'),
(531, 'AEROGRAFO W-71 G -400', 'Ref # W-71 G -400', 'Aerografo de gran calidad para trabajo profesional.'),
(532, 'AEROGRAFO W-71 G-600', 'Ref # W-71 G - 600', 'Aerografo para trabajo profesional con 600cc de capacidad.'),
(533, 'AEROGRAFO Q-S 1104 GOLDEN', 'Ref # Aerografo Q-S 1104 G', 'Aerografo de trabajo pesado de alta capacidad.'),
(534, 'CINTA ENMASCARAR 3M', 'Ref # 1', 'Cinta de Enmascarar 3M de 12mm x 40mts'),
(535, 'CINTA ENMASCARAR 3M', 'Ref # 2', 'Cinta de Enmascarar 3M de 18mm x 40mts'),
(536, 'CINTA ENMASCARAR 3M', 'Ref # 3', 'Cinta de Enmascarar 3M de 24mm x 40mts'),
(538, 'CUBETA DE PINTURA.', 'Ref # 1', 'Cubeta de pintura plastica.'),
(539, 'MASILLA CONTINENTAL', 'Ref # 1', 'Masilla para trabajo automotriz'),
(540, 'GUANTES PEPAS DOBLE CARA', 'Pepas doble cara', 'Guantes pepas con doble cara'),
(541, 'CINTA ENMASCARAR 3M', 'Ref # 4', 'Cinta de Enmascarar 3M de 48mm x 40mt'),
(542, 'CINTA AQUAVID', 'Ref 1', 'Cinta de 12 mm x 8 mts espesor 0.075mm caja 10 unid'),
(543, 'CINTA AQUAVID', 'Ref 2', 'Cinta de 19 mm x 15 mts espesor 0.2mm caja 10 unidades'),
(544, 'MASILLA PLASTICA PLASTI-FLEX', 'Ref 1', 'Masilla plástica en presentación de 1/8gl'),
(545, 'MASILLA PLASTICA PLASTI-FLEX', 'Ref 2', 'Masilla plástica en presentación de 1/4gl'),
(546, 'MASILLA PLASTICA PLASTI-FLEX', 'Ref 3', 'Masilla plástica en presentación de 1gl'),
(550, 'DESTAPA CUÃ‘ETE', 'Ref 1', 'Destapa cuÃ±etes de alta resistencia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `remision`
--

CREATE TABLE `remision` (
  `id_remision` int(5) NOT NULL,
  `remision` int(8) NOT NULL,
  `cliente` varchar(100) NOT NULL,
  `producto` varchar(150) NOT NULL,
  `cantidad` int(10) NOT NULL,
  `precio` int(20) NOT NULL,
  `subtotal` varchar(16) NOT NULL,
  `acumulado` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `remision`
--

INSERT INTO `remision` (`id_remision`, `remision`, `cliente`, `producto`, `cantidad`, `precio`, `subtotal`, `acumulado`) VALUES
(1, 1, 'ALMACEN', '371-GUANTES ESPECIALES Ref SR 903', 60, 1200, '72000', '72000'),
(2, 1, 'ALMACEN', '474-BROCHAS FLICA  Ref 3', 67, 1800, '120600', '192600'),
(3, 1, 'ALMACEN', '314-ESPATULA METALICA MEZCLADORA Ref.4', 12, 4000, '48000', '240600'),
(4, 2, 'CARLOS IBARRA', '371-GUANTES ESPECIALES Ref SR 903', 12, 8000, '96000', '96000'),
(5, 2, 'CARLOS IBARRA', '447-ESPATULA HOPEX Ref 1', 50, 9000, '450000', '546000'),
(6, 2, 'CARLOS IBARRA', '395-PEGANTE BOX GYD Ref 1', 90, 5000, '450000', '996000'),
(7, 3, 'PEDRO LOPEZ', '395-PEGANTE BOX GYD Ref 1', 56, 800, '44800', '44800'),
(8, 3, 'PEDRO LOPEZ', '421-PISTOLA PETROLIZADORA. Ref. DO-10-J RANGER', 12, 9000, '108000', '152800'),
(9, 3, 'PEDRO LOPEZ', '255-REPUESTOS PARA PISTOLA SPRAY N 23', 45, 6500, '292500', '445300'),
(10, 4, 'PEDRO PEREZ', '430-ACCESORIOS LIMPIEZA. Ref. 3', 24, 9800, '235200', '235200'),
(11, 4, 'PEDRO PEREZ', '244-REPUESTOS PARA PISTOLA SPRAY N 12', 6, 9000, '54000', '289200'),
(12, 4, 'PEDRO PEREZ', '370-GUANTES ESPECIALES Ref SR 913', 76, 3200, '243200', '532400'),
(13, 5, 'PABLO PAREDES', '369-GUANTES ESPECIALES Ref 4', 25, 900, '22500', '22500'),
(14, 5, 'PABLO PAREDES', '381-IMPERMEABILIZANTES FLICACRYL-PROCRYL Ref 6', 7, 9000, '63000', '85500'),
(15, 5, 'PABLO PAREDES', '244-REPUESTOS PARA PISTOLA SPRAY N 12', 12, 900, '10800', '96300'),
(16, 5, 'PABLO PAREDES', '245-REPUESTOS PARA PISTOLA SPRAY N 13', 23, 8900, '204700', '301000'),
(17, 6, 'CARLOS IBARRA', '412-SUPERBONDER Ref 1', 60, 900, '54000', '54000'),
(18, 6, 'CARLOS IBARRA', '368-GUANTES ESPECIALES Ref 3', 24, 9000, '216000', '270000'),
(19, 6, 'CARLOS IBARRA', '284-BROCHA MULTIUSOS Ref. 8', 60, 7800, '468000', '738000'),
(20, 7, 'ALMACEN', '216-RODILLOS LINEA ECONOMICA FELPA DE PELUC', 124, 2700, '334800', '334800'),
(21, 7, 'ALMACEN', '216-RODILLOS LINEA ECONOMICA FELPA DE PELUC', 60, 2500, '150000', '484800'),
(22, 7, 'ALMACEN', '218-RODILLOS LINEA PROFESIONAL - FELPA Ref. 1', 24, 2350, '56400', '541200'),
(23, 8, 'PABLO PAREDES', '218-RODILLOS LINEA PROFESIONAL - FELPA Ref. 1', 90, 3500, '315000', '315000'),
(24, 8, 'PABLO PAREDES', '443-SQ PULITURA SQ Pulitura', 12, 5600, '67200', '382200'),
(25, 8, 'PABLO PAREDES', '194-RODILLOS PARA PINTURA EPOXICA Ref.7', 68, 3500, '238000', '620200'),
(26, 9, 'CARLOS IBARRA', '296-PINCEL PLANO -  REDONDO N 12', 120, 700, '84000', '84000'),
(27, 9, 'CARLOS IBARRA', '275-BROCHA TIPO PROFESIONAL Ref.9', 12, 8500, '102000', '186000'),
(28, 9, 'CARLOS IBARRA', '372-GUANTES ESPECIALES Ref SR 1601', 45, 900, '40500', '226500'),
(29, 10, 'PEPITO PEREZ', '245-REPUESTOS PARA PISTOLA SPRAY N 13', 12, 7800, '93600', '93600'),
(30, 10, 'PEPITO PEREZ', '388-EMPAQUE PARA PISTOLA Ref. 6', 12, 900, '10800', '104400'),
(31, 10, 'PEPITO PEREZ', '355-PISTOLA MC CASTI Ref. Pistola Mc Casti', 6, 15000, '90000', '194400'),
(32, 11, 'ALMACEN', '350-AERÃ“GRAFO H200G1 Ref. H200G2', 5, 8900, '44500', '44500'),
(33, 11, 'ALMACEN', '426-RESPIRADOR Y GAFAS Ref. Doble TG RANGER.', 45, 7000, '315000', '359500'),
(34, 12, 'PABLO PAREDES', '406-BISTURIS Ref. 2', 500, 2500, '1250000', '1250000'),
(35, 12, 'PABLO PAREDES', '310-Kit De Espatula Kit de Espatulas', 60, 1500, '90000', '1340000'),
(36, 13, 'CARLOS IBARRA', '401-FLEXOMETRO Ref . 2', 12, 2000, '24000', '24000'),
(37, 15, 'CARLOS IBARRA', '401-FLEXOMETRO Ref . 2', 12, 2500, '30000', '30000'),
(38, 16, 'PABLO PAREDES', '369-GUANTES ESPECIALES Ref 4', 200, 2500, '500000', '500000'),
(39, 17, 'CARLOS IBARRA', '401-FLEXOMETRO Ref . 2', 50, 2500, '125000', '125000'),
(40, 17, 'CARLOS IBARRA', '306-ESPÃTULA METÃLICA Ref. 7', 12, 3000, '36000', '161000'),
(41, 19, 'PEDRO LOPEZ', '350-AERÃ“GRAFO H200G1 Ref. H200G2', 23, 25000, '575000', '575000'),
(42, 24, 'PABLO PAREDES', '401-FLEXOMETRO Ref . 2', 56, 89, '4984', '4984');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(30) NOT NULL,
  `admin` varchar(30) NOT NULL,
  `clave` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `admin`, `clave`) VALUES
(1, 'gerencia', 'Flica1456'),
(2, 'digitador', 'Flica7923');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedores`
--

CREATE TABLE `vendedores` (
  `id` int(11) NOT NULL,
  `vendedor` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `vendedores`
--

INSERT INTO `vendedores` (`id`, `vendedor`, `password`) VALUES
(1, 'ventas1', 'flica654'),
(2, 'ventas2', 'flica789');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_clientes`);

--
-- Indices de la tabla `cobros`
--
ALTER TABLE `cobros`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `codigo`
--
ALTER TABLE `codigo`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `numeroremision`
--
ALTER TABLE `numeroremision`
  ADD PRIMARY KEY (`remision`);

--
-- Indices de la tabla `referencias`
--
ALTER TABLE `referencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `remision`
--
ALTER TABLE `remision`
  ADD PRIMARY KEY (`id_remision`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT de la tabla `cobros`
--
ALTER TABLE `cobros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=229;

--
-- AUTO_INCREMENT de la tabla `numeroremision`
--
ALTER TABLE `numeroremision`
  MODIFY `remision` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `referencias`
--
ALTER TABLE `referencias`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=551;

--
-- AUTO_INCREMENT de la tabla `remision`
--
ALTER TABLE `remision`
  MODIFY `id_remision` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
