<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perguntas_model extends CI_Model {
	
	public function index() 
	{
		return $this->db->get("pergunta")->result_array();
	}

    public function cadastrar($idformulario){

		$idformulario = $this->db->get_where('formulario', array('idformulario' => $idformulario));
		return  $idformulario->row_array();	
		
	}

	
	public function store($perguntas) 
	{
		$this->db->insert("pergunta", $perguntas);
		$codigo_perguntas = $this->db->insert_id();
			return $codigo_perguntas;
	}

    public function form($idformulario){

		return $this->db->get_where('formulario', array('idformulario' => $idformulario))->row_array();	
		
	}

	
}