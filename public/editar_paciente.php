<?php

include 'db.php';

$ID_PACIENTE = $_POST['ID_PACIENTE'];
$NOME_PACIENTE = $_POST['NOME_PACIENTE'];
$NOME_MAE = $_POST['NOME_MAE'];
$DT_NASC = $_POST['DT_NASC'];
$CPF = $_POST['CPF'];
$CNS = $_POST['CNS'];
$ENDERECO = $_POST['ENDERECO'];

$query = "UPDATE PACIENTES SET NOME_PACIENTE='$NOME_PACIENTE', 
                               NOME_MAE='$NOME_MAE', 
                               DT_NASC='$DT_NASC',
                               CPF='$CPF', 
                               CNS='$CNS', 
                               ENDERECO='$ENDERECO' 
            WHERE ID_PACIENTE = $ID_PACIENTE";

#print($query);
mysqli_query($conexao, $query);

header('location:index.php?pagina=pacientes');