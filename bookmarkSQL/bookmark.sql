-- SQL Dump corrigido

-- Banco de dados: `bookmark`
DROP DATABASE IF EXISTS `bookmark`;
CREATE DATABASE `bookmark`;
USE `bookmark`;

-- Estrutura para tabela `livros`
DROP TABLE IF EXISTS `livros`;
CREATE TABLE `livros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `site` varchar(255) NOT NULL,
  `nota` int(11) NOT NULL,
  `data_adicionado` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Despejando dados para a tabela `livros`
INSERT INTO `livros` (`id`, `titulo`, `site`, `nota`, `data_adicionado`, `status`) VALUES
(3, 'teeste2', 'site2', 5, '2024-09-18', 'Planejo ler'),
(9, 'Teste_final', 'Site1', 100, '2024-09-20', 'Lendo');

-- AUTO_INCREMENT de tabela `livros`
ALTER TABLE `livros` AUTO_INCREMENT=10;
