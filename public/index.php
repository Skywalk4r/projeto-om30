<?php

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página

if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}else{
	$pagina = 'home';
}

switch($pagina){
	case 'pacientes': include 'views/pacientes.php'; break;
	case 'inserir_paciente': include 'views/inserir_paciente.php'; break;
	default : include 'views/home.php'; break;
}

/*
if($pagina == 'pacientes'){
	include 'views/pacientes.php';
}
elseif($pagina == 'inserir_paciente'){
	include 'views/inserir_paciente.php';
}
else{
	include 'views/home.php';
}
*/

# Rodapé
include 'footer.php';
