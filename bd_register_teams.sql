-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           10.1.38-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para db_register_teams
CREATE DATABASE IF NOT EXISTS `db_register_teams` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_register_teams`;

-- Copiando estrutura para tabela db_register_teams.tbl_player
CREATE TABLE IF NOT EXISTS `tbl_player` (
  `id_player` int(11) NOT NULL AUTO_INCREMENT,
  `name_player` varchar(100) NOT NULL,
  `last_name_player` varchar(200) NOT NULL,
  `id_team` int(11) NOT NULL,
  `shirt_number_player` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_player`),
  KEY `fk_tbl_player_tbl_team_idx` (`id_team`),
  CONSTRAINT `fk_tbl_player_tbl_team` FOREIGN KEY (`id_team`) REFERENCES `tbl_team` (`id_team`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;



-- Copiando estrutura para tabela db_register_teams.tbl_team
CREATE TABLE IF NOT EXISTS `tbl_team` (
  `id_team` int(11) NOT NULL AUTO_INCREMENT,
  `name_team` varchar(100) NOT NULL,
  `color_team` varchar(50) NOT NULL,
  `date_foundation_team` date NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_team`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;



/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
