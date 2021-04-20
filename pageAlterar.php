<?php


include 'connect.php'; 

$id="$_GET[id_func]";

$sql = 'SELECT * FROM funcionarios WHERE id_func="'.$id.'"';

$result = $mysqli->query($sql);//crio uma variavel que irá receber a conexão com meu bd e o metodo query(que executa o comando da minha variavel sql)//
		
$row = $result->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Alterar Dados</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--responsividade quando a tela diminuir, for diminuido as letras também!-->
	     <a href="SELECT.php">Relatório de Funcionários</a>
        <link rel="stylesheet" href="css/form2.css">
    </head>
    <body>
	<h1 align="center">Alterar Cadastro</h1>
	
		<form  action="saveAlterar.php" method="GET">
		
			<h2><img src="imagens/editar.jpg" width="150"><h2/>
			
			<label><input type="hidden"  value="<?php echo $row['id_func'];?>" name="id"/></label><br>
			
			<label> Nome: <input type="text" value="<?php echo $row['nome_func'];?>"name="nome"/></label><br>
			
			<label> CPF: <input type="text"  value="<?php echo $row['cpf_func'];?>"name="cpf"/></label><br>
			
			<label> Salário: <input type="text"  value="<?php echo $row['salario_func'];?>"name="salario"/></label><br>
			
			<fieldset >
			 <legend>Nível:</legend><br><label> 
				<label><input class="f" type="radio" name="nivel" value="administrativo"/>Administrativo</label><br><br>	
				<label><input class="f" type="radio" name="nivel" value="técnico"/>Técnico</label><br><br>				
			</fieldset><br>
			<label><button class="sub" type="submit" name="alterar" value="cadastrar"/>Alterar</label>
			<label><button class="res" type="reset" name="limpar" value="limpar"/>Limpar Dados</label>
		
		</form>
	
	
	
	   
    </body>
	
	
</html>







	
