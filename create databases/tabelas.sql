-- crio um banco de dados--


CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(25) NOT NULL,
  `nivel` varchar(25) NOT NULL,
  `data` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--Dados para tabela de usuários--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `nivel`) VALUES
(1, 'João Carlos', 'joaocarlos@gmail.com', '123', 'admin'),
(2, 'Henrique', 'henry@hotmail.com.br', '123', 'tecnico');

Adicionar chave primária à tabela de usuários.

ALTER TABLE `usuarios` ADD PRIMARY KEY (`id`);

Adicionar auto incremento à tabela de usuários.

ALTER TABLE `usuarios` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;



create database visitante;
 use visitante;

--Crio uma tabela com nome usuarios--
 CREATE TABLE usuarios (
            nome VARCHAR(30) NOT NULL,
            email VARCHAR(30) NOT NULL,
            senha VARCHAR(30) NOT NULL,
            nivel VARCHAR(50)
            
            );
			
INSERT INTO usuarios(nome, email, senha, nivel)-- parâmetro de inserção de dados na minha tabela visitante--

VALUES ('$nome','$email','$senha','$nivel')-- variáveis que irão receber as informações--
			
			
			
desc usuarios;--descrição da tabela--		

SELECT * from usuarios;--seleciona a tabela e mostra os dados que foram inseridos--
id int(11) not null auto_increment,








