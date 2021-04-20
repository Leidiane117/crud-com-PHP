<?php

include 'connect.php';

$nome = "$_POST[nome]";

$cpf = "$_POST[cpf]";

$salario = "$_POST[salario]";

$nivel = "$_POST[nivel]";

$salariotot=$salario;

$tipoDeExtra="";
	

if($nivel=="administrativo")//cálculo que irá definir o tipo de salario total e também o tipo da comissão do funcionário
	{
		
	$salariotot=$salario*0.50;
	$tipoDeExtra="Hora Extra"; 
	}
	
	
	
	if($nivel=="técnico")
	{
	
	$salariotot=($salario*0.05);
	$tipoDeExtra="Comissão";	
	
	}




$cadastrar = "INSERT INTO funcionarios(nome_func, cpf_func, salario_func, nivel_func ,salariotot, tipoDeExtra)

VALUES ('$nome','$cpf','$salario','$nivel','$salariotot','$tipoDeExtra')";

 
	
	


if ($mysqli->query($cadastrar) === TRUE) {//teste se meus dados foram inseridos corretamente no banco de dados que criei, através do query(consulta no meu bd)

 header("location:SELECT.php");//redirecionar para a página SELECT, onde encontra meu relatório do banco de dados.

} else {

echo "Erro ao : " . $cadastrar . "<br>" . $mysqli->error;

}


	 
	


	
?>