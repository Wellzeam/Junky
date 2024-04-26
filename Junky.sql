-- phpMyAdmin SQL Dump
-- version 3.5.8.1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 26-Nov-2018 às 10:52
-- Versão do servidor: 5.5.49-0ubuntu0.12.04.1
-- versão do PHP: 5.3.10-1ubuntu3.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `Junky`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `ADM`
--

CREATE TABLE IF NOT EXISTS `ADM` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `USUARIO` varchar(50) NOT NULL,
  `SENHA` varchar(50) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `ADM`
--

INSERT INTO `ADM` (`codigo`, `USUARIO`, `SENHA`) VALUES
(1, 'Alunos', 'Alunos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE IF NOT EXISTS `carrinho` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `preco` double NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `qtd_produto` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=125 ;

--
-- Extraindo dados da tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `nome`, `preco`, `id_usuario`, `qtd_produto`) VALUES
(114, 'PepsiÂ®', 6, 1, 1),
(113, 'Triplo Chesseburger', 20, 6, 1),
(112, 'PepsiÂ®', 6, 6, 2),
(83, 'BatataSuprema', 25, 7, 1),
(84, 'Triplo Chesseburger', 20, 7, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `CLIENTES`
--

CREATE TABLE IF NOT EXISTS `CLIENTES` (
  `ID_CLIENTE` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(35) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `SENHA` varchar(8) NOT NULL,
  `ENDERECO` varchar(35) NOT NULL,
  `BAIRRO` varchar(20) NOT NULL,
  `CIDADE` varchar(35) NOT NULL,
  `ESTADO` char(2) NOT NULL,
  `CEP` char(9) NOT NULL,
  `FONE` varchar(15) NOT NULL,
  `RG` varchar(10) NOT NULL,
  `CPF` char(14) NOT NULL,
  PRIMARY KEY (`ID_CLIENTE`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Extraindo dados da tabela `CLIENTES`
--

INSERT INTO `CLIENTES` (`ID_CLIENTE`, `NOME`, `EMAIL`, `SENHA`, `ENDERECO`, `BAIRRO`, `CIDADE`, `ESTADO`, `CEP`, `FONE`, `RG`, `CPF`) VALUES
(8, 'William Mateus', 'william@gmail.com', 'william', 'Travessa Limeira', 'Petrópolis', 'Concórdia', 'SC', '12345678', '49999473712', '5473141635', '44767178371'),
(1, 'William Mateus', 'williammateus@gmail.com', '6757', 'Travessa Limeira', 'Petrópolis', 'Concórdia', 'SC', '12345678', '49999473712', '5473141635', '38708628904');

-- --------------------------------------------------------

--
-- Estrutura da tabela `Contato`
--

CREATE TABLE IF NOT EXISTS `Contato` (
  `Nome` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Telefone` int(20) DEFAULT NULL,
  `Empresa` varchar(100) NOT NULL,
  `CPF_CNPJ` varchar(15) NOT NULL,
  `Endereco` varchar(100) NOT NULL,
  `Cidade` varchar(100) NOT NULL,
  `Estado` varchar(100) NOT NULL,
  `Assunto` varchar(100) DEFAULT NULL,
  `Mensagem` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `Contato`
--

INSERT INTO `Contato` (`Nome`, `Email`, `Telefone`, `Empresa`, `CPF_CNPJ`, `Endereco`, `Cidade`, `Estado`, `Assunto`, `Mensagem`) VALUES
('William', 'asdsdafsda1', 0, 'asaafsadfsadfsdafsdafsdf', '1231242341432', '', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 'PI', 'aaaaaaaaaaaaa', ''),
('William', 'asdsdafsda1', 0, 'asaafsadfsadfsdafsdafsdf', '1231242341432', 'aaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 'PI', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('William', 'asdsdafsda1', 2147483647, 'asaafsadfsadfsdafsdafsdf', '1231242341432', 'aaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 'PI', 'aaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
('William', 'william.bsi.mateus@gmail.com', 0, 'aaaaaaaaaaaaaaa', '1111111111', '', 'aaaaaaaaaaaaaaaa', 'PA', 'aaaaaaa', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
