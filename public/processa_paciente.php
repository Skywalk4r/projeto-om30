<?php

include 'db.php';

$NOME_PACIENTE = $_POST['NOME_PACIENTE'];
$NOME_MAE = $_POST['NOME_MAE'];
$DT_NASC = $_POST['DT_NASC'];
$CPF = $_POST['CPF'];
$CNS = $_POST['CNS'];
$ENDERECO = $_POST['ENDERECO'];

$query  = "INSERT INTO PACIENTES(NOME_PACIENTE, NOME_MAE, DT_NASC, CPF, CNS, ENDERECO) 
           VALUES('$NOME_PACIENTE', '$NOME_MAE', '$DT_NASC', '$CPF', '$CNS', '$ENDERECO')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=pacientes');
