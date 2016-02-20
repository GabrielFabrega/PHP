<?php

include_once 'Classes/Medicos.php';
include_once 'Classes/Consultas.php';
include_once 'Classes/Pacientes.php';


// logica da consulta
$consultas = new Consultas;
$consultas->setNumeroConsulta();

$numeroConsulta = $consultas->getNumeroConsulta();

//logica do paciente
$pacientes = new Pacientes;
$pacientes->setNomePaciente('4Linux');
$pacientes->setNumeroConsulta($numeroConsulta);
$impressaoDoutor = $pacientes->getFicha();

//logica do medico
$medicos   = new Medicos;
$medicos->obtemFicha($impressaoDoutor);
$impressaoDoMedicoEmTela = $medicos->lerDadosPaciente();

?>

<html>
	<head>
		<title> ::: SISTEMA DE ATENDIMENTO 4LINUX ::: </title>
	</head>
	<body>
	    <table width="100%" border="1">
	      <tr>
	        <td> Senhor Medico, o senhor ira atender o paciente: </td>
         </tr>
         <tr>
           <td><?php echo $impressaoDoMedicoEmTela?> </td>
	    </table>
	</body>
</html>