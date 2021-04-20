create database lojas100;
	use lojas100;


create table funcionarios(
	id_func int not null,
	nome_func varchar(60) not null,
	cpf_func varchar(11) not null UNIQUE KEY,
	salario_func double not null,
	nivel_func varchar(50)
	
	);

desc funcionarios;


alter table funcionarios add column salariotot double;--Adicionei uma coluna do tipo double salariotot que irá receber meu cálculo de adicional--
 
alter table funcionarios add column tipoDeExtra varchar(11); --Adicionei uma coluna do tipo varchar tipoDeExtra que irá receber o tipo de adicional--

INSERT INTO funcionarios (nome_func, cpf_func, salario_func, nivel_func)
 VALUES
('João Carlos', '37355890816', 1200, 'admin'),
('Henrique Menezes', '12345678911', 1300, 'tecnico');


--Adicionei chave primária à tabela de usuários.

ALTER TABLE funcionarios ADD PRIMARY KEY (id_func);

--Adicionei auto incremento à tabela de usuários.

ALTER TABLE funcionarios MODIFY id_func int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;



select * from funcionarios;

