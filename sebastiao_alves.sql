-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 16-Maio-2023 às 19:36
-- Versão do servidor: 8.0.30
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sebastiao_alves`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `id` int NOT NULL,
  `imagem_autor` varchar(200) NOT NULL,
  `texto_autor` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`id`, `imagem_autor`, `texto_autor`) VALUES
(1, 'http://localhost/sebastiao_alves/uploads/Autor/conteudo.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla. Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Dolorum eaque minus similique nemo obcaecati temporibus, nulla quis consequatur neque nostrum facere eum vitae repellendus quas sed odio tenetur ipsa porro ab? Et quam soluta possimus harum aperiam vel autem illo fugiat molestiae voluptatibus id expedita nostrum nisi dignissimos quisquam neque sunt praesentium, exercitationem repellat quia amet nesciunt consequatur. Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla.Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla. Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Dolorum eaque minus similique nemo obcaecati temporibus, nulla quis consequatur neque nostrum facere eum vitae repellendus quas sed odio tenetur ipsa porro ab? Et quam soluta possimus harum aperiam vel autem illo fugiat molestiae voluptatibus id expedita nostrum nisi dignissimos quisquam neque sunt praesentium, exercitationem repellat quia amet nesciunt consequatur. Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla.Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus?</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carousel`
--

CREATE TABLE `carousel` (
  `id` int NOT NULL,
  `posicao` int NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `observacao` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT 'Vazio',
  `descricao` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `imagem_desktop` varchar(200) NOT NULL,
  `imagem_mobile` varchar(200) NOT NULL,
  `link_botao` varchar(500) NOT NULL,
  `ultima_atualizacao` varchar(200) NOT NULL,
  `id_usuario_editou` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `carousel`
--

INSERT INTO `carousel` (`id`, `posicao`, `titulo`, `observacao`, `descricao`, `imagem_desktop`, `imagem_mobile`, `link_botao`, `ultima_atualizacao`, `id_usuario_editou`) VALUES
(1, 1, 'Senhora do Amor e da Guerra', 'Novidade', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga?', 'http://localhost/sebastiao_alves/public/Imagens/Desktop/cabecalho1.jpg', 'http://localhost/sebastiao_alves/public/Imagens/Mobile/cabecalho1.jpg', 'http://localhost/sebastiao_alves/livros.php?livro=1', '12:29:31 - 16/05/2023', 2),
(2, 4, 'O Caracol Estrábico', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga? ', 'http://localhost/sebastiao_alves/public/Imagens/Desktop/cabecalho2.jpg', 'http://localhost/sebastiao_alves/public/Imagens/Mobile/cabecalho2.jpg', 'http://localhost/sebastiao_alves/livros.php?livro=3', '23:25:54 - 15/05/2023', 2),
(3, 2, 'O Coleccionador de Amnésias', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga? \r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga? Cumque possimus natus in enim inventore! Ut molestias nesciunt atque deserunt ipsam, quas numquam assumenda eum vero exercitationem. Earum praesentium, rem et commodi, dolor voluptatibus officia voluptas blanditiis fugiat nostrum maiores, dolorem tenetur ad quis! Esse eaque ad, et aperiam minima iste non nulla impedit quis incidunt suscipit! Asperiores aperiam tenetur quia dolores nemo itaque repellendus rem optio voluptas? \r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga? ', 'http://localhost/sebastiao_alves/public/Imagens/Desktop/cabecalho3.jpg', 'http://localhost/sebastiao_alves/public/Imagens/Mobile/cabecalho3.jpg', 'http://localhost/sebastiao_alves/livros.php?livro=4', '13:05:38 - 16/05/2023', 1),
(4, 3, 'O Velho que pensava que fugia', '', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga? \r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga? Cumque possimus natus in enim inventore! Ut molestias nesciunt atque deserunt ipsam, quas numquam assumenda eum vero exercitationem. Earum praesentium, rem et commodi, dolor voluptatibus officia voluptas blanditiis fugiat nostrum maiores, dolorem tenetur ad quis! Esse eaque ad, et aperiam minima iste non nulla impedit quis incidunt suscipit! Asperiores aperiam tenetur quia dolores nemo itaque repellendus rem optio voluptas? \r\n\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga? ', 'http://localhost/sebastiao_alves/public/Imagens/Desktop/cabecalho4.jpg', 'http://localhost/sebastiao_alves/public/Imagens/Mobile/cabecalho4.jpg', 'http://localhost/sebastiao_alves/livros.php?livro=2', '23:25:25 - 15/05/2023', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `contactos`
--

CREATE TABLE `contactos` (
  `id` int NOT NULL,
  `telefone` varchar(200) NOT NULL,
  `morada` varchar(500) NOT NULL,
  `codigo_postal` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `horario` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `contactos`
--

INSERT INTO `contactos` (`id`, `telefone`, `morada`, `codigo_postal`, `email`, `horario`) VALUES
(1, '+351 123 456 789', 'Lorem ipsum dolor sit amet, 12', '1234-543 Lorem', 'lorem@lorem.com', 'De Segunda a Sexta das 00:00h às 00:00h');

-- --------------------------------------------------------

--
-- Estrutura da tabela `destaques`
--

CREATE TABLE `destaques` (
  `id` int NOT NULL,
  `id_livro` int NOT NULL,
  `observacao` varchar(100) NOT NULL,
  `estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `destaques`
--

INSERT INTO `destaques` (`id`, `id_livro`, `observacao`, `estado`) VALUES
(1, 1, 'Novidade', 1),
(2, 2, 'Mais Vendido', 1),
(3, 3, 'Em promoção', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `home`
--

CREATE TABLE `home` (
  `id` int NOT NULL,
  `imagem_autor` varchar(500) NOT NULL,
  `texto_ultimos_livros` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `home`
--

INSERT INTO `home` (`id`, `imagem_autor`, `texto_ultimos_livros`) VALUES
(1, 'http://localhost/sebastiao_alves/public/Imagens/Desktop/FOTO-editada.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla. Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Dolorum eaque minus similique nemo obcaecati temporibus, nulla quis consequatur neque nostrum facere eum vitae repellendus quas sed odio tenetur ipsa porro ab? Et quam soluta possimus harum aperiam vel autem illo fugiat molestiae voluptatibus id expedita nostrum nisi dignissimos quisquam neque sunt praesentium, exercitationem repellat quia amet nesciunt consequatur. Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla.Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus?</p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imprensa`
--

CREATE TABLE `imprensa` (
  `id` int NOT NULL,
  `titulo` varchar(500) NOT NULL,
  `data_publicacao` varchar(200) NOT NULL,
  `imagem` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `texto` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `imprensa`
--

INSERT INTO `imprensa` (`id`, `titulo`, `data_publicacao`, `imagem`, `texto`) VALUES
(1, 'Lançamento | Senhora do amor e da guerra', '2020-06-17', 'http://localhost/sebastiao_alves/uploads/Imprensa/conteudo-imprensa1.jpg', ''),
(2, 'Lançamento do livro \"O Velho que pensava que fugia\"', '2017-12-06', 'http://localhost/sebastiao_alves/public/Imagens/Desktop/conteudo-imprensa2.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga? Cumque possimus natus in enim inventore! Ut molestias nesciunt atque deserunt ipsam, quas numquam assumenda eum vero exercitationem. Earum praesentium, rem et commodi, dolor voluptatibus officia voluptas blanditiis fugiat nostrum maiores, dolorem tenetur ad quis! Esse eaque ad, et aperiam minima iste non nulla impedit quis incidunt suscipit! Asperiores aperiam tenetur quia dolores nemo itaque repellendus rem optio voluptas?</p>'),
(10, 'Revista Psicologia na Actualidade', '2021-01-01', 'http://localhost/sebastiao_alves/uploads/Imprensa/psicologia.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla. Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Dolorum eaque minus similique nemo obcaecati temporibus, nulla quis consequatur neque nostrum facere eum vitae repellendus quas sed odio tenetur ipsa porro ab? Et quam soluta possimus harum aperiam vel autem illo fugiat molestiae voluptatibus id expedita nostrum nisi dignissimos quisquam neque sunt praesentium, exercitationem repellat quia amet nesciunt consequatur. Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla.Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla. Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Dolorum eaque minus similique nemo obcaecati temporibus, nulla quis consequatur neque nostrum facere eum vitae repellendus quas sed odio tenetur ipsa porro ab? Et quam soluta possimus harum aperiam vel autem illo fugiat molestiae voluptatibus id expedita nostrum nisi dignissimos quisquam neque sunt praesentium, exercitationem repellat quia amet nesciunt consequatur. Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla.Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus?</p>'),
(12, 'LANÇAMENTO DO LIVRO «O COLECCIONADOR DE AMNÉSIAS», DA AUTORIA DE SEBASTIÃO ALVES, QUE CEDEU OS DIREITOS DE AUTOR À ALZHEIMER PORTUGAL', '2014-11-15', 'http://localhost/sebastiao_alves/uploads/Imprensa/lancamento-amnesias.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla. Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Dolorum eaque minus similique nemo obcaecati temporibus, nulla quis consequatur neque nostrum facere eum vitae repellendus quas sed odio tenetur ipsa porro ab? Et quam soluta possimus harum aperiam vel autem illo fugiat molestiae voluptatibus id expedita nostrum nisi dignissimos quisquam neque sunt praesentium, exercitationem repellat quia amet nesciunt consequatur. Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla.Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla. Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Dolorum eaque minus similique nemo obcaecati temporibus, nulla quis consequatur neque nostrum facere eum vitae repellendus quas sed odio tenetur ipsa porro ab? Et quam soluta possimus harum aperiam vel autem illo fugiat molestiae voluptatibus id expedita nostrum nisi dignissimos quisquam neque sunt praesentium, exercitationem repellat quia amet nesciunt consequatur. Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla.Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus?</p>'),
(13, 'Crítica ao livro \"Senhora do Amor e da Guerra\"', '2023-05-16', 'http://localhost/sebastiao_alves/uploads/Livros/livro1.jpg', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla. Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Dolorum eaque minus similique nemo obcaecati temporibus, nulla quis consequatur neque nostrum facere eum vitae repellendus quas sed odio tenetur ipsa porro ab? Et quam soluta possimus harum aperiam vel autem illo fugiat molestiae voluptatibus id expedita nostrum nisi dignissimos quisquam neque sunt praesentium, exercitationem repellat quia amet nesciunt consequatur. Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla.Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus?</p><p><a href=\"https://www.goodreads.com/book/show/53336080-senhora-do-amor-e-da-guerra\">https://www.goodreads.com/book/show/53336080-senhora-do-amor-e-da-guerra</a></p>');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

CREATE TABLE `livros` (
  `id` int NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `detalhes` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ultima_edicao` varchar(200) NOT NULL,
  `id_usuario_editou` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `descricao`, `imagem`, `detalhes`, `ultima_edicao`, `id_usuario_editou`) VALUES
(1, 'Senhora do Amor e da Guerra', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga? Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga? Cumque possimus natus in enim inventore! Ut molestias nesciunt atque deserunt ipsam, quas numquam assumenda eum vero exercitationem. Earum praesentium, rem et commodi, dolor voluptatibus officia voluptas blanditiis fugiat nostrum maiores, dolorem tenetur ad quis! Esse eaque ad, et aperiam minima iste non nulla impedit quis incidunt suscipit! Asperiores aperiam tenetur quia dolores nemo itaque repellendus rem optio voluptas? Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga?</p>', 'http://localhost/sebastiao_alves/public/Imagens/Desktop/livro1.jpg', '<p>Edição: Junho de 2020&nbsp;</p><p>Dimensões: 150 x 230 x 10 mm&nbsp;</p><p>Encadernação: Capa mole&nbsp;</p><p>Páginas: 240</p>', '19:31:17 - 08/05/2023', 2),
(2, 'O Velho que pensava que fugia', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla. Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Dolorum eaque minus similique nemo obcaecati temporibus, nulla quis consequatur neque nostrum facere eum vitae repellendus quas sed odio tenetur ipsa porro ab? Et quam soluta possimus harum aperiam vel autem illo fugiat molestiae voluptatibus id expedita nostrum nisi dignissimos quisquam neque sunt praesentium, exercitationem repellat quia amet nesciunt consequatur. Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla.Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus?</p>', 'http://localhost/sebastiao_alves/public/Imagens/Desktop/livro-conteudo4.jpg', '<p>Edição: Junho de 2020&nbsp;</p><p>Dimensões: 150 x 230 x 10 mm&nbsp;</p><p>Encadernação: Capa mole&nbsp;</p><p>Páginas: 240</p>', '17:12:19 - 06/05/2023', 1),
(3, 'O Caracol Estrábico', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla. Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Dolorum eaque minus similique nemo obcaecati temporibus, nulla quis consequatur neque nostrum facere eum vitae repellendus quas sed odio tenetur ipsa porro ab? Et quam soluta possimus harum aperiam vel autem illo fugiat molestiae voluptatibus id expedita nostrum nisi dignissimos quisquam neque sunt praesentium, exercitationem repellat quia amet nesciunt consequatur. Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla.Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus?</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla. Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Dolorum eaque minus similique nemo obcaecati temporibus, nulla quis consequatur neque nostrum facere eum vitae repellendus quas sed odio tenetur ipsa porro ab? Et quam soluta possimus harum aperiam vel autem illo fugiat molestiae voluptatibus id expedita nostrum nisi dignissimos quisquam neque sunt praesentium, exercitationem repellat quia amet nesciunt consequatur. Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Ipsam animi debitis libero accusamus, similique eligendi aspernatur inventore rerum provident sint est, fugit nihil reiciendis voluptatibus molestias totam natus sapiente, ab dolorem blanditiis earum tempore! Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero, nulla.Deserunt dolore iste perferendis asperiores laudantium explicabo optio, dicta vero blanditiis, delectus tenetur temporibus?</p>', 'http://localhost/sebastiao_alves/public/Imagens/Desktop/livro-conteudo3.jpg', '<p>Edição: Junho de 2020&nbsp;</p><p>Dimensões: 150 x 230 x 10 mm&nbsp;</p><p>Encadernação: Capa mole&nbsp;</p><p>Páginas: 240</p>', '13:19:15 - 16/05/2023', 2),
(4, 'O Colecionador de Amnésias', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga? Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga? Cumque possimus natus in enim inventore! Ut molestias nesciunt atque deserunt ipsam, quas numquam assumenda eum vero exercitationem. Earum praesentium, rem et commodi, dolor voluptatibus officia voluptas blanditiis fugiat nostrum maiores, dolorem tenetur ad quis! Esse eaque ad, et aperiam minima iste non nulla impedit quis incidunt suscipit! Asperiores aperiam tenetur quia dolores nemo itaque repellendus rem optio voluptas? Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur obcaecati tenetur libero fuga! Nobis, at! Labore reprehenderit magni necessitatibus molestiae totam laborum soluta adipisci quo? Quam rerum totam unde laudantium laboriosam vero temporibus voluptas, rem excepturi quisquam vitae repudiandae inventore, provident tenetur facilis! Quibusdam, eius sed. Expedita, officiis facilis aliquid at saepe, aperiam amet quis enim laudantium minus voluptate quisquam repellat maiores optio fuga?</p>', 'http://localhost/sebastiao_alves/public/Imagens/Desktop/livro-conteudo2.jpg', '', '13:21:12 - 16/05/2023', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `redes`
--

CREATE TABLE `redes` (
  `id` int NOT NULL,
  `instagram` varchar(500) NOT NULL,
  `facebook` varchar(500) NOT NULL,
  `linkedin` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `redes`
--

INSERT INTO `redes` (`id`, `instagram`, `facebook`, `linkedin`) VALUES
(1, 'https://www.instagram.com', 'https://www.facebook.com', 'https://www.linkedin.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int NOT NULL,
  `nome` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL,
  `ultimo_acesso` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `login`, `senha`, `ultimo_acesso`) VALUES
(1, 'Sebastião Alves', 'sebastiao', '$2y$10$09x/eTWSV2k9S7LEhJyojuo.cgY5EBJC5nBBT767j8kBjdVid6Vo2', '13:05:30 - 16/05/2023'),
(2, 'Ana Rocha', 'ana', '$2y$10$rwv9FM2voES7Haa4IuacaO.dSWzG8HdBH5L5q27NevZME2g3iuTCu', '20:33:45 - 16/05/2023');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `carousel`
--
ALTER TABLE `carousel`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `destaques`
--
ALTER TABLE `destaques`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `imprensa`
--
ALTER TABLE `imprensa`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `livros`
--
ALTER TABLE `livros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `redes`
--
ALTER TABLE `redes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `carousel`
--
ALTER TABLE `carousel`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `destaques`
--
ALTER TABLE `destaques`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `home`
--
ALTER TABLE `home`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `imprensa`
--
ALTER TABLE `imprensa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `livros`
--
ALTER TABLE `livros`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `redes`
--
ALTER TABLE `redes`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
