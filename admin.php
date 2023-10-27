<?php
include('conexao.php');
$consulta = "SELECT * FROM protocolos";
$con = $mysqli->query($consulta) or die($mysqli->error);
$sql = "SELECT * from protocolos";
date_default_timezone_set('America/Sao_Paulo');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
</head>

<header class="bg-dark">
    <img class="logo" src="images/logoWhite.png" alt="logo">
    <a class="btn btn-primary btnheader" href="/sysprot/admin.php" onclick="alert('Atualizado com sucesso!')">Atualizar</a>
    <a class="btn btn-primary btnheader" href="/sysprot">Início</a>
</header>


<br>

<body>

    <div class="all"> <!-- all -->
        <table class="table table-bordered border-primary">
            <tr style="text-align: center;">
                <td class="border border, p-3 mb-2 bg-primary text-white">Número Protocolo</td>
                <td class="border border, p-3 mb-2 bg-primary text-white">Nome</td>
                <td class="border border, p-3 mb-2 bg-primary text-white">Tipo Doc.</td>
                <td class="border border, p-3 mb-2 bg-primary text-white">Data Doc.</td>
                <td class="border border, p-3 mb-2 bg-primary text-white">Comentário</td>
                <td class="border border, p-3 mb-2 bg-primary text-white">Data e Hora do Registro</td>
            </tr>
            <?php while ($dado = $con->fetch_array()) { ?>
                <tr>
                    <td class="p-3 mb-2 bg-light"><?php echo $dado["numeroProtocolo"]; ?></td>
                    <td class="p-3 mb-2 bg-light"><?php echo $dado["nome"]; ?></td>
                    <td class="p-3 mb-2 bg-light"><?php echo $dado["tipoDoc"]; ?></td>
                    <td class="p-3 mb-2 bg-light"><?php echo date('d/m/Y', strtotime($dado["dataDoc"])); ?></td>
                    <td class="p-3 mb-2 bg-light"><?php echo $dado["comentario"]; ?></td>
                    <td class="p-3 mb-2 bg-light"><?php echo  date('d/m/Y H:i:s', strtotime($dado["momento_registro"])); ?></td>
                </tr>

            <?php
            }
            ?>
        </table>

    </div> <!-- end all -->

</body>

<footer class="homefooter bg-dark">
    <p>Developed by &copy;Bruno Collange - V1.<img src="images/logoWhite.png"></p>
</footer>

</html>