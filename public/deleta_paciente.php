<?php

include 'db.php';

$ID_PACIENTE = $_GET['ID_PACIENTE'];

$query = "DELETE FROM PACIENTES WHERE ID_PACIENTE = $ID_PACIENTE";

mysqli_query($conexao, $query);

header('location:index.php?pagina=pacientes');
