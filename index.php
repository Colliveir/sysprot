<?php
include('conexao.php');
date_default_timezone_set('America/Sao_Paulo');
?>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>

<header class="bg-dark">
    <img class="logo" src="images/logoWhite.png" alt="logo">
    <a class="btn btn-primary btnheader" href="/sysprot" onclick="alert('Atualizado com sucesso!')">Atualizar</a>
    <a class="btn btn-primary btnheader" href="/sysprot/admin.php">Visualizar Protocolos</a>
</header>

<body>


    <div class="painel">
        <h3 class="text-light"><b>Gerar protocolo:</b></h3><br>
        <form method="post">
            <div class="row">
                <div class="col">
                    <input class="inputpainel" type="numb" name="numeroProtocolo" id="numprot" placeholder="Número do protocolo" required><br>
                    <input class="inputpainel" type="text" name="nome" placeholder="Nome" id="name" required><br>
                    <input class="inputpainel" type="text" name="tipoDoc" placeholder="Tipo do documento" required><br>
                </div>
                <div class="col">
                    <input class="inputpainel" type="date" name="dataDoc" id="date" required><br>
                    <textarea class="inputpainel" type="text" name="comentario" id="obs" placeholder="Comentário (opcional)"></textarea><br>
                </div>
            </div><br>
            <input class="btn btn-primary submit" name="acao" type="submit" onclick="alert('Enviado com sucesso!')">
        </form>

    </div>


</body>

<footer class="homefooter bg-dark">
    <p>Developed by &copy;Bruno Collange - V1.<img src="images/logoWhite.png"></p>
</footer>

</html>