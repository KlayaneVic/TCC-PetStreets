-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Dez-2021 às 19:16
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pet_street`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal`
--

DROP TABLE IF EXISTS `animal`;
CREATE TABLE IF NOT EXISTS `animal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome_animal` varchar(30) DEFAULT NULL,
  `especie` varchar(30) NOT NULL,
  `raca` varchar(30) DEFAULT NULL,
  `cor` varchar(30) DEFAULT NULL,
  `porte` varchar(30) NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `idade` varchar(30) DEFAULT NULL,
  `observacoes` tinytext NOT NULL,
  `foto_animal` tinytext,
  `usuario_cadastro` int(11) NOT NULL,
  `permissao` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `usuario_cadastro` (`usuario_cadastro`)
) ENGINE=InnoDB AUTO_INCREMENT=149 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `animal`
--

INSERT INTO `animal` (`id`, `nome_animal`, `especie`, `raca`, `cor`, `porte`, `sexo`, `idade`, `observacoes`, `foto_animal`, `usuario_cadastro`, `permissao`, `status`) VALUES
(135, 'Vanessa', 'Cachorro', 'Shih Tzu', 'branco e marrom', 'Pequeno', 'FÃªmea', 'Idoso', 'Gosta de passear e tem alergia a perfumes', '546273d9df80d380b5c1b3bfcdfe4b3c.jpg', 28, 0, 0),
(136, 'Gatinhos', 'Gato', 'NÃ£o sei', 'branco e preto', 'Pequeno', 'Macho', 'Filhote', 'A gata deu cria e nÃ£o temos condiÃ§Ãµes de cuidar', 'e0ae5018d0092ce78a9d263af7fc2f7a.jpg', 28, 0, 0),
(137, 'Sem nome', 'Gato', 'nÃ£o sei', 'branco', 'Pequeno', 'FÃªmea', 'Indefinida', 'Encontramos esta gata na esquina de casa e estamos dando comida para ela', '9829fac8902941282cf0c3943c929479.png', 21, 0, 0),
(138, 'Pitoco', 'Cachorro', 'NÃ£o sei', 'bege', 'Mini', 'Macho', 'Jovem', 'Muito dÃ³cil, come somente raÃ§Ã£o', 'ab46544cedecf146429778c262fef712.png', 21, 0, 0),
(139, 'nÃ£o sei', 'Cachorro', 'Maltes', 'branco', 'Pequeno', 'FÃªmea', 'Indefinida', 'Encontramos perdido com uma coleira escrito Paloma, nÃ£o sei se Ã© o nome do dono ou do cachorro', '92fb8ec70a9af5c71d79dd11ec4a9c51.png', 21, 0, 0),
(142, 'Tuco', 'Cachorro', 'Yorkishire', 'preto', 'Pequeno', 'Macho', 'Idoso', 'Barulhento', 'd70dec323f356cd8b239d425f82cc6a3.jpg', 31, 0, 0),
(143, 'jule', 'Cachorro', 'ptibull', 'branca', 'Grande', 'FÃªmea', 'Jovem', 'e muito obidiente', '82d9a8f7acaf55ee885ffe5524583958.png', 32, 0, 0),
(144, 'thor', 'Cachorro', 'pitbull', 'preto', 'Grande', 'Macho', 'Adulto', 'adestrado obedece a todos comandos e entende AlemÃ£o os comandos ', 'f713baca7134410aa0e2bb6739c7266d.jpg', 34, 1, 1),
(145, 'Estrela', 'Gato', 'SiammÃªs', 'Branca e Marrom', 'MÃ©dio', 'FÃªmea', 'Adulto', 'Brincalhona e carinhosa', 'f11696094137331eec1d744680c2f73b.jpg', 34, 0, 0),
(146, 'Pipoca', 'Cachorro', 'Yorkishire', 'preto e marrom', 'Pequeno', 'FÃªmea', 'Adulto', 'rrererr', '682525a4d9178a452290f7f54029a16d.jpg', 34, 0, 0),
(147, 'jule', 'Gato', 'pitbull', 'branca', 'Grande', 'FÃªmea', 'Filhote', 'filhote', 'b74496889ac38ca275562368f3e2836f.png', 35, 1, 1),
(148, 'nina', 'Gato', 'SiammÃªs', 'amarelo', 'Grande', 'FÃªmea', 'Adulto', 'tem mania de dormir  na cama com meus filhos', '4dba20096c01f85c6d159e3de8391a61.jpg', 36, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `animal_tratamento`
--

DROP TABLE IF EXISTS `animal_tratamento`;
CREATE TABLE IF NOT EXISTS `animal_tratamento` (
  `id_at` int(11) NOT NULL AUTO_INCREMENT,
  `idAnimal` int(11) NOT NULL,
  `idTratamento` int(11) NOT NULL,
  `dataTratamento` date DEFAULT NULL,
  `observacao` tinytext,
  PRIMARY KEY (`id_at`,`idAnimal`,`idTratamento`),
  KEY `idTratamento` (`idTratamento`),
  KEY `idAnimal` (`idAnimal`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `animal_tratamento`
--

INSERT INTO `animal_tratamento` (`id_at`, `idAnimal`, `idTratamento`, `dataTratamento`, `observacao`) VALUES
(46, 135, 1, '2021-10-12', 'Castramos ela devido a um cÃ¢ncer de mama'),
(47, 136, 2, '2021-10-04', 'Tomaram apenas a primeira dose'),
(49, 142, 4, '2021-10-15', 'VacinaÃ§Ã£o em dia'),
(50, 143, 4, '2021-10-08', 'carinhosa'),
(51, 143, 4, '2021-10-08', 'carinhosa'),
(52, 144, 4, '2022-01-10', 'vacinar contra a raiva'),
(53, 145, 2, '2012-07-26', 'ok'),
(54, 148, 3, '2012-12-20', 'sonolÃªncia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo_tratamento`
--

DROP TABLE IF EXISTS `tipo_tratamento`;
CREATE TABLE IF NOT EXISTS `tipo_tratamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tipo_tratamento`
--

INSERT INTO `tipo_tratamento` (`id`, `nome`, `categoria`) VALUES
(1, 'CastraÃ§Ã£o', 'Canina'),
(2, 'VacinaÃ§Ã£o', 'Felina'),
(3, 'CastraÃ§Ã£o', 'Felina'),
(4, 'VacinaÃ§Ã£o', 'Canina');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `senha` varchar(30) NOT NULL,
  `nome_usuario` varchar(100) DEFAULT NULL,
  `foto_usuario` tinytext,
  `adm` int(1) DEFAULT '0',
  `tipo` varchar(30) DEFAULT NULL,
  `bairro` varchar(30) DEFAULT NULL,
  `cidade` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `email`, `senha`, `nome_usuario`, `foto_usuario`, `adm`, `tipo`, `bairro`, `cidade`, `telefone`) VALUES
(18, 'tacao@gmail.com', '123', 'Milena TacÃ£o', '9277387867b8e1fe4a72aee96a92b642.png', 1, 'UsuÃ¡rio Comum', 'Selmi dei', 'Araraquara', '(16) 99734-1234'),
(21, 'cintia@gmail.com', '123', 'cintia Mendes', 'e19e04f9cc3d59cd05049bea2669c870.png', 0, 'UsuÃ¡rio Comum', 'Pq. SÃ£o paulo', 'Araraquara', '(34) 12365-1236'),
(23, 'cint@gmail.com', '123', 'cintia', '', 0, 'UsuÃ¡rio Comum', 'Selmi dei', 'Araraquara', '(12) 12345-2345'),
(24, 'aav@gmail.com', '123', 'aaarr', 'a5e0faf832ae14da2d4dc490e6c27d92.png', 0, 'UsuÃ¡rio Comum', 'Selmi dei', 'Araraquara', '(12) 12345-1234'),
(25, 'admin4@gmail.com', '1234', 'cintia', '1a12f6db36758d31ad0954f2bbcf683e.png', 1, '', 'Selmi dei', 'Araraquara', '(12) 12345-1234'),
(26, 'klayane@gmail.com', '123', 'Klayane Rodrigues', 'f4f59021b37719afd230d3cb040eacb3.png', 0, 'UsuÃ¡rio Comum ONG', 'IndÃ¡ia', 'Araraquara', '(12) 34567-8910'),
(27, 'cristiane-akemi@exemplo.com', '123', 'Cristiane Akemi', '', 0, 'UsuÃ¡rio Comum', 'Centro', 'Araraquara', '(12) 34567-8910'),
(28, 'klay@gmail.com', '123', 'Klayane', '', 0, 'UsuÃ¡rio Comum', 'Indaia', 'Araraquara', '(12) 34567-8910'),
(31, 'clauim@gmail.com', '123456', 'Claudia Reis', '', 0, 'UsuÃ¡rio Comum', 'Altos do Jaragua', 'Araraquara', '(16) 99797-4508'),
(32, 'aderson@70live.com', 'girafa', 'aderson ', '', 0, 'UsuÃ¡rio Comum', 'jd maria luiza', 'araraqura', '(16) 99757-2775'),
(33, 'juju@gmail.com', '123', 'Julia Mota', '', 0, 'UsuÃ¡rio Comum', 'jd maria luiza', 'Araraquara', '(16) 99799-9999'),
(34, 'marlon.alexssander.455@gmail.com', 'enter1998', 'marlon alexssander mendes de  moraes', '', 0, 'UsuÃ¡rio Comum', 'jd maria luiza', 'Araraquara', '(16) 99768-8159'),
(35, 'MAICON123@GMAIL.COM', '123456', 'mAICKON DOUGLAS MENDES DE MORAES', '', 0, 'UsuÃ¡rio Comum', 'jd maria luiza', 'Araraquara', '(16) 99797-4508'),
(36, 'luzia@hotmail.com', '741', 'luzia moraes', '', 0, 'UsuÃ¡rio Comum', 'jd maria luiza', 'Araraquara', '(16) 99768-8159');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `animal`
--
ALTER TABLE `animal`
  ADD CONSTRAINT `animal_ibfk_1` FOREIGN KEY (`usuario_cadastro`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `animal_tratamento`
--
ALTER TABLE `animal_tratamento`
  ADD CONSTRAINT `animal_tratamento_ibfk_1` FOREIGN KEY (`idAnimal`) REFERENCES `animal` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `animal_tratamento_ibfk_2` FOREIGN KEY (`idTratamento`) REFERENCES `tipo_tratamento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
