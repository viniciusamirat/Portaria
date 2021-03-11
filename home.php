<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php
    session_start();
    if ((isset($_SESSION['login']) == false) and (isset($_SESSION['senha']) == false)){
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        header('location:index.html');
    }
    
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portaria</title>
    <link rel="stylesheet" href="estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body class="fundo">
    <table>
        <tr>
            <td>
                <div class="caixa">
                    <div style="position: absolute; top: 200px; left: 220px;">
                        <h2>Pesquisar Veículo</h2>
                    </div>
                    <form method="POST" action="consulta.php">
                        <div style="position: relative; top: 240px;">
                            <label>Placa do veículo</label>
                        </div>
                        <br>
                        <div style="position: relative; top: 230px;">
                            <input type="text" name="placa" placeholder="Ex: ABC0000">
                        </div>
                        <br><br>
                        <div style="position: relative; top: 200px;">
                            <input type="submit" value="Pesquisar" class="botaoForm">
                        </div>
                    </form>
                </div>
            </td>
            <td>
                <div class="caixa">
                    <div style="position: relative; top: 140px;">
                        <h2>Cadastrar Veículo</h2>
                    </div>
                    <form method="POST" action="cadastro.php">
                        <div style="position: relative; top: 150px;">
                            <label>Placa do veículo</label><br>
                        </div>
                        <div style="position: relative; top: 150px;">
                            <input type="text" name="placa" placeholder="Ex: ABC0000">
                        </div>
                        <br><br>
                        <div style="position: relative; top: 125px;">
                            <label>Nome do dono</div>
                            </label><br>

                            <div style="position: relative; top: 100px;">
                                <input type="text" name="nome" placeholder="Nome"><br><br>
                            </div>

                            <div style="position: relative; top: 100px;">
                                <label>Número da residência</label><br>
                            </div>

                            <div style="position: relative; top: 100px;">
                                <input type="number" name="casa" placeholder="Ex: 1800" min="0"><br><br>
                            </div>

                            <div style="position: relative; top: 100px;">
                                <input type="submit" value="Cadastrar" class="botaoForm">
                            </div>
                    </form>
                    </div>
            </td>
        </tr>
    </table>
    <div class="sair">
        <form method="POST" action="sair.php">
            <input type="submit" value="Sair" class="botao">
        </form>
    </div>
    
    
</body>

</html>