<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$db = "aula_php";

$conexao = mysqli_connect($servidor, $usuario, $senha, $db);

$query = "SELECT * FROM PACIENTES";
$consulta_pacientes = mysqli_query($conexao, $query);

$query = "SELECT * FROM imagens";
$consulta_img = mysqli_query($conexao, $query);