<?php

include 'config/config.php';// estou incluindo a pasta/arquivo config do php;

// orientado a objeto

$mysqli = new mysqli($host, $usuario, $senha, $banco, $porta);//minhas variáveis que receberam os dados de conexão;

$mysqli->set_charset("utf8");

if ($mysqli->connect_error) {
	
    die ('Erro de conexão ('. $mysqli->connect_error. ')'
	
            . $mysqli->connect_error);// erro de conexão e mostrar o erro;
}

if($log){//testo minha variável de teste de conexão//

	echo '<p> Conexão bem Sucedida ' .$mysqli->host_info. '</p>';// informação do meu ip;
	
	echo '<p> Servidor '. $mysqli->server_info. '</p>';// informação do meu servidor;
	
}


?>














