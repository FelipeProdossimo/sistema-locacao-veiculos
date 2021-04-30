<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locação de veiculos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
    crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <style>
        body {
          background-color: hotpink;
        }
    </style>
</head>

<body>
    <div class="container">
            <div class="text-center">
                <img src="../images/car.png" alt="img-pessoa" class="rounded-circle" alt="pessoas">
            </div>
        <div class="container">
            <div class="text-align-center">
                <h1>LOCADORA DE VEÍCULOS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="Nome" name="nome"
            id="nome" aria-label="Nome" size=10 maxlength="23">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Telefone" name="tel" id="tel" aria-label="Telefone" size=10 maxlength="23"> 
            </div>
        </div>
        <form class="row">
            <div class="col">
                <select class="form-select" name="habilitacao" id="habilitacao" aria-label="Default select example">
                    <option selected>HABILITAÇÃO</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    <option value="4">D</option>
                    <option value="5">E</option>
                </select>
            </div>
        <br>
        <h3>
            DADOS DO VEICULO
        </h3>
        <form class="row g-3 text-center">
            <div class="col">
                <select class="form-select" name="marca" id="marca" aria-label="Default select example">
                    <option selected>MARCA</option>
                    <option value="1">GOL</option>
                    <option value="2">ONIX</option>
                    <option value="3">CRUZE</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select" name="modelo" id="modelo" aria-label="Default select example">
                    <option selected>MODELO</option>
                    <option value="1">HATCH</option>
                    <option value="2">SEDAN</option>
                    <option value="3">BASICO</option>
                </select>
            </div>
            <div class="col">
                <select class="form-select" name="cor" id="cor" aria-label="Default select example" >
                    <option selected>COR</option>
                    <option value="1">PRETO</option>
                    <option value="2">BRANCO</option>
                    <option value="3">PRATA</option>
                </select>
            </div>
        </form>
            <br>
            <br>

        <form class="row g-3 text-center">
            <div class="col-auto">
                <input type="text" class="form-control" placeholder="Placa"" name="placa"
                id="placa" aria-label="Placa" size=54 maxlength="7">
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" placeholder="Ano" name="ano"
                id="ano" aria-label="Ano" size=54 maxlength="4">
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" placeholder="Km" name="km"
                id="km" aria-label="Km" size=54 maxlength="7">
            </div>
        </form>
        
        <div class="form-group">
            <div class="col-sm-10">
                <h2>Data de entrada: </h2>
                    <div class="input-group date data_formato" data-date-format="dd-mm-yyyy HH:ii:ss">
                        <input type="text" class="form-control" name="dataum" id="dataum" placeholder="Data de reserva">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>
            </div>  
            <div class="col-sm-10">
                    <h2>Data de saída: </h2>
                    <div class="input-group date data_formato02" data-date-format="dd-mm-yyyy HH:ii:ss">
                        <input type="text" class="form-control" name="datadois" id="datadois" placeholder="Data de reserva">
                        <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                        </span>
                    </div>  
            </div>
        </div>
        <br>
        <div class="input-group">
            <span class="input-group-addon">R$</span>
            <input type="text" class="form-control" name="valor" id="valor">
            <span class="input-group-addon">,00</span>
        </div>
        <br>
            <button type="submit" class="btn btn-default">RESERVAR</button>
        </div>

    <table class="table">
        <thead>
            <ul class="list-group">
                <li class="list-group-item">Nome:</li>
                <li class="list-group-item">Telefone:</li>
                <li class="list-group-item">Habilitação</li>
                <li class="list-group-item">Marca:</li>
                <li class="list-group-item">Modelo:</li>
                <li class="list-group-item">Cor:</li>
                <li class="list-group-item">Placa:</li>
                <li class="list-group-item">Ano:</li>
                <li class="list-group-item">Km:</li>
                <li class="list-group-item">Data de entrada:</li>
                <li class="list-group-item">Data de saída:</li>
                <li class="list-group-item">Valor:</li>
            </ul>
        </thead>
        <tbody>
            <?php
            include "conexao.php";

            $sqlBusca = "SELECT * FROM tb_reservado";
            $reservado = mysqli_query($conexao, $sqlBusca);

            $listaReservas = [];


            //laço para buscar o resultado, cada vez que fizer vai colocar outras tarefas (trazer esses resultados)
            while ($reserva = mysqli_fetch_assoc($reservado)) {
                $listaReservas[] = $reserva;
            }

            foreach ($listaReservas as $reserva) : ?>
                <ul>
                    <li><?php echo $reserva['nome']; ?></li>
                    <li><?php echo $reserva['tel']; ?></li>
                    <li><?php echo $reserva['habilitacao']; ?></li>
                    <li><?php echo $reserva['marca']; ?></li>
                    <li><?php echo $reserva['modelo']; ?></li>
                    <li><?php echo $reserva['cor']; ?></li>
                    <li><?php echo $reserva['placa']; ?></li>
                    <li><?php echo $reserva['ano']; ?></li>
                    <li><?php echo $reserva['km']; ?></li>
                    <li><?php echo $reserva['dataum']; ?></li>
                    <li><?php echo $reserva['datadois']; ?></li>
                    <li><?php echo $reserva['valor']; ?></li>
                </ul>
            <?php endforeach; ?>
        </tbody>
    </table>
















    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datetimepicker.min.js"></script>
    <script src="js/locales/bootstrap-datetimepicker.pt-BR.js"></script>
    <script type="text/javascript">
        $('.data_formato').datetimepicker({
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1,
            language: "pt-BR",
            startDate: '+0d'
        });
        $('.data_formato02').datetimepicker({
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1,
            language: "pt-BR"
            //startDate: '+0d'
        });
    </script>
</body>

</html>