-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jul-2021 às 10:06
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sgte`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `usuario` varchar(255) COLLATE utf8_bin NOT NULL,
  `senha` varchar(255) COLLATE utf8_bin NOT NULL,
  `adm` int(1) NOT NULL,
  `hash` varchar(32) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `usuario`, `senha`, `adm`, `hash`) VALUES
(1, 'admin', 'admin', 1, '77777777777777777777777777777777'),
(2, 'jeff', '12345678', 1, 'JHPFXLvfEP6bR0xYgVLSTxr1wrK1AGr8'),
(3, 'admin2', '12345678', 1, '4MK0cue4RFAWNvZoEPDPWV9nFxnLsU46');

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

CREATE TABLE `escola` (
  `id` int(11) NOT NULL,
  `polos` varchar(255) COLLATE utf8_bin NOT NULL,
  `nome_de_escola` varchar(255) COLLATE utf8_bin NOT NULL,
  `nome_do_diretor` varchar(255) COLLATE utf8_bin NOT NULL,
  `localidade` varchar(255) COLLATE utf8_bin NOT NULL,
  `tipo_de_ensino` varchar(255) COLLATE utf8_bin NOT NULL,
  `usuario` varchar(255) COLLATE utf8_bin NOT NULL,
  `senha` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `escola`
--

INSERT INTO `escola` (`id`, `polos`, `nome_de_escola`, `nome_do_diretor`, `localidade`, `tipo_de_ensino`, `usuario`, `senha`) VALUES
(2, '3', 'EEEP Summoners Rift', 'João', 'Fortaleza', 'Fundamental', 'EEEP Summoners Rift', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `frequencia`
--

CREATE TABLE `frequencia` (
  `id` int(11) NOT NULL,
  `escola` varchar(255) COLLATE utf8_bin NOT NULL,
  `nome_motorista` varchar(255) COLLATE utf8_bin NOT NULL,
  `turno` varchar(255) COLLATE utf8_bin NOT NULL,
  `presenca` varchar(255) COLLATE utf8_bin NOT NULL,
  `data_da_frequencia` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `frequencia`
--

INSERT INTO `frequencia` (`id`, `escola`, `nome_motorista`, `turno`, `presenca`, `data_da_frequencia`) VALUES
(9, 'EEEP Summoners Rift', 'Adão Alvaro', 'manhã', 'Presença', '12/07/2021'),
(12, 'EEEP Summoners Rift', 'Breno', 'tarde', 'Presença', '12/07/2021');

-- --------------------------------------------------------

--
-- Estrutura da tabela `monitor`
--

CREATE TABLE `monitor` (
  `id` int(11) NOT NULL,
  `nome_do_motorista` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `monitor`
--

INSERT INTO `monitor` (`id`, `nome_do_motorista`, `telefone`) VALUES
(1, 'Eva', '859901109333');

-- --------------------------------------------------------

--
-- Estrutura da tabela `motorista`
--

CREATE TABLE `motorista` (
  `id` int(11) NOT NULL,
  `nome_do_motorista` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `motorista`
--

INSERT INTO `motorista` (`id`, `nome_do_motorista`, `telefone`) VALUES
(1, 'Adão Alvaro', '859901109330'),
(2, 'Breno', '859901109377');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trem`
--

CREATE TABLE `trem` (
  `id` int(11) NOT NULL,
  `turno` varchar(255) COLLATE utf8_bin NOT NULL,
  `rota` varchar(255) COLLATE utf8_bin NOT NULL,
  `escola` varchar(255) COLLATE utf8_bin NOT NULL,
  `motorista` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `trem`
--

INSERT INTO `trem` (`id`, `turno`, `rota`, `escola`, `motorista`) VALUES
(1, 'Manhã', 'Araboiaba - Pedra Aguda', 'EEEP Dr. Salomão Alves de Moura', 'Adão Alvaro'),
(2, 'Tarde', 'Araboiaba - Pedra Aguda', 'EEEP Dr. Salomão Alves de Moura', 'Adão Alvaro'),
(3, 'tarde', 'Araboiaba - Pedra Aguda', 'EEEP Summoners Rift', 'Breno'),
(4, 'manhã', 'Araboiaba - Pedra Aguda', 'EEEP Summoners Rift', 'Adão Alvaro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `id` int(11) NOT NULL,
  `rota` varchar(255) COLLATE utf8_bin NOT NULL,
  `turno` varchar(255) COLLATE utf8_bin NOT NULL,
  `placa` varchar(255) COLLATE utf8_bin NOT NULL,
  `combustivel` varchar(255) COLLATE utf8_bin NOT NULL,
  `tipo_de_veiculo` varchar(255) COLLATE utf8_bin NOT NULL,
  `ano` varchar(255) COLLATE utf8_bin NOT NULL,
  `quilometragem` varchar(255) COLLATE utf8_bin NOT NULL,
  `tipo_de_empresa` varchar(255) COLLATE utf8_bin NOT NULL,
  `propietario` varchar(255) COLLATE utf8_bin NOT NULL,
  `motorista` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`id`, `rota`, `turno`, `placa`, `combustivel`, `tipo_de_veiculo`, `ano`, `quilometragem`, `tipo_de_empresa`, `propietario`, `motorista`) VALUES
(1, 'Araboiaba - Pedra Aguda', 'Manhã', 'JKV', 'Diesel', 'Ônibus', '2008', '13KM', 'Terceirizada', 'Joamir Pedrosa', 'Adão Alvaro');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `escola`
--
ALTER TABLE `escola`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `frequencia`
--
ALTER TABLE `frequencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `monitor`
--
ALTER TABLE `monitor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `motorista`
--
ALTER TABLE `motorista`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `trem`
--
ALTER TABLE `trem`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `escola`
--
ALTER TABLE `escola`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `frequencia`
--
ALTER TABLE `frequencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `monitor`
--
ALTER TABLE `monitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `motorista`
--
ALTER TABLE `motorista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `trem`
--
ALTER TABLE `trem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
