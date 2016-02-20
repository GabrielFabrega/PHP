<?php

class Pacientes{
	public $numeroMinhaConsulta;
	public $nomePaciente;
	
	public function setNumeroConsulta($consulta = null){
		if (!is_null($consulta)){
			$this->numeroMinhaConsulta = $consulta;
		} else {
			return false;
		}
	}
	
	public function setNomePaciente($nomePaciente = null){
		if (!is_null($nomePaciente)){
			$this->nomePaciente = $nomePaciente;
		} else {
			return false;
		}
	}
	
	public function getFicha(){
		return "O atendimento e para o paciente:  {$this->nomePaciente}
		        e o numero do atendimento e o {$this->numeroMinhaConsulta} ";
	}
	
}