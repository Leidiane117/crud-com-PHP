
<html lang="pt-br">
    <head>
        <title>Relatório</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<a href="index1.php">Adicionar novo Cadastro</a>
		<link rel="stylesheet" type="text/css" href="css/table3.css">
		
	</head>
	
    <body>
	
	<h1 align="center">Relatório de Funcionários</h1>
		<table align="center"><!--crio minha tabela html com as células que serão o cabeçalho da minha tabela relatório php!-->
						<tr>
							<td class="d"><strong>Id</strong></td><!--class i(coluna) para estilizar em css!-->
							<td><strong>Nome<strong></td>
							<td><strong>CPF<strong></td>
							<td class='i'><strong>Salário </strong></td>
							<td class="i"><strong>Nível</strong></td>
							<td class="i"><strong>Tipo de Extra</strong></td>
							<td class="i"><strong>Salário base +Extras</strong></td>
							<td class="i"><strong>Data da última Atualização</strong></td>
							<td><strong>Filtro</strong></td>
							<!--crio uma coluna para armazenar o filtro alterar e excluir!-->
						</tr>
			
			<?php

			include "connect.php";
			
			$sql = "SELECT * FROM funcionarios";//variável que irá receber a consulta bd da tabela usuários//
			$result = $mysqli->query($sql);//crio uma variavel que irá receber a conexão com meu bd e o metodo query(que executa o comando da minha variavel sql)//
			
			if ($result->num_rows > 0) //função num_rows retorna um numero de linhas através do parametro  result(se a consulta for maior que 0,deve se imprimir o resultado da consulta//
			{
		        
				while( $row = $result->fetch_assoc())//crio uma variavel que irá receber a função internta fetch_assoc que retornar um array de linhas e joga o conteudo dessas linhas no result(parâmetro)//
				{
					$id = $row['id_func'];//com minhas variáveis já definidadas na pagina de salvar os dados, aqui digo que irão receber a variável $row,(atribuição por referência,e  aqui separo os dados, onde cada dado deve ser recebido e armazenado //
					$nome = $row['nome_func'];
					$cpf = $row['cpf_func'];
					$salario= $row['salario_func'];
					$nivel = $row['nivel_func'];
					$tipoDeExtra=$row['tipoDeExtra'];
					$salariotot=$row['salariotot'];	
					$data= date ("d/m/Y");//função interna do php para mostrar data	
					$salarioCom=$salariotot+$salario;//variável que irá receber meu cálculo do salario base junto com as extras/comissão
					echo "<table align='center'>
							<tr>
								<td class='d'>$id</td>
								<td>$nome</td>
								<td>$cpf</td>
								<td class='i'>$salario</td>
								<td class='i'>$nivel</td>
								<td class='i'>$tipoDeExtra</td>
								<td class='i'>$salarioCom</td>
								<td class='i'>$data</td>
								<td><a href='pageAlterar.php?id_func=$id'/a>[alterar] <a href='pageExcluir.php?id_func=$id'a>[excluir]</td>
							</tr>
						</table>";// aqui crio uma table com as celulas que irão receber minhas variaveis que já recebram a $row como referência e agora enquanto houver dados eles irão para minha tabela e serão mostrados na tela--
				}
			} else	{
				
				echo "0 resultados";//se caso não houver dados na consulta//
	
			        }		

			?>
			    
	
		 </table>   
	</body>
</html>
<?
/*function extra(){
return $salario+$extras;

}

function extra($valorvenda,$salario){
	
	return $salario+$extras;
	
}
	
	  	   
	  


















