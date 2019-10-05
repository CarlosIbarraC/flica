-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-04-2019 a las 13:06:43
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.2.11

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
(3, 'Accesorios para Pistola'),
(4, 'Pistolas'),
(5, 'Aerografos'),
(6, 'Cauchos'),
(7, 'Guantes'),
(8, 'Brochas'),
(9, 'Cintas'),
(10, 'Siliconas'),
(11, 'Impermeabilizantes'),
(12, 'Metros'),
(13, 'Seguridad Industrial'),
(14, 'Espatulas');

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
(95, 'ALMACEN', 'Cr 23 # 44 82 sur', '7606450', 'Bogota', 35492582);

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
(45, 'Mickey Mouse', 5678, '1000000', 'total', 'enviar pedido', '1000', '2019/04/25 h: 09:50:am');

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
(203, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE Ref.1 ', 7705555203),
(204, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE Ref.2 ', 7705555204),
(205, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE Ref.3 ', 7705555205),
(206, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE Ref.4 ', 7705555206),
(207, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE Ref.5 ', 7705555207),
(208, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE Ref.6 ', 7705555208),
(209, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE Ref.7 ', 7705555209),
(211, 'RODILLOS  LÃNEA ESPUMA Ref. 1  ', 7705555211),
(212, 'RODILLOS  LÃNEA ESPUMA Ref. 2  ', 7705555212),
(213, 'RODILLOS  LÃNEA ESPUMA Ref. 3  ', 7705555213),
(214, 'RODILLOS  LÃNEA ESPUMA Ref. 4  ', 7705555214),
(215, 'RODILLOS LÃNEA ECONÃ“MICA â€“ FELPA DE PELUC', 7705555215),
(216, 'RODILLOS LÃNEA ECONÃ“MICA â€“ FELPA DE PELUC', 7705555216),
(217, 'RODILLOS LÃNEA ECONÃ“MICA â€“ FELPA DE PELUC', 7705555217),
(218, 'RODILLOS LÃNEA PROFESIONAL - FELPA Ref. 1 ', 7705555218),
(219, 'RODILLOS LÃNEA PROFESIONAL - FELPA Ref. 2 ', 7705555219),
(220, 'RODILLOS LÃNEA PROFESIONAL - FELPA Ref. 3 ', 7705555220),
(221, 'RODILLOS LÃNEA PROFESIONAL - FELPA Ref. 4 ', 7705555221),
(222, 'RODILLOS LÃNEA PROFESIONAL - FELPA Ref. 5 ', 7705555222),
(223, 'RODILLOS LÃNEA PROFESIONAL - FELPA Ref. 6 ', 7705555223),
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
(252, 'REPUESTOS PARA PISTOLA SPRAY N 20 ', 7705555252),
(253, 'REPUESTOS PARA PISTOLA SPRAY N 21 ', 7705555253),
(254, 'REPUESTOS PARA PISTOLA SPRAY N 22 ', 7705555254),
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
(280, 'BROCHA MULTIUSOS Ref. 4 ', 7705555280),
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
(297, 'ESPATULA PLASTICA Ref. 1 ', 7705555297),
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
(343, 'CINTA TEFLON Ref. 4 ', 7705555343),
(344, 'AERÃ“GRAFO W71 RANGER PROFESIONAL w_716 ', 7705555344),
(345, 'AEROGRAFO F75 RANGER Ref.  F75 ', 7705555345),
(346, 'AEROGRAFO F75 USA 600CC Ref. f75 -600 ', 7705555346),
(347, 'AEROGRAFO H887 RANGER Ref. H887 ', 7705555347),
(348, 'AEROGRAFO S980B HOPEX Ref. S980B ', 7705555348),
(349, 'AERÃ“GRAFO H200G1 Ref. H200G1 ', 7705555349),
(350, 'AERÃ“GRAFO H200G1 Ref. H200G2 ', 7705555350),
(351, 'MINI PISTOLA DE GRAVEDAD F2 Ref. F2 ', 7705555351),
(352, 'PISTOLA PARA BODY  SHOOT PS-8 RANGER Ref . PS', 7705555352),
(353, 'PISTOLA DE BAJA FLICA Ref. 472A Flica ', 7705555353),
(354, 'PISTOLA HOPEX 472 A1 Ref. Hopex 472 A1 ', 7705555354),
(355, 'PISTOLA MC CASTI Ref. Pistola Mc Casti ', 7705555355),
(356, 'SPRAYIR GOLD Ref.Sprayir Gold ', 7705555356),
(357, 'VASOS DE PISTOLAS Y AEROGRAFOS Ref. Repuestos', 7705555357),
(358, 'GUANTES DE CAUCHO Ref. 1 ', 7705555358),
(359, 'GUANTE CARNAZA Ref 1 ', 7705555359),
(360, 'GUANTE DE NITRILO Ref. 1 ', 7705555360),
(361, 'GUANTE DE NITRILO Ref. 2 ', 7705555361),
(362, 'GUANTE DE NITRILO Ref. 3 ', 7705555362),
(363, 'GUANTE DE NITRILO Ref.4 ', 7705555363),
(364, 'GUANTE DE VINILO Ref 1 ', 7705555364),
(366, 'GUANTES ESPECIALES Ref 1 ', 7705555366),
(367, 'GUANTES ESPECIALES Ref 2 ', 7705555367),
(368, 'GUANTES ESPECIALES Ref 3 ', 7705555368),
(369, 'GUANTES ESPECIALES Ref 4 ', 7705555369),
(370, 'GUANTES ESPECIALES Ref SR 913 ', 7705555370),
(371, 'GUANTES ESPECIALES Ref SR 903 ', 7705555371),
(372, 'GUANTES ESPECIALES Ref SR 1601 ', 7705555372),
(373, 'LLANAS METALICAS Ref. 1 ', 7705555373),
(374, 'LLANAS METALICAS Ref. 2 ', 7705555374),
(375, 'LLANAS METALICAS Ref. 3 ', 7705555375),
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
(390, 'EMPAQUE PARA PISTOLA Ref. 8 ', 7705555390),
(391, 'SILICONAS SQ SPRAY. Ref. Silicona Spray ', 7705555391),
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
(403, 'VETEADORES Ref. 1 ', 7705555403),
(404, 'VETEADORES Ref. 2 ', 7705555404),
(405, 'BISTURIS Ref. 1 ', 7705555405),
(406, 'BISTURIS Ref. 2 ', 7705555406),
(407, 'BISTURIS Ref. 3 ', 7705555407),
(408, 'BISTURIS Ref. 4 ', 7705555408),
(409, 'PISTOLAS DE SILICONA Ref. 1 ', 7705555409),
(410, 'PISTOLAS DE SILICONA Ref. 2 ', 7705555410),
(411, 'PISTOLAS DE SILICONA Ref. 3 ', 7705555411),
(412, 'SUPERBONDER Ref 1 ', 7705555412),
(413, 'BALDES Ref. 1 ', 7705555413),
(414, 'BALDES Ref. 2 ', 7705555414),
(415, 'BONETTE Ref. 1 ', 7705555415),
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
(430, 'ACCESORIOS LIMPIEZA. Ref. 3 ', 7705555430),
(431, 'CATALIZADOR CATALIZADOR ', 7705555431),
(434, 'Rodillo Imagen Rodillo Imagen N-1 ', 7705555434),
(441, 'Cinta Aislante Celux Ref . 1 ', 7705555441),
(442, 'Cinta Aislante Celux Ref . 2 ', 7705555442),
(443, 'SQ PULITURA SQ Pulitura ', 7705555443),
(444, 'AEROGRAFO GOLDEN F75 Aerografo Golden F-75 ', 7705555444),
(445, 'AEROGRAFO GOLDEN F75 Aerografo Golden F-75 ', 7705555445),
(446, 'AEROGRAFO H 2000 AEROGRAFO H 2000. ', 7705555446),
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
(477, 'BROCHAS FLICA  Ref 6 ', 7705555477);

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
(106, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE', 'rodillo linea verde.jpg', 'Apto para aplicar pinturas  (esmaltes, epoxicos y vinilos) alta durabilidad en su uso. Resistente a los solventes. <br>\r\nRodillos elaborados en felpa de peluche, color verde.<br>', 'Rodillos'),
(107, 'RODILLOS  LÃNEA ESPUMA', 'rodillo-espuma.jpg', 'Apto para aplicar barnices o pinturas<br> \r\nRodillos elaborados en espuma.<br>\r\n100% industria Colombiana .', 'Rodillos'),
(108, 'RODILLOS LÃNEA ECONÃ“MICA â€“ FELPA DE PELUCHE', 'rodillo-espuma.jpg', 'Apto para aplicar pinturas  (esmaltes, vinilos) alta durabilidad en su uso. <br>\r\nResistente a los solventes. <br>\r\nRodillos elaborados en felpa de peluche  100% industria colombiana ', 'Rodillos'),
(109, 'RODILLOS LÃNEA PROFESIONAL - FELPA', 'rodillo profesional.jpg', 'Apto para aplicar pinturas  (esmaltes, vinilos) alta durabilidad en su uso. <br>\r\nResistente a los solventes. <br>\r\nRodillos elaborados en felpa de peluche  100% industria colombiana.<br> \r\nCARACTERISTICAS<br>\r\nâ€¢ Altura felpa 20 ml.', 'Rodillos'),
(110, 'LINEA DE RODILLOS MASTDER', 'rodillo-poliuretano.jpg', 'Indicado para la aplicaciÃ³n de  pinturas vinÃ­licas ,  poliÃ©ster, lÃ¡tex, aceites etc.<br> Utilizado en diferentes superficies, este rodillo cuenta  con materias primas de primera calidad, tecnologÃ­a industrial y un meticuloso trabajo artesanal.', 'Rodillos'),
(111, 'RODILLOS EN POLIURETANO', 'rodillo-poliuretano.jpg', 'Rodillo para usos especÃ­ficos de acuerdo al sustrato', 'Rodillos'),
(112, 'REPUESTOS PARA PISTOLA SPRAY', 'repuestos pistola.jpg', 'Repuestos para pistola spray  y sagola. Elaborados en 12L 14 y bronce, con el fin de cubrir en un alto margen a los requerimientos  del  pintor y de igual manera satisfacer sus necesidades.', 'Accesorios para Pistola'),
(113, 'REPUESTO DE VILBISS', 'VASOS PISTOLA â€“ AERÃ“GRAFOS.jpg', 'Repuestos para pistola  de vilbiss.<br> Elaborados en acero y bronce, con el fin de cubrir en un alto margen las necesidades del  pintor y de igual manera satisfacer sus necesidades. ', 'Accesorios para Pistola'),
(114, 'BROCHA TIPO PROFESIONAL', 'BROCHA-PROFESIONAL.jpg', 'Brocha tipo profesional de alta calidad, diseÃ±ada con el fin de cumplir las exigencias del pintor profesional y personas del comÃºn.<br>\r\nEstÃ¡ diseÃ±ada con cerdas de pelo natural importadas y seleccionadas.<br> La cerda natural da durabilidad y calidad en la aplicaciÃ³n de la pintura. ', 'Brochas'),
(115, 'BROCHA MULTIUSOS', 'BROCHA-MULTIUSOS.jpg', 'DiseÃ±ada para todos los usos y comodidades para personas que utilizan una brocha para trabajos de poco tiempo, y menos durabilidad.<br> Fabricada con cerdas naturales de calidad y con un mango econÃ³mico (no macizo).', 'Brochas'),
(116, 'PINCEL PLANO -  REDONDO', 'PINCELES.jpg', 'CARACTERISTICAS<br>\r\nâ€¢ Haz de Pelo: pelo natural <br>\r\nâ€¢ Virola: conecta el mango con el pelo.<br>\r\nâ€¢ Mango: es de madera laqueada para protegerlo del agua y los solventes.<br> \r\nEstos pinceles son recomendables para la pintura tradicional, especialmente en tÃ©cnicas finas como la acuarela y el Ã³leo.', 'Pinceles'),
(117, 'ESPATULA PLASTICA', 'ESPATULA-PLASTICA.jpg', 'EspÃ¡tula plÃ¡stica con gran variedad de usos', 'Espatulas'),
(118, 'ESPÃTULA METÃLICA', 'ESPATULA-METALICA.jpg', 'Nuestra industria le ofrece un tipo de espÃ¡tula metÃ¡lica flexible, con materiales antioxidantes para no manchar su trabajo y para mayor durabilidad. Es una espÃ¡tula con flexibilidad adecuada para la aplicaciÃ³n de masillas plÃ¡sticas para Ã¡rea automotriz, estucos plÃ¡sticos utilizados en  decoraciÃ³n de interiores.', 'Espatulas'),
(119, 'Kit De Espatula', 'ESPATULA-METALICA-RECT.jpg', 'DiseÃ±adas para ayudar a la aplicaciÃ³n de la masilla haciendo una aplicaciÃ³n tÃ©cnica.<br> Los diferentes tamaÃ±os de espÃ¡tulas flexibles dan terminados de alta calidad.', 'Espatulas'),
(120, 'ESPATULA METALICA MEZCLADORA', 'ESPATULA-METALICA-MEZCLADORA.jpg', 'Es usada en la mezcla de  todo tipo de pinturas, como una herramienta funcional y eficaz. <br>\r\nNuestro portafolio ofrece una gran variedad de espÃ¡tulas metÃ¡licas, diseÃ±adas para mezclar desde cuÃ±etes hasta octavos de pintura.<br>\r\nâ€¢ Hoja. Elaborada en acero inoxidable, de fÃ¡cil uso y gran durabilidad ', 'Espatulas'),
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
(132, 'AERÃ“GRAFO H200G1', 'AERÃ“GRAFO H200G1.jpg', 'Aerografo metÃ¡lico para Trabajo', 'Aerografos'),
(133, 'MINI PISTOLA DE GRAVEDAD F2', 'MINI PISTOLA DE GRAVEDAD.jpg', 'â€¢ Para trabajos profesionales con gran calidad .<br>\r\nâ€¢ Posee una funciÃ³n de pulverizaciÃ³n perfecta.<br>\r\nâ€¢ Peso liviano y opera fÃ¡cilmente.<br>\r\nâ€¢ Principalmente usada para Ã¡reas pequeÃ±as.<br> ', 'Pistolas'),
(134, 'PISTOLA PARA BODY  SHOOT PS-8 RANGER', 'PISTOLA PARA BODY SHOOT PS-8 RANGER.jpg', 'Uso body Shoot<br>\r\n\r\n Presion recomendada 58 102 Psi <br>\r\n\r\n Maxima presion 130 Psi', 'Pistolas'),
(135, 'PISTOLA DE BAJA FLICA', 'PISTOLA DE BAJA FLICA.jpg', 'Pistola para Trabajo pesado de gran versatilidad', 'Pistolas'),
(136, 'PISTOLA HOPEX 472 A1', 'PISTOLA DE BAJA HOPEX 472 A1.jpg', ' De Baja PresiÃ³n 1000 Ml 1.3 Mm Metalico', 'Pistolas'),
(137, 'PISTOLA MC CASTI', 'PISTOLA MC CASTI.jpg', 'Pistola para pintar<br>\r\nPistola de spray en una sola pieza, con vaso metÃ¡lico de mayor durabilidad.<br>\r\nMaterial	Aluminio<br>\r\nUso	Para aplicaciÃ³n de pintura y recubrimientos.<br>\r\nNo exceder las 50 libras de presiÃ³n', 'Pistolas'),
(138, 'SPRAYIR GOLD', 'PISTOLA SPRAYIR GOLD.jpg', 'Es una pistola de baja presiÃ³n que se puede adaptar a cualquier tipo de compresor; bajo consumo de aire y vaso en aluminio reforzado para mayor durabilidad.', 'Pistolas'),
(139, 'VASOS DE PISTOLAS Y AEROGRAFOS', 'VASOS PISTOLA â€“ AERÃ“GRAFOS.jpg', 'Vasos para Pistolas y Aerografos .<br>\r\nRepuestos Aer..h2000.<br>\r\nRepuestos W 71. <br>\r\nRepuestos W 77.', 'Aerografos'),
(140, 'GUANTES DE CAUCHO', 'GUANTES DE CAUCHO.jpg', 'â€¢ Forma anatÃ³mica.<BR>\r\nâ€¢ Antideslizantes.<BR>\r\nâ€¢ Resistentes al uso.<BR>\r\nâ€¢ LÃ¡tex 100% natural.<BR>\r\nâ€¢ Satinados suaves de calzar.<BR> ', 'Guantes'),
(141, 'GUANTE CARNAZA', 'GUANTE CARNAZA.jpg', 'Ideal para trabajos de corte de lÃ¡mina, manejo de filos, soldadores, operadores, fundiciones, agricultores, bodegueros, torneros, electricistas, supervisores, entre otras. ', 'Guantes'),
(142, 'GUANTE DE NITRILO', 'GUANTE DE NITRILO.jpg', 'â€¢ LÃ¡tex sintÃ©tico de gran resistencia quÃ­mica.<br>\r\nâ€¢ Flexible y adecuado a todo tipo de pieles.<br>\r\nâ€¢ AntialÃ©rgico.<br>\r\nLos guantes de nitrilo suponen una excelente alternativa al lÃ¡tex normal ya que proporcionan una barrera de protecciÃ³n ante agentes infecciosos y productos quÃ­micos.<br> \r\n', 'Guantes'),
(143, 'GUANTE DE VINILO', 'GUANTE DE VINILO.jpg', 'Guante de vinilo, no estÃ©ril, libre de polvo y de un solo uso.<br>\r\nAplicaciones tÃ­picas:<br>\r\nâ€¢Procesos no invasivos como muestreos, examen mÃ©dicos, curaciones, entre otros.<br>\r\nâ€¢Consultas odontolÃ³gicas.<br>\r\nâ€¢Para uso en laboratorios.<br>\r\nâ€¢Manipular dispositivos mÃ©dicos y evitar contacto con la piel.<br>', 'Guantes'),
(144, 'GUANTES ESPECIALES', 'GUANTES DE POLIURETAN.jpg', 'Diferentes tipos de guantes para todo tipo de trabajo Industrial', 'Guantes'),
(145, 'LLANAS METALICAS', 'LLANAS METALICAS.jpg', 'Las llanas metÃ¡licas estÃ¡n hechas de una lÃ¡mina en acero inoxidable para estucos venecianos y otros. <br>Esta lÃ¡mina no contamina los colores cuando se estÃ© trabajando en especial el color blanco.', 'Espatulas'),
(146, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL', 'IMPERMEABILIZANTES.jpg', 'Es un recubrimiento impermeabilizante  automotriz  a base de resinas  acrÃ­licas de excelente elasticidad, adherencia, cubrimiento y protecciÃ³n anticorrosiva.', 'Impermeabilizantes'),
(147, 'EMPAQUE PARA PISTOLA', 'LÃNEA DE EMPAQUE PARA PISTOLA.jpg', 'Empaques para los diferentes tipos de pistolas.', 'Accesorios para Pistola'),
(148, 'SILICONAS SQ SPRAY.', 'SILICONAS SQ SPRAY.jpg', 'Es un producto versÃ¡til, Ãºtil tanto para el cuidado y mantenimiento de su vehÃ­culo como en el hogar.<br> Por su alto contenido en silicona.<br>\r\nLimpia, protege y lubrica a la vez que proporciona el brillo. <br>Utilizado en:<br> FÃ³rmica, metales, vinilos, lonas, tableros de auto, etc.', 'Siliconas'),
(149, 'SILICONA EN TUBO.', 'SILICONA.jpg', 'Silicona Antihongos de tipo Industrial para diversos usos.', 'Siliconas'),
(150, 'CAUCHO LIJADOR', 'CAUCHO LIJADOR.jpg', 'Caucho para lijado profesional en Talleres Automotrices- CarpinterÃ­as-Fibra de Vidrio-ConstrucciÃ³n.', 'Cauchos'),
(152, 'FLEXOMETRO', 'FLEXOMETRO.jpg', 'Flexometros para trabajo en tres referencias', 'Metros'),
(153, 'VETEADORES', 'VETEADORES.jpg', 'Cauchos para formacion de Vetas Decorativas', 'Cauchos'),
(154, 'BISTURIS', 'BISTURI.jpg', 'Bisturis de cuchillas intercambiables para trabajo liviano y pesado ', 'Espatulas'),
(155, 'PISTOLAS DE SILICONA', 'PISTOLAS DE SILICONA.jpg', 'Tres tipos de Pistolas para sus tubos de silicona de acuerdo al trabajo.', 'Siliconas'),
(157, 'BALDES', 'BALDES.jpg', 'Balde de Caucho para uso pesado- construccion', 'Cauchos'),
(158, 'BONETTE', 'BONETTE.jpg', 'Bonette para pulidoras elÃ©ctricas de la industria Automotriz.', 'Rodillos'),
(159, 'GUANTES PEPAS', 'GUANTES PEPAS.jpg', 'Guante de Pepas para Agarre .', 'Guantes'),
(160, 'DISCOS DE CORTE', 'DISCOS DE CORTE.jpg', 'Discos para pulidora y sierra', 'Espatulas'),
(161, 'PISTOLA PETROLIZADORA.', 'PISTOLA PETROLIZADORA.jpg', 'Pistola para aplicacion de productos de limpieza por asperciÃ³n.', 'Pistolas'),
(162, 'ESQUINERO Y CAUCHO GUIA', 'ESQUINERO Y CAUCHO GUIA.jpg', 'Para pintar esquinas donde el rodillo no ingresa.', 'Rodillos'),
(163, 'RESPIRADOR Y GAFAS', 'RESPIRADOR Y GAFAS.jpg', 'Respirador y gafas para trabajo Industrial.', 'Seguridad Industrial'),
(164, 'ACCESORIOS LIMPIEZA.', 'ACCESORIOS LIMPIEZA.jpg', 'Bayetilla ,escobillin y Cepillos de Alambre.', 'Seguridad Industrial'),
(172, 'Cinta Aislante Celux', 'celux.jpg', 'Cinta Aislante de gran calidad para uso domestico o industrial.', 'Cintas'),
(173, 'SQ PULITURA', 'SQ POLITURA.jpg', 'Producto Profesional para el pulido de Automoviles', 'Impermeabilizantes'),
(174, 'AEROGRAFO GOLDEN F75', 'AEROGRAFO F-75 GOLDEN.jpg', 'Aerografo profesional para uso industrial de gran versatilidad y manejo.', 'Aerografos'),
(175, 'AEROGRAFO H 2000', 'aerografo h 2000.jpg', 'Aerografo profesional de gran versatilidad con tanque plÃ¡stico y accesorios.', 'Aerografos'),
(176, 'ESPATULA HOPEX', 'espatulaHpx.jpg', 'EspÃ¡tula de aplicaciÃ³n en acero inoxidable de alta calidad para trabajo pesado en 8 tamaÃ±os .', 'Espatulas'),
(197, 'BROCHAS FLICA ', 'brochas flica E.jpg', 'Brochas de calidad con excelente precio.mango plÃ¡stico elaborada en 6 referencias (ver Listado) ', 'Brochas');

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
(197, 'RODILLOS OVEJERO', 'Ref. 3', '4\" Cabo Plastico'),
(198, 'RODILLOS OVEJERO', 'Ref. 4', '5\" Cabo Plastico'),
(199, 'RODILLOS OVEJERO', 'Ref. 5', '3\" Cabo Metalico'),
(200, 'RODILLOS OVEJERO', 'Ref. 6', '4\" Cabo Metalico'),
(201, 'RODILLOS OVEJERO', 'Ref. 7', '6\" Cabo Metalico'),
(202, 'RODILLOS OVEJERO', 'Ref. 8', '9\" Cabo Metalico'),
(203, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE', 'Ref.1', '1\" Altura felpa 10ml, Cabo Plastico'),
(204, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE', 'Ref.2', '2\" Altura felpa 10ml, Cabo Plastico'),
(205, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE', 'Ref.3', '4\" Altura felpa 10ml, Cabo Plastico (verde-amarillo)'),
(206, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE', 'Ref.4', '2\" Altura felpa 10ml, Cabo Metalico'),
(207, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE', 'Ref.5', '4\" Altura felpa 10ml, Cabo Metalico'),
(208, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE', 'Ref.6', '6\" Altura felpa 10ml, Cabo Metalico (verde-amarillo)'),
(209, 'RODILLOS LÃNEA VERDE- FELPA PELUCHE', 'Ref.7', '9\" Altura felpa 10ml, Cabo Metalico.'),
(211, 'RODILLOS  LÃNEA ESPUMA', 'Ref. 1 ', '2â€  densidad 26, cabo plÃ¡stico'),
(212, 'RODILLOS  LÃNEA ESPUMA', 'Ref. 2 ', '4â€  densidad 26, cabo plÃ¡stico'),
(213, 'RODILLOS  LÃNEA ESPUMA', 'Ref. 3 ', '6â€  densidad 26, cabo metÃ¡lico'),
(214, 'RODILLOS  LÃNEA ESPUMA', 'Ref. 4 ', '9â€  densidad 26, cabo metÃ¡lico'),
(215, 'RODILLOS LÃNEA ECONÃ“MICA â€“ FELPA DE PELUCHE', 'Ref. 1', '9â€  altura felpa 20 ml, cabo metÃ¡lico, color amarillo'),
(216, 'RODILLOS LÃNEA ECONÃ“MICA â€“ FELPA DE PELUCHE', 'Ref. 2', '9â€  altura felpa 20 ml, cabo metÃ¡lico, color azul'),
(217, 'RODILLOS LÃNEA ECONÃ“MICA â€“ FELPA DE PELUCHE', 'Ref. 3', '9â€  altura felpa 20 ml, cabo metÃ¡lico, color naranja'),
(218, 'RODILLOS LÃNEA PROFESIONAL - FELPA', 'Ref. 1', '2â€   cabo plÃ¡stico'),
(219, 'RODILLOS LÃNEA PROFESIONAL - FELPA', 'Ref. 2', '3â€   cabo metÃ¡lico'),
(220, 'RODILLOS LÃNEA PROFESIONAL - FELPA', 'Ref. 3', '4â€   cabo metÃ¡lico'),
(221, 'RODILLOS LÃNEA PROFESIONAL - FELPA', 'Ref. 4', '6â€   cabo metÃ¡lico'),
(222, 'RODILLOS LÃNEA PROFESIONAL - FELPA', 'Ref. 5', '7â€   cabo metÃ¡lico'),
(223, 'RODILLOS LÃNEA PROFESIONAL - FELPA', 'Ref. 6', '9â€   cabo metÃ¡lico'),
(224, 'LINEA DE RODILLOS MASTDER', 'Ref. 902', 'Rodillo de 9â€ (230mm) de longitud en felpa acrÃ­lica y poliÃ©ster.'),
(225, 'LINEA DE RODILLOS MASTDER', 'Ref. 912', 'Rodillo de 9â€ Rodillo el pintor felpa.'),
(226, 'LINEA DE RODILLOS MASTDER', 'Ref. 612', 'Rodillo 6â€ versÃ¡til   felpa verde.'),
(227, 'LINEA DE RODILLOS MASTDER', 'Ref. 212', 'Rodillo mastder 2â€ felpa verde'),
(228, 'LINEA DE RODILLOS MASTDER', 'Ref. 312', 'Rodillo mastder 3â€ felpa verde'),
(229, 'RODILLOS EN POLIURETANO', 'Ref. 901', 'Rodillo mastder      9â€ poliuretano'),
(230, 'RODILLOS EN POLIURETANO', 'Ref. 611', 'Rodillo pinta-fÃ¡cil  6â€ poliuretano'),
(231, 'RODILLOS EN POLIURETANO', 'Ref. 301', 'Rodillo mastder      3â€ poliuretano'),
(232, 'RODILLOS EN POLIURETANO', 'Ref. 201', 'Rodillo mastder      2â€ poliuretano'),
(233, 'REPUESTOS PARA PISTOLA SPRAY', 'N 1', 'Acople rÃ¡pido.'),
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
(252, 'REPUESTOS PARA PISTOLA SPRAY', 'N 20', 'UniÃ³n hembra.'),
(253, 'REPUESTOS PARA PISTOLA SPRAY', 'N 21', 'UniÃ³n macho.'),
(254, 'REPUESTOS PARA PISTOLA SPRAY', 'N 22', 'UniÃ³n manguera.'),
(255, 'REPUESTOS PARA PISTOLA SPRAY', 'N 23', 'Anillo (rf)'),
(256, 'REPUESTO DE VILBISS', 'N 1', 'Aguja de vilbiss'),
(257, 'REPUESTO DE VILBISS', 'N 2', 'Anillo'),
(258, 'REPUESTO DE VILBISS', 'N 3', 'Boquilla abanico'),
(259, 'REPUESTO DE VILBISS', 'N 4', 'Boquilla chorro'),
(260, 'REPUESTO DE VILBISS', 'N 5', 'Estabilizador'),
(261, 'REPUESTO DE VILBISS', 'N 6', 'Impulsor'),
(262, 'REPUESTO DE VILBISS', 'N 7', 'Racor'),
(263, 'REPUESTO DE VILBISS', 'N 8', 'Tobera'),
(264, 'REPUESTO DE VILBISS', 'N 9', 'Tubo'),
(265, 'REPUESTO DE VILBISS', 'N 10', 'Resorte largo'),
(266, 'BROCHA TIPO PROFESIONAL', 'Ref.1', 'Brocha profesional  Â½â€'),
(267, 'BROCHA TIPO PROFESIONAL', 'Ref.2', 'Brocha profesional 1 Â½â€'),
(269, 'BROCHA TIPO PROFESIONAL', 'Ref.3', 'Brocha profesional  1 Â½â€'),
(270, 'BROCHA TIPO PROFESIONAL', 'Ref.4', 'Brocha profesional  2â€'),
(271, 'BROCHA TIPO PROFESIONAL', 'Ref.5', ' Brocha profesional  2 Â½â€'),
(272, 'BROCHA TIPO PROFESIONAL', 'Ref.6', ' Brocha profesional  3â€'),
(273, 'BROCHA TIPO PROFESIONAL', 'Ref.7', ' Brocha profesional  3 Â½â€'),
(274, 'BROCHA TIPO PROFESIONAL', 'Ref.8', ' Brocha profesional  4â€'),
(275, 'BROCHA TIPO PROFESIONAL', 'Ref.9', ' Brocha profesional  5â€'),
(276, 'BROCHA TIPO PROFESIONAL', 'Ref.10', ' Brocha profesional  6â€'),
(277, 'BROCHA MULTIUSOS', 'Ref. 1', 'Brocha multiusos 1â€'),
(278, 'BROCHA MULTIUSOS', 'Ref. 2', 'Brocha multiusos 1 Â½â€'),
(279, 'BROCHA MULTIUSOS', 'Ref. 3', 'Brocha multiusos 2â€'),
(280, 'BROCHA MULTIUSOS', 'Ref. 4', 'Brocha multiusos 2 Â½â€'),
(281, 'BROCHA MULTIUSOS', 'Ref. 5', 'Brocha multiusos 3â€'),
(282, 'BROCHA MULTIUSOS', 'Ref. 6', 'Brocha multiusos 4â€'),
(283, 'BROCHA MULTIUSOS', 'Ref. 7', 'Brocha multiusos 5â€'),
(284, 'BROCHA MULTIUSOS', 'Ref. 8', 'Brocha multiusos 6â€'),
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
(297, 'ESPATULA PLASTICA', 'Ref. 1', 'EspÃ¡tula plÃ¡stica pequeÃ±a'),
(298, 'ESPATULA PLASTICA', 'Ref. 2', 'EspÃ¡tula plÃ¡stica mediana'),
(299, 'ESPATULA PLASTICA', 'Ref. 3', 'EspÃ¡tula plÃ¡stica mezcladora'),
(300, 'ESPÃTULA METÃLICA', 'Ref.1', '1\" Espatula Metalica'),
(301, 'ESPÃTULA METÃLICA', 'Ref.2', '1 Â½\" Espatula Metalica'),
(302, 'ESPÃTULA METÃLICA', 'Ref.3', '2\" Espatula Metalica'),
(303, 'ESPÃTULA METÃLICA', 'Ref.4', '2 Â½\" Espatula Metalica'),
(304, 'ESPÃTULA METÃLICA', 'Ref. 5', '3\" Espatula Metalica'),
(305, 'ESPÃTULA METÃLICA', 'Ref. 6', '4\" Espatula Metalica'),
(306, 'ESPÃTULA METÃLICA', 'Ref. 7', '5\" Espatula Metalica'),
(307, 'ESPÃTULA METÃLICA', 'Ref. 8', '6\" Espatula Metalica'),
(308, 'ESPÃTULA METÃLICA', 'Ref. 9', '8\" Espatula Metalica'),
(309, 'ESPÃTULA METÃLICA', 'Ref. 10', '10\" Espatula Metalica'),
(310, 'Kit De Espatula', 'Kit de Espatulas', 'Juego de EspÃ¡tulas MetÃ¡licas '),
(314, 'ESPATULA METALICA MEZCLADORA', 'Ref.6', '1/4 galÃ³n  EspÃ¡tula Mezcladora'),
(315, 'ESPATULA METALICA MEZCLADORA', 'Ref.8', '1/2 galÃ³n  EspÃ¡tula Mezcladora'),
(316, 'ESPATULA METALICA MEZCLADORA', 'Ref.10', '1 galÃ³n  EspÃ¡tula Mezcladora'),
(317, 'CINTA ENMASCARAR CELLUX', 'Ref. 1', '1/4 \" 40 metros'),
(318, 'CINTA ENMASCARAR CELLUX', 'Ref. 2', '1/2 \" 40 metros'),
(319, 'CINTA ENMASCARAR CELLUX', 'Ref. 3', '3/4 \" 40 metros'),
(320, 'CINTA ENMASCARAR CELLUX', 'Ref. 4', '1 \" 40 metros'),
(321, 'CINTA ENMASCARAR CELLUX', 'Ref. 5', '1-1/2 \" 40 metros'),
(322, 'CINTA ENMASCARAR CELLUX', 'Ref. 6', '2 \" 40 metros'),
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
(335, 'CINTA EMPAQUE CELLUX', 'Ref. 3', 'largo-100 mts'),
(336, 'CINTA EMPAQUE CELLUX', 'Ref. 4', 'largo-200 mts'),
(340, 'CINTA TEFLON', 'Ref. 1', '1/2\" pequeÃ±a'),
(341, 'CINTA TEFLON', 'Ref. 2', '3/4\" pequeÃ±a'),
(342, 'CINTA TEFLON', 'Ref. 3', '3/4\" Grande'),
(343, 'CINTA TEFLON', 'Ref. 4', '19mm  Super'),
(344, 'AERÃ“GRAFO W71 RANGER PROFESIONAL', 'w_716', '400ml capacidad vaso Entrada de Alimentacion 1/4\"'),
(345, 'AEROGRAFO F75 RANGER', 'Ref.  F75', 'vaso 400ml - toma 1/4\"ml - CFM 3-8  '),
(346, 'AEROGRAFO F75 USA 600CC', 'Ref. f75 -600', 'Entrada1/4\"- 600ml - CFM 3-8'),
(347, 'AEROGRAFO H887 RANGER', 'Ref. H887', 'entrada 1/4\"- 600 ml - 45-60 PSI'),
(348, 'AEROGRAFO S980B HOPEX', 'Ref. S980B', 'Vaso metÃ¡lico 1000 ml-Boquilla abanico de 1.4 mm'),
(349, 'AERÃ“GRAFO H200G1', 'Ref. H200G1', 'Vaso MetÃ¡lico 100ml- Boquilla abanico 0.8 mm - PSI 50'),
(350, 'AERÃ“GRAFO H200G1', 'Ref. H200G2', 'Vaso PlÃ¡stico 100ml- Boquilla abanico 0.8 mm - PSI 50'),
(351, 'MINI PISTOLA DE GRAVEDAD F2', 'Ref. F2', 'Vaso 200ml- Entrada por Gravedad- entrada 1/4 NPS'),
(352, 'PISTOLA PARA BODY  SHOOT PS-8 RANGER', 'Ref . PS-8 Ranger', '58 102 Psi - MÃ¡xima presiÃ³n 130 Psi'),
(353, 'PISTOLA DE BAJA FLICA', 'Ref. 472A Flica', 'Uso Standar-50 PSI'),
(354, 'PISTOLA HOPEX 472 A1', 'Ref. Hopex 472 A1', 'Pistola De Baja PresiÃ³n 1000 Ml 1.3 Mm Metalico 472a1 Hopex'),
(355, 'PISTOLA MC CASTI', 'Ref. Pistola Mc Casti', 'Pistola de alta Calidad y Trabajo pesado.'),
(356, 'SPRAYIR GOLD', 'Ref.Sprayir Gold', 'Es una pistola de baja presiÃ³n que se puede adaptar a cualquier tipo de compresor; bajo consumo de aire y vaso en aluminio reforzado para mayor durabilidad.'),
(357, 'VASOS DE PISTOLAS Y AEROGRAFOS', 'Ref. Repuestos Pistolas y Aerografos', 'Vasos para Pistolas y Aerografos , Kit H2000-W 77-W-71'),
(358, 'GUANTES DE CAUCHO', 'Ref. 1', 'Guante de Caucho tipo Industrial'),
(359, 'GUANTE CARNAZA', 'Ref 1', 'Guante Carnaza Uso pesado'),
(360, 'GUANTE DE NITRILO', 'Ref. 1', 'Guante nitrilo negro T. S'),
(361, 'GUANTE DE NITRILO', 'Ref. 2', 'Guante nitrilo negro-azul T. M'),
(362, 'GUANTE DE NITRILO', 'Ref. 3', 'Guante nitrilo negro T. L'),
(363, 'GUANTE DE NITRILO', 'Ref.4', 'Guante nitrilo azul    T.M'),
(364, 'GUANTE DE VINILO', 'Ref 1', 'Guante en vinilo para usos MÃ©dicos y Odontologicos'),
(366, 'GUANTES ESPECIALES', 'Ref 1', 'Guante PoliuretÃ¡no Talla 8-9'),
(367, 'GUANTES ESPECIALES', 'Ref 2', 'Guante Latex Rojo Talla 8-9'),
(368, 'GUANTES ESPECIALES', 'Ref 3', 'Guante Impermeable Talla 8-9'),
(369, 'GUANTES ESPECIALES', 'Ref 4', 'Guante Nylon Siliconado'),
(370, 'GUANTES ESPECIALES', 'Ref SR 913', 'Guante Nitrilo.'),
(371, 'GUANTES ESPECIALES', 'Ref SR 903', 'Guante Nitrilo Triton.'),
(372, 'GUANTES ESPECIALES', 'Ref SR 1601', 'Guante Nitrilo Triton.'),
(373, 'LLANAS METALICAS', 'Ref. 1', 'Llana Standar.'),
(374, 'LLANAS METALICAS', 'Ref. 2', 'Llana Veneciana.'),
(375, 'LLANAS METALICAS', 'Ref. 3', 'Llana LeÃ³n.'),
(376, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL', 'Ref 1', 'Color Negro'),
(377, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL', 'Ref 2', 'Color Blanco'),
(378, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL', 'Ref 3', 'Color Gris'),
(379, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL', 'Ref 4', 'Color Verde.'),
(380, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL', 'Ref 5', 'Color Rojo.'),
(381, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL', 'Ref 6', 'Color Amarillo.'),
(382, 'IMPERMEABILIZANTES FLICACRYL-PROCRYL', 'Ref 7', 'Color Azul.'),
(383, 'EMPAQUE PARA PISTOLA', 'Ref. 1', 'Empaque Cuero'),
(384, 'EMPAQUE PARA PISTOLA', 'Ref. 2', 'Empaque Caucho Negro.'),
(385, 'EMPAQUE PARA PISTOLA', 'Ref. 3', 'Empaque Goni Negro.'),
(386, 'EMPAQUE PARA PISTOLA', 'Ref. 4', 'Empaque Goni Gris.'),
(387, 'EMPAQUE PARA PISTOLA', 'Ref. 5', 'Empaque Blanco.'),
(388, 'EMPAQUE PARA PISTOLA', 'Ref. 6', 'Empaque Acrilico.'),
(389, 'EMPAQUE PARA PISTOLA', 'Ref. 7', 'Empaque Aguja.'),
(390, 'EMPAQUE PARA PISTOLA', 'Ref. 8', 'Rosca PlÃ¡stica.'),
(391, 'SILICONAS SQ SPRAY.', 'Ref. Silicona Spray', 'Silicona en tres presentaciones Uva-LimÃ³n-Fresa.'),
(392, 'SILICONA EN TUBO.', 'Ref 1', 'Silicona en Tubo para uso Industrial.'),
(393, 'CAUCHO LIJADOR', 'Ref 1', 'Caucho Plano Lijado Profesional.'),
(394, 'CAUCHO LIJADOR', 'Ref 2', 'Caucho Curvo Lijado Profesional.'),
(400, 'FLEXOMETRO', 'Ref . 1', 'Flexometro de 3mts.'),
(401, 'FLEXOMETRO', 'Ref . 2', 'Flexometro de 5mts.'),
(402, 'FLEXOMETRO', 'Ref . 3', 'Flexometro de 7.5 mts.'),
(403, 'VETEADORES', 'Ref. 1', 'Veteador en Caucho Ultra PequeÃ±o.'),
(404, 'VETEADORES', 'Ref. 2', 'Veteador en Caucho Ultra Grande.'),
(405, 'BISTURIS', 'Ref. 1', 'Bisturi Profesional.'),
(406, 'BISTURIS', 'Ref. 2', 'Bisturi Economico.'),
(407, 'BISTURIS', 'Ref. 3', 'Bisturi MetÃ¡lico Grande.'),
(408, 'BISTURIS', 'Ref. 4', 'Set de Cuchillas.'),
(409, 'PISTOLAS DE SILICONA', 'Ref. 1', 'Pistola de Silicona con Cuerpo en Aluminio.'),
(410, 'PISTOLAS DE SILICONA', 'Ref. 2', 'Pistola de Silicona tipo Esqueleto.'),
(411, 'PISTOLAS DE SILICONA', 'Ref. 3', 'Pistola de Silicona tipo Media CaÃ±a.'),
(413, 'BALDES', 'Ref. 1', 'Balde PlÃ¡stico Mastder.'),
(414, 'BALDES', 'Ref. 2', 'Balde Economico.'),
(415, 'BONETTE', 'Ref. 1', 'Bonette para Pulidora de Pintura Automotriz.'),
(416, 'GUANTES PEPAS', 'Ref. 1', 'Guante de pepas antideslizantes doble cara.'),
(417, 'GUANTES PEPAS', 'Ref. 2', 'Guante de pepas antideslizantes una cara.'),
(418, 'DISCOS DE CORTE', 'Ref. 1', 'Disco pulidora 4-1/2-Diamante.'),
(419, 'DISCOS DE CORTE', 'Ref. 2', 'Disco  4-1/2-Sierra.'),
(420, 'DISCOS DE CORTE', 'Ref. 3', 'Disco pulidora 7-Diamante.'),
(421, 'PISTOLA PETROLIZADORA.', 'Ref. DO-10-J RANGER', 'Petrolizadora de trabajo pesado.'),
(422, 'PISTOLA PETROLIZADORA.', 'Ref. DO-10-HOPEX', 'Petrolizadora de trabajo Industrial.'),
(423, 'ESQUINERO Y CAUCHO GUIA', 'Ref. 1', 'Esquinero en felpa de alta Calidad.'),
(424, 'ESQUINERO Y CAUCHO GUIA', 'Ref. 2', 'Caucho Guia.'),
(425, 'RESPIRADOR Y GAFAS', 'Ref. 1', 'Gafas de protecciÃ³n Unilente Ranger.'),
(426, 'RESPIRADOR Y GAFAS', 'Ref. Doble TG RANGER.', 'Respirador Doble TG RANGER.'),
(427, 'RESPIRADOR Y GAFAS', 'Ref. 2.', 'Repuesto Doble TG RANGER. para gases, polvo, veneno.'),
(428, 'ACCESORIOS LIMPIEZA.', 'Ref. 1', 'Cepillo (Grata) de Alambre.'),
(429, 'ACCESORIOS LIMPIEZA.', 'Ref. 2', 'Escobillon plastico.'),
(430, 'ACCESORIOS LIMPIEZA.', 'Ref. 3', 'Bayetilla en Rojo y Blanco.'),
(431, 'CATALIZADOR', 'CATALIZADOR', 'PRUEBA'),
(434, 'Rodillo Imagen', 'Rodillo Imagen N-1', 'rodillos que establece marcas'),
(441, 'Cinta Aislante Celux', 'Ref . 1', 'Cinta PequeÃ±a de 16mm por 6mts. Profesional Industrial.'),
(442, 'Cinta Aislante Celux', 'Ref . 2', 'Cinta Grande de 16mm por 15mts. Profesional Industrial.'),
(443, 'SQ PULITURA', 'SQ Pulitura', 'Emulsion para uso automotriz en presentaciÃ³n de 360 cm3'),
(444, 'AEROGRAFO GOLDEN F75', 'Aerografo Golden F-75', 'Aerografo profesional con vaso Metalico de capacidad de'),
(445, 'AEROGRAFO GOLDEN F75', 'Aerografo Golden F-75', 'Aerografo profesional con vaso de capacidad '),
(446, 'AEROGRAFO H 2000', 'AEROGRAFO H 2000.', 'Profesional con tanque plÃ¡stico alta durabilidad.'),
(447, 'ESPATULA HOPEX', 'Ref 1', 'EspÃ¡tula de 1\".'),
(448, 'ESPATULA HOPEX', 'Ref 1.1/2\"', 'EspÃ¡tula de 1.1/2\".'),
(449, 'ESPATULA HOPEX', 'Ref 2\"', 'EspÃ¡tula de 2\".'),
(450, 'ESPATULA HOPEX', 'Ref 2.1/2\"', 'EspÃ¡tula de 2 .1/2\".'),
(451, 'ESPATULA HOPEX', 'Ref 3\"', 'EspÃ¡tula de 3\".'),
(452, 'ESPATULA HOPEX', 'Ref 4\"', 'EspÃ¡tula de 4\".'),
(453, 'ESPATULA HOPEX', 'Ref 5\"', 'EspÃ¡tula de 5\".'),
(454, 'ESPATULA HOPEX', 'Ref 6\"', 'EspÃ¡tula de 6\".'),
(472, 'BROCHAS FLICA ', 'Ref 1', 'Brocha de 1/2\" EconÃ³mica'),
(473, 'BROCHAS FLICA ', 'Ref 2', 'Brocha de 1\" EconÃ³mica'),
(474, 'BROCHAS FLICA ', 'Ref 3', 'Brocha de 2\" EconÃ³mica'),
(475, 'BROCHAS FLICA ', 'Ref 4', 'Brocha de 2-1/2\" EconÃ³mica'),
(476, 'BROCHAS FLICA ', 'Ref 5', 'Brocha de 3\" EconÃ³mica'),
(477, 'BROCHAS FLICA ', 'Ref 6', 'Brocha de 4\" EconÃ³mica');

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
-- Indices de la tabla `referencias`
--
ALTER TABLE `referencias`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT de la tabla `cobros`
--
ALTER TABLE `cobros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de la tabla `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT de la tabla `referencias`
--
ALTER TABLE `referencias`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=478;

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
