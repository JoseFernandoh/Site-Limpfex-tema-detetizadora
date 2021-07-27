-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jun-2021 às 00:46
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `limpflex`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `ID_ADM` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `User` varchar(20) NOT NULL,
  `Pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`ID_ADM`, `Nome`, `User`, `Pass`) VALUES
(1, 'ADM', 'ADM', '12345'),
(2, 'teste', 'teste', '1234'),
(3, 'nova', 'nova', '1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereço`
--

CREATE TABLE `endereço` (
  `Endereco_ID` int(11) NOT NULL,
  `Cpf` int(15) NOT NULL,
  `Cep` int(8) NOT NULL,
  `Estado` varchar(20) NOT NULL,
  `Cidade` varchar(20) NOT NULL,
  `Logradouro` varchar(20) NOT NULL,
  `Numero` varchar(6) NOT NULL,
  `Complemento` varchar(5) NOT NULL,
  `Ponto de Referencia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `endereço`
--

INSERT INTO `endereço` (`Endereco_ID`, `Cpf`, `Cep`, `Estado`, `Cidade`, `Logradouro`, `Numero`, `Complemento`, `Ponto de Referencia`) VALUES
(2, 2, 65715000, 'MA', 'Lago da Pedra', 'teste', '112', 'A', 'Atras da escola'),
(6, 3, 65715, 'MA', 'Lago da Pedra', 'LA', '009', 'appp', 'Atras da escola');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orçamento`
--

CREATE TABLE `orçamento` (
  `Orcamento_ID` int(11) NOT NULL,
  `Cpf` int(15) NOT NULL,
  `data` date NOT NULL,
  `Empresarial ou Industrial` varchar(50) NOT NULL,
  `Serviço` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `orçamento`
--

INSERT INTO `orçamento` (`Orcamento_ID`, `Cpf`, `data`, `Empresarial ou Industrial`, `Serviço`) VALUES
(1, 3, '0211-02-12', 'empreasa', 'Afastamento'),
(2, 1, '2021-06-15', 'empresa', 'Afastamento,Desinsetização,Descupinização'),
(3, 1, '2021-06-15', 'industrial', 'Desratização,Higienização,Termonebulizador,Sanitização'),
(5, 3, '2021-06-15', 'emrpesa', 'Descupinização');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Id_Usuario` int(11) NOT NULL,
  `Nome` varchar(30) NOT NULL,
  `Sobrenome` varchar(30) NOT NULL,
  `Cpf` int(15) NOT NULL,
  `Data` date NOT NULL,
  `Telefone` int(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Senha` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Id_Usuario`, `Nome`, `Sobrenome`, `Cpf`, `Data`, `Telefone`, `Email`, `Senha`) VALUES
(1, 'teste', '', 1, '2001-12-12', 0, 'teste@teste.com', '12345678'),
(2, 'novo', 'vei', 2, '2001-12-12', 0, 'novo@novo.com', '123456789'),
(3, 'teste', 'teste', 3, '2991-12-12', 121212, 'teste@teste.com.br', '12345678'),
(4, 'teste2', 'teste2', 0, '2001-12-12', 0, 'teste1@teste.com.br', '12345678'),
(5, 'teste1', 'felipe', 4, '0122-02-12', 0, 'teste2@teste.com.br', '1212');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`ID_ADM`);

--
-- Índices para tabela `endereço`
--
ALTER TABLE `endereço`
  ADD PRIMARY KEY (`Endereco_ID`);

--
-- Índices para tabela `orçamento`
--
ALTER TABLE `orçamento`
  ADD PRIMARY KEY (`Orcamento_ID`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Id_Usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `ID_ADM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `endereço`
--
ALTER TABLE `endereço`
  MODIFY `Endereco_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `orçamento`
--
ALTER TABLE `orçamento`
  MODIFY `Orcamento_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
