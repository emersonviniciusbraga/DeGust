<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alternativas_model extends CI_Model {
	
	public function index() 
	{
		return $this->db->get("alternativa")->result_array();
	}

    public function cadastrar($idpergunta){

		return $this->db->get_where('pergunta', array('idpergunta' => $idpergunta))->row_array();	
		
	}

	
	public function store($alternativas) 
	{
		$this->db->insert("alternativa", $alternativas);
		$codigo_alternativas = $this->db->insert_id();
			return $codigo_alternativas;
	}

    public function pergunta($idpergunta){

		return $this->db->get_where('pergunta', array('idpergunta' => $idpergunta))->row_array();	
		
	}
}