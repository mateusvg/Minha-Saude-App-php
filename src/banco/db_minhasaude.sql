
--
-- Database: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT '0',
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  `cpf` varchar(20) NOT NULL DEFAULT '0',
  `rua` varchar(250) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cep` VARCHAR(10) NOT NULL,
  `cidade` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`, `cpf`, `rua`, `estado`, `cep`, `cidade`) VALUES
(1, 'teste', 'teste@teste.com', '202cb962ac59075b964b07152d234b70', 1, 1, '2016-02-14 00:00:01', '2016-02-20 21:58:01', '12345678', 'nomerua', 'nomeestado', '30350690', 'BH'),



-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-02-19 00:00:00', NULL),
(2, 'Colaborador', '2016-02-19 00:00:00', NULL),
(3, 'Cliente', '2016-02-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `medicamentos`
--

CREATE TABLE IF NOT EXISTS `medicamentos`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `medName` varchar(220) NOT NULL,
  `labName` varchar(520) NOT NULL,
  `medType` varchar(50) NOT NULL,
  `price` varchar(250) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
)


--
-- Extraindo dados da tabela `niveis_acessos`
--


INSERT INTO `medicamentos` (`id`, `medName`, `labName`, `medType`, `price`) VALUES
(1, 'paracetamol', 'Roche', 'Genérico', 15.00);

-- --------------------------------------------------------


