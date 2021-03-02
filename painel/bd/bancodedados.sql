-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para bloginterativo
CREATE DATABASE IF NOT EXISTS `bloginterativo` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `bloginterativo`;

-- Copiando estrutura para tabela bloginterativo.arquivosvalidados
CREATE TABLE IF NOT EXISTS `arquivosvalidados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `artigo` longtext NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `usuario` enum('aluno','ex-aluno','professor') NOT NULL,
  `curso` varchar(50) NOT NULL,
  `instituicao` varchar(50) NOT NULL,
  `linkVideo` varchar(50) NOT NULL,
  `linkImagem` varchar(50) NOT NULL,
  `categoria` enum('artes','beleza','comercio','conservacaoezeladoria','design','educacional','gastronomia','gestao','hospedagem','idiomas','informatica','lazer','meioambiente','moda','saude','seguranca','turismo','comunicacao') NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela bloginterativo.arquivosvalidados: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `arquivosvalidados` DISABLE KEYS */;
INSERT INTO `arquivosvalidados` (`id`, `nome`, `artigo`, `sobrenome`, `usuario`, `curso`, `instituicao`, `linkVideo`, `linkImagem`, `categoria`, `titulo`, `email`) VALUES
	(1, 'asfsags', 'safasfa', 'asfasfa', 'aluno', 'asfasf', 'asfasfa', 'asfasfa', 'fsafa', 'beleza', 'asfa', 'fasfa');
/*!40000 ALTER TABLE `arquivosvalidados` ENABLE KEYS */;

-- Copiando estrutura para tabela bloginterativo.contato
CREATE TABLE IF NOT EXISTS `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomecompleto` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `mensagem` varchar(50) NOT NULL DEFAULT '',
  `dataCriacao` timestamp NULL DEFAULT NULL,
  `dataAtualizacao` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela bloginterativo.contato: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
INSERT INTO `contato` (`id`, `nomecompleto`, `email`, `curso`, `mensagem`, `dataCriacao`, `dataAtualizacao`) VALUES
	(3, 'olásdf', 'olasfs@email.com', 'teste', 'sfef', NULL, NULL),
	(4, 'olá224', 'ola2321@email.com', 'teste', 'wfrqw', NULL, NULL);
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;

-- Copiando estrutura para tabela bloginterativo.facavocemesmo
CREATE TABLE IF NOT EXISTS `facavocemesmo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `artigo` longtext NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `usuario` enum('aluno','ex-aluno','professor') NOT NULL,
  `curso` varchar(50) NOT NULL,
  `instituicao` varchar(50) NOT NULL,
  `linkVideo` varchar(50) NOT NULL,
  `linkImagem` varchar(50) NOT NULL,
  `categoria` enum('Artes','beleza','comercio','conservacaoezeladoria','design','educacional','gastronomia','gestao','hospedagem','idiomas','informatica','lazer','meioambiente','moda','saude','seguranca','turismo','comunicacao') NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela bloginterativo.facavocemesmo: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `facavocemesmo` DISABLE KEYS */;
INSERT INTO `facavocemesmo` (`id`, `nome`, `artigo`, `sobrenome`, `usuario`, `curso`, `instituicao`, `linkVideo`, `linkImagem`, `categoria`, `titulo`, `email`) VALUES
	(1, 'nome', 'aksfnjbo', 'uwbf', 'aluno', 'asfas', 'afsfasf', 'dsgsd', 'sdgsdg', 'Artes', 'dfsdgs', 'sdgsd'),
	(2, 'teste', 'asfafgaw', 'teste', 'ex-aluno', 'teste', 'teste', 'teste', 'teste', 'Artes', 'teste', 'teste@gmail.com'),
	(3, 'teste', 'hgchgcgchgkg', 'teste', 'aluno', 'teste', 'teste', 'teste', 'teste', 'beleza', 'teste', 'teste@gmail.com'),
	(4, 'teste', 'Testando o artigo com tabelas diferentes\r\n', 'teste', 'aluno', 'teste', 'teste', 'teste', 'teste', 'Artes', 'teste', 'teste@gmail.com'),
	(5, 'teste', 'Testando o artigo com tabelas diferentes', 'teste', 'aluno', 'teste', 'teste', 'teste', 'teste', 'design', 'teste', 'teste@gmail.com'),
	(6, 'teste', 'dasfcafc', 'teste', 'aluno', 'teste', 'teste', 'teste', 'teste', 'lazer', 'teste', 'teste@gmail.com'),
	(7, 'teste', 'dasfcafc', 'teste', 'aluno', 'teste', 'teste', 'teste', 'teste', 'lazer', 'teste', 'teste@gmail.com');
/*!40000 ALTER TABLE `facavocemesmo` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
