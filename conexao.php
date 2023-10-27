<?php
date_default_timezone_set('America/Sao_Paulo');
$usuario = 'root';
$senha = '';
$database = 'sysprot';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if ($mysqli->error) {
  die ("Falha ao conectar ao banco de dados: ".$mysqli->error);
}

if (isset($_POST['acao'])) {
  $numeroProtocolo = $_POST['numeroProtocolo'];
  $nome = $_POST['nome'];
  $tipoDoc = $_POST['tipoDoc'];
  $dataDoc = $_POST['dataDoc'];
  $comentario = $_POST['comentario'];
  $momento_registro = date('Y-m-d H:i:s');
  $sql = $mysqli->prepare("INSERT INTO `protocolos` VALUES (null,?,?,?,?,?,?)");
  $sql->execute(array($numeroProtocolo,$nome,$tipoDoc,$dataDoc,$comentario,$momento_registro));
}