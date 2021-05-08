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
    <style>
        body {
          background-image: url(images/carro.jpg);
        }
    </style>
</head>
<body>
        <div class="container">
            <div class="align-items">
            <h1 class="text-center">LOCADORA DE VEÍCULOS</h1> 
            
            <!--<img src="images/carro.png" class="img-thumbnail" alt="carro">-->
            </div>
            <form action="reserva.php" method="GET">
                <div class="row">
                    <div class="col-md-4">
                        <h3>DADOS DO CLIENTE</h3><br>
                        <label for="nome">NOME</label><br>
                        <input type="text" name="nome" id="nome" class="form-control" required>
                    </div>
                    <div class="col-md-4" align-self-end><br><br><br>
                        <label for="telefone">TELEFONE</label>
                        <input type="text" name="tel" id="tel" class="form-control" required>
                    </div>
                    <div class="col-md-4"><br><br><br>
                        <label for="habilitacao">HABILITAÇÃO</label>
                        <select name="habilitacao" id="habilitacao" class="form-select">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                </div>
                <div class="row">
                    <div class="col-md-4"><br><br><br>
                        <label for="marca">MARCA</label>
                        <select name="marca" id="marca" class="form-select">
                            <option value="GOL">GOL</option>
                            <option value="ONIX">ONIX</option>
                            <option value="CRUZE">CRUZE</option>
                        </select>
                    </div>
                    <br>
                    <div class="col-md-4"><br>
                        <h3>DADOS DO VEÍCULO</h3>
                        <label for="modelo">MODELO</label>
                        <select name="modelo" id="modelo" class="form-select">
                        <option value="HATCH">HATCH</option>
                        <option value="SEDAN">SEDAN</option>
                        <option value="BASICO">BASICO</option>
                        </select>
                    </div>
                    <div class="col-md-4"><br><br><br>
                        <label for="cor">COR</label>
                        <select name="cor" id="cor" class="form-select">
                            <option value="PRETO">PRETO</option>
                            <option value="BRANCO">BRANCO</option>
                            <option value="PRATA">PRATA</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-4"><br><br><br>
                        <input type="text" class="form-control" placeholder="Placa"" name="placa"
                        id="placa" aria-label="Placa" size=54 maxlength="7">
                    </div>
                    <div class="col-md-4"><br><br><br>
                        <input type="text" class="form-control" placeholder="Ano" name="ano"
                        id="ano" aria-label="Ano" size=54 maxlength="5">
                    </div>
                    <div class="col-md-4"><br><br><br>
                        <input type="text" class="form-control" placeholder="Km" name="km"
                        id="km" aria-label="Km" size=54 maxlength="7">
                    </div>
                </div>
                
                <div class="row">
                        <div class="col-md-6"><br>
                                <label for="dataum">DATA ENTRADA</label>
                                <input type="date" class="form-control" name="dataum" id="dataum" placeholder="Data de reserva">
                        </div>
                        <div class="col-md-6"><br>
                                <label for="datadois">DATA SAÍDA</label>
                                <input type="date" class="form-control" name="datadois" id="datadois" placeholder="Data de reserva"> 
                        </div>
                </div>  
                    <br><br><br><br><br><br>
                    <div class="input-group">
                        <span class="input-group-text">R$</span>
                        <input type="text" class="form-control" name="valor" id="valor">
                        <span class="input-group-text">,00</span>
                    </div>
                    <div class="row">
                        <div class="col btn">
                            <button type="submit" class="">RESERVAR</button>
                        </div>
                    </div>
                </div> 
            </form>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>Nome:</th>
                        <th>Telefone:</th>
                        <th>Habilitação</th>
                        <th>Marca:</th>
                        <th>Modelo:</th>
                        <th>Cor:</th>
                        <th>Placa:</th>
                        <th>Ano:</th>
                        <th>Km:</th>
                        <th>Data de entrada:</th>
                        <th>Data de saída:</th>
                        <th>Valor:</th>
                    </tr>
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

                    foreach ($listaReservas as $reserva): ?>
                        <tr>
                            <td><?php echo $reserva['nome']; ?></td>
                            <td><?php echo $reserva['tel']; ?></td>
                            <td><?php echo $reserva['habilitacao']; ?></td>
                            <td><?php echo $reserva['marca']; ?></td>
                            <td><?php echo $reserva['modelo']; ?></td>
                            <td><?php echo $reserva['cor']; ?></td>
                            <td><?php echo $reserva['placa']; ?></td>
                            <td><?php echo $reserva['ano']; ?></td>
                            <td><?php echo $reserva['km']; ?></td>
                            <td><?php echo $reserva['dataum']; ?></td>
                            <td><?php echo $reserva['datadois']; ?></td>
                            <td><?php echo $reserva['valor']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
</body>

</html>