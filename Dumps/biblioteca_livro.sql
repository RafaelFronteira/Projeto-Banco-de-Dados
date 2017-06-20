CREATE DATABASE  IF NOT EXISTS `biblioteca` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `biblioteca`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: biblioteca
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.21-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `livro`
--

DROP TABLE IF EXISTS `livro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `livro` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `autor` varchar(45) NOT NULL,
  `editora` varchar(45) NOT NULL,
  `categoria` int(10) unsigned NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `ano` int(4) NOT NULL,
  `subcategoria` varchar(20) DEFAULT '',
  `img` varchar(255) DEFAULT NULL,
  `src` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria` (`categoria`),
  CONSTRAINT `livro_ibfk_1` FOREIGN KEY (`categoria`) REFERENCES `categoria` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `livro`
--

LOCK TABLES `livro` WRITE;
/*!40000 ALTER TABLE `livro` DISABLE KEYS */;
INSERT INTO `livro` VALUES (1,'A Escola do Bem e do Mal - Vol. 3 - Infelizes para sempre','Soman Chainani','Gutenberg',1,'Sophie e Agatha estão lutando contra o passado para conseguir mudar o futuro, em busca de um final perfeito para seu conto de fadas. Elas acreditavam que sua história havia chegado ao FIM no minuto em que se separaram, quando Agatha foi levada de volta pa',2016,'Fantasia','https://1.bp.blogspot.com/-KhPLnlV4btY/V4ZmwSETqhI/AAAAAAAAigA/Oevyu-AswlwfnS_Tai4ITnSs9K0HRrcBwCLcB/s1600/infelizes%2Bpara%2Bsempre%2B1.jpg','http://ler-agora.jegueajato.com/Soman%20Chainani/Infelizes%20para%20Sempre%20(62)/Infelizes%20para%20Sempre%20-%20Soman%20Chainani?chave=1677cfea7cb1b4e721f78316a481fd9c'),(2,'Papai é Pop','Marcos Piangers','Belas Letras',3,'Então, você vai ser pai. Você sabe que precisa comprar uma casa maior. Tem que ter mais espaço pra criança. Tem que ter mais um quarto no apartamento. Tem que ter um berço novo, não pode ser aquele que a vizinha se dispôs a emprestar. Então você sabe que ',2016,'','https://images.livrariasaraiva.com.br/imagemnet/imagem.aspx/?pro_id=8892967&qld=90&l=430&a=-1','http://ler-agora.jegueajato.com/Marcos%20Piangers/O%20Papai%20e%20Pop%20(1916)/O%20Papai%20e%20Pop%20-%20Marcos%20Piangers?chave=1677cfea7cb1b4e721f78316a481fd9c');
/*!40000 ALTER TABLE `livro` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-06-19 23:52:50
