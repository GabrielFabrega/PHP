<?php

class Medicos {
	public $dadosDoPaciente;
	
	public function obtemFicha($dadosDoPaciente = null){
		$this->dadosDoPaciente = $dadosDoPaciente;
	}
	
	public function lerDadosPaciente(){
		return $this->dadosDoPaciente;
	}
} 