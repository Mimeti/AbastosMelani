SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
--
-- Database: `abastos_melani`
--




CREATE TABLE `bitacora` (
  `id_bit` int(11) NOT NULL AUTO_INCREMENT,
  `oper_bit` varchar(10) DEFAULT NULL,
  `user_bit` varchar(40) DEFAULT NULL,
  `host_bit` varchar(40) DEFAULT NULL,
  `modi_bit` datetime DEFAULT NULL,
  `tabla_bit` varchar(40) NOT NULL,
  PRIMARY KEY (`id_bit`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4;


INSERT INTO bitacora VALUES
("1","BORRAR","root","localhost","2022-09-28 09:30:01","USUARIO"),
("2","INSERTAR","root","localhost","2022-09-28 10:40:50","USUARIO"),
("3","BORRAR","root","localhost","2022-10-01 17:06:59","NOMINA"),
("4","BORRAR","root","localhost","2022-10-01 20:37:06","NOMINA"),
("5","INSERTAR","root","localhost","2022-10-03 23:15:57","INVENTARIO"),
("6","BORRAR","root","localhost","2022-10-03 23:16:10","INVENTARIO"),
("7","INSERTAR","root","localhost","2022-10-04 00:02:11","USUARIO"),
("8","INSERTAR","root","localhost","2022-10-12 10:10:31","INVENTARIO"),
("9","INSERTAR","root","localhost","2022-10-12 20:55:22","INVENTARIO"),
("10","INSERTAR","root","localhost","2022-10-13 20:29:43","INVENTARIO"),
("11","INSERTAR","root","localhost","2022-10-20 21:39:24","NOMINA"),
("12","INSERTAR","root","localhost","2022-10-20 21:58:23","INVENTARIO"),
("13","INSERTAR","root","localhost","2022-10-20 22:00:43","INVENTARIO"),
("14","BORRAR","root","localhost","2022-10-20 22:04:39","INVENTARIO"),
("15","BORRAR","root","localhost","2022-10-20 22:04:44","INVENTARIO"),
("16","BORRAR","root","localhost","2022-10-20 22:04:55","INVENTARIO"),
("17","BORRAR","root","localhost","2022-10-20 22:04:57","INVENTARIO"),
("18","INSERTAR","root","localhost","2022-10-20 22:43:04","CLIENTE"),
("19","INSERTAR","root","localhost","2022-10-20 22:43:17","CLIENTE"),
("20","INSERTAR","root","localhost","2022-10-20 23:11:11","CLIENTE"),
("21","INSERTAR","root","localhost","2022-10-20 23:15:16","CLIENTE"),
("22","BORRAR","root","localhost","2022-10-20 23:19:35","CLIENTE"),
("23","BORRAR","root","localhost","2022-10-20 23:19:50","CLIENTE"),
("24","INSERTAR","root","localhost","2022-10-21 10:01:09","NOMINA"),
("25","INSERTAR","root","localhost","2022-10-21 10:03:07","INVENTARIO"),
("26","BORRAR","root","localhost","2022-10-21 10:03:16","INVENTARIO"),
("27","INSERTAR","root","localhost","2022-10-21 10:08:33","CLIENTE"),
("28","INSERTAR","root","localhost","2022-10-22 17:17:26","INVENTARIO"),
("29","BORRAR","root","localhost","2022-10-22 17:18:02","INVENTARIO"),
("30","INSERTAR","root","localhost","2022-10-24 09:01:57","USUARIO"),
("31","INSERTAR","root","localhost","2022-10-24 22:47:32","INVENTARIO"),
("32","BORRAR","root","localhost","2022-10-24 22:47:34","INVENTARIO"),
("33","BORRAR","root","localhost","2022-10-24 23:07:50","INVENTARIO"),
("34","ACTUALIZAR","root","localhost","2022-10-24 23:21:14","NOMINA"),
("35","ACTUALIZAR","root","localhost","2022-10-24 23:21:28","NOMINA"),
("36","ACTUALIZAR","root","localhost","2022-10-24 23:21:34","NOMINA"),
("37","ACTUALIZAR","root","localhost","2022-10-24 23:56:29","INVENTARIO"),
("38","INSERTAR","root","localhost","2022-10-25 18:59:46","PUESTO DE TRABAJO"),
("39","BORRAR","root","localhost","2022-10-25 19:01:16","NOMINA"),
("40","BORRAR","root","localhost","2022-10-25 22:13:03","INVENTARIO"),
("41","INSERTAR","root","localhost","2022-10-25 22:13:13","INVENTARIO"),
("42","BORRAR","root","localhost","2022-10-25 22:17:49","USUARIO"),
("43","INSERTAR","root","localhost","2022-10-25 23:07:39","USUARIO"),
("44","INSERTAR","root","localhost","2022-10-25 23:08:46","USUARIO"),
("45","INSERTAR","root","localhost","2022-10-25 23:08:48","USUARIO"),
("46","BORRAR","root","localhost","2022-10-25 23:09:03","USUARIO"),
("47","INSERTAR","root","localhost","2022-10-25 23:37:47","CLIENTE"),
("48","INSERTAR","root","localhost","2022-10-25 23:47:27","INVENTARIO");




CREATE TABLE `cliente` (
  `ID_clie` int(11) NOT NULL AUTO_INCREMENT,
  `name_clie` varchar(50) NOT NULL,
  `apel_clie` varchar(50) NOT NULL,
  `cedu_clie` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_clie`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;


INSERT INTO cliente VALUES
("3","peter","pan","135489624"),
("4","pedro","fernandez","15263452"),
("5","henry","silva","5284185"),
("6","a","sd","5468");




CREATE TABLE `clientedumb` (
  `ID_cd` int(11) NOT NULL AUTO_INCREMENT,
  `name_cd` varchar(20) NOT NULL,
  `apel_cd` varchar(20) NOT NULL,
  `cedu_cd` int(11) NOT NULL,
  PRIMARY KEY (`ID_cd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `compra` (
  `ID_comp` int(11) NOT NULL AUTO_INCREMENT,
  `ID_prove` int(11) NOT NULL,
  `ID_inve` int(11) NOT NULL,
  PRIMARY KEY (`ID_comp`),
  UNIQUE KEY `ID_prove` (`ID_prove`),
  UNIQUE KEY `ID_inve` (`ID_inve`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `compradumb` (
  `ID_cod` int(11) NOT NULL AUTO_INCREMENT,
  `prove_cod` int(11) NOT NULL,
  `inve_cod` int(11) NOT NULL,
  PRIMARY KEY (`ID_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `empresa` (
  `ID_empr` int(11) NOT NULL AUTO_INCREMENT,
  `name_empr` varchar(50) NOT NULL DEFAULT 'Avastos melani',
  `iva_empr` decimal(12,0) NOT NULL,
  PRIMARY KEY (`ID_empr`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;


INSERT INTO empresa VALUES
("1","Avastos melani","12");




CREATE TABLE `empresadumb` (
  `ID_ed` int(11) NOT NULL AUTO_INCREMENT,
  `name_ed` varchar(20) NOT NULL,
  `iva_ed` int(11) NOT NULL,
  PRIMARY KEY (`ID_ed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `facturas` (
  `ID_fact` int(11) NOT NULL AUTO_INCREMENT,
  `date_fact` datetime NOT NULL,
  `codi_fact` varchar(20) NOT NULL,
  `ID_clie` int(11) NOT NULL,
  `tota_fact` decimal(10,2) NOT NULL,
  PRIMARY KEY (`ID_fact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `inventario` (
  `ID_inve` int(11) NOT NULL AUTO_INCREMENT,
  `date_inve` date NOT NULL,
  `cadu_inve` date NOT NULL,
  `name_inve` varchar(100) NOT NULL,
  `mark_inve` varchar(100) NOT NULL,
  `alma_inve` int(11) NOT NULL,
  `prec_inve` decimal(10,2) NOT NULL,
  PRIMARY KEY (`ID_inve`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;


INSERT INTO inventario VALUES
("3","2022-12-10","2022-10-20","harina","robinson","20","88.00"),
("11","2022-10-26","2022-10-26","Papel carta","Alpex","30","0.25");




CREATE TABLE `inventariodumb` (
  `ID_id` int(11) NOT NULL,
  `date_id` date NOT NULL,
  `cadu_id` date NOT NULL,
  `name_id` varchar(20) NOT NULL,
  `mark_id` varchar(20) NOT NULL,
  `alma_id` int(11) NOT NULL,
  `prec_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO inventariodumb VALUES
("8","2022-10-21","2022-12-31","chocolate pequeño","savoy","45","2");




CREATE TABLE `moneda` (
  `ID_coin` int(11) NOT NULL AUTO_INCREMENT,
  `ti_coin` varchar(50) NOT NULL,
  `va_coin` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_coin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `monedadumb` (
  `ID_md` int(11) NOT NULL AUTO_INCREMENT,
  `ti_md` varchar(20) NOT NULL,
  `va_md` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_md`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `nomina` (
  `ID_nom` int(11) NOT NULL AUTO_INCREMENT,
  `name_nom` varchar(20) NOT NULL,
  `nameii_nom` varchar(20) NOT NULL,
  `ape_nom` varchar(20) NOT NULL,
  `apeii_nom` varchar(20) NOT NULL,
  `ci_nom` int(11) NOT NULL,
  `num_nom` int(11) NOT NULL,
  `ingre_nom` date NOT NULL,
  `ID_pues` int(11) NOT NULL,
  PRIMARY KEY (`ID_nom`),
  KEY `puesto` (`ID_pues`),
  CONSTRAINT `puesto` FOREIGN KEY (`ID_pues`) REFERENCES `puesto_trabajo` (`ID_pues`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;


INSERT INTO nomina VALUES
("6","Yorbia","asaf","Sarmiento","Castanieda","17875391","414355682","2022-10-27","1"),
("19","albaricoque","a","rocio","asfsdthjjj","2045632","2147483647","2022-10-20","1");




CREATE TABLE `nominadumb` (
  `ID_nd` int(11) NOT NULL AUTO_INCREMENT,
  `name_nd` varchar(20) NOT NULL,
  `nameii_nd` varchar(20) NOT NULL,
  `ape_nd` varchar(20) NOT NULL,
  `apeii_nd` varchar(20) NOT NULL,
  `ci_nd` int(11) NOT NULL,
  `num_nd` int(11) NOT NULL,
  `ingre_nd` date NOT NULL,
  `pues_nd` int(11) NOT NULL,
  PRIMARY KEY (`ID_nd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `pago` (
  `ID_pag` int(11) NOT NULL AUTO_INCREMENT,
  `bono_pag` float NOT NULL,
  `dedu_pag` float NOT NULL,
  `total_pag` float NOT NULL,
  `ID_nom` int(11) NOT NULL,
  `ID_pues` int(11) NOT NULL,
  PRIMARY KEY (`ID_pag`),
  KEY `ID_nom` (`ID_nom`),
  KEY `ID_pues` (`ID_pues`),
  CONSTRAINT `ID_nom` FOREIGN KEY (`ID_nom`) REFERENCES `nomina` (`ID_nom`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ID_pues` FOREIGN KEY (`ID_pues`) REFERENCES `puesto_trabajo` (`ID_pues`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `proveedor` (
  `ID_prove` int(11) NOT NULL AUTO_INCREMENT,
  `name_prove` int(11) NOT NULL,
  `canti_prove` int(11) NOT NULL,
  `prec_prove` int(11) NOT NULL,
  PRIMARY KEY (`ID_prove`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `proveedordumb` (
  `ID_pd` int(11) NOT NULL AUTO_INCREMENT,
  `name_pd` varchar(20) NOT NULL,
  `canti_pd` int(11) NOT NULL,
  `prec_pd` int(11) NOT NULL,
  PRIMARY KEY (`ID_pd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `puesto_trabajo` (
  `ID_pues` int(11) NOT NULL AUTO_INCREMENT,
  `name_pues` varchar(20) NOT NULL,
  `suel_pues` int(11) NOT NULL,
  PRIMARY KEY (`ID_pues`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;


INSERT INTO puesto_trabajo VALUES
("1","Vendedor","28"),
("2","Charcutero","20");




CREATE TABLE `puestodumb` (
  `ID_ptd` int(11) NOT NULL AUTO_INCREMENT,
  `name_ptd` varchar(20) NOT NULL,
  `suel_ptd` int(11) NOT NULL,
  PRIMARY KEY (`ID_ptd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






CREATE TABLE `rol` (
  `ID_rol` int(11) NOT NULL AUTO_INCREMENT,
  `name_rol` varchar(20) NOT NULL,
  PRIMARY KEY (`ID_rol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;


INSERT INTO rol VALUES
("1","Admin"),
("2","Gerente"),
("3","Empleado");




CREATE TABLE `temporal_venta` (
  `ID_teve` int(11) NOT NULL AUTO_INCREMENT,
  `codi_fact` varchar(20) NOT NULL,
  `ID_inve` int(11) NOT NULL,
  `cant_teve` int(11) NOT NULL,
  `total_teve` decimal(10,2) NOT NULL DEFAULT 1.00,
  PRIMARY KEY (`ID_teve`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;


INSERT INTO temporal_venta VALUES
("1","123","3","1","88.00"),
("2","112","1","2","50.00"),
("3","123","8","2","1.56");




CREATE TABLE `user` (
  `ID_user` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(20) NOT NULL,
  `cont_user` varchar(20) NOT NULL,
  `mail_user` varchar(20) NOT NULL,
  `ID_rol` int(11) NOT NULL,
  PRIMARY KEY (`ID_user`),
  KEY `rol` (`ID_rol`),
  CONSTRAINT `rol` FOREIGN KEY (`ID_rol`) REFERENCES `rol` (`ID_rol`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;


INSERT INTO user VALUES
("4","hmf","123","hhsksksfg","3"),
("5","lian","123","christophersv2003@gm","1"),
("6","adrian","123456","adrian1234@gmail.com","2"),
("8","aian","123456789","asdasd@gmail.com","2"),
("9","erri","bt21","army@bts.chichuan","3");




CREATE TABLE `userdumb` (
  `ID_ud` int(11) NOT NULL,
  `name_ud` varchar(20) NOT NULL,
  `cont_ud` int(11) NOT NULL,
  `mail_ud` varchar(20) NOT NULL,
  `rol_ud` int(11) NOT NULL,
  PRIMARY KEY (`ID_ud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO userdumb VALUES
("10","erri","0","army@bts.chichuan","3");




CREATE TABLE `venta` (
  `ID_ven` int(11) NOT NULL AUTO_INCREMENT,
  `codi_fact` varchar(20) NOT NULL,
  `ID_inve` int(11) NOT NULL,
  `cant_ven` int(11) NOT NULL,
  `total_ven` decimal(10,2) NOT NULL,
  PRIMARY KEY (`ID_ven`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;






/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;