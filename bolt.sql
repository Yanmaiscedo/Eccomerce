-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30/06/2025 às 13:43
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bolt`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(12, 'BOLT1', 'Sports Shoes', 'With a clean vamp, tonal stitch details throughout, and a unique formstripe finish, the all new sports shoes fits the needs of multiple running consumers by offering an athletic and a lifestyle look.', 5000, 1, 5000, '2025-06-28 21:05:24', 'sjobs@apple.com'),
(13, 'BOLT3', 'Sports Band', 'The Sports Band collection features highly polished stainless steel and space black stainless steel cases. The display is protected by sapphire crystal. And there is a choice of three different leather bands.', 1000, 1, 1000, '2025-06-28 21:05:24', 'sjobs@apple.com'),
(14, 'BOLT2', 'Cap', 'A sleek, tonal stitched cap for runners. The plain texture and unique design will help runners to concentrate more on running and less on their hair. The combbination of casual and formal look is just brilliant.', 200, 1, 200, '2025-06-28 21:05:40', 'sjobs@apple.com'),
(15, 'BOLT4', 'Sports Shoes', 'mais um', 9000, 1, 9000, '2025-06-29 03:20:24', 'sjobs@apple.com'),
(16, 'BOLT2', 'Cap', 'A sleek, tonal stitched cap for runners. The plain texture and unique design will help runners to concentrate more on running and less on their hair. The combbination of casual and formal look is just brilliant.', 200, 1, 200, '2025-06-29 03:20:24', 'sjobs@apple.com'),
(17, 'BOLT10', 'Sports Shoes', 'mais um', 9000, 1, 9000, '2025-06-29 03:20:24', 'sjobs@apple.com'),
(18, 'BOLAVOLEI1', 'Bola de Volei', 'Uma bela bola de volei, para jogar com amigos e familia...', 45, 1, 45, '2025-06-29 22:05:34', 'sjobs@apple.com'),
(19, 'BONE2', 'Boné Nike', 'Boné da nike, para ficar no estilo e no conforto ao mesmo tempo...', 60, 1, 60, '2025-06-29 22:05:34', 'sjobs@apple.com'),
(20, 'BOLAVOLEI1', 'Bola de Volei', 'Uma bela bola de volei, para jogar com amigos e familia...', 45, 1, 45, '2025-06-30 02:43:30', 'sjobs@apple.com'),
(21, 'KITELASTICO1', 'Kit de Elástico', 'Um Kit de elásticos resistentes, que vão lhe auxiliar no seu alongamento, melhorando sua condição física...', 350, 1, 350, '2025-06-30 02:43:30', 'sjobs@apple.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, 'BOLAVOLEI1', 'Bola de Volei', 'Uma bela bola de volei, para jogar com amigos e familia...', 'bolavolei.jpg', 18, 45.00),
(2, 'BONE1', 'Boné Aquatic', 'Boné bonito, para esportes aquáticos e outros, possui muita resistência...', 'bone.jpg', 15, 50.00),
(3, 'KITELASTICO1', 'Kit de Elástico', 'Um Kit de elásticos resistentes, que vão lhe auxiliar no seu alongamento, melhorando sua condição física...', 'elastico.jpg', 29, 350.00),
(4, 'BOLAFUTEBOL1', 'Bola de Futebol', 'Uma bola de futebol, para bater aquela bolinha de lei, a fim de enturmar com os amigos da melhor forma...', 'bolafutebol.jpg', 25, 90.00),
(5, 'BOLT5', 'Tênis de Corrida', 'Um tênis para correr e não parar mais. Para você que quer fugir dos seus problemas...', 'teniscorrida.jpg', 50, 320.00),
(6, 'BONE2', 'Boné Nike', 'Boné da nike, para ficar no estilo e no conforto ao mesmo tempo...', 'bone2.jpg', 29, 60.00),
(7, 'ELASTICO2', 'Elástico para Alongamento', 'Um elástico para fazer seus alongamentos pela manha, para ter um dia melhor...', 'elastico2.jpg', 25, 80.00),
(8, 'BOLAVOLEI2', 'Bola Penalty', 'Bola de vôlei de praia da marca Penalty, para você levar em viajem e jogar com seus familiares...', 'bolavolei2.jpg', 30, 70.00),
(9, 'TENISCORRIDA2', 'Tênis de Corrida Nike', 'Um tênis para correr e não parar mais. Para você que quer fugir dos seus problemas, so que da nike...', 'teniscorrida2.jpg', 50, 230.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(1, 'Steve', 'Jobs', 'Infinite Loop', 'California', 95014, 'sjobs@apple.com', 'steve', 'user'),
(2, 'Admin', 'Webmaster', 'Internet', 'Electricity', 101010, 'admin@admin.com', 'admin', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
