-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Set-2019 às 01:35
-- Versão do servidor: 10.3.16-MariaDB
-- versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE `administrador` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'usuario', 'usuario@email.com', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `texto` varchar(255) NOT NULL,
  `data_noticia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id`, `titulo`, `autor`, `texto`, `data_noticia`) VALUES
(9, 'lorem ipson', 'unknow', 'Lorem ipsum dolor sit amet  consectetur adipiscing elit  Vivamus et congue quam  a faucibus sapien  Sed a ligula auctor  tincidunt eros et  rhoncus nisl  Suspendisse elit erat  luctus nec aliquam quis  condimentum sit amet purus  In sit amet cursus mi  Du', '2019-09-04'),
(10, 'lorem ipson', 'unknow', 'Lorem ipsum dolor sit amet  consectetur adipiscing elit  Vivamus et congue quam  a faucibus sapien  Sed a ligula auctor  tincidunt eros et  rhoncus nisl  Suspendisse elit erat  luctus nec aliquam quis  condimentum sit amet purus  In sit amet cursus mi  Du', '2019-09-04'),
(17, 'lorem ipson', 'unknow', 'Interdum et malesuada fames ac ante ipsum primis in faucibus  Ut urna velit  tristique nec ullamcorper dignissim  mattis sit amet dolor  Maecenas ut sem auctor  aliquam velit quis  bibendum ex  Nulla pharetra velit vel interdum tristique  Curabitur dapibu', '2019-08-07'),
(18, 'Eleição Representante ', 'Yuri', 'Lorem ipsum dolor sit amet consectetur adipiscing elit cursus purus senectus, fusce fringilla urna curae ullamcorper rutrum tempor donec velit, sem nisl himenaeos maecenas rhoncus platea cubilia tincidunt posuere. Fames faucibus mus himenaeos dignissim si', '2019-09-06'),
(19, 'yuridf', 'jackson', 'Lorem ipsum dolor sit amet consectetur adipiscing elit cursus purus senectus  fusce fringilla urna curae ullamcorper rutrum tempor donec velit  sem nisl himenaeos maecenas rhoncus platea cubilia tincidunt posuere  Fames faucibus mus himenaeos dignissim si', '2019-09-02');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
