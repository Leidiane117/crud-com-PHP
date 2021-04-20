<!DOCTYPE html>
<!--Formulário para cadastro de novo usuário-->
<html lang="pt-br">
    <head>
        <title>Cadastro de Funcionário</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--responsividade quando a tela diminuir, for diminuido as letras também!-->
	     <a href="SELECT.php">Relatório de Funcionários</a>
		 <link rel="stylesheet" href="css/form2.css">
    </head>
    <body>
	
	<h1 align="center">Novo Cadastro</h1>
	

	<form  action="save.php" method="POST">
		    <h2><img src="imagens/cadastrar.jpg" width="150"><h2/>
			<label> Nome: <input type="text" name="nome" value="" placeholder="Insira o nome completo" required/> </label><br><br>
			<label> CPF: <input type="text" name="cpf" value=""  placeholder="000.000.000.00" required/><label><br><br>
			<label> Salário: <input type="text" name="salario" value="1200"></label><br><br>
		<fieldset >
			 <legend>Nível:</legend><br><label> 
			<label><input class="f" type="radio" name="nivel" value="administrativo"/>Administrativo</label><br><br>	
			<label><input class="f" type="radio" name="nivel" value="técnico"/>Técnico</label><br><br>
	    </fieldset><br>
			<label><button class="sub" type="submit" name="cadastrar" value="cadastrar"/>Cadastrar</label>
			<label><button class="res" type="reset" name="limpar" value="limpar"/>Limpar Dados</label>
		</form>
	
	
	
	   
    </body>
	
	
</html>