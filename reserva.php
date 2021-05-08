<?php
if (isset($_GET['nome']) && $_GET['nome'] != '') {
    $reserva = [];

    $reserva['nome'] = $_GET['nome'];

    if (isset($_GET['tel'])) {
        $reserva['tel'] = $_GET['tel'];
    } else {
        $reserva['tel'] = '';
    }

    if (isset($_GET['habilitacao'])) {
        $reserva['habilitacao'] = $_GET['habilitacao'];
    } else {
        $reserva['habilitacao'] = '';
    }

    if (isset($_GET['marca'])) {
        $reserva['marca'] = $_GET['marca'];
    } else {
        $reserva['marca'] = '';
    }

    if (isset($_GET['modelo'])) {
        $reserva['modelo'] = $_GET['modelo'];
    } else {
        $reserva['modelo'] = '';
    }

    if (isset($_GET['cor'])) {
        $reserva['cor'] = $_GET['cor'];
    } else {
        $reserva['cor'] = '';
    }

    if (isset($_GET['placa'])) {
        $reserva['placa'] = $_GET['placa'];
    } else {
        $reserva['placa'] = '';
    }

    if (isset($_GET['ano'])) {
        $reserva['ano'] = $_GET['ano'];
    } else {
        $reserva['ano'] = '';
    }

    if (isset($_GET['km'])) {
        $reserva['km'] = $_GET['km'];
    } else {
        $reserva['km'] = '';
    }
    if (isset($_GET['dataum'])) {
        $reserva['dataum'] = $_GET['dataum'];
    } else {
        $reserva['dataum'] = '';
    }

    if (isset($_GET['datadois'])) {
        $reserva['datadois'] = $_GET['datadois'];
    } else {
        $reserva['datadois'] = '';
    }

    if (isset($_GET['valor'])) {
        $reserva['valor'] = $_GET['valor'];
    } else {
        $reserva['valor'] = '';
    }
}

include "conexao.php";

if(isset($reserva)){
$sqlInserir = "INSERT INTO tb_reservado(nome, tel, habilitacao, marca, modelo, cor, placa, ano, km, dataum, datadois, valor
) VALUES(
    '{$reserva['nome']}',
    '{$reserva['tel']}',
    '{$reserva['habilitacao']}',
    '{$reserva['marca']}',
    '{$reserva['modelo']}',
    '{$reserva['cor']}',
    '{$reserva['placa']}',
    '{$reserva['ano']}',
    '{$reserva['km']}',
    '{$reserva['dataum']}',
    '{$reserva['datadois']}',
    '{$reserva['valor']}'
);";



/*print_r ($sqlInserir);


exit();*/
# Para execução
mysqli_query ($conexao , $sqlInserir);
}
include "index.php";
?>