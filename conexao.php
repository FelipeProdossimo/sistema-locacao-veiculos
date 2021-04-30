<?php
# CONEXÃO COM O BANCO DE DADOS

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'bd_reservas';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

if(!$conexao){
    die("<br><h3>Não foi possivel conectar! Reveja o código. Erro: " . mysqli_connect_error());
}

?>