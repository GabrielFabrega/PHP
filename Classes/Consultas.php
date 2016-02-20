<?php

class Consultas{
	public $numeroConsulta;
	
	public function getNumeroRandConsulta(){
		return rand();
    }
    
    public function setNumeroConsulta(){
    	$this->numeroConsulta = $this->getNumeroRandConsulta();
    }
    
    public function getNumeroConsulta(){
    	return $this->numeroConsulta;
    }
}