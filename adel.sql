-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2015 às 03:53
-- Versão do servidor: 5.6.17
-- Versão do PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `adel`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `apresentacao`
--

CREATE TABLE IF NOT EXISTS `apresentacao` (
  `idApresentacao` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `sexo` varchar(15) DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `nomePai` varchar(100) DEFAULT NULL,
  `nomeMae` varchar(100) DEFAULT NULL,
  `dataApresentacao` date NOT NULL,
  PRIMARY KEY (`idApresentacao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Fazendo dump de dados para tabela `apresentacao`
--

INSERT INTO `apresentacao` (`idApresentacao`, `nome`, `sexo`, `dataNascimento`, `nomePai`, `nomeMae`, `dataApresentacao`) VALUES
(1, 'Rafael Sena Sousa', 'Masculino', '2012-12-04', 'Wágner Evangelista de Sousa', 'Rosilene de Fátima Sena Sousa', '2015-05-04'),
(2, 'Lázaro Magalhães Santana', 'Masculino', '2014-12-23', 'Cláudio Roberto Santana', 'Fabiane Aparecida Magalhães Santana', '2015-05-04'),
(3, 'Maria Luiza dos Santos Ribeiro', 'Feminino', '2014-10-15', 'Ricardo Aparecido Ribeiro', 'Camila dos Santos Costa', '2015-05-04'),
(4, 'Júlia Victória dos Santos Ribeiro', 'Feminino', '2010-06-18', 'Ricardo Aparecido Ribeiro', 'Camila dos Santos Costa', '2015-05-04'),
(5, 'Antônio Carlos Lira Malheiro', 'Masculino', '2014-12-09', 'Reginaldo Carlos Malheiro', 'Marcilene Lira Guimarães', '2015-05-04'),
(6, 'Thalita Ferreira dos Santos', 'Feminino', '2015-02-10', 'Renato Ferreira Barbosa', 'Miria Moreira dos Santos', '2015-05-04'),
(7, 'Ester Eduarda Palmier Alves dos Santos', 'Feminino', '2010-04-04', 'Fábio Damião Alves da Silva', 'Patrícia Aparecida dos Santos Alves', '2015-05-04'),
(8, 'Kamila Lima dos Santos Félix', 'Feminino', '2013-01-16', 'Wesley Silva Félix', 'Tatiane Lima dos Santos', '2015-05-04'),
(9, 'Rebeca Lopes Pereira', 'Feminino', '2011-01-24', 'José Silvio Pereira', 'Valdirene Lopes do Nascimento', '2015-05-04'),
(10, 'Samuel de Oliveira Rocha', 'Masculino', '2012-12-13', 'Renán Carlos de Oliveira Barbosa ', 'Celma Rocha dos Santos Oliveira', '2015-05-04'),
(11, 'Manuela Lopes dos Santos', 'Feminino', '2012-06-26', 'Lúcio João Pereira Lopes ', 'Maria Divina Moreira dos Santos', '2015-05-04'),
(12, 'Issac Magalhães Santana', 'Masculino', '2013-02-06', 'Claúdio Roberto Santana', 'Fabiane Aparecida Magalhães Santana', '2015-05-04'),
(13, 'Carlos Augusto Farias dos Santos', 'Masculino', '2009-03-10', 'Fernando Farias', 'Aline Honório dos Santos', '2015-05-04'),
(14, 'Geovanna da Silva Sousa', 'Feminino', '2013-05-14', 'José Carlos Batista de Sousa', 'Lucinéia Maria da Silva', '2015-05-04');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('49b72632b812dbf38e8c0368c02a0f4d', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2490.86 Safari/537.36', 1449197247, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `idFotos` int(11) NOT NULL AUTO_INCREMENT,
  `foto_url` varchar(50) DEFAULT NULL,
  `membro_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`idFotos`),
  KEY `fk_idMembro` (`membro_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Fazendo dump de dados para tabela `fotos`
--

INSERT INTO `fotos` (`idFotos`, `foto_url`, `membro_id`) VALUES
(4, 'DiaconizaPedrita.jpg', 5),
(5, 'MembroJéssicaTeixeiradeAlmeida24042015.jpg', 6),
(6, 'AuxiliarDelmiroSantanaMarques25042015.jpg', 7),
(7, 'DiaconisaSilvanaHonóriodosSantos25042015.jpg', 8),
(8, 'MembroMarleidedaSilvaTavares27042015.jpg', 9),
(9, 'PresbiteroRenan2704.jpg', 10),
(10, 'MembroEvertonMagalhãesPereira15052015.jpg', 11),
(11, 'CongregadoTalitaPereiradeMoura25052015.jpg', 12),
(12, 'Congregadowilliam31052015.jpg', 13);

-- --------------------------------------------------------

--
-- Estrutura para tabela `membros`
--

CREATE TABLE IF NOT EXISTS `membros` (
  `idMembro` int(11) NOT NULL AUTO_INCREMENT,
  `nomeMembro` varchar(50) DEFAULT NULL,
  `candidatoBatismo` varchar(10) DEFAULT NULL,
  `dataBatismo` date DEFAULT NULL,
  `dataNascimento` date DEFAULT NULL,
  `cargo` varchar(50) DEFAULT 'Membro',
  `endereco` varchar(80) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `uf` varchar(50) DEFAULT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `telCelular` varchar(14) DEFAULT NULL,
  `telResidencial` varchar(14) DEFAULT NULL,
  `rg` int(13) DEFAULT NULL,
  `emissorRg` varchar(20) DEFAULT NULL,
  `cpf` int(15) DEFAULT NULL,
  `numeroCertidao` int(20) DEFAULT NULL,
  `livorCertidao` int(20) DEFAULT NULL,
  `folhaCertidao` int(20) DEFAULT NULL,
  `cidadeCertidao` int(30) DEFAULT NULL,
  `naturalidade` varchar(30) DEFAULT NULL,
  `ufNaturalidade` varchar(25) DEFAULT NULL,
  `dataBatismoAguas` date DEFAULT NULL,
  `locaBatismoAguas` varchar(30) DEFAULT NULL,
  `isBatismoEspSanto` varchar(10) DEFAULT NULL,
  `grauInstrucao` varchar(30) DEFAULT NULL,
  `nomePai` varchar(50) DEFAULT NULL,
  `nomeMae` varchar(50) DEFAULT NULL,
  `estadoCivil` varchar(20) DEFAULT NULL,
  `matricula` varchar(20) DEFAULT NULL,
  `dataConversao` date DEFAULT NULL,
  `locaConversao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idMembro`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Fazendo dump de dados para tabela `membros`
--

INSERT INTO `membros` (`idMembro`, `nomeMembro`, `candidatoBatismo`, `dataBatismo`, `dataNascimento`, `cargo`, `endereco`, `bairro`, `cidade`, `uf`, `sexo`, `telCelular`, `telResidencial`, `rg`, `emissorRg`, `cpf`, `numeroCertidao`, `livorCertidao`, `folhaCertidao`, `cidadeCertidao`, `naturalidade`, `ufNaturalidade`, `dataBatismoAguas`, `locaBatismoAguas`, `isBatismoEspSanto`, `grauInstrucao`, `nomePai`, `nomeMae`, `estadoCivil`, `matricula`, `dataConversao`, `locaConversao`) VALUES
(4, 'Lucinéia Maria da Silva', 'Não', '0000-00-00', '2015-06-26', 'Membro', 'Avenida Miguel Reali, Qd. 34, Lt 10', 'Mandú II', 'Luziania', 'Goiás', 'Feminino', '61-9173-6483', '0', 0, '', 0, 0, 0, 0, 0, 'Carnaíba ', 'Goiás', '0000-00-00', NULL, 'Não', 'Ensino Médio Completo', 'Francisco Caetano da Silva', 'Maria Martins da Silva', NULL, NULL, NULL, ''),
(5, 'Pedrita Aparecida Palmier Larussi', 'Não', '0000-00-00', '1964-06-29', 'Diaconisa', 'Rua 17, Qd 28, Lt 08', 'Mandú II', 'Luziania', 'Goiás', 'Feminino', '61-9544-4109', '0', 298, 'SSPGO', 373089, 0, 0, 0, 0, 'Santa Izabel', 'Goiás', '1995-10-01', NULL, 'Sim', 'Ensino Médio Completo', 'Felício Francisco Palmier', 'Maria Anunciação Palmier', 'Casado(a)', NULL, NULL, ''),
(6, 'Jéssica Teixeira de Almeida', 'Não', '2010-05-30', '1997-09-02', 'Membro', 'Rua 28 Qd 49 Lt 23', 'Mandú II', 'Luziania', 'Goiás', 'Feminino', '61- 9330-7656', '0', 4637, 'SSPGO', 702894, 0, 0, 0, 0, 'Luziânia', 'Goiás', '2010-05-30', NULL, 'Não', 'Ensino Médio Completo', 'Moisés de Almeida Guilherme', 'Célia Teixeira Magno Guilherme', 'Solteiro(a)', NULL, NULL, ''),
(7, 'Delmiro Santana Marques', 'Não', '0000-00-00', '1939-09-13', 'Auxiliar', 'Rua 33 Qd 22 Lt 08', 'Mandú II', 'Luziania', 'Goiás', 'Masculino', '61-9924-5921', '0', 5054675, 'SSP-GO', 156791, 0, 0, 0, 0, 'Guaxupe', 'MG', '1970-09-28', NULL, 'Não', 'Ensino Fundamental Incompleto', 'Pedro Marquês', 'Benedita Santana Marquês', NULL, NULL, NULL, ''),
(8, 'Silvana Honório dos Santos', 'Não', '0000-00-00', '1967-01-08', 'Diaconisa', 'Rua 29, Qd 49, Lote 08', 'Mandú II', 'Luziania', 'Goiás', 'Feminino', '61-8502-0089', '0', 4641, 'SSP-GO', 2537, 0, 0, 0, 0, 'Fortaleza', 'CE', '1993-10-02', NULL, 'Sim', 'Ensino Fundamental Completo', 'Manoel Honório da Silva', 'Francisca Marina Barbosa da Silva', NULL, NULL, NULL, ''),
(9, 'Marleide da Silva Tavares', 'Não', '0000-00-00', '1967-11-14', 'Membro', 'Rua 28, Qd 50 Lote 05', 'Mandú II', 'Luziania', 'Goiás', 'Feminino', '61-8133-6673 ', '0', 1792551, 'SSPGO', 805, 0, 0, 0, 0, 'Cristalina', 'Goiás', '2007-04-14', NULL, 'Não', 'Ensino Médio Completo', 'Hercílio Tavares', 'Valdeci da Silva Tavares', NULL, NULL, NULL, ''),
(10, 'Renán Carlos Barbosa de Oliveira Rocha', 'Não', '2007-12-23', '1978-05-31', 'Presbitero(a)', 'Rua 19, Qd 45 Lote 30', 'Mandú II', 'Luziania', 'Goiás', 'Masculino', '(61) 9213-3055', '0', 1921, 'SSP-DF', 790121, 0, 0, 0, 0, 'Brasília', 'Distrito Federal', '2007-12-23', 'Catedral Assembleia de Deus', 'Sim', 'Ensino Fundamental Completo', '', 'Ilza Barbosa de Oliveira', '', NULL, NULL, ''),
(11, 'Everton Magalhães Pereira', 'Não', '0000-00-00', '1989-11-24', 'Membro', 'Rua 16, Quadra 42 Lote 19', 'Mandú II', 'Luziania', 'Goiás', 'Masculino', '(61) 9265-370', '0', 5375, 'SSPGO', 727120, 0, 0, 0, 0, 'Luziânia', 'Goiás', '0000-00-00', NULL, 'Sim', 'Ensino Médio Completo', 'Oelton Luis Pereira', 'Elisa Aparecida Magalhães dos Anjos', 'Casado(a)', NULL, NULL, ''),
(12, 'Talita Pereira de Moura', 'Sim', '2015-05-31', '2002-09-23', 'Congregado', 'Avenida Miguel Reali Qd 46 Lote 24', 'Mandú II', 'Luziania', 'Goiás', 'Feminino', '(61) 9839-643', '0', 0, '', 0, 0, 0, 0, 0, 'Luziânia', 'Goiás', '2015-05-31', 'Catedral Assembleia de Deus', 'Não', 'Ensino Médio Incompleto', 'Ênio Pereira de Moura', 'Maria José Silva Pereira', 'Solteiro(a)', NULL, NULL, ''),
(13, 'william', 'Não', '2003-12-23', '2014-12-23', 'Congregado', 'rua 10', 'Vila Juracy', 'Luziania', 'Goiás', 'Masculino', '(66) 6666-6666', '0', 5555, '', 0, 0, 0, 0, 0, '', 'Goiás', '0000-00-00', '', 'Sim', 'Ensino Fundamental Incompleto', '', '', 'Solteiro(a)', NULL, NULL, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
