
<?php

include 'connect.php';

$id="$_GET[id_func]";

$sql = 'SELECT * FROM funcionarios WHERE id_func="'.$id.'"';

$result = $mysqli->query($sql);//crio uma variavel que irá receber a conexão com meu bd e o metodo query(que executa o comando da minha variavel sql)//
		
$row = $result->fetch_assoc();//

$excluir= "DELETE FROM funcionarios WHERE id_func='$id'";

$result = $mysqli->query($excluir);

if($result==true){echo " Registro Excluído com Sucesso";}

echo "<br>";

echo  " <a href='SELECT.php'>Relatório de Funcionários</a>";


$mysqli -> close();// fechar o banco de dados	
?>

