
<?php

include 'connect.php';

$id="$_GET[id]";//método get para buscar as informações do meu bd, já preenchidas no meu formulário index/cadastro

$nome = "$_GET[nome]";

$cpf = "$_GET[cpf]";

$salario = "$_GET[salario]";

$nivel = "$_GET[nivel]";

$salariotot="";

$tipoDeExtra="";

if($nivel=="administrativo")
	{
		
	$salariotot=$salario*0.50;
	$tipoDeExtra="Hora Extra"; 
	}
	
	
	
	if($nivel=="técnico")
	{
	
	$salariotot=($salario*0.05);
	$tipoDeExtra="Comissão";	
	
	}


$alterar= "UPDATE funcionarios SET nome_func='$nome',cpf_func= '$cpf',salario_func='$salario',nivel_func='$nivel',
salariotot='$salariotot',tipoDeExtra='$tipoDeExtra' WHERE id_func = '$id'"; //query que irá executar a atualização do meu bd através do novo preenchimento do formulário


   
if ($mysqli->query($alterar) === TRUE) {//se a query for executada perfeitamente:

 echo "Dados Atualizados com sucesso";//mensagem que aparece na tela/browser
 header("location:SELECT.php");//redirecionar para a página SELECT, onde encontra meu relatório do banco de dados.

} else {

echo "Erro ao : " . $alterar . "<br>" . $mysqli->error;//senão, método que retorna mensagem de erro.

}

?>